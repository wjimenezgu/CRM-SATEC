<?php /* Smarty version Smarty-3.1.16, created on 2014-05-28 16:48:32
         compiled from "../monedas/view/editMoneda.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11038760495386587cd41424-44914456%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '823006d7f2e974bb51af874074e08611e6f4e73e' => 
    array (
      0 => '../monedas/view/editMoneda.tpl',
      1 => 1401313673,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11038760495386587cd41424-44914456',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5386587cd8ec47_15877742',
  'variables' => 
  array (
    'HEADER_PAGE' => 0,
    'ID_MONEDA' => 0,
    'MONEDA' => 0,
    'FOOTER_PAGE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5386587cd8ec47_15877742')) {function content_5386587cd8ec47_15877742($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['HEADER_PAGE']->value;?>

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
		</div>		
<?php echo $_smarty_tpl->tpl_vars['FOOTER_PAGE']->value;?>

<?php }} ?>
