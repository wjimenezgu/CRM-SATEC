<?php

	// Encabezado del control que verificar si la session expiro.
	require '../../_includes/ctrl_checksession.php';

	// Se abra la conexion a la BD.
	require '../../_includes/ctrl_openDB.php';
	
	// A partir de aca codigo particular del modulo
    require 'model/modelreparaciones.php';
    $model = new modelreparaciones($con->db); 

/*
     echo "<pre>";
     print_r($_POST);
     echo "<pre>";
     exit;
*/
    $action      	= $_POST["action"];
    $idTienda      	= $_POST["id_tienda"];
    $vendedor		= $_POST["fVendedor"];
    $idReparacion	= $_POST["fIdReparacion"];
    //$tempFC     	= explode("/", $_POST["fFechaRecibido"]); //15/09/2015
    $fechaRecibido 	= date('y/m/d H:i:s');    
    $equipo 		= $_POST["fEquipo"];
    $modelo 		= $_POST["fModelo"];
    $marca 			= $_POST["fMarca"];
    $serie 			= $_POST["fSerie"];
    $accesorio 		= $_POST["fAccesorio"];
    $problema 		= $_POST["fProblema"];
    $obs            = $_POST["fObs"];
    $garantia 		= $_POST["selectGarantia"];
    $tiraCliente 	= explode("|", $_POST["selectCliente"]); // 1882|Juan Perez Perez|jprez@correo.com||
    $idCliente		= $tiraCliente[0];   
    $adelanto 		= str_replace(',', '', $_POST["fAdelanto"]);
    $manoDeObra 	= str_replace(',', '', $_POST["fManoDeObra"]);
    $totalReparacion  = str_replace(',', '', $_POST["fTotalReparacion"]);
    $numFacGarantia   = $_POST["fNumFactura"];
    $insEveFinRepara  = $_POST["insEveFinRepara"];
    $finReap 		= $_POST["selectFinRepa"];
        
    switch($action){
    	case 1: // insertar
    		
    		    $result = $model->insertarReparacion($idTienda,$vendedor,$idCliente,$fechaRecibido,NULL,NULL,NULL,NULL,NULL,
    		                                         $equipo,$accesorio,$marca,$modelo,$serie,$garantia,$numFacGarantia,$problema,$obs,$adelanto,
    		                                         $manoDeObra,$totalReparacion,$finReap);		
    		break;
    		
    	case 2: // modificar
    		
    		    $result = $model->modificarReparacion($idReparacion,$idTienda,$vendedor,$idCliente,$fechaRecibido,NULL,NULL,NULL,NULL,NULL,
    		                                         $equipo,$accesorio,$marca,$modelo,$serie,$garantia,$numFacGarantia,$problema,$obs,$adelanto,
    		                                         $manoDeObra,$totalReparacion,$finReap);
    		    
    		    if ($insEveFinRepara == "01"){
    		    	$resultE         = $model->saveEvento($idReparacion, '103', '',$vendedor,'');
    		    }
    		break;

    	case 3: // borrar
    		
    		    $result = $model->borraReparacion($idReparacion);
    		
    		break;    		
 		
    }
    
	if ($result == "OK"){
		// La operacion fue exitosa, se redirecciona al usuario a la pantalla de la lista
		// de eventos.
    	header("Location: ../reparaciones");
    }else{
    	// Hubo en error inesperado en la operacion en la base de datos.
    	// La variable $result  tiene el mensaje que se le debe
    	// desplegar al usuario  	           
  	    header("Location: ../../resources/misc/errorMsg.php?errormsg=".$result);
    }            
?>