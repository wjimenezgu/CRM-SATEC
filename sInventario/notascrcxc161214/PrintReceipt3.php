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


    //$idTienda    = $_SESSION["TIENDA_ID"];
    //$idFactura   = $_GET["factura"];
    //$tiraReimpre = $_GET["tiraReimpre"];



    // Se abra la conexion a la BD.
    //require '../../_includes/ctrl_openDB.php';
    // require '../../_config/db/UserConnection.php';   
    // $userConnect = new UserConnection($_SESSION["USER_SESSION"], $_SESSION["PWD_USER"] );
    // require '../../_config/db/DBConexion.php';
    // $params = get_object_vars($userConnect);
    // $db = ADONewConnection($params["db_driver"]);   
    //$con = new DBConexion(1, $userConnect); 

    

    //require 'model/modelcobrar.php';
    //$model = new modelcobrar($con->db);

    
 //   if (isset($urlParts['query'])){
        $rawQuery = $urlParts['query'];
        parse_str($rawQuery, $qs);
 //       if(isset($qs[WebClientPrint::CLIENT_PRINT_JOB])){
            $printerName = urldecode($qs['printerName']);
            $cmds=    $qs['cmds'];


            //Create a ClientPrintJob obj that will be processed at the client side by the WCPP
            $cpj = new ClientPrintJob();
            //set ESC/POS commands to print...
            $cpj->printerCommands = $cmds;
            $cpj->formatHexValues = true;
            //set client printer

                $cpj->clientPrinter = new DefaultPrinter();

            //Send ClientPrintJob back to the client
            ob_start();
            ob_clean();
            echo $cpj->sendToClient();
            ob_end_flush();

           
            
            exit();
//        }
//    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Imprimir Factura</title>
</head>
<body>
    
    <div id="defPrint" style="visibility:hidden">
    <label class="checkbox">
        <input type="checkbox" checked id="useDefaultPrinter" /> <strong>Use default printer</strong> or...
    </label>
    </div>
    <br /><br />
    <input type="hidden" name="cmd" value="<?php echo $cmds; ?>" />
    <input type="button" id="imprime" name="imprime"   style="font-size:18px" onclick="javascript:jsWebClientPrint.print('useDefaultPrinter=' + $('#useDefaultPrinter').attr('checked') + '&printerName=' + $('#installedPrinterName').val());window.location.href ='index.php';" value="Confirmar Impresion..." />

    
    <!-- Add Reference to jQuery at Google CDN -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js" type="text/javascript"></script>


       

</body>
</html>

