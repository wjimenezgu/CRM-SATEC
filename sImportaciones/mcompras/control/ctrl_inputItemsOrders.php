<?php

	// Encabezado del control
	require '../../_includes/ctrl_headerSinMenu.php';

	// Se abra la conexion a la BD.
	require '../../_includes/ctrl_openDB.php';
		
   // A partir de aca codigo particular al modulo.

    require 'model/modelMCompras.php';
    $model = new modelMCompras($con->db);        
  
    $mvc->setModule("mcompras");
    /*  
       echo "<pre>";
        print_r($_POST);
        echo "<pre>"; 
        exit;
    */  
    $criterio 		= $_POST["criterio"];
    $busqueda 		= $_POST["txtBusqueda"]; 
    $factAplicar 	= $_POST["factAplicar"];
    
           
    $infoItemsOrders 	= $model->queryInputItemsOrders($criterio, $busqueda,$factAplicar);
    
    $infoFactores 	  	= $model->getAllFactor($factAplicar);
           
    $mvc->assign("LIST_ITEMS_ORDERS", $infoItemsOrders); 
    $mvc->assign("LIST_FACTORES"	, $infoFactores);
              
    $mvc->display("inputItemsOrders.tpl");          
        
    // Pie del control
	//require '../../_includes/ctrl_footer.php';
    
?>