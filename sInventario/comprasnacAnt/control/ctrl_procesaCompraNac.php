<?php
	// Encabezado del control que verificar si la session expiro.
	// si la session expiro se redirecciona a la pantalla de login
	require '../../_includes/ctrl_checksession.php';
	
    session_start();
    error_reporting(E_PARSE);    
    require '../../_config/db/UserConnection.php';          
    $userConnect = new UserConnection($_SESSION["USER_SESSION"], $_SESSION["PWD_USER"] );

    require '../../_config/db/DBConexion.php';
    $con = new DBConexion(1, $userConnect);    

    require 'model/modelcomprasnac.php';
    $model = new modelcomprasnac($con->db); 

  //         echo "<pre>";print_r($_POST);echo "<pre>";exit;
        
    $idProveedor = $_POST['selectProveedor'];
    $action      = $_POST['action'];
    $idPedido    = $_POST['idPedido'];
    $obs         = $_POST['comentarios'];
    $numFac 	 = $_POST['numFac'];
    $tempFC      = explode("/", $_POST["fecFac"]);// dd/mm/YYYY
    $fecFac 	 = "$tempFC[2]-$tempFC[1]-$tempFC[0]";
    $formaPago	 = $_POST['selectFormaPago'];
    $tCambio	 = str_replace(',', '', $_POST['tcambio']);
    $gravado	 = str_replace(',', '', $_POST['gravado']);
    $impuesto	 = str_replace(',', '', $_POST['impuesto']);
    $descuento	 = str_replace(',', '', $_POST['descuento']);
    $total		 = str_replace(',', '', $_POST['total']);
    
    
    	
    $result = $model->savePedidoNac($action,$idPedido,$idProveedor,
    		                        $numFac,$fecFac,$formaPago,$tCambio,$gravado,$impuesto,$descuento,$total,$obs,
    		                        $_POST['item'],$_POST['codArti'],$_POST['cant'],$_POST['costPed'],$_POST['precioNuevo'],
    		                        $_POST['utiNueva']);
	if ($result != "OK"){
   		// Hubo en error inesperado en la operacion en la base de datos.
   		// La variable $result  tiene el mensaje que se le debe
   		// desplegar al usuario  	           
	  	header("Location: ../../resources/misc/errorMsg.php?errormsg=".$result);
	  	//echo $result;
	}   
	
    //echo 'Operacion Exitosa';
    header("Location: ../comprasnac/index.php");    

?>