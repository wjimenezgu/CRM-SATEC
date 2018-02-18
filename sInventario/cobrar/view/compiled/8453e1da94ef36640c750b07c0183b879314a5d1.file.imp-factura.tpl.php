<?php /* Smarty version Smarty-3.1.16, created on 2016-02-08 17:21:20
         compiled from "../cobrar/view/imp-factura.tpl" */ ?>
<?php /*%%SmartyHeaderCode:100325362756b236c417be08-65738445%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8453e1da94ef36640c750b07c0183b879314a5d1' => 
    array (
      0 => '../cobrar/view/imp-factura.tpl',
      1 => 1454973629,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '100325362756b236c417be08-65738445',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_56b236c42628f0_92985095',
  'variables' => 
  array (
    'DATOS_TIENDA' => 0,
    'HEAD_FACTURA' => 0,
    'DETAIL_FACTURA' => 0,
    'TIRA_REIMPRE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56b236c42628f0_92985095')) {function content_56b236c42628f0_92985095($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en" >
    <head>

        <link rel="shortcut icon" href="http://localhost/CRM-SATEC/resources/img/favicon.ico">

        <meta charset="UTF-8">
        <title>CRM | Satec SA</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
        <meta name="author" content="Estrategias con Tecnología JL S.A.">

        <link href="http://localhost/CRM-SATEC/resources/css/bootstrap-classic.css" rel="stylesheet">	

        <link href="http://localhost/CRM-SATEC/resources/css/_aditional.css" rel="stylesheet">
        <link href="http://localhost/CRM-SATEC/resources/css/bootstrap-responsive.css" rel="stylesheet">	
        <link href="http://localhost/CRM-SATEC/resources/css/charisma-app.css" rel="stylesheet">

    </head>

    <body>            
        <div class="container-fluid" style="font-family: monospace; font-size:50%">
            
            <div class="row-fluid">
                <div class="span3">
                  
                    <p class="center"><?php echo $_smarty_tpl->tpl_vars['DATOS_TIENDA']->value["NombreCia"];?>
></p>
                    <p class="center"><?php echo $_smarty_tpl->tpl_vars['DATOS_TIENDA']->value["NombreTienda"];?>
</p>
                    <p class="center"><?php echo $_smarty_tpl->tpl_vars['DATOS_TIENDA']->value["CedulaJuridica"];?>
</p>
                    <p class="center"><?php echo $_smarty_tpl->tpl_vars['DATOS_TIENDA']->value["Direccion"];?>
</p>
                    <p class="center"><?php echo $_smarty_tpl->tpl_vars['DATOS_TIENDA']->value["Ubicacion"];?>
</p>
                    <p class="center"><?php echo $_smarty_tpl->tpl_vars['DATOS_TIENDA']->value["Telefonos"];?>
</p>                    
                    <p class="center"><?php echo $_smarty_tpl->tpl_vars['DATOS_TIENDA']->value["CorreoContacto"];?>
</p>                           
                    
                </div>
            </div>
            <div class="row-fluid">
                <div class="span3">
                  
                    <div class="box-content">
                    <table border="0" cellspacing="0" cellpadding="0" width="410">
                    <tr>
                        <td colspan="5" style="height: 1px; border-bottom: dashed thin #000;"></td>
                    </tr> 
                    <tr>
                        <td colspan="5" style="height: 1px; border-bottom: dashed thin #000;"></td>
                    </tr> 
                    </table>
                    </div>
                    
                </div>
            </div>
            <div class="row-fluid">
                <div class="span3">
                  
                    <div class="box-content">
                        <table border="0" cellspacing="0" cellpadding="0" width="410">
                                <tr>
                                    <td width="205" align="left"># Factura: <?php echo $_smarty_tpl->tpl_vars['HEAD_FACTURA']->value["numDocu"];?>
</td>
                                    <td width="205" align="right" style="height: 25px;">Fecha: 25 / 08 / 2015, 11:20 AM</td>                                   
                                </tr>                                
                                <tr>
                                    <td colspan="2" align="left" style="height: 25px;">Cliente: <?php echo $_smarty_tpl->tpl_vars['HEAD_FACTURA']->value["nombre"];?>
 </td>                                                  
                                </tr>                                
                                <tr>
                                    <td colspan="2" align="left" style="height: 25px;">Vendedor: <?php echo $_smarty_tpl->tpl_vars['HEAD_FACTURA']->value["nombreVendedor"];?>
</td>                                                  
                                </tr>                                
                                <tr>
                                    <td colspan="2" align="left" style="height: 25px;">Forma Pago: <?php echo $_smarty_tpl->tpl_vars['HEAD_FACTURA']->value["formaPago"];?>
</td>                                                  
                                </tr>                                

                        </table>
                    </div>                    
                    
                </div>
            </div>
            
            <div class="row-fluid">			
                <div class="span3">
                    <div class="box-content">
                    <table border="0" cellspacing="0" cellpadding="0" width="410">
                    <tr>
                        <td colspan="5" style="height: 1px; border-bottom: dashed thin #000;"></td>
                    </tr> 
                    <tr>
                        <td colspan="5" style="height: 1px; border-bottom: dashed thin #000;"></td>
                    </tr> 
                    </table>
                    </div>
                    <div class="box-content">
                        <table border="0" cellspacing="0" cellpadding="0" width="410">
                            <thead>
                                <tr style="border-bottom: solid thin #000;">
                                    <th width="110" align="left">Codigo</th>
                                    <th width="40"  align="right">Cant</th>
                                    <th width="110" align="right">Precio</th>
                                    <th width="40"  align="right">Des </th>
                                    <th width="110" align="right">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['d'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['d']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['name'] = 'd';
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['DETAIL_FACTURA']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                                    <td width="110" align="left" style="height: 25px" ><?php echo $_smarty_tpl->tpl_vars['DETAIL_FACTURA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['codArti'];?>
</td>
                                    <td width="40" align="right"><?php echo $_smarty_tpl->tpl_vars['DETAIL_FACTURA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['cantidad'];?>
</td>
                                    <td width="110" align="right"><?php echo $_smarty_tpl->tpl_vars['DETAIL_FACTURA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['PrecioVenta'];?>
</td>
                                    <td width="40" align="right"><?php if ($_smarty_tpl->tpl_vars['DETAIL_FACTURA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['PorceDesc']!='') {?><?php echo $_smarty_tpl->tpl_vars['DETAIL_FACTURA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['PorceDesc'];?>
<?php } else { ?>0<?php }?>%</td>
                                    <td width="110" align="right"><?php echo $_smarty_tpl->tpl_vars['DETAIL_FACTURA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['PrecioTotal'];?>
</td>
                                </tr>                                
                                <tr>
                                    <td colspan="5"><?php echo $_smarty_tpl->tpl_vars['DETAIL_FACTURA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['desArticulo'];?>
</td>
                                </tr>                                                             
                                <tr>
                                    <td colspan="5" style="height: 1px; border-bottom: dashed thin #000;"></td>
                                </tr>                                
                                <?php endfor; endif; ?>
                            </tbody>
                            <tr>
                            	<td colspan="3" align="right">
                            	  Sub Total:
                            	</td>
                            	<td colspan="2" align="right">
                            	  <?php echo $_smarty_tpl->tpl_vars['HEAD_FACTURA']->value["subTotal"];?>

                            	</td>
                            </tr>
                            <tr>
                            	<td colspan="3" align="right">
                            	  Descuento:
                            	</td>
                            	<td colspan="2" align="right">
                            	  <?php echo $_smarty_tpl->tpl_vars['HEAD_FACTURA']->value["descuento"];?>

                            	</td>                            
                            </tr>
                            <tr>
                            	<td colspan="3" align="right">
                            	  Impuesto:
                            	</td>
                            	<td colspan="2" align="right">
                            	  <?php echo $_smarty_tpl->tpl_vars['HEAD_FACTURA']->value["impuesto"];?>

                            	</td>                            
                            </tr>  
                            <tr>
                            	<td colspan="3" align="right">
                            	  Total:
                            	</td>
                            	<td colspan="2" align="right">
                            	  <?php echo $_smarty_tpl->tpl_vars['HEAD_FACTURA']->value["Total"];?>

                            	</td>                            
                            </tr>                                                                  
                        </table>
                    </div>
                </div> 
            </div>
            <div class="row-fluid">
                <div class="span3">
                  
                    <div class="box-content">
                    <table border="0" cellspacing="0" cellpadding="0" width="410">
                    <tr>
                        <td colspan="5" style="height: 1px; border-bottom: dashed thin #000;"></td>
                    </tr> 
                    <tr>
                        <td colspan="5" style="height: 1px; border-bottom: dashed thin #000;"></td>
                    </tr> 
                    <tr>
                        <td colspan="5">
                            &nbsp;
                        </td>
                    </tr>
                    <tr>
                        <td colspan="5" align="center">
                            <?php echo $_smarty_tpl->tpl_vars['DATOS_TIENDA']->value["LeyendaTributacion"];?>

                        </td>
                    </tr>
                    <tr>
                        <td colspan="5" align="center">
                            <?php echo $_smarty_tpl->tpl_vars['TIRA_REIMPRE']->value;?>

                        </td>
                    </tr>  
                    </table>
                    </div>
                    
                </div>
            </div>            
        </div>
    </body>
</html><?php }} ?>
