<?php

	// Encabezado del control
	require '../../_includes/ctrl_header.php';

	// Se abra la conexion a la BD.
	require '../../_includes/ctrl_openDB.php';
		
   // A partir de aca codigo particular al modulo.

    require 'model/modelEventos.php';
    $model = new modelEventos($con->db);        
  
    $mvc->setModule("events");
    
    $infoEventos = $model->getAllEventos();
    
    $mvc->assign("LISTA_EVENTOS", $infoEventos);

    $page = $mvc->fetch("allEventos.tpl");
    
    // Pie del control
	require '../../_includes/ctrl_footer.php';
    
?>