<?php /* Smarty version Smarty-3.1.16, created on 2016-12-31 07:29:24
         compiled from "../anulafacturas/view/allFacturas.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17526133635867a3cc3bdf11-62649719%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8cc11d9118da80618a287eb71e1e8e0b61b7cd2e' => 
    array (
      0 => '../anulafacturas/view/allFacturas.tpl',
      1 => 1483190950,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17526133635867a3cc3bdf11-62649719',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5867a3cc3d69f9_06176896',
  'variables' => 
  array (
    'NAV_MENU' => 0,
    'NOMBRE_TIENDA' => 0,
    'ID_TIENDA' => 0,
    'FECHAHOY' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5867a3cc3d69f9_06176896')) {function content_5867a3cc3d69f9_06176896($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['NAV_MENU']->value;?>

	<div class="container-fluid">
		<div class="row-fluid ">
			<!-- Inicia Lista de Facturas -->
			<div class="box span12">
				<div class="box-header well" data-original-title>
					<h2><i class="icon-th"></i>Factura</h2>
					<div class="vendedorvalido"  id="0"></div>
					<input type="text"  id="numFactura"  value=""  style="margin-left:10px;" placeholder="Digita Numero de Factura">
					<button type="button" class="btn btn-small btn-info" style="margin-top:-10px;"   onclick='getFactura();'>Buscar</button>
					<input type="text"  id="tienda" style="background-color: AliceBlue; margin-left:70px;" name="tienda"   value="<?php echo $_smarty_tpl->tpl_vars['NOMBRE_TIENDA']->value;?>
">
					<input type="hidden"  id="idtienda"  name="idtienda"   value="<?php echo $_smarty_tpl->tpl_vars['ID_TIENDA']->value;?>
">
					<input type="hidden" name="prev_value_imp" id="prev_value_imp" value="0">
					<input type="hidden" name="totalNota" id="totalNota" value="0">
					<input type="hidden" name="totalIVNota" id="totalIVNota" value="0">
					<input type="hidden" name="selArti" id="selArti" value="0">
					<input type="hidden" id="detFactura" value="">
					<input type="hidden" id="fecFactura" value="">
					<input type="hidden" id="fecHoy"     value="<?php echo $_smarty_tpl->tpl_vars['FECHAHOY']->value;?>
">
					<input type="hidden" name="usrVendedor" id="usrVendedor" value="">
				</div>
				<div class="box-content">
					<table class="table table-striped table-bordered bootstrap-datatable" id="tblFacturas">
						<thead>
							<tr>
								<th>Cliente</th>
								<th>Id</th>	
								<th># Factura</th>
								<th>Fecha</th>
								<th>Monto</th>
								<th>Impresa</th>
								<th>Estado</th>
								<th>Acción</th>
							</tr>
						</thead>
							<tbody id="tblListFactura">
                            </tbody>
					</table>
				</div> <!-- box-content -->
			</div><!--/box span6-->
			<!-- ************************************************************ -->
			<!-- Finaliza Lista de Facturas -->
			<!-- ************************************************************ -->
			<!-- Inicia Detalle Factura para Cobrar -->
			<!-- ************************************************************ -->
			<div class="box span12">
				<div class="box-header well">
					<h2><i class="icon-th"></i>Detalle Factura</h2>
				</div>
				<div class="box-content">
					<form class="form-horizontal">
					<input type="hidden" name="prev_value_imp" id="prev_value_imp" value="0">
					<input type="hidden" name="idFactura" id="idFactura" value="">
						<fieldset>
						    <div class="row-fluid">
						    	<table class="table table-bordered" id="tblCliente">
						    		<tr>
										<td> 
											<label style="float: left; width:70; padding-top: 5px; text-align: right;" for="idCliente">Cliente</label> 
											<div class="controls">											
								  				<input class="input-xlarge uneditable-input"  style="margin-left: -115px; width:350px" disabled id="idCliente" name="idCliente" type="text" value="Nombre Cliente…">
											</div>	
			
										</td>

									</tr>
								</table>
							</div>
							<div class="row-fluid" id="detFactura">
							<div class="span12">
								<table class="table table-bordered table-striped" id="tblDetFactura">
                            	<thead>
                                	<tr>
                                    	<th>#</th>
                                    	<th>Articulo</th>
                                        <th>Codigo</th>
                                        <th>Precio Venta</th>
                                        <th>Cant.</th>
                                        <th>%Desc</th>
                                        <th style="text-align:right">Precio Total</th>
                                        <th style="text-align:center;"> Seleccionar</th>
                                    </tr>
                                </thead>
                                <tfoot>
    								<tr>
    									<td rowspan="2" colspan="5"></td>
      									<td>SubTotal</td>
      									<td style="text-align:right">
      										<input type="text" id="fsubtotal" name="fsubtotal" value="0.00" class='input' readonly style="text-align: right; width: 90px;" >
      									</td>
      									<td>
      								<!-- <input type="button" id="fDevolver" name="fDevolver" value="Devolver"  style="color: blue;  text-align: center; width: 110px;" class="btn btn-medium btn-warning">  -->
											<a class="btn btn-warning" href="#" id="btnDevolver" name="btnDevolver" title="Devolver" data-rel="tooltip" onclick="devolverArti()">Devolver</a>      										
      									</td>
    								</tr>
    								<tr>   									
      									<td>Descuento</td>
      									<td style="text-align:right">
      										<input type="text" id="fdescuento" name="fdescuento" value="0.00" class='input' readonly style="text-align: right; width: 90px;" >
      									</td>
      									<td></td>
    								</tr>
    								<tr> 
    									<td colspan="5">    									
								<!-- 			Factura Exenta de IV
											<input type="checkbox" onclick="cambiaImp();" id="fExento" name="fExento"   disabled value="">
								 -->
    									</td>  									
      									<td>Impuesto</td>
      									<td style="text-align:right">
      										<input type="text" id="fimpuesto" name="fimpuesto" value="0.00" class='input' readonly style="text-align: right; width: 90px;" >
      									</td>
      									<td></td>
    								</tr>
    								<tr>  
    									<td colspan="2">

								<label style="float: left; width:70; padding-top: 5px; text-align: right;" for="idVendedor">Vendedor</label>
								<div class="controls">
								  <input class="input-mini uneditable-input" style="margin-left: -95px; width:150px; " readonly id="idVendedor" name="idVendedor" type="text" value="Nombre Vendedor">
								</div>
								</td>
							
								<td colspan="3">
								<table border="0" class="table-condensed " id="tblFPago">
								<tr>
								<td>
								<label style="float: left; width:70; padding-top: 5px; text-align: right;" for="formaPago">Forma Pago</label>
								<div class="controls">
								  <input class="input-mini uneditable-input" style="margin-left: -75px; width:100px; " readonly id="formaPago" name="formaPago" type="text" value="Forma de Pago">
								</div>								
								</td>
								
								<td> 
								<label style="float: left; width:70; padding-top: 5px; text-align: right;" for="autorizacion">Aut/Chk#</label>
								<div class="controls">
								  <input class="input-mini uneditable-input" style="margin-left: -95px; width:150px; " readonly id="autorizacion" name="autorizacion" type="text" value="Aut/Chk">
								</div>		
								</td>
								</tr>
								</table>
     									<td>Total</td>
      									<td style="text-align:right; ">
      										<input type="text" id="ftotal" disabled name="ftotal" value="0.00" class='input' readonly style="color: green; font-size: 14px; font-weight: bold; text-align: right; width: 100px;" >
      									</td>
      									<td>
      										
      									</td>        																		
    								</tr>
    								
  								</tfoot>
                                <tbody id="tblDetFacArti">
                                </tbody>
								</table>
							</div> <!-- span12 -->
							</div> <!-- row-fluid detFactura-->					
						</fieldset>					
					</form>				
				</div> <!-- box-content -->
			</div> <!-- box span6 -->
			<!-- Finaliza Detalle Factura para Cobrar -->
			<!-- ************************************************************ -->
			<!-- Inicia Detalle formasa de Pago de la factura                 -->
			<!-- ************************************************************ -->
			<div class="box span12">
				<div class="box-header well">
					<h2><i class="icon-th"></i>Detalle Formas Pago</h2>
				</div>
				<div class="box-content">
					<form class="form-horizontal">
						<fieldset>
							<div class="row-fluid" id="detFacturaPagos">
							<div class="span12">
								<table class="table table-bordered table-striped" id="tblDetPagos">
                            	<thead>
                                	<tr>
                                    	<th>#</th>
                                    	<th>#Documento</th>
                                        <th>Forma Pago</th>
                                        <th>Monto Pago</th>
                                    </tr>
                                </thead>
                                <tbody id="tblApliPagos">
                                </tbody>
								</table>
							</div> <!-- span12 -->
							</div> <!-- row-fluid det pagos-->					
						</fieldset>					
					</form>				
				</div> <!-- box-content -->
			</div> <!-- box span12-->
			<!-- Finaliza Detalle Factura formas pago facturas -->							
		</div><!--/row-fluid sortable -->
	</div> <!-- container-fluid -->

<!-- MODAL PARA SOLICITAR CLAVE VENDEDOR QUE ANULA Y LA RAZON -->
<div class="modal fade" id="datosAnula-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3 class="modal-title blue"><i class="fa fa-bars"></i> Anular Factura</h3>
                <br />
                <p>Para anular factura complete la siguiente información</p>
            </div>
            <form method="post" id="frm-datosAnula">
                <div class="modal-body" id="datosAnula">

                    <table class="table table-condensed">
                      <tbody> 

                          <tr>
                              <th>Clave Vendedor</th>
                              <td>                                
                                <div class="pull-left control-group" id="boxclaveVendedor" style="margin-right:3px;">
                                    <input type="password" class="input-block-level"  id="claveVendedor" name="claveVendedor" value="">
                                </div>                                  
                              </td>
                          </tr>
                          <tr>
                              <th>Razón</th>
                              <td>
                                  <div class="pull-left control-group" id="boxRazonAnula" style="margin-right:3px;">
                                    <input type="text" class="input-block-level" id="razonAnula" name="razonAnula" value="" placeholder="Indicar la razón">
                                  </div>
                              </td>
                          </tr>
                      </tbody>
                    </table>                    

                </div>
                <div class="modal-footer clearfix">
                    <div id="message-datasAnula">

                    </div>    
                    <button type="button" class="btn btn-success" id="btnAnulaFactura" name="btnAnulaFactura"><i class="fa fa-check-square-o"></i> Anular</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->   


 
<script type="text/javascript">
$(document).ready(function(){  

	$('#ftotal').number( true, 2 );
	$('#fimpuesto').number( true, 2 );
	$('#fdescuento').number( true, 2 );
	$('#fsubtotal').number( true, 2 );		    
    
    $("#btnAnulaFactura").click(function(e){
     	e.preventDefault();
        var vClaveVendedor  = $.trim($("#claveVendedor").val());
        var vRazonAnula		= $("#razonAnula").val();
       
        var errors      = false;

        if(vClaveVendedor == ""){
            $("#boxclaveVendedor").addClass("error");
            errors = true;
        }else{
            $("#boxclaveVendedor").removeClass("error");
        }
        
        if(vRazonAnula == ""){
            $("#boxRazonAnula").addClass("error");
            errors = true;
        }else{
            $("#boxRazonAnula").removeClass("error");
        }
        if(errors != false){ 
        	$("#message-datasAnula").html("<div class='alert alert-error pull-left'><strong><span class='icon icon-red icon-alert'/></span> <strong>Complete la Información Requerida</strong></div>");
            return false; 
        }else{
            // se procede a validar la clave del vendedor.
            $("#message-datasAnula").html("<div class='alert alert-error pull-left'><strong><span class='icon icon-red icon-alert'/></span> <strong>Todo OK</strong></div>");
            
            $.ajax({
		        type: "POST",
		        url: "ValidaClaveVendedor.php",
		        async: false,
		        dataType : "text",
		        data: "fClaveVendedor="+vClaveVendedor,
		       	success: function(data2,strMsg){
		    		$dataStr = (data2.trim().split("|"));
		    		if ($dataStr[0].trim()=='OK') {
		    			if ($dataStr[1] == "1"){
		    				$(".vendedorvalido").attr("id", "1");	
		    				$("#usrVendedor").val($dataStr[2]);		    				
		    			}else{
		    				$(".vendedorvalido").attr("id", "0");
		    				$("#boxclaveVendedor").addClass("error");
		    	    		$("#message-datasAnula").html("<div class='alert alert-error pull-left'><strong><span class='icon icon-red icon-alert'/></span> <strong>Clave Vendedor Incorrecta.</strong></div>");
		    		        $("#claveVendedor").focus();
		    		        errors = true;
		    			}		    			
		    		}else{
	    				alert($dataStr[0]);
	    				$("#message-datasAnula").html("<div class='alert alert-error pull-left'><strong><span class='icon icon-red icon-alert'/></span> <strong>Error Inesperado.</strong></div>");
    				}		    		
		        },
		        error: function(jqXHR,textStatus,errorThrown){
		            alert('Error al validar Vendedor '+errorThrown);
		        }
	    	});
            if ($(".vendedorvalido").attr("id") == "0" ){
            	// la clave del vendedor es incorrecta
            	$("#boxclaveVendedor").addClass("error");
	    		$("#message-datasAnula").html("<div class='alert alert-error pull-left'><strong><span class='icon icon-red icon-alert'/></span> <strong>Clave Vendedor Incorrecta.</strong></div>");
	    		$("#claveVendedor").focus();
	            errors = true;
            }else{	    	
	    		// vendedor esta OK, se procede con la ANULACION
	    		
	    		// si la factura es del mismo dia se anula directamente, en caso de ser de otra dia, si debe
	    		// generarse una nota de credito
	    		var detFactura = $("#detFactura").val().split("|");
	    		var str = detFactura[5];
	    	    var res = str.substring(0, 10);
	    		$('#fecFactura').val(res.trim());
	    		if ($('#fecFactura').val() != $('#fecHoy').val()){
	    			// se redirecciona a crear la nota de credito para que la genere y la imprime.
	    			// factura de otro dia
	    			window.location.href ='../notascr/NotaCr.php?action='+action+"&id="+detFactura[0]+"&numDocuFact="+detFactura[1]+"&total="+detFactura[2]+"&nombre="+detFactura[3]+"&idTienda="+detFactura[4];	    			
	    		}else{	    			
	    			// como es del mismo dia, solo se anula la factura, NO SE GENERA UNA NOTA DE CREDITO

	    			$.ajax({
	    		        type: "GET",
	    		        url: "AnulaFactura.php",
	    		        async: false,
	    		        dataType : "text",
	    		        data: "idTienda="+detFactura[4]+"&idFactura="+detFactura[0]+"&vendedor="+$("#usrVendedor").val()+"&razon="+vRazonAnula,
	    		       	success: function(data2,strMsg){
	    		    		$dataStr = data2.trim();
	    		    		if ($dataStr=='OK') {
	    		    			// se anulo exitosamente, se regresa a la lista de facturas
	    		    			// se cierra el modal        
	    	                	$("#datosAnula-modal").modal('hide');
	    		    			alert("Se anuló existosamente.");
	    	                	window.location.href ='index.php'
	    	                //	header("Location: ../facturas");
	    		    		}else{
	    		    		    // hubo un error anular, se le muestra al usuario
	    	    				alert($dataStr);
	    	    				$("#message-datasAnula").html("<div class='alert alert-error pull-left'><strong><span class='icon icon-red icon-alert'/></span> <strong>Error Inesperado.</strong></div>");
			    		        $("#razonAnula").focus();	    	    				
	        				}		    		
	    		        },
	    		        error: function(jqXHR,textStatus,errorThrown){
	    		            alert('Error al anular factura '+errorThrown);
	    		        }
	    	    	  });

	    		} // como es del mismo dia se anaula factura	    			
	    	} // vendedor esta OK
	    } // valida clave vendedor
    }); // tnAnulaFactura").cli
});	// ready function       

var $tiraArti;
$tiraArti = "";


function impFactu(idFactura){
	  window.location.href ='ImpreFactura.php?idDoc='+idFactura+'&indTipoDoc='+'F'+'&tiraReimpre=**** Re-impresion ****'; // factura
}

function devolverArti(){
	if (confirm('Esta seguro que desea devolver los articulos?')) {

		leeTabla();

		if ($("#selArti").val() == "1"){
	
	        // si la factura es del mismo dia, NO SE PERMITE DEVOLUCION PARCIAL.	        
	        if ($('#fecFactura').val() != $('#fecHoy').val()){
				var detFactura = $("#detFactura").val().split("|");		        
				window.location.href ='../notascr/NotaCr.php?action=1'+"&id="+detFactura[0]+"&numDocuFact="+detFactura[9]+"&total="+$("#totalNota").val()+"&nombre="+detFactura[1]+"&idTienda="+detFactura[10]+"&tiraArti="+$tiraArti+"&totalivnota="+$("#totalIVNota").val();
	        }else{
	        	alert('Factura es de Hoy. No permite hacer devolucion parcial. Proceda Anular Toda la Factura.');		
	        }
		}else{
			alert('No hay acticulos seleccionados.');			
		}	
	}
}

function leeTabla()
{

    var i=0;
    var totalNota = 0.00;
    var timpventa = 0.00;
    var subtotal = 0.00;
    var totalIVNota = 0.00;
    
    $("#selArti").val("0");
    $tiraArti = "";
    $coma="";
  
    $('#tblDetFactura tr').each(function(row, tr){
    	var aRowSel = document.getElementById('selRow' + i);

    	if (aRowSel !== null){    		
    		if (aRowSel.checked == true){	
          	  estaSel = 'SI';
          	  $("#selArti").val("1");        	  
      	  	}else {
      		  estaSel = 'NO';      		
      	  	}	
    	}else{
        	estaSel = 'NO';
    	}
    	if (estaSel == 'SI') {  
    			
    		$ptotalStr = document.getElementById('ptotalRow' + i).innerHTML;
        	totalNota = totalNota + parseFloat($ptotalStr.replace(/,/g, ''));    
        	$tiraArti = $tiraArti + $coma + document.getElementById('codRow' + i).innerHTML;
			$coma = ',';   
    	}
        i++;    
    });

    subtotal  = parseFloat($("#fsubtotal").val()).toFixed(2);
   
    timpventa = parseFloat($("#fimpuesto").val()).toFixed(2);
 
    totalIVNota = (totalNota / subtotal) * timpventa;
    
    totalIVNota = round5B(totalNota + totalIVNota) - totalNota; 
    totalNota = totalNota + totalIVNota;

    $("#totalIVNota").val(parseFloat(totalIVNota).toFixed(2));
    $("#totalNota").val(totalNota.toFixed(2));
}

function round5B(x)
{
	if($("#noredondeo").is(":checked")){
		return x;
	}else{
    	return Math.ceil(Number(x).toFixed(2)/5)*5;
	}
}
function getFactura(){
	
	$("#tblListFactura").html("");
	$("#tblDetFacArti").html("");
	$("#tblApliPagos").html("");
	
	
	
	$('#idCliente').val("");
	//vendedor
	$('#idVendedor').val("");
	//subTotal
	$('#fsubtotal').val("");
	//descuento
	$('#fdescuento').val("");
	//impuesto
	$('#fimpuesto').val("");
	//total de la factura
	$('#ftotal').val("");

	$('#fpagaCon').val("");
	
	$('#formaPago').val("");
	
	$('#autorizacion').val("");
    
	$('#numDocuNotaCr').val("");
	
	// fecha de la factura que viene en formato dd/mm/yyyy h:m:s
	$('#fecFactura').val("");
		
	$("#btnDevolver").css("display","none");


	$numFactura = $("#numFactura").val();
	$idTienda 	= $("#idtienda").val();
	
	if ($numFactura.trim() != ""){
		//ahora se carga la factura
		$("#tblListFactura").load("buscarFactura.php", { idTienda:$idTienda,idFactura : $numFactura }, function(response,status,xhr){
	    });
	}
}

function getDetFactura(idFactura){
	
	$("#detFactura").val(idFactura);
	detFactura = idFactura.split("|");
	//numero factura
	$('#idFactura').val(detFactura[0]);
	//nombre del cliente
	$('#idCliente').val(detFactura[1]);
	//vendedor
	$('#idVendedor').val(detFactura[2]);
	//subTotal
	$('#fsubtotal').val(detFactura[3]);
	//descuento
	$('#fdescuento').val(detFactura[4]);
	//impuesto
	$('#fimpuesto').val(detFactura[5]);
	//total de la factura
	$('#ftotal').val(detFactura[6]);

	$('#fpagaCon').val(detFactura[6]);
	
	$('#formaPago').val(detFactura[7]);
	
	$('#autorizacion').val(detFactura[8]);
    
	$('#numDocuNotaCr').val(detFactura[9]);
	
	// fecha de la factura que viene en formato dd/mm/yyyy h:m:s
	var str = detFactura[11];
    var res = str.substring(0, 10);
	$('#fecFactura').val(res.trim());
	
	str = detFactura[12]; // estado si es igual a ANULADA el boton devolver se esconde
	
	if (str.trim() == "ANULADA") {
		
		$("#btnDevolver").css("display","none");
	}else{
		$("#btnDevolver").css("display","block");
	}
	
	//ahora se cargan la lista de articulos
	$("#tblDetFacArti").load("buscarDetFacArti.php", { idFacturaB : detFactura[0] }, function(response,status,xhr){
    });
	
	// ahora se cargas las diferentes formas de pago que se utilizaron para cancelar la factura.
	$("#tblApliPagos").load("buscarDetFacPagos.php", { idFacturaB : detFactura[0] }, function(response,status,xhr){		
    });

}

function goPage(action, id){
	
	if (action == 1){		
		$("#detFactura").val(id);
		// anular y el id trae varios datos.
		// se limpian los campos antes de desplegar el modal
		$("#claveVendedor").val("");
        $("#razonAnula").val(" ");
		$("#datosAnula-modal").modal('show');
	
	//	var detFactura = id.split("|");
	//	window.location.href ='../notascr/NotaCr.php?action='+action+"&id="+detFactura[0]+"&numDocuFact="+detFactura[1]+"&total="+detFactura[2]+"&nombre="+detFactura[3]+"&idTienda="+detFactura[4];
	}else{
		if (action == 7){
			// RE-imprimir la factura
			window.open('../cobrar/imprimir.php?factura='+id+'&tiraReimpre=**** Re-impresión ****','_blank');
		}
	}
}


</script>

<?php }} ?>
