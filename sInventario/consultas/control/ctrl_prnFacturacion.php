<?php

session_start();
//error_reporting(E_PARSE);
require '../../_config/db/UserConnection.php';
$userConnect = new UserConnection($_SESSION["USER_SESSION"], $_SESSION["PWD_USER"] );

require '../../_config/db/DBConexion.php';
$con = new DBConexion(1, $userConnect);

require 'model/modelMCompras.php';
$model = new modelMCompras($con->db);

require_once 'routes.php';
require_once SMARTY_ENGINE;
$mvc = new EngineMVC();
 
$mvc->setModule("consultas");

// get the HTML
ob_start();

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
 


   $mvc->display("prnFacturacionPDF.tpl");   
   


   $content =  ob_get_clean();
  
   require '../../resources/libs/html2pdf/html2pdf.class.php';
   try
   {	//Octubre 27, 2014 William Jimenez
   // Agregue los ulstimos tres parametros
   // particularmente me interesaba incluir el ultimo array(mL, mT, mR, mB))
   // tiene que ver con los margenes de la hoja
   //Linea Original
   //	$html2pdf = new HTML2PDF('P', 'Letter', 'es');
   //Linea Modificada
   //	$html2pdf = new HTML2PDF('P', 'Letter', 'es',true, 'UTF-8', array(9, 5, 0, 8));
   $html2pdf = new HTML2PDF('P', 'Letter', 'es',true, 'UTF-8', array(12, 8, 5, 8));
   $html2pdf->pdf->SetDisplayMode('fullpage');
   $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
   // Agosto 10,2014  William Jimenez
   // Se comenta para que no genere el archivo, solo que le salga el pdf y el usuario
   // decide donde guardarlo o que hacer con el archivo.
   // Falta hacer testing para agregar una ruta donde dejar el archivo.
   $html2pdf->Output('REPFACTU.pdf','I');
   
   
   // el codigo siguiente genera el reporte pero a un archivo, no se ha probado.
   // $html2pdf->Output('REPFACTU'.$idTienda.$_GET["fechaI"].'.pdf', 'F');
   }
   catch(HTML2PDF_exception $e) {
   	echo $e;
   	exit;
   }

?>