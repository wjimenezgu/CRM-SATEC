<?php

	// Encabezado del control
	require '../../_includes/ctrl_header.php';

	// Se abra la conexion a la BD.
	require '../../_includes/ctrl_openDB.php';
	
  	// A partir de aca codigo particular del modulo    
    require 'model/modelData.php';
    $model = new modelData($con->db); 
       
    $mvc->setModule("factor");

    $action= $_GET["action"]; 
   
   
    // Con base al parametro que se le pasa (action). se decide si es una insercion o una modificacion
    switch ($action){
    	case 1:
    		// Se define la etiqueta que se utilizar en el boton en la pantalla. Como es insercion
    		// se le asigna la palabra Insertar
    		$btn_action = "Insertar";
    		$id= $_GET["parentId"];
    		
    		break;
    		
    	case 2:
    		// Como es una actualizacion, el parametro id, se utiliza para traer los datos
    		// del registro que se desplegaran en la pantalla.
    		//
			$id= $_GET["parentId"];
			$numLinea =  $_GET["id"];
			
			// Ya se tiene el id, para luego llamar la funcion que recupera los datos
			// del registro a modificar.  
   			$infoData = $model->buscarDetalleDataDet($id,$numLinea);
   			
   			// Se define la etiqueta que se utilizar en el boton en la pantalla. Como es insercion
    		// se le asigna la palabra Actualizar
   			$btn_action = "Actualizar";
   			
    		break;
    	case 3:
    		// Como es un borrado, el parametro id, se utiliza para traer los datos
    		// del registro que se desplegaran en la pantalla.
    		//
			$id= $_GET["parentId"];
			$numLinea =  $_GET["id"];
			// Ya se tiene el id, para luego llamar la funcion que recupera los datos
			// del registro a modificar.  
   			$infoData = $model->buscarDetalleDataDet($id,$numLinea);
   			// Se define la etiqueta que se utilizar en el boton en la pantalla. Como es insercion
    		// se le asigna la palabra Actualizar
   			$btn_action = "Borrar";
   			
    		break;

    	case 4:
    		// Como es una visualizacion, el parametro id, se utiliza para traer los datos
    		// del registro que se desplegaran en la pantalla.
    		//
			$id= $_GET["parentId"];
			$numLinea =  $_GET["id"];
			// Ya se tiene el id, para luego llamar la funcion que recupera los datos
			// del registro a modificar.  
   			$infoData = $model->buscarDetalleDataDet($id,$numLinea);
   			// Se define la etiqueta que se utilizar en el boton en la pantalla. Como es insercion
    		// se le asigna la palabra Actualizar
   			$btn_action = "Aceptar";
   			
    		break;
    }
    
    // Se crean las variables que se le pasaran al view, para que sean desplegados.    
    $mvc->assign("ACTION"	 , $action);
    $mvc->assign("ID" , $id);
    $mvc->assign("NUM_LINEA",	$numLinea);
    $mvc->assign("DATA"    , $infoData);
    $mvc->assign("BTN_ACTION", $btn_action);

    $page = $mvc->fetch("DataDet.tpl");
    
    // Pie del control
	require '../../_includes/ctrl_footer.php';

?>
