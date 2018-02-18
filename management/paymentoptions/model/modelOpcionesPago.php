<?php

class modelOpcionesPago {

    public function __construct(&$db) {
        $this->db = $db;
    }
    
    function getAllOpcionesPago() {
        
        $sql = "call spGetAllOpcionespago(@out_status);";
        $rs = $this->db->Execute($sql);
      	$data = $rs->getArray();

      	return $data;        
        
    }
    
	function insertarOpcionPago($idOpcionPago,$descripcion) {
        
    	$sql = "call spInsOpcionesPago($idOpcionPago,'$descripcion',@out_status);";
 // print_r($sql);
        $rs = $this->db->Execute($sql);

        //$data = $rs->getArray();
        //$data = @out_status;
        
        //return $data;        
    	return "OK";    
    }
    
	function borrarOpcionPago($idOpcionPago) {
        
    	$sql = "call spDelOpcionesPago($idOpcionPago,@out_status);";
        $rs = $this->db->Execute($sql);

        //$data = $rs->getArray();
        //$data = @out_status;
        
        //return $data;  
        return "OK";       
    }
    
	function modificarOpcionPago($idOpcionPago,$descripcion) {
    
    	$sql = "call spModOpcionesPago($idOpcionPago,'$descripcion',@out_status);";
        $rs = $this->db->Execute($sql);

        //$data = $rs->getArray();
        
        //return $data;
        return "OK";      
    	
    }
    
	function buscarDetalleOpcionPago($idOpcionPago) {
        
        $sql = "call spGetOpcionesPago($idOpcionPago,@out_status);";
        $rs = $this->db->Execute($sql);

        $data = $rs->getArray();
        
        return $data;        
        
    }
    
}

?>