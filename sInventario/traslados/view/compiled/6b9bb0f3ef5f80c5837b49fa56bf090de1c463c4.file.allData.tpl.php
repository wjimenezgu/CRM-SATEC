<?php /* Smarty version Smarty-3.1.16, created on 2016-06-15 16:26:26
         compiled from "../traslados/view/allData.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1404086329557651a98b1946-71429333%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b9bb0f3ef5f80c5837b49fa56bf090de1c463c4' => 
    array (
      0 => '../traslados/view/allData.tpl',
      1 => 1466029264,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1404086329557651a98b1946-71429333',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_557651a992c441_37921401',
  'variables' => 
  array (
    'NAV_MENU' => 0,
    'DESC_MOV' => 0,
    'NOMBRE_TIENDA' => 0,
    'TIPO_MOV' => 0,
    'LISTA_DATA' => 0,
    'APAGA_EDITAR' => 0,
    'APAGA_BORRAR' => 0,
    'APAGA_APRORECHA' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557651a992c441_37921401')) {function content_557651a992c441_37921401($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['NAV_MENU']->value;?>

			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><?php echo $_smarty_tpl->tpl_vars['DESC_MOV']->value;?>
 Artículos </h2>
						<input type="text" class="pull-right" id="tienda" style="background-color: AliceBlue;" name="tienda"   value="<?php echo $_smarty_tpl->tpl_vars['NOMBRE_TIENDA']->value;?>
">
					</div>
					<div class="box-content">
						<input type="hidden" name="EoS"       id="EoS"       value="<?php echo $_smarty_tpl->tpl_vars['TIPO_MOV']->value;?>
">
						<button type="button" class="btn btn-small btn-success" id="addNewData" onclick="goPage(1,0,'<?php echo $_smarty_tpl->tpl_vars['TIPO_MOV']->value;?>
')" style="margin-bottom:12px;"><i class="icon-plus icon-white"></i> Agregar</button>
						<table class="table table-striped table-bordered bootstrap-datatable" id="tblDataE">
						  <thead>
							  <tr>
								  <th>Fecha</th>
								  <th>Id</th>
								  <th>Tienda</th>
								  <th>Detalle</th>
								  <th>Estado</th>
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
						<tr style="padding:0px;" id="tr<?php echo $_smarty_tpl->tpl_vars['LISTA_DATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['IdTraslado'];?>
">
						    <td style="width:10px;"><?php echo $_smarty_tpl->tpl_vars['LISTA_DATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['fecMovimiento'];?>
</td>
     						<td style="width:10px;"><?php echo $_smarty_tpl->tpl_vars['LISTA_DATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['IdTraslado'];?>
</td>
     						<td style="width:200px;"><?php echo $_smarty_tpl->tpl_vars['LISTA_DATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['NombreTienda'];?>
</td>
                            <td style="width:350px;" align="left"><?php echo $_smarty_tpl->tpl_vars['LISTA_DATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['Detalle'];?>
</td>
                            <td style="width:150px;" align="left"><?php echo $_smarty_tpl->tpl_vars['LISTA_DATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['DescEstado'];?>
</td>
							<td style="width:100px;"class="center">
<!-- 									Boton para Editar 							
										<a href="#" id="<?php echo $_smarty_tpl->tpl_vars['LISTA_DATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['IdTraslado'];?>
" <?php if ($_smarty_tpl->tpl_vars['LISTA_DATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['EstadoApagar']=="5O") {?> hidden="true"<?php }?> Title="Modificar Solicitud" onclick="goPage(2, this.id,'<?php echo $_smarty_tpl->tpl_vars['TIPO_MOV']->value;?>
')">
-->										
										<a href="#" id="<?php echo $_smarty_tpl->tpl_vars['LISTA_DATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['IdTraslado'];?>
" <?php if (array_key_exists($_smarty_tpl->tpl_vars['LISTA_DATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['EstadoApagar'],$_smarty_tpl->tpl_vars['APAGA_EDITAR']->value)) {?> hidden="true"<?php }?> Title="Modificar Solicitud" onclick="goPage(2, this.id,'<?php echo $_smarty_tpl->tpl_vars['TIPO_MOV']->value;?>
')">																				  
										<i class="icon icon-color icon-edit"></i></a>
										
										<a href="#" id="<?php echo $_smarty_tpl->tpl_vars['LISTA_DATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['IdTraslado'];?>
" <?php if (array_key_exists($_smarty_tpl->tpl_vars['LISTA_DATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['EstadoApagar'],$_smarty_tpl->tpl_vars['APAGA_BORRAR']->value)) {?> hidden="true"<?php }?> Title="Borrar Solicitud" onclick="goPage(3, this.id,'<?php echo $_smarty_tpl->tpl_vars['TIPO_MOV']->value;?>
')"><i class="icon icon-color icon-remove"></i></a>
										<a href="#" id="<?php echo $_smarty_tpl->tpl_vars['LISTA_DATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['IdTraslado'];?>
" Title="Ver Solicitud" onclick="goPage(4, this.id,'<?php echo $_smarty_tpl->tpl_vars['TIPO_MOV']->value;?>
')"><i class="icon icon-color icon-search"></i></a>
										<a href="#" id="<?php echo $_smarty_tpl->tpl_vars['LISTA_DATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['IdTraslado'];?>
" <?php if (array_key_exists($_smarty_tpl->tpl_vars['LISTA_DATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['EstadoApagar'],$_smarty_tpl->tpl_vars['APAGA_APRORECHA']->value)) {?> hidden="true"<?php }?> Title="Aprobar Solicitud" onclick="goPage(5, this.id,'<?php echo $_smarty_tpl->tpl_vars['TIPO_MOV']->value;?>
')"><i class="icon icon-color icon-check"></i></a>
										<a href="#" id="<?php echo $_smarty_tpl->tpl_vars['LISTA_DATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['IdTraslado'];?>
" <?php if (array_key_exists($_smarty_tpl->tpl_vars['LISTA_DATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['EstadoApagar'],$_smarty_tpl->tpl_vars['APAGA_APRORECHA']->value)) {?> hidden="true"<?php }?> Title="Rechazar Solicitud" onclick="goPage(6, this.id,'<?php echo $_smarty_tpl->tpl_vars['TIPO_MOV']->value;?>
')"><i class="icon icon-color icon-close"></i></a>
										<a href="#" target="_blank" id="<?php echo $_smarty_tpl->tpl_vars['LISTA_DATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['IdTraslado'];?>
" Title="Imprimir Solicitud" onclick="goPage(7, this.id,'<?php echo $_smarty_tpl->tpl_vars['TIPO_MOV']->value;?>
')"><i class="icon icon-color icon-print"></i></a>
										<a href="#" target="_blank" id="<?php echo $_smarty_tpl->tpl_vars['LISTA_DATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['IdTraslado'];?>
" Title="Imprimir para Recepción" onclick="goPage(8, this.id,'<?php echo $_smarty_tpl->tpl_vars['TIPO_MOV']->value;?>
')"><i class="icon icon-reverse icon-print"></i></a>
										<a href="#" target="_blank" id="<?php echo $_smarty_tpl->tpl_vars['LISTA_DATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['IdTraslado'];?>
" Title="Imprimir para Alistar" onclick="goPage(9, this.id,'<?php echo $_smarty_tpl->tpl_vars['TIPO_MOV']->value;?>
')"><i class="icon icon-suitcase"></i></a>
							</td>
						</tr>
								<?php endfor; endif; ?>
					  </table>  
					            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->

<script type="text/javascript">
$(document).ready(function(){
	if ($("#EoS").val() == "E"){
		$("#addNewData").css("display","none");			
	}
	


    $('#tblDataE').dataTable({                        
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
	function goPage(action, id,EoS){
	    if (action == 7){
		    //como es imprimir, se abre una nueva ventana para desplegar los datos en formato
		    // mas simple y el usuario luego pueda decidir que hacer.
	    	window.open('prnListData.php?action='+action+"&id="+id+"&EoS="+EoS,'_blank');
	    }else{
	    	if (action == 8){
	    		window.open('prnListRecep.php?action='+action+"&id="+id+"&EoS="+EoS,'_blank');
	    	}else if (action == 9) {
	    		window.open('prnListAlistar.php?action='+action+"&id="+id+"&EoS="+EoS,'_blank');
	        }else{
				if(EoS=="O"){		
					window.location.href ='procesaTraslados.php?action='+action+"&id="+id+"&EoS="+EoS;
				}else{
					window.location.href ='procesaTraslados.php?action='+action+"&id="+id+"&EoS="+EoS;
				}
	    	}
	    }
	};	
</script><?php }} ?>
