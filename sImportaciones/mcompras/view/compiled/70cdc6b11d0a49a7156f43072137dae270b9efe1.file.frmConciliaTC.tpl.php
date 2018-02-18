<?php /* Smarty version Smarty-3.1.16, created on 2017-07-24 11:04:08
         compiled from "../mcompras/view/frmConciliaTC.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9298244605436ab7c87fd84-36359711%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '70cdc6b11d0a49a7156f43072137dae270b9efe1' => 
    array (
      0 => '../mcompras/view/frmConciliaTC.tpl',
      1 => 1457810178,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9298244605436ab7c87fd84-36359711',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5436ab7c8ba209_41017442',
  'variables' => 
  array (
    'NAV_MENU' => 0,
    'ACTION' => 0,
    'ALL_TIP_CARDS' => 0,
    'NUM_TARJETA' => 0,
    'FEC_CORTE' => 0,
    'PROVEEDORES' => 0,
    'ID_PROVEEDOR' => 0,
    'LISTA_FACTPROVEEDOR' => 0,
    'BTN_ACTION' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5436ab7c8ba209_41017442')) {function content_5436ab7c8ba209_41017442($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['NAV_MENU']->value;?>

<div class="row-fluid ">		
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2>Conciliación de Tarjetas de Créditos</h2>
        </div>
           <form name="fconciliar"> 
           		<input type="hidden" id="action" name="action" value="<?php echo $_smarty_tpl->tpl_vars['ACTION']->value;?>
">
        <div class="box-content">

				<div class="control-group">
					<div class="controls">
					
                        <div class="input-prepend pull-left " id="boxSelectTipTarjeta">
                        	<span class="add-on" style="padding:0px; height:26px; margin:0px 3px 3px 0px;">                                                   
                        	<select id="selectTipTarjeta"  name="selectTipTarjeta" data-rel="chosen" style="height:25px;">
                            	<option value="0">- Seleccione la Tarjeta *-</option>
                                	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['tc'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['tc']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tc']['name'] = 'tc';
$_smarty_tpl->tpl_vars['smarty']->value['section']['tc']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['ALL_TIP_CARDS']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tc']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['tc']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tc']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tc']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['tc']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tc']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['tc']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tc']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['tc']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tc']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tc']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['tc']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['tc']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tc']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['tc']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tc']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['tc']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['tc']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['tc']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['tc']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['tc']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['tc']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['tc']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tc']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tc']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tc']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['tc']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tc']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tc']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['tc']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tc']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['tc']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tc']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['tc']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['tc']['total']);
?>
                                             <option  value="<?php echo $_smarty_tpl->tpl_vars['ALL_TIP_CARDS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tc']['index']]['idTarjeta'];?>
" <?php if ($_smarty_tpl->tpl_vars['ALL_TIP_CARDS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tc']['index']]['idTarjeta']==$_smarty_tpl->tpl_vars['NUM_TARJETA']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['ALL_TIP_CARDS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tc']['index']]['Tarjeta'];?>
</option>                                         
                                    <?php endfor; endif; ?>
                            </select>
              				</span>                                      
                        </div>
                        <br><br>
                        <div class="row-fluid" >                                  
                                	<div id="input-dateCorte">
                                    	<input type="text" class="datepicker" id="dateCorte" name="dateCorte" placeholder="Seleccione Fecha de Corte *" value="<?php echo $_smarty_tpl->tpl_vars['FEC_CORTE']->value;?>
"> 
                                    </div>
                        </div>
						<div class="input-prepend pull-left" id="boxSelectProveedor">
                        	<span class="add-on" style="padding:0px; height:26px; margin:0px 3px 3px 0px;">                                    
                            	<select id="selectProveedor" name="selectProveedor" data-rel="chosen" style="height:25px;">
                                	<option value="0">- Proveedor (opcional)-</option>
                                    	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']["p"])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']["p"]);
$_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['name'] = "p";
$_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['PROVEEDORES']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['total']);
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['PROVEEDORES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['idProveedor'];?>
" <?php if ($_smarty_tpl->tpl_vars['PROVEEDORES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['idProveedor']==$_smarty_tpl->tpl_vars['ID_PROVEEDOR']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['PROVEEDORES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['nombreProveedor'];?>
</option>
                                        <?php endfor; endif; ?>
                                </select>                                    
                            </span>                                
                        </div>
                        
                        <br><br>
                        
                         <div id="message-fields-obl"></div>                  
						<button type="button" class="btn btn-small btn-success" name ="btnCargaFacturas"  id="btnCargaFacturas" onclick="findFactProveedor()" style="float:right;font-size:1.2vw;">Cargar Facturas</button> 

    

					</div>               
				</div>
				<br>
				<hr width=100%<?php ?>>                           
            <table class="table table-striped table-bordered bootstrap-datatable" id="tblFactProveedores">
                <thead>
                    <tr>
                        <th>Pedido</th>
                        <th>Proveedor</th>
                        <th>Factura</th>
                        <th>Fecha</th>
                        <th>Moneda</th>
                        <th>Monto</th>
                        <th>Sel</th>
                    </tr>
                </thead>
				<tbody id="info-FactProveedores" >
 					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['name'] = 'lP';
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['LISTA_FACTPROVEEDOR']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
						<tr style="padding:0px;" > 
							<td style="width:7%;"><?php echo $_smarty_tpl->tpl_vars['LISTA_FACTPROVEEDOR']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['numOrdenCompra'];?>
</td>
        					<td style="width:23%;"><?php echo $_smarty_tpl->tpl_vars['LISTA_FACTPROVEEDOR']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['nombreProveedor'];?>
</td>     
							<td style="width:15%;"><?php echo $_smarty_tpl->tpl_vars['LISTA_FACTPROVEEDOR']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['numDoc'];?>
</td>
							<td style="width:15%;"><?php echo $_smarty_tpl->tpl_vars['LISTA_FACTPROVEEDOR']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['fecDoc'];?>
</td>
							<td style="width:10%;"><?php echo $_smarty_tpl->tpl_vars['LISTA_FACTPROVEEDOR']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['idMoneda'];?>
</td>
							<td style="width:10%; text-align:right"><?php echo $_smarty_tpl->tpl_vars['LISTA_FACTPROVEEDOR']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['montoDoc'];?>
</td>					
							<td style="width:10%;" >
								<input type="checkbox"  id="selRow<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']+1;?>
" value='s' <?php if (!empty($_smarty_tpl->tpl_vars['LISTA_FACTPROVEEDOR']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['lP']['index']]['fechaCorteConcilia'])) {?>checked<?php }?>>
							</td>
						</tr> 
					<?php endfor; endif; ?>				
                </tbody>
            </table>
                                                                     
				<input type="button" name="btnConciliar" id="btnConciliar" onclick="conciliaDatos();" value="<?php echo $_smarty_tpl->tpl_vars['BTN_ACTION']->value;?>
" disabled class="btn btn-small btn-success" style="float:right; font-size:1.2vw;">
                                                                    <span class="noty"></span>
                                                                    
				<button type="button" class='btn btn-small btn-warning' name="btnImprimir" id='btnImprimir' onclick="goPage()" style="float:right; font-size:1.2vw;">Imprimir</button>
</div> <!-- box-content -->
            </form> 				
			<br><br>            
    </div><!--/span-->
</div><!--/row-->


<script type="text/javascript">


function goPage(){
		var tarjeta 	= $("#selectTipTarjeta").val();
		var fecha 		= $("#dateCorte").val();
		var proveedor 	= $("#selectProveedor").val();
		
		window.open('prnListData.php?tarjeta='+tarjeta+"&fecha="+fecha+"&proveedor="+proveedor,'_blank');

	};	

$(document).ready(function(){    
    
	var newAction = $("#action").val(); 

	if (newAction == "3" || newAction == "4"){
		$("#frmData :input").attr('readonly', true);
		
		$("#btnConciliar").css("display","none");
		$("#btnImprimir").css("display","none");
	}else{
		if (newAction == "1"){
			$("#btnConciliar").css("display","block");
			$("#btnImprimir").css("display","none");
						
		}else{
			if (newAction == "2"){
			// modificar se esconde el boton cargar facturas
			$("#btnCargaFacturas").css("display","none");
			$("#btnImprimir").css("display","none");
			
			$('input:button[name=btnConciliar]').prop('disabled', false);
			$("#selectTipTarjeta").prop('disabled', true);
			$("#selectProveedor").prop('disabled', true);
			$("#dateCorte").prop('disabled', true)
			}else{ // IMPRIMIR
				$("#btnCargaFacturas").css("display","none");
				$("#btnConciliar").css("display","none");
				$("#selectTipTarjeta").prop('disabled', true);
				$("#selectProveedor").prop('disabled', true);
				$("#dateCorte").prop('disabled', true)
				
				
			}
						
		}
	}
   
   
    $('.datepicker').datepicker({
       language: "es",
       format:"dd/mm/yyyy",
       todayHighlight: true,
       autoclose: true
       //,           
       //startDate: new Date()
    });


    // Si cambia algun dato del encabezado se debe limpiar la lista de facturas
    // Esto para asegurar que debe vover a traer los datos de factuas a conciliar
    //
    $("#selectProveedor").on("change", function(e){
        e.preventDefault();
        limpiaDetalleFacturas();
    });
    
    $("#selectTipTarjeta").on("change", function(e){
        e.preventDefault();
        limpiaDetalleFacturas();
    });

    $("#dateCorte").on("change", function(e){
        e.preventDefault();
        limpiaDetalleFacturas();
    });


    /*   
    $('#tblFactProveedores').dataTable();

    $('#tblFactProveedores').dataTable({                        
		"sDom": "<'row-fluid'<'span6'l><'span6'f>r>t<'row-fluid'<'span12'i><'span12 center'p>>",
		"sPaginationType": "bootstrap",
                    'iDisplayLength': 8,
                    "aLengthMenu": [[8, 16, 24, 32, -1], [8, 16, 24, 32, "Todos"]],
                    "aaSorting": [[ 1, "asc" ]],
		"oLanguage": {
                    "sProcessing":     "Procesando...",
                    "sLengthMenu":     "Mostrar _MENU_ registros",
                    "sZeroRecords":    "No se encontraron resultados",
                    "sEmptyTable":     "Ningún dato disponible en esta tabla",
                    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                    "sInfoPostFix":    "",
                    "sSearch":         "Buscar:",
                    "sUrl":            "",
                    "sInfoThousands":  ",",
                    "sLoadingRecords": "Cargando..."
		}
	});            
*/
});

