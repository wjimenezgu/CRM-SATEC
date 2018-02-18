<?php

	// Encabezado del control
	require '../../_includes/ctrl_header.php';

	// Se abra la conexion a la BD.
	require '../../_includes/ctrl_openDB.php';
		
   // A partir de aca codigo particular al modulo.

    require 'model/modelBill.php';
    $model = new modelBill($con->db);       
  
    $mvc->setModule("billing");
    
    $infoItems = $model->getAllItems();
    
   $infoClientes = $model->getAllClientes();
   
   $infoVendedores = $model->getAllVendedores();
   
   $infoTienda = $model->getAllTiendas();

    
    $mvc->assign("LISTA_ITEMS", $infoItems);
    $mvc->assign("LISTA_CLIENTES", $infoClientes);
    $mvc->assign("LISTA_VENDS", $infoVendedores);
    $mvc->assign("LISTA_TIENDAS", $infoTienda);
    
    $page = $mvc->fetch("Bill_2.tpl");
    
    // Pie del control
	require '../../_includes/ctrl_footer.php';

?>