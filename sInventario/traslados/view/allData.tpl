{$NAV_MENU}
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2>{$DESC_MOV} Artículos </h2>
						<input type="text" class="pull-right" id="tienda" style="background-color: AliceBlue;" name="tienda"   value="{$NOMBRE_TIENDA}">
					</div>
					<div class="box-content">
						<input type="hidden" name="EoS"       id="EoS"       value="{$TIPO_MOV}">
						<button type="button" class="btn btn-small btn-success" id="addNewData" onclick="goPage(1,0,'{$TIPO_MOV}')" style="margin-bottom:12px;"><i class="icon-plus icon-white"></i> Agregar</button>
						<table class="table table-striped table-bordered bootstrap-datatable" id="tblDataE">
						  <thead>
							  <tr>
								  <th>Fecha</th>
								  <th>Id</th>
								  <th>Tienda</th>
								  <th>Detalle</th>
								  <th>Estado</th>
								  <th>Acción</th>
							  </tr>
						  </thead>						
								{section name=lP loop=$LISTA_DATA} 								
						<tr style="padding:0px;" id="tr{$LISTA_DATA[lP].IdTraslado}">
						    <td style="width:10px;">{$LISTA_DATA[lP].fecMovimiento}</td>
     						<td style="width:10px;">{$LISTA_DATA[lP].IdTraslado}</td>
     						<td style="width:200px;">{$LISTA_DATA[lP].NombreTienda}</td>
                            <td style="width:350px;" align="left">{$LISTA_DATA[lP].Detalle}</td>
                            <td style="width:150px;" align="left">{$LISTA_DATA[lP].DescEstado}</td>
							<td style="width:100px;"class="center">
<!-- 									Boton para Editar 							
										<a href="#" id="{$LISTA_DATA[lP].IdTraslado}" {if $LISTA_DATA[lP].EstadoApagar eq "5O"} hidden="true"{/if} Title="Modificar Solicitud" onclick="goPage(2, this.id,'{$TIPO_MOV}')">
-->										
										<a href="#" id="{$LISTA_DATA[lP].IdTraslado}" {if array_key_exists($LISTA_DATA[lP].EstadoApagar,$APAGA_EDITAR)} hidden="true"{/if} Title="Modificar Solicitud" onclick="goPage(2, this.id,'{$TIPO_MOV}')">																				  
										<i class="icon icon-color icon-edit"></i></a>
										
										<a href="#" id="{$LISTA_DATA[lP].IdTraslado}" {if array_key_exists($LISTA_DATA[lP].EstadoApagar,$APAGA_BORRAR)} hidden="true"{/if} Title="Borrar Solicitud" onclick="goPage(3, this.id,'{$TIPO_MOV}')"><i class="icon icon-color icon-remove"></i></a>
										<a href="#" id="{$LISTA_DATA[lP].IdTraslado}" Title="Ver Solicitud" onclick="goPage(4, this.id,'{$TIPO_MOV}')"><i class="icon icon-color icon-search"></i></a>
										<a href="#" id="{$LISTA_DATA[lP].IdTraslado}" {if array_key_exists($LISTA_DATA[lP].EstadoApagar,$APAGA_APRORECHA)} hidden="true"{/if} Title="Aprobar Solicitud" onclick="goPage(5, this.id,'{$TIPO_MOV}')"><i class="icon icon-color icon-check"></i></a>
										<a href="#" id="{$LISTA_DATA[lP].IdTraslado}" {if array_key_exists($LISTA_DATA[lP].EstadoApagar,$APAGA_APRORECHA)} hidden="true"{/if} Title="Rechazar Solicitud" onclick="goPage(6, this.id,'{$TIPO_MOV}')"><i class="icon icon-color icon-close"></i></a>
										<a href="#" target="_blank" id="{$LISTA_DATA[lP].IdTraslado}" Title="Imprimir Solicitud" onclick="goPage(7, this.id,'{$TIPO_MOV}')"><i class="icon icon-color icon-print"></i></a>
										<a href="#" target="_blank" id="{$LISTA_DATA[lP].IdTraslado}" Title="Imprimir para Recepción" onclick="goPage(8, this.id,'{$TIPO_MOV}')"><i class="icon icon-reverse icon-print"></i></a>
										<a href="#" target="_blank" id="{$LISTA_DATA[lP].IdTraslado}" Title="Imprimir para Alistar" onclick="goPage(9, this.id,'{$TIPO_MOV}')"><i class="icon icon-suitcase"></i></a>
							</td>
						</tr>
								{/section}
					  </table>  
					            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->

<script type="text/javascript">
$(document).ready(function(){
	if ($("#EoS").val() == "E"){
		$("#addNewData").css("display","none");			
	}
	


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
	//			action: 1> Insertar, 2>Modificar, 3>Borrar
	//			id: El id del registro que se desea modificar o borrar, en el caso de insertar este parametro no se utiliza.
	function goPage(action, id,EoS){
	    if (action == 7){
		    //como es imprimir, se abre una nueva ventana para desplegar los datos en formato
		    // mas simple y el usuario luego pueda decidir que hacer.
	    	window.open('prnListData.php?action='+action+"&id="+id+"&EoS="+EoS,'_blank');
	    }else{
	    	if (action == 8){
	    		window.open('prnListRecep.php?action='+action+"&id="+id+"&EoS="+EoS,'_blank');
	    	}else if (action == 9) {
	    		window.open('prnListAlistar.php?action='+action+"&id="+id+"&EoS="+EoS,'_blank');
	        }else{
				if(EoS=="O"){		
					window.location.href ='procesaTraslados.php?action='+action+"&id="+id+"&EoS="+EoS;
				}else{
					window.location.href ='procesaTraslados.php?action='+action+"&id="+id+"&EoS="+EoS;
				}
	    	}
	    }
	};	
</script>