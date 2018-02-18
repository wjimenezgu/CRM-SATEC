<?php
	// Encabezado del control para impresion
	require '../../_includes/ctrl_headerprn.php';

	// Se abra la conexion a la BD
	require '../../_includes/ctrl_openDB.php';
		
   // A partir de aca codigo particular al modulo.

    require 'model/modelconsultas.php';
    $model = new modelconsultas($con->db);       
   
    $mvc->setModule("consultas");
    
  /*
     echo "<pre>";
     print_r($_GET);
     echo "<pre>";
     exit;
  */

   $idTienda    = $_GET["store"];
   $tempFE      = explode("/", $_GET["fechaI"]);
   $fechaI 	    = $tempFE[2].'-'.$tempFE[1].'-'.$tempFE[0].' 00:00:00';
   $tempFE      = explode("/", $_GET["fechaF"]);
   $fechaF 	    = $tempFE[2].'-'.$tempFE[1].'-'.$tempFE[0].' 23:59:59';
   $currentDate = date('d/m/Y h:i:s A');
   
   $datosTienda     = $model->getDatosTienda($idTienda);
   $listaFacturas   = $model->getFactuPeriodo($idTienda,$fechaI,$fechaF);     
   $totalesFacturas = $model->getTotalesFactuPeriodo($idTienda,$fechaI,$fechaF);
   $solototalesFacturas = $model->getSoloTotalesFactuPeriodo($idTienda,$fechaI,$fechaF);
   $totalesNotas	= $model->getTotalesNotaPeriodo($idTienda,$fechaI,$fechaF);
   
   $listaNotas	    = $model->getNotaPeriodo($idTienda,$fechaI,$fechaF);

   $totalFacturas 	= str_replace(",", "",$solototalesFacturas[0][MONTO_TOTAL]);
   $totalNotas		= str_replace(",", "",$totalesNotas[0][MONTO_TOTAL]);
   $granTotal 		= number_format($totalFacturas - $totalNotas,2,".",",");
   
   $mvc->assign("DATOS_TIENDA"    , $datosTienda[0]);
   $mvc->assign("LISTA_FACTURAS"  , $listaFacturas);
   $mvc->assign("LISTA_NOTAS"  	  , $listaNotas);
   $mvc->assign("TOTALES_FACTURAS", $totalesFacturas);
   $mvc->assign("SOLO_TOTALES_FACTURAS", $solototalesFacturas);
   $mvc->assign("TOTALES_NOTAS"	  , $totalesNotas);
   $mvc->assign("CURRENT_DATE"    , $currentDate);
   $mvc->assign("FECHA_INICIAL"   ,$_GET["fechaI"]);
   $mvc->assign("FECHA_FINAL"     ,$_GET["fechaF"]);
   $mvc->assign("GRAN_TOTAL"     ,$granTotal);
   $page = $mvc->fetch("prnFacturacion.tpl");

   // Pie del control
   require '../../_includes/ctrl_footer.php';

?>