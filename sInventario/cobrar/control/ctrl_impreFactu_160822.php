<?php

	// Encabezado del control que verificar si la session expiro.
	require '../../_includes/ctrl_checksession.php';

	// Se abra la conexion a la BD.
	require '../../_includes/ctrl_openDB.php';
	
	// A partir de aca codigo particular del modulo
    require 'model/modelcobrar.php';
    $model = new modelcobrar($con->db); 
/*
     echo "<pre>";
     print_r($_GET);
     echo "<pre>";
     exit;
*/
    $idFactura 		= $_GET["idFactura"];
    $idTienda  		= $_GET["idTienda"];
    $formaPago1 	= trim($_GET["formaPago1"]);
    $autorizacion1 	= trim($_GET["autorizacion1"]);
    $montoPago1 	= trim($_GET["montoPago1"]);
    $formaPago2 	= trim($_GET["formaPago2"]);
    $autorizacion2 	= trim($_GET["autorizacion2"]);
    $montoPago2 	= trim($_GET["montoPago2"]);
    $formaPago3 	= trim($_GET["formaPago3"]);
    $autorizacion3 	= trim($_GET["autorizacion3"]);
    $montoPago3 	= trim($_GET["montoPago3"]);
    $formaPago4 	= trim($_GET["formaPago4"]);
    $autorizacion4 	= trim($_GET["autorizacion4"]);
    $montoPago4 	= trim($_GET["montoPago4"]);
    $esManual		= trim($_GET["esManual"]);
    $numFactuManual	= trim($_GET["numFactuManual"]);
    
   	$result = $model->impreFactura($idTienda,$idFactura,$esManual,$numFactuManual,$formaPago1,$autorizacion1,$montoPago1,$formaPago2,$autorizacion2,$montoPago2,$formaPago3,$autorizacion3,$montoPago3,$formaPago4,$autorizacion4,$montoPago4);
   	
   	// si la operacion fue exitosa, impreFactura retorna una tira OK, en caso contrario trae el mensaje
   	// que se le desplegará al usuario.
   	echo $result;
   	

   
?>

