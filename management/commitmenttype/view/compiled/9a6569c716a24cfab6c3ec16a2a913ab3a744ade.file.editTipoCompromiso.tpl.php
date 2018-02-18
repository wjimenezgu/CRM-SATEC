<?php /* Smarty version Smarty-3.1.16, created on 2014-05-28 18:45:18
         compiled from "../tipoCompromiso/view/editTipoCompromiso.tpl" */ ?>
<?php /*%%SmartyHeaderCode:42994066538674898677e1-62849800%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a6569c716a24cfab6c3ec16a2a913ab3a744ade' => 
    array (
      0 => '../tipoCompromiso/view/editTipoCompromiso.tpl',
      1 => 1401320688,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '42994066538674898677e1-62849800',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_538674898bf179_76409487',
  'variables' => 
  array (
    'HEADER_PAGE' => 0,
    'ID_TIPOCOMPROMISO' => 0,
    'TIPOCOMPROMISO' => 0,
    'FOOTER_PAGE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_538674898bf179_76409487')) {function content_538674898bf179_76409487($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['HEADER_PAGE']->value;?>

			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2>Información de Tipo Compromiso</h2>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="update.php" method="POST">
 			 <fieldset>
				<div class="control-group">
					<label class="control-label" for="disabledInput">Id</label>
					<div class="controls">
						<input class="input-xlarge " name="fIdTipoCompromiso" id="fIdTipoCompromiso" type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['ID_TIPOCOMPROMISO']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['ID_TIPOCOMPROMISO']->value;?>
" readOnly="true" >
					</div>
				</div>				
				<div class="control-group">
					<label class="control-label" for="focusedInput">Descripcion</label>
					<div class="controls">
						<input class="input-xlarge focused" name ="fDescripcion" id="fDescripcion" type="text" value="<?php echo $_smarty_tpl->tpl_vars['TIPOCOMPROMISO']->value[0]['descripcion'];?>
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
