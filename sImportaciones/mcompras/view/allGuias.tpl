{$NAV_MENU}
<div class="row-fluid sortable">		
	<div class="box span12">
		<div class="box-header well" data-original-title>
			<h2>Administración de Guias</h2>
		</div>
		<div class="box-content">
			<button type="button" class="btn btn-small btn-success" id="addNewReg" onclick="goPage(1,0)" style="margin-bottom:12px;"><i class="icon-plus icon-white"></i> Agregar</button>
			<table class="table table-striped table-bordered bootstrap-datatable" id="tblRegs">
				<thead>
					<tr>
						<th>Numero Guia</th>
						<th>Fecha Inserción</th>
						<th>Descripción</th>
						<th>Estado</th>
						<th>Acción</th>
					</tr>
				</thead>						
				{section name=lP loop=$LISTA_REGS} 								
					<tr style="padding:0px;" id="tr{$LISTA_REGS[lP].numGuia}">
     					<td style="width:120px;">{$LISTA_REGS[lP].numGuia}</td>
     					<td style="width:150px;">{$LISTA_REGS[lP].fecins}</td>
                        <td style="width:300px;" align="left">{$LISTA_REGS[lP].descripcion|lower|capitalize}</td>
                        <td style="width:40px;" align="left">{$LISTA_REGS[lP].estado}</td>
						<td class="center">
							<a href="#" id="{$LISTA_REGS[lP].numGuia}" onclick="goPage(2, this.id)"><i class="icon icon-color icon-edit"></i></a>
							<a href="#" id="{$LISTA_REGS[lP].numGuia}" onclick="goPage(3, this.id)"><i class="icon icon-color icon-remove"></i></a>
							<a href="allGuiaWhrs.php?id={$LISTA_REGS[lP].numGuia}" title="Agregar Warehouse Receipt" data-rel="tooltip"><i class="icon icon-blue icon-tag"></i></a>
							<a href="selGuiaWhrs.php?id={$LISTA_REGS[lP].numGuia}" title="Seleccionar Warehouse" data-rel="tooltip"><i class="icon icon-blue icon-check"></i></a>
						</td>
					</tr> 
				{/section}
			 </table>  					            
		</div><!-- box-content -->
	</div><!--/box span12-->			
</div><!--/row fluid-->

<script type="text/javascript">
$(document).ready(function(){    
    $('#tblRegs').dataTable({                        
		"sDom": "<'row-fluid'<'span6'l><'span6'f>r>t<'row-fluid'<'span12'i><'span12 center'p>>",
		"sPaginationType": "bootstrap",
                    'iDisplayLength': 16,
                    "aLengthMenu": [[16, 24, 32, -1], [8, 16, 24, 32, "Todos"]],
                    "aaSorting": [[ 1, "desc" ]],
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

// Octubre 15, 2014 William Jimenez
// Function goPage
// Descripcion: permite enviar al usuario a la pantalla para agregar o modificar registro
// Parametros:
//			action: 1> Insertar, 2>Modificar, 3>Borrar
//			id: El id del registro que se desea modificar o borrar, en el caso de insertar este parametro no se utiliza.
function goPage(action, id){
	window.location.href ='guiaRegister.php?action='+action+"&id="+id;	
}	
</script>