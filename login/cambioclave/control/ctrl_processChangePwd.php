<?php

	// Encabezado del control que verificar si la session expiro.
	require '../../_includes/ctrl_checksession.php';

	// Se abra la conexion a la BD.
	require '../../_includes/ctrl_openDB.php';
	
	// A partir de aca codigo particular del modulo
    require 'model/modelcambioclave.php';
    $model = new modelCambioClave($con->db); 
    
    $userName   	= $_SESSION["USER_SESSION"];
    $claveActual    = $_POST["fClaveActual"];
    $claveNueva    	= $_POST["fNuevaClave"];
    $hostName 		= 'localhost';
   		
    $result = $model->cambioClave($userName,$claveNueva,$claveActual,$hostName);
    		    
	if ($result == "OK"){
		// La operacion fue exitosa, se redirecciona al usuario a la pantalla de la lista
		// de eventos.
    	header("Location: ../../security/closeSession.php");
    }else{
    	// Hubo en error inesperado en la operacion en la base de datos.
    	// La variable $result  tiene el mensaje que se le debe
    	// desplegar al usuario  	           
  	    header("Location: ../../resources/misc/errorMsg.php?errormsg=".$result);
    }            
?>