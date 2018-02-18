<?php /* Smarty version Smarty-3.1.16, created on 2016-03-14 09:36:29
         compiled from "../queriesorder/view/listItems.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19546753875423574b38e329-81268187%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84e0c26fa9d6d9a3ec1d43dc226a171bbf20edb7' => 
    array (
      0 => '../queriesorder/view/listItems.tpl',
      1 => 1457810183,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19546753875423574b38e329-81268187',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5423574b3eba53_80637451',
  'variables' => 
  array (
    'LISTA_ITEMS' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5423574b3eba53_80637451')) {function content_5423574b3eba53_80637451($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']);
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
	<tr style="padding:0px;" id="tr<?php echo $_smarty_tpl->tpl_vars['LISTA_ITEMS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['idPedido'];?>
"> 
		<td style="width:8%;"><?php echo $_smarty_tpl->tpl_vars['LISTA_ITEMS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['numOrdenCompra'];?>
</td> 
		<td style="width:5%;"><?php echo $_smarty_tpl->tpl_vars['LISTA_ITEMS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['idLinea'];?>
</td>
		<td style="width:5%;"><?php echo $_smarty_tpl->tpl_vars['LISTA_ITEMS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['codArti'];?>
</td>
		<td style="width:10%;"><?php echo $_smarty_tpl->tpl_vars['LISTA_ITEMS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['codArtiProveedor'];?>
</td>
		<td style="width:45%;"><?php echo $_smarty_tpl->tpl_vars['LISTA_ITEMS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['descArti'];?>
</td>
		<td style="width:7%;"><?php echo $_smarty_tpl->tpl_vars['LISTA_ITEMS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['cantidad'];?>
</td>
		<td style="width:20%;"><?php echo $_smarty_tpl->tpl_vars['LISTA_ITEMS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['Compromiso'];?>
</td>
		<td style="width:10%;"><?php echo $_smarty_tpl->tpl_vars['LISTA_ITEMS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['FecEstArribo'];?>
</td>
		<td>
												<?php if ($_smarty_tpl->tpl_vars['LISTA_ITEMS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['NDias']<5&&$_smarty_tpl->tpl_vars['LISTA_ITEMS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['estadoPedido']=='A') {?> <span class="label label-success">Verde</span><?php }?>
												<?php if ($_smarty_tpl->tpl_vars['LISTA_ITEMS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['NDias']>4&&$_smarty_tpl->tpl_vars['LISTA_ITEMS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['NDias']<8&&$_smarty_tpl->tpl_vars['LISTA_ITEMS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['estadoPedido']=='A') {?> <span class="label" style="background-color: #FFD700;">Amarillo</span><?php }?>
												<?php if ($_smarty_tpl->tpl_vars['LISTA_ITEMS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['NDias']>7&&$_smarty_tpl->tpl_vars['LISTA_ITEMS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['estadoPedido']=='A') {?> <span class="label label-important">Rojo</span><?php }?>
											    <?php if ($_smarty_tpl->tpl_vars['LISTA_ITEMS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['estadoPedido']=='C') {?> <span class="label" style="background-color: #0000FF;">Cerrado</span><?php }?>
											    <?php if ($_smarty_tpl->tpl_vars['LISTA_ITEMS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['estadoPedido']=='N') {?> <span class="label" style="background-color: #FF9933;">Cancelado</span><?php }?>																																													
		
		</td>
		<!-- 
        <td>
        	<a href="#" class="btn-setting" title="Ver Eventos" data-rel="tooltip" onclick="loadInfoEventos('<?php echo $_smarty_tpl->tpl_vars['LISTA_ITEMS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['idPedido'];?>
','<?php echo $_smarty_tpl->tpl_vars['LISTA_ITEMS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['numOrdenCompra'];?>
');"><i class="icon icon-blue icon-book"></i></a> 			
		</td>	
		 -->		
	</tr> 
<?php endfor; endif; ?>
<script type="text/javascript">
$(document).ready(function(){
    
	$('#tblItemsList').dataTable({
		"sDom": "<'row-fluid'<'span6'l><'span6'f>r>t<'row-fluid'<'span12'i><'span12 center'p>>",
		
		"sPaginationType": "bootstrap",
        'iDisplayLength': 24,
        "aLengthMenu": [[24, 32, -1], [24, 32, "Todos"]],
        "aaSorting": [[ 0, "asc" ]],
        "bDestroy": true,
        "bRetrieve": true,

		"oLanguage": {
            "sProcessing":     "Procesando...",
            "sLengthMenu":     "Mostrar _MENU_ registros",
            "sZeroRecords":    "No se encontraron resultados",
            "sEmptyTable":     "Ningún dato disponible en esta tabla",
            "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
            "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix":    "",
            "sSearch":         "Buscar:",
            "sUrl":            "",
            "sInfoThousands":  ",",
            "sLoadingRecords": "Cargando..."
}
	});    
                
   }); 
</script>
<?php }} ?>
