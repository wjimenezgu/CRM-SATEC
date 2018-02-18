<?php /* Smarty version Smarty-3.1.16, created on 2016-07-15 09:12:39
         compiled from "../reparaciones/view/listreparaciones.tpl" */ ?>
<?php /*%%SmartyHeaderCode:611966113560ae47d152599-74132762%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '24d505603b1cc8e35673a552f76ae3e119cf6623' => 
    array (
      0 => '../reparaciones/view/listreparaciones.tpl',
      1 => 1468595551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '611966113560ae47d152599-74132762',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_560ae47d1b0e59_29800060',
  'variables' => 
  array (
    'LISTA_REPARACIONES' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_560ae47d1b0e59_29800060')) {function content_560ae47d1b0e59_29800060($_smarty_tpl) {?> <?php if ((empty($_smarty_tpl->tpl_vars['LISTA_REPARACIONES']->value))) {?>
	<tr><td style="text-align:center;" colspan="9">No hay reparaciones que cargar</td></tr>
 <?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['name'] = 'lP';
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['LISTA_REPARACIONES']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
	<tr style="padding:0px;" id="tr<?php echo $_smarty_tpl->tpl_vars['LISTA_REPARACIONES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['idReparacion'];?>
">
		 <td style="width:10px;"><?php echo $_smarty_tpl->tpl_vars['LISTA_REPARACIONES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['FechaRecibido'];?>
</td>
     	 <td style="width:10px;"><?php echo $_smarty_tpl->tpl_vars['LISTA_REPARACIONES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['idReparacion'];?>
</td>
     	 <td style="width:370px;"><?php echo $_smarty_tpl->tpl_vars['LISTA_REPARACIONES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['nombre'];?>
</td>
         <td style="width:355px;" align="left"><?php echo $_smarty_tpl->tpl_vars['LISTA_REPARACIONES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['Equipo'];?>
</td>
         <td style="width:455px;" align="left"><?php echo $_smarty_tpl->tpl_vars['LISTA_REPARACIONES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['Problema'];?>
</td>
         <td style="width:25px;text-align:right;"><?php echo $_smarty_tpl->tpl_vars['LISTA_REPARACIONES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['TotalReparacion'];?>
</td>
         <td style="width:25px;" align="left"><?php echo $_smarty_tpl->tpl_vars['LISTA_REPARACIONES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['Estado'];?>
</td>
		 <td style="width:300px" "center">
		    <a href="#" id="<?php echo $_smarty_tpl->tpl_vars['LISTA_REPARACIONES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['idReparacion'];?>
"                Title="Ver Reparacion" <?php if ($_smarty_tpl->tpl_vars['LISTA_REPARACIONES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['Estado']=="Activa"||$_smarty_tpl->tpl_vars['LISTA_REPARACIONES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['Estado']=="Reparada") {?> hidden="true"<?php }?> onclick="goPage(4, this.id)"><i class="icon icon-color icon-search"></i></a>
			<a href="#" id="<?php echo $_smarty_tpl->tpl_vars['LISTA_REPARACIONES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['idReparacion'];?>
" <?php if ($_smarty_tpl->tpl_vars['LISTA_REPARACIONES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['Estado']=="Cerrada") {?> hidden="true"<?php }?> onclick="goPage(2, this.id)"><i class="icon icon-color icon-edit"></i></a>
			<a href="#" id="<?php echo $_smarty_tpl->tpl_vars['LISTA_REPARACIONES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['idReparacion'];?>
" <?php if ($_smarty_tpl->tpl_vars['LISTA_REPARACIONES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['Estado']=="Cerrada") {?> hidden="true"<?php }?> onclick="goPage(3, this.id)"><i class="icon icon-color icon-remove"></i></a>
            <a href="eventRegister.php?id=<?php echo $_smarty_tpl->tpl_vars['LISTA_REPARACIONES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['idReparacion'];?>
" title="Registrar Eventos" data-rel="tooltip"><i class="icon icon-blue icon-calendar"></i></a>										
			<a id="<?php echo $_smarty_tpl->tpl_vars['LISTA_REPARACIONES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['idReparacion'];?>
" Title="Imprimir Boleta"                                                                       onclick="goPage(7, this.id)"><i class="icon icon-color icon-document"></i></a>
			<a id="<?php echo $_smarty_tpl->tpl_vars['LISTA_REPARACIONES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['idReparacion'];?>
" Title="Facturar Adelanto"   <?php if ($_smarty_tpl->tpl_vars['LISTA_REPARACIONES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['SiAdelanto']=="N") {?> hidden="true"<?php }?> onclick="goPage(8, this.id)"><i class="icon icon-color icon-archive"></i></a>			
			<a id="<?php echo $_smarty_tpl->tpl_vars['LISTA_REPARACIONES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['idReparacion'];?>
" Title="Facturar Reparación" <?php if ($_smarty_tpl->tpl_vars['LISTA_REPARACIONES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['SiFacturar']=="N") {?> hidden="true"<?php }?> onclick="goPage(6, this.id)"><i class="icon icon-color icon-print"></i></a>
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
	                "aaSorting": [[ 1, "desc" ]],
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
