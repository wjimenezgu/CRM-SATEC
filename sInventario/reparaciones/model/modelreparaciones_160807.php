<?php

class modelreparaciones{
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
    	       
	function getAllReparaciones($idTienda,$criterio){
            $sql = "call spGetAllReparaciones('$idTienda','$criterio',@out_status);";
        
            $rs = $this->db->Execute ($sql);
			$data = $rs->getArray();
            $rs->Close();
			return $data;
    }
    
    
    function buscarDetalleReparacion($idTienda,$idReparacion) {
    
    	$sql = "call spGetEncReparacion($idTienda,$idReparacion,@out_status);";

    	$rs = $this->db->Execute($sql);
    
    	$data = $rs->getArray();
    	$rs->Close();
    	return $data;
    
    }

    function buscarDetalleRepaFactu($idTienda,$idReparacion) {
    
    	$sql = "call spGetEncRepaFactu($idTienda,$idReparacion,@out_status);";
    
    	$rs = $this->db->Execute($sql);
    
    	$data = $rs->getArray();
    	$rs->Close();
    	return $data;
    
    }    
    
    function insertarReparacion($idTienda,$vendedor,$idCliente,$fechaRecibido,$numDocu,$subTotal,$porceDescuento,$descuento,
    		                    $impuesto,
    		                    $equipo,$accesorio,$marca,$modelo,$serie,$garantia,$numFacGarantia,$problema,$obs,$adelanto,
    		                    $manoDeObra,$totalReparacion,$finRepa) {    	
    	
    	$sql = "call spInsEncReparaciones($idTienda,'$vendedor',$idCliente,'$fechaRecibido','$numDocu','$subTotal','$porceDescuento',
    	                                  '$descuento','$impuesto','$equipo','$accesorio','$marca','$modelo','$serie','$garantia',
    	                                  '$numFacGarantia','$problema','$obs',
    	                                  '$adelanto','$manoDeObra','$totalReparacion','$finRepa',@out_idReparacion,@out_status);";    	
    	//echo $sql;exit;
    	$rs = $this->db->Execute($sql);
    	$rs->Close();
    	 
    	$sql2 = "SELECT @out_idReparacion as idReparacion, @out_status as message";
    	$rs = $this->db->Execute($sql2);
    	$status = $rs->getArray();
    	$rs->Close();
    	
