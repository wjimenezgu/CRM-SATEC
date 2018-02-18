<?php /* Smarty version Smarty-3.1.16, created on 2017-04-20 15:51:29
         compiled from "../notascrcxc/view/allNotas.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6881562175820ab55bc8676-89465135%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a5f8e1dfdc882c89c0ae399b18fa608cda4bdc3' => 
    array (
      0 => '../notascrcxc/view/allNotas.tpl',
      1 => 1492724147,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6881562175820ab55bc8676-89465135',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5820ab55c5f861_85375069',
  'variables' => 
  array (
    'NAV_MENU' => 0,
    'NOMBRE_TIENDA' => 0,
    'ID_TIENDA' => 0,
    'LISTA_NOTAS' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5820ab55c5f861_85375069')) {function content_5820ab55c5f861_85375069($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['NAV_MENU']->value;?>

	<div class="container-fluid">
		<div class="row-fluid sortable">
			<!-- Inicia Lista de Facturas --> 
			<div class="box span12">
				<div class="box-header well">
					<h2><i class="icon-th"></i>Lista de  Notas CxC</h2>
					<div class="vendedorvalido"  id="0"></div>
					<input type="text"  id="tienda" style="background-color: AliceBlue; margin-left:70px;" name="tienda"   value="<?php echo $_smarty_tpl->tpl_vars['NOMBRE_TIENDA']->value;?>
">
					<input type="hidden"  id="idtienda"  name="idtienda"   value="<?php echo $_smarty_tpl->tpl_vars['ID_TIENDA']->value;?>
"><input type="hidden" name="prev_value_imp" id="prev_value_imp" value="0">
					<input type="hidden" name="totalNota" id="totalNota" value="0">
					<input type="hidden" name="totalIVNota" id="totalIVNota" value="0">
					<input type="hidden" name="selArti" id="totalIVNota" value="0">
					<input type="hidden" id="detFactura" value="">
					<div class="box-icon">
						<a href="javascript:history.go(0)" title="Refrescar la lista de facturas." data-rel="tooltip" class="btn btn-settings btn-round"><i class="icon-refresh"></i></a>
					</div>	
				</div>
				<div class="box-content">
					<table class="table table-striped table-bordered bootstrap-datatable" id="tblFacturas">
						<thead>
							<tr>
								<th>Cliente</th>
								<th>Id</th>	
								<th># Nota</th>
								<th># Factura</th>
								<th>Fecha</th>
								<th>Razon</th>
								<th>Monto</th>
								<th>Impresa</th>
								<th>Estado</th>
								<th>Acción</th>
							</tr>
						</thead>
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['name'] = 'lP';
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['LISTA_NOTAS']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
							<tr style="padding:0px;" id="tr<?php echo $_smarty_tpl->tpl_vars['LISTA_NOTAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['idNota'];?>
">
                                <td style="width:385px; text-align:left"> 
                                	<a style="color:#004C66;" href="#" 
                                		id="<?php echo $_smarty_tpl->tpl_vars['LISTA_NOTAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['idNota'];?>
|<?php echo $_smarty_tpl->tpl_vars['LISTA_NOTAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['nombre'];?>
|<?php echo $_smarty_tpl->tpl_vars['LISTA_NOTAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['userVendedor'];?>
|<?php echo $_smarty_tpl->tpl_vars['LISTA_NOTAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['subTotal'];?>
|<?php echo $_smarty_tpl->tpl_vars['LISTA_NOTAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['descuento'];?>
|<?php echo $_smarty_tpl->tpl_vars['LISTA_NOTAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['impuesto'];?>
|<?php echo $_smarty_tpl->tpl_vars['LISTA_NOTAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['Total'];?>
|<?php echo $_smarty_tpl->tpl_vars['LISTA_NOTAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['razonNota'];?>
|<?php echo $_smarty_tpl->tpl_vars['LISTA_NOTAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['Estado'];?>
|<?php echo $_smarty_tpl->tpl_vars['LISTA_NOTAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['estadoImp'];?>
|<?php echo $_smarty_tpl->tpl_vars['LISTA_NOTAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['NumNota'];?>
|<?php echo $_smarty_tpl->tpl_vars['LISTA_NOTAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['numDocuFact'];?>
"
                                		onclick="getDet(this.id)"><?php echo $_smarty_tpl->tpl_vars['LISTA_NOTAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['nombre'];?>

                                	</a>
                                </td>
     							<td style="width:40px;  text-align:right"><?php echo $_smarty_tpl->tpl_vars['LISTA_NOTAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['idNota'];?>
</td>
     							<td style="width:70px;  text-align:right"><?php echo $_smarty_tpl->tpl_vars['LISTA_NOTAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['NumNota'];?>
</td>
     							<td style="width:70px;  text-align:right"><?php echo $_smarty_tpl->tpl_vars['LISTA_NOTAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['numDocuFact'];?>
</td>
     							<td style="width:150px;"><?php echo $_smarty_tpl->tpl_vars['LISTA_NOTAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['fecNota'];?>
</td>
     							<td style="width:285px; "><?php echo $_smarty_tpl->tpl_vars['LISTA_NOTAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['razonNota'];?>
</td>
                                <td style="width:185px; text-align:right"><?php echo $_smarty_tpl->tpl_vars['LISTA_NOTAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['Total'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['LISTA_NOTAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['estadoImp'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['LISTA_NOTAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['Estado'];?>
</td>
                                <td class="center">
							<!-- 		<a href="#" id="<?php echo $_smarty_tpl->tpl_vars['LISTA_NOTAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['idNota'];?>
|<?php echo $_smarty_tpl->tpl_vars['LISTA_NOTAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['userVendedor'];?>
|<?php echo $_smarty_tpl->tpl_vars['ID_TIENDA']->value;?>
|<?php echo $_smarty_tpl->tpl_vars['LISTA_NOTAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['numDocuFact'];?>
" <?php if ($_smarty_tpl->tpl_vars['LISTA_NOTAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['Estado']=='ANULADA'||$_smarty_tpl->tpl_vars['LISTA_NOTAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['estadoImp']=='S') {?>hidden='true'<?php }?> Title="Imprimir Nota" onclick="goPage(1, this.id)"><i class="icon icon-color icon-print"></i></a> -->
							 	<a href="#"  id="<?php echo $_smarty_tpl->tpl_vars['LISTA_NOTAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['idNota'];?>
" <?php if ($_smarty_tpl->tpl_vars['LISTA_NOTAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['Estado']=='ANULADA'||$_smarty_tpl->tpl_vars['LISTA_NOTAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['estadoImp']=='S') {?>hidden='true'<?php }?> Title="Imprimir Nota" onclick="impNota(this.id);"><i class="icon icon-color icon-print"></i></a>  		
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
					<h2><i class="icon-th"></i>Detalle Nota</h2>
				</div>
				<div class="box-content">
					<form class="form-horizontal">
					<input type="hidden" name="prev_value_imp" id="prev_value_imp" value="0">
					<input type="hidden" name="idFactura" id="idFactura" value="">
						<fieldset>
						    <div class="row-fluid">
						    	<table class="table table-bordered" id="tblCliente">
						    		<tr>
										<td> 
											<label style="float: left; width:70; padding-top: 5px; text-align: right;" for="idCliente">Cliente</label> 
											<div class="controls">											
								  				<input class="input-xlarge uneditable-input"  style="margin-left: -115px; width:350px" disabled id="idCliente" name="idCliente" type="text" value="Nombre Cliente…">
											</div>	
			
										</td>

									</tr>
								</table>
							</div>
							<div class="row-fluid" id="detFactura">
							<div class="span12">
								<table class="table table-bordered table-striped" id="tblDetFactura">
                            	<thead>
                                	<tr>
                                    	<th>#</th>
                                    	<th>Articulo</th>
                                        <th>Codigo</th>
                                        <th>Precio Venta</th>
                                        <th>Cant.</th>
                                        <th>%Desc</th>
                                        <th style="text-align:right">Precio Total</th>
                                    </tr>
                                </thead>
                                <tfoot>
    								<tr>
    									<td rowspan="2" colspan="5"></td>
      									<td>SubTotal</td>
      									<td style="text-align:right">
      										<input type="text" id="fsubtotal" name="fsubtotal" value="0.00" class='input' readonly style="text-align: right; width: 90px;" >
      									</td>
      									<td>
      								<!-- <input type="button" id="fDevolver" name="fDevolver" value="Devolver"  style="color: blue;  text-align: center; width: 110px;" class="btn btn-medium btn-warning">  -->
											<a class="btn btn-warning" href="#" id="btnDevolver" style="display:none;" name="btnDevolver" title="Devolver" data-rel="tooltip"  onclick="devolverArti()">Devolver</a>      										
      									</td>
    								</tr>
    								<tr>   									
      									<td>Descuento</td>
      									<td style="text-align:right">
      										<input type="text" id="fdescuento" name="fdescuento" value="0.00" class='input' readonly style="text-align: right; width: 90px;" >
      									</td>
      									<td></td>
    								</tr>
    								<tr> 
    									<td colspan="5">    									
								<!-- 			Factura Exenta de IV
											<input type="checkbox" onclick="cambiaImp();" id="fExento" name="fExento"   disabled value="">
								 -->
    									</td>  									
      									<td>Impuesto</td>
      									<td style="text-align:right">
      										<input type="text" id="fimpuesto" name="fimpuesto" value="0.00" class='input' readonly style="text-align: right; width: 90px;" >
      									</td>
      									<td></td>
    								</tr>
    								<tr>  
    									<td colspan="2">

								<label style="float: left; width:70; padding-top: 5px; text-align: right;" for="idVendedor">Vendedor</label>
								<div class="controls">
								  <input class="input-mini uneditable-input" style="margin-left: -95px; width:150px; " readonly id="idVendedor" name="idVendedor" type="text" value="Nombre Vendedor">
								</div>
								</td>
							
								<td colspan="3">
								<table border="0" class="table-condensed " id="tblFPago">
								<tr>
								<td colspan="2">
								<label style="float: left; width:70; padding-top: 5px; text-align: right;" for="obs">Razon:</label>
								<div class="controls">
								  <input class="input-mini " style="margin-left: -115px; width:130px; "  id="obs" name="obs" type="text" value="">
								</div>								
								</td>
								
								</tr>
								</table>
     									<td>Total</td>
      									<td style="text-align:right; ">
      										<input type="text" id="ftotal" disabled name="ftotal" value="0.00" class='input' readonly style="color: green; font-size: 14px; font-weight: bold; text-align: right; width: 100px;" >
      									</td>
      									<td>
      										
      									</td>        																		
    								</tr>
    								
  								</tfoot>
                                <tbody id="tblDetFacArti">
                                </tbody>
								</table>
							</div> <!-- span12 -->
							</div> <!-- row-fluid detFactura-->					
						</fieldset>					
					</form>				
				</div> <!-- box-content -->
			</div> <!-- box span6 -->
			<!-- Finaliza Detalle Factura para Cobrar -->
			<!-- ************************************************************ -->

 
<script type="text/javascript">
$(document).ready(function(){  

	$('#ftotal').number( true, 2 );
	$('#fimpuesto').number( true, 2 );
	$('#fdescuento').number( true, 2 );
	$('#fsubtotal').number( true, 2 );
	
	
    $('#tblFacturas').dataTable({                        
		"sDom": "<'row-fluid'<'span6'l><'span6'f>r>t<'row-fluid'<'span12'i><'span12 center'p>>",
		"sPaginationType": "bootstrap",
                    'iDisplayLength': 8,
                    "aLengthMenu": [[4, 8, -1], [4, 8, "Todos"]],
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

function impNota(idNota){
		$.ajax({
	        type: "POST",
	        url: "ActuNotaImp.php",
	        async: false,
	        dataType : "text",
	        data: "idNota="+idNota,
	       	success: function(data2,strMsg){	
	       		$dataStr = (data2.trim());
	    		if ($dataStr.trim()!='OK') {
	    			alert($dataStr.trim());
	    			document.getElementById('message-newNota').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Error Inesperado.</strong></div>"; 	
	    		}else{
    				window.location.href ='ImpreNota.php?idDoc='+idNota;					
				}		    		
	        },
	        error: function(jqXHR,textStatus,errorThrown){
	            alert('Error al Actualizar Nota Impresa '+errorThrown);
	        }
    	});

	
	 // window.location.href ='ImpreNota.php?idDoc='+idNota; 
}

function devolverArti(){
	if (confirm('Esta seguro que desea devolver los articulos?')) {
		
		
		
		// se procede		
		var TableData;
		TableData = leeTabla()
	
		TableData = $.toJSON(TableData);
		
		
		// ya hay arreglo con los datos a considerar para la devolución	
		var detFactura = $("#detFactura").val().split("|");	
		$("#newNota-modal").modal('show');		
		$("#razonNota").val('');
		$("#clave").val('');
		$("#numDocuFact").val(detFactura[10]); // numero de factura
		$("#razonNota").focus();
		return;
		if ($("#selArti").val() == "1"){
	    
	
			var properties = {
		            url: "processDevolucion.php",
		            async: true,
		            cache: false,
		            data: "pTableData=" + TableData+"&idFactura="+$("#idFactura").val()+"&totalNota="+$("#totalNota").val()+"&totalivnota="+$("#totalIVNota").val()+"&userVendedor="+$('#idVendedor').val()+"&idTienda="+$('#idtienda').val(),
		            type: "POST",
		            success: function(msg){                
		                alert(msg);
		                /*
		                $('.noty').noty({                    
		                    text:msg,
		                    layout:"center",
		                    type:"success",
		                    speed: 500,
		                    animateOpen: {opacity: "show"}                    
		                    
		                }); 
		                */
		            }
		        };            
		        $.ajax(properties);
		}else{
			alert('No hay acticulos seleccionados.');
			
		}
	        
	}
}

