<?php /* Smarty version Smarty-3.1.16, created on 2014-05-28 18:40:31
         compiled from "../tipoCompromiso/view/addTipoCompromiso.tpl" */ ?>
<?php /*%%SmartyHeaderCode:689720180538673ef7b33a0-16227956%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd32f234ee0faf1b56e203997e2f04ade3e4932b3' => 
    array (
      0 => '../tipoCompromiso/view/addTipoCompromiso.tpl',
      1 => 1401320089,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '689720180538673ef7b33a0-16227956',
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
  'unifunc' => 'content_538673ef7f1a19_96670230',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_538673ef7f1a19_96670230')) {function content_538673ef7f1a19_96670230($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['HEADER_PAGE']->value;?>

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
			
			</div><!--/row-->
<?php echo $_smarty_tpl->tpl_vars['FOOTER_PAGE']->value;?>
			
			
<?php }} ?>
