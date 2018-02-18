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
        
        $sql = "call spGetAllpedTipoLineas(@out_status);";
        $rs = $this->db->Execute($sql);
      	$data = $rs->getArray();
		$rs->Close();
      	return $data;        
        
    }
        
    function insertarData($descripcion) {

    	$sql = "call spInspedTipoLineas('$descripcion',@out_status);";
			
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
        
    	
		$sql = "call spDelpedTipoLineas('$id',@out_status);";
  	
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
    
    	$sql = "call spModpedTipoLineas('$id','$descripcion',@out_status);";
        $rs = $this->db->Execute($sql);
        $rs->Close();
        
        $sql = "SELECT @out_status as message";
        $rs = $this->db->Execute($sql);                
        $status = $rs->getArray();
        $rs->Close();
      
        $message = $status[0]["message"];
        return $message;              	
    }
    
    
	function buscarDetalleData($id) {
        
        $sql = "call spGetpedTipoLineas($id,@out_status);";
      
        $rs = $this->db->Execute($sql);

        $data = $rs->getArray();
        $rs->Close();
        
        return $data;        
        
    }
    
    //--------------------------------------------------------------------------------------------------------------------//
    //-------------------------------------------DETALLES DE LINEAS-------------------------------------------------------//
    //--------------------------------------------------------------------------------------------------------------------//
    
    
    function getAllDataDet($id) {
    
    	$sql = "call spGetAllpedLineas($id,@out_status);";
    	$rs = $this->db->Execute($sql);
    	$data = $rs->getArray();
    	$rs->Close();
    	return $data;
    
    }
    
    function insertarDataDet($descripcion,$linea1,$linea2,$linea3,$tipoLinea) {
    
    	$sql = "call spInspedLineas('$descripcion','$linea1','$linea2','$linea3','$tipoLinea',@out_status);";
    		
    	$rs = $this->db->Execute($sql);
    	$rs->Close();
    
    	$sql = "SELECT @out_status as message";
    	$rs = $this->db->Execute($sql);
    	 
    	$status = $rs->getArray();
    
    	$rs->Close();
    		
    	$message = $status[0]["message"];
    
    	return $message;
    }

    function borrarDataDet($id,$tipoLinea) {
    
    	 
    	$sql = "call spDelpedLineas('$id','$tipoLinea',@out_status);";
    	 
    	$rs = $this->db->Execute($sql);
    	$rs->Close();
    
    	$sql = "SELECT @out_status as message";
    	$rs = $this->db->Execute($sql);
    	$status = $rs->getArray();
    	$rs->Close();
    
    	$message = $status[0]["message"];
    	return $message;
    }
    
    function modificarDataDet($id,$descripcion,$linea1,$linea2,$linea3,$tipoLinea) {
    
    	$sql = "call spModpedLineas('$id','$descripcion','$linea1','$linea2','$linea3','$tipoLinea',@out_status);";
    	$rs = $this->db->Execute($sql);
    	$rs->Close();
    
    	$sql = "SELECT @out_status as message";
    	$rs = $this->db->Execute($sql);
    	$status = $rs->getArray();
    	$rs->Close();
    
    	$message = $status[0]["message"];
    	return $message;
    }
    
    
    function buscarDetalleDataDet($id,$tipoLinea) {
    
    	$sql = "call spGetpedLineas('$id','$tipoLinea',@out_status);";
    
    	$rs = $this->db->Execute($sql);
    
    	$data = $rs->getArray();
    	$rs->Close();
    
    	return $data;
    
    }
}

?>