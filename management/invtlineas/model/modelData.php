<?php

class modelData {

	// funciones base que debe tener todo model
    public function __construct(&$db) {
        $this->db = $db;
    }
    
    // Funcion para apagar las opciones que el usuario no puede ver.
    function getAllOptHide($userName) {    	  	
        $sql = "call spGetOptHide('$userName',@out_status);";
        $rs = $this->db->Execute($sql);
      	$data = $rs->getArray(); 
		$rs->Close();
    	return $data;        
    }
     
	// A partir de aca las funciones propias del modulo    
    
    function getAllData() {
        
        $sql = "call spGetAllinvTipoLineas(@out_status);";
        $rs = $this->db->Execute($sql);
      	$data = $rs->getArray();
		$rs->Close();
      	return $data;        
        
    }
        
    function insertarData($id,$descripcion) {

    	$sql = "call spInsinvTipoLineas('$id','$descripcion',@out_status);";
			
        $rs = $this->db->Execute($sql);
        $rs->Close();
        
        $sql = "SELECT @out_status as message";
        $rs = $this->db->Execute($sql);        
             
        $status = $rs->getArray();
        
        $rs->Close();
			
        $message = $status[0]["message"];
        
        return $message;          
    }
    
	function borrarData($id) {
        
    	
		$sql = "call spDelinvTipoLineas('$id',@out_status);";
  	
        $rs = $this->db->Execute($sql);
        $rs->Close();
        
        $sql = "SELECT @out_status as message";
        $rs = $this->db->Execute($sql);                
        $status = $rs->getArray();
        $rs->Close();

        $message = $status[0]["message"];
        return $message;          
    }
    
	function modificarData($id,$descripcion) {
    
    	$sql = "call spModinvTipoLineas('$id','$descripcion',@out_status);";
    	
        $rs = $this->db->Execute($sql);
        //echo $sql; exit;
        $rs->Close();
        
        $sql = "SELECT @out_status as message";
        $rs = $this->db->Execute($sql);                
        $status = $rs->getArray();
        $rs->Close();
      
        $message = $status[0]["message"];
        return $message;              	
    }
    
    
	function buscarDetalleData($id) {
        
        $sql = "call spGetinvTipoLineas('$id',@out_status);";
      
        $rs = $this->db->Execute($sql);

        $data = $rs->getArray();
        $rs->Close();
        
        return $data;        
        
    }
    
    //--------------------------------------------------------------------------------------------------------------------//
    //-------------------------------------------DETALLES DE FACTOR-------------------------------------------------------//
    //--------------------------------------------------------------------------------------------------------------------//
    
    
    function getAllDataDet($id) {
    
    	$sql = "call spGetAllinvLineas('$id',@out_status);";
    	$rs = $this->db->Execute($sql);
    	$data = $rs->getArray();
    	$rs->Close();
    	return $data;
    
    }
    
    function insertarDataDet($id,$tipolinea,$linea) {
    
    	$sql = "call spInsinvLineas('$id','$tipolinea','$linea',@out_status);";
    		
    	$rs = $this->db->Execute($sql);
    	$rs->Close();
    
    	$sql = "SELECT @out_status as message";
    	$rs = $this->db->Execute($sql);
    	 
    	$status = $rs->getArray();
    
    	$rs->Close();
    		
    	$message = $status[0]["message"];
    
    	return $message;
    }

    function borrarDataDet($id,$tipolinea) {
    
    	 
    	$sql = "call spDelinvLineas('$id','$tipolinea',@out_status);";
    	 
    	$rs = $this->db->Execute($sql);
    	$rs->Close();
    
    	$sql = "SELECT @out_status as message";
    	$rs = $this->db->Execute($sql);
    	$status = $rs->getArray();
    	$rs->Close();
    
    	$message = $status[0]["message"];
    	return $message;
    }
    
    function modificarDataDet($id,$tipolinea,$linea) {
    
    	$sql = "call spModinvLineas('$id','$tipolinea','$linea',@out_status);";
    	$rs = $this->db->Execute($sql);
    	$rs->Close();
    
    	$sql = "SELECT @out_status as message";
    	$rs = $this->db->Execute($sql);
    	$status = $rs->getArray();
    	$rs->Close();
    
    	$message = $status[0]["message"];
    	return $message;
    }
    
    
    function buscarDetalleDataDet($id,$tipolinea) {
    
    	$sql = "call spGetinvLineas('$id','$tipolinea',@out_status);";
    
    	$rs = $this->db->Execute($sql);
    
    	$data = $rs->getArray();
    	$rs->Close();
    
    	return $data;
    
    }
}

?>