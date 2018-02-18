<form class="form-horizontal" id='frmAjustes'>

  	<div class='row-fluid'>
  	
  		<table cellspacing="0" style="width: 100%;  font-size: 16px;">
  		
	        <tr>
	        
	            <td style="margin-left:15px; width: 50%;">
	                <img  src="../../resources/img/logoPage.jpg" alt="Logo"><br>
	                <label style="text-align: left; font-size: 60%" >Impreso: {$CURRENT_DATE}</label>
	            </td>
	            
	        </tr>
	        
	    </table>
	    
  	</div>
  	
	<div class="row-fluid" >		
	
		</br>
		</br>
		<h2 style='text-align:  center;'>{$TIT_REPORTE}</h2>
		</br>

	    <div class="control-group" id="boxTiendaOrigen" style="margin-top:10px;">
			<label>Tarjeta: {$TARJETA[0].Tarjeta}</label>
		</div>   
		                                                    
	    <div class="control-group" id="boxFechaAjuste">
			<label >Fecha de Corte: {$FECHA_CORTE}</label> 
	    </div>     

	</div>
	
	</br>
	</br>
    
    <div class="box-content">
    
    	<table class="table " id="tableItem">
    	
        	<thead>
        	
            	<tr>
            	
                	<th style='width: 10%;'>Pedido</th>
                	<th style='width: 25%;'>Proveedor</th>
                    <th style='width: 15%;'>Factura</th>
                    <th style='width: 15%;'>Fecha</th>
                    <th style='width: 15%;'>Moneda</th>
                    <th style='width: 20%;'>Monto</th>
                    
                </tr>
                
            </thead>
            
            <tbody id="tbod" name="tbod">
            
            	<div id ="divtbod" class="grid" style="width: fit-content; border: 1px;"></div>
            	
        		{section name=lP loop=$CONCILIO} 		
        								
					<tr style="padding:0px;" >
					
		    			<td style="width:10px;">
		    				<label id="row{$CONCILIO[lP].numOrdenCompra}">{$CONCILIO[lP].numOrdenCompra}</label>
		    			</td>
		    			
		    			<td style="width:455x;">
		    				{$CONCILIO[lP].nombreProveedor}
		    				
		    			</td>
		    			
						<td style="width:10px;">
							{$CONCILIO[lP].numDoc}
						</td>    
						 									
            			<td style="width:10px;" align="left">
            			    {$CONCILIO[lP].fecDoc}
            				
            			</td>
            			
            			<td style="width:10px;">
							
							{$CONCILIO[lP].idMoneda}
						</td>
						
						<td style="width:10px;">
							
							{$CONCILIO[lP].montoDoc}
						</td>

        			</tr> 
        			
				{/section}
				
			</tbody>
			
        </table>  
        
	</div>
			
	</br>
		</br>
			</br>
				</br>
					</br>
						
										
	<table class='table-condensed' style='text-align: center;'>
	
			<thead>
			
				<tr>
				
					<th >________________________________</th>
					<!--<th>_________________________________</th>
					<th>_________________________________</th>-->
					
				</tr>
				
			</thead>
			
			<tbody>
			
				<tr>
				
					<td>Conciliado por:</td>
					<!--<td>Firma Chofer</td>
					<td>Firma Recibe Destino</td>-->
					
				</tr>
				
			</tbody>
			
	</table>
	
</form>            