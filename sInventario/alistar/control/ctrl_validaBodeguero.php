<?php

	// Encabezado del control que verificar si la session expiro.
	require '../../_includes/ctrl_checksession.php';

	// Se abra la conexion a la BD.
	require '../../_includes/ctrl_openDB.php';
	
	// A partir de aca codigo particular del modulo
    require 'model/modelalistar.php';
    $model = new modelalistar($con->db);   
    
    $Clave  = $_POST["fClave"];
    
    $result = $model->validaBodeguero($Clave);
    
   //echoH $result;
   if($result[0]["message"] == "OK"){
   	$esValido = $result[0]["esValido"];
   	// esValido = 0 significa NO ES VALIDO
   	// esValido = 1 significa SI ES VALIDO
   	
    echo $esValido;     
   }else{
   	// hubo un error se retorna -1 para que se le envie un mensaje al usuario
   	echo "-1";
   }
   
?>

