<?php

    session_start();
    
    require '../../_config/db/UserConnection.php';          
    $userConnect = new UserConnection($_SESSION["USER_SESSION"], $_SESSION["PWD_USER"] );
    
    require '../../_config/db/DBConexion.php';
    $conn = new DBConexion(1, $userConnect);    
    
    require 'model/modelMCompras.php';
    $model = new modelMCompras($conn->db);
    
    $idProveedor = $_POST["idProveedor"];
    //$idProveedor = 18;
    //$codInterno  = $_POST["codInterno"];
    //$codInterno  = 1;
    
    $infoProveedor = $model->getInfoProveedor($idProveedor);

    $idOpcionPago      = $infoProveedor[0]["idOpcionPago"]; 
    $obligatorioCosto  = $infoProveedor[0]["obligatorioCosto"]; 
    $listCodes         = $model->getCodInternos($idProveedor);

    if (sizeof($listCodes)<=0) {
        $listCodes = 0;
    }

    $dataProveedor["OPT_PAGO"]   = $idOpcionPago;
    $dataProveedor["COSTO_OBL"]  = $obligatorioCosto;
    $dataProveedor["LIST_CODES"] = $listCodes;    

    echo json_encode($dataProveedor);

?>