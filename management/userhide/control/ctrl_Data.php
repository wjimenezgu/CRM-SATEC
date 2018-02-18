<?php

	// Encabezado del control
	require '../../_includes/ctrl_header.php';

	// Se abra la conexion a la BD.
	require '../../_includes/ctrl_openDB.php';
	
  	// A partir de aca codigo particular del modulo    
    require 'model/modelData.php';
    $model = new modelData($con->db); 
       
    $mvc->setModule("userhide");

    /*echo "<pre>";
    print_r($_GET);
    echo "<pre>";
    print $resul;
    exit;*/
    
    $action= $_GET["action"]; 
    // Con base al parametro que se le pasa (action). se decide si es una insercion o una modificacion
    switch ($action){
    	case 1:
    		// Se define la etiqueta que se utilizar en el boton en la pantalla. Como es insercion
    		// se le asigna la palabra Insertar
    		$btn_action = "Insertar";
    		
    		break;
    		
    	case 2:
    		$id      = $_GET["id"];
    		$sysname = $_GET["sysname"];
    		$idform	 = $_GET["idform"];
    		$idfield = $_GET["idfield"];
    		// SE UTILIZAN TODOS LOS PARAMETROS PARA TRAER TODOS LOS DATOS DEL GET
    		// POR TIPO DE TABLA SE UTILIZAN TODOS LOS CAMPOS PARA HACER EL GET.
    		// Ya se tiene el id, para luego llamar la funcion que recupera los datos
			// del registro a COPIAR.  
   			$infoData = $model->buscarDetalleData($id,$sysname,$idform,$idfield);
   			
   			
   			// Se define la etiqueta que se utilizar en el boton en la pantalla. Como es insercion
    		// se le asigna la palabra Actualizar
   			$btn_action = "Copiar";
   			
    		break;
    	case 3:
    		$id      = $_GET["id"];
    		$sysname = $_GET["sysname"];
    		$idform	 = $_GET["idform"];
    		$idfield = $_GET["idfield"];
    		// Como es un borrado, el parametro id, se utiliza para traer los datos
    		// del registro que se desplegaran en la pantalla.
			// Ya se tiene el id, para luego llamar la funcion que recupera los datos
			// del registro a modificar.  
   			$infoData = $model->buscarDetalleData($id,$sysname,$idform,$idfield);
   			
   			// Se define la etiqueta que se utilizar en el boton en la pantalla. Como es insercion
    		// se le asigna la palabra Actualizar
   			$btn_action = "Borrar";
   			
    		break;

    	case 4:
    		$id      = $_GET["id"];
    		$sysname = $_GET["sysname"];
    		$idform	 = $_GET["idform"];
    		$idfield = $_GET["idfield"];
    		// Como es una visualizacion, el parametro id, se utiliza para traer los datos
    		// del registro que se desplegaran en la pantalla.
			// Ya se tiene el id, para luego llamar la funcion que recupera los datos
			// del registro a modificar.  
   			$infoData = $model->buscarDetalleData($id,$sysname,$idform,$idfield);
   			
   			// Se define la etiqueta que se utilizar en el boton en la pantalla. Como es insercion
    		// se le asigna la palabra Actualizar
   			$btn_action = "Aceptar";
   			
    		break;
    		
    }
    
    // Se crean las variables que se le pasaran al view, para que sean desplegados.    
    $mvc->assign("ACTION"	 , $action);
    $mvc->assign("ID" 	     , $id);
    //$mvc->assign("SYSNAME" 	     , $sysname);
    //$mvc->assign("IDFORM" 	     , $idform);
    //$mvc->assign("IDFIELD" 	     , $idfield);
    $mvc->assign("DATA"    	 , $infoData);
    $mvc->assign("BTN_ACTION", $btn_action);

    $page = $mvc->fetch("Data.tpl");
    
    // Pie del control
	require '../../_includes/ctrl_footer.php';

?>