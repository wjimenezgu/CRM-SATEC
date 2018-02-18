{$NAV_MENU}
	<div class="row-fluid sortable">
		<div class="box span12">
			<div class="box-header well" data-original-title>
				<h2>Información de Categoría</h2>
			</div>
			<div class="box-content">
				<form class="form-horizontal" id="frmData" action="processData.php" method="POST">
	<input type="hidden" id="action" name="action" value="{$ACTION}">
	<input type="hidden" id="idP" name="idP" value="{$DATA_PADRE[0]}">
	<input type="hidden" id="fId" name="fId" value="{$ID}">
	<input type="hidden" id="nivelP" name="nivelP" value="{$DATA_PADRE[1]}">
	<input type="hidden" id="nivelStrP" name="nivelStrP" value="{$DATA_PADRE[2]}
	">
	<input type="hidden" id="sigteIdHijoP" name="sigteIdHijoP" value="{$DATA_PADRE[3]}">
 			 	<fieldset>					
					<div class="control-group" id="boxdescripcionPadre" >
						<label class="control-label" for="focusedInput">Padre*</label>
						<div class="controls">
							<input class="input-xlarge focused"  id="fdescripcionPadre" maxlength="50" type="text" value="{$DATA_PADRE[4]}">
						</div>
				 	</div>				
					<div class="control-group" id="boxdescripcion" >
						<label class="control-label" for="focusedInput">Descripción*</label>
						<div class="controls">
							<input class="input-xlarge focused" name ="fdescripcion" id="fdescripcion" maxlength="50" type="text" value="{$DATA[0].descripcion}">
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
		if (newAction.value == "2"){
			$("#boxdescripcionPadre").css("display","none");
		}
		
		$("#fdescripcion").focus();
		
	}
});

$(function(){
	
    $('#frmData').validate({ 
        submitHandler: function (form) {             
            $("#message-fields-obl").css("display","none");
            form.submit();            
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