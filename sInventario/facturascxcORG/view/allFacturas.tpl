{$NAV_MENU}
	<div class="container-fluid">
		<div class="row-fluid sortable">
			<!-- Inicia Lista de Facturas --> 
			<div class="box span12">
				<div class="box-header well">
					<h2><i class="icon-th"></i>Lista de  Facturas CxC</h2>
					<input type="text"  id="tienda" style="background-color: AliceBlue; margin-left:70px;" name="tienda"   value="{$NOMBRE_TIENDA}">
					<input type="hidden"  id="idtienda"  name="idtienda"   value="{$ID_TIENDA}"><input type="hidden" name="prev_value_imp" id="prev_value_imp" value="0">
					<input type="hidden" name="totalNota" id="totalNota" value="0">
					<input type="hidden" name="totalIVNota" id="totalIVNota" value="0">
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
                                		id="{$LISTA_FACTURAS[lP].idFactura}|{$LISTA_FACTURAS[lP].nombre}|{$LISTA_FACTURAS[lP].userVendedor}|{$LISTA_FACTURAS[lP].subTotal}|{$LISTA_FACTURAS[lP].descuento}|{$LISTA_FACTURAS[lP].impuesto}|{$LISTA_FACTURAS[lP].TotalN}|{$LISTA_FACTURAS[lP].Obs}"
                                		onclick="getDetFactura(this.id)">{$LISTA_FACTURAS[lP].nombre}
                                	</a>
                                </td>
     							<td style="width:40px;  text-align:right">{$LISTA_FACTURAS[lP].idFactura}</td>
     							<td style="width:70px;  text-align:right">{$LISTA_FACTURAS[lP].NumFactura}</td>
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
								<td colspan="2">
								<label style="float: left; width:70; padding-top: 5px; text-align: right;" for="obs">Obs:</label>
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


<!-- DATOS NOTA MODAL -->
<div class="modal fade" id="newNota-modal" tabindex="-1" role="dialog" aria-hidden="true">

    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3 class="modal-title blue"><i class="fa fa-bars"></i> Información Nota</h3>
                <br />
                <p>Complete la siguiente información</p>
            </div>
            <form method="post" id="frmCliente" action="processClient.php" method="post">
            
                <div class="modal-body" id="newNota">
					
					<div class="row-fluid" id="wrkArea">
                    <table class="table table-condensed">
                      <tbody> 

                          <tr>
                              <th>Cliente</th>
                              <td>                                
					<div class="control-group" id="boxnombre">
						<div class="controls">
							<input class="input-xlarge focused" name ="nombre" id="nombre"  type="text" disabled value="{if $ACTION != 1} {$DATA[0].nombre} {else} {$NOMBRE} {/if}">
						</div>
				 	</div>
                              </td>
                          </tr>
                          <tr>
                              <th>Factura</th>
                              <td>                                
					<div class="control-group" id="bnumDocuFact">		
						<div class="controls">
							<input class="input-xlarge focused" name ="numDocuFact" id="numDocuFact"  disabled type="text" value="{if $ACTION != 1} {$DATA[0].numDocuFact} {else} {$NUMDOCUFACT} {/if}">
						</div>
				 	</div>	                              </td>
                          </tr>    
                          <tr>
                              <th>Total</th>
                              <td>
					<div class="control-group" id="boxtotal">
						<div class="controls">
							<input class="input-xlarge focused" name ="total" id="total" style=" text-align:right" disabled type="text" value="{if $ACTION != 1} {$DATA[0].total} {else} {$TOTAL} {/if}">
						</div>
				 	</div>
                              </td>
                          </tr>
                          <tr>
                              <th>Raz&oacute;n Nota</th>
                              <td>
					<div class="control-group" id="boxrazonNota">

						<div class="controls">
							<input class="input-xlarge focused" focus name ="razonNota" id="razonNota"  type="text" maxlength="200" value=" ">
						</div>
				 	</div>					 					 				 					 			
                              </td>
                          </tr>
                          <tr>
                              <th>Clave Vendedor</th>
                              <td>
 					<div class="control-group" id="boxClave">

						<div class="controls">
							<input class="input-xlarge focused" name ="clave" id="clave"  type="password"  value="">
						</div>
				 	</div>		
                              </td>
                          </tr>

                      </tbody>
                    </table> 
                    </div>                   

                </div>
                <div class="modal-footer clearfix">
                    <div id="message-newNota">

                    </div>    
                    <button type="button" class="btn btn-success" id="add-new-nota" name="add-new-nota"><i class="fa fa-check-square-o"></i> Guardar</button>
                </div>
            </form>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->

</div><!-- /.modal -->




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
                    "aaSorting": [[ 2, "desc" ]],
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



function impFactu(idFactura){
	  window.location.href ='ImpreFactura.php?idDoc='+idFactura+'&indTipoDoc='+'F'+'&tiraReimpre=**** Re-impresion ****'; // factura
}

function devolverArti(){
	if (confirm('Esta seguro que desea devolver los articulos?')) {
		// se procede		
		var TableData;
		TableData = leeTabla()
		// ya hay arreglo con los datos a considerar para la devolución
		
		$("#newNota-modal").modal('show');
		
		$("#nombre").val($("#idCliente").val());
		$("#numDocuFact").val("FAC123");
		$("#total").val("25,00.00");
//		TableData = $.toJSON(TableData);
/*
		var properties = {
	            url: "processDevolucion.php",
	            async: true,
	            cache: false,
	            data: "pTableData=" + TableData+"&idFactura="+$("#idfactura").val(),
	            type: "POST",
	            success: function(msg){                
	                //alert(msg);
	                $('.noty').noty({                    
	                    text:msg,
	                    layout:"center",
	                    type:"success",
	                    speed: 500,
	                    animateOpen: {opacity: "show"}                    
	                    
	                });                
	            }
	        };            
	        $.ajax(properties);
	        */
	}
}

function leeTabla()
{
    var TableData = new Array();
    var i=0;
    $totalNota = 0.00;
    $('#tblDetFactura tr').each(function(row, tr){
    	var aRowSel = document.getElementById('selRow' + i);
    alert(i);	
    	if (aRowSel !== null){    		
    		if (aRowSel.checked == true){	
          	  estaSel = 'SI';
          	  $pventaStr = $(tr).find('td:eq(3)').text();
          //	  alert($pventaStr);
          	  $totalNota = $totalNota + parseFloat(pventaStr.replace(",", ""));
          	          	  
      	  	}else {
      		  estaSel = 'NO';
      	  	}	
    	}else{
        	estaSel = 'NO';
    	}
        TableData[row]={
              "NumLinea" 	: $(tr).find('td:eq(0)').text()
            , "CodArti" 	: $(tr).find('td:eq(2)').text()
            , "PrecioVenta" : $(tr).find('td:eq(3)').text()
            , "Cantidad" 	: $(tr).find('td:eq(4)').text()
            , "PorceDesc" 	: $(tr).find('td:eq(5)').text()
            , "PrecioTotal" : $(tr).find('td:eq(6)').text()
            , "EstaSel" 	: estaSel
        }
        i++;    
    });
    $("#total").val($totalNota);
    TableData.shift();  // first row will be empty - so remove
    return TableData;
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
	$("#selectTipoPago").prop("disabled",false);

	
	$('#obs').val(detFactura[7]);
	
	

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
    
	$('#numDocuNotaCr').val(detFactura[9]);
	
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
