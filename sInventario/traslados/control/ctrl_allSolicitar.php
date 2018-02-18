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

    $mvc->setModule("traslados");
    
    if(isset($_SESSION["TIENDA_ID"])){        
        	$idTienda   = $_SESSION["TIENDA_ID"];
        	$nameTienda = $_SESSION["TIENDA_NOMBRE"];
    }else { 
    		$nickname = $_SESSION["USER_SESSION"];       
        	$infoTienda = $model->getTiendaLocal($nickname);    
        	$_SESSION["TIENDA_ID"]     = $infoTienda[0]["codTienda"];
        	$_SESSION["TIENDA_NOMBRE"] = $infoTienda[0]["nameTienda"];
        	$nameTienda = $infoTienda[0]["nameTienda"];
        	$idTienda   = $infoTienda[0]["codTienda"];
    } 
   /*   
       echo "<pre>";
        print_r($_GET);
        echo "<pre>"; 
        exit;
   */
    
    $EoS   = $_GET["EoS"];

    $ApagaEditar 	= array("2E" => "2E",
    						"2O" => "2O",
    						"3E" => "3E",
    						"4E" => "4E",
    						"4O" => "4O",
    						"5E" => "5E",
    					    "5O" => "5O");
    
    
	$ApagaBorrar 	= array("1E" => "1E",
							"2E" => "2E",
							"2O" => "2O",
							"3E" => "3E",
							"3O" => "3O",
							"4E" => "4E",
							"4O" => "4O",
							"5E" => "5E",
							"5O" => "5O");
	
	
    $ApagaAproRecha = array( "1O" => "1O",
							"2E" => "2E",
							"2O" => "2O",
							"3E" => "3E",
							"4E" => "4E",
							"4O" => "4O",
							"5E" => "5E",
							"5O" => "5O");
    
  

 
    $mvc->assign("APAGA_EDITAR"		, $ApagaEditar);
    $mvc->assign("APAGA_BORRAR"		, $ApagaBorrar);
	$mvc->assign("APAGA_APRORECHA"	, $ApagaAproRecha);    
    
    
    $infoData 		= $model->getAllData($idTienda,$EoS);

    
    if ($EoS == 'O'){
    	$mvc->assign("DESC_MOV","SOLICITAR o ENVIAR");
    }else{
    	$mvc->assign("DESC_MOV","CONFIRMAR SOLICITUD o ENVIO");
    	
    }
    $mvc->assign("TIPO_MOV",$EoS);
    $mvc->assign("LISTA_DATA"	, $infoData);
    $mvc->assign("ID_TIENDA"	,$idTienda);
    $mvc->assign("NOMBRE_TIENDA",$nameTienda);

    $page = $mvc->fetch("allData.tpl");
  
    // Pie del control
	require '../../_includes/ctrl_footer.php';
    
?>