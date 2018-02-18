{$NAV_MENU}
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2>Admnistración de {$DESC_MOV}</h2>
						<input type="text" class="pull-right" id="tienda" style="background-color: AliceBlue;" name="tienda"   value="{$NOMBRE_TIENDA}">
					</div>
					<div class="box-content">
						
						<button type="button" class="btn btn-small btn-success" id="addNewEvent" onclick="goPage(1,0,'{$TIPO_MOV}')" style="margin-bottom:12px;"><i class="icon-plus icon-white"></i> Agregar</button>
						<table class=" table table-bordered bootstrap-datatable" id="tblDataE">
						  <thead>
							  <tr>
								  <th>Fecha Ajuste</th>
								  <th>Id</th>
								  <th>NumDocu</th>
								  <th>Tipo</th>
								  <th>Estado</th>
								  <th>Detalle</th>
								  <th>Acción</th>
							  </tr>
						  </thead>	
						   <tbody id="info-productos" class="info-productos">					
								{section name=lP loop=$LISTA_DATA} 								
						<tr style="padding:0px;" id="tr{$LISTA_DATA[lP].idAjuste}">
						    <td style="width:80px;">{$LISTA_DATA[lP].fecMovimiento}</td>
     						<td style="width:50px;">{$LISTA_DATA[lP].idAjuste}</td>
     						<td style="width:50px;">{$LISTA_DATA[lP].numDocu}</td>
     						<td style="width:50px;">{$LISTA_DATA[lP].siglas}</td>
     						<td style="width:50px;">{$LISTA_DATA[lP].estado}</td>
                            <td style="width:600px;" align="left">{$LISTA_DATA[lP].detalle}</td>
									<td class="center">
										<a href="#" id="{$LISTA_DATA[lP].idAjuste}" {IF $LISTA_DATA[lP].estado == 'A'}hidden='true'{/if} onclick="goPage(2, this.id,'{$TIPO_MOV}')"><i class="icon icon-color icon-edit"></i></a>
										<a href="#" id="{$LISTA_DATA[lP].idAjuste}" {IF $LISTA_DATA[lP].estado == 'A'}hidden='true'{/if} onclick="goPage(3, this.id,'{$TIPO_MOV}')"><i class="icon icon-color icon-remove"></i></a>
										<a href="#" id="{$LISTA_DATA[lP].idAjuste}" {IF $LISTA_DATA[lP].estado == 'A'}hidden='true'{/if} onclick="goPage(5, this.id,'{$TIPO_MOV}')" Title="Aprobar Ajuste"><i class="icon icon-color icon-check"></i></a>										
										<a href="#" target="_blank" id="{$LISTA_DATA[lP].idAjuste}" Title="Imprimir Ajuste" {IF $LISTA_DATA[lP].estado != 'A'}hidden='true'{/if} onclick="goPage(6, this.id,'{$TIPO_MOV}')"><i class="icon icon-color icon-print"></i></a>
									</td>
								</tr> 
								{/section}
								</tbody>
					  </table>  
					            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->

<script type="text/javascript">
$(document).ready(function(){    


    $('#tblDataE').dataTable({                        
		"sDom": "<'row-fluid'<'span6'l><'span6'f>r>t<'row-fluid'<'span12'i><'span12 center'p>>",
		"sPaginationType": "bootstrap",
                    'iDisplayLength': 16,
                    "aLengthMenu": [[16, 24, 32, -1], [8, 16, 24, 32, "Todos"]],
                    "aaSorting": [[ 1, "desc" ]],
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

});

	// Octubre 15, 2014 William Jimenez
	// Function goPage
	// Descripcion: permite enviar al usuario a la pantalla para agregar o modificar registro
	// Parametros:
	//			action: 1> Insertar, 2>Modificar, 3>Borrar, 6>Imprimir
	//			id: El id del registro que se desea modificar o borrar, en el caso de insertar este parametro no se utiliza.
	function goPage(action, id,EoS){
	
		
		if(action == 6){
			window.open('prnListData.php?action='+action+"&id="+id+"&EoS="+EoS,'_blank');
		}else{	
			if(EoS=="E" ){		
				window.location.href ='procesaEntradas.php?action='+action+"&id="+id+"&EoS="+EoS;
			}else{
				window.location.href ='procesaSalidas.php?action='+action+"&id="+id+"&EoS="+EoS;
			}
		}	
		
	};	
</script>