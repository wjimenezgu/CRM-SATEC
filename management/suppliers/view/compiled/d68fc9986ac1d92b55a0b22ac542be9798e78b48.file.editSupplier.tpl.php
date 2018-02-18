<?php /* Smarty version Smarty-3.1.16, created on 2016-03-16 14:52:13
         compiled from "../suppliers/view/editSupplier.tpl" */ ?>
<?php /*%%SmartyHeaderCode:156754324355212ce9cb4ce3-10675077%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd68fc9986ac1d92b55a0b22ac542be9798e78b48' => 
    array (
      0 => '../suppliers/view/editSupplier.tpl',
      1 => 1457810185,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '156754324355212ce9cb4ce3-10675077',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_55212ce9d46021_72798616',
  'variables' => 
  array (
    'NAV_MENU' => 0,
    'ID_PROVEEDOR' => 0,
    'PROVEEDOR' => 0,
    'PAYMENTSOPTIONS_LIST' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55212ce9d46021_72798616')) {function content_55212ce9d46021_72798616($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['NAV_MENU']->value;?>

			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2>Información Proveedor</h2>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="update.php" method="POST">
 			 <fieldset>
				<div class="control-group">
					<label class="control-label" for="disabledInput">Id</label>
					<div class="controls">
						<input class="input-xlarge " name="fidProveedor" id="fidProveedor" type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['ID_PROVEEDOR']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['ID_PROVEEDOR']->value;?>
" readOnly="true" >
					</div>
				</div>				
				<div class="control-group">
					<label class="control-label" for="focusedInput">Nombre</label>
					<div class="controls">
						<input class="input-xlarge focused" name ="fNombre" id="fNombre" type="text" value="<?php echo $_smarty_tpl->tpl_vars['PROVEEDOR']->value[0]['nombreProveedor'];?>
">
					</div>
				 </div>
				 <div class="control-group">
					<label class="control-label" for="focusedInput">Cedula Juridica</label>
					<div class="controls">
						<input class="input-xlarge focused" name="fcedulajuridica" id="fcedulajuridica" type="text" value="<?php echo $_smarty_tpl->tpl_vars['PROVEEDOR']->value[0]['cedulajuridica'];?>
">
					</div>
				 </div>
				 <div class="control-group">
					<label class="control-label" for="focusedInput">Direccion</label>
					<div class="controls">
						<input class="input-xlarge focused" name="fDireccion" id="fDireccion" type="text" value="<?php echo $_smarty_tpl->tpl_vars['PROVEEDOR']->value[0]['direccion'];?>
">
					</div>
				 </div>				 
				 <div class="control-group">
					<label class="control-label" for="focusedInput">Pais</label>
					<div class="controls">
						<input class="input-xlarge focused" name="fPais"id="fPais" type="text" value="<?php echo $_smarty_tpl->tpl_vars['PROVEEDOR']->value[0]['pais'];?>
">
					</div>
				 </div>
				 <div class="control-group">
					<label class="control-label" for="focusedInput">Apartado</label>
					<div class="controls">
						<input class="input-xlarge focused" name="fApartado" id="fApartado" type="text" value="<?php echo $_smarty_tpl->tpl_vars['PROVEEDOR']->value[0]['apartado'];?>
">
					</div>
				 </div>
				 <div class="control-group">
					<label class="control-label" for="focusedInput">Zip Code</label>
					<div class="controls">
						<input class="input-xlarge focused" name="fZipCode" id="fZipCode" type="text" value="<?php echo $_smarty_tpl->tpl_vars['PROVEEDOR']->value[0]['zipcode'];?>
">
					</div>
				 </div>
				 <div class="control-group">
					<label class="control-label" for="focusedInput">Telefono</label>
					<div class="controls">
						<input class="input-xlarge focused" name="fTelefono"  id="fTelefono" type="text" value="<?php echo $_smarty_tpl->tpl_vars['PROVEEDOR']->value[0]['telefono'];?>
">
					</div>
				 </div>
				 <div class="control-group">
					<label class="control-label" for="focusedInput">Fax</label>
					<div class="controls">
						<input class="input-xlarge focused" name="fFax" id="fFax" type="text" value="<?php echo $_smarty_tpl->tpl_vars['PROVEEDOR']->value[0]['fax'];?>
">
					</div>
				 </div>
                 <div class="control-group">
	             	<label class="control-label" for="selOpPagoProv">Opciones Pago</label>
	                	<div class="controls">
		                	<select id="selOpPagoProv" name="selOpPagoProv">
	                        	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']["p"])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']["p"]);
$_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['name'] = "p";
$_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['PAYMENTSOPTIONS_LIST']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['total']);
?>
	                            	<option value="<?php echo $_smarty_tpl->tpl_vars['PAYMENTSOPTIONS_LIST']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['idOpcionPago'];?>
" <?php if ($_smarty_tpl->tpl_vars['PAYMENTSOPTIONS_LIST']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['idOpcionPago']==$_smarty_tpl->tpl_vars['PROVEEDOR']->value[0]['idOpcionPago']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['PAYMENTSOPTIONS_LIST']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['descripcion'];?>
</option>
                                <?php endfor; endif; ?>
		                    </select>
						</div>
				 </div>				 									 
			     <div class="control-group">
				 	<label class="control-label">Obligatorio Costo</label>
					<div class="controls">
						<label class="radio">
							<input type="radio" name="obligatorioCosto" id="optionNo" value="N" <?php if ($_smarty_tpl->tpl_vars['PROVEEDOR']->value[0]['obligatorioCosto']=="N") {?> checked=""<?php }?>>
							No
						</label>
						<div style="clear:both"></div>
						<label class="radio">
							<input type="radio" name="obligatorioCosto" id="optionSi" value="S" <?php if ($_smarty_tpl->tpl_vars['PROVEEDOR']->value[0]['obligatorioCosto']=="S") {?> checked=""<?php }?>>
							Si
						</label>
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
