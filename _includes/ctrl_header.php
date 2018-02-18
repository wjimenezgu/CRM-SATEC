<?php
    session_start();
    error_reporting(E_PARSE);    

    
    require_once 'routes.php';
    require_once SMARTY_ENGINE;
    $mvc = new EngineMVC();
    
    $mvc->setRootConfigDir("../"); 
    $mvc->setModule("../_includes"); 

    $elements_visible = true;
    $menu_visible	  = true;
    $angularJS        = false;
    $mvc->configLoad('routes.conf', 'CSS_ROUTES');
    $mvc->configLoad('language.conf', 'SPANISH');        
    $LANGUAGE_VARS = $mvc->getConfigVars();        
    
    $mvc->assign("ELEMENTS_VISIBLE", $elements_visible);
    $mvc->assign("MENU_VISIBLE", $menu_visible);
    
    $mvc->assign("ANGULARJS", $angularJS);
    $mvc->assign("CRM_SERVER", CRM_SERVER);
    
    $inSession = $_SESSION["USER_SESSION"];
    $mvc->assign("USER_SESSION", $inSession);
    
    $header  = $mvc->fetch("header.tpl");
    $footer  = $mvc->fetch("footer.tpl");   

    $mvc->assign("HEADER_PAGE", $header);
    $mvc->assign("FOOTER_PAGE", $footer);
    
    $linkMenu = $_SERVER["PHP_SELF"];    
    $partsLink = explode("/", $linkMenu);
    
    //Menu de Navegacion
    $option_nav_menu = array(array("opt"=>$LANGUAGE_VARS["txt_home"]         , "link"=>"http://".CRM_SERVER."/".$partsLink[1]."/home"), 
                             array("opt"=>$LANGUAGE_VARS["title_system_1"]   , "link"=>"http://".CRM_SERVER."/".$partsLink[1]."/".$partsLink[2]),
                             array("opt"=>$LANGUAGE_VARS["module_1_title"]   , "link"=>"http://".CRM_SERVER."/".$partsLink[1]."/".$partsLink[2]."/".$partsLink[3]),
                             array("opt"=>$LANGUAGE_VARS["module_1_option_1"], "link"=>"http://".CRM_SERVER."/".$partsLink[1]."/".$partsLink[2]."/".$partsLink[3]."/".$partsLink[4])
                            );  
    $mvc->assign("OPTIONS_NAV_MENU", $option_nav_menu);
    $navmenu = $mvc->fetch("navmenu.tpl");    

?>  
