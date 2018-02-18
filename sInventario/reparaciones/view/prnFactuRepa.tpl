        <form class="form-horizontal" id='frmAjustes'>
          	         	
          	<div class='row-fluid'>
          		<table cellspacing="0" style="width: 30%;  font-size: 11px;">
			        <tr>
			            <td style="margin-left:15px; width: 50%;text-align:center;">
			            	{$DATOS_TIENDA[0].NombreCia}<br>
			                {$DATOS_TIENDA[0].NombreTienda}<br>
			                {$DATOS_TIENDA[0].Telefonos}<br>
			                {$DATOS_TIENDA[0].Direccion}<br>
			                {$DATOS_TIENDA[0].Ubicacion}<br>
			                {$DATOS_TIENDA[0].CedulaJuridica}
			            </td>
			            <td style="width: 10%;">                        
			            </td>
			            <td style="width: 40%; color: #444444; text-align:right; padding:5px;" valign="middle">                			            
			                <b>FACTURA NO. | {$REPARACION[0].numDocu}</b>
			                </br>
			                <label style="text-align: right; font-size: 60%" >Impreso: {$CURRENT_DATE}</label>
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
								<label style="font-size: 90%" >Señores: {$REPARACION[0].nombre}</label>
							</div>
							</td>
							<td height="35%">
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
								<label style="font-size: 90%" >Obs: {$REPARACION[0].Obs}</label> 								
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
								<div  id="boxTitTotalRepa">
									<label style="font-size: 90%" >Total Reparación</label> 
								</div>				 			
				 			</td>
				 			<td style="text-align:right;">
								<div  id="boxTotalRepa">
									<label style="font-size: 90%" >{$REPARACION[0].TotalReparacion}</label> 
								</div>								 			
				 			</td>
				 		</tr>
				 		<tr>
				 			<td style="text-align:right;">
								<div  id="boxTitTotalAde">
									<label style="font-size: 90%" >(-)Adelanto</label> 
								</div>				 			
				 			</td>
				 			<td style="text-align:right;">
								<div  id="boxTotalAde">
									<label style="font-size: 90%" >{$REPARACION[0].Adelanto}</label> 
								</div>								 			
				 			</td>
				 		</tr>
				 		<tr>
				 			<td style="text-align:right;">
								<div  id="boxTitTotal">
									<label style="font-size: 90%" >Monto Total</label> 
								</div>				 			
				 			</td>
				 			<td style="text-align:right;">
								<div  id="boxTotal">
									<label style="font-size: 90%" >{$REPARACION[0].MontoTotal}</label> 
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
									<label style="font-size: 90%" >{$REPARACION[0].ImpVenta}</label> 
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
									<label style="font-size: 90%" >{$REPARACION[0].GranTotal}</label> 
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
								<label>{$DATOS_TIENDA[0].LeyendaTributacion}</label>
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
										<label>{$DATOS_TIENDA[0].TextoAdicional}</label>
									</td>
								</tr>				 						 						 						 						 						 						 						 						 		
				 		</tbody>
				 	</table>	
				 	</div>
													           
   		</form>            