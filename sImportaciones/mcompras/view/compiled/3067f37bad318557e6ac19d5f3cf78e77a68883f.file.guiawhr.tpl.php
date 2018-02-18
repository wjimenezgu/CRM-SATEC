<?php /* Smarty version Smarty-3.1.16, created on 2017-04-17 18:37:03
         compiled from "../mcompras/view/guiawhr.tpl" */ ?>
<?php /*%%SmartyHeaderCode:140717724854c2bd5268aa43-26891784%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3067f37bad318557e6ac19d5f3cf78e77a68883f' => 
    array (
      0 => '../mcompras/view/guiawhr.tpl',
      1 => 1457810178,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '140717724854c2bd5268aa43-26891784',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_54c2bd52744020_15007693',
  'variables' => 
  array (
    'NAV_MENU' => 0,
    'NUMGUIA' => 0,
    'ACTION' => 0,
    'GUIAWHR' => 0,
    'BTN_ACTION' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c2bd52744020_15007693')) {function content_54c2bd52744020_15007693($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['NAV_MENU']->value;?>

	<div class="row-fluid sortable">
		<div class="box span12">
			<div class="box-header well" data-original-title>
				<h2>Información de Wharehouse Receipt para Guia <?php echo $_smarty_tpl->tpl_vars['NUMGUIA']->value;?>
</h2>
			</div>
			<div class="box-content">
				<form class="form-horizontal" id="frmForm" action="processGuiaWhr.php" method="POST">
					<input type="hidden" id="action" name="action" value="<?php echo $_smarty_tpl->tpl_vars['ACTION']->value;?>
">
					<input type="hidden" id="numGuia" name="numGuia" value="<?php echo $_smarty_tpl->tpl_vars['NUMGUIA']->value;?>
">
					<input type="hidden" id="fwhrAnt" name="fwhrAnt" value="<?php echo $_smarty_tpl->tpl_vars['GUIAWHR']->value[0]['whr'];?>
">
 			 	<fieldset>
					<div class="control-group" id="boxId" >
						<label class="control-label" for="disabledInput">Numero de WHR*:</label>
						<div class="controls">
							<input class="input-xlarge " name="fwhr" id="fwhr" type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['GUIAWHR']->value[0]['whr'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['GUIAWHR']->value[0]['whr'];?>
" >
						</div>
					</div>				
 					<div class="modal-footer">
						<button id=btnSubFrm type="submit" name="enviar" class="btn btn-large btn-primary pull-right"><?php echo $_smarty_tpl->tpl_vars['BTN_ACTION']->value;?>
</button>
						<a href="allGuiaWhrs.php?id=<?php echo $_smarty_tpl->tpl_vars['NUMGUIA']->value;?>
" class="btn btn-large pull-right" data-dismiss="modal">Cerrar</a>
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
    
    $("#fwhr").rules('add', {
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
