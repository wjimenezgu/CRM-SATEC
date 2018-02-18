<?php
 
    // Encabezado del control que verificar si la session expiro.
    require '../../_includes/ctrl_checksession.php';
    
    // Encabezado del control
    require '../../_includes/ctrl_header.php';
    
    // Se abra la conexion a la BD.
    require '../../_includes/ctrl_openDB.php';    
    
    require 'model/modelfacturas.php';
    $model = new modelfacturas($con->db);  
    /*
     echo "<pre>";
     print_r($_GET);
     echo "<pre>";
     exit;
   */        
    
    $idFactura    = $_GET["idFactura"];
    $idTienda	  = $_GET["idTienda"];
    $userVendedor = $_GET["vendedor"];
    $razon 		  = $_GET["razon"];
    
      
    $result = $model->AnulaFactura($idTienda,$idFactura,$userVendedor,$razon);
	
    echo $result;
    
?>