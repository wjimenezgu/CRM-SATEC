<?php /* Smarty version Smarty-3.1.16, created on 2017-01-14 11:24:22
         compiled from "../facturacioncxc/view/inventory.tpl" */ ?>
<?php /*%%SmartyHeaderCode:326344697587a6cd65aafe0-15360967%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'adaa7022ff0343cea0adb43c00550cedffc48bdd' => 
    array (
      0 => '../facturacioncxc/view/inventory.tpl',
      1 => 1484418222,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '326344697587a6cd65aafe0-15360967',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'COSTO_OFF' => 0,
    'INVENTARIO' => 0,
    'names_count' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_587a6cd6648ef1_50467884',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587a6cd6648ef1_50467884')) {function content_587a6cd6648ef1_50467884($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include '/var/www/html/CRM-SATEC/resources/libs/smarty/libs/plugins/modifier.capitalize.php';
?><table class="table table-condensed bootstrap-datatable" id="tblAllInventary" style="width:750px">
  <thead>
        <tr> 
            <th style="cursor: pointer;">Codigo</th>
            <th style="cursor: pointer;">Descripción</th>
            <th <?php if ($_smarty_tpl->tpl_vars['COSTO_OFF']->value=="S") {?> class="hidden" <?php }?> style="cursor: pointer;text-align: right;">Costo</th>
            <th style="cursor: pointer;text-align: right;">Precio IVI</th>
            <th style="cursor: pointer;text-align: right;">Existencia</th>
            <th></th>
        </tr>
  </thead>   
  <tbody> 
  	<?php $_smarty_tpl->tpl_vars['names_count'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['INVENTARIO']->value), null, 0);?> 
	 <input type="hidden" name="cantArti" id="cantArti" value="<?php echo $_smarty_tpl->tpl_vars['names_count']->value;?>
">
    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['INVENTARIO']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
        <td><?php echo $_smarty_tpl->tpl_vars['INVENTARIO']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['codArti'];?>
</td>
        <td class="center"><?php echo smarty_modifier_capitalize(mb_strtolower($_smarty_tpl->tpl_vars['INVENTARIO']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['desArticulo'], 'UTF-8'));?>
</td>
        <td class="center <?php if ($_smarty_tpl->tpl_vars['COSTO_OFF']->value=="S") {?> hidden <?php }?>" style="text-align: right;"><?php echo $_smarty_tpl->tpl_vars['INVENTARIO']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['costo'];?>
</td>
        <td class="center" style="text-align: right;"><?php echo $_smarty_tpl->tpl_vars['INVENTARIO']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['precio'];?>
</td>
        <td class="center" style="text-align: right;<?php if ($_smarty_tpl->tpl_vars['INVENTARIO']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ExisLocal']<=0) {?> color:red<?php }?>"><?php echo $_smarty_tpl->tpl_vars['INVENTARIO']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ExisLocal'];?>
</td>
        <td class="center">
        <!--    ARTICULODEF (etiqueta que sirve para buscar)							-->
        <!--   	Se envian utilizando el attibuto data varios datos del articulo			-->

            <a class="btn btn-mini btn-info" data="<?php echo $_smarty_tpl->tpl_vars['INVENTARIO']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['codArti'];?>
|<?php echo $_smarty_tpl->tpl_vars['INVENTARIO']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['desArticulo'];?>
|<?php echo $_smarty_tpl->tpl_vars['INVENTARIO']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['precio'];?>
|<?php echo $_smarty_tpl->tpl_vars['INVENTARIO']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['precioSinIV'];?>
|<?php echo $_smarty_tpl->tpl_vars['INVENTARIO']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['costo'];?>
"><i class="icon-plus icon-white"></i> Añadir</a>
        </td>        
    </tr>
    <?php endfor; endif; ?>    

  </tbody>
</table>

<script type="text/javascript">

	var inv_btnAdd = $("[id*='inv-rowArt']").find("td").find("a");
	$(inv_btnAdd).on("click", function(e){
	     
  		// se extraen del atributo 'data' los campos del articulo para ponerlos en la linea
  		// ver arriba el detalle. buscar etiqueta ARTICULODEF
    	var arrRes = $(this).attr("data").split('|');
  	

		$('#descipcionArticulo').val(arrRes[1].trim());
		$('#ArticuloExiste').val('true'); 
		$('#codigoArticulo').val(arrRes[0].trim());		
		var valorStr = arrRes[3];
		valorStr = valorStr.replace(/,/g, ''); 
		$('#precioArticulo').val(valorStr);				
		valorStr = arrRes[4];	
		valorStr = valorStr.replace(/,/g, ''); 
		$('#costoArticulo').val(valorStr);
        
		AgregaArtiAlDetalle();
		
		// una vez agregado el articulo al detalle se regresa a la pantalla de la factura
		// se cierra el modal
    	$("#accept-choosed").click();
    
	});

	
	$("#tblAllInventary").dataTable({                        
			"sDom": "<'row-fluid'<'span6'l><'span6'f>r>t<'row-fluid'<'span12'i><'span12 center'p>>",
			"sPaginationType": "bootstrap",
                        'iDisplayLength': 12,
                        "aLengthMenu": [[12, 40, 60, 80, -1], [12, 40, 60, 80, "Todos"]],
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
