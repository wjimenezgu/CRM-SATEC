{$NAV_MENU}
	<div class="row-fluid">
		<div class="box span12">
			<div class="box-header well" data-original-title>
				<h2>Información Articulo</h2>
			</div>
			<div class="box-content">
				<form class="form-horizontal" id="frmEditItem"  action="processItem.php"  method="POST">
					<input type="hidden" id="action" name="action" value="{$ACTION}">
 			 		<fieldset>
						<div class="control-group" id="boxfidItem">
							<label class="control-label" for="disabledInput">Id</label>
							<div class="controls">
								<input class="input-xlarge " name="fidItem" id="fidItem" type="text" placeholder="{$ID_ITEM}" value="{$ID_ITEM}" {if $ACTION eq 2} readonly="true"{/if} >
							</div>
						</div>				
						<div class="control-group" id="boxfDescripcion">
							<label class="control-label" for="focusedInput">Descripcion*</label>
							<div class="controls">
								<input class="input-xlarge focused" name ="fDescripcion" id="fDescripcion" type="text" value="{$ITEM[0].desArticulo}" style="width: 400px;">
							</div>
				 		</div>
				 		<div class="control-group" id="boxfcodigoExterno">
							<label class="control-label" for="focusedInput">Codigo Externo</label>
							<div class="controls">
								<input class="input-xlarge focused" name="fcodigoExterno" id="fcodigoExterno" type="text" value="{$ITEM[0].codArtiProveedor}">
							</div>
				 		</div>
				 		<div class="control-group" id="boxfdescExterno">
							<label class="control-label" for="focusedInput">Desc. Externo</label>
							<div class="controls">
								<input class="input-xlarge focused" name="fdescExterno" id="fdescExterno" type="text" value="{$ITEM[0].descArtiProveedor}" style="width: 400px;">
							</div>
				 		</div>				 
                                <table class="table table-bordered " id="tblListMov">
                                    <thead>
                                        <tr>
                                            <th>Tienda</th>
                                            <th>Fecha Mov.</th>                                            
                                            <th>Documento</th>                                                                                       
                                            <th>Movimiento</th>
                                            <th>Cantidad</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {section loop=$ITEM_MOVI name=p}
                                        <tr style="{if $ITEM_MOVI[p].Tienda ne $TIENDA_ACTUAL} {assign var="TIENDA_ACTUAL" value=$ITEM_MOVI[p].Tienda}       {cycle  assign='COLOR_LINEA' values="#ffff99,#ffccff"} background-color:{$COLOR_LINEA} {else}background-color:{$COLOR_LINEA} {/if}">

                                            <td>{if $ITEM_MOVI[p].Tienda ne $NOMBRE_TIENDA_ACTUAL} {assign var="NOMBRE_TIENDA_ACTUAL" value=$ITEM_MOVI[p].Tienda} {$ITEM_MOVI[p].Tienda} {else} {/if}</td>
                                            <td>{$ITEM_MOVI[p].FechaMovF}</td>
                                            <td>{$ITEM_MOVI[p].NumDocu}</td>
                                            <td>{$ITEM_MOVI[p].Siglas}</td>
                                            <td style="text-align: right;">{$ITEM_MOVI[p].CantiMov}</td>                                                                                                                                    
                                        </tr>
                                        {/section}
                                    </tbody>
                                </table>                                  


 					<div class="modal-footer">

						<button id=btnSubFrmItem type="submit" name="enviar" class="btn btn-large btn-primary pull-right">{$BTN_ACTION}</button>
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
	// se buscar desabilitar todos los campos y que solo pueda seleccionar los botones de accion.
	var newAction = document.getElementById('action'); 
	if ((newAction.value == "3") ||(newAction.value == "7")){
		$("#frmEditItem :input").attr('readonly', true);
	}else if(newAction.value == "1") {
		// insertar registro valor default para exento es No.
		$("#optionNo").attr('checked', "checked");
	}


});

