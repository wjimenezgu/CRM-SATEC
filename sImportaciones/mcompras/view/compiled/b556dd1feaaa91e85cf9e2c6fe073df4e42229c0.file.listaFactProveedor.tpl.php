<?php /* Smarty version Smarty-3.1.16, created on 2017-07-24 11:05:04
         compiled from "../mcompras/view/listaFactProveedor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14700489905436d72591d594-99548992%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b556dd1feaaa91e85cf9e2c6fe073df4e42229c0' => 
    array (
      0 => '../mcompras/view/listaFactProveedor.tpl',
      1 => 1457810178,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14700489905436d72591d594-99548992',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5436d725966ae7_64805432',
  'variables' => 
  array (
    'LISTA_FACTPROVEEDOR' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5436d725966ae7_64805432')) {function content_5436d725966ae7_64805432($_smarty_tpl) {?> <?php if ((empty($_smarty_tpl->tpl_vars['LISTA_FACTPROVEEDOR']->value))) {?>
	<tr><td style="text-align:center;" colspan="7">No hay factuas que cargar</td></tr>
 <?php }?>
 <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['name'] = 'lP';
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['LISTA_FACTPROVEEDOR']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
		<td style="width:7%;"><?php echo $_smarty_tpl->tpl_vars['LISTA_FACTPROVEEDOR']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['numOrdenCompra'];?>
</td>
        <td style="width:23%;"><?php echo $_smarty_tpl->tpl_vars['LISTA_FACTPROVEEDOR']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['nombreProveedor'];?>
</td>     
		<td style="width:15%;"><?php echo $_smarty_tpl->tpl_vars['LISTA_FACTPROVEEDOR']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['numDoc'];?>
</td>
		<td style="width:15%;"><?php echo $_smarty_tpl->tpl_vars['LISTA_FACTPROVEEDOR']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['fecDoc'];?>
</td>
		<td style="width:10%;"><?php echo $_smarty_tpl->tpl_vars['LISTA_FACTPROVEEDOR']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['idMoneda'];?>
</td>
		<td style="width:10%; text-align:right"><?php echo $_smarty_tpl->tpl_vars['LISTA_FACTPROVEEDOR']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['montoDoc'];?>
</td>					
		<td style="width:10%;" >
			<input type="checkbox"  id="selRow<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']+1;?>
" value='s' <?php if (!empty($_smarty_tpl->tpl_vars['LISTA_FACTPROVEEDOR']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['lP']['index']]['fechaCorteConcilia'])) {?>checked<?php }?>>
		</td>
	</tr> 
<?php endfor; endif; ?>



<?php }} ?>
