<?php /* Smarty version Smarty-3.1.16, created on 2014-05-29 08:17:42
         compiled from "..\coins\view\editMoneda.tpl" */ ?>
<?php /*%%SmartyHeaderCode:244745386d1065e7d26-66211428%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cfc9100587d1c527212bafed02a762be4687d6ee' => 
    array (
      0 => '..\\coins\\view\\editMoneda.tpl',
      1 => 1401343855,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '244745386d1065e7d26-66211428',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'NAV_MENU' => 0,
    'ID_MONEDA' => 0,
    'MONEDA' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5386d10662c3d4_89629908',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5386d10662c3d4_89629908')) {function content_5386d10662c3d4_89629908($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['NAV_MENU']->value;?>

			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2>Información Moneda</h2>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="update.php" method="POST">
 			 <fieldset>
				<div class="control-group">
					<label class="control-label" for="disabledInput">Id</label>
					<div class="controls">
						<input class="input-xlarge " name="fIdMoneda" id="fIdMoneda" type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['ID_MONEDA']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['ID_MONEDA']->value;?>
" readOnly="true" >
					</div>
				</div>				
				<div class="control-group">
					<label class="control-label" for="focusedInput">Descripción</label>
					<div class="controls">
						<input class="input-xlarge focused" name ="fDescripcion" id="fDescripcion" type="text" value="<?php echo $_smarty_tpl->tpl_vars['MONEDA']->value[0]['descripcion'];?>
">
					</div>
				 </div>
				 <div class="control-group">
					<label class="control-label" for="focusedInput">Símbolo</label>
					<div class="controls">
						<input class="input-xlarge focused" name="fSimboloMoneda" id="fSimboloMoneda" type="text" value="<?php echo $_smarty_tpl->tpl_vars['MONEDA']->value[0]['simboloMoneda'];?>
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
