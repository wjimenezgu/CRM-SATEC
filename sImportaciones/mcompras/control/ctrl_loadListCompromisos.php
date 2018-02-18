<?php

    session_start();
    
    require '../../_config/db/UserConnection.php';          
    $userConnect = new UserConnection($_SESSION["USER_SESSION"], $_SESSION["PWD_USER"] );
    
    require '../../_config/db/DBConexion.php';
    $conn = new DBConexion(1, $userConnect);    
    
    require 'model/modelMCompras.php';
    $model = new modelMCompras($conn->db);
    
    $listCompromisos = $model->getAllCompromisos();
  
    $newList = array();
    foreach ($listCompromisos as $compromiso) {
        $data["id"]          = $compromiso["idTipoCompromiso"];
        $data["descripcion"] = substr($compromiso["descripcion"], 0, 15);
        
        array_push($newList, $data);
    }
    
    echo json_encode($newList);

?>