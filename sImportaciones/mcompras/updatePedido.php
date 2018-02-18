<?php

    session_start();
    error_reporting(E_PARSE);    
    require '../../_config/db/UserConnection.php';          
    $userConnect = new UserConnection($_SESSION["USER_SESSION"], $_SESSION["PWD_USER"] );

    require '../../_config/db/DBConexion.php';
    $con = new DBConexion(1, $userConnect);    
  
    // A partir de aca codigo particular del modulo  
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

    $pidPedido        = $_POST["idPedido"];
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
    // William Jimenez
    // 215-09-06
    // Tuve que agregar un campo hidden formaPago por que no puede arreglar el problema. 
    // el campo payMethod que es un radio no esta cambiando de valor cuando se le hace click
    // habra que hacer mas revisiones pero ya dedique un dia y no lo pude arreglar. 
    //$pidOpcionPago    = $_POST["payMethod"];
    $pidOpcionPago    = $_POST["formaPago"];
    $pcomentarios     = $_POST["instructions"];

    //INCLUSION DE NUEVOS CAMPOS    
    $pDirEnvio   = $_POST["selectDirEnvio"];
    $pDirDocs    = $_POST["selectDirDocs"];
    $pTipTarjeta = $_POST["selectTipTarjeta"];
    if($pTipTarjeta == 0 && $pidOpcionPago != 3){
        $pTipTarjeta = "null";
    }
    
    $pmarks   = $_POST["marks"];
    $ppacking = $_POST["packing"];
    $pshipvia = $_POST["shipvia"];    

    /*
            echo "<pre>";
            print_r($_POST);
            echo "<pre>";
            exit;    
    */  
    $out_idPedido = $model->updateEncabezadoPedido($pidPedido, $pidProveedor, $pnumOrdenCompra, $pidMoneda, $pfecCreacion, $pfecEmbarque, $psubTotal, 
                                                   $pcostoEnvio, $petiquetaOC, $potrosCostos, $paceptaParciales, $pidOpcionPago, $pcomentarios,
                                                   $pmarks, $ppacking, $pshipvia, $pDirEnvio, $pDirDocs, $pTipTarjeta);
    

    $out_idPedido = 1;
    if($out_idPedido > 0){

        // SE PREPARA EL DETALLE DE PEDIDO
        $numRegister  = 1;
        
        $listRegistos = array();
        foreach ($_POST as $key => $value) {

            $rowData = substr($key, 0, 3);    
            if($rowData == "row"){

                $newKey = explode("-", $key);        
                $registro[$newKey[1]] = $value;

                $final_register = "row$numRegister-comentRecepcion";        
                if($key == $final_register){            
                    array_push($listRegistos, $registro);
                    $numRegister++;
                }

            }

        }
        

        //SE ELIMINA EL DETALLE ANTERIOR DEL PEDIDO 
        $status = $model->delDetallePedido($pidPedido);
        //$status="OK";        
        
        if($status == "OK"){
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
                $typeRef         = $register["typeRef"];
                $numRef          = $register["numRef"];
                $detRef          = $register["detRef"];    
                $pfecRecibido    = "NULL";
                $whr             = $register["whr"];
                $trackNo         = $register["trackNo"];
                $fechaEstArribo  = $register["fechaEstArribo"];
                $cantRecibida    = $register["cantRecibida"];
                $comentRecepcion = $register["comentRecepcion"];
                                
                $model->saveDetallePedido($pidPedido, $numLine, $codInterno, $nameArticle, $codProveedor, $cant, $costUnit, $pfecRecibido, $typeRef, $numRef, $detRef,$whr,$trackNo, $fechaEstArribo, $cantRecibida, $comentRecepcion);

                $numLine++;
            }
            
/*            
            echo "<pre>";
            print_r($numLine);
            print_r($numRegister);
            print_r($cantRegistros);
            print_r($final_register);
            print_r($listRegistos);
            echo "<pre>";
            exit;
*/                          
            
            
            header("Location: ../mcompras/listOrders.php");
            
        }  else {
            echo "ERROR: NO SE HA PODIDO INGRESAR EL DETALLE DEL PEDIDO";
        }        

    }else{
        echo "ERROR: NO INSERTA EL ENCABEZADO";
    }


?>
