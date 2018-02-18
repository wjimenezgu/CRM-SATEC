{$NAV_MENU}
<div class="row-fluid">
        <div class="box span12">
                <div class="box-header well" data-original-title>
                        <h2><i class="icon-list"></i> LISTA DE PEDIDOS</h2>
                </div>
                <div class="box-content">
                    <form class="form-horizontal" action="savePedido.php" method="post">
                        
                        <div class="row-fluid">
<!-- 
       					<div class="box-body table-responsive">		
                                <table class="table table-striped table-bordered " id="tblListOrders">
 -->                                                                               
                             <div class="span12">

                                <table class="table table-striped table-bordered " id="tblListOrders">
                                    <thead>
                                        <tr>
                                            <th># Pedido</th>
                                            <th>N° Orden</th>                                            
                                            <th>Proveedor</th>                                                                                       
                                            <th>Fecha Creación</th>
                                            <th>Estado</th>
                                            <th>Dias</th>                                            
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {section loop=$LIST_PEDIDOS name=p}
                                        <tr id="register{$LIST_PEDIDOS[p].idPedido}">
                                            <td>{$LIST_PEDIDOS[p].idPedido}</td>
                                            <td>{$LIST_PEDIDOS[p].numOrdenCompra}</td>
                                            <td>{$LIST_PEDIDOS[p].nombreProveedor|lower|capitalize}</td>                                                                                  
                                            <td>{$LIST_PEDIDOS[p].fecCreacion}</td> 
                                            <td class="center">
                                            <!--  
												<span class="label label-success">Verde</span>
												<span class="label label-important">Rojo</span>
												<span class="label " style="background-color: #FFD700;">Amarillo</span>
												<span class="label " style="background-color: #FFD700;">{$LIST_PEDIDOS[p].NDias}</span>																								
												{if $LIST_PEDIDOS[p].NDias lt 5} <span class="label label-success">Verde</span>{/if}
												{if $LIST_PEDIDOS[p].NDias gt 5} <span class="label" style="background-color: #FFD700;">Amarillo</span>{/if}
												{if $LIST_PEDIDOS[p].NDias gt 10} <span class="label label-success">Rojo</span>{/if}

{if $LIST_PEDIDOS[p].NDias gt 10} <span class="label label-success">{$LIST_PEDIDOS[p].NDias}</span>{else if $LIST_PEDIDOS[p].NDias gt 5} <span class="label" style="background-color: #FFD700;">{$LIST_PEDIDOS[p].NDias}</span>{else}<span class="label label-success">{$LIST_PEDIDOS[p].NDias}</span>{/if}												
												{if $LIST_PEDIDOS[p].NDias gt 10 and $LIST_PEDIDOS[p].NDias lt 50} <span class="label" style="background-color: #FFD700;">{$LIST_PEDIDOS[p].NDias}</span>{/if}
											 -->												
												{if $LIST_PEDIDOS[p].NDias lt 5 and $LIST_PEDIDOS[p].estadoPedido eq 'A'} <span class="label label-success">Verde</span>{/if}
												{if $LIST_PEDIDOS[p].NDias gt 4 and $LIST_PEDIDOS[p].NDias lt 8 and $LIST_PEDIDOS[p].estadoPedido eq 'A'} <span class="label" style="background-color: #FFD700;">Amarillo</span>{/if}
												{if $LIST_PEDIDOS[p].NDias gt 7 and $LIST_PEDIDOS[p].estadoPedido eq 'A'} <span class="label label-important">Rojo</span>{/if}
											    {if $LIST_PEDIDOS[p].estadoPedido eq 'C'} <span class="label" style="background-color: #0000FF;">Cerrado</span>{/if}
											    {if $LIST_PEDIDOS[p].estadoPedido eq 'N'} <span class="label" style="background-color: #FF9933;">Cancelado</span>{/if}																																													
											</td>
                                            <td>{if $LIST_PEDIDOS[p].estadoPedido eq 'A'}{$LIST_PEDIDOS[p].NDias}{/if}</td>											
                                            <td>
                                                <!--
                                                <a class="btn btn-mini btn-inverse" href="genPurchaseOrder.php?id={$LIST_PEDIDOS[p].idPedido}" target="__blank" style="padding:0px; padding-left:1px;" title="Generar Orden de Compra" data-rel="tooltip"><i class="icon-download-alt icon-white"></i></a>
                                                -->
                                                <a href="genPurchaseOrder.php?id={$LIST_PEDIDOS[p].idPedido}" target="__blank" title="Generar Orden de Compra" data-rel="tooltip"><i class="icon icon-blue icon-archive"></i></a>                                                
                                                <a href="eventRegister.php?id={$LIST_PEDIDOS[p].idPedido}" title="Registrar Eventos" data-rel="tooltip"><i class="icon icon-blue icon-book"></i></a>
                                                <a href="docsRegister.php?id={$LIST_PEDIDOS[p].idPedido}" title="Agregar Documentos" data-rel="tooltip"><i class="icon icon-blue icon-attachment"></i></a>
