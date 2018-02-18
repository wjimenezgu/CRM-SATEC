{section name=lP loop=$LISTA_ITEMS}
	<tr style="padding:0px;{if $LISTA_ITEMS[lP].estado eq 2} color:red{/if}" id="tr{$LISTA_ITEMS[lP].codArti}"> 
		<td style="width:40px;">{$LISTA_ITEMS[lP].codArti}</td>                                                                          
		<td style="width:250px;" align="left">{$LISTA_ITEMS[lP].desArticulo}</td>
		<td style="width:50px;">{$LISTA_ITEMS[lP].codigoExterno}</td>
		<td style="width:250px;">{$LISTA_ITEMS[lP].nombreProveedor}</td>
		<td style="width:80px;">{$LISTA_ITEMS[lP].ubicacion}</td>
		<td style="width:80px;">{$LISTA_ITEMS[lP].ubicacion2}</td>
		<td style="width:80px;text-align: right;">{$LISTA_ITEMS[lP].exisTienda}</td>
		<td class="center">
			<a href="#" id="{$LISTA_ITEMS[lP].codArti}" onclick="goPage(2, this.id)" Title="Editar Artículo"><i class="icon icon-color icon-edit"></i></a>
			<a href="#" id="{$LISTA_ITEMS[lP].codArti}" onclick="goPage(7, this.id)" Title="Listar Movimientos" ><i class="icon icon-color icon-book"></i></a>
		</td>
		
	</tr> 
{/section}
