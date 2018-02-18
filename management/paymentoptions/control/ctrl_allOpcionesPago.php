<?php
	// Encabezado del control
	require '../../_includes/ctrl_header.php';

	// Se abra la conexion a la BD.
	require '../../_includes/ctrl_openDB.php';
		
   // A partir de aca codigo particular al modulo.

    require 'model/modelOpcionesPago.php';
    $model = new modelOpcionesPago($con->db);    
    
    $mvc->setModule("paymentoptions");

    $infoOpcionesPago = $model->getAllOpcionesPago();
    
    $mvc->assign("LISTA_OPCIONESPAGO", $infoOpcionesPago);
    
    $page = $mvc->fetch("allOpcionesPago.tpl");
    
    // Pie del control
    require '../../_includes/ctrl_footer.php';   
  
?>