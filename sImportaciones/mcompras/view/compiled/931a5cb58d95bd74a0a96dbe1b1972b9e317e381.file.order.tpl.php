<?php /* Smarty version Smarty-3.1.16, created on 2016-03-14 08:09:18
         compiled from "../mcompras/view/order.tpl" */ ?>
<?php /*%%SmartyHeaderCode:653455021541c927b0c38c9-28081085%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '931a5cb58d95bd74a0a96dbe1b1972b9e317e381' => 
    array (
      0 => '../mcompras/view/order.tpl',
      1 => 1457810178,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '653455021541c927b0c38c9-28081085',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_541c927b2178d2_07708395',
  'variables' => 
  array (
    'ID_PEDIDO' => 0,
    'PED_HEADER' => 0,
    'PED_DETAIL' => 0,
    'TOTAL_PEDIDO' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541c927b2178d2_07708395')) {function content_541c927b2178d2_07708395($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include '/var/www/html/CRM-SATEC/resources/libs/smarty/libs/plugins/modifier.capitalize.php';
?><style type="text/css">
<!--
table { vertical-align: top; }
tr    { vertical-align: top; }
td    { vertical-align: top; }
-->
</style>
<page backcolor="#FEFEFE" backimg="./res/bas_page.png" backimgx="center" backimgy="bottom" backimgw="100%" backtop="40mm" backbottom="30mm" footer="date;heure;page" style="font-size: 12pt">
    <page_header>
    
    <table cellspacing="0" style="width: 97%;  font-size: 16px;">
        <tr>
            <td style="margin-left:15px; width: 50%;">
                <img  src="../../resources/img/logoPage.jpg" alt="Logo"><br>
            </td>
            <td style="width: 10%;">                        
            </td>
            <td style="width: 40%; color: #444444; text-align:right; padding:10px; border: solid 1px black;" valign="middle">                
             <!--    PEDIDO | ORDEN NO. 000000<?php echo $_smarty_tpl->tpl_vars['ID_PEDIDO']->value;?>
  -->
                <b>ORDER NO. | PEDIDO <?php echo $_smarty_tpl->tpl_vars['PED_HEADER']->value['numOrdenCompra'];?>
</b>
            </td>
        </tr>
    </table>
    <table cellspacing="0" style="width: 97%;  font-size: 10px;">
        <tr>
			<td style="text-align: right; width: 99%; padding:5px; padding-right:-19px;">page | página [[page_cu]]/[[page_nb]]</td> 
        </tr>
    </table>      
    <table cellspacing="0" style="margin-left:5px; width: 97%;  font-size: 12px;">
        <tr>
            <td style="width: 50%;">
                <table >
                    <tr>
                        <td><b>To/Para:</b></td>
                        <td><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['PED_HEADER']->value['nombreProveedor']);?>
</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td style="width:275px"><?php echo smarty_modifier_capitalize(mb_strtolower($_smarty_tpl->tpl_vars['PED_HEADER']->value['direccion'], 'UTF-8'));?>
</td>
                    </tr>
                    <tr>
                        <td><b>Pho/Tel:</b></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['PED_HEADER']->value['telefono'];?>
</td>
                    </tr>
                    <?php if ($_smarty_tpl->tpl_vars['PED_HEADER']->value['fax']!='') {?>
                    <tr>
                        <td><b>FAX:</b></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['PED_HEADER']->value['fax'];?>
</td>
                    </tr>
                    <?php }?>
                </table>
                  <br />                 
            </td>
            <td style="width: 50%; color: #444444;" valign="middle">                
                <table cellspacing="0" style="width: 100%;  font-size: 14px;  border: solid 1px black;">
                    <tr>
                        <td style="width: 50%;">
                            
                        </td>
                        <td style="width: 50%; color: #444444;" valign="middle">                
                            
                        </td>
                    </tr>
                </table>                   
            </td>
        </tr>
    </table> 
    </page_header>  
    <page_footer>
        <table style="margin-left:5px; width: 97%;">
            <tr>
            <!-- 
               Agosto 26, 14 William Jimenez
               El usuario no quiere poner en el pie de pagina, el numero de hoja, hay pasarlo para otro lado.
               Solo quiere una linea que divida.
                <td style="text-align: right; width: 100%; padding:5px; padding-right:-19px;">page | página [[page_cu]]/[[page_nb]]</td>
            -->
                <td style="width: 100%; color: #444444;" valign="middle">                
                	<table cellspacing="0" style="width: 100%;  font-size: 14px;  border: solid 1px black;">
                    	<tr>
                        	<td style="width: 50%;"> </td>
                        	<td style="width: 50%; color: #444444;" valign="middle"></td>
                    	</tr>
                	</table>                   
            	</td>
            </tr>
        </table>
    </page_footer>            
    
    <table cellspacing="0" style="margin-left:5px; width: 97%;  font-size: 14px;">
        <tr>
            <td style="width: 50%;">
                <table cellspacing="0" style="width: 100%;  font-size: 12px; ">                    
                    <tr>
                        <td>
                          <br>  <b>Instructions/Instrucciones:</b>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            
                        </td>
                    </tr>
                    <tr>
                        <td style="border: solid 1px black; width:95%; height:50px; padding:5px;">                           
                            <?php echo $_smarty_tpl->tpl_vars['PED_HEADER']->value['comentarios'];?>

                        </td>
                    </tr>
                </table>
            </td>
            <td style="width: 50%; color: #000;" valign="top">                
                <table cellspacing="0" style="width: 100%;  font-size: 12px; ">
                    <tr>
                        <td style="width: 40%;">
                            <b>Order Date/Fecha Pedido</b>
                        </td>
                        <td style="width: 10%;">
                            <b>:</b>
                        </td>
                        <td style="width: 50%; color: #333333;" valign="middle">                
                            <?php echo $_smarty_tpl->tpl_vars['PED_HEADER']->value['fecCreacion'];?>

                        </td>
                    </tr>
                    <tr>
                        <td colspan="3"> </td>
                    </tr>
                    <tr>
                        <td>
                            <b>Arriving Date/Fecha Arribo</b>
                        </td>
                        <td>
                            <b>:</b>
                        </td>
                        <td style="color: #333333;" valign="middle">                
                            <?php echo $_smarty_tpl->tpl_vars['PED_HEADER']->value['fecEmbarque'];?>

                        </td>
                    </tr>
                    <tr>
                        <td colspan="3"> </td>
                    </tr>                    
                    <tr>
                        <td>
                            <b>Terms/Forma de Pago</b>
                        </td>
                        <td>
                            <b>:</b>
                        </td>
                        <td style="color: #333333;" valign="middle">                
                            <?php echo smarty_modifier_capitalize(mb_strtolower($_smarty_tpl->tpl_vars['PED_HEADER']->value['descOpPago'], 'UTF-8'));?>

                        </td>
                    </tr>
                    <tr>
                        <td colspan="3"> </td>
                    </tr>                    
                    <tr>
                        <td>
                            <b>Partial Shipments/Embarques Parciales</b>
                        </td>
                        <td>
                            <b>:</b>
                        </td>
                        <td style="color: #333333;" valign="middle">                
                            <?php echo $_smarty_tpl->tpl_vars['PED_HEADER']->value['descaceptaParciales'];?>

                        </td>
                    </tr>
                    <tr>
                        <td colspan="3"> </td>
                    </tr>                    
                    <tr>
                        <td>
                            <b>Currency/Moneda</b>
                        </td>
                        <td>
                            <b>:</b>
                        </td>
                        <td style="color: #333333;" valign="middle">                
                            <?php echo smarty_modifier_capitalize(mb_strtolower($_smarty_tpl->tpl_vars['PED_HEADER']->value['descMoneda'], 'UTF-8'));?>

                        </td>
                    </tr>
                </table>                   
            </td>
        </tr>
    </table>
    <table cellspacing="0" style="margin-left:5px; width: 97%;  font-size: 12px; ">
        <tr>
            <td style="width:33.33%;">
                <table cellspacing="0" style="width: 100%;  font-size: 12px; ">                    
                    <tr>
                        <td>
                            <b>Shipping Marks/Marcas:</b>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            
                        </td>
                    </tr>
                    <tr>
                        <td style="border: solid 1px black; width:100%; height:15px; padding:5px;">                           
                            <?php echo $_smarty_tpl->tpl_vars['PED_HEADER']->value['marcas'];?>

                        </td>
                    </tr>
                </table>                
            </td>
            <td style="width:33.33%;">
                <table cellspacing="0" style="width: 100%;  font-size: 12px; ">                    
                    <tr>
                        <td>
                            <b>Packing/Empaque:</b>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            
                        </td>
                    </tr>
                    <tr>
                        <td style="border: solid 1px black; width:100%; height:15px; padding:5px;">                           
                            <?php echo $_smarty_tpl->tpl_vars['PED_HEADER']->value['empaque'];?>

                        </td>
                    </tr>
                </table>                  
            </td>
            <td style="width:33.33%;">
                <table cellspacing="0" style="width: 100%;  font-size: 12px; ">                    
                    <tr>
                        <td>
                            <b>Ship Via/Expedir por:</b>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            
                        </td>
                    </tr>
                    <tr>
                        <td style="border: solid 1px black; width:100%; height:15px; padding:5px;">                           
                            <?php echo $_smarty_tpl->tpl_vars['PED_HEADER']->value['viaenvio'];?>

                        </td>
                    </tr>
                </table>                  
            </td>
        </tr>
    </table>   
    <table cellspacing="0" style="margin-left:5px; width: 97%;  font-size: 12px; ">
        <tr>
            <td style="width:33.33%;">
                <table cellspacing="0" style="width: 100%;  font-size: 12px; ">                    
                    <tr>
                        <td>
                            <b>Shipping Address/Dir. Envío:</b>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            
                        </td>
                    </tr>
                    <tr>
                        <td style="border: solid 1px black; width:100%; height:28px; padding:5px;">                           
                            <?php echo $_smarty_tpl->tpl_vars['PED_HEADER']->value['LineaMer1'];?>
<br>
                            <?php echo $_smarty_tpl->tpl_vars['PED_HEADER']->value['LineaMer2'];?>
<br>
                            <?php echo $_smarty_tpl->tpl_vars['PED_HEADER']->value['LineaMer3'];?>

                        </td>
                    </tr>
                </table>                
            </td>
            <td style="width:33.33%;">
                <table cellspacing="0" style="width: 100%;  font-size: 12px; ">                    
                    <tr>
                        <td>
                            <b>Shipping Documents/Dir. Documentos:</b>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            
                        </td>
                    </tr>
                    <tr>
                        <td style="border: solid 1px black; width:100%; height:28px; padding:5px;">                           
                            <?php echo $_smarty_tpl->tpl_vars['PED_HEADER']->value['LineaDoc1'];?>
<br>
                            <?php echo $_smarty_tpl->tpl_vars['PED_HEADER']->value['LineaDoc2'];?>
<br>
                            <?php echo $_smarty_tpl->tpl_vars['PED_HEADER']->value['LineaDoc3'];?>

                        </td>
                    </tr>
                </table>                  
            </td>
            <td style="width:33.33%;">
                <table cellspacing="0" style="width: 100%;  font-size: 12px; ">                    
                    <tr>
                        <td>
                            <b>Credit Card/Tarjeta:</b>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            
                        </td>
                    </tr>
                    <tr>
                        <td style="border: solid 1px black; width:100%; height:28px; padding:5px;">                           
                            <?php echo $_smarty_tpl->tpl_vars['PED_HEADER']->value['LineaTar1'];?>
<br>
                            <?php echo $_smarty_tpl->tpl_vars['PED_HEADER']->value['LineaTar2'];?>
<br>
                            <?php echo $_smarty_tpl->tpl_vars['PED_HEADER']->value['LineaTar3'];?>

                        </td>
                    </tr>
                </table>                  
            </td>
        </tr>
    </table>   
    <br>
    <b style="margin-left:5px; font-size:12px;">Order Detail/Detalle de la Orden:</b>
    <br>
    <br>
    <table cellspacing="0" style="margin-left:5px; width: 97%; border: solid 1px black; background: #E7E7E7; text-align: center; font-size: 12px;">
        <tr>
            <th style="width: 12%;" rowspan="2" valign="middle">#Item</th>
            <th style="width: 52%;">Item/Artículo</th>
            <th style="width: 10%;" rowspan="2" valign="middle">Qty/Cant</th>            
            <th style="width: 13%; text-align: right;" rowspan="2" valign="middle">Unit/Unitario</th>
            <th style="width: 13%; text-align: right;" rowspan="2" valign="middle">Total</th>
        </tr>
        <tr>
           
            <th style="width: 52%">
                <table cellspacing="0" style="width: 100%; border: solid 1px black; background: #E7E7E7; text-align: center; font-size: 12px;">
                    <tr>
                        <th style="width: 26%; text-align: left;">Item ID/Codigo</th>
                        <th style="width: 50%;">Description/Descripción</th>                        
                        <th style="width: 24%; text-align: left;">Local ID</th>
                    </tr>                    
                </table>
            </th>
        </tr>
    </table>
    
    <table cellspacing="0" style="margin-left:5px; width: 97%; border: solid 1px black; background: #F7F7F7; text-align: center; font-size: 12px;">
        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['pd'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['pd']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pd']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['PED_DETAIL']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pd']['name'] = 'pd';
$_smarty_tpl->tpl_vars['smarty']->value['section']['pd']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pd']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pd']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pd']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pd']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pd']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['pd']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pd']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pd']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pd']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pd']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['pd']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pd']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pd']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['pd']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pd']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pd']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['pd']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['pd']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['pd']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['pd']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pd']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['pd']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pd']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pd']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pd']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['pd']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pd']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pd']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['pd']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pd']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['pd']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pd']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['pd']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['pd']['total']);
?>
        <tr>
            <td style="width: 12%;"><?php echo $_smarty_tpl->tpl_vars['PED_DETAIL']->value[$_smarty_tpl->getVariable('smarty')->value['section']['pd']['index']]['idLinea'];?>
</td>
            <td style="width: 52%;">
                <table cellspacing="0" style="width: 100%;text-align: center; font-size: 12px;">
                    <tr>
                        <td style="width: 26%;"><?php echo $_smarty_tpl->tpl_vars['PED_DETAIL']->value[$_smarty_tpl->getVariable('smarty')->value['section']['pd']['index']]['codArtiProveedor'];?>
</td>
                        <td style="text-align:left; width: 50%;"><?php echo $_smarty_tpl->tpl_vars['PED_DETAIL']->value[$_smarty_tpl->getVariable('smarty')->value['section']['pd']['index']]['descArti'];?>
</td>
                        <td style="width: 24%;"><?php echo $_smarty_tpl->tpl_vars['PED_DETAIL']->value[$_smarty_tpl->getVariable('smarty')->value['section']['pd']['index']]['codArti'];?>
</td>
                    </tr>                    
                </table>
            </td>
            <td style="width: 10%;"><?php echo $_smarty_tpl->tpl_vars['PED_DETAIL']->value[$_smarty_tpl->getVariable('smarty')->value['section']['pd']['index']]['cantidad'];?>
</td>
            <td style="width: 13%; text-align: right"><?php echo number_format($_smarty_tpl->tpl_vars['PED_DETAIL']->value[$_smarty_tpl->getVariable('smarty')->value['section']['pd']['index']]['costoUnitario'],2,".",",");?>
</td>
            <td style="width: 13%; text-align: right;"><?php echo number_format($_smarty_tpl->tpl_vars['PED_DETAIL']->value[$_smarty_tpl->getVariable('smarty')->value['section']['pd']['index']]['costoTotal'],2,".",",");?>
</td>
        </tr>
        <?php endfor; endif; ?>
    </table>    
    
    <table cellspacing="0" style="margin-left:5px; width: 97%; border: solid 1px black; background: #E7E7E7; text-align: center; font-size: 12px;">
        <tr>
            <th style="width: 87%; text-align: right;">Sub-Total : </th>
            <th style="width: 13%; text-align: right;"><?php echo number_format($_smarty_tpl->tpl_vars['PED_HEADER']->value['subtotal'],2,".",",");?>
</th>
        </tr>
        <tr>
            <th style="width: 87%; text-align: right;">Shipping Cost/Costos Envío : </th>
            <th style="width: 13%; text-align: right;"><?php echo number_format($_smarty_tpl->tpl_vars['PED_HEADER']->value['costoEnvio'],2,".",",");?>
</th>
        </tr>
        <tr>
            <th style="width: 87%; text-align: right;"><?php echo $_smarty_tpl->tpl_vars['PED_HEADER']->value['etiquetaOtrosCostos'];?>
 : </th>
            <th style="width: 13%; text-align: right;"><?php echo number_format($_smarty_tpl->tpl_vars['PED_HEADER']->value['otrosCostos'],2,".",",");?>
</th>
        </tr>
        <tr>
            <th style="width: 87%; text-align: right;">Total : </th>
            <th style="width: 13%; text-align: right;"><?php echo number_format($_smarty_tpl->tpl_vars['TOTAL_PEDIDO']->value,2,".",",");?>
</th>
        </tr>
    </table>

    <br>
    <b style="margin-left:45px; font-size:16px;">Saludos</b>
    <br>
    <br>
    <br>
    <br> 
    <b style="margin-left:45px; font-size:16px;">Francisco Arias B.</b>
    <br>                   
    <b style="margin-left:45px; font-size:16px;">Gerente General</b>
</page><?php }} ?>
