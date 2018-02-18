<?php

	// Encabezado del control
	require '../../_includes/ctrl_header.php';

	// Se abra la conexion a la BD.
	require '../../_includes/ctrl_openDB.php';
	
  	// A partir de aca codigo particular del modulo    
    require 'model/modelreparaciones.php';
    $model = new modelreparaciones($con->db); 
     
    // Se valida las opciones que el usuario puede ver
    require '../../_includes/ctrl_opthide.php';
       
    $mvc->setModule("reparaciones");
    
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
    // Con base al parametro que se le pasa (action). se decide si es una insercion o una modificacion
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
			$idReparacion= $_GET["id"];
			// Ya se tiene el id, para luego llamar la funcion que recupera los datos
			// del registro a modificar.  
   			$infoReparacion = $model->buscarDetalleReparacion($idTienda,$idReparacion);
   			// Se define la etiqueta que se utilizar en el boton en la pantalla. Como es insercion
    		// se le asigna la palabra Actualizar
   			$btn_action = "Actualizar";
   			
    		break;
    	case 3:
    		// Como es un borrado, el parametro id, se utiliza para traer los datos
    		// del registro que se desplegaran en la pantalla.
    		//
			$idReparacion= $_GET["id"];
			// Ya se tiene el id, para luego llamar la funcion que recupera los datos
			// del registro a modificar.  
   			$infoReparacion = $model->buscarDetalleReparacion($idTienda,$idReparacion);
   			// Se define la etiqueta que se utilizar en el boton en la pantalla. Como es insercion
    		// se le asigna la palabra Actualizar
   			$btn_action = "Borrar";
   			
    		break;
    	 case 4:
    			// Como es un borrado, el parametro id, se utiliza para traer los datos
    			// del registro que se desplegaran en la pantalla.
    			//
    			$idReparacion= $_GET["id"];
    			// Ya se tiene el id, para luego llamar la funcion que recupera los datos
    			// del registro a modificar.
    			$infoReparacion = $model->buscarDetalleReparacion($idTienda,$idReparacion);
    			// Se define la etiqueta que se utilizar en el boton en la pantalla. Como es insercion
    			// se le asigna la palabra Actualizar
    			$btn_action = "Ver";
    		
    			break;    		
    }
    $infoClientes = $model->getAllClientes();
    $mvc->assign("LISTA_CLIENTES", $infoClientes);
    
    $infoTiendas  = $model->getAllTiendas();
    $mvc->assign("LISTA_TIENDAS", $infoTiendas);
    
    $totrepaOFF = $model->GetFieldHide($_SESSION["USER_SESSION"],'TOTREPA_OFF');
    $mvc->assign("TOTREPA_OFF", $totrepaOFF);
    
    // Se crean las variables que se le pasaran al view, para que sean desplegados.
    $mvc->assign("ID_TIENDA"	 , $idTienda);
    $mvc->assign("NOMBRE_TIENDA" , $nameTienda);
    $mvc->assign("ACTION"	     , $action);
    $mvc->assign("ID_REPARACION" , $idReparacion);
    $mvc->assign("REPARACION"    , $infoReparacion);
    $mvc->assign("BTN_ACTION"    , $btn_action);

    $page = $mvc->fetch("reparacion.tpl");
    
    // Pie del control
	require '../../_includes/ctrl_footer.php';

?>