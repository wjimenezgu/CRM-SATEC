<?php
	// Encabezado del control
	require '../../_includes/ctrl_header.php';

	// Se abra la conexion a la BD.
	require '../../_includes/ctrl_openDB.php';

	// A partir de aca codigo particular al modulo.   

    require 'model/modelShippingAddress.php';
    $model = new modelShippingAddress($con->db);    
        
    $mvc->setModule("shippingaddress");
    
    $ShippingAddressList = $model->getAllShippingAddress();
    
    $mvc->assign("SHIPPINGADDRESS_LIST", $ShippingAddressList);
  
    $page = $mvc->fetch("allShippingAddress.tpl");
    
    // Pie del control
    require '../../_includes/ctrl_footer.php';   

?>