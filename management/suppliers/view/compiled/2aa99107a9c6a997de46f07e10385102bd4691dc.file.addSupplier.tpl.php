<?php /* Smarty version Smarty-3.1.16, created on 2016-03-21 13:51:43
         compiled from "../suppliers/view/addSupplier.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1954703547565888bf0aa861-04426451%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2aa99107a9c6a997de46f07e10385102bd4691dc' => 
    array (
      0 => '../suppliers/view/addSupplier.tpl',
      1 => 1458589861,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1954703547565888bf0aa861-04426451',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_565888bf106dd1_81154312',
  'variables' => 
  array (
    'NAV_MENU' => 0,
    'PAYMENTSOPTIONS_LIST' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565888bf106dd1_81154312')) {function content_565888bf106dd1_81154312($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['NAV_MENU']->value;?>

			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2>Información Proveedor</h2>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="save.php" method="POST">
							<fieldset>
				<div class="control-group">
					<label class="control-label" for="focusedInput">Id</label>
					<div class="controls">
						<input class="input-xlarge focused" name="fidProveedor" id="fidProveedor" type="text" value="" readOnly="true" >
					</div>
				 </div>
				<div class="control-group">
					<label class="control-label" for="focusedInput">Nombre</label>
					<div class="controls">
						<input class="input-xlarge focused" name="fNombre" id="fNombre" type="text" value="">
					</div>
				 </div>
				 <div class="control-group">
					<label class="control-label" for="focusedInput">Cedula Juridica</label>
					<div class="controls">
						<input class="input-xlarge focused" name="fcedulajuridica" id="fcedulajuridica" type="text" value="">
					</div>
				 </div>
				 <div class="control-group">
					<label class="control-label" for="focusedInput">Direccion</label>
					<div class="controls">
						<input class="input-xlarge focused" name="fDireccion"id="fDireccion" type="text" value="">
					</div>
				 </div>
				 <div class="control-group">
					<label class="control-label" for="focusedInput">Pais</label>
					<div class="controls">
						<input class="input-xlarge focused" name="fPais" id="fPais" type="text" value="">
					</div>
				 </div>
				 <div class="control-group">
					<label class="control-label" for="focusedInput">Apartado</label>
					<div class="controls">
						<input class="input-xlarge focused" name="fApartado" id="fApartado" type="text" value="">
					</div>
				 </div>
				 <div class="control-group">
					<label class="control-label" for="focusedInput">Zip Code</label>
					<div class="controls">
						<input class="input-xlarge focused" name="fZipCode" id="fZipCode" type="text" value="">
					</div>
				 </div>
				 <div class="control-group">
					<label class="control-label" for="focusedInput">Telefono</label>
					<div class="controls">
						<input class="input-xlarge focused" name="fTelefono" id="fTelefono" type="text" value="">
					</div>
				 </div>
				 <div class="control-group">
					<label class="control-label" for="focusedInput">Fax</label>
					<div class="controls">
						<input class="input-xlarge focused" name="fFax" id="fFax" type="text" value="">
					</div>
				 </div>
                 <div class="control-group">
	             	<label class="control-label" for="selOpPagoProv">Opciones Pago</label>
	                	<div class="controls">
		                	<select id="selOpPagoProv" name="selOpPagoProv" >
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
" ><?php echo $_smarty_tpl->tpl_vars['PAYMENTSOPTIONS_LIST']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['descripcion'];?>
</option>
                                <?php endfor; endif; ?>
		                    </select>
						</div>
				 </div>
			     <div class="control-group">
				 	<label class="control-label">Obligatorio Costo</label>
					<div class="controls">
						<label class="radio">
							<input type="radio" name="obligatorioCosto" id="optionNo" value="N" checked="">
							No
						</label>
						<div style="clear:both"></div>
						<label class="radio">
							<input type="radio" name="obligatorioCosto" id="optionSi" value="S">
							Si
						</label>
					</div>
				 </div>				 				 									 

 							
 							<div class="modal-footer">
								<button type="submit" name="enviar" class="btn btn-primary">Insertar</button>
								<a href="index.php" class="btn" data-dismiss="modal">Cerrar</a>
							  </div>  

							  
							  
							  
							</fieldset>
						  </form>
					
					</div><!--/box-content->
				</div><!--/span-->
			
			</div><!--/row-->		<?php }} ?>
