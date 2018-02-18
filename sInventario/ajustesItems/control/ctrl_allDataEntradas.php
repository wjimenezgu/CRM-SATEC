<?php

	// Encabezado del control
	require '../../_includes/ctrl_header.php';

	// Se abra la conexion a la BD.
	require '../../_includes/ctrl_openDB.php';
		
   // A partir de aca codigo particular al modulo.

    require 'model/modelajustesitems.php';
    $model = new modelajustesitems($con->db);

 	// Se valida las opciones que el usuario puede ver
	require '../../_includes/ctrl_opthide.php';   

    $mvc->setModule("ajustesItems");
    
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
 
    $infoData = $model->getAllData($idTienda,"E");

    $mvc->assign("DESC_MOV","ENTRADAS");
    $mvc->assign("TIPO_MOV","E");
    $mvc->assign("LISTA_DATA", $infoData);
    $mvc->assign("ID_TIENDA"	,$idTienda);
    $mvc->assign("NOMBRE_TIENDA",$nameTienda);    

    $page = $mvc->fetch("allData.tpl");
  
    // Pie del control
	require '../../_includes/ctrl_footer.php';
    
?>