function findFactProveedor(){
	// Se debe validar primero si los campos obligatorio fueron seleccionados.
	
	// se inicializa a con false, no hay errores
	var errors = false;
	// El campo proveedor es obligatorio
	var selProveedor = $("#selectProveedor").val();
    //if(selProveedor == "0"){
    //    $("#boxSelectProveedor").addClass("error");
    //    errors = true;
    //}else{
    //    $("#boxSelectProveedor").removeClass("error");
    //}
    // El campo tipo tarjeta es obligatorio
	var selTarjeta = $("#selectTipTarjeta").val();
    if(selTarjeta == "0"){
        $("#boxSelectTipTarjeta").addClass("error");
        errors = true;
    }else{
        $("#boxSelectTipTarjeta").removeClass("error");
    }
	// fecha de corte es obligatorio
    var fCorte = $("#dateCorte").val();
    if(fCorte == ""){
        $("#input-dateCorte").addClass("error");
        errors = true;
    }else{
        $("#input-dateCorte").removeClass("error");
    }
    
    if(errors != true){
		// no hay errores se puede continuar
		// se limpia el campo de mensaje de errores.
		$("#message-fields-obl").html("");
			
		// se habilita el boton conciliar para que el usuario lo pueda seleccionar
		$('input:button[name=btnConciliar]').prop('disabled', false);

		// se habilita el boton imprimir para que el usuario lo pueda seleccionar
		$('input:button[id=btnImprimir]').prop('disabled', false);
		    
		// se carga el grid con las facturas
		// las variables que se utilizadas se cargaron durante la revision de los campos.
    	$("#info-FactProveedores").load("buscarFactProveedor.php", { selProveedor : selProveedor, selTarjeta : selTarjeta ,fCorte: fCorte}, function(response,status,xhr){
    		
    	});
   	 
    }else{
        $("#message-fields-obl").html("<div class='alert alert-error pull-left'><span class='icon icon-red icon-alert'/></span> Complete la Información Requerida</strong></div>");
        return false;
    } // if(errors != true)    
        
}

