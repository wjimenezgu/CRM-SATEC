<?php  
header('Content-Type: application/force-download');  
header("Cache-Control: no-store, no-cache, must-revalidate");
//header("Content-type: application/vnd.ms-excel; name='excel'");  
header("Content-Disposition: filename=reporte - ".$_POST['cual'].".xls");  
// Fix for crappy IE bug in download.  
header("Pragma: ");  
header("Cache-Control: ");

echo "<h1>".$_POST['cualTienda']."</h1>";
echo "<h1>".$_POST['cualEnc']."</h1>";
echo utf8_decode( $_POST['dataExcel'] );
?>  