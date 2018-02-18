{$NAV_MENU}
	<div class="row-fluid sortable">
		<div class="box span12">
			<div class="box-header well" data-original-title>
				<h2>Información de Evento</h2>
			</div>
			<div class="box-content">
				<form class="form-horizontal" id="frmEvent" action="processEvent.php" method="POST">
					<input type="hidden" id="action" name="action" value="{$ACTION}">						
 			 	<fieldset>
					<div class="control-group" id="boxId" >
						<label class="control-label" for="disabledInput">Id*</label>
						<div class="controls">
							<input class="input-xlarge " name="fIdEvento" id="fIdEvento" type="text" placeholder="{$ID_EVENTO}" value="{$ID_EVENTO}" {if $ACTION eq 2} readonly="true"{/if} >
						</div>
					</div>				
					<div class="control-group" id="boxDescripcion" >
						<label class="control-label" for="focusedInput">Descripción*</label>
						<div class="controls">
							<input class="input-xlarge focused" name ="fDescripcion" id="fDescripcion" maxlength="50" type="text" value="{$EVENTO[0].descripcion}">
						</div>
				 	</div>				 			
 					<div class="modal-footer">
						<button id=btnSubFrmEvent type="submit" name="enviar" class="btn btn-large btn-primary pull-right">{$BTN_ACTION}</button>
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
	// se buscar desabilitar todos los campos y que solo pueda seleccionar los botones de accion.
	var newAction = document.getElementById('action'); 
	if (newAction.value == "3"){
		$("#frmEvent :input").attr('readonly', true);
	}
});

$(function(){
	
    $('#frmEvent').validate({ 
        submitHandler: function (form) {             
            $("#message-fields-obl").css("display","none");
            form.submit();            
        }
    });
    
    $("#fIdEvento").rules('add', {
        required: function(){$("#boxId").removeClass("error"); return true;},
        messages: {
            required:  function(){
                               $("#boxId").addClass("error");
                               $("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Complete la Información Requerida</strong></div>");
                            }
        }
    });


    $("#fDescripcion").rules('add', {
        required: function(){$("#boxDescripcion").removeClass("error"); return true;},
        messages: {
            required:  function(){
                               $("#boxDescripcion").addClass("error");
                               $("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Complete la Información Requerida</strong></div>");
                            }
        }
    });
});
</script>
{/literal}	