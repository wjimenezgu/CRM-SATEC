<?php
    session_start();

    include '../../WebClientPrint.php';
    use Neodynamic\SDK\Web\WebClientPrint;
    use Neodynamic\SDK\Web\Utils;
    use Neodynamic\SDK\Web\DefaultPrinter;
    use Neodynamic\SDK\Web\InstalledPrinter;
    use Neodynamic\SDK\Web\ClientPrintJob;

    // Se abra la conexion a la BD.
    require '../../_includes/ctrl_openDB.php';
  
    require 'model/modelBill.php';
    $model 		= new modelBill($con->db);
    
    $idTienda   = $_SESSION["TIENDA_ID"];
     
    $idFactu    = $_GET["idDoc"];        
    
    $headerDocu					= $model->buscaEncFact($idTienda,$idFactu);
    
    $headerDocu[0]["nombre"] 	= urlencode($headerDocu[0]["nombre"]);

    $headerDocu[0]["direccion"] = urlencode($headerDocu[0]["direccion"]);
    
   
    $enc = 	$headerDocu[0]["numFactura"]."|".$headerDocu[0]["fecFactura"]."|".$headerDocu[0]["idCliente"]."|".
      		$headerDocu[0]["nombre"]."|".$headerDocu[0]["telefono"]."|".$headerDocu[0]["direccion"]."|".
      		$headerDocu[0]["numOC"]."|".$headerDocu[0]["obs"]."|".$headerDocu[0]["indMontoLetras"]."|".
      		$headerDocu[0]["tipoCambio"]."|".$headerDocu[0]["TotalN"]."|".$headerDocu[0]["subTotalArticulos"]."|".      		
      		$headerDocu[0]["descuento"]."|".$headerDocu[0]["subTotal"]."|".
      		$headerDocu[0]["impuesto"]."|".$headerDocu[0]["Total"]."|".$headerDocu[0]["plazoCredi"];
   
    
    $infoModoGob  	= $model->buscaInfoModoGob($idFactu);
    
    
  
    $gob	= 	urlencode($infoModoGob[0]["posPresupuestaria"])."|".
    			urlencode($infoModoGob[0]["fondo"])."|".
    			urlencode($infoModoGob[0]["areaFuncional"])."|".
    			urlencode($infoModoGob[0]["solPedido"])."|".
    			urlencode($infoModoGob[0]["ctaCliente"])."|".
    			urlencode($infoModoGob[0]["tramiteCompra"]);
        
/*
        gob =   $infoModoGob[0]["posPresupuestaria"]."|".
          $infoModoGob[0]["fondo"]."|".
          $infoModoGob[0]["areaFuncional"]."|".
          $infoModoGob[0]["solPedido"]."|".
          $infoModoGob[0]["ctaCliente"]."|".
          $infoModoGob[0]["tramiteCompra"];
  */
    
    $detalleDocu  = $model->buscaDetFactArti($idFactu); 
        
    $length = count($detalleDocu);
    $arti='';
    $strFin ='';
    for ($i = 0; $i < $length; $i++) {
    	$descri = $detalleDocu[$i]["desArticulo"];
    	$arti .= 	$strFin.$detalleDocu[$i]["codExterno"]."|".
      				$detalleDocu[$i]["cantidad"]."|".
      			//	urlencode($descri)."|".
    				$detalleDocu[$i]["desArticulo"]."|".
      				$detalleDocu[$i]["codArti"]."|".
      				$detalleDocu[$i]["PorceDesc"]."|".
      				$detalleDocu[$i]["PrecioVenta"]."|".
      				$detalleDocu[$i]["PrecioTotalSinDesc"]."|".
      				$detalleDocu[$i]["PrecioVenta"];
    	$strFin = '|';
      			
    }
    
    
    
     
?>
<!DOCTYPE html>
<html>
<head>
    <title>Imprimir Factura</title>
</head>
<body>

    <input type="hidden" name="sid"   		id="sid"   		value="<?php echo session_id(); ?>" />
    <input type="hidden" name="enc"  		id="enc"  		value="<?php echo $enc; ?>" />
    <input type="hidden" name="gob"  		id="gob"  	    value="<?php echo $gob; ?>" />
    <input type="hidden" name="arti"  		id="arti"  	    value="<?php echo $arti; ?>" />    

    <div style="width:100%">        
       <input type="button" id="imprime" autofocus     name="imprime"   style="margin-left:25%; margin-top:25%;font-size:48px" onclick="javascript:jsWebClientPrint.print('enc=' + $('#enc').val()+'&gob='+$('#gob').val()+'&arti='+$('#arti').val());window.location.href ='index.php'; " value="Presionar Enter para regresar ..." />    
    </div>
    <!-- Add Reference to jQuery at Google CDN -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js" type="text/javascript"></script>

    <?php
    //Specify the ABSOLUTE URL to the php file that will create the ClientPrintJob object
    //In this case, this same page
    echo WebClientPrint::createScript(Utils::getRoot().'/CRM-SATEC/sInventario/facturacioncxc/PrintFactura.php')
    ?>
      
</body>
</html>
