{section name=lP loop=$LISTA_DETFACARTI}
	<tr> 
		<td id="numRow{$smarty.section.lP.index+1}">{$LISTA_DETFACARTI[lP].numLinea}</td>                                                                          
		<td>{$LISTA_DETFACARTI[lP].desArticulo}</td>
		<td id="codRow{$smarty.section.lP.index+1}">{$LISTA_DETFACARTI[lP].codArti}</td>
		<td id="pventaRow{$smarty.section.lP.index+1}"style="text-align:right;">{$LISTA_DETFACARTI[lP].PrecioVenta}</td>
		<td id="cantRow{$smarty.section.lP.index+1}"style="text-align:right;">{$LISTA_DETFACARTI[lP].cantidad}</td>
		<td id="pdescRow{$smarty.section.lP.index+1}"style="text-align:right;">{$LISTA_DETFACARTI[lP].PorceDesc}</td>
		<td id="ptotalRow{$smarty.section.lP.index+1}"style="text-align:right;">{$LISTA_DETFACARTI[lP].PrecioTotal}</td>
	</tr> 
{/section}