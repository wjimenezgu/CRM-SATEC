{$NAV_MENU}
	<div class="row-fluid sortable">
		<div class="box span12">
			<div class="box-header well" data-original-title>
				<h2>Cambiar Clave</h2>
			</div>
			<div class="box-content">
				<form class="form-horizontal" id="frmNuevaClave" name="frmNuevaClave" action="processChangePwd.php" onsubmit="return validatePassword()" method="POST">
											
 			 	<fieldset>
 			 	    <div class="control-group" id="boxClaveActual" >
						<label class="control-label" for="disabledInput">Clave Actual:</label>
						<div class="controls">
							<input class="input-xlarge " name="fClaveActual" id="fClaveActual" type="password" placeholder="Clave Actual" value="" >
						</div>
					</div>				
 			 	    
					<div class="control-group" id="boxNuevaClave" >
						<label class="control-label" for="disabledInput">Nueva Clave:</label>
						<div class="controls">
							<input class="input-xlarge " name="fNuevaClave" id="fNuevaClave" type="password" placeholder="Nueva Clave"  value="" >
						</div>
					</div>				
					<div class="control-group" id="boxConfirmaClave" >
						<label class="control-label" for="focusedInput">Confirmar Clave:</label>
						<div class="controls">
							<input class="input-xlarge focused" name ="fConfirmaClave" id="fConfirmaClave" type="password" placeholder="Confirmar Nueva Clave"value="">
						</div>
				 	</div>				 			
 					<div class="modal-footer">
						<button id=btnSubFrmCambiaClave type="submit" name="enviar" class="btn btn-large btn-primary pull-right">Cambiar Clave</button>
<!-- 
						<a href="index.php" class="btn btn-large pull-right" data-dismiss="modal">Cerrar</a>
 -->
						<div id="message-fields-obl"></div> 
					</div> 					
				</fieldset>
		  </form>			
		    </div>				
		</div>		
	</div>
{literal}
<script type="text/javascript">



function validatePassword() {
	var newPassword,confirmPassword,currentPassword;

	currentPassword = document.frmNuevaClave.fClaveActual;
	newPassword = document.frmNuevaClave.fNuevaClave;
	confirmPassword = document.frmNuevaClave.fConfirmaClave;

	if(!currentPassword.value) {
		currentPassword.focus();
		$("#boxClaveActual").addClass("error");
        $("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Complete la Información Requerida</strong></div>");
		return false;		
	}else if(!newPassword.value) {
		newPassword.focus();
		$("#boxNuevaClave").addClass("error");
        $("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Complete la Información Requerida</strong></div>");
		return false;		
	}else if(!confirmPassword.value) {
		confirmPassword.focus();
		$("#boxConfirmaClave").addClass("error");
        $("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Complete la Información Requerida</strong></div>");
		return false;
	}else if(newPassword.value != confirmPassword.value) {
		$("#boxNuevaClave").addClass("error");
        $("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> No son iguales</strong></div>");
    	newPassword.value="";
		confirmPassword.value="";
		newPassword.focus();
		return false;
	}else {
		$("#boxNuevaClave").removeClass("error");
		$("#message-fields-obl").css("display","none");
	} 	
	return true;
	}
</script>
{/literal}	