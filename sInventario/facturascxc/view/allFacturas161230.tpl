{$NAV_MENU}
	<div class="container-fluid">
		<div class="row-fluid sortable">
			<!-- Inicia Lista de Facturas --> 
			<div class="box span12">
				<div class="box-header well">
					<h2><i class="icon-th"></i>Lista de  Facturas CxC</h2>
					<div class="vendedorvalido"  id="0"></div>
					<input type="text"  id="tienda" style="background-color: AliceBlue; margin-left:70px;" name="tienda"   value="{$NOMBRE_TIENDA}">
					<input type="hidden"  id="idtienda"  name="idtienda"   value="{$ID_TIENDA}"><input type="hidden" name="prev_value_imp" id="prev_value_imp" value="0">
					<input type="hidden" name="totalNota" id="totalNota" value="0">
					<input type="hidden" name="totalIVNota" id="totalIVNota" value="0">
					<input type="hidden" name="totalDesc" id="totalDesc" value="0">
					<input type="hidden" name="selArti" id="selArti" value="0">
					<input type="hidden" id="detFactura" value="">
					<input type="hidden" id="tipoAnulacion"  value=""> <!-- F: ANULA FACTURA, A: DEVOLUCION ARTICULOS -->
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
                                		id="{$LISTA_FACTURAS[lP].idFactura}|{$LISTA_FACTURAS[lP].nombre}|{$LISTA_FACTURAS[lP].userVendedor}|{$LISTA_FACTURAS[lP].subTotal}|{$LISTA_FACTURAS[lP].descuento}|{$LISTA_FACTURAS[lP].impuesto}|{$LISTA_FACTURAS[lP].TotalN}|{$LISTA_FACTURAS[lP].Obs}|{$LISTA_FACTURAS[lP].Estado}|{$LISTA_FACTURAS[lP].estadoImp}|{$LISTA_FACTURAS[lP].NumFactura}"
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
									<a href="#" id="{$LISTA_FACTURAS[lP].idFactura}|{$LISTA_FACTURAS[lP].userVendedor}|{$ID_TIENDA}|{$LISTA_FACTURAS[lP].NumFactura}" {IF $LISTA_FACTURAS[lP].Estado == 'ANULADA' || $LISTA_FACTURAS[lP].estadoImp == 'N'}hidden='true'{/if} Title="Anular Factura" onclick="goPage(1, this.id)"><i class="icon icon-color icon-cancel"></i></a>		
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
					<h2><i class="icon-th"></i>Detalle Datos Gobierno (Cuando Aplica)</h2>
				</div>
				<div class="box-content">
					<form class="form-horizontal">
						<fieldset>
							<div class="row-fluid" id="detGob">
							<div class="span12">
								<table class="table table-bordered table-striped" id="tblDetFactGob">
                            	<thead>
                                	<tr>
                                    	<th>Pos.Presup.</th>
                                    	<th>Fondo</th>
                                        <th>Area Funcional</th>
                                        <th>Solicitud Pedido</th>
                                        <th>Tramite Compra</th>                                        
                                    </tr>
                                </thead>
                                <tbody id="tblDetGob">

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
            <form id="frmNewNota">
            
                <div class="modal-body" id="newNota">
					
					<div class="row-fluid" id="wrkArea">
                    <table class="table table-condensed">
                      <tbody> 
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
                    <button type="button" class="btn btn-success" id="add-new-nota" name="add-new-nota"><i class="fa fa-check-square-o"></i> Anular</button>
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

var $tiraArti;
$tiraArti = "";

