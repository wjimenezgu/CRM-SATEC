 {if (empty($LISTA_COMPRASNAC))}
	<tr><td style="text-align:center;" colspan="9">No hay pedidos para mostrar</td></tr>
 {/if}
						  {section loop=$LISTA_COMPRASNAC name=p}
                                        <tr id="register{$LISTA_COMPRASNAC[p].idPedido}">
                                            <td>{$LISTA_COMPRASNAC[p].idPedido}</td>
                                            <td>{$LISTA_COMPRASNAC[p].numOrdenCompra}</td>
                                            <td>{$LISTA_COMPRASNAC[p].nombreProveedor}</td> 
                                            <td>{$LISTA_COMPRASNAC[p].fecCreacion}</td>                                            
                                            <td>
                                                <a href="#" id="{$LISTA_COMPRASNAC[p].idPedido}" onclick="goPage(2, this.id)" title="Modificar Pedido" data-rel="tooltip" ><i class="icon icon-color icon-edit"></i></a> 
                                            </td>
                                        </tr>
                                        {/section}	

{literal}
<script type="text/javascript">
$(document).ready(function(){

$('#tblDataE').dataTable({                        
	"sDom": "<'row-fluid'<'span6'l><'span6'f>r>t<'row-fluid'<'span12'i><'span12 center'p>>",
	"sPaginationType": "bootstrap",
                'iDisplayLength': 16,
                "aLengthMenu": [[16, 24, 32, -1], [8, 16, 24, 32, "Todos"]],
                "aaSorting": [[ 3, "desc" ]],
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
{/literal}
