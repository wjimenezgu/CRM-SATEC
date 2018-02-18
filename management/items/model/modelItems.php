<?php

class modelItems {

    public function __construct(&$db) {
        $this->db = $db;
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
    
    function modificarItem($codArti,$desArticulo,$minimo,$maximo,$reorden,$precio,$costo,$porceComision,
                            $factorUtilidad,$codigoBarras,$exento,$estado,$idCategoria,$idProveedor,
                            $codArtiProveedor,$descArtiProveedor) {
    
    	$sql = "call spModItem('$codArti','$desArticulo',$minimo,$maximo,$reorden,$precio,$costo,$porceComision,
                               $factorUtilidad,'$codigoBarras','$exento',$estado,$idCategoria,$idProveedor,
                               '$codArtiProveedor','$descArtiProveedor',@out_status);";
        $rs = $this->db->Execute($sql);

        return "OK";      
    	
    }
    
function borrarItem($idItem) {     
    	$sql = "call spDelItem($idItem,@out_status);";
        $rs = $this->db->Execute($sql);

        return "OK";       
    }

    
function insertarItem($codArti,$desArticulo,$minimo,$maximo,$reorden,$precio,$costo,$porceComision,
                       $factorUtilidad,$codigoBarras,$exento,$estado,$idCategoria,$idProveedor,
                       $codArtiProveedor,$descArtiProveedor) {
        
    	$sql = "call spInsItem('$codArti','$desArticulo',$minimo,$maximo,$reorden,$precio,$costo,$porceComision,
                               $factorUtilidad,'$codigoBarras','$exento',$estado,$idCategoria,$idProveedor,
                               '$codArtiProveedor','$descArtiProveedor',@out_status);";
         
        $rs = $this->db->Execute($sql);

    	return "OK";    
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
    
    function getAllSuppliers() {
        
        $sqlx        = "call spGetAllProveedores(@out_status);"; 

        $result      = $this->db->Execute($sqlx);
        $listSuppliers = $result->getArray();     
        $result->Close();
          
        $sql2 = "SELECT @out_status as message";
        $rs = $this->db->Execute($sql2);        
        
        $status = $rs->getArray();
        
        if($status[0]["message"] == "OK"){
            $data = $listSuppliers;
        }else{
            $data = array();
        }
        
        return $data;                	
      	
    }        

    function getAllEstadoArti() {
        
        $sqlx        = "call spGetAllEstadoArti(@out_status);"; 

        $result      = $this->db->Execute($sqlx);
        $listAllEstadoArti = $result->getArray();     
        $result->Close();
          
        $sql2 = "SELECT @out_status as message";
        $rs = $this->db->Execute($sql2);        
        
        $status = $rs->getArray();
        
        if($status[0]["message"] == "OK"){
            $data = $listAllEstadoArti;
        }else{
            $data = array();
        }
        
        return $data;                 	
      	
    }

    function getListaCategorias() {
        
        //$sqlx        = "call spGetListaCategorias(@out_status);"; 
        $sqlx        = "call spGetAllCategorias(@out_status);";
        

        $result      = $this->db->Execute($sqlx);
        $listaCategorias = $result->getArray();     
        $result->Close();
          
        $sql2 = "SELECT @out_status as message";
        $rs = $this->db->Execute($sql2);        
        
        $status = $rs->getArray();
        
        if($status[0]["message"] == "OK"){
            $data = $listaCategorias;
        }else{
            $data = array();
        }
        
        return $data;                 	
      	
    } 
}

?>