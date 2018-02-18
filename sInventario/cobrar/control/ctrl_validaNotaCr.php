<?php

	// Encabezado del control que verificar si la session expiro.
	require '../../_includes/ctrl_checksession.php';

	// Se abra la conexion a la BD.
	require '../../_includes/ctrl_openDB.php';
	
	// A partir de aca codigo particular del modulo
    require 'model/modelcobrar.php';
    $model = new modelcobrar($con->db); 
    
    $idTienda 		= $_GET["idTienda"];
    $numDocuNotaCr  = $_GET["numDocuNotaCr"];
    
    $result = $model->getNotaCr($idTienda,$numDocuNotaCr);
    
    echo $result;
    
   //echoH $result;
   //echo $result;

   
?>

