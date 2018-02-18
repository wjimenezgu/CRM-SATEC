<?php

class modelqueriesorder {

    public function __construct(&$db) {
        $this->db = $db;
    }
    
    function buscarPedidos($criterio, $texto) {
           
        $sql = "call spBuscaDetPedido($criterio,'$texto',@out_status);";

        $rs = $this->db->Execute($sql);

        $data = $rs->getArray();
        
        return $data;        
       
    }
    
    
   function getEventosPedido($idPedido) {
        $sqlx        = "call spGetAllPedidoEventos($idPedido, @out_status);"; 

        $result      = $this->db->Execute($sqlx);
        $listEventos = $result->getArray();     
        $result->Close();
          
        $sqlx = "SELECT @out_status as message";
        $rs = $this->db->Execute($sqlx);        
        
        $status = $rs->getArray();
        
        if($status[0]["message"] == "OK"){
            $data = $listEventos;
        }else{
            $data = array();
        }
        
        return $data;         
    }

   function getEventosPedidoSegui($idPedido) {
        $sqlx        = "call spGetEventosPedidoSegui($idPedido, @out_status);"; 

        $result      = $this->db->Execute($sqlx);
        $listEventos = $result->getArray();     
        $result->Close();
          
        $sqlx = "SELECT @out_status as message";
        $rs = $this->db->Execute($sqlx);        
        
        $status = $rs->getArray();
        
        if($status[0]["message"] == "OK"){
            $data = $listEventos;
        }else{
            $data = array();
        }
        
        return $data;         
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