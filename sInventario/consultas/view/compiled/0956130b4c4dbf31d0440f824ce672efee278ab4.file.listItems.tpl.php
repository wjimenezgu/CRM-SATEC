<?php /* Smarty version Smarty-3.1.16, created on 2016-06-24 11:36:06
         compiled from "../consultas/view/listItems.tpl" */ ?>
<?php /*%%SmartyHeaderCode:84478403576d6f8677ced5-09703134%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0956130b4c4dbf31d0440f824ce672efee278ab4' => 
    array (
      0 => '../consultas/view/listItems.tpl',
      1 => 1466789575,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '84478403576d6f8677ced5-09703134',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LISTA_ITEMS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_576d6f867c9b38_94668075',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_576d6f867c9b38_94668075')) {function content_576d6f867c9b38_94668075($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['name'] = 'lP';
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['LISTA_ITEMS']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
	<tr style="padding:0px;<?php if ($_smarty_tpl->tpl_vars['LISTA_ITEMS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['estado']==2) {?> color:red<?php }?>" id="tr<?php echo $_smarty_tpl->tpl_vars['LISTA_ITEMS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['codArti'];?>
"> 
		<td style="width:40px;"><?php echo $_smarty_tpl->tpl_vars['LISTA_ITEMS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['codArti'];?>
</td>                                                                          
		<td style="width:250px;" align="left"><?php echo $_smarty_tpl->tpl_vars['LISTA_ITEMS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['desArticulo'];?>
</td>
		<td style="width:50px;"><?php echo $_smarty_tpl->tpl_vars['LISTA_ITEMS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['codigoExterno'];?>
</td>
		<td style="width:250px;"><?php echo $_smarty_tpl->tpl_vars['LISTA_ITEMS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['descExterno'];?>
</td>
		<td class="center">
			<a href="#" id="<?php echo $_smarty_tpl->tpl_vars['LISTA_ITEMS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['codArti'];?>
" onclick="goPage(7, this.id)" Title="Listar Movimientos" ><i class="icon icon-color icon-book"></i></a>
		</td>
		
	</tr> 
<?php endfor; endif; ?><?php }} ?>
