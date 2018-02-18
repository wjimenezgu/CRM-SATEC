<?php

	// Encabezado del control
	require '../../_includes/ctrl_header.php';

	// Se abra la conexion a la BD.
	require '../../_includes/ctrl_openDB.php';
		
   // A partir de aca codigo particular al modulo.

    require 'model/modelconsultas.php';
    $model = new modelconsultas($con->db);       
    
    // Se valida las opciones que el usuario puede ver
    require '../../_includes/ctrl_opthide.php';    
    
   // hasta aqui codigo agregado
    
    $mvc->setModule("consultas");
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
    
    $currentDate = date("d/m/Y");
    $mvc->assign("CURRENT_DATE" , $currentDate);
    $mvc->assign("CURRENT_STORE" ,$nameTienda);
    $mvc->assign("ID_TIENDA"		,$idTienda);
    $mvc->assign("LISTA_ITEMS"		, $infoItems);
    $infoTiendas = $model->getAllTiendas();
    $mvc->assign("LISTA_TIENDAS"	, $infoTiendas);
 
    $page = $mvc->fetch("ventas.tpl");
    
    // Pie del control
	require '../../_includes/ctrl_footer.php'; 

?>