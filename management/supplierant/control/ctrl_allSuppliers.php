<?php

	// Encabezado del control
	require '../../_includes/ctrl_header.php';

	// Se abra la conexion a la BD.
	require '../../_includes/ctrl_openDB.php';
		
   // A partir de aca codigo particular al modulo.

    require 'model/modelSuppliers.php';
    $model = new modelSuppliers($con->db);        
  
    $mvc->setModule("suppliers");
    
    $infoEventos = $model->getSuppliers();
    
    $mvc->assign("LISTA_SUPPLIERS", $infoSuppliers);

    $page = $mvc->fetch("allSuppliers.tpl");
    
    // Pie del control
	require '../../_includes/ctrl_footer.php';
    
?>