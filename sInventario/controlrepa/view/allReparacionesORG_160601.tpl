{$NAV_MENU}
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2>Administración de Reparaciones</h2>
						<input type="text" class="pull-right" id="tienda" style="background-color: AliceBlue;" name="tienda"   value="{$NOMBRE_TIENDA}">
					</div>
					<div class="box-content">
						<table class="form-horizontal">
						<tbody>
						<td>
						<button type="button" class="btn btn-small btn-success" id="addReparacion" onclick="goPage(1,0)" style="margin-bottom:12px;"><i class="icon-plus icon-white"></i> Agregar</button>
						</td>
						<td style="width:500px;">
						<div class="control-group" id="boxFiltroRep">
								<label class="control-label" for="selectFiltroRep">Desplegar solo</label>
								<div class="controls">
									<select id="selectFiltroRep" name ="selectFiltroRep" style="width: 175px;">
                            			<option value="A" selected>Activas</option>
                            			<option value="F">Historicas</option>
                        			</select>
                        		</div>
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
								  <th>Antigüedad</th>
								  <th>Días</th>
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
			if (action == 6 || action == 8){ // facturar la boleta
				window.open('prnFactuRepa.php?action='+action+"&id="+id);				
			}else{
				window.location.href ='Reparaciones.php?action='+action+"&id="+id;
			}
		}	
		
	};
	
	$("#selectFiltroRep").on("change", function(e){
	    e.preventDefault();
	  
	    criterio    = $("#selectFiltroRep").val(); // posibles valores A: activas, C: cerradas	  	
	    
	    $("#info-repa").load("buscaReparaciones.php", { criterio : criterio }, function(response,status,xhr){
	    }); 
	});
	
	
	function findRepa(){
		 
	    criterio    = $("#selectFiltroRep").val(); // posibles valores A: activas, H: historicas
	  
	    $("#info-repa").load("buscaReparaciones.php", { criterio : criterio }, function(response,status,xhr){

	    });    
	    
	    
	}
	
</script>