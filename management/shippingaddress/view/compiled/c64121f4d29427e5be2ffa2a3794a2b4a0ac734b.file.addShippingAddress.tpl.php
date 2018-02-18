<?php /* Smarty version Smarty-3.1.16, created on 2017-03-31 15:14:08
         compiled from "../shippingaddress/view/addShippingAddress.tpl" */ ?>
<?php /*%%SmartyHeaderCode:86112991453e265ef5e86c6-50550160%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c64121f4d29427e5be2ffa2a3794a2b4a0ac734b' => 
    array (
      0 => '../shippingaddress/view/addShippingAddress.tpl',
      1 => 1457810183,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '86112991453e265ef5e86c6-50550160',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53e265ef62c929_90571061',
  'variables' => 
  array (
    'NAV_MENU' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53e265ef62c929_90571061')) {function content_53e265ef62c929_90571061($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['NAV_MENU']->value;?>

			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2>Información Direccion de Entrega</h2>
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
