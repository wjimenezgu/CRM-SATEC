<?php
 
	// Encabezado del control que verificar si la session expiro.
	require '../../_includes/ctrl_checksession.php';

	// Se abra la conexion a la BD.
	require '../../_includes/ctrl_openDB.php';
	
	// A partir de aca codigo particular del modulo
    require 'model/modelBill.php';
    $model = new modelBill($con->db); 

/*
        echo "<pre>";
        print_r($_POST);
        echo "<pre>";        
 		exit;
        */

  //  $tempFE     = explode("|", $_POST["selectCliente"]);
  //  $cliente	= $tempFE[0];
    $cliente    = $_POST["idCliSel"];
    
    $tienda 	= $_POST["id_tienda"];
    $fecDocu = date("Y-m-d G:i:s");    
    $subtotal 	= str_replace(',', '', $_POST["fsubtotal"]);
   // $porceDesc  = $_POST["pdescuento"];
    $porceDesc = "0";
    $descuento 	= str_replace(',', '', $_POST["fdescuento"]);
    $impuesto 	= str_replace(',', '', $_POST["fimpuesto"]);
    $total 		= str_replace(',', '', $_POST["ftotal"]);
    $vendedor 	= $_POST["txtVendedor"];
    $exento		= $_POST["exento"];
    $action 	= $_POST["tipoDocumento"];
    if ($action == "F"){
    	// es una factura
    	$idDocumento = $model->insEncFactura($cliente, $tienda,$vendedor, $fecDocu,$subtotal, $porceDesc,$descuento, $impuesto);    
    }else{
    	if ($action == "P"){
    	// $action == "P"
    	// es una proforma
    	$idDocumento = $model->insEncProforma($cliente, $tienda,$vendedor, $fecDocu,$subtotal, $porceDesc,$descuento, $impuesto);
    	}else{
    		if ($action == "C"){
    			// factura de credito    		
    			$idDocumento = $model->insEncFactura($cliente, $tienda,$vendedor, $fecDocu,$subtotal, $porceDesc,$descuento, $impuesto);
    			// se debe enviar para ctas x cobrar
    			// codigo pendiente
    		}else{
    		// $action = "A"
    		// es un apartado
    		$idDocumento = $model->insEncApartado($cliente, $tienda,$vendedor, $fecDocu,$subtotal, $porceDesc,$descuento, $impuesto);
    		}
    	}
    }

    if ($idDocumento!=0){
    	$i=0;
    	
    	foreach($_POST['item'] as $key => $value){
    		
            $item = $_POST['item'][$key];
 
            $codArti = $_POST['codArti'][$key];
            $cant = $_POST['cant'][$key];
            $precioVenta = str_replace(',', '', $_POST['precioVenta'][$key]);
           
            $pdesc = $_POST['pdesc'][$key];
            $totPrice = str_replace(',', '', $_POST['totPrice'][$key]);
            $i=$i+1;
            if ($action == "F"){
            	// detalle de una factura
            	
            	$result = $model->insDetFactura($tienda,$idDocumento,$i,$codArti,$item,$cant,$precioVenta,$pdesc,$totPrice);
            }else {
            	if ($action == "P"){
            	// detalle de una proforma
            	$result = $model->insDetProforma($idDocumento,$i,$codArti,$item,$cant,$precioVenta,$pdesc,$totPrice);
            	}else{
            		// es un apartado
            		$result = $model->insDetApartado($idDocumento,$i,$codArti,$item,$cant,$precioVenta,$pdesc,$totPrice);
            	}
            }
    		if ($result !== "OK"){
	    	// Hubo en error inesperado en la operacion en la base de datos.
	    	// La variable $result  tiene el mensaje que se le debe
	    	// desplegar al usuario  	           
	  	   		header("Location: ../../resources/misc/errorMsg.php?errormsg=".$result);
		    }  
    	}
    	
    	// Si es la tienda 0 Guadalupe se redirecciona a la mmisma pantalla para factura
    	// en caso contrario se debe redireccionar a la pantalla para cobrar por que en las
    	// tiendas los que facturan son los que cobran
    	
    		// si es una proforma se debe enviar a la pantalla de proformas para que la imprima
    		
    			if ($tienda == "0") {
    				// Todo salio bien, se redirecciona al usuario a la pantalla de hacer facturas.
    				header("Location: ../facturacion/index.php");
    			}else{
    				if ($action == "P"){
    					header("Location: ../proformas/index.php");
    				}else{
    					header("Location: ../cobrar/index.php");
    				}
    			
    			}	
    	
    }else{
    	header("Location: ../../resources/misc/errorMsg.php?errormsg="."Error insperado al guardar encabezado Factura o Proforma");
    	
    }
             
?>

