<?php

	// Encabezado del control que verificar si la session expiro.
	require '../../_includes/ctrl_checksession.php';

	// Encabezado del control
	require '../../_includes/ctrl_headerSinMenu.php';

	// Se abra la conexion a la BD.
	require '../../_includes/ctrl_openDB.php';
		
   // A partir de aca codigo particular al modulo.

    require 'model/modelcobrar.php';
    $model = new modelcobrar($con->db);        

    // Se valida las opciones que el usuario puede ver
    require '../../_includes/ctrl_opthide.php';   
 
    $mvc->setModule("cobrardife");
     
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
    
    
    //$idTienda   = $_SESSION["TIENDA_ID"];
    
    $infoFacturas = $model->getAllFacturas($idTienda);
    $infoFormaPago = $model->getAllFormapago();
   
    $mvc->assign("LISTA_FACTURAS", $infoFacturas);
    $mvc->assign("LISTA_FPAGOS", $infoFormaPago);
    $mvc->assign("ID_TIENDA"	,$idTienda);
    $mvc->assign("NOMBRE_TIENDA",$nameTienda);
    
    $page = $mvc->fetch("allFacturas.tpl");
    
    // Pie del control
	require '../../_includes/ctrl_footer.php';
    
?>
