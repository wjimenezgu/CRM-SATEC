        <form class="form-horizontal" id='frmAjustes'  action="procesaTrasladoTienda.php" onsubmit="return validateForm()" method="POST">
          	
          	
          	<div class='row-fluid'>
          		<table cellspacing="0" style="width: 100%;  font-size: 16px;font-family:monospace;">
			        <tr>
			            <td style="margin-left:15px; width: 50%;">
			    <!--           <img  src="../../resources/img/logoPage.jpg" alt="Logo"><br>  --> 
			          <div class="control-group" id="boxTiendaOrigen" style="margin-top:5px;font-family:monospace;">
								<label>Tienda Origen: {$NOMBRE_TIENDA} - Tienda Destino: {$TRASLADO[0].NombreTiendaDestino}</label>
							</div>                                                       
							<div class="control-group" id="boxFecha" style="margin-top:-20px;font-family:monospace;">
								<label >Fecha: {$TRASLADO[0].fecMovimiento}</label> 
							</div>
			     
			            </td>
			            <td style="width: 10%;">                        
			            </td>
			            <td style="width: 40%; color: #444444; text-align:right;" valign="middle">                
			            
			                <b>TRASLADO NO. | {$ID_TRASLADO}</b>
			                </br>
			                <label style="text-align: right; font-size: 60%" >Generado: {$CURRENT_DATE}</label>
			            </td>
			        </tr>
			    </table>
          		
          		
          	</div>
        	<div class="row-fluid" >		
                    <div id="message-fields"></div>
							<div class="control-group" id="boxdetalle" style="margin-top:-20px;font-family:monospace;" >
								<label >Detalle: {$TRASLADO[0].detalle}</label> 
								
				 			</div>	
                        
                        <div class="box-content">
                        	<table class="table-reportes " style="font-family:monospace" id="tableItem">
                            	<thead>
                                	<tr>
                                    	<th style='width:10px;'>#</th>
                                    	<th style='width:500px;'>Artículo</th>
                                        <th style='width:100px;' align="left">Código</th>
                                        <th style='width: 10px;'>Cant.</th>
                                    </tr>
                                </thead>
                                <tbody id="tbod" name="tbod">
                                	<div id ="divtbod" class="grid" style="width: fit-content; border: 1px;"></div>
                            		{section name=lP loop=$DETTRASLADO} 								
										<tr style="padding:0px;" id="{$DETTRASLADO[lP].numLinea}">
						    			<td style="width:10px;">
						    				<label id="row{$DETTRASLADO[lP].numLinea}">{$DETTRASLADO[lP].numLinea}</label>
						    			</td>
						    			<td style="width:455x;">
						    				{$DETTRASLADO[lP].desArticulo}
						    				<input name="item[]" type="hidden" value="{$DETTRASLADO[lP].desArticulo}">
						    			</td>
     									<td style="width:10px;">
     										<input name="codArti[]" type="hidden" value="{$DETTRASLADO[lP].codArti}">
     										{$DETTRASLADO[lP].codArti}
     									</td>     									
                            			<td style="width:10px;" align="center">
                            			    {$DETTRASLADO[lP].cantidad}
                            				<input class="input-mini"  name="cant[]" id="cant[]"  type="hidden"  style="text-align: right;"  value="{$DETTRASLADO[lP].cantidad}">
                            			</td>
                            												</tr> 
								{/section}
								
								
								
								    </tbody>
                            </table>  
								
								 </div>
								
								
							</div><!--class="row-fluid" -->	
								
								

										</br>
															
								<table class='table-reportes' style='text-align: center;font-family:monospace;'>
										
										<tbody>
										<tr>
										<td>________________________________</td>
										<td>________________________________</td>
										</tr>
										<tr>
										<td>Firma Entrega Origen</td>
										<td>Firma Mensajero Recibe</td>
										</tr>
 										<tr style="height:55px"></tr>
										<tr>
										<td>________________________________</td>
										<td>________________________________</td>
										</tr> 
										<tr>
										<td>Firma Recibe Intermedio</td>
										<td>Firma Mensajero Entrega</td>
										</tr>
										<tr style="height:55px"></tr>
										<tr>
										<td>________________________________</td>
										</tr>                         
										<tr>
										<td>Firma Recibe Destino</td>
										</tr>
										</tbody>
								</table>
								
                            
                        
                         
                
            
   		</form>            
