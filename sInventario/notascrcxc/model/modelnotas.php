<?php

class modelnotas {

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
        
    function getAllNotas($idTienda) {
        
        $sql = "call spGetAllNotasCxCGen($idTienda,@out_status);";
        $rs = $this->db->Execute($sql);
      	$data = $rs->getArray();
		$rs->Close();
      	return $data;        
        
    }

    function buscarEncNota($codTienda,$idNota) {
    	
    	$sql = "call spGetEncNotaCxC($codTienda,$idNota,@out_status);";
// echo $sql;exit;
        $rs = $this->db->Execute($sql);

        $data = $rs->getArray();
        $rs->Close();
        return $data;        
    	
    	
    }    
    
    function buscarDetNotaArti($idNota) {
    	
    	$sql = "call spGetDetArtiNotaCxC($idNota,@out_status);";
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
        
        //$codTienda = $rs->fields["codTienda"];
        
        return $data;
    }



    function buscarEncNotaImp($codTienda,$idNota) {
        
        $sql = "call spGetEncNotaImpCxC($codTienda,$idNota,@out_status);";
//echo $sql;exit;
        $rs = $this->db->Execute($sql);

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
    
    
    function buscarLineasPie($tipoLinea){
    	$sql = "call spGetLineasImpre('$tipoLinea',@out_status);";
    
    	$rs = $this->db->Execute ($sql);
    	$data = $rs->getArray();
    	$rs->Close();
    	return $data;
    }
    
    function anulaFacturaCxC($idTienda,$idFactura,$userVendedor,$razon) {
    
    	$sql = "call spAnulaFacturaCxC($idTienda,$idFactura, '$userVendedor','$razon',@out_status);";
    
    	$rs = $this->db->Execute($sql);
    	$rs->Close();
    
    	$sql = "SELECT @out_status as message";
    	$rs = $this->db->Execute($sql);
    	$status = $rs->getArray();
    	$rs->Close();
    	 
    	return $status;
    }	
    
    function saveDevolucion($idTienda,$tableData,$idfactura,$totalNota,$totalIvNota,$userVendedor){
    	
    	
    	// se construye el arreglo con los codigos de articulos que el usuario esta
    	// devolviendo
    	$tiraArti = '';
    	// $coma sirve para cuando se concatenan los codigos, el problema es el primero, el primero no hay
    	// que poner la coma, por eso se incializa con nada, y luego del primero se le asigna el simbolo ','
    	$coma="";
    	foreach ($tableData as $key => $arti) {
    		foreach ($arti as $pos => $val){
    			switch($pos){
    				case 'CodArti':   

    					$tiraArti = $tiraArti . $coma . $val;
    					$coma = ',';    					
    					break;
    			} // switch
    		} // foreach ($docu..
    	} // foreach ($tabledata...
    	
    	// si la tira esta vacia, no se debe hacer nada, en principio no debe venir vacia
    	// pero se hace la validacion por si acoso.
    	if (strlen($tiraArti) == 0){
    		return "No hay articulos que devolver ";
    		
    	}else{
	    	$sql = "call spAnulaFacturaArtiCxC($idTienda,$idFactura,$totalNota,$totalIvNota,'$userVendedor','$tiraArti',@out_status);";
	    	
	    	$rs = $this->db->Execute($sql);
	    	$rs->Close();
	    	
	    	$sql = "SELECT @out_status as message";
	    	$rs = $this->db->Execute($sql);
	    	$status = $rs->getArray();
	    	$rs->Close();
    	
    		return $status;
    	}

    }
    
    function updNotaImp($idNota) {    
    	$sql = "call spUpdNotaImpCxC($idNota,@out_status);";
  
    	$rs = $this->db->Execute($sql);
    	$rs->Close();
    
    	$sql = "SELECT @out_status as message";
    	$rs = $this->db->Execute($sql);
    	$status = $rs->getArray();
    	$rs->Close();
    
    	echo $status[0]["message"];
    }
    
    function validaClaveVendedor($ClaveVendedor){
    	$sql = "call spValidaClaveVendedor('$ClaveVendedor',@out_esValido,@out_userVendedor,@out_status);";
    	$rs = $this->db->Execute ($sql);
    	$rs->Close();
    
    	$sql = "SELECT @out_esValido as esValido, @out_userVendedor as userVendedor, @out_status as message";
    	$rs = $this->db->Execute($sql);
    	$status = $rs->getArray();
    	$rs->Close();
    
    	//return arrary (message,esValido);
    	//return $status;
    	$message = $status[0]["message"].'|'.$status[0]["esValido"].'|'.$status[0]["userVendedor"];
    	return  $message;
    	 
    
    }
    
    
        
}

?>