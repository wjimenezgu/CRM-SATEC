<?php

class modelBill{
   	public function __construct(&$db) {
		$this->db = &$db;
	}

	// Funcion para apagar las opciones que el usuario no puede ver.
	function getAllOptHide($userName) {
		$sql = "call spGetOptHide('$userName',@out_status);";
		$rs = $this->db->Execute($sql);
		$data = $rs->getArray();
		$rs->Close();
		return $data;
	}

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
		       
    function insEncFacturaCxC($idCliente,$tienda,$vendedor, 
    						  $fecFactura,
    						  $posPresupestaria,$fondo,$areaFuncional,$solPedido,$tramiCompra,$ctaCliente,
    						  $oc,$indMontoLetras,$obs,$tc,
    						  $subtotal,$descuento, $impuesto) {
            
    	$sql = "call spInsEncFacturaCxCFinal($idCliente,$tienda,'$vendedor', 
    									'$fecFactura',
    									'$posPresupestaria','$fondo','$areaFuncional','$solPedido',
    									'$tramiCompra','$ctaCliente',
    									'$oc','$indMontoLetras','$obs',$tc,
    									$subtotal,$descuento, $impuesto,
    	                                @out_idFactura,@out_status);";
        	
     	        	        	        	        	        
        $rs = $this->db->Execute($sql);
        $rs->Close();
                       
        $sql2 = "SELECT @out_idFactura as idFactura, @out_status as message";
        $rs = $this->db->Execute($sql2);                
        $status = $rs->getArray();
        $rs->Close();
        
        if($status[0]["message"] == "OK"){
        	$idFactura = $status[0]["idFactura"];
        }else{
         	$idFactura = 0;
        }

