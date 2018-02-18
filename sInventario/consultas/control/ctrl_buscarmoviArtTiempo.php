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

    
     /*echo "<pre>";
     print_r($_GET);
     echo "<pre>";
     exit;*/
    
   // $criterio = $_GET["criterio"];
    $codtienda = $_GET["codtienda"];
    $codtipomov = $_GET["codtipomov"];
    $tempFC    	= explode("/", $_GET["fechaI"]);
    $fechaI	= "$tempFC[2]-$tempFC[1]-$tempFC[0]";
    $tempFC    	= explode("/", $_GET["fechaF"]);
    $fechaF	= "$tempFC[2]-$tempFC[1]-$tempFC[0]";
    $texto = $_GET["txtBusqueda"];
    
    $datosArticulos = $model->buscarDetalleItem($texto);
    $datosTienda = $model->getDatosTienda($codtienda);
    $infoMovi = $model->buscarItemMoviTPeriodo($codtienda,$texto,$codtipomov,$fechaI,$fechaF);
    
   /* echo "<pre>";
    print_r($datosArticulos[0]);
    echo "<pre>";
    exit;*/
           
    $mvc->assign("LISTA_MOVI", $infoMovi);
    $currentDate = date("d/m/Y");
    $mvc->assign("CURRENT_DATE" , $currentDate);
    $mvc->assign("FECHA_INICIO" ,$_GET["fechaI"]);
    $mvc->assign("FECHA_FINAL" ,$_GET["fechaF"]);
    $mvc->assign("TIT_REPORTE" ,"Movimientos por Artículo del ".$_GET["fechaI"]." al ".$_GET["fechaF"]);
    $mvc->assign("TIT_EXPORT" ,"Movimientos por Artículo para un Período de Tiempo ");
    $mvc->assign("CURRENT_STORE" ,$datosTienda[0][NombreTienda]);
    $mvc->assign("COD_ITEM" ,$datosArticulos[0][codArti]);
    $mvc->assign("DESCRIPCION" ,$datosArticulos[0][desArticulo]);
    $mvc->assign("COD_PROVEEDOR" ,$datosArticulos[0][idProveedor]);
    
    /*echo "<pre>";
     print_r($datosArticulos);
     echo "<pre>";
     exit;*/
    $page = $mvc->fetch("listmoviArtTiempo.tpl");
    
    // Pie del control
    require '../../_includes/ctrl_footer.php';
    

?>