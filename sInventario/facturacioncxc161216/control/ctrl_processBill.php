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
	
 	$posPresupestaria 	= $_POST["posPresupestaria"];
 	$fondo 				= $_POST["fondo"]; 		
 	$areaFuncional 		= $_POST["areaFuncional"];
 	$solPedido 			= $_POST["solPedido"];
 	$tramiCompra 		= $_POST["tramiCompra"];
 	$ctaCliente 		= $_POST["ctaCliente"];
 	$foc 				= $_POST["foc"];
 	$ftc 				= $_POST["ftc"];
 	$indMontoLetras 	= ($_POST["indMontoLetras"] ? "S" : "N"); 	
 	$fobs 				= $_POST["fobs"];
 		
    $tempFE     		= explode("|", $_POST["selectCliente"]);
    $idCliente			= $tempFE[0];
    $tienda 			= $_POST["id_tienda"];
    
    $tempFE     		= explode("/", $_POST["ffecFactura"]);
    $fecFactura 		= $tempFE[2].'-'.$tempFE[1].'-'.$tempFE[0].' '.date('H:i:s');

    $subtotal 			= str_replace(',', '', $_POST["fsubtotal"]);
    $descuento 			= str_replace(',', '', $_POST["fdescuento"]);
    $impuesto 			= str_replace(',', '', $_POST["fimpuesto"]);
    
    $vendedor 			= $_POST["usrVendedor"];
    $action 			= $_POST["action"];    
       
   	$idDocumento = $model->insEncFacturaCxC($idCliente, $tienda,$vendedor, 
    									 $fecFactura,
    									 $posPresupestaria,$fondo,$areaFuncional,$solPedido,
   			                             $tramiCompra,$ctaCliente,
    									 $foc,$indMontoLetras,$fobs,$ftc,
    									 $subtotal,$descuento, $impuesto);    

    
    if ($idDocumento!=0){
    	
    	$i=0;    	
    	foreach($_POST['item'] as $key => $value){
    		
            $item 			= $_POST['item'][$key];
            $codArti 		= $_POST['codArti'][$key];
            $cant 			= $_POST['cant'][$key];
            // los montos esta formateadocon comas, se deben eliminar
            $precioVenta 	= str_replace(',', '', $_POST['precioVenta'][$key]);
            $costo 			= str_replace(',', '', $_POST['costo'][$key]);
            $pdesc 			= $_POST['pdesc'][$key];
            $totPrice 		= str_replace(',', '', $_POST['totPrice'][$key]);
            $i=$i+1;
            
            // detalle de una factura
           
            $result = $model->insDetFacturaCxC($tienda,$vendedor,$idDocumento,$i,$codArti,$item,$cant,$precioVenta,$pdesc,$totPrice,$costo);
            
            if ($result !== "OK"){
		    	// Hubo en error inesperado en la operacion en la base de datos.
		    	// La variable $result  tiene el mensaje que se le debe
		    	// desplegar al usuario  	           
	  	   		header("Location: ../../resources/misc/errorMsg.php?errormsg=".$result);
		    }  
    	}  	
    	// se manda a imprimir la factura
    	header("Location: ../facturacioncxc/ImpreFactura.php?idDoc=".$idDocumento);
 	
    }else{
    	header("Location: ../../resources/misc/errorMsg.php?errormsg="."Error insperado al guardar encabezado Factura CxC");    	
    }
             
?>

