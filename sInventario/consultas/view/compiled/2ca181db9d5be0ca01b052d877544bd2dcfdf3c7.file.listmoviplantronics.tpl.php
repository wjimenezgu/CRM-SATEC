<?php /* Smarty version Smarty-3.1.16, created on 2016-09-26 10:49:01
         compiled from "../consultas/view/listmoviplantronics.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2708322857e9517d487498-07125425%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ca181db9d5be0ca01b052d877544bd2dcfdf3c7' => 
    array (
      0 => '../consultas/view/listmoviplantronics.tpl',
      1 => 1474908215,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2708322857e9517d487498-07125425',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'NAV_MENU' => 0,
    'TIT_REPORTE' => 0,
    'CURRENT_DATE' => 0,
    'TIT_EXPORT' => 0,
    'LISTA_MOVI' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_57e9517d4fe6e8_42225480',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e9517d4fe6e8_42225480')) {function content_57e9517d4fe6e8_42225480($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['NAV_MENU']->value;?>

	<section id="main" >
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
                	<th style="text-align:left">Tienda</th>                        
                    <th style="text-align:left">Factura</th>
                  	<th style="text-align:left">Fecha</th>
                  	<th style="text-align:left">Id Cliente</th>                        
                  	<th style="text-align:left">Nombre</th>
                  	<th style="text-align:left">Codigo</th>
                  	<th style="text-align:left">Numero Parte</th>
                  	<th style="text-align:left">Descripcion</th>
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
						<td><?php echo $_smarty_tpl->tpl_vars['LISTA_MOVI']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['Tienda'];?>
</td>                  
						<td ><?php echo $_smarty_tpl->tpl_vars['LISTA_MOVI']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['numDocu'];?>
</td>
						<td ><?php echo $_smarty_tpl->tpl_vars['LISTA_MOVI']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['FechaFactura'];?>
</td>
						<td ><?php echo $_smarty_tpl->tpl_vars['LISTA_MOVI']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['idCliente'];?>
</td>
						<td ><?php echo $_smarty_tpl->tpl_vars['LISTA_MOVI']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['Cliente'];?>
</td>
						<td ><?php echo $_smarty_tpl->tpl_vars['LISTA_MOVI']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['codArti'];?>
</td>
						<td ><?php echo $_smarty_tpl->tpl_vars['LISTA_MOVI']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['NumParte'];?>
</td>
						<td ><?php echo $_smarty_tpl->tpl_vars['LISTA_MOVI']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['desArticulo'];?>
</td>
						<td style="text-align:right;"><?php echo $_smarty_tpl->tpl_vars['LISTA_MOVI']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['cantidad'];?>
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
