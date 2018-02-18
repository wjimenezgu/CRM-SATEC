<?php

    session_start();
    error_reporting(E_PARSE);    
    require '../../_config/db/UserConnection.php';          
    $userConnect = new UserConnection($_SESSION["USER_SESSION"], $_SESSION["PWD_USER"] );
    
    require '../../_config/db/DBConexion.php';
    $conn = new DBConexion(1, $userConnect);    
    
    require 'model/modelMCompras.php';
    $model = new modelMCompras($conn->db);  
    
    $idPedido= $_POST["idPedido"];
    $numDoc  = $_POST["idNumDoc"];
    $fecDoc  = $_POST["idFecDoc"];

    $date         = explode("/", $_POST["idFecDoc"]) ;
    $newfecDoc       = $date[2]."-".$date[1]."-".$date[0];        
   
    $docuPedido    = $model->getDocuPedido($idPedido, $newfecDoc, $numDoc);
    $pedDocDesglose = $model->getPedDocDesglose($idPedido, $newfecDoc, $numDoc);

    $montos = array();
    foreach ($pedDocDesglose as $desMonto) {
        array_push($montos, $desMonto["monto"]);
    }
    
    $infoDoc = array(
                "idTipoDoc" => $docuPedido[0]["idTipoDoc"],
                "fecDoc" => $fecDoc,
                "numDoc" => $numDoc,
                "idMoneda" => $docuPedido[0]["idMoneda"],
                "montoDoc" => $docuPedido[0]["montoDoc"],
                "desMontos" => $montos,
                "fechaPago" => $docuPedido[0]["fechaPago"],
                "comentario" => $docuPedido[0]["comentario"]
    );

    echo json_encode($infoDoc);
    
    
    
    //require('control/ctrl_frmEditDoc.php'); 
    
?>