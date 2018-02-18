<?php /* Smarty version Smarty-3.1.16, created on 2014-12-20 00:42:50
         compiled from "../login/view/frmChangePwd.tpl" */ ?>
<?php /*%%SmartyHeaderCode:533195868549518692d5322-15230441%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5573a87f9434764e27bfbe994605462e9cb6ffe9' => 
    array (
      0 => '../login/view/frmChangePwd.tpl',
      1 => 1419057304,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '533195868549518692d5322-15230441',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_54951869322909_24931934',
  'variables' => 
  array (
    'NAV_MENU' => 0,
    'ACTION' => 0,
    'BTN_ACTION' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54951869322909_24931934')) {function content_54951869322909_24931934($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['NAV_MENU']->value;?>

	<div class="row-fluid sortable">
		<div class="box span12">
			<div class="box-header well" data-original-title>
				<h2>Cambiar Clave</h2>
			</div>
			<div class="box-content">
				<form class="form-horizontal" id="frmEvent" action="processEvent.php" method="POST">
					<input type="hidden" id="action" name="action" value="<?php echo $_smarty_tpl->tpl_vars['ACTION']->value;?>
">						
 			 	<fieldset>
					<div class="control-group" id="boxNuevaClave" >
						<label class="control-label" for="disabledInput">Nueva Clave:</label>
						<div class="controls">
							<input class="input-xlarge " name="fNuevaClave" id="fNuevaClave" type="text" placeholder="Nueva Clave" value="" >
						</div>
					</div>				
					<div class="control-group" id="boxConfirmaClave" >
						<label class="control-label" for="focusedInput">Confirmar Clave:</label>
						<div class="controls">
							<input class="input-xlarge focused" name ="fConfirmaClave" id="fConfirmaClave" type="text" placeholder="Confirmar Clave"value="">
						</div>
				 	</div>				 			
 					<div class="modal-footer">
						<button id=btnSubFrmCambiaClave type="submit" name="enviar" class="btn btn-large btn-primary pull-right"><?php echo $_smarty_tpl->tpl_vars['BTN_ACTION']->value;?>
</button>
						<a href="index.php" class="btn btn-large pull-right" data-dismiss="modal">Cerrar</a>
						<div id="message-fields-obl"></div> 
					</div> 					
				</fieldset>
		  </form>			
		    </div>				
		</div>		
	</div>

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
	<?php }} ?>
