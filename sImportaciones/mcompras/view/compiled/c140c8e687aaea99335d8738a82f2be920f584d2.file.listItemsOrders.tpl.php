<?php /* Smarty version Smarty-3.1.16, created on 2017-11-01 10:38:43
         compiled from "../mcompras/view/listItemsOrders.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3663329325453e973a146a5-48137362%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c140c8e687aaea99335d8738a82f2be920f584d2' => 
    array (
      0 => '../mcompras/view/listItemsOrders.tpl',
      1 => 1509554176,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3663329325453e973a146a5-48137362',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5453e973ad9569_16584214',
  'variables' => 
  array (
    'LIST_ITEMS_ORDERS' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5453e973ad9569_16584214')) {function content_5453e973ad9569_16584214($_smarty_tpl) {?> <?php if ((empty($_smarty_tpl->tpl_vars['LIST_ITEMS_ORDERS']->value))) {?>
	<tr><td style="text-align:center;" colspan="10">No hay datos para desplegar</td></tr>
 <?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']);
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
	<tr style="padding:0px;" >
	 	<td style="width:5px;"><?php echo $_smarty_tpl->tpl_vars['LIST_ITEMS_ORDERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['idPedido'];?>
</td> 
	 	<td style="width:5px;"><?php echo $_smarty_tpl->tpl_vars['LIST_ITEMS_ORDERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['idLinea'];?>
</td>
		<td style="width:10px;"><?php echo $_smarty_tpl->tpl_vars['LIST_ITEMS_ORDERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['codArti'];?>
</td>
		<td style="width:10px;"><?php echo $_smarty_tpl->tpl_vars['LIST_ITEMS_ORDERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['codArtiProveedor'];?>
</td>
		<td style="width:10px;"><?php echo $_smarty_tpl->tpl_vars['LIST_ITEMS_ORDERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['descArti'];?>
</td>
		<td style="width:10px;">
			<input class="input-mini"  disabled id="solRow<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']+1;?>
" type="text" value="<?php echo $_smarty_tpl->tpl_vars['LIST_ITEMS_ORDERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['cantidad'];?>
">
		</td>
		<td style="width:10px;">
			<input class="input-mini"  id="cantRow<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']+1;?>
" type="text" onkeydown="keyPressT(event);"  onchange="updTot(this.id);" value="<?php echo $_smarty_tpl->tpl_vars['LIST_ITEMS_ORDERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['cantRecibidaStr'];?>
">
		</td>
		<td style="width:10px;">
			<input class="input-mini"    id="totRow<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']+1;?>
" type="text"  value="<?php echo $_smarty_tpl->tpl_vars['LIST_ITEMS_ORDERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['cantRecibida'];?>
">
		</td>
		<td style="width:10px;">
			<div class="control-group <?php echo $_smarty_tpl->tpl_vars['LIST_ITEMS_ORDERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['difStr'];?>
" id="difBoxRow<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']+1;?>
">
			<div class="controls">
			<input class="input-mini"    id="difRow<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']+1;?>
" type="text"  value="<?php echo $_smarty_tpl->tpl_vars['LIST_ITEMS_ORDERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['difRecibida'];?>
">
			</div>
			</div>
		</td>
		
		<td style="width:10px;">
			<input class="input-mini"  id="comentRow<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']+1;?>
" type="text" value="<?php echo $_smarty_tpl->tpl_vars['LIST_ITEMS_ORDERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['comentRecepcion'];?>
">
		</td>
	</tr> 
<?php endfor; endif; ?>


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

<?php }} ?>
