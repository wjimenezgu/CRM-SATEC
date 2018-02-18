{section name=lP loop=$LISTA_ITEMS}
	<tr style="padding:0px;" id="tr{$LISTA_ITEMS[lP].idPedido}"> 
		<td style="width:8%;">{$LISTA_ITEMS[lP].numOrdenCompra}</td> 
		<td style="width:5%;">{$LISTA_ITEMS[lP].idLinea}</td>
		<td style="width:5%;">{$LISTA_ITEMS[lP].codArti}</td>
		<td style="width:10%;">{$LISTA_ITEMS[lP].codArtiProveedor}</td>
		<td style="width:45%;">{$LISTA_ITEMS[lP].descArti}</td>
		<td style="width:7%;">{$LISTA_ITEMS[lP].cantidad}</td>
		<td style="width:20%;">{$LISTA_ITEMS[lP].Compromiso}</td>
		<td style="width:10%;">{$LISTA_ITEMS[lP].FecEstArribo}</td>
		<td>
												{if $LISTA_ITEMS[lP].NDias lt 5 and $LISTA_ITEMS[lP].estadoPedido eq 'A'} <span class="label label-success">Verde</span>{/if}
												{if $LISTA_ITEMS[lP].NDias gt 4 and $LISTA_ITEMS[lP].NDias lt 8 and $LISTA_ITEMS[lP].estadoPedido eq 'A'} <span class="label" style="background-color: #FFD700;">Amarillo</span>{/if}
												{if $LISTA_ITEMS[lP].NDias gt 7 and $LISTA_ITEMS[lP].estadoPedido eq 'A'} <span class="label label-important">Rojo</span>{/if}
											    {if $LISTA_ITEMS[lP].estadoPedido eq 'C'} <span class="label" style="background-color: #0000FF;">Cerrado</span>{/if}
											    {if $LISTA_ITEMS[lP].estadoPedido eq 'N'} <span class="label" style="background-color: #FF9933;">Cancelado</span>{/if}																																													
		
		</td>
		<!-- 
        <td>
        	<a href="#" class="btn-setting" title="Ver Eventos" data-rel="tooltip" onclick="loadInfoEventos('{$LISTA_ITEMS[lP].idPedido}','{$LISTA_ITEMS[lP].numOrdenCompra}');"><i class="icon icon-blue icon-book"></i></a> 			
		</td>	
		 -->		
	</tr> 
{/section}
<script type="text/javascript">
$(document).ready(function(){
    
	$('#tblItemsList').dataTable({
		"sDom": "<'row-fluid'<'span6'l><'span6'f>r>t<'row-fluid'<'span12'i><'span12 center'p>>",
		
		"sPaginationType": "bootstrap",
        'iDisplayLength': 24,
        "aLengthMenu": [[24, 32, -1], [24, 32, "Todos"]],
        "aaSorting": [[ 0, "asc" ]],
        "bDestroy": true,
        "bRetrieve": true,

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
</script>
