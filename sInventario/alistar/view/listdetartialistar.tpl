{section name=lP loop=$LISTA_DETARTIALISTAR}
	<tr>                                                                           
		<td>{$LISTA_DETARTIALISTAR[lP].DesArticulo}</td>
		<td>{$LISTA_DETARTIALISTAR[lP].CodArti}</td>
		<td>{$LISTA_DETARTIALISTAR[lP].CodArtiProveedor}</td>
		<td style="text-align:right;">{$LISTA_DETARTIALISTAR[lP].cantidad}</td>
		<td>
			<input type="checkbox" name="ckArti[]" id="selRow{$smarty.section.lP.index+1}" value='s'>
			<input type="hidden"   name="artLis[]" id="valRow{$smarty.section.lP.index+1}" value='{$LISTA_DETARTIALISTAR[lP].IdFactura}|{$LISTA_DETARTIALISTAR[lP].NumLinea}|{$LISTA_DETARTIALISTAR[lP].CodArti}'>
		</td>
	</tr> 
{/section}