<?php /* Smarty version Smarty-3.1.16, created on 2016-05-05 13:51:21
         compiled from "frmChangePwd.tpl" */ ?>
<?php /*%%SmartyHeaderCode:148178765054952c9d9b4a49-38976547%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b602617934316c02e6ce0939871a3f8969ceaed' => 
    array (
      0 => 'frmChangePwd.tpl',
      1 => 1457810177,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '148178765054952c9d9b4a49-38976547',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_54952c9da02289_83602680',
  'variables' => 
  array (
    'NAV_MENU' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54952c9da02289_83602680')) {function content_54952c9da02289_83602680($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['NAV_MENU']->value;?>

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
	<?php }} ?>
