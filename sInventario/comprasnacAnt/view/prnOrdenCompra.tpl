<form class="form-horizontal" id='frmAjustes'>
  	          	<div class='row-fluid'>
          		<table cellspacing="0" style="width: 100%;  font-size: 11px;font-family: Arial, Courier, Serif;">
			        <tr>
			            <td style="margin-left:15px; width: 50%;text-align:center;">
			                {$DATOS_TIENDA[0].NombreCia}<br>
			                {$DATOS_TIENDA[0].Direccion}<br>
			                {$DATOS_TIENDA[0].Ubicacion}<br>
			                {$DATOS_TIENDA[0].Telefonos}
			            </td>
			            <td style="width: 10%;">                        
			            </td>
			            <td style="width: 40%; color: #444444; text-align:right; padding:5px;" valign="middle">                			            
			                <b>ORDEN DE COMPRA NO. | {$PEDIDO_NAC[0].numOrdenCompra}</b>
			                <label style="text-align: right; font-size: 100%; font-weight: bold" >FECHA: {$PEDIDO_NAC[0].fecCreacion}</label>
			                <label style="text-align: right; font-size: 80%" >Impreso: {$CURRENT_DATE}</label>
			            </td>
			        </tr>
			    </table>
     		
          	</div>
  	
  	
  	
	<div class="row-fluid" >		
		</br>
		<h2 style='text-align:  center;font-family: Arial, Courier, Serif;'>{$TIT_REPORTE}</h2>
	    <div class="control-group" id="boxTiendaOrigen" style="margin-top:10px;">
			<label>SEÑORES: {$PEDIDO_NAC[0].nombreProveedor}</label>
		</div>   
		                                                    
	    <div class="control-group" id="boxFechaAjuste">
			<label style="font-family: Arial, Courier, Serif;">SIRVASE ENTREGAR A: ________________________________________</label> 
	    </div>     
	                                               	
		<div class="control-group" id="boxTipoMov" style="margin-top:6px;">
			<label style="font-family: Arial, Courier, Serif;">Y CARGAR A NUESTRA CUENTA CON UD(S) LO SIGUIENTE:</label> 
		</div>

    
    <div class="box-content">
    
    	<table class="table " id="tableItem" style="font-family: Arial, Courier, Serif;">
    	
        	<thead>
        	
            	<tr>
            	
                	<th style='width:10px;'>#</th>
                	<th style='width:500px;'>Artículo</th>
                    <th style='width: 40px; text-align:right'>Cantidad</th>
                    <th style='width: 100px;text-align:right'>Costo Unitario</th>
                    
                </tr>
                
            </thead>
            
            <tbody id="tbod" name="tbod">
            
            	<div id ="divtbod" class="grid" style="width: fit-content; border: 1px;"></div>
            	
        		{section name=lP loop=$DETPEDIDO_NAC} 		
        								
					<tr style="padding:0px;" id="{$DETPEDIDO_NAC[lP].idLinea}">
					
		    			<td style="width:10px;">
		    				<label id="row{$DETPEDIDO_NAC[lP].idLinea}">{$DETPEDIDO_NAC[lP].idLinea}</label>
		    			</td>
		    			
		    			<td style="width:455x;">
		    				{$DETPEDIDO_NAC[lP].descArti}
		    				
		    			</td>
		    									 							
            			<td style="width:40px; text-align:right">
            			    {$DETPEDIDO_NAC[lP].cantidad}
            				
            			</td>

            			<td style="width:100px;text-align:right" >
            			    {$DETPEDIDO_NAC[lP].costoF}
            				
            			</td>

        			
        			</tr> 
        			
        			
				{/section}
				<tr>
        				<td colspan="5" style="text-align: center;"> ************** ÚLTIMA LINEA **************</td>
        		</tr>
			</tbody>
			
        </table>  
        
	</div>					
										
	<table class='table-condensed' style='text-align: center;font-family: Arial, Courier, Serif;'>
	
			<thead>
			
			    
				<tr>
				
					<th >________________________________</th>

					
				</tr>

			
				
			</thead>
			
			<tbody>
			
				<tr>
				
					<td>Por SATEC S.A.</td>
					
				</tr>
				<tr>
				<td>
				NOTA: Recibo de facturas para trámite de pago todos los dias. Pagos, jueves de 3:00 p.m. a 6:00 p.m.
				</td>
				</tr>				
				
			</tbody>
			
	</table>
	
</form>            