        <form class="form-horizontal" id='frmAjustes'>
          	         	
          	<div class='row-fluid'>
          		<table cellspacing="0" style="width: 100%;font-family:'Courier New', Courier, serif;  font-size: 11px; ">
			        <tr>
			            <td  style="margin-left:15px; width: 50%;text-align:center;">
			                {$DATOS_TIENDA[0].NombreTienda}<br>
			                {$DATOS_TIENDA[0].Direccion}<br>
			                {$DATOS_TIENDA[0].Ubicacion}<br>
			                {$DATOS_TIENDA[0].Telefonos}
			            </td>
			            <td style="width: 10%;">                        
			            </td>
			            <td style="width: 30%; color: #444444; text-align:right; padding:5px;" valign="middle">                			            
			            <!--    <b>BOLETA REPARACIÓN	 NO. | {$ID_REPA}</b> -->
					<p style="font-size: 14px;">BOLETA REPARACIÓN	 NO. | {$ID_REPA}</p>
			                </br>
			                <label style="text-align: right; font-size: 60%" >Impreso: {$CURRENT_DATE}</label>
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
								<label style="font-size: 90%" >Señores: {$REPARACION[0].nombre}</label>
							</div>
							</td>
							<td height="35%" style="width: 50%;">
							<div  id="boxTelefonos">
								<label style="font-size: 90%">Teléfonos: {$REPARACION[0].Telefono}</label>
							</div>
							</td>
						</tr>
						<tr> 
							<td>                                                      
                            <divid="boxContacto">
								<label style="font-size: 90%" >Atención: {$REPARACION[0].Contacto}</label> 
                            </div>
                            </td>
                            <td>                                                      
                            <div  id="boxRechaRecibido">
								<label style="font-size: 90%" >Fecha Recibido: {$REPARACION[0].FechaRecibido}</label> 
                            </div>
                            </td>
                            
                            
                        </tr>
                        <tr>  
                        	<td>                                              	
							<div  id="boxEquipo">
								<label style="font-size: 90%" >Equipo: {$REPARACION[0].Equipo}</label> 
							</div>
							</td>
						    <td>
							<div  id="boxModelo" >
								<label style="font-size: 90%" >Modelo: {$REPARACION[0].Modelo}</label> 
								
				 			</div>
				 			</td>
				 		</tr>
                        <tr>  
                        	<td>                                              	
							<div id="boxMarca">
								<label style="font-size: 90%" >Marca: {$REPARACION[0].Marca}</label> 
							</div>
							</td>
						    <td>
							<div  id="boxSerie" >
								<label style="font-size: 90%" >Serie: {$REPARACION[0].Serie}</label> 
								
				 			</div>
				 			</td>
				 		</tr>
                        <tr> 
                            <td >                                              	
							<div id="boxProblema">
								<label style="font-size: 90%" >Daño: {$REPARACION[0].Problema}</label> 
							</div>
							</td> 
                              <td>                  	
							<div  id="boxAccesorios">
								<label style="font-size: 90%" >Accesorios: {$REPARACION[0].Accesorios}</label> 
							</div>
							</td>
				 		</tr>
                        <tr>                     
                        	<td>                                          	
							<div  id="boxGarantia">
								<label style="font-size: 90%" >Con Garantía: {if $REPARACION[0].Garantia eq "S"} SI Factura:{$REPARACION[0].FacGarantia}{else}NO{/if}</label> 
							</div>
							</td>
						    <td>
							<div id="boxAdelanto" >
								<label style="font-size: 90%" >Adelanto: {$REPARACION[0].Adelanto}</label> 								
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
										<td style="width: 280px;border-bottom:solid 1px black;">{$REPARACION[0].NombreVendedor}</td>										
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
			                {$DATOS_TIENDA[0].NombreTienda}<br>
			                {$DATOS_TIENDA[0].Direccion}<br>
			                {$DATOS_TIENDA[0].Ubicacion}<br>
			                {$DATOS_TIENDA[0].Telefonos}
			            </td>
			            <td style="width: 10%;">                        
			            </td>
			            <td style="width: 40%; color: #444444; text-align:right; padding:5px;" valign="middle">                			            
			            <!--    <b>BOLETA REPARACIÓN	 NO. | {$ID_REPA}</b> -->
					<p style="font-size: 16px;font-weight: bold;">BOLETA REPARACIÓN	 NO. | {$ID_REPA}</p>

			                </br>
			                <label style="text-align: right; font-size: 60%" >Impreso: {$CURRENT_DATE}</label>
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
								<label style="font-size: 90%" >Señores: {$REPARACION[0].nombre}</label>
							</div>
							</td>
							<td height="35%" style="width: 50%;">
							<div  id="boxTelefonos">
								<label style="font-size: 90%">Teléfonos: {$REPARACION[0].Telefono}</label>
							</div>
							</td>
						</tr>
						<tr> 
							<td>                                                      
                            <divid="boxContacto">
								<label style="font-size: 90%" >Atención: {$REPARACION[0].Contacto}</label> 
                            </div>
                            </td>
                            <td>                                                      
                            <div  id="boxRechaRecibido">
								<label style="font-size: 90%" >Fecha Recibido: {$REPARACION[0].FechaRecibido}</label> 
                            </div>
                            </td>
                            
                            
                        </tr>
                        <tr>  
                        	<td>                                              	
							<div  id="boxEquipo">
								<label style="font-size: 90%" >Equipo: {$REPARACION[0].Equipo}</label> 
							</div>
							</td>
						    <td>
							<div  id="boxModelo" >
								<label style="font-size: 90%" >Modelo: {$REPARACION[0].Modelo}</label> 
								
				 			</div>
				 			</td>
				 		</tr>
                        <tr>  
                        	<td>                                              	
							<div id="boxMarca">
								<label style="font-size: 90%" >Marca: {$REPARACION[0].Marca}</label> 
							</div>
							</td>
						    <td>
							<div  id="boxSerie" >
								<label style="font-size: 90%" >Serie: {$REPARACION[0].Serie}</label> 
								
				 			</div>
				 			</td>
				 		</tr>
                        <tr> 
                            <td >                                              	
							<div id="boxProblema">
								<label style="font-size: 90%" >Daño: {$REPARACION[0].Problema}</label> 
							</div>
							</td> 
                              <td>                  	
							<div  id="boxAccesorios">
								<label style="font-size: 90%" >Accesorios: {$REPARACION[0].Accesorios}</label> 
							</div>
							</td>
				 		</tr>
                        <tr>                     
                        	<td>                                          	
							<div  id="boxGarantia">
								<label style="font-size: 90%" >Con Garantía: {if $REPARACION[0].Garantia eq "S"} SI Factura:{$REPARACION[0].FacGarantia}{else}NO{/if}</label> 
							</div>
							</td>
						    <td>
							<div id="boxAdelanto" >
								<label style="font-size: 90%" >Adelanto: {$REPARACION[0].Adelanto}</label> 								
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
										<td style="width: 280px;border-bottom:solid 1px black;">{$REPARACION[0].NombreVendedor}</td>										
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
			                {$DATOS_TIENDA[0].NombreTienda}<br>
			                {$DATOS_TIENDA[0].Direccion}<br>
			                {$DATOS_TIENDA[0].Ubicacion}<br>
			                {$DATOS_TIENDA[0].Telefonos}
			            </td>
			            <td style="width: 10%;">                        
			            </td>
			            <td style="width: 40%; color: #444444; text-align:right; padding:5px;" valign="middle">                			            
			            <!--    <b>BOLETA REPARACIÓN	 NO. | {$ID_REPA}</b> -->
					<p style="font-size: 16px;font-weight: bold;">BOLETA REPARACIÓN	 NO. | {$ID_REPA}</p>

			                </br>
			                <label style="text-align: right; font-size: 60%" >Impreso: {$CURRENT_DATE}</label>
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
								<label style="font-size: 90%" >Señores: {$REPARACION[0].nombre}</label>
							</div>
							</td>
							<td height="35%" style="width: 50%;">
							<div  id="boxTelefonos">
								<label style="font-size: 90%">Teléfonos: {$REPARACION[0].Telefono}</label>
							</div>
							</td>
						</tr>
						<tr> 
							<td>                                                      
                            <divid="boxContacto">
								<label style="font-size: 90%" >Atención: {$REPARACION[0].Contacto}</label> 
                            </div>
                            </td>
                            <td>                                                      
                            <div  id="boxRechaRecibido">
								<label style="font-size: 90%" >Fecha Recibido: {$REPARACION[0].FechaRecibido}</label> 
                            </div>
                            </td>
                            
                            
                        </tr>
                        <tr>  
                        	<td>                                              	
							<div  id="boxEquipo">
								<label style="font-size: 90%" >Equipo: {$REPARACION[0].Equipo}</label> 
							</div>
							</td>
						    <td>
							<div  id="boxModelo" >
								<label style="font-size: 90%" >Modelo: {$REPARACION[0].Modelo}</label> 
								
				 			</div>
				 			</td>
				 		</tr>
                        <tr>  
                        	<td>                                              	
							<div id="boxMarca">
								<label style="font-size: 90%" >Marca: {$REPARACION[0].Marca}</label> 
							</div>
							</td>
						    <td>
							<div  id="boxSerie" >
								<label style="font-size: 90%" >Serie: {$REPARACION[0].Serie}</label> 
								
				 			</div>
				 			</td>
				 		</tr>
                        <tr> 
                            <td >                                              	
							<div id="boxProblema">
								<label style="font-size: 90%" >Daño: {$REPARACION[0].Problema}</label> 
							</div>
							</td> 
                              <td>                  	
							<div  id="boxAccesorios">
								<label style="font-size: 90%" >Accesorios: {$REPARACION[0].Accesorios}</label> 
							</div>
							</td>
				 		</tr>
                        <tr>                     
                        	<td>                                          	
							<div  id="boxGarantia">
								<label style="font-size: 90%" >Con Garantía: {if $REPARACION[0].Garantia eq "S"} SI Factura:{$REPARACION[0].FacGarantia}{else}NO{/if}</label> 
							</div>
							</td>
						    <td>
							<div id="boxAdelanto" >
								<label style="font-size: 90%" >Adelanto: {$REPARACION[0].Adelanto}</label> 								
				 			</div>
				 			</td>				 						 	
				 		</tr>
                        <tr> 
                            <td colspan="2">                                              	
							<div id="boxObs">
								<label style="font-size: 90%" >Observaciones: {$REPARACION[0].Obs}</label> 
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
													           
   		</form>            
