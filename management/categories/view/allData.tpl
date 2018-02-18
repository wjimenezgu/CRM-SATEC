{$NAV_MENU}
	<div class="row-fluid sortable">		
		<div class="box span12">
			<div class="box-header well" data-original-title>
				<h2>Administración de Categorias</h2>
			</div>
			<div class="box-content">
			 <!--
				<button type="button" class="btn btn-small btn-success" id="addNewData" title="Agregar Nueva Asignatura" data-rel="tooltip" onclick="goPage(1,0)" style="margin-bottom:12px;"><i class="icon-plus icon-white"></i> Agregar</button>
			-->
		<!-- 	<button type="button" class="btn btn-small btn-info" id="printData"  title="Imprimir Datos" data-rel="tooltip" onclick="goPage(1,0)" style="margin-bottom:12px;"><i class="icon-print icon-white"></i> Imprimirr</button>   -->
		  <!--
				<a class="btn btn-small btn-info" href="prnListData.php" target="__blank" title="Imprimir Datos" data-rel="tooltip" style="margin-bottom:12px;"><i class="icon-print icon-white"></i> Imprimir</a>
		-->
				<table class="table table-striped table-bordered bootstrap-datatable" id="tblData">
					<thead>
						<tr>
							<th>Descripción</th>
							<th>Nivel</th>
							<th>Acción</th>
						</tr>
					</thead>						
					{section name=lP loop=$LISTA_DATA} 								
						<tr style="padding:0px;" id="tr{$LISTA_DATA[lP].id}">
                            <td style="width:685px;font-family:monospace;" align="left">{$LISTA_DATA[lP].descripcion}</td>
                            <td style="font-family:monospace;" align="left">{$LISTA_DATA[lP].nivelStr}</td>
							<td class="center">
							    <a class="btn btn-success" href="#" id="{$LISTA_DATA[lP].id}|{$LISTA_DATA[lP].nivel}|{$LISTA_DATA[lP].nivelStr}|{$LISTA_DATA[lP].sigteIdHijo}|{$LISTA_DATA[lP].descripcion}" title="Agrega SubCategoría" data-rel="tooltip" onclick="goPage(1, this.id)"><i class="icon-plus icon-white"></i> SubCategoria</a>
								<a class="btn btn-primary" href="#" id="{$LISTA_DATA[lP].id}" title="Modificar Datos de Categoría" data-rel="tooltip" onclick="goPage(2, this.id)"><i class="icon-edit icon-white"></i>  Modificar</a>
							<!--
								<a class="btn btn-danger" href="#" id="{$LISTA_DATA[lP].id}" title="Eliminar Categoría" data-rel="tooltip" onclick="goPage(3, this.id)"><i class="icon-trash icon-white"></i> Eliminar</a>
							
								<a class="btn btn-warning" href="#" id="{$LISTA_DATA[lP].id}" title="Ver Categoría" data-rel="tooltip" onclick="goPage(4, this.id)"><i class="icon-zoom-in icon-white"></i> Visualizar</a>
							-->
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