<?php

    session_start();
    //error_reporting(E_PARSE);    
    require '../../_config/db/UserConnection.php';          
    $userConnect = new UserConnection($_SESSION["USER_SESSION"], $_SESSION["PWD_USER"] );
    
    require '../../_config/db/DBConexion.php';
    $conn = new DBConexion(1, $userConnect);    
    
    require 'model/modelMCompras.php';
    $model = new modelMCompras($conn->db);
    
    require_once 'routes.php';
    require_once SMARTY_ENGINE;
    $mvc = new EngineMVC();
    $mvc->setModule("mcompras");
    
    //$action = $_POST["action"];
    $action = 1;
    $idProveedor = $_POST["idProveedor"];
    switch ($action) {
    case 1:
        
        $inventario = $model->getArtiBajoReorden($idProveedor);
            
        $mvc->assign("INVENTARIO", $inventario);
        $mvc->display("inventory.tpl");
        
        break;

    default:
        break;
}

?>