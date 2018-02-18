<?php

class modelBill{
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
        
         function inCliente($nombre, $telefono, $correo,$contacto,$vendedor,$codTienda){
            
            $sql = "call spInsClienteFacT('$nombre', '$telefono', '$correo','$contacto','$vendedor',$codTienda,@out_idCliente,@out_status);";

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
        
         function inFactura($cliente, $tienda, $vendedor, $subtotal, $descuento, $impuesto, $total){
            
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
        
        function insEncFactura($cliente, $tienda, $vendedor, $fecFactura,$subtotal, $porceDescuento,$descuento, $impuesto) {
            $sql = "call spInsEncFactura($tienda,'$vendedor',$cliente,'$fecFactura',NULL,NULL,NULL,$subtotal,$descuento,$porceDescuento,$impuesto,@out_idFactura,@out_status);";
//echo $sql;exit;
            $rs = $this->db->Execute($sql);
            $rs->Close();
                       
            $sql2 = "SELECT @out_idFactura as idFactura, @out_status as message";
            $rs = $this->db->Execute($sql2);                
            $status = $rs->getArray();
            $rs->Close();
        
            if($status[0]["message"] == "OK"){
                $idFactura = $status[0]["idFactura"];
            }else{
                $idFactura = 0;
            }

            return $idFactura;            
                        
        }

        
        function insEncProforma($cliente, $tienda, $vendedor, $fecha,$subtotal, $porceDescuento,$descuento, $impuesto) {
            $sql = "call spInsEncProforma($tienda,'$vendedor',$cliente,'$fecha',NULL,$subtotal,$descuento,$porceDescuento,$impuesto,@out_idProforma,@out_status);";
            // echo $sql;exit;
            $rs = $this->db->Execute($sql);
            $rs->Close();
             
            $sql = "SELECT @out_idProforma as idProforma, @out_status as message";
            $rs = $this->db->Execute($sql);
            $status = $rs->getArray();
            $rs->Close();
        
            if($status[0]["message"] == "OK"){
                $idProforma = $status[0]["idProforma"];
            }else{
                $idProforma = 0;
            }
        
            return $idProforma;
             
        }        
        
        function insDetFactura($tienda,$idFactura, $numLinea, $codArti, $desArticulo,$cantidad, $precioVenta,$pdesc,$totPrice) {
            $sql = "call spInsDetFactura($tienda,$idFactura,$numLinea,'$codArti','$desArticulo',$cantidad,$precioVenta,$pdesc,$totPrice,@out_status);";

            $rs = $this->db->Execute($sql);
            $rs->Close();

            $sql = "SELECT @out_status as message";
            $rs = $this->db->Execute($sql);                
            $status = $rs->getArray();
            $rs->Close();

            $message = $status[0]["message"];
            return $message;  
            
        } 

        function insDetProforma($idProforma, $numLinea, $codArti, $desArticulo,$cantidad, $precioVenta,$pdesc,$totPrice) {
            $sql = "call spInsDetProforma($idProforma,$numLinea,'$codArti','$desArticulo',$cantidad,$precioVenta,$pdesc,$totPrice,@out_status);";
            $rs = $this->db->Execute($sql);
            $rs->Close();
        
            $sql = "SELECT @out_status as message";
            $rs = $this->db->Execute($sql);
            $status = $rs->getArray();
            $rs->Close();
        
            $message = $status[0]["message"];
            return $message;
             
        }

        
        function insEncApartado($cliente, $tienda, $vendedor, $fecha,$subtotal, $porceDescuento,$descuento, $impuesto) {
            $sql = "call spInsEncApartado($tienda,'$vendedor',$cliente,'$fecha',NULL,$subtotal,$descuento,$porceDescuento,$impuesto,@out_idApartado,@out_status);";
            //echo $sql;exit;
            $rs = $this->db->Execute($sql);
            $rs->Close();
        
            $sql = "SELECT @out_idApartado as idApartado, @out_status as message";
            $rs = $this->db->Execute($sql);
            $status = $rs->getArray();
            $rs->Close();
        
            if($status[0]["message"] == "OK"){
                $idApartado = $status[0]["idApartado"];
            }else{
                $idApartado = 0;
            }
        
            return $idApartado;
        
        }
        
        function insDetApartado($idApartado, $numLinea, $codArti, $desArticulo,$cantidad, $precioVenta,$pdesc,$totPrice) {
            $sql = "call spInsDetApartado($idApartado,$numLinea,'$codArti','$desArticulo',$cantidad,$precioVenta,$pdesc,$totPrice,@out_status);";
            $rs = $this->db->Execute($sql);
            $rs->Close();
        
            $sql = "SELECT @out_status as message";
            $rs = $this->db->Execute($sql);
            $status = $rs->getArray();
            $rs->Close();
        
            $message = $status[0]["message"];
            return $message;
        
        }
                
         function getCliente($nombre){
            $sql = "call spGetCliente('$nombre',@out_status);";
            $rs = $this->db->Execute ($sql);
            $data = $rs->getArray();
            $rs->Close();
            return $data;
        }
        
         function InDetalleFac($item,$cant,$totPrice){
            
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
        
         function getAllClientes(){
            $sql = "call spGetAllClientesFac(@out_status);";
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
        
         function getAllVendedores(){
            $sql = "call spGetAllVendedores(@out_status);";
            $rs = $this->db->Execute ($sql);
            $data = $rs->getArray();
            $rs->Close();
            return $data;
        }
        
         function getAllItems(){
            $sql = "call spGetAllItemsFac(@out_status);";
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
        
         function getItemDesc($desc){
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
        
    function getArtiBajoReorden($idProveedor) {
  
        $sqlx         = "call spGetArticulosBajoReorden($idProveedor, @out_status);"; 

        $result       = $this->db->Execute($sqlx);
        $infoArticulo = $result->getArray();     
        $result->Close();
          
        $sql2 = "SELECT @out_status as message";
        $rs = $this->db->Execute($sql2);        
        
        $status = $rs->getArray();
        
        if($status[0]["message"] == "OK"){
            $data = $infoArticulo;
        }else{
            $data = array();
        }
        
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

     function buscarExistencias($codigoArticulo) {
        
        $sql = "call spGetTiendasExistenciaGen('$codigoArticulo');";
        //echo $sql;
        //exit;
        $rs = $this->db->Execute($sql);
    
        $data = $rs->getArray();
        $rs->Close();
        return $data;
    
    }
    
    function buscarArticuloTrans($codigoTienda,$codigoArticulo){
        
        $sql = "call spGetTiendasTransito('$codigoTienda','$codigoArticulo');";
        //echo $sql;
        //exit;
        $rs = $this->db->Execute($sql);
        
        $data = $rs->getArray();
        $rs->Close();
        return $data;
        
    }

    function buscarProducto($idTienda, $criterio, $texto) {
                
        $sql = "call spGetArticuloExistenciaFac($idTienda, '$criterio', '$texto',@out_status);";
        $rs = $this->db->Execute($sql);

        $data = $rs->getArray();
        
        return $data;        
        
    }

    
    function getPorceIV(){
            $sql = "call spGetPorceIV(@out_status);";
            $rs = $this->db->Execute ($sql);
            $data = $rs->getArray();
            $rs->Close();
            return $data;
    }
    
    
    function getPorceMaxDesc(){
            $sql = "call spGetPorceMaxDesc(@out_status);";
            $rs = $this->db->Execute ($sql);
            $data = $rs->getArray();
            $rs->Close();
            return $data;
    }
    
    function getPorceAutDesc(){
        $sql = "call spGetPorceAutDesc(@out_status);";
        $rs = $this->db->Execute ($sql);
        $data = $rs->getArray();
        $rs->Close();
        return $data;
    }
    
    function getAutDesc(){
            $sql = "call spGetAutDesc(@out_status);";
            $rs = $this->db->Execute ($sql);
            $data = $rs->getArray();
            $rs->Close();
            return $data;
    }
    
    
    function getPorceUtiCosto(){
        $sql = "call spGetPorceUtiCosto(@out_status);";
        $rs = $this->db->Execute ($sql);
        $data = $rs->getArray();
        $rs->Close();
        return $data;
    }
    
    function getAutDescGere(){
        $sql = "call spGetAutDescGere(@out_status);";
        $rs = $this->db->Execute ($sql);
        $data = $rs->getArray();
        $rs->Close();
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

    function getIdCliSinNombre(){
            $sql = "call spGetIdCliSinNombre(@out_status);";
            $rs = $this->db->Execute ($sql);
            $data = $rs->getArray();
            $rs->Close();
            return $data;
    }
    
    function getArticulo($idTienda,$criterio,$valor) {
    
        $sql = "call spGetArtiFactura($idTienda,'$criterio','$valor',@codArti,@codArtiProveedor,@codigoBarras,@desArticulo,@artiExiste,@precioivi,@existencia,@precio,@costo,@out_status);";
//   echo $sql;exit;
        $rs = $this->db->Execute($sql);
        // la instruccion ejecutada no retorna un recordset,
        // por lo que no hace falta ejecutar la siguiente instruccion.
        // esa es solo necesaria cuando lo que se retorna es un recordset.
        // se deja aqui como referencia, pues se ha venido copiando los llamados coomo si todos fueran igual.
        //$data = $rs->getArray();
    
        $rs->Close();
    
        $sql = "SELECT @codArti as codArti, @codArtiProveedor as codArtiProveedor, @codigoBarras as codigoBarras,@desArticulo as desArticulo,@artiExiste as artiExiste,@precioivi as precioivi,@existencia as existencia,@precio as precio,@costo as costo,@out_status as message";
        $rs = $this->db->Execute($sql);
    
        $status = $rs->getArray();
        $rs->Close();
    
        $message = $status[0]["message"].'|'.$status[0]["codArti"].'|'.$status[0]["codArtiProveedor"].'|'.trim($status[0]["codigoBarras"]).'|'.trim($status[0]["desArticulo"]).'|'.$status[0]["artiExiste"].'|'.$status[0]["precioivi"].'|'.$status[0]["precio"].'|'.$status[0]["existencia"].'|'.$status[0]["costo"];
    
        return $message;
    
    }    
        
}
?>

