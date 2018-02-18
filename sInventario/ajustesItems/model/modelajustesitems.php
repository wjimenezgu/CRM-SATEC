<?php

class modelajustesitems{
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

	
        function insEncAjuste($tienda, $fechaMovimiento, $codTipoMov, $detalle) {
            $sql = "call spInsEncAjustes($tienda,'$fechaMovimiento','$codTipoMov','$detalle',@out_idAjuste,@out_status);";
//echo $sql;exit;
            $rs = $this->db->Execute($sql);
            $rs->Close();
                       
        	$sql2 = "SELECT @out_idAjuste as idAjuste, @out_status as message";
        	$rs = $this->db->Execute($sql2);                
        	$status = $rs->getArray();
        	$rs->Close();
        
        	if($status[0]["message"] == "OK"){
            	$idAjuste = $status[0]["idAjuste"];
        	}else{
            	$idAjuste = 0;
        	}

       		return $idAjuste;            
                    	
        }
        
        function modEncAjuste($tienda, $idAjuste,$fechaMovimiento, $codTipoMov, $detalle) {
            $sql = "call spModEncAjustes('$tienda',$idAjuste,'$fechaMovimiento','$codTipoMov','$detalle',@out_status);";
        //    echo $sql;exit;
            $rs = $this->db->Execute($sql);
            $rs->Close();
                       
            $sql = "SELECT @out_status as message";
            $rs = $this->db->Execute($sql);                
            $status = $rs->getArray();
            $rs->Close();

            $message = $status[0]["message"];
            return $message;              
                    	
        }        
        
        
        function insDetAjuste($idAjuste, $numLinea, $codArti, $desArticulo,$cantidad) {
            $sql = "call spInsDetAjustes($idAjuste,$numLinea,'$codArti','$desArticulo',$cantidad,@out_status);";
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
        
        function borrarAjuste($codTienda,$idAjuste) {
    	
    		$sql = "call spDelAjuste('$codTienda',$idAjuste,@out_status);";
        	$rs = $this->db->Execute($sql);
        	$rs->Close();
      	        	
        	$sql = "SELECT @out_status as message";
        	$rs = $this->db->Execute($sql);                
        	$status = $rs->getArray();
        	$rs->Close();

        	$message = $status[0]["message"];
        	return $message;          	          	
    	}

		function borrarDetAjuste($codTienda,$idAjuste) {
    	
    		$sql = "call spDelDetAjustes($idAjuste,@out_status);";
        	$rs = $this->db->Execute($sql);
        	$rs->Close();
      	        	
        	$sql = "SELECT @out_status as message";
        	$rs = $this->db->Execute($sql);                
        	$status = $rs->getArray();
        	$rs->Close();

        	$message = $status[0]["message"];
        	return $message;          	          	
    	}
    	

    	function aprobarAjuste($codTienda,$idAjuste) {
    		 
    		$sql = "call spAprobarAjustes('$codTienda',$idAjuste,@out_status);";
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
            $sql = "call spGetAllAjustes('$idTienda','$EoS',@out_status);";
            $rs = $this->db->Execute ($sql);
			$data = $rs->getArray();
            $rs->Close();
			return $data;
         }
         
        function buscarEncAjuste($codTienda,$idAjuste) {
    	
    	$sql = "call spGetEncAjustes('$codTienda',$idAjuste,@out_status);";
//echo $sql;exit;
        $rs = $this->db->Execute($sql);

        $data = $rs->getArray();
        $rs->Close();
        return $data;        
    	
    	}  
        
    	function buscarDetAjuste($idAjuste) {
    	
    	$sql = "call spGetDetAjustes($idAjuste,@out_status);";
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
    
        
}
?>

