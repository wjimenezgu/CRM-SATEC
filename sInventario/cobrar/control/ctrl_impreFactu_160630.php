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
    $formaPago1 	= $_GET["formaPago1"];
    $autorizacion1 	= $_GET["autorizacion1"];
    $montoPago1 	= $_GET["montoPago1"];
    $formaPago2 	= $_GET["formaPago2"];
    $autorizacion2 	= $_GET["autorizacion2"];
    $montoPago2 	= $_GET["montoPago2"];
    $formaPago3 	= $_GET["formaPago3"];
    $autorizacion3 	= $_GET["autorizacion3"];
    $montoPago3 	= $_GET["montoPago3"];
    $formaPago4 	= $_GET["formaPago4"];
    $autorizacion4 	= $_GET["autorizacion4"];
    $montoPago4 	= $_GET["montoPago4"];
    
   	$result = $model->impreFactura($idTienda,$idFactura,$formaPago1,$autorizacion1,$montoPago1,$formaPago2,$autorizacion2,$montoPago2,$formaPago3,$autorizacion3,$montoPago3,$formaPago4,$autorizacion4,$montoPago4);
   	
   	// si la operacion fue exitosa, impreFactura retorna una tira OK, en caso contrario trae el mensaje
   	// que se le desplegará al usuario.
   	echo $result;
   	

   
?>

