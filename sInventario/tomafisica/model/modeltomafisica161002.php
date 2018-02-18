<?php

class modeltomafisica{
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
        
         function getAllTiendas(){
            $sql = "call spGetAllTiendas(@out_status);";
            $rs = $this->db->Execute ($sql);
			$data = $rs->getArray();
            $rs->Close();
			return $data;
        }
        
               
         function getItem($idArticulo){
        	$sql = "call spGetInfoItem($idArticulo,@out_status);";
			$rs = $this->db->Execute ($sql);
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
    
    function buscarProducto($idTienda, $criterio, $texto) {
                
        $sql = "call spGetArticuloExistenciaFac($idTienda, '$criterio', '$texto',@out_status);";
        $rs = $this->db->Execute($sql);

        $data = $rs->getArray();
        
        return $data;        
        
    }
    
    function getArticulo($criterio,$valor) {
    
    	$sql = "call spGetArtiTomaFisica('$criterio','$valor',@codArti,@codArtiProveedor,@codigoBarras,@desArticulo,@artiExiste,@out_status);";
    	//echo $sql;exit;
    	$rs = $this->db->Execute($sql);
    	// la instruccion ejecutada no retorna un recordset, 
    	// por lo que no hace falta ejecutar la siguiente instruccion.
    	// esa es solo necesaria cuando lo que se retorna es un recordset.
    	// se deja aqui como referencia, pues se ha venido copiando los llamados coomo si todos fueran igual.
    	//$data = $rs->getArray();
    
    	$rs->Close();
    
    	$sql = "SELECT @codArti as codArti, @codArtiProveedor as codArtiProveedor, @codigoBarras as codigoBarras,@desArticulo as desArticulo,@artiExiste as artiExiste,@out_status as message";
    	$rs = $this->db->Execute($sql);
    
    	$status = $rs->getArray();
    	$rs->Close();
    	 
    	$message = $status[0]["message"].'|'.$status[0]["codArti"].'|'.$status[0]["codArtiProveedor"].'|'.$status[0]["codigoBarras"].'|'.$status[0]["desArticulo"].'|'.$status[0]["artiExiste"];
    
    	return $message;
    
    }
    
    function validaBodeguero($Clave){
    	$sql = "call spValidaBodeguero('$Clave',@out_esValido,@out_status);";
    // echo $sql;exit;
    	$rs = $this->db->Execute ($sql);
    	$rs->Close();
    
    	$sql = "SELECT @out_esValido as esValido, @out_status as message";
    	$rs = $this->db->Execute($sql);
    	$status = $rs->getArray();
    	$rs->Close();
    
    	//return arrary (message,esValido);
    	return $status;
    
    }
    
    function insDetTomaFisica($tienda,$usuario,$i,$fecToma,$codArti,$cant){
    	
    	$sql = "call spInsDetTomaFisicav2($tienda,'$usuario',$i,'$fecToma','$codArti',$cant,@out_status);";
  //  echo $sql;exit;
    	$rs = $this->db->Execute($sql);
    	$rs->Close();
    	
    	$sql = "SELECT @out_status as message";
    	$rs = $this->db->Execute($sql);
    	$status = $rs->getArray();
    	$rs->Close();
    	
    	$message = $status[0]["message"];
    	
    	return $message;
    	
    	
    }
        
}
?>

