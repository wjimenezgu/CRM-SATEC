{$NAV_MENU}
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2>Información de Tipo Documento</h2>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="update.php" method="POST">
 			 <fieldset>
				<div class="control-group">
					<label class="control-label" for="disabledInput">Id</label>
					<div class="controls">
						<input class="input-xlarge " name="fid" id="fid" type="text" placeholder="{$ID_TIPODOCUMENTO}" value="{$ID_TIPODOCUMENTO}" readOnly="true" >
					</div>
				</div>				
				<div class="control-group">
					<label class="control-label" for="focusedInput">Descripcion</label>
					<div class="controls">
						<input class="input-xlarge focused" name ="fdescripcion" id="fdescripcion" type="text" value="{$TIPODOCUMENTO[0].descripcion}">
					</div>
				 </div>
				<div class="control-group">
					<label class="control-label" for="focusedInput">Siglas</label>
					<div class="controls">
						<input class="input-xlarge focused" name ="fsiglasDoc" id="fsiglasDoc" type="text" value="{$TIPODOCUMENTO[0].siglasDoc}">
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