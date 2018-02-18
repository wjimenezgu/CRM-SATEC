<?php

class modelData {

    // funciones base que debe tener todo model
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
     
    // A partir de aca las funciones propias del modulo    
    
    function getAllData() {
        
        $sql = "call spGetAllTiendas(@out_status);";
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

    
        
    function insertarData($id,$nomt,$nomcia,$cjurid,$dir,$ubic,$telf,$textad,$corr,$leytri,$confac,$conpro,$conaprt,$conrep,$conajs,$contrasl,$tipomosal,$tipomoen,$consnotacr,$confactman,$conseclien) {
        
 
        
        $sql = "call spInsTienda('$id','$nomt','$nomcia','$cjurid','$dir','$ubic','$telf','$textad','$corr','$leytri','$confac','$conpro','$conaprt','$conrep','$conajs','$contrasl','$tipomosal','$tipomoen','$consnotacr','$confactman','$conseclien',@out_status);";
        //echo $sql;
        //exit ;
        $rs = $this->db->Execute($sql);
        $rs->Close();
        
        $sql = "SELECT @out_status as message";
        $rs = $this->db->Execute($sql);                
        $status = $rs->getArray();
        $rs->Close();

        $message = $status[0]["message"];
        return $message;          
    }
    
    function borrarData($id) {
        
        
        $sql = "call spDelTienda('$id',@out_status);";
        //echo $sql ; exit ;
        $rs = $this->db->Execute($sql);
        $rs->Close();
        
        $sql = "SELECT @out_status as message";
        $rs = $this->db->Execute($sql);                
        $status = $rs->getArray();
        $rs->Close();

        $message = $status[0]["message"];
        return $message;          
    }
    
    function modificarData($id,$nomt,$nomcia,$cjurid,$dir,$ubic,$telf,$textad,$corr,$leytri,$confac,$conpro,$conaprt,$conrep,$conajs,$contrasl,$tipomosal,$tipomoen,$consnotacr,$confactman,$conseclien) {
    
        $sql = "call spModTienda('$id','$nomt','$nomcia','$cjurid','$dir','$ubic','$telf','$textad','$corr','$leytri','$confac','$conpro','$conaprt','$conrep','$conajs','$contrasl','$tipomosal','$tipomoen','$consnotacr','$confactman','$conseclien',@out_status);";
        //echo $sql ; exit ;
        $rs = $this->db->Execute($sql);
        $rs->Close();
        
        $sql = "SELECT @out_status as message";
        $rs = $this->db->Execute($sql);                
        $status = $rs->getArray();
        $rs->Close();
      
        $message = $status[0]["message"];
        return $message;                
    }
    
    
    function buscarDetalleData($id) {
        
        $sql = "call spGetTienda('$id',@out_status);";
        //echo $sql ; exit ;
        $rs = $this->db->Execute($sql);

        $data = $rs->getArray();
        $rs->Close();
        return $data;        
        
    }

     function modificarConsecData($id,$confactman) {
        
        $sql = "call spModTiendaConseFactMan($id,$confactman,@out_status);";
        //echo $sql ; exit ;
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