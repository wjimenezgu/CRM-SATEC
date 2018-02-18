<?php /* Smarty version Smarty-3.1.16, created on 2016-11-13 21:02:10
         compiled from "../notascr/view/NotaCr.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27815973856b262668357f3-31920257%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c24064a4ab6075ae432026039508d1eca86a3a5' => 
    array (
      0 => '../notascr/view/NotaCr.tpl',
      1 => 1479095844,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27815973856b262668357f3-31920257',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_56b262668e4c29_42581678',
  'variables' => 
  array (
    'NAV_MENU' => 0,
    'ACTION' => 0,
    'IDTIENDA' => 0,
    'IDFACT' => 0,
    'TIRAARTI' => 0,
    'TOTALIVNOTA' => 0,
    'ID' => 0,
    'DATA' => 0,
    'NOMBRE' => 0,
    'NUMDOCUFACT' => 0,
    'TOTAL' => 0,
    'SALDO' => 0,
    'BTN_ACTION' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56b262668e4c29_42581678')) {function content_56b262668e4c29_42581678($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['NAV_MENU']->value;?>
  
	<div class="row-fluid sortable">
		<div class="box span12">
			<div class="box-header well" data-original-title>
				<h2>Información de Nota</h2>
			</div>
			<div id="message-fields" style='alignment-adjust:  central;'></div>
			<div class="box-content">
				<form class="form-horizontal" id="frmData" action="processNotaCr.php" method="POST">
					<input type="hidden" id="action"   name="action"   value="<?php echo $_smarty_tpl->tpl_vars['ACTION']->value;?>
">	
					<input type="hidden" id="idtienda" name="idtienda" value="<?php echo $_smarty_tpl->tpl_vars['IDTIENDA']->value;?>
">	
					<input type="hidden" id="idfact"   name="idfact"   value="<?php echo $_smarty_tpl->tpl_vars['IDFACT']->value;?>
">
					<input type="hidden" id="tiraArti"   name="tiraArti"   value="<?php echo $_smarty_tpl->tpl_vars['TIRAARTI']->value;?>
">
					<input type="hidden" id="totalivnota"   name="totalivnota"   value="<?php echo $_smarty_tpl->tpl_vars['TOTALIVNOTA']->value;?>
">														
 			 	<fieldset>
					<div class="control-group" id="boxidNota" >
						<label id="flid" class="control-label" for="disabledInput">Id*</label>
						<div class="controls">
							<input readonly class="input-xlarge " name="idNota" id="idNota" type="text" style="text-transform:uppercase" placeholder="<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
" maxlength="3" value="<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['ACTION']->value==2) {?> readonly="true"<?php }?> >
						</div>
					</div>				
 			 	    <table>
						<tbody>
							<td>
					<div class="control-group" id="boxnombre">
						<label class="control-label" for="focusedInput">Cliente</label>
						<div class="controls">
							<input class="input-xlarge focused" name ="nombre" id="nombre"  type="text" value="<?php if ($_smarty_tpl->tpl_vars['ACTION']->value!=1) {?> <?php echo $_smarty_tpl->tpl_vars['DATA']->value[0]['nombre'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['NOMBRE']->value;?>
 <?php }?>">
						</div>
				 	</div>
					</td>
					<td>
						<div class="control-group" id="boxVendedor" >
							<label class="control-label" for="focusedInput">Vendedor</label>
							<div class="controls">
								<input class="input-small focused" name ="fVendedor" id="fVendedor" type="text" value=" ">
							</div>
				 		</div>					
					</td>
					<td>
					<div class="control-group" id="boxClaveVendedor" >
							<label class="control-label" for="focusedInput">Clave</label>
							<div class="controls">
							   <div class="vendedorvalido" id="0"></div>
								<input class="input-small focused" name ="fClaveVendedor" id="fClaveVendedor" type="password" value="">
							</div>
				 		</div>
					</td>
					<td>
						<button type="button" class="btn btn-warning" id="btnValidaVendedor" name="btnValidaVendedor" style="margin-top: -20px;">Validar</button>
					</td>
					</tbody>
					</table>			 	
					<div class="control-group" id="bnumNota">
						<label class="control-label" for="focusedInput">Número Nota</label>
						<div class="controls">
							<input class="input-xlarge focused" name ="numNota" id="numNota"  type="text" value="<?php echo $_smarty_tpl->tpl_vars['DATA']->value[0]['numDocu'];?>
">
						</div>
				 	</div>	
				 					 		
					<div class="control-group" id="bnumDocuFact">
						<label class="control-label" for="focusedInput">Factura</label>
						<div class="controls">
							<input class="input-xlarge focused" name ="numDocuFact" id="numDocuFact"  type="text" value="<?php if ($_smarty_tpl->tpl_vars['ACTION']->value!=1) {?> <?php echo $_smarty_tpl->tpl_vars['DATA']->value[0]['numDocuFact'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['NUMDOCUFACT']->value;?>
 <?php }?>">
						</div>
				 	</div>	
					<div class="control-group" id="boxfecNota">
						<label class="control-label" for="focusedInput">Fecha Nota</label>
						<div class="controls">
							<input class="input-xlarge focused datepicker" name ="fecNota" id="fecNota"  type="text" value="">
						</div>
				 	</div>					 					 					 	
					<div class="control-group" id="boxtotal">
						<label class="control-label" for="focusedInput">Total</label>
						<div class="controls">
							<input class="input-xlarge focused" name ="total" id="total" style=" text-align:right" type="text" value="<?php if ($_smarty_tpl->tpl_vars['ACTION']->value!=1) {?> <?php echo $_smarty_tpl->tpl_vars['DATA']->value[0]['total'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['TOTAL']->value;?>
 <?php }?>">
						</div>
				 	</div>
					<div class="control-group" id="boxsaldo">
						<label class="control-label" for="focusedInput">Saldo</label>
						<div class="controls">
							<input class="input-xlarge focused" name ="saldo" id="saldo" style=" text-align:right" type="text" value="<?php echo $_smarty_tpl->tpl_vars['SALDO']->value;?>
">
						</div>
				 	</div>
				 	<div class="control-group" id="boxmontodev">
						<label class="control-label" for="focusedInput">Devolución</label>
						<div class="controls">
							<input class="input-xlarge focused" name ="montodev" id="montodev" style=" text-align:right" type="text" value="0.00">
						</div>
				 	</div>
				 	<div class="control-group" style="margin-left: -150px;" id=boxSiNo>
						<div class="controls">
				 			<label class="radio">Devolución de Dinero?</label>					
							<select id="fdevoSiNo"  name="fdevoSiNo" style="width:120px; margin-left:15px">
                				<option  value="0">Seleccionar</option>
                				<option  value="SI">Si</option>                                         
                    			<option  value="NO">No</option>
                			</select>					
						</div>  <!-- class controls -->             
					</div>	<!-- boxSiNo -->						 	
					<div class="control-group" id="boxrazonNota">
						<label class="control-label" for="focusedInput">Razón Nota</label>
						<div class="controls">
							<input class="input-xlarge focused" name ="razonNota" id="razonNota"  type="text" maxlength="200" value="<?php echo $_smarty_tpl->tpl_vars['DATA']->value[0]['razonNota'];?>
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
	$('#montodev').number( true, 2 );
	
	$.validator.addMethod("notEqual", function(value, element, param) {
          return this.optional(element) || value != param;
        }, "");   
	
	
	$.validator.addMethod('greaterThan', function(value, element, param) {
	    if (this.optional(element)) return true;
	    
	    var strmd = value;
	    var montoDev = parseFloat(strmd.replace(",", "")).toFixed(2);
	    var str = $("#saldo").val();
	    var saldo = parseFloat(str.replace(",", "")).toFixed(2);
	    
	    return montoDev <= saldo;
	}, "");
	
	
	var newAction = document.getElementById('action'); 
	
    $('.datepicker').datepicker({
        language: "es",
        format:"dd/mm/yyyy",
        todayHighlight: true,
        autoclose: true
        //,           
        //startDate: new Date()
     });
    
    $( "#fecNota" ).datepicker({dateFormat:"dd/mm/yyyy"}).datepicker("setDate",new Date());
	
	if (newAction.value == "3" || newAction.value == "4"){
		$("#frmData :input").attr('readonly', true);
		
	}else{
		if (newAction.value == "1"){
			// es una inserción que viene desde la pantalla de anular factura
			// por eso deshabilitan varios campos

			$("#boxidNota").hide();
			$("#boxfecNota").hide();
			$("#bnumNota").hide();
			$("#boxsaldo").hide();
			$("#boxmontodev").hide();
			$("#nombre").attr('readonly', true);
			$("#numDocuFact").attr('readonly', true);
			$("#fecNota").attr('readonly', true);
			$("#total").attr('readonly', true);
			$("#fVendedor").focus();
		}else{
			if(newAction.value == "5"){
				$("#fId").attr('readonly', true);
				$("#fdescripcion").attr('readonly', true);
				$('#boxDetalles').css("display","block");
			}else{
				if (newAction.value == "7"){
					// es una insercion manual de la nota
					// por que es una nota que no se tiene en el sistema nuevo
					// y el cliente la trae para aplicarla a una compra
					//$("#bnumDocuFact").hide();
					$("#boxSiNo").hide();
					$("#nombre").attr('readonly', true);
					$("#total").number(true,2);

					$("#fVendedor").focus();
				}else{
					if (newAction.value == "9"){
						// haer un movimiento de devolucion de dinero
						$("#nombre").attr('readonly', true);
						$("#numDocuFact").attr('readonly', true);
						$("#fecNota").attr('readonly', true);
						$("#total").attr('readonly', true);
						$("#numNota").attr('readonly', true);
						$("#saldo").attr('readonly', true);						
						$("#boxSiNo").hide();
						$("#boxrazonNota").hide();
						$("#fVendedor").focus();
					}else{
					
						$("#fdevoSiNo").focus();
					}
				}
			}
			
		}
	}
	$("#btnSubFrmData").prop('disabled', true);
});

$("#fdevoSiNo").on("change", function(e){
    e.preventDefault();
    var vfdevoSiNo = $("#fdevoSiNo").val();
    if (vfdevoSiNo == "SI"){
    	$("#razonNota").val("Devolución de Dinero");

    }else{
    	$("#razonNota").val(""); 
    }
    $("#razonNota").focus();
});

$("#fClaveVendedor").on("change", function (e){
    e.preventDefault();
    verVendor();        
});


function verVendor(){   

	var user = $("#fVendedor").val();
    var pass = $("#fClaveVendedor").val();
    user = user.trim();
    pass = pass.trim();
    var vendedorValido = false;
    var vendedorLista ="";
    var claveVendedor ="";
    
    document.getElementById('message-fields').innerHTML = "";
    if (user == ""){
    	document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Campo Vendedor en Blanco.</strong></div>";
    	$("#fVendedor").focus();
    	return;
    }
    if (pass == ""){
    	document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Campo Clave en Blanco.</strong></div>";
    	$("#fClaveVendedor").focus();
    	return;
    }
    
    
    // se valida el codigo de vendedor y la clave
      	$.ajax({
        type: "POST",
        url: "ValidaVendedor.php",
        async: false,
        dataType : "text",
        data: "fVendedor="+user+"&fClaveVendedor="+pass,
       	success: function(data2,strMsg){
       		var vdata2 = parseInt(data2); 
       		if ( vdata2 == 1) {
       			$(".vendedorvalido").attr("id", "1");	
       			//alert('true'+data2);
       			vendedorValido = true;

       		}
       		else {
       			//alert('false'+data2);
       			$(".vendedorvalido").attr("id", "0");
				vendedorValido = false;

			}
        },
        error: function(jqXHR,textStatus,errorThrown){
            alert('Error al validar Vendedor '+errorThrown);
        }
    });
 
//alert ('valido'+$(".vendedorvalido").attr("id"));
    if ($(".vendedorvalido").attr("id") == "1" ){ 
    //if (vendedorValido=true){
       $("#btnSubFrmData").prop('disabled', false);
       $("#fdevoSiNo").focus();
    }else{
       document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Vendedor y/o contraseña incorrectos</strong></div>";
       $("#btnSubFrmData").prop('disabled', true);
       $("#fVendedor").val("");
       $("#fClaveVendedor").val("");
       $("#fVendedor").focus();              	
    };               
	} // function verVendedor



$(function(){
	$("#montodev").removeClass("error");
	document.getElementById('message-fields').innerHTML = "";
	
    $('#frmData').validate({ 
        submitHandler: function (form) {             
            $("#message-fields-obl").css("display","none");
            form.submit();            
        }
    });


    $("#razonNota").rules('add', {
        required: function(){$("#boxrazonNota").removeClass("error"); return true;},
        messages: {
            required:  function(){
                               $("#boxrazonNota").addClass("error");
                               $("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Razón de la nota es requerido.</strong></div>");
                            }
        }
    });
    
    
    $("#fecNota").rules('add', {
        required: function(){$("#boxfecNota").removeClass("error"); return true;},
        messages: {
            required:  function(){
                               $("#boxfecNota").addClass("error");
                               $("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Fecha de la nota es requerida.</strong></div>");
                            }
        }
    });
    
    if (newAction.value == "9"){
    	// solo si es devolucion de dinero se deben hacer las validaciones que se indcan
    	// abajo.
      
	    $("#total").rules('add', {
	        required: function(){$("#boxtotal").removeClass("error"); return true;},
	        messages: {
	            required:  function(){
	                               $("#boxtotal").addClass("error");
	                               $("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Monto de la nota es requerido.</strong></div>");
	                            }
	        }
	    });
	    
	    
	    $("#montodev").rules('add', {
	        required: function(){$("#montodev").removeClass("error"); return true;},
	        number:true,
	        notEqual: 0.00,
	        greaterThan : $("#saldo").val().replace(",", ""),
	        messages: {
	            required:  function(){
	                               $("#montodev").addClass("error");
	                               $("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Complete la Información Requerida</strong></div>");
	                            },
	            number:  function(){
	                               $("#montodev").addClass("error");
	                               $("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Complete la Información Requerida</strong></div>");
	                            },
	            notEqual:  function(){
	                               $("#montodev").addClass("error");
	                               $("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Debe ser diferente de 0.00</strong></div>");
	                            },
	            greaterThan:  function(){
	                                $("#montodev").addClass("error");
	                                $("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Devolucipno debe ser menor al saldo.</strong></div>");
	                             }                            
	                            
	        }
	    });
    } // newAction.value == "9"
    
    
    
 //   fecNota boxfecNota    total boxtotal
 
    
    
});
	
$("#btnValidaVendedor").click(function(e){
 	e.preventDefault();
 	verVendor();
 	
});	
</script>
	
<?php }} ?>
