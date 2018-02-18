<?php

	// Encabezado del control que verificar si la session expiro.
	require '../../_includes/ctrl_checksession.php';
	
	// Encabezado del control
	require '../../_includes/ctrl_header.php';

	// Se abra la conexion a la BD.
	require '../../_includes/ctrl_openDB.php';
	
    require 'model/modelMCompras.php';
    $model = new modelMCompras($con->db);        

    // Se valida las opciones que el usuario puede ver
    require '../../_includes/ctrl_opthide.php';    
    
    $mvc->setModule("mcompras");
	
    $criterio = $_POST["criterio"]; 
  
	$infoComprasNac = $model->getAllPedidosFiltro($criterio);
           
    $mvc->assign("LISTA_COMPRASNAC", $infoComprasNac);
              
    $mvc->display("listpedidos.tpl");          

?>