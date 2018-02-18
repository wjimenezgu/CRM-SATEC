        <form class="form-horizontal" id='frmNotaCr'>
          	         	
          	<div class='row-fluid'>
          		<table cellspacing="0" style="width: 100%;  font-size: 11px;">
			        <tr>
			            <td  style="margin-left:15px; width: 50%;text-align:center;">
			            	{$DATOS_TIENDA[0].NombreCia}<br>
			                {$DATOS_TIENDA[0].NombreTienda}<br>
			                {$DATOS_TIENDA[0].Telefonos}<br>
			                {$DATOS_TIENDA[0].Direccion}<br>
			                {$DATOS_TIENDA[0].Ubicacion}<br>
			                {$DATOS_TIENDA[0].CedulaJuridica}
			            </td>
			            <td style="width: 10%;">                        
			            </td>
			            <td style=" width: 40%;color: #444444; text-align:right; padding:5px;" valign="middle">                			            
			                <b>NOTA DE CREDITO NO. | {$NOTACR[0].numDocu}</b>
			                </br>
			                <label style="text-align: right; font-size: 60%" >Impreso: {$CURRENT_DATE}</label>
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
								<label  >Señores: {$NOTACR[0].nombre}</label>
							</div>
							</td>
							<td style="width: 50%;">
							<div  id="boxTelefonos">
								<label >Teléfonos: {$NOTACR[0].Telefono}</label>
							</div>
							</td>
						</tr>
						<tr> 
							<td>                                                      
                            <div id="boxContacto">
								<label  >Contacto: {$NOTACR[0].Contacto}</label> 
                            </div>
                            </td>
                            <td>                                                      
                            <div  id="boxfecNota">
								<label  >Fecha: {$NOTACR[0].fecNota}</label> 
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
								<label > {$NOTACR[0].numDocuFact}</label> 
								
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
								<label  > {$NOTACR[0].razonNota}</label> 
								
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
									<label  >{$NOTACR[0].total}</label> 
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
									<label  >{$SALDO_NOTA}</label> 
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

				 			{if (empty($APLINOTACR))}
								<tr><td style="text-align:center;" colspan="4">No hay aplicaciones.</td></tr>
 							{/if}
 							{section name=lP loop=$APLINOTACR} 								
								<tr style="padding:0px;" id="tr{$APLINOTACR[lP].idNota}">
									 <td  align="center">{$APLINOTACR[lP].numLinea}</td>
							     	 <td >{$APLINOTACR[lP].numDocuAplica}</td>
							     	 <td >{$APLINOTACR[lP].fecAplica}</td>
							         <td  align="right">{$APLINOTACR[lP].total}</td>
								</tr> 
						    {/section}
						    {if !(empty($APLINOTACR))}
								<tr>
									<td colspan="3" style="text-align:right;">Gran Total</td>
									<td style="text-align:right;">{$TOTAL_APLI}</td>
								</tr>								
 							{/if}
						    
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
										<td style="width: 280px;border-bottom:solid 1px black;">{$NOTACR[0].NombreVendedor}</td>										
										</tr>
										<td>Hecho Por SATEC</td>
										</tr>
										</tbody>
								</table>
				 	</div>
				 	</div>
			</div>
													           
   		</form>            