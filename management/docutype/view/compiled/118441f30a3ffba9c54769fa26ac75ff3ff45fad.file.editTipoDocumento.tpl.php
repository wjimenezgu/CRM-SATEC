<?php /* Smarty version Smarty-3.1.16, created on 2014-08-09 23:58:08
         compiled from "../docutype/view/editTipoDocumento.tpl" */ ?>
<?php /*%%SmartyHeaderCode:129563990753e6fbe0d476d8-54422872%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '118441f30a3ffba9c54769fa26ac75ff3ff45fad' => 
    array (
      0 => '../docutype/view/editTipoDocumento.tpl',
      1 => 1407645785,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '129563990753e6fbe0d476d8-54422872',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'NAV_MENU' => 0,
    'ID_TIPODOCUMENTO' => 0,
    'TIPODOCUMENTO' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53e6fbe0d883b7_46494724',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53e6fbe0d883b7_46494724')) {function content_53e6fbe0d883b7_46494724($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['NAV_MENU']->value;?>

			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2>Información de Tipo Documento</h2>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="update.php" method="POST">
 			 <fieldset>
				<div class="control-group">
					<label class="control-label" for="disabledInput">Id</label>
					<div class="controls">
						<input class="input-xlarge " name="fid" id="fid" type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['ID_TIPODOCUMENTO']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['ID_TIPODOCUMENTO']->value;?>
" readOnly="true" >
					</div>
				</div>				
				<div class="control-group">
					<label class="control-label" for="focusedInput">Descripcion</label>
					<div class="controls">
						<input class="input-xlarge focused" name ="fdescripcion" id="fdescripcion" type="text" value="<?php echo $_smarty_tpl->tpl_vars['TIPODOCUMENTO']->value[0]['descripcion'];?>
">
					</div>
				 </div>
				<div class="control-group">
					<label class="control-label" for="focusedInput">Siglas</label>
					<div class="controls">
						<input class="input-xlarge focused" name ="fsiglasDoc" id="fsiglasDoc" type="text" value="<?php echo $_smarty_tpl->tpl_vars['TIPODOCUMENTO']->value[0]['siglasDoc'];?>
">
					</div>
				 </div>
				 
<!-- 				 
			<div class="modal-footer">
				<a href="index.php" class="btn" data-dismiss="modal">Cerrar</a>
				<input type="submit" name="enviar" value="Actualizar" />
			</div>
 -->			
 							<div class="modal-footer">
								<button type="submit" name="enviar" class="btn btn-primary">Actualizar</button>
								<a href="index.php" class="btn" data-dismiss="modal">Cerrar</a>
							  </div>  			
			
			</fieldset>
		  </form>			
		    </div>				
		</div>		
		</div><?php }} ?>
