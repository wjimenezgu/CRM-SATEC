<?php
	// Encabezado del control que verificar si la session expiro.
	// si la session expiro se redirecciona a la pantalla de login
	require '../../_includes/ctrl_checksession.php';
	
    session_start();
    error_reporting(E_PARSE);    
    require '../../_config/db/UserConnection.php';          
    $userConnect = new UserConnection($_SESSION["USER_SESSION"], $_SESSION["PWD_USER"] );

    require '../../_config/db/DBConexion.php';
    $con = new DBConexion(1, $userConnect);    

    require 'model/modelMCompras.php';
    $model = new modelMCompras($con->db);
    
    $codInterno   = $_POST["codInterno"];
    $nameArticulo = $_POST["nameArticulo"];
    $codProveedor = $_POST["codProveedor"];
    $idProveedor = $_POST["idProveedor"];
    
    $status = $model->saveNewArticulo($codInterno, $nameArticulo, $codProveedor,$idProveedor);

    echo $status;
?>