<?php
	// Encabezado del control que verificar si la session expiro.
	require '../../_includes/ctrl_checksession.php';

	// Encabezado del control
	require '../../_includes/ctrl_header.php';	
	
	// Se abra la conexion a la BD.
	require '../../_includes/ctrl_openDB.php';
		
    require 'model/modelqueriesorder.php';
    $model = new modelqueriesorder($con->db);    

    $idPedido = $_POST["idPedido"];
    $infoEventos = $model->getEventosPedidoSegui($idPedido);

    $mvc->setModule("queriesorder");

    $mvc->assign("INFOEVENTOS", $infoEventos);
    
    $mvc->display("listaeventos.tpl");    
?>