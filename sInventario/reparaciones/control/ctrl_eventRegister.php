<?php

	// Encabezado del control
	require '../../_includes/ctrl_header.php';

	// Se abra la conexion a la BD.
	require '../../_includes/ctrl_openDB.php';
	
  	// A partir de aca codigo particular del modulo    
    require 'model/modelreparaciones.php';
    $model = new modelreparaciones($con->db); 

    // Se valida las opciones que el usuario puede ver
    require '../../_includes/ctrl_opthide.php';   
       
    $mvc->setModule("reparaciones");

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
    
    $idReparacion	  = $_GET["id"];
    $header_pedido    = $model->buscarDetalleReparacion($idTienda,$idReparacion);
    $listEventos      = $model->getAllEventos();
    $allEventosPedido = $model->getEventosReparacion($idReparacion);
    
    $totEvent = sizeof($allEventosPedido);
    
    $mvc->assign("PED_HEADER"  , $header_pedido);
    $mvc->assign("EVENTOS"     , $listEventos);
    $mvc->assign("ALL_EVENTOS" , $allEventosPedido);
    $mvc->assign("ID_PEDIDO"   , $idReparacion);
    $mvc->assign("REGISTER"    , $totEvent);
    
    $page = $mvc->fetch("frmEventRegister.tpl");
    
    // Pie del control
	require '../../_includes/ctrl_footer.php'; 
    
    
?>
