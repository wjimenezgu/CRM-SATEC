<?php /* Smarty version Smarty-3.1.16, created on 2014-08-09 22:16:52
         compiled from "../coins/view/addMoneda.tpl" */ ?>
<?php /*%%SmartyHeaderCode:76331377353e6e42492d940-81172590%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d33eb797290b63b71bf537bc396060305c32fc8' => 
    array (
      0 => '../coins/view/addMoneda.tpl',
      1 => 1407640576,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '76331377353e6e42492d940-81172590',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'NAV_MENU' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53e6e42496ee60_64561102',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53e6e42496ee60_64561102')) {function content_53e6e42496ee60_64561102($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['NAV_MENU']->value;?>

			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2>Información Monedas</h2>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="add.php" method="POST">
							<fieldset>
				<div class="control-group">
					<label class="control-label" for="focusedInput">Id</label>
					<div class="controls">
						<input class="input-xlarge focused" name="fIdMoneda" id="fIdMoneda" type="text" value="">
					</div>
				 </div>
				<div class="control-group">
					<label class="control-label" for="focusedInput">Descripción</label>
					<div class="controls">
						<input class="input-xlarge focused" name="fDescripcion" id="fDescripcion" type="text" value="">
					</div>
				 </div>
				 <div class="control-group">
					<label class="control-label" for="focusedInput">Símbolo</label>
					<div class="controls">
						<input class="input-xlarge focused" name="fSimboloMoneda"id="fSimboloMoneda" type="text" value="">
					</div>
				 </div>
<!-- 
 							<div class="form-actions">
								<button type="submit" name="enviar" class="btn btn-primary">Insertar</button>
								<a href="index.php" class="btn" data-dismiss="modal">Cerrar</a>
							  </div>  
 -->							  
 							<div class="modal-footer">
								<button type="submit" name="enviar" class="btn btn-primary">Insertar</button>
								<a href="index.php" class="btn" data-dismiss="modal">Cerrar</a>
							  </div>  
							  
							</fieldset>
						  </form>
					
					</div><!--/box-content->
				</div><!--/span-->
			
			</div><!--/row--><?php }} ?>
