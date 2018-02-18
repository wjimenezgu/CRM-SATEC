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
    		$btn_action = "Conciliar";
    		$listProvedores  = $model->getAllProveedores();
    		$listTarjetas    = $model->getAllTarjetas();
    		
    		break;
    		
    	case 2:
    		// Como es una actualizacion, el parametro id, se utiliza para traer los datos
    		// del registro que se desplegaran en la pantalla.
    		//
			$id			   = $_GET["id"];
			$detId         = explode("|", $_GET["id"]) ;
			$numTarjeta    = $detId[0];
			$fecCorte      = $detId[1];
			$idProveedor   = $detId[2];
			$idProveedor   = 0;
			
			$fechaCorte    = explode("/",$fecCorte) ;
			$fecCorteS      = $fechaCorte[2]."-".$fechaCorte[1]."-".$fechaCorte[0];
			
			
			
			
			// Ya se tiene el id, para luego llamar la funcion que recupera los datos
			// del registro a modificar.  
    		$listProvedores  = $model->getAllProveedores();
    		$listTarjetas    = $model->getAllTarjetas();
    		
    		//traer todos los documentos conciliados UNICAMENTE
    		$infoFactProveedor = $model->buscarFactProveedor($idProveedor, $numTarjeta,$fecCorteS,'S');
   			
   			
   			// Se define la etiqueta que se utilizar en el boton en la pantalla. Como es insercion
    		// se le asigna la palabra Actualizar
   			$btn_action = "Conciliar";
   			
    		break;
    	case 3:
    		// Como es un borrado, el parametro id, se utiliza para traer los datos
    		// del registro que se desplegaran en la pantalla.
    		//
			$id= $_GET["id"];
			// Ya se tiene el id, para luego llamar la funcion que recupera los datos
			// del registro a modificar.  
    		$listProvedores  = $model->getAllProveedores();
    		$listTarjetas    = $model->getAllTarjetas();
   			
   			// Se define la etiqueta que se utilizar en el boton en la pantalla. Como es insercion
    		// se le asigna la palabra Actualizar
   			$btn_action = "Borrar";
   			
    		break;

    	case 4:
    		// Como es una visualizacion, el parametro id, se utiliza para traer los datos
    		// del registro que se desplegaran en la pantalla.
    		//
			$id= $_GET["id"];
			// Ya se tiene el id, para luego llamar la funcion que recupera los datos
			// del registro a modificar.  
    		$listProvedores  = $model->getAllProveedores();
    		$listTarjetas    = $model->getAllTarjetas();
   			
   			// Se define la etiqueta que se utilizar en el boton en la pantalla. Como es insercion
    		// se le asigna la palabra Actualizar
   			$btn_action = "Aceptar";
   			
    		break;
    	case 6:
    			// Como imprimir el parametro id, se utiliza para traer los datos
    			// del registro que se desplegaran en la pantalla.
    			//
    			$id			   = $_GET["id"];
    			$detId         = explode("|", $_GET["id"]) ;
    			$numTarjeta    = $detId[0];
    			$fecCorte      = $detId[1];
    			$idProveedor   = $detId[2];
    			$idProveedor   = 0;
    				
    			$fechaCorte    = explode("/",$fecCorte) ;
    			$fecCorteS      = $fechaCorte[2]."-".$fechaCorte[1]."-".$fechaCorte[0];
    				
    				
    				
    				
    			// Ya se tiene el id, para luego llamar la funcion que recupera los datos
    			// del registro a modificar.
    			$listProvedores  = $model->getAllProveedores();
    			$listTarjetas    = $model->getAllTarjetas();
    		
    			//traer todos los documentos conciliados UNICAMENTE
    			$infoFactProveedor = $model->buscarFactProveedor($idProveedor, $numTarjeta,$fecCorteS,'S');
    		
    		
    			// Se define la etiqueta que se utilizar en el boton en la pantalla. Como es insercion
    			// se le asigna la palabra Actualizar
    			$btn_action = "Conciliar";
    		
    			break;    		
    		
    }
    
    // Se crean las variables que se le pasaran al view, para que sean desplegados.    
    $mvc->assign("ACTION"	 , $action);
    $mvc->assign("ID" 		 , $id);
    $mvc->assign("PROVEEDORES"  , $listProvedores);
    $mvc->assign("ALL_TIP_CARDS", $listTarjetas);
    $mvc->assign("NUM_TARJETA"  , $numTarjeta);
    $mvc->assign("FEC_CORTE"    , $fecCorte);
    $mvc->assign("ID_PROVEEDOR" , $idProveedor);
    $mvc->assign("LISTA_FACTPROVEEDOR", $infoFactProveedor);
    $mvc->assign("BTN_ACTION", $btn_action);

    $page = $mvc->fetch("frmConciliaTC.tpl");
    
    // Pie del control
	require '../../_includes/ctrl_footer.php';

?>