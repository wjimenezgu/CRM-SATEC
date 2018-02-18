<?php

	// Encabezado del control para impresion
	require '../../_includes/ctrl_headerprn.php';

	// Se abra la conexion a la BD.
	require '../../_includes/ctrl_openDB.php';
		
   // A partir de aca codigo particular al modulo.

	require 'model/modelproformas.php';
	$model = new modelproformas($con->db);
	
	$mvc->setModule("proformas");
    
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
  /*    
       echo "<pre>";
        print_r($_GET);
        echo "<pre>"; 
        exit;
  */ 
    
    
    $id_Tienda  = $_GET["idTienda"];
    $idProforma = $_GET["idProforma"];
       
    $mvc->assign("ID_TIENDA"	,$id_Tienda);
    $mvc->assign("NOMBRE_TIENDA",$nameTienda);
    $currentDate = date('d/m/Y h:i:s A');     
    $mvc->assign("CURRENT_DATE" , $currentDate);

	
	// Ya se tiene el id, para luego llamar la funcion que recupera los datos
	// del registro a modificar. 
;
	$datosTienda     = $model->getDatosTienda($id_Tienda);	

	$infoEncProfArti = $model->buscarEncProforma($id_Tienda,$idProforma);

	$infoDetProfArti = $model->buscarDetProfArti($idProforma);
	

	
    // Se crean las variables que se le pasaran para que sean impresos.    
    $mvc->assign("ID_PROFORMA"     , $idProforma);
    $mvc->assign("ENC_PROFORMA"    , $infoEncProfArti);
    $mvc->assign("DET_PROFORMA"    , $infoDetProfArti);
    $mvc->assign("DATOS_TIENDA"    , $datosTienda);

	$page = $mvc->fetch("prnProforma.tpl");

    // Pie del control
	require '../../_includes/ctrl_footer.php';

?>