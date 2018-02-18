<?php

	// Encabezado del control
	require '../../_includes/ctrl_header.php';
	echo '[{"idTienda":"0","NombreTienda":"SATEC GUADALUPE"}]';exit;
	// Se abra la conexion a la BD.
	require '../../_includes/ctrl_openDB.php';
	echo '[{"idTienda":"0","NombreTienda":"SATEC GUADALUPE"}]';exit;		
   // A partir de aca codigo particular al modulo.

    require 'model/modelData.php';

    $model = new modelData($con->db);

//    $mvc->setModule("login");

  /*  
    echo "<pre>";
    print_r($_POST);
    echo "<pre>";
    exit;
  */  
    $usuario = $_POST["usuario"];
    $usuario = "wjimenez";

    $infoCliPromotor = $model->getAllTiendasUsuario($usuario);
   
    //  CodArti
    //  CodArtiPro
    //  DesArticulo        
//    echo json_encode($infoCliPromotor);
    echo '[{"idTienda":"0","NombreTienda":"SATEC GUADALUPE"}]';
    
        

?>