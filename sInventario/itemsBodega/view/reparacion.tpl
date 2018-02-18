{$NAV_MENU}
	<div class="row-fluid sortable">
		<div class="box span12">
			<div class="box-header well" data-original-title>
				<h2>Información de Reparación</h2>
				<input type="text" class="pull-right" id="tienda" style="background-color: AliceBlue;" name="tienda"   value="{$NOMBRE_TIENDA}">
			</div>
			<div id="message-fields" style='alignment-adjust:  central;'></div>
			<div class="box-content">
				<form class="form-horizontal" id="frmReparacion" action="procesaReparacion.php" method="POST">
					<input type="hidden" id="action" name="action" value="{$ACTION}">
					<input type="hidden" name="id_tienda" id="id_tienda" value="{$ID_TIENDA}">
					<input type="hidden" name="insEveFinRepara" id="insEveFinRepara" value="">											
 			 	<fieldset>
 			 	    <table>
						<tbody>
							<td>
					<div class="control-group" id="boxId" >
						<label class="control-label" for="disabledInput">Id*</label>
						<div class="controls">
							<input class="input-xlarge " name="fIdReparacion" id="fIdReparacion" type="text" placeholder="{$ID_REPARACION}" value="{$ID_REPARACION}" readonly="true">
						</div>
					</div>
					</td>
					<td>
						<div class="control-group" id="boxVendedor" >
							<label class="control-label" for="focusedInput">Vendedor</label>
							<div class="controls">
								<input class="input-small focused" name ="fVendedor" id="fVendedor" type="text" value=" ">
							</div>
				 		</div>					
					</td>
					<td>
					<div class="control-group" id="boxClaveVendedor" >
							<label class="control-label" for="focusedInput">Clave</label>
							<div class="controls">
							   <div class="vendedorvalido" id="0"></div>
								<input class="input-small focused" name ="fClaveVendedor" id="fClaveVendedor" type="password" value="">
							</div>
				 		</div>
					</td>
					<td>
						<button type="button" class="btn btn-warning" id="btnValidaVendedor" name="btnValidaVendedor" style="margin-top: -20px;">Validar</button>
					</td>
					</tbody>
					</table>
			<!-- 		<div class="control-group" id="boxFechaRecibido" >
						<label class="control-label" for="focusedInput">Fecha Recibe*</label>
						<div class="controls">
							<input class="input-xlarge datepicker focused" name ="fFechaRecibido" id="fFechaRecibido"  type="text" value="{$REPARACION[0].FechaRecibido}">
						</div>
				 	</div>	  -->								
					<div class="control-group" id="boxEquipo" >
						<label class="control-label" for="focusedInput">Equipo*</label>
						<div class="controls">
							<input class="input-xlarge focused" name ="fEquipo" id="fEquipo" maxlength="100" type="text" value="{$REPARACION[0].Equipo}">
						</div>
				 	</div>	
					<div class="control-group" id="boxModelo" >
						<label class="control-label" for="focusedInput">Modelo*</label>
						<div class="controls">
							<input class="input-xlarge focused" name ="fModelo" id="fModelo" maxlength="50" type="text" value="{$REPARACION[0].Modelo}">
						</div>
				 	</div>
					<div class="control-group" id="boxMarca" >
						<label class="control-label" for="focusedInput">Marca*</label>
						<div class="controls">
							<input class="input-xlarge focused" name ="fMarca" id="fMarca" maxlength="50" type="text" value="{$REPARACION[0].Marca}">
						</div>
				 	</div>
					<div class="control-group" id="boxSerie" >
						<label class="control-label" for="focusedInput">Serie*</label>
						<div class="controls">
							<input class="input-xlarge focused" name ="fSerie" id="fSerie" maxlength="50" type="text" value="{$REPARACION[0].Serie}">
						</div>
				 	</div>
					<div class="control-group" id="boxAccesorios" >
						<label class="control-label" for="focusedInput">Accesorios*</label>
						<div class="controls">
							<input class="input-xlarge focused" name ="fAccesorio" id="fAccesorio" maxlength="100" type="text" value="{$REPARACION[0].Accesorios}">
						</div>
				 	</div>				 	
					<div class="control-group" id="boxProblema" >
						<label class="control-label" for="focusedInput">Daño/Problema*</label>
						<div class="controls">
							<input class="input-xlarge focused" name ="fProblema" id="fProblema" maxlength="300" type="text" value="{$REPARACION[0].Problema}">
						</div>
				 	</div>
					<div class="control-group" id="boxObs" >
						<label class="control-label" for="focusedInput">Observaciones</label>
						<div class="controls">
							<input class="input-xlarge focused" name ="fObs" id="fObs" maxlength="300" type="text" value="{$REPARACION[0].Obs}">
						</div>
				 	</div>
				 	<table>
						<tbody>
							<td>
                    			<div class="control-group" id="boxSelCliente">
									<label class="control-label" for="selectCliente">Cliente*</label>
									<div class="controls">
						    			<select data-placeholder="Ingrese Cliente" style="width: 450px;" id="selectCliente"    name ="selectCliente" data-rel="chosen">
                            				<option value="0"></option>
                            				{section name=lP loop=$LISTA_CLIENTES}
                                				<option value="{$LISTA_CLIENTES[lP].id}|{$LISTA_CLIENTES[lP].nombre}|{$LISTA_CLIENTES[lP].correoElectronico}|{$LISTA_CLIENTES[lP].telefono}|{$LISTA_CLIENTES[lP].nombreContacto}" {if $LISTA_CLIENTES[lP].id eq $REPARACION[0].idCliente} selected{/if}>{$LISTA_CLIENTES[lP].nombre} | {$LISTA_CLIENTES[lP].correoElectronico} | {$LISTA_CLIENTES[lP].telefono} | {$LISTA_CLIENTES[lP].nombreContacto}</option>
                            				{/section}
                        				</select>
                        			</div>
                    			</div> 
                    		</td>
                    		<td>
								<button id=btnaddCliente type="button" name="btnaddCliente" onclick="openModalCliente('I');"class="btn btn-medium btn-success pull-right" style="margin-top:-15px">Agregar Cliente</button>
							</td>
							<td>
								<button id=btnupdCliente type="button" name="btnupdCliente" onclick="openModalCliente('U');"class="btn btn-medium btn-info pull-right" style="margin-top:-15px">Actualizar Cliente</button>
							</td>

						</tbody>
					</table>
					<table>
						<td>
                    		<div class="control-group" id="boxGarantia">
								<label class="control-label" for="selectGarantia">Garantía</label>
								<div class="controls">
									<select id="selectGarantia" name ="selectGarantia" style="width: 275px;">
                            			<option value="NO" {if $REPARACION[0].Garantia eq "N"} selected{/if}>No</option>
                            			<option value="SI" {if $REPARACION[0].Garantia eq "S"} selected{/if}>Si</option>
                        			</select>
                        		</div>
                    		</div>
                    	</td>
                    	<td>
                    		<div class="control-group" id="boxNumFactura" >
								<label class="control-label" for="focusedInput">Factura</label>
								<div class="controls">
									<input class="input-xlarge focused" name ="fNumFactura" id="fNumFactura" maxlength="15" type="text" value="{$REPARACION[0].FacGarantia}">
								</div>
				 			</div>
                    	</td>
                    </table> 
					<table>
					<td>
					<div class="control-group" id="boxAdelanto" >
						<label class="control-label" for="focusedInput">Adelanto</label>
						<div class="controls">
							<input class="input-xlarge focused" name ="fAdelanto" id="fAdelanto" type="text" value="{$REPARACION[0].Adelanto}" style="text-align: right;">
						</div>
				 	</div>
				 	</td>
				 	    <td>
                    		<div class="control-group" id="boxNumFacAdelanto" >
								<label class="control-label" for="focusedInput">Factura Adelanto</label>
								<div class="controls">
									<input class="input-xlarge focused" name ="fNumFacAdelanto" id="fNumFacAdelanto" maxlength="15" disabled type="text" value="{$REPARACION[0].NumFacAdelanto}">
								</div>
				 			</div>
                    	</td>	
					</table>
					<div class="control-group" id="boxManoDeObra" >
						<label class="control-label" for="focusedInput">Mano de Obra</label>
						<div class="controls">
							<input class="input-xlarge focused" name ="fManoDeObra" id="fManoDeObra" type="text" value="{$REPARACION[0].ManoDeObra}" style="text-align: right;">
						</div>
				 	</div>	
				 	<table>
						<tbody>
							<td>
                    		<div class="control-group "  id="boxFinRepa" >
								<label class="control-label" for="selectFinRepa">Finaliza Reparación</label>
								<div class="controls">
									<select id="selectFinRepa" name ="selectFinRepa" style="width: 275px;" {if $TOTREPA_OFF eq "S"} disabled{/if}>
                            			<option value="SI" {if $REPARACION[0].Estado == "Reparada" || $REPARACION[0].Estado == "Cerrada"} selected{/if}>Si</option>									
                            			<option value="NO" {if $REPARACION[0].Estado == "Activa"} selected{/if}>No</option>
                        			</select>
                        		</div>
                    		</div>
                    	</td>				 	
				 	</td>
							<td style="width:150px;text-align:left">
					<div class="control-group" id="boxTotalReparacion" >
						<label class="control-label" style="text-align:left" for="focusedInput">Total Reparación</label>
						<div class="controls">
							<input class="input-xlarge focused" name ="fTotalReparacion" id="fTotalReparacion" type="text" value="{$REPARACION[0].TotalReparacion}" style="text-align: right;width: 100px;margin-left:-50px" {if $TOTREPA_OFF eq "S"} readonly{/if}>
						</div>
				 	</div>
				 	</td>
				 	                    	<td style="width:150px;text-align:left">
                    		<div class="control-group" id="boxNumFacturaRepa" >
								<label class="control-label" style="text-align:left" for="focusedInput">Factura</label>
								<div class="controls">
									<input class="input-xlarge focused" disabled name ="fNumFacturaRepa" id="fNumFacturaRepa" style="width: 100px; margin-left:-100px" maxlength="15" type="text" value="{$REPARACION[0].numDocu}">
								</div>
				 			</div>
                    	</td>

				 	</tbody>
				 	</table>	
				 					 					 					 				 			
 					<div class="modal-footer">
						<button id=btnSubmit type="submit" name="btnSubmit" class="btn btn-large btn-primary pull-right">{$BTN_ACTION}</button>
						<a href="index.php" class="btn btn-large pull-right" data-dismiss="modal">Cerrar</a>
						<div id="message-fields-obl"></div> 
					</div> 					
				</fieldset>
		  		</form>			
		    </div>	<!-- ass="box-conten -->			
		</div>	<!-- class="box span1 -->	
	</div> <!-- lass="row-fluid sortab -->
	
