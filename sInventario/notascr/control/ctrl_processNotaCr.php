<?php
 
	// Encabezado del control que verificar si la session expiro.
	require '../../_includes/ctrl_checksession.php';

	// Se abra la conexion a la BD.
	require '../../_includes/ctrl_openDB.php';
	
	// A partir de aca codigo particular del modulo
    require 'model/modelnotascr.php';
    $model = new modelnotascr($con->db); 
    
    

    
    if(isset($_SESSION["TIENDA_ID"])){
    	$idtienda   = $_SESSION["TIENDA_ID"];
    	$nameTienda = $_SESSION["TIENDA_NOMBRE"];
    }else {
    	$nickname = $_SESSION["USER_SESSION"];
    	$infoTienda = $model->getTiendaLocal($nickname);
    	$_SESSION["TIENDA_ID"]     = $infoTienda[0]["codTienda"];
    	$_SESSION["TIENDA_NOMBRE"] = $infoTienda[0]["nameTienda"];
    	$nameTienda = $infoTienda[0]["nameTienda"];
    	$idtienda   = $infoTienda[0]["codTienda"];
    }
/*
    echo "<pre>";
     print_r($_POST);
     echo "<pre>";
     exit;

 */  
    	$action      	= $_POST["action"];
    	$idfact    		= $_POST["idfact"];
    	$idNota    		= $_POST["idNota"];
    	$numNota   		= $_POST["numNota"];
    	$vendedor	 	= $_POST["fVendedor"];
   // 	$idtienda	 	= $_POST["idtienda"];
    	$numDocuFact	= trim($_POST["numDocuFact"]);
    //	$fecNota	 	= $_POST["fecNota"];
    	
    	$tempFC     	= explode("/", $_POST["fecNota"]);
		$ano 			= trim($tempFC[2]);
    	$fecNota 		= "$ano-$tempFC[1]-$tempFC[0]";    	
    	$razonNota	 	= $_POST["razonNota"];
    	$devoSiNo		= $_POST["fdevoSiNo"];
    	$montoNota		= trim($_POST["total"]);
    	// el monto Nota viene con comas, hay que quitarlas.
    	$montoNota 		= str_replace(",","",$montoNota);
    	$montoDev   	= trim($_POST["montodev"]);
    	$montoDev 		= str_replace(",","",$montoDev);
    	$tiraArti 		= $_POST["tiraArti"];
    	$totalivnota   	= trim($_POST["totalivnota"]);
    	$totalivnota 	= str_replace(",","",$totalivnota);

    $result="OK";
    switch($action){
    	case 1: // insertar
    			
    		    $result = $model->insertarData($idfact,$vendedor,$idtienda,$fecNota,$razonNota,$devoSiNo,$montoNota,$totalivnota,$tiraArti);
    		   
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
    		
    	case 9: // es una devolucion de dinero
    			// como es MANUAL no requiere un numero de factura
    		
    			$result = $model->devDineroNota($idtienda,$fecNota,$idNota,$vendedor,$montoDev);
    		
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
