<?php /* Smarty version Smarty-3.1.16, created on 2016-10-10 21:30:33
         compiled from "../facturacioncxc/view/imp-factura.tpl" */ ?>
<?php /*%%SmartyHeaderCode:92749604257f32d1eb61294-79421043%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '121814fa7e23daa55fced73bce9a7121b65f6615' => 
    array (
      0 => '../facturacioncxc/view/imp-factura.tpl',
      1 => 1476156631,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '92749604257f32d1eb61294-79421043',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_57f32d1ebdbca8_68691054',
  'variables' => 
  array (
    'NAV_MENU' => 0,
    'ENC_FACTURA' => 0,
    'LISTA_DETFACARTI' => 0,
    'INFO_MODOGOB' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f32d1ebdbca8_68691054')) {function content_57f32d1ebdbca8_68691054($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['NAV_MENU']->value;?>

     <form class="form-horizontal" id='impForm'  >
    	<div id="imprimir" style="width:250px; margin: 15px 0;">
			<a href="javascript:;" onclick="printReport()" >Imprimir</a> 
		</div>               
        <div class="container-fluid" style="font-family: monospace; font-size:50%">
            <div class="row-fluid">
                      
                    <div class="box-content">
                        <table border="1" cellspacing="0" cellpadding="0">
								<tr>
									<td># Factura: <?php echo $_smarty_tpl->tpl_vars['ENC_FACTURA']->value[0]["numFactura"];?>
</td>									                                    
                                    <td width="110" align="right" style="height: 25px;">X</td>                                   
                                </tr>                          
								<tr>
									<td></td>									                                    
                                    <td  align="right" style="height: 25px;"><?php echo $_smarty_tpl->tpl_vars['ENC_FACTURA']->value[0]["fecFactura"];?>
</td>                                   
                                </tr>                                     
                                <tr>
                                    <td  width="510" align="left" style="height: 25px;">Senores: <?php echo $_smarty_tpl->tpl_vars['ENC_FACTURA']->value[0]["idCliente"];?>
 </td>                                                  
                                </tr> 
                                <tr>
                                    <td  align="left" style="height: 25px;">Direccion: <?php echo $_smarty_tpl->tpl_vars['ENC_FACTURA']->value[0]["idCliente"];?>
 </td>                                                  
                                </tr>                                                            
                        </table>
                    </div>                    
                    
                </div>
        
            
            <div class="row-fluid">			
            
                    <div class="box-content">
                        <table border="1" cellspacing="0" cellpadding="0" >
                            <thead>
                                <tr style="border-bottom: solid thin #000;">
                                    <th width="40"  align="left">Codigo</th>
                                    <th width="40"  align="right">Cant</th>
                                    <th width="470" align="left">Descripcion</th>
                                    <th width="40"  align="right">Des </th>
                                    <th width="40"  align="right">Precio</th>
                                    <th width="40"  align="right">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['d'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['d']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['name'] = 'd';
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['LISTA_DETFACARTI']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['total']);
?>
                                <tr>
                                    <td align="left" style="height: 25px" ><?php echo $_smarty_tpl->tpl_vars['LISTA_DETFACARTI']->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['codArti'];?>
</td>
                                    <td align="right"><?php echo $_smarty_tpl->tpl_vars['LISTA_DETFACARTI']->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['cantidad'];?>
</td>
                                    <td align="left"><?php echo $_smarty_tpl->tpl_vars['LISTA_DETFACARTI']->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['desArticulo'];?>
</td>
                                    <td align="right"><?php if ($_smarty_tpl->tpl_vars['LISTA_DETFACARTI']->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['PorceDesc']!='') {?><?php echo $_smarty_tpl->tpl_vars['LISTA_DETFACARTI']->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['PorceDesc'];?>
<?php } else { ?>0<?php }?>%</td>
                                    <td align="right"><?php echo $_smarty_tpl->tpl_vars['LISTA_DETFACARTI']->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['PrecioVenta'];?>
</td>                                    
                                    <td align="right"><?php echo $_smarty_tpl->tpl_vars['LISTA_DETFACARTI']->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['PrecioTotal'];?>
</td>
                                </tr>                                                             
                                <?php endfor; endif; ?>
                            </tbody>
                            <!-- INICIA LINEAS DEL GOBIERNO -->
                            <tr>
                            	<td colspan="3" align="left">
                            	  POS. PRESUPUESTARIA: <?php echo $_smarty_tpl->tpl_vars['INFO_MODOGOB']->value[0]["posPresupuestaria"];?>

                            	</td>                            	
                            </tr>
                            <tr>
                            	<td colspan="3" align="left">
                            	  FONDO: <?php echo $_smarty_tpl->tpl_vars['INFO_MODOGOB']->value[0]["fondo"];?>

                            	</td>                            	
                            </tr>
                            <tr>
                            	<td colspan="3" align="left">
                            	  AREA FUNCIONAL: <?php echo $_smarty_tpl->tpl_vars['INFO_MODOGOB']->value[0]["areaFuncional"];?>

                            	</td>                            	
                            </tr>
                            <tr>
                            	<td colspan="3" align="left">
                            	  N.SOLICITUD PEDIDO: <?php echo $_smarty_tpl->tpl_vars['INFO_MODOGOB']->value[0]["solPedido"];?>

                            	</td>                            	
                            </tr>
                            <tr>
                            	<td colspan="3" align="left">
                            	  TRAMITE DE COMPRA: <?php echo $_smarty_tpl->tpl_vars['INFO_MODOGOB']->value[0]["tramiteCompra"];?>

                            	</td>                            	
                            </tr>
                            <tr>
                            	<td colspan="3" align="left">
                            	  CUENTA CLIENTE: <?php echo $_smarty_tpl->tpl_vars['INFO_MODOGOB']->value[0]["ctaCliente"];?>

                            	</td>  
                            	<td align="right">Total</td>
                            	<td colspan="2" align="right"><?php echo $_smarty_tpl->tpl_vars['ENC_FACTURA']->value[0]["subTotal"];?>
</td>                          	
                            </tr>
                            <!-- FIN LINEAS DEL GOBIERNO -->
                            <!-- LINEA DE OBSERVACIONES -->
                            <tr>
                            	<td colspan="3" align="left">
                            	  <?php echo $_smarty_tpl->tpl_vars['ENC_FACTURA']->value[0]["obs"];?>

                            	</td> 
                            	<td align="right">Descuento</td>
                            	<td colspan="2" align="right"><?php echo $_smarty_tpl->tpl_vars['ENC_FACTURA']->value[0]["descuento"];?>
</td>                            	
                            </tr>
                            <!-- FIN LINEA DE OBSERVACIONES -->
                            <tr>
                           		<td colspan="2" align="right">
                            	  30
                            	</td>
                            	<td colspan="2" align="right">
                            	  Total Venta:
                            	</td>
                            	<td colspan="2" align="right">
                            	  <?php echo $_smarty_tpl->tpl_vars['ENC_FACTURA']->value[0]["subTotal"];?>

                            	</td>
                            </tr>
                            <tr>
                            	<td colspan="4" align="right">
                            	  Impuesto:
                            	</td>
                            	<td colspan="2" align="right">
                            	  <?php echo $_smarty_tpl->tpl_vars['ENC_FACTURA']->value[0]["impuesto"];?>

                            	</td>                            
                            </tr>  
                            <tr>
                            	<td colspan="4" align="right">
                            	  Total a Pagar:
                            	</td>
                            	<td colspan="2" align="right">
                            	  <?php echo $_smarty_tpl->tpl_vars['ENC_FACTURA']->value[0]["Total"];?>

                            	</td>                            
                            </tr>                                                                  
                        </table>
                    </div>
               
            </div>        
        </div> <!-- containger -->
   </form>


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
