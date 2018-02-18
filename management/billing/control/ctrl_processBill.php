<?php

	// Encabezado del control que verificar si la session expiro.
	require '../../_includes/ctrl_checksession.php';

	// Se abra la conexion a la BD.
	require '../../_includes/ctrl_openDB.php';
	
	// A partir de aca codigo particular del modulo
    require 'model/modelBill.php';
    $model = new modelBill($con->db); 
    
       
    $cliente = $_POST["selectError1"];
    $tienda = $_POST["selectStore"];
    $subtotal = $_POST["fsubtotal"];
    $descuento = $_POST["fdescuento"];
    $impuesto = $_POST["fimpuesto"];
    $total = $_POST["ftotal"];
    $vendedor = $_POST["txtUser"];
  
    
    $result = $model->inFactura($cliente[0], $tienda[0],$vendedor, str_replace(",","",$subtotal), $descuento, str_replace(",","",$impuesto), str_replace(",","",$total));
    

    if(isset($_POST['enviar'])){ 
        foreach($_POST['item'] as $key => $value){
            $item = $_POST['item'][$key];
            $cant = $_POST['cant'][$key];
            $totPrice = $_POST['totPrice'][$key];
            $result2 = $model->InDetalleFac(trim($item),$cant,$totPrice);
             
        }
    }
//echo print_r($result); echo print_r($result); exit;
	if ($result === "OK" && $result2 === "OK"){
		// La operacion fue exitosa, se redirecciona al usuario a la pantalla de la lista
		// de eventos.
    	header("Location: ../billing/index.php");
   }else{
    	// Hubo en error inesperado en la operacion en la base de datos.
    	// La variable $result  tiene el mensaje que se le debe
    	// desplegar al usuario  	           
  	    header("Location: ../../resources/misc/errorMsg.php?errormsg=".$result);
    }            
?>

