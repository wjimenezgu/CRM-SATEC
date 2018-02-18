<?php

class modelproformas {

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
        
    function getAllProformas($idTienda) {
        
        $sql = "call spGetAllProformas($idTienda,@out_status);";
        $rs = $this->db->Execute($sql);
      	$data = $rs->getArray();
		$rs->Close();
      	return $data;        
        
    }

    function buscarEncProforma($codTienda,$idProforma) {
    	
    	$sql = "call spGetEncProforma($codTienda,$idProforma,@out_status);";
//echo $sql;exit;
        $rs = $this->db->Execute($sql);

        $data = $rs->getArray();
        $rs->Close();
        return $data;        
    	
    	
    }    
    
    function buscarDetProfArti($idProforma) {
    	
    	$sql = "call spGetDetProforma($idProforma,@out_status);";
//echo $sql;exit;
        $rs = $this->db->Execute($sql);

        $data = $rs->getArray();
        $rs->Close();
        return $data;        
    	
    	
    }
    
        function getTiendaLocal($userName) {
        
        $sql = "call spGetTiendaLocal('$userName', @codtienda , @pNombreTiendaLocal, @out_status);";
        $this->db->Execute($sql);        
        
        $sql2 = "SELECT @codtienda as codTienda, @pNombreTiendaLocal as nameTienda";
        $rs = $this->db->Execute($sql2);        
        
        $data = $rs->getArray();
        
        //$codTienda = $rs->fields["codTienda"];
        
        return $data;
    }
    
    function getDatosTienda($idTienda){
    	$sql = "call spGetDatosTienda($idTienda,@out_status);";
    	$rs = $this->db->Execute ($sql);
    	$data = $rs->getArray();
    	$rs->Close();
    	return $data;
    }
    

    function buscarLineasPie($tipoLinea){
        $sql = "call spGetLineasImpre('$tipoLinea',@out_status);";

        $rs = $this->db->Execute ($sql);
        $data = $rs->getArray();
        $rs->Close();
        return $data;
    }
        
}

?>