 {if (empty($LISTA_FACTPROVEEDOR))}
	<tr><td style="text-align:center;" colspan="7">No hay factuas que cargar</td></tr>
 {/if}
 {section name=lP loop=$LISTA_FACTPROVEEDOR}
	<tr style="padding:0px;" > 
		<td style="width:7%;">{$LISTA_FACTPROVEEDOR[lP].numOrdenCompra}</td>
        <td style="width:23%;">{$LISTA_FACTPROVEEDOR[lP].nombreProveedor}</td>     
		<td style="width:15%;">{$LISTA_FACTPROVEEDOR[lP].numDoc}</td>
		<td style="width:15%;">{$LISTA_FACTPROVEEDOR[lP].fecDoc}</td>
		<td style="width:10%;">{$LISTA_FACTPROVEEDOR[lP].idMoneda}</td>
		<td style="width:10%; text-align:right">{$LISTA_FACTPROVEEDOR[lP].montoDoc}</td>					
		<td style="width:10%;" >
			<input type="checkbox"  id="selRow{$smarty.section.lP.index+1}" value='s' {if !empty($LISTA_FACTPROVEEDOR[lP].fechaCorteConcilia)}checked{/if}>
		</td>
	</tr> 
{/section}



