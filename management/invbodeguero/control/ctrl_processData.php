<?php

	// Encabezado del control que verificar si la session expiro.
	require '../../_includes/ctrl_checksession.php';

	// Se abra la conexion a la BD.
	require '../../_includes/ctrl_openDB.php';
	
	// A partir de aca codigo particular del modulo
    require 'model/modelData.php';
    $model = new modelData($con->db);
    
    
    /*
     echo "<pre>";
     print_r($_POST);
     echo "<pre>";
     exit;
    */ 
		
    $action      	= $_POST["action"];
    $userBodeguero 	 	= $_POST["fuserBodeguero"];
    $passVerificador 	= $_POST["fpassVerificador"];
    $nombreBodeguero	    = $_POST["fnombreBodeguero"];

    

    $result="OK";
    switch($action){
    	case 1: // insertar
    		
    		    $result = $model->insertarData($userBodeguero,$passVerificador,$nombreBodeguero);
			
    		break;
    		
    	case 2: // modificar
    		
    		    $result = $model->modificarData($userBodeguero,$passVerificador,$nombreBodeguero);
			
    		
    		break;

    	case 3: // borrar
    			
    		    $result = $model->borrarData($userBodeguero);
    		
    		break;    		
    		
    }
    
	if ($result == "OK"){
		// La operacion fue exitosa, se redirecciona al usuario a la pantalla de la lista
		// de eventos.
    	header("Location: ../invbodeguero");
    }else{
    	// Hubo en error inesperado en la operacion en la base de datos.
    	// La variable $result  tiene el mensaje que se le debe
    	// desplegar al usuario  	           
  	    header("Location: ../../resources/misc/errorMsg.php?errormsg=".$result);
    }            
?>