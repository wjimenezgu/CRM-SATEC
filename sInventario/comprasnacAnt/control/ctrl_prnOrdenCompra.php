<?php

	// Encabezado del control para impresion
	require '../../_includes/ctrl_headerprn.php';

	// Se abra la conexion a la BD.
	require '../../_includes/ctrl_openDB.php';

   // A partir de aca codigo particular al modulo.

    require 'model/modelcomprasnac.php';
    $model = new modelcomprasnac($con->db);       
 
    $mvc->setModule("comprasnac");

    $idPedido= $_GET["id"];
    $mvc->assign("ID_PEDIDO"     , $idPedido);
  
    $datosTienda    = $model->getDatosTienda(0);
    $mvc->assign("DATOS_TIENDA"  , $datosTienda);
       
    $currentDate = date('d/m/Y h:i:s A');     
    $mvc->assign("CURRENT_DATE" , $currentDate);
    
    
    $infoEncPedido = $model->buscarEncPedidoNac($idPedido);
    $mvc->assign("PEDIDO_NAC"    , $infoEncPedido);
    
    $infoDetPedido = $model->buscarDetPedidoNac($idPedido);
    $mvc->assign("DETPEDIDO_NAC" , $infoDetPedido);

    $mvc->assign("TIT_REPORTE" , 'Orden de Compra');

	$page = $mvc->fetch("prnOrdenCompra.tpl");
	
    // Pie del control
	require '../../_includes/ctrl_footer.php';

?>