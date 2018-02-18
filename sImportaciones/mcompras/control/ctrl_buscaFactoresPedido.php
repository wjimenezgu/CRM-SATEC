<?php

	// Encabezado del control
	require '../../_includes/ctrl_header.php';

	// Se abra la conexion a la BD.
	require '../../_includes/ctrl_openDB.php';
		
   // A partir de aca codigo particular al modulo.

    require 'model/modelMCompras.php';
    $model = new modelMCompras($con->db);    

    $mvc->setModule("mcompras");

    /*
    echo "<pre>";
    print_r($_POST);
    echo "<pre>";
    exit;
    */
    $idPedido 	=$_POST["idPedido"];

    $infoFactoresPedido = $model->getFactoresPedido($idPedido);
           
    //  CodArti
    //  CodArtiPro
    //  DesArticulo        
    echo json_encode($infoFactoresPedido);
        

?>