       	return $idFactura;            
                    	
    }
    
    function insFacturaCxC($idCliente,$tienda,$vendedor,
    		$fecFactura,
    		$posPresupestaria,$fondo,$areaFuncional,$solPedido,$tramiCompra,$ctaCliente,
    		$oc,$indMontoLetras,$obs,$tc,
    		$subtotal,$descuento, $impuesto,
    		$item,$codArti,$cant,$costo,$precioVenta,$pdesc,$totPrice) {
    	
    		$sql = "call spInsFacturaCxC($idCliente,$tienda,'$vendedor',
	    	'$fecFactura',
	    	'$posPresupestaria','$fondo','$areaFuncional','$solPedido',
	    	'$tramiCompra','$ctaCliente',
	    	'$oc','$indMontoLetras','$obs',$tc,
	    	$subtotal,$descuento, $impuesto,
	    	$item,$codArti,$cant,$costo,$precioVenta,$pdesc,$totPrice,
	    	@out_idFactura,@out_status);";
	    	    
    	$rs = $this->db->Execute($sql);
    	$rs->Close();
    	 
    	$sql2 = "SELECT @out_idFactura as idFactura, @out_status as message";
    	$rs = $this->db->Execute($sql2);
    	$status = $rs->getArray();
    	$rs->Close();
    
    	if($status[0]["message"] == "OK"){
    		$idFactura = $status[0]["idFactura"];
    	}else{
    		$idFactura = 0;
    	}
    
    	return $idFactura;    	 
    }

        
            
    function insDetFacturaCxC($tienda,$vendedor,$idFactura, $numLinea, $codArti, $desArticulo,$cantidad, $precioVenta,$pdesc,$totPrice,$costo) {
    	$sql = "call spInsDetFacturaCxC($tienda,'$vendedor',$idFactura,$numLinea,'$codArti','$desArticulo',$cantidad,$precioVenta,$pdesc,$totPrice,$costo,@out_status);";

        $rs = $this->db->Execute($sql);
        $rs->Close();

        $sql = "SELECT @out_status as message";
        $rs = $this->db->Execute($sql);                
        $status = $rs->getArray();
        $rs->Close();

        $message = $status[0]["message"];
        return $message;  
        	
    } 
        
         function getCliente($nombre){
            $sql = "call spGetCliente('$nombre',@out_status);";
            $rs = $this->db->Execute ($sql);
			$data = $rs->getArray();
            $rs->Close();
			return $data;
        }
        
         function getAllClientes(){
            $sql = "call spGetAllClientesFacCxC(@out_status);";
            $rs = $this->db->Execute ($sql);
			$data = $rs->getArray();
            $rs->Close();
			return $data;
        }
        
         function getAllTiendas(){
            $sql = "call spGetAllTiendas(@out_status);";
            $rs = $this->db->Execute ($sql);
			$data = $rs->getArray();
            $rs->Close();
			return $data;
        }
        
  
    function getTiendaLocal($userName) {
        
        $sql = "call spGetTiendaLocal('$userName', @codtienda , @pNombreTiendaLocal, @out_status);";
        $this->db->Execute($sql);        
        
        $sql2 = "SELECT @codtienda as codTienda, @pNombreTiendaLocal as nameTienda";
        $rs = $this->db->Execute($sql2);        
        
        $data = $rs->getArray();
        
        //$codTienda = $rs->fields["codTienda"];
        
        return $data;
    }
    
    function getDatosTienda($idTienda){
    	$sql = "call spGetDatosTienda($idTienda,@out_status);";
    
    	$rs = $this->db->Execute ($sql);
    	$data = $rs->getArray();
    	$rs->Close();
    	return $data;
    }
    
    // activo
    function buscarProducto($idTienda, $criterio, $texto) {
                
        $sql = "call spGetArticuloExistenciaFac($idTienda, '$criterio', '$texto',@out_status);";
        $rs = $this->db->Execute($sql);

        $data = $rs->getArray();
        
        return $data;        
        
    }
    
    function getPorceIV(){
            $sql = "call spGetPorceIV(@out_status);";
            $rs = $this->db->Execute ($sql);
			$data = $rs->getArray();
            $rs->Close();
			return $data;
    }
    
	
    function getPorceMaxDescCxC(){
            $sql = "call spGetPorceMaxDescCxC(@out_status);";
            $rs = $this->db->Execute ($sql);
			$data = $rs->getArray();
            $rs->Close();
			return $data;
    }
    
    function getPorceAutDesc(){
    	$sql = "call spGetPorceAutDesc(@out_status);";
    	$rs = $this->db->Execute ($sql);
    	$data = $rs->getArray();
    	$rs->Close();
    	return $data;
    }
           
    function getPorceUtiCosto(){
    	$sql = "call spGetPorceUtiCosto(@out_status);";
    	$rs = $this->db->Execute ($sql);
    	$data = $rs->getArray();
    	$rs->Close();
    	return $data;
    }
    
    function validaClaveGere($ClaveGere){
    	$sql = "call spValidaClaveCxC('$ClaveGere',@out_esValido,@out_status);";
    	$rs = $this->db->Execute ($sql);
    	$rs->Close();
    
    	$sql = "SELECT @out_esValido as esValido, @out_status as message";
    	$rs = $this->db->Execute($sql);
    	$status = $rs->getArray();
    	$rs->Close();
    
    	$message = $status[0]["message"].'|'.$status[0]["esValido"];
    	return  $message;
    }

    function validaClaveVendedor($ClaveVendedor){
    	$sql = "call spValidaClaveVendedor('$ClaveVendedor',@out_esValido,@out_userVendedor,@out_status);";
    	$rs = $this->db->Execute ($sql);
    	$rs->Close();
    
    	$sql = "SELECT @out_esValido as esValido, @out_userVendedor as userVendedor, @out_status as message";
    	$rs = $this->db->Execute($sql);
    	$status = $rs->getArray();
    	$rs->Close();
    
    	//return arrary (message,esValido);
    	//return $status;
    	$message = $status[0]["message"].'|'.$status[0]["esValido"].'|'.$status[0]["userVendedor"];
    	return $message;
    	
    
    }    
    
    function getArticulo($idTienda,$criterio,$valor) {
    
    	$sql = "call spGetArtiFactura($idTienda,'$criterio','$valor',@codArti,@codArtiProveedor,@codigoBarras,@desArticulo,@artiExiste,@precioivi,@existencia,@precio,@costo,@out_status);";
//   echo $sql;exit;
    	$rs = $this->db->Execute($sql);
    	// la instruccion ejecutada no retorna un recordset,
    	// por lo que no hace falta ejecutar la siguiente instruccion.
    	// esa es solo necesaria cuando lo que se retorna es un recordset.
    	// se deja aqui como referencia, pues se ha venido copiando los llamados coomo si todos fueran igual.
    	//$data = $rs->getArray();
    
    	$rs->Close();
    
    	$sql = "SELECT @codArti as codArti, @codArtiProveedor as codArtiProveedor, @codigoBarras as codigoBarras,@desArticulo as desArticulo,@artiExiste as artiExiste,@precioivi as precioivi,@existencia as existencia,@precio as precio,@costo as costo,@out_status as message";
    	$rs = $this->db->Execute($sql);
    
    	$status = $rs->getArray();
    	$rs->Close();
    
    	$message = $status[0]["message"].'|'.$status[0]["codArti"].'|'.$status[0]["codArtiProveedor"].'|'.trim($status[0]["codigoBarras"]).'|'.trim($status[0]["desArticulo"]).'|'.$status[0]["artiExiste"].'|'.$status[0]["precioivi"].'|'.$status[0]["precio"].'|'.$status[0]["existencia"].'|'.$status[0]["costo"];
    
    	return $message;
    
    }

    
    function buscaEncFact($codTienda,$idFactura) {
    	 
    	$sql = "call spGetEncFacturaImpCxC($codTienda,$idFactura,@out_status);";
    	//echo $sql;exit;
    	$rs = $this->db->Execute($sql);
    
    	$data = $rs->getArray();
    	$rs->Close();
    	return $data;
    	 
    	 
    }
    
    function buscaDetFactArti($idFactura) {
    	 
    	$sql = "call spGetDetFacturaImpCxC($idFactura,@out_status);";
    	//echo $sql;exit;
    	$rs = $this->db->Execute($sql);
    
    	$data = $rs->getArray();
    	$rs->Close();
    	return $data;
    	 
    	 
    }

    function buscaInfoModoGob($idFactura) {
    
        $sql = "call spGetInfoModoGob($idFactura,@out_status);";
        //echo $sql;exit;
        $rs = $this->db->Execute($sql);
    
        $data = $rs->getArray();
        $rs->Close();
        return $data;
    
    
    }   
        
}
?>

