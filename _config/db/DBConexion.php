<?php

class DBConexion {
    
    var $db;
    
    public function __construct($ruta, UserConnection $user) {
        
        if ($ruta == 1) {
            include("../../resources/libs/adodb5/adodb-exceptions.inc.php"); 
            require '../../resources/libs/adodb5/adodb.inc.php';
        }  elseif ($ruta == 2) {
            include("../resources/libs/adodb5/adodb-exceptions.inc.php"); 
            require '../resources/libs/adodb5/adodb.inc.php';
        }        
        
        $params = get_object_vars($user);
        
        
        $this->db = ADONewConnection($params["db_driver"]);   
        //$this->db->optionFlags = 65536;
        $this->db->Connect($params["db_host"], $params["db_user"], $params["db_pass"], $params["db_name"]);        
        $this->db->SetCharSet('utf8'); 
        $this->db->SetFetchMode(ADODB_FETCH_ASSOC);
        
    }
    
}

?>