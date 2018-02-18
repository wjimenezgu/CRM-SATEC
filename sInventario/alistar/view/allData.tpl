{$NAV_MENU}
	<div class="container-fluid">
		<audio id="alerta" src="http://{$CRM_SERVER}/{#system_name#}/resources/sounds/glassping.mp3" type="audio/mpeg" loop="loop"></audio>
		<div class="row-fluid sortable">
			<!-- Inicia Lista de Articulos -->
			<div class="box span12">
				<div class="box-header well">
				<!-- fake fields are a workaround for chrome autofill getting the wrong fields -->
				<input style="display:none" type="text" name="fakeusernameremembered"/>
				<input style="display:none" type="password" name="fakepasswordremembered"/>
					<input type="hidden" name="idTienda" id="idTienda" value="{$ID_TIENDA}">
					<h2><i class="icon-th"></i>Lista de  Articulos</h2>
					<input type="text"  id="tienda" style="background-color: AliceBlue; margin-left:70px;" name="tienda"   value="{$NOMBRE_TIENDA}">
					<div class="box-icon">
						<a href="javascript:history.go(0)" title="Refrescar la lista de Artículos" data-rel="tooltip" class="btn btn-settings btn-round"><i class="icon-refresh"></i></a>
					</div>	
				</div>
				<div class="box-content">
					<table class="table  table-bordered bootstrap-datatable" id="tblDetArti">
						<thead>
							<tr>
								<th>Artículo</th>
								<th>Código</th>							
								<th>Ubicación</th>
								<th>Cantidad</th>
								<th style="text-align: center;">Alistar</th>
							</tr>
						</thead>
						<tbody id="tblDetArtiAlistar">

{section name=lP loop=$LISTA_DATA}
	<tr style="{if $LISTA_DATA[lP].NumFactura ne $ID_FACACTUAL} {assign var="ID_FACACTUAL" value=$LISTA_DATA[lP].NumFactura} {cycle  assign='COLOR_LINEA' values="#ffff99,#ffccff"} background-color:{$COLOR_LINEA} {else}background-color:{$COLOR_LINEA} {/if}">                                                                           
		<td>{$LISTA_DATA[lP].DesArticulo}{$LISTA_DATA[lP].NumFactura}{$ID_FACACTUAL}</td>
		<td>{$LISTA_DATA[lP].CodArti}</td>
		<td>{$LISTA_DATA[lP].ubicacion}</td>
		<td style="text-align:right;">{$LISTA_DATA[lP].cantidad}</td>
		<td>
			<input type="checkbox" name="ckArti[]" id="selRow{$smarty.section.lP.index+1}" value='s'>
			<input {if $LISTA_DATA[lP].indObligaSerie == 'S'} type="text" {ELSE} type="hidden" {/if} autocomplete="false" name="numSerie[]" id="selRow{$smarty.section.lP.index+1}" placeholder="Oblgatorio Indicar Serie" value="">
			<input type="hidden"   name="artLis[]" id="valRow{$smarty.section.lP.index+1}" value='{$LISTA_DATA[lP].IdFactura}|{$LISTA_DATA[lP].NumLinea}|{$LISTA_DATA[lP].CodArti}|{$LISTA_DATA[lP].indObligaSerie}|{$LISTA_DATA[lP].DesArticulo}|{$LISTA_DATA[lP].NumFactura}'>
			<a href="#" id="{$smarty.section.lP.index+1}"  onclick="goPage(6, this.id)" {if $LISTA_DATA[lP].indObligaSerie == 'N'} hidden='true'{/if} Title="Imprimir Garantía"><i class="icon icon-color icon-print"></i></a>
		</td>
	</tr> 
{/section}
                        </tbody>
					</table>
				</div> <!-- box-content -->
				

			</div><!--/box span12-->
			<!-- ************************************************************ -->
			<!-- Finaliza Lista de Facturas -->
			<!-- ************************************************************ -->			
		</div><!--/row-fluid sortable -->
	</div> <!-- container-fluid -->
				<div  style="text-align:right;margin-top:-15px;">


					<div class="bodeguerovalido" id="0"></div>
					<input name ="fClaveBodeguero" id="fClaveBodeguero" type="password" autocomplete="false" value="" placeholder="Codigo Bodeguero" >
		 		
					<button type="button" class="btn btn-large" onclick="Sale();">Cerrar</button>
					<button type="submit" onclick="AplicaActualizar();" id="btnImp" class="btn btn-large btn-primary"></i> Actualizar</button>
							
				</div>	
	<div id="message-fields" style='alignment-adjust:  central;'></div>
	