function limpiaDetalleFacturas() {
    $("#info-FactProveedores").html("");
    // se deshabilita el boton conciliar para que el usuario no lo pueda seleccionar
	$('input:button[name=btnConciliar]').prop('disabled', true);	
}

function conciliaDatos() {
	var TableData;
	TableData = storeTblValues()
	TableData = $.toJSON(TableData);

	var properties = {
            url: "processConciliaDatos.php",
            async: true,
            cache: false,
            data: "pTableData=" + TableData+"&pfechaCorte="+$("#dateCorte").val()+"&numTarjeta="+$("#selectTipTarjeta").val()+"&idProveedor="+$("#selectProveedor").val()+"&action="+$("#action").val(),
            type: "POST",
            success: function(msg){                
                //alert(msg);
                $('.noty').noty({                    
                    text:msg,
                    layout:"center",
                    type:"success",
                    speed: 500,
                    animateOpen: {opacity: "show"}                    
                    
                });                
            }
        };            
        $.ajax(properties);
}

function storeTblValues()
{
    var TableData = new Array();
    var i=0;
    $('#tblFactProveedores tr').each(function(row, tr){
    	var aRowSel = document.getElementById('selRow' + i);
    	
    	if (aRowSel !== null){    		
    		if (aRowSel.checked == true){	
          	  estaSel = 'SI';
      	  	}else {
      		  estaSel = 'NO';
      	  	}	
    	}else{
        	estaSel = 'NO';
    	}
        TableData[row]={
            "Pedido" : $(tr).find('td:eq(0)').text()
            , "Factura" :$(tr).find('td:eq(2)').text()
            , "FechaFactura" : $(tr).find('td:eq(3)').text()
            , "EstaSel" : estaSel
        }
        i++;    
    }); 
    TableData.shift();  // first row will be empty - so remove
    return TableData;
}


