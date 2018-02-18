<?php

	// Encabezado del control para impresion
	require '../../_includes/ctrl_headerprn.php';

	// Se abra la conexion a la BD.
	require '../../_includes/ctrl_openDB.php';

   // A partir de aca codigo particular al modulo.

    require 'model/modelMCompras.php';
    $model = new modelMCompras($con->db);       
 
    $mvc->setModule("mcompras");

    $mvc->assign("NOMBRE_TIENDA",$nameTienda);
    $currentDate = date('d/m/Y h:i:s A');     
    $mvc->assign("CURRENT_DATE" , $currentDate);
    
    $nomTarjeta = $_GET["nombre"];
    $idTarjeta= $_GET["tarjeta"];
    $idProveedor = $_GET["proveedor"];
    $fec = $_GET["fecha"];
    $date         = explode("/", $fec) ;
    $fecCorte       = $date[2]."-".$date[1]."-".$date[0];
   
	
    $infoTarCon = $model->buscarFactProveedorConciliadas($idProveedor, $idTarjeta, $fecCorte);
    
  	$nomTarjeta = $model->getTarjeta($idTarjeta);
  	$nomProveedor = $model->getInfoProveedor($idProveedor);
  	//echo print_r($nomTarjeta);exit;
    
    // Se crean las variables que se le pasaran al view, para que sean desplegados.    
    $mvc->assign("CONCILIO"	 , $infoTarCon);
    $mvc->assign("ID_TARJETA"	 , $idTarjeta);
    $mvc->assign("TARJETA"	 , 	$nomTarjeta);
    $mvc->assign("FECHA_CORTE",	$fec);
    $mvc->assign("PROVEEDOR",	$nomProveedor);
    $mvc->assign("TIT_REPORTE" , 'Conciliacion de Tarjetas');
    
    //echo var_dump($infoTarCon);exit;

    
	$page = $mvc->fetch("prnData.tpl");
	
    // Pie del control
	require '../../_includes/ctrl_footer.php';

?>