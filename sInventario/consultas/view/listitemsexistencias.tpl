{$NAV_MENU}
	<section id="main" >
		<h2 style="font-family:'Courier New', Courier, serif;">TIENDA: {$NOMBRE_TIENDA}</h2>
		<h2 style="font-family:'Courier New', Courier, serif;">{$TIT_REPORTE}</h2>
	    Generado el: {$CURRENT_DATE}
		<form name="export" id="export" method="post" action="reports_export_excel.php" target="_blank">
			<input type="hidden" id="cual" name="cual" value="{$TIT_EXPORT}" />
			<input type="hidden" id="cualEnc" name="cualEnc" value="{$TIT_REPORTE}" />
			<input type="hidden" id="cualTienda" name="cualTienda" value="{$NOMBRE_TIENDA}" />
			<input type="hidden" id="dataExcel" name="dataExcel" />
		</form>           	                                
		<div id="imprimir" style="width:250px; margin: 15px 0;">
			<a href="javascript:;" onclick="printReport()" >Imprimir</a> | <a href="javascript:;" onclick="exportExcel()">Exportar Excel</a> 
		</div>               
        <table id="tblItemsList"  class="widefat" style="width: 100%;font-family:'Courier New', Courier, serif;">   
        	<thead>
            	<tr>
                	<th style="text-align:left">Codigo</th>                        
                    <th style="text-align:left">C&oacute;digo Provee.</th>
                  	<th style="text-align:left">Descripci&oacute;n</th>
                  	<th style="text-align:right">Costo Articulo</th>
                  	<th style="text-align:right">Existencia</th>                        
                </tr>
            </thead>
			<tbody id="info-items" >
				{section name=lP loop=$LISTA_EXISTENCIAS}
					<tr style="padding:0px; id="tr{$LISTA_EXISTENCIAS[lP].CodArti}"> 
						<td>{$LISTA_EXISTENCIAS[lP].CodArti}</td>                  
						<td >{$LISTA_EXISTENCIAS[lP].codArtiProveedor}</td>								                                                        
						<td style="text-align:left;" >{$LISTA_EXISTENCIAS[lP].desArticulo}</td>
						<td style="text-align:right;">{$LISTA_EXISTENCIAS[lP].CostoArti}</td>
						<td style="text-align:right;">{$LISTA_EXISTENCIAS[lP].ExistenciaTienda}</td>		
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
