<?php

	// Encabezado del control
	require '../../_includes/ctrl_header.php';

	// Se abra la conexion a la BD.
	require '../../_includes/ctrl_openDB.php';
		
   // A partir de aca codigo particular al modulo.

    require 'model/modelconsultas.php';
    $model = new modelconsultas($con->db);       
    
    // Se valida las opciones que el usuario puede ver
    require '../../_includes/ctrl_opthide.php';    
    
   // hasta aqui codigo agregado
    
    $mvc->setModule("consultas");
    
    $infoItems = $model->getAllItems();
   
    $mvc->assign("LISTA_ITEMS", $infoItems);
 
    $page = $mvc->fetch("allItems.tpl");
    
    // Pie del control
	require '../../_includes/ctrl_footer.php'; 

?>