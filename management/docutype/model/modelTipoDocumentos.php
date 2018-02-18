<?php

class modelTipoDocumentos {

    public function __construct(&$db) {
        $this->db = $db;
    }
    
    function getAllTipoDocumentos() {       
        $sql = "call spGetAllTipoDocumentos(@out_status);";
        $rs = $this->db->Execute($sql);
      	$data = $rs->getArray();

      	return $data;        
        
    }
    
	function insertarTipoDocumento($idTipoDocumento,$descripcion,$siglasDoc) {
        
    	$sql = "call spInsTipoDocumento($idTipoDocumento,'$descripcion','$siglasDoc',@out_status);";
 
        $rs = $this->db->Execute($sql);

        return "OK";    
    }
    
	function borrarTipoDocumento($idTipoDocumento) {
        
    	$sql = "call spDelTipoDocumento($idTipoDocumento,@out_status);";
  	
        $rs = $this->db->Execute($sql);
  
        return "OK";       
    }
    
	function modificarTipoDocumento($idTipoDocumento,$descripcion,$siglasDoc) {
    
    	$sql = "call spModTipoDocumento($idTipoDocumento,'$descripcion','$siglasDoc',@out_status);";
        $rs = $this->db->Execute($sql);

        //$data = $rs->getArray();
        
        //return $data;
        return "OK";      
    	
    }
    
	function buscarDetalleTipoDocumento($idTipoDocumento) {
        
        $sql = "call spGetTipoDocumento($idTipoDocumento,@out_status);";
        $rs = $this->db->Execute($sql);

        $data = $rs->getArray();
        
        return $data;        
        
    }
    
}

?>