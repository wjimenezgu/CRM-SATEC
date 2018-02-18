<?php

	// Encabezado del control para impresion
	require '../../_includes/ctrl_headerprn.php';

	// Se abra la conexion a la BD.
	require '../../_includes/ctrl_openDB.php';
		
   // A partir de aca codigo particular al modulo.
	require 'model/modelBill.php';
	$model = new modelBill($con->db);
	
	$mvc->setModule("facturacioncxc");
    
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
    

    $idFactu 	= $_GET["idFactura"];

    $mvc->assign("ID_TIENDA"	,$idTienda);
    $mvc->assign("NOMBRE_TIENDA",$nameTienda);
    $currentDate = date('d/m/Y h:i:s A');     
    $mvc->assign("CURRENT_DATE" , $currentDate);
    
    $datosTienda    = $model->getDatosTienda($idTienda);
    $mvc->assign("DATOS_TIENDA"  , $datosTienda);

    $infoEncFactura = $model->buscaEncFact($idTienda,$idFactu);
    $mvc->assign("ENC_FACTURA", $infoEncFactura);

    $infoModoGob = $model->buscaInfoModoGob($idFactu);
    $mvc->assign("INFO_MODOGOB", $infoModoGob);    
 
    $infoDetFacArti = $model->buscaDetFactArti($idFactu);     
    $mvc->assign("LISTA_DETFACARTI", $infoDetFacArti);

    
	$page = $mvc->fetch("imp-factura.tpl");

    // Pie del control
	require '../../_includes/ctrl_footer.php';

?>