<?php /* Smarty version Smarty-3.1.16, created on 2016-04-05 13:15:28
         compiled from "../mcompras/view/allConciliaTarjetas.tpl" */ ?>
<?php /*%%SmartyHeaderCode:56231419855edbb2dcafae2-36037812%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '210454a4ca73c77902535bcc016bb4dd75f7d41f' => 
    array (
      0 => '../mcompras/view/allConciliaTarjetas.tpl',
      1 => 1457810178,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '56231419855edbb2dcafae2-36037812',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_55edbb2dcdd2b9_50899770',
  'variables' => 
  array (
    'NAV_MENU' => 0,
    'LISTA_REGS' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55edbb2dcdd2b9_50899770')) {function content_55edbb2dcdd2b9_50899770($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['NAV_MENU']->value;?>

<div class="row-fluid sortable">		
	<div class="box span12">
		<div class="box-header well" data-original-title>
			<h2>Conciliación de Tarjetas</h2>
		</div>
		<div class="box-content">
			<button type="button" class="btn btn-small btn-success" id="addNewReg" onclick="goPage(1,0)" style="margin-bottom:12px;"><i class="icon-plus icon-white"></i> Agregar</button>
			<table class="table table-striped table-bordered bootstrap-datatable" id="tblRegs">
				<thead>
					<tr>
						<th>Tarjeta</th>
						<th>Fecha Corte</th>
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
					<tr style="padding:0px;">
     					<td style="width:120px;"><?php echo $_smarty_tpl->tpl_vars['LISTA_REGS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['Tarjeta'];?>
</td>
     					<td style="width:150px;"><?php echo $_smarty_tpl->tpl_vars['LISTA_REGS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['FechaCorte'];?>
</td>
						<td class="center">
							<a href="#" id="<?php echo $_smarty_tpl->tpl_vars['LISTA_REGS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['NumTarjeta'];?>
|<?php echo $_smarty_tpl->tpl_vars['LISTA_REGS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['FechaCorte'];?>
|<?php echo $_smarty_tpl->tpl_vars['LISTA_REGS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['idProveedor'];?>
" onclick="goPage(2, this.id)"><i class="icon icon-color icon-edit"></i></a>
							<a href="#" id="<?php echo $_smarty_tpl->tpl_vars['LISTA_REGS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['NumTarjeta'];?>
|<?php echo $_smarty_tpl->tpl_vars['LISTA_REGS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['FechaCorte'];?>
|<?php echo $_smarty_tpl->tpl_vars['LISTA_REGS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['idProveedor'];?>
" onclick="goPage(6, this.id)"><i class="icon icon-color icon-print"></i></a>
							<!-- <a href="#" id="<?php echo $_smarty_tpl->tpl_vars['LISTA_REGS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['NumTarjeta'];?>
|<?php echo $_smarty_tpl->tpl_vars['LISTA_REGS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['FechaCorte'];?>
|<?php echo $_smarty_tpl->tpl_vars['LISTA_REGS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['idProveedor'];?>
" onclick="goPage(3, this.id)"><i class="icon icon-color icon-remove"></i></a>  -->
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
	window.location.href ='conciliaTarjeta.php?action='+action+"&id="+id;	
}	
</script><?php }} ?>
