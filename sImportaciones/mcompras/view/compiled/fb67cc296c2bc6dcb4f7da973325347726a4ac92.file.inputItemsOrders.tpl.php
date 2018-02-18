<?php /* Smarty version Smarty-3.1.16, created on 2017-07-27 22:14:54
         compiled from "../mcompras/view/inputItemsOrders.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1152798469557c6e1dbd3359-34844591%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb67cc296c2bc6dcb4f7da973325347726a4ac92' => 
    array (
      0 => '../mcompras/view/inputItemsOrders.tpl',
      1 => 1501215275,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1152798469557c6e1dbd3359-34844591',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_557c6e1dc981a6_36013778',
  'variables' => 
  array (
    'LIST_ITEMS_ORDERS' => 0,
    'LIST_FACTORES' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557c6e1dc981a6_36013778')) {function content_557c6e1dc981a6_36013778($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['name'] = 'lP';
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['LIST_ITEMS_ORDERS']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['total']);
?> 
	<tr style="padding:0px;" id="row<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']+1;?>
">
	 	<td style="width:11px;">
<input type="hidden" name="lAjusteFactor" id="lAjusteFactor" value="<?php echo $_smarty_tpl->tpl_vars['LIST_ITEMS_ORDERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['porcentajeAjuFactor'];?>
">	 	
	 	   <input  style="width: 11px;text-align:center;"  name="idLinea[]" id="<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['lP']['index'];?>
" type="text"  disabled value="<?php echo $_smarty_tpl->tpl_vars['LIST_ITEMS_ORDERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['idLinea'];?>
">
	 	</td>
		<td style="width:50px;">
		   <input  style="width: 50px;text-align:left;"  name="codArti[]" id="<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['lP']['index'];?>
" type="text"  disabled value="<?php echo $_smarty_tpl->tpl_vars['LIST_ITEMS_ORDERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['codArti'];?>
">
		</td>
		<td style="width:10px;"><?php echo $_smarty_tpl->tpl_vars['LIST_ITEMS_ORDERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['codArtiProveedor'];?>
</td>
		<td style="width:10px;"><?php echo $_smarty_tpl->tpl_vars['LIST_ITEMS_ORDERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['descArti'];?>
</td>
		<td style="width:10px;text-align:right;">
		   <input  style="width: 40px;text-align:right;"  name="cpedido[]" id="<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['lP']['index'];?>
" type="text"  disabled value="<?php echo $_smarty_tpl->tpl_vars['LIST_ITEMS_ORDERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['CostoPedido'];?>
">
		</td>
		<td style="width:10px;text-align:right;">
		 <select id="sel<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['lP']['index'];?>
" style="width:40px;" name="selectFactor[]" onchange="recalculaCosto(this.id)">                  
         	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['lf'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['lf']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lf']['name'] = 'lf';
$_smarty_tpl->tpl_vars['smarty']->value['section']['lf']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['LIST_FACTORES']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lf']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['lf']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lf']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lf']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['lf']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lf']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['lf']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['lf']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['lf']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lf']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['lf']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['lf']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['lf']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['lf']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['lf']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lf']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['lf']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['lf']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['lf']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['lf']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['lf']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['lf']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['lf']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lf']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lf']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lf']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['lf']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lf']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lf']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['lf']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lf']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['lf']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lf']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['lf']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['lf']['total']);
?>         		
                    	<option value="<?php echo $_smarty_tpl->tpl_vars['LIST_FACTORES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lf']['index']]['valor'];?>
" <?php if ($_smarty_tpl->tpl_vars['LIST_FACTORES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lf']['index']]['valor']==((string)$_smarty_tpl->tpl_vars['LIST_ITEMS_ORDERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['factor'])) {?> selected<?php }?>>
                            <?php echo $_smarty_tpl->tpl_vars['LIST_FACTORES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lf']['index']]['numLinea'];?>
|<?php echo $_smarty_tpl->tpl_vars['LIST_FACTORES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lf']['index']]['valor'];?>

                        </option>                                	
            <?php endfor; endif; ?>        
         </select>
		</td>
		<td style="width:10px;text-align:right;"><?php echo $_smarty_tpl->tpl_vars['LIST_ITEMS_ORDERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['Costo'];?>
</td>
		<td style="width:5px;text-align:right;">
			<input  style="width: 80px;text-align:right;"  name="costo[]" id="<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['lP']['index'];?>
" type="text"  disabled value="<?php echo $_smarty_tpl->tpl_vars['LIST_ITEMS_ORDERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['CostoNuevo'];?>
">
		</td>
		<td style="width:10px;text-align:right;">
		    <input  style="width: 45px;text-align:right;"  name="autil[]" id="<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['lP']['index'];?>
" disabled type=text  value="<?php echo $_smarty_tpl->tpl_vars['LIST_ITEMS_ORDERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['FactorUtilidad'];?>
">
		</td>
		
		<td style="width:5px;text-align:right;">
			<input  style="width: 45px;text-align:right;"  name="futil[]" id="<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['lP']['index'];?>
" onkeydown="keyPressN(event);" onchange="recalculaPrecio(this.id)" type=text  value="<?php echo $_smarty_tpl->tpl_vars['LIST_ITEMS_ORDERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['facUtilNuevo'];?>
">
		</td>
		<td style="width:10px;text-align:right;"><?php echo $_smarty_tpl->tpl_vars['LIST_ITEMS_ORDERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['Precio'];?>
</td>
		<td style="width:5px;text-align:right;">
			<input  style="width: 80px;text-align:right;" name="precio[]" id="<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['lP']['index'];?>
" type="text"  onkeydown="keyPressN(event);" onchange="recalculaUtilidad(this.id)"    value="<?php echo $_smarty_tpl->tpl_vars['LIST_ITEMS_ORDERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['PrecioNuevo'];?>
">
		</td>
		<td style="width:10px;text-align:right;"><?php echo $_smarty_tpl->tpl_vars['LIST_ITEMS_ORDERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['cantRecibida'];?>
</td>		
		<td style="width:5px;text-align:right;">
			<input  style="width: 40px;text-align:right;" name="cantreci[]" id="<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['lP']['index'];?>
" type="text"  onkeydown="keyPressEnt(event);" value="<?php echo $_smarty_tpl->tpl_vars['LIST_ITEMS_ORDERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['cantIngInv'];?>
">
		</td>
	</tr> 
<?php endfor; endif; ?>

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
<?php }} ?>
