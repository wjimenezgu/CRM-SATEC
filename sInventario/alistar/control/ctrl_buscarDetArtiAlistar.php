<?php

	// Encabezado del control que verificar si la session expiro.
	require '../../_includes/ctrl_checksession.php';
	
	// Encabezado del control
	require '../../_includes/ctrl_header.php';

	// Se abra la conexion a la BD.
	require '../../_includes/ctrl_openDB.php';

    require 'model/modelalistar.php';
    $model = new modelalistar($con->db);    
        
    $mvc->setModule("alistar");
    
    $idTienda = $_POST["idTienda"];
      
    $infoDetArtiAlistar = $model->buscarDetArtiAlistar($idTienda);
           
    $mvc->assign("LISTA_DETARTIALISTAR", $infoDetArtiAlistar); 
              
    $mvc->display("listdetartialistar.tpl");          

?>