    	$result = $status[0]["message"];
    	return $result;
    	 
    }      

    
    function modificarReparacion($idReparacion,$idTienda,$vendedor,$idCliente,$fechaRecibido,$numDocu,$subTotal,$porceDescuento,$descuento,
    		$impuesto,
    		$equipo,$accesorio,$marca,$modelo,$serie,$garantia,$numFacGarantia,$problema,$obs,$adelanto,
    		$manoDeObra,$totalReparacion,$finRepa) {
    	 
    	$sql = "call spModEncReparaciones($idReparacion,$idTienda,'$vendedor',$idCliente,'$fechaRecibido','$numDocu','$subTotal','$porceDescuento',
    	'$descuento','$impuesto','$equipo','$accesorio','$marca','$modelo','$serie','$garantia','$numFacGarantia',
    	'$problema','$obs',
    	'$adelanto','$manoDeObra','$totalReparacion','$finRepa',@out_status);";
  // echo $sql;exit;
    	$rs = $this->db->Execute($sql);
    	$rs->Close();
    
    	$sql2 = "SELECT @out_status as message";
    	$rs = $this->db->Execute($sql2);
        	$status = $rs->getArray();
        	$rs->Close();
        	 
        	$result = $status[0]["message"];
        	return $result;
    
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
    
    
    
    function getAllClientes(){
    	$sql = "call spGetAllClientesFac(@out_status);";
    	$rs = $this->db->Execute ($sql);
    	$data = $rs->getArray();
    	$rs->Close();
    	return $data;
    }

    function getDatosTienda($idTienda){
    	$sql = "call spGetDatosTienda($idTienda,@out_status);";
    	$rs = $this->db->Execute ($sql);
    	$data = $rs->getArray();
    	$rs->Close();
    	return $data;
    }    
    
    function getAllTiendas(){
    	$sql = "call spGetAllTiendas(@out_status);";
    	$rs = $this->db->Execute ($sql);
    	$data = $rs->getArray();
    	$rs->Close();
    	return $data;
    }
    
    function getAllEventos() {
    
    	$sqlx        = "call spGetAllEventosRep(@out_status);";
    
    	$result      = $this->db->Execute($sqlx);
    	$listEventos = $result->getArray();
    	$result->Close();
    
    	$sql2 = "SELECT @out_status as message";
    	$rs = $this->db->Execute($sql2);
    
    	$status = $rs->getArray();
    
    	if($status[0]["message"] == "OK"){
    		$data = $listEventos;
    	}else{
    		$data = array();
    	}
    
    	return $data;
    }
    
    function saveEvento($idReparacion, $idEvento, $comentario,$vendedor,$fecEvento) {
    
    	$sql      = "call spInsRepEvenSegui($idReparacion, $idEvento, '$comentario', '$vendedor','$fecEvento',@pfecEvento, @puserIns, @out_status);";
    	$result   = $this->db->Execute($sql);
    	//$idInsert = $this->db->Insert_ID();
    	$result->Close();
    
    	$sql2   = "SELECT @pfecEvento as fecEvento, @puserIns as userIns, @out_status as message";
    	$rs     = $this->db->Execute($sql2);
    	$status = $rs->getArray();
    	$rs->Close();
    
    	if($status[0]["message"] == "OK"){
            $message = $status[0];
        }else{
            $message = 0;
    }
    
    return $message;
    
    }
    
    function getEventosReparacion($idReparacion) {
    	$sqlx        = "call spGetAllReparacionEventos($idReparacion, @out_status);";
    
    	$result      = $this->db->Execute($sqlx);
    	$listEventos = $result->getArray();
    	$result->Close();
    
    	$sql2 = "SELECT @out_status as message";
    	$rs = $this->db->Execute($sql2);
    
    	$status = $rs->getArray();
    
    	if($status[0]["message"] == "OK"){
    	$data = $listEventos;
    }else{
    $data = array();
    }
    
    return $data;
    }

    function getAllVendedores(){
    	$sql = "call spGetAllVendedores(@out_status);";
    	$rs = $this->db->Execute ($sql);
    	$data = $rs->getArray();
    	$rs->Close();
    	return $data;
    }
    
    function inCliente($nombre, $telefono, $correo,$contacto,$vendedor){
    
    	$sql = "call spInsClienteFac('$nombre', '$telefono', '$correo','$contacto','$vendedor',@out_idCliente,@out_status);";
    
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
    	//return arrary ($message,$idCliente);
    	return $status;
    }
    
    function updCliente($idCliente,$nombre, $telefono, $correo,$contacto,$vendedor){
    
    	$sql = "call spUpdClienteFac($idCliente,'$nombre', '$telefono', '$correo','$contacto','$vendedor',@out_status);";
    
    	$rs = $this->db->Execute($sql);
    	$rs->Close();
    
    	$sql = "SELECT @out_status as message";
    	$rs = $this->db->Execute($sql);
    	$status = $rs->getArray();
    	$rs->Close();
    	 
    	return $status;
    }
    
    function validaVendedor($Vendedor,$ClaveVendedor){
    	$sql = "call spValidaVendedor('$Vendedor','$ClaveVendedor',@out_esValido,@out_status);";
    	$rs = $this->db->Execute ($sql);
    	$rs->Close();
    	
    	$sql = "SELECT @out_esValido as esValido, @out_status as message";
    	$rs = $this->db->Execute($sql);
    	$status = $rs->getArray();
    	$rs->Close();
    	
    	//return arrary (message,esValido);
    	return $status;    	

    }

    function facturaRepa($idTienda,$idReparacion) {
    
    	$sql = "call spFacturaRepa($idTienda,$idReparacion,@out_status);";
	   	$rs = $this->db->Execute($sql);
    	$rs->Close();
    	
    	$sql = "SELECT @out_status as message";
    	$rs = $this->db->Execute($sql);
    	$status = $rs->getArray();
    	$rs->Close();
    	 
    	return $status;
    
    }
    
    function facturaRepaAdelanto($idTienda,$idReparacion) {
    
    	$sql = "call spFacturaRepaAdelanto($idTienda,$idReparacion,@out_status);";
    	$rs = $this->db->Execute($sql);
    	$rs->Close();
    	 
    	$sql = "SELECT @out_status as message";
    	$rs = $this->db->Execute($sql);
    	$status = $rs->getArray();
    	$rs->Close();
    
    	return $status;
    
    }
}
?>

