{$NAV_MENU}
<div class="row-fluid ">		
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2>Conciliación de Tarjetas de Créditos</h2>
        </div>
           <form name="fconciliar"> 
           		<input type="hidden" id="action" name="action" value="{$ACTION}">
        <div class="box-content">

				<div class="control-group">
					<div class="controls">
					
                        <div class="input-prepend pull-left " id="boxSelectTipTarjeta">
                        	<span class="add-on" style="padding:0px; height:26px; margin:0px 3px 3px 0px;">                                                   
                        	<select id="selectTipTarjeta"  name="selectTipTarjeta" data-rel="chosen" style="height:25px;">
                            	<option value="0">- Seleccione la Tarjeta *-</option>
                                	{section name=tc loop=$ALL_TIP_CARDS}
                                             <option  value="{$ALL_TIP_CARDS[tc].idTarjeta}" {if $ALL_TIP_CARDS[tc].idTarjeta eq $NUM_TARJETA} selected{/if}>{$ALL_TIP_CARDS[tc].Tarjeta}</option>                                         
                                    {/section}
                            </select>
              				</span>                                      
                        </div>
                        <br><br>
                        <div class="row-fluid" >                                  
                                	<div id="input-dateCorte">
                                    	<input type="text" class="datepicker" id="dateCorte" name="dateCorte" placeholder="Seleccione Fecha de Corte *" value="{$FEC_CORTE}"> 
                                    </div>
                        </div>
						<div class="input-prepend pull-left" id="boxSelectProveedor">
                        	<span class="add-on" style="padding:0px; height:26px; margin:0px 3px 3px 0px;">                                    
                            	<select id="selectProveedor" name="selectProveedor" data-rel="chosen" style="height:25px;">
                                	<option value="0">- Proveedor (opcional)-</option>
                                    	{section name="p" loop=$PROVEEDORES}
                                            <option value="{$PROVEEDORES[p].idProveedor}" {if $PROVEEDORES[p].idProveedor eq $ID_PROVEEDOR} selected{/if}>{$PROVEEDORES[p].nombreProveedor}</option>
                                        {/section}
                                </select>                                    
                            </span>                                
                        </div>
                        
                        <br><br>
                        
                         <div id="message-fields-obl"></div>                  
						<button type="button" class="btn btn-small btn-success" name ="btnCargaFacturas"  id="btnCargaFacturas" onclick="findFactProveedor()" style="float:right;font-size:1.2vw;">Cargar Facturas</button> 

    

					</div>               
				</div>
				<br>
				<hr width=100%>                           
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
 					{section name=lP loop=$LISTA_FACTPROVEEDOR}
						<tr style="padding:0px;" > 
							<td style="width:7%;">{$LISTA_FACTPROVEEDOR[lP].numOrdenCompra}</td>
        					<td style="width:23%;">{$LISTA_FACTPROVEEDOR[lP].nombreProveedor}</td>     
							<td style="width:15%;">{$LISTA_FACTPROVEEDOR[lP].numDoc}</td>
							<td style="width:15%;">{$LISTA_FACTPROVEEDOR[lP].fecDoc}</td>
							<td style="width:10%;">{$LISTA_FACTPROVEEDOR[lP].idMoneda}</td>
							<td style="width:10%; text-align:right">{$LISTA_FACTPROVEEDOR[lP].montoDoc}</td>					
							<td style="width:10%;" >
								<input type="checkbox"  id="selRow{$smarty.section.lP.index+1}" value='s' {if !empty($LISTA_FACTPROVEEDOR[lP].fechaCorteConcilia)}checked{/if}>
							</td>
						</tr> 
					{/section}				
                </tbody>
            </table>
                                                                     
				<input type="button" name="btnConciliar" id="btnConciliar" onclick="conciliaDatos();" value="{$BTN_ACTION}" disabled class="btn btn-small btn-success" style="float:right; font-size:1.2vw;">
                                                                    <span class="noty"></span>
                                                                    
				<button type="button" class='btn btn-small btn-warning' name="btnImprimir" id='btnImprimir' onclick="goPage()" style="float:right; font-size:1.2vw;">Imprimir</button>
</div> <!-- box-content -->
            </form> 				
			<br><br>            
    </div><!--/span-->
</div><!--/row-->

{literal}
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
{/literal}
