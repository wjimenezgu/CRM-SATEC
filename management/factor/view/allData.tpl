{$NAV_MENU}
	<div class="row-fluid sortable">		
		<div class="box span12">
			<div class="box-header well" data-original-title>
				<h2>Administración de Factores</h2>
			</div>
			<div class="box-content">
				<button type="button" class="btn btn-small btn-success" id="addNewData" title="Agregar Nuevo Factor" data-rel="tooltip" onclick="goPage(1,0)" style="margin-bottom:12px;"><i class="icon-plus icon-white"></i> Agregar</button>
		<!-- 	<button type="button" class="btn btn-small btn-info" id="printData"  title="Imprimir Datos" data-rel="tooltip" onclick="goPage(1,0)" style="margin-bottom:12px;"><i class="icon-print icon-white"></i> Imprimirr</button>   
				<a class="btn btn-small btn-info" href="prnListData.php" target="__blank" title="Imprimir Datos" data-rel="tooltip" style="margin-bottom:12px;"><i class="icon-print icon-white"></i> Imprimir</a>    -->
				<table class="table table-striped table-bordered bootstrap-datatable" id="tblData">
					<thead>
						<tr>
							<th>Id</th>
							<th>Descripción</th>
							<th>Acción</th>
						</tr>
					</thead>						
					{section name=lP loop=$LISTA_DATA} 								
						<tr style="padding:0px;" id="tr{$LISTA_DATA[lP].idFactor}">
     						<td style="width:40px;">{$LISTA_DATA[lP].idFactor}</td>  
                            <td style="width:385px;" align="left">{$LISTA_DATA[lP].descripcion|lower|capitalize}</td>
							<td class="center">
								<a class="btn btn-primary" href="#" id="{$LISTA_DATA[lP].idFactor}" title="Modificar Datos de Factor" data-rel="tooltip" onclick="goPage(2, this.id)"><i class="icon-edit icon-white"></i>  Modificar</a>
								<a class="btn btn-danger" href="" id="{$LISTA_DATA[lP].idFactor}" title="Eliminar Factor" data-rel="tooltip" onclick="goPage(3, this.id)"><i class="icon-trash icon-white"></i> Eliminar</a>
								<!--  
								<a class="btn btn-warning" href="#" id="{$LISTA_DATA[lP].idFactor}" title="Ver Factor" data-rel="tooltip" onclick="goPage(4, this.id)"><i class="icon-zoom-in icon-white"></i> Visualizar</a>
								 -->
								<a class="btn btn-warning" href="#" id="{$LISTA_DATA[lP].idFactor}" title="Detalles" data-rel="tooltip" onclick="goPage(5, this.id)"><i class="icon-zoom-in icon-white"></i> Detalles</a>
							</td>
						</tr> 
					{/section}
				</table>  
					            
			</div>
		</div><!--/span-->			
	</div><!--/row-->
<!-- 
 Codigo de referencia para usarla cuando se quiere poner un mensaje de que no hay registros
 {if (empty($LISTA_FACTPROVEEDOR))}
	<tr><td style="text-align:center;" colspan="7">No hay factuas que cargar</td></tr>
 {/if}
-->

<script type="text/javascript">
$(document).ready(function(){    
    $('#tblData').dataTable({                        
		"sDom": "<'row-fluid'<'span6'l><'span6'f>r>t<'row-fluid'<'span12'i><'span12 center'p>>",
		"bSort":true,
		"aoColumnDefs": [
		                 { "bSortable": true, "aTargets": [ 0 ] },
		                 { "bSortable": true, "aTargets": [ 1 ] }		                 
		              ], 
		"sPaginationType": "bootstrap",
                    'iDisplayLength': 16,
                    "aLengthMenu": [[16, 24, 32, -1], [16, 24, 32, "Todos"]],
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
                        "sLoadingRecords": "Cargando...",
                        "oPaginate": {
                            "sFirst":      "Primero",
                            "sLast":       "Ultimo",
                            "sNext":       "Siguiente",
                            "sPrevious":   "Anterior"
                        }
		}
	});            

});

	// Octubre 15, 2014 William Jimenez
	// Function goPage
	// Descripcion: permite enviar al usuario a la pantalla para agregar o modificar registro
	// Parametros:
	//			action: 1> Insertar, 2>Modificar, 3>Borrar
	//			id: El id del registro que se desea modificar o borrar, en el caso de insertar este parametro no se utiliza.
	function goPage(action, id){
		
		window.location.href ='Data.php?action='+action+"&id="+id;	
	}	
</script>