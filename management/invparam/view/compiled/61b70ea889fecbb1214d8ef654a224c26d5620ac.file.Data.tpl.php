<?php /* Smarty version Smarty-3.1.16, created on 2016-08-05 11:03:45
         compiled from "../invparam/view/Data.tpl" */ ?>
<?php /*%%SmartyHeaderCode:77488538757a4c0606290e0-67486343%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61b70ea889fecbb1214d8ef654a224c26d5620ac' => 
    array (
      0 => '../invparam/view/Data.tpl',
      1 => 1470416394,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '77488538757a4c0606290e0-67486343',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_57a4c060650eb6_55946873',
  'variables' => 
  array (
    'NAV_MENU' => 0,
    'ACTION' => 0,
    'NOMBRE' => 0,
    'DATA' => 0,
    'BTN_ACTION' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a4c060650eb6_55946873')) {function content_57a4c060650eb6_55946873($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['NAV_MENU']->value;?>

	<div class="row-fluid sortable">
		<div class="box span12">
			<div class="box-header well" data-original-title>
				<h2>Información de Par&aacute;metro</h2>
			</div>
			<div class="box-content">
				<form class="form-horizontal" id="frmData" action="processData.php" method="POST">
					<input type="hidden" id="action" name="action" value="<?php echo $_smarty_tpl->tpl_vars['ACTION']->value;?>
">						
 			 	<fieldset>
					<div class="control-group" id="boxnombre" >
						<label class="control-label" for="disabledInput">Nombre*</label>
						<div class="controls">
							<input class="input-xlarge " name="fnombre" id="fnombre" type="text" style="text-transform:uppercase" placeholder="<?php echo $_smarty_tpl->tpl_vars['NOMBRE']->value;?>
" maxlength="15" value="<?php echo $_smarty_tpl->tpl_vars['NOMBRE']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['ACTION']->value==2) {?> readonly="true"<?php }?> >
						</div>
					</div>
				 	<div class="control-group" id="boxvalor" >
						<label class="control-label" for="focusedInput">Valor*</label>
						<div class="controls">
							<input class="input-xlarge focused" name ="fvalor" id="fvalor" maxlength="30" type="text" value="<?php echo $_smarty_tpl->tpl_vars['DATA']->value[0]['valor'];?>
">
						</div>
				 	</div>									
					<div class="control-group" id="boxdescripcion" >
						<label class="control-label" for="focusedInput">Descripción</label>
						<div class="controls">
							<input class="input-xxlarge focused" name ="fdescripcion" id="fdescripcion" maxlength="200"  type="text" value="<?php echo $_smarty_tpl->tpl_vars['DATA']->value[0]['descripcion'];?>
">
						</div>
				 	</div>
 					<div class="modal-footer">
						<button id=btnSubFrmData type="submit" name="enviar" class="btn btn-large btn-primary pull-right"><?php echo $_smarty_tpl->tpl_vars['BTN_ACTION']->value;?>
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
	// Si la action es igual a 4 significa que es solo visualizar
	// se buscar desabilitar todos los campos y que solo pueda seleccionar los botones de accion.
	var newAction = document.getElementById('action'); 
	if (newAction.value == "3" || newAction.value == "4"){
		$("#frmData :input").attr('readonly', true);
	}else{
		if (newAction.value == "1"){
			$("#fnombre").focus();
			
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
	<?php }} ?>
