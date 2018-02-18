<?php /* Smarty version Smarty-3.1.16, created on 2016-09-01 15:17:39
         compiled from "../facturas/view/listdetfacarti.tpl" */ ?>
<?php /*%%SmartyHeaderCode:87243481455e86b71597d75-98088159%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '270b58b6578b849226aee2e2f0544e551e5d8cf0' => 
    array (
      0 => '../facturas/view/listdetfacarti.tpl',
      1 => 1472685566,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '87243481455e86b71597d75-98088159',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_55e86b71633cc2_23125701',
  'variables' => 
  array (
    'LISTA_DETFACARTI' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e86b71633cc2_23125701')) {function content_55e86b71633cc2_23125701($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['name'] = 'lP';
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['LISTA_DETFACARTI']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
		<td><?php echo $_smarty_tpl->tpl_vars['LISTA_DETFACARTI']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['numLinea'];?>
</td>                                                                          
		<td><?php echo $_smarty_tpl->tpl_vars['LISTA_DETFACARTI']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['desArticulo'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['LISTA_DETFACARTI']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['codArti'];?>
</td>
		<td style="text-align:right;"><?php echo $_smarty_tpl->tpl_vars['LISTA_DETFACARTI']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['PrecioVenta'];?>
</td>
		<td style="text-align:right;"><?php echo $_smarty_tpl->tpl_vars['LISTA_DETFACARTI']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['cantidad'];?>
</td>
		<td style="text-align:right;"><?php echo $_smarty_tpl->tpl_vars['LISTA_DETFACARTI']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['PorceDesc'];?>
</td>
		<td style="text-align:right;"><?php echo $_smarty_tpl->tpl_vars['LISTA_DETFACARTI']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['PrecioTotal'];?>
</td>
		<td style="text-align:center;">				
        	<input type="checkbox"   id="selRow<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']+1;?>
"  value='s'>
		</td>
	</tr> 
<?php endfor; endif; ?><?php }} ?>
