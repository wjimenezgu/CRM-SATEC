<?php /* Smarty version Smarty-3.1.16, created on 2016-08-31 14:59:51
         compiled from "../items/view/listItems.tpl" */ ?>
<?php /*%%SmartyHeaderCode:139375450653ded9da20cdf1-30334160%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3319241ed38afcee15aaf872a00239d443f198b7' => 
    array (
      0 => '../items/view/listItems.tpl',
      1 => 1471877278,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '139375450653ded9da20cdf1-30334160',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53ded9da283da3_30946964',
  'variables' => 
  array (
    'LISTA_ITEMS' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ded9da283da3_30946964')) {function content_53ded9da283da3_30946964($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include '/var/www/CRM-SATEC/resources/libs/smarty/libs/plugins/modifier.capitalize.php';
?><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']);
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
		<td style="width:250px;"><?php echo smarty_modifier_capitalize(mb_strtolower($_smarty_tpl->tpl_vars['LISTA_ITEMS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['descExterno'], 'UTF-8'));?>
</td>
		<td class="center">
			<a href="#" id="<?php echo $_smarty_tpl->tpl_vars['LISTA_ITEMS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['codArti'];?>
" onclick="goPage(2, this.id)" Title="Editar Artículo"><i class="icon icon-color icon-edit"></i></a>
			<a href="#" id="<?php echo $_smarty_tpl->tpl_vars['LISTA_ITEMS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['codArti'];?>
" onclick="goPage(3, this.id)" Title="Borrar Artículo" ><i class="icon icon-color icon-remove"></i></a>
			<a href="#" id="<?php echo $_smarty_tpl->tpl_vars['LISTA_ITEMS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['codArti'];?>
" onclick="goPage(7, this.id)" Title="Listar Movimientos" ><i class="icon icon-color icon-book"></i></a>
		</td>
		
	</tr> 
<?php endfor; endif; ?>
<?php }} ?>
