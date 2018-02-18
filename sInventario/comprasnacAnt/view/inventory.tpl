<table class="table table-condensed bootstrap-datatable" id="tblAllInventary" style="width:750px">
  <thead>
        <tr> 
            <th style="cursor: pointer;">Codigo</th>
            <th style="cursor: pointer;">Descripción</th>
            <th style="cursor: pointer;">Cod.Proveed.</th>            
            <th {IF $COSTO_OFF eq "S"} class="hidden" {/if} style="cursor: pointer;text-align: right;">Costo</th>
            <th {IF $UTIL_OFF eq "S"} class="hidden" {/if} style="cursor: pointer;text-align: right;">Utilidad</th>
            <th style="cursor: pointer;text-align: right;">Precio</th>
            <th style="cursor: pointer;text-align: right;">Exist.Total</th>
            <th style="cursor: pointer;text-align: right;">Facturado</th>
            <th></th>
        </tr>
  </thead>   
  <tbody> 
  	{assign var=names_count value=$INVENTARIO|@count} 
	 <input type="hidden" name="cantArti" id="cantArti" value="{$names_count}">
    {section loop=$INVENTARIO name=i}    
    <tr id="inv-rowArt1">
        <td>{$INVENTARIO[i].codArti}</td>
        <td class="center">{$INVENTARIO[i].desArticulo}</td>
        <td class="center">{$INVENTARIO[i].codArtiProveedor}</td>
        <td class="center {IF $COSTO_OFF eq "S"} hidden {/if}" style="text-align: right;">{$INVENTARIO[i].Costo}</td>
        <td class="center {IF $UTIL_OFF eq "S"} hidden {/if}" style="text-align: right;">{$INVENTARIO[i].Utilidad}</td>
        <td class="center" style="text-align: right;">{$INVENTARIO[i].Precio}</td>     
        <td class="center" style="text-align: right;{IF $INVENTARIO[i].ExistenciaTotal <= 0} color:red{/if}">{$INVENTARIO[i].ExistenciaTotal}</td>
        <td class="center" style="text-align: right;">{$INVENTARIO[i].FactuAFecha}</td>
        <td class="center">
        <!--    ARTICULODEF (etiqueta que sirve para buscar)							-->
        <!--   	Se envian utilizando el attibuto data varios datos del articulo			-->

            <a class="btn btn-mini btn-info" data="{$INVENTARIO[i].codArti}|{$INVENTARIO[i].desArticulo}|{$INVENTARIO[i].codArtiProveedor}"><i class="icon-plus icon-white"></i> Añadir</a>
        </td>        
    </tr>
    {/section}    

  </tbody>
</table>
{literal}
<script type="text/javascript">

	var inv_btnAdd = $("[id*='inv-rowArt']").find("td").find("a");
	$(inv_btnAdd).on("click", function(e){
        
  		// se extraen del atributo 'data' los campos del articulo para ponerlos en la linea
  		// ver arriba el detalle. buscar etiqueta ARTICULODEF
    	var arrRes = $(this).attr("data").split('|');
    	
    	$('#texto-codigo').val(arrRes[0]);				
    	$('#descArticulo').val(arrRes[1]);    	
    	$('#texto-codigoprov').val(arrRes[2]);  		
    	//$("#cantidad").focus();
    	AgregaLinea();
    	        
		// una vez agregado el articulo al detalle se regresa a la pantalla de la factura
		// se cierra el modal
    	//$("#accept-choosed").click();
    
	});
		
	$("#tblAllInventary").dataTable({                        
			"sDom": "<'row-fluid'<'span6'l><'span6'f>r>t<'row-fluid'<'span12'i><'span12 center'p>>",
			"sPaginationType": "bootstrap",
                        'iDisplayLength': 12,
                        "aLengthMenu": [[12, 40, 60, 80, -1], [12, 40, 60, 80, "Todos"]],
			"oLanguage": {
                        "sProcessing":     "Procesando...",
                        "sLengthMenu":     "Mostrar _MENU_ registros",
                        "sZeroRecords":    "No se encontraron resultados",
                        "sEmptyTable":     "Ningún dato disponible en esta tabla",
                        "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                        "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                        "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                        "sInfoPostFix":    "",
                        "sSearch":         "Buscar:",
                        "sUrl":            "",
                        "sInfoThousands":  ",",
                        "sLoadingRecords": "Cargando..."
			}
		} );           
        
//    });      
</script>
{/literal}
