{$NAV_MENU}
<section id="main" >
	<div class="box-content">
	
		<form class="form-horizontal">

			<div class="control-group" id="boxSelTiendas">				
				<label class="control-label" for="selectStore">Seleccionar Tienda</label>	
				<div class="controls">   				                	                
                	<select  id="selectStore" name="selectStore">                         		
	                	{section name=lP loop=$LISTA_TIENDAS}                            		
	                    	<option value="{$LISTA_TIENDAS[lP].codTienda}" {if $LISTA_TIENDAS[lP].codTienda eq $ID_TIENDA} selected{/if}>{$LISTA_TIENDAS[lP].nombreTienda}</option>                                	
	                    {/section}
                	</select>
                </div>
            </div>		
    		<div class="control-group " id="boxSelectCriterio">
        		<label class="control-label"  for="selectCriterio">Criterio de Búsqueda</label>
            	<div class="controls ">                                             
            		<select id="selectCriterio"  name="selectCriterio">
                		<option  value="codigo">Codigo</option>                                         
                    	<option  value="nombre">Descripcion</option>
                    	<option  value="externo">Codigo Articulo Proveedor</option>
                	</select>
                </div>
         	</div>
            <div class="control-group form-inline" id="boxtexto-buscar">
            	<label class="control-label" for="texto-buscar">Indicar Valor Criterio </label>	
            	<div class="controls form-inline">   
					<input type="text" class="txt_search " id="texto-buscar" name="texto-buscar" value="" placeholder="En blanco, todos">
				</div>
			</div>
            <div class="control-group" id="boxdateCorte">	
            	<label class="control-label" for="dateCorte">Fecha Corte</label>                                           
                <div class="controls" id="input-dateCorte">
                	<input type="text" class="datepicker" id="dateCorte" name="dateCorte" placeholder="Indicar Fecha" value="{$CURRENT_DATE}"> 
                </div>                       
            </div>                        
			<form>
				<div class="form-actions">
					<input type="button" id="btn_buscarProducto" onclick="findProducto()" value="Buscar" class="btn btn-primary">
				</div>
			</form>		
		</form>
    </div>

<!--    	             	                                
	<div id="imprimir" style="width:250px; margin: 15px 0;display:none;">
		<a href="javascript:;" onclick="printReport()" >Imprimir</a> | <a href="javascript:;" onclick="exportExcel()">Exportar Excel</a> 
	</div>
	<div class="row-fluid ">		
		<div class="box span12">
        	<div class="box-header well" data-original-title>
	            <h2>Consultas Existencias x Articulo</h2>
    		</div>
    		<br>       
        	<div class="box-content">        
            	<table class="table table-striped table-bordered bootstrap-datatable" id="tblItemsList">
                	<thead>
                   	 <tr>
                   	     <th>Codigo</th>                        
                     	 <th>Código Provee.</th>
                   	     <th>Descripción</th>
                   	     <th>Existencia</th>                        
                   	 </tr>
                	</thead>
					<tbody id="info-items" >
                                            
                	</tbody>
            	</table>
         	</div>
    	</div>
	</div>
 --> 
</section>
	
	
{literal}
<script type="text/javascript">

$(document).ready(function(){

	// Si presiona enter en el campo texto a buscar que se ejecute el evento click() del boton buscar
    $('#texto-buscar').keypress(function(e){
        if(e.keyCode==13){
        	e.preventDefault();
        	$('#btn_buscarProducto').click();
        	$("#btn_buscarProducto").prop("disabled",true);
        }
      });

	// si cambia el criterio de busqueda se limpia la tabla y el "focus" se pone en el texto a buscar
	// eso lo hace la funcion cleanTxtBuscar();
    $("#selectCriterio").on("change", function(e){
        e.preventDefault();
        cleanTxtBuscar();
        $("#btn_buscarProducto").prop("disabled",false);
        $("#texto-buscar").focus();
    });
    
    $("#selectStore").on("change", function(e){
        e.preventDefault();
        cleanTxtBuscar();
        $("#btn_buscarProducto").prop("disabled",false);
        $("#texto-buscar").focus();
    }); 
    
    $("#texto-buscar").on("change", function(e){
        e.preventDefault();
        $("#info-items").html("");
        $("#btn_buscarProducto").prop("disabled",false);        
    }); 
	
	$('.datepicker').datepicker({
        language: "es",
        format:"dd/mm/yyyy",
        todayHighlight: true,
        autoclose: true
      //  ,           
      //  startDate: new Date(),
       , defaultDate : new Date()
     });


});

function cleanTxtBuscar(){

//	$("#info-items").html("");
    $("#texto-buscar").val(""); 
    $("#texto-buscar").focus();
    
}

function findProducto(){
	
	$("#btn_buscarProducto").prop("disabled",true);
	$('#imprimir').css('display', 'block'); 
    criterio    = $("#selectCriterio").val(); 
    txtBusqueda = $("#texto-buscar").val();
    tienda      = $("#selectStore").val(); 
    fecha 		= $("#dateCorte").val();

    /*
    $("#info-items").load("buscarExistencias.php", { criterio : criterio, txtBusqueda : txtBusqueda , tienda : tienda, fecha:fecha}, function(response,status,xhr){
    }); 
    */
    
    window.open('buscarExistencias.php?criterio='+criterio+"&txtBusqueda="+txtBusqueda+"&tienda="+tienda+"&fecha="+fecha,'_blank');
    
    $("#btn_buscarProducto").prop("disabled",false);
}


function printReport(){
	$('#imprimir').css('display', 'none'); 
	if (window.print) {
		window.print();
	}else{
		alert("Lo siento, pero a su navegador no se le puede ordenar imprimir" + " desde la web. Actualise o hagalo desde los menús");
	}
	
	setTimeout("$('#imprimir').css('display', 'block')", 800);
}


</script>
{/literal}
