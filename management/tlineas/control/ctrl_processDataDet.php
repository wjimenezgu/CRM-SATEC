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
    exit;*/
 
   	
    	$action      	= $_POST["action"];
    	$id 			= $_POST["fId"];
    	$descripcion 	= $_POST["fdescripcion"];
    	$linea1	        = $_POST["flinea1"];
    	$linea2	        = $_POST["flinea2"];
    	$linea3	        = $_POST["flinea3"];
    	$tipoLinea 		= $_POST["ftipolinea"];
    	

    $result="OK";
    switch($action){
    	case 1: // insertar
    			
    		    $result = $model->insertarDataDet($descripcion,$linea1,$linea2,$linea3,$tipoLinea);
    		   
    		break;
    		
    	case 2: // modificar
    		
    		    $result = $model->modificarDataDet($id,$descripcion,$linea1,$linea2,$linea3,$tipoLinea);
				
    		break;

    	case 3: // borrar
    			
    		    $result = $model->borrarDataDet($id,$tipoLinea);
    		
    		break;    		
    		
    }
    
	if ($result == "OK"){
		// La operacion fue exitosa, se redirecciona al usuario a la pantalla de la lista
		// de eventos.
    	header("Location: ../tlineas/Data.php?action=5&id=".$tipoLinea); 
    	/// tipolinea era el id maestro para cambiar de pantalla y coger el id maestro se hizo este cambio///
    	///                                                                                               ///
    }else{
    	// Hubo en error inesperado en la operacion en la base de datos.
    	// La variable $result  tiene el mensaje que se le debe
    	// desplegar al usuario  	           
  	    header("Location: ../../resources/misc/errorMsg.php?errormsg=".$result);
    }            
?>