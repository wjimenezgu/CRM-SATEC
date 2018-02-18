<?php /* Smarty version Smarty-3.1.16, created on 2016-07-08 09:30:00
         compiled from "../consultas/view/listdetfacarti.tpl" */ ?>
<?php /*%%SmartyHeaderCode:755525172577fc6f8715586-38323752%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66ace3e9219367c8b73822d8f06bfb27e6e68485' => 
    array (
      0 => '../consultas/view/listdetfacarti.tpl',
      1 => 1467991777,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '755525172577fc6f8715586-38323752',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LISTA_DETFACARTI' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_577fc6f87719a7_46502618',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577fc6f87719a7_46502618')) {function content_577fc6f87719a7_46502618($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include '/var/www/html/CRM-SATEC/resources/libs/smarty/libs/plugins/modifier.capitalize.php';
?><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']);
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
		<td><?php echo smarty_modifier_capitalize(mb_strtolower($_smarty_tpl->tpl_vars['LISTA_DETFACARTI']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['desArticulo'], 'UTF-8'));?>
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
	</tr> 
<?php endfor; endif; ?><?php }} ?>
