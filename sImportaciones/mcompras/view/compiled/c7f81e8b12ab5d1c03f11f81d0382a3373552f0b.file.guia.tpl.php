<?php /* Smarty version Smarty-3.1.16, created on 2016-03-16 14:46:01
         compiled from "../mcompras/view/guia.tpl" */ ?>
<?php /*%%SmartyHeaderCode:59254346354c17efd1e1793-55637789%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7f81e8b12ab5d1c03f11f81d0382a3373552f0b' => 
    array (
      0 => '../mcompras/view/guia.tpl',
      1 => 1457810179,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '59254346354c17efd1e1793-55637789',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_54c17efd275f65_23471894',
  'variables' => 
  array (
    'NAV_MENU' => 0,
    'ACTION' => 0,
    'NUMGUIA' => 0,
    'GUIA' => 0,
    'BTN_ACTION' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c17efd275f65_23471894')) {function content_54c17efd275f65_23471894($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['NAV_MENU']->value;?>

	<div class="row-fluid sortable">
		<div class="box span12">
			<div class="box-header well" data-original-title>
				<h2>Información de Guia</h2>
			</div>
			<div class="box-content">
				<form class="form-horizontal" id="frmForm" action="processGuia.php" method="POST">
					<input type="hidden" id="action" name="action" value="<?php echo $_smarty_tpl->tpl_vars['ACTION']->value;?>
">						
 			 	<fieldset>
					<div class="control-group" id="boxId" >
						<label class="control-label" for="disabledInput">Numero de Guia*</label>
						<div class="controls">
							<input class="input-xlarge " name="fnumGuia" id="fnumGuia" type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['NUMGUIA']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['NUMGUIA']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['ACTION']->value==2) {?> readonly="true"<?php }?> >
						</div>
					</div>				
					<div class="control-group" id="boxDescripcion" >
						<label class="control-label" for="focusedInput">Descripción</label>
						<div class="controls">
							<input class="input-xlarge focused" name ="fDescripcion" id="fDescripcion" type="text" value="<?php echo $_smarty_tpl->tpl_vars['GUIA']->value[0]['descripcion'];?>
">
						</div>
				 	</div>				 			
 					<div class="modal-footer">
						<button id=btnSubFrm type="submit" name="enviar" class="btn btn-large btn-primary pull-right"><?php echo $_smarty_tpl->tpl_vars['BTN_ACTION']->value;?>
</button>
						<a href="allGuias.php" class="btn btn-large pull-right" data-dismiss="modal">Cerrar</a>
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
		$("#frmForm :input").attr('readonly', true);
	}
});

$(function(){
	
    $('#frmForm').validate({ 
        submitHandler: function (form) {             
            $("#message-fields-obl").css("display","none");
            form.submit();            
        }
    });
    
    $("#fnumGuia").rules('add', {
        required: function(){$("#boxId").removeClass("error"); return true;},
        messages: {
            required:  function(){
                               $("#boxId").addClass("error");
                               $("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Complete la Información Requerida</strong></div>");
                            }
        }
    });

});
</script>
	<?php }} ?>
