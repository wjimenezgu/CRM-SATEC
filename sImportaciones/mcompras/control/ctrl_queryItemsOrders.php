<?php

	// Encabezado del control
	require '../../_includes/ctrl_header.php';

	// Se abra la conexion a la BD.
	require '../../_includes/ctrl_openDB.php';
		
   // A partir de aca codigo particular al modulo.

    require 'model/modelMCompras.php';
    $model = new modelMCompras($con->db);        
  
    $mvc->setModule("mcompras");
    
    $criterio = $_POST["criterio"];
    $busqueda = $_POST["txtBusqueda"]; 
           
    $infoItemsOrders = $model->queryItemsOrders($criterio, $busqueda);
           
    $mvc->assign("LIST_ITEMS_ORDERS", $infoItemsOrders); 
              
    $mvc->display("listItemsOrders.tpl");          
        
    // Pie del control
	//require '../../_includes/ctrl_footer.php';
    
?>