<?php /* Smarty version Smarty-3.1.16, created on 2017-02-21 13:55:18
         compiled from "../../_includes/view/masterPage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:52961787453e1a2c98154e8-93642623%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '948d436d7a8478ad7dc8f2394df7f4f01e4c1585' => 
    array (
      0 => '../../_includes/view/masterPage.tpl',
      1 => 1487710516,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '52961787453e1a2c98154e8-93642623',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53e1a2c98205a5_44815317',
  'variables' => 
  array (
    'HEADER_PAGE' => 0,
    'OPT_HIDE' => 0,
    'PAGE' => 0,
    'FOOTER_PAGE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53e1a2c98205a5_44815317')) {function content_53e1a2c98205a5_44815317($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['HEADER_PAGE']->value;?>

<?php echo $_smarty_tpl->tpl_vars['OPT_HIDE']->value;?>

    <?php echo $_smarty_tpl->tpl_vars['PAGE']->value;?>

<?php echo $_smarty_tpl->tpl_vars['FOOTER_PAGE']->value;?>

<script type="text/javascript">
$(document).ready(function(){
	// Lista de Opciones que se deben apagar
	var optHideNodeList = document.getElementById("listOptHide").getElementsByTagName("li");
	// Se verifica a nivel de modulos cuales hay que apagar
	for (var j = 0; j < optHideNodeList.length; ++j) {
		var itemOptHide = optHideNodeList[j];
		if (itemOptHide.id == "SIST_INVENTARIO"){
		  item = document.getElementById("SIST_INVENTARIO");
		  item.style.display = "none";
		  item = document.getElementById("divSIST_INVENTARIO");
		  item.style.display = "none"; 
		}
		if (itemOptHide.id == "SIST_IMPORTACION"){
			item = document.getElementById("SIST_IMPORTACION");
			item.style.display = "none";
			item = document.getElementById("divSIST_IMPORTACION");
			item.style.display = "none"; 
				 
		}
		if (itemOptHide.id == "SIST_MANAGMENT"){
			item = document.getElementById("SIST_MANAGMENT");
			item.style.display = "none";
			item = document.getElementById("divSIST_MANAGMENT");
			item.style.display = "none";  
		}
		if (itemOptHide.id == "SIST_CONSULTAS"){
			item = document.getElementById("SIST_CONSULTAS");
			item.style.display = "none";
			item = document.getElementById("divSIST_CONSULTAS");
			item.style.display = "none";  
		}				
	}  	
	
	
	var myNodeList      = document.getElementById("SIST_INVENTARIO").getElementsByTagName("li");	
	for (var i = 0; i < myNodeList.length; ++i) {
		  var item = myNodeList[i];
		  for (var j = 0; j < optHideNodeList.length; ++j) {
			   var itemOptHide = optHideNodeList[j];
		  	   if (item.id == itemOptHide.id){
			   	  item.style.display = "none"; 
			   }
		  }  
		}

	var myNodeList      = document.getElementById("SIST_IMPORTACION").getElementsByTagName("li");	
	for (var i = 0; i < myNodeList.length; ++i) {
		  var item = myNodeList[i];
		  for (var j = 0; j < optHideNodeList.length; ++j) {
			   var itemOptHide = optHideNodeList[j];
		  	   if (item.id == itemOptHide.id){
			   	  item.style.display = "none"; 
			   }
		  }  
		}
	
	var myNodeList      = document.getElementById("SIST_CONSULTAS").getElementsByTagName("li");	
	for (var i = 0; i < myNodeList.length; ++i) {
		  var item = myNodeList[i];
		  for (var j = 0; j < optHideNodeList.length; ++j) {
			   var itemOptHide = optHideNodeList[j];
		  	   if (item.id == itemOptHide.id){
			   	  item.style.display = "none"; 
			   }
		  }  
		}

	var myNodeList      = document.getElementById("SIST_MANAGMENT").getElementsByTagName("li");	
	for (var i = 0; i < myNodeList.length; ++i) {
		  var item = myNodeList[i];
		  for (var j = 0; j < optHideNodeList.length; ++j) {
			   var itemOptHide = optHideNodeList[j];
		  	   if (item.id == itemOptHide.id){
			   	  item.style.display = "none"; 
			   }
		  }  
		}
	  
}); 
</script><?php }} ?>
