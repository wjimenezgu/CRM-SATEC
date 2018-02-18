<?php

    session_start();
    error_reporting(E_PARSE);    
    require '../../_config/db/UserConnection.php';          
    $userConnect = new UserConnection($_SESSION["USER_SESSION"], $_SESSION["PWD_USER"] );
    
    require '../../_config/db/DBConexion.php';
    $con = new DBConexion(1, $userConnect);    

    require 'model/modelSuppliers.php';
    $model = new modelSuppliers($con->db);

    $idProveedor     = $_POST["fidProveedor"];
    $nombreProveedor = $_POST["fNombre"];
    $cedulajuridica  = $_POST["fcedulajuridica"];    
    $direccion       = $_POST["fDireccion"];
    $pais            = $_POST["fPais"];
    $apartado        = $_POST["fApartado"];
    $zipcode         = $_POST["fZipCode"];
    $telefono        = $_POST["fTelefono"];
    $fax             = $_POST["fFax"];
    $idOpcionPago    = $_POST["selOpPagoProv"];
    $obligatoriocosto= $_POST["obligatorioCosto"];

    $resultModificar = $model->modificarProveedor($idProveedor,$nombreProveedor,$cedulajuridica,$direccion,$pais,$apartado, $zipcode,$telefono,$fax,$obligatoriocosto,$idOpcionPago);
    
    header("Location: ../suppliers");
        
?>