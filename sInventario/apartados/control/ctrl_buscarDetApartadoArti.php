<?php

	// Encabezado del control que verificar si la session expiro.
	require '../../_includes/ctrl_checksession.php';
	
	// Encabezado del control
	require '../../_includes/ctrl_header.php';

	// Se abra la conexion a la BD.
	require '../../_includes/ctrl_openDB.php';

    require 'model/modelapartados.php';
    $model = new modelapartados($con->db);    
        
    $mvc->setModule("apartados");
    
    $idApartado = $_POST["idApartado"];
    
  
    $infoDetApdoArti = $model->buscarDetApdoArti($idApartado);
           
    $mvc->assign("LISTA_DETAPDOARTI", $infoDetApdoArti); 
              
    $mvc->display("listdetapdoarti.tpl");          

?>