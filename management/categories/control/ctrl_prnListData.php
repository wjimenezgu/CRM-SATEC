<?php



    session_start();


    error_reporting(E_PARSE);      
    require '../../_config/db/UserConnection.php';          
    $userConnect = new UserConnection($_SESSION["USER_SESSION"], $_SESSION["PWD_USER"] );
    require '../../_config/db/DBConexion.php';
    $con = new DBConexion(1, $userConnect); 


	require 'model/modelData.php';
    $model = new modelData($con->db);
    
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
    	          
    $mvc->setModule("asignaturas");    

    // get the HTML
    ob_start();
    

    $infoData = $model->getAllData();
    
// $header_pedido = $model->getHeaderPedido($_GET["id"]);
// Setiembre 24, 2014 William Jimenez
// Se cambia el llamado del detalle del pedido, para que traiga el detalle
// agrupado por linea del inventario
// CODIGO ANTERIOR
//		$detail_pedido = $model->getDetallePedido($_GET["id"]);
// CODIGO NUEVO
//		$detail_pedido = $model->getDetallePedidoGrupo($_GET["id"]);
//    
    
    $directorio = '/home/wjimenez/';
    $mvc->assign("LISTA_DATA", $infoData);

    $mvc->display("prnData.tpl");            
    
    $content = ob_get_clean();

    require '../../resources/libs/html2pdf/html2pdf.class.php';
    try
    {	//Octubre 27, 2014 William Jimenez
    	// Agregue los ulstimos tres parametros 
    	// particularmente me interesaba incluir el ultimo array(mL, mT, mR, mB))
    	// tiene que ver con los margenes de la hoja
    	//Linea Original
    	//	$html2pdf = new HTML2PDF('P', 'Letter', 'es');
    	//Linea Modificada
    	//	$html2pdf = new HTML2PDF('P', 'Letter', 'es',true, 'UTF-8', array(9, 5, 0, 8));
        $html2pdf = new HTML2PDF('P', 'Letter', 'es',true, 'UTF-8', array(9, 2, 5, 8));
        $html2pdf->pdf->SetDisplayMode('fullpage');
        $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
// Agosto 10,2014  William Jimenez
// Se comenta para que no genere el archivo, solo que le salga el pdf y el usuario
// decide donde guardarlo o que hacer con el archivo.
// Falta hacer testing para agregar una ruta donde dejar el archivo.
        $html2pdf->Output('Categorias_'.$_SESSION["USER_SESSION"].'.pdf');
//        $html2pdf->Output('OC'.$header_pedido["numOrdenCompra"].'.pdf', 'F');
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }    
    
?>