function leeTabla()
{
	

    var TableData = new Array();
    var i=0;
    var totalNota = 0.00;
    var timpventa = 0.00;
    var subtotal = 0.00;
    var totalIVNota = 0.00;
    $("#selArti").val("0");
    
    $('#tblDetFactura tr').each(function(row, tr){
    	var aRowSel = document.getElementById('selRow' + i);

    	if (aRowSel !== null){    		
    		if (aRowSel.checked == true){	
          	  estaSel = 'SI';
          	  $("#selArti").val("1");        	  
      	  	}else {
      		  estaSel = 'NO';      		
      	  	}	
    	}else{
        	estaSel = 'NO';
    	}
    	if (estaSel == 'SI') {  
    		
    		$ptotalStr = document.getElementById('ptotalRow' + i).innerHTML;
    //		alert($ptotalStr);
        	totalNota = totalNota + parseFloat($ptotalStr.replace(",", ""));
    		
    		
	        TableData[row]={
	              "NumLinea" 	: document.getElementById('numRow' + i).innerHTML
	            , "CodArti" 	: document.getElementById('codRow' + i).innerHTML
	            , "PrecioVenta" : document.getElementById('pventaRow' + i).innerHTML
	            , "Cantidad" 	: document.getElementById('cantRow' + i).innerHTML
	            , "PorceDesc" 	: document.getElementById('pdescRow' + i).innerHTML
	            , "PrecioTotal" : document.getElementById('ptotalRow' + i).innerHTML
	           
	        }
    	}
        i++;    
    });
    
    
    $("#totalNota").val(totalNota.toFixed(2));
    
    subtotal  = parseFloat($("#fsubtotal").val()).toFixed(2);
   
    timpventa = parseFloat($("#fimpuesto").val()).toFixed(2);
 
    totalIVNota = (totalNota / subtotal) * timpventa;
       	
  //  $totalIVNota = $totalNota / parseFloat($("#fsubtotal").val()) * parseFloat($("#fimpuesto").val())
 //  alert(parseFloat(totalIVNota).toFixed(2));  
  $("#totalIVNota").val(parseFloat(totalIVNota).toFixed(2));
  //  alert($("#totalIVNota").val());
    TableData.shift();  // first row will be empty - so remove
    return TableData;
}

