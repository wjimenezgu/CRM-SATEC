<?php /* Smarty version Smarty-3.1.16, created on 2015-12-03 11:26:21
         compiled from "../paymentoptions/view/addOpcionPago.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31597488553e6e5a87a41a6-92570650%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe41519af8eb2496f2ca7f07475d38115896b54d' => 
    array (
      0 => '../paymentoptions/view/addOpcionPago.tpl',
      1 => 1445375860,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31597488553e6e5a87a41a6-92570650',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53e6e5a8838e17_90388028',
  'variables' => 
  array (
    'NAV_MENU' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53e6e5a8838e17_90388028')) {function content_53e6e5a8838e17_90388028($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['NAV_MENU']->value;?>

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