<!-- NEW CLIENT MESSAGE MODAL -->
<div class="modal fade" id="newClient-modal" tabindex="-1" role="dialog" aria-hidden="true">

    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3 class="modal-title blue"><i class="fa fa-bars"></i> Información Cliente</h3>
                <br />
                <p>Complete la siguiente información</p>
            </div>
            <form method="post" id="frmCliente" action="processClient.php" method="post">
                <input type="hidden"  id="fVendedorC" name="fVendedorC" value="">
                <div class="modal-body" id="newClient">
					<div class="clienteId" id="0"></div>
					<div class="row-fluid" id="wrkArea">
                    <table class="table table-condensed">
                      <tbody> 

                          <tr>
                              <th>Nombre</th>
                              <td>                                
                                <div class="pull-left control-group" id="input-new-Nombre" style="margin-right:3px; width:70%;">
                                    <input type="text" class="input-block-level input-xlarge"  id="new-Nombre" name="new-Nombre" maxlength="100" value="" placeholder="Nombre Cliente">
                                </div>                                  
                              </td>
                          </tr>
                          <tr>
                              <th>Nombre Contacto</th>
                              <td>                                
                                <div class="pull-left control-group" id="input-new-Contacto" style="margin-right:3px; width:70%;">
                                    <input type="text" class="input-block-level input-xlarge"  id="new-NombreContacto" name="new-NombreContacto" maxlength="100" value="" placeholder="Contacto en Caso de Compañías">
                                </div>                                  
                              </td>
                          </tr>                          
                          <tr>
                              <th>Teléfono</th>
                              <td>
                                  <div class="pull-left control-group" id="input-new-Telefono" style="margin-right:3px; width:70%;">
                                      <input type="text" class="input-block-level" id="new-Telefono" name="new-Telefono" placeholder="Telefono" maxlength="50" value="">
                                  </div>
                              </td>
                          </tr>                          
                          <tr>
                              <th>Correo</th>
                              <td>
                                  <div class="pull-left control-group" id="input-new-Correo" style="margin-right:3px; width:70%;">
                                    <input type="text" class="input-block-level" id="new-Correo" name="new-Correo" maxlength="100" value="" placeholder="Correo Electronico">
                                  </div>
                              </td>
                          </tr>
                      </tbody>
                    </table> 
                    </div>                   

                </div>
                <div class="modal-footer clearfix">
                    <div id="message-newClient">

                    </div>    
                    <button type="button" class="btn btn-success" id="add-new-client" name="add-new-client"><i class="fa fa-check-square-o"></i> Guardar</button>
                </div>
            </form>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->

