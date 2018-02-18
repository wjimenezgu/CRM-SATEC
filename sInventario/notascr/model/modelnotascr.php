<?php

class modelnotascr {

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
        
    function getAllNotasCr($idTienda) {
        
        $sql = "call spGetAllNotasCr($idTienda,@out_status);";
        $rs = $this->db->Execute($sql);
      	$data = $rs->getArray();
		$rs->Close();
      	return $data;        
        
    }
    
    
    function buscarEncNotaCr($idTienda,$idNotaCr) {
    
    	$sql = "call spGetDetNotaCr($idNotaCr,@out_status);";
    	$rs = $this->db->Execute($sql);
    	$data = $rs->getArray();
    	$rs->Close();
    	return $data;
    
    }
    
    function insertarData($idfact,$vendedor,$idtienda,$fecNota,$razonNota,$devoSiNo,$montoNota,$totalivnota,$tiraArti) {
    
		if (strlen($tiraArti)!=0) {
			$sql = "call spAnulaFacturaArti($idtienda,$idfact,$montoNota,$totalivnota,'$vendedor','$tiraArti','$razonNota',@out_status);";
//echo $sql;exit;			
		}else{
			$sql = "call spAnulaFactura($idtienda,$idfact,'$vendedor','$razonNota','$devoSiNo',@out_status);";
		}

    	$rs = $this->db->Execute($sql);
    	$rs->Close();
    	
    	$sql = "SELECT @out_status as message";
    	$rs = $this->db->Execute($sql);
    	$status = $rs->getArray();
    	$rs->Close();
    	
    	$message = $status[0]["message"];
    	return $message;

    }
       
    function insertarDataM($numNota,$idfact,$vendedor,$idtienda,$fecNota,$razonNota,$montoNota,$montoImpuesto,$numDocuFact) {
    
    	$sql = "call spInsNotaManual($idtienda,'$numNota','$fecNota',$idfact,'$vendedor','$razonNota',$montoNota,$montoImpuesto,'$numDocuFact',@out_status);";
 // echo $sql;exit;  
    	$rs = $this->db->Execute($sql);
    	$rs->Close();
    	 
    	$sql = "SELECT @out_status as message";
    	$rs = $this->db->Execute($sql);
    	$status = $rs->getArray();
    	$rs->Close();
    	 
    	$message = $status[0]["message"];
    	return $message;
    
    }


    function devDineroNota($idtienda,$fecNota,$idNota,$vendedor,$montoDev) {
    
    	$sql = "call spinsDevDineroNota($idtienda,$fecNota,$idNota,'$vendedor',$montoDev,@out_status);";
    //	 echo $sql;exit;
    	$rs = $this->db->Execute($sql);
    	$rs->Close();
    
    	$sql = "SELECT @out_status as message";
    	$rs = $this->db->Execute($sql);
    	$status = $rs->getArray();
    	$rs->Close();
    
    	$message = $status[0]["message"];
    	return $message;
    
    }    
    
    function buscarDetalleNotaCr($idNota) {
    	
    	$sql = "call spGetDetNotaCr($idNota,@out_status);";
//echo $sql;exit;
        $rs = $this->db->Execute($sql);
        $data = $rs->getArray();
        $rs->Close();
        return $data;            	    
    }    
    
    function buscarApliNota($idNota) {
    	
    	$sql = "call spGetApliNota($idNota,@out_status);";
//echo $sql;exit;
        $rs = $this->db->Execute($sql);

        $data = $rs->getArray();
        
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
    
    
    function getDatosTienda($idTienda){
    	$sql = "call spGetDatosTienda($idTienda,@out_status);";
    	$rs = $this->db->Execute ($sql);
    	$data = $rs->getArray();
    	$rs->Close();
    	return $data;
    }
    
        
}

?>
