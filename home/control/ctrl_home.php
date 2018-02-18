<?php

    session_start();
    error_reporting(E_PARSE);

    require_once 'routes.php';
    require_once SMARTY_ENGINE;
    $mvc = new EngineMVC();
    
    $mvc->setModule("_includes"); 

    $elements_visible = true;
    $mvc->configLoad('routes.conf', 'CSS_ROUTES');
    $mvc->configLoad('language.conf', 'SPANISH');        
    $LANGUAGE_VARS = $mvc->getConfigVars();        
    //$mvc->assign("LANGUAGE", $LANGUAGE_VARS);

    $menu_visible	  = true;
    $mvc->assign("MENU_VISIBLE", $menu_visible);    
    $mvc->assign("ELEMENTS_VISIBLE", $elements_visible);
    $mvc->assign("CRM_SERVER", CRM_SERVER);
    
    $inSession = $_SESSION["USER_SESSION"];
    $mvc->assign("USER_SESSION", $inSession);
    
    $header  = $mvc->fetch("header.tpl");
    $footer  = $mvc->fetch("footer.tpl");
  
    $linkMenu = $_SERVER["PHP_SELF"];    
    $partsLink = explode("/", $linkMenu);

    //Menu de Navegacion
    $option_nav_menu = array(array("opt"=>$LANGUAGE_VARS["txt_home"]         , "link"=>"http://".CRM_SERVER."/".$partsLink[1]."/home"), 
                             array("opt"=>$LANGUAGE_VARS["txt_controlPanel"] , "link"=>"#")
                            );  

    $mvc->assign("OPTIONS_NAV_MENU", $option_nav_menu);

    $navmenu = $mvc->fetch("navmenu.tpl");    

    require '../_config/db/UserConnection.php';          
    $userConnect = new UserConnection($_SESSION["USER_SESSION"], $_SESSION["PWD_USER"] );
    require '../_config/db/DBConexion.php';
    $con = new DBConexion(2, $userConnect);      
    
    
    require 'model/modelHome.php';
    $model = new modelHome($con->db);     
    
    $infoOptHide = $model->getAllOptHide($inSession);  
    $mvc->assign("LIST_OPT_HIDE", $infoOptHide);  
	$optHide = $mvc->fetch("listOptHide.tpl");
    $mvc->assign("OPT_HIDE", $optHide);

    
    $mvc->setModule("home");
     
    $mvc->assign("HEADER_PAGE", $header);
    $mvc->assign("FOOTER_PAGE", $footer);
    
    
    $menuTabs = $mvc->fetch("menuTabs.tpl");
    $intro    = $mvc->fetch("introduction.tpl");
    $section1 = $mvc->fetch("section1.tpl");
    $section2 = $mvc->fetch("section2.tpl");
    
    //$mvc->assign("NAV_MENU", $navmenu);

    //$mvc->assign("MENU_TABS", $menuTabs);
    //$mvc->assign("INTRODUCTION", $intro);
    //$mvc->assign("SECTION_1", $section1);
    //$mvc->assign("SECTION_2", $section2);
 
    $components = $mvc->fetch("components.tpl");
    $mvc->assign("COMPONENTS", $components);
     
    $page       = $mvc->fetch("home.tpl");
    
    $mvc->setModule("_includes");     
    $mvc->assign("PAGE", $page); 
    $mvc->display("masterPage.tpl"); 


?>
