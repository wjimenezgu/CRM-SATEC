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
    
   	$result = $model->eliminaFactura($idTienda,$idFactura);
   	
   	// si la operacion fue exitosa, elimina retorna una tira OK, en caso contrario trae el mensaje
   	// que se le desplegará al usuario.
   	echo $result;
   	

   
?>

