<?php 
    session_start();

    include '../../WebClientPrint.php';
    use Neodynamic\SDK\Web\WebClientPrint;
    use Neodynamic\SDK\Web\Utils;
    use Neodynamic\SDK\Web\DefaultPrinter;
    use Neodynamic\SDK\Web\InstalledPrinter;
    use Neodynamic\SDK\Web\ClientPrintJob;

    // Process request
    // Generate ClientPrintJob? only if clientPrint param is in the query string
    $urlParts = parse_url($_SERVER['REQUEST_URI']);


    $idTienda       = $_SESSION["TIENDA_ID"];
    $idDoc          = $_GET["idDoc"];
    $tiraReimpre    = $_GET["tiraReimpre"];
    $indTipoDoc     = $_GET["indTipoDoc"];


    // Se abra la conexion a la BD.
    require '../../_includes/ctrl_openDB.php';
    // factura

    require  'model/modelfacturas.php';
    $model   = new modelfacturas($con->db);
    $headerDocu  = $model->buscarEncFactImp($idTienda, $idDoc); 
    $detalleDocu = $model->buscarDetFactArti($idDoc);       
    //Create ESC/POS commands for sample receipt
    $esc        = '0x1B'; //ESC byte in hex notation
    $newLine    = '0x0A'; //LF byte in hex notation
    $comillas   = '0x22';
    $comilla    = '0x27';
    $numeral    = '0x23';
    $arroba     = '0x40';
    $enieM      = '0xA5'; // Ñ 
    $aT         = '0xA0'; // á 
    $eT         = '0x82'; // é
    $iT         = '0xA1'; // í
    $oT         = '0xA2'; // ó
    $uT         = '0xA3'; // ú
    $enie       = '0xA4'; // ñ
    $uDiere     = '0x81'; // ü
    $slash      = '0x2F'; // simbolo slash
    $amp        = '0x26'; // AMPERSON
    $porcent    = '0x25'; // %
    $AT			= '0x8F'; // Á
    $ET			= '0x90'; // É
    $IT			= '0x92'; // Í
    $OT			= '0xA2'; // ó
    $UT			= '0x9A'; // Ú

    $simbolos    = array('#','@','"','Ñ','á','é','í','ó','ú','ñ','ü','/','&','%','Á','É','Í','Ó','Ú',"'");
    $newsimbolos = array($numeral,$arroba,'',$enieM,$aT,$eT,$iT,$oT,$uT,$enie,$uDiere,$slash,$amp,$porcent,$AT,$ET,$IT,$OT,$UT,$comilla);
        
    $cent       = 'a'.'0x01';
    $left       = 'a'.'0x00';

    $cmds  = '';
    if ($tiraReimpre != ''){ $cmds .= $tiraReimpre;$cmds .= $newLine;};
    $cmds .= 'Factura de Contado: ';
	$cmds .= $esc . '!' . '0x38'; //Emphasized + Double-height  mode selected (ESC ! (8 + 16 )) 24 dec => 18 hex
	$cmds .= $numeral;
    $cmds .= $headerDocu[0]["numDocu"];
	$cmds .= $esc . '!' . '0x01'; //Character font B selected (ESC ! 1) Character font A selected (ESC ! 0)

    $cmds .= $newLine;

    $cmds .= "Fecha:".$headerDocu[0]["fecDocu"];
    $cmds .= $newLine;
    $cmds .= "Cliente:".str_replace($simbolos,$newsimbolos,$headerDocu[0]["nombre"]);
    $cmds .= $newLine;
    $cmds .= "Vendedor:".str_replace($simbolos,$newsimbolos,$headerDocu[0]["nombreVendedor"]);
    $cmds .= $newLine;
          
    $cmds .= "-   -   -   -   -   -   -   -   -   -  -";
    $cmds .= $newLine;
                  //           10        20        30        40
                  //  1234567890123456789012345678901234567890
                  //   
            //$cmds .= "Codigo   Cant    Precio    Des     Total";
    $cmds .= "Codigo    Cant     Precio Des      Total";
                  //  123456789.1234.1234567890.123.1234567890
                     "            SubTotal:".substr('           ',1,12-strlen($headerDocu[0]["subTotal"])).$headerDocu[0]["subTotal"];
                  //            3423  512,584.10
    $cmds .= $newLine;
            // recorrer el arrglo de articulos para agregarlo a la factura  

    foreach ($detalleDocu as $dato){
    	$cmds .= $dato["codArti"].substr('         ',1,9-strlen($dato["codArti"])).' ';
        $cmds .= substr('     ',1,4-strlen($dato["cantidad"])).$dato["cantidad"].' ';
        $cmds .= substr('         ',1,10-strlen($dato["PrecioVenta"])).$dato["PrecioVenta"].' ';
        $cmds .= substr('   ',1,3-strlen($dato["PorceDesc"])).$dato["PorceDesc"].' ';
        $cmds .= substr('         ',1,10-strlen($dato["PrecioTotal"])).$dato["PrecioTotal"];
        $cmds .= $newLine;
        $cmds .= str_replace($simbolos,$newsimbolos,substr($dato["desArticulo"],0,40));
        // $cmds .= substr($dato["desArticulo"],0,40);
        $cmds .= $newLine . $newLine;         
    }


                  // "Codigo    Cant     Precio Des      Total";
                  //  123456789.1234.1234567890.123.1234567890
                  //                       Descuento:123456789 
            
            // $cmds .= $newLine;            
    $cmds .= "                Monto Total:".substr('           ',1,12-strlen($headerDocu[0]["montototal"])).$headerDocu[0]["montototal"];
    $cmds .= $newLine;            
    $cmds .= "                  Descuento:".substr('           ',1,12-strlen($headerDocu[0]["descuento"])).$headerDocu[0]["descuento"];
    $cmds .= $newLine;
    $cmds .= "                   SubTotal:".substr('           ',1,12-strlen($headerDocu[0]["subTotal"])).$headerDocu[0]["subTotal"];
    $cmds .= $newLine;
    $cmds .= "                  Imp.Venta:".substr('           ',1,12-strlen($headerDocu[0]["impuesto"])).$headerDocu[0]["impuesto"];
    $cmds .= $newLine;
    $cmds .= "                 Gran Total:".substr('           ',1,12-strlen($headerDocu[0]["Total"])).$headerDocu[0]["Total"];

       
    
?>
<!DOCTYPE html>
<html>
<head>
    <title>Imprimir Factura</title>
</head>
<body>

    <input type="hidden" name="sid"   id="sid"   value="<?php echo session_id(); ?>" />
    <input type="hidden" name="cmds"  id="cmds"  value="<?php echo $cmds; ?>" />
    <input type="hidden" name="idTienda"  id="idTienda"  value="<?php echo $idTienda; ?>" />

    <div style="width:100%">
         
    	<input type="button" id="imprime" autofocus name="imprime"   style="margin-left:25%; margin-top:25%;font-size:48px" onclick="javascript:jsWebClientPrint.print('cmds=' + $('#cmds').val()+'&idTienda=' + $('#idTienda').val());window.location.href ='index.php';" value="Presionar Enter para regresar ..." />
        
    </div>
    <!-- Add Reference to jQuery at Google CDN -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js" type="text/javascript"></script>

    <?php
    //Specify the ABSOLUTE URL to the php file that will create the ClientPrintJob object
    //In this case, this same page
    echo WebClientPrint::createScript(Utils::getRoot().'/CRM-SATEC/sInventario/facturas/PrintFactura.php')
    ?>
       

</body>
</html>

