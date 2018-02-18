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
    
    //$action = $_POST["action"];
    $action = 1;
    $idProveedor = $_POST["idProveedor"];
    $criterio=$_POST["criterio"];
    //$criterio='codigo';
    $txtBuscar=$_POST["txtBuscar"];
    if(isset($_SESSION["PORCE_IV"])){        
    	$porceIV2   = $_SESSION["PORCE_IV"];
    }else{
    	$porceIV2="-1";
    }    
    
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
    	
        //$inventario = $model->getArtiBajoReorden($idProveedor);
	$costoOFF = $model->GetFieldHide($_SESSION["USER_SESSION"],'COSTO_OFF');
        $utilOFF = $model->GetFieldHide($_SESSION["USER_SESSION"],'UTIL_OFF');
        $inventario = $model->buscarProducto($idTienda,$criterio,$txtBuscar);
        //$inventario = $model->buscarProducto('0','codigo','11556');
           
	$mvc->assign("COSTO_OFF", $costoOFF); 
        $mvc->assign("UTIL_OFF", $utilOFF);
        $mvc->assign("INVENTARIO", $inventario);
        $mvc->assign("PORCE_IV2", $porceIV2);
        $mvc->display("inventory.tpl");
        
        break;

    default:
        break;
}

?>
