<?php /* Smarty version Smarty-3.1.16, created on 2014-05-29 20:07:59
         compiled from "..\commitmenttype\view\editTipoCompromiso.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2156453877763f192d1-57989406%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0bc936616b3bbb942b250836c99d2d9631c3ee68' => 
    array (
      0 => '..\\commitmenttype\\view\\editTipoCompromiso.tpl',
      1 => 1401386878,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2156453877763f192d1-57989406',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53877764021508_15904931',
  'variables' => 
  array (
    'NAV_MENU' => 0,
    'ID_TIPOCOMPROMISO' => 0,
    'TIPOCOMPROMISO' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53877764021508_15904931')) {function content_53877764021508_15904931($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['NAV_MENU']->value;?>

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
		</div><?php }} ?>
