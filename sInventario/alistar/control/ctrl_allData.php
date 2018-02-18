<?php

	// Encabezado del control
	require '../../_includes/ctrl_headerSinMenuTimer.php';

	// Se abra la conexion a la BD.
	require '../../_includes/ctrl_openDB.php';
		
   // A partir de aca codigo particular al modulo.

    require 'model/modelalistar.php';
    $model = new modelalistar($con->db);        

    // Se valida las opciones que el usuario puede ver
    require '../../_includes/ctrl_opthide.php';    
    
    $mvc->setModule("alistar");
    
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
    
    $infoArtiAlistar = $model->buscarDetArtiAlistar($idTienda);
    
    $mvc->assign("LISTA_DATA",   $infoArtiAlistar);
    $mvc->assign("ID_TIENDA"	,$idTienda);
    $mvc->assign("NOMBRE_TIENDA",$nameTienda);
    $mvc->assign("ID_FACACTUAL" ,"");
    $mvc->assign("COLOR_LINEA"  ,"blue");
    
    $page = $mvc->fetch("allData.tpl");
    
    // Pie del control
	require '../../_includes/ctrl_footer.php';
    
?>