{$NAV_MENU}
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2>Información Proveedor</h2>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="save.php" method="POST">
							<fieldset>
				<div class="control-group">
					<label class="control-label" for="focusedInput">Id</label>
					<div class="controls">
						<input class="input-xlarge focused" name="fidProveedor" id="fidProveedor" type="text" value="" readOnly="true" >
					</div>
				 </div>
				<div class="control-group">
					<label class="control-label" for="focusedInput">Nombre</label>
					<div class="controls">
						<input class="input-xlarge focused" name="fNombre" id="fNombre" type="text" value="">
					</div>
				 </div>
				 <div class="control-group">
					<label class="control-label" for="focusedInput">Cedula Juridica</label>
					<div class="controls">
						<input class="input-xlarge focused" name="fcedulajuridica" id="fcedulajuridica" type="text" value="">
					</div>
				 </div>
				 <div class="control-group">
					<label class="control-label" for="focusedInput">Direccion</label>
					<div class="controls">
						<input class="input-xlarge focused" name="fDireccion"id="fDireccion" type="text" value="">
					</div>
				 </div>
				 <div class="control-group">
					<label class="control-label" for="focusedInput">Pais</label>
					<div class="controls">
						<input class="input-xlarge focused" name="fPais" id="fPais" type="text" value="">
					</div>
				 </div>
				 <div class="control-group">
					<label class="control-label" for="focusedInput">Apartado</label>
					<div class="controls">
						<input class="input-xlarge focused" name="fApartado" id="fApartado" type="text" value="">
					</div>
				 </div>
				 <div class="control-group">
					<label class="control-label" for="focusedInput">Zip Code</label>
					<div class="controls">
						<input class="input-xlarge focused" name="fZipCode" id="fZipCode" type="text" value="">
					</div>
				 </div>
				 <div class="control-group">
					<label class="control-label" for="focusedInput">Telefono</label>
					<div class="controls">
						<input class="input-xlarge focused" name="fTelefono" id="fTelefono" type="text" value="">
					</div>
				 </div>
				 <div class="control-group">
					<label class="control-label" for="focusedInput">Fax</label>
					<div class="controls">
						<input class="input-xlarge focused" name="fFax" id="fFax" type="text" value="">
					</div>
				 </div>
                 <div class="control-group">
	             	<label class="control-label" for="selOpPagoProv">Opciones Pago</label>
	                	<div class="controls">
		                	<select id="selOpPagoProv" name="selOpPagoProv" >
	                        	{section name="p" loop=$PAYMENTSOPTIONS_LIST}
	                            	<option value="{$PAYMENTSOPTIONS_LIST[p].idOpcionPago}" >{$PAYMENTSOPTIONS_LIST[p].descripcion}</option>
                                {/section}
		                    </select>
						</div>
				 </div>
			     <div class="control-group">
				 	<label class="control-label">Obligatorio Costo</label>
					<div class="controls">
						<label class="radio">
							<input type="radio" name="obligatorioCosto" id="optionNo" value="N" checked="">
							No
						</label>
						<div style="clear:both"></div>
						<label class="radio">
							<input type="radio" name="obligatorioCosto" id="optionSi" value="S">
							Si
						</label>
					</div>
				 </div>				 				 									 

 							
 							<div class="modal-footer">
								<button type="submit" name="enviar" class="btn btn-primary">Insertar</button>
								<a href="index.php" class="btn" data-dismiss="modal">Cerrar</a>
							  </div>  

							  
							  
							  
							</fieldset>
						  </form>
					
					</div><!--/box-content->
				</div><!--/span-->
			
			</div><!--/row-->		