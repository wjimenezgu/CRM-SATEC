{$NAV_MENU}
        <form class="form-horizontal" id='frmAjustes'  action="processAjustes.php" onsubmit="return validateForm()" method="POST">
            <input type="hidden" name="id_ajuste" id="id_ajuste" value="{$ID_AJUSTE}">
            <input type="hidden" name="id_tienda" id="id_tienda" value="{$ID_TIENDA}">
            <input type="hidden" name="action"    id="action"    value="{$ACTION}">
            <input type="hidden" name="EoS"       id="EoS"       value="{$EoS}">
        	<div class="row-fluid" >		
            	<div class="box span12">
                	<div class="box-header well" data-original-title>
                    	<h2>Ajustes Inventario - {$DESC_MOV}</h2>
                        	<select class="pull-right" id="selectStore" name="selectStore" disabled> 
                        		<option value="0"></option>
                            	{section name=lP loop=$LISTA_TIENDAS}         		
                                	<option value="{$LISTA_TIENDAS[lP].codTienda}" 
                                		{if $LISTA_TIENDAS[lP].codTienda eq $ID_TIENDA} selected{/if}
                                	>
                                		{$LISTA_TIENDAS[lP].nombreTienda}
                                	</option>                                	
                                {/section}
                            </select>
                    </div>
                    <div id="message-fields" style='alignment-adjust:  central;'></div>
                    <div class="box" style="margin-left: 10px;margin-right: 10px;" >
                        	<div class="box-header well">
                            	<h3>Encabezado Ajuste</h3>
                            </div>
                    	
							<div class="control-group" id="boxFechaAjuste" style="margin-top:6px;">
								<label class="control-label" for="disabledInput">Fecha Ajuste*</label>
								<div class="controls">
									<input class="input-xlarge datepicker"  name="ffechaAjuste" id="ffechaAjuste" type="text" placeholder="Fecha Ajuste" value="{$AJUSTE[0].fecMovimiento}">
								</div>
							</div>
							<div class="control-group" id="boxTipoMov">
								<label class="control-label" for="selectTipoMov">Tipo Movimiento*</label>
								<div class="controls">
									<select id="selectTipoMov" name="selectTipoMov" class="input-xlarge focused">
										<option value="0">Sin Tipo Movimieto</option>
	                        				{section name="lc" loop=$LISTA_TIPOMOV}
	                            				<option 
	                            					value="{$LISTA_TIPOMOV[lc].codTipoMov}"
	                            					{if $LISTA_TIPOMOV[lc].codTipoMov eq $AJUSTE[0].codTipoMov} selected{/if}	                            					
	                            				>
	                            				{$LISTA_TIPOMOV[lc].descTipoMov}
	                            				</option>
                                			{/section}
									</select>
								</div>
							</div>
							<div class="control-group" id="boxdetalle" >
								<label class="control-label" for="focusedInput">Detalle*</label>
								<div class="controls">
									<textarea id="fdetalle" name="fdetalle" class="autogrow" style="width: 270px; height: 30px" maxlength="200" >{$AJUSTE[0].detalle}</textarea>
								</div>
				 			</div>	
                        </div> <!-- class box -->
                        <div class="box" style="margin-left: 10px;margin-right: 10px;" >
                        	<div class="box-header well">
                            	<h3>Buscar Articulos</h3>
                            </div>
								<div class="control-group" style="margin-left: -150px;" id="boxCriterios">
									<div class="controls">
				 						<label class="radio" style="font-size:1.2vw; margin-top:4px; ">Criterios:</label>					
										<label class="radio" style="font-size:1.2vw; margin-top:12px;">
											<input type="radio" name="criterio" id="optionCod" value="codigo" checked="" onclick="cleanTxtBuscar()">
											código
										</label>
										<label class="radio" style="font-size:1.2vw; margin-top:12px;">
											<input type="radio"  name="criterio" id="optionDes" value="nombre" onclick="cleanTxtBuscar()">
											descripción
										</label>
										<label class="radio" style="font-size:1.2vw; margin-top:12px;">
											<input type="radio" name="criterio" id="optionExt" value="externo" onclick="cleanTxtBuscar()">
											código externo
										</label>
										<label class="radio" style="font-size:1.2vw; margin-top:12px;">
											<input type="radio" name="criterio" id="optionBarras" value="barras" onclick="cleanTxtBuscar()">
											barras
										</label>												
                						<form style="margin:0px; padding:0px; float:right; margin-top:-5px;">
                							<input type="text"  accesskey="s" class="txt_search" id="texto-buscar" name="texto-buscar" value="" style="margin-top:4px; margin-left:50px; font-size:1vw; width:300px;" placeholder="Iniciar Búsqueda">                			
                    						<button id="btn-getInventario" style="margin-top:4px;" class="btn btn-small" data-toggle="modal" data-target="#inventory-modal" ><i class="icon-search"></i> Buscar</button>
                						</form> 						
									</div>  <!-- class controls -->             
								</div>	<!-- boxCriterios -->	                                                    
                        </div> <!-- class="box"  -->
                        <div class="box-content">
                        	<table class="table table-striped table-bordered bootstrap-datatable" id="tableItem">
                            	<thead>
                                	<tr>
                                    	<th style='width:10px;'>#</th>
                                    	<th style='width:500px;'>Artículo</th>
                                        <th style='width:100px;'>Código</th>
                                        <th style='width: 10px;'>Cant.</th>
                                        <th style="width: 25px;">Acción</th>
                                    </tr>
                                </thead>
                                <tbody id="tbod" name="tbod">
                                	<div id ="divtbod" class="grid" style="width: fit-content; border: 1px;"></div>
                            		{section name=lP loop=$DETAJUSTE} 								
										<tr style="padding:0px;" id="tr{$DETAJUSTE[lP].numLinea}">
						    			<td style="width:10px;">
											{$DETAJUSTE[lP].numLinea}											
										</td>
						    			<td style="width:455x;">
											{$DETAJUSTE[lP].desArticulo}
											<input name="item[]" type="hidden" value="{$DETAJUSTE[lP].desArticulo}">
										</td>
     									<td style="width:10px;">
											{$DETAJUSTE[lP].codArti}
											<input name="codArti[]" type="hidden" value="{$DETAJUSTE[lP].codArti}">
										</td>     									
                            			<td style="width:10px;" align="left">
                            			<!-- 	<input class="input-mini"  id="cantRow{$smarty.section.lP.index+1}" type="number"  value="{$DETAJUSTE[lP].cantidad}">   -->
                            				<input class="input-mini"  name="cant[]" id="cant[]"  type="number"  {if $ACTION eq "5" || $ACTION eq "4" || $ACTION eq "6"} disabled {/if} style="text-align: right;"  value="{$DETAJUSTE[lP].cantidad}">
                            			</td>
                            			
										<td class="center">
											<a href="#" id="{$DETAJUSTE[lP].idAjuste}" onclick="goPage(3, this.id,'{$EoS}')"><i class="icon icon-color icon-remove"></i></a>
										</td>
									</tr> 
								{/section}
                                </tbody>
                            </table>  
                         </div>
                         <div class="modal-footer">
                         	<button type="button" class="btn btn-large btn-info pull-right" onclick="goBack('{$EoS}');"  style='margin-left: 15px;'>Cerrar</button>
                       		<button type="submit" id='facturar' name="enviar" class="btn btn-large btn-primary pull-right">{$BTN_ACTION}</button>
                         </div>
                         
                </div><!--class="box span12"-->
            </div><!--class="row-fluid" -->
   		</form>            


