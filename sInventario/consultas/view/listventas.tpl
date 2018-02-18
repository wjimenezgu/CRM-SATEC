{$NAV_MENU}
	<section id="main" >
		<h1 style="font-family:'Courier New', Courier, serif;">{$CURRENT_STORE}</h1>
		<h2 style="font-family:'Courier New', Courier, serif;">{$TIT_REPORTE}</h2>
	    Generado el: {$CURRENT_DATE}
		<form name="export" id="export" method="post" action="reports_export_excel.php" target="_blank">
			<input type="hidden" id="cual" name="cual" value="{$TIT_EXPORT}" />
			<input type="hidden" id="cualEnc" name="cualEnc" value="{$TIT_REPORTE}" />
			<input type="hidden" id="dataExcel" name="dataExcel" />
		</form>           	                                
		<div id="imprimir" style="width:250px; margin: 15px 0;">
			<a href="javascript:;" onclick="printReport()" >Imprimir</a> | <a href="javascript:;" onclick="exportExcel()">Exportar Excel</a> 
		</div>               
        <table id="tblItemsList"  class="widefat" style="width: 100%;font-family:'Courier New', Courier, serif;">   
        	<thead>
            	<tr>
            
                   
                  	<th style="text-align:left">Cod.Articulo</th>
                  	<th style="text-align:left">Descripcion</th>
                  	<th style="text-align:left">Codigo Proveedor</th>
                  	<th style="text-align:right">Existencia</th>
                  	<th style="text-align:right">Cantidad</th>
                  
                </tr>
            </thead>
			<tbody id="info-items" >
				{section name=lP loop=$LISTA_MOVI}
					<tr style="padding:0px;"> 
				
						<td >{$LISTA_MOVI[lP].CodArti}</td>
						<td >{$LISTA_MOVI[lP].desArticulo}</td>
						<td >{$LISTA_MOVI[lP].codArtiProveedor}</td>
						<td style="text-align:right">{$LISTA_MOVI[lP].ExistenciaFechaFin}</td>
						<td style="text-align:right">{$LISTA_MOVI[lP].MoviArti}</td>
						         		
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
