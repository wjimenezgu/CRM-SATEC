<?php

	// Encabezado del control que verificar si la session expiro.
	require '../../_includes/ctrl_checksession.php';
	
	// Encabezado del control
	require '../../_includes/ctrl_header.php';

	// Se abra la conexion a la BD.
	require '../../_includes/ctrl_openDB.php';

    require 'model/modelconsultas.php';
    $model = new modelconsultas($con->db);    
        
    $mvc->setModule("consultas");
    
    $idFactura = $_POST["idFacturaB"];
    
  
    $infoDetFacPagos = $model->buscarDetFactPagos($idFactura);
           
    $mvc->assign("LISTA_DETFACPAGOS", $infoDetFacPagos); 
              
    $mvc->display("listdetfacpagos.tpl");          

?>