<?php
require "parameters.php";
class UserConnection {

    var $db_driver; 
    var $db_host;
    var $db_user;
    var $db_pass;
    var $db_name;
    
    public function __construct($user, $pass) {
        $this->db_driver = DB_DRIVER;
        $this->db_host   = DB_HOST;
        $this->db_user   = $user;
        $this->db_pass   = $pass;
        $this->db_name   = DB_NAME;
    }
    
    function getDBDriver() {
        return $this->db_driver;
    }
    
    function getDBHost() {
        return $this->db_host;
    }
    
    function getDBUser() {
        return $this->db_user;
    }
    
    function getDBPass() {
        return $this->db_pass;
    }
    
    function getDBName() {
        return $this->db_name;
    }
    
    
}

?>
