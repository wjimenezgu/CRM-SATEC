<?php

class modelconsultas{
   	public function __construct(&$db) {
		$this->db = &$db;
	}

	// Funcion para apagar las opciones que el usuario no puede ver.
	function getAllOptHide($userName) {
		$sql = "call spGetOptHide('$userName',@out_status);";
		$rs = $this->db->Execute($sql);
		$data = $rs->getArray();
		$rs->Close();
		return $data;
	}
	
	
	function GetFieldHide($userName,$fieldName) {
	
		$sql = "call spGetFieldHide('$userName', '$fieldName',@SiNo, @out_status);";
		$rs = $this->db->Execute($sql);
		$rs->Close();
	
		$sql = "SELECT @SiNo as SiNo, @out_status as message";
		$rs = $this->db->Execute($sql);
		$status = $rs->getArray();
		$rs->Close();
	
		$message = $status[0]["message"];
	
		if($message == "OK"){
			$data = $status[0]["SiNo"];
		}else{
			$data = 'N';
		}
	
		return $data;
	}
	 

    function getAllTiendas(){
            $sql = "call spGetAllTiendas(@out_status);";
            $rs = $this->db->Execute ($sql);
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
    function buscarExistencias($tienda,$fechaCorte,$criterio, $texto) {
    
    	$descripcion = "NULL";
    	$idCodigo    = "NULL";
    	$codigoExterno = "NULL";
    
    	if ($criterio == "nombre"){
    		if (strlen($texto) != 0) {
    			$descripcion = "'$texto'";
    		}
    	}elseif($criterio == "codigo") {
    		if (strlen($texto) != 0) {
    			$idCodigo    = "'$texto'";
    		}
    	}else {
    		if (strlen($texto) != 0) {
    			$codigoExterno = "'$texto'";
    		}
    	}
    
    	$sql = "call spGetArtiExistenciasFecha('$criterio',$tienda,'$fechaCorte',$idCodigo,$descripcion,$codigoExterno,@out_status);";
 	//  echo $sql;exit;
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
    
    function buscarDetFactArti($idFactura) {
    	 
    	$sql = "call spGetDetFactura($idFactura,@out_status);";
    	//echo $sql;exit;
    	$rs = $this->db->Execute($sql);
    
    	$data = $rs->getArray();
    	$rs->Close();
    	return $data;
    	 
    	 
    }
    
    function buscarDetFactPagos($idFactura) {
    
    	$sql = "call spGetFacPagos($idFactura,@out_status);";
    	//echo $sql;exit;
    	$rs = $this->db->Execute($sql);
    
    	$data = $rs->getArray();
    	$rs->Close();
    
    	return $data;
    
    
    } 
    
    function getAllFacturas($idTienda) {
    
    	$sql = "call spGetAllFacturasGen($idTienda,@out_status);";
    	$rs = $this->db->Execute($sql);
    	$data = $rs->getArray();
    	$rs->Close();
    	return $data;
    
    }
        
}
?>

