{$NAV_MENU}
	<section id="main" >
		<h2 style="font-family:'Courier New', Courier, serif;">{$CURRENT_STORE}</h2>
		<h3 style="font-family:'Courier New', Courier, serif;">{$TIT_REPORTE}</h3>
	    Generado el: {$CURRENT_DATE}
		<form name="export" id="export" method="post" action="reports_export_excel.php" target="_blank">
			<input type="hidden" id="tienda" name="cualTienda" value="{$CURRENT_STORE}" />
			<input type="hidden" id="cual" name="cual" value="{$TIT_EXPORT}" />
			<input type="hidden" id="cualEnc" name="cualEnc" value="{$TIT_REPORTE}" />
		    <input type="hidden" id="codArt" name="codArt" value="{$COD_ITEM}" />
		    <input type="hidden" id="desArt" name="desArt" value="{$DESCRIPCION}" />
		    <input type="hidden" id="provArt" name="provArt" value="{$COD_PROVEEDOR}" />
			<input type="hidden" id="dataExcel" name="dataExcel" />
		</form>           	                                
		<div id="imprimir" style="width:250px; margin: 15px 0;">
			<a href="javascript:;" onclick="printReport()" >Imprimir</a> | <a href="javascript:;" onclick="exportExcel()">Exportar Excel</a> 
		</div> 
		
		<div class="box-content">
				<form class="form-horizontal" id="frmEditItem"  action="processItem.php"  method="POST">
					<input type="hidden" id="action" name="action" value="{$ACTION}">
 			 		<fieldset>
 			 		
 			 			<table class="table">
 			 				<tr>
 			 				<td>
					
							<label>Codigo: {$COD_ITEM}</label>
							
				</div>
						</td>
						<td>			
			                
							<label >Descripcion: {$DESCRIPCION}</label>
							
				 	
				 		</td>
				 		<td>

							<label >Cod. Externo: {$COD_PROVEEDOR}</label>
							

				 		</td>				 		
				 		
				 		</tr>
		 		</table>	
		
		
		
		
		              
        <table id="tblItemsList"  class="widefat" style="width: 100%;font-family:'Courier New', Courier, serif;">   
        	<thead>
            	<tr>
                  	<th style="text-align:left">Fecha Movimiento</th>
                  	<th style="text-align:left">Documento</th>
                  	<th style="text-align:left">Tipo Mov.</th>
                  	<th style="text-align:right">Cantidad</th>
                 </tr>
            </thead>
			<tbody id="info-items" >
				{section name=lP loop=$LISTA_MOVI}
					<tr style="padding:5px;">
						<td >{$LISTA_MOVI[lP].FechaMovF}</td>
						<td >{$LISTA_MOVI[lP].NumDocu}</td>
						<td >{$LISTA_MOVI[lP].Siglas}</td>
						<td style="text-align:right" >{$LISTA_MOVI[lP].CantiMov}</td>
						         		
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
