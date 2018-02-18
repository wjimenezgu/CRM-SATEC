<?php

require_once 'routes.php';
require SMARTY_ROOT;

class EngineMVC extends Smarty{

    public function __construct() {
        parent::__construct();
        
        $this->template_dir = "";
        $this->compile_dir = "";
        $this->config_dir = "../_config/mvc"; 
        //$this->allow_php_tag = true;
        
    }
    
    function setModule($mod) {
        $this->template_dir = "../$mod/view";
        $this->compile_dir = "../$mod/view/compiled";
    }
    
    function setRootConfigDir($route) {
        $this->config_dir = "../".$route."_config/mvc"; 
    }
    
}

?>
