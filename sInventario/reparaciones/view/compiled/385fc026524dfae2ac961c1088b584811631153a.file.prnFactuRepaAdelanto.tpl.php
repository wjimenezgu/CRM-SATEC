<?php /* Smarty version Smarty-3.1.16, created on 2016-05-22 12:05:41
         compiled from "../reparaciones/view/prnFactuRepaAdelanto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:109163201056195756639144-51991099%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '385fc026524dfae2ac961c1088b584811631153a' => 
    array (
      0 => '../reparaciones/view/prnFactuRepaAdelanto.tpl',
      1 => 1457810180,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '109163201056195756639144-51991099',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_561957566bd610_60385323',
  'variables' => 
  array (
    'DATOS_TIENDA' => 0,
    'REPARACION' => 0,
    'CURRENT_DATE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561957566bd610_60385323')) {function content_561957566bd610_60385323($_smarty_tpl) {?>        <form class="form-horizontal" id='frmAjustes'>
          	         	
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
			                <b>FACTURA NO. | <?php echo $_smarty_tpl->tpl_vars['REPARACION']->value[0]['NumFacAdelanto'];?>
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
								<label style="font-size: 90%" >Señores: <?php echo $_smarty_tpl->tpl_vars['REPARACION']->value[0]['nombre'];?>
</label>
							</div>
							</td>
							<td height="35%">
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
								<label style="font-size: 90%" >Obs: <?php echo $_smarty_tpl->tpl_vars['REPARACION']->value[0]['Obs'];?>
</label> 								
				 			</div>
				 			</td>				 						 	
				 		</tr>
				 		<tr>
				 			<td colspan="2" style="text-align:center;">
				 				<label style="font-size: 90%" >Montos Reparación</label>
				 			</td>
				 		</tr>
				 		<tr>
				 			<td style="text-align:right;">
								<div  id="boxTitTotalAde">
									<label style="font-size: 90%" >Adelanto</label> 
								</div>				 			
				 			</td>
				 			<td style="text-align:right;">
								<div  id="boxTotalAde">
									<label style="font-size: 90%" ><?php echo $_smarty_tpl->tpl_vars['REPARACION']->value[0]['Adelanto'];?>
</label> 
								</div>								 			
				 			</td>
				 		</tr>
				 		<tr>
				 			<td style="text-align:right;">
								<div  id="boxTitIVA">
									<label style="font-size: 90%" >Imp. Ventas</label> 
								</div>				 			
				 			</td>
				 			<td style="text-align:right;">
								<div  id="boxIVA">
									<label style="font-size: 90%" >0,00</label> 
								</div>								 			
				 			</td>
				 		</tr>
				 		<tr>
				 			<td style="text-align:right;">
								<div  id="boxTitGTot">
									<label style="font-size: 90%" >Gran Total</label> 
								</div>				 			
				 			</td>
				 			<td style="text-align:right;">
								<div  id="boxGTot">
									<label style="font-size: 90%" ><?php echo $_smarty_tpl->tpl_vars['REPARACION']->value[0]['Adelanto'];?>
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
					   <tbody>
					        <tr>
							<td>	
								<label><?php echo $_smarty_tpl->tpl_vars['DATOS_TIENDA']->value[0]['LeyendaTributacion'];?>
</label>
								<ol style="font-size: 9px;margin-top:-10px;">
								<li>NO HACEMOS DEVOLUCIONES DE DINERO EN NINGUN CASO DE DEVOLUCION DE MERCADERIA.</li>
								<li>DESPUES DE 8 DIAS NO SE ACEPTAN RECLAMOS NI DEVOLUCION DE LO COMPRADO.</li>
								<li>PARA EFECTOS DE LA GARANTIA.</li>
								
									<ul>
										<li>PRESENTAR FACTURA ORIGINAL.</li>
										<li>EMPAQUE EN BUEN ESTADO Y COMPLETO.</li>
										<li>TODO PRODUCTO QUE VENGA SERA SOMETIDO A REVISION DEL TALLE PARA DETECTA EL DAÑO.</li>
										<li>ESTE TIEMPO ES DE 8 DIAS MINIMO.</li>
									</ul>
																
								</ol>
								</td>
								 		</tr>
								<tr>
									<td style="text-align: center;">
										<label><?php echo $_smarty_tpl->tpl_vars['DATOS_TIENDA']->value[0]['TextoAdicional'];?>
</label>
									</td>
								</tr>				 						 						 						 						 						 						 						 						 		
				 		</tbody>
				 	</table>	
				 	</div>
													           
   		</form>            <?php }} ?>
