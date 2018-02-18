<?php

    session_start();
    error_reporting(E_PARSE);    
    require '../../_config/db/UserConnection.php';          
    $userConnect = new UserConnection($_SESSION["USER_SESSION"], $_SESSION["PWD_USER"] );
    
    require '../../_config/db/DBConexion.php';
    $con = new DBConexion(1, $userConnect);    

    require 'model/modelMonedas.php';
    $model = new modelMonedas($con->db);    

    $idMoneda = $_POST["idMoneda"];
        
    $statusDelete = $model->borrarMoneda($idMoneda);

    echo 0;
    
?>