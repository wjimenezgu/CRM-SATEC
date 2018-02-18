<?php

    session_start();
    //error_reporting(E_PARSE);    
    require '../../_config/db/UserConnection.php';          
    $userConnect = new UserConnection($_SESSION["USER_SESSION"], $_SESSION["PWD_USER"] );

    require '../../_config/db/DBConexion.php';
    $conn = new DBConexion(1, $userConnect);    
    
    require 'model/modelajustesitems.php';
    $model = new modelajustesitems($conn->db);
    
    require_once 'routes.php';
    require_once SMARTY_ENGINE;
    $mvc = new EngineMVC();
    $mvc->setModule("ajustesItems");
    
    //$action = $_POST["action"];
    $action = 1;

    $criterio=$_POST["criterio"];
    //$criterio='codigo';
    $txtBuscar=$_POST["txtBuscar"];
   
    
    switch ($action) {
    case 1:
        
        if(isset($_SESSION["TIENDA_ID"])){        
        	$idTienda   = $_SESSION["TIENDA_ID"];
        	$nameTienda = $_SESSION["TIENDA_NOMBRE"];
    	}else {
    		$nickname = $_SESSION["USER_SESSION"];        
        	$infoTienda = $model->getTiendaLocal($nickname);    
        	$_SESSION["TIENDA_ID"]     = $infoTienda[0]["codTienda"];
        	$_SESSION["TIENDA_NOMBRE"] = $infoTienda[0]["nameTienda"];
        	$nameTienda = $infoTienda[0]["nameTienda"];
        	$idTienda   = $infoTienda[0]["codTienda"];
    	}
    	
        $inventario = $model->buscarProducto($idTienda,$criterio,$txtBuscar);
           
        $mvc->assign("INVENTARIO", $inventario);
        $mvc->display("listItems.tpl");
        
        break;

    default:
        break;
}

?>