{literal}
<script type="text/javascript">
$(document).ready(function(){  

//	$("#tblDetArtiAlistar").load("buscarDetArtiAlistar.php", { idTienda : $('#idTienda').val() }, function(response,status,xhr){
//	});
//	document.getElementById("alerta").play();  
//	document.getElementById("alerta").stop();
	var tblArti = document.getElementById('tblDetArti');
    var nRows = tblArti.rows.length -1; // -1 para excluir el encabezado
    //alert (nRows);
    if (nRows > 0){
    	// se hace un beep.
    	document.getElementById("alerta").play();
    	
    	myVar = setTimeout(ApagaSonido, 4000);
		//clearTimeout(myVar);
    }

});     

$("#fClaveBodeguero").change(function (e) {
    
	$("#btnImp").focus();
});

function ApagaSonido(){
	document.getElementById("alerta").pause();
}

function AplicaActualizar() {

		
	// primero se valida la clave del bodeguero con una pantalla modal
	    
	    document.getElementById('message-fields').innerHTML = "";
	    if (!validaBodeguero()){
	 //   if ($('#fClaveBodeguero').val() == ""){
		   return;
//			document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Codigo Bodeguero Obligatorio.</strong></div>";
	    }else{
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
				  	alert('Error al Alistar '+err.Message);
					//alert('Error al imprimir '+errorThrown);
					}
        };            
        $.ajax(properties);
 
        history.go(0);
		//$("#tblDetArtiAlistar").load("buscarDetArtiAlistar.php", { idTienda : $('#idTienda').val() }, function(response,status,xhr){
    	//});
	    } // else if bodeguero
             
}

function storeTblValues(){
    var TableData = new Array();
    var vTiraDatos = new Array();
	var tbl = document.getElementById('tblDetArti');
    var numRows = tbl.rows.length -1; // -1 para excluir el encabezado
    var numRow;
    if (numRows > 0){    
    	var i;
    	for (i=1; i <= numRows; i++) {
    		// se obtine el numero de fila para efectos de procesar cada linea
    		numRow = i - 1;

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
        	vDatos 	 = $('input[name^="artLis"]').eq(numRow).val();
        	vNumSerie = $('input[name^="numSerie"]').eq(numRow).val();
       //alert(vNumSerie);


        	var vTiraDatos = vDatos.split("|");
    		// se agrega la entrada a la tabla
    		TableData[numRow]={
    	              "EstaSel" 	:estaSel
    	            , "IdFactura" 	:vTiraDatos[0]
    	            , "NumLinea"	:vTiraDatos[1]
    	            , "CodArti"     :vTiraDatos[2]
    			    , "NumSerie"    :vNumSerie
    			    , "IndObligaSerie"    :vTiraDatos[3]
    	        }   		
    	} //for
    } // if numRows >
    return TableData;
}

function Sale(){
	
	window.location="../../home";
		
}

function goPage(action, id){
	
	var numRow = 0;
	if(action == 6){
		numRow = parseInt(id)-1;
		
    	vNumSerie = $('input[name^="numSerie"]').eq(numRow).val();
    	vDatos 	 = $('input[name^="artLis"]').eq(numRow).val();
    	if (vNumSerie == ""){
    		// numero de serie es obligatorio
    		alert('Número de Serie es obligatorio para imprimir garantía.');
    	}else{
    		// alert('se imprime garantia '+ vDatos);
    		window.open('prnArtiGarantia.php?datosArti='+vDatos+"&numSerie="+vNumSerie,'_blank');
    	}

	}		
};


function validaBodeguero(){   

    var pass = $('#fClaveBodeguero').val();
    pass = pass.trim();
    var esValido = false;
    
    document.getElementById('message-fields').innerHTML = "";
    if (pass == ""){
    	document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Codigo Bodeguero Obligatorio.</strong></div>";
    	$("#fClaveBodeguero").focus();
    	return false;
    }
    
    
    // se valida el codigo de bodeguero 
      	$.ajax({
        type: "POST",
        url: "ValidaBodeguero.php",
        async: false,
        dataType : "text",
        data: "fClave="+pass,
       	success: function(data2,strMsg){
       		var vdata2 = parseInt(data2); 
       		if ( vdata2 == 1) {
       			$(".bodeguerovalido").attr("id", "1");	
       			//alert('true'+data2);
       			esValido = true;

       		}
       		else {
       			//alert('false'+data2);
       			$(".bodeguerovalido").attr("id", "0");
       			esValido = false;

			}
        },
        error: function(jqXHR,textStatus,errorThrown){
            alert('Error al validar Vendedor '+errorThrown);
            return false;
        }
    });
 
//alert ('valido'+$(".vendedorvalido").attr("id"));
    if ($(".bodeguerovalido").attr("id") == "1" ){ 
    //if (vendedorValido=true){
    	return true;
    }else{
       document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Código Bodeguero incorrecto.</strong></div>";       
       $("#fClaveBodeguero").val("");
       $("#fClaveBodeguero").focus(); 
       return false;
    };               
	} // function validaBodeguero




</script>
{/literal}
