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
        
        $sql = "call spGetAllpedParametro(@out_status);";
        $rs = $this->db->Execute($sql);
      	$data = $rs->getArray();
		$rs->Close();
      	return $data;        
        
    }
        
    function insertarData($nombre,$valor) {

    	$sql = "call spInspedParametro('$nombre','$valor',@out_status);";

        $rs = $this->db->Execute($sql);
        $rs->Close();
        
        $sql = "SELECT @out_status as message";
        $rs = $this->db->Execute($sql);                
        $status = $rs->getArray();
        $rs->Close();

        $message = $status[0]["message"];
        return $message;          
    }
    
	function borrarData($nombre) {
        
    	
		$sql = "call spDelpedParametro('$nombre',@out_status);";
  	
        $rs = $this->db->Execute($sql);
        $rs->Close();
        
        $sql = "SELECT @out_status as message";
        $rs = $this->db->Execute($sql);                
        $status = $rs->getArray();
        $rs->Close();

        $message = $status[0]["message"];
        return $message;          
    }
    
	function modificarData($nombre,$valor) {
    
    	$sql = "call spModpedParametro('$nombre','$valor',@out_status);";
        $rs = $this->db->Execute($sql);
        $rs->Close();
        
        $sql = "SELECT @out_status as message";
        $rs = $this->db->Execute($sql);                
        $status = $rs->getArray();
        $rs->Close();
      
        $message = $status[0]["message"];
        return $message;              	
    }
    
    
	function buscarDetalleData($nombre) {
        
        $sql = "call spGetpedParametro('$nombre',@out_status);";
        $rs = $this->db->Execute($sql);

        $data = $rs->getArray();
        $rs->Close();
        return $data;        
        
    }
    
}

?>