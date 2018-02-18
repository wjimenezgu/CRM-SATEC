<?php /* Smarty version Smarty-3.1.16, created on 2017-10-28 11:28:57
         compiled from "../consultas/view/listitemsexistencias.tpl" */ ?>
<?php /*%%SmartyHeaderCode:164002619257e754d20db276-52440365%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75d11e52b3e50f1db119a7374dfa23651960d46e' => 
    array (
      0 => '../consultas/view/listitemsexistencias.tpl',
      1 => 1509211731,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '164002619257e754d20db276-52440365',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_57e754d21353e9_83253326',
  'variables' => 
  array (
    'NAV_MENU' => 0,
    'NOMBRE_TIENDA' => 0,
    'TIT_REPORTE' => 0,
    'CURRENT_DATE' => 0,
    'TIT_EXPORT' => 0,
    'LISTA_EXISTENCIAS' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e754d21353e9_83253326')) {function content_57e754d21353e9_83253326($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['NAV_MENU']->value;?>

	<section id="main" >
		<h2 style="font-family:'Courier New', Courier, serif;">TIENDA: <?php echo $_smarty_tpl->tpl_vars['NOMBRE_TIENDA']->value;?>
</h2>
		<h2 style="font-family:'Courier New', Courier, serif;"><?php echo $_smarty_tpl->tpl_vars['TIT_REPORTE']->value;?>
</h2>
	    Generado el: <?php echo $_smarty_tpl->tpl_vars['CURRENT_DATE']->value;?>

		<form name="export" id="export" method="post" action="reports_export_excel.php" target="_blank">
			<input type="hidden" id="cual" name="cual" value="<?php echo $_smarty_tpl->tpl_vars['TIT_EXPORT']->value;?>
" />
			<input type="hidden" id="cualEnc" name="cualEnc" value="<?php echo $_smarty_tpl->tpl_vars['TIT_REPORTE']->value;?>
" />
			<input type="hidden" id="cualTienda" name="cualTienda" value="<?php echo $_smarty_tpl->tpl_vars['NOMBRE_TIENDA']->value;?>
" />
			<input type="hidden" id="dataExcel" name="dataExcel" />
		</form>           	                                
		<div id="imprimir" style="width:250px; margin: 15px 0;">
			<a href="javascript:;" onclick="printReport()" >Imprimir</a> | <a href="javascript:;" onclick="exportExcel()">Exportar Excel</a> 
		</div>               
        <table id="tblItemsList"  class="widefat" style="width: 100%;font-family:'Courier New', Courier, serif;">   
        	<thead>
            	<tr>
                	<th style="text-align:left">Codigo</th>                        
                    <th style="text-align:left">C&oacute;digo Provee.</th>
                  	<th style="text-align:left">Descripci&oacute;n</th>
                  	<th style="text-align:right">Costo Articulo</th>
                  	<th style="text-align:right">Existencia</th>                        
                </tr>
            </thead>
			<tbody id="info-items" >
				<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['name'] = 'lP';
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['LISTA_EXISTENCIAS']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
					<tr style="padding:0px; id="tr<?php echo $_smarty_tpl->tpl_vars['LISTA_EXISTENCIAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['CodArti'];?>
"> 
						<td><?php echo $_smarty_tpl->tpl_vars['LISTA_EXISTENCIAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['CodArti'];?>
</td>                  
						<td ><?php echo $_smarty_tpl->tpl_vars['LISTA_EXISTENCIAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['codArtiProveedor'];?>
</td>								                                                        
						<td style="text-align:left;" ><?php echo $_smarty_tpl->tpl_vars['LISTA_EXISTENCIAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['desArticulo'];?>
</td>
						<td style="text-align:right;"><?php echo $_smarty_tpl->tpl_vars['LISTA_EXISTENCIAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['CostoArti'];?>
</td>
						<td style="text-align:right;"><?php echo $_smarty_tpl->tpl_vars['LISTA_EXISTENCIAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['ExistenciaTienda'];?>
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
