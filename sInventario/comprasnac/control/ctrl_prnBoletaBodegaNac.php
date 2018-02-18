<?php

    // Encabezado del control que verificar si la session expiro.
    require '../../_includes/ctrl_checksession.php';

	// Encabezado del control para impresion
	require '../../_includes/ctrl_headerprn.php';

	// Se abra la conexion a la BD.
	require '../../_includes/ctrl_openDB.php';

   // A partir de aca codigo particular al modulo.

    require 'model/modelcomprasnac.php';
    $model = new modelcomprasnac($con->db);          
 
    $mvc->setModule("comprasnac");

    $nameTienda = "Satec Guadalupe";
    $currentDate = date('d/m/Y h:i:s A');     
             
    $infoItemsOrders = $model->buscarDetPedidoNac($_GET["idPedido"]);
  	//echo print_r($nomTarjeta);exit;
    
    // Se crean las variables que se le pasaran al view, para que sean desplegados.   
    $mvc->assign("NOMBRE_TIENDA",$nameTienda);
    $mvc->assign("CURRENT_DATE" , $currentDate);
    $mvc->assign("LIST_ITEMS_ORDERS" , $infoItemsOrders);
    $mvc->assign("TIT_REPORTE" , 'Entrada por Compra Nacional a Bodega');
        
	$page = $mvc->fetch("prnBoletaBodegaNac.tpl");
	
    // Pie del control
	require '../../_includes/ctrl_footer.php';

?>