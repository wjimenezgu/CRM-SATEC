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
        
        $sql = "call spGetAllEncFactor(@out_status);";
        $rs = $this->db->Execute($sql);
      	$data = $rs->getArray();
		$rs->Close();
      	return $data;        
        
    }
        
    function insertarData($descripcion) {

    	$sql = "call spInsEncFactor('$descripcion',@out_status);";
			
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
        
    	
		$sql = "call spDelEncFactor('$id',@out_status);";
  	
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
    
    	$sql = "call spModEncFactor('$id','$descripcion',@out_status);";
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
        
        $sql = "call spGetEncFactor($id,@out_status);";
      
        $rs = $this->db->Execute($sql);

        $data = $rs->getArray();
        $rs->Close();
        
        return $data;        
        
    }
    
    //--------------------------------------------------------------------------------------------------------------------//
    //-------------------------------------------DETALLES DE FACTOR-------------------------------------------------------//
    //--------------------------------------------------------------------------------------------------------------------//
    
    
    function getAllDataDet($id) {
    
    	$sql = "call spGetAllDetFactor($id,@out_status);";
    	$rs = $this->db->Execute($sql);
    	$data = $rs->getArray();
    	$rs->Close();
    	return $data;
    
    }
    
    function insertarDataDet($id,$numLinea,$descripcion) {
    
    	$sql = "call spInsDetFactor($id,$numLinea,'$descripcion',@out_status);";
    		
    	$rs = $this->db->Execute($sql);
    	$rs->Close();
    
    	$sql = "SELECT @out_status as message";
    	$rs = $this->db->Execute($sql);
    	 
    	$status = $rs->getArray();
    
    	$rs->Close();
    		
    	$message = $status[0]["message"];
    
    	return $message;
    }

    function borrarDataDet($id,$numLinea) {
    
    	 
    	$sql = "call spDelDetFactor('$id',$numLinea,@out_status);";
    	 
    	$rs = $this->db->Execute($sql);
    	$rs->Close();
    
    	$sql = "SELECT @out_status as message";
    	$rs = $this->db->Execute($sql);
    	$status = $rs->getArray();
    	$rs->Close();
    
    	$message = $status[0]["message"];
    	return $message;
    }
    
    function modificarDataDet($id,$numLinea,$descripcion) {
    
    	$sql = "call spModDetFactor('$id',$numLinea,'$descripcion',@out_status);";
    	$rs = $this->db->Execute($sql);
    	$rs->Close();
    
    	$sql = "SELECT @out_status as message";
    	$rs = $this->db->Execute($sql);
    	$status = $rs->getArray();
    	$rs->Close();
    
    	$message = $status[0]["message"];
    	return $message;
    }
    
    
    function buscarDetalleDataDet($id,$numLinea) {
    
    	$sql = "call spGetDetFactor($id,$numLinea,@out_status);";
    
    	$rs = $this->db->Execute($sql);
    
    	$data = $rs->getArray();
    	$rs->Close();
    
    	return $data;
    
    }
}

?>