<?php

	// Encabezado del control que verificar si la session expiro.
	require '../../_includes/ctrl_checksession.php';

	// Se abra la conexion a la BD.
	require '../../_includes/ctrl_openDB.php';
	
	// A partir de aca codigo particular del modulo
    require 'model/modelEventos.php';
    $model = new modelEventos($con->db); 
    
    $action      = $_POST["action"];
    $idEvento    = $_POST["fIdEvento"];
    $descripcion = $_POST["fDescripcion"];

    switch($action){
    	case 1: // insertar
    		
    		    $result = $model->insertarEvento($idEvento,$descripcion);
    		
    		break;
    		
    	case 2: // modificar
    		
    		    $result = $model->modificarEvento($idEvento,$descripcion);
    		
    		break;

    	case 3: // borrar
    		
    		    $result = $model->borrarEvento($idEvento);
    		
    		break;    		
    		
    }
    
	if ($result == "OK"){
		// La operacion fue exitosa, se redirecciona al usuario a la pantalla de la lista
		// de eventos.
    	header("Location: ../events");
    }else{
    	// Hubo en error inesperado en la operacion en la base de datos.
    	// La variable $result  tiene el mensaje que se le debe
    	// desplegar al usuario  	           
  	    header("Location: ../../resources/misc/errorMsg.php?errormsg=".$result);
    }            
?>