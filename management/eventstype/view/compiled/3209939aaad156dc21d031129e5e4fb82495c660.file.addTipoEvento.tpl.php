<?php /* Smarty version Smarty-3.1.16, created on 2014-05-29 09:22:13
         compiled from "..\eventstype\view\addTipoEvento.tpl" */ ?>
<?php /*%%SmartyHeaderCode:99995386e02547a7b0-76180263%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3209939aaad156dc21d031129e5e4fb82495c660' => 
    array (
      0 => '..\\eventstype\\view\\addTipoEvento.tpl',
      1 => 1401348117,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '99995386e02547a7b0-76180263',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'NAV_MENU' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5386e0254ae992_85468797',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5386e0254ae992_85468797')) {function content_5386e0254ae992_85468797($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['NAV_MENU']->value;?>

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
			
			</div><!--/row--><?php }} ?>
