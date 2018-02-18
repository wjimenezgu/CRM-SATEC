<?php

	// Encabezado del control que verificar si la session expiro.
	require '../../_includes/ctrl_checksession.php';

	// Se abra la conexion a la BD.
	require '../../_includes/ctrl_openDB.php';
	
	// A partir de aca codigo particular del modulo
    require 'model/modeltomafisica.php';
    $model = new modeltomafisica($con->db); 
/*
        echo "<pre>";
        print_r($_POST);
        echo "<pre>";        
 		exit;
 */
    $tienda 	= $_POST["id_tienda"];
    $tempFE     = explode("-", $_POST["fecToma"]);
    $tempFT     = explode("/", $tempFE[0]);
    $fecToma    = $tempFT[2].'-'.$tempFT[1].'-'.$tempFT[0].' '.$tempFE[1];
 
    $i=0;
    	
    foreach($_POST['item'] as $key => $value){
            $codArti = $_POST['codArti'][$key];
            $cant = $_POST['cant'][$key];
            $i=$i+1;
            $result = $model->insDetTomaFisica($tienda,$i,$fecToma,$codArti,$cant);
            
    		if ($result !== "OK"){
	    	// Hubo en error inesperado en la operacion en la base de datos.
	    	// La variable $result  tiene el mensaje que se le debe
	    	// desplegar al usuario  	
	    	          
	  	   		header("Location: ../../resources/misc/errorMsg.php?errormsg=".$result);
	  	   		return;
		    }      	
    } // foreach
    // Todo salio bien, se redirecciona al usuario a la pantalla de hacer toma fisica.
    
    header("Location: ../tomafisica/index.php");
             
?>

