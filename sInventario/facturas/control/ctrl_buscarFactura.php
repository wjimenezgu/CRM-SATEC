<?php

	// Encabezado del control que verificar si la session expiro.
	require '../../_includes/ctrl_checksession.php';
	
	// Encabezado del control
	require '../../_includes/ctrl_header.php';

	// Se abra la conexion a la BD.
	require '../../_includes/ctrl_openDB.php';

    require 'model/modelfacturas.php';
    $model = new modelfacturas($con->db);    
        
    $mvc->setModule("facturas");
    
    $idFactura = $_POST["idFactura"];
    $idTienda  = $_POST["idTienda"]; 
    
  
    $infoFactura = $model->buscarEncFact($idTienda,$idFactura);
           
    $mvc->assign("LISTA_FACTURAS", $infoFactura); 
              
    $mvc->display("listfactura.tpl");          

?>