<?php /* Smarty version Smarty-3.1.16, created on 2014-08-09 22:28:00
         compiled from "../events/view/editEvento.tpl" */ ?>
<?php /*%%SmartyHeaderCode:44018961553e657f05a3196-31838315%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89ea83f1394024e24fdf20be47c2e37fd82fca39' => 
    array (
      0 => '../events/view/editEvento.tpl',
      1 => 1407641270,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '44018961553e657f05a3196-31838315',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53e657f060e5e0_11979583',
  'variables' => 
  array (
    'NAV_MENU' => 0,
    'ID_EVENTO' => 0,
    'EVENTO' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53e657f060e5e0_11979583')) {function content_53e657f060e5e0_11979583($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['NAV_MENU']->value;?>

			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2>Información de Evento</h2>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="update.php" method="POST">
 			 <fieldset>
				<div class="control-group">
					<label class="control-label" for="disabledInput">Id</label>
					<div class="controls">
						<input class="input-xlarge " name="fIdEvento" id="fIdEvento" type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['ID_EVENTO']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['ID_EVENTO']->value;?>
" readOnly="true" >
					</div>
				</div>				
				<div class="control-group">
					<label class="control-label" for="focusedInput">Descripcion</label>
					<div class="controls">
						<input class="input-xlarge focused" name ="fDescripcion" id="fDescripcion" type="text" value="<?php echo $_smarty_tpl->tpl_vars['EVENTO']->value[0]['descripcion'];?>
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
