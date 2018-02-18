<?php

	// Encabezado del control que verificar si la session expiro.
	require '../../_includes/ctrl_checksession.php';

	// Se abra la conexion a la BD.
	require '../../_includes/ctrl_openDB.php';
	
	// A partir de aca codigo particular del modulo
    require 'model/modelBill.php';
    $model = new modelBill($con->db); 
    
    $criterio 	= $_GET["criterio"];
    $valor 		= $_GET["valor"];
    
	$result = $model->getArticulo($_SESSION["TIENDA_ID"],$criterio,$valor);

	echo $result;
   
?>

