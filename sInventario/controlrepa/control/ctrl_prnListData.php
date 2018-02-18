<?php

	// Encabezado del control para impresion
	require '../../_includes/ctrl_headerprn.php';

	// Se abra la conexion a la BD.
	require '../../_includes/ctrl_openDB.php';
		
   // A partir de aca codigo particular al modulo.

	require 'model/modelreparaciones.php';
	$model = new modelreparaciones($con->db);
	
	$mvc->setModule("controlrepa");
    
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
   
    $mvc->assign("ID_TIENDA"	,$idTienda);
    $mvc->assign("NOMBRE_TIENDA",$nameTienda);
    $currentDate = date('d/m/Y h:i:s A');     
    $mvc->assign("CURRENT_DATE" , $currentDate);

    // El parametro id, se utiliza para traer los datos
    // del registro que se imprimira en el reporte
    //
	$id= $_GET["id"];
	// Ya se tiene el id, para luego llamar la funcion que recupera los datos
	// del registro a modificar.  
	$infoReparacion = $model->buscarDetalleReparacion($idTienda,$id);
	$allEventosRepa = $model->getEventosReparacion($id);
	$datosTienda    = $model->getDatosTienda($idTienda);
	$result         = $model->saveEvento($id, '101', '');
    
    // Se crean las variables que se le pasaran para que sean impresos.    
    $mvc->assign("ID_REPA"       , $id);
    $mvc->assign("REPARACION"    , $infoReparacion);
    $mvc->assign("DATOS_TIENDA"  , $datosTienda);
     
	$page = $mvc->fetch("prnData.tpl");

    // Pie del control
	require '../../_includes/ctrl_footer.php';

?>