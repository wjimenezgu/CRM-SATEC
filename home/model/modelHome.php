<?php

class modelHome {
    
    public function __construct(&$db) {       
        $this->db = $db;
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