<?php /* Smarty version Smarty-3.1.16, created on 2017-07-15 19:15:08
         compiled from "../categories/view/Data.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1068294409596abe1c9fee00-69966497%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c775e29e1c0dba90ff8a91b7c6c6e7759340abd' => 
    array (
      0 => '../categories/view/Data.tpl',
      1 => 1500167318,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1068294409596abe1c9fee00-69966497',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'NAV_MENU' => 0,
    'ACTION' => 0,
    'DATA_PADRE' => 0,
    'ID' => 0,
    'DATA' => 0,
    'BTN_ACTION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_596abe1ca45c50_45501870',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_596abe1ca45c50_45501870')) {function content_596abe1ca45c50_45501870($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['NAV_MENU']->value;?>

	<div class="row-fluid sortable">
		<div class="box span12">
			<div class="box-header well" data-original-title>
				<h2>Información de Categoría</h2>
			</div>
			<div class="box-content">
				<form class="form-horizontal" id="frmData" action="processData.php" method="POST">
	<input type="hidden" id="action" name="action" value="<?php echo $_smarty_tpl->tpl_vars['ACTION']->value;?>
">
	<input type="hidden" id="idP" name="idP" value="<?php echo $_smarty_tpl->tpl_vars['DATA_PADRE']->value[0];?>
">
	<input type="hidden" id="fId" name="fId" value="<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
">
	<input type="hidden" id="nivelP" name="nivelP" value="<?php echo $_smarty_tpl->tpl_vars['DATA_PADRE']->value[1];?>
">
	<input type="hidden" id="nivelStrP" name="nivelStrP" value="<?php echo $_smarty_tpl->tpl_vars['DATA_PADRE']->value[2];?>

	">
	<input type="hidden" id="sigteIdHijoP" name="sigteIdHijoP" value="<?php echo $_smarty_tpl->tpl_vars['DATA_PADRE']->value[3];?>
">
 			 	<fieldset>					
					<div class="control-group" id="boxdescripcionPadre" >
						<label class="control-label" for="focusedInput">Padre*</label>
						<div class="controls">
							<input class="input-xlarge focused"  id="fdescripcionPadre" maxlength="50" type="text" value="<?php echo $_smarty_tpl->tpl_vars['DATA_PADRE']->value[4];?>
">
						</div>
				 	</div>				
					<div class="control-group" id="boxdescripcion" >
						<label class="control-label" for="focusedInput">Descripción*</label>
						<div class="controls">
							<input class="input-xlarge focused" name ="fdescripcion" id="fdescripcion" maxlength="50" type="text" value="<?php echo $_smarty_tpl->tpl_vars['DATA']->value[0]['descripcion'];?>
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
	<?php }} ?>
