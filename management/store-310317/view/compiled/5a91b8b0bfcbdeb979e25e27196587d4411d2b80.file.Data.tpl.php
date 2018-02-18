<?php /* Smarty version Smarty-3.1.16, created on 2017-02-21 14:02:56
         compiled from "../store/view/Data.tpl" */ ?>
<?php /*%%SmartyHeaderCode:172326273757e017b6e06941-87660621%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a91b8b0bfcbdeb979e25e27196587d4411d2b80' => 
    array (
      0 => '../store/view/Data.tpl',
      1 => 1487710095,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '172326273757e017b6e06941-87660621',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_57e017b6e15174_52065706',
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
<?php if ($_valid && !is_callable('content_57e017b6e15174_52065706')) {function content_57e017b6e15174_52065706($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['NAV_MENU']->value;?>

	<div class="row-fluid sortable">
		<div class="box span12">
			<div class="box-header well" data-original-title>
				<h2>Información de Tiendas</h2>
			</div>
			<div class="box-content">
				<form class="form-horizontal" id="frmData" action="processData.php" method="POST">
					<input type="hidden" id="action" name="action" value="<?php echo $_smarty_tpl->tpl_vars['ACTION']->value;?>
">						
 			 	<fieldset>
					<div class="control-group" id="boxId" >
						<label class="control-label" for="disabledInput">Código*</label>
						<div class="controls">
							<input class="input-xlarge " name="fId" id="fId" type="text" style="text-transform:uppercase" placeholder="<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
" maxlength="3" value="<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['ACTION']->value==2) {?> readonly="true"<?php }?> >
						</div>
					</div>				
					<div class="control-group" id="boxdescripcion" >
						<label class="control-label" for="focusedInput">Nombre Tienda*</label>
						<div class="controls">
							<input class="input-xlarge focused" name ="fNombre" id="fNombre" maxlength="50" type="text" value="<?php echo $_smarty_tpl->tpl_vars['DATA']->value[0]['nombreTienda'];?>
">
						</div>
				 	</div>

				 	<div class="control-group" id="boxcia" >
						<label class="control-label" for="focusedInput">Nombre CIA*</label>
						<div class="controls">
							<input class="input-xlarge focused" name ="fNombreCia" id="ffNombreCi" maxlength="50" type="text" value="<?php echo $_smarty_tpl->tpl_vars['DATA']->value[0]['nombreCia'];?>
">
						</div>
				 	</div>
				 		
				 	<div class="control-group" id="boxjuridica" >
						<label class="control-label" for="focusedInput">Ced.Juridica*</label>
						<div class="controls">
							<input class="input-xlarge focused" name ="fCjuridica" id="fCjuridica" maxlength="50" type="text" value="<?php echo $_smarty_tpl->tpl_vars['DATA']->value[0]['cJuridica'];?>
">
						</div>
				 	</div>

				 	<div class="control-group" id="boxdireccion" >
						<label class="control-label" for="focusedInput">Direccion*</label>
						<div class="controls">
							<input class="input-xlarge focused" name ="fDireccion" id="fDireccion" maxlength="50" type="text" value="<?php echo $_smarty_tpl->tpl_vars['DATA']->value[0]['direccion'];?>
">
						</div>
				 	</div>

				 	<div class="control-group" id="boxubicacion" >
						<label class="control-label" for="focusedInput">Ubicacion*</label>
						<div class="controls">
							<input class="input-xlarge focused" name ="fUbicacion" id="fUbicacion" maxlength="50" type="text" value="<?php echo $_smarty_tpl->tpl_vars['DATA']->value[0]['ubicacion'];?>
">
						</div>
				 	</div>

				 	<div class="control-group" id="boxtelefono" >
						<label class="control-label" for="focusedInput">Telefonos*</label>
						<div class="controls">
							<input class="input-xlarge focused" name ="fTelefonos" id="fTelefonos" maxlength="50" type="text" value="<?php echo $_smarty_tpl->tpl_vars['DATA']->value[0]['telefonos'];?>
">
						</div>
				 	</div>

				 	<div class="control-group" id="boxtexaddi" >
						<label class="control-label" for="focusedInput">Texto Adicional*</label>
						<div class="controls">
							<input class="input-xlarge focused" name ="fTextoAdicional" id="fTextoAdicional" maxlength="50" type="text" value="<?php echo $_smarty_tpl->tpl_vars['DATA']->value[0]['textoAdicional'];?>
">
						</div>
				 	</div>

				 	<div class="control-group" id="boxcorreo" >
						<label class="control-label" for="focusedInput">Correo de Contacto*</label>
						<div class="controls">
							<input class="input-xlarge focused" name ="fCorreoContacto" id="fCorreoContacto" maxlength="50" type="text" value="<?php echo $_smarty_tpl->tpl_vars['DATA']->value[0]['correoContacto'];?>
">
						</div>
				 	</div>
				 			
				 	<div class="control-group" id="boxleyenda" >
						<label class="control-label" for="focusedInput">Leyenda de Tributacion*</label>
						<div class="controls">
							<input class="input-xlarge focused" name ="fLeyendaTributacion" id="fLeyendaTributacion" maxlength="100" type="text" value="<?php echo $_smarty_tpl->tpl_vars['DATA']->value[0]['leyendaTributacion'];?>
">
						</div>
				 	</div>

				 	<div class="control-group" id="boxfactura" >
						<label class="control-label" for="focusedInput">#Consecutivo Factura*</label>
						<div class="controls">
							<input class="input-xlarge focused" name ="fConsecFactura" id="fConsecFactura" maxlength="50" type="text" value="<?php echo $_smarty_tpl->tpl_vars['DATA']->value[0]['consecFactura'];?>
">
						</div>
				 	</div>

				 	<div class="control-group" id="boxproforma" >
						<label class="control-label" for="focusedInput">#Consecutivo Proforma*</label>
						<div class="controls">
							<input class="input-xlarge focused" name ="fConsecProforma" id="fConsecProforma" maxlength="50" type="text" value="<?php echo $_smarty_tpl->tpl_vars['DATA']->value[0]['consecProforma'];?>
">
						</div>
				 	</div>

				 	<div class="control-group" id="boxapartados" >
						<label class="control-label" for="focusedInput">#Consecutivo Apartados*</label>
						<div class="controls">
							<input class="input-xlarge focused" name ="fConsecApartados" id="fConsecApartados" maxlength="50" type="text" value="<?php echo $_smarty_tpl->tpl_vars['DATA']->value[0]['consecApartados'];?>
">
						</div>
				 	</div>

				 	<div class="control-group" id="boxreparaciones" >
						<label class="control-label" for="focusedInput">#Consecutivo Reparaciones*</label>
						<div class="controls">
							<input class="input-xlarge focused" name ="fConsecReparaciones" id="fConsecReparaciones" maxlength="50" type="text" value="<?php echo $_smarty_tpl->tpl_vars['DATA']->value[0]['consecReparaciones'];?>
">
						</div>
				 	</div>

				 	<div class="control-group" id="boxajustes" >
						<label class="control-label" for="focusedInput">#Consecutivo Ajustes*</label>
						<div class="controls">
							<input class="input-xlarge focused" name ="fConsecAjustes" id="fConsecAjustes" maxlength="50" type="text" value="<?php echo $_smarty_tpl->tpl_vars['DATA']->value[0]['consecAjuste'];?>
">
						</div>
				 	</div>

				 	<div class="control-group" id="boxtraslados" >
						<label class="control-label" for="focusedInput">#Consecutivo Traslados*</label>
						<div class="controls">
							<input class="input-xlarge focused" name ="fConsecTraslados" id="fConsecTraslados" maxlength="50" type="text" value="<?php echo $_smarty_tpl->tpl_vars['DATA']->value[0]['consecTraslados'];?>
">
						</div>
				 	</div>

				 	<div class="control-group" id="boxmovsal" >
						<label class="control-label" for="focusedInput">#Consecutivo Mov. Salidas*</label>
						<div class="controls">
							<input class="input-xlarge focused" name ="ftipoMovTSal" id="ftipoMovTSal" maxlength="50" type="text" value="<?php echo $_smarty_tpl->tpl_vars['DATA']->value[0]['tipoMovTSal'];?>
">
						</div>
				 	</div>

				 	<div class="control-group" id="boxmovent" >
						<label class="control-label" for="focusedInput">#Consecutivo Mov. Entradas*</label>
						<div class="controls">
							<input class="input-xlarge focused" name ="ftipoMovTEnt" id="ftipoMovTEnt" maxlength="50" type="text" value="<?php echo $_smarty_tpl->tpl_vars['DATA']->value[0]['tipoMovTEnt'];?>
">
						</div>
				 	</div>

				 	<div class="control-group" id="boxnotacr" >
						<label class="control-label" for="focusedInput">#Consecutivo Nota Cr*</label>
						<div class="controls">
							<input class="input-xlarge focused" name ="fconsecNotaCr" id="fconsecNotaCr" maxlength="50" type="text" value="<?php echo $_smarty_tpl->tpl_vars['DATA']->value[0]['consecNotaCr'];?>
">
						</div>
				 	</div>

				 	<div class="control-group" id="boxfacmanual" >
						<label class="control-label" for="focusedInput">#Consecutivo Fact. Manual*</label>
						<div class="controls">
							<input class="input-xlarge focused" name ="fconsecFactuManual" id="fconsecFactuManual" maxlength="50" type="text" value="<?php echo $_smarty_tpl->tpl_vars['DATA']->value[0]['consecFactuManual'];?>
">
						</div>
				 	</div>

				 	<div class="control-group" id="boxcliente" >
						<label class="control-label" for="focusedInput">#Consecutivo Clientes*</label>
						<div class="controls">
							<input class="input-xlarge focused" name ="fconsecCliente" id="fconsecCliente" maxlength="50" type="text" value="<?php echo $_smarty_tpl->tpl_vars['DATA']->value[0]['consecCliente'];?>
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
	if (newAction.value == "3" || newAction.value == "4" ){
		$("#frmData :input").attr('readonly', true);
		    //OCULTAR CAMPOS
	}else
	    if(newAction.value == "5"){
	    $("#boxdescripcion :input").attr('readonly', true);
	    $("#boxId").css("display","none");
	    $("#boxcia").css("display","none");         //OCULTAR CAMPOS
		$("#boxjuridica").css("display","none");
		$("#boxdireccion").css("display","none");
		$("#boxubicacion").css("display","none");
		$("#boxtelefono").css("display","none");
		$("#boxubicacion").css("display","none");
		$("#boxtexaddi").css("display","none");
		$("#boxcorreo").css("display","none");
		$("#boxleyenda").css("display","none");
		$("#boxfactura").css("display","none");
		$("#boxproforma").css("display","none");
		$("#boxapartados").css("display","none");
		$("#boxreparaciones").css("display","none");
		$("#boxajustes").css("display","none");
		$("#boxtraslados").css("display","none");
		$("#boxmovsal").css("display","none");
		$("#boxmovent").css("display","none");
		$("#boxnotacr").css("display","none");
		$("#boxcliente").css("display","none");  
		$("#boxfacmanual :input").focus();
		}else 
		if (newAction.value == "1"){
			$("#fId").focus();
		}else{
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
    
    $("#fId").rules('add', {
        required: function(){$("#boxId").removeClass("error"); return true;},
        messages: {
            required:  function(){
                               $("#boxId").addClass("error");
                               $("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Complete la Información Requerida</strong></div>");
                            }
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