<!-------------------------- MODAL ARTICULOS ---------------------------------->
<div class="modal fade" id="inventory-modal" tabindex="-1" role="dialog" data-refresh="true"  aria-hidden="true" style="margin: -320px 0 0 -380px;width:800px">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header"> 
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3 class="modal-title green"><i class="fa fa-bars"></i> Inventario de Artículos</h3>                
            </div>
            <form action="#" method="post" id="frmAllInventory">
                <div class="modal-body" id="allInventory" style="max-height: 490px;">                    
                    <h5>Consultando Inventario</h5><div id='boxProgress2' style='width:100%; margin-top:10px;'><div class='progress progress-striped progress-info active' ><div class='bar' style='width:0%;'></div></div></div>                    
                </div>
                <div class="modal-footer clearfix">
                    <button type="button" class="btn btn-inverse" id="accept-choosed" data-dismiss="modal"><i class="fa fa-check-square-o"></i> Aceptar</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<script type="text/javascript">


$(document).ready(function(){
	
    $('.datepicker').datepicker({
        language: "es",
        format:"dd/mm/yyyy",
        todayHighlight: true,
        autoclose: true
        //,           
        //startDate: new Date()
     });

	
	// Si presiona enter en el campo texto a buscar que se ejecute el evento click() del boton buscar
    $('#texto-buscar').keypress(function(e){
        if(e.keyCode==13){
        	e.preventDefault();
        	$('#btn-getInventario').click();
        }
      });

    	
    var cache = {
            $btnInventario    : $("#btn-getInventario"),
            $boxInventory     : $("#allInventory"),
            $txtBuscar        : $("#texto-buscar"),
            $selCriterio      : $("#criterio")
        };

    //BOTON QUE CARGA EL INVENTARIO DE ARTICULOS
    cache.$btnInventario.on("click", function(e){

          cache.$boxInventory.html("<h5>Consultando Inventario</h5><div id='boxProgress2' style='width:100%; margin-top:10px;'><div class='progress progress-striped progress-info active' ><div class='bar' style='width:0%;'></div></div></div>");
          if($("#texto-buscar").val()!=""){
        		document.getElementById('message-fields').innerHTML = "";
                var vcriterio    = $('input[name=criterio]:checked').val();
                var vtxtBusqueda = cache.$txtBuscar.val();
              	
                if($("#texto-buscar").val()!=""){
                	var properties = {
                    			url: "itemsLoad.php",
                        		async: true,
                        		cache: false,
                        		data: "txtBuscar="+vtxtBusqueda+"&criterio="+vcriterio+"&action=1",
                        		type: "POST",
                        		success: function(inventario){
                            		cache.$boxInventory.html(inventario);							
                        		} // success
                    		}; // var properties            
                    		$.ajax(properties);                
                }else{
                    	cache.$boxInventory.html("Debe indicar articulo a buscar.");
                }            
          }else{
        	  document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Debe indicar articulo a buscar.</strong></div>";    
          }        	
    });



    $('#inventory-modal').on('show', function (e) {
        if ($("#texto-buscar").val()=="") return e.preventDefault(); // stops modal from being shown
    });
    
    $("#selectTipoMov").focus();

                   
});

	function validateForm() {
		//
		// Se valida que el usuario haya indicado la fecha de ajuste, es obligatorio.
		//
		$("#boxFechaAjuste").removeClass("error");
		$("#boxdetalle").removeClass("error");
		$("#boxTipoMov").removeClass("error");
		document.getElementById('message-fields').innerHTML = "";
		if ($("#ffechaAjuste").val() == ''){
			$("#boxFechaAjuste").addClass("error");

            document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Fecha Ajuste es Requerido.</strong></div>";            
            return false;
		}
		// un detalle es obligatorio
		if ($("#fdetalle").val() == ''){
			$("#boxdetalle").addClass("error");
            document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Detalle es Requerido.</strong></div>";
            return false;
		}		
		// tipo de movimiento es obligatorio
		if ($("#selectTipoMov").val() == '0'){
			$("#boxTipoMov").addClass("error");
            document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Tipo Movimiento es Requerido.</strong></div>";
            return false;
		}
		// debe indicar al menos un articulo si el largo es igual a una solo tiene el encabezado
		var table = document.getElementById("tableItem");
		if (table.rows.length == 1) {
            document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Debe indicar al menos 1 articulo.</strong></div>";
            return false;
		}
		
		
		
		
		return true;
	}
	

    

 //Deshabilita los campos
    function deshabilitaCampos(){
    	$("#btn-getInventario").prop("disabled",true);
    }

  //Habilita los campos
    function habilitaCampos(){
    	$("#btn-getInventario").prop("disabled",false);        
        document.getElementById('message-fields').innerHTML = "";           
    }

    
