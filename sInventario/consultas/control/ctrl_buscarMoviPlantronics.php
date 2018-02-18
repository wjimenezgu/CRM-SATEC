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
    
    $tempFC    	= explode("/", $_GET["fechaI"]);
    $fechaI	= "$tempFC[2]-$tempFC[1]-$tempFC[0]";
    $tempFC    	= explode("/", $_GET["fechaF"]);
    $fechaF	= "$tempFC[2]-$tempFC[1]-$tempFC[0]";
    
    $infoMovi = $model->buscarMoviPlantronics($fechaI,$fechaF);
           
    $mvc->assign("LISTA_MOVI", $infoMovi);
    $currentDate = date("d/m/Y");
    $mvc->assign("CURRENT_DATE" , $currentDate);
    $mvc->assign("FECHA_INICIO" ,$_GET["fechaI"]);
    $mvc->assign("FECHA_FINAL" ,$_GET["fechaF"]);
    $mvc->assign("TIT_REPORTE" ,"Movimientos Plantronics del ".$_GET["fechaI"]." al ".$_GET["fechaF"]);
    $mvc->assign("TIT_EXPORT" ,"Movimientos_Plantronics");
              
    $page = $mvc->fetch("listmoviplantronics.tpl");
    
    // Pie del control
    require '../../_includes/ctrl_footer.php';
    

?>