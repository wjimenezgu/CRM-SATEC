<?php

	// Encabezado del control que verificar si la session expiro.
	require '../../_includes/ctrl_checksession.php';
	
	// Encabezado del control
	require '../../_includes/ctrl_header.php';

	// Se abra la conexion a la BD.
	require '../../_includes/ctrl_openDB.php';
	
	require 'model/modelreparaciones.php';
	$model = new modelreparaciones($con->db);
	
	
	// Se valida las opciones que el usuario puede ver
	require '../../_includes/ctrl_opthide.php';
	
	$mvc->setModule("controlrepa");
	
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

    
    $criterio = $_POST["criterio"]; 
    $idTienda = $_POST["idTienda"];
  
	$infoReparaciones = $model->getAllReparaciones($idTienda,$criterio);
           
    $mvc->assign("LISTA_REPARACIONES", $infoReparaciones);
              
    $mvc->display("listreparaciones.tpl");          

?>