<?php /* Smarty version Smarty-3.1.16, created on 2014-05-28 18:06:19
         compiled from "../opcionesPago/view/addOpcionPago.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12586224253866beb9b24b0-22371814%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af8b4b05c421eb4ef93f6450c93c3bafbfdac896' => 
    array (
      0 => '../opcionesPago/view/addOpcionPago.tpl',
      1 => 1401317037,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12586224253866beb9b24b0-22371814',
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
  'unifunc' => 'content_53866beb9f0283_40163254',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53866beb9f0283_40163254')) {function content_53866beb9f0283_40163254($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['HEADER_PAGE']->value;?>

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
			
			</div><!--/row-->
<?php echo $_smarty_tpl->tpl_vars['FOOTER_PAGE']->value;?>
			
			
<?php }} ?>
