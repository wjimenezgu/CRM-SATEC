<?php

	// Encabezado del control que verificar si la session expiro.
	require '../../_includes/ctrl_checksession.php';
	
	// Encabezado del control
	require '../../_includes/ctrl_header.php';

	// Se abra la conexion a la BD.
	require '../../_includes/ctrl_openDB.php';

    require 'model/modelproformas.php';
    $model = new modelproformas($con->db);    
        
    $mvc->setModule("proformas");
    
    $idProforma = $_POST["idProforma"];
    
  
    $infoDetProfArti = $model->buscarDetProfArti($idProforma);
           
    $mvc->assign("LISTA_DETPROFARTI", $infoDetProfArti); 
              
    $mvc->display("listdetprofarti.tpl");          

?>