function getDet(idNota){
	$("#detFactura").val(idNota);
	detFactura = idNota.split("|");
	//numero factura
	$('#idFactura').val(detFactura[0]);
	

	//nombre del cliente
	$('#idCliente').val(detFactura[1]);
	//vendedor
	$('#idVendedor').val(detFactura[2]);
	//subTotal
	$('#fsubtotal').val(detFactura[3]);
	//descuento
	$('#fdescuento').val(detFactura[4]);
	//impuesto
	$('#fimpuesto').val(detFactura[5]);
	//total de la factura
	$('#ftotal').val(detFactura[6]);
	
	$('#obs').val(detFactura[7]);
	//ahora se cargan la lista de articulos
	$("#tblDetFacArti").load("buscarDetNotaArti.php", { idFacturaB : detFactura[0] }, function(response,status,xhr){
    });
		
	
}


function validaDatosNota(){
	
 	$("#message-newNota").html("");
 	if($.trim($("#razonNota").val()) == ""){
        $("#boxrazonNota").addClass("error");
        $("#message-newNota").html("<div class='alert alert-error pull-left'><strong><span class='icon icon-red icon-alert'/></span> <strong>Razon es Requerida</strong></div>");
        return true;
    }else{
        $("#boxrazonNota").removeClass("error");                
    }
 	var strClVendedor = "";
 	strClVendedor = $.trim($("#clave").val());
 	if(strClVendedor == ""){
        $("#boxClave").addClass("error");
        $("#message-newNota").html("<div class='alert alert-error pull-left'><strong><span class='icon icon-red icon-alert'/></span> <strong>Clave es Requerida</strong></div>");
        return true;
    }else{
        $("#boxClave").removeClass("error");                
    }
 	return false;	
}