//Setea un objeto para almacenar las variables
    function myRowObject(one, two, three, four){
		this.one = one; // text object
		this.two = two; // input text object
		this.three = three; // cantidad
		this.four = four; // precio de venta
     } 
    


//Hace los preparativos para eliminar una fila, además llama a la funcion qu elimina la fila y recalcula
//el subtotal, impuesto, y total
function deleteCurrentRow(obj){
	
		var delRow = obj.parentNode.parentNode;
		var tbl = delRow.parentNode.parentNode;
		var rIndex = delRow.sectionRowIndex;
                
		var rowArray = new Array(delRow);
		deleteRows(rowArray);
		reorderRows(tbl, rIndex);
                math();
}

//Reordena la tabla despues que una fila fue eliminada
function reorderRows(tbl, startingIndex){

	if (tbl.rows.length==1){
		// si es igual a 1 la tabla esta vacia, solo tiene la linea del encabezado
		$("#facturar").prop("disabled",true);
		$("#fdescuento").val("0.00");
		//$("#fdescuento").prop("disabled",true);
		$("#pdescuento").val("0");
		$("#pdescuento").prop("disabled",true);
	}else{
    	if(tbl.rows[startingIndex]){
			var count = startingIndex;
			for (var i=startingIndex; i<tbl.rows.length; i++) {
				// CONFIG: next line is affected by myRowObject settings
				tbl.rows[i].myRow.one.data = count; // text
				count++;
			};
    	};
	};	
}

