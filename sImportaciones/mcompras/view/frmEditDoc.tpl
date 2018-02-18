{$NAV_MENU}
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2>Información del Documento</h2>
					</div>
					<div class="box-content">
						<form class="form-horizontal" id="frmEditDoc" action="updateDoc.php" method="POST">
 			 <fieldset>
 			 		<input type="hidden" name="numIdPedido" id="numIdPedido" value="{$ID_PEDIDO}">
 			 		<input type="hidden" name="dateDocument" id="dateDocument" value="{$FEC_DOC}"> 			 		 			 		
 			 		<input type="hidden" name="noDocument" id="noDocument" value="{$NUM_DOC}">
 			 		<input type="hidden" name="docsList" id="docsList" value="{$DOCU_PEDIDO[0].idTipoDoc}">
                    <table class="table table-condensed">
                      <tbody> 

                          <tr>
                              <th>Documento</th>
                              <td>  
                                  
                                <div class="input-prepend pull-left" id="boxSelectDocs" >
                                    <span class="add-on" style="padding:0px; height:26px; margin:0px 3px 3px 0px;">                                    
                                        <select id="docsList" name="docsList" data-rel="chosen" style="height:25px; width:170px" disabled>
                                             <option value="0">- Tipo Documento -</option>
                                             {section loop=$TIPO_DOCS name=e}
                                             <option value="{$TIPO_DOCS[e].idTipoDocumento}" {if $TIPO_DOCS[e].idTipoDocumento eq "{$DOCU_PEDIDO[0].idTipoDoc}"} selected{/if}>{$TIPO_DOCS[e].descripcion|lower|capitalize}</option>
                                             {/section}
                                         </select> 
                                    </span>                                
                                </div>                                    

                              </td>
                          </tr>
                          <tr>
                              <th>Fecha</th>
                              <td>
                                <div class="pull-left control-group" id="input-dateDocument" >
                                    <input type="text" class="input-block-level datepicker" id="dateDocument" name="dateDocument" disabled value="{$FEC_DOC}">
                                </div>                                 
                              </td>
                          </tr>
                          <tr>
                              <th>No. Documento</th> 
                              <td>
                                <div class="pull-left control-group" id="input-noDocument" >
                                    <input type="text" class="input-block-level" id="noDocument" name="noDocument" disabled value="{$NUM_DOC}">
                                </div>                                 
                              </td>
                          </tr>
                          <tr>
                              <th>Moneda</th>
                              <td>

                                <div class="input-prepend pull-left" id="boxSelectMoneda">
                                    <span class="add-on" style="padding:0px; height:26px; margin:0px 3px 3px 0px;">                                    
                                        <select id="selMoneda"  name="selMoneda" style="width:170px">
                                            <option style="padding:5px;" value="0">- Moneda -</option>
                                        {section name=m loop=$MONEDAS}
                                            <option style="padding:5px;" value="{$MONEDAS[m].idMoneda}" {if $MONEDAS[m].idMoneda eq "{$DOCU_PEDIDO[0].idMoneda}"} selected{/if}>{$MONEDAS[m].descripcion|lower|capitalize}</option>
                                        {/section}
                                        </select>
                                    </span>                                
                                </div>                                   
                                  
                              </td>
                          </tr>                          
                          
                          <tr>
                              <th>Monto</th>
                              <td>
                                <div class="pull-left control-group" id="input-Monto">
                                    <input type="text" class="input-mini input-block-level" id="monto" name="monto" style="text-align:right;" value="{$DOCU_PEDIDO[0].montoDoc}">
                                </div>                                 
                              </td>
                          </tr>
                          <tr>
                              <th>Desgloce</th>
                              <td>
                                <div class="pull-left control-group" id="input-desgloMonto">
                                    <input type="text" class="input-mini input-block-level" id="desmonto1" name="desmonto1" style="text-align:right;" value="{$PED_DOC_DESGLOSE[0].monto}"><br>
                                    <input type="text" class="input-mini input-block-level" id="desmonto2" name="desmonto2" style="text-align:right;" value="{$PED_DOC_DESGLOSE[1].monto}"><br>
                                    <input type="text" class="input-mini input-block-level" id="desmonto3" name="desmonto3" style="text-align:right;" value="{$PED_DOC_DESGLOSE[2].monto}"><br>
                                    <input type="text" class="input-mini input-block-level" id="desmonto4" name="desmonto4" style="text-align:right;" value="{$PED_DOC_DESGLOSE[3].monto}"><br>
                                    <input type="text" class="input-mini input-block-level" id="desmonto5" name="desmonto5" style="text-align:right;" value="{$PED_DOC_DESGLOSE[4].monto}"><br>
                                    <input type="text" class="input-mini input-block-level" id="desmonto6" name="desmonto6" style="text-align:right;" value="{$PED_DOC_DESGLOSE[5].monto}"><br>
                                    <input type="text" class="input-mini input-block-level" id="desmonto7" name="desmonto7" style="text-align:right;" value="{$PED_DOC_DESGLOSE[6].monto}"><br>
                                    <input type="text" class="input-mini input-block-level" id="desmonto8" name="desmonto8" style="text-align:right;" value="{$PED_DOC_DESGLOSE[7].monto}"><br>
                                    <input type="text" class="input-mini input-block-level" id="desmonto9" name="desmonto9" style="text-align:right;" value="{$PED_DOC_DESGLOSE[8].monto}"><br>
                                    <input type="text" class="input-mini input-block-level" id="desmonto10" name="desmonto10" style="text-align:right;" value="{$PED_DOC_DESGLOSE[9].monto}"><br>
                                    <input type="text" class="input-mini input-block-level" id="desmonto11" name="desmonto11" style="text-align:right;" value="{$PED_DOC_DESGLOSE[10].monto}"><br>
                                    <input type="text" class="input-mini input-block-level" id="desmonto12" name="desmonto12" style="text-align:right;" value="{$PED_DOC_DESGLOSE[11].monto}">
                                </div>                                 
                              </td>
                          </tr>
                          <tr>
                              <th>Fecha Pago</th>
                              <td>
                                <div class="pull-left control-group" id="input-fechaPago">
                                    <input type="text" class="input-block-level datepicker" id="fechaPago" name="fechaPago" value="{$DOCU_PEDIDO[0].fechaPago}">
                                </div>                                 
                              </td>
                          </tr>                                              
                          <tr>
                              <th>Comentario</th>
                              <td>
                                  <textarea class="input-block-level" placeholder="(opcional)" id="comments" name="comments" rows="1" style="margin-top:0px; resize: none;">{$DOCU_PEDIDO[0].comentario}</textarea> 
                              </td>
                          </tr>
                          <tr>
                          	<th></th>
                          	<td id="message-fields-obl"> </td> 
                          </tr>

                      </tbody>
                    </table>                    

		
 							<div class="modal-footer"> 								
								<button type="submit" name="enviar" class="btn btn-primary">Actualizar</button>
								<a href="docsRegister.php?id={$ID_PEDIDO}" class="btn" data-dismiss="modal">Cerrar</a>
							  </div>  			
			
			</fieldset>
		  </form>			
		    </div>				
		</div>		
		</div>

