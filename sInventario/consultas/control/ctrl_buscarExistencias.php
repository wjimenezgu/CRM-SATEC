<?php

	// Encabezado del control que verificar si la session expiro.
	require '../../_includes/ctrl_checksession.php';
	
	// Encabezado del control
	require '../../_includes/ctrl_headerprn.php';

	// Se abra la conexion a la BD.
	require '../../_includes/ctrl_openDB.php';

    require 'model/modelconsultas.php';
    $model = new modelconsultas($con->db);  
    // Se valida las opciones que el usuario puede ver
    require '../../_includes/ctrl_opthide.php';    
        
    $mvc->setModule("consultas");

  /*  
     echo "<pre>";
     print_r($_GET);
     echo "<pre>";
     exit;
    
    */
    
    $criterio 	= $_GET["criterio"];
    $busqueda 	= $_GET["txtBusqueda"];
    $tienda 	= $_GET["tienda"];
    $tempFC    	= explode("/", $_GET["fecha"]);
    $fechaCorte	= "$tempFC[2]-$tempFC[1]-$tempFC[0]";
    
    $datosTienda = $model->getDatosTienda($tienda);
    $infoExistencias = $model->buscarExistencias($tienda,$fechaCorte,$criterio, $busqueda);
           
    $mvc->assign("LISTA_EXISTENCIAS", $infoExistencias);
    $currentDate = date("d/m/Y");
    $mvc->assign("CURRENT_DATE" , $currentDate);
    $mvc->assign("FECHA_CORTE" ,$_GET["fecha"]);
    $mvc->assign("TIT_REPORTE" ,"Existencias x Articulos al ".$_GET["fecha"]);
    $mvc->assign("TIT_EXPORT" ,"Existencias_Articulos");
    $mvc->assign("NOMBRE_TIENDA" ,$datosTienda[0][NombreTienda]);
              
  //  $mvc->display("listExistencias.tpl");          
    // $mvc->display("listitemsexistencias.tpl");
    $page = $mvc->fetch("listitemsexistencias.tpl");
    
    // Pie del control
    require '../../_includes/ctrl_footer.php';
    

?>