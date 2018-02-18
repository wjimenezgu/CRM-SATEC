<?php
	// Encabezado del control
	require '../../_includes/ctrl_header.php';

	// Se abra la conexion a la BD.
	require '../../_includes/ctrl_openDB.php';
		
    // A partir de aca codigo particular al modulo.
   
    require 'model/modelqueriesorder.php';
    $model = new modelqueriesorder($con->db);    

    $infoOptHide = $model->getAllOptHide($inSession);  
    $mvc->assign("LIST_OPT_HIDE", $infoOptHide);  
	$optHide = $mvc->fetch("listOptHide.tpl");
    $mvc->assign("OPT_HIDE", $optHide);    
    
    
    $mvc->setModule("queriesorder");
 
    $page = $mvc->fetch("consultasPedido.tpl");
   
    // Pie del control
	require '../../_includes/ctrl_footer.php'; 
?>