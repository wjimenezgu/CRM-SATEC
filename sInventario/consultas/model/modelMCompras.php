<?php

class modelMCompras {
    
    public function __construct(&$db) {       
        $this->db = $db;
    }
    function getDatosTienda($idTienda){
    	$sql = "call spGetDatosTienda($idTienda,@out_status);";
    	$rs = $this->db->Execute ($sql);
    	$data = $rs->getArray();
    	$rs->Close();
    	return $data;
    }
    
    function getAllOptHide($userName) {    	  	
        $sql = "call spGetOptHide('$userName',@out_status);";
        $rs = $this->db->Execute($sql);
      	$data = $rs->getArray();
		$rs->Close();
    	return $data;        
    }
    
  

    function getFactuPeriodo($idTienda,$fechaI,$fechaF){
    	$sql = "call spGetFactuPeriodo($idTienda,'$fechaI','$fechaF',@out_status);";
    	$rs = $this->db->Execute ($sql);
    	$data = $rs->getArray();
    	$rs->Close();
    	return $data;
    }
    
    
    function getTotalesFactuPeriodo($idTienda,$fechaI,$fechaF){
    	$sql = "call spGetTotalesFactuPeriodo($idTienda,'$fechaI','$fechaF',@out_status);";
    	$rs = $this->db->Execute ($sql);
    	$data = $rs->getArray();
    	$rs->Close();
    	return $data;
    }
    
    function getSoloTotalesFactuPeriodo($idTienda,$fechaI,$fechaF){
    	$sql = "call spGetSoloTotalesFactuPeriodo($idTienda,'$fechaI','$fechaF',@out_status);";
    	$rs = $this->db->Execute ($sql);
    	$data = $rs->getArray();
    	$rs->Close();
    	return $data;
    }
    
    function getNotaPeriodo($idTienda,$fechaI,$fechaF){
    	$sql = "call spGetNotaPeriodo($idTienda,'$fechaI','$fechaF',@out_status);";
    	$rs = $this->db->Execute ($sql);
    	$data = $rs->getArray();
    	$rs->Close();
    	return $data;
    }
    
    function getTotalesNotaPeriodo($idTienda,$fechaI,$fechaF){
    	$sql = "call spGetTotalesNotaPeriodo($idTienda,'$fechaI','$fechaF',@out_status);";
    	$rs = $this->db->Execute ($sql);
    	$data = $rs->getArray();
    	$rs->Close();
    	return $data;
    }
    
    
    function getAllItems() {
    
    	$sqlx       = "call spGetItemsList(@out_status);";
    	$result     = $this->db->Execute($sqlx);
    	$allItems = $result->getArray();
    
    	$result->Close();
    
    	$sql2 = "SELECT @out_status as message";
    	$rs = $this->db->Execute($sql2);
    	$status = $rs->getArray();
    
    	if($status[0]["message"] == "OK"){
    		$data = $allItems;
    	}else{
    		$data = array();
    	}
    
    	return $data;
    
    }
    
    function buscarProducto($criterio, $texto) {
    
    	$descripcion = "NULL";
    	$idCodigo    = "NULL";
    	$codigoExterno = "NULL";
    
    	if ($criterio == "nombre"){
    		$descripcion = "'$texto'";
    	}elseif($criterio == "codigo") {
    		$idCodigo    = "'$texto'";
    	}else {$codigoExterno = "'$texto'";
    	}
    
    	$sql = "call spGetArticuloFiltro($idCodigo,$descripcion,$codigoExterno,@out_status);";
    
    	$rs = $this->db->Execute($sql);
    
    	$data = $rs->getArray();
    
    	return $data;
    
    }
    
    
    
    function buscarDetalleItem($idItem) {
    	$sql = "call spGetInfoItem('$idItem',@out_status);";
    
    	$result = $this->db->Execute($sql);
    
    	$detalleItem = $result->getArray();
    	$result->Close();
    
    	$sql2 = "SELECT @out_status as message";
    	$rs = $this->db->Execute($sql2);
    
    	$status = $rs->getArray();
    
    	if($status[0]["message"] == "OK"){
    		$data = $detalleItem;
    	}else{
    		$data = array();
    	}
    
    	return $data;
    
    }
    
    
    function buscarDetalleItemMovi($idItem) {
    	$sql = "call spGetInfoItemMovi('$idItem',@out_status);";
    
    	$result = $this->db->Execute($sql);
    
    	$detalleItem = $result->getArray();
    	$result->Close();
    
    	$sql2 = "SELECT @out_status as message";
    	$rs = $this->db->Execute($sql2);
    
    	$status = $rs->getArray();
    
    	if($status[0]["message"] == "OK"){
    		$data = $detalleItem;
    	}else{
    		$data = array();
    	}
    
    	return $data;
    }
    
    function buscarDetItemMoviT($idItem,$idTienda) {
    	$sql = "call spGetDetItemMoviT('$idItem',$idTienda,@out_status);";
    	// echo $sql;exit;
    	$result = $this->db->Execute($sql);
    
    	$detalleItem = $result->getArray();
    	$result->Close();
    
    	$sql2 = "SELECT @out_status as message";
    	$rs = $this->db->Execute($sql2);
    
    	$status = $rs->getArray();
    
    	if($status[0]["message"] == "OK"){
    		$data = $detalleItem;
    	}else{
    		$data = array();
    	}
    
    	return $data;
    
    }
    
    
}

?>