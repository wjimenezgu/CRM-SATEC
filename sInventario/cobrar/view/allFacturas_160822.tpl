{$NAV_MENU}
	<div class="container-fluid"> 
		<div class="row-fluid sortable">
			<!-- Inicia Lista de Facturas -->
			<div class="box span6">
				<div class="box-header well">
					<h2><i class="icon-th"></i>Lista de  Facturas</h2>
					<input type="text"  id="tienda" style="background-color: AliceBlue; margin-left:70px;" name="tienda"   value="{$NOMBRE_TIENDA}">
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
								<th>Monto</th>
							</tr>
						</thead>
						{section name=lP loop=$LISTA_FACTURAS}
							<tr style="padding:0px;" id="tr{$LISTA_FACTURAS[lP].idFactura}">
                                <td style="width:385px; text-align:left"> 
                                	<a style="color:#004C66;" href="#" 
                                		id="{$LISTA_FACTURAS[lP].idFactura}|{$LISTA_FACTURAS[lP].nombre}|{$LISTA_FACTURAS[lP].userVendedor}|{$LISTA_FACTURAS[lP].subTotal}|{$LISTA_FACTURAS[lP].descuento}|{$LISTA_FACTURAS[lP].impuesto}|{$LISTA_FACTURAS[lP].TotalN}"
                                		onclick="getDetFactura(this.id)">{$LISTA_FACTURAS[lP].nombre}
                                	</a>
                                </td>
     							<td style="width:40px;  text-align:right">{$LISTA_FACTURAS[lP].idFactura}</td>  
                                <td style="width:385px; text-align:right">{$LISTA_FACTURAS[lP].Total}</td>
							</tr> 
						{/section}
					</table>
				</div> <!-- box-content -->
			</div><!--/box span6-->
			<!-- ************************************************************ -->
			<!-- Finaliza Lista de Facturas -->
			<!-- ************************************************************ -->
			<!-- Inicia Detalle Factura para Cobrar -->
			<!-- ************************************************************ -->
			<div class="box span6">
				<div class="box-header well">
					<h2><i class="icon-th"></i>Detalle Factura</h2>
				</div>
				<div class="box-content">
					<form class="form-horizontal">
					<input type="hidden" name="prev_value_imp" id="prev_value_imp" value="0">
					<input type="hidden" name="idFactura" id="idFactura" value="">
					<input type="hidden" name="idTienda" id="idTienda" value="{$ID_TIENDA}">
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
										<!-- 	Factura Exenta de IV  -->
										<!-- 	<input type="checkbox" onclick="cambiaImp();" id="fExento" name="fExento"   disabled value="">   -->
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
							<div class="row-fluid" id="detPago">
								<div class="span12">
									<table class="table" id="tblPago1">
										<tbody id="tbod">
                                			<tr>
                                				<td colspan="2">
													<label style="float: left; width:70; padding-top: 5px; text-align: right;" for="selectTipoPago">T. Pago</label>
													<div class="controls">
								  						<select onChange="revSeleccion(1)" disabled id="selectTipoPago1" style="margin-left: -95px; width:110px; ">																												
                                        					{section name="p" loop=$LISTA_FPAGOS}
                                            					<option value="{$LISTA_FPAGOS[p].id}">{$LISTA_FPAGOS[p].descCorta}</option>
                                        					{/section}																														
								  						</select>
													</div>
                                				</td>
                                				<td>
                                				<label style="float: left; width:70; padding-top: 5px; text-align: right;" for="idAut1"># Doc.</label>
												<div class="controls">
								  					<input  style="margin-left: -95px; width:80px; " id="idAut1" disabled name="idAut1" onblur="reviAuto(1);" type="text" value="">
												</div>
                                			
                                				</td>
                                				<td>Monto</td>
                                				<td style="text-align:right;">
                                					<input type="text" id="fpagaCon1" name="fpagaCon1" value="0.00"  disabled style="color: green; font-size: 130%; font-weight: bold; text-align: right;height:40px; width: 110px;" >
                                					<input type="hidden" id="fsaldoNota1" name="fsaldoNota1" value="0.00" >
                                				</td>
                                				<td>
                                				<button type="button" title="Agregar Otra Forma de Pago" class="btn btn-small btn-success" id="btnHabilitaP2" onclick="HabilitaPago(2);"><i class="icon-plus icon-white"></i> </button>
                                				</td>
                                			</tr>

                                		</tbody>
									</table>
									<table class="table" id="tblPago2" style="display:none;">
										<tbody id="tbod">
                                			<tr>
                                				<td colspan="2">
													<label style="float: left; width:70; padding-top: 5px; text-align: right;" for="selectTipoPago">T. Pago</label>
													<div class="controls">
								  						<select onChange="revSeleccion(2)" disabled id="selectTipoPago2" style="margin-left: -95px; width:110px; ">
                                        					{section name="p" loop=$LISTA_FPAGOS}
                                            					<option value="{$LISTA_FPAGOS[p].id}">{$LISTA_FPAGOS[p].descCorta}</option>
                                        					{/section}	
								  						</select>
													</div>
                                				</td>
                                				<td>
                                				<label style="float: left; width:70; padding-top: 5px; text-align: right;" for="idAut2"># Doc.</label>
												<div class="controls">
								  					<input  style="margin-left: -95px; width:80px; " id="idAut2" disabled name="idAut2" onblur="reviAuto(2);" type="text" value="">
												</div>
                                			
                                				</td>
                                				<td>Monto</td>
                                				<td style="text-align:right;">
                                					<input type="text" id="fpagaCon2" name="fpagaCon2" value="0.00"  disabled style="color: green; font-size: 130%; font-weight: bold; text-align: right;height:40px; width: 110px;" >
                                					<input type="hidden" id="fsaldoNota2" name="fsaldoNota2" value="0.00" >
                                				</td>
                                				<td>
                                				<button type="button" title="Agregar Otra Forma de Pago"class="btn btn-small btn-success" id="btnHabilitaP3" onclick="HabilitaPago(3);"><i class="icon-plus icon-white"></i> </button>
                                				<button type="button" title="Quitar esta Forma de Pago"class="btn btn-small btn-danger" id="btnQuitaP2" onclick="QuitaPago(2);"><i class="icon-minus icon-white"></i> </button>
                                				</td>                                				
                                			</tr>

                                		</tbody>
									</table>
									<table class="table" id="tblPago3" style="display:none;">
										<tbody id="tbod">
                                			<tr>
                                				<td colspan="2">
													<label style="float: left; width:70; padding-top: 5px; text-align: right;" for="selectTipoPago">T. Pago</label>
													<div class="controls">
								  						<select onChange="revSeleccion(3)" disabled id="selectTipoPago3" style="margin-left: -95px; width:110px; ">
                                        					{section name="p" loop=$LISTA_FPAGOS}
                                            					<option value="{$LISTA_FPAGOS[p].id}">{$LISTA_FPAGOS[p].descCorta}</option>
                                        					{/section}	
								  						</select>
													</div>
                                				</td>
                                				<td>
                                				<label style="float: left; width:70; padding-top: 5px; text-align: right;" for="idAut3"># Doc.</label>
												<div class="controls">
								  					<input  style="margin-left: -95px; width:80px; " id="idAut3" disabled name="idAut3" onblur="reviAuto(3);" type="text" value="">
												</div>
                                			
                                				</td>
                                				<td>Monto</td>
                                				<td style="text-align:right;">
                                					<input type="text" id="fpagaCon3" name="fpagaCon3" value="0.00"  disabled style="color: green; font-size: 130%; font-weight: bold; text-align: right;height:40px; width: 110px;" >
                                					<input type="hidden" id="fsaldoNota3" name="fsaldoNota3" value="0.00" >
                                				</td>
                                				<td>
                                				<button type="button" title="Agregar Otra Forma de Pago"class="btn btn-small btn-success" id="btnHabilitaP4" onclick="HabilitaPago(4);"><i class="icon-plus icon-white"></i> </button>
                                				<button type="button" title="Quitar esta Forma de Pago"class="btn btn-small btn-danger" id="btnQuitaP3" onclick="QuitaPago(3);"><i class="icon-minus icon-white"></i> </button>
                                				</td>                                				
                                			</tr>

                                		</tbody>
									</table>									
									<table class="table" id="tblPago4" style="display:none;">
										<tbody id="tbod">
                                			<tr>
                                				<td colspan="2">
													<label style="float: left; width:70; padding-top: 5px; text-align: right;" for="selectTipoPago">T. Pago</label>
													<div class="controls">
								  						<select onChange="revSeleccion(4)" disabled id="selectTipoPago4" style="margin-left: -95px; width:110px; ">
                                        					{section name="p" loop=$LISTA_FPAGOS}
                                            					<option value="{$LISTA_FPAGOS[p].id}">{$LISTA_FPAGOS[p].descCorta}</option>
                                        					{/section}	
								  						</select>
													</div>
                                				</td>
                                				<td>
                                				<label style="float: left; width:70; padding-top: 5px; text-align: right;" for="idAut4"># Doc.</label>
												<div class="controls">
								  					<input  style="margin-left: -95px; width:80px; " id="idAut4" disabled name="idAut4" onblur="reviAuto(4);" type="text" value="">
												</div>
                                			
                                				</td>
                                				<td>Monto</td>
                                				<td style="text-align:right;">
                                					<input type="text" id="fpagaCon4" name="fpagaCon4" value="0.00"  disabled style="color: green; font-size: 130%; font-weight: bold; text-align: right;height:40px; width: 110px;" >
                                					<input type="hidden" id="fsaldoNota4" name="fsaldoNota4" value="0.00" >
                                					<button type="button" title="Quitar esta Forma de Pago"class="btn btn-small btn-danger" id="btnQuitaP4" onclick="QuitaPago(4);"><i class="icon-minus icon-white"></i> </button>
                                				</td>
                              				
                                			</tr>

                                		</tbody>
									</table>									
									
									<!-- Seccion para indicar el saldo con respecto al monto del pago -->								
									<table class="table" id="tblVuelto" boder="1">
										<tbody id="tbod">
											<tr>
                                				<td colspan="3">
                                				</td>
                                				<td><h2>Vuelto</h2></td>
                                				<td style="text-align:right">
                                					<input type="text" id="fvuelto" name="fvuelto" value="0.00" class='input' readonly style="color: green; font-size: 160%; font-weight: bold; text-align: right;height:40px; width: 130px;" >
                                				</td>
                                			</tr>										
										</tbody>
									</table>
									
								</div> <!-- span12 -->
								
							</div> <!-- row-fluid detPago -->


							<div class="form-actions" style="text-align:right;margin-top:-15px;">

								<button type="button" style="margin-left: -20px;" disabled onclick="impFactu('S');" id="btnManual" class="btn btn-large btn-danger"><i class="icon-pencil icon-white"></i> Manual</button> 
								<input type="hidden" id="numFactuManual" name="numFactuManual" value="000"  style="color: blue;  text-align: left; width: 110px;" >
								<button type="button" class="btn btn-large btn-warning " onclick="eliminaFactu();" id="btnElimina" title="Eliminar Facturas sin Imprimir.">Eliminar</button>
							    <!-- <button type="button" class="btn btn-large" onclick="Sale();">Cerrar</button>   -->
								<!-- <button class="btn btn-large">Limpiar</button>   -->
								
								<button type="button" disabled onclick="impFactu('N');" id="btnImp" class="btn btn-large btn-primary"><i class="icon-print icon-white"></i> Imprimir</button>
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

