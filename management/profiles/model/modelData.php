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
        
        $sql = "call spGetAllsecProfiles(@out_status);";
        $rs = $this->db->Execute($sql);
      	$data = $rs->getArray();
		$rs->Close();
      	return $data;        
        
    }
        
    function insertarData($id,$descripcion) {

    	$sql = "call spInssecProfiles('$id','$descripcion',@out_status);";
			
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
        
    	
		$sql = "call spDelsecProfiles('$id',@out_status);";
  	
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
    
    	$sql = "call spModsecProfiles('$id','$descripcion',@out_status);";
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
        
        $sql = "call spGetsecProfiles($id,@out_status);";
      
        $rs = $this->db->Execute($sql);

        $data = $rs->getArray();
        $rs->Close();
        
        return $data;        
        
    }
    
    //--------------------------------------------------------------------------------------------------------------------//
    //-------------------------------------------DETALLES DE FACTOR-------------------------------------------------------//
    //--------------------------------------------------------------------------------------------------------------------//
    
    
    function getAllDataDet($id) {
    
    	$sql = "call spGetAllsecUserProfile($id,@out_status);";
    	$rs = $this->db->Execute($sql);
    	$data = $rs->getArray();
    	$rs->Close();
    	return $data;
    
    }
    
    function insertarDataDet($username,$id) {
    
    	$sql = "call spInssecUserProfile('$username','$id',@out_status);";
    		
    	$rs = $this->db->Execute($sql);
    	$rs->Close();
    
    	$sql = "SELECT @out_status as message";
    	$rs = $this->db->Execute($sql);
    	 
    	$status = $rs->getArray();
    
    	$rs->Close();
    		
    	$message = $status[0]["message"];
    
    	return $message;
    }

    function borrarDataDet($id,$username) {
    
    	 
    	$sql = "call spDelsecUserProfile('$id','$username',@out_status);";
    	 
    	$rs = $this->db->Execute($sql);
    	$rs->Close();
    
    	$sql = "SELECT @out_status as message";
    	$rs = $this->db->Execute($sql);
    	$status = $rs->getArray();
    	$rs->Close();
    
    	$message = $status[0]["message"];
    	return $message;
    }
    
    //PENDIENTE
    function modificarDataDet($id,$username) {
    
    	$sql = "call spModsecUserProfile('$id','$username',@out_status);";
    	$rs = $this->db->Execute($sql);
    	$rs->Close();
    
    	$sql = "SELECT @out_status as message";
    	$rs = $this->db->Execute($sql);
    	$status = $rs->getArray();
    	$rs->Close();
    
    	$message = $status[0]["message"];
    	return $message;
    }
    //PENDIENTE
    
    function buscarDetalleDataDet($id,$username) {
    
    	$sql = "call spGetsecUserProfile('$id','$username',@out_status);";
    
    	$rs = $this->db->Execute($sql);
    
    	$data = $rs->getArray();
    	$rs->Close();
    
    	return $data;
    
    }
}

?>