function devolverArti(){
	if (confirm('Esta seguro que desea devolver los articulos?')) {		
		$("#tipoAnulacion").val('A'); // indica devolucion de articulos		
		// se procede		
		var TableData;
		TableData = leeTabla()	
		TableData = $.toJSON(TableData);

		// se verifica que el usuario haya seleccionado articulos
		if ($("#selArti").val() == "1"){					
			// ya hay arreglo con los datos a considerar para la devolución	
			var detFactura = $("#detFactura").val().split("|");	
			$("#newNota-modal").modal('show');		
			$("#razonNota").val('');
			$("#clave").val('');
			$("#numDocuFact").val(detFactura[10]); // numero de factura
			$("#razonNota").focus();
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
    var tdescuento = 0.00;
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
    		
    		$pventaStr = document.getElementById('pventaRow' + i).innerHTML;
    		$porceDescStr = document.getElementById('pdescRow' + i).innerHTML;    		    	
    		tdescuento = tdescuento + 
    		             (
    		               parseFloat($pventaStr.replace(/,/g, '')) * 
    		               (parseInt($porceDescStr)/ 100.00 )
    		             );
    		$ptotalStr = document.getElementById('ptotalRow' + i).innerHTML;
    //		alert($ptotalStr);
        	totalNota = totalNota + parseFloat($ptotalStr.replace(/,/g, ''));    
        	$tiraArti = $tiraArti + $coma + document.getElementById('codRow' + i).innerHTML;
			$coma = ',';   
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
    $("#totalDesc").val(tdescuento.toFixed(2));
    
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
    //se habilitan los campos necesarios
		
	$('#obs').val(detFactura[7]);
	
    	
	//ahora se cargan la lista de articulos
	$("#tblDetFacArti").load("buscarDetFacArti.php", { idFacturaB : detFactura[0] }, function(response,status,xhr){
    });
	
	// ahora se cargas las diferentes formas de pago que se utilizaron para cancelar la factura.
	$("#tblDetGob").load("buscarDetGob.php", { idFacturaB : detFactura[0] }, function(response,status,xhr){		
    });

	// si la factura esta anulada, el boton para devolver articulos no tiene sentido
	//
	if ((detFactura[8]=="ANULADA") || (detFactura[9]=="N")){
		
		$("#btnDevolver").css("display","none");
	
	}else{
		
		$("#btnDevolver").css("display","block");
	}
	
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

function validaClaveVendedor(claveVendedor){
	
	$.ajax({
        type: "POST",
        url: "ValidaClaveVendedor.php",
        async: false,
        dataType : "text",
        data: "fClaveVendedor="+claveVendedor,
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
}

$("#add-new-nota").click(function(e){

 	e.preventDefault();
 	var errors      = false;
 	
 	errors = validaDatosNota();
 	
 	// se valida ahora la clave del vendedor
 	if(!errors){ 
 		var strClVendedor = "";
 	 	strClVendedor = $.trim($("#clave").val());
 		validaClaveVendedor(strClVendedor);
 		 		
    	if ($(".vendedorvalido").attr("id") == "1" ){
    		
    		// los datos de la nota y el vendedor son validos. 
    		// ahora que determinar si es una anulacion de factura o una devolucion parcial de
    		// articulos para saber a cual programa llamar
    		
	    	if ($("#tipoAnulacion").val() == "F"){
	    			// ES UNA ANULACION DE FACTURA    		
		    		var detFactura = $("#detFactura").val().split("|");	
		    		
		    		// todo esta ok para hacer la anulacion de la factura.
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
		            				// se regresa a la pantalla de revisar facturas
		            				alert('Operacion Exitosa');
		            				window.location.href = '../notascrcxc/index.php';                				     
		            			}
		            		}, // success,
		  					error: function(jqXHR,textStatus,errorThrown){
		  						 	var err = eval("(" + jqXHR.responseText + ")");
		  						  	alert('Error al Anular Factura '+err.Message);      						
		  							}
		        		}; // var properties            
		  				$.ajax(properties);
	    		
	    	};
	    	if ($("#tipoAnulacion").val() == "A"){
	    			   
    			// ES UNA DEVOLUCION PARCIAL DE ARTICULOS	
    				var properties = {
    			            url: "processDevolucion.php",
    			            async: false,
    			            cache: false,
    			            data: "pTableData=" + $tiraArti+"&idFactura="+$("#idFactura").val()+"&totalNota="+$("#totalNota").val()+"&totalivnota="+$("#totalIVNota").val()+"&totaldesc="+$("#totalDesc").val()+"&userVendedor="+$('#idVendedor').val()+"&idTienda="+$('#idtienda').val()+"&razon="+$("#razonNota").val(),
    			            type: "GET",
    			            success: function(msg){                
    			                alert(msg);
    			             	// se regresa a la pantalla de revisar facturas
	            				window.location.href = 'index.php';   
    			            },
    			            error: function(jqXHR,textStatus,errorThrown){
	  						 	var err = eval("(" + jqXHR.responseText + ")");
	  						  	alert('Error al Devolver Articulos '+err.Message);      						
	  							}
    			        };            
    			        $.ajax(properties);  			
    		}
    		
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
		$("#tipoAnulacion").val('F'); // indica ANULACION DE TODA LA FACTURA		
		// anular y el id trae varios datos de la factura separados por |.
		// si la factura es del mismo dia, no se debe generar una nota.
		var detFactura = id.split("|");	
		$("#detFactura").val(id);
		$("#newNota-modal").modal('show');		
		$("#razonNota").val('');
		$("#clave").val('');
		$("#numDocuFact").val(detFactura[3]); // numero de factura
		$("#razonNota").focus();										
	}	
}


</script>
{/literal}
