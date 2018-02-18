<?php /* Smarty version Smarty-3.1.16, created on 2016-08-22 14:34:42
         compiled from "../facturas/view/listdetfacpagos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:192728115656b24b3b026070-18353946%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a99488efe781417f3cd652d14edf927283d70da3' => 
    array (
      0 => '../facturas/view/listdetfacpagos.tpl',
      1 => 1471877279,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '192728115656b24b3b026070-18353946',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_56b24b3b0958b8_37460471',
  'variables' => 
  array (
    'LISTA_DETFACPAGOS' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56b24b3b0958b8_37460471')) {function content_56b24b3b0958b8_37460471($_smarty_tpl) {?><?php if ((empty($_smarty_tpl->tpl_vars['LISTA_DETFACPAGOS']->value))) {?>
	<tr><td style="text-align:center;" colspan="4">No hay datos para desplegar</td></tr>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['lPP'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['lPP']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lPP']['name'] = 'lPP';
$_smarty_tpl->tpl_vars['smarty']->value['section']['lPP']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['LISTA_DETFACPAGOS']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lPP']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['lPP']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lPP']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lPP']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['lPP']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lPP']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['lPP']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['lPP']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['lPP']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lPP']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['lPP']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['lPP']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['lPP']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['lPP']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['lPP']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lPP']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['lPP']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['lPP']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['lPP']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['lPP']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['lPP']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['lPP']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['lPP']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lPP']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lPP']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lPP']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['lPP']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lPP']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lPP']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['lPP']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lPP']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['lPP']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lPP']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['lPP']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['lPP']['total']);
?>
	<tr> 
		<td><?php echo $_smarty_tpl->tpl_vars['LISTA_DETFACPAGOS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lPP']['index']]['numLinea'];?>
</td>                                                                          
		<td><?php echo $_smarty_tpl->tpl_vars['LISTA_DETFACPAGOS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lPP']['index']]['numDocu'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['LISTA_DETFACPAGOS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lPP']['index']]['descCorta'];?>
</td>
		<td style="text-align:right;"><?php echo $_smarty_tpl->tpl_vars['LISTA_DETFACPAGOS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lPP']['index']]['montoPago'];?>
</td>
	</tr> 
<?php endfor; endif; ?><?php }} ?>
