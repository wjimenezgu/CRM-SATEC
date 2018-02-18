<?php /* Smarty version Smarty-3.1.16, created on 2016-12-12 17:13:16
         compiled from "../facturascxc/view/listdetgob.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18440462757fd5846a2b4c2-58450406%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98d9539bf8d9a0e0e83985ce671abe66954d83c2' => 
    array (
      0 => '../facturascxc/view/listdetgob.tpl',
      1 => 1481564717,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18440462757fd5846a2b4c2-58450406',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_57fd5846a50094_60618272',
  'variables' => 
  array (
    'DATOS_DETGOB' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57fd5846a50094_60618272')) {function content_57fd5846a50094_60618272($_smarty_tpl) {?>
	<tr> 
		<td><?php echo $_smarty_tpl->tpl_vars['DATOS_DETGOB']->value[0]["posPresupuestaria"];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['DATOS_DETGOB']->value[0]["fondo"];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['DATOS_DETGOB']->value[0]["areaFuncional"];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['DATOS_DETGOB']->value[0]["solPedido"];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['DATOS_DETGOB']->value[0]["tramiteCompra"];?>
</td>
	</tr> 
<?php }} ?>
