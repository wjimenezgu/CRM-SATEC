{$NAV_MENU}
	<div class="row-fluid sortable">
		<div class="box span12">
			<div class="box-header well" data-original-title>
				<h2>Información Forma de Pago</h2>
			</div>
			<div class="box-content">
				<form class="form-horizontal" id="frmData" action="processData.php" method="POST">
					<input type="hidden" id="action" name="action" value="{$ACTION}">						
 			 	<fieldset>
					<div class="control-group" id="boxid" >
						<label class="control-label" for="disabledInput">ID Tipo Factura*</label>
						<div class="controls">
							<input class="input-xlarge " name="fId" id="fId" type="text" style="text-transform:uppercase" placeholder="Digite ID (Use Mayuscula)" maxlength="15" value="{$ID}" {if $ACTION eq 2} readonly="true"{/if} >
						</div>
					</div>						
					<div class="control-group" id="boxdesccorta" >
						<label class="control-label" for="focusedInput">Descripción Corta</label>
						<div class="controls">
							<input class="input-xlarge focused" name ="fdesccorta" id="fdesccorta" maxlength="100"  type="text" value="{$DATA[0].descCorta}">
					    </div>
					</div>
					<div class="control-group" id="boxdesclarga" >
						<label class="control-label" for="focusedInput">Descripción Larga</label>
						<div class="controls">
							<input class="input-xlarge focused" name ="fdesclarga" id="fdesclarga" maxlength="100"  type="text" value="{$DATA[0].descLarga}">
					    </div>
					</div>
					<div class="control-group" id="boxdescripcion" >
						<label class="control-label" for="focusedInput">No.Posicion</label>
						<div class="controls">
							<input class="input-xlarge focused" name ="fposlista" id="fposlista" maxlength="100"  type="text" value="{$DATA[0].posLista}">
					    </div>
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
		   //$("#boxid").hide();
		   //$("#fdescripcion").focus();
		   $("#fboxid").focus();
			
		}else{
			$("#fvalor").focus();
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
    $("#fnombre").rules('add', {
        required: function(){$("#boxnombre").removeClass("error"); return true;},
        messages: {
            required:  function(){
                               $("#boxnombre").addClass("error");
                               $("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Nombre es Requerido</strong></div>");
                            }
        }
    });
    
    $("#fvalor").rules('add', {
        required: function(){$("#boxvalor").removeClass("error"); return true;},
        messages: {
            required:  function(){
                               $("#boxvalor").addClass("error");
                               $("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Valor es Requerido</strong></div>");
                            }
        }
    });
});
</script>
{/literal}	