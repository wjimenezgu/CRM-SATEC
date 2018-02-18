<?php /* Smarty version Smarty-3.1.16, created on 2014-08-09 23:12:05
         compiled from "../docutype/view/addTipoDocumento.tpl" */ ?>
<?php /*%%SmartyHeaderCode:124385349753e6f115d7bde9-31254237%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac9d94c5adee0ce7631e1c31c60029a7e893c287' => 
    array (
      0 => '../docutype/view/addTipoDocumento.tpl',
      1 => 1407643274,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '124385349753e6f115d7bde9-31254237',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'NAV_MENU' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53e6f115dbed50_15746689',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53e6f115dbed50_15746689')) {function content_53e6f115dbed50_15746689($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['NAV_MENU']->value;?>

			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2>Información de Tipo Documento</h2>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="add.php" method="POST">
							<fieldset>
				<div class="control-group">
					<label class="control-label" for="focusedInput">Id</label>
					<div class="controls">
						<input class="input-xlarge focused" name="fid" id="fid" type="text" value="">
					</div>
				 </div>
				<div class="control-group">
					<label class="control-label" for="focusedInput">Descripción</label>
					<div class="controls">
						<input class="input-xlarge focused" name="fdescripcion" id="fdescripcion" type="text" value="">
					</div>
				 </div>
				<div class="control-group">
					<label class="control-label" for="focusedInput">Siglas</label>
					<div class="controls">
						<input class="input-xlarge focused" name="fsiglasDoc" id="fsiglasDoc" type="text" value="">
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
