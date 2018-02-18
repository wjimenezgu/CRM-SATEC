{section name=lP loop=$LISTA_EXISTENCIAS}
	<tr style="padding:0px; id="tr{$LISTA_EXISTENCIAS[lP].codArti}"> 
		<td style="width:40px;">{$LISTA_EXISTENCIAS[lP].codArti}</td>                                                                          
		<td style="width:250px;" align="left">{$LISTA_EXISTENCIAS[lP].desArticulo}</td>
		<td style="width:50px;">{$LISTA_EXISTENCIAS[lP].codArtiProveedor}</td>
		<td style="width:50px;">{$LISTA_EXISTENCIAS[lP].ExisLocal}</td>		
	</tr> 
{/section}