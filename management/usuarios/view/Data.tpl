{$NAV_MENU}
	<div class="row-fluid sortable">
		<div class="box span12">
			<div class="box-header well" data-original-title>
				<h2>Información de Asignatura</h2>
			</div>
			<div class="box-content">
				<form class="form-horizontal" id="frmData" action="processData.php" method="POST">
					<input type="hidden" id="action" name="action" value="{$ACTION}">						
 			 	<fieldset>
					<div class="control-group" id="boxId" >
						<label class="control-label" for="disabledInput">Id*</label>
						<div class="controls">
							<input class="input-xlarge " name="fId" id="fId" type="text" style="text-transform:uppercase" placeholder="{$ID}" maxlength="3" value="{$ID}" {if $ACTION eq 2} readonly="true"{/if} >
						</div>
					</div>				
					<div class="control-group" id="boxdescripcion" >
						<label class="control-label" for="focusedInput">Descripción*</label>
						<div class="controls">
							<input class="input-xlarge focused" name ="fdescripcion" id="fdescripcion" maxlength="50" type="text" value="{$DATA[0].descripcion}">
						</div>
				 	</div>
				 	<div class="control-group">
						<label class="control-label" id="boxNivelEnse"for="sNivelEnse">Nivel Enseñanza</label>
								<div class="controls">
								  <select id="sNivelEnse[]"   name="sNivelEnse[]" multiple data-rel="chosen" title="Haga la Selección" data-rel="tooltip" class="input-xlarge focused"> 								  
	                        		{section name="p" loop=$DATA_NIVELESENSE}	                            			                            			
	                            		<option value="{$DATA_NIVELESENSE[p].id}"
										{section name="i" loop=$DATA_ASIGNANIVELESENSE}
											{if $DATA_NIVELESENSE[p].id eq $DATA_ASIGNANIVELESENSE[i].idNivelEnse} selected{/if}
										{/section}
	                            		>{$DATA_NIVELESENSE[p].descripcion}
	                            		</option>
                                	{/section}
								  </select>
								</div>
					</div>				 					 			
 					<div class="modal-footer">
						<button id=btnSubFrmData type="submit" name="enviar" class="btn btn-large btn-primary pull-right">{$BTN_ACTION}</button>
						<a href="index.php" class="btn btn-large pull-right" data-dismiss="modal">Cerrar</a>
						<div id="message-fields-obl"></div> 
					</div> 					
				</fieldset>
		  </form>			
		    </div>				
		</div>		
	</div>
{literal}
<script type="text/javascript">
$(document).ready(function(){
	// Si la action es igual a 3 significa que es un borrado
	// Si la action es igual a 4 significa que es solo visualizar
	// se buscar desabilitar todos los campos y que solo pueda seleccionar los botones de accion.
	var newAction = document.getElementById('action'); 
	if (newAction.value == "3" || newAction.value == "4"){
		$("#frmData :input").attr('readonly', true);
	}else{
		if (newAction.value == "1"){
			$("#fId").focus();
		}else{
			$("#fdescripcion").focus();
		}
	}
});

$(function(){
	
    $('#frmData').validate({ 
        submitHandler: function (form) {             
            $("#message-fields-obl").css("display","none");
            form.submit();            
        }
    });
    
    $("#fId").rules('add', {
        required: function(){$("#boxId").removeClass("error"); return true;},
        messages: {
            required:  function(){
                               $("#boxId").addClass("error");
                               $("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Complete la Información Requerida</strong></div>");
                            }
        }
    });


    $("#fdescripcion").rules('add', {
        required: function(){$("#boxdescripcion").removeClass("error"); return true;},
        messages: {
            required:  function(){
                               $("#boxdescripcion").addClass("error");
                               $("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Complete la Información Requerida</strong></div>");
                            }
        }
    });
});
</script>
{/literal}	