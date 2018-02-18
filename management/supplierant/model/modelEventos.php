<?php

class modelEventos {

    public function __construct(&$db) {
        $this->db = $db;
    }
    
    function getAllEventos() {
        
        $sql = "call spGetAllEventos(@out_status);";
        $rs = $this->db->Execute($sql);
      	$data = $rs->getArray();
		$rs->Close();
      	return $data;        
        
    }
    
	function insertarEvento($idEvento,$descripcion) {
        
    	$sql = "call spInsEvento($idEvento,'$descripcion',1,@out_status);";

        $rs = $this->db->Execute($sql);
        $rs->Close();
        
        $sql = "SELECT @out_status as message";
        $rs = $this->db->Execute($sql);                
        $status = $rs->getArray();
        $rs->Close();

        $message = $status[0]["message"];
        return $message;          
    }
    
	function borrarEvento($idEvento) {
        
    	$sql = "call spDelEvento($idEvento,@out_status);";
  	
        $rs = $this->db->Execute($sql);
        $rs->Close();
        
        $sql = "SELECT @out_status as message";
        $rs = $this->db->Execute($sql);                
        $status = $rs->getArray();
        $rs->Close();

        $message = $status[0]["message"];
        return $message;          
    }
    
	function modificarEvento($idEvento,$descripcion) {
    
    	$sql = "call spModEvento($idEvento,'$descripcion',1,@out_status);";
        $rs = $this->db->Execute($sql);
        $rs->Close();
        
        $sql = "SELECT @out_status as message";
        $rs = $this->db->Execute($sql);                
        $status = $rs->getArray();
        $rs->Close();

        $message = $status[0]["message"];
        return $message;              	
    }
    
	function buscarDetalleEvento($idEvento) {
        
        $sql = "call spGetEvento($idEvento,@out_status);";
        $rs = $this->db->Execute($sql);

        $data = $rs->getArray();
        $rs->Close();
        return $data;        
        
    }
    
}

?>