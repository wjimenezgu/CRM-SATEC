{section name=lP loop=$LIST_ITEMS_ORDERS} 
	<tr style="padding:0px;" id="row{$smarty.section.lP.index+1}">
	 	<td style="width:11px;">
<input type="hidden" name="lAjusteFactor" id="lAjusteFactor" value="{$LIST_ITEMS_ORDERS[lP].porcentajeAjuFactor}">	 	
	 	   <input  style="width: 11px;text-align:center;"  name="idLinea[]" id="{$smarty.section.lP.index}" type="text"  disabled value="{$LIST_ITEMS_ORDERS[lP].idLinea}">
	 	</td>
		<td style="width:50px;">
		   <input  style="width: 50px;text-align:left;"  name="codArti[]" id="{$smarty.section.lP.index}" type="text"  disabled value="{$LIST_ITEMS_ORDERS[lP].codArti}">
		</td>
		<td style="width:10px;">{$LIST_ITEMS_ORDERS[lP].codArtiProveedor}</td>
		<td style="width:10px;">{$LIST_ITEMS_ORDERS[lP].descArti}</td>
		<td style="width:10px;text-align:right;">
		   <input  style="width: 40px;text-align:right;"  name="cpedido[]" id="{$smarty.section.lP.index}" type="text"  disabled value="{$LIST_ITEMS_ORDERS[lP].CostoPedido}">
		</td>
		<td style="width:10px;text-align:right;">
		 <select id="sel{$smarty.section.lP.index}" style="width:40px;" name="selectFactor[]" onchange="recalculaCosto(this.id)">                  
         	{section name=lf loop=$LIST_FACTORES}         		
                    	<option value="{$LIST_FACTORES[lf].valor}" {if $LIST_FACTORES[lf].valor eq "{$LIST_ITEMS_ORDERS[lP].factor}"} selected{/if}>
                            {$LIST_FACTORES[lf].numLinea}|{$LIST_FACTORES[lf].valor}
                        </option>                                	
            {/section}        
         </select>
		</td>
		<td style="width:10px;text-align:right;">{$LIST_ITEMS_ORDERS[lP].Costo}</td>
		<td style="width:5px;text-align:right;">
			<input  style="width: 80px;text-align:right;"  name="costo[]" id="{$smarty.section.lP.index}" type="text"  disabled value="{$LIST_ITEMS_ORDERS[lP].CostoNuevo}">
		</td>
		<td style="width:10px;text-align:right;">
		    <input  style="width: 45px;text-align:right;"  name="autil[]" id="{$smarty.section.lP.index}" disabled type=text  value="{$LIST_ITEMS_ORDERS[lP].FactorUtilidad}">
		</td>
		
		<td style="width:5px;text-align:right;">
			<input  style="width: 45px;text-align:right;"  name="futil[]" id="{$smarty.section.lP.index}" onkeydown="keyPressN(event);" onchange="recalculaPrecio(this.id)" type=text  value="{$LIST_ITEMS_ORDERS[lP].facUtilNuevo}">
		</td>
		<td style="width:10px;text-align:right;">{$LIST_ITEMS_ORDERS[lP].Precio}</td>
		<td style="width:5px;text-align:right;">
			<input  style="width: 80px;text-align:right;" name="precio[]" id="{$smarty.section.lP.index}" type="text"  onkeydown="keyPressN(event);" onchange="recalculaUtilidad(this.id)"    value="{$LIST_ITEMS_ORDERS[lP].PrecioNuevo}">
		</td>
		<td style="width:10px;text-align:right;">{$LIST_ITEMS_ORDERS[lP].cantRecibida}</td>		
		<td style="width:5px;text-align:right;">
			<input  style="width: 40px;text-align:right;" name="cantreci[]" id="{$smarty.section.lP.index}" type="text"  onkeydown="keyPressEnt(event);" value="{$LIST_ITEMS_ORDERS[lP].cantIngInv}">
		</td>
	</tr> 
{/section}
{literal}
<script type="text/javascript">
$("#hAjusteFactor").val($("#lAjusteFactor").val());

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



function recalculaCosto(idRow){
	
	//la siguiente linea de codigo no funciona,
	//me falta investigar como llegar a las propiedades
	// apunta a un arreglo de campos de seleccion
	//var vSel = $('input[name^="selectFactor"]').eq(numRow);

	
	//idRow contiene lo siguiente: sel+numero de linea, ejemplo: sel0, sel1, etc. para cada una de las filas
	//para saber el numero de la linea hay que suprimir los primeros 3 caracteres o sea 'sel'
	// 'sel' termina en la posicion 2, 
	
	var numRow   = idRow.substring(3);
	var vFactor  = document.getElementById(idRow).value;
	// se obtiene el costo segun el pedido cpedido[]
	var vCosto 	 = $('input[name^="cpedido"]').eq(numRow).val();
	
	// como esta formateado con comas hay que quitarlas
//	var vCostoS  = vCosto.replace(",","");
	var vCostoS  = vCosto.replace(/,/g, '');
	// se calcula el nuevo costo, basicamente es costo del pedido * factor seleccionado por el usuario
	// el factor esta con precision de 3 digitos.
	var nCost	 = parseFloat(vCostoS) * parseFloat(vFactor).toFixed(3);
	var vUtil  = $('input[name^="autil"]').eq(numRow).val();
	if (vUtil.length === 0){
		vUtil  = $('input[name^="futil"]').eq(numRow).val();
	}
	var nPrecio = parseFloat(nCost) * (1 + (parseFloat(vUtil) / 100.00));
	var nCostoStr = nCost.toFixed(2).replace(/./g, function(c, i, a) {
	    return i && c !== "." && ((a.length - i) % 3 === 0) ? ',' + c : c;
	})
	var nPrecioStr = nPrecio.toFixed(2).replace(/./g, function(c, i, a) {
	    return i && c !== "." && ((a.length - i) % 3 === 0) ? ',' + c : c;
	})
	
	$('input[name^="costo"]').eq(numRow).val(nCostoStr);
	$('input[name^="precio"]').eq(numRow).val(nPrecioStr);

}

