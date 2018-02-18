<?php /* Smarty version Smarty-3.1.16, created on 2017-07-24 19:31:08
         compiled from "../comprasnac/view/prnBoletaBodegaNac.tpl" */ ?>
<?php /*%%SmartyHeaderCode:155077884859716ff3f1bdd2-54222917%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '465a76c4b6899f45cb80e16fb58fa09a961367e2' => 
    array (
      0 => '../comprasnac/view/prnBoletaBodegaNac.tpl',
      1 => 1500946253,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '155077884859716ff3f1bdd2-54222917',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_59716ff401f338_63753139',
  'variables' => 
  array (
    'NAV_MENU' => 0,
    'TIT_REPORTE' => 0,
    'LIST_ITEMS_ORDERS' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59716ff401f338_63753139')) {function content_59716ff401f338_63753139($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['NAV_MENU']->value;?>

	<section id="main" >
	<br>  
	<h1 style="font-family:'Courier New', Courier, serif;"><?php echo $_smarty_tpl->tpl_vars['TIT_REPORTE']->value;?>
</h1>
		<div id="imprimir" style="width:250px; margin: 15px 0;">
			<a href="javascript:;" onclick="printReport()" >Imprimir </a>
		</div> 
            <h2 style='text-align:  center;'>Número de Orden:<?php echo $_smarty_tpl->tpl_vars['LIST_ITEMS_ORDERS']->value[0]['numOrdenCompra'];?>
</h2>	
	
        <table id="tblItemsList" class="table-reportes" style="font-family:'Arial', Courier, serif;">   
        	<thead>
            	<tr>
                	<th style="text-align:left;padding-left:5px;">Codigo</th>
                	<th style="text-align:left;padding-left:5px;">Externo</th>                                        	
                    <th style="width:450px;text-align:left;padding-left:5px;">Descripcion</th>
                    <th style="text-align:right;padding-left:5px;width:100px;">Ingresada</th>
                    <th style="text-align:right;padding-left:5px;width:100px;">En Bodega</th>
                    <th style="text-align:right;padding-left:5px;width:100px;">En Despacho</th>                    
                </tr>
            </thead>
			<tbody id="info-items" >
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
					<tr> 
						<td style="text-align:left;padding-left:5px;"><?php echo $_smarty_tpl->tpl_vars['LIST_ITEMS_ORDERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['codArti'];?>
</td>
						<td style="padding-left:5px"><?php echo $_smarty_tpl->tpl_vars['LIST_ITEMS_ORDERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['codArtiProveedor'];?>
</td>  
						<td style="text-align:left;"><?php echo $_smarty_tpl->tpl_vars['LIST_ITEMS_ORDERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['desArticulo'];?>
</td>
						<td style="text-align:right;"><?php echo $_smarty_tpl->tpl_vars['LIST_ITEMS_ORDERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['cantidad'];?>
</td>
						<td style="width:75px;"></td>
						<td style="width:75px;"></td>
					</tr> 
				<?php endfor; endif; ?>                                            
            </tbody>
        </table>

</section>

<script type="text/javascript">

$(document).ready(function(){

});


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
