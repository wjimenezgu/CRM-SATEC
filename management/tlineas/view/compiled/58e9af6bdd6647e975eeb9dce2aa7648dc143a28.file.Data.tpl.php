<?php /* Smarty version Smarty-3.1.16, created on 2016-09-09 09:13:35
         compiled from "../factor/view/Data.tpl" */ ?>
<?php /*%%SmartyHeaderCode:82874196555b930834e8852-23595827%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58e9af6bdd6647e975eeb9dce2aa7648dc143a28' => 
    array (
      0 => '../factor/view/Data.tpl',
      1 => 1471877242,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '82874196555b930834e8852-23595827',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_55b93083518137_51716838',
  'variables' => 
  array (
    'NAV_MENU' => 0,
    'ACTION' => 0,
    'ID' => 0,
    'DATA' => 0,
    'LISTA_DATA' => 0,
    'BTN_ACTION' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55b93083518137_51716838')) {function content_55b93083518137_51716838($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include '/var/www/CRM-SATEC/resources/libs/smarty/libs/plugins/modifier.capitalize.php';
?><?php echo $_smarty_tpl->tpl_vars['NAV_MENU']->value;?>

	<div class="row-fluid sortable">
		<div class="box span12">
			<div class="box-header well" data-original-title>
				<h2>Información de Factor</h2>
			</div>
			<div class="box-content">
				<form class="form-horizontal" id="frmData" action="processData.php" method="POST">
					<input type="hidden" id="action" name="action" value="<?php echo $_smarty_tpl->tpl_vars['ACTION']->value;?>
">						
 			 	<fieldset>
					<div class="control-group" id="boxId" >
						<label id="flid" class="control-label" for="disabledInput">Id*</label>
						<div class="controls">
							<input readonly class="input-xlarge " name="fId" id="fId" type="text" style="text-transform:uppercase" placeholder="<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
" maxlength="3" value="<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['ACTION']->value==2) {?> readonly="true"<?php }?> >
						</div>
					</div>				
					<div class="control-group" id="boxdescripcion">
						<label class="control-label" for="focusedInput">Descripción*</label>
						<div class="controls">
							<input class="input-xlarge focused" name ="fdescripcion" id="fdescripcion" maxlength="50" type="text" value="<?php echo $_smarty_tpl->tpl_vars['DATA']->value[0]['descripcion'];?>
">
						</div>
				 	</div>	
				 	
				 	
				 	
					<div class="row-fluid sortable" id="boxDetalles">		
						<div class="box span12">
							<div class="box-header well" data-original-title>
								<h2>Valores del Factor</h2>
							</div>
							<div class="box-content">
								<button type="button" class="btn btn-small btn-success" id="addNewData" title="Agregar Nuevo Factor" data-rel="tooltip" onclick="goPage(1,<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
,0)" style="margin-bottom:12px;"><i class="icon-plus icon-white"></i> Agregar</button>
<!-- 
								<a class="btn btn-small btn-info" href="prnListData.php" target="__blank" title="Imprimir Datos" data-rel="tooltip" style="margin-bottom:12px;"><i class="icon-print icon-white"></i> Imprimir</a>
 -->
								<table class="table table-striped table-bordered bootstrap-datatable" id="tblData">
									<thead>
										<tr>
											<th>Id</th>
											<th>Valor</th>
											<th>Acción</th>
										</tr>
									</thead>						
									<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['name'] = 'lP';
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['LISTA_DATA']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['total']);
?> 								
										<tr style="padding:0px;" id="tr<?php echo $_smarty_tpl->tpl_vars['LISTA_DATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['numLinea'];?>
">
				     						<td style="width:40px;"><?php echo $_smarty_tpl->tpl_vars['LISTA_DATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['numLinea'];?>
</td>  
				                            <td style="width:385px;" align="left"><?php echo smarty_modifier_capitalize(mb_strtolower($_smarty_tpl->tpl_vars['LISTA_DATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['valor'], 'UTF-8'));?>
</td>
											<td class="center">
												<a class="btn btn-primary" href="#" id="<?php echo $_smarty_tpl->tpl_vars['LISTA_DATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['numLinea'];?>
" title="Modificar Datos de Factor" data-rel="tooltip" onclick="goPage(2,<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
,this.id)"><i class="icon-edit icon-white"></i>  Modificar</a>
												<a class="btn btn-danger" href="#" id="<?php echo $_smarty_tpl->tpl_vars['LISTA_DATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['numLinea'];?>
" title="Eliminar Factor" data-rel="tooltip" onclick="goPage(3,<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
, this.id)"><i class="icon-trash icon-white"></i> Eliminar</a>
												<!-- 
												<a class="btn btn-warning" href="#" id="<?php echo $_smarty_tpl->tpl_vars['LISTA_DATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['numLinea'];?>
" title="Ver Factor" data-rel="tooltip" onclick="goPage(4,<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
, this.id)"><i class="icon-zoom-in icon-white"></i> Visualizar</a>
												 -->
												
											</td>
										</tr> 
									<?php endfor; endif; ?>
								</table>  
									            
							</div>
						</div><!--/span-->			
					</div><!--/row-->
				 				
				 				
				 				
				 				 					 			
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
	
	$('#boxDetalles').css("display","none");
	
	if (newAction.value == "3" || newAction.value == "4"){
		$("#frmData :input").attr('readonly', true);
		
	}else{
		if (newAction.value == "1"){
			
			$("#fId").hide();
			$("#flid").hide();
			$("#fdescripcion").focus();
		}else{
			if(newAction.value == "5"){
				$("#fId").attr('readonly', true);
				$("#fdescripcion").attr('readonly', true);
				$('#boxDetalles').css("display","block");
			}else{
				$("#fdescripcion").focus();
			}
			
		}
	}
});

function goPage(action, parentId,id){
		
		window.location.href ='DataDet.php?action='+action+"&parentId="+parentId+"&id="+id;	
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
});
</script>
	<?php }} ?>