function recalculaPrecio(numRow){
	//alert(numRow);
	// el siguiente codigo itera sobre todos los elementos del arreglo precio.
	//$('input[name^="precio"]').each(function() {alert($(this).val());})
	// la siguiente linea de codigo despliega el valor del precio segun la posicion en el arreglo.	
	//alert($('input[name^="precio"]').eq(numRow-1).val());
	var vUtil  = $('input[name^="futil"]').eq(numRow).val();
	if (vUtil.length === 0){
		vUtil  = $('input[name^="autil"]').eq(numRow).val();
	}
	var vCosto = $('input[name^="costo"]').eq(numRow).val();
	// vCostoS    = vCosto.replace(",","");
	vCostoS    = vCosto.replace(/,/g, '');
	var nPrecio = parseFloat(vCostoS) * (1 + (parseFloat(vUtil) / 100.00));
	var nPrecioStr = nPrecio.toFixed(2).replace(/./g, function(c, i, a) {
	    return i && c !== "." && ((a.length - i) % 3 === 0) ? ',' + c : c;
	})
	
	$('input[name^="precio"]').eq(numRow).val(nPrecioStr);

}

function recalculaUtilidad(numRow){
	
	//alert(numRow);
	// el siguiente codigo itera sobre todos los elementos del arreglo precio.
	//$('input[name^="precio"]').each(function() {alert($(this).val());})
	// la siguiente linea de codigo despliega el valor del precio segun la posicion en el arreglo.	
	//alert($('input[name^="precio"]').eq(numRow-1).val());
	
	// ((Precio / Costo) - 1) * 100 = UTIL
	var vPrecio = $('input[name^="precio"]').eq(numRow).val();
	if (vPrecio.length === 0){
		// si el precio queda nulo se debe volver a calcular.
		// primero con base a un nuevo factor de utilidad.
		// si el nuevo factor esta nulo se utiliza el factor de utilidad actual.
		var vUtil  = $('input[name^="futil"]').eq(numRow).val();
		if (vUtil.length === 0){
			vUtil  = $('input[name^="autil"]').eq(numRow).val();
		}
		var vCosto = $('input[name^="costo"]').eq(numRow).val();
	//	vCostoS    = vCosto.replace(",","");
		vCostoS    = vCosto.replace(/,/g, '');
		var nPrecio = parseFloat(vCostoS) * (1 + (parseFloat(vUtil) / 100.00));
//		var nPrecioStr = nPrecio.toFixed(2).replace(/./g, function(c, i, a) {
//		    return i && c !== "." && ((a.length - i) % 3 === 0) ? ',' + c : c;
//		});
//		$('input[name^="precio"]').eq(numRow).val(nPrecioStr);
	}else{
		// Se recalcula la utilidad con base al nuevo precio
		// que el usuario a digitado
		var vCosto = $('input[name^="costo"]').eq(numRow).val();
	//	vCostoS    = vCosto.replace(",","");
		vCostoS    = vCosto.replace(/,/g, '');
		vPrecioS   = vPrecio.replace(/,/g, '');

		var nUtil = ((parseFloat(vPrecioS) / parseFloat(vCostoS)) - 1) * 100.00;
		$('input[name^="futil"]').eq(numRow).val(parseFloat(nUtil).toFixed(2));
		var nPrecio = parseFloat(vPrecioS) * 1;
//		var vPrecioN = parseFloat(vPrecio).toFixed(2);
//		alert('llego '+vPrecioN);

//		alert('despues '+vPrecio);
//		$('input[name^="precio"]').eq(numRow).val(vPrecioN);
	};
	var nPrecioStr = nPrecio.toFixed(2).replace(/./g, function(c, i, a) {
	    return i && c !== "." && ((a.length - i) % 3 === 0) ? ',' + c : c;
	});
	$('input[name^="precio"]').eq(numRow).val(nPrecioStr);
	
}
	
	function FormatPrecio(numRow){

		var vPrecio = $('input[name^="precio"]').eq(numRow).val();
		var vPrecioS = vPrecio.toFixed(2).replace(/./g, function(c, i, a) {
		    return i && c !== "." && ((a.length - i) % 3 === 0) ? ',' + c : c;
		});
		$('input[name^="precio"]').eq(numRow).val(vPrecioS);
	}
	
	function UnFormatPrecio(numRow){	

		var vPrecio = $('input[name^="precio"]').eq(numRow).val();
	//	vPrecioS    = vPrecio.replace(",","");
		vPrecioS    = vPrecio.replace(/,/g, '');
		$('input[name^="precio"]').eq(numRow).val(parseFloat(vPrecioS).toFixed(2));		
	}


</script>
{/literal}