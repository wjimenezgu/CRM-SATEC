<?php

    session_start();
    //error_reporting(E_PARSE);    
    require '../../_config/db/UserConnection.php';          
    $userConnect = new UserConnection($_SESSION["USER_SESSION"], $_SESSION["PWD_USER"] );

    require '../../_config/db/DBConexion.php';
    $conn = new DBConexion(1, $userConnect);    
    
    require 'model/modelBill.php';
    $model = new modelBill($conn->db);
    
    require_once 'routes.php';
    require_once SMARTY_ENGINE;
    $mvc = new EngineMVC();
    $mvc->setModule("facturacion");

    $nombreCliente = $_POST["nombreCliente"];

    $clientes = $model->buscarClientes($nombreCliente);
           
    $mvc->assign("CLIENTES", $clientes);
    $mvc->display("cliente.tpl");
        
?>