// *************************************************************
// A partir de esta linea en adelante no se utilizan los procedimientos
// que estan aca abajo. Se dejan solo para referencia por si se requiere
// entender algun concepto o utilizar una forma diferente.
// **************************************************************
function getJson(){

    var selProveedor 	=document.getElementById("selectProveedor").value;
    var selTarjeta 		=document.getElementById("selectTipTarjeta").value;
    var fecCorteT 		=document.getElementById("dateCorte").value;
    var fCorte    = fecCorteT[6]+fecCorteT[7]+fecCorteT[8]+fecCorteT[9]+"-"+fecCorteT[3]+fecCorteT[4]+"-"+fecCorteT[0]+fecCorteT[1];    
	var tmp2 = selProveedor+ ' '+ selTarjeta +' '+fCorte+' '+fecCorteT;
	var tmp = 'tira ';
	var table = document.getElementById("tblFactProveedores");
	for (var i = 0, row; row = table.rows[i]; i++) {
	   //iterate through rows
	   //rows would be accessed using the "row" variable assigned in the for loop
	   for (var j = 0, col; col = row.cells[j]; j++) {
	     //iterate through columns
	     //columns would be accessed using the "col" variable assigned in the for loop
		 tmp = tmp + ' '+ col.innerHTML;
	   }  
	}
	alert(tmp);
	return;
}

function getCells(){
	var tmp = 'tira ';
	var table=document.getElementById("tblFactProveedores");
	var r=0;
	while(row=table.rows[r++])
	{
	  var c=0;
	  while(cell=row[r].cells[c++])
	  {
	    // do sth with cell
		tmp = tmp + cell.value;
	  }
	}
	alert(tmp);
	return;
}

function getTableData(){
	$('#tblFactProveedores tr').each(function(row, tr){
	    TableData = TableData 
	        + $(tr).find('td:eq(0)').text() + ' '  // Pedido.
	        + $(tr).find('td:eq(1)').text() + ' '  // Factura
	        + $(tr).find('td:eq(2)').text() + ' '  // Fecha
	        + $(tr).find('td:eq(3)').text() + ' '  // Moneda
	        + $(tr).find('td:eq(4)').text() + ' '  // Monto
	        + '\n';
	});
}

function validateRow(frm)
{
	
    var tbl = document.getElementById('tblFactProveedores');
    var lastRow = tbl.rows.length -1; // -1 para excluir el encabezado  
    var i;
    var tmp = 'Encontro';

    for (i=0; i<lastRow; i++) {
      var aRowSel = document.getElementById('selRow' + i);
      if (aRowSel !== null){
    	  //alert (aRowSel.attributes[1].value+' '+'selRow' + i);return;
    	  tmp = tmp + ' ' + ' selRow' + i + aRowSel.attributes[0].value + aRowSel.attributes[1].value+ aRowSel.attributes[2].value;

    	  if (aRowSel.checked == true){
        	  tmp = tmp + ' es true';
    	  }else {
    		  tmp = tmp + ' es false';
    	  }
      }

      //if (aRowSel.checked) {
      //	tmp = ' Row ' + i + ' is selected';
        //alert('Row ' + i + ' is selected');        
      //}

    }
    alert (tmp);
    return;
    
}

function validateRow2(frm)
{	
	var TableData = 'Datos ';
	$('#tblFactProveedores tr').each(function(row, tr){
		var elInput = $('input');
		if ($(tr).find('input').checked==true){
			tmp = 'Si concilia -';
		}
		else{
			tmp = 'No concilia -';
		}
		tmp = tmp + $(tr).find(elInput).checked;
	    TableData = TableData 
	        + $(tr).find('td:eq(0)').text() + ' '  // Pedido.
	        + $(tr).find('td:eq(1)').text() + ' '  // Factura
	        + $(tr).find('td:eq(2)').text() + ' '  // Fecha
	        + $(tr).find('td:eq(3)').text() + ' '
	        + $(tr).find('td:eq(4)').text() + ' '
	        + tmp + ' '
	        + '\n';
	});
    alert (TableData);
    return;    
}

</script>

<?php }} ?>
