<?php

	// Encabezado del control
	require '../../_includes/ctrl_header.php';

	// Se abra la conexion a la BD.
	require '../../_includes/ctrl_openDB.php';
		
   // A partir de aca codigo particular al modulo.

    require 'model/modelData.php';
    $model = new modelData($con->db);

 	// Se valida las opciones que el usuario puede ver
	require '../../_includes/ctrl_opthide.php';   

    $mvc->setModule("invusuariotienda");
    
    $infoData = $model->getAllData();

    $mvc->assign("LISTA_DATA", $infoData);

    $page = $mvc->fetch("allData.tpl");
   
    // Pie del control
	require '../../_includes/ctrl_footer.php';
    
?>