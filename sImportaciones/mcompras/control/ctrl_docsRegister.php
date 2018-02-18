<?php

    session_start();
    error_reporting(E_PARSE);    
    require '../../_config/db/UserConnection.php';          
    $userConnect = new UserConnection($_SESSION["USER_SESSION"], $_SESSION["PWD_USER"] );
    
    require '../../_config/db/DBConexion.php';
    $conn = new DBConexion(1, $userConnect);    
    
    require 'model/modelMCompras.php';
    $model = new modelMCompras($conn->db);
    
    require_once 'routes.php';
    require_once SMARTY_ENGINE;
    $mvc = new EngineMVC();
        
    $mvc->setRootConfigDir("../"); 
    $mvc->setModule("../_includes"); 
        
    $elements_visible = true;
    $angularJS        = true;
    $mvc->configLoad('routes.conf', 'CSS_ROUTES');
    $mvc->configLoad('language.conf', 'SPANISH');        
    $LANGUAGE_VARS = $mvc->getConfigVars();        
    //$mvc->assign("LANGUAGE", $LANGUAGE_VARS);
    $menu_visible	  = true;
    $mvc->assign("MENU_VISIBLE", $menu_visible);
    $mvc->assign("ELEMENTS_VISIBLE", $elements_visible);
    $mvc->assign("ANGULARJS", $angularJS);
    $mvc->assign("CRM_SERVER", CRM_SERVER);
    
    $inSession = $_SESSION["USER_SESSION"];
    $mvc->assign("USER_SESSION", $inSession);
    
    $header  = $mvc->fetch("header.tpl");
    $footer  = $mvc->fetch("footer.tpl");
    
    $linkMenu = $_SERVER["PHP_SELF"];    
    $partsLink = explode("/", $linkMenu);
    
    $idPedido = $_GET["id"];
    
    //Menu de Navegacion
    $option_nav_menu = array(array("opt"=>$LANGUAGE_VARS["txt_home"]           , "link"=>"http://".CRM_SERVER."/".$partsLink[1]."/home"), 
                             array("opt"=>$LANGUAGE_VARS["title_system_1"]     , "link"=>"http://".CRM_SERVER."/".$partsLink[1]."/".$partsLink[2]),
                             array("opt"=>$LANGUAGE_VARS["module_1_title"]     , "link"=>"http://".CRM_SERVER."/".$partsLink[1]."/".$partsLink[2]."/".$partsLink[3]),
                             array("opt"=>$LANGUAGE_VARS["module_1_option_3"]  , "link"=>"http://".CRM_SERVER."/".$partsLink[1]."/".$partsLink[2]."/".$partsLink[3]."/listOrders.php"),
                             array("opt"=>$LANGUAGE_VARS["module_1_option_3_3"]." [#".$idPedido."]", "link"=>"")
                            );  
    $mvc->assign("OPTIONS_NAV_MENU", $option_nav_menu);
    $navmenu = $mvc->fetch("navmenu.tpl");
        
    $mvc->setModule("mcompras");
    
    $mvc->assign("HEADER_PAGE", $header);
    $mvc->assign("FOOTER_PAGE", $footer);    
    $mvc->assign("NAV_MENU", $navmenu);
    
    $header_pedido = $model->getHeaderPedido($idPedido);
    $listDocs      = $model->getAllTiposDocs();
    $allDocsPedido = $model->getAllDocsPedido($idPedido);
    $listMonedas   = $model->getAllMonedas();
    
    $totDocs = sizeof($allDocsPedido);
    
    $mvc->assign("PED_HEADER"    , $header_pedido);
    $mvc->assign("TIPO_DOCS"     , $listDocs);
    $mvc->assign("ALL_DOCUMENTS" , $allDocsPedido);
    $mvc->assign("MONEDAS"       , $listMonedas);
    $mvc->assign("ID_PEDIDO"     , $idPedido);
    $mvc->assign("REGISTER"      , $totDocs);
    
    $page = $mvc->fetch("frmDocsRegister.tpl");
    
    $mvc->setModule("../_includes");     
    $mvc->assign("PAGE", $page);    
    $mvc->display("masterPage.tpl");    
    
    
?>