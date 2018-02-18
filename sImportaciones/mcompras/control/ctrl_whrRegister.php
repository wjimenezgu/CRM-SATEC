<?php

	// Encabezado del control
	require '../../_includes/ctrl_header.php';

	// Se abra la conexion a la BD.
	require '../../_includes/ctrl_openDB.php';
		
   // A partir de aca codigo particular al modulo.

    require 'model/modelMCompras.php';
    $model = new modelMCompras($con->db);
      
	$mvc->setModule("mcompras");

	$idPedido = $_GET["id"];

	$header_pedido = $model->getHeaderPedido($idPedido);
		  
    $detail_pedido = $model->getDetallePedido($idPedido);
    $numTotalRegis = count($detail_pedido);
    
    //$listProvedores = $model->getAllProveedores();
    $listOptPago     = $model->getAllOpcionesPago();
    $listMonedas     = $model->getAllMonedas();
    $listCompromisos = $model->getAllCompromisos();

    //Nuevos Campos solicitados
    $listDirEnvio    = $model->getAllDirEnvio();
    $listDirDocs     = $model->getAllDirDocs();
    $listTarjetas    = $model->getAllTarjetas();            

    $currentDate = date("d/m/Y");    
    $mvc->assign("NUM_ROW", $numTotalRegis);    
    $mvc->assign("ID_PEDIDO", $idPedido);    
    $mvc->assign("PED_HEADER", $header_pedido);    
    $mvc->assign("PED_DETAIL", $detail_pedido);
    $mvc->assign("CURRENT_DATE", $currentDate);    
    $mvc->assign("LIST_OPT_PAGO", $listOptPago);    
    $mvc->assign("MONEDAS", $listMonedas);    
    $mvc->assign("COMPROMISOS"  , $listCompromisos); 
    
    $mvc->assign("ALL_DIR_ENVIO"  , $listDirEnvio);    
    $mvc->assign("ALL_DIR_DOCS"   , $listDirDocs);    
    $mvc->assign("ALL_TIP_CARDS"  , $listTarjetas);     
	
    $page = $mvc->fetch("whrRegister.tpl");
    
    // Pie del control
	require '../../_includes/ctrl_footer.php';

?>