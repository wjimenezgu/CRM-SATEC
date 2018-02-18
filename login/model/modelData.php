<?php

class modelData {

	// funciones base que debe tener todo model
    public function __construct(&$db) {
        $this->db = $db;
    }
    
    
    function getAllData() {
        
        $sql = "call spGetAllUsuarios(@out_status);";
        $rs = $this->db->Execute($sql);
      	$data = $rs->getArray();
		$rs->Close();
      	return $data;        
        
    }
           
    
	function buscarDetalleData($usuario) {
        
        $sql = "call spGetUsuario('$usuario',@out_status);";
        $rs = $this->db->Execute($sql);

        $data = $rs->getArray();
        $rs->Close();
        return $data;        
        
    }

	function buscarDetalleUsuarioTiendas($usuario) {
        
        $sql = "call spGetAllUsuarioTiendas('$usuario',@out_status);";
        $rs = $this->db->Execute($sql);

        $data = $rs->getArray();
        $rs->Close();
        return $data;        
        
    }   
    
    // Para leer otras tablas si se necesista
    
    function getAllTiendasUsuario($usuario) {
        
        $sql = "call spGetAllUsuarioTiendas('$usuario',@out_status);";
   
        $rs = $this->db->Execute($sql);
      	$data = $rs->getArray();
		$rs->Close();
      	return $data;        
        
    }    
    
}

?>