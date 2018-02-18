{$NAV_MENU} 
	<div class="container-fluid">
		<div class="row-fluid sortable">
			<!-- Inicia Lista de Facturas -->
			<div class="box span12">
				<div class="box-header well">
					<h2><i class="icon-th"></i>Lista de  Notas de Crédito</h2>
					<input type="text"  id="tienda" style="background-color: AliceBlue; margin-left:70px;" name="tienda"   value="{$NOMBRE_TIENDA}">
					<input type="hidden" id="idtienda" name="idtienda" value="{$ID_TIENDA}">
					<div class="box-icon">
						<a href="javascript:history.go(0)" title="Refrescar la lista de facturas." data-rel="tooltip" class="btn btn-settings btn-round"><i class="icon-refresh"></i></a>
					</div>	
				</div>
				<div class="box-content">
				    <button type="button" class="btn btn-small btn-success" id="addNewNota" onclick="goPage(7,0)" style="margin-bottom:12px;"><i class="icon-plus icon-white"></i> Agregar</button>
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
						{section name=lP loop=$LISTA_NOTASCR}
							<tr style="padding:0px;" id="tr{$LISTA_NOTASCR[lP].idNota}">
					<!-- 		<td>
								  {$LISTA_NOTASCR[lP].idNota}
								</td>
					 -->								
								<td style="width:40px;  text-align:right">
								    <a style="color:#004C66;" href="#" 
                                		id="{$LISTA_NOTASCR[lP].idNota}|{$LISTA_NOTASCR[lP].totalApli}|{$LISTA_NOTASCR[lP].saldoNota}"
                                		onclick="getApliNota(this.id)">{$LISTA_NOTASCR[lP].numDocu}
                                	</a>
								</td>
                                <td style="width:300px; text-align:left"> 
                                	<a style="color:#004C66;" href="#" 
                                		id="{$LISTA_NOTASCR[lP].idNota}|{$LISTA_NOTASCR[lP].totalApli}|{$LISTA_NOTASCR[lP].saldoNota}"
                                		onclick="getApliNota(this.id)">{$LISTA_NOTASCR[lP].nombre}
                                	</a>
                                </td>
     							<td style="width:70px;  text-align:right">{$LISTA_NOTASCR[lP].numDocuFact}</td>
     							<td style="width:250px;">{$LISTA_NOTASCR[lP].fecNota}</td>
     							<td style="width:350px;">{$LISTA_NOTASCR[lP].razonNota}</td>
                                <td style="width:200px; text-align:right">{$LISTA_NOTASCR[lP].total}</td>
                                <td style="width:200px; text-align:right">{$LISTA_NOTASCR[lP].saldoNota}</td>
                                <td>{$LISTA_NOTASCR[lP].estado}</td>
								<td class="center">
										<a href="#" id="{$LISTA_NOTASCR[lP].idNota}|{$LISTA_NOTASCR[lP].totalApli}|{$LISTA_NOTASCR[lP].saldoNota}"  onclick="goPage(6, this.id)" Title="Imprimir Nota"><i class="icon32 icon-color icon-print"></i></a>										
										<a href="#" id="{$LISTA_NOTASCR[lP].idNota}|{$LISTA_NOTASCR[lP].totalApli}|{$LISTA_NOTASCR[lP].saldoNota}"  {if $LISTA_NOTASCR[lP].saldoNota eq "0.00"  or $DEVDINERO_OFF eq "S"} hidden="true"{/if} onclick="goPage(9, this.id)" Title="Devoluci&oacute;n de Dinero"><i class="icon32 icon-black icon-arrowreturn-en"></i></a>										
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

{literal}
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
{/literal}
