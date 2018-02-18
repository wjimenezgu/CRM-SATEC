<?php

class modelcobrar {

    public function __construct(&$db) {
        $this->db = $db;
    }

    // Funcion para apagar las opciones que el usuario no puede ver.
    function getAllOptHide($userName) {
    	$sql = "call spGetOptHide('$userName',@out_status);";
    	$rs = $this->db->Execute($sql);
    	$data = $rs->getArray();
    	$rs->Close();
    	return $data;
    }
        
    function getAllFacturas($idTienda) {
        
        $sql = "call spGetAllFacturasDife($idTienda,@out_status);";
        $rs = $this->db->Execute($sql);
      	$data = $rs->getArray();
		$rs->Close();
      	return $data;        
        
    }
    
   function getAllFormapago(){
   		$sql = "call spGetAllFormaPago(@out_status);";
   		$rs = $this->db->Execute($sql);
   		$data = $rs->getArray();
   		$rs->Close();
   		return $data;
   }

    function buscarEncFact($codTienda,$idFactura) {
    	
    	$sql = "call spGetEncFacturaImp($codTienda,$idFactura,@out_status);";
//echo $sql;exit;
        $rs = $this->db->Execute($sql);

        $data = $rs->getArray();
        $rs->Close();
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
    
        function getTiendaLocal($userName) {
        
        $sql = "call spGetTiendaLocal('$userName', @codtienda , @pNombreTiendaLocal, @out_status);";
        $this->db->Execute($sql);        
        
        $sql2 = "SELECT @codtienda as codTienda, @pNombreTiendaLocal as nameTienda";
        $rs = $this->db->Execute($sql2);        
        
        $data = $rs->getArray();
        $rs->Close();
        //$codTienda = $rs->fields["codTienda"];
        
        return $data;
    }
    
    function impreFactura($codTienda,$idFactura,$esManual,$numFactuManual,$formaPago1,$autorizacion1,$montoPago1,$formaPago2,$autorizacion2,$montoPago2,$formaPago3,$autorizacion3,$montoPago3,$formaPago4,$autorizacion4,$montoPago4) {
    	 
    	$sql = "call spImpreFacturaDife($codTienda,$idFactura,'$esManual','$numFactuManual','$formaPago1','$autorizacion1',$montoPago1,'$formaPago2','$autorizacion2',$montoPago2,'$formaPago3','$autorizacion3',$montoPago3,'$formaPago4','$autorizacion4',$montoPago4,@out_status);";
   //echo $sql;exit;
    	$rs = $this->db->Execute($sql);
  		// la instruccion ejecutada no retorna un recordset, pues es solo tiene instruciones de insert, delete o update
  		// por lo que no hace falta ejecutar la siguiente instruccion.
  		// esa es solo necesaria cuando lo que se retorna es un recordset.
  		// se deja aqui como referencia, pues se ha venido copiando los llamados coomo si todos fueran igual.
    	//$data = $rs->getArray();

    	$rs->Close();
   	
    	$sql = "SELECT @out_status as message";
    	$rs = $this->db->Execute($sql);

    	$status = $rs->getArray();
    	$rs->Close();
    	 
    	$message = $status[0]["message"];

    	return $message;   	 
    	 
    }
    
    
    function eliminaFactura($codTienda,$idFactura) {
    
    	$sql = "call spEliminaFactura($codTienda,$idFactura,@out_status);";
    	//echo $sql;exit;
    	$rs = $this->db->Execute($sql);
    	// la instruccion ejecutada no retorna un recordset, pues es solo tiene instruciones de insert, delete o update
    	// por lo que no hace falta ejecutar la siguiente instruccion.
    	// esa es solo necesaria cuando lo que se retorna es un recordset.
    	// se deja aqui como referencia, pues se ha venido copiando los llamados coomo si todos fueran igual.
    	//$data = $rs->getArray();
    
    	$rs->Close();
    
    	$sql = "SELECT @out_status as message";
    	$rs = $this->db->Execute($sql);
    
    	$status = $rs->getArray();
    	$rs->Close();
    
    	$message = $status[0]["message"];
    
    	return $message;
    
    }
    
    function getNotaCr($idTienda,$numDocuNotaCr) {
    
    	$sql = "call spGetNotaCr($idTienda,'$numDocuNotaCr',@out_idNota,@out_saldoNota,@out_status);";
    	//echo $sql;exit;
    	$rs = $this->db->Execute($sql);
    	// la instruccion ejecutada no retorna un recordset, pues es solo tiene instruciones de insert, delete o update
    	// por lo que no hace falta ejecutar la siguiente instruccion.
    	// esa es solo necesaria cuando lo que se retorna es un recordset.
    	// se deja aqui como referencia, pues se ha venido copiando los llamados coomo si todos fueran igual.
    	//$data = $rs->getArray();
    
    	$rs->Close();
    
    	$sql = "SELECT @out_idNota as idNota, @out_saldoNota as saldoNota, @out_status as message";
    	$rs = $this->db->Execute($sql);
    
    	$status = $rs->getArray();
    	$rs->Close();
    	
    	$val = $status[0]["message"];
    	if ($val == "OK"){
    		$val = 1;
    	}else{
    		$val = 0;
    	}
    	
    	$message = $val.'|'.$status[0]["idNota"].'|'.$status[0]["saldoNota"];
    
    	return $message;
    
    }
    
    
    
    function getDatosTienda($idTienda){
    	$sql = "call spGetDatosTienda($idTienda,@out_status);";

    	$rs = $this->db->Execute ($sql);
    	$data = $rs->getArray();
    	$rs->Close();
    	return $data;
    }


    function buscarLineasPie($tipoLinea){
        $sql = "call spGetLineasImpre('$tipoLinea',@out_status);";

        $rs = $this->db->Execute ($sql);
        $data = $rs->getArray();
        $rs->Close();
        return $data;
    }
    
        
}

?>