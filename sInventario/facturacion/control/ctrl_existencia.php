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
    
    	/*echo "<pre>";
    	print_r($_POST);
    	echo "<pre>";
    	print $resul;
    	exit;*/
    	
        $descriArticulo = $_POST["desArt"];
        $codigoArticulo = $_POST["codArt"];
        $codigoTienda   = $_POST["id_tienda"];
        $existencia = $model->buscarExistencias($codigoArticulo);
        $transito   = $model->buscarArticuloTrans($codigoTienda,$codigoArticulo);
        
        $mvc->assign("EXISTENCIA", $existencia);
        $mvc->assign("TRANSITO", $transito);
        $mvc->assign("COD_ART", $codigoArticulo);
        $mvc->assign("DESCRIPCION", $descriArticulo);
        $mvc->display("existencia.tpl");
        

      
?>