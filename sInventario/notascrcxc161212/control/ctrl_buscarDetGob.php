<?php

	// Encabezado del control que verificar si la session expiro.
	require '../../_includes/ctrl_checksession.php';
	
	// Encabezado del control
	require '../../_includes/ctrl_header.php';

	// Se abra la conexion a la BD.
	require '../../_includes/ctrl_openDB.php';

    require 'model/modelfacturas.php';
    $model = new modelfacturas($con->db);    
        
    $mvc->setModule("facturascxc");
    
    $idFactura = $_POST["idFacturaB"];
    
  
    $infoDetGob = $model->buscarDetGob($idFactura);
    
/*
     echo "<pre>";
     print_r($infoDetGob);
     echo "<pre>";
     exit;
    
*/           
    $mvc->assign("DATOS_DETGOB", $infoDetGob); 
              
    $mvc->display("listdetgob.tpl");          

?>