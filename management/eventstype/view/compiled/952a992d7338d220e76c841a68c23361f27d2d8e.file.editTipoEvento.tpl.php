<?php /* Smarty version Smarty-3.1.16, created on 2014-08-09 22:29:43
         compiled from "../eventstype/view/editTipoEvento.tpl" */ ?>
<?php /*%%SmartyHeaderCode:187722456553e6e6cbcb5ae4-37988693%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '952a992d7338d220e76c841a68c23361f27d2d8e' => 
    array (
      0 => '../eventstype/view/editTipoEvento.tpl',
      1 => 1407641373,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '187722456553e6e6cbcb5ae4-37988693',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53e6e6cbcfbd64_50241436',
  'variables' => 
  array (
    'NAV_MENU' => 0,
    'ID_TIPOEVENTO' => 0,
    'TIPOEVENTO' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53e6e6cbcfbd64_50241436')) {function content_53e6e6cbcfbd64_50241436($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['NAV_MENU']->value;?>

			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2>Información de Tipo Evento</h2>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="update.php" method="POST">
 			 <fieldset>
				<div class="control-group">
					<label class="control-label" for="disabledInput">Id</label>
					<div class="controls">
						<input class="input-xlarge " name="fIdTipoEvento" id="fIdTipoEvento" type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['ID_TIPOEVENTO']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['ID_TIPOEVENTO']->value;?>
" readOnly="true" >
					</div>
				</div>				
				<div class="control-group">
					<label class="control-label" for="focusedInput">Descripcion</label>
					<div class="controls">
						<input class="input-xlarge focused" name ="fDescripcion" id="fDescripcion" type="text" value="<?php echo $_smarty_tpl->tpl_vars['TIPOEVENTO']->value[0]['descripcion'];?>
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
