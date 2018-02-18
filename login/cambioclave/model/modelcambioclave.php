<?php

class modelCambioClave {

    public function __construct(&$db) {
        $this->db = $db;
    }
        
	function cambioClave($userName,$claveNueva,$claveActual,$hostName) {
        
    	$sql = "call spChangePwd('$userName','$claveNueva','$claveActual','$hostName',@out_status);";
 
        $rs = $this->db->Execute($sql);
        $rs->Close();
        
        $sql = "SELECT @out_status as message";
        $rs = $this->db->Execute($sql);                
        $status = $rs->getArray();
        $rs->Close();

        $message = $status[0]["message"];
        return $message;          
    }

    function getAllOptHide($userName) {    	  	
        $sql = "call spGetOptHide('$userName',@out_status);";
        $rs = $this->db->Execute($sql);
      	$data = $rs->getArray();
		$rs->Close();
    	return $data;        
    }    
    
}

?>