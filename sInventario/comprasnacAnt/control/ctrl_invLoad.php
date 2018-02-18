<?php

	// Encabezado del control que verificar si la session expiro.
	require '../../_includes/ctrl_checksession.php';
	
	// Encabezado del control
	require '../../_includes/ctrl_header.php';

	// Se abra la conexion a la BD.
	require '../../_includes/ctrl_openDB.php';
	
    require 'model/modelcomprasnac.php';
    $model = new modelcomprasnac($con->db);        

    // Se valida las opciones que el usuario puede ver
    require '../../_includes/ctrl_opthide.php';    
    
    $mvc->setModule("comprasnac");


    // echo "<pre>"; print_r($_GET); echo "<pre>";exit;
    
    if(isset($_SESSION["TIENDA_ID"])){
   		$idTienda   = $_SESSION["TIENDA_ID"];
    }else{
    	$idTienda   = 0;// default
    }
    $criterio=$_GET["criterio"];
    $txtBuscar=$_GET["txtBuscar"];
    
    
    $tempFE      = explode("/", $_GET["fecIni"]);
    $fecMoviIni	 = $tempFE[2].'-'.$tempFE[1].'-'.$tempFE[0].' 00:00:00';
    
 
    if(isset($_SESSION["PORCE_IV"])){        
    	$porceIV2   = $_SESSION["PORCE_IV"];
    }else{
    	$porceIV2="-1";
    }    
    
	$costoOFF = $model->GetFieldHide($_SESSION["USER_SESSION"],'COSTO_OFF');
	$utilOFF = $model->GetFieldHide($_SESSION["USER_SESSION"],'UTIL_OFF');
    $inventario = $model->buscarProductoMoviPedido($idTienda,$criterio,$txtBuscar,$fecMoviIni);
           
	$mvc->assign("COSTO_OFF", $costoOFF); 
	$mvc->assign("UTIL_OFF", $utilOFF);
    $mvc->assign("INVENTARIO", $inventario);
    $mvc->assign("PORCE_IV2", $porceIV2);
    $mvc->display("inventory.tpl");


?>
