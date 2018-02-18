{$NAV_MENU}
			<div class="row-fluid sortable" id="myPrincipal">		
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2>Admnistración de Tipos de Documentos</h2>
					</div>
					<div class="box-content">
						<button type="button" class="btn btn-small btn-success" id="addNewRow" onclick="window.location ='editAdd.php'" style="margin-bottom:12px;"><i class="icon-plus icon-white"></i> Agregar</button>
						<table class="table table-striped table-bordered bootstrap-datatable">
						  <thead>
							  <tr>
								  <th>Id</th>
								  <th>Descripción</th>
								  <th>Siglas</th>								  
								  <th>Acción</th>
							  </tr>
						  </thead>						
						  {section name=lP loop=$LISTA_TIPODOCUMENTOS}
						  	<tr style="padding:0px;" id="tr{$LISTA_TIPODOCUMENTOS[lP].idTipoDocumento}"> 
     							<td style="width:40px;">{$LISTA_TIPODOCUMENTOS[lP].idTipoDocumento}</td>  
                                <td style="width:385px;" align="left"><a style="color:#004C66;" href="edit.php?id={$LISTA_TIPODOCUMENTOS[lP].idTipoDocumento}">{$LISTA_TIPODOCUMENTOS[lP].descripcion|lower|capitalize}</a></td>
                                <td style="width:60px;" align="left"><a style="color:#004C66;" >{$LISTA_TIPODOCUMENTOS[lP].siglasDoc|lower|capitalize}</a></td>                                
								<td class="center">
                                	<a href="#" class="btn-setting" onclick="loadInfoTipoDocumento({$LISTA_TIPODOCUMENTOS[lP].idTipoDocumento},'{$LISTA_TIPODOCUMENTOS[lP].descripcion}');"><i class="icon icon-color icon-remove"></i></a>
								</td>
							</tr> 
						  {/section}
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
				<p>Tipo Documento a borrar...</p>
			</div>
			-->
			<div class="modal-footer">
				<a href="#" class="btn" data-dismiss="modal">No</a>
				<a href="#" class="btn btn-primary idTD" onclick="confirmDelete();" id="0">Si</a>
			</div>
		</div>

	<script type="text/javascript">


		function loadInfoTipoDocumento(id,descripcion){

			$("#textMessage").html("Realmente desea eliminar a "+descripcion+ " ("+id+")  ?");
			$(".idTD").attr("id", id);

		}

		function confirmDelete(){
			var idTipoDocumento = $(".idTD").attr("id");

			var properties = {
                    url: "delete.php",
                    async: true,
                    cache: false,
                    data: "idTipoDocumento="+idTipoDocumento,
                    type: "POST",
                    success: function(data){
						if (data==0) {
	                    	$("#tr"+idTipoDocumento).html("");
	                    	// cerrar la ventana del popup
	                        $("#myModal").modal('toggle');
	                                            								
						}
						else {
							alert("No se puedo eliminar");
						}
                    }
                };            
                $.ajax(properties);
		   }
			


	</script>