<?php /* Smarty version Smarty-3.1.16, created on 2017-01-02 11:25:05
         compiled from "../facturascxc/view/listdetfacarti.tpl" */ ?>
<?php /*%%SmartyHeaderCode:135529984657fcdac790a409-62102783%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0fb8547fa742e700a8bb8be62482533376904f70' => 
    array (
      0 => '../facturascxc/view/listdetfacarti.tpl',
      1 => 1483381325,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '135529984657fcdac790a409-62102783',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_57fcdac795a537_84424027',
  'variables' => 
  array (
    'LISTA_DETFACARTI' => 0,
    'ANULACXC_OFF' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57fcdac795a537_84424027')) {function content_57fcdac795a537_84424027($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']);
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
		<td id="numRow<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']+1;?>
"><?php echo $_smarty_tpl->tpl_vars['LISTA_DETFACARTI']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['numLinea'];?>
</td>                                                                          
		<td><?php echo $_smarty_tpl->tpl_vars['LISTA_DETFACARTI']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['desArticulo'];?>
</td>
		<td id="codRow<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']+1;?>
"><?php echo $_smarty_tpl->tpl_vars['LISTA_DETFACARTI']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['codArti'];?>
</td>
		<td id="pventaRow<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']+1;?>
"style="text-align:right;"><?php echo $_smarty_tpl->tpl_vars['LISTA_DETFACARTI']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['PrecioVenta'];?>
</td>
		<td id="cantRow<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']+1;?>
"style="text-align:right;"><?php echo $_smarty_tpl->tpl_vars['LISTA_DETFACARTI']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['cantidad'];?>
</td>
		<td id="pdescRow<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']+1;?>
"style="text-align:right;"><?php echo $_smarty_tpl->tpl_vars['LISTA_DETFACARTI']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['PorceDesc'];?>
</td>
		<td id="ptotalRow<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']+1;?>
"style="text-align:right;"><?php echo $_smarty_tpl->tpl_vars['LISTA_DETFACARTI']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['PrecioTotal'];?>
</td>
		<td <?php if ($_smarty_tpl->tpl_vars['ANULACXC_OFF']->value=="S") {?> class="hidden" <?php }?> style="text-align:center;">				
        	<input type="checkbox"   id="selRow<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']+1;?>
"  value='s'>
		</td>
	</tr> 
<?php endfor; endif; ?><?php }} ?>
