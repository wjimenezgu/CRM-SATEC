{$NAV_MENU}
        <form class="form-horizontal" id='FormTomaFisica'  action="processTomaFisica.php"   method="POST">

            <input type="hidden" name="id_tienda" id="id_tienda" value="{$ID_TIENDA}">            
            <input type="hidden" name="usuario" id="usuario" value="{$USUARIO}">
            <input type="hidden" id="ArticuloExiste" value="false">
            <input type="hidden" id="codigoArticulo" value="">
            <input type="hidden" id="codigoArticuloProv" value="">
            <input type="hidden" id="codigoArticuloBarras" value="">
            <input type="hidden" id="descipcionArticulo" value="">
            <input type="hidden" name="fecToma" id="fecToma" value="">
        	<div class="row-fluid" >		
            	<div class="box span12">
                	<div class="box-header well" data-original-title>
                    	<h2>Toma Física Inventario</h2>
                    	    <button type="button" id='btnIniciaToma'  name="btnIniciaToma" onclick="IniciaToma();" class="btn btn-small btn-primary" style="margin-left:20px;">INICIAR TOMA</button>
                    	    <a style="font-size: 12px;margin-left:10px;">Fecha y Hora Toma:</a><input  type="text" disabled id="fecIniciaToma" name="fecIniciaToma" style="width: 150px;" value=" " ></input>                    	    
                    	    <button type="button" class="btn btn-small btn-info" onclick='clearAll();'  style='margin-left: 15px;'>LIMPIAR</button>
                        	<select class="pull-right" id="selectStore" name="selectStore" disabled> 
                        		<option value="0"></option>
                            	{section name=lP loop=$LISTA_TIENDAS}
                            		
                                	<option value="{$LISTA_TIENDAS[lP].codTienda}" {if $LISTA_TIENDAS[lP].codTienda eq $ID_TIENDA} selected{/if}>{$LISTA_TIENDAS[lP].nombreTienda}</option>                                	
                                {/section}
                            </select>
                    </div>
                    <div id="message-fields" style='alignment-adjust:  central;'></div>
                     
                        <legend style="height:5px"></legend>
                        <div class="box" style="margin-left: 10px;margin-right: 10px;margin-top: -20px;" >
                        	<div class="box-header well">
                            	<h3>Buscar Articulos</h3>
                            </div>
								<div class="control-group" style="margin-left: -150px;" id="boxCriterios">
									<div class="controls">
												
                						<form style="margin:0px; padding:0px; float:right; margin-top:-5px;">
                							<input type="text"  accesskey="c" class="txt_search" id="texto-codigo"  value="" style="margin-top:4px; margin-left:20px; font-size:1vw; width:100px;" placeholder="Código Artículo">
                							<input type="text"  accesskey="b" class="txt_search" id="texto-barras"  value="" style="margin-top:4px;  font-size:1vw; width:250px;" placeholder="Codigo de Barras">                							
                							<input type="text"  accesskey="c" class="txt_search" id="texto-codigoprov"  value="" style="margin-top:4px; margin-left:20px; font-size:1vw; width:155px;" placeholder="Código Proveedor">
                							<input type="text"  id="descArticulo"   value="" style="margin-top:4px; margin-left:20px; font-size:1vw; width:475px;" placeholder="Descripción">
                							<input type="number"  id="cantidad"  value="" style="margin-top:4px; margin-left:20px; font-size:1vw; width:75px;" placeholder="Cantidad">
                							<button type="button" title="Agregar" class="btn btn-small btn-success" id="btnHabilitaP2" onclick="AgregaLinea();"><i class="icon-plus icon-white"></i> </button>
                						</form> 					
									</div>  <!-- class controls -->             
								</div>	<!-- boxCriterios -->	                                                    
                        </div> <!-- class="box"  -->
                        <div class="box-content">
                        	<table class="table table-striped table-bordered bootstrap-datatable" id="tableItem">
                            	<thead>
                                	<tr>
                                    	<th style='width:10px;'>#</th>
                                    	<th style='width:300px;'>Artículo</th>
                                        <th style='width:100px;'>Código</th>
                                        <th style='width:100px;'>Cantidad</th>
                                        <th style="width: 5px;">Acción</th>
                                    </tr>
                                </thead>
                                <tbody id="tbod" name="tbod" onload="LimpiaCampos()">
                                	<div id ="divtbod" class="grid" style="width: fit-content; border: 1px;"></div>
                                </tbody>
                            </table>  

                        </div>
                </div><!--class="box span12"-->
            </div><!--class="row-fluid" -->
				<div  style="text-align:right;margin-top:-15px;">

					<div class="bodeguerovalido" id="1"></div>
					<input name ="fUsuario" id="fUsuario" type="text" value="{$USUARIO}"  disabled>
		 		
					<button type="button" class="btn btn-large" onclick="Sale();">Cerrar</button>
					<button type="submit" onclick="validateForm();" disabled id="btnActualizar" name="action" class="btn btn-large btn-primary"> Actualizar</button>	
				</div>	            
   		</form>            

