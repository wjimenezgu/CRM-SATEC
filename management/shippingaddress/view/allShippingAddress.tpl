{$NAV_MENU}
<div class="row-fluid sortable">		
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2>Admnistración de Direccion de Entrega</h2>
        </div>
        <div class="box-content">

            <button type="button" class="btn btn-small btn-success" id="addNewRow" onclick="window.location ='add.php'" style="margin-bottom:12px;"><i class="icon-plus icon-white"></i> Agregar</button>

            <table class="table table-striped table-bordered bootstrap-datatable">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Descripcion</th>
                        <th>Linea 1</th>
                        <th>Linea 2</th>
                        <th>Linea 3</th>
                    </tr>
                </thead>
                <tbody>
                    {section name=lP loop=$SHIPPINGADDRESS_LIST}
                    <tr style="padding:0px;" id="tr{$SHIPPINGADDRESS_LIST[lP].id}"> 
                        <td style="width:40px;">{$SHIPPINGADDRESS_LIST[lP].id}</td>                                                                          
                        <td style="width:385px;" align="left">
                            <a  style="color:#004C66;" href="edit.php?id={$SHIPPINGADDRESS_LIST[lP].id}" onclick="">{$SHIPPINGADDRESS_LIST[lP].descripcion|lower|capitalize}</a>
                        </td>
                        <td style="width:180px;">{$SHIPPINGADDRESS_LIST[lP].linea1}</td>    								    								 
                        <td style="width:180px;">{$SHIPPINGADDRESS_LIST[lP].linea2}</td>
                        <td style="width:180px;">{$SHIPPINGADDRESS_LIST[lP].linea3}</td>                        
                        <td class="center">
                            <a href="#" class="btn-setting" onclick="loadInfoShippingAddress({$SHIPPINGADDRESS_LIST[lP].id},'{$SHIPPINGADDRESS_LIST[lP].descripcion}');"><i class="icon icon-color icon-remove"></i></a>
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
                <p>Direccion a borrar...</p>
        </div>
        -->
        <div class="modal-footer">
                <a href="#" class="btn" data-dismiss="modal">No</a>
                <a href="#" class="btn btn-primary idShp" onclick="confirmDelete();" id="0">Si</a>
        </div>
</div>

<script type="text/javascript">


        function loadInfoShippingAddress(id,descripcion){

                $("#textMessage").html("Realmente desea eliminar a "+descripcion+ " ("+id+")  ?");
                $(".idShp").attr("id", id);

        }

        function confirmDelete(){
                var idShipAdd = $(".idShp").attr("id");
                var properties = {
                                   url: "delete.php",
                                   async: true,
                                   cache: false,
                                   data: "id="+idShipAdd,
                                   type: "POST",
                                   success: function(data){
                     	                             if (data==0) {
	                                                          $("#tr"+idShipAdd).html("");
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



</script>