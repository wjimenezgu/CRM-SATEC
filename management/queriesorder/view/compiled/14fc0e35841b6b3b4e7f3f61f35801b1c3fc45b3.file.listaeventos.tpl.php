<?php /* Smarty version Smarty-3.1.16, created on 2015-01-12 18:46:45
         compiled from "../queriesorder/view/listaeventos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20953178045424ae68ccbb63-11392719%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14fc0e35841b6b3b4e7f3f61f35801b1c3fc45b3' => 
    array (
      0 => '../queriesorder/view/listaeventos.tpl',
      1 => 1421109994,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20953178045424ae68ccbb63-11392719',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5424ae68d0db60_52894805',
  'variables' => 
  array (
    'INFOEVENTOS' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5424ae68d0db60_52894805')) {function content_5424ae68d0db60_52894805($_smarty_tpl) {?><table class="table table-striped table-bordered span12">
	<thead>
		<tr>
			<th>Fecha Evento</th>
			<th>Usuario</th>
			<th>Evento</th>
			<th>Comentario</th>
		</tr>
	</thead>
	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['name'] = 'lP';
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['INFOEVENTOS']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
     		<td style="width:30%;"><?php echo $_smarty_tpl->tpl_vars['INFOEVENTOS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['fecEvento'];?>
</td> 
     		<td style="width:10%;"><?php echo $_smarty_tpl->tpl_vars['INFOEVENTOS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['userInsEvento'];?>
</td> 
     		<td style="width:35%;"><?php echo $_smarty_tpl->tpl_vars['INFOEVENTOS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['descripcion'];?>
</td>
     		<td style="width:25%;"><?php echo $_smarty_tpl->tpl_vars['INFOEVENTOS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['comentario'];?>
</td>
		</tr> 
	<?php endfor; endif; ?>						  						
</table>  
					            
<?php }} ?>
