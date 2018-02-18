<?php /* Smarty version Smarty-3.1.16, created on 2016-03-12 12:23:18
         compiled from "../login/view/frmLogin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:113973366453e1a2c1ca8614-03359388%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '599a6206d8ad7545000e529d1af40c76d011819c' => 
    array (
      0 => '../login/view/frmLogin.tpl',
      1 => 1457810177,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '113973366453e1a2c1ca8614-03359388',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53e1a2c1cbba38_11719576',
  'variables' => 
  array (
    'LISTA_TIENDAS' => 0,
    'ID_TIENDA' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53e1a2c1cbba38_11719576')) {function content_53e1a2c1cbba38_11719576($_smarty_tpl) {?>
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
				<!-- 
								<div class="input-prepend control-group" id="input-store" title="Seleccione Tienda" data-rel="tooltip">
                        		<select class="pull-right" id="selectStore" name="selectStore"> 
                        		<option value="0"></option>
                            	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['name'] = 'lP';
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['LISTA_TIENDAS']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['total']);
?>
                            		
                                	<option value="<?php echo $_smarty_tpl->tpl_vars['LISTA_TIENDAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['codTienda'];?>
" <?php if ($_smarty_tpl->tpl_vars['LISTA_TIENDAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['codTienda']==$_smarty_tpl->tpl_vars['ID_TIENDA']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LISTA_TIENDAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['nombreTienda'];?>
</option>                                	
                                <?php endfor; endif; ?>
                            	</select>                                
                                </div>
                                <div class="clearfix"></div>
 -->
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
</div><!--/row-->


<script type="text/javascript">


	// una vez cambie el campo "usuario" se debe pregargar la lista de tiendas con las permitidas 
	// para ese usuario.
	$("#usernameOLD").on("change", function(e){
        e.preventDefault();
        

        // Se obtiene el id del promotor seleccionado
        var usuario = $("#username").val();

      
        if(usuario != ""){
            alert(usuario);      
        	// se vuelve a llenar la lista de tiendas con base al usuario indicado
        	// Primero se limpia la lista
    		$('#selectStore').find('option:not(:first)').remove();
    		$('#selectStore').append('<option value="'+"0"+'">'+"Tienda 0"+'</option>');   		
    		var properties = {
    	            url: "buscaTiendasUsuario.php",
    	            async: true,
    	            cache: false,
    	            data: "usuario=" + usuario,
    	            type: "POST",
    	            dataType : "json",    	            
    	            success: function(infoTienda){                
    						//alert(msg);
    						// se agregan las tiendas a la lista de seleccion
    						for (i = 0, len = infoTienda.length; i < len; i++) {
    							$('#selectStore').append('<option value="'+infoTienda[i].idTienda+'">'+infoTienda[i].NombreTienda+'</option>');
        					}
    	            },
    	            error: function(jqXHR,textStatus,errorThrown){
    		            alert('Error al Buscar Tienda '+errorThrown);
    	            }
    	        };            
    	        $.ajax(properties);
    	        
    	      

        }
    }
    );
	
</script>
		
	
<?php }} ?>
