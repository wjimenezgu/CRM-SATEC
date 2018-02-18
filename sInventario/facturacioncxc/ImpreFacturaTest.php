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
    $nameTienda = $_SESSION["TIENDA_NOMBRE"];
     
    $idFactu    = $_GET["idDoc"];
        
    $enc	= $model->buscaEncFact($idTienda,$idFactu);
    
    $enc[0]["nombre"] = urlencode($enc[0]["nombre"]);
    
    
    $gob  	= $model->buscaInfoModoGob($idFactu);
    
    $gob[0]["posPresupuestaria"]	= urlencode($gob[0]["posPresupuestaria"]);
    $gob[0]["fondo"] 				= urlencode($gob[0]["fondo"]);
    $gob[0]["areaFuncional"] 		= urlencode($gob[0]["areaFuncional"]);
    $gob[0]["solPedido"] 			= urlencode($gob[0]["solPedido"]);
    $gob[0]["ctaCliente"] 			= urlencode($gob[0]["ctaCliente"]);
    $gob[0]["tramiteCompra"] 		= urlencode($gob[0]["tramiteCompra"]);

    
    $arti  = $model->buscaDetFactArti($idFactu); 
        
    $length = count($arti);
    for ($i = 0; $i < $length; $i++) {
    	$descri = $arti[$i]["desArticulo"];
    	$arti[$i]["desArticulo"] = urlencode($descri);    	
    }
    
    $enc 	= json_encode($enc);
    $gob 	= json_encode($gob);
    $arti 	= json_encode($arti);
        
    
    header("Location:PrintFacturaTest.php?enc=".$enc."&gob=".$gob."&arti=".$arti);
   
   
?>
<!DOCTYPE html>
<html>
<head>
    <title>Imprimir Factura</title>
</head>
<body>

    <input type="hidden" name="sid"   		id="sid"   		value="<?php echo session_id(); ?>" />
    <input type="hidden" name="cmds"  		id="cmds"  		value="<?php echo $cmds; ?>" />
    <input type="hidden" name="cmds0"  		id="cmds0"  	value="<?php echo $cmds0; ?>" />
    <input type="hidden" name="cmds2"  		id="cmds2"  	value="<?php echo $cmds2; ?>" />
    <input type="hidden" name="idTienda"  	id="idTienda"  	value="<?php echo $idTienda; ?>" />

    <div style="width:100%">        
       <input type="button" id="imprime" autofocus     name="imprime"   style="margin-left:25%; margin-top:25%;font-size:48px" onclick="javascript:jsWebClientPrint.print('cmds=' + $('#cmds').val()+'&idTienda=' + $('#idTienda').val()+'&cmds2='+$('#cmds2').val()+'&cmds0='+$('#cmds0').val()); window.location.href ='../facturacioncxc/index.php';" value="Presionar Enter para regresar ..." />    
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
