<?php
 
	// Encabezado del control
	require '../../_includes/ctrl_header.php';

	// Se abra la conexion a la BD.
	require '../../_includes/ctrl_openDB.php';
	
  	// A partir de aca codigo particular del modulo    
    require 'model/modelnotascr.php';
    $model = new modelnotascr($con->db); 
    
    // Se valida las opciones que el usuario puede ver
    require '../../_includes/ctrl_opthide.php';
       
    $mvc->setModule("notascr");

 
    // echo "<pre>";print_r($_GET);echo "<pre>";exit;
  
    
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
   			$infoData = $model->buscarDetalleNotaCr($id);
   			
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
   			$infoData = $model->buscarDetalleNotaCr($id);
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
   			$infoData = $model->buscarDetalleNotaCr($id);
   			// Se define la etiqueta que se utilizar en el boton en la pantalla. Como es insercion
    		// se le asigna la palabra Actualizar
   			$btn_action = "Aceptar";
   			
    		break;
    		
    	case 5:
    		
    		$id= $_GET["id"];
    		$infoData = $model->buscarDetalleNotaCr($id);
    		//$infoDataDet = $model->getAllDataDet($id);
    		$btn_action = "Aceptar";
    		
    	case 6:  // imprimir
    		
    			$id= $_GET["id"];
    			$infoData = $model->buscarDetalleNotaCr($id);
    			//$infoDataDet = $model->getAllDataDet($id);
    			$btn_action = "Imprimir"; 
    	case 7:    				    				 
    			// Se define la etiqueta que se utilizar en el boton en la pantalla. Como es insercion
    			// se le asigna la palabra Insertar
    			$btn_action = "Insertar";
    			
    			break;
        case 9:
    				// Como es una actualizacion, el parametro id, se utiliza para traer los datos
    				// del registro que se desplegaran en la pantalla.
    				//
    				$id= $_GET["id"];
    					
    				// Ya se tiene el id, para luego llamar la funcion que recupera los datos
    				// del registro a modificar.
    				$infoData = $model->buscarDetalleNotaCr($id);
    			
    				// Se define la etiqueta que se utilizar en el boton en la pantalla. Como es insercion
    				// se le asigna la palabra Actualizar
    				$btn_action = "Devolver";
    			
    				break;    			
    		
    }
    
    // Se crean las variables que se le pasaran al view, para que sean desplegados.    
    $mvc->assign("ACTION"	 , $action);
    $mvc->assign("ID" , $id);
    $mvc->assign("DATA"    , $infoData);
    //$mvc->assign("LISTA_DATA",$infoDataDet);
    
   // $date = new DateTime();
   // $FECNOTA =  $date->format('d/m/Y');
    $FECNOTA = date("d/m/Y");  
    $mvc->assign("IDFACT"    	, $_GET["id"]);
    $mvc->assign("NUMDOCUFACT"  , $_GET["numDocuFact"]);
    $mvc->assign("TOTAL"    	, $_GET["total"]);
    $mvc->assign("SALDO"    	, $_GET["saldoNota"]);
    $mvc->assign("NOMBRE"    	, $_GET["nombre"]);
    $mvc->assign("IDTIENDA"   	, $_GET["idTienda"]);
    $mvc->assign("TIRAARTI"   	, $_GET["tiraArti"]);
    $mvc->assign("TOTALIVNOTA" 	, $_GET["totalivnota"]);
    $mvc->assign("FECNOTA"    	, $FECNOTA);
    
    
    $mvc->assign("BTN_ACTION", $btn_action);

    $page = $mvc->fetch("NotaCr.tpl");
    
    // Pie del control
	require '../../_includes/ctrl_footer.php';

?>
