<!DOCTYPE html>
<html lang="en" >
    <head>

        <link rel="shortcut icon" href="http://localhost/CRM-SATEC/resources/img/favicon.ico">

        <meta charset="UTF-8">
        <title>CRM | Satec SA</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
        <meta name="author" content="Estrategias con Tecnología JL S.A.">

        <link href="http://localhost/CRM-SATEC/resources/css/bootstrap-classic.css" rel="stylesheet">	

        <link href="http://localhost/CRM-SATEC/resources/css/_aditional.css" rel="stylesheet">
        <link href="http://localhost/CRM-SATEC/resources/css/bootstrap-responsive.css" rel="stylesheet">	
        <link href="http://localhost/CRM-SATEC/resources/css/charisma-app.css" rel="stylesheet">

    </head>

    <body> 
    	<div id="imprimir" style="width:250px; margin: 15px 0;">
			<a href="javascript:;" onclick="printReport()" >Imprimir</a> 
		</div>               
        <div class="container-fluid" style="font-family: monospace; font-size:50%">
            
            <div class="row-fluid">
                <div class="span3">
                  
                    <p class="center">{$DATOS_TIENDA["NombreCia"]}></p>
                    <p class="center">{$DATOS_TIENDA["NombreTienda"]}</p>
                    <p class="center">{$DATOS_TIENDA["CedulaJuridica"]}</p>
                    <p class="center">{$DATOS_TIENDA["Direccion"]}</p>
                    <p class="center">{$DATOS_TIENDA["Ubicacion"]}</p>
                    <p class="center">{$DATOS_TIENDA["Telefonos"]}</p>                    
                    <p class="center">{$DATOS_TIENDA["CorreoContacto"]}</p>                           
                    
                </div>
            </div>
            <div class="row-fluid">
                <div class="span3">
                  
                    <div class="box-content">
                    <table border="0" cellspacing="0" cellpadding="0" width="410">
                    <tr>
                        <td colspan="5" style="height: 1px; border-bottom: dashed thin #000;"></td>
                    </tr> 
                    <tr>
                        <td colspan="5" style="height: 1px; border-bottom: dashed thin #000;"></td>
                    </tr> 
                    </table>
                    </div>
                    
                </div>
            </div>
            <div class="row-fluid">
                <div class="span3">                 
                    <div class="box-content">
                        <table border="0" cellspacing="0" cellpadding="0" width="410">
                                <tr>
                                    <td width="205" align="left"># Factura: {$ENC_FACTURA["numFactura"]}</td>
                                    <td width="205" align="right" style="height: 25px;">{$ENC_FACTURA["fecFactura"]</td>                                   
                                </tr>                                
                                <tr>
                                    <td colspan="2" align="left" style="height: 25px;">Cliente: {$ENC_FACTURA["idCliente"]} </td>                                                  
                                </tr>                                
                                <tr>
                                    <td colspan="2" align="left" style="height: 25px;">Vendedor: {$ENC_FACTURA["nombreVendedor"]}</td>                                                  
                                </tr>                                
                                <tr>
                                    <td colspan="2" align="left" style="height: 25px;">Forma Pago: {$ENC_FACTURA["numOC"]}</td>                                                  
                                </tr>
                                <tr>
                                    <td colspan="2" align="left" style="height: 25px;">Forma Pago: {$ENC_FACTURA["obs"]}</td>                                                  
                                </tr>                                

                        </table>
                    </div>                    
                    
                </div>
            </div>
            
            <div class="row-fluid">			
                <div class="span3">
                    <div class="box-content">
                    <table border="0" cellspacing="0" cellpadding="0" width="410">
                    <tr>
                        <td colspan="5" style="height: 1px; border-bottom: dashed thin #000;"></td>
                    </tr> 
                    <tr>
                        <td colspan="5" style="height: 1px; border-bottom: dashed thin #000;"></td>
                    </tr> 
                    </table>
                    </div>
                    <div class="box-content">
                        <table border="0" cellspacing="0" cellpadding="0" width="410">
                            <thead>
                                <tr style="border-bottom: solid thin #000;">
                                    <th width="110" align="left">Codigo</th>
                                    <th width="40"  align="right">Cant</th>
                                    <th width="110" align="right">Precio</th>
                                    <th width="40"  align="right">Des </th>
                                    <th width="110" align="right">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                {section name=d loop=$LISTA_DETFACARTI}
                                <tr>
                                    <td width="110" align="left" style="height: 25px" >{$LISTA_DETFACARTI[d].codArti}</td>
                                    <td width="40" align="right">{$v[d].cantidad}</td>
                                    <td width="110" align="right">{$LISTA_DETFACARTI[d].PrecioVenta}</td>
                                    <td width="40" align="right">{if $LISTA_DETFACARTI[d].PorceDesc !=""}{$LISTA_DETFACARTI[d].PorceDesc}{else}0{/if}%</td>
                                    <td width="110" align="right">{$LISTA_DETFACARTI[d].PrecioTotal}</td>
                                </tr>                                
                                <tr>
                                    <td colspan="5">{$DETAIL_FACTURA[d].desArticulo}</td>
                                </tr>                                                             
                                <tr>
                                    <td colspan="5" style="height: 1px; border-bottom: dashed thin #000;"></td>
                                </tr>                                
                                {/section}
                            </tbody>
                            <tr>
                            	<td colspan="3" align="right">
                            	  Sub Total:
                            	</td>
                            	<td colspan="2" align="right">
                            	  {$ENC_FACTURA["subTotal"]}
                            	</td>
                            </tr>
                            <tr>
                            	<td colspan="3" align="right">
                            	  Descuento:
                            	</td>
                            	<td colspan="2" align="right">
                            	  {$ENC_FACTURA["descuento"]}
                            	</td>                            
                            </tr>
                            <tr>
                            	<td colspan="3" align="right">
                            	  Impuesto:
                            	</td>
                            	<td colspan="2" align="right">
                            	  {$ENC_FACTURA["impuesto"]}
                            	</td>                            
                            </tr>  
                            <tr>
                            	<td colspan="3" align="right">
                            	  Total:
                            	</td>
                            	<td colspan="2" align="right">
                            	  {$ENC_FACTURA["Total"]}
                            	</td>                            
                            </tr>                                                                  
                        </table>
                    </div>
                </div> 
            </div>
            <div class="row-fluid">
                <div class="span3">
                  
                    <div class="box-content">
                    <table border="0" cellspacing="0" cellpadding="0" width="410">
                    <tr>
                        <td colspan="5" style="height: 1px; border-bottom: dashed thin #000;"></td>
                    </tr> 
                    <tr>
                        <td colspan="5" style="height: 1px; border-bottom: dashed thin #000;"></td>
                    </tr> 
                    <tr>
                        <td colspan="5">
                            &nbsp;
                        </td>
                    </tr>
                    <tr>
                        <td colspan="5" align="center">
                            {$DATOS_TIENDA["LeyendaTributacion"]}
                        </td>
                    </tr>
                    </table>
                    </div>
                    
                </div>
            </div>            
        </div>
    </body>
{literal}
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
{/literal}
    
</html>
