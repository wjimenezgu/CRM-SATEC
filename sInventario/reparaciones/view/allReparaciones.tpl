{$NAV_MENU}
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<input type="hidden" name="id_tienda" id="id_tienda" value="{$ID_TIENDA}">
						<h2>Administración de Reparaciones</h2>
					<!-- <input type="text" class="pull-right" id="tienda" style="background-color: AliceBlue;" name="tienda"   value="{$NOMBRE_TIENDA}">   -->	
						
					</div>
					<div class="box-content">
						<table class="form-horizontal" style="width:100%">
						<tbody>
						<td>
						<button type="button" class="btn btn-small btn-success" id="addReparacion" onclick="goPage(1,0)" style="margin-bottom:12px;"><i class="icon-plus icon-white"></i> Agregar</button>
						</td>
                    		<td align="right">
                    		<div class="control-group" id="boxSelTiendas">
                    		<select  id="selectStore" name="selectStore" disabled>                         		
                            	{section name=lP loop=$LISTA_TIENDAS}                            		
                                	<option value="{$LISTA_TIENDAS[lP].codTienda}" {if $LISTA_TIENDAS[lP].codTienda eq $ID_TIENDA} selected{/if}>{$LISTA_TIENDAS[lP].nombreTienda}</option>                                	
                                {/section}
                        </select>
                        </div>
                    		</td>
                    		</tbody>						
						</table>
						<table class="table table-striped table-bordered bootstrap-datatable" id="tblDataE">
						  <thead>
							  <tr>
								  <th>Fecha Recibida</th>
								  <th>Id</th>
								  <th>Cliente</th>
								  <th>Equipo</th>
								  <th>Daño/Problema</th>
								  <th>Reparacion</th>
								  <th>Estado</th>
								  <th>Acción</th>
							  </tr>
						  </thead>
						  <tbody id="info-repa" >						
						  </tbody>
					  </table>  
					            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->

<script type="text/javascript">
$(document).ready(function(){  


	findRepa();
});

	// Octubre 15, 2014 William Jimenez
	// Function goPage
	// Descripcion: permite enviar al usuario a la pantalla para agregar o modificar registro
	// Parametros:
	//			action: 1> Insertar, 2>Modificar, 3>Borrar, 6>Imprimir
	//			id: El id del registro que se desea modificar o borrar, en el caso de insertar este parametro no se utiliza.
	function goPage(action,id){			
		if(action == 7){
			window.open('prnListData.php?action='+action+"&id="+id,'_blank');
		}else{
			if (action == 6 || action == 8){ // facturar la boleta ya sea el adelanto o la reparacion
			
				if (confirm('Esta seguro que desea facturarlo?')) {
				    // Save it!
					var properties = {
	            			url  : "prnFactuRepa.php",
	                		async: false,
	                		cache: false,
	                		datatype:"text",
	                		data : "action="+action+"&id="+id+"&idTienda="+$('#id_tienda').val(),	
	                		type : "GET",
	                		success: function(data){
	                			if (data.trim()!='OK') {
	                				alert(data);
	                			}else{
	                				
	                				//todo OK se manda a imprimir la factura de la reparacion.
	                				// version anterior para imprimr factura, esta opcion abre una pantalla con los datos de la factura
	                				//window.open('imprimir.php?factura='+$('#idFactura').val(),'_blank');
	                				// nueva version de imprimir esta no abre pantalla alguna, imprime la factura
	                				// directamente en la impresora default.
	                			//	window.location.href ='ImpreFacRepa.php?idDoc='+id+'&action='+action; // factura
	                				window.location.href = 'index.php';                				
	                				//$dummy="";
	                				//window.location.href ='index.php';        
	                			}
	                		}, // success,
	      					error: function(jqXHR,textStatus,errorThrown){
	      						 	var err = eval("(" + jqXHR.responseText + ")");
	      						  	alert('Error al Imprimir Factura Reparacion'+err.Message);
	          						//alert('Error al imprimir '+errorThrown);
	      							}
	            		}; // var properties            
	      				$.ajax(properties);
				} 
				
				
			                
								
			//	window.open('prnFactuRepa.php?action='+action+"&id="+id);				
			}else{
				window.location.href ='Reparaciones.php?action='+action+"&id="+id;
			}
		}	
		
	};
	
	$("#selectFiltroRep").on("change", function(e){
	    e.preventDefault();
	    var table = document.getElementById("info-repa");
        while(table.rows.length > 1) {
        	  table.deleteRow(1);
        	}
        findRepa();
        /*
	    criterio    = $("#selectFiltroRep").val(); // posibles valores A: activas, C: cerradas	  	
	    idTienda    = $("#selectStore").val();
	    
	    $("#info-repa").load("buscaReparaciones.php", { criterio : criterio, idTienda : idTienda }, function(response,status,xhr){
	    }); 
	   */
	});
	
	
	function findRepa(){
	
	//	$('#tblDataE').fnDestroy();
	//	tableRep.fnDestroy();
	    criterio    = $("#selectFiltroRep").val(); // posibles valores A: activas, H: historicas
	    idTienda    = $("#selectStore").val(); 
	    
	    $("#info-repa").load("buscaReparaciones.php", { criterio : criterio , idTienda : idTienda }, function(response,status,xhr){

	    });    
	    
	    
	}
	
	$("#selectStore").on("change", function(e){
	    e.preventDefault();
	  
	    criterio    = $("#selectFiltroRep").val(); // posibles valores A: activas, C: cerradas	  	
	    idTienda    = $("#selectStore").val(); 
	    $("#info-repa").load("buscaReparaciones.php", { criterio : criterio, idTienda : idTienda }, function(response,status,xhr){
	    }); 
	});
	
</script>