<script type="text/javascript">


$(document).ready(function(){
    
	// Si presiona enter en el campo texto a buscar que se ejecute el evento click() del boton buscar
    $('#texto-barras').keypress(function(e){
        if(e.keyCode==13){
        	e.preventDefault();
        	BuscaArticulo('barras',$('#texto-barras').val());
        }
      });
	
    $('#texto-codigo').keypress(function(e){
        if(e.keyCode==13){
        	e.preventDefault();
        	BuscaArticulo('codigo',$('#texto-codigo').val());
        }
      });	
    
    $('#texto-codigoprov').keypress(function(e){
        if(e.keyCode==13){
        	e.preventDefault();
        	BuscaArticulo('codigoprov',$('#texto-codigoprov').val());
        }
      });
    
	$("#cantidad").on("change", function (e){
        e.preventDefault();
        AgregaLinea();
    });
	     
	$("#usuario").val();	
    $("#btnIniciaToma").focus(); 	

                   
});

	function IniciaToma(){
		var d = new Date();
		$("#fecIniciaToma").val(d.getDate()+"/"+(d.getMonth()+1)+"/"+d.getFullYear()+"-"+d.getHours()+":"+d.getMinutes()+":"+d.getSeconds());
		$("#fecToma").val($("#fecIniciaToma").val());
		$("#btnActualizar").prop("disabled",false);
		$("#texto-codigo").focus();		
	}
	
	function BuscaArticulo(criterio,valor){
		
		document.getElementById('message-fields').innerHTML = "";
		
		validaArticulo(criterio,valor);
		
		switch (criterio){
			case 'barras':
				$('#texto-codigoprov').val($('#codigoArticuloProv').val());
				$('#texto-codigo').val($('#codigoArticulo').val());				
				$('#descArticulo').val($('#descipcionArticulo').val());
				if ($('#ArticuloExiste').val() == 'true'){
					$("#cantidad").focus();	
				}else{
					document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Artículo no existe.</strong></div>";
					$('#texto-barras').focus();
				}
				break;
			case 'codigo':
				$('#texto-codigoprov').val($('#codigoArticuloProv').val());
				$('#texto-barras').val($('#codigoArticuloBarras').val());
				$('#descArticulo').val($('#descipcionArticulo').val());
				if ($('#ArticuloExiste').val() == 'true'){
					$("#cantidad").focus();	
				}else{
					document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Artículo no existe.</strong></div>";
					$('#texto-codigo').focus();
				}				
				break;
			case 'codigoprov':
				$('#texto-barras').val($('#codigoArticuloBarras').val());
				$('#texto-codigo').val($('#codigoArticulo').val());
				$('#descArticulo').val($('#descipcionArticulo').val());
				if ($('#ArticuloExiste').val() == 'true'){
					$("#cantidad").focus();	
				}else{
					document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Artículo no existe.</strong></div>";
					$('#texto-codigoprov').focus();
				}				
				break;
		}	
		
	}
	
	
	function validaArticulo(criterio,valor){
	
		$('#ArticuloExiste').val('false');
		
		$.ajax({
            type: "GET",
            url: "processGetArticulo.php",             
            dataType : "text",
            async: false,
    		cache: false,
            data: "criterio="+criterio+"&valor="+valor,
           	success: function(data,strMsg){
           	//alert(data);
           		$dataStr = (data.trim().split("|"));
    		   // alert($dataStr[5]);
    			if ($dataStr[0].trim()=='OK') {
    			
    				// todo OK, se verifica si el articulo existe
    				$('#codigoArticulo').val($dataStr[1].trim());
    				$('#codigoArticuloProv').val($dataStr[2].trim());
    				$('#codigoArticuloBarras').val($dataStr[3].trim());
    				$('#descipcionArticulo').val($dataStr[4].trim());
    				$('#ArticuloExiste').val($dataStr[5].trim());     				
    			}else{
    				alert(data);
					document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Error Inesperado.</strong></div>";
    			}

            },
            error: function(jqXHR,textStatus,errorThrown){
                alert('Error Fatal al Validar Articulo '+errorThrown);
            }
        });
		
	}
		
	function AgregaLinea(){
		var $hayError = false;
		document.getElementById('message-fields').innerHTML = "";
		if ($("#cantidad").val() == ''){
			$hayError = true;
			document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Cantidad no puede ser blanco.</strong></div>";
			$("#cantidad").focus();
			return;
		}	
		if ($("#texto-codigo").val() == ''){
			$hayError = true;
			document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Código no puede ser blanco.</strong></div>";
			$("#texto-codigo").focus();
			return;
		}
		
		// se obtiene un puntero a la tabla de articulos
    	var table = document.getElementById("tableItem");
    
    	// se obtiene la cantidad de filas de tabla, el numero incluye la fila del encabezado de las columnas
    	var rowCount = table.rows.length;
    	
    	// se agrega una fila a la tabla para llenarla con los datos del articulo
    	// row apunta a la fila    	
    	var row = table.insertRow(rowCount);

    	//******************************************************************
    	//consecutivo de linea va en la celda 0
    	var textNode = document.createTextNode(rowCount);
    	var celda = row.insertCell(0);
    	celda.appendChild(textNode);
    	
 

		//*****************************************************************
    	//descripcion del articulo va en la celda 1
    	
    	var labelArt = document.createElement("label");
    	// se obtiene la descripcion del arreglo.
    	labelArt.textContent = $('#descipcionArticulo').val();
    	labelArt.setAttribute("name","item[]");    	
    	// labelArt.setAttribute('style', 'width: 300px;');
    	labelArt.style.width = '750px';
    	var celda2 = row.insertCell(1);
    	celda2.appendChild(labelArt);
    	
    	
    	var contentArt = document.createElement("input");
    	contentArt.value = $('#descipcionArticulo').val();
    	contentArt.setAttribute("name","item[]");
    	// contentArt.setAttribute('style', 'width: 300px;');
    	// contentArt.style.width = '500px';
    	contentArt.type = "hidden";    	
    	celda2.appendChild(contentArt);
    	
    	
		//*****************************************************************
    	//codigo del articulo va en la celda 2

    	var labelArt2 = document.createElement("label");
        labelArt2.textContent = $("#texto-codigo").val();
        labelArt2.setAttribute("name","codArti[]");
        labelArt2.style.width = '200px';
        var cell2= row.insertCell(2);
        cell2.appendChild(labelArt2);   
        
    	var contentArt2 = document.createElement("input");
    	contentArt2.value = $("#texto-codigo").val();
    	contentArt2.setAttribute("name","codArti[]");
    	contentArt2.type = "hidden";
    	cell2.appendChild(contentArt2);

        
        
      //*****************************************************************
    	// cantidad que inicia con 1 y va en la celda 4
    	
    	var txtCantidad = document.createElement("label");
    	txtCantidad.textContent = $("#cantidad").val();
    	txtCantidad.setAttribute("name","cant[]");
    	txtCantidad.style.width = '200px';
        var cell3= row.insertCell(3);
        cell3.appendChild(txtCantidad);   
        
    	var contentCant = document.createElement("input");
    	contentCant.value = $("#cantidad").val();
    	contentCant.setAttribute("name","cant[]");
    	contentCant.type = "hidden";
    	cell3.appendChild(contentCant);
    	    	
    	//*****************************************************************
    	//boton borrar linea
    	//
    
    	var cell4 = row.insertCell(4);

    	var ita=document.createElement('a');
    	ita.setAttribute('href', '#');
    	ita.setAttribute('onClick', 'deleteCurrentRow(this)');
    	var iti=document.createElement('i');
    	iti.setAttribute('class', 'icon icon-color icon-remove');
    	iti.setAttribute('style', 'text-align:center');
    	ita.appendChild(iti);
    
    	var cell4 = row.insertCell(4);
    	cell4.appendChild(ita);
		
    	// se agrega la linea
    	row.myRow = new myRowObject(textNode, labelArt, labelArt2, txtCantidad);		
				
		$("#cantidad").val('');
		$('#descArticulo').val('');
		$("#texto-barras").val('');
		$("#texto-codigo").val('');
		$("#texto-codigoprov").val('');
		$("#texto-codigo").focus();
		
	}
	
    
	//Setea un objeto para almacenar las variables
    function myRowObject(one, two, three, four, five, six, seven,eight){
		this.one = one; 		// consecutivo de las lineas
		this.two = two; 		// descripcion del articulo
		this.three = three; 	// codigo del articulo
		this.four = four; 		// cantidad


     } 

	//Hace los preparativos para eliminar una fila, además llama a la funcion qu elimina la fila y recalcula
	//el subtotal, impuesto, y total
	function deleteCurrentRow(obj){
	
		var delRow = obj.parentNode.parentNode;
		var tbl = delRow.parentNode.parentNode;
		// obtiene la fila seleccionada
		var rIndex = delRow.sectionRowIndex;
                
		// borra la fila
		var rowArray = new Array(delRow);
		deleteRows(rowArray);
		
		//reordena la tabla para corregir el consecutivo
		reorderRows(tbl, rIndex);
		// se recalculan los totales.
        math();
	}

	//Reordena la tabla despues que una fila fue eliminada
	function reorderRows(tbl, startingIndex){

		if (tbl.rows.length==1){
			// si es igual a 1 la tabla esta vacia, solo tiene la linea del encabezado
			$("#facturar").prop("disabled",true);
			$("#proforma").prop("disabled",true);
			$("#apartado").prop("disabled",true);
		
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


	//Limpia toda la pantalla para realizar una factura nueva
    function clearAll(){
        $('#FormTomaFisica')[0].reset();
        document.getElementById('message-fields').innerHTML ="";
        var table = document.getElementById("tableItem");
        while(table.rows.length > 1) {
        	  table.deleteRow(1);
        	}                
        $("#btnActualizar").prop("disabled",true);
		$("#cantidad").val('');
		$('#descArticulo').val('');
		$("#texto-barras").val('');
		$("#texto-codigo").val('');
		$("#texto-codigoprov").val('');
		$("#fecIniciaToma").val('');

        $("#btnIniciaToma").focus();
    }
	
    function AplicaActualizar() {
    	    	
    		var TableData;
    		TableData = storeTblValues()
    		TableData = $.toJSON(TableData);

    		var properties = {
                url: "processArtiAlistar.php",
                async: false,
                cache: false,
                data: "pTableData=" + TableData + '&pidTienda='+$('#idTienda').val(),
                type: "POST",
                success: function(msg){                
    					alert(msg);
                },
                error: function(jqXHR,textStatus,errorThrown){
    				 	var err = eval("(" + jqXHR.responseText + ")");
    				  	alert('Error al Actualizar '+err.Message);
    					//alert('Error al imprimir '+errorThrown);
    					}
            };            
            $.ajax(properties);     
            history.go(0);
               
    }
    	    
    function validateForm() {	
		document.getElementById('message-fields').innerHTML = "";	    
		document.forms["FormTomaFisica"].submit();
		alert('Datos Actualizados.');
	        	
    }

	function Sale(){
		
		window.location="../../home";
			
	}
  
	</script>