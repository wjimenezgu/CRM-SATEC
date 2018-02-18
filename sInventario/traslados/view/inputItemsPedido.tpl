{section name=lP loop=$LIST_ITEMS_PEDIDO}
	<tr style="padding:0px;" id="{$smarty.section.lP.index+1}">
  			<td style="width:10px;">
  				<label id="row{$smarty.section.lP.index+1}">{$smarty.section.lP.index+1}</label>
  			</td>
  			<td style="width:455x;">
  				{$LIST_ITEMS_PEDIDO[lP].desArticulo}
  				<input name="item[]" type="hidden" value="{$LIST_ITEMS_PEDIDO[lP].desArticulo}">
  			</td>
			<td style="width:10px;">
				<input name="codArti[]" type="hidden" value="{$LIST_ITEMS_PEDIDO[lP].codArti}">
				{$LIST_ITEMS_PEDIDO[lP].codArti}
			</td>     									
   			<td style="width:10px;" align="left">
   				{$LIST_ITEMS_PEDIDO[lP].Existencia}
				<input name="existencia[]" type="hidden" value="{$LIST_ITEMS_PEDIDO[lP].Existencia}">
            </td>
   			<td style="width:10px;" align="left">                            				
   				<input class="input-mini"  name="cant[]" id="cant[]"  type="number"  style="text-align: right;"  value="{$LIST_ITEMS_PEDIDO[lP].Total}">
   			</td>                    			
			<td class="center">
				<a href="#" id="{$smarty.section.lP.index+1}"  {if $ACTION eq "5"} hidden="true"{/if}  onclick="deleteCurrentRow(this)"><i class="icon icon-color icon-remove"></i></a>
        <input {if $EoS eq "E"}type="hidden"{else}type="checkbox"{/if}  id="selRow{$smarty.section.lP.index+1}"  value='s'>
			</td>

	</tr>
{/section}
{literal}
<script type="text/javascript">


function keyPressN(e){
	//alert(e.keyCode+' '+e.ctrlKey+' '+e.shiftKey);
    if ($.inArray(e.keyCode, [46, 8, 9, 27, 13,56,106,107, 187,190]) !== -1 ||
            // Allow: Ctrl+A
           (e.keyCode == 65 && e.ctrlKey === true) || 
            // Allow: home, end, left, right, down, up
           (e.keyCode >= 35 && e.keyCode <= 40)) {
                // let it happen, don't do anything
                return;
       }
       // Ensure that it is a number and stop the keypress
       if ((e.shiftKey || ((e.keyCode < 48) || (e.keyCode > 57))) && ((e.keyCode < 96) || (e.keyCode > 105))) {
           e.preventDefault();
       };
}

function keyPressEnt(e){
	//alert(e.keyCode+' '+e.ctrlKey+' '+e.shiftKey);
    if ($.inArray(e.keyCode, [46, 8, 9, 27, 13,56,106,107, 187]) !== -1 ||
            // Allow: Ctrl+A
           (e.keyCode == 65 && e.ctrlKey === true) || 
            // Allow: home, end, left, right, down, up
           (e.keyCode >= 35 && e.keyCode <= 40)) {
                // let it happen, don't do anything
                return;
       }
       // Ensure that it is a number and stop the keypress
       if ((e.shiftKey || ((e.keyCode < 48) || (e.keyCode > 57))) && ((e.keyCode < 96) || (e.keyCode > 105))) {
           e.preventDefault();
       };
}


</script>
{/literal}