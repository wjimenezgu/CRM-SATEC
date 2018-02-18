<?php

	// Encabezado del control
	require '../../_includes/ctrl_headerSinMenu.php';

	// Se abra la conexion a la BD.
	require '../../_includes/ctrl_openDB.php';
		
   // A partir de aca codigo particular al modulo.

    require 'model/modelData.php';
    $model = new modelData($con->db);        
  
    $mvc->setModule("traslados");
    /*  
       echo "<pre>";
        print_r($_POST);
        echo "<pre>"; 
        exit;
    */  
    $codTienda 		= $_POST["codTienda"];
    $tempFC     	= explode("/", $_POST["fechaCorte"]);
    $fecCorte 		= "$tempFC[2]-$tempFC[1]-$tempFC[0]";    
    $existencia 	= $_POST["existencia"];
           
    $infoItemsPedido 	= $model->queryInputItemsPedido($codTienda, $fecCorte,$existencia);
    
           
    $mvc->assign("LIST_ITEMS_PEDIDO", $infoItemsPedido); 
              
    $mvc->display("inputItemsPedido.tpl");          
        
    // Pie del control
	//require '../../_includes/ctrl_footer.php';
    
?>