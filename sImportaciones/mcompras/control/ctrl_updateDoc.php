<?php

    session_start();
    error_reporting(E_PARSE);    
    require '../../_config/db/UserConnection.php';          
    $userConnect = new UserConnection($_SESSION["USER_SESSION"], $_SESSION["PWD_USER"] );

    require '../../_config/db/DBConexion.php';
    $con = new DBConexion(1, $userConnect);    

    require 'model/modelMCompras.php';
    $model = new modelMCompras($con->db);    

    $idPedido     = $_POST["numIdPedido"];
    $idTipoDoc    = $_POST["docsList"];
    $nameDocument = $_POST["nameDoc"];
    $date         = explode("/", $_POST["dateDocument"]) ;
    $fecDoc       = $date[2]."-".$date[1]."-".$date[0];

    $date         = explode("/", $_POST["fechaPago"]) ;
    $fechaPago    = $date[2]."-".$date[1]."-".$date[0];
    
    $numDoc       = $_POST["noDocument"];
    $montoDoc     = str_replace(',', '', $_POST["monto"]);
    $idMoneda     = $_POST["selMoneda"];
    $comentario   = $_POST["comments"];
    $montoDes1     = str_replace(',', '', $_POST["desmonto1"]);
    $montoDes2     = str_replace(',', '', $_POST["desmonto2"]);
    $montoDes3     = str_replace(',', '', $_POST["desmonto3"]);
    $montoDes4     = str_replace(',', '', $_POST["desmonto4"]);
    $montoDes5     = str_replace(',', '', $_POST["desmonto5"]);
    $montoDes6     = str_replace(',', '', $_POST["desmonto6"]);
    $montoDes7     = str_replace(',', '', $_POST["desmonto7"]);
    $montoDes8     = str_replace(',', '', $_POST["desmonto8"]);
    $montoDes9     = str_replace(',', '', $_POST["desmonto9"]);
    $montoDes10     = str_replace(',', '', $_POST["desmonto10"]);
    $montoDes11     = str_replace(',', '', $_POST["desmonto11"]);
    $montoDes12     = str_replace(',', '', $_POST["desmonto12"]);

/*
    echo "<pre>";
    print_r($_POST);
    echo "<pre>";
    exit;
*/
           
    // Oct 6, 2014 William Jimenez
    // El usuario necesita ingresar un desglose asociado al monto del documento.
    // Por ahora se habilitan 5 campos montoDes1-MontoDes5 para que indique esos montos.
    // Tambien se agrega una funcion al modelo SaveDocsconDesglose para guardar el documento y su desglose.
    // Se valida que el usuario si digito ese desglose para guardar el desglose, en caso contrario no se 
    // inserta el desglose.
    //$idInsert = $model->saveDocs($idPedido, $idTipoDoc, $fecDoc, $numDoc, $montoDoc, $idMoneda, $comentario);
    $idInsert = $model->updateDocconDesglose($idPedido, $idTipoDoc, $fecDoc, $fechaPago,$numDoc, $montoDoc, $idMoneda, $comentario,$montoDes1,$montoDes2,$montoDes3,$montoDes4,$montoDes5,$montoDes6,$montoDes7,$montoDes8,$montoDes9,$montoDes10,$montoDes11,$montoDes12);
    if ($idInsert =="OK"){
    	header("Location: ./docsRegister.php?id=$idPedido");
    }else{
    	header("Location: ../../resources/misc/errorMsg.php?errormsg=".$idInsert);
    }	   
?>