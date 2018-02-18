<?php /* Smarty version Smarty-3.1.16, created on 2016-12-31 07:24:07
         compiled from "../anulafacturas/view/listfactura.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15975384075867ae74eba811-54929244%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e2cfd1c910ccad91f989a6bba54e083ae334d1e' => 
    array (
      0 => '../anulafacturas/view/listfactura.tpl',
      1 => 1483190570,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15975384075867ae74eba811-54929244',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5867ae75016170_90328152',
  'variables' => 
  array (
    'LISTA_FACTURAS' => 0,
    'ID_TIENDA' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5867ae75016170_90328152')) {function content_5867ae75016170_90328152($_smarty_tpl) {?> <?php if ((empty($_smarty_tpl->tpl_vars['LISTA_FACTURAS']->value))) {?>
	<tr><td style="text-align:center;" colspan="8">No existe factura</td></tr>
 <?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['name'] = 'lP';
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['LISTA_FACTURAS']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
	<tr style="padding:0px;" id="tr<?php echo $_smarty_tpl->tpl_vars['LISTA_FACTURAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['idFactura'];?>
">
            <td style="width:385px; text-align:left"> 
            	<a style="color:#004C66;" href="#" 
            		id="<?php echo $_smarty_tpl->tpl_vars['LISTA_FACTURAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['idFactura'];?>
|<?php echo $_smarty_tpl->tpl_vars['LISTA_FACTURAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['nombre'];?>
|<?php echo $_smarty_tpl->tpl_vars['LISTA_FACTURAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['userVendedor'];?>
|<?php echo $_smarty_tpl->tpl_vars['LISTA_FACTURAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['subTotal'];?>
|<?php echo $_smarty_tpl->tpl_vars['LISTA_FACTURAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['descuento'];?>
|<?php echo $_smarty_tpl->tpl_vars['LISTA_FACTURAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['impuesto'];?>
|<?php echo $_smarty_tpl->tpl_vars['LISTA_FACTURAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['TotalN'];?>
|<?php echo $_smarty_tpl->tpl_vars['LISTA_FACTURAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['formaPago'];?>
|<?php echo $_smarty_tpl->tpl_vars['LISTA_FACTURAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['autorizacion'];?>
|<?php echo $_smarty_tpl->tpl_vars['LISTA_FACTURAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['numDocu'];?>
|<?php echo $_smarty_tpl->tpl_vars['LISTA_FACTURAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['codTienda'];?>
|<?php echo $_smarty_tpl->tpl_vars['LISTA_FACTURAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['fecFactura'];?>
|<?php echo $_smarty_tpl->tpl_vars['LISTA_FACTURAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['Estado'];?>
"                                		
            		onclick="getDetFactura(this.id)"><?php echo $_smarty_tpl->tpl_vars['LISTA_FACTURAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['nombre'];?>

            	</a>
            </td>
			<td style="width:40px;  text-align:right"><?php echo $_smarty_tpl->tpl_vars['LISTA_FACTURAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['idFactura'];?>
</td>
			<td style="width:70px;  text-align:right"><?php echo $_smarty_tpl->tpl_vars['LISTA_FACTURAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['numDocu'];?>
</td>
			<td style="width:150px;"><?php echo $_smarty_tpl->tpl_vars['LISTA_FACTURAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['fecFactura'];?>
</td>
            <td style="width:385px; text-align:right"><?php echo $_smarty_tpl->tpl_vars['LISTA_FACTURAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['Total'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['LISTA_FACTURAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['estadoImp'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['LISTA_FACTURAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['Estado'];?>
</td>
            <td class="center">
			<a href="#" id="<?php echo $_smarty_tpl->tpl_vars['LISTA_FACTURAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['idFactura'];?>
|<?php echo $_smarty_tpl->tpl_vars['LISTA_FACTURAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['numDocu'];?>
|<?php echo $_smarty_tpl->tpl_vars['LISTA_FACTURAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['Total'];?>
|<?php echo $_smarty_tpl->tpl_vars['LISTA_FACTURAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['nombre'];?>
|<?php echo $_smarty_tpl->tpl_vars['ID_TIENDA']->value;?>
|<?php echo $_smarty_tpl->tpl_vars['LISTA_FACTURAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['fecFactura'];?>
" <?php if ($_smarty_tpl->tpl_vars['LISTA_FACTURAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['Estado']=='ANULADA'||$_smarty_tpl->tpl_vars['LISTA_FACTURAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['estadoImp']=='N') {?>hidden='true'<?php }?> Title="Anular Factura" onclick="goPage(1, this.id)"><i class="icon icon-color icon-cancel"></i></a>
			<a href="#"  id="<?php echo $_smarty_tpl->tpl_vars['LISTA_FACTURAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['idFactura'];?>
" <?php if ($_smarty_tpl->tpl_vars['LISTA_FACTURAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['Estado']=='ANULADA'||$_smarty_tpl->tpl_vars['LISTA_FACTURAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['estadoImp']=='N') {?>hidden='true'<?php }?> Title="Re-imprimir Factura" onclick="impFactu(this.id);"><i class="icon icon-color icon-print"></i></a>
		</td>                          
	</tr> 
<?php endfor; endif; ?><?php }} ?>
