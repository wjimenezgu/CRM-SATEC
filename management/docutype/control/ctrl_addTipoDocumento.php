<?php

    session_start();
    error_reporting(E_PARSE);    
    require '../../_config/db/UserConnection.php';          
    $userConnect = new UserConnection($_SESSION["USER_SESSION"], $_SESSION["PWD_USER"] );
    
    require '../../_config/db/DBConexion.php';
    $con = new DBConexion(1, $userConnect);    

    require 'model/modelTipoDocumentos.php';
    $model = new modelTipoDocumentos($con->db);
     
    $idTipoDocumento= $_POST["fid"];
    $descripcion    = $_POST["fdescripcion"];
    $siglasDoc      = $_POST["fsiglasDoc"];
    $resultInsertar = $model->insertarTipoDocumento($idTipoDocumento,$descripcion,$siglasDoc);

    header("Location: ../docutype");    
    
?>