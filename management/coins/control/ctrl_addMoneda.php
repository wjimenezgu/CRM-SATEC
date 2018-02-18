<?php

    session_start();
    error_reporting(E_PARSE);    
    require '../../_config/db/UserConnection.php';          
    $userConnect = new UserConnection($_SESSION["USER_SESSION"], $_SESSION["PWD_USER"] );
    
    require '../../_config/db/DBConexion.php';
    $con = new DBConexion(1, $userConnect);    

    require 'model/modelMonedas.php';
    $model = new modelMonedas($con->db);    
    
    $IdMoneda = $_POST["fIdMoneda"];
    $Descripcion = $_POST["fDescripcion"];
    $SimboloMoneda = $_POST["fSimboloMoneda"];

    $resultInsertar = $model->insertarMoneda($IdMoneda,$Descripcion,$SimboloMoneda);
    
    header("Location: ../coins");

?>