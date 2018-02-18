<!DOCTYPE html>
<html lang="en" {if $ANGULARJS != false}ng-app="app"{/if}>
<head>
        <!-- The fav icon -->
	<link rel="shortcut icon" href="http://{$CRM_SERVER}/{#system_name#}/{#icon_site#}">
        
	<meta charset="utf-8">
	<title>CRM | {#company_name#}</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
	<meta name="author" content="{#autor#}">

	<!-- The styles -->
	<!-- Agosto 11, William
	     linea original 
	<link id="bs-css" href="http://{$CRM_SERVER}/{#system_name#}/{#main_css#}" rel="stylesheet">
	 -->
	<link href="http://{$CRM_SERVER}/{#system_name#}/{#main_css#}" rel="stylesheet">	
        
	<link href="http://{$CRM_SERVER}/{#system_name#}/{#aditional_css#}" rel="stylesheet">
	<link href="http://{$CRM_SERVER}/{#system_name#}/{#bootstrap_css_responsive#}" rel="stylesheet">	
	<link href="http://{$CRM_SERVER}/{#system_name#}/{#custom_css#}" rel="stylesheet">
	<link href="http://{$CRM_SERVER}/{#system_name#}/{#custom_jquery#}" rel="stylesheet">
	<link href="http://{$CRM_SERVER}/{#system_name#}/{#full_calendar#}" rel="stylesheet">
	<link href="http://{$CRM_SERVER}/{#system_name#}/{#print_calendar#}" rel="stylesheet">
	<!--<link href="http://{$CRM_SERVER}/{#system_name#}/{#chosen#}" rel="stylesheet">-->
	<link href="http://{$CRM_SERVER}/{#system_name#}/{#chosen2#}" rel="stylesheet">
	<link href="http://{$CRM_SERVER}/{#system_name#}/{#uniform_css#}" rel="stylesheet">
	<link href="http://{$CRM_SERVER}/{#system_name#}/{#color_box#}" rel="stylesheet">
	<link href="http://{$CRM_SERVER}/{#system_name#}/{#cleditor#}" rel="stylesheet">
	<link href="http://{$CRM_SERVER}/{#system_name#}/{#noty#}" rel="stylesheet">
	<link href="http://{$CRM_SERVER}/{#system_name#}/{#noty_theme#}" rel="stylesheet">
	<link href="http://{$CRM_SERVER}/{#system_name#}/{#elFinder#}" rel="stylesheet">
	<link href="http://{$CRM_SERVER}/{#system_name#}/{#elFinder_theme#}" rel="stylesheet">
	<link href="http://{$CRM_SERVER}/{#system_name#}/{#iphone_toggle#}" rel="stylesheet">
	<link href="http://{$CRM_SERVER}/{#system_name#}/{#opa_icons#}" rel="stylesheet">
	<link href="http://{$CRM_SERVER}/{#system_name#}/{#uploadify#}" rel="stylesheet">
	<link href="http://{$CRM_SERVER}/{#system_name#}/resources/css/owner-styles.css" rel="stylesheet">
        
    <script src="http://{$CRM_SERVER}/{#system_name#}/{#js_frm_login#}"></script>
     
	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
        
	<script src="http://{$CRM_SERVER}/{#system_name#}/resources/js/jquery-1.7.2.min.js"></script>
	<!-- jQuery UI -->
	<script src="http://{$CRM_SERVER}/{#system_name#}/resources/js/jquery-ui-1.8.21.custom.min.js"></script>
        
        <link href="http://{$CRM_SERVER}/{#system_name#}/resources/js/bootstrap-datepicker-master/css/datepicker3.css" rel="stylesheet">
        <script src="http://{$CRM_SERVER}/{#system_name#}/resources/js/bootstrap-datepicker-master/js/bootstrap-datepicker.js"></script>
        <script src="http://{$CRM_SERVER}/{#system_name#}/resources/js/bootstrap-datepicker-master/js/locales/bootstrap-datepicker.es.js"></script>
        
        <script src="http://{$CRM_SERVER}/{#system_name#}/resources/js/jquery.number.js"></script>

	<script src='http://{$CRM_SERVER}/{#system_name#}/resources/js/jquery.dataTables.min.js'></script>
	<script src='http://{$CRM_SERVER}/{#system_name#}/resources/js/jquery.json.min.js'></script>
	<script src='http://{$CRM_SERVER}/{#system_name#}/resources/js/functions_fac.js'></script>
        
</head>

<body>
    
        {if $ELEMENTS_VISIBLE != false}
            {include file="topBar.tpl" title=TOP_BAR}
        {/if}    
	<div class="container-fluid">
		<div class="row-fluid">
                    
                    {if $ELEMENTS_VISIBLE != false}
                    	{if $MENU_VISIBLE == true}
                        	{include file="menu.tpl" title=MENU_PAGE}
                        {/if}
                    {/if}