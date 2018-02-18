 {if (empty($LIST_ITEMS_ORDERS))}
	<tr><td style="text-align:center;" colspan="9">No hay datos para desplegar</td></tr>
 {/if}
{section name=lP loop=$LIST_ITEMS_ORDERS}
	<tr style="padding:0px;" >
	 	<td style="width:5px;">{$LIST_ITEMS_ORDERS[lP].idPedido}</td> 
	 	<td style="width:5px;">{$LIST_ITEMS_ORDERS[lP].idLinea}</td>
		<td style="width:10px;">{$LIST_ITEMS_ORDERS[lP].codArti}</td>
		<td style="width:10px;">{$LIST_ITEMS_ORDERS[lP].codArtiProveedor}</td>
		<td style="width:10px;">{$LIST_ITEMS_ORDERS[lP].descArti}</td>
		<td style="width:10px;">
			<input class="input-mini"  disabled style="text-align: right;" id="solRow{$smarty.section.lP.index+1}" type="text" value="{$LIST_ITEMS_ORDERS[lP].cantidad}">
		</td>
		<td style="width:10px;">
			<input class="input-mini"  disabled style="text-align: right;" id="totRow{$smarty.section.lP.index+1}" type="text"  value="{$LIST_ITEMS_ORDERS[lP].cantRecibida}">
		</td>
		<td style="width:10px;">
			<div class="control-group " id="difBoxRow{$smarty.section.lP.index+1}">
			<div class="controls">
			<input class="input-mini"  disabled style="text-align: right;" id="difRow{$smarty.section.lP.index+1}" type="text"  value="{$LIST_ITEMS_ORDERS[lP].difRecibida}">
			</div>
			</div>
		</td>
		<td style="width:10%;" >
			<input type="checkbox"  id="selRow{$smarty.section.lP.index+1}" value='s' {if ($LIST_ITEMS_ORDERS[lP].estadoLinea eq "3")}checked{/if}>
		</td>
				
	</tr> 
{/section}

{literal}
<script type="text/javascript">


</script>
{/literal}
