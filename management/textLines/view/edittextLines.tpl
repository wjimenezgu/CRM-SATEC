{$NAV_MENU}
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2>Información Lineas Texto</h2>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="update.php" method="POST">
 			 <fieldset>
				<div class="control-group">
					<label class="control-label" for="disabledInput">Id</label>
					<div class="controls">
						<input class="input-xlarge " name="fid" id="fid" type="text" placeholder="{$ID}" value="{$ID}" readOnly="true" >
					</div>
				</div>				
				<div class="control-group">
					<label class="control-label" for="focusedInput">Descripcion</label>
					<div class="controls">
						<input class="input-xlarge focused" name ="fDescripcion" id="fDescripcion" type="text" value="{$SHIPPINGADDRESS_DATA[0].descripcion}">
					</div>
				 </div>
				 <div class="control-group">
					<label class="control-label" for="focusedInput">Linea 1</label>
					<div class="controls">
						<input class="input-xlarge focused" name="fLinea1" id="fLinea1" type="text" value="{$SHIPPINGADDRESS_DATA[0].linea1}">
					</div>
				 </div>
				 <div class="control-group">
					<label class="control-label" for="focusedInput">Linea 2</label>
					<div class="controls">
						<input class="input-xlarge focused" name="fLinea2" id="fLinea2" type="text" value="{$SHIPPINGADDRESS_DATA[0].linea2}">
					</div>
				 </div>				 
				 <div class="control-group">
					<label class="control-label" for="focusedInput">Linea 3</label>
					<div class="controls">
						<input class="input-xlarge focused" name="fLinea3"id="fLinea3" type="text" value="{$SHIPPINGADDRESS_DATA[0].linea3}">
					</div>
				 </div>
			<div class="modal-footer">				
				
				<button type="submit" name="enviar" class="btn btn-primary">Actualizar</button>
				<a href="index.php" class="btn" data-dismiss="modal">Cerrar</a>
			</div>
			</fieldset>
		  </form>			
		    </div>				
		</div>		
		</div>
