{$NAV_MENU}
<div class="row-fluid">
        <div class="box span12">
                <div class="box-header well" data-original-title>
                        <h2><i class="icon-list"></i> LISTA DE PEDIDOS NACIONALES</h2>
                </div>
                <div class="box-content">
                    <form class="form-horizontal" action="savePedido.php" method="post">                        
                        <div class="row-fluid">
                             <div class="span12">
                                <table class="table table-striped table-bordered bootstrap-datatable" id="tblListPedidos">
                                    <thead>
                                        <tr>
                                            <th># Pedido</th>
                                            <th>N° Orden</th>                                            
                                            <th>Proveedor</th>                                                                                       
                                            <th>Fecha Creación</th>
                                            <th>Estado</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {section loop=$LISTA_COMPRASNAC name=p}
                                        <tr id="register{$LISTA_COMPRASNAC[p].idPedido}">
                                            <td>{$LISTA_COMPRASNAC[p].idPedido}</td>
                                            <td>{$LISTA_COMPRASNAC[p].numOrdenCompra}</td>
                                            <td>{$LISTA_COMPRASNAC[p].nombreProveedor|lower|capitalize}</td>                                                                                  
                                            <td>{$LISTA_COMPRASNAC[p].fecCreacion}</td> 
                                            <td>{if $LISTA_COMPRASNAC[p].estadoPedido eq 'A'}{$LISTA_COMPRASNAC[p].estadoPedido}{/if}</td>											
                                            <td>
                                                <a href="genPurchaseOrder.php?id={$LISTA_COMPRASNAC[p].idPedido}" target="__blank" title="Generar Orden de Compra" data-rel="tooltip"><i class="icon icon-blue icon-archive"></i></a>                                                
                                                <a href="eventRegister.php?id={$LISTA_COMPRASNAC[p].idPedido}" title="Registrar Eventos" data-rel="tooltip"><i class="icon icon-blue icon-book"></i></a>
                                                <a href="docsRegister.php?id={$LISTA_COMPRASNAC[p].idPedido}" title="Agregar Documentos" data-rel="tooltip"><i class="icon icon-blue icon-attachment"></i></a>
                                                <a href="whrRegister.php?id={$LISTA_COMPRASNAC[p].idPedido}" title="Agregar Warehouse Receipt" data-rel="tooltip"><i class="icon icon-blue icon-tag"></i></a>
                                                <a href="editOrder.php?id={$LISTA_COMPRASNAC[p].idPedido}" class="pull-right" title="Modificar Pedido" data-rel="tooltip" style="margin-right:3px;"><i class="icon icon-color icon-edit"></i></a>
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
                
	 
    $('#tblListPedidos').dataTable({                        
		"sDom": "<'row-fluid'<'span6'l><'span6'f>r>t<'row-fluid'<'span12'i><'span12 center'p>>",
		"sPaginationType": "bootstrap",
                    'iDisplayLength': 4,
                    "aLengthMenu": [[4, 8, -1], [4, 8, "Todos"]],
                    "aaSorting": [[ 0, "desc" ]],
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