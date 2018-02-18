{section name=lP loop=$LISTA_ITEMS}
	<tr style="padding:0px;" id="tr{$LISTA_ITEMS[lP].codArti}"> 
		<td style="width:40px;">{$LISTA_ITEMS[lP].codArti}</td>                                                                          
		<td style="width:385px;" align="left">
			<a  style="color:#004C66;" href="edit.php?id={$LISTA_ITEMS[lP].codArti}" onclick="">{$LISTA_ITEMS[lP].desArticulo|lower|capitalize}</a>
		</td>
		<td style="width:60px;">{$LISTA_ITEMS[lP].codigoExterno}</td>
		<td style="width:180px;">{$LISTA_ITEMS[lP].descExterno}</td>
	</tr> 
{/section}