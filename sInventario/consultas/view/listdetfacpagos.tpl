{if (empty($LISTA_DETFACPAGOS))}
	<tr><td style="text-align:center;" colspan="4">No hay datos para desplegar</td></tr>
{/if}
{section name=lPP loop=$LISTA_DETFACPAGOS}
	<tr> 
		<td>{$LISTA_DETFACPAGOS[lPP].numLinea}</td>                                                                          
		<td>{$LISTA_DETFACPAGOS[lPP].numDocu}</td>
		<td>{$LISTA_DETFACPAGOS[lPP].descCorta}</td>
		<td style="text-align:right;">{$LISTA_DETFACPAGOS[lPP].montoPago}</td>
	</tr> 
{/section}