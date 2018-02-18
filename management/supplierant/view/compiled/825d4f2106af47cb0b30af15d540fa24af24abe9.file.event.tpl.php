<?php /* Smarty version Smarty-3.1.16, created on 2015-03-07 10:15:47
         compiled from "../events/view/event.tpl" */ ?>
<?php /*%%SmartyHeaderCode:54640512543ea208ad86c2-16435702%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '825d4f2106af47cb0b30af15d540fa24af24abe9' => 
    array (
      0 => '../events/view/event.tpl',
      1 => 1425744940,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '54640512543ea208ad86c2-16435702',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_543ea208b2c1f4_26677250',
  'variables' => 
  array (
    'NAV_MENU' => 0,
    'ACTION' => 0,
    'ID_EVENTO' => 0,
    'EVENTO' => 0,
    'BTN_ACTION' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543ea208b2c1f4_26677250')) {function content_543ea208b2c1f4_26677250($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['NAV_MENU']->value;?>

	<div class="row-fluid sortable">
		<div class="box span12">
			<div class="box-header well" data-original-title>
				<h2>Información de Evento</h2>
			</div>
			<div class="box-content">
				<form class="form-horizontal" id="frmEvent" action="processEvent.php" method="POST">
					<input type="hidden" id="action" name="action" value="<?php echo $_smarty_tpl->tpl_vars['ACTION']->value;?>
">						
 			 	<fieldset>
					<div class="control-group" id="boxId" >
						<label class="control-label" for="disabledInput">Id*</label>
						<div class="controls">
							<input class="input-xlarge " name="fIdEvento" id="fIdEvento" type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['ID_EVENTO']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['ID_EVENTO']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['ACTION']->value==2) {?> readonly="true"<?php }?> >
						</div>
					</div>				
					<div class="control-group" id="boxDescripcion" >
						<label class="control-label" for="focusedInput">Descripción*</label>
						<div class="controls">
							<input class="input-xlarge focused" name ="fDescripcion" id="fDescripcion" maxlength="50" type="text" value="<?php echo $_smarty_tpl->tpl_vars['EVENTO']->value[0]['descripcion'];?>
">
						</div>
				 	</div>				 			
 					<div class="modal-footer">
						<button id=btnSubFrmEvent type="submit" name="enviar" class="btn btn-large btn-primary pull-right"><?php echo $_smarty_tpl->tpl_vars['BTN_ACTION']->value;?>
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
