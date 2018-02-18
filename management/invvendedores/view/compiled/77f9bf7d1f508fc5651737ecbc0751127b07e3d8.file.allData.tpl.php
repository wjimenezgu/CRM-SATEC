<?php /* Smarty version Smarty-3.1.16, created on 2016-09-09 09:35:16
         compiled from "../invparam/view/allData.tpl" */ ?>
<?php /*%%SmartyHeaderCode:126328147257a4bf614e5957-52582366%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77f9bf7d1f508fc5651737ecbc0751127b07e3d8' => 
    array (
      0 => '../invparam/view/allData.tpl',
      1 => 1471877238,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '126328147257a4bf614e5957-52582366',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_57a4bf6159d991_99926703',
  'variables' => 
  array (
    'NAV_MENU' => 0,
    'LISTA_DATA' => 0,
    'LISTA_FACTPROVEEDOR' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a4bf6159d991_99926703')) {function content_57a4bf6159d991_99926703($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['NAV_MENU']->value;?>

	<div class="row-fluid sortable">		
		<div class="box span12">
			<div class="box-header well" data-original-title>
				<h2>Administración de Par&aacute;metros</h2>
			</div>
			<div class="box-content">
				<button type="button" class="btn btn-small btn-success" id="addNewData" title="Agregar Nueva Asignatura" data-rel="tooltip" onclick="goPage(1,0)" style="margin-bottom:12px;"><i class="icon-plus icon-white"></i> Agregar</button>
		<!-- 	<a class="btn btn-small btn-info" href="prnListData.php" target="__blank" title="Imprimir Datos" data-rel="tooltip" style="margin-bottom:12px;"><i class="icon-print icon-white"></i> Imprimir</a>  -->
				<table class="table table-striped table-bordered bootstrap-datatable" id="tblData">
					<thead>
						<tr>
							<th>Nombre</th>
							<th>Valor</th>
							<th>Descripción</th>
							<th>Acción</th>
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
						<tr style="padding:0px;" id="tr<?php echo $_smarty_tpl->tpl_vars['LISTA_DATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['nombre'];?>
">
                            <td style="width:10%;font-family:monospace;" align="left"><?php echo $_smarty_tpl->tpl_vars['LISTA_DATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['nombre'];?>
</td>
                            <td style="width:10%;font-family:monospace;" align="left"><?php echo $_smarty_tpl->tpl_vars['LISTA_DATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['valor'];?>
</td>
                            <td style="width:50%;font-family:monospace;" align="left"><?php echo $_smarty_tpl->tpl_vars['LISTA_DATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['descripcion'];?>
</td>
							<td style="width:30%;font-family:monospace;" class="center">
								<a class="btn btn-primary" href="#" id="<?php echo $_smarty_tpl->tpl_vars['LISTA_DATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['nombre'];?>
" title="Modificar Datos de Par&aacute;" data-rel="tooltip" onclick="goPage(2, this.id)"><i class="icon-edit icon-white"></i>  Modificar</a>
						<!-- 	<a class="btn btn-danger" href="#" id="<?php echo $_smarty_tpl->tpl_vars['LISTA_DATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['nombre'];?>
" title="Eliminar Par&aacute;" data-rel="tooltip" onclick="goPage(3, this.id)"><i class="icon-trash icon-white"></i> Eliminar</a>  -->		
								<a class="btn btn-warning" href="#" id="<?php echo $_smarty_tpl->tpl_vars['LISTA_DATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['nombre'];?>
" title="Ver Par&aacute;" data-rel="tooltip" onclick="goPage(4, this.id)"><i class="icon-zoom-in icon-white"></i> Visualizar</a>
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

});

	// Octubre 15, 2014 William Jimenez
	// Function goPage
	// Descripcion: permite enviar al usuario a la pantalla para agregar o modificar registro
	// Parametros:
	//			action: 1> Insertar, 2>Modificar, 3>Borrar
	//			id: El id del registro que se desea modificar o borrar, en el caso de insertar este parametro no se utiliza.
	function goPage(action, id){
		
		window.location.href ='Data.php?action='+action+"&nombre="+id;	
	}	
</script><?php }} ?>
