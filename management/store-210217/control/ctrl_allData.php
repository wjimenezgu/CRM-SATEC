<?php

	// Encabezado del control
	require '../../_includes/ctrl_header.php';

	// Se abra la conexion a la BD.
	require '../../_includes/ctrl_openDB.php';
		
   // A partir de aca codigo particular al modulo.

    require 'model/modelData.php';
    $model = new modelData($con->db);

 	// Se valida las opciones que el usuario puede ver
	require '../../_includes/ctrl_opthide.php';   

    $mvc->setModule("store");
 
     
    
    $infoData = $model->getAllData();

    $anulaBtnMod    = $model->GetFieldHide($_SESSION["USER_SESSION"],'btnModInvTienda');
    $anulaBtnView   = $model->GetFieldHide($_SESSION["USER_SESSION"],'btnViewInvTienda');
    $anulaBtnConsec = $model->GetFieldHide($_SESSION["USER_SESSION"],'btnConsecInvTienda');
    $anulaBtnDelete = $model->GetFieldHide($_SESSION["USER_SESSION"],'btnDeletInvTienda');


    $mvc->assign("LISTA_DATA", $infoData);
    $mvc->assign("ANULAMOD_OFF",$anulaBtnMod);
    $mvc->assign("ANULAVIEW_OFF",$anulaBtnView);
    $mvc->assign("ANULACONSEC_OFF",$anulaBtnConsec);
    $mvc->assign("ANULADELETE_OFF",$anulaBtnDelete);
    
    $page = $mvc->fetch("allData.tpl");
   
    // Pie del control
	require '../../_includes/ctrl_footer.php';
    
?>