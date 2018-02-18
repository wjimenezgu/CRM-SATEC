<?php /* Smarty version Smarty-3.1.16, created on 2014-08-18 21:54:43
         compiled from "../textLines/view/addtextLines.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32245395653f2bc73c2f163-16876663%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8607a88ee3ba0ddcb2b4a33cf8dd0d6f9ecfb62' => 
    array (
      0 => '../textLines/view/addtextLines.tpl',
      1 => 1408407303,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32245395653f2bc73c2f163-16876663',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'NAV_MENU' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53f2bc73c738b6_59142505',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f2bc73c738b6_59142505')) {function content_53f2bc73c738b6_59142505($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['NAV_MENU']->value;?>

			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2>Información Lineas Texto</h2>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="save.php" method="POST">
							<fieldset>
				<div class="control-group">
					<label class="control-label" for="focusedInput">Id</label>
					<div class="controls">
						<input class="input-xlarge focused" name="fid" id="fid" type="text" value="">
					</div>
				 </div>
				<div class="control-group">
					<label class="control-label" for="focusedInput">Descripcion</label>
					<div class="controls">
						<input class="input-xlarge focused" name="fDescripcion" id="fDescripcion" type="text" value="">
					</div>
				 </div>
				 <div class="control-group">
					<label class="control-label" for="focusedInput">Linea 1</label>
					<div class="controls">
						<input class="input-xlarge focused" name="fLinea1" id="fLinea1" type="text" value="">
					</div>
				 </div>
				 <div class="control-group">
					<label class="control-label" for="focusedInput">Linea 2</label>
					<div class="controls">
						<input class="input-xlarge focused" name="fLinea2" id="fLinea2" type="text" value="">
					</div>
				 </div>
				 <div class="control-group">
					<label class="control-label" for="focusedInput">Linea 3</label>
					<div class="controls">
						<input class="input-xlarge focused" name="fLinea3" id="fLinea3" type="text" value="">
					</div>
				 </div> 							
 							<div class="modal-footer">
								<button type="submit" name="enviar" class="btn btn-primary">Insertar</button>
								<a href="index.php" class="btn" data-dismiss="modal">Cerrar</a>
							  </div>  

							  
							  
							  
							</fieldset>
						  </form>
					
					</div><!--/box-content->
				</div><!--/span-->
			
			</div><!--/row-->		<?php }} ?>
