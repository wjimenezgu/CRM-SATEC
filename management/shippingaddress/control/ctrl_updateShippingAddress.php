<?php

    session_start();
    error_reporting(E_PARSE);    
    require '../../_config/db/UserConnection.php';          
    $userConnect = new UserConnection($_SESSION["USER_SESSION"], $_SESSION["PWD_USER"] );
    
    require '../../_config/db/DBConexion.php';
    $con = new DBConexion(1, $userConnect);    

    require 'model/modelShippingAddress.php';
    $model = new modelShippingAddress($con->db);

    $id      = $_POST["fid"];
    $descripcion = $_POST["fDescripcion"];
    $linea1  = $_POST["fLinea1"];
    $linea2  = $_POST["fLinea2"];
    $linea3  = $_POST["fLinea3"];

    $resultModificar = $model->updateShippingAddress($id, $descripcion, $linea1, $linea2, $linea3);    
    header("Location: ../shippingaddress");
        
?>