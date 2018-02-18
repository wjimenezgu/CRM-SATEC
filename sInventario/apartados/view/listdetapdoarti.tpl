{section name=lP loop=$LISTA_DETAPDOARTI}
	<tr> 
		<td>{$LISTA_DETAPDOARTI[lP].numLinea}</td>                                                                          
		<td>{$LISTA_DETAPDOARTI[lP].desArticulo|lower|capitalize}</td>
		<td>{$LISTA_DETAPDOARTI[lP].codArti}</td>
		<td style="text-align:right;">{$LISTA_DETAPDOARTI[lP].cantidad}</td>
		<td style="text-align:right;">{$LISTA_DETAPDOARTI[lP].PorceDesc}</td>
		<td style="text-align:right;">{$LISTA_DETAPDOARTI[lP].PrecioTotal}</td>
	</tr> 
{/section}