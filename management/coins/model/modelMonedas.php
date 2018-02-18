<?php

class modelMonedas {

    public function __construct(&$db) {
        $this->db = $db;
    }
    
    function getAllMonedas() {
        
        $sql = "call spGetAllMonedas(@out_status);";
        $rs = $this->db->Execute($sql);
      	$data = $rs->getArray();

      	return $data;        
        
    }
    
    function insertarMoneda($IdMoneda,$Descripcion,$SimboloMoneda) {
        
    	$sql = "call spInsMoneda('$IdMoneda','$Descripcion','$SimboloMoneda',@out_status);";

        $rs = $this->db->Execute($sql);

    	return "OK";    
    } 

	function buscarDetalleMoneda($idMoneda) {
        
        $sql = "call spGetMoneda('$idMoneda',@out_status);";
      
        $rs = $this->db->Execute($sql);

        $data = $rs->getArray();
        
        return $data;        
        
    }
    
    function modificarMoneda($IdMoneda,$Descripcion,$SimboloMoneda) {
    
    	$sql = "call spModMoneda('$IdMoneda','$Descripcion','$SimboloMoneda',@out_status);";
        $rs = $this->db->Execute($sql);

        //$data = $rs->getArray();
        
        //return $data;
        return "OK";      
    	
    }
    
	function borrarMoneda($idMoneda) {
        
    	$sql = "call spDelMoneda('$idMoneda',@out_status);";
        $rs = $this->db->Execute($sql);

        //$data = $rs->getArray();
        //$data = @out_status;
        
        //return $data;  
        return "OK";       
    }
    
}

?>