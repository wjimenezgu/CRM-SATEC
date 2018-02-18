<?php /* Smarty version Smarty-3.1.16, created on 2016-08-03 14:34:10
         compiled from "../mcompras/view/releaseItemsOrders.tpl" */ ?>
<?php /*%%SmartyHeaderCode:124268122557c65c50c3a43-40205654%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'baeff8c502835f9d2a596f02d6aa8913914c630f' => 
    array (
      0 => '../mcompras/view/releaseItemsOrders.tpl',
      1 => 1457810178,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '124268122557c65c50c3a43-40205654',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_557c65c5179ac9_67752784',
  'variables' => 
  array (
    'LIST_ITEMS_ORDERS' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557c65c5179ac9_67752784')) {function content_557c65c5179ac9_67752784($_smarty_tpl) {?> <?php if ((empty($_smarty_tpl->tpl_vars['LIST_ITEMS_ORDERS']->value))) {?>
	<tr><td style="text-align:center;" colspan="9">No hay datos para desplegar</td></tr>
 <?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['name'] = 'lP';
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['LIST_ITEMS_ORDERS']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['total']);
?>
	<tr style="padding:0px;" >
	 	<td style="width:5px;"><?php echo $_smarty_tpl->tpl_vars['LIST_ITEMS_ORDERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['idPedido'];?>
</td> 
	 	<td style="width:5px;"><?php echo $_smarty_tpl->tpl_vars['LIST_ITEMS_ORDERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['idLinea'];?>
</td>
		<td style="width:10px;"><?php echo $_smarty_tpl->tpl_vars['LIST_ITEMS_ORDERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['codArti'];?>
</td>
		<td style="width:10px;"><?php echo $_smarty_tpl->tpl_vars['LIST_ITEMS_ORDERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['codArtiProveedor'];?>
</td>
		<td style="width:10px;"><?php echo $_smarty_tpl->tpl_vars['LIST_ITEMS_ORDERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['descArti'];?>
</td>
		<td style="width:10px;">
			<input class="input-mini"  disabled style="text-align: right;" id="solRow<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']+1;?>
" type="text" value="<?php echo $_smarty_tpl->tpl_vars['LIST_ITEMS_ORDERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['cantidad'];?>
">
		</td>
		<td style="width:10px;">
			<input class="input-mini"  disabled style="text-align: right;" id="totRow<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']+1;?>
" type="text"  value="<?php echo $_smarty_tpl->tpl_vars['LIST_ITEMS_ORDERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['cantRecibida'];?>
">
		</td>
		<td style="width:10px;">
			<div class="control-group " id="difBoxRow<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']+1;?>
">
			<div class="controls">
			<input class="input-mini"  disabled style="text-align: right;" id="difRow<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']+1;?>
" type="text"  value="<?php echo $_smarty_tpl->tpl_vars['LIST_ITEMS_ORDERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['difRecibida'];?>
">
			</div>
			</div>
		</td>
		<td style="width:10%;" >
			<input type="checkbox"  id="selRow<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']+1;?>
" value='s' <?php if (($_smarty_tpl->tpl_vars['LIST_ITEMS_ORDERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['estadoLinea']=="3")) {?>checked<?php }?>>
		</td>
				
	</tr> 
<?php endfor; endif; ?>


<script type="text/javascript">


</script>

<?php }} ?>
