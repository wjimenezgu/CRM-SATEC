<?php

	// Encabezado del control
	require '../../_includes/ctrl_headerSinMenu.php';

	// Se abra la conexion a la BD.
	require '../../_includes/ctrl_openDB.php';
		
   // A partir de aca codigo particular al modulo.

    require 'model/modelcomprasnac.php';
    $model = new modelcomprasnac($con->db);        

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
    		$infoEncPedido = $model->buscarEncPedidoNac($idPedido);
    		$infoDetPedido = $model->buscarDetPedidoNac($idPedido);
    		$btn_action = "Actualizar";
    
    		break;
    
    	case 3: // borrar
    
    		$btn_action = "Borrar";
    
    		break;
    	
    	case 4: // ver la informacion unicamente
    		$infoEncPedido = $model->buscarEncPedidoNac($idPedido);
    		$infoDetPedido = $model->buscarDetPedidoNac($idPedido);
    		$btn_action = "Aceptar";
    		break;
    		
    	case 5: // recibir mercaderia
    			// se trae la informacion del pedido.
    		$infoEncPedido = $model->buscarEncPedidoNac($idPedido);
    		$infoDetPedido = $model->buscarDetPedidoNacReci($idPedido);
    		$btn_action = "Recibir Pedido";
    		break;
    		
    	case 7: // anular pedido
    			// se trae la informacion del pedido.
    			$infoEncPedido = $model->buscarEncPedidoNac($idPedido);
    			$infoDetPedido = $model->buscarDetPedidoNac($idPedido);
    			$btn_action = "Anular Pedido";
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
    
    $mvc->setModule("comprasnac");

    if ($action == 5){
    	$page = $mvc->fetch("frmCompraNacReci.tpl");
    }else{
    	$page = $mvc->fetch("frmCompraNac.tpl");
    }
    
    // Pie del control
	require '../../_includes/ctrl_footer.php';
    
?>