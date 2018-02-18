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

    
 //   if (isset($urlParts['query'])){
    $rawQuery = $urlParts['query'];
    parse_str($rawQuery, $qs);
 //       if(isset($qs[WebClientPrint::CLIENT_PRINT_JOB])){
    $printerName = urldecode($qs['printerName']);
    $cmdsD   =    $qs['cmds'];
    $idTienda=    $qs['idTienda'];
            
       
            
    $NombreCia      = 'Compañía Técnica y Comercial SATEC S.A.';
    $CedulaJuridica = 'CJ:3-101-024094-30';
            
            switch ($idTienda) {
                case 0: // Guadalupe                    
                    $Direccion      = 'Centro Comercial Guadalupe';
                    $Ubicacion      = 'Local #36';
                    $Telefonos      = 'TEL: 2233-8111 FAX: 2257-5015';
                    $CorreoContacto = 'info@satecsa.com';                   
                    break;
                case 1: // Terramall
                    $Direccion      = 'Centro Comercial Terramal';
                    $Ubicacion      = 'Local #160';
                    $Telefonos      = 'TEL: 2278-6939 Apdo:114-2150';
                    $CorreoContacto = 'terramall@satecsa.com';        
                    break;
                case 2: // Distrito Cuatro
                    $Direccion      = 'Centro Comercial Distrito Cuatro';
                    $Ubicacion      = 'Local #101';
                    $Telefonos      = 'TEL: 2228-2536';
                    $CorreoContacto = 'escazu@satecsa.com';
                    break;
                case 3: // plaza del sol
                    $Direccion      = 'Centro Comercial Plaza del Sol';
                    $Ubicacion      = 'Local #43';
                    $Telefonos      = 'TEL: 2224-6079 Apdo:114-2150';
                    $CorreoContacto = 'plaza@satecsa.com';
                    break;
                case 4:
                    $Direccion      = 'Centro Comercial Plaza Mayor';
                    $Ubicacion      = 'Local #3';
                    $Telefonos      = 'TEL: 2232-0602 Apdo:114-2150';
                    $CorreoContacto = 'plazamayor@satecsa.com';
                    break;
                default:
                    $Direccion      = '- Centro Comercial Guadalupe -';
                    $Ubicacion      = '- Local #36 -';
                    $Telefonos      = 'TEL: 2233-8111 FAX: 2257-5015';
                    $CorreoContacto = 'info@satecsa.com';    
            }         
            
            
            
            
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
            $AT         = '0x8F'; // Á
            $ET         = '0x90'; // É
            $IT         = '0x92'; // Í
            $OT         = '0xA2'; // ó
            $UT         = '0x9A'; // Ú
            
            $simbolos    = array('#','@','"','Ñ','á','é','í','ó','ú','ñ','ü','/','&','%','Á','É','Í','Ó','Ú',"'");
            $newsimbolos = array($numeral,$arroba,'',$enieM,$aT,$eT,$iT,$oT,$uT,$enie,$uDiere,$slash,$amp,$porcent,$AT,$ET,$IT,$OT,$UT,$comilla);
                  
            $cent       = 'a'.'0x01';
            $left       = 'a'.'0x00';
            
            $cmds = $esc . "@"; //Initializes the printer (ESC @)
            
            
            $cmds .= $esc . $left;
            
            $cmds .= $esc . '!'.'0x15' ;
            
            
            $cmds .= $cmdsD;            

          
         
            $cmds .= $newLine . $newLine . $newLine . $newLine . $newLine ;

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

