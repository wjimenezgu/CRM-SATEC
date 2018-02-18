
<page backcolor="#FEFEFE" backimgx="center" backimgy="bottom" backimgw="100%" backtop="20mm" backbottom="10mm" footer="date;heure;page" style="font-size: 12pt">
    <page_header>
        <table cellspacing="0" style="width: 100%; " >
        <tr>
            <td style="margin-left:15px; width: 50%;">
                <label>Tienda: {$DATOS_TIENDA["NombreTienda"]}</label>
                <br>                                                                                        
                <label >Del: {$FECHA_INICIAL} al {$FECHA_FINAL}</label> 
            </td>
            <td style="width: 10%;"></td>
            <td style="width: 40%; color: #444444; text-align:right;" valign="middle">                                      
                <b>REPORTE DE FACTURACION</b>
                <br>
                <label style="text-align: right; font-size: 60%" >Generado: {$CURRENT_DATE}</label>
                <br>
                <label style="text-align: right; font-size: 80%" >P&aacute;g: [[page_cu]]/[[page_nb]]</label>                
            </td>
        </tr>
        </table>
    </page_header>
    <page_footer>
        <table style="margin-left:5px; width: 100%;">
            <tr>
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
    <table cellspacing="7" style="margin-left:15px; width: 100%;font-size:12px;font-family: Arial, Courier, Serif">
		<tr>
            <td colspan="12" style="text-align:center;" >FACTURAS</td>
        </tr>
        <tr>
            <td colspan="1">#Factura</td>
            <td colspan="5" style="width: 15%;">F.Pago</td>
            <td style="text-align:right;">Exenta</td>
            <td style="text-align:right;">Gravada</td>
            <td style="text-align:right;">Descuento</td>
            <td style="text-align:right;">&#37;</td>
            <td style="text-align:right;">Imp.Ventas</td>
            <td style="text-align:right;">Total</td>
            
        </tr>
        {section name=lP loop=$LISTA_FACTURAS}                              
            <tr>                                            
                <td colspan="1">
                    {$LISTA_FACTURAS[lP].NumFactura}
                </td>
                <td colspan="5">
                    {$LISTA_FACTURAS[lP].descCorta}
                </td>                                           
                <td style="text-align:right;">
                    {$LISTA_FACTURAS[lP].EXENTA}
                </td>
                <td style="text-align:right;">
                    {$LISTA_FACTURAS[lP].GRAVADA}
                </td>                                           
                <td style="text-align:right;">
                    {$LISTA_FACTURAS[lP].DESCUENTO}
                </td>                                           
                <td style="text-align:right;">
                    {$LISTA_FACTURAS[lP].PORCEDESC}
                </td>                                           
                <td style="text-align:right;">
                    {$LISTA_FACTURAS[lP].IMPUESTO}
                </td>                                           
                <td style="text-align:right;">
                    {$LISTA_FACTURAS[lP].MONTO_TOTAL}
                </td>                                                                               
           </tr> 
        {/section}
        <!-- se agregan los totales de las facturas  -->
        <tr>
          <td colspan="6" style="text-align:right;">TOTAL DE FACTURAS</td>
          <td style="text-align:right;">{$SOLO_TOTALES_FACTURAS[0].EXENTA}</td>
          <td style="text-align:right;">{$SOLO_TOTALES_FACTURAS[0].GRAVADA}</td>
          <td style="text-align:right;">{$SOLO_TOTALES_FACTURAS[0].DESCUENTO}</td>
          <td colspan="1"></td>  <!-- columna porcentaje descuento -->
          <td style="text-align:right;"><b>{$SOLO_TOTALES_FACTURAS[0].IMPUESTO}</b></td>
          <td style="text-align:right;"><b>{$SOLO_TOTALES_FACTURAS[0].MONTO_TOTAL}</b></td>       
        </tr>
        <!-- se agregan las NOTAS DE CREDITO -->
        <tr>
            <td colspan="12" style="text-align:center;" >NOTAS</td>
       </tr>
       <tr>                                     
            <td>#Nota</td>
            <td>#Factura Aplica</td>
            <td colspan="8">Raz&oacute;n</td>                                       
            <td style="text-align:right;">Imp.Ventas</td>
            <td style="text-align:right;">Total</td>
       </tr>
       {section name=lP loop=$LISTA_NOTAS}                              
       <tr>
            <td>
                {$LISTA_NOTAS[lP].NumNota}
            </td>
            <td>
                {$LISTA_NOTAS[lP].DocAplica}
            </td>
            <td colspan="8">
                {$LISTA_NOTAS[lP].razonNota}
            </td>
            <td style="text-align:right;">
                {$LISTA_NOTAS[lP].IMPUESTO}
            </td>                                           
            <td style="text-align:right;">
                {$LISTA_NOTAS[lP].MONTO_TOTAL}
            </td>                                                                                   
        </tr> 
       {/section}
       <tr>
        <td colspan="10" style="text-align:right;">TOTAL</td>
        <td style="text-align:right;">
            <b>{$TOTALES_NOTAS[0].IMPUESTO}</b>
        </td>                                       
        <td style="text-align:right;">
            <b>{$TOTALES_NOTAS[0].MONTO_TOTAL}</b>
        </td>                                                                                                                   
      </tr>
      <tr>
        <td colspan="11" style="text-align:right;"><b>TOTAL FINAL</b></td>                                                                      
        <td style="text-align:right;">
            <b>{$GRAN_TOTAL}</b>
        </td>                                                                                                                   
      </tr>
      <tr>
        <td colspan="12" style="text-align:center;" >TOTALES X FORMA DE PAGO</td>
      </tr>
      <tr>                                      
        <td colspan="11" style="text-align:left;">Forma de Pago</td>
        <td style="text-align:right;">Total</td>
      </tr>
      {section name=lPt loop=$TOTALES_FACTURAS}
        <tr> 
            <td colspan="11">
                {$TOTALES_FACTURAS[lPt].descCorta}
            </td>
            <td style="text-align:right;">
                {$TOTALES_FACTURAS[lPt].MONTO_TOTAL}
            </td>
        </tr>
      {/section}        
    </table>        
</page>
