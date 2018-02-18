<?php /* Smarty version Smarty-3.1.16, created on 2016-06-16 15:52:47
         compiled from "../reparaciones/view/prnData.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1373465345560c0ab2335620-61919037%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9fd7eec87b0fd717ce9dbadeacc4c0a3d54c571c' => 
    array (
      0 => '../reparaciones/view/prnData.tpl',
      1 => 1466113964,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1373465345560c0ab2335620-61919037',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_560c0ab236b7d5_54719551',
  'variables' => 
  array (
    'DATOS_TIENDA' => 0,
    'ID_REPA' => 0,
    'CURRENT_DATE' => 0,
    'REPARACION' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_560c0ab236b7d5_54719551')) {function content_560c0ab236b7d5_54719551($_smarty_tpl) {?>        <form class="form-horizontal" id='frmAjustes'>
          	         	
          	<div class='row-fluid'>
          		<table cellspacing="0" style="width: 100%;font-family:'Courier New', Courier, serif;  font-size: 11px; ">
			        <tr>
			            <td  style="margin-left:15px; width: 50%;text-align:center;">
			                <?php echo $_smarty_tpl->tpl_vars['DATOS_TIENDA']->value[0]['NombreTienda'];?>
<br>
			                <?php echo $_smarty_tpl->tpl_vars['DATOS_TIENDA']->value[0]['Direccion'];?>
<br>
			                <?php echo $_smarty_tpl->tpl_vars['DATOS_TIENDA']->value[0]['Ubicacion'];?>
<br>
			                <?php echo $_smarty_tpl->tpl_vars['DATOS_TIENDA']->value[0]['Telefonos'];?>

			            </td>
			            <td style="width: 10%;">                        
			            </td>
			            <td style="width: 40%; color: #444444; text-align:right; padding:5px;" valign="middle">                			            
			                <b>BOLETA REPARACIÓN	 NO. | <?php echo $_smarty_tpl->tpl_vars['ID_REPA']->value;?>
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
					<table border="1" style="width: 100%;font-family:'Courier New', Courier, serif"> 
					   <tbody>
						<tr>
							<td height="35%" style="width: 50%;">                       	
                            <div id="boxSenores">
								<label style="font-size: 90%" >Señores: <?php echo $_smarty_tpl->tpl_vars['REPARACION']->value[0]['nombre'];?>
</label>
							</div>
							</td>
							<td height="35%" style="width: 50%;">
							<div  id="boxTelefonos">
								<label style="font-size: 90%">Teléfonos: <?php echo $_smarty_tpl->tpl_vars['REPARACION']->value[0]['Telefono'];?>
</label>
							</div>
							</td>
						</tr>
						<tr> 
							<td>                                                      
                            <divid="boxContacto">
								<label style="font-size: 90%" >Atención: <?php echo $_smarty_tpl->tpl_vars['REPARACION']->value[0]['Contacto'];?>
</label> 
                            </div>
                            </td>
                            <td>                                                      
                            <div  id="boxRechaRecibido">
								<label style="font-size: 90%" >Fecha Recibido: <?php echo $_smarty_tpl->tpl_vars['REPARACION']->value[0]['FechaRecibido'];?>
</label> 
                            </div>
                            </td>
                            
                            
                        </tr>
                        <tr>  
                        	<td>                                              	
							<div  id="boxEquipo">
								<label style="font-size: 90%" >Equipo: <?php echo $_smarty_tpl->tpl_vars['REPARACION']->value[0]['Equipo'];?>
</label> 
							</div>
							</td>
						    <td>
							<div  id="boxModelo" >
								<label style="font-size: 90%" >Modelo: <?php echo $_smarty_tpl->tpl_vars['REPARACION']->value[0]['Modelo'];?>
</label> 
								
				 			</div>
				 			</td>
				 		</tr>
                        <tr>  
                        	<td>                                              	
							<div id="boxMarca">
								<label style="font-size: 90%" >Marca: <?php echo $_smarty_tpl->tpl_vars['REPARACION']->value[0]['Marca'];?>
</label> 
							</div>
							</td>
						    <td>
							<div  id="boxSerie" >
								<label style="font-size: 90%" >Serie: <?php echo $_smarty_tpl->tpl_vars['REPARACION']->value[0]['Serie'];?>
</label> 
								
				 			</div>
				 			</td>
				 		</tr>
                        <tr> 
                            <td >                                              	
							<div id="boxProblema">
								<label style="font-size: 90%" >Daño: <?php echo $_smarty_tpl->tpl_vars['REPARACION']->value[0]['Problema'];?>
</label> 
							</div>
							</td> 
                              <td>                  	
							<div  id="boxAccesorios">
								<label style="font-size: 90%" >Accesorios: <?php echo $_smarty_tpl->tpl_vars['REPARACION']->value[0]['Accesorios'];?>
</label> 
							</div>
							</td>
				 		</tr>
                        <tr>                     
                        	<td>                                          	
							<div  id="boxGarantia">
								<label style="font-size: 90%" >Con Garantía: <?php if ($_smarty_tpl->tpl_vars['REPARACION']->value[0]['Garantia']=="S") {?> SI Factura:<?php echo $_smarty_tpl->tpl_vars['REPARACION']->value[0]['FacGarantia'];?>
<?php } else { ?>NO<?php }?></label> 
							</div>
							</td>
						    <td>
							<div id="boxAdelanto" >
								<label style="font-size: 90%" >Adelanto: <?php echo $_smarty_tpl->tpl_vars['REPARACION']->value[0]['Adelanto'];?>
</label> 								
				 			</div>
				 			</td>				 						 	
				 		</tr>				 						 						 						 						 		
				 		</tbody>
				 	</table>	
				 	</div>

								
								<label style="margin-left:10px;font-size: 9px;font-family:'Courier New', Courier, serif">CONDICIONES:</label>
								<ol style="font-size: 9px;margin-top:-10px;">
								<li>Queda convenido que solamente se devolverá el objeto aquí mencionado "contra entrega" de este recibo únicamente.</li>
								<li>Toda Reparación mínimo 15 días, excepto casos que por falta de información o repuestos se extiende el período.</li>
								<li>No somos responsables del artículo si éste no ha sido retirado a más tardar "DOS MESES" después de la fecha de reparación previo aviso.</lli>
								<li>Vencidos estos dos meses, la empresa podrá vende, subastar o en cualquier otra forma disponer del artículo para hacerse pago de la reparación, repuestos y bodegaje, asi como cualquier otro trabajo.</li>
								<li>El monto del adelanto es para cubrir gastos de revisión.</li>
								</ol>
									
								<table class='table-condensed' style="text-align: center;font-family:'Courier New', Courier, serif">
										
										<tbody>
										<tr>
										<td style="width: 280px;border-bottom:solid 1px black;"></td>
										<td></td>
										<td style="width: 280px;border-bottom:solid 1px black;"><?php echo $_smarty_tpl->tpl_vars['REPARACION']->value[0]['NombreVendedor'];?>
</td>										
										</tr>
										<td>Firma Cliente</td>
										<td></td>
										<td>Hecho Por SATEC</td>
										</tr>
										</tbody>
								</table>
			</div>
<div class="tmp" style="page-break-before: always; "></div>
          	<div class='row-fluid'>
          		<table cellspacing="0" style="width: 100%;  font-size: 11px;font-family:'Courier New', Courier, serif">
			        <tr>
			            <td style="margin-left:15px; width: 50%;text-align:center;">
			                <?php echo $_smarty_tpl->tpl_vars['DATOS_TIENDA']->value[0]['NombreTienda'];?>
<br>
			                <?php echo $_smarty_tpl->tpl_vars['DATOS_TIENDA']->value[0]['Direccion'];?>
<br>
			                <?php echo $_smarty_tpl->tpl_vars['DATOS_TIENDA']->value[0]['Ubicacion'];?>
<br>
			                <?php echo $_smarty_tpl->tpl_vars['DATOS_TIENDA']->value[0]['Telefonos'];?>

			            </td>
			            <td style="width: 10%;">                        
			            </td>
			            <td style="width: 40%; color: #444444; text-align:right; padding:5px;" valign="middle">                			            
			                <b>BOLETA REPARACIÓN	 NO. | <?php echo $_smarty_tpl->tpl_vars['ID_REPA']->value;?>
</b>
			                </br>
			                <label style="text-align: right; font-size: 60%" >Impreso: <?php echo $_smarty_tpl->tpl_vars['CURRENT_DATE']->value;?>
</label>
			            </td>
			        </tr>
			    </table>
          		
          		
          	</div>
          	</div>
        	<div  class="box-content" >								
                  <div class='row-fluid'>
					<table border="1" style="width: 100%;font-family:'Courier New', Courier, serif"> 
					   <tbody>
						<tr>
							<td height="35%" style="width: 50%;">                       	
                            <div id="boxSenores">
								<label style="font-size: 90%" >Señores: <?php echo $_smarty_tpl->tpl_vars['REPARACION']->value[0]['nombre'];?>
</label>
							</div>
							</td>
							<td height="35%" style="width: 50%;">
							<div  id="boxTelefonos">
								<label style="font-size: 90%">Teléfonos: <?php echo $_smarty_tpl->tpl_vars['REPARACION']->value[0]['Telefono'];?>
</label>
							</div>
							</td>
						</tr>
						<tr> 
							<td>                                                      
                            <divid="boxContacto">
								<label style="font-size: 90%" >Atención: <?php echo $_smarty_tpl->tpl_vars['REPARACION']->value[0]['Contacto'];?>
</label> 
                            </div>
                            </td>
                            <td>                                                      
                            <div  id="boxRechaRecibido">
								<label style="font-size: 90%" >Fecha Recibido: <?php echo $_smarty_tpl->tpl_vars['REPARACION']->value[0]['FechaRecibido'];?>
</label> 
                            </div>
                            </td>
                            
                            
                        </tr>
                        <tr>  
                        	<td>                                              	
							<div  id="boxEquipo">
								<label style="font-size: 90%" >Equipo: <?php echo $_smarty_tpl->tpl_vars['REPARACION']->value[0]['Equipo'];?>
</label> 
							</div>
							</td>
						    <td>
							<div  id="boxModelo" >
								<label style="font-size: 90%" >Modelo: <?php echo $_smarty_tpl->tpl_vars['REPARACION']->value[0]['Modelo'];?>
</label> 
								
				 			</div>
				 			</td>
				 		</tr>
                        <tr>  
                        	<td>                                              	
							<div id="boxMarca">
								<label style="font-size: 90%" >Marca: <?php echo $_smarty_tpl->tpl_vars['REPARACION']->value[0]['Marca'];?>
</label> 
							</div>
							</td>
						    <td>
							<div  id="boxSerie" >
								<label style="font-size: 90%" >Serie: <?php echo $_smarty_tpl->tpl_vars['REPARACION']->value[0]['Serie'];?>
</label> 
								
				 			</div>
				 			</td>
				 		</tr>
                        <tr> 
                            <td >                                              	
							<div id="boxProblema">
								<label style="font-size: 90%" >Daño: <?php echo $_smarty_tpl->tpl_vars['REPARACION']->value[0]['Problema'];?>
</label> 
							</div>
							</td> 
                              <td>                  	
							<div  id="boxAccesorios">
								<label style="font-size: 90%" >Accesorios: <?php echo $_smarty_tpl->tpl_vars['REPARACION']->value[0]['Accesorios'];?>
</label> 
							</div>
							</td>
				 		</tr>
                        <tr>                     
                        	<td>                                          	
							<div  id="boxGarantia">
								<label style="font-size: 90%" >Con Garantía: <?php if ($_smarty_tpl->tpl_vars['REPARACION']->value[0]['Garantia']=="S") {?> SI Factura:<?php echo $_smarty_tpl->tpl_vars['REPARACION']->value[0]['FacGarantia'];?>
<?php } else { ?>NO<?php }?></label> 
							</div>
							</td>
						    <td>
							<div id="boxAdelanto" >
								<label style="font-size: 90%" >Adelanto: <?php echo $_smarty_tpl->tpl_vars['REPARACION']->value[0]['Adelanto'];?>
</label> 								
				 			</div>
				 			</td>				 						 	
				 		</tr>				 						 						 						 						 		
				 		</tbody>
				 	</table>	
				 	</div>

								
								<label style="margin-left:10px;font-size: 9px;font-family:'Courier New', Courier, serif">CONDICIONES:</label>
								<ol style="font-size: 9px;margin-top:-10px;">
								<li>Queda convenido que solamente se devolverá el objeto aquí mencionado "contra entrega" de este recibo únicamente.</li>
								<li>Toda Reparación mínimo 15 días, excepto casos que por falta de información o repuestos se extiende el período.</li>
								<li>No somos responsables del artículo si éste no ha sido retirado a más tardar "DOS MESES" después de la fecha de reparación previo aviso.</lli>
								<li>Vencidos estos dos meses, la empresa podrá vende, subastar o en cualquier otra forma disponer del artículo para hacerse pago de la reparación, repuestos y bodegaje, asi como cualquier otro trabajo.</li>
								<li>El monto del adelanto es para cubrir gastos de revisión.</li>
								</ol>

									
								<table style="text-align: center;font-family:'Courier New', Courier, serif">
										<tbody>
										<tr>
										<td style="width: 280px;border-bottom:solid 1px black;"></td>
										<td></td>
										<td style="width: 280px;border-bottom:solid 1px black;"><?php echo $_smarty_tpl->tpl_vars['REPARACION']->value[0]['NombreVendedor'];?>
</td>										
										</tr>
										<td>Firma Cliente</td>
										<td></td>
										<td>Hecho Por SATEC</td>
										</tr>
										</tbody>
								</table>
								<br><br><br><br>
<div class="tmp" style="page-break-before: always; "></div>									
          	<div class='row-fluid'>
          		<table cellspacing="0" style="width: 100%;  font-size: 11px;font-family:'Courier New', Courier, serif">
			        <tr>
			            <td style="margin-left:15px; width: 50%;text-align:center;">
			                <?php echo $_smarty_tpl->tpl_vars['DATOS_TIENDA']->value[0]['NombreTienda'];?>
<br>
			                <?php echo $_smarty_tpl->tpl_vars['DATOS_TIENDA']->value[0]['Direccion'];?>
<br>
			                <?php echo $_smarty_tpl->tpl_vars['DATOS_TIENDA']->value[0]['Ubicacion'];?>
<br>
			                <?php echo $_smarty_tpl->tpl_vars['DATOS_TIENDA']->value[0]['Telefonos'];?>

			            </td>
			            <td style="width: 10%;">                        
			            </td>
			            <td style="width: 40%; color: #444444; text-align:right; padding:5px;" valign="middle">                			            
			                <b>BOLETA REPARACIÓN	 NO. | <?php echo $_smarty_tpl->tpl_vars['ID_REPA']->value;?>
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
					<table  style="width: 100%;font-family:'Courier New', Courier, serif"> 
					   <tbody>
						<tr>
							<td height="35%" style="width: 50%;">                       	
                            <div id="boxSenores">
								<label style="font-size: 90%" >Señores: <?php echo $_smarty_tpl->tpl_vars['REPARACION']->value[0]['nombre'];?>
</label>
							</div>
							</td>
							<td height="35%" style="width: 50%;">
							<div  id="boxTelefonos">
								<label style="font-size: 90%">Teléfonos: <?php echo $_smarty_tpl->tpl_vars['REPARACION']->value[0]['Telefono'];?>
</label>
							</div>
							</td>
						</tr>
						<tr> 
							<td>                                                      
                            <divid="boxContacto">
								<label style="font-size: 90%" >Atención: <?php echo $_smarty_tpl->tpl_vars['REPARACION']->value[0]['Contacto'];?>
</label> 
                            </div>
                            </td>
                            <td>                                                      
                            <div  id="boxRechaRecibido">
								<label style="font-size: 90%" >Fecha Recibido: <?php echo $_smarty_tpl->tpl_vars['REPARACION']->value[0]['FechaRecibido'];?>
</label> 
                            </div>
                            </td>
                            
                            
                        </tr>
                        <tr>  
                        	<td>                                              	
							<div  id="boxEquipo">
								<label style="font-size: 90%" >Equipo: <?php echo $_smarty_tpl->tpl_vars['REPARACION']->value[0]['Equipo'];?>
</label> 
							</div>
							</td>
						    <td>
							<div  id="boxModelo" >
								<label style="font-size: 90%" >Modelo: <?php echo $_smarty_tpl->tpl_vars['REPARACION']->value[0]['Modelo'];?>
</label> 
								
				 			</div>
				 			</td>
				 		</tr>
                        <tr>  
                        	<td>                                              	
							<div id="boxMarca">
								<label style="font-size: 90%" >Marca: <?php echo $_smarty_tpl->tpl_vars['REPARACION']->value[0]['Marca'];?>
</label> 
							</div>
							</td>
						    <td>
							<div  id="boxSerie" >
								<label style="font-size: 90%" >Serie: <?php echo $_smarty_tpl->tpl_vars['REPARACION']->value[0]['Serie'];?>
</label> 
								
				 			</div>
				 			</td>
				 		</tr>
                        <tr> 
                            <td >                                              	
							<div id="boxProblema">
								<label style="font-size: 90%" >Daño: <?php echo $_smarty_tpl->tpl_vars['REPARACION']->value[0]['Problema'];?>
</label> 
							</div>
							</td> 
                              <td>                  	
							<div  id="boxAccesorios">
								<label style="font-size: 90%" >Accesorios: <?php echo $_smarty_tpl->tpl_vars['REPARACION']->value[0]['Accesorios'];?>
</label> 
							</div>
							</td>
				 		</tr>
                        <tr>                     
                        	<td>                                          	
							<div  id="boxGarantia">
								<label style="font-size: 90%" >Con Garantía: <?php if ($_smarty_tpl->tpl_vars['REPARACION']->value[0]['Garantia']=="S") {?> SI Factura:<?php echo $_smarty_tpl->tpl_vars['REPARACION']->value[0]['FacGarantia'];?>
<?php } else { ?>NO<?php }?></label> 
							</div>
							</td>
						    <td>
							<div id="boxAdelanto" >
								<label style="font-size: 90%" >Adelanto: <?php echo $_smarty_tpl->tpl_vars['REPARACION']->value[0]['Adelanto'];?>
</label> 								
				 			</div>
				 			</td>				 						 	
				 		</tr>
                        <tr> 
                            <td colspan="2">                                              	
							<div id="boxObs">
								<label style="font-size: 90%" >Observaciones: <?php echo $_smarty_tpl->tpl_vars['REPARACION']->value[0]['Obs'];?>
</label> 
							</div>
							</td> 
				 		</tr>				 		
				 		<tr>
				 		</tr>
				 		<tr>
				 			<td colspan="2" style="height: 30px;border-bottom:solid 1px black;"></td>
				 		</tr>
				 		<tr>
				 			<td colspan="2" style="height: 30px;border-bottom:solid 1px black;"></td>
				 		</tr>
				 		<tr>
				 			<td colspan="2" style="height: 30px;border-bottom:solid 1px black;"></td>
				 		</tr>
				 		<tr>
				 			<td colspan="2" style="height: 30px;border-bottom:solid 1px black;"></td>
				 		</tr>				 						 						 						 						 						 						 		
				 		</tbody>
				 	</table>	
				 	</div>
				 </div>
													           
   		</form>            <?php }} ?>
