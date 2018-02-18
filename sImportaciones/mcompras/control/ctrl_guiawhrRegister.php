<?php

	// Encabezado del control
	require '../../_includes/ctrl_header.php';

	// Se abra la conexion a la BD.
	require '../../_includes/ctrl_openDB.php';
	
  	// A partir de aca codigo particular del modulo    
    require 'model/modelMCompras.php';
    $model = new modelMCompras($con->db); 
       
    $mvc->setModule("mcompras");
      
    $action= $_GET["action"]; 
    // Con base al parametro que se le pasa (action). se decide si es una insercion o una modificacion
    switch ($action){
    	case 1:
    		// Se define la etiqueta que se utilizar en el boton en la pantalla. Como es insercion
    		// se le asigna la palabra Insertar
    		$numGuia=$_GET["numGuia"];
    		$btn_action = "Insertar";
    		
    		break;
    		
    	case 2:
    		// Como es una actualizacion, el parametro id, se utiliza para traer los datos
    		// del registro que se desplegaran en la pantalla.
    		//
    		$numGuia=$_GET["numGuia"];
			$whr= $_GET["id"];
			// Ya se tiene el id, para luego llamar la funcion que recupera los datos
			// del registro a modificar.  
   			$infoGuiaWhr = $model->buscarDetalleGuiaWhr($numGuia,$whr);
   			// Se define la etiqueta que se utilizar en el boton en la pantalla. Como es insercion
    		// se le asigna la palabra Actualizar
   			$btn_action = "Actualizar";
	
    		break;
    	case 3:
    		// Como es un borrado, el parametro id, se utiliza para traer los datos
    		// del registro que se desplegaran en la pantalla.
    		//
    		$numGuia=$_GET["numGuia"];
			$whr= $_GET["id"];
			// Ya se tiene el id, para luego llamar la funcion que recupera los datos
			// del registro a modificar.  
   			$infoGuiaWhr = $model->buscarDetalleGuiaWhr($numGuia,$whr);
   			// Se define la etiqueta que se utilizar en el boton en la pantalla. Como es insercion
    		// se le asigna la palabra Actualizar
   			$btn_action = "Borrar";
   			
    		break;
    }
  
    // Se crean las variables que se le pasaran al view, para que sean desplegados.    
    $mvc->assign("ACTION"	 , $action);
    $mvc->assign("NUMGUIA"   , $numGuia);
    $mvc->assign("GUIAWHR"   , $infoGuiaWhr);
    $mvc->assign("BTN_ACTION", $btn_action);

    $page = $mvc->fetch("guiawhr.tpl");
    
    // Pie del control
	require '../../_includes/ctrl_footer.php';

?>