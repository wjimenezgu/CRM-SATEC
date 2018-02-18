<?php

	// Encabezado del control
	require '../../_includes/ctrl_header.php';

	// Se abra la conexion a la BD.
	require '../../_includes/ctrl_openDB.php';
		
   // A partir de aca codigo particular al modulo.

    require 'model/modelMCompras.php';
      
	$mvc->setModule("mcompras");
	    
    $page = $mvc->fetch("releaseOrders.tpl");
    
    // Pie del control
	require '../../_includes/ctrl_footer.php';
    
?>