<!-- William todavia en desarrollo  -->
                                                <a href="whrRegister.php?id={$LIST_PEDIDOS[p].idPedido}" title="Agregar Warehouse Receipt" data-rel="tooltip"><i class="icon icon-blue icon-tag"></i></a>
                                           
 <!-- William Jimenez , Nov 22, 2014 se esconde para evitar que se puedan eliminar pedidos
      se definira con el usuario administrador como se debe proceder.    
                                                <a title="Eliminar" data-rel="tooltip" class="rdelPedido pull-right" data-toggle="modal" data-target="#delete-modal" style="cursor: pointer;" id="{$LIST_PEDIDOS[p].idPedido}"><i class="icon icon-color icon-remove"></i></a>
 -->                                                
                                                <a href="editOrder.php?id={$LIST_PEDIDOS[p].idPedido}" class="pull-right" title="Modificar Pedido" data-rel="tooltip" style="margin-right:3px;"><i class="icon icon-color icon-edit"></i></a>
                                            </td>
                                        </tr>
                                        {/section}
                                        
                                        
                                        <div id="nofify-message"></div>
                                        
                                    </tbody>
                                </table>                                  
                                
                            </div>                                                   

                        </div> 
                    
                    </form>
                </div>
        </div><!--/span-->

</div><!--/row-->

<!-- NEW ARTICLE MESSAGE MODAL -->
<div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3 class="modal-title"><i class="icon-bullhorn"></i> Atencion!</h3>
            </div>
            <form action="#" method="post" id="frmListStudent">

                <div class="alert alert-waring">                        
                    ¿Realmente desea <strong>eliminar</strong> el pedido #<span id="numPedido"></span>?.
                </div>                
                <div class="modal-footer clearfix">                   
                    <button type="button" class="btn btn-danger " data-dismiss="modal">No</button>
                    <button type="button" class="btn btn-primary " data-dismiss="modal" id="confirm-delete">Si</button>                     
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

{literal}
<script type="text/javascript">
    $(document).ready(function(){
                
	$('#tblListOrders').dataTable({                        
			"sDom": "<'row-fluid'<'span6'l><'span6'f>r>t<'row-fluid'<'span12'i><'span12 center'p>>",
			"bSort":true,
			"aoColumnDefs": [
			                 { "bSortable": true, "aTargets": [ 0 ] },
			                 { "bSortable": true, "aTargets": [ 1 ] },
			                 { "bSortable": true, "aTargets": [ 2 ] },
			                 { "bSortable": true, "aTargets": [ 3 ] },
			                 { "bSortable": false, "aTargets": [ 4 ] },
			                 { "bSortable": true, "aTargets": [ 5 ] }			                 
			              ], 
			"sPaginationType": "bootstrap",
                        'iDisplayLength': 24,
                        "aLengthMenu": [[24, 32, -1], [24, 32, "Todos"]],
                        "aaSorting": [[ 3, "desc" ]],
            
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

                $(".rdelPedido").on("click", function(){
                    $("#numPedido").html(this.id);
                });

                $("#confirm-delete").on("click", function (e){
                           
                    var infoToDelete = {                                                        
                        url: "deletePedido.php",
                        async: true,
                        cache: false,
                        data: "idPedido="+$("#numPedido").text(),
                        type: "POST",
                        success: function(response){
                            var message = "";
                            var type = "";
                            if(response == 1){            
                                message = "<span style='font-size:12px;'>El pedido #"+$("#numPedido").text()+" ha sido eliminado</span>";
                                type = "success";
                                $("#register"+$("#numPedido").text()).css("display","none");
                            }else{                                
                                message = "<span style='font-size:12px;'>ERROR: NO se pudo eliminar el pedido #"+$("#numPedido").text()+"</span>";
                                type = "error";
                            }

                            $('#nofify-message').noty({
                                text:message,
                                layout:"top",
                                type:type,
                                timeout: 1800    
                            });
                        }                                                           

                    };
                    
                    $.ajax(infoToDelete);                        

                });
        
                
   }); 
</script>
{/literal}