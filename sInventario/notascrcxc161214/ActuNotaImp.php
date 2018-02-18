<?php
    
    // Encabezado del control que verificar si la session expiro.
    require '../../_includes/ctrl_checksession.php';
    
    // Encabezado del control
    require '../../_includes/ctrl_header.php';
    
    // Se abra la conexion a la BD.
    require '../../_includes/ctrl_openDB.php';    
    

    require 'model/modelnotas.php';
    $model = new modelnotas($con->db); 
	
    $idNota   = $_POST["idNota"];
    

/*    
     echo "<pre>";
     print_r($_POST);
     echo "<pre>";
     exit;
*/     
          
    $result = $model->updNotaImp($idNota);

	if ($result != "OK"){
	  	echo $result;
	}else{         
    	echo "OK";
	}    

?>