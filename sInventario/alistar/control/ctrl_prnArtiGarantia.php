<?php

	// Encabezado del control para impresion
	require '../../_includes/ctrl_headerprn.php';

	// Se abra la conexion a la BD.
	require '../../_includes/ctrl_openDB.php';
		
   // A partir de aca codigo particular al modulo.

	require 'model/modelalistar.php';
	$model = new modelalistar($con->db);
	
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
      /*
       echo "<pre>";
        print_r($_GET);
        echo "<pre>"; 
        exit;
    */
        
    $datosArti		= $_GET["datosArti"];
    $tempTira     	= explode("|", $_GET["datosArti"]);    
    $idFactura		= $tempTira[0];
    $numLinea		= $tempTira[1];
    $codArti		= $tempTira[2];
    $indObligaSerie	= $tempTira[3];
    $descArticulo	= $tempTira[4];
    $numFactura 	= $tempTira[5];
    $numSerie 		= $_GET["numSerie"];
   
    $datosTienda    = $model->getDatosTienda($idTienda);
    $mvc->assign("DATOS_TIENDA"  , $datosTienda);
    
    $mvc->assign("ID_TIENDA"	,$idTienda);
    $mvc->assign("NOMBRE_TIENDA",$nameTienda);
    $currentDate = date('d/m/Y h:i:s A');     
    $mvc->assign("CURRENT_DATE" , $currentDate);
    
    $mvc->assign("ID_FACTURA"		,$idFactura);
    $mvc->assign("NUM_LINEA"		,$numLinea);
    $mvc->assign("COD_ARTI"			,$codArti);
    $mvc->assign("IND_OBLIGASERIE"	,$indObligaSerie);
    $mvc->assign("DESC_ARTICULO"	,$descArticulo);
    $mvc->assign("NUM_FACTURA"		,$numFactura);
    $mvc->assign("NUM_SERIE"		,$numSerie);
             
	$page = $mvc->fetch("prnArtiGarantia.tpl");

    // Pie del control
	require '../../_includes/ctrl_footer.php';

?>