<table class="table table-condensed bootstrap-datatable" id="tblClientes" style="width:750px">
  <thead>
        <tr> 
            <th style="cursor: pointer;">Codigo</th>
            <th style="cursor: pointer;">Nombre</th>
            <th style="cursor: pointer;">Telefono</th>
            <th style="cursor: pointer;">Correo Electronico</th>
            <th></th>
        </tr>
  </thead>   
  <tbody> 
    {section loop=$CLIENTES name=i}    
        <tr id="inv-rowArt1">
            <td>{$CLIENTES[i].id}</td>
            <td class="center">{$CLIENTES[i].nombre}</td> 
            <td class="center">{$CLIENTES[i].telefono}</td>
            <td class="center">{$CLIENTES[i].correoElectronico}</td>  
            <td class="center">
            <!--   	Se envian utilizando el attibuto data varios datos del articulo			-->
                <a class="btn btn-mini btn-info" data="{$CLIENTES[i].id}|{$CLIENTES[i].nombre}"><i class="icon-plus icon-white"></i> Añadir</a>
            </td>        
        </tr>
    {/section}    

  </tbody>
</table>
{literal}
<script type="text/javascript">


	var inv_btnAdd = $("[id*='inv-rowArt']").find("td").find("a");
	$(inv_btnAdd).on("click", function(e){
        var arrRes = $(this).attr("data").split('|');
        $(".clienteId").attr("id", arrRes[0]);  
        $("#txtCliente").val(arrRes[1]);
        $("#idCliSel").val( arrRes[0]);        
		
    	$("#accept-choosedcli").click();
    
	});
	
	
	$("#tblClientes").dataTable({                        
			"sDom": "<'row-fluid'<'span6'l><'span6'f>r>t<'row-fluid'<'span12'i><'span12 center'p>>",
			"sPaginationType": "bootstrap",
                        'iDisplayLength': 12,
                        "aLengthMenu": [[12, 40, 60, 80, -1], [12, 40, 60, 80, "Todos"]],
                        "aaSorting": [[ 1, "asc" ]],
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
