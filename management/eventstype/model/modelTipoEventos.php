<?php

class modelTipoEventos {

    public function __construct(&$db) {
        $this->db = $db;
    }
    
    function getAllTipoEventos() {
        
        $sql = "call spGetAllTipoEventos(@out_status);";
        $rs = $this->db->Execute($sql);
      	$data = $rs->getArray();

      	return $data;        
        
    }
    
	function insertarTipoEvento($idTipoEvento,$descripcion) {
        
    	$sql = "call spInsTipoEvento($idTipoEvento,'$descripcion',@out_status);";
 
        $rs = $this->db->Execute($sql);

        return "OK";    
    }
    
	function borrarTipoEvento($idTipoEvento) {
        
    	$sql = "call spDelTipoEvento($idTipoEvento,@out_status);";
  	
        $rs = $this->db->Execute($sql);
  
        return "OK";       
    }
    
	function modificarTipoEvento($idTipoEvento,$descripcion) {
    
    	$sql = "call spModTipoEvento($idTipoEvento,'$descripcion',@out_status);";
        $rs = $this->db->Execute($sql);

        //$data = $rs->getArray();
        
        //return $data;
        return "OK";      
    	
    }
    
	function buscarDetalleTipoEvento($idTipoEvento) {
        
        $sql = "call spGetTipoEvento($idTipoEvento,@out_status);";
        $rs = $this->db->Execute($sql);

        $data = $rs->getArray();
        
        return $data;        
        
    }
    
}

?>