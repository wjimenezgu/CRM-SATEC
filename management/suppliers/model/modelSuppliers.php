<?php

class modelSuppliers {

    public function __construct(&$db) {
        $this->db = $db;
    }
    
    function getAllSuppliers() {
        
        $sql = "call spGetAllProveedores(@out_status);";
        $rs = $this->db->Execute($sql);
        
      	$data = $rs->getArray();

      	return $data;        
        
    }

    function buscarDetalleProveedor($idProveedor) {
        $sql = "call spGetProveedor($idProveedor,@out_status);";

        $result = $this->db->Execute($sql);

        $detalleProveedor = $result->getArray();
        $result->Close();

        $sql2 = "SELECT @out_status as message";
        $rs = $this->db->Execute($sql2);        
        
        $status = $rs->getArray();
        
        if($status[0]["message"] == "OK"){
            $data = $detalleProveedor;
        }else{
            $data = array();
        }       
        
        return $data;        
        
    }
    
    function modificarProveedor($idProveedor,$nombreProveedor,$cedulajuridica,$direccion,$pais,
                                $apartado,$zipcode,$telefono,$fax,$obligatoriocosto,$idOpcionPago) {
    
    	$sql = "call spModProveedor($idProveedor,'$nombreProveedor','$cedulajuridica','$direccion','$pais','$apartado','$zipcode','$telefono','$fax','$obligatoriocosto',$idOpcionPago,@out_status);";
        $rs = $this->db->Execute($sql);

        return "OK";      
    	
    }
    
function borrarProveedor($idProveedor) {
        
    	$sql = "call spDelProveedor($idProveedor,@out_status);";
        $rs = $this->db->Execute($sql);

        return "OK";       
    }

    
function insertarProveedor($idProveedor,$nombreProveedor,$cedulajuridica,$direccion,$pais,
                                $apartado,$zipcode,$telefono,$fax,$obligatoriocosto,$idOpcionPago) {
        

		$sql = "call spInsProveedor('$nombreProveedor','$cedulajuridica','$direccion','$pais', '$apartado','$zipcode','$telefono','$fax','$obligatoriocosto',$idOpcionPago,@out_status);";
	//	echo $sql;exit;         
        $rs = $this->db->Execute($sql);

    	return "OK";    
    }
    
function getAllPaymentsOptions() {

        $sqlx        = "call spGetAllOpcionesPago(@out_status);"; 

        $result      = $this->db->Execute($sqlx);
        $listOptPago = $result->getArray();     
        $result->Close();
          
        $sql2 = "SELECT @out_status as message";
        $rs = $this->db->Execute($sql2);        
        
        $status = $rs->getArray();
        
        if($status[0]["message"] == "OK"){
            $data = $listOptPago;
        }else{
            $data = array();
        }
        
        return $data;          	
      	
	}

    
}

?>