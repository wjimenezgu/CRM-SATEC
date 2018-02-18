        <form class="form-horizontal" id='frmProforma'>
          	         	
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
			                <b>PROFORMA NO. | {$ENC_PROFORMA[0].idProforma}</b>
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
								<label style="font-size: 90%" >Señores: {$ENC_PROFORMA[0].nombre}</label>
							</div>
							</td>
							<td height="35%">
							<div  id="boxTelefonos">
								<label style="font-size: 90%">Teléfonos: {$ENC_PROFORMA[0].Telefono}</label>
							</div>
							</td>
						</tr>
						<tr> 
							<td colspan="2">                                                      
                            <divid="boxContacto">
								<label style="font-size: 90%" >Atención: {$ENC_PROFORMA[0].nombreContacto}</label> 
                            </div>
                            </td>
                                                    
                        </tr>
                        <tr>
                          <td colspan="2">                                                      
                            <div  id="boxDireccion">
								<label style="font-size: 90%" >Dirección: {$ENC_PROFORMA[0].direccion}</label> 
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
             	{section name=lP loop=$DET_PROFORMA} 
             		<tr>
             			<td>{$DET_PROFORMA[lP].cantidad}</td>
             			<td>{$DET_PROFORMA[lP].desArticulo}</td>
             			<td style="text-align: right;">{$DET_PROFORMA[lP].PrecioVenta}</td>
             			<td style="text-align: right;">{$DET_PROFORMA[lP].PrecioTotal}</td>
             		</tr>
             	{/section}
             	<tr>
             		<td colspan="3" style="text-align: right;">Sub Total</td>
             		<td style="text-align: right;">{$ENC_PROFORMA[0].subTotal}</td>
             	</tr>
             	<tr>
             		<td colspan="3" style="text-align: right;">Descuento {$ENC_PROFORMA[0].porceDescuento}%</td>
             		<td style="text-align: right;">{$ENC_PROFORMA[0].descuento}</td>
             	</tr>
             	<tr>
             		<td colspan="3" style="text-align: right;">Imp. Venta</td>
             		<td style="text-align: right;">{$ENC_PROFORMA[0].impuesto}</td>
             	</tr>
             	<tr>
             		<td colspan="3" style="text-align: right;">Total</td>
             		<td style="text-align: right;">{$ENC_PROFORMA[0].Total}</td>
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
													           
   		</form>            