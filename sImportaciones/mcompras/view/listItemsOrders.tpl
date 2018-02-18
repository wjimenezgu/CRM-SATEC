 {if (empty($LIST_ITEMS_ORDERS))}
	<tr><td style="text-align:center;" colspan="10">No hay datos para desplegar</td></tr>
 {/if}
{section name=lP loop=$LIST_ITEMS_ORDERS}
	<tr style="padding:0px;" >
	 	<td style="width:5px;">{$LIST_ITEMS_ORDERS[lP].idPedido}</td> 
	 	<td style="width:5px;">{$LIST_ITEMS_ORDERS[lP].idLinea}</td>
		<td style="width:10px;">{$LIST_ITEMS_ORDERS[lP].codArti}</td>
		<td style="width:10px;">{$LIST_ITEMS_ORDERS[lP].codArtiProveedor}</td>
		<td style="width:10px;">{$LIST_ITEMS_ORDERS[lP].descArti}</td>
		<td style="width:10px;">
			<input class="input-mini"  disabled id="solRow{$smarty.section.lP.index+1}" type="text" value="{$LIST_ITEMS_ORDERS[lP].cantidad}">
		</td>
		<td style="width:10px;">
			<input class="input-mini"  id="cantRow{$smarty.section.lP.index+1}" type="text" onkeydown="keyPressT(event);"  onchange="updTot(this.id);" value="{$LIST_ITEMS_ORDERS[lP].cantRecibidaStr}">
		</td>
		<td style="width:10px;">
			<input class="input-mini"    id="totRow{$smarty.section.lP.index+1}" type="text"  value="{$LIST_ITEMS_ORDERS[lP].cantRecibida}">
		</td>
		<td style="width:10px;">
			<div class="control-group {$LIST_ITEMS_ORDERS[lP].difStr}" id="difBoxRow{$smarty.section.lP.index+1}">
			<div class="controls">
			<input class="input-mini"    id="difRow{$smarty.section.lP.index+1}" type="text"  value="{$LIST_ITEMS_ORDERS[lP].difRecibida}">
			</div>
			</div>
		</td>
		
		<td style="width:10px;">
			<input class="input-mini"  id="comentRow{$smarty.section.lP.index+1}" type="text" value="{$LIST_ITEMS_ORDERS[lP].comentRecepcion}">
		</td>
	</tr> 
{/section}

{literal}
<script type="text/javascript">

function keyPressT(e){
	//alert(e.keyCode+' '+e.ctrlKey+' '+e.shiftKey);
	/*
		8	backspace
		9	tab
		13	enter
		27	escape
		46	delete
		56	8
		106	multiply
		107	add
		187 == 
		falta probar en otro tipo de teclado los codigos.
	*/
    if ($.inArray(e.keyCode, [46, 8, 9, 27, 13,56,107, 187]) !== -1 ||
            // Allow: Ctrl+A
           (e.keyCode == 65 && e.ctrlKey === true) || 
            // Allow: home, end, left, right, down, up
           (e.keyCode >= 35 && e.keyCode <= 40)) {
                // let it happen, don't do anything
                return;
    }

    // Ensure that it is a number and stop the keypress
 /*
    if ((e.shiftKey || ((e.keyCode < 48) || (e.keyCode > 57))) 
    		&& ((e.keyCode < 96) || (e.keyCode > 105) || (e.keyCode = 187)) 
    	  ) {
           e.preventDefault();
    };
 */

    if  (e.shiftKey || ($.inArray(e.keyCode, [48,49,50,51,52,53,54,55,56,57,96,97,98,99,100,101,102,103,104,105]) == -1)    	  
    	  ) {
           e.preventDefault();
    };
}

function updTot(id){
	
	var res = id.replace("cant", "tot");
	var dif = id.replace("cant", "dif");
	var sol = id.replace("cant", "sol");
	var difBox = id.replace("cant", "difBox");
	var strCant = $("#"+id).val();

	var arrCant = strCant.split("+");
	var vTot = 0;
	var vAnt = 0; //nueva
	var index; 
	for (index = 0; index < arrCant.length; ++index) {
		strCant = arrCant[index];
		if (strCant != ""){

			//if ($.inArray(strCant, ["*"]) !== -1){
			if (strCant.indexOf("*") > -1){
				//contiene un asterisco				
				strCantSinAsterisco = strCant.replace("*","");
				if (strCantSinAsterisco !=""){
					vTot = vTot - vAnt + (vAnt * parseInt(strCantSinAsterisco));
					vAnt = vAnt * parseInt(strCantSinAsterisco);
				}
			}else{
				vTot = vTot + parseInt(strCant);
				vAnt = parseInt(strCant);
			};			
			//vTot = vTot + parseInt(arrCant[index]);
		};
	};
	var solCant = parseInt($("#"+sol).val());
	$("#"+res).val(vTot);
	var vDif = vTot-solCant;
	$("#"+dif).val(vDif);
	//$("#"+difBox).addClass("success");
	//$("#difBox").addClass("success");
	//about = document.getElementById("difBox1");
	//about.addClass("success");
	
	
	$("#"+difBox).removeClass("error");
	$("#"+difBox).removeClass("warning");
	$("#"+difBox).removeClass("success");
	
	if (vDif < 0){
		$("#"+difBox).addClass("error");
	}else{
		if (vDif > 0){
			$("#"+difBox).addClass("warning");
		}else{
			$("#"+difBox).addClass("success");
		};
	};
	
	

};


</script>
{/literal}
