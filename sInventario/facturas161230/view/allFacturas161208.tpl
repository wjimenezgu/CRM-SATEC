{$NAV_MENU}
	<div class="container-fluid">
		<div class="row-fluid sortable">
			<!-- Inicia Lista de Facturas -->
			<div class="box span12">
				<div class="box-header well">
					<h2><i class="icon-th"></i>Lista de  Facturas</h2>
					<input type="text"  id="tienda" style="background-color: AliceBlue; margin-left:70px;" name="tienda"   value="{$NOMBRE_TIENDA}">
					<input type="hidden"  id="idtienda"  name="idtienda"   value="{$ID_TIENDA}">
					<input type="hidden" name="prev_value_imp" id="prev_value_imp" value="0">
					<input type="hidden" name="totalNota" id="totalNota" value="0">
					<input type="hidden" name="totalIVNota" id="totalIVNota" value="0">
					<input type="hidden" name="selArti" id="selArti" value="0">
					<input type="hidden" id="detFactura" value="">
					<input type="hidden" id="fecFactura" value="">
					<input type="hidden" id="fecHoy"     value="{$FECHAHOY}">
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
								<th># Factura</th>
								<th>Fecha</th>
								<th>Monto</th>
								<th>Impresa</th>
								<th>Estado</th>
								<th>Acción</th>
							</tr>
						</thead>
						{section name=lP loop=$LISTA_FACTURAS}
							<tr style="padding:0px;" id="tr{$LISTA_FACTURAS[lP].idFactura}">
                                <td style="width:385px; text-align:left"> 
                                	<a style="color:#004C66;" href="#" 
                                		id="{$LISTA_FACTURAS[lP].idFactura}|{$LISTA_FACTURAS[lP].nombre}|{$LISTA_FACTURAS[lP].userVendedor}|{$LISTA_FACTURAS[lP].subTotal}|{$LISTA_FACTURAS[lP].descuento}|{$LISTA_FACTURAS[lP].impuesto}|{$LISTA_FACTURAS[lP].TotalN}|{$LISTA_FACTURAS[lP].formaPago}|{$LISTA_FACTURAS[lP].autorizacion}|{$LISTA_FACTURAS[lP].numDocu}|{$LISTA_FACTURAS[lP].codTienda}|{$LISTA_FACTURAS[lP].fecFactura}"                                		
                                		onclick="getDetFactura(this.id)">{$LISTA_FACTURAS[lP].nombre}
                                	</a>
                                </td>
     							<td style="width:40px;  text-align:right">{$LISTA_FACTURAS[lP].idFactura}</td>
     							<td style="width:70px;  text-align:right">{$LISTA_FACTURAS[lP].numDocu}</td>
     							<td style="width:150px;">{$LISTA_FACTURAS[lP].fecFactura}</td>
                                <td style="width:385px; text-align:right">{$LISTA_FACTURAS[lP].Total}</td>
                                <td>{$LISTA_FACTURAS[lP].estadoImp}</td>
                                <td>{$LISTA_FACTURAS[lP].Estado}</td>
                                <td class="center">
									<a href="#" id="{$LISTA_FACTURAS[lP].idFactura}|{$LISTA_FACTURAS[lP].numDocu}|{$LISTA_FACTURAS[lP].Total}|{$LISTA_FACTURAS[lP].nombre}|{$ID_TIENDA}" {IF $LISTA_FACTURAS[lP].Estado == 'ANULADA' || $LISTA_FACTURAS[lP].estadoImp == 'N'}hidden='true'{/if} Title="Anular Factura" onclick="goPage(1, this.id)"><i class="icon icon-color icon-cancel"></i></a>
									<a href="#"  id="{$LISTA_FACTURAS[lP].idFactura}" {IF $LISTA_FACTURAS[lP].Estado == 'ANULADA' || $LISTA_FACTURAS[lP].estadoImp == 'N'}hidden='true'{/if} Title="Re-imprimir Factura" onclick="impFactu(this.id);"><i class="icon icon-color icon-print"></i></a>
								</td>
                                
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
			<div class="box span12">
				<div class="box-header well">
					<h2><i class="icon-th"></i>Detalle Factura</h2>
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
                                        <th style="text-align:center;"> Seleccionar</th>
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
											<a class="btn btn-warning" href="#" id="btnDevolver" name="btnDevolver" title="Devolver" data-rel="tooltip" onclick="devolverArti()">Devolver</a>      										
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
								<td>
								<label style="float: left; width:70; padding-top: 5px; text-align: right;" for="formaPago">Forma Pago</label>
								<div class="controls">
								  <input class="input-mini uneditable-input" style="margin-left: -75px; width:100px; " readonly id="formaPago" name="formaPago" type="text" value="Forma de Pago">
								</div>								
								</td>
								
								<td> 
								<label style="float: left; width:70; padding-top: 5px; text-align: right;" for="autorizacion">Aut/Chk#</label>
								<div class="controls">
								  <input class="input-mini uneditable-input" style="margin-left: -95px; width:150px; " readonly id="autorizacion" name="autorizacion" type="text" value="Aut/Chk">
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
			<!-- Inicia Detalle formasa de Pago de la factura                 -->
			<!-- ************************************************************ -->
			<div class="box span12">
				<div class="box-header well">
					<h2><i class="icon-th"></i>Detalle Formas Pago</h2>
				</div>
				<div class="box-content">
					<form class="form-horizontal">
						<fieldset>
							<div class="row-fluid" id="detFacturaPagos">
							<div class="span12">
								<table class="table table-bordered table-striped" id="tblDetPagos">
                            	<thead>
                                	<tr>
                                    	<th>#</th>
                                    	<th>#Documento</th>
                                        <th>Forma Pago</th>
                                        <th>Monto Pago</th>
                                    </tr>
                                </thead>
                                <tbody id="tblApliPagos">
                                </tbody>
								</table>
							</div> <!-- span12 -->
							</div> <!-- row-fluid det pagos-->					
						</fieldset>					
					</form>				
				</div> <!-- box-content -->
			</div> <!-- box span12-->
			<!-- Finaliza Detalle Factura formas pago facturas -->							
		</div><!--/row-fluid sortable -->
	</div> <!-- container-fluid -->

