<?php

    session_start();
    error_reporting(E_PARSE);    
    require '../../_config/db/UserConnection.php';          
    $userConnect = new UserConnection($_SESSION["USER_SESSION"], $_SESSION["PWD_USER"] );
    
    require '../../_config/db/DBConexion.php';
    $con = new DBConexion(1, $userConnect);
    
    require 'model/modelTipoCompromisos.php';
    $model = new modelTipoCompromisos($con->db);
         
    $idTipoCompromiso = $_POST["fIdTipoCompromiso"];
    $descripcion      = $_POST["fDescripcion"];

    $resultModificar = $model->modificarTipoCompromiso($idTipoCompromiso,$descripcion);

    header("Location: ../commitmenttype");      
?>