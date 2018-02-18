<?php /* Smarty version Smarty-3.1.16, created on 2014-05-29 20:24:33
         compiled from "..\paymentoptions\view\editOpcionPago.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1254453877b619fdf81-15943551%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e49b36c7629ea3108b58820526cc93b895801b8' => 
    array (
      0 => '..\\paymentoptions\\view\\editOpcionPago.tpl',
      1 => 1401387830,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1254453877b619fdf81-15943551',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'NAV_MENU' => 0,
    'ID_OPCIONPAGO' => 0,
    'OPCIONPAGO' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53877b61a3e356_21903991',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53877b61a3e356_21903991')) {function content_53877b61a3e356_21903991($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['NAV_MENU']->value;?>


			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2>Información de Opción de Pago</h2>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="update.php" method="POST">
 			 <fieldset>
				<div class="control-group">
					<label class="control-label" for="disabledInput">Id</label>
					<div class="controls">
						<input class="input-xlarge " name="fIdOpcionPago" id="fIdOpcionPago" type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['ID_OPCIONPAGO']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['ID_OPCIONPAGO']->value;?>
" readOnly="true" >
					</div>
				</div>				
				<div class="control-group">
					<label class="control-label" for="focusedInput">Descripcion</label>
					<div class="controls">
						<input class="input-xlarge focused" name ="fDescripcion" id="fDescripcion" type="text" value="<?php echo $_smarty_tpl->tpl_vars['OPCIONPAGO']->value[0]['descripcion'];?>
">
					</div>
				 </div>
			<div class="modal-footer">
				<a href="index.php" class="btn" data-dismiss="modal">Cerrar</a>
				<input type="submit" name="enviar" value="Actualizar" />
			</div>
			</fieldset>
		  </form>			
		    </div>				
		</div>		
		</div><?php }} ?>
