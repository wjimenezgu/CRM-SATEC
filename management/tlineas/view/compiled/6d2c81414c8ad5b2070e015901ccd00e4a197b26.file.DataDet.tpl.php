<?php /* Smarty version Smarty-3.1.16, created on 2016-09-26 10:48:59
         compiled from "../tlineas/view/DataDet.tpl" */ ?>
<?php /*%%SmartyHeaderCode:187844763757d850f209e570-42628295%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d2c81414c8ad5b2070e015901ccd00e4a197b26' => 
    array (
      0 => '../tlineas/view/DataDet.tpl',
      1 => 1474903750,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '187844763757d850f209e570-42628295',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_57d850f20e1674_15485556',
  'variables' => 
  array (
    'NAV_MENU' => 0,
    'ACTION' => 0,
    'ID' => 0,
    'TIPOLINEA' => 0,
    'DATA' => 0,
    'BTN_ACTION' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57d850f20e1674_15485556')) {function content_57d850f20e1674_15485556($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['NAV_MENU']->value;?>

	<div class="row-fluid sortable">
		<div class="box span12">
			<div class="box-header well" data-original-title>
				<h2>Información Detalle de Linea</h2>
			</div>
			<div class="box-content">
				<form class="form-horizontal" id="frmData" action="processDataDet.php" method="POST">
					<input type="hidden" id="action" name="action" value="<?php echo $_smarty_tpl->tpl_vars['ACTION']->value;?>
">						
 			 	<fieldset>
  
					<div class="control-group" id="boxTipoID" >
	        		<label id="flid" class="control-label" for="disabledInput">Tipo Linea*</label>
						<div class="controls">
							<input readonly class="input-xlarge " name="ftipolinea" id="ftipolinea" type="text" style="text-transform:uppercase" placeholder="<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
" maxlength="3" value="<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
" readonly="true" >
						</div>
					</div>
                 	<div class="control-group" id="boxId" >
	        		<label id="flid" class="control-label" for="disabledInput">ID Linea*</label>
						<div class="controls">
							<input readonly class="input-xlarge " name="fId" id="fId" type="text" style="text-transform:uppercase" maxlength="3" placeholder="<?php echo $_smarty_tpl->tpl_vars['TIPOLINEA']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['TIPOLINEA']->value;?>
" readonly="true" >
						</div>
					</div>
		               <div class="control-group" id="boxdescripcion" >
					 <label id="flnl" class="control-label" for="disabledInput">Descripcion*</label>
						<div class="controls">
							<input class="input-xlarge " name="fdescripcion" id="fdescripcion" type="text" style="text-transform:uppercase" placeholder="Digite Descripcion" maxlength="100" value="<?php echo $_smarty_tpl->tpl_vars['DATA']->value[0]['descripcion'];?>
"  >
						</div>
                	</div>	
					
					<div class="control-group" id="boxLinea1" >
 						 <label id="flnl" class="control-label" for="disabledInput">Linea 1*</label>
						<div class="controls">
							<input class="input-xlarge " name="flinea1" id="flinea1" type="text" style="text-transform:uppercase" placeholder="Digite Linea 1" maxlength="100" value="<?php echo $_smarty_tpl->tpl_vars['DATA']->value[0]['linea1'];?>
"  >
						</div>
                     	</div>				
                        <div class="control-group" id="boxLinea2">
						<label class="control-label" for="disabledInput">Linea 2*</label>
						<div class="controls">
							<input class="input-xlarge " name="flinea2" id="flinea2" type="text" style="text-transform:uppercase" placeholder="Digite Linea 2" maxlength="100" value="<?php echo $_smarty_tpl->tpl_vars['DATA']->value[0]['linea2'];?>
"  >
						</div>
				 	</div>	
				 	<div class="control-group" id="boxLinea3">
						<label class="control-label" for="disabledInput">Linea 3*</label>
						<div class="controls">
							<input class="input-xlarge " name="flinea3" id="flinea3" type="text" style="text-transform:uppercase" placeholder="Digite Linea 3" maxlength="100" value="<?php echo $_smarty_tpl->tpl_vars['DATA']->value[0]['linea3'];?>
"  >
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
$('#fid').number( true, 3 );

$(document).ready(function(){
	// Si la action es igual a 3 significa que es un borrado
	// Si la action es igual a 4 significa que es solo visualizar
	// se buscar desabilitar todos los campos y que solo pueda seleccionar los botones de accion.
	var newAction = document.getElementById('action'); 
	
	if (newAction.value == "3" || newAction.value == "4"){
		$("#frmData :input").attr('readonly', true);
		
	}else{
		if (newAction.value == "1"){
			$("#ftipoLinea").attr('readonly', false);
			$("#boxId").css("display","none");
			$("#fdescripcion").focus();
		}else{
			$("#fdescripcion").focus();

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


    $("#fid").rules('add', {
        required: function(){$("#boxid").removeClass("error"); return true;},
        messages: {
            required:  function(){
                               $("#boxid").addClass("error");
                               $("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Complete la Información Requerida</strong></div>");
                            }
        }       
    });
    
    $("#ftipolinea").rules('add', {
        required: function(){$("#box").removeClass("error"); return true;},
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
