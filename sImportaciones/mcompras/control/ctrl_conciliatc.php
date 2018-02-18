<?php

	// Encabezado del control
	require '../../_includes/ctrl_header.php';

	// Se abra la conexion a la BD.
	require '../../_includes/ctrl_openDB.php';
		
   // A partir de aca codigo particular al modulo.

    require 'model/modelMCompras.php';
    $model = new modelMCompras($con->db);        

    // Se valida las opciones que el usuario puede ver
    require '../../_includes/ctrl_opthide.php';    
    
    $mvc->setModule("mcompras");  
    
	$listConciliaciones  = $model->getAllConciliaTarjetas();
	$mvc->assign("LISTA_REGS", $listConciliaciones);
  
    $page = $mvc->fetch("allConciliaTarjetas.tpl");
    
    // Pie del control
	require '../../_includes/ctrl_footer.php';

?>