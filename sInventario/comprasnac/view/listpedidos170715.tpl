<!--
 {if (empty($LISTA_COMPRASNAC))}
	<tr><td style="text-align:center;" colspan="6">No hay pedidos para mostrar</td></tr>
 {/if}
 -->
						  {section loop=$LISTA_COMPRASNAC name=p}
                                        <tr id="register{$LISTA_COMPRASNAC[p].idPedido}">
                                            <td>{$LISTA_COMPRASNAC[p].idPedido}</td>
                                            <td>{$LISTA_COMPRASNAC[p].numOrdenCompra}</td>
                                            <td>{$LISTA_COMPRASNAC[p].nombreProveedor}</td> 
                                            <td>{$LISTA_COMPRASNAC[p].comentarios}</td>                 
                                            <td>{$LISTA_COMPRASNAC[p].fecCreacion}</td> 									
                                            <td>
                                                <a href="#" id="{$LISTA_COMPRASNAC[p].idPedido}" Title="Imprimir Orden de Compra" onclick="goPage(6, this.id)"><i class="icon icon-color icon-print"></i></a>                                                
                                                <a href="#" id="{$LISTA_COMPRASNAC[p].idPedido}" onclick="goPage(4, this.id)" title="Visualizar Datos" data-rel="tooltip"><i class="icon icon-blue icon-search"></i></a>
                                                <a href="#" id="{$LISTA_COMPRASNAC[p].idPedido}" onclick="goPage(7, this.id)" {if ($LISTA_COMPRASNAC[p].estadoPedido eq 'R' || $LISTA_COMPRASNAC[p].estadoPedido eq 'N')} hidden="true"{/if} title="Amular Pedido" data-rel="tooltip"><i class="icon icon-color icon-cancel"></i></a>
                                                <a href="#" id="{$LISTA_COMPRASNAC[p].idPedido}" onclick="goPage(5, this.id)" {if ($LISTA_COMPRASNAC[p].estadoPedido eq 'R' || $LISTA_COMPRASNAC[p].estadoPedido eq 'N')} hidden="true"{/if} title="Recibir Pedido" data-rel="tooltip"><i class="icon icon-blue icon-archive"></i></a>
                                                <a href="#" id="{$LISTA_COMPRASNAC[p].idPedido}" onclick="goPage(2, this.id)" {if ($LISTA_COMPRASNAC[p].estadoPedido eq 'R' || $LISTA_COMPRASNAC[p].estadoPedido eq 'N')} hidden="true"{/if}  onclick="deleteCurrentRowJS(this)"title="Modificar Pedido Pendiente" data-rel="tooltip" style="margin-right:3px;" class="pull-right" ><i class="icon icon-color icon-edit"></i></a> 
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
                "aaSorting": [[ 4, "desc" ]],
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
