<?php

	// Encabezado del control que verificar si la session expiro.
	require '../../_includes/ctrl_checksession.php';

	// Se abra la conexion a la BD.
	require '../../_includes/ctrl_openDB.php';
	
	// A partir de aca codigo particular del modulo
    require 'model/modelItems.php';
    $model = new modelItems($con->db); 
    
    $action      	= $_POST["action"];
    $idItem     	= $_POST["fidItem"];
    $Descripcion 	= $_POST["fDescripcion"];
    $codigoExterno  = $_POST["fcodigoExterno"];    
    $descExterno    = $_POST["fdescExterno"];    
    $minimo         = str_replace(',', '', $_POST["fminimo"]);
    $maximo        	= str_replace(',', '', $_POST["fmaximo"]);
    $reorden        = str_replace(',', '', $_POST["freorden"]);
    $costo        	= str_replace(',', '', $_POST["fcosto"]);
    $precio         = str_replace(',', '', $_POST["fprecio"]);
    $porceComision  = str_replace(',', '', $_POST["fporceComision"]);
    $factorUtilidad	= str_replace(',', '', $_POST["ffactorUtilidad"]);
    $codigoBarras	= $_POST["fcodigoBarras"];
    $exento			= $_POST["fexento"];
    $existencia     = $_POST["fexistencia"];
    $selEstadoArti	= $_POST["selEstadoArti"];
    $selCategoria	= $_POST["selCategoria"];
    $selProveedor   = $_POST["selProveedor"];
    if ($minimo == ""){
    	$minimo = "0";
    }
    if ($maximo == ""){
    	$maximo = "0";
    }
    if ($reorden == ""){
    	$reorden = "0";
    }
    if ($porceComision == ""){
    	$porceComision = "0.00";
    }
    if ($factorUtilidad == ""){
    	$factorUtilidad = "0.00";
    }
    if ($selCategoria == "0"){
    	$selCategoria = "1";
    }
    if ($existencia == ""){
        $existencia = "0";
    }
    
    
    
    
    $result = "OK";

    switch($action){
    	case 1: // insertar

    		    $result = $model->insertarItem($idItem,$Descripcion,$minimo,$maximo,$reorden,
                         $precio, $costo,$porceComision,$factorUtilidad,$codigoBarras,
                         $exento,$selEstadoArti,$selCategoria,$selProveedor,$codigoExterno,
                         $descExterno,$existencia);

    		
    		break;
    		
    	case 2: // modificar
    		
    		    $result = $model->modificarItem($idItem,$Descripcion,$minimo,$maximo,$reorden,
                         $precio, $costo,$porceComision,$factorUtilidad,$codigoBarras,
                         $exento,$selEstadoArti,$selCategoria,$selProveedor,$codigoExterno,
                         $descExterno,$existencia);
    		
    		break;

    	case 3: // borrar
    		
    		    $result = $model->borrarItem($idItem);
    		
    		break; 

    	case 3: // ver movimientos
    		
    			$result = "OK";
    		
    	break;
    		
    		
    }
    
	if ($result == "OK"){
		// La operacion fue exitosa, se redirecciona al usuario a la pantalla de la lista
		// de eventos.
    	header("Location: ../items");
    }else{
    	// Hubo en error inesperado en la operacion en la base de datos.
    	// La variable $result  tiene el mensaje que se le debe
    	// desplegar al usuario  	           
  	    header("Location: ../../resources/misc/errorMsg.php?errormsg=".$result);
    }            
?>