<?php

	// Encabezado del control que verificar si la session expiro.
	require '../../_includes/ctrl_checksession.php';

	// Se abra la conexion a la BD.
	require '../../_includes/ctrl_openDB.php';
	
	// A partir de aca codigo particular del modulo
    require 'model/modeltomafisica.php';
    $model = new modeltomafisica($con->db); 
    
    $codigo 	= $_GET["codigo"];
    $barras 		= $_GET["barras"];
    $ubica 		= $_GET["ubica"];
    
    
	$result = $model->updAsociaArticulo($codigo,$barras,$ubica);

	echo $result;
   
?>