//Elimina una fila de la tabla
function deleteRows(rowObjArray){
	
		for (var i=0; i<rowObjArray.length; i++) {
			var rIndex = rowObjArray[i].sectionRowIndex;
			rowObjArray[i].parentNode.deleteRow(rIndex);
		}
	
}




//No permite la entrada de ninguna letra o caracter especial al input cantidad
    $(document).ready(function() {
        $("#cant").keydown(function (e) {
            // Allow: backspace, delete, tab, escape, enter and .
            if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
                 // Allow: Ctrl+A
                (e.keyCode == 65 && e.ctrlKey === true) || 
                 // Allow: home, end, left, right, down, up
                (e.keyCode >= 35 && e.keyCode <= 40)) {
                     // let it happen, don't do anything
                     return;
            }
            // Ensure that it is a number and stop the keypress
            if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                e.preventDefault();
            }
        });
    });
    
    $(document).ready(function() {
        $("#avalue").keydown(function (e) {
            // Allow: backspace, delete, tab, escape, enter and .
            if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
                 // Allow: Ctrl+A
                (e.keyCode == 65 && e.ctrlKey === true) || 
                 // Allow: home, end, left, right, down, up
                (e.keyCode >= 35 && e.keyCode <= 40)) {
                     // let it happen, don't do anything
                     return;
            }
            // Ensure that it is a number and stop the keypress
            if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                e.preventDefault();
            }
        });
    });


//Limpia toda la pantalla para realizar una factura nueva
    function clearAll(){
        $('#myForm')[0].reset();
        document.getElementById('message-fields').innerHTML ="";
        var table = document.getElementById("tableItem");
        while(table.rows.length > 1) {
        	  table.deleteRow(1);
        	}                

        $("#btn-getInventario").prop("disabled",true);

        
        $("#facturar").prop("disabled",true);
 
        $("#selectTipoMov").focus();
    }

    function goBack(EoS){
    	
		if(EoS=="E"){		
			window.location.href ='allEntradas.php';
		}else{
			window.location.href ='allSalidas.php';
		}
	};


    function findItems(){
    	  
        criterio    = $('input[name=criterio]:checked').val();
        txtBusqueda = $("#texto-buscar").val();
      
        $("#info-items").load("buscarProducto.php", { criterio : criterio, txtBusqueda : txtBusqueda }, function(response,status,xhr){

        });    
        
        
    }

    function openModalArticulos(){
        if ($("#texto-buscar").val()==""){
        	document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Debe indicar articulo a busar.</strong></div>";
        }else{
        	document.getElementById('message-fields').innerHTML ="";
            $("#inventory-modal").modal('show');
            var progress = setInterval(function() {
                var $bar = $('.bar');
                if ($bar.width()>=450) {
                    clearInterval(progress);
                    $('.progress').removeClass('active');

                    var idProveedor = '1021';

                    var vcriterio    = cache.$selCriterio.val();
                    var vtxtBusqueda = cache.$txtBuscar.val();
                    
                    if(idProveedor != 0){
                        var properties = {
                            url: "itemsLoad.php",
                            async: true,
                            cache: false,
                            data: "idProveedor="+idProveedor+"&action=1",
                            type: "POST",
                            //dataType: "json",
                            error: cache.$boxInventory.html("Error cargando articulos"),
                            success: function(inventario){

                                cache.$boxInventory.html(inventario);
							
                            }
                        };            
                        $.ajax(properties);                
                    }else{
                        cache.$boxInventory.html("Debe seleccionar al menos 1 proveedor");
                    }            
                } else {
                    $bar.width($bar.width()+150);
                }
                $bar.text($bar.width()/5 + "%");

            }, 2300);
        
            $("#invOpen").val("1");
            
        }
    }

    function cleanTxtBuscar(){
        
        $("#texto-buscar").val(""); 
        $("#texto-buscar").focus();
        
    }

  


    

    
	</script>