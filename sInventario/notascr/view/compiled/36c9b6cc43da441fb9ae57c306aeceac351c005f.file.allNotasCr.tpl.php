<?php /* Smarty version Smarty-3.1.16, created on 2016-11-13 21:25:26
         compiled from "../notascr/view/allNotasCr.tpl" */ ?>
<?php /*%%SmartyHeaderCode:65563901856476a4504afa8-95788302%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '36c9b6cc43da441fb9ae57c306aeceac351c005f' => 
    array (
      0 => '../notascr/view/allNotasCr.tpl',
      1 => 1479097513,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '65563901856476a4504afa8-95788302',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_56476a450f3418_42628235',
  'variables' => 
  array (
    'NAV_MENU' => 0,
    'NOMBRE_TIENDA' => 0,
    'ID_TIENDA' => 0,
    'ADDNOTA_OFF' => 0,
    'LISTA_NOTASCR' => 0,
    'DEVDINERO_OFF' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56476a450f3418_42628235')) {function content_56476a450f3418_42628235($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['NAV_MENU']->value;?>
 
	<div class="container-fluid">
		<div class="row-fluid sortable">
			<!-- Inicia Lista de Facturas -->
			<div class="box span12">
				<div class="box-header well">
					<h2><i class="icon-th"></i>Lista de  Notas de Crédito</h2>
					<input type="text"  id="tienda" style="background-color: AliceBlue; margin-left:70px;" name="tienda"   value="<?php echo $_smarty_tpl->tpl_vars['NOMBRE_TIENDA']->value;?>
">
					<input type="hidden" id="idtienda" name="idtienda" value="<?php echo $_smarty_tpl->tpl_vars['ID_TIENDA']->value;?>
">
					<div class="box-icon">
						<a href="javascript:history.go(0)" title="Refrescar la lista de facturas." data-rel="tooltip" class="btn btn-settings btn-round"><i class="icon-refresh"></i></a>
					</div>	
				</div>
				<div class="box-content">
				    <button type="button" class="btn btn-small btn-success" id="addNewNota"  onclick="goPage(7,0)" style='margin-bottom:12px; <?php if ($_smarty_tpl->tpl_vars['ADDNOTA_OFF']->value=="S") {?> display:none;<?php }?>'><i class="icon-plus icon-white"></i> Agregar</button>
					<table class="table table-striped table-bordered bootstrap-datatable" id="tblNotas">
						<thead>
							<tr>				
						<!-- 	<th>Id</th>		 -->			
								<th>Número</th>
								<th>Cliente</th>	
								<th>Factura</th>
								<th>Fecha Nota</th>
								<th>Razon Nota</th>
								<th>Total</th>
								<th>Saldo</th>
								<th>Estado</th>
								<th>Acción</th>
							</tr>
						</thead>
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['name'] = 'lP';
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['LISTA_NOTASCR']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
							<tr style="padding:0px;" id="tr<?php echo $_smarty_tpl->tpl_vars['LISTA_NOTASCR']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['idNota'];?>
">
					<!-- 		<td>
								  <?php echo $_smarty_tpl->tpl_vars['LISTA_NOTASCR']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['idNota'];?>

								</td>
					 -->								
								<td style="width:40px;  text-align:right">
								    <a style="color:#004C66;" href="#" 
                                		id="<?php echo $_smarty_tpl->tpl_vars['LISTA_NOTASCR']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['idNota'];?>
|<?php echo $_smarty_tpl->tpl_vars['LISTA_NOTASCR']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['totalApli'];?>
|<?php echo $_smarty_tpl->tpl_vars['LISTA_NOTASCR']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['saldoNota'];?>
"
                                		onclick="getApliNota(this.id)"><?php echo $_smarty_tpl->tpl_vars['LISTA_NOTASCR']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['numDocu'];?>

                                	</a>
								</td>
                                <td style="width:300px; text-align:left"> 
                                	<a style="color:#004C66;" href="#" 
                                		id="<?php echo $_smarty_tpl->tpl_vars['LISTA_NOTASCR']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['idNota'];?>
|<?php echo $_smarty_tpl->tpl_vars['LISTA_NOTASCR']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['totalApli'];?>
|<?php echo $_smarty_tpl->tpl_vars['LISTA_NOTASCR']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['saldoNota'];?>
"
                                		onclick="getApliNota(this.id)"><?php echo $_smarty_tpl->tpl_vars['LISTA_NOTASCR']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['nombre'];?>

                                	</a>
                                </td>
     							<td style="width:70px;  text-align:right"><?php echo $_smarty_tpl->tpl_vars['LISTA_NOTASCR']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['numDocuFact'];?>
</td>
     							<td style="width:250px;"><?php echo $_smarty_tpl->tpl_vars['LISTA_NOTASCR']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['fecNota'];?>
</td>
     							<td style="width:350px;"><?php echo $_smarty_tpl->tpl_vars['LISTA_NOTASCR']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['razonNota'];?>
</td>
                                <td style="width:200px; text-align:right"><?php echo $_smarty_tpl->tpl_vars['LISTA_NOTASCR']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['total'];?>
</td>
                                <td style="width:200px; text-align:right"><?php echo $_smarty_tpl->tpl_vars['LISTA_NOTASCR']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['saldoNota'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['LISTA_NOTASCR']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['estado'];?>
</td>
								<td class="center">
										<a href="#" id="<?php echo $_smarty_tpl->tpl_vars['LISTA_NOTASCR']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['idNota'];?>
|<?php echo $_smarty_tpl->tpl_vars['LISTA_NOTASCR']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['totalApli'];?>
|<?php echo $_smarty_tpl->tpl_vars['LISTA_NOTASCR']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['saldoNota'];?>
"  onclick="goPage(6, this.id)" Title="Imprimir Nota"><i class="icon32 icon-color icon-print"></i></a>										
										<a href="#" id="<?php echo $_smarty_tpl->tpl_vars['LISTA_NOTASCR']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['idNota'];?>
|<?php echo $_smarty_tpl->tpl_vars['LISTA_NOTASCR']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['totalApli'];?>
|<?php echo $_smarty_tpl->tpl_vars['LISTA_NOTASCR']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['saldoNota'];?>
"  <?php if ($_smarty_tpl->tpl_vars['LISTA_NOTASCR']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['saldoNota']=="0.00"||$_smarty_tpl->tpl_vars['DEVDINERO_OFF']->value=="S") {?> hidden="true"<?php }?> onclick="goPage(9, this.id)" Title="Devoluci&oacute;n de Dinero"><i class="icon32 icon-black icon-arrowreturn-en"></i></a>										
								</td>                                
							</tr> 
						<?php endfor; endif; ?>
					</table>
				</div> <!-- box-content -->
			</div><!--/box span6-->
			<!-- ************************************************************ -->
			<!-- Finaliza Lista de Facturas -->
			<!-- ************************************************************ -->
			<!-- Inicia Detalle Factura para Cobrar -->
			<!-- ************************************************************ -->
			<div class="box span12">
				<div class="box-header well">
					<h2><i class="icon-th"></i>Detalle Aplicaciones</h2>
				</div>
				<div class="box-content">
					<form class="form-horizontal">
					<input type="hidden" name="prev_value_imp" id="prev_value_imp" value="0">
					<input type="hidden" name="idFactura" id="idFactura" value="">
						<fieldset>
							<div class="row-fluid" id="detFactura">
							<div class="span12">
								<table class="table table-bordered table-striped" id="tblDetFactura">
                            	<thead>
                                	<tr>
                                    	<th>#</th>
                                    	<th>#Doc. Aplica</th>
                                        <th>Fecha Aplica</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tfoot>
    								<tr>
    									<td  colspan="2"></td>
      									<td>Gran Total</td>
      									<td style="text-align:right; ">
      										<input type="text" id="ftotal" disabled name="fftotal" value="0.00" class='input' readonly style="color: green; font-size: 14px; font-weight: bold; text-align: right; width: 100px;" >
      									</td>      									
    								</tr>   								                                
    								<tr>
    									<td  colspan="2"></td>
      									<td>Saldo</td>
      									<td style="text-align:right; ">
      										<input type="text" id="fsaldo" disabled name="fsaldo" value="0.00" class='input' readonly style="color: green; font-size: 14px; font-weight: bold; text-align: right; width: 100px;" >
      									</td>      									
    								</tr>   								
  								</tfoot>
                                <tbody id="tblApliNota">
                                </tbody>
								</table>
							</div> <!-- span12 -->
							</div> <!-- row-fluid detFactura-->					
						</fieldset>					
					</form>				
				</div> <!-- box-content -->
			</div> <!-- box span6 -->
			<!-- Finaliza Detalle Factura para Cobrar -->			
		</div><!--/row-fluid sortable -->
	</div> <!-- container-fluid -->


<script type="text/javascript">
$(document).ready(function(){  
	
	$('#ftotal').number( true, 2 );
	$('#fsaldo').number( true, 2 );
		
    $('#tblNotas').dataTable({                        
		"sDom": "<'row-fluid'<'span6'l><'span6'f>r>t<'row-fluid'<'span12'i><'span12 center'p>>",
		"sPaginationType": "bootstrap",
                    'iDisplayLength': 4,
                    "aLengthMenu": [[4, 8, -1], [4, 8, "Todos"]],
                    "aaSorting": [[ 3, "desc" ]],
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



function numberWithCommas(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}



function impFactu(){
	  var myselect = document.getElementById("selectTipoPago");
	  var vValor   = myselect.options[myselect.selectedIndex].value;
	  if (vValor=="T"){
		  //revisa que puso el numero de autorizacion.
		  if ($("#idAut").val()==""){
			  document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Con tarjeta autorizacion es obligatorio.</strong></div>";
	        	$("#idAut").focus();
		  }else{
			  document.getElementById('message-fields').innerHTML = "";
			  
		  };	
	  };
}


function getApliNota(idNota){
	
	detNota = idNota.split("|");
	
	$('#ftotal').val(detNota[1]);
	$('#fsaldo').val(detNota[2]);
	
	
		//ahora se cargan la lista de las apliaciones de la nota, las que tenga a esa fecha.
	$("#tblApliNota").load("buscarApliNota.php", { idNotaB : detNota[0] }, function(response,status,xhr){
    });
}
		
function goPage(action, idNota){
	

	
	if(action == 6){
		detNota = idNota.split("|");
		window.open('prnListData.php?action='+action+"&id="+detNota[0]+"&totalApli="+detNota[1]+"&saldoNota="+detNota[2],'_blank');
	}else{
		if( action == 7){
			// es una insercion manual.
			// es una inserción, no hay número de nota todavía. idNota tiene un 0
			window.location.href ='NotaCr.php?action='+action+"&id="+idNota+"&idTienda="+$('#idtienda').val();
		}else{
			detNota = idNota.split("|");
			window.location.href ='NotaCr.php?action='+action+"&id="+detNota[0]+"&saldoNota="+detNota[2];
		}
	}
}


</script>

<?php }} ?>
