<?php
	// Encabezado del control que verificar si la session expiro.
	// si la session expiro se redirecciona a la pantalla de login
	require '../../_includes/ctrl_checksession.php';

	$_SESSION['FAC_ESP'] = 'N'; // es una factura NORMAL
	
	include("control/ctrl_frmBill2.php");
?>