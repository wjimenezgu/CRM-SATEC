<?php

class modelcomprasnac {
    
    public function __construct(&$db) {       
        $this->db = $db;
    }
   
    // ACTIVO
    function GetFieldHide($userName,$fieldName) {
    
    	$sql = "call spGetFieldHide('$userName', '$fieldName',@SiNo, @out_status);";
    	$rs = $this->db->Execute($sql);
    	$rs->Close();
    		
    	$sql = "SELECT @SiNo as SiNo, @out_status as message";
    	$rs = $this->db->Execute($sql);
    	$status = $rs->getArray();
    	$rs->Close();
    
    	$message = $status[0]["message"];
    
    	if($message == "OK"){
    		$data = $status[0]["SiNo"];
    	}else{
    		$data = 'N';
    	}
    
    	return $data;
    }


    
    // ACTIVO
    function getAllProveedores() {
        
        $sqlx            = "call spGetAllProveedoresNac(@out_status);"; 

        $result          = $this->db->Execute($sqlx);
        $listProveedores = $result->getArray();     
        $result->Close();
          
        $sql2 = "SELECT @out_status as message";
        $rs = $this->db->Execute($sql2);        
        
        $status = $rs->getArray();
        
        if($status[0]["message"] == "OK"){
            $data = $listProveedores;
        }else{
            $data = array();
        }
        
        return $data;    
    }
    


    
   
   
    
  

    
    // ACTIVO
    function saveNewArticulo($codInterno, $nameArticulo, $codProveedor,$idProveedor) {
    
    	$sql           = "call spInsArticulo('$codInterno', '$nameArticulo', '$codProveedor',$idProveedor, @out_status);";
// echo $sql;exit;
    	$result        = $this->db->Execute($sql);
    	$result->Close();
    
    	$sql2 = "SELECT @out_status as message";
        $rs = $this->db->Execute($sql2);
        $status = $rs->getArray();
    	$result->Close();
    
    	return $status;
    
    }
    
 

    // ACTIVO
    function getAllComprasNac($criterio) {
        
        $sqlx       = "call spGetAllPedidosNac('$criterio',@out_status);"; 
        $result     = $this->db->Execute($sqlx);
        $allPedidos = $result->getArray(); 
        
        $result->Close();
          
        $sql2 = "SELECT @out_status as message";
        $rs = $this->db->Execute($sql2);        
        $status = $rs->getArray();
        
        if($status[0]["message"] == "OK"){
            $data = $allPedidos;
        }else{
            $data = array();
        }
        
        return $data;          
        
    }
    
    // ACTIVO
    function getArticulo($criterio,$valor) {
    
    	$sql = "call spGetArtiTomaFisica('$criterio','$valor',@codArti,@codArtiProveedor,@codigoBarras,@desArticulo,@artiExiste,@out_status);";
    	//echo $sql;exit;
    	$rs = $this->db->Execute($sql);
    	// la instruccion ejecutada no retorna un recordset, 
    	// por lo que no hace falta ejecutar la siguiente instruccion.
    	// esa es solo necesaria cuando lo que se retorna es un recordset.
    	// se deja aqui como referencia, pues se ha venido copiando los llamados coomo si todos fueran igual.
    	//$data = $rs->getArray();
    
    	$rs->Close();
    
    	$sql = "SELECT @codArti as codArti, @codArtiProveedor as codArtiProveedor, @codigoBarras as codigoBarras,@desArticulo as desArticulo,@artiExiste as artiExiste,@out_status as message";
    	$rs = $this->db->Execute($sql);
    
    	$status = $rs->getArray();
    	$rs->Close();
    	 
    	$message = $status[0]["message"].'|'.$status[0]["codArti"].'|'.$status[0]["codArtiProveedor"].'|'.$status[0]["codigoBarras"].'|'.$status[0]["desArticulo"].'|'.$status[0]["artiExiste"];
    
    	return $message;
    
    }
 
    function getAllUserOptHide($userName){
		$sql = "call spGetOptHide('$userName',@out_status);";

        $rs = $this->db->Execute($sql);

        $data = $rs->getArray();
        $rs->Close();
        return $data;        
    	
    }

