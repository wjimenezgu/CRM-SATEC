<?php
echo 'llega a ctrl_imprimi';
    // Encabezado del control que verificar si la session expiro.
    require '../../_includes/ctrl_checksession.php';
echo 'llega 2 a ctrl_imprimi';
    // Encabezado del control
    require '../../_includes/ctrl_headerprn.php';    
    // Se abra la conexion a la BD.
    require '../../_includes/ctrl_openDB.php';

    require 'model/modelcobrar.php';
    $model = new modelcobrar($con->db);
 echo 'llega 3 a ctrl_imprimir';   

    require 'WebClientPrint.php';

  echo 'llega 4 a ctrl_imprimir';
    use Neodynamic\SDK\Web\WebClientPrint;
    use Neodynamic\SDK\Web\Utils;
    use Neodynamic\SDK\Web\DefaultPrinter;
    use Neodynamic\SDK\Web\InstalledPrinter;
    use Neodynamic\SDK\Web\ClientPrintJob;
    
   
  
    $mvc->setModule("cobrar");    
    
    $idTienda = $_SESSION["TIENDA_ID"];
    $idFactura = $_GET["factura"];
    $tiraReimpre = $_GET["tiraReimpre"];

    $datosTienda = $model->getDatosTienda($idTienda); 

    $headerFactura = $model->buscarEncFact($idTienda, $idFactura); 
    $detalleFactura = $model->buscarDetFactArti($idFactura);
    $mvc->assign("TIRA_REIMPRE", $tiraReimpre);
    $mvc->assign("DATOS_TIENDA", $datosTienda[0]);
    $mvc->assign("HEAD_FACTURA", $headerFactura[0]);
    $mvc->assign("DETAIL_FACTURA", $detalleFactura);
    
    // codigo para imprimir la factura automaticamente.
    //

    //Create ESC/POS commands for sample receipt
    $esc = '0x1B'; //ESC byte in hex notation
    $newLine = '0x0A'; //LF byte in hex notation

    $cmds = $esc . "@"; //Initializes the printer (ESC @)
    $cmds .= $esc . '!' . '0x38'; //Emphasized + Double-height + Double-width mode selected (ESC ! (8 + 16 + 32)) 56 dec => 38 hex
    $cmds .= 'BEST DEAL STORES'; //text to print
    $cmds .= $newLine . $newLine;
    $cmds .= $esc . '!' . '0x00'; //Character font A selected (ESC ! 0)
    $cmds .= 'COOKIES                   5.00';
    $cmds .= $newLine;
    $cmds .= 'MILK 65 Fl oz             3.78';
    $cmds .= $newLine . $newLine;
    $cmds .= 'SUBTOTAL                  8.78';
    $cmds .= $newLine;
    $cmds .= 'TAX 5%                    0.44';
    $cmds .= $newLine;
    $cmds .= 'TOTAL                     9.22';
    $cmds .= $newLine;
    $cmds .= 'CASH TEND                10.00';
    $cmds .= $newLine;
    $cmds .= 'CASH DUE                  0.78';
    $cmds .= $newLine . $newLine;
    $cmds .= $esc . '!' . '0x18'; //Emphasized + Double-height mode selected (ESC ! (16 + 8)) 24 dec => 18 hex
    $cmds .= '# ITEMS SOLD 2';
    $cmds .= $esc . '!' . '0x00'; //Character font A selected (ESC ! 0)
    $cmds .= $newLine . $newLine;
    $cmds .= '11/03/13  19:53:17';

    //Create a ClientPrintJob obj that will be processed at the client side by the WCPP

    $cpj = new ClientPrintJob();

    //set ESC/POS commands to print...
    $cpj->printerCommands = $cmds;
    $cpj->formatHexValues = true;
    //set client default printer
   	$cpj->clientPrinter = new DefaultPrinter();
 
    //Send ClientPrintJob back to the client
    ob_start();
    ob_clean();
    echo $cpj->sendToClient();
    ob_end_flush();
    exit();
    
    // se pone en comentario la siguiente linea, por que es la version anterior
    // $mvc->display("imp-factura.tpl");
?>
<!DOCTYPE html>
<html>
<body>
<input type="button" id="imprime" name= "imprime" style="font-size:18px" onclick="javascript:jsWebClientPrint.print('useDefaultPrinter=' + $('#useDefaultPrinter').attr('checked') + '&printerName=' + $('#installedPrinterName').val());" value="Print Receipt..." />

</body>
</html>
