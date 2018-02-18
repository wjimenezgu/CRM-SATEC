<?php

	// Encabezado del control para impresion
	require '../../_includes/ctrl_headerprn.php';

	// Se abra la conexion a la BD.
	require '../../_includes/ctrl_openDB.php';

   // A partir de aca codigo particular al modulo.

    require 'model/modelajustesitems.php';
    $model = new modelajustesitems($con->db);       
 
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
 
    
    $action= $_GET["action"];
    $EoS   = $_GET["EoS"];
    

 // el siguiente codigo no se usa.  
 //   $infoEoS = $model->getAllData();

 //   $mvc->assign("LISTA_TIENDAS", $infoEoS);
    
   
    $mvc->assign("NOMBRE_TIENDA",$nameTienda);
    $currentDate = date('d/m/Y h:i:s A');     
    $mvc->assign("CURRENT_DATE" , $currentDate);
    
    		// Como es una actualizacion, el parametro id, se utiliza para traer los datos
    		// del registro que se desplegaran en la pantalla.
    		//
			$idAjuste= $_GET["id"];
			// Ya se tiene el id, para luego llamar la funcion que recupera los datos
			// del registro a modificar.  
   			$infoEncAjuste = $model->buscarEncAjuste($idTienda,$idAjuste);
   			$infoDetAjuste = $model->buscarDetAjuste($idAjuste);
   			// Se define la etiqueta que se utilizar en el boton en la pantalla. Como es insercion
    		// se le asigna la palabra Actualizar
   			$btn_action = "Rechazar";
   			
    
    // Se crean las variables que se le pasaran al view, para que sean desplegados.    
    $mvc->assign("ACTION"	 , $action);
    $mvc->assign("EoS"	 	 , $EoS);
    $mvc->assign("ID_AJUSTE" , $idAjuste);
    $mvc->assign("AJUSTE"    , $infoEncAjuste);
    $mvc->assign("DETAJUSTE" , $infoDetAjuste);
    $mvc->assign("TIT_REPORTE" , 'Entrada de Mercaderia');
    
    
    if ($EoS == 'E'){
    	$mvc->assign("DESC_MOV","ENTRADA");
    	$mvc->assign("ID_TIENDA_AJUSTE",$infoEncAjuste[0].codTiendaDestino);
    	$mvc->assign("TIT_REPORTE" , 'Entrada de Mercaderia');
    }else{
    	$mvc->assign("DESC_MOV","SALIDA");
    	$mvc->assign("ID_TIENDA_AJUSTE",$infoEncAjuste[0].codTiendaOrigen);
    	$mvc->assign("TIT_REPORTE" , 'Salida de Mercaderia');
    	
    }
    
	$page = $mvc->fetch("prnData.tpl");
	
    // Pie del control
	require '../../_includes/ctrl_footer.php';

?>