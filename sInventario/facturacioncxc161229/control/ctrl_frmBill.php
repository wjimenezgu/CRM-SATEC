<?php

	// Encabezado del control
	//require '../../_includes/ctrl_header.php';
	require '../../_includes/ctrl_headerSinMenu.php';

	// Se abra la conexion a la BD.
	require '../../_includes/ctrl_openDB.php';
		
   // A partir de aca codigo particular al modulo.

    require 'model/modelBill.php';
    $model = new modelBill($con->db);       

    // Se valida las opciones que el usuario puede ver
    require '../../_includes/ctrl_opthide.php';
      
    $mvc->setModule("facturacioncxc");    
    
    if(isset($_SESSION["PORCE_IV"])){        
        	$infoPorceIV   = $_SESSION["PORCE_IV"];
    }else{
    	$infoPorceIV = $model->getPorceIV();
    	$_SESSION["PORCE_IV"] = $infoPorceIV;
    }

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
        
    $infoClientes = $model->getAllClientes();
      
    $infoTiendas = $model->getAllTiendas();
    
    $infoPorceMaxDesc = $model->getPorceMaxDescCxC();    
    
    $infoPorceUtiCosto = $model->getPorceUtiCosto();
    

    if(isset($_SESSION["PORCE_IV"])){        
    	$infoPorceIV   = $_SESSION["PORCE_IV"];
    }else{
    	$infoPorceIV = $model->getPorceIV();
    	$_SESSION["PORCE_IV"] = $infoPorceIV;
    }
    
    $currentDate = date("d/m/Y");
    $mvc->assign("CURRENT_DATE" , $currentDate);         
    $mvc->assign("LISTA_CLIENTES", $infoClientes);
    $mvc->assign("LISTA_TIENDAS", $infoTiendas);
    $mvc->assign("ID_TIENDA",$idTienda);
    $mvc->assign("PORCE_MAX_DESC",$infoPorceMaxDesc);
    $mvc->assign("PORCE_UTI_COSTO",$infoPorceUtiCosto);
	$mvc->assign("PORCE_IV",$infoPorceIV);

	$page = $mvc->fetch("bill.tpl");

    // Pie del control
	require '../../_includes/ctrl_footer.php';

?>
