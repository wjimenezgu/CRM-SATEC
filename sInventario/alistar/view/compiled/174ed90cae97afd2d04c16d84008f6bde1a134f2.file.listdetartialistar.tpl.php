<?php /* Smarty version Smarty-3.1.16, created on 2015-10-13 15:14:45
         compiled from "../alistar/view/listdetartialistar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:427960158561d60343c7308-91123647%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '174ed90cae97afd2d04c16d84008f6bde1a134f2' => 
    array (
      0 => '../alistar/view/listdetartialistar.tpl',
      1 => 1444768452,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '427960158561d60343c7308-91123647',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_561d60343e00e8_52299643',
  'variables' => 
  array (
    'LISTA_DETARTIALISTAR' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561d60343e00e8_52299643')) {function content_561d60343e00e8_52299643($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['name'] = 'lP';
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['LISTA_DETARTIALISTAR']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
	<tr>                                                                           
		<td><?php echo $_smarty_tpl->tpl_vars['LISTA_DETARTIALISTAR']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['DesArticulo'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['LISTA_DETARTIALISTAR']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['CodArti'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['LISTA_DETARTIALISTAR']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['CodArtiProveedor'];?>
</td>
		<td style="text-align:right;"><?php echo $_smarty_tpl->tpl_vars['LISTA_DETARTIALISTAR']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['cantidad'];?>
</td>
		<td>
			<input type="checkbox" name="ckArti[]" id="selRow<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']+1;?>
" value='s'>
			<input type="hidden"   name="artLis[]" id="valRow<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']+1;?>
" value='<?php echo $_smarty_tpl->tpl_vars['LISTA_DETARTIALISTAR']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['IdFactura'];?>
|<?php echo $_smarty_tpl->tpl_vars['LISTA_DETARTIALISTAR']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['NumLinea'];?>
|<?php echo $_smarty_tpl->tpl_vars['LISTA_DETARTIALISTAR']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['CodArti'];?>
'>
		</td>
	</tr> 
<?php endfor; endif; ?><?php }} ?>
