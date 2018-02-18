<?php

    session_start();
    error_reporting(E_PARSE);    
    require '../../_config/db/UserConnection.php';          
    $userConnect = new UserConnection($_SESSION["USER_SESSION"], $_SESSION["PWD_USER"] );

    require '../../_config/db/DBConexion.php';
    $con = new DBConexion(1, $userConnect);    

    require 'model/modelMCompras.php';
    $model = new modelMCompras($con->db);

    $idPedido = $_POST["idPedido"];
    
    $status = $model->delPedido($idPedido);
    
    if ($status == "OK"){
        echo 1;
    }else {
        echo 0;
    }
    
?>