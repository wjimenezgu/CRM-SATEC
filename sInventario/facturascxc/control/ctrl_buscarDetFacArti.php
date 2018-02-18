<?php

	// Encabezado del control que verificar si la session expiro.
	require '../../_includes/ctrl_checksession.php';
	
	// Encabezado del control
	require '../../_includes/ctrl_header.php';

	// Se abra la conexion a la BD.
	require '../../_includes/ctrl_openDB.php';

    require 'model/modelfacturas.php';
    $model = new modelfacturas($con->db);    
        
    $mvc->setModule("facturascxc");
    
    $idFactura = $_POST["idFacturaB"];
    
  
    $infoDetFacArti = $model->buscarDetFactArti($idFactura);
    $anulacxcOFF = $model->GetFieldHide($_SESSION["USER_SESSION"],'ANULACXC_OFF');
    $mvc->assign("ANULACXC_OFF", $anulacxcOFF);
           
    $mvc->assign("LISTA_DETFACARTI", $infoDetFacArti); 
              
    $mvc->display("listdetfacarti.tpl");          

?>