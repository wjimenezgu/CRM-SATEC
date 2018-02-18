<?php
	// Encabezado del control que verificar si la session expiro.
	// si la session expiro se redirecciona a la pantalla de login
	require '../../_includes/ctrl_checksession.php';
	
	// Se abra la conexion a la BD.
	require '../../_includes/ctrl_openDB.php';

  	// A partir de aca codigo particular del modulo    	  
    require 'model/modelMCompras.php';
    $model = new modelMCompras($con->db);
       
    $pidPedido 	= $_POST["idPedido"];
    $pedWHR		= $_POST["whr"];
    $pedNumRows	= $_POST["count-numRow"];
    $pedTrackNo	= $_POST["trackno"];

    // SE PREPARA EL DETALLE DE PEDIDO
    $numRegister  = 1;
    $listRegistos = array();
    foreach ($_POST as $key => $value) {
	    $rowData = substr($key, 0, 3);    
        if($rowData == "row"){
        	$newKey = explode("-", $key);        
            $registro[$newKey[1]] = $value;
            $final_register = "row$numRegister-trackno";                 
            if($key == $final_register){            
            	array_push($listRegistos, $registro);
                $numRegister++;
            }
        }
    }
/*
            
            echo "<pre>";
            print_r($listRegistos);
            echo "<pre>";
            exit;              
*/  
   //SE ACTUALIZA EL ENCABEZADO DEL PEDIDO CON EL WHR O TRACKNO que el usuario ingreso a nivel del encabezado
   $out_idPedido = $model->updateEncabezadoPedidoWHRTrackNo($pidPedido,$pedWHR,$pedTrackNo);

   
   //SE ACTUALIZA EL DETALLE DE PEDIDO con los valores de wharehouse y trackingno
   //Se extrae cada registro para actulizar cada linea del pedido
    $numLine = 1;
    foreach ($listRegistos as $register) {
		$linWHR 	= $register["whr"];
		$linTrackNo = $register["trackno"]; 
		$model->updateDetallePedidoWHRTrackNo($pidPedido, $numLine, $linWHR, $linTrackNo);
        $numLine++;
    } // foreach listRegistros
            
    header("Location: ../mcompras/listOrders.php");

?>