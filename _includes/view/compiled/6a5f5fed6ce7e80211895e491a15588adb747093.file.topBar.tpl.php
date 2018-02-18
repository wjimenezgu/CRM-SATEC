<?php /* Smarty version Smarty-3.1.16, created on 2014-07-18 20:57:50
         compiled from "..\..\_includes\view\topBar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16060537e3f5da4fff7-27024292%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a5f5fed6ce7e80211895e491a15588adb747093' => 
    array (
      0 => '..\\..\\_includes\\view\\topBar.tpl',
      1 => 1405709865,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16060537e3f5da4fff7-27024292',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_537e3f5da8ae50_39847149',
  'variables' => 
  array (
    'CRM_SERVER' => 0,
    'USER_SESSION' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537e3f5da8ae50_39847149')) {function content_537e3f5da8ae50_39847149($_smarty_tpl) {?>	<!-- topbar starts -->
	<div class="navbar">
                <div class="navbar-inner" style="background:none;">
                    <h1 class="site_title" style="position:absolute; margin-top:3px;">
                        <a href="#"><img src="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/resources/img/logoPage.jpg"></a> 
                        <span style="text-shadow:none; color:#333; margin-top:7px; font-size:12px; position:absolute; width:300px;">| Si No está en Satec No Existe</span></h1>
                    <br/>
                    <br/>
                    <br/>
                </div>
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
                            
                                <!-- COMENTADO | 30/05/2014
				<a class="brand" href="index.html"> <img alt="<?php echo $_smarty_tpl->getConfigVariable('company_name');?>
 Logo" src="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/<?php echo $_smarty_tpl->getConfigVariable('company_logo');?>
" /><span><?php echo $_smarty_tpl->getConfigVariable('company_name');?>
</span></a>
				-->
                                
				<!-- theme selector starts -->
                                <!--
				<div class="btn-group pull-right theme-container" >
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="icon-tint"></i><span class="hidden-phone"> Change Theme / Skin</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu" id="themes">
						<li><a data-value="classic" href="#"><i class="icon-blank"></i> Classic</a></li>
						<li><a data-value="cerulean" href="#"><i class="icon-blank"></i> Cerulean</a></li>
						<li><a data-value="cyborg" href="#"><i class="icon-blank"></i> Cyborg</a></li>
						<li><a data-value="redy" href="#"><i class="icon-blank"></i> Redy</a></li>
						<li><a data-value="journal" href="#"><i class="icon-blank"></i> Journal</a></li>
						<li><a data-value="simplex" href="#"><i class="icon-blank"></i> Simplex</a></li>
						<li><a data-value="slate" href="#"><i class="icon-blank"></i> Slate</a></li>
						<li><a data-value="spacelab" href="#"><i class="icon-blank"></i> Spacelab</a></li>
						<li><a data-value="united" href="#"><i class="icon-blank"></i> United</a></li>
					</ul>
				</div>
                                -->
				<!-- theme selector ends -->
				
				<!-- user dropdown starts -->
				<div class="btn-group pull-right" >
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="icon-user"></i><span class="hidden-phone"> <?php echo $_smarty_tpl->tpl_vars['USER_SESSION']->value;?>
</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="#"><?php echo $_smarty_tpl->getConfigVariable('text_profile');?>
</a></li>
						<li class="divider"></li>
						<li><a href="../../security/closeSession.php"><?php echo $_smarty_tpl->getConfigVariable('text_logOut');?>
</a></li>
					</ul>
				</div>
				<!-- user dropdown ends -->
	
			</div>
		</div>
	</div>
	<!-- topbar ends --><?php }} ?>
