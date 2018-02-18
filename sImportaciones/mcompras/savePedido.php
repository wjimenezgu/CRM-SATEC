<?php
	// Encabezado del control que verificar si la session expiro.
	// si la session expiro se redirecciona a la pantalla de login
	require '../../_includes/ctrl_checksession.php';
	
    session_start();
    error_reporting(E_PARSE);    
    require '../../_config/db/UserConnection.php';          
    $userConnect = new UserConnection($_SESSION["USER_SESSION"], $_SESSION["PWD_USER"] );

    require '../../_config/db/DBConexion.php';
    $con = new DBConexion(1, $userConnect);    

    require 'model/modelMCompras.php';
    $model = new modelMCompras($con->db);
    //Fecha de Creacion del Pedido
    $tempFC     = explode("/", $_POST["datePedido"]);
    $fCreacion = "$tempFC[2]-$tempFC[1]-$tempFC[0]";

    //Fecha de Arribo del Pedido
    $tempFE     = explode("/", $_POST["dateArribo"]);
    $fEmbarque = "$tempFE[2]-$tempFE[1]-$tempFE[0]";

    //ENCABEZADO PEDIDO | PARAMETROS ENTRADA
    $pendiente_numOrdenCompra = 1;
    $etiquetaOC       = $_POST["lblOtherCost"]; 

    $pidProveedor     = $_POST["selectProveedor"];
    $pnumOrdenCompra  = $pendiente_numOrdenCompra;
    $pidMoneda        = $_POST["selectMoneda"];
    $pfecCreacion     = $fCreacion;
    $pfecEmbarque     = $fEmbarque;
    $psubTotal        = str_replace(',', '', $_POST["subTotal"]);
    $pcostoEnvio      = str_replace(',', '', $_POST["costEnvio"]);
    $petiquetaOC      = $etiquetaOC;
    $potrosCostos     = str_replace(',', '', $_POST["otherCost"]);
    $paceptaParciales = $_POST["embarquesP"];
    $pidOpcionPago    = $_POST["payMethod"];
    $pcomentarios     = $_POST["instructions"];

    //INCLUSION DE NUEVOS CAMPOS    
    $pDirEnvio   = $_POST["selectDirEnvio"];
    $pDirDocs    = $_POST["selectDirDocs"];
    $pTipTarjeta = $_POST["selectTipTarjeta"];
    
    $pmarks   = $_POST["marks"];
    $ppacking = $_POST["packing"];
    $pshipvia = $_POST["shipvia"];

/*
    echo "<pre>";
    print_r($_POST);
    echo "<pre>";
    exit;
*/    
    $out_idPedido = $model->saveEncabezadoPedido($pidProveedor, $pnumOrdenCompra, $pidMoneda, $pfecCreacion, $pfecEmbarque, $psubTotal, 
                                                 $pcostoEnvio, $petiquetaOC, $potrosCostos, $paceptaParciales, $pidOpcionPago, $pcomentarios, 
                                                 $pmarks, $ppacking, $pshipvia, $pDirEnvio, $pDirDocs, $pTipTarjeta);
  
    //$out_idPedido = 1;
    if($out_idPedido != 0){

        // SE PREPARA EL DETALLE DE PEDIDO
        $numRegister  = 1;
        $listRegistos = array();
        foreach ($_POST as $key => $value) {

            $rowData = substr($key, 0, 3);    
            if($rowData == "row"){

                $newKey = explode("-", $key);        
                $registro[$newKey[1]] = $value;

                $final_register = "row$numRegister-detRef";        
                if($key == $final_register){            
                    array_push($listRegistos, $registro);
                    $numRegister++;
                }

            }

        }

        //SE INGRESA EL DETALLE DE PEDIDO | PARAMETROS DE ENTRADA
        $numLine = 1;
        foreach ($listRegistos as $register) {

            $cant         = $register["cant"];
            $codInterno   = $register["codInterno"];
            $codProveedor = $register["codProveedor"];
            $nameArticle  = $register["nameArticle"];
            $costUnit     = str_replace(',', '', $register["costUnit"]);
            if ($costUnit==''){
            	$costUnit=0.00;
            }    
            $typeRef      = $register["typeRef"];
            $numRef       = $register["numRef"];
            $detRef       = $register["detRef"];    
            $pfecRecibido = "NULL";
            $whr             = "";
            $trackNo         = "";
            $fechaEstArribo  = "NULL";
            $cantRecibida    = "";
            $comentRecepcion = "";
            $result = $model->saveDetallePedido($out_idPedido, $numLine, $codInterno, $nameArticle, $codProveedor, $cant, $costUnit, $pfecRecibido, $typeRef, $numRef, $detRef,$whr,$trackNo, $fechaEstArribo, $cantRecibida, $comentRecepcion);
			if ($result !== "OK"){
	    	// 		Hubo en error inesperado en la operacion en la base de datos.
	    	// La variable $result  tiene el mensaje que se le debe
	    	// desplegar al usuario  	           
	  	    header("Location: ../../resources/misc/errorMsg.php?errormsg=".$result);
		    }         
            $numLine++;
        }
        //exit();
        header("Location: ../mcompras/listOrders.php");    

    }else{
        header("Location: ../../resources/misc/errorMsg.php?errormsg="."Error insperado al guardar encabezado");
    }


?>