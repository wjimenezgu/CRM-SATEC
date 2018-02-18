<?php
    session_start();
    error_reporting(E_PARSE);    
    require '../../_config/db/UserConnection.php';          
    $userConnect = new UserConnection($_SESSION["USER_SESSION"], $_SESSION["PWD_USER"] );
    
    require '../../_config/db/DBConexion.php';
    $con = new DBConexion(1, $userConnect);    

    require 'model/modelqueriesorder.php';
    $model = new modelqueriesorder($con->db);    
    
    require_once 'routes.php';
    require_once SMARTY_ENGINE;
    $mvc = new EngineMVC();
    
    $mvc->setRootConfigDir("../"); 
    $mvc->setModule("../_includes"); 

    $elements_visible = true;
    $angularJS        = false;
    $mvc->configLoad('routes.conf', 'CSS_ROUTES');                
    
    $mvc->assign("ELEMENTS_VISIBLE", $elements_visible);
    $mvc->assign("ANGULARJS", $angularJS);
    $mvc->assign("CRM_SERVER", CRM_SERVER);
    
    $inSession = $_SESSION["USER_SESSION"];
    $mvc->assign("USER_SESSION", $inSession);
    
    
    $mvc->setModule("queriesorder");    
    $infoEventos = $model->getAllPedidoEventos();
    
    $mvc->assign("LISTA_EVENTOS", $infoEventos);    
    
?>