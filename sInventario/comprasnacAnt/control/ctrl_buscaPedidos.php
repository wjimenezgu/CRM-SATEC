<?php

	// Encabezado del control que verificar si la session expiro.
	require '../../_includes/ctrl_checksession.php';
	
	// Encabezado del control
	require '../../_includes/ctrl_header.php';

	// Se abra la conexion a la BD.
	require '../../_includes/ctrl_openDB.php';
	
    require 'model/modelcomprasnac.php';
    $model = new modelcomprasnac($con->db);        

    // Se valida las opciones que el usuario puede ver
    require '../../_includes/ctrl_opthide.php';    
    
    $mvc->setModule("comprasnac");
	
    $criterio = $_POST["criterio"]; 
  
	$infoComprasNac = $model->getAllComprasNac($criterio);
           
    $mvc->assign("LISTA_COMPRASNAC", $infoComprasNac);
              
    $mvc->display("listpedidos.tpl");          

?>