<?php

    session_start();
    error_reporting(E_PARSE);    
    require '../../_config/db/UserConnection.php';          
    $userConnect = new UserConnection($_SESSION["USER_SESSION"], $_SESSION["PWD_USER"] );
    
    require '../../_config/db/DBConexion.php';
    $con = new DBConexion(1, $userConnect);    

    require 'model/modelItems.php';
    $model = new modelItems($con->db);

    $idItem     	= $_POST["fidItem"];
    $Descripcion 	= $_POST["fDescripcion"];
    $codigoExterno  = $_POST["fcodigoExterno"];    
    $descExterno    = $_POST["fdescExterno"];
    $minimo         = $_POST["fminimo"];
    $maximo        	= $_POST["fmaximo"];
    $reorden        = $_POST["freorden"];
    $costo        	= $_POST["fcosto"];
    $precio         = $_POST["fprecio"];
    $porceComision  = $_POST["fporceComision"];
    $factorUtilidad	= $_POST["ffactorUtilidad"];
    $codigoBarras	= $_POST["fcodigoBarras"];
    $exento			= $_POST["fexento"];
    $selEstadoArti	= $_POST["selEstadoArti"];
    $selCategoria	= $_POST["selCategoria"];
    $selProveedor   = $_POST["selProveedor"];

    $resultModificar = $model->modificarItem($idItem,$Descripcion,$minimo,$maximo,$reorden,
                         $precio, $costo,$porceComision,$factorUtilidad,$codigoBarras,
                         $exento,$selEstadoArti,$selCategoria,$selProveedor,$codigoExterno,
                         $descExterno);
            
    header("Location: ../items");
        
?>