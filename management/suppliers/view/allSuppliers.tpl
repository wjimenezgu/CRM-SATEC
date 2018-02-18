{$NAV_MENU}
<div class="row-fluid ">		
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2>Admnistración de Proveedores</h2>
        </div>
        <div class="box-content">

            <button type="button" class="btn btn-small btn-success" id="addNewRow" onclick="window.location ='add.php'" style="margin-bottom:12px;"><i class="icon-plus icon-white"></i> Agregar</button>

            <table class="table table-striped table-bordered bootstrap-datatable" id="tblSuppliersList">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Teléfono</th>
                        <th>Fax</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody>
                    {section name=lP loop=$LISTA_PROVEEDORES}
                    <tr style="padding:0px;" id="tr{$LISTA_PROVEEDORES[lP].idProveedor}"> 
                        <td style="width:40px;">{$LISTA_PROVEEDORES[lP].idProveedor}</td>                                                                          
                        <td style="width:385px;" align="left">
                            <a  style="color:#004C66;" href="edit.php?id={$LISTA_PROVEEDORES[lP].idProveedor}" onclick="">{$LISTA_PROVEEDORES[lP].nombreProveedor|lower|capitalize}</a>
                        </td>
                        <td style="width:180px;">{$LISTA_PROVEEDORES[lP].telefono}</td>    								    								 
                        <td style="width:180px;">{$LISTA_PROVEEDORES[lP].fax}</td>
                        <td class="center">
                            <a href="#" class="btn-setting" onclick="loadInfoProveedor({$LISTA_PROVEEDORES[lP].idProveedor},'{$LISTA_PROVEEDORES[lP].nombreProveedor}');"><i class="icon icon-color icon-remove"></i></a>
                        </td>
                    </tr> 
                    {/section}
                </tbody>
            </table>  

        </div>
    </div><!--/span-->

</div><!--/row-->
<div class="modal hide fade" id="myModal">
        <div class="modal-header" >
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h3 id="textMessage"></h3>
        </div>
        <!-- 
        <div class="modal-body">
                <p>Proveedor a borrar...</p>
        </div>
        -->
        <div class="modal-footer">
                <a href="#" class="btn" data-dismiss="modal">No</a>
                <a href="#" class="btn btn-primary idPrv" onclick="confirmDelete();" id="0">Si</a>
        </div>
</div>
{literal}
<script type="text/javascript">


        function loadInfoProveedor(idProveedor,nombreProveedor){

                $("#textMessage").html("Realmente desea eliminar a "+nombreProveedor+ " ("+idProveedor+")  ?");
                $(".idPrv").attr("id", idProveedor);

        }

        function confirmDelete(){
                var idProveedor = $(".idPrv").attr("id");
                //alert($(".idPrv").attr("id"));

                //$("#tr"+idProveedor).html("");

                var properties = {
            url: "delete.php",
            async: true,
            cache: false,
            data: "idProveedor="+idProveedor,
            type: "POST",
            success: function(data){
                                        if (data==0) {
                        $("#tr"+idProveedor).html("");
                        // cerrar la ventana del popup
                        $("#myModal").modal('toggle');							
                                        }
                                        else {
                                                alert("No se puede eliminar");
                                        }
            }
        };            
        $.ajax(properties);
           }

        $(document).ready(function(){
            
        	$('#tblSuppliersList').dataTable({                        
        			"sDom": "<'row-fluid'<'span6'l><'span6'f>r>t<'row-fluid'<'span12'i><'span12 center'p>>",
        			"sPaginationType": "bootstrap",
                                'iDisplayLength': 8,
                                "aLengthMenu": [[8, 16, 24, 32, -1], [8, 16, 24, 32, "Todos"]],
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
        		});    
                        
           });

</script>
{/literal}