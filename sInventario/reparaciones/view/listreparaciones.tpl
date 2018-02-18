 {if (empty($LISTA_REPARACIONES))}
	<tr><td style="text-align:center;" colspan="9">No hay reparaciones que cargar</td></tr>
 {/if}
{section name=lP loop=$LISTA_REPARACIONES} 								
	<tr style="padding:0px;" id="tr{$LISTA_REPARACIONES[lP].idReparacion}">
		 <td style="width:10px;">{$LISTA_REPARACIONES[lP].FechaRecibido}</td>
     	 <td style="width:10px;">{$LISTA_REPARACIONES[lP].idReparacion}</td>
     	 <td style="width:370px;">{$LISTA_REPARACIONES[lP].nombre}</td>
         <td style="width:355px;" align="left">{$LISTA_REPARACIONES[lP].Equipo}</td>
         <td style="width:455px;" align="left">{$LISTA_REPARACIONES[lP].Problema}</td>
         <td style="width:25px;text-align:right;">{$LISTA_REPARACIONES[lP].TotalReparacion}</td>
         <td style="width:25px;" align="left">{$LISTA_REPARACIONES[lP].Estado}</td>
		 <td style="width:300px" "center">
		    <a href="#" id="{$LISTA_REPARACIONES[lP].idReparacion}"                Title="Ver Reparacion" {if $LISTA_REPARACIONES[lP].Estado eq "Activa" || $LISTA_REPARACIONES[lP].Estado eq "Reparada"} hidden="true"{/if} onclick="goPage(4, this.id)"><i class="icon icon-color icon-search"></i></a>
			<a href="#" id="{$LISTA_REPARACIONES[lP].idReparacion}" {if $LISTA_REPARACIONES[lP].Estado eq "Cerrada"} hidden="true"{/if} onclick="goPage(2, this.id)"><i class="icon icon-color icon-edit"></i></a>
			<a href="#" id="{$LISTA_REPARACIONES[lP].idReparacion}" {if $LISTA_REPARACIONES[lP].Estado eq "Cerrada"} hidden="true"{/if} onclick="goPage(3, this.id)"><i class="icon icon-color icon-remove"></i></a>
            <a href="eventRegister.php?id={$LISTA_REPARACIONES[lP].idReparacion}" title="Registrar Eventos" data-rel="tooltip"><i class="icon icon-blue icon-calendar"></i></a>										
			<a id="{$LISTA_REPARACIONES[lP].idReparacion}" Title="Imprimir Boleta"                                                                       onclick="goPage(7, this.id)"><i class="icon icon-color icon-document"></i></a>
			<a id="{$LISTA_REPARACIONES[lP].idReparacion}" Title="Facturar Adelanto"   {if $LISTA_REPARACIONES[lP].SiAdelanto eq "N"} hidden="true"{/if} onclick="goPage(8, this.id)"><i class="icon icon-color icon-archive"></i></a>			
			<a id="{$LISTA_REPARACIONES[lP].idReparacion}" Title="Facturar Reparación" {if $LISTA_REPARACIONES[lP].SiFacturar eq "N"} hidden="true"{/if} onclick="goPage(6, this.id)"><i class="icon icon-color icon-print"></i></a>
		 </td>
	</tr> 
{/section}

{literal}
<script type="text/javascript">
$(document).ready(function(){

	$('#tblDataE').dataTable({                        
		"sDom": "<'row-fluid'<'span6'l><'span6'f>r>t<'row-fluid'<'span12'i><'span12 center'p>>",
		"sPaginationType": "bootstrap",
	                'iDisplayLength': 16,
	                "aLengthMenu": [[16, 24, 32, -1], [8, 16, 24, 32, "Todos"]],
	                "aaSorting": [[ 1, "desc" ]],
	                "bDestroy": true,
	                "bRetrieve": true,
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
	}); 
}); 

</script>
{/literal}
