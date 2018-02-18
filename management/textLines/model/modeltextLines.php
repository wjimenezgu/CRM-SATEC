<?php

class modeltextLines {

    public function __construct(&$db) {
        $this->db = $db;
    }
    
    function getAlltextLines() {
        
        $sql = "call spGetAlltextLines(@out_status);";
        $result = $this->db->Execute($sql);
        
      	$alltextLines = $result->getArray();
		$result->Close();
        $sql2 = "SELECT @out_status as message";
        $rs = $this->db->Execute($sql2);        
        
        $status = $rs->getArray();
        
        if($status[0]["message"] == "OK"){
            $data = $alltextLines;
        }else{
            $data = array();
        }       		
      	return $data;        
        
    }

    function gettextLines($id) {
        $sql = "call spGettextLines($id,@out_status);";

        $result = $this->db->Execute($sql);

        $detailtextLines = $result->getArray();
        $result->Close();

        $sql2 = "SELECT @out_status as message";
        $rs = $this->db->Execute($sql2);        
        
        $status = $rs->getArray();
        
        if($status[0]["message"] == "OK"){
            $data = $detailtextLines;
        }else{
            $data = array();
        }               
        return $data;               
    }
    
    function updatetextLines($id,$descripcion,$linea1,$linea2,$linea3) {
    
    	$sql = "call spModtextLines($id,'$descripcion','$linea1','$linea2','$linea3',@out_status);";
        $result = $this->db->Execute($sql);
		$result->Close();
		
        $sql2 = "SELECT @out_status as message";
        $rs = $this->db->Execute($sql2);        
        
        $status = $rs->getArray();
        
        if($status[0]["message"] == "OK"){
            return "OK"; 
        }else{
           return $status[0]["message"];
        }       		         	
    }
    
	function deletetextLines($id) {
        
    	$sql = "call spDeltextLines($id,@out_status);";
    	$result = $this->db->Execute($sql);
        $result->Close();
        $sql2 = "SELECT @out_status as message";
        $rs = $this->db->Execute($sql2);        
        
        $status = $rs->getArray();
        
        if($status[0]["message"] == "OK"){
            return "OK"; 
        }else{
           return $status[0]["message"];
        }       		       	
  
    }

    
	function inserttextLines($id,$descripcion,$linea1,$linea2,$linea3) {
        
    	$sql = "call spInstextLines($id,'$descripcion','$linea1','$linea2','$linea3',@out_status);";
         
        $result = $this->db->Execute($sql);
        $result->Close();
        $sql2 = "SELECT @out_status as message";
        $rs = $this->db->Execute($sql2);        
        
        $status = $rs->getArray();
        
        if($status[0]["message"] == "OK"){
            return "OK"; 
        }else{
           return $status[0]["message"];
        }       		    
    } 
}

?>