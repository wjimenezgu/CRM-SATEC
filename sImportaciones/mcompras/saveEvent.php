<?php

    session_start();
    error_reporting(E_PARSE);    
    require '../../_config/db/UserConnection.php';          
    $userConnect = new UserConnection($_SESSION["USER_SESSION"], $_SESSION["PWD_USER"] );

    require '../../_config/db/DBConexion.php';
    $con = new DBConexion(1, $userConnect);    

    require 'model/modelMCompras.php';
    $model = new modelMCompras($con->db);    
    
    $idInsert = $model->saveEvento($_POST["idPedido"], $_POST["idEvento"], $_POST["comment"]);
    
    $event["fecha"]      = $idInsert["fecEvento"];
    $event["usuario"]    = $idInsert["userIns"];
    $event["evento"]     = $_POST["idEvento"]." | ".$_POST["nameEvent"];
    $event["comentario"] = $_POST["comment"];
    $event["dias"]       = "0";   
    
    echo json_encode($event);

?>