<?php /* Smarty version Smarty-3.1.16, created on 2016-06-11 09:59:19
         compiled from "../notascr/view/prnNotaCr.tpl" */ ?>
<?php /*%%SmartyHeaderCode:160987841556be29074bf7c8-04165178%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b325bc98bdd5992ee59737da26989f9f6dcf1ed5' => 
    array (
      0 => '../notascr/view/prnNotaCr.tpl',
      1 => 1465660425,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '160987841556be29074bf7c8-04165178',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_56be290754e252_18686785',
  'variables' => 
  array (
    'DATOS_TIENDA' => 0,
    'NOTACR' => 0,
    'CURRENT_DATE' => 0,
    'SALDO_NOTA' => 0,
    'APLINOTACR' => 0,
    'TOTAL_APLI' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56be290754e252_18686785')) {function content_56be290754e252_18686785($_smarty_tpl) {?>        <form class="form-horizontal" id='frmNotaCr'>
          	         	
          	<div class='row-fluid'>
          		<table cellspacing="0" style="width: 100%;  font-size: 11px;">
			        <tr>
			            <td  style="margin-left:15px; width: 50%;text-align:center;">
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
			            <td style=" width: 40%;color: #444444; text-align:right; padding:5px;" valign="middle">                			            
			                <b>NOTA DE CREDITO NO. | <?php echo $_smarty_tpl->tpl_vars['NOTACR']->value[0]['numDocu'];?>
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
					<table class="table-reportes" border="1" style="font-family:monospace;width: 100%;"> 
					   <tbody>
						<tr>
							<td style="width: 50%;">                       	
                            <div id="boxSenores">
								<label  >Señores: <?php echo $_smarty_tpl->tpl_vars['NOTACR']->value[0]['nombre'];?>
</label>
							</div>
							</td>
							<td style="width: 50%;">
							<div  id="boxTelefonos">
								<label >Teléfonos: <?php echo $_smarty_tpl->tpl_vars['NOTACR']->value[0]['Telefono'];?>
</label>
							</div>
							</td>
						</tr>
						<tr> 
							<td>                                                      
                            <div id="boxContacto">
								<label  >Contacto: <?php echo $_smarty_tpl->tpl_vars['NOTACR']->value[0]['Contacto'];?>
</label> 
                            </div>
                            </td>
                            <td>                                                      
                            <div  id="boxfecNota">
								<label  >Fecha: <?php echo $_smarty_tpl->tpl_vars['NOTACR']->value[0]['fecNota'];?>
</label> 
                            </div>
                            </td>
                            
                            
                        </tr>
                        <tr>  
                        	<td>                                              	
							<div  id="boxFactura">
								<label  >Factura Anulada:</label> 
							</div>
							</td>
						    <td>
							<div  id="boxnumFactura" >
								<label > <?php echo $_smarty_tpl->tpl_vars['NOTACR']->value[0]['numDocuFact'];?>
</label> 
								
				 			</div>
				 			</td>
				 		</tr>

                        <tr>  
                        	<td>                                              	
							<div  id="boxRazonAnula">
								<label  >Motivo Anulación:</label> 
							</div>
							</td>
						    <td>
							<div  id="boxRazonNota" >
								<label  > <?php echo $_smarty_tpl->tpl_vars['NOTACR']->value[0]['razonNota'];?>
</label> 
								
				 			</div>
				 			</td>
				 		</tr>


				 		<tr>
				 			<td colspan="2" style="text-align:center;">
				 				<label  >Montos </label>
				 			</td>
				 		</tr>
				 		<tr>
				 			<td style="text-align:right;">
								<div  id="boxTitTotalRepa">
									<label  >Total Nota</label> 
								</div>				 			
				 			</td>
				 			<td style="text-align:right;">
								<div  id="boxTotalRepa">
									<label  ><?php echo $_smarty_tpl->tpl_vars['NOTACR']->value[0]['total'];?>
</label> 
								</div>								 			
				 			</td>
				 		</tr>
				 		<tr>
				 			<td style="text-align:right;">
								<div  id="boxTitTotalRepa">
									<label >SALDO ACTUAL</label> 
								</div>				 			
				 			</td>
				 			<td style="text-align:right;">
								<div  id="boxTotalRepa">
									<label  ><?php echo $_smarty_tpl->tpl_vars['SALDO_NOTA']->value;?>
</label> 
								</div>								 			
				 			</td>
				 		</tr>
				 		</tbody>
				 	</table>	
				 	</div>
				 	<!-- DETALLE DE LAS APLICACIONES DE LA NOTA  -->
				 	<div  class="box-content">
				 	<div class='row-fluid'>
					<table class="table-reportes" border="1" style="font-family:monospace;width: 100%;" > 
					   <tbody>
					   		<tr>
				 				<td colspan="4" style="text-align:center;">
				 					<label>Detalle Aplicaciones </label>
				 				</td>
				 			</tr>
				 			<tr>
				 				<td style="text-align:center;">
				 					<label  ># </label>
				 				</td>
				 				<td style="text-align:left;">
				 					<label  >Factura </label>
				 				</td>
				 				<td style="text-align:left;">
				 					<label  >Fecha Aplica </label>
				 				</td>
				 				<td style="text-align:right;">
				 					<label  >Total </label>
				 				</td>
				 			</tr>

				 			<?php if ((empty($_smarty_tpl->tpl_vars['APLINOTACR']->value))) {?>
								<tr><td style="text-align:center;" colspan="4">No hay aplicaciones.</td></tr>
 							<?php }?>
 							<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['name'] = 'lP';
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['APLINOTACR']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
								<tr style="padding:0px;" id="tr<?php echo $_smarty_tpl->tpl_vars['APLINOTACR']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['idNota'];?>
">
									 <td  align="center"><?php echo $_smarty_tpl->tpl_vars['APLINOTACR']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['numLinea'];?>
</td>
							     	 <td ><?php echo $_smarty_tpl->tpl_vars['APLINOTACR']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['numDocuAplica'];?>
</td>
							     	 <td ><?php echo $_smarty_tpl->tpl_vars['APLINOTACR']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['fecAplica'];?>
</td>
							         <td  align="right"><?php echo $_smarty_tpl->tpl_vars['APLINOTACR']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['total'];?>
</td>
								</tr> 
						    <?php endfor; endif; ?>
						    <?php if (!(empty($_smarty_tpl->tpl_vars['APLINOTACR']->value))) {?>
								<tr>
									<td colspan="3" style="text-align:right;">Gran Total</td>
									<td style="text-align:right;"><?php echo $_smarty_tpl->tpl_vars['TOTAL_APLI']->value;?>
</td>
								</tr>								
 							<?php }?>
						    
					   </tbody>
					</table>
					</div>
				 	</div>
	 	
        			<div  class="box-content">								
                  <div class='row-fluid'>
                  <br><br>
					<table class="table-reportes"  style='text-align: center;'>
										<tbody>
										<tr>
										<td style="width: 280px;border-bottom:solid 1px black;"><?php echo $_smarty_tpl->tpl_vars['NOTACR']->value[0]['NombreVendedor'];?>
</td>										
										</tr>
										<td>Hecho Por SATEC</td>
										</tr>
										</tbody>
								</table>
				 	</div>
				 	</div>
			</div>
													           
   		</form>            <?php }} ?>
