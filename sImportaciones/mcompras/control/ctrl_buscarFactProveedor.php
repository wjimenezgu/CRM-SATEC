<?php
	// Encabezado del control que verificar si la session expiro.
	// si la session expiro se redirecciona a la pantalla de login
	require '../../_includes/ctrl_checksession.php';
	
    session_start();
    error_reporting(E_PARSE);    
    require '../../_config/db/UserConnection.php';          
    $userConnect = new UserConnection($_SESSION["USER_SESSION"], $_SESSION["PWD_USER"] );
    
    require '../../_config/db/DBConexion.php';
    $con = new DBConexion(1, $userConnect);    

    require 'model/modelMCompras.php';
    $model = new modelMCompras($con->db);    
    
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
    
    $mvc->assign("ELEMENTS_VISIBLE", $elements_visible);
    $mvc->assign("ANGULARJS", $angularJS);
    $mvc->assign("CRM_SERVER", CRM_SERVER);
    
    $inSession = $_SESSION["USER_SESSION"];
    $mvc->assign("USER_SESSION", $inSession);
    
    $header  = $mvc->fetch("header.tpl");
    $footer  = $mvc->fetch("footer.tpl");    
    
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

   // hasta aqui codigo agregado
    
    $mvc->setModule("mcompras");
    
    $mvc->assign("HEADER_PAGE", $header);
    $mvc->assign("FOOTER_PAGE", $footer);

    /*
    echo "<pre>";
    print_r($_POST);
    echo "<pre>";
    exit;
    */
    $selProveedor 	=$_POST["selProveedor"];
    $selTarjeta 	=$_POST["selTarjeta"];
    $date         = explode("/", $_POST["fCorte"]) ;
    $fCorte       = $date[2]."-".$date[1]."-".$date[0];    

    

    $infoFactProveedor = $model->buscarFactProveedor($selProveedor, $selTarjeta,$fCorte,'N');

             
    $mvc->assign("LISTA_FACTPROVEEDOR", $infoFactProveedor); 
              
    $mvc->display("listaFactProveedor.tpl");
        

?>