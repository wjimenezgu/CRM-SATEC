<?php

	// Encabezado del control
	require '../../_includes/ctrl_headerSinMenu.php';

	// Se abra la conexion a la BD.
	require '../../_includes/ctrl_openDB.php';
	
  	// A partir de aca codigo particular del modulo    
    require 'model/modelItems.php';
    $model = new modelItems($con->db); 
    
    // Se valida las opciones que el usuario puede ver
    require '../../_includes/ctrl_opthide.php';
       
    $mvc->setModule("itemsBodega");
       
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
			$id= $_GET["id"];
			// Ya se tiene el id, para luego llamar la funcion que recupera los datos
			// del registro a modificar.  
   			$info = $model->buscarDetalleItem($id);
   			// Se define la etiqueta que se utilizar en el boton en la pantalla. Como es insercion
    		// se le asigna la palabra Actualizar
   			$btn_action = "Actualizar";
   			
    		break;
    	case 3:
    		// Como es un borrado, el parametro id, se utiliza para traer los datos
    		// del registro que se desplegaran en la pantalla.
    		//
			$id= $_GET["id"];
			// Ya se tiene el id, para luego llamar la funcion que recupera los datos
			// del registro a modificar.  
   			$info 	  = $model->buscarDetalleItem($id);
   			// Se define la etiqueta que se utilizar en el boton en la pantalla. Como es insercion
    		// se le asigna la palabra Actualizar
   			$btn_action = "Borrar";
   			
    		break;
    		
    	case 7:  // listar los movimientos del articulo
    		$id= $_GET["id"];
    		// Ya se tiene el id, para luego llamar la funcion que recupera los datos
    		// del registro a modificar.
    		$info = $model->buscarDetalleItem($id);
    		$itemMovi = $model->buscarDetItemMovi('0',$id);
    		$mvc->assign("ITEM_MOVI", $itemMovi);
    		$mvc->assign("COLOR_LINEA"  ,"blue");
    		$mvc->assign("TIENDA_ACTUAL" ,"");
    		$mvc->assign("NOMBRE_TIENDA_ACTUAL" ,"");
    		// Se define la etiqueta que se utilizar en el boton en la pantalla. Como es insercion
    		// se le asigna la palabra Actualizar
    		$btn_action = "Aceptar";
    		
    	break;
    		
    		
    		
    }
  
    // Se crean las variables que se le pasaran al view, para que sean desplegados.
    $SuppliersList = $model->getAllSuppliers();
    $EstadoArtiList= $model->getAllEstadoArti();    
    $CategoriesList= $model->getListaCategorias();


    $mvc->assign("ID_ITEM", $id);
    $mvc->assign("ITEM", $info);
    $mvc->assign("SUPPLIERS_LIST", $SuppliersList);
    $mvc->assign("ESTADOARTI_LIST", $EstadoArtiList);
    $mvc->assign("CATEGORIES_LIST", $CategoriesList);    
    
    
    $mvc->assign("ACTION"	 , $action);
    $mvc->assign("BTN_ACTION", $btn_action);
    
    if ($action != 7)
    	$page = $mvc->fetch("item.tpl");
    else{
    	$page = $mvc->fetch("itemMovi.tpl");
    }
       
    // Pie del control
	require '../../_includes/ctrl_footer.php';

?>