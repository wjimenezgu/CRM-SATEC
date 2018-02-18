{$NAV_MENU} 
        <form class="form-horizontal" id='frmAjustes'  action="procesaTrasladoTienda.php" onsubmit="return validateForm()" method="POST">
            <input type="hidden" name="id_traslado" id="id_traslado" value="{$ID_TRASLADO}">
            <input type="hidden" name="id_tienda" id="id_tienda" value="{$ID_TIENDA}">
            <input type="hidden" name="action"    id="action"    value="{$ACTION}">
            <input type="hidden" name="EoS"       id="EoS"       value="{$EoS}">
            <input type="hidden" name="estado"    id="estado"    value="{$TRASLADO[0].Estado}">
            <input type="hidden" name="current_date"    id="current_date"    value="{$CURRENT_DATE}">
            <input type="hidden" name="fecMovimiento"       id="fecMovimiento"       value="{$TRASLADO[0].fecMovimiento}">
        	<div class="row-fluid" >		
            	<div class="box span12">
                	<div class="box-header well" data-original-title>
                    	<h2>Traslados Inventario - {$DESC_MOV}</h2>
                    </div>
                    <div id="message-fields" style='alignment-adjust:  central;'></div>
                    	<div class="box" style="margin-left: 10px;margin-right: 10px;" >
                        	<div class="box-header well">
                            	<h3>Encabezado Traslado</h3>
                            </div>
                            <div class="control-group" id="boxTiendaOrigen" style="margin-top:10px;">
								<label class="control-label" for="selectTiendaOrigen">Tienda Origen*</label>
								<div class="controls">
                            		<select class="input-xlarge focused" id="selectTiendaOrigen" name="selectTiendaOrigen" disabled> 
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
                            </div>                                                       
                            <div class="control-group" id="boxTiendaDestino">
								<label class="control-label" for="selectTiendaDestino">Tienda Destino*</label>
								<div class="controls">
                            		<select class="input-xlarge focused" id="selectTiendaDestino" name="selectTiendaDestino"> 
                        				<option value="0">Seleccionar Tienda que se le pide</option>
                            			{section name=lPs loop=$LISTA_TIENDAS_SEL}         		
                                			<option value="{$LISTA_TIENDAS_SEL[lPs].codTienda}" 
                                			{if $LISTA_TIENDAS_SEL[lPs].codTienda eq $TRASLADO[0].codTiendaDestino} selected{/if}
                                			>
                                			{$LISTA_TIENDAS_SEL[lPs].nombreTienda}
                                			</option>                                	
                                		{/section}
                            		</select>
                            	</div>
                            </div>                                                	
							<div class="control-group" id="boxFecha" style="margin-top:6px;">
								<label class="control-label" for="focusedInput">Fecha*</label>
								<div class="controls">
									<input class="input-xlarge focused datepicker"  name="ffecha" id="ffecha" type="text" placeholder="Indicar Fecha" value="{$TRASLADO[0].fecMovimiento}">
								</div>
							</div>
