<!DOCTYPE html>
<html lang="en" >
    <head>

        <link rel="shortcut icon" href="http://localhost/CRM-SATEC/resources/img/favicon.ico">

        <meta charset="utf-8">
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
        <div class="container-fluid">
            
            <div class="row-fluid">
                <div class="span3">
                  
                    <p class="center"><b>{$DATOS_TIENDA["NombreCia"]}</b></p>
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
                                    <td width="205" align="left"><b># Factura: </b>{$HEAD_FACTURA["numDocu"]}</td>
                                    <td width="205" align="right" style="height: 25px;"><b>Fecha:</b> 25 / 08 / 2015, 11:20 AM</td>                                   
                                </tr>                                
                                <tr>
                                    <td colspan="2" align="left" style="height: 25px;"><b>Cliente: </b>{$HEAD_FACTURA["nombre"]} </td>                                                  
                                </tr>                                
                                <tr>
                                    <td colspan="2" align="left" style="height: 25px;"><b>Vendedor: </b>{$HEAD_FACTURA["nombreVendedor"]}</td>                                                  
                                </tr>                                
                                <tr>
                                    <td colspan="2" align="left" style="height: 25px;"><b>Forma Pago: </b>{$HEAD_FACTURA["formaPago"]}</td>                                                  
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
                                    <th width="110" style="height: 25px"  align="left">Codigo</th>
                                    <th width="40" align="right">Cant</th>
                                    <th width="110" align="right">Precio</th>
                                    <th width="40" align="right">Des </th>
                                    <th width="110" align="right">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                {section name=d loop=$DETAIL_FACTURA}
                                <tr>
                                    <td width="110" align="left" style="height: 25px" >{$DETAIL_FACTURA[d].codArti}</td>
                                    <td width="40" align="right">{$DETAIL_FACTURA[d].cantidad}</td>
                                    <td width="110" align="right">{$DETAIL_FACTURA[d].PrecioVenta}</td>
                                    <td width="40" align="right">{if $DETAIL_FACTURA[d].PorceDesc !=""}{$DETAIL_FACTURA[d].PorceDesc}{else}0{/if}%</td>
                                    <td width="110" align="right">{$DETAIL_FACTURA[d].PrecioTotal}</td>
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
                            	  {$HEAD_FACTURA["subTotal"]}
                            	</td>
                            </tr>
                            <tr>
                            	<td colspan="3" align="right">
                            	  Descuento:
                            	</td>
                            	<td colspan="2" align="right">
                            	  {$HEAD_FACTURA["descuento"]}
                            	</td>                            
                            </tr>
                            <tr>
                            	<td colspan="3" align="right">
                            	  Impuesto:
                            	</td>
                            	<td colspan="2" align="right">
                            	  {$HEAD_FACTURA["impuesto"]}
                            	</td>                            
                            </tr>  
                            <tr>
                            	<td colspan="3" align="right">
                            	  Total:
                            	</td>
                            	<td colspan="2" align="right">
                            	  {$HEAD_FACTURA["Total"]}
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
</html>