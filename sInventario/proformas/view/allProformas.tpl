{$NAV_MENU}
	<div class="container-fluid">
		<div class="row-fluid sortable">
			<!-- Inicia Lista de Facturas -->
			<div class="box span6">
				<div class="box-header well">
				    <input type="hidden" name="id_tienda" id="id_tienda" value="{$ID_TIENDA}">
					<h2><i class="icon-th"></i>Lista de  Proformas</h2>
					<input type="text"  id="tienda" style="background-color: AliceBlue; margin-left:50px;" name="tienda"   value="{$NOMBRE_TIENDA}">
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
						{section name=lP loop=$LISTA_PROFORMAS}
							<tr style="padding:0px;" id="tr{$LISTA_PROFORMAS[lP].idProforma}">
                                <td style="width:385px; text-align:left"> 
                                	<a style="color:#004C66;" href="#" 
                                		id="{$LISTA_PROFORMAS[lP].idProforma}|{$LISTA_PROFORMAS[lP].nombre}|{$LISTA_PROFORMAS[lP].userVendedor}|{$LISTA_PROFORMAS[lP].subTotal}|{$LISTA_PROFORMAS[lP].descuento}|{$LISTA_PROFORMAS[lP].impuesto}|{$LISTA_PROFORMAS[lP].TotalN}"
                                		onclick="getDetProforma(this.id)">{$LISTA_PROFORMAS[lP].nombre}
                                	</a>
                                </td>
     							<td style="width:40px;  text-align:right">{$LISTA_PROFORMAS[lP].numDocu}</td>  
                                <td style="width:385px; text-align:right">{$LISTA_PROFORMAS[lP].Total}</td>
							</tr> 
						{/section}
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
								
								<button type="button" onclick="impProforma();" id="btnImp" class="btn btn-large btn-primary"><i class="icon-print icon-white"></i> Imprimir</button>
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


function numberWithCommas(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}



function impProforma(){
	
  //	window.open('prnData.php?idTienda='+$('#id_tienda').val()+"&idProforma="+$('#idProforma').val(),'_blank');

  //	window.location.href ='ImpreFacPro.php?idDoc='+$('#idProforma').val()+'&indTipoDoc='+'P'; // proforma
	window.location.href ='ImpreProForma.php?idDoc='+$('#idProforma').val()+'&indTipoDoc='+'P'; // proforma

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
	
	$("#btnImp").prop("disabled",false);

}


</script>
{/literal}
