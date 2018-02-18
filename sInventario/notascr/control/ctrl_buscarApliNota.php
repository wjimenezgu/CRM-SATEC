<?php

	// Encabezado del control que verificar si la session expiro.
	require '../../_includes/ctrl_checksession.php';
	
	// Encabezado del control
	require '../../_includes/ctrl_header.php';

	// Se abra la conexion a la BD.
	require '../../_includes/ctrl_openDB.php';

    require 'model/modelnotascr.php';
    $model = new modelnotascr($con->db);    
        
    $mvc->setModule("notascr");
    
    $idNota = $_POST["idNotaB"];
    
  
    $infoApliNota= $model->buscarApliNota($idNota);
           
    $mvc->assign("LISTA_APLINOTA", $infoApliNota); 
              
    $mvc->display("listaplinota.tpl");          

?>