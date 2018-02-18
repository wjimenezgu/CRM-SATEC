<?php /* Smarty version Smarty-3.1.16, created on 2016-07-02 10:08:25
         compiled from "../../_includes/view/headerTimer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1564637389561d81c87f9545-45199023%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f823f5fd371df8b77f130473f33f7038b59262e5' => 
    array (
      0 => '../../_includes/view/headerTimer.tpl',
      1 => 1467475700,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1564637389561d81c87f9545-45199023',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_561d81c8907799_18164109',
  'variables' => 
  array (
    'ANGULARJS' => 0,
    'CRM_SERVER' => 0,
    'ELEMENTS_VISIBLE' => 0,
    'MENU_VISIBLE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561d81c8907799_18164109')) {function content_561d81c8907799_18164109($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en" <?php if ($_smarty_tpl->tpl_vars['ANGULARJS']->value!=false) {?>ng-app="app"<?php }?>>
<head>
        <!-- The fav icon -->
	<link rel="shortcut icon" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/<?php echo $_smarty_tpl->getConfigVariable('icon_site');?>
">
        
	<meta charset="utf-8">
	<title>CRM | <?php echo $_smarty_tpl->getConfigVariable('company_name');?>
</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
	<meta name="author" content="<?php echo $_smarty_tpl->getConfigVariable('autor');?>
">
        <!-- La siguiente linea hace que la pagina se regresque automaticamente -->
  	<meta http-equiv="refresh" content="15"> 
	<!-- The styles -->
	<!-- Agosto 11, William
	     linea original 
	<link id="bs-css" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/<?php echo $_smarty_tpl->getConfigVariable('main_css');?>
" rel="stylesheet">
	 -->
	<link href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/<?php echo $_smarty_tpl->getConfigVariable('main_css');?>
" rel="stylesheet">	
        
	<link href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/<?php echo $_smarty_tpl->getConfigVariable('aditional_css');?>
" rel="stylesheet">
	<link href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/<?php echo $_smarty_tpl->getConfigVariable('bootstrap_css_responsive');?>
" rel="stylesheet">	
	<link href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/<?php echo $_smarty_tpl->getConfigVariable('custom_css');?>
" rel="stylesheet">
	<link href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/<?php echo $_smarty_tpl->getConfigVariable('custom_jquery');?>
" rel="stylesheet">
	<link href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/<?php echo $_smarty_tpl->getConfigVariable('full_calendar');?>
" rel="stylesheet">
	<link href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/<?php echo $_smarty_tpl->getConfigVariable('print_calendar');?>
" rel="stylesheet">
	<!--<link href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/<?php echo $_smarty_tpl->getConfigVariable('chosen');?>
" rel="stylesheet">-->
	<link href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/<?php echo $_smarty_tpl->getConfigVariable('chosen2');?>
" rel="stylesheet">
	<link href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/<?php echo $_smarty_tpl->getConfigVariable('uniform_css');?>
" rel="stylesheet">
	<link href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/<?php echo $_smarty_tpl->getConfigVariable('color_box');?>
" rel="stylesheet">
	<link href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/<?php echo $_smarty_tpl->getConfigVariable('cleditor');?>
" rel="stylesheet">
	<link href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/<?php echo $_smarty_tpl->getConfigVariable('noty');?>
" rel="stylesheet">
	<link href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/<?php echo $_smarty_tpl->getConfigVariable('noty_theme');?>
" rel="stylesheet">
	<link href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/<?php echo $_smarty_tpl->getConfigVariable('elFinder');?>
" rel="stylesheet">
	<link href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/<?php echo $_smarty_tpl->getConfigVariable('elFinder_theme');?>
" rel="stylesheet">
	<link href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/<?php echo $_smarty_tpl->getConfigVariable('iphone_toggle');?>
" rel="stylesheet">
	<link href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/<?php echo $_smarty_tpl->getConfigVariable('opa_icons');?>
" rel="stylesheet">
	<link href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/<?php echo $_smarty_tpl->getConfigVariable('uploadify');?>
" rel="stylesheet">
	<link href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/resources/css/owner-styles.css" rel="stylesheet">
        
    <script src="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/<?php echo $_smarty_tpl->getConfigVariable('js_frm_login');?>
"></script>
     
	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
        
	<script src="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/resources/js/jquery-1.7.2.min.js"></script>
	<!-- jQuery UI -->
	<script src="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/resources/js/jquery-ui-1.8.21.custom.min.js"></script>
        
        <link href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/resources/js/bootstrap-datepicker-master/css/datepicker3.css" rel="stylesheet">
        <script src="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/resources/js/bootstrap-datepicker-master/js/bootstrap-datepicker.js"></script>
        <script src="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/resources/js/bootstrap-datepicker-master/js/locales/bootstrap-datepicker.es.js"></script>
        
        <script src="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/resources/js/jquery.number.js"></script>

	<script src='http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/resources/js/jquery.dataTables.min.js'></script>
	<script src='http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/resources/js/jquery.json.min.js'></script>
	<script src='http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/resources/js/functions_fac.js'></script>
        
</head>

<body>
    
        <?php if ($_smarty_tpl->tpl_vars['ELEMENTS_VISIBLE']->value!=false) {?>
            <?php echo $_smarty_tpl->getSubTemplate ("topBar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>'TOP_BAR'), 0);?>

        <?php }?>    
	<div class="container-fluid">
		<div class="row-fluid">
                    
                    <?php if ($_smarty_tpl->tpl_vars['ELEMENTS_VISIBLE']->value!=false) {?>
                    	<?php if ($_smarty_tpl->tpl_vars['MENU_VISIBLE']->value==true) {?>
                        	<?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>'MENU_PAGE'), 0);?>

                        <?php }?>
                    <?php }?>
<?php }} ?>
