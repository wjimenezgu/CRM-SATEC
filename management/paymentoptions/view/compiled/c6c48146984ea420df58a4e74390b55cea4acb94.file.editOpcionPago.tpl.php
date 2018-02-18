<?php /* Smarty version Smarty-3.1.16, created on 2014-05-28 18:11:05
         compiled from "../opcionesPago/view/editOpcionPago.tpl" */ ?>
<?php /*%%SmartyHeaderCode:187223279553866c0a054865-57720148%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6c48146984ea420df58a4e74390b55cea4acb94' => 
    array (
      0 => '../opcionesPago/view/editOpcionPago.tpl',
      1 => 1401318657,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '187223279553866c0a054865-57720148',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53866c0a093f79_64545687',
  'variables' => 
  array (
    'HEADER_PAGE' => 0,
    'ID_PROVEEDOR' => 0,
    'ID_OPCIONPAGO' => 0,
    'OPCIONPAGO' => 0,
    'FOOTER_PAGE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53866c0a093f79_64545687')) {function content_53866c0a093f79_64545687($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['HEADER_PAGE']->value;?>

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
						<input class="input-xlarge " name="fIdOpcionPago" id="fIdOpcionPago" type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['ID_PROVEEDOR']->value;?>
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
		</div>		
<?php echo $_smarty_tpl->tpl_vars['FOOTER_PAGE']->value;?>

<?php }} ?>
