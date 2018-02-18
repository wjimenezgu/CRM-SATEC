{$NAV_MENU}
    <section id="main" >
        <h2 style="font-family:'Courier New', Courier, serif;">TIENDA: {$NOMBRE_TIENDA}</h2>
        <h2 style="font-family:'Courier New', Courier, serif;">ESTADO REPARACION: {$ESTADO}</h2>
        <h2 style="font-family:'Courier New', Courier, serif;">{$TIT_REPORTE}</h2>
        Generado el: {$CURRENT_DATE}
        <form name="export" id="export" method="post" action="reports_export_excel.php" target="_blank">
            <input type="hidden" id="cual" name="cual" value="{$TIT_EXPORT}" />
            <input type="hidden" id="cualEnc" name="cualEnc" value="{$TIT_REPORTE}" />
            <input type="hidden" id="incluir" name="incluir" value="{$INCLUIR}">
            <input type="hidden" id="cualTienda" name="cualTienda" value="{$NOMBRE_TIENDA}" />
            <input type="hidden" id="dataExcel" name="dataExcel" />
        </form>                                             
        <div id="imprimir" style="width:250px; margin: 15px 0;">
            <a href="javascript:;" onclick="printReport()" >Imprimir</a>
        </div>               
        <table  id="tblItemsList"  class="widefat" style="width: 100%;font-family:'Courier New', Courier, serif;">   
            <thead>
                <tr>                  
                    <th style="text-align:left">Fecha Recibido</th>
                    <th style="text-align:left">ID</th>  
                    <th style="text-align:left">Cliente</th>
                    <th style="text-align:left">Equipo</th> 
                    <th class="center {IF $INCLUIR eq "R"} hidden {/if}" style="text-align:right">Adelanto</th>
                    <th class="center {IF $INCLUIR eq "A"} hidden {/if}" style="text-align:right">Reparacion</th>
                </tr>
            </thead>
            <tbody id="info-items" >
                {section name=lP loop=$LISTA_REPARACIONES}
                    <tr style="padding:0px; id="REPARACIONES"> 
                        <td >{$LISTA_REPARACIONES[lP].FechaRecibido}</td> 
                        <td >{$LISTA_REPARACIONES[lP].idReparacion}</td>                  
                        <td >{$LISTA_REPARACIONES[lP].nombre}</td> 
                        <td >{$LISTA_REPARACIONES[lP].Equipo}</td>
                       
                        
                        <td class="center {IF $INCLUIR eq "R"} hidden {/if}" style="text-align:right">{$LISTA_REPARACIONES[lP].Adelanto}</td>

                        <td class="center {IF $INCLUIR eq "A"} hidden {/if}" style="text-align:right">{$LISTA_REPARACIONES[lP].TotalReparacion}</td>     
                    </tr> 
                {/section}                                            
            </tbody>
        </table>    
</section>
    
    
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
