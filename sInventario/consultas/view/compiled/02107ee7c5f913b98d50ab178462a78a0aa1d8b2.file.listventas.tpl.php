<?php /* Smarty version Smarty-3.1.16, created on 2016-11-01 14:18:46
         compiled from "../consultas/view/listventas.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4393450135818c28c56ce74-05988527%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02107ee7c5f913b98d50ab178462a78a0aa1d8b2' => 
    array (
      0 => '../consultas/view/listventas.tpl',
      1 => 1478031520,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4393450135818c28c56ce74-05988527',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5818c28c5e7ce6_94726551',
  'variables' => 
  array (
    'NAV_MENU' => 0,
    'CURRENT_STORE' => 0,
    'TIT_REPORTE' => 0,
    'CURRENT_DATE' => 0,
    'TIT_EXPORT' => 0,
    'LISTA_MOVI' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5818c28c5e7ce6_94726551')) {function content_5818c28c5e7ce6_94726551($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['NAV_MENU']->value;?>

	<section id="main" >
		<h1 style="font-family:'Courier New', Courier, serif;"><?php echo $_smarty_tpl->tpl_vars['CURRENT_STORE']->value;?>
</h1>
		<h2 style="font-family:'Courier New', Courier, serif;"><?php echo $_smarty_tpl->tpl_vars['TIT_REPORTE']->value;?>
</h2>
	    Generado el: <?php echo $_smarty_tpl->tpl_vars['CURRENT_DATE']->value;?>

		<form name="export" id="export" method="post" action="reports_export_excel.php" target="_blank">
			<input type="hidden" id="cual" name="cual" value="<?php echo $_smarty_tpl->tpl_vars['TIT_EXPORT']->value;?>
" />
			<input type="hidden" id="cualEnc" name="cualEnc" value="<?php echo $_smarty_tpl->tpl_vars['TIT_REPORTE']->value;?>
" />
			<input type="hidden" id="dataExcel" name="dataExcel" />
		</form>           	                                
		<div id="imprimir" style="width:250px; margin: 15px 0;">
			<a href="javascript:;" onclick="printReport()" >Imprimir</a> | <a href="javascript:;" onclick="exportExcel()">Exportar Excel</a> 
		</div>               
        <table id="tblItemsList"  class="widefat" style="width: 100%;font-family:'Courier New', Courier, serif;">   
        	<thead>
            	<tr>
            
                   
                  	<th style="text-align:left">Cod.Articulo</th>
                  	<th style="text-align:left">Descripcion</th>
                  	<th style="text-align:left">Codigo Proveedor</th>
                  	<th style="text-align:right">Existencia</th>
                  	<th style="text-align:right">Cantidad</th>
                  
                </tr>
            </thead>
			<tbody id="info-items" >
				<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['name'] = 'lP';
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['LISTA_MOVI']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
					<tr style="padding:0px;"> 
				
						<td ><?php echo $_smarty_tpl->tpl_vars['LISTA_MOVI']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['CodArti'];?>
</td>
						<td ><?php echo $_smarty_tpl->tpl_vars['LISTA_MOVI']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['desArticulo'];?>
</td>
						<td ><?php echo $_smarty_tpl->tpl_vars['LISTA_MOVI']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['codArtiProveedor'];?>
</td>
						<td style="text-align:right"><?php echo $_smarty_tpl->tpl_vars['LISTA_MOVI']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['ExistenciaFechaFin'];?>
</td>
						<td style="text-align:right"><?php echo $_smarty_tpl->tpl_vars['LISTA_MOVI']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['MoviArti'];?>
</td>
						         		
					</tr> 
				<?php endfor; endif; ?>                                            
            </tbody>
        </table>	
</section>
	
	

<script type="text/javascript">

$(document).ready(function(){

});

function exportExcel(){
	//alert( $("<div>").append($(".widefat").eq(0).clone()).html() );
	$("#dataExcel").val( $("<div>").append($(".widefat").eq(0).clone()).html());
	$("#export").submit();
}

function printReport(){
	$('#imprimir').css('display', 'none'); 
	if (window.print) {
		window.print();
	}else{
		alert("Lo siento, pero a su navegador no se le puede ordenar imprimir" + " desde la web. Actualise.");
	}
	
	setTimeout("$('#imprimir').css('display', 'block')", 800);
}


</script>

<?php }} ?>
