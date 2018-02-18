<?php /* Smarty version Smarty-3.1.16, created on 2016-11-23 16:14:33
         compiled from "../comprasnac/view/listpedidos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1813417139566da5ae9cf750-70923895%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f7861207b1f0b22c4f0714e87e1df4dad7a25d5' => 
    array (
      0 => '../comprasnac/view/listpedidos.tpl',
      1 => 1479942225,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1813417139566da5ae9cf750-70923895',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_566da5aea00845_23805858',
  'variables' => 
  array (
    'LISTA_COMPRASNAC' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566da5aea00845_23805858')) {function content_566da5aea00845_23805858($_smarty_tpl) {?> <?php if ((empty($_smarty_tpl->tpl_vars['LISTA_COMPRASNAC']->value))) {?>
	<tr><td style="text-align:center;" colspan="9">No hay pedidos para mostrar</td></tr>
 <?php }?>
						  <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['p'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['p']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['LISTA_COMPRASNAC']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['name'] = 'p';
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total']);
?>
                                        <tr id="register<?php echo $_smarty_tpl->tpl_vars['LISTA_COMPRASNAC']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['idPedido'];?>
">
                                            <td><?php echo $_smarty_tpl->tpl_vars['LISTA_COMPRASNAC']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['idPedido'];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['LISTA_COMPRASNAC']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['numOrdenCompra'];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['LISTA_COMPRASNAC']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['nombreProveedor'];?>
</td> 
                                            <td><?php echo $_smarty_tpl->tpl_vars['LISTA_COMPRASNAC']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['comentarios'];?>
</td>                 
                                            <td><?php echo $_smarty_tpl->tpl_vars['LISTA_COMPRASNAC']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['fecCreacion'];?>
</td> 									
                                            <td>
                                                <a href="#" id="<?php echo $_smarty_tpl->tpl_vars['LISTA_COMPRASNAC']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['idPedido'];?>
" Title="Imprimir Orden de Compra" onclick="goPage(6, this.id)"><i class="icon icon-color icon-print"></i></a>                                                
                                                <a href="#" id="<?php echo $_smarty_tpl->tpl_vars['LISTA_COMPRASNAC']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['idPedido'];?>
" onclick="goPage(4, this.id)" title="Visualizar Datos" data-rel="tooltip"><i class="icon icon-blue icon-search"></i></a>
                                                <a href="#" id="<?php echo $_smarty_tpl->tpl_vars['LISTA_COMPRASNAC']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['idPedido'];?>
" onclick="goPage(7, this.id)" <?php if (($_smarty_tpl->tpl_vars['LISTA_COMPRASNAC']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['estadoPedido']=='R'||$_smarty_tpl->tpl_vars['LISTA_COMPRASNAC']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['estadoPedido']=='N')) {?> hidden="true"<?php }?> title="Amular Pedido" data-rel="tooltip"><i class="icon icon-color icon-cancel"></i></a>
                                                <a href="#" id="<?php echo $_smarty_tpl->tpl_vars['LISTA_COMPRASNAC']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['idPedido'];?>
" onclick="goPage(5, this.id)" <?php if (($_smarty_tpl->tpl_vars['LISTA_COMPRASNAC']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['estadoPedido']=='R'||$_smarty_tpl->tpl_vars['LISTA_COMPRASNAC']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['estadoPedido']=='N')) {?> hidden="true"<?php }?> title="Recibir Pedido" data-rel="tooltip"><i class="icon icon-blue icon-archive"></i></a>
                                                <a href="#" id="<?php echo $_smarty_tpl->tpl_vars['LISTA_COMPRASNAC']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['idPedido'];?>
" onclick="goPage(2, this.id)" <?php if (($_smarty_tpl->tpl_vars['LISTA_COMPRASNAC']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['estadoPedido']=='R'||$_smarty_tpl->tpl_vars['LISTA_COMPRASNAC']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['estadoPedido']=='N')) {?> hidden="true"<?php }?>  onclick="deleteCurrentRowJS(this)"title="Modificar Pedido Pendiente" data-rel="tooltip" style="margin-right:3px;" class="pull-right" ><i class="icon icon-color icon-edit"></i></a> 
                                            </td>
                                        </tr>
                                        <?php endfor; endif; ?>	


<script type="text/javascript">
$(document).ready(function(){

$('#tblDataE').dataTable({                        
	"sDom": "<'row-fluid'<'span6'l><'span6'f>r>t<'row-fluid'<'span12'i><'span12 center'p>>",
	"sPaginationType": "bootstrap",
                'iDisplayLength': 16,
                "aLengthMenu": [[16, 24, 32, -1], [8, 16, 24, 32, "Todos"]],
                "aaSorting": [[ 4, "desc" ]],
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
