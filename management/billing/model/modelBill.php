<?php

class modelBill{
   	public function __construct(&$db) {
		$this->db = &$db;
	}
        
        public function inCliente($nombre, $telefono, $correo){
            
            $sql = "call spInsCliente('$nombre', '$telefono', '$correo', @out_status, @out_idCliente);";
             
                $rs = $this->db->Execute($sql);
                $rs->Close();
                
		$sql = "SELECT @out_idCliente as idCliente, @out_status as message";
            $rs = $this->db->Execute($sql);                
            $status = $rs->getArray();
            $rs->Close();
            
            $message = $status[0]["message"];
            if($message == "OK"){
            $idCliente = $status[0]["idCliente"];
                    
            }
            
            return $idCliente;
        }
        
       
        
        public function inFactura($cliente, $tienda, $vendedor, $subtotal, $descuento, $impuesto, $total){
            
            $sql = "call spInsFactura($cliente, $tienda,'$vendedor','$subtotal',$descuento,'$impuesto','$total',1,@out_status,NULL,NULL);";
            
            $rs = $this->db->Execute($sql);
            $rs->Close();

            $sql = "SELECT @out_status as message";
            $rs = $this->db->Execute($sql);                
            $status = $rs->getArray();
            $rs->Close();

            $message = $status[0]["message"];
            return $message;  
        }
        
        public function getCliente($nombre){
            $sql = "call spGetCliente('$nombre',@out_status);";
            $rs = $this->db->Execute ($sql);
		$data = $rs->getArray();
                $rs->Close();
		return $data;
        }
        
        public function InDetalleFac($item,$cant,$totPrice){
            
            $sql = "call spInsDetalleFac('$item',$cant,@out_status,'$totPrice');";
            
           $rs = $this->db->Execute($sql);
        $rs->Close();
        
        $sql = "SELECT @out_status as message";
        $rs = $this->db->Execute($sql);                
        $status = $rs->getArray();
        $rs->Close();

        $message = $status[0]["message"];
        return $message; 
        }
        
        public function getAllClientes(){
            $sql = "call spGetAllClientes(@out_status);";
            $rs = $this->db->Execute ($sql);
		$data = $rs->getArray();
                $rs->Close();
		return $data;
        }
        
        public function getAllTiendas(){
            $sql = "call spGetAllTiendas(@out_status);";
            $rs = $this->db->Execute ($sql);
		$data = $rs->getArray();
                $rs->Close();
		return $data;
        }
        
        public function getAllVendedores(){
            $sql = "call spGetAllVendedores(@out_status);";
            $rs = $this->db->Execute ($sql);
		$data = $rs->getArray();
                $rs->Close();
		return $data;
        }
        
        public function getAllItems(){
            $sql = "call spGetAllArticulos(@out_status);";
            $rs = $this->db->Execute ($sql);
		$data = $rs->getArray();
                $rs->Close();
		return $data;
        }
        
        public function getItem($idArticulo){
                $sql = "call spGetArticulo($idArticulo,@out_status);";
		$rs = $this->db->Execute ($sql);
		$data = $rs->getArray();
		return $data;
        }
        
        public function getItemDesc($desc){
            $sql = "call spGetArticuloDesc($desc,@out_status)";
            	$rs = $this->db->Execute ($sql);
		$data = $rs->getArray();
		return $data;
        }
        
        public function getItemDescAll($sent){
            $sql = "call spGetItemDescAll($sent,@out_status)";
                $rs = $this->db->Execute ($sql);
		$data = $rs->getArray();
		return $data;
        }
}


?>

