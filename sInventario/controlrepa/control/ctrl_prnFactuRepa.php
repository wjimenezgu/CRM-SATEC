<?php

	// Encabezado del control que verificar si la session expiro.
	require '../../_includes/ctrl_checksession.php';

	// Se abra la conexion a la BD.
	require '../../_includes/ctrl_openDB.php';
		
   // A partir de aca codigo particular al modulo.

	require 'model/modelreparaciones.php';
	$model = new modelreparaciones($con->db);
	
    
 /*    
       echo "<pre>";
        print_r($_GET);
        echo "<pre>"; 
        exit;
*/   
    
    $action		= $_GET["action"];
    $idTienda   = $_GET["idTienda"];
    $id			= $_GET["id"];   
 
	if ($action== 8){ 
		//facturar adelanto
		$result 		= $model->facturaRepaAdelanto($idTienda,$id);
		$result         = $model->saveEvento($id, '105', '','','');
	}
	else{
		// facturar reparacion
		$result 		= $model->facturaRepa($idTienda,$id);
		$result         = $model->saveEvento($id, '104', '','','');
	}

	
	// si la operacion fue exitosa, impreFactura retorna una tira OK, en caso contrario trae el mensaje
	// que se le desplegará al usuario.
	echo $result[message];
		


?>