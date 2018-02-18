<?php

class modelMCompras {
    
    public function __construct(&$db) {       
        $this->db = $db;
    }
    
    function getProveedor() {       
        
        $sql = "CALL spGetProveedor(1, @out_status);";        
        $result = $this->db->Execute($sql);   

        $data = $result->getArray();            
        $result->Close();

        $sql2 = "SELECT @out_status as message";
        $rs = $this->db->Execute($sql2);                
        
        $data = $rs->getArray();            
        echo "<pre>";
        print_r($data);
        echo "<pre>";        
        
        $rs->Close();        
    }
        
    function getAllProveedores() {
        
        $sqlx            = "call spGetAllProveedores(@out_status);"; 

        $result          = $this->db->Execute($sqlx);
        $listProveedores = $result->getArray();     
        $result->Close();
          
        $sql2 = "SELECT @out_status as message";
        $rs = $this->db->Execute($sql2);        
        
        $status = $rs->getArray();
        
        if($status[0]["message"] == "OK"){
            $data = $listProveedores;
        }else{
            $data = array();
        }
        
        return $data;    
    }
    
    function getAllOpcionesPago() {
        
        $sqlx        = "call spGetAllOpcionesPago(@out_status);"; 

        $result      = $this->db->Execute($sqlx);
        $listOptPago = $result->getArray();     
        $result->Close();
          
        $sql2 = "SELECT @out_status as message";
        $rs = $this->db->Execute($sql2);        
        
        $status = $rs->getArray();
        
        if($status[0]["message"] == "OK"){
            $data = $listOptPago;
        }else{
            $data = array();
        }
        
        return $data;    
    }
    
    function getAllMonedas() {
        
        $sqlx        = "call spGetAllMonedas(@out_status);"; 
        
        $result      = $this->db->Execute($sqlx);
        $listMonedas = $result->getArray();     
        $result->Close();
        
        $sql2 = "SELECT @out_status as message";
        $rs = $this->db->Execute($sql2);        
        
        $status = $rs->getArray();
        
        if($status[0]["message"] == "OK"){
            $data = $listMonedas;
        }else{
            $data = array();
        }
        
        return $data;            
    }
    
    function getAllCompromisos() {
        $sqlx        = "call spGetAllCompromisos(@out_status);"; 
        
        $result          = $this->db->Execute($sqlx);
        $listCompromisos = $result->getArray();     
        $result->Close();
        
        $sql2 = "SELECT @out_status as message";
        $rs = $this->db->Execute($sql2);        
        $status = $rs->getArray();
        
        if($status[0]["message"] == "OK"){
            $data = $listCompromisos;
        }else{
            $data = array();
        }
        
        return $data;           
    }
    
    function getAllDirEnvio() {

        $sqlx         = "call spGetAllDirEnvioMer(@out_status);"; 
        
        $result       = $this->db->Execute($sqlx);
        $listDirEnvio = $result->getArray();     
        $result->Close();
        
        $sql2 = "SELECT @out_status as message";
        $rs = $this->db->Execute($sql2);        
        $status = $rs->getArray();
        
        if($status[0]["message"] == "OK"){
            $data = $listDirEnvio;
        }else{
            $data = array();
        }
        
        return $data;          
        
    }
    
    function getAllDirDocs() {

        $sqlx         = "call spGetAllDirEnvioDoc(@out_status);"; 
        
        $result       = $this->db->Execute($sqlx);
        $listDirDocs  = $result->getArray();     
        $result->Close();
        
        $sql2 = "SELECT @out_status as message";
        $rs = $this->db->Execute($sql2);        
        $status = $rs->getArray();
        
        if($status[0]["message"] == "OK"){
            $data = $listDirDocs;
        }else{
            $data = array();
        }
        
        return $data;          
        
    }
    
    function getAllTarjetas() {

        $sqlx         = "call spGetAllTarjetas(@out_status);"; 
        
        $result       = $this->db->Execute($sqlx);
        $listTarjetas = $result->getArray();     
        $result->Close();
        
        $sql2 = "SELECT @out_status as message";
        $rs = $this->db->Execute($sql2);        
        $status = $rs->getArray();
        
        if($status[0]["message"] == "OK"){
            $data = $listTarjetas;
        }else{
            $data = array();
        }
        
        return $data;          
        
    }
    
    function getTarjeta($idTarjeta) {
    
    	$sqlx         = "call spGetTarjeta($idTarjeta,@out_status);";
    
    	$result       = $this->db->Execute($sqlx);
    	$Tarjeta = $result->getArray();
    	$result->Close();
    
    	$sql2 = "SELECT @out_status as message";
    	$rs = $this->db->Execute($sql2);
    	$status = $rs->getArray();
    
    	if($status[0]["message"] == "OK"){
    		$data = $Tarjeta;
    	}else{
    		$data = array();
    	}
    
    	return $data;
    
    }    
    
