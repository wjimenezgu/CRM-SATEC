
          	<div class='row-fluid'>
          		<table cellspacing="0" style="width: 100%;  font-size: 16px;font-family:'Courier New', Courier, monospace">
			        <tr>
			            <td style="margin-left:15px; width: 50%;">
			         <!--       <img  src="../../resources/img/logoPage.jpg" alt="Logo"><br> -->
			                <div class="control-group" id="boxTiendaOrigen" style="margin-top:5px;font-family:'Courier New', Courier, monospace;">
								<label>Tienda: {$DATOS_TIENDA["NombreTienda"]}</label>
							</div>                                                                                                     	
							<div class="control-group" id="boxFecha" style="margin-top:-10px;font-family:'Courier New', Courier, monospace;">
								<label >Del: {$FECHA_INICIAL} al {$FECHA_FINAL}</label> 
							</div>
			            </td>
			            <td style="width: 10%;">                        
			            </td>
			            <td style="width: 40%; color: #444444; text-align:right;" valign="middle">                			            
			                <b>REPORTE DE FACTURACION</b>
			                </br>
			                <label style="text-align: right; font-size: 60%" >Generado: {$CURRENT_DATE}</label>
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
                            		{section name=lP loop=$LISTA_FACTURAS} 								
										<tr>							    			
							    			<td>
							    				{$LISTA_FACTURAS[lP].NumFactura}
							    			</td>
							    			<td>
							    				{$LISTA_FACTURAS[lP].descCorta}
							    			</td>							    			
							    			<td style="text-align:right;">
							    				{$LISTA_FACTURAS[lP].EXENTA}
							    			</td>
							    			<td style="text-align:right;">
							    				{$LISTA_FACTURAS[lP].GRAVADA}
							    			</td>											
							    			<td style="text-align:right;">
							    				{$LISTA_FACTURAS[lP].DESCUENTO}
							    			</td>											
							    			<td style="text-align:right;">
							    				{$LISTA_FACTURAS[lP].PORCEDESC}
							    			</td>											
							    			<td style="text-align:right;">
							    				{$LISTA_FACTURAS[lP].IMPUESTO}
							    			</td>											
							    			<td style="text-align:right;">
							    				{$LISTA_FACTURAS[lP].MONTO_TOTAL}
							    			</td>													    						
                            			</tr> 
									{/section}
									<!-- se agregan los totales de las facturas  -->
									<tr>
								      <td colspan='2' style="text-align:right;">TOTAL</td>
								      <td style="text-align:right;">{$SOLO_TOTALES_FACTURAS[0].EXENTA}</td>
								      <td style="text-align:right;">{$SOLO_TOTALES_FACTURAS[0].GRAVADA}</td>
								      <td style="text-align:right;">{$SOLO_TOTALES_FACTURAS[0].DESCUENTO}</td>
								      <td></td>  <!-- columna porcentaje descuento -->
								      <td style="text-align:right;"><b>{$SOLO_TOTALES_FACTURAS[0].IMPUESTO}</b></td>
								      <td style="text-align:right;"><b>{$SOLO_TOTALES_FACTURAS[0].MONTO_TOTAL}</b></td>
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
                                    {section name=lP loop=$LISTA_NOTAS} 								
										<tr>
							    			<td>
							    				{$LISTA_NOTAS[lP].NumNota}
							    			</td>
							    			<td>
							    				{$LISTA_NOTAS[lP].NumFactu}
							    			</td>
							    			<td colspan="4">
							    				{$LISTA_NOTAS[lP].razonNota}
							    			</td>
							    			<td style="text-align:right;">
							    				{$LISTA_NOTAS[lP].IMPUESTO}
							    			</td>											
							    			<td style="text-align:right;">
							    				{$LISTA_NOTAS[lP].MONTO_TOTAL}
							    			</td>														    						
                            			</tr> 
									{/section}
									<tr>
											<td colspan="6" style="text-align:right;">TOTAL</td>
							    			<td style="text-align:right;">
							    				<b>{$TOTALES_NOTAS[0].IMPUESTO}</b>
							    			</td>										
							    			<td style="text-align:right;">
							    				<b>{$TOTALES_NOTAS[0].MONTO_TOTAL}</b>
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
							    				<b>{$GRAN_TOTAL}</b>
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
                                    {section name=lPt loop=$TOTALES_FACTURAS}
                                    	<tr> 
	                                    	<td colspan="7">
								    			{$TOTALES_FACTURAS[lPt].descCorta}
								    		</td>
								    		<td style="text-align:right;">
								    			{$TOTALES_FACTURAS[lPt].MONTO_TOTAL}
								    		</td>
								    	</tr>
                                    {/section}	
								    </tbody>
                            </table>  
								
						</div>
			
			</div><!--class="row-fluid" -->	

            
       