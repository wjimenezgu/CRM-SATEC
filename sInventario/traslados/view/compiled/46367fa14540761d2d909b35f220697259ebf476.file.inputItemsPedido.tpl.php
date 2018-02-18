<?php /* Smarty version Smarty-3.1.16, created on 2016-05-27 17:20:22
         compiled from "../traslados/view/inputItemsPedido.tpl" */ ?>
<?php /*%%SmartyHeaderCode:184493516956b8d1d69e1322-49825991%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46367fa14540761d2d909b35f220697259ebf476' => 
    array (
      0 => '../traslados/view/inputItemsPedido.tpl',
      1 => 1464391122,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '184493516956b8d1d69e1322-49825991',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_56b8d1d6a70e30_98829055',
  'variables' => 
  array (
    'LIST_ITEMS_PEDIDO' => 0,
    'ACTION' => 0,
    'EoS' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56b8d1d6a70e30_98829055')) {function content_56b8d1d6a70e30_98829055($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['name'] = 'lP';
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['LIST_ITEMS_PEDIDO']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
	<tr style="padding:0px;" id="<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']+1;?>
">
  			<td style="width:10px;">
  				<label id="row<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']+1;?>
"><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']+1;?>
</label>
  			</td>
  			<td style="width:455x;">
  				<?php echo $_smarty_tpl->tpl_vars['LIST_ITEMS_PEDIDO']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['desArticulo'];?>

  				<input name="item[]" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['LIST_ITEMS_PEDIDO']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['desArticulo'];?>
">
  			</td>
			<td style="width:10px;">
				<input name="codArti[]" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['LIST_ITEMS_PEDIDO']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['codArti'];?>
">
				<?php echo $_smarty_tpl->tpl_vars['LIST_ITEMS_PEDIDO']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['codArti'];?>

			</td>     									
   			<td style="width:10px;" align="left">
   				<?php echo $_smarty_tpl->tpl_vars['LIST_ITEMS_PEDIDO']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['Existencia'];?>

				<input name="existencia[]" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['LIST_ITEMS_PEDIDO']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['Existencia'];?>
">
            </td>
   			<td style="width:10px;" align="left">                            				
   				<input class="input-mini"  name="cant[]" id="cant[]"  type="number"  style="text-align: right;"  value="<?php echo $_smarty_tpl->tpl_vars['LIST_ITEMS_PEDIDO']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['Total'];?>
">
   			</td>                    			
			<td class="center">
				<a href="#" id="<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']+1;?>
"  <?php if ($_smarty_tpl->tpl_vars['ACTION']->value=="5") {?> hidden="true"<?php }?>  onclick="deleteCurrentRow(this)"><i class="icon icon-color icon-remove"></i></a>
        <input <?php if ($_smarty_tpl->tpl_vars['EoS']->value=="E") {?>type="hidden"<?php } else { ?>type="checkbox"<?php }?>  id="selRow<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']+1;?>
"  value='s'>
			</td>

	</tr>
<?php endfor; endif; ?>

<script type="text/javascript">


function keyPressN(e){
	//alert(e.keyCode+' '+e.ctrlKey+' '+e.shiftKey);
    if ($.inArray(e.keyCode, [46, 8, 9, 27, 13,56,106,107, 187,190]) !== -1 ||
            // Allow: Ctrl+A
           (e.keyCode == 65 && e.ctrlKey === true) || 
            // Allow: home, end, left, right, down, up
           (e.keyCode >= 35 && e.keyCode <= 40)) {
                // let it happen, don't do anything
                return;
       }
       // Ensure that it is a number and stop the keypress
       if ((e.shiftKey || ((e.keyCode < 48) || (e.keyCode > 57))) && ((e.keyCode < 96) || (e.keyCode > 105))) {
           e.preventDefault();
       };
}

function keyPressEnt(e){
	//alert(e.keyCode+' '+e.ctrlKey+' '+e.shiftKey);
    if ($.inArray(e.keyCode, [46, 8, 9, 27, 13,56,106,107, 187]) !== -1 ||
            // Allow: Ctrl+A
           (e.keyCode == 65 && e.ctrlKey === true) || 
            // Allow: home, end, left, right, down, up
           (e.keyCode >= 35 && e.keyCode <= 40)) {
                // let it happen, don't do anything
                return;
       }
       // Ensure that it is a number and stop the keypress
       if ((e.shiftKey || ((e.keyCode < 48) || (e.keyCode > 57))) && ((e.keyCode < 96) || (e.keyCode > 105))) {
           e.preventDefault();
       };
}


</script>
<?php }} ?>
