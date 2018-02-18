<?php

	// Encabezado del control que verificar si la session expiro.
	require '../../_includes/ctrl_checksession.php';

	// Se abra la conexion a la BD.
	require '../../_includes/ctrl_openDB.php';
	
	// A partir de aca codigo particular del modulo
    require 'model/modelMCompras.php';

    $model = new modelMCompras($con->db);

 
    $action      = $_POST["action"];
    $numguia     = $_POST["numGuia"];
    $whr         = $_POST["fwhr"];
    $whrAnt      = $_POST["fwhrAnt"];

    switch($action){
    	case 1: // insertar
    		
    		    $result = $model->insertarGuiaWhr($numguia,$whr);
    		
    		break;
    		
    	case 2: // modificar
    		
    		    $result = $model->modificarGuiaWhr($numguia,$whr,$whrAnt);
    		
    		break;

    	case 3: // borrar
    		
    		    $result = $model->borrarGuiaWhr($numguia, $whr);
    		
    		break;    		
    		
    }

	if ($result == "OK"){
		// La operacion fue exitosa, se redirecciona al usuario a la pantalla de la lista
		// de eventos.
    	header("Location: ../mcompras/allGuiaWhrs.php?id=".$numguia);
    }else{
    	// Hubo en error inesperado en la operacion en la base de datos.
    	// La variable $result  tiene el mensaje que se le debe
    	// desplegar al usuario  	           
  	    header("Location: ../../resources/misc/errorMsg.php?errormsg=".$result);
    }            
?>