</div><!-- /.modal -->
	
{literal}
<script type="text/javascript">
$(document).ready(function(){
    $('.datepicker').datepicker({
        language: "es",
        format:"dd/mm/yyyy",
        todayHighlight: true,
        autoclose: true
        //,           
        //startDate: new Date()
     });        
    
    $("#fAdelanto").number(true,2);
    $("#fManoDeObra").number(true,2);
    $("#fTotalReparacion").number(true,2);
	// Si la action es igual a 3 significa que es un borrado
	// se buscar desabilitar todos los campos y que solo pueda seleccionar los botones de accion.
	var newAction = document.getElementById('action'); 
	if (newAction.value == "3" || newAction.value == "4"){
		$("#frmReparacion :input").attr('readonly', true);
		$("#selectCliente").prop('disabled', true);
		$("#btnaddCliente").css("display","none");
		$("#btnupdCliente").css("display","none");
		$("#boxVendedor").css("display","none");
		$("#boxClaveVendedor").css("display","none");
		$("#btnValidaVendedor").css("display","none");
		if (newAction.value == "4"){
			$("#btnSubmit").css("display","none");
		}
	}else{
		if (newAction.value == "1"){
			// es una insercion
			$("#selectFinRepa").val("NO");
			$("#boxNumFacturaRepa").css("display","none");
			$("#boxTotalReparacion").css("display","none");
			$("#boxNumFacAdelanto").css("display","none");
			$("#boxNumFactura").css("display","none");			
			$("#fVendedor").focus();
		}else{
			$("#insEveFinRepara").val("0");
		    if ($("#selectGarantia").val() =="NO"){
		    	$("#boxNumFactura").css("display","none");
		    }
		    if($("#selectFinRepa").val()== "NO"){
		    	
		        $("#boxTotalReparacion").css("display","none");
		        $("#boxNumFacturaRepa").css("display","none");
		        
		    }
		    /*
		    else{
		      // ya esta reparada no se puede cambiar
		        $("#selectFinRepa").val("SI");
		    	$("#selectFinRepa").prop('disabled', true);
		    	$("#boxNumFacturaRepa").prop('disabled', true);
		    	$("#fTotalReparacion").prop('disabled', true);
		    	
		    }
		    */
		    if ($("#fNumFacAdelanto").val() !=""){
		    	//ya se facturo el adelanto se deshabilita el campo monto del adelanto
		    	$("#fAdelanto").prop('readonly', true);
		    }else{
		    	//no se ha facturado el adelanto
		    	$("#boxNumFacAdelanto").css("display","none");
		    }
		    $("#btnSubmit").prop('disabled', true); 
		    $("#btnaddCliente").prop('disabled', true); 
		    $("#btnupdCliente").prop('disabled', true); 						
		}
	}    
    
    		
	$("#selectGarantia").on("change", function(e){
	    e.preventDefault();
	    var vGarantia = $("#selectGarantia").val();
	    if (vGarantia == "SI"){
	    	$("#boxNumFactura").css("display","block");
	    }else{
	    	$("#fNumFactura").val("");
	        $("#boxNumFactura").css("display","none");
	    }
	});
	
    $("#selectCliente").on("change", function (e){
        e.preventDefault();
        $("#boxSelCliente").removeClass("error");
        $("#btnupdCliente").prop("disabled",false);       
    });
    
	$("#selectFinRepa").on("change", function(e){
	    e.preventDefault();
	    var vFinRepa = $("#selectFinRepa").val();
	    if (vFinRepa == "SI"){
	    	$("#boxTotalReparacion").css("display","block");	    	
	    	$("#fTotalReparacion").focus();
	    	$vActual = $("#insEveFinRepara").val() + 1;
	    	$("#insEveFinRepara").val($vActual);
	    }else{
	    	$("#fTotalReparacion").val("0.00");
	        $("#boxTotalReparacion").css("display","none");
	        $("#boxNumFacturaRepa").css("display","none");
	        $vActual = $("#insEveFinRepara").val() - 1;
	        $("#insEveFinRepara").val($vActual);
	    }
	});
	
});
function verVendor(){   

	var user = $("#fVendedor").val();
    var pass = $("#fClaveVendedor").val();
    user = user.trim();
    pass = pass.trim();
    var vendedorValido = false;
    var vendedorLista ="";
    var claveVendedor ="";
    
    document.getElementById('message-fields').innerHTML = "";
    if (user == ""){
    	document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Campo Vendedor en Blanco.</strong></div>";
    	$("#fVendedor").focus();
    	return;
    }
    if (pass == ""){
    	document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Campo Clave en Blanco.</strong></div>";
    	$("#fClaveVendedor").focus();
    	return;
    }
    
    
    // se valida el codigo de vendedor y la clave
      	$.ajax({
        type: "POST",
        url: "ValidaVendedor.php",
        async: false,
        dataType : "text",
        data: "fVendedor="+user+"&fClaveVendedor="+pass,
       	success: function(data2,strMsg){
       		var vdata2 = parseInt(data2); 
       		if ( vdata2 == 1) {
       			$(".vendedorvalido").attr("id", "1");	
       			//alert('true'+data2);
       			vendedorValido = true;

       		}
       		else {
       			//alert('false'+data2);
       			$(".vendedorvalido").attr("id", "0");
				vendedorValido = false;

			}
        },
        error: function(jqXHR,textStatus,errorThrown){
            alert('Error al validar Vendedor '+errorThrown);
        }
    });
 
//alert ('valido'+$(".vendedorvalido").attr("id"));
    if ($(".vendedorvalido").attr("id") == "1" ){ 
    //if (vendedorValido=true){
       $("#btnSubmit").prop('disabled', false);
       $("#btnaddCliente").prop('disabled', false); 
       $("#btnupdCliente").prop('disabled', false); 
       $("#fEquipo").focus();
    }else{
       document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Vendedor y/o contraseña incorrectos</strong></div>";
       
       $("#fVendedor").val("");
       $("#fClaveVendedor").val("");
       $("#fVendedor").focus();              	
    };               
	} // function verVendedor




	
	//Abre el Modal donde se agregará un cliente    
	function openModalCliente(TipoOperacion){
    if (($("#fVendedor").val()!="")&&($("#fClaveVendedor").val()!="")) {
    	//document.getElementById('message-fields').innerHTML = "";    
    	$("#newClient-modal").modal('show');
    	$("#fVendedorC").val($("#fVendedor").val());
   		if (TipoOperacion=='U') {
        	// si es un Update se carga los datos del cliente actual
        	// en caso de ser una Insercion los campos estan en blanco.
			var clienteSelect = $("#selectCliente").val();
			var cliente = clienteSelect.split("|")
			$(".clienteId").attr("id", cliente[0]);	
    		$("#new-Nombre").val(cliente[1]);
    		$("#new-Correo").val(cliente[2]);
    		$("#new-Telefono").val(cliente[3]);
    		$("#new-NombreContacto").val(cliente[4]);
   		}else{
    		$(".clienteId").attr("id", "0");
    		$("#new-Nombre").val("");
    		$("#new-Correo").val("");
    		$("#new-Telefono").val("");
    		$("#new-NombreContacto").val("");
    	};
    }else{
    	document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Vendedor es requerido.</strong></div>";            
    };     
}// function openModalCliente


