<?php

	// Encabezado del control que verificar si la session expiro.
	require '../../_includes/ctrl_checksession.php';
	
	// Encabezado del control
	require '../../_includes/ctrl_header.php';

	// Se abra la conexion a la BD.
	require '../../_includes/ctrl_openDB.php';

    require 'model/modelconsultas.php';
    $model = new modelconsultas($con->db);  
    // Se valida las opciones que el usuario puede ver
    require '../../_includes/ctrl_opthide.php';    
        
    $mvc->setModule("consultas");
    
    $criterio = $_POST["criterio"];
    $busqueda = $_POST["txtBusqueda"];    
  
    $infoProducto = $model->buscarProducto($criterio, $busqueda);
           
    $mvc->assign("LISTA_ITEMS", $infoProducto); 
              
    $mvc->display("listItems.tpl");          

?>