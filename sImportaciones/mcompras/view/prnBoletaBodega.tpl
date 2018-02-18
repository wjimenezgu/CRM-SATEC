{$NAV_MENU}
	<section id="main" >
	<br>  
	<h1 style="font-family:'Courier New', Courier, serif;">{$TIT_REPORTE}</h1>
		<div id="imprimir" style="width:250px; margin: 15px 0;">
			<a href="javascript:;" onclick="printReport()" >Imprimir </a>
		</div> 
            <h2 style='text-align:  center;'>Número de Orden:{$LIST_ITEMS_ORDERS[0].numOrdenCompra}</h2>	
	
        <table id="tblItemsList" class="table-reportes" style="font-family:'Arial', Courier, serif;">   
        	<thead>
            	<tr>
                	<th style="text-align:left;padding-left:5px;">Codigo</th>
                	<th style="text-align:left;padding-left:5px;width:100px;">Externo</th>                                        	
                    <th style="width:450px;text-align:left;padding-left:5px;">Descripcion</th>
                    <th style="text-align:right;padding-left:5px;">Ingresada</th>
                    <th style="text-align:right;padding-left:5px;">Bodega</th>
                    <th style="text-align:right;padding-left:5px;">Despacho</th>                    
                </tr>
            </thead>
			<tbody id="info-items" >
				{section name=lP loop=$LIST_ITEMS_ORDERS} 	
					<tr> 
						<td style="text-align:left;padding-left:5px;">{$LIST_ITEMS_ORDERS[lP].codArti}</td>
						<td style="padding-left:5px">{$LIST_ITEMS_ORDERS[lP].codArtiProveedor}</td>  
						<td style="text-align:left;">{$LIST_ITEMS_ORDERS[lP].desArticulo}</td>
						<td style="text-align:right;">{$LIST_ITEMS_ORDERS[lP].cantIngInv}</td>
						<td></td>
						<td></td>
					</tr> 
				{/section}                                            
            </tbody>
        </table>

</section>
{literal}
<script type="text/javascript">

$(document).ready(function(){

});


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
