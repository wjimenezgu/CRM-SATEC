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
    $EoS			= $_POST["EoS"];
    $tiendaOrigen 	= $_POST["id_tienda"];
    $tiendaDestino 	= $_POST["selectTiendaDestino"];
    $detalle     	= $_POST["fdetalle"];
    //$codTipoMov  	= $_POST["selectTipoMov"];
    if ($_POST["fecMovimiento"] ==""){
    	$tempFC     	= explode("/", $_POST["ffecha"]);
    }else{
    	$tempFC     	= explode("/", $_POST["fecMovimiento"]);
    }
    $fecMovimiento 	= "$tempFC[2]-$tempFC[1]-$tempFC[0]";
    $idTraslado    	= $_POST["id_traslado"];
    $estado    		= $_POST["estado"];

    switch($action){
    	case 1: // insertar
    			$result = "OK";
    		    $idTraslado = $model->insEncTraslado($tiendaOrigen, $tiendaDestino,$fecMovimiento, $detalle);
    			if ($idTraslado!=0){
    				$i=0;
    				foreach($_POST['item'] as $key => $value){
            			$desArticulo 	= $_POST['item'][$key];
            			$codArti 		= $_POST['codArti'][$key];
            			$cantidad 		= $_POST['cant'][$key];
            			$existencia 	= $_POST['existencia'][$key];
            			$i=$i+1;
            			$result2 = $model->insDetTraslado($idTraslado, $i, $codArti, $desArticulo,$cantidad,$existencia);
            		
    					if ($result2 != "OK"){
    						
	    					// Hubo en error inesperado en la operacion en la base de datos.
	    					// La variable $result2  tiene el mensaje que se le debe
	    					// desplegar al usuario  	           
	  	   					header("Location: ../../resources/misc/errorMsg.php?errormsg=".$result2);
		    			}  
    				}
    				// Todo salio bien, se redirecciona al usuario a la pantalla de hacer traslados.
    				if ($EoS=="O"){
    					header("Location: ../traslados/allSolcitar.php?EoS=O");
    				}else{
    					header("Location: ../traslados/allSolicitar.php?EoS=E");
    				}
    		  }else{
    				header("Location: ../../resources/misc/errorMsg.php?errormsg="."Error insperado al guardar encabezado Factura");
    		   }   		
    		break;
    		
    	case 2: // modificar
    		
    		    $result = $model->modEncTraslado($tiendaOrigen, $tiendaDestino, $idTraslado,$fecMovimiento, $estado, $detalle,$EoS);    		                     
    		    if ($result == "OK") {
    		    	//se borrar el detalle para insertarlo nuevo
    		    	$result = $model->borrarDetTraslado($tiendaOrigen, $idTraslado);
    		    	if ($result == "OK") {
    		    		// se inserta el nuevo detalle
    		    		$i=0;
    					foreach($_POST['item'] as $key => $value){
            				$desArticulo 	= $_POST['item'][$key];
            				$codArti 		= $_POST['codArti'][$key];
            				$cantidad 		= $_POST['cant'][$key];
            				$existencia 	= $_POST['existencia'][$key];
            				$i=$i+1;
            				$result2 = $model->insDetTraslado($idTraslado, $i, $codArti, $desArticulo,$cantidad,$existencia);
            		
    						if ($result2 != "OK"){
    						
	    					// Hubo en error inesperado en la operacion en la base de datos.
	    					// La variable $result2  tiene el mensaje que se le debe
	    					// desplegar al usuario  	           
	  	   						header("Location: ../../resources/misc/errorMsg.php?errormsg=".$result2);
		    				}  
    					}
    		    		// Todo salio bien, se redirecciona al usuario a la pantalla de hacer facturas.
    					if ($EoS=="O"){
    						header("Location: ../traslados/allSolicitar.php?EoS=O");
    					}else{
    						header("Location: ../traslados/allSolciitar.php?EoS=E");
    					}    		    		
    		    	}else{
    		    		header("Location: ../../resources/misc/errorMsg.php?errormsg=".$result);
    		    	}
    		    }else{
    		    	header("Location: ../../resources/misc/errorMsg.php?errormsg=".$result);
    		    }
    		
    		break;

    	case 3: // borrar
    		    $result = $model->borrarDetTraslado($tiendaOrigen,$idTraslado);
		    	if ($result == "OK") {
		    		$result = $model->borrarTraslado($tiendaOrigen,$idTraslado);
		    	}
    		   
    		    if ($result == "OK") {
    		    	// Todo salio bien, se redirecciona al usuario a la pantalla de hacer traslados.
    		    	if ($EoS=="O"){
    		    		header("Location: ../traslados/allSolicitar.php?EoS=O");
    		    	}else{
    		    		header("Location: ../traslados/allSolicitar.php?EoS=E");
    		    	}
    		    }else{
    		    	header("Location: ../../resources/misc/errorMsg.php?errormsg=".$result);
    		    }    		    
    		
    		break;

    	case 5: // aprobar
    		    if ($EoS == "O"){
    		    	$result = $model->modEncTraslado($tiendaOrigen, $tiendaDestino, $idTraslado,$fecMovimiento, "2", $detalle,$EoS);
    		    }else{
    		        $result = $model->modEncTraslado($tiendaOrigen, $tiendaDestino, $idTraslado,$fecMovimiento, "3", $detalle,$EoS);
    		    }
    		    if ($result == "OK") {
    		    	// Todo salio bien, se redirecciona al usuario a la pantalla de hacer traslados.
    					if ($EoS=="O"){
    						header("Location: ../traslados/allSolicitar.php?EoS=O");
    					}else{
    						header("Location: ../traslados/allSolicitar.php?EoS=E");
    					}    		    		
    		    }else{
    		    	header("Location: ../../resources/misc/errorMsg.php?errormsg=".$result);
    		    }    		
    		break;
    		
    	case 6: // rechazar
    		    if ($EoS == "O"){
    		    	$result = $model->modEncTraslado($tiendaOrigen, $tiendaDestino, $idTraslado,$fecMovimiento, "5", $detalle,$EoS);
    		    }else{
    		        $result = $model->modEncTraslado($tiendaOrigen, $tiendaDestino, $idTraslado,$fecMovimiento, "4", $detalle,$EoS);
    		    }
    		    if ($result == "OK") {
    		    	// Todo salio bien, se redirecciona al usuario a la pantalla de hacer traslados.
    					if ($EoS=="O"){
    						header("Location: ../traslados/allSolicitar.php?EoS=O");
    					}else{
    						header("Location: ../traslados/allSolicitar.php?EoS=E");
    					}    		    		
    		    }else{
    		    	header("Location: ../../resources/misc/errorMsg.php?errormsg=".$result);
    		    }    		
    		break;    		
    		
    }
    
	if ($result == "OK"){
		// La operacion fue exitosa, se redirecciona al usuario a la pantalla de la lista
		// de traslados.
		if ($EoS=="O"){
    		header("Location: ../traslados/allSolicitar.php?EoS=O");
		}else{
			header("Location: ../traslados/allSolicitar.php?EoS=E");
		}
    }else{
    	// Hubo en error inesperado en la operacion en la base de datos.
    	// La variable $result  tiene el mensaje que se le debe
    	// desplegar al usuario  	           
  	    header("Location: ../../resources/misc/errorMsg.php?errormsg=".$result);
    }            
?>