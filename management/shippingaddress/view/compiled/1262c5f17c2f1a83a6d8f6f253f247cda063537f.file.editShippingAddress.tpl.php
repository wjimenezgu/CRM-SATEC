<?php /* Smarty version Smarty-3.1.16, created on 2016-06-23 18:24:02
         compiled from "../shippingaddress/view/editShippingAddress.tpl" */ ?>
<?php /*%%SmartyHeaderCode:184263480353e265f56a1be8-81688327%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1262c5f17c2f1a83a6d8f6f253f247cda063537f' => 
    array (
      0 => '../shippingaddress/view/editShippingAddress.tpl',
      1 => 1457810183,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '184263480353e265f56a1be8-81688327',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53e265f56eaff9_76633046',
  'variables' => 
  array (
    'NAV_MENU' => 0,
    'ID' => 0,
    'SHIPPINGADDRESS_DATA' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53e265f56eaff9_76633046')) {function content_53e265f56eaff9_76633046($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['NAV_MENU']->value;?>

			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2>Información Direccion Entrega</h2>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="update.php" method="POST">
 			 <fieldset>
				<div class="control-group">
					<label class="control-label" for="disabledInput">Id</label>
					<div class="controls">
						<input class="input-xlarge " name="fid" id="fid" type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
" readOnly="true" >
					</div>
				</div>				
				<div class="control-group">
					<label class="control-label" for="focusedInput">Descripcion</label>
					<div class="controls">
						<input class="input-xlarge focused" name ="fDescripcion" id="fDescripcion" type="text" value="<?php echo $_smarty_tpl->tpl_vars['SHIPPINGADDRESS_DATA']->value[0]['descripcion'];?>
">
					</div>
				 </div>
				 <div class="control-group">
					<label class="control-label" for="focusedInput">Linea 1</label>
					<div class="controls">
						<input class="input-xlarge focused" name="fLinea1" id="fLinea1" type="text" value="<?php echo $_smarty_tpl->tpl_vars['SHIPPINGADDRESS_DATA']->value[0]['linea1'];?>
">
					</div>
				 </div>
				 <div class="control-group">
					<label class="control-label" for="focusedInput">Linea 2</label>
					<div class="controls">
						<input class="input-xlarge focused" name="fLinea2" id="fLinea2" type="text" value="<?php echo $_smarty_tpl->tpl_vars['SHIPPINGADDRESS_DATA']->value[0]['linea2'];?>
">
					</div>
				 </div>				 
				 <div class="control-group">
					<label class="control-label" for="focusedInput">Linea 3</label>
					<div class="controls">
						<input class="input-xlarge focused" name="fLinea3"id="fLinea3" type="text" value="<?php echo $_smarty_tpl->tpl_vars['SHIPPINGADDRESS_DATA']->value[0]['linea3'];?>
">
					</div>
				 </div>
			<div class="modal-footer">				
				
				<button type="submit" name="enviar" class="btn btn-primary">Actualizar</button>
				<a href="index.php" class="btn" data-dismiss="modal">Cerrar</a>
			</div>
			</fieldset>
		  </form>			
		    </div>				
		</div>		
		</div>
<?php }} ?>
