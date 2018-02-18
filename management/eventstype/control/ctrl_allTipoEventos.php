<?php

	// Encabezado del control
	require '../../_includes/ctrl_header.php';

	// Se abra la conexion a la BD.
	require '../../_includes/ctrl_openDB.php';
		
   // A partir de aca codigo particular al modulo.

    require 'model/modelTipoEventos.php';
    $model = new modelTipoEventos($con->db);    
    
    $mvc->setModule("eventstype");

    $infoTipoEventos = $model->getAllTipoEventos();
    
    $mvc->assign("LISTA_TIPOEVENTOS", $infoTipoEventos);      

    $page = $mvc->fetch("allTipoEventos.tpl");

    // Pie del control
    require '../../_includes/ctrl_footer.php';
        
    
    
?>