<?php

	// Encabezado del control que verificar si la session expiro.
	require '../../_includes/ctrl_checksession.php';

	// Se abra la conexion a la BD.
	require '../../_includes/ctrl_openDB.php';
	
	// A partir de aca codigo particular del modulo
    require 'model/modelcomprasnac.php';
    $model = new modelcomprasnac($con->db); 
 
   	$result = $model->saveNewArticulo($_POST["codInterno"],$_POST["nameArticulo"],$_POST["codProveedor"],$_POST["idProveedor"]);

   //echoH $result;
   if($result[0]["message"] == "OK"){
   	
     echo "0";     
   }
   else{
   	// hubo un error se retorna em mensaje para desplegarselo al usuario
   	
   	echo $result[0]["message"];
   }
   
?>

