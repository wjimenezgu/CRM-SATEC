<?php

class modelShippingAddress {

    public function __construct(&$db) {
        $this->db = $db;
    }
    
    function getAllShippingAddress() {
        
        $sql = "call spGetAllShippingAddress(@out_status);";
        $result = $this->db->Execute($sql);
        
      	$allShippingAddress = $result->getArray();
		$result->Close();
        $sql2 = "SELECT @out_status as message";
        $rs = $this->db->Execute($sql2);        
        
        $status = $rs->getArray();
        
        if($status[0]["message"] == "OK"){
            $data = $allShippingAddress;
        }else{
            $data = array();
        }       		
      	return $data;        
        
    }

    function getShippingAddress($id) {
        $sql = "call spGetShippingAddress($id,@out_status);";

        $result = $this->db->Execute($sql);

        $detailShippingAddress = $result->getArray();
        $result->Close();

        $sql2 = "SELECT @out_status as message";
        $rs = $this->db->Execute($sql2);        
        
        $status = $rs->getArray();
        
        if($status[0]["message"] == "OK"){
            $data = $detailShippingAddress;
        }else{
            $data = array();
        }               
        return $data;               
    }
    
    function updateShippingAddress($id,$descripcion,$linea1,$linea2,$linea3) {
    
    	$sql = "call spModShippingAddress($id,'$descripcion','$linea1','$linea2','$linea3',@out_status);";
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
    
	function deleteShippingAddress($id) {
        
    	$sql = "call spDelShippingAddress($id,@out_status);";
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

    
	function insertShippingAddress($id,$descripcion,$linea1,$linea2,$linea3) {
        
    	$sql = "call spInsShippingAddress($id,'$descripcion','$linea1','$linea2','$linea3',@out_status);";
         
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