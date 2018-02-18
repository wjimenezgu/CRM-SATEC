<?php

	// Encabezado del control para impresion
	require '../../_includes/ctrl_headerprn.php';

	// Se abra la conexion a la BD.
	require '../../_includes/ctrl_openDB.php';

   // A partir de aca codigo particular al modulo.

    require 'model/modelMCompras.php';
    $model = new modelMCompras($con->db);       
 
    $mvc->setModule("mcompras");

    $nameTienda = "Satec Guadalupe";
    $currentDate = date('d/m/Y h:i:s A');     
           
    $criterio = 1; // por numero de pedido
    $busqueda = $_GET["idPedido"]; //numero del pedido
    $infoItemsOrders 	= $model->queryItemsOrdersBodega($criterio, $busqueda);
  	//echo print_r($nomTarjeta);exit;
    
    // Se crean las variables que se le pasaran al view, para que sean desplegados.   
    $mvc->assign("NOMBRE_TIENDA",$nameTienda);
    $mvc->assign("CURRENT_DATE" , $currentDate);
    $mvc->assign("LIST_ITEMS_ORDERS" , $infoItemsOrders);
    $mvc->assign("TIT_REPORTE" , 'Entrada por Importación a Bodega');
        
	$page = $mvc->fetch("prnBoletaBodega.tpl");
	
    // Pie del control
	require '../../_includes/ctrl_footer.php';

?>