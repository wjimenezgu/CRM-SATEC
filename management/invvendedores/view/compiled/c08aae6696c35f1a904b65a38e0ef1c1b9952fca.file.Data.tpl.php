<?php /* Smarty version Smarty-3.1.16, created on 2016-11-23 16:11:11
         compiled from "../invvendedores/view/Data.tpl" */ ?>
<?php /*%%SmartyHeaderCode:214203349957d6e65ede3756-53854771%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c08aae6696c35f1a904b65a38e0ef1c1b9952fca' => 
    array (
      0 => '../invvendedores/view/Data.tpl',
      1 => 1477417391,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '214203349957d6e65ede3756-53854771',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_57d6e65ee02713_29327234',
  'variables' => 
  array (
    'NAV_MENU' => 0,
    'ACTION' => 0,
    'USERVENDEDOR' => 0,
    'DATA' => 0,
    'BTN_ACTION' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57d6e65ee02713_29327234')) {function content_57d6e65ee02713_29327234($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['NAV_MENU']->value;?>

	<div class="row-fluid sortable">
		<div class="box span12">
			<div class="box-header well" data-original-title>
				<h2>Administracion de Vendedores</h2>
			</div>
			<div class="box-content">
				<form class="form-horizontal" id="frmData" action="processData.php" method="POST">
					<input type="hidden" id="action" name="action" value="<?php echo $_smarty_tpl->tpl_vars['ACTION']->value;?>
">						
 			 	<fieldset>
					<div class="control-group" id="boxnombre" >
						<label class="control-label" for="disabledInput">userVendedor*</label>
						<div class="controls">
							<input class="input-xlarge " name="fuserVendedor" id="fuserVendedor" type="text" style="text-transform:uppercase" placeholder="Indicar Usuario" maxlength="15" value="<?php echo $_smarty_tpl->tpl_vars['USERVENDEDOR']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['ACTION']->value==2) {?> readonly="true"<?php }?> >
						</div>
					</div>
				 	<div class="control-group" id="boxvalor" >
						<label class="control-label" for="focusedInput">PassVerificador*</label>
						<div class="controls">
							<input class="input-xlarge focused" name ="fpassVerificador" id="fpassVerificador" maxlength="30" type="text" value="<?php echo $_smarty_tpl->tpl_vars['DATA']->value[0]['passVerificador'];?>
">
						</div>
				 	</div>									
					<div class="control-group" id="boxdescripcion" >
						<label class="control-label" for="focusedInput">Nombre Vendedor</label>
						<div class="controls">
							<input class="input-xxlarge focused" name ="fnombreVendedor" id="fnombreVendedor" maxlength="200"  type="text" value="<?php echo $_smarty_tpl->tpl_vars['DATA']->value[0]['nombreVendedor'];?>
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
