{$NAV_MENU}
     <form class="form-horizontal" id='impForm'  >
    	<div id="imprimir" style="width:250px; margin: 15px 0;">
			<a href="javascript:;" onclick="printReport()" >Imprimir</a> 
		</div>               
        <div class="container-fluid" style="font-family: monospace; font-size:50%">
            <div class="row-fluid">
                      
                    <div class="box-content">
                        <table border="1" cellspacing="0" cellpadding="0">
								<tr>
									<td># Factura: {$ENC_FACTURA[0]["numFactura"]}</td>									                                    
                                    <td width="110" align="right" style="height: 25px;">X</td>                                   
                                </tr>                          
								<tr>
									<td></td>									                                    
                                    <td  align="right" style="height: 25px;">{$ENC_FACTURA[0]["fecFactura"]}</td>                                   
                                </tr>                                     
                                <tr>
                                    <td  width="510" align="left" style="height: 25px;">Senores: {$ENC_FACTURA[0]["idCliente"]} </td>                                                  
                                </tr> 
                                <tr>
                                    <td  align="left" style="height: 25px;">Direccion: {$ENC_FACTURA[0]["idCliente"]} </td>                                                  
                                </tr>                                                            
                        </table>
                    </div>                    
                    
                </div>
        
            
            <div class="row-fluid">			
            
                    <div class="box-content">
                        <table border="1" cellspacing="0" cellpadding="0" >
                            <thead>
                                <tr style="border-bottom: solid thin #000;">
                                    <th width="40"  align="left">Codigo</th>
                                    <th width="40"  align="right">Cant</th>
                                    <th width="470" align="left">Descripcion</th>
                                    <th width="40"  align="right">Des </th>
                                    <th width="40"  align="right">Precio</th>
                                    <th width="40"  align="right">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                {section name=d loop=$LISTA_DETFACARTI}
                                <tr>
                                    <td align="left" style="height: 25px" >{$LISTA_DETFACARTI[d].codArti}</td>
                                    <td align="right">{$LISTA_DETFACARTI[d].cantidad}</td>
                                    <td align="left">{$LISTA_DETFACARTI[d].desArticulo}</td>
                                    <td align="right">{if $LISTA_DETFACARTI[d].PorceDesc !=""}{$LISTA_DETFACARTI[d].PorceDesc}{else}0{/if}%</td>
                                    <td align="right">{$LISTA_DETFACARTI[d].PrecioVenta}</td>                                    
                                    <td align="right">{$LISTA_DETFACARTI[d].PrecioTotal}</td>
                                </tr>                                                             
                                {/section}
                            </tbody>
                            <!-- INICIA LINEAS DEL GOBIERNO -->
                            <tr>
                            	<td colspan="3" align="left">
                            	  POS. PRESUPUESTARIA: {$INFO_MODOGOB[0]["posPresupuestaria"]}
                            	</td>                            	
                            </tr>
                            <tr>
                            	<td colspan="3" align="left">
                            	  FONDO: {$INFO_MODOGOB[0]["fondo"]}
                            	</td>                            	
                            </tr>
                            <tr>
                            	<td colspan="3" align="left">
                            	  AREA FUNCIONAL: {$INFO_MODOGOB[0]["areaFuncional"]}
                            	</td>                            	
                            </tr>
                            <tr>
                            	<td colspan="3" align="left">
                            	  N.SOLICITUD PEDIDO: {$INFO_MODOGOB[0]["solPedido"]}
                            	</td>                            	
                            </tr>
                            <tr>
                            	<td colspan="3" align="left">
                            	  TRAMITE DE COMPRA: {$INFO_MODOGOB[0]["tramiteCompra"]}
                            	</td>                            	
                            </tr>
                            <tr>
                            	<td colspan="3" align="left">
                            	  CUENTA CLIENTE: {$INFO_MODOGOB[0]["ctaCliente"]}
                            	</td>  
                            	<td align="right">Total</td>
                            	<td colspan="2" align="right">{$ENC_FACTURA[0]["subTotal"]}</td>                          	
                            </tr>
                            <!-- FIN LINEAS DEL GOBIERNO -->
                            <!-- LINEA DE OBSERVACIONES -->
                            <tr>
                            	<td colspan="3" align="left">
                            	  {$ENC_FACTURA[0]["obs"]}
                            	</td> 
                            	<td align="right">Descuento</td>
                            	<td colspan="2" align="right">{$ENC_FACTURA[0]["descuento"]}</td>                            	
                            </tr>
                            <!-- FIN LINEA DE OBSERVACIONES -->
                            <tr>
                           		<td colspan="2" align="right">
                            	  30
                            	</td>
                            	<td colspan="2" align="right">
                            	  Total Venta:
                            	</td>
                            	<td colspan="2" align="right">
                            	  {$ENC_FACTURA[0]["subTotal"]}
                            	</td>
                            </tr>
                            <tr>
                            	<td colspan="4" align="right">
                            	  Impuesto:
                            	</td>
                            	<td colspan="2" align="right">
                            	  {$ENC_FACTURA[0]["impuesto"]}
                            	</td>                            
                            </tr>  
                            <tr>
                            	<td colspan="4" align="right">
                            	  Total a Pagar:
                            	</td>
                            	<td colspan="2" align="right">
                            	  {$ENC_FACTURA[0]["Total"]}
                            	</td>                            
                            </tr>                                                                  
                        </table>
                    </div>
               
            </div>        
        </div> <!-- containger -->
   </form>


<script type="text/javascript">

$(document).ready(function(){

});

function exportExcel(){
	//alert( $("<div>").append($(".widefat").eq(0).clone()).html() );
	$("#dataExcel").val( $("<div>").append($(".widefat").eq(0).clone()).html());
	$("#export").submit();
}

function printReport(){
	$('#imprimir').css('display', 'none'); 
	if (window.print) {
		window.print();
	}else{
		alert("Lo siento, pero a su navegador no se le puede ordenar imprimir" + " desde la web. Actualise.");
	}
	
	setTimeout("$('#imprimir').css('display', 'block')", 800);
}


</script>


