<?php /* Smarty version Smarty-3.1.16, created on 2014-05-28 20:09:17
         compiled from "../tipoEventos/view/addTipoEvento.tpl" */ ?>
<?php /*%%SmartyHeaderCode:228293326538688bd6f9d81-34474213%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7290de85e4e39555510eb0d595e5ed08865e0ad' => 
    array (
      0 => '../tipoEventos/view/addTipoEvento.tpl',
      1 => 1401325547,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '228293326538688bd6f9d81-34474213',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'HEADER_PAGE' => 0,
    'FOOTER_PAGE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_538688bd72f9d8_70418395',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_538688bd72f9d8_70418395')) {function content_538688bd72f9d8_70418395($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['HEADER_PAGE']->value;?>

			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2>Información de Tipo Evento</h2>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="add.php" method="POST">
							<fieldset>
				<div class="control-group">
					<label class="control-label" for="focusedInput">Id</label>
					<div class="controls">
						<input class="input-xlarge focused" name="fIdTipoEvento" id="fIdTipoEvento" type="text" value="">
					</div>
				 </div>
				<div class="control-group">
					<label class="control-label" for="focusedInput">Descripción</label>
					<div class="controls">
						<input class="input-xlarge focused" name="fDescripcion" id="fDescripcion" type="text" value="">
					</div>
				 </div>

 							<div class="form-actions">
								<button type="submit" name="enviar" class="btn btn-primary">Insertar</button>
								<a href="index.php" class="btn" data-dismiss="modal">Cerrar</a>
							  </div>  
						</fieldset>
						  </form>
					
					</div><!--/box-content->
				</div><!--/span-->
			
			</div><!--/row-->
<?php echo $_smarty_tpl->tpl_vars['FOOTER_PAGE']->value;?>
			
			
<?php }} ?>
