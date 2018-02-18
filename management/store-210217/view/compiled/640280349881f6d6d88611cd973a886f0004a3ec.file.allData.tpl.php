<?php /* Smarty version Smarty-3.1.16, created on 2017-02-16 09:51:04
         compiled from "../store/view/allData.tpl" */ ?>
<?php /*%%SmartyHeaderCode:135892626757c7315d6cb654-92658595%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '640280349881f6d6d88611cd973a886f0004a3ec' => 
    array (
      0 => '../store/view/allData.tpl',
      1 => 1487263846,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '135892626757c7315d6cb654-92658595',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_57c7315d822534_89406015',
  'variables' => 
  array (
    'NAV_MENU' => 0,
    'ANULAMOD_OFF' => 0,
    'ANULAVIEW_OFF' => 0,
    'ANULADELETE_OFF' => 0,
    'ANULACONSEC_OFF' => 0,
    'LISTA_DATA' => 0,
    'LISTA_FACTPROVEEDOR' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c7315d822534_89406015')) {function content_57c7315d822534_89406015($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include '/var/www/html/CRM-SATEC/resources/libs/smarty/libs/plugins/modifier.capitalize.php';
?><?php echo $_smarty_tpl->tpl_vars['NAV_MENU']->value;?>

	<div class="row-fluid sortable">		
		<div class="box span12">
			<div class="box-header well" data-original-title>
				<h2>Administración de Tiendas</h2>
				<input type="hidden" id="anulaMOD" value="<?php echo $_smarty_tpl->tpl_vars['ANULAMOD_OFF']->value;?>
">
				<input type="hidden" id="anulaVIEW" value="<?php echo $_smarty_tpl->tpl_vars['ANULAVIEW_OFF']->value;?>
">
				<input type="hidden" id="anulaDELETE" value="<?php echo $_smarty_tpl->tpl_vars['ANULADELETE_OFF']->value;?>
">
				<input type="hidden" id="anulaCONSEC" value="<?php echo $_smarty_tpl->tpl_vars['ANULACONSEC_OFF']->value;?>
">

			</div>
			<div class="box-content">
				<button type="button" class="btn btn-small btn-success" id="addNewData" title="Agregar Nueva Tienda" data-rel="tooltip" onclick="goPage(1,0)" style="margin-bottom:12px;"><i class="icon-plus icon-white"></i> Agregar</button>
				<table class="table table-striped table-bordered bootstrap-datatable" id="tblData">
					<thead>
						<tr>
							<th>Id</th>
							<th>Descripción</th>
							<th>Acción</th>
						<!--	<th>Acción</th>    -->
						</tr>
					</thead>						
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['name'] = 'lP';
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['LISTA_DATA']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
						<tr style="padding:0px;" id="tr<?php echo $_smarty_tpl->tpl_vars['LISTA_DATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['codTienda'];?>
">
     						<td style="width:40px;"><?php echo $_smarty_tpl->tpl_vars['LISTA_DATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['codTienda'];?>
</td>  
                            <td style="width:385px;" align="left"><?php echo smarty_modifier_capitalize(mb_strtolower($_smarty_tpl->tpl_vars['LISTA_DATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['nombreTienda'], 'UTF-8'));?>
</td>
							<td class="center">

								<a <?php if ($_smarty_tpl->tpl_vars['ANULAMOD_OFF']->value=="S") {?>  class="hidden" <?php }?> class="btn btn-primary" href="#" id="<?php echo $_smarty_tpl->tpl_vars['LISTA_DATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['codTienda'];?>
" title="Modificar Datos de Tienda" data-rel="tooltip" onclick="goPage(2, this.id)"><i class="icon-edit icon-white"></i>  Modificar</a>

								<a <?php if ($_smarty_tpl->tpl_vars['ANULADELETE_OFF']->value=="S") {?>  class="hidden" <?php }?> class="btn btn-danger" href="#" id="<?php echo $_smarty_tpl->tpl_vars['LISTA_DATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['codTienda'];?>
" title="Eliminar Tienda" data-rel="tooltip" onclick="goPage(3, this.id)"><i class="icon-trash icon-white"></i> Eliminar</a>

								<a <?php if ($_smarty_tpl->tpl_vars['ANULAVIEW_OFF']->value=="S") {?>  class="hidden" <?php }?> class="btn btn-warning" href="#" id="<?php echo $_smarty_tpl->tpl_vars['LISTA_DATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['codTienda'];?>
" title="Ver Tienda" data-rel="tooltip" onclick="goPage(4, this.id)"><i class="icon-zoom-in icon-white"></i> Visualizar</a>

								<a <?php if ($_smarty_tpl->tpl_vars['ANULACONSEC_OFF']->value=="N") {?>  class="hidden" <?php }?> class="btn btn-warning" href="#" id="<?php echo $_smarty_tpl->tpl_vars['LISTA_DATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['codTienda'];?>
" title="Consecutivo" data-rel="tooltip" onclick="goPage(5, this.id)"><i class="icon-edit icon-white"></i> Consecutivo</a>
							</td>
						</tr> 
					<?php endfor; endif; ?>
				</table>  
					            
			</div>
		</div><!--/span-->			
	</div><!--/row-->
<!-- 
 Codigo de referencia para usarla cuando se quiere poner un mensaje de que no hay registros
 <?php if ((empty($_smarty_tpl->tpl_vars['LISTA_FACTPROVEEDOR']->value))) {?>
	<tr><td style="text-align:center;" colspan="7">No hay factuas que cargar</td></tr>
 <?php }?>
-->

<script type="text/javascript">
$(document).ready(function(){    
    $('#tblData').dataTable({                        
		"sDom": "<'row-fluid'<'span6'l><'span6'f>r>t<'row-fluid'<'span12'i><'span12 center'p>>",
		"bSort":true,
		"aoColumnDefs": [
		                 { "bSortable": true, "aTargets": [ 0 ] },
		                 { "bSortable": true, "aTargets": [ 1 ] }		                 
		              ], 
		"sPaginationType": "bootstrap",
                    'iDisplayLength': 16,
                    "aLengthMenu": [[16, 24, 32, -1], [16, 24, 32, "Todos"]],
                    "aaSorting": [[ 0, "asc" ]],
                  
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
                        "sLoadingRecords": "Cargando...",
                        "oPaginate": {
                            "sFirst":      "Primero",
                            "sLast":       "Ultimo",
                            "sNext":       "Siguiente",
                            "sPrevious":   "Anterior"
                        }
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
		
		window.location.href ='Data.php?action='+action+"&id="+id;	
	}	
</script><?php }} ?>
