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
     exit; */
    
    $idTienda  = $_GET["codtienda"];
    $criterio   = $_GET["criterio"];
    $tempFC        = explode("/", $_GET["fechaI"]);
    $fechaI = "$tempFC[2]-$tempFC[1]-$tempFC[0]";
    $tempFC     = explode("/", $_GET["fechaF"]);
    $fechaF = "$tempFC[2]-$tempFC[1]-$tempFC[0]";
    $incluir = $_GET["incluir"];
    
    $infoMovi = $model->buscarReparaciones($idTienda,$criterio,$fechaI,$fechaF);
    $datosTienda = $model->getDatosTienda($idTienda);
    
    if ($criterio== 'A')
       {
        $mvc->assign("ESTADO" ,'ACTIVO');
       }else if ($criterio== 'F')
       {
        $mvc->assign("ESTADO" ,'CERRADA');
       }else
       {
        $mvc->assign("ESTADO" ,'REPARADA');
       }



    $mvc->assign("LISTA_REPARACIONES", $infoMovi);
    $currentDate = date("d/m/Y");
    $mvc->assign("CURRENT_DATE" , $currentDate);
    $mvc->assign("FECHA_INICIO" ,$_GET["fechaI"]);
    $mvc->assign("FECHA_FINAL" ,$_GET["fechaF"]);
    $mvc->assign("TIT_REPORTE" ,"Reporte de Reparaciones del ".$_GET["fechaI"]." al ".$_GET["fechaF"]);
    $mvc->assign("TIT_EXPORT" ,"Reporte_Reparaciones");
    $mvc->assign("NOMBRE_TIENDA" ,$datosTienda[0][NombreTienda]);
    $mvc->assign("INCLUIR",$incluir);              
      
    $page = $mvc->fetch("listreparaciones.tpl");
    
    // Pie del control
    require '../../_includes/ctrl_footer.php';
    

?>