    function getInfoProveedor($idProveedor) {
        
        $sql           = "call spGetProveedor('$idProveedor', @out_status);";              
        $result        = $this->db->Execute($sql);
        $infoProveedor = $result->getArray(); 
        $result->Close();

        $sql2 = "SELECT @out_status as message";
        $rs = $this->db->Execute($sql2);        
        
        $status = $rs->getArray();
        
        if($status[0]["message"] == "OK"){
            if (sizeof($infoProveedor) > 0) {
                
                $data = $infoProveedor;
            
            }else {
                $data = array();    
            }
        }else{
            $data = array();
        }

        return $data;         
    }              
    
  
    function getCodInternos($idProveedor) {
        
        //$sql       = "call spGetArtiProveedor('$idProveedor', '$codArticulo', @out_status);";              
        $sql       = "call spAllArtiProveedor('$idProveedor', @out_status);";              
        $result    = $this->db->Execute($sql);
        $listCodes = $result->getArray(); 
        $result->Close();
        
        $sql2 = "SELECT @out_status as message";
        $rs = $this->db->Execute($sql2);        
        
        $status = $rs->getArray();
        
        if($status[0]["message"] == "OK"){
            if (sizeof($listCodes) > 0) {
                
                $listByCode   = array();
                $listByCodPro = array();
                $listByName   = array();
                foreach ($listCodes as $dato){

                    $info1["label"]       = $dato["CodArti"];
                    $info1["CodArtiPro"]  = $dato["CodArtiPro"];
                    $info1["DesArticulo"] = $dato["DesArticulo"];

                    $info2["label"]       = $dato["DesArticulo"];
                    $info2["CodArtiPro"]  = $dato["CodArtiPro"];
                    $info2["CodArti"]     = $dato["CodArti"];
                    
                    $info3["label"]       = $dato["CodArtiPro"];
                    $info3["CodArti"]     = $dato["CodArti"];
                    $info3["DesArticulo"] = $dato["DesArticulo"];

                    array_push($listByCode,   $info1);
                    array_push($listByName,   $info2);
                    array_push($listByCodPro, $info3);
                }

                $data[0] = $listByCode;
                $data[1] = $listByName;
                $data[2] = $listByCodPro;
            
            }else {
                $data = array();    
            }
        }else{
            $data = array();
        }

        return $data;         
    }
    
  
    function saveEncabezadoPedido($pidProveedor, $pnumOrdenCompra, $pidMoneda, $pfecCreacion, $pfecEmbarque, $psubTotal, 
                                  $pcostoEnvio, $petiquetaOC, $potrosCostos, $paceptaParciales, $pidOpcionPago, $pcomentarios, 
                                  $pmarks, $ppacking, $pshipvia, $pDirEnvio, $pDirDocs, $pTipTarjeta) {
  
        $sql           = "call spInsPedido($pidProveedor, '$pnumOrdenCompra', '$pidMoneda', '$pfecCreacion', '$pfecEmbarque', $psubTotal, $pcostoEnvio, "
                       . "'$petiquetaOC', $potrosCostos, '$paceptaParciales', $pidOpcionPago, '$pcomentarios', '$pmarks', '$ppacking', '$pshipvia', $pDirEnvio, $pDirDocs, $pTipTarjeta,  @out_idPedido, @out_status);";

        $result        = $this->db->Execute($sql);
        $result->Close();

        $sql2 = "SELECT @out_idPedido as idPedido, @out_status as message";
        $rs = $this->db->Execute($sql2);                
        $status = $rs->getArray();
        $result->Close();
        
        if($status[0]["message"] == "OK"){
            $idPedido = $status[0]["idPedido"];
            $sql   = "call spInsPedidoEvento($idPedido,1,'SISTEMA',@out_status);";
            $resul = $this->db->Execute($sql);
            $resul->Close();
        }else{
            $idPedido = 0;
        }

        return $idPedido;        
        
    }
    
    function saveDetallePedido($idPedido, $numLine, $codInterno, $nameArticle, $codProveedor, $cant, $costUnit, $pfecRecibido, $typeRef, $numRef, $detRef,$whr,$trackNo, $fechaEstArribo, $cantRecibida, $comentRecepcion){        
        
        $sql           = "call spInsDetallePedido($idPedido, $numLine, '$codInterno', '$nameArticle', '$codProveedor', $cant, $costUnit, "
                       . "$pfecRecibido, $typeRef, '$numRef', '$detRef', '$whr','$trackNo', '$fechaEstArribo', '$cantRecibida', '$comentRecepcion',NULL,NULL,@out_status);";         

        $result        = $this->db->Execute($sql);
        $result->Close();

        $sql2 = "SELECT @out_status as message";
        $rs = $this->db->Execute($sql2);                
        $status = $rs->getArray();
        $result->Close();
        $message = $status[0]["message"];    
        return $message;        
                
    }

    
    function updateEncabezadoPedido($pidPedido, $pidProveedor, $pnumOrdenCompra, $pidMoneda, $pfecCreacion, $pfecEmbarque, $psubTotal, 
                                    $pcostoEnvio, $petiquetaOC, $potrosCostos, $paceptaParciales, $pidOpcionPago, $pcomentarios, 
                                    $pmarks, $ppacking, $pshipvia, $pDirEnvio, $pDirDocs, $pTipTarjeta) {
  
        $sql           = "call spModPedido($pidPedido, $pidProveedor, '$pnumOrdenCompra', '$pidMoneda', '$pfecCreacion', '$pfecEmbarque', $psubTotal, $pcostoEnvio, "
                       . "'$petiquetaOC', $potrosCostos, '$paceptaParciales', $pidOpcionPago, '$pcomentarios', '$pmarks', '$ppacking', '$pshipvia', $pDirEnvio, $pDirDocs, $pTipTarjeta, @out_status);";
 //echo $sql;exit;              
        $result        = $this->db->Execute($sql);
        $result->Close();

        $sql2 = "SELECT @out_status as message";
        $rs = $this->db->Execute($sql2);                
        $status = $rs->getArray();
        $result->Close();
        
        if($status[0]["message"] == "OK"){
            $result = 1;    
        }else{
            $result = 0;
        }
        
        if($status[0]["message"] == "OK"){
            $sql   = "call spInsPedidoEvento($pidPedido,5,'SISTEMA',@out_status);";
            $resul = $this->db->Execute($sql);
            $resul->Close();
        }else{
            $result = 0;
        }
        
        

        return $result;        
        
    }    

    function updateDetallePedido($idPedido, $numLine, $codInterno, $nameArticle, $codProveedor, $cant, $costUnit, $pfecRecibido, $typeRef, $numRef, $detRef){        
        
        $sql           = "call spModDetallePedido($idPedido, $numLine, '$codInterno', '$nameArticle', '$codProveedor', $cant, $costUnit, "
                       . "$pfecRecibido, 1, '$numRef', '$detRef', @out_status);";
                
        $result        = $this->db->Execute($sql);
        $result->Close();

        $sql2 = "SELECT @out_status as message";
        $rs = $this->db->Execute($sql2);                
        $status = $rs->getArray();
        $result->Close();
        
        if($status[0]["message"] == "OK"){
            $message = $status[0]["message"];    
        }else{
            $message = "ERROR";
        }

        return $message;        
                
    }  
    
    
    function delDetallePedido($idPedido) {
        
        $sql           = "call spDelDetallePedido($idPedido, @out_status);";                
        $result        = $this->db->Execute($sql);
        $result->Close();

        $sql2 = "SELECT @out_status as message";
        $rs = $this->db->Execute($sql2);                
        $status = $rs->getArray();
        $result->Close();
        
        if($status[0]["message"] == "OK"){
            $message = $status[0]["message"];    
        }else{
            $message = "ERROR";
        }

        return $message;        
    }
    
