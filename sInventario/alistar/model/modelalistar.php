<?php

class modelalistar {

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
           
    function buscarDetArtiAlistar($idTienda) {
    	 
    	$sql = "call spGetDetArtiAlistar($idTienda,@out_status);";
    	//echo $sql;exit;
    	$rs = $this->db->Execute($sql);
    
    	$data = $rs->getArray();
    
    	return $data;
    	 
    	 
    }
    
    function saveArtiAlistar($idTienda,$tableData) {
    	//Procesar todos los registro del arreglo
    	// Los elementos del arreglo son: EstaSel (es igual 'SI' si esta seleccionado), IdFactura, NumLinea, CodArti
    	//
    	 
    	// Se inicializa la variable message con OK.
    	$message='OK';
    	 
    	foreach ($tableData as $key => $docu) {
    		foreach ($docu as $pos => $val){
    			switch($pos){
    				case 'IdFactura':
    					$IdFactura=$val;
    					break;
    
    				case 'NumLinea':
    					$NumLinea = $val;
    					break;
    
    				case 'CodArti':
    					$CodArti = $val;
    					break;
    						
    				case 'EstaSel':
    					$EstaSel = $val;
						break;
						
    				case 'NumSerie':
    					$NumSerie = $val;
    					break;

    				case 'IndObligaSerie':
    					$IndObligaSerie = $val;
    					break;
    					
    
    			} // switch
    		} // foreach ($docu..
    		// Ya se tienen las variables para actualizar el articulo
    		// con la fecha de corte
    		if($EstaSel=='SI'){
    			if ($IndObligaSerie == 'N' || ($IndObligaSerie == 'S' && $NumSerie != '')){
    				$sql = "call spModArtiAlistar($idTienda,$IdFactura,$NumLinea,'$CodArti','$NumSerie',@out_status);";
    				$rs = $this->db->Execute($sql);
    				$rs->Close();
    		 
    				$sql = "SELECT @out_status as message";
    				$rs = $this->db->Execute($sql);
    				$status = $rs->getArray();
    				$rs->Close();
        			$message = $status[0]["message"];
            			if ($message !== 'OK'){
    						return $message;
    					}
    			} //IndObligaSerie == 'N'....
    		} // EstaSel == SI
    	} // foreach ($tabledata...
    	// Si todo fue exitoso, la variable message trae el valor OK
    		return $message;
    }// function saveArtiAlistar
    
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
    
    function validaBodeguero($Clave){
    	$sql = "call spValidaBodeguero('$Clave',@out_esValido,@out_status);";
    	$rs = $this->db->Execute ($sql);
    	$rs->Close();
    	 
    	$sql = "SELECT @out_esValido as esValido, @out_status as message";
    	$rs = $this->db->Execute($sql);
    	$status = $rs->getArray();
    	$rs->Close();
    	 
    	//return arrary (message,esValido);
    	return $status;
    
    }

    
        
}

?>