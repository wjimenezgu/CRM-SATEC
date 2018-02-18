<?php

	// Encabezado del control
	require '../../_includes/ctrl_header.php';

	// Se abra la conexion a la BD.
	require '../../_includes/ctrl_openDB.php';
	
  	// A partir de aca codigo particular del modulo    
    require 'model/modelreparaciones.php';
    $model = new modelreparaciones($con->db); 
    
    $idInsert = $model->saveEvento($_POST["idReparacion"], $_POST["idEvento"], $_POST["comment"]);
    
    $event["fecha"]      = $idInsert["fecEvento"];
    $event["usuario"]    = $idInsert["userIns"];
    $event["evento"]     = $_POST["idEvento"]." | ".$_POST["nameEvent"];
    $event["comentario"] = $_POST["comment"];
    $event["dias"]       = "0";   
    
    echo json_encode($event);

?>