    function getInfoArtiByCod($idProveedor, $codArticulo) {
  
        $sqlx         = "call spCodArtixProveedor($idProveedor, '$codArticulo', @out_status);"; 

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
    
    function getInfoArtiByCodPro($idProveedor, $codProArticulo) {
  
        $sqlx         = "call spCodProArtixProveedor($idProveedor, '$codProArticulo', @out_status);"; 

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
    
    function getInfoArtiByDes($idProveedor, $desArticulo) {
  
        $sqlx         = "call spDescArtixProveedor($idProveedor, '$desArticulo', @out_status);"; 
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
  
    function getInventario() {
        
        $sqlx            = "call spGetAllArticulos(@out_status);"; 

        $result          = $this->db->Execute($sqlx);
        $inventario = $result->getArray();     
        $result->Close();
          
        $sql2 = "SELECT @out_status as message";
        $rs = $this->db->Execute($sql2);                
        $status = $rs->getArray();
        
        if($status[0]["message"] == "OK"){
            
            $listArticulos = array();
            foreach ($inventario as $articulo) {

                $data["codArti"]     = rtrim($articulo["codArti"]);
                $data["desArticulo"] = rtrim($articulo["desArticulo"]);
                $data["codArtiProveedor"] = rtrim($articulo["codArtiProveedor"]);

                array_push($listArticulos, $data);

            }
        
            $data = $listArticulos;
                    
        }else{
            $data = array();
        }
        
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
    
    function getAllPedidos() {
        
        $sqlx       = "call spGetAllPedidos(@out_status);"; 
        $result     = $this->db->Execute($sqlx);
        $allPedidos = $result->getArray(); 
        
        $result->Close();
          
        $sql2 = "SELECT @out_status as message";
        $rs = $this->db->Execute($sql2);        
        $status = $rs->getArray();
        
        if($status[0]["message"] == "OK"){
            $data = $allPedidos;
        }else{
            $data = array();
        }
        
        return $data;          
        
    }
    
    function saveNewArticulo($codInterno, $nameArticulo, $codProveedor,$idProveedor) {
  
        $sql           = "call spInsArticulo('$codInterno', '$nameArticulo', '$codProveedor',$idProveedor, @out_status);";                
        $result        = $this->db->Execute($sql);
        $result->Close();

        $sql2 = "SELECT @out_status as message";
        $rs = $this->db->Execute($sql2);                
        $status = $rs->getArray();
        $result->Close();
        
        if($status[0]["message"] == "OK"){
            $message = 0;    
        }else{
            $message = 1;
        }

        return $message;        
        
    }
    
    function getHeaderPedido($idPedido) {
        
        $sqlx       = "call spGetEncabezadoPedido($idPedido, @out_status);"; 
        $result     = $this->db->Execute($sqlx);
        $infoPedido = $result->getArray();        
        $result->Close();
        
        $sql2 = "SELECT @out_status as message";
        $rs = $this->db->Execute($sql2);        
        $status = $rs->getArray();        
        if($status[0]["message"] == "OK"){
            $data = $infoPedido[0];
        }else{
            $data = array();
        }
        
        return $data;        
    }
    
    function getDetallePedido($idPedido) {
        
        $sql       = "call spGetDetallePedido($idPedido, @out_status);";                
        $result    = $this->db->Execute($sql);
        $detPedido = $result->getArray();
        $result->Close();

        $sql2 = "SELECT @out_status as message";
        $rs = $this->db->Execute($sql2);                
        $status = $rs->getArray();
        $result->Close();
        
        if($status[0]["message"] == "OK"){
            $dataPedido = $detPedido;    
        }else{
            $dataPedido = 0;    
        }

        return $dataPedido;
    }
  
	function getDetallePedidoGrupo($idPedido) {
        
        $sql       = "call spGetDetallePedidoGrupo($idPedido, @out_status);";                
        $result    = $this->db->Execute($sql);
        $detPedido = $result->getArray();
        $result->Close();

        $sql2 = "SELECT @out_status as message";
        $rs = $this->db->Execute($sql2);                
        $status = $rs->getArray();
        $result->Close();
        
        if($status[0]["message"] == "OK"){
            $dataPedido = $detPedido;    
        }else{
            $dataPedido = 0;    
        }

        return $dataPedido;
    }
      
    
    function delPedido($idPedido) {
  
        $sql           = "call spDelPedido($idPedido, @out_status);";                
        $result        = $this->db->Execute($sql);
        $result->Close();

        $sql2 = "SELECT @out_status as message";
        $rs = $this->db->Execute($sql2);                
        $status = $rs->getArray();
        $result->Close();
        
        if($status[0]["message"] == "OK"){
            $message = $status[0]["message"];    
        }else{
            $message = "ERROR";
        }

        return $message;        
        
    }
  
    function getAllEventos() {
        
        $sqlx        = "call spGetAllEventos(@out_status);"; 

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
    
    function getEventosPedido($idPedido) {
        $sqlx        = "call spGetAllPedidoEventos($idPedido, @out_status);"; 

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
    
    function saveEvento($idPedido, $idEvento, $comentario) {
  
        $sql      = "call spInsPedEvenSegui($idPedido, $idEvento, '$comentario', @pfecEvento, @puserIns, @out_status);";                
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
    
    function getAllTiposDocs() {
                
        $sqlx        = "call spGetAllTipoDocumentos(@out_status);"; 

        $result      = $this->db->Execute($sqlx);
        $listDocs = $result->getArray();     
        $result->Close();
          
        $sql2 = "SELECT @out_status as message";
        $rs = $this->db->Execute($sql2);        
        
        $status = $rs->getArray();
        
        if($status[0]["message"] == "OK"){
            $data = $listDocs;
        }else{
            $data = array();
        }
        
        return $data;         
        
    }
    
    function getAllDocsPedido($idPedido) {
        
        $sqlx     = "call spGetAllDocusPedido($idPedido, @out_status);"; 

        $result   = $this->db->Execute($sqlx);
        $listDocs = $result->getArray();     
        $result->Close();
          
        $sql2 = "SELECT @out_status as message";
        $rs = $this->db->Execute($sql2);        
        
        $status = $rs->getArray();
        
        if($status[0]["message"] == "OK"){
            $data = $listDocs;
        }else{
            $data = array();
        }
        
        return $data;
    }
  
    function saveDocs($idPedido, $idTipoDoc, $fecDoc, $fechaPago,$numDoc, $montoDoc, $idMoneda, $comentario) {
  
        $sql      = "call spInsPedDocSegui($idPedido, $idTipoDoc, '$fecDoc','$fechaPago', '$numDoc', $montoDoc, '$idMoneda', '$comentario', @pfecIns, @puserIns, @out_status);";                
        $result   = $this->db->Execute($sql);        
        $result->Close();

        $sql2   = "SELECT @pfecIns as fecDoc, @puserIns as userIns, @out_status as message";
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
    


    function getTipoDocumento($idDoc) {
    
        
    	$sqlx         = "call spGetTipoDocumento($idDoc,@out_status);";    
    	$result       = $this->db->Execute($sqlx);
    	$tipoDocumento = $result->getArray();
    	$result->Close();
    
    	$sql2 = "SELECT @out_status as message";
    	$rs = $this->db->Execute($sql2);
    	$status = $rs->getArray();
    
    	if($status[0]["message"] == "OK"){
                        $data = $tipoDocumento[0];
    	}else{
                        $data = array();
    	}
    
    	return $data;        
        
    }
    
    function saveDocsconDesglose($idPedido, $idTipoDoc, $fecDoc, $fechaPago,$numDoc, $montoDoc, $idMoneda, $comentario, $desMontos) {
  
        $sql      = "call spInsPedDocSegui($idPedido, $idTipoDoc, '$fecDoc','$fechaPago', '$numDoc', $montoDoc, '$idMoneda', '$comentario', @pfecIns, @puserIns, @out_status);";                
        $result   = $this->db->Execute($sql);        
        $result->Close();

        $sql2   = "SELECT @pfecIns as fecDoc, @puserIns as userIns, @out_status as message";
        $rs     = $this->db->Execute($sql2);                
        $status = $rs->getArray();
        
        $fechaDoc = $status[0]["fecDoc"];
        $userIns = $status[0]["userIns"];        
        $rs->Close();
        
        /**
         * Cambio Realizado por Esteban Ramirez
         * Fecha: 21/07/2015
         * Descripcion: Ahora se envia un solo parámetro separado por comas con el desgloce de los montos.
         */
        if(strlen($desMontos) > 1){
            $sql3      = "call spInsPedDocDesglose($idPedido, '$fecDoc', '$numDoc', '$desMontos', @out_status);";                 
            $result3   = $this->db->Execute($sql3);        
            $result3->Close();       
            
            $sql4 = "SELECT @out_status as message";
            $rs4 = $this->db->Execute($sql4);                
            $status = $rs4->getArray();
            $rs4->Close();            
            
            $message["message"] = $status[0]["message"];
            $message["fecDoc"] = $fechaDoc;
            $message["userIns"] = $userIns;
            
        }else{
            $message["fecDoc"] = $fechaDoc;
            $message["userIns"] = $userIns;
        }
        
        if($status[0]["message"] == "OK"){

            $sql   = "call spInsPedidoEvento($idPedido,59,'SISTEMA',@out_status);";
            $resul = $this->db->Execute($sql);
            $resul->Close();            
        
        }else{
            $message = 0;
        }

        return $message;        
        
    }

    

   function updateDocconDesglose($idPedido, $idTipoDoc, $fecDoc, $fechaPago,$numDoc, $montoDoc, $idMoneda, $comentario, $desMontos) {
  
        $sql      = "call spModDocuPedido($idPedido, $idTipoDoc, '$fecDoc', '$fechaPago','$numDoc', $montoDoc, '$idMoneda', '$comentario',@out_status);";                

        $result   = $this->db->Execute($sql);        
        $result->Close();

        $sql2   = "SELECT @out_status as message";
        $rs     = $this->db->Execute($sql2);                
        $status = $rs->getArray();
        $rs->Close();
        
        /**
         * Cambio Realizado por Esteban Ramirez
         * Fecha: 27/07/2015
         * Descripcion: Ahora se envia un solo parámetro separado por comas con el desgloce de los montos.
         */	        	            			
        $sql3      = "call spInsPedDocDesglose($idPedido, '$fecDoc', '$numDoc', '$desMontos', @out_status);";                

        $result3   = $this->db->Execute($sql3);        
        $result3->Close();
        
        
        $sql2 = "SELECT @out_status as message";
        $rs = $this->db->Execute($sql2);        
        
        $status = $rs->getArray();

        $message = $status[0]["message"];
        
        return $message;        
        
    }
        
    function getDocuPedido($idPedido, $fecDoc, $numDoc) {
		
    	$sqlx     = "call spGetDocuPedido($idPedido, '$numDoc','$fecDoc',@out_status);"; 

        $result   = $this->db->Execute($sqlx);
        $DocuPedido = $result->getArray();     
        $result->Close();
          
        $sql2 = "SELECT @out_status as message";
        $rs = $this->db->Execute($sql2);        
        
        $status = $rs->getArray();
        
        if($status[0]["message"] == "OK"){
            $data = $DocuPedido;
        }else{
            $data = array();
        }
        
        return $data;    	
    }

    function getPedDocDesglose($idPedido, $fecDoc, $numDoc) {

    	$sqlx     = "call spGetPedDocDesglose($idPedido, '$fecDoc','$numDoc',@out_status);"; 

        $result   = $this->db->Execute($sqlx);
        $PedDocDesglose = $result->getArray();     
        $result->Close();
          
        $sql2 = "SELECT @out_status as message";
        $rs = $this->db->Execute($sql2);        
        
        $status = $rs->getArray();
        
        if($status[0]["message"] == "OK"){
            $data = $PedDocDesglose;
        }else{
            $data = array();
        }
        
        return $data;    	    	
    }
    
    function buscarFactProveedor($idProveedor, $idTarjeta,$fecCorte,$SoloConciliados) {
    	$sqlx     = "call spGetPedDocsConciliar($idProveedor, $idTarjeta,'$fecCorte','$SoloConciliados',@out_status);"; 
//echo $sqlx;exit;
        $result   = $this->db->Execute($sqlx);

     
        $PedFacProveedor = $result->getArray();     
        $result->Close();
          
        $sql2 = "SELECT @out_status as message";
        $rs = $this->db->Execute($sql2);        
        
        $status = $rs->getArray();
        
        if($status[0]["message"] == "OK"){
            $data = $PedFacProveedor;
        }else{
            $data = array();
        }
        
        return $data;    	      	
    }
    
    
    function buscarFactProveedorConciliadas($idProveedor, $idTarjeta,$fecCorte) {
    	$sqlx     = "call spGetPedDocsConciliados($idProveedor, $idTarjeta,'$fecCorte',@out_status);";
    
    	$result   = $this->db->Execute($sqlx);
    
    	 
    	$PedFacProveedor = $result->getArray();
    	$result->Close();
    
    	$sql2 = "SELECT @out_status as message";
    	$rs = $this->db->Execute($sql2);
    
        $status = $rs->getArray();
    
            if($status[0]["message"] == "OK"){
            $data = $PedFacProveedor;
    }else{
    $data = array();
    }
    
    		return $data;
    }
    
    
    function saveDocsConciliar($tableData,$fCorte,$numTarjeta,$idProveedor,$action) {
    	//Procesar todos los registro del arreglo
    	// Los elementos del arreglo son: Pedido, Factura, FechaFactura, EstaSel (es igual 'SI' si esta seleccionado)
    	//
    	
    	// Se inicializa la variable message con OK. 
    	$message='OK';
    	
    	// se inserta el encabezado de la conciliacion
    	if ($action == "1"){
    		// es una insercion
    		$sql = "call spInsConciliaTarjeta($numTarjeta,'$fCorte',@out_status);";
    		//echo $sql;exit;
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
    	}
        foreach ($tableData as $key => $docu) {
			foreach ($docu as $pos => $val){
				switch($pos){
    			case 'Pedido':
    				// 2015/02/16
    				// William Jimenez
    				// Se cambia la linea siguiente, a partir del 2013 el id del pedido es la concatenacion
    				// del ano y el consecufivo.
    				// El formato con el que venia es 15-3, antes se utilizaba lo que estaba 
    				// despues del -, pero a partir del 2015 se suprime el guion y el numero de pedido
    				// es todo el campo
    				//$idPedido=substr($val,strpos($val,'-')+1,strlen($val)-strpos($val,'-')-1); 
    				$idPedido=str_replace("-","",$val);
    				break;
    		
    			case 'Factura':
    				if (!strpos($val,'(')){
    					// NO es un documento con desglose
    					$idMonto=0;
    					$numDoc = $val;
    				}else{
    					// SI es un documento con desglose
    					// campo numero de documento viene en el siguiente formato
    					// xxxxxx(y) donde x es el numero del documento y (y) es el consecutivo
    					// de los montos de desglose que el usuario registro. 
    					// ejemplo: 134232(1), 134232(2)
    					// Ahora hay que estraer el numero de documento y el el campo idMonto
    					// para extraer el idMonto se utiliza substr(string, strabuscar,length).
    					// Como el ultimo parametro es length, por eso se utiliza la funcion strpos
    					// Se hace una diferencia entre entre la posicion donde esta el ) y la posicion
    					// donde esta el ( y se le resta 1
    					// 1212(1)
						// 0123456
						$numDoc = substr($val,0,strpos($val,'('));
   						$idMonto= substr($val,strpos($val,'(')+1,strpos($val,')')-strpos($val,'(')-1);    					
    				}
		    		break;
		    		
    			case 'FechaFactura':
    				$tempFC     = explode("/", $val);
    				$fecDoc = "$tempFC[2]-$tempFC[1]-$tempFC[0]";    	    		    		
    				break;    	
    					
    			case 'EstaSel': 
    				if ($val=='SI'){   					
    					$fConcilia = $fCorte;
    				}else{
    					$fConcilia = NULL;
    				}		
    				break;
    		
    			} // switch
    		} // foreach ($docu..
    		// Ya se tienen las variables para actualizar los documentos
    		// con la fecha de corte
    		if($idMonto==0){
    			$sql = "call spModDocuPedidoConcilia($idPedido,'$numDoc','$fConcilia',@out_status);";
    		}else{
    			$sql = "call spModDocuPedidoDesgloConcilia($idPedido,'$numDoc','$fecDoc',$idMonto,'$fConcilia',@out_status);";
    		}
    		//echo $sql;exit;
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
        } // foreach ($tabledata...
        // Si todo fue exitoso, la variable message trae el valor OK
        return $message;       	    	
    }// function saveDocsConciliar

    function saveGuiaWHRs($tableData,$numGuia) {
    	//Procesar todos los registro del arreglo
    	// Los elementos del arreglo son: Whr, EstaSel (es igual 'SI' si esta seleccionado)
    	//
    	
    	// Se inicializa la variable message con OK. 
    	$message='OK';
        foreach ($tableData as $key => $docu) {
			foreach ($docu as $pos => $val){
				switch($pos){
    			case 'Whr':
    				$whr=$val; 
    				break;
    		    					
    			case 'EstaSel': 
    				$siAgrega =$val;
    				if ($val=='SI'){   					
    					$siAgrega = 'SI';
    				}else{
    					$siAgrega = 'NO';
    				}		
    				break;
    		
    			} // switch
    		} // foreach ($docu..
    		// Ya se tienen las variables para actualizar los documentos
    		// con la fecha de corte
    		if($siAgrega=='SI'){
    			$sql = "call spInspedGuiaWhrs('$numGuia','$whr',@out_status);";

//    		echo $sql;exit;
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
            }//siAgrega                 		
        } // foreach ($tabledata...
        // Si todo fue exitoso, la variable message trae el valor OK
        return $message;       	    	
    }// function saveGuiaWHRs    
    
    
    function queryItemsOrders($criterio, $texto) {
           
        $sql = "call spQueryItemsOrders($criterio,'$texto',@out_status);";

        $rs = $this->db->Execute($sql);

        $data = $rs->getArray();
        
        return $data;        
       
    } // function queryItemsOrders....
    
    
    function queryItemsOrdersLibera($criterio, $texto, $estaSel) {
    	 
    	$sql = "call spQueryItemsOrdersLibera($criterio,'$texto','$estaSel',@out_status);";
    
    	$rs = $this->db->Execute($sql);
    
    	$data = $rs->getArray();
    
    	return $data;
    	 
    } // function queryItemsOrders....
    
    function queryInputItemsOrders($criterio, $texto, $factAplicar) {
           
        $sql = "call spQueryInputItemsOrders($criterio,'$texto', $factAplicar,@out_status);";

        $rs = $this->db->Execute($sql);

        $data = $rs->getArray();
        $rs->Close();
        
        
        return $data;        
       
    } // function queryItemsOrders....   
    

    function queryItemsOrdersBodega($criterio, $texto) {
    	 
    	$sql = "call spQueryItemsOrdersBodega($criterio,'$texto',@out_status);";
    
    	$rs = $this->db->Execute($sql);
    
    	$data = $rs->getArray();
    	$rs->Close();
    
    
    	return $data;
    	 
    } // function queryItemsOrders....    
    
    function getAllUserOptHide($userName){
		$sql = "call spGetOptHide('$userName',@out_status);";

        $rs = $this->db->Execute($sql);

        $data = $rs->getArray();
        $rs->Close();
        return $data;        
    	
    }
    
    function updateEncabezadoPedidoWHRTrackNo($pidPedido,$pedWHR,$pedTrackNo){

        $sql           = "call spModPedidoWHRTrackNo($pidPedido,'$pedWHR','$pedTrackNo',@out_status);";
               
        $result        = $this->db->Execute($sql);
        $result->Close();

        $sql2 = "SELECT @out_status as message";
        $rs = $this->db->Execute($sql2);                
        $status = $rs->getArray();
        $result->Close();
        
        if($status[0]["message"] == "OK"){
            $result = 1;    
        }else{
            $result = 0;
        }
        
        if($status[0]["message"] == "OK"){
            $sql   = "call spInsPedidoEvento($pidPedido,5,'SISTEMA',@out_status);";
            $resul = $this->db->Execute($sql);
            $resul->Close();
        }else{
            $result = 0;
        }
        
         return $result;        
    }
    
    function updateDetallePedidoWHRTrackNo($pidPedido, $numLine, $linWHR, $linTrackNo){

        $sql           = "call spModDetallePedidoWHRTrackNo($pidPedido, $numLine, '$linWHR','$linTrackNo',@out_status);";              
        $result        = $this->db->Execute($sql);
        $result->Close();

        $sql2 = "SELECT @out_status as message";
        $rs = $this->db->Execute($sql2);                
        $status = $rs->getArray();
        $rs->Close();
        
        if($status[0]["message"] == "OK"){
            $message = $status[0]["message"];    
        }else{
            $message = "ERROR";
        }

        return $message;           	
    }

    function updateDetallePedidoCantRecib($pidPedido, $numLine, $linCantRecibida, $linComentRecepcion){

        $sql           = "call spModDetallePedidoCantRecib($pidPedido, $numLine, $linCantRecibida,'$linComentRecepcion',NULL,NULL,@out_status);";              
        $result        = $this->db->Execute($sql);
        $result->Close();

        $sql2 = "SELECT @out_status as message";
        $rs = $this->db->Execute($sql2);                
        $status = $rs->getArray();
        $rs->Close();
        
        if($status[0]["message"] == "OK"){
            $message = $status[0]["message"];    
        }else{
            $message = "ERROR";
        }

        return $message;           	
    }
    
    function saveCantRecibida($tableData) {
    	//Procesar todos los registro del arreglo
    	// Los elementos del arreglo son: Pedido, IdLinea, Codigo, CantRecibida, Comentario
    	//
    	
    	// Se inicializa la variable message con OK. 
    	$message='OK';
        foreach ($tableData as $key => $docu) {
			foreach ($docu as $pos => $val){
				switch($pos){
    			case 'Pedido':
    				$idPedido=$val; 
    				break;
    		
    			case 'IdLinea':
   					$idLinea = $val;
		    		break;
		    		
    			case 'Codigo':
    				$codigo  = $val;    	    		    		
    				break;    	
    					
    			case 'CantRecibida':
    				//$cantRecibida = $val;  
    				$cantRecibida = str_replace(" ", "+", $val);
    				
    				//if (!isset($val) || $val == ''){
    				//	$cantRecibida = '0';
    				//}else {
    				//	$cantRecibida = $val;
    				//}   					
    				break;
    				
    				
    			case 'CantTotal':
    				if (!isset($val) || $val == ''){
    					$cantTotal = '0';
    				}else {
    					$cantTotal = $val;
    				}   					
    				break;
    				
    				
    			case 'CantDif':
    				if (!isset($val) || $val == ''){
    					$cantDif = '';
    				}else {
    					$cantDif = $val;
    				}   					
    				break;
    				
    				
    			case 'Comentario':
    				$comentario = $val;    	    		    		
    				break;    	    				
    			} // switch
    		} // foreach ($docu..
    		// Ya se tienen las variables para actualizar el detalle del pedido
    		// con la fecha de corte

    		$sql = "call spModDetallePedidoCantRecib($idPedido,$idLinea,'$codigo',$cantTotal,'$comentario','$cantRecibida',$cantDif,@out_status);";
  //  echo $sql;exit;		
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
        } // foreach ($tabledata...
        // Si todo fue exitoso, la variable message trae el valor OK
        return $message;       	    	
    }// function saveCantRecibida

    function saveLiberaMercaderia($tableData) {
    	//Procesar todos los registro del arreglo
    	// Los elementos del arreglo son: Pedido, IdLinea, Codigo, CantRecibida, Comentario
    	//
    	 
    	// Se inicializa la variable message con OK.
    	$message='OK';
    	foreach ($tableData as $key => $docu) {
    		foreach ($docu as $pos => $val){
    			switch($pos){
    				case 'Pedido':
    					$idPedido=$val;
    					break;
    
    				case 'IdLinea':
    					$idLinea = $val;
    					break;
    
    				case 'Codigo':
    					$codigo  = $val;
    					break;
    						
    				case 'EstaSel':
    					$estaSel = $val;
    					break;
    		} // switch
    	} // foreach ($docu..
    	// Ya se tienen las variables para actualizar el detalle del pedido
    	// con la fecha de corte
        
    		$sql = "call spModDetallePedidoLiberaMerca($idPedido,$idLinea,'$codigo','$estaSel',@out_status);";
    		//  echo $sql;exit;
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
        
    } // foreach ($tabledata...
    // Si todo fue exitoso, la variable message trae el valor OK
    return $message;
    }// function saveLiberaMercaderia

    
    function saveIngreMerca($ingreMerca,$tableData) {
    	//Procesar todos los registro del arreglo
    	// Los elementos del arreglo son: Pedido, IdLinea, Codigo, CantRecibida, Comentario
    	//
    	    	
    	// Se inicializa la variable message con OK.
    	$message='OK';
    	foreach ($tableData as $key => $docu) {
    		foreach ($docu as $pos => $val){
    			switch($pos){
    				case 'Pedido':
    					$idPedido=$val;
    					break;
    
    				case 'IdLinea':
    					$idLinea = $val;
    					break;
    
    				case 'Codigo':
    					$codigo  = $val;
    					break;
    						
    				case 'CostoNuevo':
    					$costoNuevo =  $val;
    					break;
    
    				case 'UtilNueva':    					
    					$utilNueva =  $val;
    					break;
    					
    				case 'PrecioNuevo':
    					$precioNuevo =  $val;
    					break;

    				case 'CantIngInv':
    					$cantIngInv =  $val;
    					break;
    					
    				case 'Factor':
    					$factor =  $val;
    					break;

    				case 'AjusteFactor':
    					$ajusteFactor =  $val;
    					break;
    					
    						    
    		} // switch
    	} // foreach ($docu..
    	// Ya se tienen las variables para actualizar el detalle del pedido
    	// con la fecha de corte
    
    	$sql = "call spModDetalleIngreMerca('$ingreMerca',$idPedido,$idLinea,'$codigo',$costoNuevo,$utilNueva,$precioNuevo,$cantIngInv,$factor,$ajusteFactor,@out_status);";
    	//  echo $sql;exit;
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
    } // foreach ($tabledata...

    // Si todo fue exitoso, la variable message trae el valor OK
    return $message;
    }// function saveIngreMerca    
    
	function getAllGuias() {

    	$sqlTxt     = "call spAllpedGuias(@out_status);"; 
        $result   = $this->db->Execute($sqlTxt);
        $allGuias = $result->getArray();     
        $result->Close();
          
        $sqlTxt = "SELECT @out_status as message";
        $result = $this->db->Execute($sqlTxt);                
        $status = $result->getArray();
        $result->Close();
        
        if($status[0]["message"] == "OK"){
            $data = $allGuias;
        }else{
            $data = array();
        }        
        return $data;    	    	
    }
    
	function buscarDetalleGuia($numGuia) {
        
        $sqlTxt = "call spGetpedGuias('$numGuia',@out_status);";
        $result   = $this->db->Execute($sqlTxt);
        $infoGuia = $result->getArray();     
        $result->Close();
          
        $sqlTxt = "SELECT @out_status as message";
        $result = $this->db->Execute($sqlTxt);                
        $status = $result->getArray();
        $result->Close();
        
        if($status[0]["message"] == "OK"){
            $data = $infoGuia;
        }else{
            $data = array();
        }        
        return $data;    	    	
        
    }

	function borrarGuia($numGuia) {
        
        $sqlTxt = "call spDelpedGuias('$numGuia',@out_status);";
        $result   = $this->db->Execute($sqlTxt);     
        $result->Close();
          
        $sqlTxt = "SELECT @out_status as message";
        $result = $this->db->Execute($sqlTxt);                
        $status = $result->getArray();
        $result->Close();
        
        if($status[0]["message"] == "OK"){
            $data = "OK";
        }else{
            $data = $status[0]["message"];
        }        
        return $data;    	    	
        
    }    

    
	function insertarGuia($numGuia,$descripcion) {
        
        $sqlTxt = "call spInspedGuias('$numGuia','$descripcion',@out_status);";
        
        $result   = $this->db->Execute($sqlTxt);
             
        $result->Close();
         
        $sqlTxt = "SELECT @out_status as message";
        $result = $this->db->Execute($sqlTxt);                
        $status = $result->getArray();
        $result->Close();
        
        if($status[0]["message"] == "OK"){
            $data = "OK";
        }else{
            $data = $status[0]["message"];
        }        
        return $data;    	    	
        
    }

	function modificarGuia($numGuia,$descripcion) {
        
        $sqlTxt = "call spModpedGuias('$numGuia','$descripcion',@out_status);";
        $result   = $this->db->Execute($sqlTxt);     
        $result->Close();
          
        $sqlTxt = "SELECT @out_status as message";
        $result = $this->db->Execute($sqlTxt);                
        $status = $result->getArray();
        $result->Close();
        
        if($status[0]["message"] == "OK"){
            $data = "OK";
        }else{
            $data = $status[0]["message"];
        }        
        return $data;    	    	
        
    }    

	function getAllGuiaWhrs($numGuia) {

    	$sqlTxt     = "call spGetpedGuiaAllWhrs('$numGuia',@out_status);"; 
        $result   = $this->db->Execute($sqlTxt);
        $allGuiaWhrs = $result->getArray();     
        $result->Close();
          
        $sqlTxt = "SELECT @out_status as message";
        $result = $this->db->Execute($sqlTxt);                
        $status = $result->getArray();
        $result->Close();
        
        if($status[0]["message"] == "OK"){
            $data = $allGuiaWhrs;
        }else{
            $data = array();
        }        
        return $data;    	    	
    }

	function insertarGuiaWhr($numGuia,$whr) {
        
        $sqlTxt = "call spInspedGuiaWhrs('$numGuia','$whr',@out_status);";
      
        $result   = $this->db->Execute($sqlTxt);
             
        $result->Close();
         
        $sqlTxt = "SELECT @out_status as message";
        $result = $this->db->Execute($sqlTxt);                
        $status = $result->getArray();
        $result->Close();
        
        if($status[0]["message"] == "OK"){
            $data = "OK";
        }else{
            $data = $status[0]["message"];
        }        
        return $data;    	    	
        
    }

	function modificarGuiaWhr($numGuia,$whr,$whrAnt) {
        
        $sqlTxt = "call spModpedGuiaWhrs('$numGuia','$whr','$whrAnt',@out_status);";

        $result   = $this->db->Execute($sqlTxt);     
        $result->Close();
          
        $sqlTxt = "SELECT @out_status as message";
        $result = $this->db->Execute($sqlTxt);                
        $status = $result->getArray();
        $result->Close();
        
        if($status[0]["message"] == "OK"){
            $data = "OK";
        }else{
            $data = $status[0]["message"];
        }        
        return $data;    	    	
        
    }        

	function borrarGuiaWhr($numGuia,$whr) {
        
        $sqlTxt = "call spDelpedGuiaWhrs('$numGuia','$whr',@out_status);";
   
        $result   = $this->db->Execute($sqlTxt);     
        $result->Close();
          
        $sqlTxt = "SELECT @out_status as message";
        $result = $this->db->Execute($sqlTxt);                
        $status = $result->getArray();
        $result->Close();
        
        if($status[0]["message"] == "OK"){
            $data = "OK";
        }else{
            $data = $status[0]["message"];
        }        
        return $data;    	    	
        
    }     
    
	function buscarDetalleGuiaWhr($numGuia,$whr) {
        
        $sqlTxt = "call spGetpedGuiaWhrs('$numGuia','$whr',@out_status);";

        $result   = $this->db->Execute($sqlTxt);
        $infoGuiaWhr = $result->getArray();     
        $result->Close();
          
        $sqlTxt = "SELECT @out_status as message";
        $result = $this->db->Execute($sqlTxt);                
        $status = $result->getArray();
        $result->Close();
        
        if($status[0]["message"] == "OK"){
            $data = $infoGuiaWhr;
        }else{
            $data = array();
        }        
        return $data;    	    	
        
    }

	function getSelGuiaWhrs() {

    	$sqlTxt     = "call spGetpedSelGuiaWhrs(@out_status);"; 
        $result   = $this->db->Execute($sqlTxt);
        $allGuiaWhrs = $result->getArray();     
        $result->Close();
          
        $sqlTxt = "SELECT @out_status as message";
        $result = $this->db->Execute($sqlTxt);                
        $status = $result->getArray();
        $result->Close();
        
        if($status[0]["message"] == "OK"){
            $data = $allGuiaWhrs;
        }else{
            $data = array();
        }        
        return $data;    	    	
    }
    
	function getAllFactor($idFactor) {
      
    	$sqlTxt   = "call spGetAllFactor($idFactor,@out_status);"; 
    
        $result   = $this->db->Execute($sqlTxt);
        $allFactor = $result->getArray();     
        $result->Close();
        return $allFactor;
    	    	
    } 

    function getAllEncFactor() {
    
    	$sqlTxt   = "call spGetAllEncFactor(@out_status);";
    
    	$result   = $this->db->Execute($sqlTxt);
    	$allFactor = $result->getArray();
    	$result->Close();
    	return $allFactor;
    
    }
    
    function getAllOptHide($userName) {    	  	
        $sql = "call spGetOptHide('$userName',@out_status);";
        $rs = $this->db->Execute($sql);
      	$data = $rs->getArray();
		$rs->Close();
    	return $data;        
    }
    
    function getFactoresPedido($idPedido) {
    
    	$sqlx       = "call spGetFactoresPedido($idPedido, @out_status);";
    	$result     = $this->db->Execute($sqlx);
    	$idFactor   = $result->getArray();
    	$result->Close();
    	return $idFactor;
    }
    
    
    function getAllConciliaTarjetas() {
    
    	$sqlTxt   = "call spGetAllConciliaTarjetas(@out_status);";
    
    	$result   = $this->db->Execute($sqlTxt);
    	$allData = $result->getArray();
    	$result->Close();
    	return $allData;
    
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


    function buscarEncPedidoNac($idPedido) {
         
        $sql = "call spGetEncPedidoNac($idPedido,@out_status);";
        //echo $sql;exit;
        $rs = $this->db->Execute($sql);
    
        $data = $rs->getArray();
        $rs->Close();
        return $data;
         
    }
    
    //ACTIVO
    function buscarDetPedidoNac($idPedido) {
         
        $sql = "call spGetDetPedidoNac($idPedido,@out_status);";
        //echo $sql;exit;
        $rs = $this->db->Execute($sql);
    
        $data = $rs->getArray();
        $rs->Close();
        return $data;
    
    }

    function getPorceIV(){
        $sql = "call spGetPorceIV(@out_status);";
        $rs = $this->db->Execute ($sql);
        $data = $rs->getArray();
        $rs->Close();
        return $data;
    }

    function getAllPedidosFiltro($criterio) {
        
        $sqlx       = "call spGetAllPedidosFiltro('$criterio',@out_status);"; 
        $result     = $this->db->Execute($sqlx);
        $allPedidos = $result->getArray(); 
        
        $result->Close();
          
        $sql2 = "SELECT @out_status as message";
        $rs = $this->db->Execute($sql2);        
        $status = $rs->getArray();
        
        if($status[0]["message"] == "OK"){
            $data = $allPedidos;
        }else{
            $data = array();
        }
        
        return $data;          
        
    }

    function buscarProductoMoviPedido($idTienda, $criterio, $texto,$fecMoviIni,$provSel) {
    
        $sql = "call spGetArtiExistMoviFechaPedidoProv($provSel,'$criterio', '$fecMoviIni','$texto',@out_status);";
       
 //   echo $sql;exit;
        $rs = $this->db->Execute($sql);
    
        $data = $rs->getArray();
        $rs->Close();
        return $data;
    
    }

    function savePedidoPrecarga($action,$idPedido,$idProveedor,                           
                                $item,$codArti,$codProv,$cant,$cost,$precioNuevo) {
        //Procesar todos los registro del arreglo
        // Los elementos del arreglo son: IdLinea, Codigo, Desc, Costo, Canti
        //
                
        // Se inicializa la variable message con OK.
   
        $message='OK';
        
        switch ($action){
            case '1':       
                // si es insertar pedido se inserta el pedido

                $sql    = "call spInsPedidoPrecarga($idProveedor,@out_idPedido,@out_status);";
 //  echo $sql;exit;
                $result = $this->db->Execute($sql);
                $result->Close();
            
                $sql     = "SELECT @out_idPedido as idPedido, @out_status as message";
                $rs      = $this->db->Execute($sql);
                $status  = $rs->getArray();
                $result->Close();
                if($status[0]["message"] == "OK"){
                    $idPedido = $status[0]["idPedido"];
                }else{
                    // hubo un error inesperado
                    $message = $status[0]["message"];
                    
                }
                break;
            case '2':
                // modificar pedido que no se ha recibido la mercaderia.
                // lo unico que se puede cambiar es el proveedor
                $sql    = "call spModPedidoPrecarga($idPedido,$idProveedor,@out_status);";
 //   echo $sql;exit;
                $result = $this->db->Execute($sql);
                $result->Close();
                
                $sql     = "SELECT @out_status as message";
                $rs      = $this->db->Execute($sql);
                $status  = $rs->getArray();
                $result->Close();
                if($status[0]["message"] != "OK"){
                    // hubo un error inesperado
                    $message = $status[0]["message"];
                    
                }else{
                        // como es modificación se borrar el detalle para luego volver a insertalo
                        $sql = "call spDelDetPedidoPrecarga($idPedido,@out_status);";
         //   echo $sql;exit;
                        $result = $this->db->Execute($sql);
                        $result->Close();
                         
                        $sql     = "SELECT @out_status as message";
                        $rs      = $this->db->Execute($sql);
                        $status  = $rs->getArray();
                        $result->Close();
                        if($status[0]["message"] != "OK"){
                            // hubo un error inesperado
                            $message = $status[0]["message"];
                            
                        }
                }
                break;            
                            
        } // switch $action 
        if ($message == "OK"){      
                $i=0;
                 
                foreach($item as $key => $value){
                    $vcodArti = $codArti[$key];
                    $vcodProv = $codProv[$key];
                    $vcant    = $cant[$key];
                    $vcant    = str_replace(',', '', $vcant);
                    $vcost    = $cost[$key];
                    $vcost    = str_replace(',', '', $vcost);
                    $vitem    = $item[$key];        
                    $i=$i+1;

                        $sql = "call spInsDetPedidoPrecarga($idPedido,$i,'$vcodArti','$vcodProv','$vitem',$vcant,$vcost,@out_status);";
         //   echo $sql;exit;                               
                    $rs = $this->db->Execute($sql);             
                    $rs->Close();           
                    $sql = "SELECT @out_status as message";
                    $rs = $this->db->Execute($sql);
                    $status = $rs->getArray();
                    $rs->Close();
                    $message = $status[0]["message"];
           
                    if ($message !== 'OK'){
                        // Hubo en error inesperado en la operacion en la base de datos.
                        // La variable $result  tiene el mensaje que se le debe
                        // desplegar al usuario                 
                        return $message;
                    }
                } // foreach
        }
        // Si todo fue exitoso, la variable message trae el valor OK
        return $message;
    }


    function buscarEncPedidoPrecarga($idPedido) {
         
        $sql = "call spGetEncPedidoPrecarga($idPedido,@out_status);";
        //echo $sql;exit;
        $rs = $this->db->Execute($sql);
    
        $data = $rs->getArray();
        $rs->Close();
        return $data;
         
    }
    
    //ACTIVO
    function buscarDetPedidoPrecarga($idPedido) {
         
        $sql = "call spGetDetPedidoPrecarga($idPedido,@out_status);";
        //echo $sql;exit;
        $rs = $this->db->Execute($sql);
    
        $data = $rs->getArray();
        $rs->Close();
        return $data;
    }


    function getArticulo($criterio,$valor) {
    
        $sql = "call spGetArtiTomaFisica('$criterio','$valor',@codArti,@codArtiProveedor,@codigoBarras,@desArticulo,@artiExiste,@out_status);";
        // echo $sql;exit;
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
    
        echo $message;
    
    }   
    
    
}

?>