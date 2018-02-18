<?php
	// Encabezado del control que verificar si la session expiro.
	// si la session expiro se redirecciona a la pantalla de login
	require '../../_includes/ctrl_checksession.php';
	
    session_start();
    error_reporting(E_PARSE);    
    require '../../_config/db/UserConnection.php';          
    $userConnect = new UserConnection($_SESSION["USER_SESSION"], $_SESSION["PWD_USER"] );

    require '../../_config/db/DBConexion.php';
    $con = new DBConexion(1, $userConnect);    

    require 'model/modelMCompras.php';
    $model = new modelMCompras($con->db); 
    
    $tableData = stripcslashes($_POST['pTableData']);

	// Decode the JSON array
	$tableData = json_decode($tableData,TRUE);

	// now $tableData can be accessed like a PHP array
	
    //Fecha de Corte utilizada
    $tempFC     = explode("/", $_POST["pfechaCorte"]);
    $fCorte = "$tempFC[2]-$tempFC[1]-$tempFC[0]";
    $numTarjeta    = $_POST["numTarjeta"];
    $action        = $_POST["action"];
    $idProveedor   = $_POST["idProveedor"];
    	
    $result = $model->saveDocsConciliar($tableData,$fCorte,$numTarjeta,$idProveedor,$action);
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