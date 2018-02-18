<?php /* Smarty version Smarty-3.1.16, created on 2016-06-23 07:16:02
         compiled from "../consultas/view/prnFacturacion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20272962057334d89385ce6-81650348%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b11c40a8cf7000a7937101d868f4f9b436fd3125' => 
    array (
      0 => '../consultas/view/prnFacturacion.tpl',
      1 => 1466687752,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20272962057334d89385ce6-81650348',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_57334d895347e5_38383430',
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
<?php if ($_valid && !is_callable('content_57334d895347e5_38383430')) {function content_57334d895347e5_38383430($_smarty_tpl) {?>
          	<div class='row-fluid'>
          		<table cellspacing="0" style="width: 100%;  font-size: 16px;font-family:'Courier New', Courier, monospace">
			        <tr>
			            <td style="margin-left:15px; width: 50%;">
			         <!--       <img  src="../../resources/img/logoPage.jpg" alt="Logo"><br> -->
			                <div class="control-group" id="boxTiendaOrigen" style="margin-top:5px;font-family:'Courier New', Courier, monospace;">
								<label>Tienda: <?php echo $_smarty_tpl->tpl_vars['DATOS_TIENDA']->value["NombreTienda"];?>
</label>
							</div>                                                                                                     	
							<div class="control-group" id="boxFecha" style="margin-top:-10px;font-family:'Courier New', Courier, monospace;">
								<label >Del: <?php echo $_smarty_tpl->tpl_vars['FECHA_INICIAL']->value;?>
 al <?php echo $_smarty_tpl->tpl_vars['FECHA_FINAL']->value;?>
</label> 
							</div>
			            </td>
			            <td style="width: 10%;">                        
			            </td>
			            <td style="width: 40%; color: #444444; text-align:right;" valign="middle">                			            
			                <b>REPORTE DE FACTURACION</b>
			                </br>
			                <label style="text-align: right; font-size: 60%" >Generado: <?php echo $_smarty_tpl->tpl_vars['CURRENT_DATE']->value;?>
</label>
			            </td>
			        </tr>
			    </table>
          		
          		
          	</div>
        	<div class="row-fluid" >		
                    <div id="message-fields"></div>

                        <!-- FACTURAS -->
                        <div class="box-content">
                        	<table class="table-reportes-tab " style="font-family:'Courier New', Courier, monospace" id="tableItem">
                            	<thead>
                            		<tr>
                            			<th colspan="8" style="text-align:center;" >FACTURAS</th>
                            		</tr>
                                	<tr>
                                		<th>#Factura</th>
                                    	<th>F.Pago</th>
                                        <th style="text-align:right;">Exenta</th>
                                        <th style="text-align:right;">Gravada</th>
                                        <th style="text-align:right;">Descuento</th>
                                        <th style="text-align:right;">%</th>
                                        <th style="text-align:right;">Imp.Ventas</th>
                                        <th style="text-align:right;">Total</th>
                                    </tr>
                                </thead>

                                <tbody id="tbod" name="tbod">
                                	<div id ="divtbod" class="grid" style="width: fit-content; border: 1px;"></div>
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
							    			<td>
							    				<?php echo $_smarty_tpl->tpl_vars['LISTA_FACTURAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['NumFactura'];?>

							    			</td>
							    			<td>
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
								      <td colspan='2' style="text-align:right;">TOTAL</td>
								      <td style="text-align:right;"><?php echo $_smarty_tpl->tpl_vars['SOLO_TOTALES_FACTURAS']->value[0]['EXENTA'];?>
</td>
								      <td style="text-align:right;"><?php echo $_smarty_tpl->tpl_vars['SOLO_TOTALES_FACTURAS']->value[0]['GRAVADA'];?>
</td>
								      <td style="text-align:right;"><?php echo $_smarty_tpl->tpl_vars['SOLO_TOTALES_FACTURAS']->value[0]['DESCUENTO'];?>
</td>
								      <td></td>  <!-- columna porcentaje descuento -->
								      <td style="text-align:right;"><b><?php echo $_smarty_tpl->tpl_vars['SOLO_TOTALES_FACTURAS']->value[0]['IMPUESTO'];?>
</b></td>
								      <td style="text-align:right;"><b><?php echo $_smarty_tpl->tpl_vars['SOLO_TOTALES_FACTURAS']->value[0]['MONTO_TOTAL'];?>
</b></td>
								    </tr>
								    <!-- se agregan las NOTAS DE CREDITO -->
								    <tr></tr>
								    <tr></tr>
								    <tr>
                            			<th colspan="8" style="text-align:center;" >NOTAS</th>
                            		</tr>
									<tr>                                    	
                                    	<th>#Nota</th>
                                    	<th>#Factura</th>
                                    	<th colspan="4">Razón</th>                                    	
                                        <th style="text-align:right;">Imp.Ventas</th>
                                        <th style="text-align:right;">Total</th>
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
							    				<?php echo $_smarty_tpl->tpl_vars['LISTA_NOTAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['NumFactu'];?>

							    			</td>
							    			<td colspan="4">
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
											<td colspan="6" style="text-align:right;">TOTAL</td>
							    			<td style="text-align:right;">
							    				<b><?php echo $_smarty_tpl->tpl_vars['TOTALES_NOTAS']->value[0]['IMPUESTO'];?>
</b>
							    			</td>										
							    			<td style="text-align:right;">
							    				<b><?php echo $_smarty_tpl->tpl_vars['TOTALES_NOTAS']->value[0]['MONTO_TOTAL'];?>
</b>
							    			</td>															    								    				
                            		</tr>
                            		
                            		
                            		
                            		<!-- SE AGREGAN GRAN TOTAL FACTURAS MENOS NOTAS -->
								    <tr></tr>
								    <tr></tr>
								    <tr></tr>
								    <tr></tr>
									<tr>
											<td colspan="7" style="text-align:right;"><b>TOTAL FINAL</b></td>							    										
							    			<td style="text-align:right;">
							    				<b><?php echo $_smarty_tpl->tpl_vars['GRAN_TOTAL']->value;?>
</b>
							    			</td>															    								    				
                            		</tr>
                            		
                            		<!-- SE AGREGAN LOS TOTATES POR FORMA DE PAGO -->
								    <tr></tr>
								    <tr></tr>
								    <tr></tr>
								    <tr></tr>
								    <tr></tr>
								    <tr>
                            			<th colspan="8" style="text-align:center;" >TOTALES X FORMA DE PAGO</th>
                            		</tr>
									<tr>                                    	
                                    	<th colspan="7" style="text-align:left;">Forma de Pago</th>
                                        <th style="text-align:right;">Total</th>
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
	                                    	<td colspan="7">
								    			<?php echo $_smarty_tpl->tpl_vars['TOTALES_FACTURAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lPt']['index']]['descCorta'];?>

								    		</td>
								    		<td style="text-align:right;">
								    			<?php echo $_smarty_tpl->tpl_vars['TOTALES_FACTURAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lPt']['index']]['MONTO_TOTAL'];?>

								    		</td>
								    	</tr>
                                    <?php endfor; endif; ?>	
								    </tbody>
                            </table>  
								
						</div>
			
			</div><!--class="row-fluid" -->	

            
       <?php }} ?>
