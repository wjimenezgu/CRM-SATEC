<?php

    session_start();
    error_reporting(E_PARSE);    
    require '../../_config/db/UserConnection.php';          
    $userConnect = new UserConnection($_SESSION["USER_SESSION"], $_SESSION["PWD_USER"] );

    require '../../_config/db/DBConexion.php';
    $con = new DBConexion(1, $userConnect);    

    require 'model/modelMCompras.php';
    $model = new modelMCompras($con->db);    

    $idPedido     = $_POST["idPedido"];
    $idTipoDoc    = $_POST["idDocumento"];
    $nameDocument = $_POST["nameDoc"];
    $date         = explode("/", $_POST["dateDocument"]) ;
    $fecDoc       = $date[2]."-".$date[1]."-".$date[0];
    
    $date         = explode("/", $_POST["fechaPago"]) ;
    $fechaPago    = $date[2]."-".$date[1]."-".$date[0];
    $numDoc       = $_POST["noDocument"];
    $montoDoc     = $_POST["monto"];
    $idMoneda     = $_POST["selMoneda"];
    $comentario   = $_POST["comment"];
    
    $desMontos = $_POST["allDesMontos"].","; // Se agrega la ","(coma) con el proposito de leer todos los montos incluyendo el último.
    
    
    /**
     * Cambio Realizado por Esteban Ramirez
     * Fecha: 21/07/2015
     * Descripcion: Ahora se envia un solo parámetro separado por comas con el desgloce de los montos.
     */        
    
    $infoTipoDoc = $model->getTipoDocumento($idTipoDoc);
    
    $action = $_POST["action"];
    if($action=="save"){
        //INSERT
        $idInsert = $model->saveDocsconDesglose($idPedido, $idTipoDoc, $fecDoc, $fechaPago,$numDoc, $montoDoc, $idMoneda, $comentario,$desMontos);        
        $event["fecha"]      = $idInsert["fecDoc"];
        $event["usuario"]    = $idInsert["userIns"];        
        
    }else if($action=="update"){
        //UPDATE
        $idInsert = $model->updateDocconDesglose($idPedido, $idTipoDoc, $fecDoc, $fechaPago,$numDoc, $montoDoc, $idMoneda, $comentario,$desMontos);        
    }

    $event["documento"]  = $infoTipoDoc["siglasDoc"]." | $fecDoc | $numDoc";
    
    $event["idPedido"] = $idPedido;
    $event["numDoc"] = $numDoc;
    $event["fecDoc"] = $fecDoc;
    
    $event["comentario"] = $comentario;
    $event["monto"]      = $montoDoc;   
    $event["moneda"]     = $idMoneda;   
    $event["actionPast"]     = $action;   
    
    echo json_encode($event);
    
?>