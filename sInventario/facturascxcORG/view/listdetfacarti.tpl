{section name=lP loop=$LISTA_DETFACARTI}
	<tr> 
		<td>{$LISTA_DETFACARTI[lP].numLinea}</td>                                                                          
		<td>{$LISTA_DETFACARTI[lP].desArticulo}</td>
		<td>{$LISTA_DETFACARTI[lP].codArti}</td>
		<td style="text-align:right;">{$LISTA_DETFACARTI[lP].PrecioVenta}</td>
		<td style="text-align:right;">{$LISTA_DETFACARTI[lP].cantidad}</td>
		<td style="text-align:right;">{$LISTA_DETFACARTI[lP].PorceDesc}</td>
		<td style="text-align:right;">{$LISTA_DETFACARTI[lP].PrecioTotal}</td>
		<td style="text-align:center;">				
        	<input type="checkbox"   id="selRow{$smarty.section.lP.index+1}"  value='s'>
		</td>
	</tr> 
{/section}