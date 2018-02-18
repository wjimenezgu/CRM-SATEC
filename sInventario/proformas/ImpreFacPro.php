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

    // $indTipoDoc puede ser: F:factura, P:proforma
    if ($indTipoDoc == 'F') {
        // factura
        $titDocu = 'Factura de Contado: ';
        require  'model/modelcobrar.php';
        $model   = new modelcobrar($con->db);
        $headerDocu  = $model->buscarEncFact($idTienda, $idDoc); 
        $detalleDocu = $model->buscarDetFactArti($idDoc);        
    }else{
        // proforma
        $titDocu = 'Proforma: ';
        require 'model/modelproformas.php';
        $model          = new modelproformas($con->db);
        $headerDocu     = $model->buscarEncProforma($idTienda,$idDoc);
        $detalleDocu    = $model->buscarDetProfArti($idDoc);
    };

    $datosTienda = $model->getDatosTienda($idTienda);
    $lineasPie   = $model->buscarLineasPie($indTipoDoc);       


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
    $AT		= '0x8F'; // Á
    $ET		= '0x90'; // É
    $IT		= '0x92'; // Í
    $OT		= '0xA2'; // ó
    $UT		= '0x9A'; // Ú

    // $simbolos    = array('#','@','"','Ñ','á','é','í','ó','ú','ñ','ü','/','&','%');
    // $newsimbolos = array($numeral,$arroba,'',$enieM,$aT,$eT,$iT,$oT,$uT,$enie,$uDiere,$slash,$amp,$porcent);
    $simbolos    = array('#','@','"','Ñ','á','é','í','ó','ú','ñ','ü','/','&','%','Á','É','Í','Ó','Ú',"'");
    $newsimbolos = array($numeral,$arroba,'',$enieM,$aT,$eT,$iT,$oT,$uT,$enie,$uDiere,$slash,$amp,$porcent,$AT,$ET,$IT,$OT,$UT,$comilla);
    
    $cent       = 'a'.'0x01';
    $left       = 'a'.'0x00';

            $cmds = $esc . "@"; //Initializes the printer (ESC @)

            $cmds .= $esc . '!' . '0x38'; //Emphasized + Double-height + Double-width mode selected (ESC ! (8 + 16 + 32)) 56 dec => 38 hex
            $cmds .= $esc . $cent;
            // $cmds .= str_replace($simbolos,$newsimbolos,$datosTienda[0]["NombreTienda"]); //Nombre de la tienda
            $cmds .= 'SATEC';
            $cmds .= $newLine;
            $cmds .= $esc . '!' . '0x01'; //Character font B selected (ESC ! 1) Character font A selected (ESC ! 0)
            $cmds .= str_replace($simbolos,$newsimbolos,$datosTienda[0]["NombreCia"]);
            $cmds .= $newLine;
            $cmds .= str_replace($simbolos,$newsimbolos,$datosTienda[0]["CedulaJuridica"]);
            $cmds .= $newLine;
            $cmds .= str_replace($simbolos,$newsimbolos,$datosTienda[0]["Direccion"]);
            $cmds .= $newLine;
            $cmds .= str_replace($simbolos,$newsimbolos,$datosTienda[0]["Ubicacion"]);
            $cmds .= $newLine;
            $cmds .= str_replace($simbolos,$newsimbolos,$datosTienda[0]["Telefonos"]);
            $cmds .= $newLine;
            $cmds .= str_replace($simbolos,$newsimbolos,$datosTienda[0]["CorreoContacto"]);
            $cmds .= $newLine . $newLine;
            $cmds .= $esc . $left;

            if ($indTipoDoc == 'P') {
                $cmds .= $esc . '!' . '0x38'; //Emphasized + Double-height  mode selected (ESC ! (8 + 16 )) 24 dec => 18 hex
                $cmds .= $titDocu . $numeral;
                $cmds .= $headerDocu[0]["numDocu"];
                $cmds .= $esc . '!' . '0x01'; //Character font B selected (ESC ! 1) Character font A selected (ESC ! 0)
            }else{
                $cmds .= $titDocu . $numeral;
                $cmds .= $headerDocu[0]["numDocu"];
            }
            $cmds .= $newLine;

            $cmds .= "Fecha:".$headerDocu[0]["fecDocu"];
            $cmds .= $newLine;
            $cmds .= "Cliente:".str_replace($simbolos,$newsimbolos,$headerDocu[0]["nombre"]);
            $cmds .= $newLine;
            $cmds .= "Vendedor:".str_replace($simbolos,$newsimbolos,$headerDocu[0]["nombreVendedor"]);
            $cmds .= $newLine;
          //  $cmds .= "----------------------------------------";
            $cmds1 = "-   -   -   -   -   -   -   -   -   -  -";
            $cmds1 .= $newLine;
                  //           10        20        30        40
                  //  1234567890123456789012345678901234567890
                  //   
            //$cmds .= "Codigo   Cant    Precio    Des     Total";
            $cmds1 .= "Codigo    Cant     Precio Des      Total";
                  //  123456789.1234.1234567890.123.1234567890
                     "            SubTotal:".substr('           ',1,12-strlen($headerDocu[0]["subTotal"])).$headerDocu[0]["subTotal"];
                  //            3423  512,584.10
            $cmds1 .= $newLine;
            // recorrer el arrglo de articulos para agregarlo a la factura  
