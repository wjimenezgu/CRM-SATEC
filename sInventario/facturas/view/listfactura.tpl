 {if (empty($LISTA_FACTURAS))}
	<tr><td style="text-align:center;" colspan="8">No existe factura</td></tr>
 {/if}
{section name=lP loop=$LISTA_FACTURAS}
	<tr style="padding:0px;" id="tr{$LISTA_FACTURAS[lP].idFactura}">
            <td style="width:385px; text-align:left"> 
            	<a style="color:#004C66;" href="#" 
            		id="{$LISTA_FACTURAS[lP].idFactura}|{$LISTA_FACTURAS[lP].nombre}|{$LISTA_FACTURAS[lP].userVendedor}|{$LISTA_FACTURAS[lP].subTotal}|{$LISTA_FACTURAS[lP].descuento}|{$LISTA_FACTURAS[lP].impuesto}|{$LISTA_FACTURAS[lP].TotalN}|{$LISTA_FACTURAS[lP].formaPago}|{$LISTA_FACTURAS[lP].autorizacion}|{$LISTA_FACTURAS[lP].numDocu}|{$LISTA_FACTURAS[lP].codTienda}|{$LISTA_FACTURAS[lP].fecFactura}|{$LISTA_FACTURAS[lP].Estado}"                                		
            		onclick="getDetFactura(this.id)">{$LISTA_FACTURAS[lP].nombre}
            	</a>
            </td>
			<td style="width:40px;  text-align:right">{$LISTA_FACTURAS[lP].idFactura}</td>
			<td style="width:70px;  text-align:right">{$LISTA_FACTURAS[lP].numDocu}</td>
			<td style="width:150px;">{$LISTA_FACTURAS[lP].fecFactura}</td>
            <td style="width:385px; text-align:right">{$LISTA_FACTURAS[lP].Total}</td>
            <td>{$LISTA_FACTURAS[lP].estadoImp}</td>
            <td>{$LISTA_FACTURAS[lP].Estado}</td>
            <td class="center">
			<a href="#" id="{$LISTA_FACTURAS[lP].idFactura}|{$LISTA_FACTURAS[lP].numDocu}|{$LISTA_FACTURAS[lP].Total}|{$LISTA_FACTURAS[lP].nombre}|{$LISTA_FACTURAS[lP].codTienda}|{$LISTA_FACTURAS[lP].fecFactura}" {IF $LISTA_FACTURAS[lP].Estado == 'ANULADA' || $LISTA_FACTURAS[lP].estadoImp == 'N'}hidden='true'{/if} Title="Anular Factura" onclick="goPage(1, this.id)"><i class="icon icon-color icon-cancel"></i></a>
			<a href="#"  id="{$LISTA_FACTURAS[lP].idFactura}" {IF $LISTA_FACTURAS[lP].Estado == 'ANULADA' || $LISTA_FACTURAS[lP].estadoImp == 'N'}hidden='true'{/if} Title="Re-imprimir Factura" onclick="impFactu(this.id);"><i class="icon icon-color icon-print"></i></a>
		</td>                          
	</tr> 
{/section}