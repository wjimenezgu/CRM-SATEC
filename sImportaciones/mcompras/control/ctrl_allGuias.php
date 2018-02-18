<?php

	// Encabezado del control
	require '../../_includes/ctrl_header.php';

	// Se abra la conexion a la BD.
	require '../../_includes/ctrl_openDB.php';
		
   // A partir de aca codigo particular al modulo.

    require 'model/modelMCompras.php';  
    $model = new modelMCompras($con->db);
    $mvc->setModule("mcompras");

    
    $infoRegs = $model->getAllGuias();
    
    $mvc->assign("LISTA_REGS", $infoRegs);

    $page = $mvc->fetch("allGuias.tpl");
    
    // Pie del control
	require '../../_includes/ctrl_footer.php';
    
?>