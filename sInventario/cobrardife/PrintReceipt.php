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


    $idTienda    = $_SESSION["TIENDA_ID"];
    $idFactura   = $_GET["factura"];
    $tiraReimpre = $_GET["tiraReimpre"];



    // Se abra la conexion a la BD.
    require '../../_includes/ctrl_openDB.php';
    
    require 'model/modelcobrar.php';
    $model = new modelcobrar($con->db);

    $datosTienda    = $model->getDatosTienda($idTienda);   

    $headerFactura  = $model->buscarEncFact($idTienda, $idFactura); 
    $detalleFactura = $model->buscarDetFactArti($idFactura);

            //Create ESC/POS commands for sample receipt
            $esc = '0x1B'; //ESC byte in hex notation
            $newLine = '0x0A'; //LF byte in hex notation
            $comillas = '0x22';
            $comilla = '0x27';
            $numeral = '0x23';
            $arroba = '0x40';
            $simbolos = array('#','@','"');
            $newsimbolos = array($numeral,$arroba,'');
            $cent = 'a'.'0x01';
            $left = 'a'.'0x00';

            $cmds = $esc . "@"; //Initializes the printer (ESC @)
            $cmds .= $esc . '!' . '0x38'; //Emphasized + Double-height + Double-width mode selected (ESC ! (8 + 16 + 32)) 56 dec => 38 hex
            $cmds .= $esc . $cent;
            $cmds .= $datosTienda[0]["NombreTienda"]; //Nombre de la tienda
            $cmds .= $newLine;
            $cmds .= $esc . '!' . '0x01'; //Character font B selected (ESC ! 1) Character font A selected (ESC ! 0)
            $cmds .= $datosTienda[0]["NombreCia"];
            $cmds .= $newLine;
            $cmds .= $datosTienda[0]["CedulaJuridica"];
            $cmds .= $newLine;
            $cmds .= $datosTienda[0]["Direccion"];
            $cmds .= $newLine;
            $cmds .= $datosTienda[0]["Ubicacion"];
            $cmds .= $newLine;
            $cmds .= $datosTienda[0]["Telefonos"];
            $cmds .= $newLine;
            $cmds .= str_replace($simbolos,$newsimbolos,$datosTienda[0]["CorreoContacto"]);
            $cmds .= $newLine . $newLine;
            $cmds .= $esc . $left;
            $cmds .= "Factura de Contado: " . $numeral;
            // $cmds .= $newLine;
            //$cmds .= $esc . '!' . '0x38'; //Emphasized + Double-height + Double-width mode selected (ESC ! (8 + 16 + 32)) 56 dec => 38 hex
            $cmds .= $headerFactura[0]["numDocu"];
            $cmds .= $newLine;
            // $cmds .= $esc . '!' . '0x00'; //Character font A selected (ESC ! 0)
            $cmds .= "Fecha:".$headerFactura[0]["fecFactura"];
            $cmds .= $newLine;
            $cmds .= "Cliente:".$headerFactura[0]["nombre"];
            $cmds .= $newLine;
            $cmds .= "Vendedor:".$headerFactura[0]["nombreVendedor"];
            $cmds .= $newLine;
          //  $cmds .= "----------------------------------------";
            $cmds .= "-   -   -   -   -   -   -   -   -   -  -";
            $cmds .= $newLine;
                  //           10        20        30        40
                  //  1234567890123456789012345678901234567890
                  //   
            //$cmds .= "Codigo   Cant    Precio    Des     Total";
            $cmds .= "Codigo    Cant     Precio Des      Total";
                  //  123456789.1234.1234567890.123.1234567890
                     "            SubTotal:".substr('           ',1,12-strlen($headerFactura[0]["subTotal"])).$headerFactura[0]["subTotal"];
                  //            3423  512,584.10
            $cmds .= $newLine;
            // recorrer el arrglo de articulos para agregarlo a la factura  

            foreach ($detalleFactura as $dato){
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
            $cmds .= "                Monto Total:".substr('           ',1,12-strlen($headerFactura[0]["montototal"])).$headerFactura[0]["montototal"];
            $cmds .= $newLine;            
            $cmds .= "                  Descuento:".substr('           ',1,12-strlen($headerFactura[0]["descuento"])).$headerFactura[0]["descuento"];
            $cmds .= $newLine;
            $cmds .= "                   SubTotal:".substr('           ',1,12-strlen($headerFactura[0]["subTotal"])).$headerFactura[0]["subTotal"];
            $cmds .= $newLine;
            $cmds .= "                  Imp.Venta:".substr('           ',1,12-strlen($headerFactura[0]["impuesto"])).$headerFactura[0]["impuesto"];
            $cmds .= $newLine;
            $cmds .= "                 Gran Total:".substr('           ',1,12-strlen($headerFactura[0]["Total"])).$headerFactura[0]["Total"];
            $cmds .= $newLine . $newLine;    

            
            $cmds .= $datosTienda[0]["LeyendaTributacion"];
            $cmds .= $newLine . $newLine . $newLine . $newLine . $newLine . $newLine . $newLine;
            $cmds .= ".";
            $cmds .= $newLine ;
            $cmds .= $esc . 'm';

            // echo $cmds;exit;
       
    
?>
<!DOCTYPE html>
<html>
<head>
    <title>Imprimir Factura</title>
</head>
<body>

    <input type="hidden" id="sid" name="sid" value="<?php echo session_id(); ?>" />
    <input type="hidden" name="cmds" id="cmds" value="<?php echo $cmds; ?>" />
    <div style="width:100%">
         
            <input type="button" id="imprime" autofocus name="imprime"   style="margin-left:25%; margin-top:25%;font-size:48px" onclick="javascript:jsWebClientPrint.print('cmds=' + $('#cmds').val());window.location.href ='index.php';" value="Presionar Enter para volver al sistema ..." />
        
    </div>
    <!-- Add Reference to jQuery at Google CDN -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js" type="text/javascript"></script>

    <?php
    //Specify the ABSOLUTE URL to the php file that will create the ClientPrintJob object
    //In this case, this same page
    echo WebClientPrint::createScript(Utils::getRoot().'/CRM-SATEC/sInventario/cobrar/PrintReceipt2.php')
    ?>
       

</body>
</html>

