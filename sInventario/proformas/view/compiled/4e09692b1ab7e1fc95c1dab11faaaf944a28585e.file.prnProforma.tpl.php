<?php /* Smarty version Smarty-3.1.16, created on 2016-04-15 15:13:16
         compiled from "../proformas/view/prnProforma.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1437023804561ebaaf162487-97140227%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e09692b1ab7e1fc95c1dab11faaaf944a28585e' => 
    array (
      0 => '../proformas/view/prnProforma.tpl',
      1 => 1457810181,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1437023804561ebaaf162487-97140227',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_561ebaaf1b15c2_02848263',
  'variables' => 
  array (
    'DATOS_TIENDA' => 0,
    'ENC_PROFORMA' => 0,
    'CURRENT_DATE' => 0,
    'DET_PROFORMA' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561ebaaf1b15c2_02848263')) {function content_561ebaaf1b15c2_02848263($_smarty_tpl) {?>        <form class="form-horizontal" id='frmProforma'>
          	         	
          	<div class='row-fluid'>
          		<table cellspacing="0" style="width: 30%;  font-size: 11px;">
			        <tr>
			            <td style="margin-left:15px; width: 50%;text-align:center;">
			            	<?php echo $_smarty_tpl->tpl_vars['DATOS_TIENDA']->value[0]['NombreCia'];?>
<br>
			                <?php echo $_smarty_tpl->tpl_vars['DATOS_TIENDA']->value[0]['NombreTienda'];?>
<br>
			                <?php echo $_smarty_tpl->tpl_vars['DATOS_TIENDA']->value[0]['Telefonos'];?>
<br>
			                <?php echo $_smarty_tpl->tpl_vars['DATOS_TIENDA']->value[0]['Direccion'];?>
<br>
			                <?php echo $_smarty_tpl->tpl_vars['DATOS_TIENDA']->value[0]['Ubicacion'];?>
<br>
			                <?php echo $_smarty_tpl->tpl_vars['DATOS_TIENDA']->value[0]['CedulaJuridica'];?>

			            </td>
			            <td style="width: 10%;">                        
			            </td>
			            <td style="width: 40%; color: #444444; text-align:right; padding:5px;" valign="middle">                			            
			                <b>PROFORMA NO. | <?php echo $_smarty_tpl->tpl_vars['ENC_PROFORMA']->value[0]['idProforma'];?>
</b>
			                </br>
			                <label style="text-align: right; font-size: 60%" >Impreso: <?php echo $_smarty_tpl->tpl_vars['CURRENT_DATE']->value;?>
</label>
			            </td>
			        </tr>
			    </table>
          		
          		
          	</div>
        	<div  class="box-content" >								
                  <div class='row-fluid'>
					<table border="1" style="width: 30%;"> 
					   <tbody>
						<tr>
							<td height="35%">                       	
                            <div id="boxSenores">
								<label style="font-size: 90%" >Señores: <?php echo $_smarty_tpl->tpl_vars['ENC_PROFORMA']->value[0]['nombre'];?>
</label>
							</div>
							</td>
							<td height="35%">
							<div  id="boxTelefonos">
								<label style="font-size: 90%">Teléfonos: <?php echo $_smarty_tpl->tpl_vars['ENC_PROFORMA']->value[0]['Telefono'];?>
</label>
							</div>
							</td>
						</tr>
						<tr> 
							<td colspan="2">                                                      
                            <divid="boxContacto">
								<label style="font-size: 90%" >Atención: <?php echo $_smarty_tpl->tpl_vars['ENC_PROFORMA']->value[0]['nombreContacto'];?>
</label> 
                            </div>
                            </td>
                                                    
                        </tr>
                        <tr>
                          <td colspan="2">                                                      
                            <div  id="boxDireccion">
								<label style="font-size: 90%" >Dirección: <?php echo $_smarty_tpl->tpl_vars['ENC_PROFORMA']->value[0]['direccion'];?>
</label> 
                            </div>
                            </td> 
                        </tr>
				 		</tbody>
				 	</table>	
				 	</div>
					
				  <div  class="box-content">
                  <div class='row-fluid'>
					<table border="1" style="width: 30%;margin-left:-10px;"> 
        	<thead>
        	
            	<tr>
            	
                	<th style='width: 10px;'>Cant.</th>
                	<th style='width:500px;'>Descripción</th>
                    <th style='width:100px;'>Unitario</th>
                    <th style='width:100px;'>Total</th>
                    
                </tr>
                
            </thead>
             <tbody id="tbod" name="tbod">
             	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['name'] = 'lP';
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['DET_PROFORMA']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
             			<td><?php echo $_smarty_tpl->tpl_vars['DET_PROFORMA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['cantidad'];?>
</td>
             			<td><?php echo $_smarty_tpl->tpl_vars['DET_PROFORMA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['desArticulo'];?>
</td>
             			<td style="text-align: right;"><?php echo $_smarty_tpl->tpl_vars['DET_PROFORMA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['PrecioVenta'];?>
</td>
             			<td style="text-align: right;"><?php echo $_smarty_tpl->tpl_vars['DET_PROFORMA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['PrecioTotal'];?>
</td>
             		</tr>
             	<?php endfor; endif; ?>
             	<tr>
             		<td colspan="3" style="text-align: right;">Sub Total</td>
             		<td style="text-align: right;"><?php echo $_smarty_tpl->tpl_vars['ENC_PROFORMA']->value[0]['subTotal'];?>
</td>
             	</tr>
             	<tr>
             		<td colspan="3" style="text-align: right;">Descuento <?php echo $_smarty_tpl->tpl_vars['ENC_PROFORMA']->value[0]['porceDescuento'];?>
%</td>
             		<td style="text-align: right;"><?php echo $_smarty_tpl->tpl_vars['ENC_PROFORMA']->value[0]['descuento'];?>
</td>
             	</tr>
             	<tr>
             		<td colspan="3" style="text-align: right;">Imp. Venta</td>
             		<td style="text-align: right;"><?php echo $_smarty_tpl->tpl_vars['ENC_PROFORMA']->value[0]['impuesto'];?>
</td>
             	</tr>
             	<tr>
             		<td colspan="3" style="text-align: right;">Total</td>
             		<td style="text-align: right;"><?php echo $_smarty_tpl->tpl_vars['ENC_PROFORMA']->value[0]['Total'];?>
</td>
             	</tr>
             	
             </tbody>
             </table>
             </div>
             </div>
				 	
        			<div  class="box-content">								
                  <div class='row-fluid'>
					<table border="1" style="width: 30%;margin-left:-10px;"> 
					   <tbody>
					        <tr>
							<td>	
								<label>CONDICIONES</label>
								<ol style="font-size: 9px;margin-top:-10px;">
								<li>PRECIOS: Firmes y definitivos, unitarios y totales.</li>
								<li>VALIDEZ DE LA OFERTA: 30 días naturales.</li>
								<li>TIEMPO DE ENTREGA: 20 días hábiles.</li>
								<li>FORMA DE PAGO: Contado o Crédito a 30 días con Orden de Compra.</li>
								<li>GARANTÍA: 12 meses contra defectos de fabricación y/o mal funcionamiento.</li>
								<li>TIEMPO DE ENTREGA: 20 días hábiles.</li>			
								</ol>
								</td>
								 		</tr>			 						 						 						 						 						 						 						 						 		
				 		</tbody>
				 	</table>	
				 	</div>
													           
   		</form>            <?php }} ?>
