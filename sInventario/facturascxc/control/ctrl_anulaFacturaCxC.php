<?php

	// Encabezado del control
	require '../../_includes/ctrl_header.php';

	// Se abra la conexion a la BD.
	require '../../_includes/ctrl_openDB.php';
		
   // A partir de aca codigo particular al modulo.

    require 'model/modelfacturas.php';
    $model = new modelfacturas($con->db);           
    
    $mvc->setModule("facturascxc");
    
    $idTienda		= $_GET["idTienda"];
    $idFactura 		= $_GET["idFactura"];
    $userVendedor  	= $_GET["vendedor"];
    $razon 			= $_GET["razon"];

   	$result = $model->anulaFacturaCxC($idTienda,$idFactura,$userVendedor,$razon);

	$sal = $result[0]["message"];
	
	echo $sal;
     
?>

