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


Array
(
    [action] => 1
    [idP] => 2
    [id] => 
    [nivelP] => 1
    [nivelStrP] => 01.01    
    [sigteIdHijoP] => 2
    [fdescripcion] => TRIPLE A
    [enviar] => 
)

*/

		
    $action      	= $_POST["action"];
    $id    		 	= $_POST["fId"];
    $descripcion 	= $_POST["fdescripcion"];
    $idPadre 		= $_POST["idP"];
    $nivel 			= $_POST["nivelP"];
    $nivelStr		= $_POST["nivelStrP"];
    $sigteIdHijo	= $_POST["sigteIdHijoP"];
    
	//echo $action,'/',$id,'/',$descripcion,'/',$idPadre,'/',$nivel,'/',$nivelStr,'/',$sigteIdHijo,'/' ;exit;

    $result="OK";
    switch($action){
    	case 1: // insertar
    		
    		    $result = $model->insertarData($descripcion,$idPadre,$nivel,$nivelStr,$sigteIdHijo);
			
    		break;
    		
    	case 2: // modificar
    		
    		    $result = $model->modificarData($id,$descripcion);
			
    		
    		break;

    	case 3: // borrar
    			
    		    $result = $model->borrarData($id);
    		
    		break;    		
    		
    }
    
	if ($result == "OK"){
		// La operacion fue exitosa, se redirecciona al usuario a la pantalla de la lista
		// de eventos.
    	header("Location: ../categories");
    }else{
    	// Hubo en error inesperado en la operacion en la base de datos.
    	// La variable $result  tiene el mensaje que se le debe
    	// desplegar al usuario  	           
  	    header("Location: ../../resources/misc/errorMsg.php?errormsg=".$result);
    }            
?>