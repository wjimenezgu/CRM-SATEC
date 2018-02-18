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
    $userVendedor 	 	= $_POST["fuserVendedor"];
    $passVerificador 	= $_POST["fpassVerificador"];
    $nombreVendedor	    = $_POST["fnombreVendedor"];

    

    $result="OK";
    switch($action){
    	case 1: // insertar
    		
    		    $result = $model->insertarData($userVendedor,$passVerificador,$nombreVendedor);
			
    		break;
    		
    	case 2: // modificar
    		
    		    $result = $model->modificarData($userVendedor,$passVerificador,$nombreVendedor);
			
    		
    		break;

    	case 3: // borrar
    			
    		    $result = $model->borrarData($userVendedor);
    		
    		break;    		
    		
    }
    
	if ($result == "OK"){
		// La operacion fue exitosa, se redirecciona al usuario a la pantalla de la lista
		// de eventos.
    	header("Location: ../invvendedores");
    }else{
    	// Hubo en error inesperado en la operacion en la base de datos.
    	// La variable $result  tiene el mensaje que se le debe
    	// desplegar al usuario  	           
  	    header("Location: ../../resources/misc/errorMsg.php?errormsg=".$result);
    }            
?>