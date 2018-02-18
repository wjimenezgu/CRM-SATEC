<?php

	// Encabezado del control
	require '../../_includes/ctrl_header.php';

	// Se abra la conexion a la BD.
	require '../../_includes/ctrl_openDB.php';
		
   // A partir de aca codigo particular al modulo.

    require 'model/modelItems.php';
    $model = new modelItems($con->db);    
    
   // hasta aqui codigo agregado
    
    $mvc->setModule("items");
    
    $infoItems = $model->getAllItems();
   
    $mvc->assign("LISTA_ITEMS", $infoItems);
 
    $page = $mvc->fetch("allItems.tpl");
    
    // Pie del control
	require '../../_includes/ctrl_footer.php'; 

?>