$(function(){

    
    $.validator.addMethod("notEqual", function(value, element, param) {
      return this.optional(element) || value != param;
    }, "");    
    
    $('#frmReparacion').validate({ 
            submitHandler: function (form) {
        		document.getElementById('message-fields').innerHTML = "";  
        		$("#selectFinRepa").prop('disabled', false);
            	form.submit();            
        	}
    });
        
          
    $("#selectCliente").rules('add', {
        notEqual: function(){$("#boxSelCliente").removeClass("error"); return 0;},
        messages: {
            notEqual:  function(){                                   
                               $("#boxSelCliente").addClass("error");
                               $("#message-fields").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Cliente Requerido</strong></div>");
                               
                            }
        }
    }); 
    
    $("#fEquipo").rules('add', {
        required: function(){$("#boxEquipo").removeClass("error"); return true;},
        messages: {
            required:  function(){
                               $("#boxEquipo").addClass("error");
                               $("#message-fields").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Descripción de Equipo Requerido</strong></div>");
                            }
        }
    });

    $("#fProblema").rules('add', {
        required: function(){$("#boxProblema").removeClass("error"); return true;},
        messages: {
            required:  function(){
                               $("#boxProblema").addClass("error");
                               $("#message-fields").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Daño de Equipo Requerido</strong></div>");
                            }
        }
    });	
    
    $("#fAccesorio").rules('add', {
        required: function(){$("#boxAccesorios").removeClass("error"); return true;},
        messages: {
            required:  function(){
                               $("#boxAccesorios").addClass("error");
                               $("#message-fields").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Accesorios de Equipo Requerida</strong></div>");
                            }
        }
    });
    
    $("#fSerie").rules('add', {
        required: function(){$("#boxSerie").removeClass("error"); return true;},
        messages: {
            required:  function(){
                               $("#boxSerie").addClass("error");
                               $("#message-fields").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Serie de Equipo Requerida</strong></div>");
                            }
        }
    });    
    
    $("#fMarca").rules('add', {
        required: function(){$("#boxMarca").removeClass("error"); return true;},
        messages: {
            required:  function(){
                               $("#boxMarca").addClass("error");
                               $("#message-fields").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Marca de Equipo Requerida</strong></div>");
                            }
        }
    });
    
    $("#fModelo").rules('add', {
        required: function(){$("#boxModelo").removeClass("error"); return true;},
        messages: {
            required:  function(){
                               $("#boxModelo").addClass("error");
                               $("#message-fields").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Modelo de Equipo Requerido</strong></div>");
                            }
        }
    });
    
});

	$("#btnValidaVendedor").click(function(e){
	 	e.preventDefault();
	 	verVendor();
	}); 	
	 	
 	$("#fClaveVendedor").on("change", function (e){
        e.preventDefault();
        verVendor();
    }); 	
 	

