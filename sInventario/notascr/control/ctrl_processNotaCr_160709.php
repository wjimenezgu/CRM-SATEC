<?php

	// Encabezado del control que verificar si la session expiro.
	require '../../_includes/ctrl_checksession.php';

	// Se abra la conexion a la BD.
	require '../../_includes/ctrl_openDB.php';
	
	// A partir de aca codigo particular del modulo
    require 'model/modelnotascr.php';
    $model = new modelnotascr($con->db); 
/*
     echo "<pre>";
     print_r($_POST);
     echo "<pre>";
     exit;

 */    
    	$action      	= $_POST["action"];
    	$idfact    		= $_POST["idfact"];
    	$numNota   		= $_POST["numNota"];
    	$vendedor	 	= $_POST["fVendedor"];
    	$idtienda	 	= $_POST["idtienda"];
    	$numDocuFact	= $_POST["numDocuFact"];
    //	$fecNota	 	= $_POST["fecNota"];
    	
    	$tempFC     	= explode("/", $_POST["fecNota"]);
    	$fecNota 		= "$tempFC[2]-$tempFC[1]-$tempFC[0]";    	
    	
    	$razonNota	 	= $_POST["razonNota"];
    	$devoSiNo		= $_POST["fdevoSiNo"];
    	$montoNota		= $_POST["total"];
    	// el monto Nota viene con comas, hay que quitarlas.
    	$montoNota 		= str_replace(",","",$montoNota);

    $result="OK";
    switch($action){
    	case 1: // insertar
    			
    		    $result = $model->insertarData($idfact,$vendedor,$idtienda,$fecNota,$razonNota,$devoSiNo);
    		   
    		break;
    		
    	case 2: // modificar
    		
    		    $result = $model->modificarData($id,$descripcion);
				
    		break;

    	case 3: // borrar
    			
    		    $result = $model->borrarData($id);
    		
    		break;

    	case 7: // insertar manual, significa que ya tengo un NUMERO DE NOTA que no habia en el sistema
    		    // como es MANUAL no requiere un numero de factura
    			 
    			$result = $model->insertarDataM($numNota,0,$vendedor,$idtienda,$fecNota,$razonNota,$montoNota,0.00,$numDocuFact);
    				
    		break;
    		
    }
    
	if ($result == "OK"){
		// La operacion fue exitosa, se redirecciona al usuario a la pantalla de la lista
		// de eventos.
    	header("Location: ../notascr");
    }else{
    	// Hubo en error inesperado en la operacion en la base de datos.
    	// La variable $result  tiene el mensaje que se le debe
    	// desplegar al usuario  	           
  	    header("Location: ../../resources/misc/errorMsg.php?errormsg=".$result);
    }            
?>