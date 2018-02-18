<?php /* Smarty version Smarty-3.1.16, created on 2014-05-29 20:03:39
         compiled from "..\commitmenttype\view\addTipoCompromiso.tpl" */ ?>
<?php /*%%SmartyHeaderCode:93465387767b245650-29533827%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81d35a0ec25b160531b11ca0183e010c102b887e' => 
    array (
      0 => '..\\commitmenttype\\view\\addTipoCompromiso.tpl',
      1 => 1401386615,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '93465387767b245650-29533827',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'NAV_MENU' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5387767b27d614_85003960',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5387767b27d614_85003960')) {function content_5387767b27d614_85003960($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['NAV_MENU']->value;?>

			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2>Información de Tipo Compromiso</h2>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="add.php" method="POST">
							<fieldset>
				<div class="control-group">
					<label class="control-label" for="focusedInput">Id</label>
					<div class="controls">
						<input class="input-xlarge focused" name="fIdTipoCompromiso" id="fIdTipoCompromiso" type="text" value="">
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
			
			</div><!--/row--><?php }} ?>
