<?php
	// Se inicia una session para controlar toda la ejecucion y guardar variables.
    session_start();
  
    $_SESSION['IDSESS'] = 'A'; // se utiliza para verificar si la sesion expiro.
    //if(isset($_SESSION["TIENDA_ID"])){
    //	session_unset($_SESSION['TIENDA_ID']);
    //}
    $_SESSION["USER_SESSION"] = "root";
    $_SESSION["PWD_USER"]     = "mimacho08";
    
    error_reporting(E_PARSE); 
    
    require_once 'routes.php';
    require_once SMARTY_ENGINE;
    $mvc = new EngineMVC();
   
    $mvc->setModule("_includes"); 
    
    $elements_visible = false;
    $mvc->configLoad('routes.conf', 'CSS_ROUTES');
    $mvc->configLoad('language.conf', 'SPANISH');        

    
    $mvc->assign("ELEMENTS_VISIBLE", $elements_visible);
    $mvc->assign("CRM_SERVER", CRM_SERVER);
    $header = $mvc->fetch("header.tpl");
    $footer = $mvc->fetch("footer.tpl");
        
    $mvc->setModule("login");
    
    $mvc->assign("HEADER_PAGE", $header);
    $mvc->assign("FOOTER_PAGE", $footer);
    
    $page = $mvc->fetch("frmLogin.tpl");
        
    $mvc->setModule("_includes");     
    $mvc->assign("PAGE", $page);    
    $mvc->display("masterPage.tpl");      

?>