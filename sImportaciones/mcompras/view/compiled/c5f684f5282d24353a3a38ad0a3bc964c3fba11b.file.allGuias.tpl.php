<?php /* Smarty version Smarty-3.1.16, created on 2016-03-12 12:29:13
         compiled from "../mcompras/view/allGuias.tpl" */ ?>
<?php /*%%SmartyHeaderCode:87949933454c17a5ac807c0-47197243%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5f684f5282d24353a3a38ad0a3bc964c3fba11b' => 
    array (
      0 => '../mcompras/view/allGuias.tpl',
      1 => 1457810179,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '87949933454c17a5ac807c0-47197243',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_54c17a5ad6bc83_85206688',
  'variables' => 
  array (
    'NAV_MENU' => 0,
    'LISTA_REGS' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c17a5ad6bc83_85206688')) {function content_54c17a5ad6bc83_85206688($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include '/var/www/html/CRM-SATEC/resources/libs/smarty/libs/plugins/modifier.capitalize.php';
?><?php echo $_smarty_tpl->tpl_vars['NAV_MENU']->value;?>

<div class="row-fluid sortable">		
	<div class="box span12">
		<div class="box-header well" data-original-title>
			<h2>Administración de Guias</h2>
		</div>
		<div class="box-content">
			<button type="button" class="btn btn-small btn-success" id="addNewReg" onclick="goPage(1,0)" style="margin-bottom:12px;"><i class="icon-plus icon-white"></i> Agregar</button>
			<table class="table table-striped table-bordered bootstrap-datatable" id="tblRegs">
				<thead>
					<tr>
						<th>Numero Guia</th>
						<th>Fecha Inserción</th>
						<th>Descripción</th>
						<th>Estado</th>
						<th>Acción</th>
					</tr>
				</thead>						
				<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['name'] = 'lP';
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['LISTA_REGS']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
					<tr style="padding:0px;" id="tr<?php echo $_smarty_tpl->tpl_vars['LISTA_REGS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['numGuia'];?>
">
     					<td style="width:120px;"><?php echo $_smarty_tpl->tpl_vars['LISTA_REGS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['numGuia'];?>
</td>
     					<td style="width:150px;"><?php echo $_smarty_tpl->tpl_vars['LISTA_REGS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['fecins'];?>
</td>
                        <td style="width:300px;" align="left"><?php echo smarty_modifier_capitalize(mb_strtolower($_smarty_tpl->tpl_vars['LISTA_REGS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['descripcion'], 'UTF-8'));?>
</td>
                        <td style="width:40px;" align="left"><?php echo $_smarty_tpl->tpl_vars['LISTA_REGS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['estado'];?>
</td>
						<td class="center">
							<a href="#" id="<?php echo $_smarty_tpl->tpl_vars['LISTA_REGS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['numGuia'];?>
" onclick="goPage(2, this.id)"><i class="icon icon-color icon-edit"></i></a>
							<a href="#" id="<?php echo $_smarty_tpl->tpl_vars['LISTA_REGS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['numGuia'];?>
" onclick="goPage(3, this.id)"><i class="icon icon-color icon-remove"></i></a>
							<a href="allGuiaWhrs.php?id=<?php echo $_smarty_tpl->tpl_vars['LISTA_REGS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['numGuia'];?>
" title="Agregar Warehouse Receipt" data-rel="tooltip"><i class="icon icon-blue icon-tag"></i></a>
							<a href="selGuiaWhrs.php?id=<?php echo $_smarty_tpl->tpl_vars['LISTA_REGS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['numGuia'];?>
" title="Seleccionar Warehouse" data-rel="tooltip"><i class="icon icon-blue icon-check"></i></a>
						</td>
					</tr> 
				<?php endfor; endif; ?>
			 </table>  					            
		</div><!-- box-content -->
	</div><!--/box span12-->			
</div><!--/row fluid-->

<script type="text/javascript">
$(document).ready(function(){    
    $('#tblRegs').dataTable({                        
		"sDom": "<'row-fluid'<'span6'l><'span6'f>r>t<'row-fluid'<'span12'i><'span12 center'p>>",
		"sPaginationType": "bootstrap",
                    'iDisplayLength': 16,
                    "aLengthMenu": [[16, 24, 32, -1], [8, 16, 24, 32, "Todos"]],
                    "aaSorting": [[ 1, "desc" ]],
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

// Octubre 15, 2014 William Jimenez
// Function goPage
// Descripcion: permite enviar al usuario a la pantalla para agregar o modificar registro
// Parametros:
//			action: 1> Insertar, 2>Modificar, 3>Borrar
//			id: El id del registro que se desea modificar o borrar, en el caso de insertar este parametro no se utiliza.
function goPage(action, id){
	window.location.href ='guiaRegister.php?action='+action+"&id="+id;	
}	
</script><?php }} ?>
