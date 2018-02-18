<?php /* Smarty version Smarty-3.1.16, created on 2014-05-29 08:59:43
         compiled from "..\events\view\editEvento.tpl" */ ?>
<?php /*%%SmartyHeaderCode:174355386dadf9b0bf6-56523327%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca7c1aed182ed0671287dd5965a0da4aaa5511b0' => 
    array (
      0 => '..\\events\\view\\editEvento.tpl',
      1 => 1401346444,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '174355386dadf9b0bf6-56523327',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'NAV_MENU' => 0,
    'ID_EVENTO' => 0,
    'EVENTO' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5386dadf9f17d7_17164634',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5386dadf9f17d7_17164634')) {function content_5386dadf9f17d7_17164634($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['NAV_MENU']->value;?>

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
			<div class="modal-footer">
				<a href="index.php" class="btn" data-dismiss="modal">Cerrar</a>
				<input type="submit" name="enviar" value="Actualizar" />
			</div>
			</fieldset>
		  </form>			
		    </div>				
		</div>		
		</div><?php }} ?>
