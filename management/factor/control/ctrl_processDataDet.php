<?php

	// Encabezado del control que verificar si la session expiro.
	require '../../_includes/ctrl_checksession.php';

	// Se abra la conexion a la BD.
	require '../../_includes/ctrl_openDB.php';
	
	// A partir de aca codigo particular del modulo
    require 'model/modelData.php';
    $model = new modelData($con->db); 

		
    	$action      	= $_POST["action"];
    	$id    		 	= $_POST["fId"];
    	$numLinea 		= $_POST["fNumLinea"];
    	$descripcion 	= $_POST["fdescripcion"];

    $result="OK";
    switch($action){
    	case 1: // insertar
    			
    		    $result = $model->insertarDataDet($id,$numLinea,$descripcion);
    		   
    		break;
    		
    	case 2: // modificar
    		
    		    $result = $model->modificarDataDet($id,$numLinea,$descripcion);
				
    		break;

    	case 3: // borrar
    			
    		    $result = $model->borrarDataDet($id,$numLinea);
    		
    		break;    		
    		
    }
    
	if ($result == "OK"){
		// La operacion fue exitosa, se redirecciona al usuario a la pantalla de la lista
		// de eventos.
    	header("Location: ../factor/Data.php?action=5&id=".$id);
    }else{
    	// Hubo en error inesperado en la operacion en la base de datos.
    	// La variable $result  tiene el mensaje que se le debe
    	// desplegar al usuario  	           
  	    header("Location: ../../resources/misc/errorMsg.php?errormsg=".$result);
    }            
?>