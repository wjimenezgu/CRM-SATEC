<?php /* Smarty version Smarty-3.1.16, created on 2017-07-09 08:46:27
         compiled from "../facturacion/view/cliente.tpl" */ ?>
<?php /*%%SmartyHeaderCode:240082609596241c3e68555-14329692%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be7249564578b835e185c87ebc99fc911b663c3e' => 
    array (
      0 => '../facturacion/view/cliente.tpl',
      1 => 1499609987,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '240082609596241c3e68555-14329692',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CLIENTES' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_596241c3ead9c7_91299419',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_596241c3ead9c7_91299419')) {function content_596241c3ead9c7_91299419($_smarty_tpl) {?><table class="table table-condensed bootstrap-datatable" id="tblClientes" style="width:750px">
  <thead>
        <tr> 
            <th style="cursor: pointer;">Codigo</th>
            <th style="cursor: pointer;">Nombre</th>
            <th style="cursor: pointer;">Telefono</th>
            <th style="cursor: pointer;">Correo Electronico</th>
            <th></th>
        </tr>
  </thead>   
  <tbody> 
    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['CLIENTES']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>    
        <tr id="inv-rowArt1">
            <td><?php echo $_smarty_tpl->tpl_vars['CLIENTES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
</td>
            <td class="center"><?php echo $_smarty_tpl->tpl_vars['CLIENTES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['nombre'];?>
</td> 
            <td class="center"><?php echo $_smarty_tpl->tpl_vars['CLIENTES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['telefono'];?>
</td>
            <td class="center"><?php echo $_smarty_tpl->tpl_vars['CLIENTES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['correoElectronico'];?>
</td>  
            <td class="center">
            <!--   	Se envian utilizando el attibuto data varios datos del articulo			-->
                <a class="btn btn-mini btn-info" data="<?php echo $_smarty_tpl->tpl_vars['CLIENTES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
|<?php echo $_smarty_tpl->tpl_vars['CLIENTES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['nombre'];?>
"><i class="icon-plus icon-white"></i> Añadir</a>
            </td>        
        </tr>
    <?php endfor; endif; ?>    

  </tbody>
</table>

<script type="text/javascript">


	var inv_btnAdd = $("[id*='inv-rowArt']").find("td").find("a");
	$(inv_btnAdd).on("click", function(e){
        var arrRes = $(this).attr("data").split('|');
        $(".clienteId").attr("id", arrRes[0]);  
        $("#txtCliente").val(arrRes[1]);
        $("#idCliSel").val( arrRes[0]);        
		
    	$("#accept-choosedcli").click();
    
	});
	
	
	$("#tblClientes").dataTable({                        
			"sDom": "<'row-fluid'<'span6'l><'span6'f>r>t<'row-fluid'<'span12'i><'span12 center'p>>",
			"sPaginationType": "bootstrap",
                        'iDisplayLength': 12,
                        "aLengthMenu": [[12, 40, 60, 80, -1], [12, 40, 60, 80, "Todos"]],
                        "aaSorting": [[ 1, "asc" ]],
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
		} );           
        
//    });      
</script>

<?php }} ?>