    // ACTIVO
    function savePedidoNac($action,$idPedido,$idProveedor,
    					   $numFac,$fecFac,$formaPago,$tCambio,$gravado,$impuesto,$descuento,$total,$obs,
    					   $item,$codArti,$cant,$cost,$precioNuevo) {
    	//Procesar todos los registro del arreglo
    	// Los elementos del arreglo son: IdLinea, Codigo, Desc, Costo, Canti
    	//
    	    	
    	// Se inicializa la variable message con OK.
   
    	$message='OK';
    	
    	switch ($action){
    		case '1':    	
    			// si es insertar pedido se inserta el pedido

    			$sql    = "call spInsPedidoNac($idProveedor,'$obs',$tCambio,@out_idPedido,@out_status);";
 //  echo $sql;exit;
    			$result = $this->db->Execute($sql);
    			$result->Close();
    		
	    		$sql     = "SELECT @out_idPedido as idPedido, @out_status as message";
	    		$rs      = $this->db->Execute($sql);
	    		$status  = $rs->getArray();
	    		$result->Close();
	    		if($status[0]["message"] == "OK"){
	    			$idPedido = $status[0]["idPedido"];
	    		}else{
	    			// hubo un error inesperado
	    			$message = $status[0]["message"];
	    			
	    		}
	    		break;
    		case '2':
    			// modificar pedido que no se ha recibido la mercaderia.
    			// lo unico que se puede cambiar es el proveedor
    			$sql    = "call spModPedidoNac($idPedido,$idProveedor,'$obs',$tCambio,@out_status);";
 //   echo $sql;exit;
    			$result = $this->db->Execute($sql);
    			$result->Close();
    			
    			$sql     = "SELECT @out_status as message";
    			$rs      = $this->db->Execute($sql);
    			$status  = $rs->getArray();
    			$result->Close();
    			if($status[0]["message"] != "OK"){
    				// hubo un error inesperado
    				$message = $status[0]["message"];
    				
    			}else{
		    			// como es modificación se borrar el detalle para luego volver a insertalo
		    			$sql = "call spDelDetPedidoNac($idPedido,@out_status);";
		 //   echo $sql;exit;
		    			$result = $this->db->Execute($sql);
		    			$result->Close();
		    			 
		    			$sql     = "SELECT @out_status as message";
		    			$rs      = $this->db->Execute($sql);
		    			$status  = $rs->getArray();
		    			$result->Close();
		    			if($status[0]["message"] != "OK"){
		    				// hubo un error inesperado
		    				$message = $status[0]["message"];
		    				
		    			}
    			}
    			break;
    		case '5': // se recibe el pedido
    			// Se actualizan todos los datos del pedido y se le cambio el estado    			
    			
    			$sql    = "call spModPedidoNacReci($idPedido,
    											   $total,$impuesto,$formaPago,'$numFac','$fecFac',$tCambio,$gravado,$descuento,
    			                                   @out_status);";
// echo $sql;exit;
    			$result = $this->db->Execute($sql);
    			$result->Close();
    			 
    			$sql     = "SELECT @out_status as message";
    			$rs      = $this->db->Execute($sql);
    			$status  = $rs->getArray();
    			$result->Close();
  
    			if($status[0]["message"] != "OK"){
    				// hubo un error inesperado
    				$message = $status[0]["message"];
    				
    			}else{
	    			// es mas facil borrar el detalle y volverlo a insertar
	    			$sql = "call spDelDetPedidoNac($idPedido,@out_status);";
	    			$result = $this->db->Execute($sql);
	    			$result->Close();
	    			
	    			$sql     = "SELECT @out_status as message";
	    			$rs      = $this->db->Execute($sql);
	    			$status  = $rs->getArray();
	    			$result->Close();
	    			if($status[0]["message"] != "OK"){
	    				// hubo un error inesperado
	    				$message = $status[0]["message"];
	    				
	    			}
    			}
    			break; 

    		case '7': // Anular Pedido
    				// Se le cambio el estado
    				 
    				$sql    = "call spAnulaPedidoNac($idPedido,@out_status);";
    				//echo $sql;exit;
    				$result = $this->db->Execute($sql);
    				$result->Close();
    			
    				$sql     = "SELECT @out_status as message";
    				$rs      = $this->db->Execute($sql);
    				$status  = $rs->getArray();
    				$result->Close();
    				if($status[0]["message"] != "OK"){
    					// hubo un error inesperado
    					$message = $status[0]["message"];
    					
    				}
    			break;	 
    			   			
    	} // switch $action	
    	if ($message == "OK"){   	
		    	$i=0;
		    	 
		    	foreach($item as $key => $value){
		    		$vcodArti = $codArti[$key];
		    		$vcant    = $cant[$key];
		    		$vcant	  = str_replace(',', '', $vcant);
		    		$vcost    = $cost[$key];
		    		$vcost	  = str_replace(',', '', $vcost);
		    		$vitem    = $item[$key];		
		    		$i=$i+1;
		 
		    		if ($action == '5'){
		    			//se estan recibiendo los articulos, el procesamiento es especial, por eso se usa un sp especifico
		    			$vprecio  = $precioNuevo[$key];
		    			$sql = "call spInsDetPedidoNacReci($idPedido,$i,'$vcodArti','$vitem',$vcant,$vcost,$vprecio,@out_status);";
	//	   echo $sql;exit;		    			 			
		    		}else{
		    			$sql = "call spInsDetPedidoNac($idPedido,$i,'$vcodArti','$vitem',$vcant,$vcost,@out_status);";
		//    echo $sql;exit;			
		    		}
		   			$rs = $this->db->Execute($sql);   			
		   			$rs->Close();    		
		    		$sql = "SELECT @out_status as message";
		    		$rs = $this->db->Execute($sql);
		    		$status = $rs->getArray();
		    		$rs->Close();
		    		$message = $status[0]["message"];
		   
		    		if ($message !== 'OK'){
		    			// Hubo en error inesperado en la operacion en la base de datos.
		    			// La variable $result  tiene el mensaje que se le debe
		    			// desplegar al usuario    	    		
		    			return $message;
		    		}
		    	} // foreach
    	}
	    // Si todo fue exitoso, la variable message trae el valor OK
	    return $message;
    }// function savePedidoNac
     
    // ACTIVO
    function buscarEncPedidoNac($idPedido) {
    	 
    	$sql = "call spGetEncPedidoNac($idPedido,@out_status);";
    	//echo $sql;exit;
    	$rs = $this->db->Execute($sql);
    
    	$data = $rs->getArray();
    	$rs->Close();
    	return $data;
    	 
    }
    
    //ACTIVO
    function buscarDetPedidoNac($idPedido) {
    	 
    	$sql = "call spGetDetPedidoNac($idPedido,@out_status);";
    	//echo $sql;exit;
    	$rs = $this->db->Execute($sql);
    
    	$data = $rs->getArray();
    	$rs->Close();
    	return $data;
    
    }
    
    // ACTIVO
    function buscarDetPedidoNacReci($idPedido) {
    
    	$sql = "call spGetDetPedidoNacReci($idPedido,@out_status);";
    	//echo $sql;exit;
    	$rs = $this->db->Execute($sql);
    
    	$data = $rs->getArray();
    	$rs->Close();
    	return $data;
    
    }
    
    function getAllOptHide($userName) {    	  	
        $sql = "call spGetOptHide('$userName',@out_status);";
        $rs = $this->db->Execute($sql);
      	$data = $rs->getArray();
		$rs->Close();
    	return $data;        
    }
    
    // ACTIVO
    function getPorceIV(){
    	$sql = "call spGetPorceIV(@out_status);";
    	$rs = $this->db->Execute ($sql);
    	$data = $rs->getArray();
    	$rs->Close();
    	return $data;
    }
    
    
    // ACTIVO 
    function buscarProducto($idTienda, $criterio, $texto) {
    
    	$sql = "call spGetArticuloExistenciaFac($idTienda, '$criterio', '$texto',@out_status);";
  // echo $sql;exit;
    	$rs = $this->db->Execute($sql);
    
    	$data = $rs->getArray();
    	$rs->Close();
    	return $data;
    
    }

    // ACTIVO
    function buscarProductoMoviPedido($idTienda, $criterio, $texto,$fecMoviIni) {
    
    	$sql = "call spGetArtiExistMoviFechaPedido( '$criterio', '$fecMoviIni','$texto',@out_status);";
 //   echo $sql;exit;
    	$rs = $this->db->Execute($sql);
    
    	$data = $rs->getArray();
    	$rs->Close();
    	return $data;
    
    }
    
    // ACTIVO
    function getDatosTienda($idTienda){
    	$sql = "call spGetDatosTienda($idTienda,@out_status);";
    	$rs = $this->db->Execute ($sql);
    	$data = $rs->getArray();
    	$rs->Close();
    	return $data;
    }
  
  
}

?>