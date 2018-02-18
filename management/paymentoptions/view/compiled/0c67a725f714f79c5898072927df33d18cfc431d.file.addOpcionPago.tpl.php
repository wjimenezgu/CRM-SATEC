<?php /* Smarty version Smarty-3.1.16, created on 2014-05-29 20:19:38
         compiled from "..\paymentoptions\view\addOpcionPago.tpl" */ ?>
<?php /*%%SmartyHeaderCode:369553877a3a25b319-68754211%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c67a725f714f79c5898072927df33d18cfc431d' => 
    array (
      0 => '..\\paymentoptions\\view\\addOpcionPago.tpl',
      1 => 1401387573,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '369553877a3a25b319-68754211',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'NAV_MENU' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53877a3a28c221_86391794',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53877a3a28c221_86391794')) {function content_53877a3a28c221_86391794($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['NAV_MENU']->value;?>

			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2>Información de Opción Pago</h2>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="add.php" method="POST">
							<fieldset>
				<div class="control-group">
					<label class="control-label" for="focusedInput">Id</label>
					<div class="controls">
						<input class="input-xlarge focused" name="fIdOpcionPago" id="fIdOpcionPago" type="text" value="">
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