{literal} 
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


var $tiraArti;
$tiraArti = "";


function impFactu(idFactura){
	  window.location.href ='ImpreFactura.php?idDoc='+idFactura+'&indTipoDoc='+'F'+'&tiraReimpre=**** Re-impresion ****'; // factura
}

function devolverArti(){
	if (confirm('Esta seguro que desea devolver los articulos?')) {

		leeTabla();

		if ($("#selArti").val() == "1"){
	//	alert($("#detFactura").val());
	        // si la factura es del mismo dia, NO SE PERMITE DEVOLUCION PARCIAL.	        
	        if ($('#fecFactura').val() != $('#fecHoy').val()){
				var detFactura = $("#detFactura").val().split("|");	
				window.location.href ='../notascr/NotaCr.php?action=1'+"&id="+detFactura[0]+"&numDocuFact="+detFactura[9]+"&total="+$("#totalNota").val()+"&nombre="+detFactura[1]+"&idTienda="+detFactura[10]+"&tiraArti="+$tiraArti+"&totalivnota="+$("#totalIVNota").val();
		     }else{
	        	alert('Factura es de Hoy. No permite hacer devolucion parcial. Proceda Anular Toda la Factura.');		
	        }
			
		}else{
			alert('No hay acticulos seleccionados.');			
		}	
	}
}

function leeTabla()
{

    var i=0;
    var totalNota = 0.00;
    var timpventa = 0.00;
    var subtotal = 0.00;
    var totalIVNota = 0.00;
    
    $("#selArti").val("0");
    $tiraArti = "";
    $coma="";
  
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
        	totalNota = totalNota + parseFloat($ptotalStr.replace(/,/g, ''));    
        	$tiraArti = $tiraArti + $coma + document.getElementById('codRow' + i).innerHTML;
			$coma = ',';   
    	}
        i++;    
    });
    

    
    
    subtotal  = parseFloat($("#fsubtotal").val()).toFixed(2);
   
    timpventa = parseFloat($("#fimpuesto").val()).toFixed(2);
 
    totalIVNota = (totalNota / subtotal) * timpventa;
    
    totalIVNota = round5B(totalNota + totalIVNota) - totalNota; 
    totalNota = totalNota + totalIVNota;

    $("#totalIVNota").val(parseFloat(totalIVNota).toFixed(2));
    $("#totalNota").val(totalNota.toFixed(2));
}

function round5B(x)
{
	if($("#noredondeo").is(":checked")){
		return x;
	}else{
    	return Math.ceil(Number(x).toFixed(2)/5)*5;
	}
}

function getDetFactura(idFactura){
	
	
	$("#detFactura").val(idFactura);
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

	$('#fpagaCon').val(detFactura[6]);
	
	$('#formaPago').val(detFactura[7]);
	
	$('#autorizacion').val(detFactura[8]);
    
	$('#numDocuNotaCr').val(detFactura[9]);

	// fecha de la factura que viene en formato dd/mm/yyyy h:m:s
	var str = detFactura[11];
    var res = str.substring(0, 10);
	$('#fecFactura').val(res);
	
	//ahora se cargan la lista de articulos
	$("#tblDetFacArti").load("buscarDetFacArti.php", { idFacturaB : detFactura[0] }, function(response,status,xhr){
    });
	
	// ahora se cargas las diferentes formas de pago que se utilizaron para cancelar la factura.
	$("#tblApliPagos").load("buscarDetFacPagos.php", { idFacturaB : detFactura[0] }, function(response,status,xhr){		
    });

}

function goPage(action, id){
	
	if (action == 1){
	// anular y el id trae varios datos.	
		var detFactura = id.split("|");
		window.location.href ='../notascr/NotaCr.php?action='+action+"&id="+detFactura[0]+"&numDocuFact="+detFactura[1]+"&total="+detFactura[2]+"&nombre="+detFactura[3]+"&idTienda="+detFactura[4];
	}else{
		if (action == 7){
			// RE-imprimir la factura
			window.open('../cobrar/imprimir.php?factura='+id+'&tiraReimpre=**** Re-impresión ****','_blank');
		}
	}
}


</script>
{/literal}