$("#add-new-nota").click(function(e){
 	e.preventDefault();
 	var errors      = false;
 	
 	errors = validaDatosNota();
 	// se valida ahora la clave del ven
 	if(!errors){ 
 		
 		$.ajax({
	        type: "POST",
	        url: "ValidaClaveVendedor.php",
	        async: false,
	        dataType : "text",
	        data: "fClaveVendedor="+strClVendedor,
	       	success: function(data2,strMsg){
	    		$dataStr = (data2.trim().split("|"));
	    		if ($dataStr[0].trim()=='OK') {
	    			if ($dataStr[1] == "1"){
	    				$(".vendedorvalido").attr("id", "1");	
	    				$("#usrVendedor").val($dataStr[2]);
	    				
	    			}else{
	    				$(".vendedorvalido").attr("id", "0");
	    				$("#boxClave").addClass("error");
	    				document.getElementById('message-newNota').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Clave Vendedor incorrecta.</strong></div>";
	    				$("#clave").val('');
	    		        $("#clave").focus();
	    		        errors = true;
	    			}		    			
	    		}else{
    				alert($dataStr[0]);
					document.getElementById('message-newNota').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Error Inesperado.</strong></div>";
				}		    		
	        },
	        error: function(jqXHR,textStatus,errorThrown){
	            alert('Error al validar Vendedor '+errorThrown);
	        }
    	});
    	if ($(".vendedorvalido").attr("id") == "1" ){
		
    		var detFactura = $("#detFactura").val().split("|");	
    		
    		// todo esta ok para hacer la anulacio de la factura.
    		var properties = {
        			url  : "anulaFacturaCxC.php",
            		async: false,
            		cache: false,
            		datatype:"text",
            		data : "idFactura="+detFactura[0]+"&vendedor="+detFactura[1]+"&idTienda="+detFactura[2]+"&razon="+$("#razonNota").val(),
            		type : "GET",
            		success: function(data){
            			if (data.trim()!='OK') {
            				alert(data);
            			}else{
            				
            				//todo OK se manda a imprimir la factura de la reparacion.
            				// version anterior para imprimr factura, esta opcion abre una pantalla con los datos de la factura
            				//window.open('imprimir.php?factura='+$('#idFactura').val(),'_blank');
            				// nueva version de imprimir esta no abre pantalla alguna, imprime la factura
            				// directamente en la impresora default.
            			//	window.location.href ='ImpreFacRepa.php?idDoc='+id+'&action='+action; // factura
            				window.location.href = 'index.php';                				
            				//$dummy="";
            				//window.location.href ='index.php';        
            			}
            		}, // success,
  					error: function(jqXHR,textStatus,errorThrown){
  						 	var err = eval("(" + jqXHR.responseText + ")");
  						  	alert('Error al Imprimir Factura Reparacion'+err.Message);
      						//alert('Error al imprimir '+errorThrown);
  							}
        		}; // var properties            
  				$.ajax(properties);
    		
    	  // document.forms["myForm"].submit();
    	
          
    	}else{ // errors != true)
    	  $("#boxClave").addClass("error");
          document.getElementById('message-newNota').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Clave Vendedor incorrecta.</strong></div>";
          $("#clave").val('');
          $("#clave").focus();
    	};    		    		
		
 	}
});

function goPage(action, id){
	
	if (action == 1){
	// anular y el id trae varios datos.		
		$("#detFactura").val(id);
		$("#newNota-modal").modal('show');		
		$("#razonNota").val('');
		$("#clave").val('');
		$("#numDocuFact").val(detFactura[3]); // numero de factura
		$("#razonNota").focus();									
	
	}else{
		if (action == 7){
			// RE-imprimir la factura
			window.open('../cobrar/imprimir.php?factura='+id+'&tiraReimpre=**** Re-impresión ****','_blank');
		}
	}
}


</script>

<?php }} ?>
