<?php
	// Encabezado del control que verificar si la session expiro.
	require '../../_includes/ctrl_checksession.php';
	
	// Encabezado del control
	require '../../_includes/ctrl_header.php';
	
	// Se abra la conexion a la BD.
	require '../../_includes/ctrl_openDB.php';
	
	require 'model/modelalistar.php';
	$model = new modelalistar($con->db);
	
	$mvc->setModule("alistar");
    
    $tableData = stripcslashes($_POST['pTableData']);

	// Decode the JSON array
	$tableData = json_decode($tableData,TRUE);

	// now $tableData can be accessed like a PHP array
	$idTienda   = $_POST["pidTienda"];
    $result = $model->saveArtiAlistar($idTienda,$tableData);
	if ($result !== "OK"){
   		// Hubo en error inesperado en la operacion en la base de datos.
   		// La variable $result  tiene el mensaje que se le debe
   		// desplegar al usuario  	           
	  	//header("Location: ../../resources/misc/errorMsg.php?errormsg=".$result);
	  	echo $result;
	}         
    echo 'Operacion Exitosa';
    //header("Location: listOrders.php");    

?>