<?php

	// Encabezado del control
	require '../../_includes/ctrl_headerSinMenu.php';

	// Se abra la conexion a la BD.
	require '../../_includes/ctrl_openDB.php';
		
   // A partir de aca codigo particular al modulo.

    require 'model/modelMCompras.php';
    $model = new modelMCompras($con->db);    
      
	$mvc->setModule("mcompras");
	$infoFactoresAp 	  	= $model->getAllEncFactor();
	$mvc->assign("LIST_FACTORESAP"	, $infoFactoresAp);
	    
    $page = $mvc->fetch("inputOrders.tpl");
    
    // Pie del control
	require '../../_includes/ctrl_footer.php';
    
?>