<?php /* Smarty version Smarty-3.1.16, created on 2016-09-13 11:02:55
         compiled from "../factor/view/DataDet.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24997566255b933ef27e0a4-95173208%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8f74363c0f1b8d0e80e604e466dcdc2a6595b1c' => 
    array (
      0 => '../factor/view/DataDet.tpl',
      1 => 1471855642,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24997566255b933ef27e0a4-95173208',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_55b933ef2a7fb2_38298088',
  'variables' => 
  array (
    'NAV_MENU' => 0,
    'ACTION' => 0,
    'ID' => 0,
    'NUM_LINEA' => 0,
    'DATA' => 0,
    'BTN_ACTION' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55b933ef2a7fb2_38298088')) {function content_55b933ef2a7fb2_38298088($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['NAV_MENU']->value;?>

	<div class="row-fluid sortable">
		<div class="box span12">
			<div class="box-header well" data-original-title>
				<h2>Información de Detalle</h2>
			</div>
			<div class="box-content">
				<form class="form-horizontal" id="frmData" action="processDataDet.php" method="POST">
					<input type="hidden" id="action" name="action" value="<?php echo $_smarty_tpl->tpl_vars['ACTION']->value;?>
">						
 			 	<fieldset>
					<div class="control-group" id="boxId" >
						<label id="flid" class="control-label" for="disabledInput">Factor*</label>
						<div class="controls">
							<input readonly class="input-xlarge " name="fId" id="fId" type="text" style="text-transform:uppercase" placeholder="<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
" maxlength="3" value="<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
" readonly="true" >
						</div>
					</div>
					<div class="control-group" id="boxNumLinea" >
						<label id="flnl" class="control-label" for="disabledInput">Numero de Linea*</label>
						<div class="controls">
							<input readonly class="input-xlarge " name="fNumLinea" id="fNumLinea" type="text" style="text-transform:uppercase" placeholder="<?php echo $_smarty_tpl->tpl_vars['NUM_LINEA']->value;?>
" maxlength="3" value="<?php echo $_smarty_tpl->tpl_vars['NUM_LINEA']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['ACTION']->value==2||3) {?> readonly="true"<?php }?> >
						</div>
					</div>				
					<div class="control-group" id="boxdescripcion">
						<label class="control-label" for="focusedInput">Valor</label>
						<div class="controls">
							<input class="input-xlarge focused" name ="fdescripcion" id="fdescripcion" maxlength="8" type="text" value="<?php echo $_smarty_tpl->tpl_vars['DATA']->value[0]['valor'];?>
">
						</div>
				 	</div>	
 				 					 			
 					<div class="modal-footer">
						<button id=btnSubFrmData type="submit" name="enviar" class="btn btn-large btn-primary pull-right"><?php echo $_smarty_tpl->tpl_vars['BTN_ACTION']->value;?>
</button>
						<!-- 
						<button id=btnSubFrmData type="submit" name="enviar" class="btn btn-large pull-right">Cerrar</button>
						
						<a href="index.php" class="btn btn-large pull-right" data-dismiss="modal">Cerrar</a>
						 -->
						<a href="#" class="btn btn-large pull-right" data-dismiss="modal" onclick="Regresar();">Cerrar</a>
						<div id="message-fields-obl"></div> 
					</div> 					
				</fieldset>
		  </form>			
		    </div>				
		</div>		
	</div>

<script type="text/javascript">
$('#fdescripcion').number( true, 3 );

$(document).ready(function(){
	// Si la action es igual a 3 significa que es un borrado
	// Si la action es igual a 4 significa que es solo visualizar
	// se buscar desabilitar todos los campos y que solo pueda seleccionar los botones de accion.
	var newAction = document.getElementById('action'); 
	
	if (newAction.value == "3" || newAction.value == "4"){
		$("#frmData :input").attr('readonly', true);
		
	}else{
		if (newAction.value == "1"){
			$("#fNumLinea").attr('readonly', false);
			$("#fNumLinea").focus();
		}else{
			$("#fNumLinea").focus();

		}
	}
});

function goPage(action, id){
		
		window.location.href ='DataDet.php?action='+action+"&parentId"+parentId+"&id="+id;	
	}	

function Regresar(){
	// Regresa al usuario a la pagina anterior
	history.go(-1)		
}

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
    
    $("#fNumLinea").rules('add', {
        required: function(){$("#boxNumLinea").removeClass("error"); return true;},
        messages: {
            required:  function(){
                               $("#boxNumLinea").addClass("error");
                               $("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Complete la Información Requerida</strong></div>");
                            }
        }       
    });
});
</script>
	<?php }} ?>
