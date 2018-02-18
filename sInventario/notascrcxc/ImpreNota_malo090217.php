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

    
    // Se abra la conexion a la BD.
    require '../../_includes/ctrl_openDB.php';
   

    require 'model/modelnotas.php';
    $model = new modelnotas($con->db);
   
    $idTienda   = $_SESSION["TIENDA_ID"];
    $nameTienda = $_SESSION["TIENDA_NOMBRE"];
      
    $idNota 	= $_GET["idDoc"];
    
    $currentDate	= date('d/m/Y / h:i:s A');

    $tempFC = explode("/", $currentDate);
    $fechaH	=  "$tempFC[3]";
    $fechaA	=  "$tempFC[2]";
    $fechaM	=  "$tempFC[1]";
    $fechaD	=  "$tempFC[0]";
    
    $headerDocu = $model->buscarEncNotaImp($idTienda,$idNota);
          
    $headerDocu[0]["nombre"] 	= urlencode($headerDocu[0]["nombre"]);
    $headerDocu[0]["direccion"] = urlencode($headerDocu[0]["direccion"]);
    $headerDocu[0]["razonNota"] = urlencode($headerDocu[0]["razonNota"]);
    
    $enc  = $headerDocu[0]["numNota"]."|".				// 0
       		$headerDocu[0]["nombre"]."|".				// 1
       		$headerDocu[0]["direccion"]."|".			// 2
       		$headerDocu[0]["numFactura"]."|".			// 3
            $headerDocu[0]["nombreVendedor"]."|".		// 4
            $headerDocu[0]["numOC"]."|".				// 5
            $headerDocu[0]["razonNota"]."|".			// 6
            $headerDocu[0]["subTotal"]."|".				// 7
    		$headerDocu[0]["impuesto"]."|".				// 8
    		$headerDocu[0]["Total"]."|".				// 9
    		$headerDocu[0]["fecNota"];					// 10  d-m-y
    
    $detalleDocu = $model->buscarDetNotaArti($idNota);
    
    $length = count($detalleDocu);
    $strFin ='';
    for ($i = 0; $i < $length; $i++) {
    	$arti .= $strFin.$detalleDocu[$i]["codExterno"]."|".
    			 $detalleDocu[$i]["cantidad"]."|".
    			 $detalleDocu[$i]["desArticulo"]."|".
    			 $detalleDocu[$i]["codArti"]."|".
    			 $detalleDocu[$i]["PrecioVenta"]."|".
    			 $detalleDocu[$i]["PrecioTotal"];
    			 $strFin = '|';
    	 
    }
    
?>
<!DOCTYPE html>
<html>
<head>
    <title>Imprimir Nota</title>
</head>
<body>

    <input type="hidden" name="sid"   id="sid"   value="<?php echo session_id(); ?>" />
	<input type="hidden" name="enc"   id="enc"   value="<?php echo $enc; ?>" />    
    <input type="hidden" name="arti"  id="arti"  value="<?php echo $arti; ?>" />        

    <div style="width:100%">
         
    	<input type="button" id="imprime" autofocus name="imprime"   style="margin-left:25%; margin-top:25%;font-size:48px" onclick="javascript:jsWebClientPrint.print('cmds=' + $('#cmds').val()+'&idTienda=' + $('#idTienda').val()); window.location.href ='../notascrcxc/index.php';" value="Presionar Enter para regresar ..." />
        
    </div>
    <!-- Add Reference to jQuery at Google CDN -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js" type="text/javascript"></script>

    <?php
    //Specify the ABSOLUTE URL to the php file that will create the ClientPrintJob object
    //In this case, this same page
    echo WebClientPrint::createScript(Utils::getRoot().'/CRM-SATEC/sInventario/notascrcxc/PrintNota.php')
    ?>
       

</body>
</html>