//Inserta un cliente por medio de AJAX y lo añade a los datos del cliente en la factura
$("#add-new-client").click(function(e){
 	e.preventDefault();
    var newNombre   = $("#new-Nombre").val();
    var newContacto = $("#new-NombreContacto").val();
    var newCorreo   = $("#new-Correo").val();
    var newTelefono = $("#new-Telefono").val();  
    
    var newClientId = $(".clienteId").attr("id");
    var vendedor    = $("#txtVendedor").val();
    var errors      = false;

    if(newNombre == ""){
        $("#input-new-Nombre").addClass("error");
        errors = true;
    }else{
        $("#input-new-Nombre").removeClass("error");
    }
    
    if(newCorreo == ""){
        $("#input-new-Correo").addClass("error");
        errors = true;
    }else{
        $("#input-new-Correo").removeClass("error");
    }
    
    if(newTelefono == ""){
        $("#input-new-Telefono").addClass("error");
        errors = true;
    }else{
        $("#input-new-Telefono").removeClass("error");
    }
    

    if(errors != true){ 
       //alert(newClientId);
   	$.ajax({
        type: "POST",
        url: "processClient.php", 
        dataType : "text",
        data: "fclienteId="+newClientId+"&fnombre="+newNombre+"&fcorreo="+newCorreo+"&ftelefono="+newTelefono+"&fvendedor="+vendedor+"&fcontacto="+newContacto,
       	success: function(data2,strMsg){
       		if (data2!="-1") {
        		var nombre = 	$("#new-Nombre").val(),
             		tel = 		$("#new-Telefono").val(),
            		cor = 		$("#new-Correo").val(),
            		contacto =  $("#new-NombreContacto").val();
            	//$("#selectCliente").append("<option value='"+data+"' selected>" + nombre + " | " + cor + " | " + tel + "</option>")
            	// se borra primero la opcion que esta seleccionada
            	// por que esa es la que el usuario actualizo.
            	// para poder agregar la nueva actualizada.
            	//$("#selectCliente option:selected").remove();
            	
            	//se actualiza el campo que guarda el id del cliente seleccionado con el que se acaba de 
            	// insertar. por si el usuario decide seleccionar actualizar los datos.
            	//alert(data2);
            	$(".clienteId").attr("id", data2);
            	$("#btn-updCliente").prop("disabled",false);
            	// se agregan los datos actualizados.
            	//$("#selectCliente").append("<option  value='"+data2+"|"+nombre+"|"+cor+"|"+tel+"' selected>" + nombre + " | " + cor + " | " + tel + "</option>")
                //               .trigger("liszt:updated");
                $("#selectCliente").append("<option  value='"+data2+"|"+nombre+"|"+cor+"|"+tel+"|"+contacto+"' selected>" + nombre + " | " + cor + " | " + tel + " | " + contacto + "</option>")
                                 .trigger("liszt:updated");
                // se cierra el modal        
            	$("#newClient-modal").modal('hide');
       		}
       		else {
				alert("No se puedo insertar");
			}
        },
        error: function(jqXHR,textStatus,errorThrown){
            alert('Error al insertar '+errorThrown);
        }
    });
    }else{
        $("#message-newClient").html("<div class='alert alert-error pull-left'><strong><span class='icon icon-red icon-alert'/></span> <strong>Complete la Información Requerida</strong></div>");
        return false;            
    }
});

</script>
{/literal}	