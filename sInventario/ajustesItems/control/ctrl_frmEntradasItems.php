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
    $infoTipoMov = $model->getAllTipoMovTienda($idTienda,'E');
    

    $mvc->assign("LISTA_TIENDAS", $infoTiendas);
    $mvc->assign("LISTA_TIPOMOV", $infoTipoMov);
    $mvc->assign("ID_TIENDA",$idTienda);
    $mvc->assign("DESC_MOV","ENTRADAS");
    $currentDate = date("d/m/Y");     
    $mvc->assign("CURRENT_DATE" , $currentDate);

    switch ($action){
    	case 1:
    		// Se define la etiqueta que se utilizar en el boton en la pantalla. Como es insercion
    		// se le asigna la palabra Insertar
    		$btn_action = "Insertar";
    		
    		break;
    		
    	case 2:
    		
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
   			$btn_action = "Actualizar";
   		
    		break;
    	case 3:
    		// Como es un borrado, el parametro id, se utiliza para traer los datos
    		// del registro que se desplegaran en la pantalla.
    		//
			$idAjuste= $_GET["id"];
			// Ya se tiene el id, para luego llamar la funcion que recupera los datos
			// del registro a modificar.  
   			$infoEncAjuste = $model->buscarEncAjuste($idTienda,$idAjuste);
   			$infoDetAjuste = $model->buscarDetAjuste($idAjuste);
   			// Se define la etiqueta que se utilizar en el boton en la pantalla. Como es insercion
    		// se le asigna la palabra Actualizar
   			$btn_action = "Borrar";
   			
    		break;
    	case 5:
    			// Como es una aprobacion, el parametro id, se utiliza para traer los datos
    			// del registro que se desplegaran en la pantalla.
    			//
    			$idAjuste= $_GET["id"];
    			// Ya se tiene el id, para luego llamar la funcion que recupera los datos
    			// del registro a modificar.
    			$infoEncAjuste = $model->buscarEncAjuste($idTienda,$idAjuste);
    			$infoDetAjuste = $model->buscarDetAjuste($idAjuste);
    			// Se define la etiqueta que se utilizar en el boton en la pantalla. Como es insercion
    			// se le asigna la palabra Actualizar
    			$btn_action = "Aprobar";
    		
    			break;    		
    }
    
    // Se crean las variables que se le pasaran al view, para que sean desplegados.    
    $mvc->assign("ACTION"	 , $action);
    $mvc->assign("EoS"	 	 , $EoS);
    $mvc->assign("ID_AJUSTE" , $idAjuste);
    $mvc->assign("AJUSTE"    , $infoEncAjuste);
    $mvc->assign("DETAJUSTE" , $infoDetAjuste);
    $mvc->assign("BTN_ACTION", $btn_action);
       
	$page = $mvc->fetch("ajustesitems.tpl");

    // Pie del control
	require '../../_includes/ctrl_footer.php';

?>