<?php

	// Encabezado del control para impresion
	require '../../_includes/ctrl_headerprn.php';

	// Se abra la conexion a la BD.
	require '../../_includes/ctrl_openDB.php';

   // A partir de aca codigo particular al modulo.

    require 'model/modelnotascr.php';
    $model = new modelnotascr($con->db);       
 
    $mvc->setModule("notascr");
  
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

    $mvc->assign("NOMBRE_TIENDA",$nameTienda);
    $currentDate = date('d/m/Y h:i:s A');     
    $mvc->assign("CURRENT_DATE" , $currentDate);
    
    
	$idNotaCr= $_GET["id"];
	$totalApli= $_GET["totalApli"];
	$saldoNota= $_GET["saldoNota"];

	$datosTienda    = $model->getDatosTienda($idTienda);
	$infoEncNotaCr  = $model->buscarEncNotaCr($idTienda,$idNotaCr);
	$infoApliNotaCr = $model->buscarApliNota($idNotaCr);
   			   
    // Se crean las variables que se le pasaran al view, para que sean desplegados.    

    $mvc->assign("IDNOTACR"  	, $idNotaCr);
    $mvc->assign("NOTACR"       , $infoEncNotaCr);
    $mvc->assign("APLINOTACR"   , $infoApliNotaCr);
    $mvc->assign("TOTAL_APLI"   , $totalApli);
    $mvc->assign("SALDO_NOTA"   , $saldoNota);
    $mvc->assign("TIT_REPORTE"  , 'Nota de Crédito');
    $mvc->assign("DATOS_TIENDA"  , $datosTienda);
    
	$page = $mvc->fetch("prnNotaCr.tpl");
	
    // Pie del control
	require '../../_includes/ctrl_footer.php';

?>