<!-- 							
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
 -->							
							<div class="control-group" id="boxdetalle" >
								<label class="control-label" for="focusedInput">Detalle*</label>
								<div class="controls">
									<textarea id="fdetalle" name="fdetalle" class="autogrow" style="width: 270px; height: 30px" maxlength="200" >{$TRASLADO[0].detalle}</textarea>
								</div>
				 			</div>	
                        </div> <!-- class box -->
                        <div class="box" style="margin-left: 10px;margin-right: 10px;" id="boxBuscarArti">
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

                        <!-- PRECARGAR LISTA DE ARTICULOS  -->

                        <div class="box" style="margin-left: 10px;margin-right: 10px;" id="boxPreCargar" >
                            <div class="box-header well">
                                <h3>Pre-Cargar</h3>
                            </div>
                                <div class="control-group" style="margin-left: -150px;" id="boxCargar">
                                    <div class="controls">
                                             
                                        <form class="form-inline" style="margin:0px; padding:0px;  margin-top:8px;">
                                         <div  id="boxFields" class="form-group">
                                            <label for="fechaC">Fecha Corte</label>
                                            <input type="text" class="datepicker in-line" id="fechaC" name="fechaC" value="" style="margin-top:4px; margin-left:5px; font-size:1vw; width:150px;">
                                            <label for="fexistencia">Existencia Mínima</label>
                                            <input type="number"  id="fexistencia" name="fexistencia" value="0" style="margin-top:4px; margin-left:5px; font-size:1vw;text-align:right; width:120px;">
                                            <button type="button" id="btn-getArticulos" style="margin-top:8px;" class="btn btn-small" onclick="findArtiPedido()" ><i class="icon-download-alt"></i> Cargar</button>
                                        </div>
                                        </form>                         
                                    </div>  <!-- class controls -->             
                                </div>  <!-- boxCriterios -->                                                       
                        </div> <!-- class="box"  -->

                        <div class="box-content">
                        	<table class="table table-striped table-bordered bootstrap-datatable " id="tableItem">
                            	<thead>
                                	<tr>
                                    	<th style='width:10px;'>#</th>
                                    	<th style='width:500px;'>Artículo</th>
                                        <th style='width:100px;'>Código</th>
                                        <th style='width: 10px;'>{$EXIST_L}</th>
                                    {if $EoS eq "E"}    <th style='width: 10px;'>{$EXIST_R}</th>  {/if}
                                        <th style='width: 10px;'>Cant.</th>
                                        <th style="width: 25px;">Acción</th>                                        
                                    </tr>
                                </thead>
                                <tbody id="tbod" name="tbod" >
                                	<div id ="divtbod" class="grid" style="width: fit-content; border: 1px;"></div>
                            		{section name=lP loop=$DETTRASLADO} 								
										<tr style="padding:0px;" id="{$DETTRASLADO[lP].numLinea}">
						    			<td style="width:10px;">
						    				<label id="row{$DETTRASLADO[lP].numLinea}">{$DETTRASLADO[lP].numLinea}</label>
						    			</td>
						    			<td style="width:455x;">
						    				{$DETTRASLADO[lP].desArticulo}
						    				<input name="item[]" type="hidden" value="{$DETTRASLADO[lP].desArticulo}">
						    			</td>
     									<td style="width:10px;">
     										<input name="codArti[]" type="hidden" value="{$DETTRASLADO[lP].codArti}">
     										{$DETTRASLADO[lP].codArti}
     									</td>     									
                            			<td style="width:10px;" align="left">
                            				{$DETTRASLADO[lP].existencia}
						    				<input name="existencia[]" type="hidden" value="{$DETTRASLADO[lP].existencia}">
                            			</td>
                                        {if $EoS eq "E"} 
                                        <td style="width:10px;" align="left">
                                            {$DETTRASLADO[lP].existenciaE}
                                            <input name="existencia[]" type="hidden" value="{$DETTRASLADO[lP].existenciaE}">
                                        </td>
                                        {/if}
                            			<td style="width:10px;" align="left">                            				
                            				<input class="input-mini"  name="cant[]" id="cant[]"  type="number"  {if $ACTION eq "5" || $ACTION eq "4" || $ACTION eq "6"} disabled {/if} style="text-align: right;"  value="{$DETTRASLADO[lP].cantidad}">
                            			</td>
                            			
										<td class="center">
											<a href="#" id="{$DETTRASLADO[lP].numLinea}"  {if $ACTION eq "5" || $ACTION eq "4" || $ACTION eq "6"} hidden="true"{/if}  {if $EoS eq "E"} hidden="true"{/if} onclick="deleteCurrentRow(this)"><i class="icon icon-color icon-remove"></i></a>
                                            <input {if $EoS eq "E"}type="hidden"{else}type="checkbox"{/if}  id="selRow{$smarty.section.lP.index+1}" value='s'>
										</td>
									</tr> 
								{/section}
                                </tbody>
                            </table>  
                         </div>
                         <div class="modal-footer">
                            <button type="button" id='btnBorraSel' name="btnBorraSel" class="btn btn-large btn-warning pull-right" onclick="BorraSeleccion();"  {if $EoS eq "E"}style='display:none;'{else}style='margin-left: 15px;'{/if}>Borrar Selección</button>
                         	<button type="button" class="btn btn-large btn-info pull-right" onclick="goBack('{$EoS}');"  style='margin-left: 15px;'>Cerrar</button>
                       		<button type="button" id='btnProcesa' name="enviar" class="btn btn-large btn-primary pull-right" onclick="ProcesaAccion();">{$BTN_ACTION}</button>
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
      //  ,           
      //  startDate: new Date(),
       , defaultDate : new Date()
     });
	
	
	var newAction = $("#action").val();	
 
	if (newAction == "5" || newAction == "6"){
		// aprobar o rechazar.
		$("#selectTiendaDestino").prop("disabled",true);
		$("#ffecha").prop("disabled",true);
		$("#fdetalle").prop("disabled",true);
		$("#btn-getInventario").prop("disabled",true);
		$("#boxPreCargar").css("display","none");
		$("#boxBuscarArti").css("display","none");
	}else{
		if (newAction == "4"){
			// solo es ver
			$("#selectTiendaDestino").prop("disabled",true);
			$("#ffecha").prop("disabled",true);
			$("#fdetalle").prop("disabled",true);
			$("#btn-getInventario").prop("disabled",true);	
			$("#btnProcesa").css("display","none");
			$("#btnBorraSel").css("display","none");
			$("#boxPreCargar").css("display","none");
			$("#boxBuscarArti").css("display","none");
			
		}
		if (newAction == "2"){
			// modificar
			$("#boxPreCargar").css("display","none");
		}
		if (newAction == "1"){
			// insertar
			$( "#ffecha" ).val($( "#current_date" ).val());
		}

		
	}

	
	// solo las tiendas NO GUADALUPE pueden precargar para hacer un pedido
	if ($("#id_tienda").val() == 0){
		$("#boxPreCargar").css("display","none");
	}

	if ($("#EoS").val() == "E"){
		$("#selectTiendaDestino").prop("disabled",true);
		$("#ffecha").prop("disabled",true);
		$("#fdetalle").prop("disabled",true);
		$("#btn-getInventario").prop("disabled",true);			
	}
	
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

    function findArtiPedido(){
   //     alert('llego');
   //     return;
   		document.getElementById('message-fields').innerHTML = "";
   		var tblItems = document.getElementById('tableItem');
        var numRows = tblItems.rows.length -1; // -1 para excluir el encabezado
        if (numRows > 0){
        	// para precargar los articulos la tabla debe estar vacia
        	document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Tabla debe estar vacía para pre-cargar artículos para pedido.</strong></div>";
            
        } else{
   		
            vcodTienda  = $("#id_tienda").val();
            vfechaCorte = $("#fechaC").val();
            vexistencia = $("#fexistencia").val();
            
            $("#tbod").load("inputArtiPedido.php", { codTienda : vcodTienda, fechaCorte : vfechaCorte, existencia : vexistencia }, 
                           function(response,status,xhr){
                                        if(status == "error"){
                                            alert("Error: " + xhr.status + ": " + xhr.statusText);
                                        }
                                        if (status == "success"){
                                            var tblItems = document.getElementById('tableItem');
                                            var numRows = tblItems.rows.length -1; // -1 para excluir el encabezado
                                            if (numRows==0){
                                                alert("No hay datos que desplegar");
                                            } // if numRow
                                        }// status == success
                            } //function
                                        
                );
        } // else if numRows > 0 
    }

	function validateForm() {
		//
		// Se valida que el usuario haya indicado el cliente, es obligatorio.
		//
		document.getElementById('message-fields').innerHTML = "";
/*
		var tiendaDestino = $("#selectTiendaDestino").val();		
		if (tiendaDestino=="0"){
			$("#boxTiendaDestino").addClass("error");
			document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Tienda Destino es Requerida.</strong></div>";
			return false;
		}else{
			$("#boxTiendaDestino").removeClass("error");
		}
*/
		var fecha = $("#ffecha").val();
		if (fecha==""){
			$("#boxFecha").addClass("error");
			document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Fecha es requerida.</strong></div>";
            $("#btnProcesa").prop("disabled",false);
			return false;
		}
		else{
			$("#boxFecha").removeClass("error");
		}
		
		var detalle = $("#fdetalle").val();	
		if (detalle==""){
			$("#boxdetalle").addClass("error");
			document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Detalle es Requerido.</strong></div>";
            $("#btnProcesa").prop("disabled",false);
			return false;
		}else{
			$("#boxdetalle").removeClass("error");
		}
		var table = document.getElementById("tableItem");
        if (table.rows.length == 1){
        	document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Debe Indicar al menos un articulo.</strong></div>";
            $("#btnProcesa").prop("disabled",false);
			return false;
        }
        
        //no hay errores
        
		$("#selectTiendaDestino").prop("disabled",false);
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
    function myRowObject(one, two, three, four, five){
		this.one = one; // text object
		this.two = two; // input text object
		this.three = three; // existencia
		this.four = four; // cantidad
        this.five = five;
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
}


//Reordena la tabla despues que una fila fue eliminada
function reorderRows(tbl, startingIndex){
//alert('startingIndex '+startingIndex);	
	if (tbl.rows.length != 1){
    	if(tbl.rows[startingIndex]){
			var count = startingIndex;

			for (var i=startingIndex; i<tbl.rows.length; i++) {
				// CONFIG: next line is affected by myRowObject settings
				tbl.rows[i].cells[0].innerHTML = count;			
				//tbl.rows[i].myRow.one.data = count; // text
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

    function ProcesaAccion(){
        $("#btnProcesa").prop("disabled",true);
        $("#selectTiendaDestino").prop("disabled",false);
        document.forms["frmAjustes"].submit();
    }
    //borra las lineas que estan seleccionadas
    function BorraSeleccion(){

        var borroUna = false; // para identificar si se borro al menos una linea
        var table = document.getElementById("tableItem");

        $('#tableItem tr').each(function(row, tr){

             var target = $(tr).find('input[type="checkbox"]');
             if (target.prop('checked') == true){
                table.deleteRow(tr.rowIndex);
                // se borro una linea
                borroUna = true;
             }
      
        });
        // si SI se borro al menos una linea requiere hacer un reordenamiento
        // para numerar las filas correctamente.
        if (borroUna == true){
            reorderRows(table, 1);
        }                  

    }

    function goBack(EoS){
    	
		if(EoS=="O"){		
			window.location.href ='allSolicitar.php?EoS=O';
		}else{
			window.location.href ='allSolicitar.php?EoS=E';
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
