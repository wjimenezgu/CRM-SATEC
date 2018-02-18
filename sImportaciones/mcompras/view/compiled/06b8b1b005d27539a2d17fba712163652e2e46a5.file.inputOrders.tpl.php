<?php /* Smarty version Smarty-3.1.16, created on 2017-09-26 09:00:19
         compiled from "../mcompras/view/inputOrders.tpl" */ ?>
<?php /*%%SmartyHeaderCode:374046263557c6e039a87b0-43407268%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06b8b1b005d27539a2d17fba712163652e2e46a5' => 
    array (
      0 => '../mcompras/view/inputOrders.tpl',
      1 => 1506399893,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '374046263557c6e039a87b0-43407268',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_557c6e039ed529_87913100',
  'variables' => 
  array (
    'NAV_MENU' => 0,
    'LIST_FACTORESAP' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557c6e039ed529_87913100')) {function content_557c6e039ed529_87913100($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['NAV_MENU']->value;?>
 
	<section id="main" >
<!--	
		<h4 class="alert_info_bar" style="font-size:1.2vw; ">
 
			<img src="../../resources/img/icn_alert_info.png" style="float: left; margin-top:2px; margin-left:10px;"> Criterios de Búsqueda:
 -->
					<form>
						<input type="hidden" name="hAjusteFactor" id="hAjusteFactor" value="0.000"> 
    		<div class="control-group " id="boxSelectCriterio">
<!-- 
        		<label class="control-label" for="selectCriterio">Criterio de Búsqueda</label>
            	<div class="controls">                                                   
            		<select id="selectCriterio"  name="selectCriterio" style="width:250px; margin-left: 135px; margin-top:-45px; font-size:1vw;">
                		<option  value="1">Pedido</option>                                         
                    	<option  value="0">Warehouse Receipt</option>
                	</select>
 -->
 						<label class="radio" style="margin-top:5px;">Pedido:</label>
						<input type="text" class="txt_search" id="texto-buscar" name="texto-buscar" value="" style="font-size:1vw; width:250px; margin-left:85px;margin-top:10px;" placeholder="Indicar Pedido">
						<input type="button" id="btn_buscarDatos" onclick="findOrdenes()" value="Buscar" class="alt_btn2" style="margin-left:5px;">
					</form>			               
                
            	</div>
        	</div>	
    		<div class="control-group " id="boxSelectFactorAp">
        		<label class="control-label" for="selectFactorAp">Factores a Aplicar</label>
            	<div class="controls">                                                   
            		<select id="selectFactorAp"  name="selectFactorAp" style="width:250px; margin-left: 135px; margin-top:-45px; font-size:1vw;">
            		<!--
                		<option  value="1">Pedido</option>                                         
                    	<option  value="0">Warehouse Receipt</option>
                    	 -->
                    	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['lfa'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['lfa']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lfa']['name'] = 'lfa';
$_smarty_tpl->tpl_vars['smarty']->value['section']['lfa']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['LIST_FACTORESAP']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lfa']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['lfa']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lfa']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lfa']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['lfa']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lfa']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['lfa']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['lfa']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['lfa']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lfa']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['lfa']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['lfa']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['lfa']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['lfa']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['lfa']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lfa']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['lfa']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['lfa']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['lfa']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['lfa']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['lfa']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['lfa']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['lfa']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lfa']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lfa']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lfa']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['lfa']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lfa']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lfa']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['lfa']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lfa']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['lfa']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lfa']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['lfa']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['lfa']['total']);
?>         		
                    		<option value="<?php echo $_smarty_tpl->tpl_vars['LIST_FACTORESAP']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lfa']['index']]['idFactor'];?>
">
                            	<?php echo $_smarty_tpl->tpl_vars['LIST_FACTORESAP']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lfa']['index']]['idFactor'];?>
|<?php echo $_smarty_tpl->tpl_vars['LIST_FACTORESAP']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lfa']['index']]['descripcion'];?>

                        	</option>                                	
            			<?php endfor; endif; ?>        
                	</select>	                              
            	</div>
        	</div>	
<!-- 
			<label class="radio" style="font-size:1.2vw; ">    
				<input type="radio" name="criterio" id="criterioP" value="1" checked  onclick="cleanTxtBuscar()"> <span style="margin-left:5px;">Pedido</span>
				<input type="radio" name="criterio" id="criterioW" value="0" onclick="cleanTxtBuscar()"> <span>Warehouse Receipt</span>    
			</label>

			<form style="margin:0px; padding:0px; float:right; margin-top:-5px;">
				<input type="text" class="txt_search" id="texto-buscar" name="texto-buscar" value="" style="float: left; margin-left:-90px; font-size:1vw; width:150px;" placeholder="Iniciar Búsqueda">
				<input type="button" id="btn_buscarDatos" onclick="findOrdenes()" value="Buscar" class="alt_btn2" style="float:right; margin-top:4px; margin-left:5px; margin-right:10px; font-size:1.2vw;">
			</form>               
		
		</h4>
 -->
		<div class="row-fluid ">		
    		<div class="box span12">
        		<div class="box-header well" data-original-title>
            		<h2>Ingreso a Inventario</h2>
    			</div>       
        		<div class="box-content">        
	            	<table class="table table-striped table-bordered bootstrap-datatable" id="tblItemsList">
                		<thead>
                    		<tr>
                        		<th>#</th>                        
                        		<th>Codigo</th>
                        		<th>Externo</th>
                        		<th>Descripcion</th>                        
                        		<th style="text-align:right;">Costo Pedido</th>                        		
                        		<th style="text-align:right;">Factor</th>
                        		<th style="text-align:right;">Costo Actual</th>
                        		<th style="text-align:right;">Costo Nuevo</th>
                        		<th style="text-align:right;">Fact. Utilidad Actual</th>
                        		<th style="text-align:right;">Fact. Utilidad Nuevo</th>
                        		<th style="text-align:right;">Precio Actual</th>
                        		<th style="text-align:right;">Precio Nuevo</th>
                        		<th style="text-align:right;">Cant. Recib.</th>                        		
                        		<th style="text-align:right;">Cant. Ingres.</th>                        		
                    		</tr>
                		</thead>
						<tbody id="info-items" >
                                            
                		</tbody>
            		</table>         	
         		</div>
         		
    		</div><!--/span12-->
		</div><!--/row fluid-->


		<div class="control-group inline" id="boxFlete" style="display:none">
<!-- 		
			<label class="control-label" for="optionsRadiosEx" style="color:red">Aplicar Ajuste x Flete?</label>
				<label class="radio inline" style="margin-left:145px;margin-top:-55px;color:red">
				<input type="radio" name="optionsRadiosEx" id="optionsN" value="N"  class="tieneflete">
									No
			</label>								  
			<label class="radio inline" style="margin-top:-55px;color:red">
				<input type="radio" name="optionsRadiosEx" id="optionsS" value="S" class="tieneflete">
									Si
			</label>
 -->			
								<div class="control-group" style="margin-left: -150px;" id=boxSiNo>
									<div class="controls">

				 						<label class="radio" style="margin-left:155px;margin-top:10px;color:red">Aplicar Ajuste x Flete?</label>					
<!-- 
										<label class="radio" style="margin-top:14px;color:red">
											<input type="radio" name="criterio" id="optionsNO" value="NO">
											No
										</label>
										<label class="radio" style=" margin-top:14px;color:red">
											<input type="radio"  name="criterio" id="optionsSI" value="SI" >
											Si
										</label>	
 -->
										<select id="fleteSINO"  name="fleteSINO" style="width:100px; margin-left:10px;margin-top:20px;color:red"">
                							<option  value="0">Seleccionar</option>
                							<option  value="NO">No</option>                                         
                    						<option  value="SI">SI</option>
                						</select>					
									</div>  <!-- class controls -->             
								</div>	<!-- boxSiNo -->				
			
		<div id="boxAjusteFact" style="display:none; margin-top:-55px; margin-left: 250px;">
		    Porce.Ajuste:
			<input class="controls "style="width: 50px;text-align:right;margin-top:10px"  id="ajustFactor" type="text"  value="0">
			<input type="button" class="btn btn-small btn-success" name="btnApliAjuste" id="btnApliAjuste" onclick="aplicaAjusteFactor();" value="Aplicar"  style="font-size:1.2vw;">
		</div>			
		</div>

		<input type="button" class="btn btn-large btn-success pull-left" name="btnGuardar" id="btnGuardar" style="display:none" onclick="aplicaGuardar('N');" value="Guardar" disabled  style="font-size:1.2vw;">		
		<input type="button" class="btn btn-large btn-success pull-left" name="btnAplicar" id="btnAplicar" style="display:none" onclick="aplicaGuardar('S');" value="Ingresar" disabled  style="font-size:1.2vw;">
		<input type="button" class="btn btn-large btn-warning pull-right" name="btnCerrar" id="btnCerrar"  onclick="Sale();" value="Cerrar" style="font-size:1.2vw;">

	</section>
	
	
<div id="myModal" class="modal hide fade">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">×</button>
      <h3 id="textMessage"></h3>
    </div>
    <div class="modal-body">            
        <div id="modalContent" style="display:none;">

        </div>
    </div>
    <div class="modal-footer">
      <a href="#" class="btn btn-info" data-dismiss="modal" >Cerrar</a>
    </div>
</div>  
	

<script type="text/javascript">


$('#ajustFactor').number( true, 3 );
        
// Si presiona enter en el campo texto a buscar que se ejecute el evento click() del boton buscar
$('#texto-buscar').keypress(function(e){
    if(e.keyCode==13){
    	e.preventDefault();
    	$('#btn_buscarDatos').click();
    }
  });

// si cambia el criterio de busqueda se limpia la tabla y el "focus" se pone en el texto a buscar
// eso lo hace la funcion cleanTxtBuscar();
$("#selectCriterio").on("change", function(e){
    e.preventDefault();
    cleanTxtBuscar();
    $("#texto-buscar").focus();
});

$("#fleteSINO").on("change", function(e){
    e.preventDefault();
    var vfleteSINO = $("#fleteSINO").val();
    if (vfleteSINO == "SI"){
    	$("#boxAjusteFact").css("display","block");
    	alert('Recuerde asignar los factores por linea antes de aplicar.');
    }else{
    	$("#ajustFactor").val("0.000");
        $("#boxAjusteFact").css("display","none");
    }
});

$("#optionsNO").on("click", function(e){
   // e.preventDefault();
    $("#ajustFactor").val("0.000");
    $("#boxAjusteFact").css("display","none");
});


$("#optionsSI").on("click", function(e){
    //e.preventDefault();
   	$("#boxAjusteFact").css("display","block");
});

$("#selectFactorAp").on("change", function(e){
    e.preventDefault();
    cleanTxtBuscar();
    limpiaDetalleOrdenes();
    $("#texto-buscar").focus();
});


function cleanTxtBuscar(){
    
    $("#texto-buscar").val(""); 
    $("#texto-buscar").focus();
    
}

function findOrdenes(){

	limpiaDetalleOrdenes(); 
    //criterio    = $('input[name=criterio]:checked').val();
    //criterio    = $("#selectCriterio").val(); 
    // se busca solo por pedido
    criterio    = "1";
    txtBusqueda = $("#texto-buscar").val();
    factAplicar = $("#selectFactorAp").val();
    
    $("#info-items").load("inputItemsOrders.php", { criterio : criterio, txtBusqueda : txtBusqueda, factAplicar : factAplicar }, 
    		       function(response,status,xhr){
    							if(status == "error"){
	          						alert("Error: " + xhr.status + ": " + xhr.statusText);
								}
    							if (status == "success"){
    								var tblItems = document.getElementById('tblItemsList');
    							    var numRows = tblItems.rows.length -1; // -1 para excluir el encabezado
    								if (numRows==0){
    								 	alert("No hay datos que desplegar");
    								}else{
    									// se habilita el boton conciliar para que el usuario lo pueda seleccionar
    									$('input:button[name=btnAplicar]').prop('disabled', false); 
    									$('input:button[name=btnGuardar]').prop('disabled', false); 
    									
    									// para seleccionar una opcion del radio buttion se utiliza por ejemplo
    									//	$("#optionsNO").prop("checked", "checked");
    									// para NO seleccionarla se utiliza
    									//	$("#optionsNO").prop("checked", "");
    									// se quiere limpiar lo que el usuario haya seleccionado
    									//$("#optionsNO").prop("checked", false);
    									//$("#optionsSI").prop("checked", false);
    									
    									$('#fleteSINO').prop('selectedIndex',0);
    									
    									//$(document.getElementById("optionsNO")).trigger("click");
    									//$(document.getElementById("optionsSI")).trigger("click");
    									if ($("#hAjusteFactor").val() != "-1"){
    										if ($("#hAjusteFactor").val() != "0.000"){
    											$("#ajustFactor").val($("#hAjusteFactor").val());    										
    											$("#boxAjusteFact").css("display","block");
    											//$("#optionsS").prop("checked", "checked");
    											//$(document.getElementById("optionsS")).trigger("click");
    											// pre-seleccionar SI
    											$('#fleteSINO').prop('selectedIndex',2);
    										}else{
    											// pre-selecciona NO
    											$('#fleteSINO').prop('selectedIndex',1);
    											$("#boxAjusteFact").css("display","none");
    										}
    									} // != -1 no se hace nada
    									
    									$("#boxFlete").css("display","block");
    									$("#btnAplicar").css("display","block");
    									$("#btnGuardar").css("display","block");
    									$("#btnCerrar").css("display","block");   									
    								} // if numRow
    							}// status == success
    				} //function
    							
    );
}

function limpiaDetalleOrdenes() {
    $("#info-items").html("");
    // se deshabilita el boton conciliar para que el usuario no lo pueda seleccionar
    $('input:button[name=btnAplicar]').prop('disabled', true);
    $("#ajustFactor").val("0.000");
	$("#boxFlete").css("display","none");
	
	$("#btnAplicar").css("display","none");
	$("#btnGuardar").css("display","none");
	//$("#btnCerrar").css("display","none");
	$("#boxAjusteFact").css("display","none");    	
}

function aplicaAjusteFactor(){
	//se revise si el ajuste es diferente a 0.000 o diferente a blanco
	var vAjusteFactor  = $("#ajustFactor").val();    
	if (vAjusteFactor == "0"){
		 alert('Factor de ajuste deber ser diferente de 0.000');
	}else{
		var tbl = document.getElementById('tblItemsList');
	    var numRows = tbl.rows.length -1; // -1 para excluir el encabezado
	    var numRow;
	    var vFactor;
	    
	    if (numRows > 0){    
	    	var i;
	    	for (i=1; i <= numRows; i++) {
	    		// se obtine el numero de fila para efectos de procesar cada linea
	    		numRow = i - 1;
	    		
	    		vFactor  = document.getElementById("sel"+numRow).value;
	    		
	    		vnFactor = parseFloat(vFactor).toFixed(3) * parseFloat(vAjusteFactor).toFixed(3);
	    			
	    		// se obtiene el costo segun el pedido cpedido[]
	    		vCosto 	 = $('input[name^="cpedido"]').eq(numRow).val();
	    		
	    		// como esta formateado con comas hay que quitarlas
	    	//	vCostoS  = vCosto.replace(",","");
                vCostoS  = vCosto.replace(/,/g, '');
	    		// se calcula el nuevo costo, basicamente es costo del pedido * factor seleccionado por el usuario
	    		// el factor esta con precision de 3 digitos.
	    		nCost	 = parseFloat(vCostoS) * parseFloat(vnFactor).toFixed(3);
	    		vUtil  = $('input[name^="autil"]').eq(numRow).val();
	    		if (vUtil.length === 0){
	    			vUtil  = $('input[name^="futil"]').eq(numRow).val();
	    		}
	    		nPrecio = parseFloat(nCost) * (1 + (parseFloat(vUtil) / 100.00));
	    		nCostoStr = nCost.toFixed(2).replace(/./g, function(c, i, a) {
	    		    return i && c !== "." && ((a.length - i) % 3 === 0) ? ',' + c : c;
	    		})
	    		nPrecioStr = nPrecio.toFixed(2).replace(/./g, function(c, i, a) {
	    		    return i && c !== "." && ((a.length - i) % 3 === 0) ? ',' + c : c;
	    		})	    		
	    		$('input[name^="costo"]').eq(numRow).val(nCostoStr);
	    		$('input[name^="precio"]').eq(numRow).val(nPrecioStr);	    			    		
	    	}
	    }
	}
	
}

function aplicaGuardar(IngresaMercaderia) {
	//
	// el parametro IngresaMercaderia indica si hay que agregar el paso de ingresar la mercaderia
	// al inventario.
	// Esto por cuando este procedimiento sirve tanto para SOLO guardar los datos o para guardar los datos
	// y hacer el ingreso de la mercaderia al inventario.
	//
	
	// primer se hace revisión de que haya indicado si incluye o no flete
	
	var errors = false;
	var x = $("#fleteSINO").val();
	if (x == "0"){
		alert('Debe indicar si hay ajuste x flete.');
		errors = true;
	}

	
	if (errors!=true){
		var TableData;
		TableData = storeTblValues()
		TableData = $.toJSON(TableData);
        $('input:button[name=btnAplicar]').prop('disabled', true);
		var properties = {
            url: "processIngInventario.php",
            async: true,
            cache: false,
            data: "pIngMerca=" + IngresaMercaderia + "&pTableData=" + TableData,
            type: "POST",
            success: function(msg){                
					alert(msg);
                    if (IngresaMercaderia == "S"){
                    // como si es ingreso a mercaderia, se debe imprimir la hoja para bodega.
                    var idPedido;
                    idPedido = txtBusqueda = $("#texto-buscar").val();
                    window.open('prnBoletaBodega.php?idPedido='+idPedido,'_blank'); 
                    }
                    Sale();
            }
        };            
        $.ajax(properties);
        if (IngresaMercaderia == "S"){
        	// como si es ingreso a mercaderia, se debe imprimir la hoja para bodega.
        	var idPedido;
        	idPedido = txtBusqueda = $("#texto-buscar").val();
        	window.open('prnBoletaBodega.php?idPedido='+idPedido,'_blank');	
        }
              
        
	} // if error != true
}

function storeTblValues(){
    var TableData = new Array();
	var tbl = document.getElementById('tblItemsList');
    var numRows = tbl.rows.length -1; // -1 para excluir el encabezado
    var numRow;
    var vFactor;
    var vAjusteFactor  = $("#ajustFactor").val();
    var vPedido    	   = $("#texto-buscar").val();
    if (numRows > 0){    
    	var i;
    	for (i=1; i <= numRows; i++) {
    		// se obtine el numero de fila para efectos de procesar cada linea
    		numRow = i - 1;
    		
    		// Se obtiene el factor que se le aplico a esa linea
    		vFactor  = document.getElementById("sel"+numRow).value;
    		
    		//vnFactor = parseFloat(vFactor).toFixed(3) * parseFloat(vAjusteFactor).toFixed(3);
    			
    		// se obtiene el costo nuevo de esa linea segun el pedido cpedido[]
    		vCostoNuevo 	 = $('input[name^="costo"]').eq(numRow).val();
    		// como esta formateado con comas hay que quitarlas
    	//	vCostoNuevoS  = vCostoNuevo.replace(",","");
            vCostoNuevoS  = vCostoNuevo.replace(/,/g, '');
    		
    		// se obtiene el porcentaje de utilidad nuevo
    		vUtilNueva  = $('input[name^="futil"]').eq(numRow).val();
    		
    		// se obtiene el precio nuevo
    		vPrecioNuevo 	 = $('input[name^="precio"]').eq(numRow).val();
    		// como esta formateado con comas hay que quitarlas
    	//	vPrecioNuevoS  = vPrecioNuevo.replace(",","");
            vPrecioNuevoS  = vPrecioNuevo.replace(/,/g, '');
    		
    		// se obtiene la cantidad a ingresar al inventario
    		vCantiIng  = $('input[name^="cantreci"]').eq(numRow).val();
    		
    		// se obtiene el numero de linea
    		vIdLinea  = $('input[name^="idLinea"]').eq(numRow).val();
    		
    		// se obtiene el codigo del articulo
    		vCodArti   = $('input[name^="codArti"]').eq(numRow).val();
    		
    		// se agrega la entrada a la tabla
    		TableData[numRow]={
    	              "Pedido" 		:vPedido
    	            , "IdLinea" 	:vIdLinea
    	            , "Codigo" 		:vCodArti
    	            , "CostoNuevo"  :vCostoNuevoS
    	            , "UtilNueva" 	:vUtilNueva
    	            , "PrecioNuevo"	:vPrecioNuevoS
    	            , "CantIngInv" 	:vCantiIng
    	            , "Factor" 		:vFactor
    	            , "AjusteFactor":vAjusteFactor
    	        }   		
    	} //for
    } // if numRows >
    return TableData;
}

	function Sale(){
		
		window.location="../../home";
			
	}

</script>

<?php }} ?>
