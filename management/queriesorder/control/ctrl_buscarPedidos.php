<?php

	// Encabezado del control que verificar si la session expiro.
	require '../../_includes/ctrl_checksession.php';
	
	// Encabezado del control
	require '../../_includes/ctrl_header.php';

	// Se abra la conexion a la BD.
	require '../../_includes/ctrl_openDB.php';

    require 'model/modelqueriesorder.php';
    $model = new modelqueriesorder($con->db);    
    
   // hasta aqui codigo agregado
    
    $mvc->setModule("queriesorder");

    $criterio = $_POST["criterio"];
    $busqueda = $_POST["txtBusqueda"]; 
        
    $infoPedidos = $model->buscarPedidos($criterio, $busqueda);
       
    $mvc->assign("LISTA_ITEMS", $infoPedidos); 
          
    $mvc->display("listItems.tpl");          

?>