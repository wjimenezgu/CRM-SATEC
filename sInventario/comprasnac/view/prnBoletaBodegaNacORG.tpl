<form class="form-horizontal" id='frmprnBoletaBodegaNac'>

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
 		<h2 style='text-align:  center;'>Número de Orden:{$LIST_ITEMS_ORDERS[0].numOrdenCompra}</h2>
 		</br>

	</div>
	
	</br>
	</br>
    
    <div class="box-content">
    
    	<table class="table table-bordered" id="tableItem">
    	
        	<thead>
        	
            	<tr>
                        		<th>Codigo</th>
                        		<th>Codigo Externo</th>
                        		<th>Descripcion</th>                        
                        		<th style="text-align:right;">Cantidad Ingresada</th>
                        		<th style="text-align:right;">Cantidad en Bodega</th>
                        		<th style="text-align:right;">Cantidad en Despacho</th>                    
                    
                </tr>
                
            </thead>
            
            <tbody id="tbod" name="tbod">
            
            	<div id ="divtbod" class="grid" style="width: fit-content; border: 1px;"></div>
            	
        		{section name=lP loop=$LIST_ITEMS_ORDERS} 		
        								
					<tr style="padding:0px;" >
					
		<td style="width:50px;">{$LIST_ITEMS_ORDERS[lP].codArti}</td>
		<td style="width:150px;">{$LIST_ITEMS_ORDERS[lP].codArtiProveedor}</td>
		<td style="width:350px;">{$LIST_ITEMS_ORDERS[lP].desArticulo}</td>
		<td style="width:75px;text-align:right;">{$LIST_ITEMS_ORDERS[lP].cantidad}</td>
		<td style="width:75px;"></td>
		<td style="width:75px;"></td>
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
						
<!-- 										
	<table class='table-condensed' style='text-align: center;'>
	
			<thead>
			
				<tr>
				
					<th >________________________________</th>

				</tr>
				
			</thead>
			
			<tbody>
			
				<tr>
				
					<td>Conciliado por:</td>

					
				</tr>
				
			</tbody>
			
	</table>
 -->	
</form>            