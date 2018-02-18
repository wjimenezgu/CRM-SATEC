<?php

	// Encabezado del control
	require '../../_includes/ctrl_headerSinMenu.php';

	// Se abra la conexion a la BD.
	require '../../_includes/ctrl_openDB.php';
		
   // A partir de aca codigo particular al modulo.

    require 'model/modelMCompras.php';
    $model = new modelMCompras($con->db);        

    // Se valida las opciones que el usuario puede ver
    require '../../_includes/ctrl_opthide.php'; 
    
    $action 		 = $_GET["action"];
    $idPedido        = $_GET["id"];
    switch($action){
    	case 1: // insertar
    
    		$btn_action = "Insertar"; 
    
    		break;
    
    	case 2: // modificar
    		// se trae la informacion del pedido.
    		$infoEncPedido = $model->buscarEncPedidoPrecarga($idPedido);
    		$infoDetPedido = $model->buscarDetPedidoPrecarga($idPedido);
    		$btn_action = "Actualizar";
    
    		break;
    
    	case 3: // borrar
    
    		$btn_action = "Borrar";
    
    		break;
    	
    	case 4: // ver la informacion unicamente
    		$infoEncPedido = $model->buscarEncPedidoPrecarga($idPedido);
    		$infoDetPedido = $model->buscarDetPedidoPrecarga($idPedido);
    		$btn_action = "Aceptar";
    		break;    		    
    
    }
    
    $listProvedores  = $model->getAllProveedores();
    $infoPorceIV     = $model->getPorceIV();
    
    $mvc->assign("ACTION"  		 , $action);
    $mvc->assign("BTN_ACTION"  	 , $btn_action);
    $mvc->assign("PROVEEDORES"   , $listProvedores);
    $mvc->assign("PEDIDO_NAC"    , $infoEncPedido);
    $mvc->assign("DETPEDIDO_NAC" , $infoDetPedido);
    $mvc->assign("ID_PEDIDO"     , $idPedido);
    $mvc->assign("PORCE_IV"      , $infoPorceIV);
    
    $currentDate = date("d/m/Y");
    $mvc->assign("CURRENT_DATE" , $currentDate);
    
    $mvc->setModule("mcompras");

    
    $page = $mvc->fetch("frmPedidoPrecarga.tpl");
    
    
    // Pie del control
	require '../../_includes/ctrl_footer.php';
    
?>