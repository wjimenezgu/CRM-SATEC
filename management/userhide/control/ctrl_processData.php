<?php

	// Encabezado del control que verificar si la session expiro.
	require '../../_includes/ctrl_checksession.php';

	// Se abra la conexion a la BD.
	require '../../_includes/ctrl_openDB.php';
	
	// A partir de aca codigo particular del modulo
    require 'model/modelData.php';
    $model = new modelData($con->db); 
    
    /*echo "<pre>";
     print_r($_POST);
     echo "<pre>";
     print $resul;
     exit;*/
		
    $action      	= $_POST["action"];
    $id      	 	= $_POST["fId"];
    $sysname        = $_POST["fsysname"];
    $idform	 	    = $_POST["fidform"];
    $idfield	 	= $_POST["fidfield"];

    

    $result="OK";
    switch($action){
    	case 1: // insertar
    		
    		    $result = $model->insertarData($id,$sysname,$idform,$idfield);
			
    		break;
    		
    	case 2: // copiar
    		
    		    $result = $model->copiarData($id,$sysname,$idform,$idfield);
			
    		
    		break;

    	case 3: // borrar
    			
    		    $result = $model->borrarData($id,$sysname,$idform,$idfield);
    		
    		break;    		
    		
    }
    
	if ($result == "OK"){
		// La operacion fue exitosa, se redirecciona al usuario a la pantalla de la lista
		// de eventos.
    	header("Location: ../userhide");
    }else{
    	// Hubo en error inesperado en la operacion en la base de datos.
    	// La variable $result  tiene el mensaje que se le debe
    	// desplegar al usuario  	           
  	    header("Location: ../../resources/misc/errorMsg.php?errormsg=".$result);
    }            
?>