$cont = 1;
            foreach ($detalleDocu as $dato){

                $cmds1 .= $dato["codArti"].substr('         ',1,9-strlen($dato["codArti"])).' ';
                $cmds1 .= substr('     ',1,4-strlen($dato["cantidad"])).$dato["cantidad"].' ';
                $cmds1 .= substr('         ',1,10-strlen($dato["PrecioVenta"])).$dato["PrecioVenta"].' ';
                $cmds1 .= substr('   ',1,3-strlen($dato["PorceDesc"])).$dato["PorceDesc"].' ';
                $cmds1 .= substr('         ',1,10-strlen($dato["PrecioTotal"])).$dato["PrecioTotal"];
                $cmds1 .= $newLine;
                $desArti = $dato["desArticulo"];
                $desArti = html_entity_decode($desArti,ENT_QUOTES);

                // $cmds1 .= str_replace($simbolos,$newsimbolos,substr($dato["desArticulo"],0,40));
                $cmds1 .= str_replace($simbolos,$newsimbolos,substr($desArti,0,40));
               // $cmds .= substr($dato["desArticulo"],0,40);
                $cmds1 .= $newLine . $newLine;
$cont = $cont + 1;
            }


                  // "Codigo    Cant     Precio Des      Total";
                  //  123456789.1234.1234567890.123.1234567890
                  //                       Descuento:123456789 
            
            // $cmds .= $newLine;            
            $cmds1 .= "                Monto Total:".substr('           ',1,12-strlen($headerDocu[0]["montototal"])).$headerDocu[0]["montototal"];
            $cmds1 .= $newLine;            
            $cmds1 .= "                  Descuento:".substr('           ',1,12-strlen($headerDocu[0]["descuento"])).$headerDocu[0]["descuento"];
            $cmds1 .= $newLine;
            $cmds1 .= "                   SubTotal:".substr('           ',1,12-strlen($headerDocu[0]["subTotal"])).$headerDocu[0]["subTotal"];
            $cmds1 .= $newLine;
            $cmds1 .= "                  Imp.Venta:".substr('           ',1,12-strlen($headerDocu[0]["impuesto"])).$headerDocu[0]["impuesto"];
            $cmds1 .= $newLine;
            $cmds1 .= "                 Gran Total:".substr('           ',1,12-strlen($headerDocu[0]["Total"])).$headerDocu[0]["Total"];

            $cmds2 = $newLine . $newLine;    
            if ($indTipoDoc == 'F') {
                $cmds2 .= str_replace($simbolos,$newsimbolos,$datosTienda[0]["LeyendaTributacion"]);
                $cmds2 .= $newLine . $newLine;
            };
if ($cont <= 7) {
            foreach ($lineasPie as $lineaPie){
              //  $cmds .= $lineaPie["linea"];
                $cmds2 .= str_replace($simbolos,$newsimbolos,$lineaPie["linea"]);
                $cmds2 .= $newLine;
            };
};
            $cmds2 .= $newLine . $newLine . $newLine . $newLine . $newLine . $newLine . $newLine;
            $cmds2 .= ".";
            $cmds2 .= $newLine ;
            $cmds2 .= $esc . 'm';
 $_SESSION["CMDS"] = $cmds;

         //    echo strlen($_SESSION["CMDS"]); 
       
    
?>
<!DOCTYPE html>
<html>
<head>
    <title>Imprimir Factura</title>
</head>
<body>

    <input type="hidden" name="sid"   id="sid"   value="<?php echo session_id(); ?>" />
    <input type="hidden" name="cmds"  id="cmds"  value="<?php echo $cmds; ?>" />
    <input type="hidden" name="cmds1" id="cmds1" value="<?php echo $cmds1; ?>" />
    <input type="hidden" name="cmds2" id="cmds2" value="<?php echo $cmds2; ?>" />
    <div style="width:100%">
         
            <input type="button" id="imprime" autofocus name="imprime"   style="margin-left:25%; margin-top:25%;font-size:48px" onclick="javascript:jsWebClientPrint.print('cmds=' + $('#cmds').val()+'&cmds1='+$('#cmds1').val()+'&cmds2='+$('#cmds2').val());window.location.href ='index.php';" value="Presionar Enter para volver al sistema ..." />
        
    </div>
    <!-- Add Reference to jQuery at Google CDN -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js" type="text/javascript"></script>

    <?php
    //Specify the ABSOLUTE URL to the php file that will create the ClientPrintJob object
    //In this case, this same page
    echo WebClientPrint::createScript(Utils::getRoot().'/CRM-SATEC/sInventario/proformas/PrintReceipt2.php')
    ?>
       

</body>
</html>

