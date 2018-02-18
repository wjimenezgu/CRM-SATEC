<?php

class modelData{
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
        
        function insEncTraslado($tiendaOrigen, $tiendaDestino,$fechaMovimiento, $detalle) {
            $sql = "call spInsEncTraslado($tiendaOrigen, $tiendaDestino,'$fechaMovimiento','$detalle',@out_idTraslado,@out_status);";
//echo $sql;exit;
            $rs = $this->db->Execute($sql);
            $rs->Close();
                       
        	$sql2 = "SELECT @out_idTraslado as idAjuste, @out_status as message";
        	$rs = $this->db->Execute($sql2);                
        	$status = $rs->getArray();
        	$rs->Close();
        
        	if($status[0]["message"] == "OK"){
            	$idTraslado = $status[0]["idAjuste"];
        	}else{
            	$idTraslado = 0;
        	}

       		return $idTraslado;            
                    	
        }
        
        function modEncTraslado($tiendaOrigen, $tiendaDestino, $idTraslado,$fechaMovimiento,  $estado,$detalle,$EoS) {
            $sql = "call spModEncTraslado($tiendaOrigen,$tiendaDestino,$idTraslado,'$fechaMovimiento','$estado','$detalle','$EoS',@out_status);";
//echo $sql;exit;
            $rs = $this->db->Execute($sql);
            $rs->Close();
                       
            $sql = "SELECT @out_status as message";
            $rs = $this->db->Execute($sql);                
            $status = $rs->getArray();
            $rs->Close();

            $message = $status[0]["message"];
            return $message;              
                    	
        }        
        
        
        function insDetTraslado($idTraslado, $numLinea, $codArti, $desArticulo,$cantidad,$existencia) {
            $sql = "call spInsDetTraslado($idTraslado,$numLinea,'$codArti','$desArticulo',$cantidad,$existencia,@out_status);";
//echo $sql;exit;
            $rs = $this->db->Execute($sql);
            $rs->Close();

            $sql = "SELECT @out_status as message";
            $rs = $this->db->Execute($sql);                
            $status = $rs->getArray();
            $rs->Close();

            $message = $status[0]["message"];
            return $message;  
        	
        }                
        
        function borrarTraslado($codTienda,$idTraslado) {
    	
    		$sql = "call spDelEncTraslado($codTienda,$idTraslado,@out_status);";
        	$rs = $this->db->Execute($sql);
        	$rs->Close();
      	        	
        	$sql = "SELECT @out_status as message";
        	$rs = $this->db->Execute($sql);                
        	$status = $rs->getArray();
        	$rs->Close();

        	$message = $status[0]["message"];
        	return $message;          	          	
    	}

		function borrarDetTraslado($codTienda,$idTraslado) {
    	
    		$sql = "call spDelDetTraslado($idTraslado,@out_status);";
        	$rs = $this->db->Execute($sql);
        	$rs->Close();
      	        	
        	$sql = "SELECT @out_status as message";
        	$rs = $this->db->Execute($sql);                
        	$status = $rs->getArray();
        	$rs->Close();

        	$message = $status[0]["message"];
        	return $message;          	          	
    	}
    	
        
		function getAllData($idTienda,$EoS){
            $sql = "call spGetAllTraslados($idTienda,'$EoS',@out_status);";
            $rs = $this->db->Execute ($sql);
			$data = $rs->getArray();
            $rs->Close();
			return $data;
         }
         
        function buscarEncTraslado($codTienda,$idTraslado,$EoS) {
    	
    	$sql = "call spGetEncTraslado($codTienda,$idTraslado,'$EoS',@out_status);";
//echo $sql;exit;
        $rs = $this->db->Execute($sql);

        $data = $rs->getArray();
        $rs->Close();
        return $data;        
    	
    	}  
        
    	function buscarDetTraslado($idTraslado) {
    	
    	$sql = "call spGetDetTraslado($idTraslado,@out_status);";
     
        
//echo $sql;exit;
        $rs = $this->db->Execute($sql);

        $data = $rs->getArray();
        $rs->Close();
        return $data;        
    	    	
    	}
    	
        function buscarDetTrasladoE($idTraslado,$idTienda) {
        
  
        $sql = "call spGetDetTrasladoE($idTraslado,$idTienda,@out_status);";

 //echo $sql;exit;
        $rs = $this->db->Execute($sql);

        $data = $rs->getArray();
        $rs->Close();
        return $data;        
                
        }

    	function buscarDetTrasladoRecep($codTienda,$idTraslado) {
    		 
    		$sql = "call spGetDetTrasladoRecep($codTienda,$idTraslado,@out_status);";
    		//echo $sql;exit;
    		$rs = $this->db->Execute($sql);
    	
    		$data = $rs->getArray();
    		$rs->Close();
    		return $data;
    	
    	}

        function buscarDetTrasladoAlistar($idTraslado) {
        
        $sql = "call spGetDetTrasladoAlistar($idTraslado,@out_status);";
     
        
//echo $sql;exit;
        $rs = $this->db->Execute($sql);

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
        
		function getListaTiendas($idTienda){
            $sql = "call spGetListaTiendasSin($idTienda,@out_status);";
            $rs = $this->db->Execute ($sql);
			$data = $rs->getArray();
            $rs->Close();
			return $data;
        }
        

        
         function getAllTipoMovTienda($idTienda,$EoS){
            $sql = "call spGetAllTipoMovTienda('$idTienda','$EoS',@out_status);";
            $rs = $this->db->Execute ($sql);
			$data = $rs->getArray();
            $rs->Close();
			return $data;
         }
        
        
         function getAllItems(){
            $sql = "call spGetAllItemsFac(@out_status);";
            $rs = $this->db->Execute ($sql);
			$data = $rs->getArray();
            $rs->Close();
			return $data;
        }
        
         function getItem($idArticulo){
        	$sql = "call spGetInfoItem($idArticulo,@out_status);";
			$rs = $this->db->Execute ($sql);
			$data = $rs->getArray();
			return $data;
        }
        
         function getItemDesc($desc){
            $sql = "call spGetArticuloDesc($desc,@out_status)";
            $rs = $this->db->Execute ($sql);
			$data = $rs->getArray();
			return $data;
        }
        
        public function getItemDescAll($sent){
            $sql = "call spGetItemDescAll($sent,@out_status)";
            $rs = $this->db->Execute ($sql);
			$data = $rs->getArray();
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
    
    function buscarProducto($idTienda, $criterio, $texto) {
                
        $sql = "call spGetArticuloExistenciaFac($idTienda, '$criterio', '$texto',@out_status);";

        $rs = $this->db->Execute($sql);

        $data = $rs->getArray();
        
        return $data;        
        
    }
    
    function queryInputItemsPedido($codTienda, $fecCorte,$existencia) {
    
    	$sql = "call spGetArtiPedidoTienda($codTienda, '$fecCorte',$existencia,@out_status);";
    
    	$rs = $this->db->Execute($sql);
    
    	$data = $rs->getArray();
    
    	return $data;
    
    }
    
    
        
}
?>

