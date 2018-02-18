<?php /* Smarty version Smarty-3.1.16, created on 2014-08-09 22:14:42
         compiled from "../coins/view/editMoneda.tpl" */ ?>
<?php /*%%SmartyHeaderCode:114659389953e657d6110c50-03223341%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9fcbd3d4d6377636e569bc7a7d4730450dd58ea' => 
    array (
      0 => '../coins/view/editMoneda.tpl',
      1 => 1407640472,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '114659389953e657d6110c50-03223341',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53e657d6185104_30208534',
  'variables' => 
  array (
    'NAV_MENU' => 0,
    'ID_MONEDA' => 0,
    'MONEDA' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53e657d6185104_30208534')) {function content_53e657d6185104_30208534($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['NAV_MENU']->value;?>

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
<!--  						 
			<div class="modal-footer">
				<a href="index.php" class="btn" data-dismiss="modal">Cerrar</a>
				<input type="submit" name="enviar" value="Actualizar" />
			</div>
-->
 							<div class="modal-footer">
								<button type="submit" name="enviar" class="btn btn-primary">Actualizar</button>
								<a href="index.php" class="btn" data-dismiss="modal">Cerrar</a>
							  </div>  

			
			</fieldset>
		  </form>			
		    </div>				
		</div>		
		</div><?php }} ?>
