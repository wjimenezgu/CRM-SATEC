<form class="form-horizontal" id='frmAjustes'>

  	<div class='row-fluid'>
  	
  		<table cellspacing="0" style="width: 100%;  font-size: 16px;font-family:Sans-serif;">
  		
	        <tr>
	        
	            <td style="margin-left:15px; width: 50%;">
	    <div class="control-group" id="boxTiendaOrigen" style="margin-top:5px;">
			<label>Tienda: {$NOMBRE_TIENDA}</label>
		</div>   
		                                                    
	    <div class="control-group" id="boxFechaAjuste" style="margin-top:-20px;">
			<label >Fecha Ajuste: {$AJUSTE[0].fecMovimiento}</label> 
	    </div>     
	                                               	
		<div class="control-group" id="boxTipoMov" style="margin-top:-20px;">
			<label >Tipo de Movimiento: {$AJUSTE[0].descTipoMov}</label> 
		</div>
		
		<div class="control-group" id="boxDetalle" style="margin-top:-20px;">
			<label >Detalle: {$AJUSTE[0].detalle}</label> 
		</div>
	            </td>
	            
	            <td style="width: 40%; color: #444444; text-align:right; padding:10px;" valign="middle margin-top:-20px;">                
	            
	                <b>{$TIT_REPORTE} - AJUSTE NO. | {$AJUSTE[0].numDocu}</b>
	                </br>
	                <label style="text-align: right; font-size: 60%" >Impreso: {$CURRENT_DATE}</label>
	                
	            </td>
	            
	        </tr>
	        
	    </table>
	    
  	</div>
  	

    
    <div class="box-content">
    
    	<table class="table-reportes " id="tableItem" style="width: 100%;  font-family:Sans-serif;">
    	
        	<thead>
        	
            	<tr>
            	
                	<th style='width:10px;'>#</th>
                	<th style='width:500px;'>Artículo</th>
                    <th style='width:100px;' align="left">Código</th>
                    <th style='width: 10px;' align="right">Cant.</th>
                    
                </tr>
                
            </thead>
            
            <tbody id="tbod" name="tbod">
            
            	<div id ="divtbod" class="grid" style="width: fit-content; border: 1px;"></div>
            	
        		{section name=lP loop=$DETAJUSTE} 		
        								
					<tr style="padding:0px;" id="{$DETAJUSTE[lP].numLinea}">
					
		    			<td style="width:10px;">
		    				<label id="row{$DETAJUSTE[lP].numLinea}">{$DETAJUSTE[lP].numLinea}</label>
		    			</td>
		    			
		    			<td style="width:455x;">
		    				{$DETAJUSTE[lP].desArticulo}
		    				<input name="item[]" type="hidden" value="{$DETAJUSTE[lP].desArticulo}">
		    			</td>
		    			
						<td style="width:10px; align="left"">
							<input name="codArti[]" type="hidden" value="{$DETAJUSTE[lP].codArti}">
							{$DETAJUSTE[lP].codArti}
						</td>    
						 									
            			<td style="width:10px;" align="right">
            			    {$DETAJUSTE[lP].cantidad}
            				<input class="input-mini"  name="cant[]" id="cant[]"  type="hidden"  style="text-align: right;"  value="{$DETAJUSTE[lP].cantidad}">
            			</td>
        			
        			</tr> 
        			
				{/section}
				
			</tbody>
			
        </table>  
        
	</div>

					</br>
						
										
	<table class='table-reportes' style='text-align: center;font-family:Sans-serif;'>
	
			<thead>
			
				<tr>
				
					<th >________________________________</th>
					<!--<th>_________________________________</th>
					<th>_________________________________</th>-->
					
				</tr>
				
			</thead>
			
			<tbody>
			
				<tr>
				
					<td>Firma Encargado</td>
					<!--<td>Firma Chofer</td>
					<td>Firma Recibe Destino</td>-->
					
				</tr>
				
			</tbody>
			
	</table>
	
</form>            