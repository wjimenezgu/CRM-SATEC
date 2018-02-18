<?php

	// Encabezado del control para impresion
	require '../../_includes/ctrl_headerprn.php';

	// Se abra la conexion a la BD.
	require '../../_includes/ctrl_openDB.php';
		
   // A partir de aca codigo particular al modulo.

    require 'model/modelData.php';
    $model = new modelData($con->db);       
  
    $mvc->setModule("traslados");
    
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
    
    $action= $_GET["action"];
    $EoS   = $_GET["EoS"];
    

   
    $infoTiendas = $model->getAllTiendas();
    
    // solo movimiento tipo E: entrada
    //$infoTipoMov 	= $model->getAllTipoMovTienda($idTienda,'E');
    $listaTiendas 	= $model->getListaTiendas($idTienda);

    $mvc->assign("LISTA_TIENDAS_SEL", $listaTiendas);
    $mvc->assign("LISTA_TIENDAS", $infoTiendas);
    //$mvc->assign("LISTA_TIPOMOV", $infoTipoMov);
    $mvc->assign("ID_TIENDA"	,$idTienda);
    $mvc->assign("NOMBRE_TIENDA",$nameTienda);
    $currentDate = date('d/m/Y h:i:s A');     
    $mvc->assign("CURRENT_DATE" , $currentDate);

    		// Como es una actualizacion, el parametro id, se utiliza para traer los datos
    		// del registro que se desplegaran en la pantalla.
    		//
			$idTraslado= $_GET["id"];
			// Ya se tiene el id, para luego llamar la funcion que recupera los datos
			// del registro a modificar.  
   			$infoEncTraslado = $model->buscarEncTraslado($idTienda,$idTraslado,$EoS);
   			$infoDetTraslado = $model->buscarDetTrasladoAlistar($idTraslado);
   			// Se define la etiqueta que se utilizar en el boton en la pantalla. Como es insercion
    		// se le asigna la palabra Actualizar
   			$btn_action = "Rechazar";

    
    // Se crean las variables que se le pasaran al view, para que sean desplegados.    
    $mvc->assign("ACTION"	 , $action);
    $mvc->assign("EoS"	 	 , $EoS);
    $mvc->assign("ID_TRASLADO" , $idTraslado);
    $mvc->assign("TRASLADO"    , $infoEncTraslado);
    $mvc->assign("DETTRASLADO" , $infoDetTraslado);
    $mvc->assign("TIT_REPORTE" , 'Preparar Mercaderia');

    
    
    if ($EoS == 'O'){
    	$mvc->assign("DESC_MOV","SOLICITAR");
    	$mvc->assign("ID_TIENDA_TRASLADO",$infoEncTraslado[0].codTiendaDestino);
    }else{
    	$mvc->assign("DESC_MOV","ENVIAR");
    	$mvc->assign("ID_TIENDA_TRASLADO",$infoEncTraslado[0].codTiendaOrigen);
    	
    }
     
	$page = $mvc->fetch("prnDataAlistar.tpl");

    // Pie del control
	require '../../_includes/ctrl_footer.php';

?>