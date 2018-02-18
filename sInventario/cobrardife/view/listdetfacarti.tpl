{section name=lP loop=$LISTA_DETFACARTI}
	<tr> 
		<td>{$LISTA_DETFACARTI[lP].numLinea}</td>                                                                          
		<td>{$LISTA_DETFACARTI[lP].desArticulo|lower|capitalize}</td>
		<td>{$LISTA_DETFACARTI[lP].codArti}</td>
		<td style="text-align:right;">{$LISTA_DETFACARTI[lP].cantidad}</td>
		<td style="text-align:right;">{$LISTA_DETFACARTI[lP].PorceDesc}</td>
		<td style="text-align:right;">{$LISTA_DETFACARTI[lP].PrecioTotal}</td>
	</tr> 
{/section}