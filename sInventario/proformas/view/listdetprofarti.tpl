{section name=lP loop=$LISTA_DETPROFARTI}
	<tr> 
		<td>{$LISTA_DETPROFARTI[lP].numLinea}</td>                                                                          
		<td>{$LISTA_DETPROFARTI[lP].desArticulo}</td>
		<td>{$LISTA_DETPROFARTI[lP].codArti}</td>
		<td style="text-align:right;">{$LISTA_DETPROFARTI[lP].cantidad}</td>
		<td style="text-align:right;">{$LISTA_DETPROFARTI[lP].PorceDesc}</td>
		<td style="text-align:right;">{$LISTA_DETPROFARTI[lP].PrecioTotal}</td>
	</tr> 
{/section}
