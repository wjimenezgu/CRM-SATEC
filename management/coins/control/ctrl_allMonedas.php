<?php

	// Encabezado del control
	require '../../_includes/ctrl_header.php';

	// Se abra la conexion a la BD.
	require '../../_includes/ctrl_openDB.php';
		
   // A partir de aca codigo particular al modulo.

    require 'model/modelMonedas.php';
    $model = new modelMonedas($con->db);    

    
    $mvc->setModule("coins");    

    $infoMonedas = $model->getAllMonedas();
    
    $mvc->assign("LISTA_MONEDAS", $infoMonedas);    
    
    $page = $mvc->fetch("allMonedas.tpl");
    
    // Pie del control
    require '../../_includes/ctrl_footer.php';     

?>