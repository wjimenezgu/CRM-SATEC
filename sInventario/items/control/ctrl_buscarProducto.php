<?php

	// Encabezado del control que verificar si la session expiro.
	require '../../_includes/ctrl_checksession.php';
	
	// Encabezado del control
	require '../../_includes/ctrl_header.php';

	// Se abra la conexion a la BD.
	require '../../_includes/ctrl_openDB.php';

    require 'model/modelItems.php';
    $model = new modelItems($con->db);    
        
    $mvc->setModule("items");
    
    $criterio = $_POST["criterio"];
    $busqueda = $_POST["txtBusqueda"];    
  
    $infoProducto = $model->buscarProducto($criterio, $busqueda);
           
    $mvc->assign("LISTA_ITEMS", $infoProducto); 
              
    $mvc->display("listItems.tpl");          

?>