{$NAV_MENU}
	<div class="row-fluid sortable">
		<div class="box span12">
			<div class="box-header well" data-original-title>
				<h2>Información de Detalle</h2>
			</div>
			<div class="box-content">
				<form class="form-horizontal" id="frmData" action="processDataDet.php" method="POST">
					<input type="hidden" id="action" name="action" value="{$ACTION}">						
 			 	<fieldset>
					<div class="control-group" id="boxId" >
						<label id="flid" class="control-label" for="disabledInput">Factor*</label>
						<div class="controls">
							<input readonly class="input-xlarge " name="fId" id="fId" type="text" style="text-transform:uppercase" placeholder="{$ID}" maxlength="3" value="{$ID}" readonly="true" >
						</div>
					</div>
					<div class="control-group" id="boxNumLinea" >
						<label id="flnl" class="control-label" for="disabledInput">Numero de Linea*</label>
						<div class="controls">
							<input readonly class="input-xlarge " name="fNumLinea" id="fNumLinea" type="text" style="text-transform:uppercase" placeholder="{$NUM_LINEA}" maxlength="3" value="{$NUM_LINEA}" {if $ACTION eq 2 || 3} readonly="true"{/if} >
						</div>
					</div>				
					<div class="control-group" id="boxdescripcion">
						<label class="control-label" for="focusedInput">Valor</label>
						<div class="controls">
							<input class="input-xlarge focused" name ="fdescripcion" id="fdescripcion" maxlength="8" type="text" value="{$DATA[0].valor}">
						</div>
				 	</div>	
 				 					 			
 					<div class="modal-footer">
						<button id=btnSubFrmData type="submit" name="enviar" class="btn btn-large btn-primary pull-right">{$BTN_ACTION}</button>
						<!-- 
						<button id=btnSubFrmData type="submit" name="enviar" class="btn btn-large pull-right">Cerrar</button>
						
						<a href="index.php" class="btn btn-large pull-right" data-dismiss="modal">Cerrar</a>
						 -->
						<a href="#" class="btn btn-large pull-right" data-dismiss="modal" onclick="Regresar();">Cerrar</a>
						<div id="message-fields-obl"></div> 
					</div> 					
				</fieldset>
		  </form>			
		    </div>				
		</div>		
	</div>
{literal}
<script type="text/javascript">
$('#fdescripcion').number( true, 3 );

$(document).ready(function(){
	// Si la action es igual a 3 significa que es un borrado
	// Si la action es igual a 4 significa que es solo visualizar
	// se buscar desabilitar todos los campos y que solo pueda seleccionar los botones de accion.
	var newAction = document.getElementById('action'); 
	
	if (newAction.value == "3" || newAction.value == "4"){
		$("#frmData :input").attr('readonly', true);
		
	}else{
		if (newAction.value == "1"){
			$("#fNumLinea").attr('readonly', false);
			$("#fNumLinea").focus();
		}else{
			$("#fNumLinea").focus();

		}
	}
});

function goPage(action, id){
		
		window.location.href ='DataDet.php?action='+action+"&parentId"+parentId+"&id="+id;	
	}	

function Regresar(){
	// Regresa al usuario a la pagina anterior
	history.go(-1)		
}

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
    
    $("#fNumLinea").rules('add', {
        required: function(){$("#boxNumLinea").removeClass("error"); return true;},
        messages: {
            required:  function(){
                               $("#boxNumLinea").addClass("error");
                               $("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Complete la Información Requerida</strong></div>");
                            }
        }       
    });
});
</script>
{/literal}	