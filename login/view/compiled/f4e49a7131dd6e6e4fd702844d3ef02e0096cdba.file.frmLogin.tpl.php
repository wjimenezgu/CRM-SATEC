<?php /* Smarty version Smarty-3.1.16, created on 2014-05-20 00:50:07
         compiled from "..\login\view\frmLogin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:797252e81ddb73a5c8-15064864%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f4e49a7131dd6e6e4fd702844d3ef02e0096cdba' => 
    array (
      0 => '..\\login\\view\\frmLogin.tpl',
      1 => 1400539806,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '797252e81ddb73a5c8-15064864',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52e81ddb7fcfd5_96216878',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e81ddb7fcfd5_96216878')) {function content_52e81ddb7fcfd5_96216878($_smarty_tpl) {?>
<div class="row-fluid">
        <div class="span12 center login-header">
                <img alt="<?php echo $_smarty_tpl->getConfigVariable('company_name');?>
 Logo" src="../resources/img/app_images/logoSATEC.jpg" />
        </div><!--/span-->
</div><!--/row-->

<div class="row-fluid">
        <div class="well span5 center login-box">
                <div class="alert alert-info">
                        <?php echo $_smarty_tpl->getConfigVariable('message_credentials');?>

                </div>
                <form class="form-horizontal" id="frm-login">
                        <fieldset>
                                <div class="input-prepend control-group" id="input-username" title="<?php echo $_smarty_tpl->getConfigVariable('tooltip_username');?>
" data-rel="tooltip">
                                    
                                    <span class="add-on"><i class="icon-user"></i></span>
                                    <input autofocus class="input-large span10 " name="username" id="username" type="text" value="" />
                                    <br />
                                    <div id="msj-username"></div>       
                                    
                                </div>
                                
                                <div class="clearfix"></div>

                                <div class="input-prepend control-group" id="input-password" title="<?php echo $_smarty_tpl->getConfigVariable('tooltip_password');?>
" data-rel="tooltip">
                                    
                                    <span class="add-on"><i class="icon-lock"></i></span>
                                    <input class="input-large span10" name="password" id="password" type="password" value="" />
                                    <br />
                                    <div id="msj-password"></div>
                                        
                                </div>
                                
                                <div class="clearfix"></div>

                                <div class="input-prepend">                                    
                                    <!--
                                    <label class="remember" for="remember">                                        
                                        <input type="checkbox" id="remember" /><span style="font-size:10px;"><?php echo $_smarty_tpl->getConfigVariable('text_rememberme');?>
</span> |
                                        <a href="#" title="Recuperar Contraseña" data-rel="tooltip" style="font-size:10px;"><?php echo $_smarty_tpl->getConfigVariable('text_forgotPwd');?>
</a>
                                    </label>
                                    -->    
                                    <div id="img-loading"></div>
                                    
                                </div>
                                <div class="clearfix"></div>

                                <p class="center span5">
                                <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->getConfigVariable('btn_login');?>
</button>
                                </p>
                        </fieldset>
                </form>
        </div><!--/span-->
</div><!--/row--><?php }} ?>
