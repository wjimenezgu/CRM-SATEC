<?php /* Smarty version Smarty-3.1.16, created on 2015-09-02 16:19:36
         compiled from "../proformas/view/allProformas.tpl" */ ?>
<?php /*%%SmartyHeaderCode:197566364455d62558273f01-56000422%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ad305a690e1b9ffbb062a16552c987ba4aa7f5e' => 
    array (
      0 => '../proformas/view/allProformas.tpl',
      1 => 1441228184,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '197566364455d62558273f01-56000422',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_55d625582e7e12_05189462',
  'variables' => 
  array (
    'NAV_MENU' => 0,
    'NOMBRE_TIENDA' => 0,
    'LISTA_PROFORMAS' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d625582e7e12_05189462')) {function content_55d625582e7e12_05189462($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['NAV_MENU']->value;?>

	<div class="container-fluid">
		<div class="row-fluid sortable">
			<!-- Inicia Lista de Facturas -->
			<div class="box span6">
				<div class="box-header well">
					<h2><i class="icon-th"></i>Lista de  Proformas</h2>
										<input type="text"  id="tienda" style="background-color: AliceBlue; margin-left:50px;" name="tienda"   value="<?php echo $_smarty_tpl->tpl_vars['NOMBRE_TIENDA']->value;?>
">
					<div class="box-icon">
						<a href="javascript:history.go(0)" title="Refrescar la lista de proformas" data-rel="tooltip" class="btn btn-settings btn-round"><i class="icon-refresh"></i></a>
					</div>	
				</div>
				<div class="box-content">
					<table class="table table-striped table-bordered bootstrap-datatable" id="tblFacturas">
						<thead>
							<tr>
								<th>Cliente</th>
								<th>Id</th>							
								<th>Monto</th>
							</tr>
						</thead>
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['name'] = 'lP';
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['LISTA_PROFORMAS']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
							<tr style="padding:0px;" id="tr<?php echo $_smarty_tpl->tpl_vars['LISTA_PROFORMAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['idProforma'];?>
">
                                <td style="width:385px; text-align:left"> 
                                	<a style="color:#004C66;" href="#" 
                                		id="<?php echo $_smarty_tpl->tpl_vars['LISTA_PROFORMAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['idProforma'];?>
|<?php echo $_smarty_tpl->tpl_vars['LISTA_PROFORMAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['nombre'];?>
|<?php echo $_smarty_tpl->tpl_vars['LISTA_PROFORMAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['userVendedor'];?>
|<?php echo $_smarty_tpl->tpl_vars['LISTA_PROFORMAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['subTotal'];?>
|<?php echo $_smarty_tpl->tpl_vars['LISTA_PROFORMAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['descuento'];?>
|<?php echo $_smarty_tpl->tpl_vars['LISTA_PROFORMAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['impuesto'];?>
|<?php echo $_smarty_tpl->tpl_vars['LISTA_PROFORMAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['TotalN'];?>
"
                                		onclick="getDetProforma(this.id)"><?php echo $_smarty_tpl->tpl_vars['LISTA_PROFORMAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['nombre'];?>

                                	</a>
                                </td>
     							<td style="width:40px;  text-align:right"><?php echo $_smarty_tpl->tpl_vars['LISTA_PROFORMAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['idProforma'];?>
</td>  
                                <td style="width:385px; text-align:right"><?php echo $_smarty_tpl->tpl_vars['LISTA_PROFORMAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['Total'];?>
</td>
							</tr> 
						<?php endfor; endif; ?>
					</table>
				</div> <!-- box-content -->
			</div><!--/box span6-->
			<!-- ************************************************************ -->
			<!-- Finaliza Lista de Proformas -->
			<!-- ************************************************************ -->
			<!-- Inicia Detalle Proforma para Imprimir -->
			<!-- ************************************************************ -->
			<div class="box span6">
				<div class="box-header well">
					<h2><i class="icon-th"></i>Detalle Proforma</h2>
				</div>
				<div class="box-content">
					<form class="form-horizontal">
					<input type="hidden" name="prev_value_imp" id="prev_value_imp" value="0">
					<input type="hidden" name="idProforma" id="idProforma" value="">
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
                                        <th>Cant.</th>
                                        <th>%Desc</th>
                                        <th style="text-align:right">Precio Total</th>
                                    </tr>
                                </thead>
                                <tfoot>
    								<tr>
    									<td rowspan="2" colspan="4"></td>
      									<td>SubTotal</td>
      									<td style="text-align:right">
      										<input type="text" id="fsubtotal" name="fsubtotal" value="0.00" class='input' readonly style="text-align: right; width: 90px;" >
      									</td>
    								</tr>
    								<tr>   									
      									<td>Descuento</td>
      									<td style="text-align:right">
      										<input type="text" id="fdescuento" name="fdescuento" value="0.00" class='input' readonly style="text-align: right; width: 90px;" >
      									</td>
    								</tr>
    								<tr> 
    									<td colspan="4">  
    									<!--   									
											Factura Exenta de IV
											<input type="checkbox" onclick="cambiaImp();" id="fExento" name="fExento"   disabled value="">
										 -->
    									</td>  									
      									<td>Impuesto</td>
      									<td style="text-align:right">
      										<input type="text" id="fimpuesto" name="fimpuesto" value="0.00" class='input' readonly style="text-align: right; width: 90px;" >
      									</td>
    								</tr>
    								<tr> 
    									<td colspan="4">

								<label style="float: left; width:70; padding-top: 5px; text-align: right;" for="idVendedor">Vendedor</label>
								<div class="controls">
								  <input class="input-mini uneditable-input" style="margin-left: -95px; width:150px; " readonly id="idVendedor" name="idVendedor" type="text" value="Nombre Vendedor">
								</div>
						
    									</td>  									
      									<td>Total</td>
      									<td style="text-align:right; ">
      										<input type="text" id="ftotal" disabled name="ftotal" value="0.00" class='input' readonly style="color: green; font-size: 14px; font-weight: bold; text-align: right; width: 100px;" >
      									</td>      									
    								</tr>
    								
  								</tfoot>
                                <tbody id="tblDetFacArti">
                                </tbody>
								</table>
							</div> <!-- span12 -->
							</div> <!-- row-fluid detFactura-->
					<!-- 
							<div class="row-fluid" id="detPago">
								<div class="span12">
									<table class="table" id="tblPago">
										<tbody id="tbod">
                                			<tr>
                                				<td colspan="3">
													<label style="float: left; width:70; padding-top: 5px; text-align: right;" for="selectTipoPago">T. Pago</label>
													<div class="controls">
								  						<select onChange="revSeleccion()" disabled id="selectTipoPago" style="margin-left: -95px; width:160px; ">
															<option value="T" >Tarjeta</option>
															<option value="E" >Efectivo</option>
															<option value="C" >Cheque</option>
								  						</select>
													</div>
                                				</td>
                                				<td>Paga con</td>
                                				<td style="text-align:right;">
                                					<input type="text" id="fpagaCon" name="fpagaCon" value="0.00"  disabled style="color: green; font-size: 160%; font-weight: bold; text-align: right;height:40px; width: 130px;" >
                                				</td>
                                			</tr>
                                			<tr>
                                				<td colspan="3">
                                				<label style="float: left; width:70; padding-top: 5px; text-align: right;" for="idAut"># Aut/Chk.</label>
												<div class="controls">
								  					<input  style="margin-left: -95px; width:150px; " id="idAut" disabled name="idAut" onblur="reviAuto();" type="text" value="">
												</div>
                                				</td>
                                				<td>Vuelto</td>
                                				<td style="text-align:right">
                                					<input type="text" id="fvuelto" name="fvuelto" value="0.00" class='input' readonly style="color: green; font-size: 160%; font-weight: bold; text-align: right;height:40px; width: 130px;" >
                                				</td>
                                			</tr>
                                		</tbody>
									</table>
								</div>  span12 
							</div> ow-fluid detPago 

 						-->
							<div class="form-actions" style="text-align:right;margin-top:-15px;">
								<button class="btn btn-large">Limpiar</button>
								
								<button type="submit" disabled onclick="impFactu();" id="btnImp" class="btn btn-large btn-primary"><i class="icon-print icon-white"></i> Imprimir</button>
								 <!-- 
								 <a href="genFactura.php?id=155" target="__blank" id="btnImp" name="btnImp"title="Imprimir Factura" data-rel="tooltip" class="btn btn-large btn-primary"><i class="icon-print icon-white"></i> Imprimir</a>
								  -->								
							</div>
							<div id="message-fields" style='alignment-adjust:  central;'></div>					
					
						</fieldset>					
					</form>				
				</div> <!-- box-content -->
			</div> <!-- box span6 -->
			<!-- Finaliza Detalle Factura para Cobrar -->			
		</div><!--/row-fluid sortable -->
	</div> <!-- container-fluid -->


<script type="text/javascript">
$(document).ready(function(){  

	//se limpia los mensajes de error si hubiera
	document.getElementById('message-fields').innerHTML = "";
	$('#fvuelto').number( true, 2 );
	//$('#fpagaCon').number( true, 2 );
	$('#ftotal').number( true, 2 );
	$('#fimpuesto').number( true, 2 );
	$('#fdescuento').number( true, 2 );
	$('#fsubtotal').number( true, 2 );
	
	$("#btnImp").prop("disabled",true);
	
    $('#tblFacturas').dataTable({                        
		"sDom": "<'row-fluid'<'span6'l><'span6'f>r>t<'row-fluid'<'span12'i><'span12 center'p>>",
		"sPaginationType": "bootstrap",
                    'iDisplayLength': 16,
                    "aLengthMenu": [[16, 24, 32, -1], [8, 16, 24, 32, "Todos"]],
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
                    "sLoadingRecords": "Cargando..."
		}
	});
	            

	function cambiaImp(){
		
		alert("onclick");
        
        if($("#fExento").is(":checked")){
            $("#fimpuesto").val(0);
            
        }
	}
		
	$("#fpagaCon").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
             // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) || 
             // Allow: home, end, left, right, down, up
            (e.keyCode >= 35 && e.keyCode <= 40)) {
                 // let it happen, don't do anything
                 return;
        }
        
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
	
	$('#fExento').on('click', function() { 
		//alert("onclick");
		if (!this.checked) {
			//no esta chequeado, la factura es con impuesto
			//alert('con impuesto');
			$("#fimpuesto").val($("#prev_value_imp").val());
			
		}else{
			//si esta chequeado la factura exta exenta, sin impuesto entonces
			$("#prev_value_imp").val($("#fimpuesto").val());
			$("#fimpuesto").val(0);
		}
        //if($("#fExento").is(":checked")){
        //    $("#fimpuesto").val($("#prev_value_imp").val());
            
        //}
		
	});
    
	$("#fpagaCon").change(function (e) {
        
        $('#fvuelto').val($('#fpagaCon').val()-$('#ftotal').val());
        if ($('#fvuelto').val()==0.00){
        	document.getElementById('message-fields').innerHTML = "";
        	$("#btnImp").prop("disabled",false);
        	var vValor = $('#fpagaCon').val();
        	var vValorP = vValor.split(".");
        	var entPart = vValorP[0];
        	var decPart = vValorP[1];
       	
        	var val = parseInt(entPart);
        	val = numberWithCommas(val);
        	var valFinal = val+'.'+decPart;
        	$('#fpagaCon').val(valFinal);      	
        	$("#btnImp").focus();
        	
        }else{
        	$("#btnImp").prop("disabled",true);
        	document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Monto pago menor al monto total.</strong></div>";
        	$("#fpagaCon").focus();
        	
        }
            

    });


	$("#idAut").change(function (e) {
        //alert($('#idAut').val());
		reviAuto();
    });
});

//var val = parseInt($('#fpagaCon').val());
//Use the code in the answer above to replace the commas.
//val = numberWithCommas(val); 
// alert(val);      

function reviAuto(){
	  var myselect = document.getElementById("selectTipoPago");
	  var vValor   = myselect.options[myselect.selectedIndex].value;
	  // si el tipo de pago es tarjeta o cheque se debe revisar que este campo
	  // tiene valor ya sea el numero de autorizacion o el numero de cheque.
	  if (vValor=="T" || vValor=="C"){
    		if ($('#idAut').val()!=""){
    		document.getElementById('message-fields').innerHTML = "";
    		$("#btnImp").prop("disabled",false);
    		$("#btnImp").focus();
    	
    		}else{
    			$("#btnImp").prop("disabled",true);
    			document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Tarjeta o cheque campo obligatorio.</strong></div>";
    			$("#idAut").focus();    	
    		};
	  };
}

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

function revSeleccion(){
	  document.getElementById('message-fields').innerHTML = "";
	  var myselect = document.getElementById("selectTipoPago");
	  var vValor   = myselect.options[myselect.selectedIndex].value;
	  if (vValor=="E"){
		  //paga en efectivo
		  $("#idAut").prop("disabled",true);
		  $("#fpagaCon").prop("disabled",false);
		  $('#fpagaCon').val("");
		  $('#fpagaCon').focus();
		  //alert("Efectivo");
	  }else{
		  if(vValor=="T"){
			  //paga con tarjeta
			  $("#idAut").prop("disabled",false);
			  $("#fpagaCon").prop("disabled",true);
			  $('#fpagaCon').val($('#ftotal').val());
			  $('#fvuelto').val("0.00");
			  $("#idAut").focus();
		  }else{
			  //paga con cheque
			  $('#fpagaCon').val($('#ftotal').val());
			  $('#fvuelto').val("0.00");
			  $("#idAut").focus();
		  }
	  }
	  //alert(myselect.options[myselect.selectedIndex].value);
	}

function getDetProforma(idProforma){
	
	detFactura = idProforma.split("|");
	//numero factura
	$('#idProforma').val(detFactura[0]);
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
	
    //se habilitan los campos necesarios
	$("#selectTipoPago").prop("disabled",false);
	$("#idAut").prop("disabled",false);
	$('#fpagaCon').val(detFactura[6]);
	
	

    // si el impuesto es igual a 0.00 significa que esta exento
    // se habilita el campo y se pone chequeado.
	if (detFactura[5]=="0.00"){
		$("#fExento").prop("checked","checked");
		$("#fExento").prop("disabled",true);
		//$("#fExento").checked = true;
		//document.getElementById("fExento").checked = true;
		
	}else{
		$("#fExento").prop("disabled",false);
		//$("#fExento").checked = false;
		//document.getElementById("fExento").checked = false;
		
	}
	//ahora se cargan la lista de articulos
	$("#tblDetFacArti").load("buscarDetProformaArti.php", { idProforma : detFactura[0] }, function(response,status,xhr){
    });
    // el valor por defecto para el pago de la factura es contarjeta de credito.
    // por eso se lleva al usuario al campo donde debe digita el numero de autorizacion.
	//$("#idAut").focus();

}


</script>
<?php }} ?>
