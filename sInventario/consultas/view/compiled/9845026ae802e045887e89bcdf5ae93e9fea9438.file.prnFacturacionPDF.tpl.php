<?php /* Smarty version Smarty-3.1.16, created on 2016-07-06 17:16:42
         compiled from "../consultas/view/prnFacturacionPDF.tpl" */ ?>
<?php /*%%SmartyHeaderCode:144375075157707a38c2b949-21171543%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9845026ae802e045887e89bcdf5ae93e9fea9438' => 
    array (
      0 => '../consultas/view/prnFacturacionPDF.tpl',
      1 => 1467846996,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '144375075157707a38c2b949-21171543',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_57707a38cff558_42697996',
  'variables' => 
  array (
    'DATOS_TIENDA' => 0,
    'FECHA_INICIAL' => 0,
    'FECHA_FINAL' => 0,
    'CURRENT_DATE' => 0,
    'LISTA_FACTURAS' => 0,
    'SOLO_TOTALES_FACTURAS' => 0,
    'LISTA_NOTAS' => 0,
    'TOTALES_NOTAS' => 0,
    'GRAN_TOTAL' => 0,
    'TOTALES_FACTURAS' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57707a38cff558_42697996')) {function content_57707a38cff558_42697996($_smarty_tpl) {?>
<page backcolor="#FEFEFE" backimgx="center" backimgy="bottom" backimgw="100%" backtop="20mm" backbottom="10mm" footer="date;heure;page" style="font-size: 12pt">
    <page_header>
        <table cellspacing="0" style="width: 100%; " >
        <tr>
            <td style="margin-left:15px; width: 50%;">
                <label>Tienda: <?php echo $_smarty_tpl->tpl_vars['DATOS_TIENDA']->value["NombreTienda"];?>
</label>
                <br>                                                                                        
                <label >Del: <?php echo $_smarty_tpl->tpl_vars['FECHA_INICIAL']->value;?>
 al <?php echo $_smarty_tpl->tpl_vars['FECHA_FINAL']->value;?>
</label> 
            </td>
            <td style="width: 10%;"></td>
            <td style="width: 40%; color: #444444; text-align:right;" valign="middle">                                      
                <b>REPORTE DE FACTURACION</b>
                <br>
                <label style="text-align: right; font-size: 60%" >Generado: <?php echo $_smarty_tpl->tpl_vars['CURRENT_DATE']->value;?>
</label>
                <br>
                <label style="text-align: right; font-size: 80%" >P&aacute;g: [[page_cu]]/[[page_nb]]</label>                
            </td>
        </tr>
        </table>
    </page_header>
    <page_footer>
        <table style="margin-left:5px; width: 100%;">
            <tr>
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
    <table cellspacing="7" style="margin-left:15px; width: 100%;font-size:12px;font-family: Arial, Courier, Serif">
		<tr>
            <td colspan="12" style="text-align:center;" >FACTURAS</td>
        </tr>
        <tr>
            <td colspan="1">#Factura</td>
            <td colspan="5" style="width: 15%;">F.Pago</td>
            <td style="text-align:right;">Exenta</td>
            <td style="text-align:right;">Gravada</td>
            <td style="text-align:right;">Descuento</td>
            <td style="text-align:right;">&#37;</td>
            <td style="text-align:right;">Imp.Ventas</td>
            <td style="text-align:right;">Total</td>
            
        </tr>
        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['name'] = 'lP';
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['LISTA_FACTURAS']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                <td colspan="1">
                    <?php echo $_smarty_tpl->tpl_vars['LISTA_FACTURAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['NumFactura'];?>

                </td>
                <td colspan="5">
                    <?php echo $_smarty_tpl->tpl_vars['LISTA_FACTURAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['descCorta'];?>

                </td>                                           
                <td style="text-align:right;">
                    <?php echo $_smarty_tpl->tpl_vars['LISTA_FACTURAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['EXENTA'];?>

                </td>
                <td style="text-align:right;">
                    <?php echo $_smarty_tpl->tpl_vars['LISTA_FACTURAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['GRAVADA'];?>

                </td>                                           
                <td style="text-align:right;">
                    <?php echo $_smarty_tpl->tpl_vars['LISTA_FACTURAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['DESCUENTO'];?>

                </td>                                           
                <td style="text-align:right;">
                    <?php echo $_smarty_tpl->tpl_vars['LISTA_FACTURAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['PORCEDESC'];?>

                </td>                                           
                <td style="text-align:right;">
                    <?php echo $_smarty_tpl->tpl_vars['LISTA_FACTURAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['IMPUESTO'];?>

                </td>                                           
                <td style="text-align:right;">
                    <?php echo $_smarty_tpl->tpl_vars['LISTA_FACTURAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['MONTO_TOTAL'];?>

                </td>                                                                               
           </tr> 
        <?php endfor; endif; ?>
        <!-- se agregan los totales de las facturas  -->
        <tr>
          <td colspan="6" style="text-align:right;">TOTAL DE FACTURAS</td>
          <td style="text-align:right;"><?php echo $_smarty_tpl->tpl_vars['SOLO_TOTALES_FACTURAS']->value[0]['EXENTA'];?>
</td>
          <td style="text-align:right;"><?php echo $_smarty_tpl->tpl_vars['SOLO_TOTALES_FACTURAS']->value[0]['GRAVADA'];?>
</td>
          <td style="text-align:right;"><?php echo $_smarty_tpl->tpl_vars['SOLO_TOTALES_FACTURAS']->value[0]['DESCUENTO'];?>
</td>
          <td colspan="1"></td>  <!-- columna porcentaje descuento -->
          <td style="text-align:right;"><b><?php echo $_smarty_tpl->tpl_vars['SOLO_TOTALES_FACTURAS']->value[0]['IMPUESTO'];?>
</b></td>
          <td style="text-align:right;"><b><?php echo $_smarty_tpl->tpl_vars['SOLO_TOTALES_FACTURAS']->value[0]['MONTO_TOTAL'];?>
</b></td>       
        </tr>
        <!-- se agregan las NOTAS DE CREDITO -->
        <tr>
            <td colspan="12" style="text-align:center;" >NOTAS</td>
       </tr>
       <tr>                                     
            <td>#Nota</td>
            <td>#Factura Aplica</td>
            <td colspan="8">Raz&oacute;n</td>                                       
            <td style="text-align:right;">Imp.Ventas</td>
            <td style="text-align:right;">Total</td>
       </tr>
       <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['name'] = 'lP';
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['LISTA_NOTAS']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
            <td>
                <?php echo $_smarty_tpl->tpl_vars['LISTA_NOTAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['NumNota'];?>

            </td>
            <td>
                <?php echo $_smarty_tpl->tpl_vars['LISTA_NOTAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['DocAplica'];?>

            </td>
            <td colspan="8">
                <?php echo $_smarty_tpl->tpl_vars['LISTA_NOTAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['razonNota'];?>

            </td>
            <td style="text-align:right;">
                <?php echo $_smarty_tpl->tpl_vars['LISTA_NOTAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['IMPUESTO'];?>

            </td>                                           
            <td style="text-align:right;">
                <?php echo $_smarty_tpl->tpl_vars['LISTA_NOTAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['MONTO_TOTAL'];?>

            </td>                                                                                   
        </tr> 
       <?php endfor; endif; ?>
       <tr>
        <td colspan="10" style="text-align:right;">TOTAL</td>
        <td style="text-align:right;">
            <b><?php echo $_smarty_tpl->tpl_vars['TOTALES_NOTAS']->value[0]['IMPUESTO'];?>
</b>
        </td>                                       
        <td style="text-align:right;">
            <b><?php echo $_smarty_tpl->tpl_vars['TOTALES_NOTAS']->value[0]['MONTO_TOTAL'];?>
</b>
        </td>                                                                                                                   
      </tr>
      <tr>
        <td colspan="11" style="text-align:right;"><b>TOTAL FINAL</b></td>                                                                      
        <td style="text-align:right;">
            <b><?php echo $_smarty_tpl->tpl_vars['GRAN_TOTAL']->value;?>
</b>
        </td>                                                                                                                   
      </tr>
      <tr>
        <td colspan="12" style="text-align:center;" >TOTALES X FORMA DE PAGO</td>
      </tr>
      <tr>                                      
        <td colspan="11" style="text-align:left;">Forma de Pago</td>
        <td style="text-align:right;">Total</td>
      </tr>
      <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['lPt'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['lPt']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lPt']['name'] = 'lPt';
$_smarty_tpl->tpl_vars['smarty']->value['section']['lPt']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['TOTALES_FACTURAS']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lPt']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['lPt']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lPt']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lPt']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['lPt']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lPt']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['lPt']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['lPt']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['lPt']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lPt']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['lPt']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['lPt']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['lPt']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['lPt']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['lPt']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lPt']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['lPt']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['lPt']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['lPt']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['lPt']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['lPt']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['lPt']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['lPt']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lPt']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lPt']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lPt']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['lPt']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lPt']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lPt']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['lPt']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lPt']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['lPt']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lPt']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['lPt']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['lPt']['total']);
?>
        <tr> 
            <td colspan="11">
                <?php echo $_smarty_tpl->tpl_vars['TOTALES_FACTURAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lPt']['index']]['descCorta'];?>

            </td>
            <td style="text-align:right;">
                <?php echo $_smarty_tpl->tpl_vars['TOTALES_FACTURAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lPt']['index']]['MONTO_TOTAL'];?>

            </td>
        </tr>
      <?php endfor; endif; ?>        
    </table>        
</page>
<?php }} ?>
