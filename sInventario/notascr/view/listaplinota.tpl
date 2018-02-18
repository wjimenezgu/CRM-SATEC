{if (empty($LISTA_APLINOTA))}
	<tr><td style="text-align:center;" colspan="4">No hay datos para desplegar</td></tr>
{/if}
{section name=lP loop=$LISTA_APLINOTA}
	<tr> 
		<td>{$LISTA_APLINOTA[lP].numLinea}</td>                                                                          
		<td>{$LISTA_APLINOTA[lP].numDocuAplica}</td>
		<td>{$LISTA_APLINOTA[lP].fecAplica}</td>
		<td style="text-align:right;">{$LISTA_APLINOTA[lP].total}</td>
	</tr> 
{/section}
