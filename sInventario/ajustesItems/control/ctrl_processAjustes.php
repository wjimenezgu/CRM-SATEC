<?php

	// Encabezado del control que verificar si la session expiro.
	require '../../_includes/ctrl_checksession.php';

	// Se abra la conexion a la BD.
	require '../../_includes/ctrl_openDB.php';
	
	// A partir de aca codigo particular del modulo
    require 'model/modelajustesitems.php';
    $model = new modelajustesitems($con->db); 
/*
        echo "<pre>";
        print_r($_POST);
        echo "<pre>";        
 		exit;
 */   
    $action      	= $_POST["action"];
    $EoS			= $_POST["EoS"];
    $tienda 	 	= $_POST["id_tienda"];
    $detalle     	= $_POST["fdetalle"];
    $codTipoMov  	= $_POST["selectTipoMov"];
    $tempFC     	= explode("/", $_POST["ffechaAjuste"]);
    $fecMovimiento 	= "$tempFC[2]-$tempFC[1]-$tempFC[0]";
    $idAjuste      	= $_POST["id_ajuste"];



    switch($action){
    	case 1: // insertar
    			$result = "OK";
    		    $idAjuste = $model->insEncAjuste($tienda, $fecMovimiento, $codTipoMov, $detalle);
    			if ($idAjuste!=0){
    				$i=0;
    				foreach($_POST['item'] as $key => $value){
            			$desArticulo 	= $_POST['item'][$key];
            			$codArti 		= $_POST['codArti'][$key];
            			$cantidad 		= $_POST['cant'][$key];
            			$i=$i+1;
            			$result2 = $model->insDetAjuste($idAjuste, $i, $codArti, $desArticulo,$cantidad);
            		
    					if ($result2 != "OK"){
    						
	    					// Hubo en error inesperado en la operacion en la base de datos.
	    					// La variable $result2  tiene el mensaje que se le debe
	    					// desplegar al usuario  	           
	  	   					header("Location: ../../resources/misc/errorMsg.php?errormsg=".$result2);
		    			}  
    				}
    				// Todo salio bien, se redirecciona al usuario a la pantalla de hacer facturas.
    				if ($EoS=="E"){
    					header("Location: ../ajustesItems/allEntradas.php");
    				}else{
    					header("Location: ../ajustesItems/allSalidas.php");
    				}
    		  }else{
    				header("Location: ../../resources/misc/errorMsg.php?errormsg="."Error insperado al guardar encabezado Factura");
    		   }   		
    		break;
    		
    	case 2: // modificar
    		
    		    $result = $model->modEncAjuste($tienda, $idAjuste,$fecMovimiento, $codTipoMov, $detalle);
    		    if ($result == "OK") {
    		    	//se borrar el detalle para insertarlo nuevo
    		    	$result = $model->borrarDetAjuste($tienda, $idAjuste);
    		    	if ($result == "OK") {
    		    		// se inserta el nuevo detalle
    		    		$i=0;
    					foreach($_POST['item'] as $key => $value){
            				$desArticulo 	= $_POST['item'][$key];
            				$codArti 		= $_POST['codArti'][$key];
            				$cantidad 		= $_POST['cant'][$key];
            				$i=$i+1;
            				$result2 = $model->insDetAjuste($idAjuste, $i, $codArti, $desArticulo,$cantidad);
            		
    						if ($result2 != "OK"){
    						
	    					// Hubo en error inesperado en la operacion en la base de datos.
	    					// La variable $result2  tiene el mensaje que se le debe
	    					// desplegar al usuario  	           
	  	   						header("Location: ../../resources/misc/errorMsg.php?errormsg=".$result2);
		    				}  
    					}
    		    		// Todo salio bien, se redirecciona al usuario a la pantalla de hacer facturas.
    					if ($EoS=="E"){
    						header("Location: ../ajustesItems/allEntradas.php");
    					}else{
    						header("Location: ../ajustesItems/allSalidas.php");
    					}    		    		
    		    	}else{
    		    		header("Location: ../../resources/misc/errorMsg.php?errormsg=".$result);
    		    	}
    		    }else{
    		    	header("Location: ../../resources/misc/errorMsg.php?errormsg=".$result);
    		    }
    		
    		break;

    	case 3: // borrar
    		
    		    $result = $model->borrarAjuste($tienda,$idAjuste);
    		
    		break;

    	case 5: // aprobar
    		
    			$result = $model->aprobarAjuste($tienda,$idAjuste);
    		
    			break;
    		
    }
    
	if ($result == "OK"){
		// La operacion fue exitosa, se redirecciona al usuario a la pantalla de la lista
		// de ajustes.
		if ($EoS=="E"){
    		header("Location: ../ajustesItems/allEntradas.php");
		}else{
			header("Location: ../ajustesItems/allSalidas.php");
		}
    }else{
    	// Hubo en error inesperado en la operacion en la base de datos.
    	// La variable $result  tiene el mensaje que se le debe
    	// desplegar al usuario  	           
  	    header("Location: ../../resources/misc/errorMsg.php?errormsg=".$result);
    }            
?>