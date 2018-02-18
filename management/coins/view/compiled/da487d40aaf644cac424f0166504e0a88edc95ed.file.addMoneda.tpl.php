<?php /* Smarty version Smarty-3.1.16, created on 2014-05-28 16:31:00
         compiled from "../monedas/view/addMoneda.tpl" */ ?>
<?php /*%%SmartyHeaderCode:150589215153865594a36f44-97386015%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da487d40aaf644cac424f0166504e0a88edc95ed' => 
    array (
      0 => '../monedas/view/addMoneda.tpl',
      1 => 1401305973,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '150589215153865594a36f44-97386015',
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
  'unifunc' => 'content_53865594a6b027_30730350',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53865594a6b027_30730350')) {function content_53865594a6b027_30730350($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['HEADER_PAGE']->value;?>

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