{literal}
<script type="text/javascript">
$(document).ready(function(){
    
    $('.datepicker').datepicker({
       language: "es",
       format:"dd/mm/yyyy",
       todayHighlight: true,
       autoclose: true
    });

    $('#monto').number( true, 2 ); 
    $('#desmonto1').number( true, 2 );
    $('#desmonto2').number( true, 2 );
    $('#desmonto3').number( true, 2 );
    $('#desmonto4').number( true, 2 );
    $('#desmonto5').number( true, 2 );
    $('#desmonto6').number( true, 2 );
    $('#desmonto7').number( true, 2 );
    $('#desmonto8').number( true, 2 );
    $('#desmonto9').number( true, 2 );
    $('#desmonto10').number( true, 2 );
    $('#desmonto11').number( true, 2 );
    $('#desmonto12').number( true, 2 );

           
});
$(function(){

    $.validator.addMethod("notEqual", function(value, element, param) {
        return this.optional(element) || value != param;
      }, "");  

    $.validator.addMethod("notEqualDesglo", function(value, element, param) {
        return this.optional(element) || value != param;
      }, "");   
	
    $('#frmEditDoc').validate({ 
        submitHandler: function (form) {             
            $("#message-fields-obl").css("display","none");
            form.submit();            
        }
    });
    
    $("#monto").rules('add', {
        required: function(){$("#input-Monto").removeClass("error"); return true;},
        messages: {
            required:  function(){
                               $("#input-Monto").addClass("error");
                               $("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Campo Requerido</strong></div>");
                            }
        }
    });

    
    $("#selMoneda").rules('add', {
        notEqual: 0,
        messages: {
            notEqual:  function(){                                   
                               $("#boxSelectMoneda").addClass("error");
                               $("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Moneda es Requerida</strong></div>");
                            }
        }
    });   
});

</script>
{/literal}