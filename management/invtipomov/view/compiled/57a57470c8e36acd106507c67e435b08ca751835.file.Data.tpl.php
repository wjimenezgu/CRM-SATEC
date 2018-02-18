<?php /* Smarty version Smarty-3.1.16, created on 2016-11-29 07:48:07
         compiled from "../invtipomov/view/Data.tpl" */ ?>
<?php /*%%SmartyHeaderCode:208421030857e2a0c36f8929-57002660%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57a57470c8e36acd106507c67e435b08ca751835' => 
    array (
      0 => '../invtipomov/view/Data.tpl',
      1 => 1477417378,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '208421030857e2a0c36f8929-57002660',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_57e2a0c3710ae7_70213165',
  'variables' => 
  array (
    'NAV_MENU' => 0,
    'ACTION' => 0,
    'ID' => 0,
    'DATA' => 0,
    'BTN_ACTION' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e2a0c3710ae7_70213165')) {function content_57e2a0c3710ae7_70213165($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['NAV_MENU']->value;?>

	<div class="row-fluid sortable">
		<div class="box span12">
			<div class="box-header well" data-original-title>
				<h2>Información de Movimiento</h2>
			</div>
			<div class="box-content">
				<form class="form-horizontal" id="frmData" action="processData.php" method="POST">
					<input type="hidden" id="action" name="action" value="<?php echo $_smarty_tpl->tpl_vars['ACTION']->value;?>
">						
 			 	<fieldset>
					<div class="control-group" id="boxid" >
						<label class="control-label" for="disabledInput">Codigo Movimiento*</label>
						<div class="controls">
							<input class="input-xlarge " name="fid" id="fid" type="text" style="text-transform:uppercase" placeholder="<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
" maxlength="15" value="<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['ACTION']->value==2) {?> readonly="true"<?php }?> >
						</div>
					</div>
				 	<div class="control-group" id="boxcodcat" >
						<label class="control-label" for="focusedInput">Codigo Categoria*</label>
						<div class="controls">
							<input class="input-xlarge focused" name ="fcodcat" id="fcodcat" maxlength="30" type="text" value="<?php echo $_smarty_tpl->tpl_vars['DATA']->value[0]['codCategoria'];?>
">
						</div>
				 	</div>									
					<div class="control-group" id="boxdescripcion" >
						<label class="control-label" for="focusedInput">Descripción</label>
						<div class="controls">
							<input class="input-xlarge focused" name ="fdesccat" id="fdesccat" maxlength="100"  type="text" value="<?php echo $_smarty_tpl->tpl_vars['DATA']->value[0]['descTipoMov'];?>
">
					    </div>
					</div>
					<div class="control-group" id="boxsiglas" >
						<label class="control-label" for="focusedInput">Siglas*</label>
						<div class="controls">
							<input class="input-xlarge focused" name ="fsiglas" id="fsiglas" maxlength="50" type="text" value="<?php echo $_smarty_tpl->tpl_vars['DATA']->value[0]['siglas'];?>
">
						</div>
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
