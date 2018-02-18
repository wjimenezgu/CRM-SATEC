<style type="text/css">
<!--
table { vertical-align: top; }
tr    { vertical-align: top; }
td    { vertical-align: top; }
-->
</style>
<page backcolor="#FEFEFE" backimg="./res/bas_page.png" backimgx="center" backimgy="bottom" backimgw="100%" backtop="40mm" backbottom="30mm" footer="date;heure;page" style="font-size: 12pt">
    <page_header>
    
    <table cellspacing="0" style="width: 97%;  font-size: 16px;">
        <tr>
            <td style="margin-left:15px; width: 50%;">
                <img  src="../../resources/img/logoPage.jpg" alt="Logo"><br>
            </td>
            <td style="width: 10%;">                        
            </td>
            <td style="width: 40%; color: #444444; text-align:right; padding:10px; border: solid 1px black;" valign="middle">                
             <!--    PEDIDO | ORDEN NO. 000000{$ID_PEDIDO}  -->
                <b>ORDER NO. | PEDIDO {$PED_HEADER['numOrdenCompra']}</b>
            </td>
        </tr>
    </table>
    <table cellspacing="0" style="width: 97%;  font-size: 10px;">
        <tr>
			<td style="text-align: right; width: 99%; padding:5px; padding-right:-19px;">page | página [[page_cu]]/[[page_nb]]</td> 
        </tr>
    </table>      
    <table cellspacing="0" style="margin-left:5px; width: 97%;  font-size: 12px;">
        <tr>
            <td style="width: 50%;">
                <table >
                    <tr>
                        <td><b>To/Para:</b></td>
                        <td>{$PED_HEADER['nombreProveedor']|capitalize}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td style="width:275px">{$PED_HEADER['direccion']|lower|capitalize}</td>
                    </tr>
                    <tr>
                        <td><b>Pho/Tel:</b></td>
                        <td>{$PED_HEADER['telefono']}</td>
                    </tr>
                    {if $PED_HEADER['fax'] !=""}
                    <tr>
                        <td><b>FAX:</b></td>
                        <td>{$PED_HEADER['fax']}</td>
                    </tr>
                    {/if}
                </table>
                  <br />                 
            </td>
            <td style="width: 50%; color: #444444;" valign="middle">                
                <table cellspacing="0" style="width: 100%;  font-size: 14px;  border: solid 1px black;">
                    <tr>
                        <td style="width: 50%;">
                            
                        </td>
                        <td style="width: 50%; color: #444444;" valign="middle">                
                            
                        </td>
                    </tr>
                </table>                   
            </td>
        </tr>
    </table> 
    </page_header>  
    <page_footer>
        <table style="margin-left:5px; width: 97%;">
            <tr>
            <!-- 
               Agosto 26, 14 William Jimenez
               El usuario no quiere poner en el pie de pagina, el numero de hoja, hay pasarlo para otro lado.
               Solo quiere una linea que divida.
                <td style="text-align: right; width: 100%; padding:5px; padding-right:-19px;">page | página [[page_cu]]/[[page_nb]]</td>
            -->
                <td style="width: 100%; color: #444444;" valign="middle">                
                	<table cellspacing="0" style="width: 100%;  font-size: 14px;  border: solid 1px black;">
                    	<tr>
                        	<td style="width: 50%;"> </td>
                        	<td style="width: 50%; color: #444444;" valign="middle"></td>
                    	</tr>
                	</table>                   
            	</td>
            </tr>
        </table>
    </page_footer>            
    
    <table cellspacing="0" style="margin-left:5px; width: 97%;  font-size: 14px;">
        <tr>
            <td style="width: 50%;">
                <table cellspacing="0" style="width: 100%;  font-size: 12px; ">                    
                    <tr>
                        <td>
                          <br>  <b>Instructions/Instrucciones:</b>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            
                        </td>
                    </tr>
                    <tr>
                        <td style="border: solid 1px black; width:95%; height:50px; padding:5px;">                           
                            {$PED_HEADER['comentarios']}
                        </td>
                    </tr>
                </table>
            </td>
            <td style="width: 50%; color: #000;" valign="top">                
                <table cellspacing="0" style="width: 100%;  font-size: 12px; ">
                    <tr>
                        <td style="width: 40%;">
                            <b>Order Date/Fecha Pedido</b>
                        </td>
                        <td style="width: 10%;">
                            <b>:</b>
                        </td>
                        <td style="width: 50%; color: #333333;" valign="middle">                
                            {$PED_HEADER['fecCreacion']}
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3"> </td>
                    </tr>
                    <tr>
                        <td>
                            <b>Arriving Date/Fecha Arribo</b>
                        </td>
                        <td>
                            <b>:</b>
                        </td>
                        <td style="color: #333333;" valign="middle">                
                            {$PED_HEADER['fecEmbarque']}
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3"> </td>
                    </tr>                    
                    <tr>
                        <td>
                            <b>Terms/Forma de Pago</b>
                        </td>
                        <td>
                            <b>:</b>
                        </td>
                        <td style="color: #333333;" valign="middle">                
                            {$PED_HEADER['descOpPago']|lower|capitalize}
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3"> </td>
                    </tr>                    
                    <tr>
                        <td>
                            <b>Partial Shipments/Embarques Parciales</b>
                        </td>
                        <td>
                            <b>:</b>
                        </td>
                        <td style="color: #333333;" valign="middle">                
                            {$PED_HEADER['descaceptaParciales']}
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3"> </td>
                    </tr>                    
                    <tr>
                        <td>
                            <b>Currency/Moneda</b>
                        </td>
                        <td>
                            <b>:</b>
                        </td>
                        <td style="color: #333333;" valign="middle">                
                            {$PED_HEADER['descMoneda']|lower|capitalize}
                        </td>
                    </tr>
                </table>                   
            </td>
        </tr>
    </table>
    <table cellspacing="0" style="margin-left:5px; width: 97%;  font-size: 12px; ">
        <tr>
            <td style="width:33.33%;">
                <table cellspacing="0" style="width: 100%;  font-size: 12px; ">                    
                    <tr>
                        <td>
                            <b>Shipping Marks/Marcas:</b>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            
                        </td>
                    </tr>
                    <tr>
                        <td style="border: solid 1px black; width:100%; height:15px; padding:5px;">                           
                            {$PED_HEADER['marcas']}
                        </td>
                    </tr>
                </table>                
            </td>
            <td style="width:33.33%;">
                <table cellspacing="0" style="width: 100%;  font-size: 12px; ">                    
                    <tr>
                        <td>
                            <b>Packing/Empaque:</b>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            
                        </td>
                    </tr>
                    <tr>
                        <td style="border: solid 1px black; width:100%; height:15px; padding:5px;">                           
                            {$PED_HEADER['empaque']}
                        </td>
                    </tr>
                </table>                  
            </td>
            <td style="width:33.33%;">
                <table cellspacing="0" style="width: 100%;  font-size: 12px; ">                    
                    <tr>
                        <td>
                            <b>Ship Via/Expedir por:</b>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            
                        </td>
                    </tr>
                    <tr>
                        <td style="border: solid 1px black; width:100%; height:15px; padding:5px;">                           
                            {$PED_HEADER['viaenvio']}
                        </td>
                    </tr>
                </table>                  
            </td>
        </tr>
    </table>   
    <table cellspacing="0" style="margin-left:5px; width: 97%;  font-size: 12px; ">
        <tr>
            <td style="width:33.33%;">
                <table cellspacing="0" style="width: 100%;  font-size: 12px; ">                    
                    <tr>
                        <td>
                            <b>Shipping Address/Dir. Envío:</b>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            
                        </td>
                    </tr>
                    <tr>
                        <td style="border: solid 1px black; width:100%; height:28px; padding:5px;">                           
                            {$PED_HEADER['LineaMer1']}<br>
                            {$PED_HEADER['LineaMer2']}<br>
                            {$PED_HEADER['LineaMer3']}
                        </td>
                    </tr>
                </table>                
            </td>
            <td style="width:33.33%;">
                <table cellspacing="0" style="width: 100%;  font-size: 12px; ">                    
                    <tr>
                        <td>
                            <b>Shipping Documents/Dir. Documentos:</b>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            
                        </td>
                    </tr>
                    <tr>
                        <td style="border: solid 1px black; width:100%; height:28px; padding:5px;">                           
                            {$PED_HEADER['LineaDoc1']}<br>
                            {$PED_HEADER['LineaDoc2']}<br>
                            {$PED_HEADER['LineaDoc3']}
                        </td>
                    </tr>
                </table>                  
            </td>
            <td style="width:33.33%;">
                <table cellspacing="0" style="width: 100%;  font-size: 12px; ">                    
                    <tr>
                        <td>
                            <b>Credit Card/Tarjeta:</b>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            
                        </td>
                    </tr>
                    <tr>
                        <td style="border: solid 1px black; width:100%; height:28px; padding:5px;">                           
                            {$PED_HEADER['LineaTar1']}<br>
                            {$PED_HEADER['LineaTar2']}<br>
                            {$PED_HEADER['LineaTar3']}
                        </td>
                    </tr>
                </table>                  
            </td>
        </tr>
    </table>   
    <br>
    <b style="margin-left:5px; font-size:12px;">Order Detail/Detalle de la Orden:</b>
    <br>
    <br>
    <table cellspacing="0" style="margin-left:5px; width: 97%; border: solid 1px black; background: #E7E7E7; text-align: center; font-size: 12px;">
        <tr>
            <th style="width: 12%;" rowspan="2" valign="middle">#Item</th>
            <th style="width: 52%;">Item/Artículo</th>
            <th style="width: 10%;" rowspan="2" valign="middle">Qty/Cant</th>            
            <th style="width: 13%; text-align: right;" rowspan="2" valign="middle">Unit/Unitario</th>
            <th style="width: 13%; text-align: right;" rowspan="2" valign="middle">Total</th>
        </tr>
        <tr>
           
            <th style="width: 52%">
                <table cellspacing="0" style="width: 100%; border: solid 1px black; background: #E7E7E7; text-align: center; font-size: 12px;">
                    <tr>
                        <th style="width: 26%; text-align: left;">Item ID/Codigo</th>
                        <th style="width: 50%;">Description/Descripción</th>                        
                        <th style="width: 24%; text-align: left;">Local ID</th>
                    </tr>                    
                </table>
            </th>
        </tr>
    </table>
    
    <table cellspacing="0" style="margin-left:5px; width: 97%; border: solid 1px black; background: #F7F7F7; text-align: center; font-size: 12px;">
        {section loop=$PED_DETAIL name=pd}
        <tr>
            <td style="width: 12%;">{$PED_DETAIL[pd].idLinea}</td>
            <td style="width: 52%;">
                <table cellspacing="0" style="width: 100%;text-align: center; font-size: 12px;">
                    <tr>
                        <td style="width: 26%;">{$PED_DETAIL[pd].codArtiProveedor}</td>
                        <td style="text-align:left; width: 50%;">{$PED_DETAIL[pd].descArti}</td>
                        <td style="width: 24%;">{$PED_DETAIL[pd].codArti}</td>
                    </tr>                    
                </table>
            </td>
            <td style="width: 10%;">{$PED_DETAIL[pd].cantidad}</td>
            <td style="width: 13%; text-align: right">{$PED_DETAIL[pd].costoUnitario|number_format:2:".":","}</td>
            <td style="width: 13%; text-align: right;">{$PED_DETAIL[pd].costoTotal|number_format:2:".":","}</td>
        </tr>
        {/section}
    </table>    
    
    <table cellspacing="0" style="margin-left:5px; width: 97%; border: solid 1px black; background: #E7E7E7; text-align: center; font-size: 12px;">
        <tr>
            <th style="width: 87%; text-align: right;">Sub-Total : </th>
            <th style="width: 13%; text-align: right;">{$PED_HEADER['subtotal']|number_format:2:".":","}</th>
        </tr>
        <tr>
            <th style="width: 87%; text-align: right;">Shipping Cost/Costos Envío : </th>
            <th style="width: 13%; text-align: right;">{$PED_HEADER['costoEnvio']|number_format:2:".":","}</th>
        </tr>
        <tr>
            <th style="width: 87%; text-align: right;">{$PED_HEADER['etiquetaOtrosCostos']} : </th>
            <th style="width: 13%; text-align: right;">{$PED_HEADER['otrosCostos']|number_format:2:".":","}</th>
        </tr>
        <tr>
            <th style="width: 87%; text-align: right;">Total : </th>
            <th style="width: 13%; text-align: right;">{$TOTAL_PEDIDO|number_format:2:".":","}</th>
        </tr>
    </table>

    <br>
    <b style="margin-left:45px; font-size:16px;">Saludos</b>
    <br>
    <br>
    <br>
    <br> 
    <b style="margin-left:45px; font-size:16px;">Francisco Arias B.</b>
    <br>                   
    <b style="margin-left:45px; font-size:16px;">Gerente General</b>
</page>