{$NAV_MENU}
	<div class="row-fluid sortable">
		<div class="box span12">
			<div class="box-header well" data-original-title>
				<h2>Información de Usuarios</h2>
			</div>
			<div class="box-content">
				<form class="form-horizontal" id="frmData" action="processData.php" method="POST">
					<input type="hidden" id="action" name="action" value="{$ACTION}">						
 			 	<fieldset>
					<div class="control-group" id="boxId" >
						<label id="flid" class="control-label" for="disabledInput">ID Perfil*</label>
						<div class="controls">
							<input class="input-xlarge " name="fId" id="fId" type="text" style="text-transform:uppercase" placeholder="{$ID}" maxlength="3" value="{$ID}" {if $ACTION eq 2} readonly="true"{/if} >
						</div>
					</div>				
					<div class="control-group" id="boxdescripcion">
						<label class="control-label" for="focusedInput">Nombre Perfil*</label>
						<div class="controls">
							<input class="input-xlarge focused" name ="fusername" id="fusername" maxlength="50" type="text" value="{$DATA[0].profileName}">
						</div>
				 	</div>	
				 	
				 	
				 	
					<div class="row-fluid sortable" id="boxDetalles">		
						<div class="box span12">
							<div class="box-header well" data-original-title>
								<h2>Valores del Factor</h2>
							</div>
							<div class="box-content">
								<button type="button" class="btn btn-small btn-success" id="addNewData" title="Agregar Nuevo Factor" data-rel="tooltip" onclick="goPage(1,{$ID},0)" style="margin-bottom:12px;"><i class="icon-plus icon-white"></i> Agregar</button>
<!-- 
								<a class="btn btn-small btn-info" href="prnListData.php" target="__blank" title="Imprimir Datos" data-rel="tooltip" style="margin-bottom:12px;"><i class="icon-print icon-white"></i> Imprimir</a>
 -->
								<table class="table table-striped table-bordered bootstrap-datatable" id="tblData">
									<thead>
										<tr>
											<th>Profile</th>
											<th>Users</th>
											<th>Acción</th>
										</tr>
									</thead>						
									{section name=lP loop=$LISTA_DATA} 								
										<tr style="padding:0px;" id="tr{$LISTA_DATA[lP].idProfile}">
				     						<td style="width:40px;">{$LISTA_DATA[lP].idProfile}</td>  
				                            <td style="width:385px;" align="left">{$LISTA_DATA[lP].username|lower|capitalize}</td>
											<td class="center">
												<a class="btn btn-primary" href="#" id="{$LISTA_DATA[lP].username}" title="Modificar Datos de Factor" data-rel="tooltip" onclick="goPage(2,{$ID},this.id)"><i class="icon-edit icon-white"></i>  Modificar</a>
												<a class="btn btn-danger" href="#" id="{$LISTA_DATA[lP].username}" title="Eliminar Factor" data-rel="tooltip" onclick="goPage(3,{$ID}, this.id)"><i class="icon-trash icon-white"></i> Eliminar</a>
												
												<a class="btn btn-warning" href="#" id="{$LISTA_DATA[lP].username}" title="Ver Factor" data-rel="tooltip" onclick="goPage(4,{$ID}, this.id)"><i class="icon-zoom-in icon-white"></i> Visualizar</a>
												
												
											</td>
										</tr> 
									{/section}
								</table>  
									            
							</div>
						</div><!--/span-->			
					</div><!--/row-->
				 				
				 				
				 				
				 				 					 			
 					<div class="modal-footer">
						<button id=btnSubFrmData type="submit" name="enviar" class="btn btn-large btn-primary pull-right">{$BTN_ACTION}</button>
						<a href="index.php" class="btn btn-large pull-right" data-dismiss="modal">Cerrar</a>
						<div id="message-fields-obl"></div> 
					</div> 					
				</fieldset>
		  </form>			
		    </div>				
		</div>		
	</div>
{literal}
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
			
			//$("#fId").hide();
			//$("#flid").hide();
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
{/literal}	