$(function(){
    $('#frmEditItem').validate({ 
        submitHandler: function (form) {             
            $("#message-fields-obl").css("display","none");
            form.submit();            
        }
    });

    $("#fidItem").rules('add', {
        required: function(){$("#boxfidItem").removeClass("error"); return true;},
        maxlength:12,
        messages: {
            required:  function(){
                               $("#boxfidItem").addClass("error");
                               $("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Codigo de Articulo Requerido.</strong></div>");
                            },
            maxlength:function(){
                				$("#boxfidItem").addClass("error");
                				$("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Codigo Articulo Máximo Largo 12.</strong></div>");
             }
        }
    });
    
    $("#fDescripcion").rules('add', {
        required: function(){$("#boxfDescripcion").removeClass("error"); return true;},
        maxlength:50,
        messages: {
            required:  function(){
                               $("#boxfDescripcion").addClass("error");
                               $("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Descripcion es requerida.</strong></div>");
                            },
            maxlength:function(){
                				$("#boxfDescripcion").addClass("error");
                				$("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Descripcion. Máximo Largo 50.</strong></div>");
            
            	}
            }
    });

    $("#fcodigoExterno").rules('add', {
        maxlength:20,
        messages: {
            maxlength:function(){
                				$("#boxfcodigoExterno").addClass("error");
                				$("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Codigo Externo. Máximo Largo 20.</strong></div>");
             }
        }
    });

    $("#fdescExterno").rules('add', {
        maxlength:50,
        messages: {
            maxlength:function(){
                				$("#boxfdescExterno").addClass("error");
                				$("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Desc. Externo. Máximo Largo 50.</strong></div>");
             }
        }
    });

    $("#fcosto").rules('add', {
        required: function(){$("#boxfcosto").removeClass("error"); return true;},
        messages: {
            required:  function(){
                               $("#boxfcosto").addClass("error");
                               $("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Costo es requerido.</strong></div>");
                            },
            
            }
    });
    
    $("#fprecio").rules('add', {
        required: function(){$("#boxfprecio").removeClass("error"); return true;},
        messages: {
            required:  function(){
                               $("#boxfprecio").addClass("error");
                               $("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Precio es requerido.</strong></div>");
                            },
            
            }
    });    

    $("#fcodigoBarras").rules('add', {
        maxlength:30,
        messages: {
            maxlength:function(){
                				$("#boxfcodigoBarras").addClass("error");
                				$("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Codigo Barras. Máximo Largo 30.</strong></div>");
             }
        }
    });
        
});


/*
function validateForm() {
   if (fieldBlank("Descripcion",document.forms["editForm"]["fDescripcion"].value)){
	   return false;
	   }	
   if (fieldBlank("Costo",document.forms["editForm"]["fcosto"].value)){
	   return false;
	   }
   if (fieldNoNumeric("Costo",document.forms["editForm"]["fcosto"].value)){
	   return false;
	   }      
   if (fieldBlank("Minimo",document.forms["editForm"]["fminimo"].value)){
	   return false;
	   }
   if (fieldNoNumeric("Minimo",document.forms["editForm"]["fminimo"].value)){
	   return false;
	   }
   if (fieldBlank("Maximo",document.forms["editForm"]["fmaximo"].value)){
	   return false;
	   }
   if (fieldNoNumeric("Maximo",document.forms["editForm"]["fmaximo"].value)){
	   return false;
	   }
   if (fieldBlank("Reorden",document.forms["editForm"]["freorden"].value)){
	   return false;
	   }
   if (fieldNoNumeric("Reorden",document.forms["editForm"]["freorden"].value)){
	   return false;
	   }
   if (fieldBlank("Precio",document.forms["editForm"]["fprecio"].value)){
	   return false;
	   }
   if (fieldNoNumeric("Precio",document.forms["editForm"]["fprecio"].value)){
	   return false;
	   }                         
   return true;
}

function fieldBlank(fieldName,fieldValue) {
    if (fieldValue == null || fieldValue == "") {
        alert(fieldName+" es requerido.");
        return true;
    }
    return false;
}

function fieldNoNumeric(fieldName,fieldValue) {
	var twoPlacedFloat = parseFloat(fieldValue).toFixed(2);
    if (twoPlacedFloat == "NaN" || Number(fieldValue).toString() == "NaN") {
    	alert(fieldName+" debe ser numerico.");
       	return true;
    }        
    return false;
}
*/

</script>
{/literal}