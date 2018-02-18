<?php

class modelTipoCompromisos {

    public function __construct(&$db) {
        $this->db = $db;
    }
    
    function getAllTipoCompromisos() {
        
        $sql = "call spGetAllCompromisos(@out_status);";
        $rs = $this->db->Execute($sql);
      	$data = $rs->getArray();

      	return $data;        
        
    }
    
	function insertarTipoCompromiso($idTipoCompromiso,$descripcion) {
        
    	$sql = "call spInsTipoCompromiso($idTipoCompromiso,'$descripcion',@out_status);";

        $rs = $this->db->Execute($sql);
  
    	return "OK";    
    }
    
	function borrarTipoCompromiso($idTipoCompromiso) {
        
    	$sql = "call spDelTipoCompromiso($idTipoCompromiso,@out_status);";
  	
        $rs = $this->db->Execute($sql);
  
        return "OK";       
    }
    
	function modificarTipoCompromiso($idTipoCompromiso,$descripcion) {
    
    	$sql = "call spModTipoCompromiso($idTipoCompromiso,'$descripcion',@out_status);";
        $rs = $this->db->Execute($sql);

        //$data = $rs->getArray();
        
        //return $data;
        return "OK";      
    	
    }
    
	function buscarDetalleTipoCompromiso($idTipoCompromiso) {
        
        $sql = "call spGetTipoCompromiso($idTipoCompromiso,@out_status);";
        $rs = $this->db->Execute($sql);

        $data = $rs->getArray();
        
        return $data;        
        
    }    
    
}

?>