{literal}
<script type="text/javascript">
$(document).ready(function(){  

	//se limpia los mensajes de error si hubiera
	document.getElementById('message-fields').innerHTML = "";
	$('#fvuelto').number( true, 2 );
	$('#ftotal').number( true, 2 );
	$('#fimpuesto').number( true, 2 );
	$('#fdescuento').number( true, 2 );
	$('#fsubtotal').number( true, 2 );
	
	$("#btnImp").prop("disabled",true);
	$("#btnManual").prop("disabled",true);
	$("#btnElimina").prop("disabled",true);
	
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
			
	$("#fpagaCon1").keydown(function (e) {
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
	
	$("#fpagaCon2").keydown(function (e) {
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
	
	$("#fpagaCon3").keydown(function (e) {
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
	
	$("#fpagaCon4").keydown(function (e) {
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
	
	
    
	$("#fpagaCon1").change(function (e) {
		
		e.preventDefault();
		recalculaPago();
		/*
		var vPagoCon = parseFloat($('#fpagaCon1').val());
		var vTotal = parseFloat($('#ftotal').val());
		var vsaldoNota = parseFloat($('#fsaldoNota1').val());

		var vVuelto = vPagoCon - vTotal;
		$('#fvuelto').val(vVuelto);
		if (vVuelto >= 0.00) {
        	document.getElementById('message-fields').innerHTML = "";
        	if (vsaldoNota != 0.00){
        		
    			var difPago = vPagoCon - vsaldoNota;
    			if (difPago > 0.00){
    				
    				var valFinal = Formatea($('#fpagaCon1').val());        	
    	        	$('#fpagaCon1').val(valFinal);    
    	        	$("#btnImp").prop("disabled",true);
    	        	document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Monto del pago mayor al saldo de nota.</strong></div>";
    	        	$("#fpagaCon1").focus();	        	
    			}
    			
    		}else{
	        	$("#btnImp").prop("disabled",false);
	        	
	        	var valFinal = Formatea($('#fpagaCon1').val());
	        	
	        	$('#fpagaCon1').val(valFinal);      	
	        	$("#btnImp").focus();
    		}
        	
        }else{
        	
			var valFinal = Formatea($('#fpagaCon1').val());        	
        	$('#fpagaCon1').val(valFinal);    
        	$("#btnImp").prop("disabled",true);
        	document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Monto del pago menor al monto total.</strong></div>";
        	$("#fpagaCon1").focus();
        	
        }
	*/
            
    });


	$("#fpagaCon2").change(function (e) {
				
		e.preventDefault();
		recalculaPago();

    });
	
	
	$("#fpagaCon3").change(function (e) {
		
		e.preventDefault();
		recalculaPago();
            
    });
    
    
    
	$("#fpagaCon4").change(function (e) {
		
		e.preventDefault();
		recalculaPago();
	
	});
	$("#numFactuManual").change(function (e) {
			
			e.preventDefault();
			if ($('#numFactuManual').val() != ""){
				// indico un numero de factura manual
				document.getElementById('message-fields').innerHTML = "";  	    	
		    	$("#btnManual").prop("disabled",false);
		    	
		    	$("#btnManual").focus();
			}else{
				$("#btnManual").prop("disabled",true);
				document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Factura Manula requiere n&uacute;mero de	 factura.</strong></div>";
				
			}	
	});
	
	
	
	$("#idAut1").change(function (e) {
        //alert($('#idAut').val());
        e.preventDefault();
		reviAuto(1);
    });
	$("#idAut2").change(function (e) {
        //alert($('#idAut').val());
		reviAuto(2);
    });
	$("#idAut3").change(function (e) {
        //alert($('#idAut').val());
		reviAuto(3);
    });
	$("#idAut4").change(function (e) {
        //alert($('#idAut').val());
		reviAuto(4);
    });
});

//var val = parseInt($('#fpagaCon').val());
//Use the code in the answer above to replace the commas.
//val = numberWithCommas(val); 
// alert(val); 


function recalculaPago(){
	
	var vPagoCon1   = 0.00;
	var vPagoCon2   = 0.00;
	var vPagoCon3   = 0.00;
	var vPagoCon4   = 0.00;
	var vsaldoNota1 = 0.00;
	var vsaldoNota2 = 0.00;
	var vsaldoNota3 = 0.00;
	var vsaldoNota4 = 0.00;
	
	var vTotal 	  = 0.00;
	var vVuelto   = 0.00;
	var valFinal  = 0.00;	
	var str       = "";
	var res       = "";
	
	var errorSaldoNota = false;
	var msgSaldoNota = "Pago mayor al saldo de la nota ";
	
	if ($('#fpagaCon1').val() != "0.00" && $('#fpagaCon1').val() != "") {
		str = $('#fpagaCon1').val();
		res = str.replace(",", "");
		vPagoCon1 = parseFloat(res);

		vsaldoNota1 = parseFloat($('#fsaldoNota1').val());

		if (vsaldoNota1 != 0.00 && vPagoCon1 > vsaldoNota1){

			errorSaldoNota = true;
			msgSaldoNota = msgSaldoNota + $("#idAut1").val() + " Saldo: "+ $('#fsaldoNota1').val();
		}
	}
	if ($('#fpagaCon2').val() != "0.00" && $('#fpagaCon2').val() != "") {
		str = $('#fpagaCon2').val();
		res = str.replace(",", "");
		vPagoCon2 = parseFloat(res);
		vsaldoNota2 = parseFloat($('#fsaldoNota2').val());
		if (vsaldoNota2 != 0.00 && vPagoCon2 > vsaldoNota2){
			errorSaldoNota = true;
			msgSaldoNota = msgSaldoNota + $("#idAut2").val()+ " Saldo: "+ $('#fsaldoNota2').val();
		}
	}
	if ($('#fpagaCon3').val() != "0.00" && $('#fpagaCon3').val() != "") {
		str = $('#fpagaCon3').val();
		res = str.replace(",", "");
		vPagoCon3 = parseFloat(res);
		vsaldoNota3 = parseFloat($('#fsaldoNota3').val());
		if (vsaldoNota3 != 0.00 && vPagoCon3 > vsaldoNota3){
			errorSaldoNota = true;
			msgSaldoNota = msgSaldoNota + $("#idAut3").val()+ " Saldo: "+ $('#fsaldoNota3').val();
		}
	}
	if ($('#fpagaCon4').val() != "0.00" && $('#fpagaCon4').val() != "") {
		str = $('#fpagaCon4').val();
		res = str.replace(",", "");
		vPagoCon4 = parseFloat(res);
		vsaldoNota4 = parseFloat($('#fsaldoNota4').val());
		if (vsaldoNota4 != 0.00 && vPagoCon4 > vsaldoNota4){
			errorSaldoNota = true;
			msgSaldoNota = msgSaldoNota + $("#idAut4").val()+ " Saldo: "+ $('#fsaldoNota4').val();
		}
	}
	
	
	valFinal = Formatea(vPagoCon1.toString());	
	$('#fpagaCon1').val(valFinal); 
	
	valFinal = Formatea(vPagoCon2.toString());
	$('#fpagaCon2').val(valFinal); 
	
	valFinal = Formatea(vPagoCon3.toString());
	$('#fpagaCon3').val(valFinal); 
	
	valFinal = Formatea(vPagoCon4.toString());
	$('#fpagaCon4').val(valFinal);     	
	
	
	vTotal = parseFloat($('#ftotal').val());
	
	vVuelto = vPagoCon1 + vPagoCon2 + vPagoCon3 + vPagoCon4 - vTotal;
	
	$('#fvuelto').val(vVuelto);
	
	if (vVuelto >= 0.00) {

		if(errorSaldoNota == true){
		
			document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span>"+ msgSaldoNota+"</strong></div>";
	    	$("#btnImp").prop("disabled",true);
	    	$("#btnManual").prop("disabled",true);
	    	$("#fpagaCon1").focus();
		
		}else{		
	
	    	document.getElementById('message-fields').innerHTML = "";  	    	
	    	$("#btnImp").prop("disabled",false);
	    	$("#btnManual").prop("disabled",false);
	    	$("#btnImp").focus();
		}    	
    }else{
    	document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Monto del pago menor al monto total.</strong></div>";
    	$("#btnImp").prop("disabled",true);
    	$("#btnManual").prop("disabled",true);
    	$("#fpagaCon1").focus();    	
    }	
		
}


function reviAuto(numPago){

	  switch(numPago){
		case 1:	$selTipoPago 	= $("#selectTipoPago1");
				$idAut			= $('#idAut1');
				$pagaCon		= $("#fpagaCon1");
				$saldoNota		= $("#fsaldoNota1");
			break;
		case 2:	$selTipoPago 	= $("#selectTipoPago2");
				$idAut			= $('#idAut2');
				$pagaCon		= $("#fpagaCon2");
				$saldoNota		= $("#fsaldoNota2");
			break;
		case 3:	$selTipoPago 	= $("#selectTipoPago3");
				$idAut			= $('#idAut3');
				$pagaCon		= $("#fpagaCon3");
				$saldoNota		= $("#fsaldoNota3");
			break;
		case 4:	$selTipoPago 	= $("#selectTipoPago4");
				$idAut			= $('#idAut4');
				$pagaCon		= $("#fpagaCon4");
				$saldoNota		= $("#fsaldoNota4");
			break;			
	}
	  	
	  var vValor   = $selTipoPago.val();
	  
	  // si el tipo de pago es tarjeta o cheque o nota se debe revisar que este campo
	  // tiene valor ya sea el numero de autorizacion o el numero de cheque.
	  if (vValor=="T" || vValor=="C" || vValor=="N" || vValor=="R"){
    		if ($idAut.val()!=""){
    		document.getElementById('message-fields').innerHTML = "";
    		//si es una nota de credito, se debe revisar que la nota exista para poder validar
    		if (vValor=="N"){
    			 					
    			
    			var properties = {
                    			url  : "ValidaNotaCr.php",
                        		async: false,
                        		cache: false,
                        		datatype:"text",
                        		data : "idTienda="+$('#idTienda').val()+"&numDocuNotaCr="+$idAut.val(),	
                        		type : "GET",
                        		success: function(data){
                        			//alert(data);
                        			// data trae lo siguiente: 
                        			// en la pos 0 ["message"].'|'. en la pos 1 ["idNota"].'|'. en la pos 2 ["saldoNota"]
                        		    $dataStr = (data.split("|"));
                        			if ($dataStr[0] == 1) {
                        				// si existe la nota
             						
                        				$saldoNota.val($dataStr[2]);
                        		
                        				$pagaCon.val("");
                        				$pagaCon.focus();

                        			}else{
                        				if ($dataStr[0] == 0){
                        					//nota no existe.
                        					$("#btnImp").prop("disabled",true);
                        					$("#btnManual").prop("disabled",true);
                        	    			document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Nota de Crédito no existe o saldo es cero.</strong></div>";
                        	    			$idAut.focus(); 	
                        				}else{
                        					alert(data);
                        					document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Error Inesperado.</strong></div>";
                        	    			$idAut.focus();                        					
                        				}
                        			}
                        		}, // success,
              					error: function(jqXHR,textStatus,errorThrown){
              						 	var err = eval("(" + jqXHR.responseText + ")");
              						  	alert('Error al Validar Nota '+err.Message);
                  						//alert('Error al imprimir '+errorThrown);
              							}
                    		}; // var properties            
              				$.ajax(properties);
    		}else{
    			recalculaPago();
    		}
    		    	
    	}else{
    			$("#btnImp").prop("disabled",true);
    			$("#btnManual").prop("disabled",true);    			
    			document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Tarjeta o cheque o nota es obligatorio.</strong></div>";
    			$idAut.focus();    	
    	};
	  };
}

function numberWithCommas(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}

function Formatea(vValor){
	// completa con .00 si el usuario no digito los decimales en el monto
	var n = vValor.indexOf(".");
	if (n = -1){
		vValor = vValor+".00";
	}
	var vValorP = vValor.split(".");
	var entPart = vValorP[0];
	var decPart = vValorP[1];
	
	var val = parseInt(entPart);
	val = numberWithCommas(val);
	var valFinal = val+'.'+decPart;
	return valFinal;
	
}

function HabilitaPago(numPago){

		switch(numPago){
			case 2:	$("#tblPago2").css("display","block");
					$("#idAut2").prop("disabled",false);
					$("#idAut2").val("");
					$("#selectTipoPago2").prop("disabled",false);
					$("#fpagaCon2").prop("disabled",false);
					$("#fpagaCon2").val("");
					$("#selectTipoPago2").focus();
					
				break;
			case 3:	$("#tblPago3").css("display","block");
					$("#idAut3").prop("disabled",false);
					$("#idAut3").val("");
					$("#selectTipoPago3").prop("disabled",false);
					$("#fpagaCon3").prop("disabled",false);
					$("#fpagaCon3").val("");
					$("#selectTipoPago3").focus();
				break;
			case 4:	$("#tblPago4").css("display","block");
					$("#idAut4").prop("disabled",false);
					$("#idAut4").val("");
					$("#selectTipoPago4").prop("disabled",false);
					$("#fpagaCon4").prop("disabled",false);
					$("#fpagaCon4").val("");
					$("#selectTipoPago4").focus();
					
				break;
		}
}

function QuitaPago(numPago){

		switch(numPago){
			case 2:	$("#tblPago2").css("display","none");
					$("#idAut2").prop("disabled",true);
					$("#selectTipoPago2").prop("disabled",true);
					$("#fpagaCon2").prop("disabled",true);					
					$("#idAut2").val("");
					$("#fpagaCon2").val("");
					$('#selectTipoPago2').prop('selectedIndex',0);
					
					recalculaPago()
					
				break;
			case 3:	$("#tblPago3").css("display","none");
					$("#idAut3").prop("disabled",true);
					$("#selectTipoPago3").prop("disabled",true);
					$("#fpagaCon3").prop("disabled",true);
					$("#idAut3").val("");
					$("#fpagaCon3").val("");
					$('#selectTipoPago3').prop('selectedIndex',0);
					recalculaPago()
					
				break;
			case 4:	$("#tblPago4").css("display","block");
					$("#idAut4").prop("disabled",false);
					$("#selectTipoPago4").prop("disabled",false);
					$("#fpagaCon4").prop("disabled",false);
					$("#idAut4").val("");
					$("#fpagaCon4").val("");
					$('#selectTipoPago4').prop('selectedIndex',0);
					recalculaPago()
					
				break;
		}
}


function RedistriPagos(){
	
	var vPagoCon   = 0.00;

	
	var vTotal 	  = 0.00;
	var vVuelto   = 0.00;
	var valFinal  = 0.00;	
	var str       = "";
	var res       = "";
	

	if ($("#selectTipoPago1").val() == "E" && $('#fvuelto').val() != "0.00" && $('#fpagaCon1').val() != "0.00" && $('#fpagaCon1').val() != "") {
		str = $('#fpagaCon1').val();
		res = str.replace(",", "");
		vPagoCon = parseFloat(res);
		str = $('#fvuelto').val();
		res = str.replace(",", "");
		vVuelto = parseFloat(res);
		vPagoCon = vPagoCon - vVuelto;	
		valFinal = Formatea(vPagoCon.toString());	
		$('#fpagaCon1').val(valFinal); 		
	}
		

	if ($("#selectTipoPago2").val() == "E" && $('#fvuelto').val() != "0.00" && $('#fpagaCon2').val() != "0.00" && $('#fpagaCon2').val() != "") {
		str = $('#fpagaCon2').val();
		res = str.replace(",", "");
		vPagoCon = parseFloat(res);
		str = $('#fvuelto').val();
		res = str.replace(",", "");
		vVuelto = parseFloat(res);
		vPagoCon = vPagoCon - vVuelto;	
		valFinal = Formatea(vPagoCon.toString());	
		$('#fpagaCon2').val(valFinal); 		
	}	
	
	
	if ($("#selectTipoPago3").val() == "E" && $('#fvuelto').val() != "0.00" && $('#fpagaCon3').val() != "0.00" && $('#fpagaCon3').val() != "") {
		str = $('#fpagaCon3').val();
		res = str.replace(",", "");
		vPagoCon = parseFloat(res);
		str = $('#fvuelto').val();
		res = str.replace(",", "");
		vVuelto = parseFloat(res);
		vPagoCon = vPagoCon - vVuelto;	
		valFinal = Formatea(vPagoCon.toString());	
		$('#fpagaCon3').val(valFinal); 		
	}	
	
	if ($("#selectTipoPago4").val() == "E" && $('#fvuelto').val() != "0.00" && $('#fpagaCon4').val() != "0.00" && $('#fpagaCon4').val() != "") {
		str = $('#fpagaCon4').val();
		res = str.replace(",", "");
		vPagoCon = parseFloat(res);
		str = $('#fvuelto').val();
		res = str.replace(",", "");
		vVuelto = parseFloat(res);
		vPagoCon = vPagoCon - vVuelto;	
		valFinal = Formatea(vPagoCon.toString());	
		$('#fpagaCon4').val(valFinal); 		
	}		
}


function impFactu($esManual){


	RedistriPagos();
	
	var str = $('#fpagaCon1').val();
	var res = str.replace(",", "");
	var vPagoCon1 = parseFloat(res).toFixed(2);
	
	
	var str = $('#fpagaCon2').val();
	var res = str.replace(",", "");
	var vPagoCon2 = parseFloat(res).toFixed(2);
	
	
	var str = $('#fpagaCon3').val();
	var res = str.replace(",", "");
	var vPagoCon3 = parseFloat(res).toFixed(2);
	
	
	var str = $('#fpagaCon4').val();
	var res = str.replace(",", "");
	var vPagoCon4 = parseFloat(res).toFixed(2);
	  
	//var tmp = "idTienda="+$('#idTienda').val()+"&idFactura="+$('#idFactura').val()+"&formaPago1="+$("#selectTipoPago1").val()+"&autorizacion1="+$("#idAut1").val()+"&montoPago1="+vPagoCon1+"&formaPago2="+$("#selectTipoPago2").val()+"&autorizacion2="+$("#idAut2").val()+"&montoPago2="+vPagoCon2+"&formaPago3="+$("#selectTipoPago3").val()+"&autorizacion3="+$("#idAut3").val()+"&montoPago3="+vPagoCon3+"&formaPago4="+$("#selectTipoPago4").val()+"&autorizacion4="+$("#idAut4").val()+"&montoPago4="+vPagoCon4;
	//alert(tmp);return;
	

	// se agrega el codigo que imprime la factura
	// alert($('#idTienda').val()+$('#idFactura').val());
		    // se refresca la ventana para que la factura que se envio a imprimir ya no salga.
	    //header("Location: ./index.php");
	    if ( $('#idTienda').val() == 0) {
			//history.go(0);
			
			window.location.href ='../cobrar/';
	    }else{
	    	window.location.href ='../facturacion/';
	    }
	
	
	
      var properties = {
                    			url  : "impreFactu.php",
                        		async: false,
                        		cache: false,
                        		datatype:"text",
                        		data : "idTienda="+$('#idTienda').val()+"&idFactura="+$('#idFactura').val()+"&esManual="+$esManual+"&numFactuManual="+$('#numFactuManual').val()+"&formaPago1="+$("#selectTipoPago1").val()+"&autorizacion1="+$("#idAut1").val()+"&montoPago1="+vPagoCon1+"&formaPago2="+$("#selectTipoPago2").val()+"&autorizacion2="+$("#idAut2").val()+"&montoPago2="+vPagoCon2+"&formaPago3="+$("#selectTipoPago3").val()+"&autorizacion3="+$("#idAut3").val()+"&montoPago3="+vPagoCon3+"&formaPago4="+$("#selectTipoPago4").val()+"&autorizacion4="+$("#idAut4").val()+"&montoPago4="+vPagoCon4,	
                        		type : "GET",
                        		success: function(data){
                        			if (data.trim()!='OK') {
                        				alert(data);
                        			}else{
                        				//todo OK se manda a imprimir la factura.
                        				// version anterior para imprimr factura, esta opcion abre una pantalla con los datos de la factura
                        				//window.open('imprimir.php?factura='+$('#idFactura').val(),'_blank');
                        				// nueva version de imprimir esta no abre pantalla alguna, imprime la factura
                        				// directamente en la impresora default.
                        				// las FACTURAS MANUALES NO SE IMPRIMEN. Si la factura es manual el parametro $esManual tiene
                        				// el valor de S. En caso contrario trae el valor de N.
                        				if ($esManual == "N"){
                        					window.location.href ='ImpreFactura.php?idDoc='+$('#idFactura').val()+'&indTipoDoc='+'F'; // factura
                        				}
                        				//$dummy="";
                        				//window.location.href ='index.php';        
                        			}
                        		}, // success,
              					error: function(jqXHR,textStatus,errorThrown){
              						 	var err = eval("(" + jqXHR.responseText + ")");
              						  	alert('Error al Imprimir '+err.Message);
                  						//alert('Error al imprimir '+errorThrown);
              							}
                    		}; // var properties            
              				$.ajax(properties);                

    // regresar a la pantalla donde despliega facturas.                		
	//window.location.href ='index.php';                    		
}


function eliminaFactu(){
	 $result = confirm("Esta seguro de eliminar factura?");
	 if ($result == true){
	
      				var properties = {
                    			url  : "eliminaFactu.php",
                        		async: false,
                        		cache: false,
                        		datatype:"text",
                        		data : "idTienda="+$('#idTienda').val()+"&idFactura="+$('#idFactura').val(),	
                        		type : "GET",
                        		success: function(data){
                        			if (data.trim()!='OK') {
                        				alert(data);
                        			}else{
                        				//todo OK se regresa a la pantalla de facturas pendientes de cobrar
                        				window.location.href ='../cobrar/'; 
                        			}
                        		}, // success,
              					error: function(jqXHR,textStatus,errorThrown){
              						 	var err = eval("(" + jqXHR.responseText + ")");
              						  	alert('Error al Imprimir '+err.Message);
                  						//alert('Error al imprimir '+errorThrown);
              							}
                    		}; // var properties            
              				$.ajax(properties);
	 }
		// refrescar la pantalla con las factuas pendientes de cobrar                    		
     window.location.href ='../cobrar/';                    		

}


function revSeleccion(numPago){
	  document.getElementById('message-fields').innerHTML = "";
	  
	  switch(numPago){
		case 1:	$selTipoPago 	= $("#selectTipoPago1");
				$idAut			= $('#idAut1');
				$pagaCon		= $("#fpagaCon1");
				$saldoNota		= $("#fsaldoNota1");
			break;
		case 2:	$selTipoPago 	= $("#selectTipoPago2");
				$idAut			= $('#idAut2');
				$pagaCon		= $("#fpagaCon2");
				$saldoNota		= $("#fsaldoNota2");
			break;
		case 3:	$selTipoPago 	= $("#selectTipoPago3");
				$idAut			= $('#idAut3');
				$pagaCon		= $("#fpagaCon3");
				$saldoNota		= $("#fsaldoNota3");
			break;
		case 4:	$selTipoPago 	= $("#selectTipoPago4");
				$idAut			= $('#idAut4');
				$pagaCon		= $("#fpagaCon4");
				$saldoNota		= $("#fsaldoNota4");
			break;			
	}
	  
	 
	var vValor   = $selTipoPago.val();
	  
	// E: EFECTIVO, T: TARJETA, R: TRANSFERENCIA, D: DIFERIDA, C: CHEQUE ; N: NOTA ; B: RECIBO

	if (vValor=="E"){
		
	//	alert("Efectivo");
		  //paga en efectivo
		  $idAut.val(""); // no se ocupa que indique ningun numero de autorizacion
		  $idAut.prop("disabled",true); // se deshagilita el campo
		  $pagaCon.prop("disabled",false); // se habilita el campo pago con para que indique el monto
		  $saldoNota.val("0.00");
		  $pagaCon.val(""); // se limpia para que indique explictamente el monto
		  $pagaCon.focus(); // se pone el focus para que digite
		 
		  
	}else{
		// si el pago es con Tarjeta, se pone automaticamente el monto de la factura en el campo pagacon y se ponen el focus en
		// el boton imprimir para que solo presione enter y se imprima la factura.
		if (vValor=="T" || vValor=="C" || vValor=="R" || vValor=="N" || vValor=="B") {
		  	  	// con Tarjeta o Cheque o Transferencia o Nota
			  	// se habilita el campo para poner el numero de autorizacion, numero de cheque o transferencia o numero de nota
			  	$idAut.prop("disabled",false);
		  	  	
		  	  	// SOLO si es con nota de credito se debe digitar el ponto del pago con
		  	  	if (vValor=="N" || vValor=="B"){
		  		  $pagaCon.val(""); // se limpia para que indique explictamente el monto
		  		  $idAut.val("");
			  	  $idAut.focus(); // debe digita el numero de la nota.
				  		  	  		
		  	  	}else{
		  	  		// el total no esta formateado, es decir no tiene comas, hay que formatear
		  	  		$saldoNota.val("0.00");
		  	  		vValorT = $('#ftotal').val();
 		  	  		var found = vValorT.indexOf('.'); // se determina la posicion del .
 		  	  		if (found > -1){
 				   		var vValorP = vValorT.split(".");
 				
 				   		var entPart = vValorP[0];
 				   		var decPart = vValorP[1];
 		        	}else{
 		        		var entPart = vValorT;
 		        		var decPart = '00';
 		        	}
	 		  	  	var val = parseInt(entPart);
					val = numberWithCommas(val);
					var valFinal = val+'.'+decPart;
					$pagaCon.val(valFinal); 			  
				  
				  	//$('#fvuelto').val("0.00");
				  	$idAut.val("");
				  	$idAut.focus();
		  	  	}  							
				
		}else{ // vValor = D diferencida
			$saldoNota.val("0.00");
			$idAut.val("");
			$idAut.prop("disabled",true);
			document.getElementById('message-fields').innerHTML = "";
			$("#btnManual").prop("disabled",false);
	    	$("#btnImp").prop("disabled",false);
	    	$("#btnImp").focus();		  		  
		}
		
	  } // else vValor == E
	   // si vValor=="D" diferida no se pide ningun dato
	   // luego se le asignara a la factura el tipo de pago
	  //alert(myselect.options[myselect.selectedIndex].value);
	}

function getDetFactura(idFactura){
	
	detFactura = idFactura.split("|");
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
    //se habilitan los campos necesarios
	$("#selectTipoPago1").prop("disabled",false);
	$("#idAut1").prop("disabled",false);
	
	// como se despliega una factura nueva el vueto se pone 0.00
	$('#fvuelto').val(0.00);
	
	// como el valor por defecto es tarjeta de credito en pagoCon1 se pone el monto total de la factura.
	var valFinal = Formatea(detFactura[6]);
		
	$('#fpagaCon1').val(valFinal);
	$("#fsaldoNota1").val(0.00);
	$("#idAut1").val("");
	
	$("#tblPago2").css("display","none");
	$('#fpagaCon2').val(0.00);
	$("#fsaldoNota2").val(0.00);	
	$("#idAut2").val("");
	
	$("#tblPago3").css("display","none");
	$('#fpagaCon3').val(0.00);
	$("#fsaldoNota3").val(0.00);
	$("#idAut3").val("");
	
	$("#tblPago4").css("display","none");
	$('#fpagaCon4').val(0.00);
	$("#fsaldoNota4").val(0.00);
	$("#idAut4").val("");

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
	$("#tblDetFacArti").load("buscarDetFacArti.php", { idFacturaB : detFactura[0] }, function(response,status,xhr){
    });
    // el valor por defecto para el pago de la factura es contarjeta de credito.
    // por eso se lleva al usuario al campo donde debe digita el numero de autorizacion.
    $('#selectTipoPago1').prop('selectedIndex',0);
    // se habilita el campo para que el usuario puedo cambiarlo, en el caso
    // de que la factura se va a cancelar con varios medios de pago.
    $("#fpagaCon1").prop("disabled",false);
    $("#btnElimina").prop("disabled",false);
	$("#idAut1").focus();

}

function Sale(){
	
	window.location="../../home";
		
}



</script>
{/literal}
