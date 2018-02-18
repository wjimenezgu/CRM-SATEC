{$NAV_MENU}
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2>Información Moneda</h2>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="update.php" method="POST">
 			 <fieldset>
				<div class="control-group">
					<label class="control-label" for="disabledInput">Id</label>
					<div class="controls">
						<input class="input-xlarge " name="fIdMoneda" id="fIdMoneda" type="text" placeholder="{$ID_MONEDA}" value="{$ID_MONEDA}" readOnly="true" >
					</div>
				</div>				
				<div class="control-group">
					<label class="control-label" for="focusedInput">Descripción</label>
					<div class="controls">
						<input class="input-xlarge focused" name ="fDescripcion" id="fDescripcion" type="text" value="{$MONEDA[0].descripcion}">
					</div>
				 </div>
				 <div class="control-group">
					<label class="control-label" for="focusedInput">Símbolo</label>
					<div class="controls">
						<input class="input-xlarge focused" name="fSimboloMoneda" id="fSimboloMoneda" type="text" value="{$MONEDA[0].simboloMoneda}">
					</div>
				 </div>
<!--  						 
			<div class="modal-footer">
				<a href="index.php" class="btn" data-dismiss="modal">Cerrar</a>
				<input type="submit" name="enviar" value="Actualizar" />
			</div>
-->
 							<div class="modal-footer">
								<button type="submit" name="enviar" class="btn btn-primary">Actualizar</button>
								<a href="index.php" class="btn" data-dismiss="modal">Cerrar</a>
							  </div>  

			
			</fieldset>
		  </form>			
		    </div>				
		</div>		
		</div>