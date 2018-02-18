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
    $fecFactura 		= $tempFE[2].'-'.$tempFE[1].'-'.$tempFE[0];
     
    $subtotal 			= str_replace(',', '', $_POST["fsubtotal"]);
    $descuento 			= str_replace(',', '', $_POST["fdescuento"]);
    $impuesto 			= str_replace(',', '', $_POST["fimpuesto"]);
    
    $vendedor 			= $_POST["usrVendedor"];
    $action 			= $_POST["action"];    
    

   	// es una factura
   	$idDocumento = $model->insEncFacturaCxC($idCliente, $tienda,$vendedor, 
    											$fecFactura,
    											$posPresupestaria,$fondo,$areaFuncional,$solPedido,$tramiCompra,$ctaCliente,
    											$foc,$indMontoLetras,$fobs,$ftc,
    											$subtotal,$descuento, $impuesto);    


    if ($idDocumento!=0){
    	$i=0;
    	
    	foreach($_POST['item'] as $key => $value){
    		
            $item = $_POST['item'][$key];
 
            $codArti = $_POST['codArti'][$key];
            $cant = $_POST['cant'][$key];
            $precioVenta = str_replace(',', '', $_POST['precioVenta'][$key]);
            $costo = str_replace(',', '', $_POST['costo'][$key]);
            $pdesc = $_POST['pdesc'][$key];
            $totPrice = str_replace(',', '', $_POST['totPrice'][$key]);
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
    	
    	
    	// todo OK con la insercion del encabezado y el detalle
    	// ahora hay que registrar la salida de los acticulos
    	// y de que pedidos se sca
    	$result = $model->insDetSalPedidosCxC($tienda,$idDocumento);
    	
    	if ($result !== "OK"){
    		// Hubo en error inesperado en la operacion en la base de datos.
    		// La variable $result  tiene el mensaje que se le debe
    		// desplegar al usuario
    		header("Location: ../../resources/misc/errorMsg.php?errormsg=".$result);
    	}
    	
    	// Si es la tienda 0 Guadalupe se redirecciona a la mmisma pantalla para factura
    	// en caso contrario se debe redireccionar a la pantalla para cobrar por que en las
    	// tiendas los que facturan son los que cobran
    	
    	// si es una proforma se debe enviar a la pantalla de proformas para que la imprima
    		
    	if ($tienda == "0") {
    		// Todo salio bien, se redirecciona al usuario a la pantalla de hacer facturas.
    	/*	
    		$printerList = printer_list(PRINTER_ENUM_LOCAL);
    		var_dump($printerList);
    		$printerName = $printerList[0]['NAME'];
    		echo $printerName;
    		$printer = $printerName;
    		if($ph = printer_open($printer)) {
    			printer_start_doc($ph, "Start Doc");
    			$content = "hello";
    		
    			// Set print mode to RAW and send PDF to printer
    			printer_set_option($ph, PRINTER_MODE, "RAW");
    			printer_write($ph, $content);
    			printer_end_doc($ph);
    			printer_close($ph);
    		}
    		else {
    			echo "Couldn't connect...";
    		}
    		*/
    	//	header("Location: ../facturacioncxc/index.php",'_blank');
    	
    		
    		header("Location: ../facturacioncxc/ImpreFactura.php?idDoc=".$idDocumento);
    	//	header("Location: ../facturacioncxc/impreFactu.php?idFactura=".$idDocumento);
    	//	window.open("../facturacioncxc/impreFactu.php?idFactura=".$idDocumento,'_blank');
    		 //window.open('impreFactu.php','_blank');
    	}else{
    		header("Location: ../cobrar/index.php");
    	}    	
    }else{
    	header("Location: ../../resources/misc/errorMsg.php?errormsg="."Error insperado al guardar encabezado Factura");
    	
    }
             
?>

