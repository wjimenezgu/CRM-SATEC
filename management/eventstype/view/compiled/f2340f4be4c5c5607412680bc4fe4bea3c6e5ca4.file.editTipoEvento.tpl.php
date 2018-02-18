<?php /* Smarty version Smarty-3.1.16, created on 2014-05-28 20:13:47
         compiled from "../tipoEventos/view/editTipoEvento.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1238131919538689cb27e232-63206747%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f2340f4be4c5c5607412680bc4fe4bea3c6e5ca4' => 
    array (
      0 => '../tipoEventos/view/editTipoEvento.tpl',
      1 => 1401325627,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1238131919538689cb27e232-63206747',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'HEADER_PAGE' => 0,
    'ID_TIPOEVENTO' => 0,
    'TIPOEVENTO' => 0,
    'FOOTER_PAGE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_538689cb2d0f36_26861834',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_538689cb2d0f36_26861834')) {function content_538689cb2d0f36_26861834($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['HEADER_PAGE']->value;?>

			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2>Información de Tipo Evento</h2>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="update.php" method="POST">
 			 <fieldset>
				<div class="control-group">
					<label class="control-label" for="disabledInput">Id</label>
					<div class="controls">
						<input class="input-xlarge " name="fIdTipoEvento" id="fIdTipoEvento" type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['ID_TIPOEVENTO']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['ID_TIPOEVENTO']->value;?>
" readOnly="true" >
					</div>
				</div>				
				<div class="control-group">
					<label class="control-label" for="focusedInput">Descripcion</label>
					<div class="controls">
						<input class="input-xlarge focused" name ="fDescripcion" id="fDescripcion" type="text" value="<?php echo $_smarty_tpl->tpl_vars['TIPOEVENTO']->value[0]['descripcion'];?>
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
