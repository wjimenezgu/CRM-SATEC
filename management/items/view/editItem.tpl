{$NAV_MENU}
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2>Información Articulo</h2>
					</div>
					<div class="box-content">
						<form name ="frmEditItem" class="form-horizontal" action="update.php" onsubmit="return validateForm()" method="POST">
 			 <fieldset>
				<div class="control-group">
					<label class="control-label" for="disabledInput">Id</label>
					<div class="controls">
						<input class="input-xlarge " name="fidItem" id="fidItem" type="text" placeholder="{$ID_ITEM}" value="{$ID_ITEM}" readOnly="true" >
					</div>
				</div>				
				<div class="control-group">
					<label class="control-label" for="focusedInput">Descripcion*</label>
					<div class="controls">
						<input class="input-xlarge focused" name ="fDescripcion" id="fDescripcion" type="text" value="{$ITEM[0].desArticulo}">
					</div>
				 </div>
				 <div class="control-group">
					<label class="control-label" for="focusedInput">Codigo Externo</label>
					<div class="controls">
						<input class="input-xlarge focused" name="fcodigoExterno" id="fcodigoExterno" type="text" value="{$ITEM[0].codArtiProveedor}">
					</div>
				 </div>
				 <div class="control-group">
					<label class="control-label" for="focusedInput">Desc. Externo</label>
					<div class="controls">
						<input class="input-xlarge focused" name="fdescExterno" id="fdescExterno" type="text" value="{$ITEM[0].descArtiProveedor}">
					</div>
				 </div>				 
				 <div class="control-group">
					<label class="control-label" for="focusedInput">Minimo</label>
					<div class="controls">
						<input class="input-xlarge focused" name="fminimo"id="fminimo" type="text" value="{$ITEM[0].minimo}">
					</div>
				 </div>
				 <div class="control-group">
					<label class="control-label" for="focusedInput">Maximo</label>
					<div class="controls">
						<input class="input-xlarge focused" name="fmaximo" id="fmaximo" type="text" value="{$ITEM[0].maximo}">
					</div>
				 </div>
				 <div class="control-group">
					<label class="control-label" for="focusedInput">Reorden</label>
					<div class="controls">
						<input class="input-xlarge focused" name="freorden" id="freorden" type="text" value="{$ITEM[0].reorden}">
					</div>
				 </div>
				 <div class="control-group">
					<label class="control-label" for="focusedInput">Costo*</label>
					<div class="controls">
						<input class="input-xlarge focused" name="fcosto"  id="fcosto" type="text" value="{$ITEM[0].costo}">
					</div>
				 </div>
				 <div class="control-group">
					<label class="control-label" for="focusedInput">Precio*</label>
					<div class="controls">
						<input class="input-xlarge focused" name="fprecio" id="fprecio" type="text" value="{$ITEM[0].precio}">
					</div>
				 </div>
				 <div class="control-group">
					<label class="control-label" for="focusedInput">Comision (%)</label>
					<div class="controls">
						<input class="input-xlarge focused" name="fporceComision" id="fporceComision" type="text" value="{$ITEM[0].porceComision}">
					</div>
				 </div>
				 <div class="control-group">
					<label class="control-label" for="focusedInput">Factor Utilidad</label>
					<div class="controls">
						<input class="input-xlarge focused" name="ffactorUtilidad" id="ffactorUtilidad" type="text" value="{$ITEM[0].factorUtilidad}">
					</div>
				 </div>	 				 									 
				 <div class="control-group">
					<label class="control-label" for="focusedInput">Codigo Barras</label>
					<div class="controls">
						<input class="input-xlarge focused" name="fcodigoBarras" id="fcodigoBarras" type="text" value="{$ITEM[0].codigoBarras}">
					</div>
				 </div>
			     <div class="control-group">
				 	<label class="control-label">Exento</label>
					<div class="controls">
						<label class="radio">
							<input type="radio" name="fexento" id="optionNo" value="N" {if $ITEM[0].exento eq "N"} checked=""{/if}>
							<span style="font-weight:normal;">No</span>
						</label>
						<div style="clear:both"></div>						
						<label class="radio">
							<input type="radio" name="fexento" id="optionSi" value="S" {if $ITEM[0].exento eq "S"} checked=""{/if}>
							<span style="font-weight:normal;">Si</span>
						</label>
					</div>
				 </div>				 
                 <div class="control-group">
	             	<label class="control-label" for="selEstadoArti">Estado</label>
	                	<div class="controls">
		                	<select id="selEstadoArti" name="selEstadoArti">
	                        	{section name="p" loop=$ESTADOARTI_LIST}
	                            	<option value="{$ESTADOARTI_LIST[p].idEstadoArti}" {if $ESTADOARTI_LIST[p].idEstadoArti eq $ITEM[0].estado} selected{/if}>{$ESTADOARTI_LIST[p].descripcion}</option>
                                {/section}
		                    </select>
						</div>
				 </div>						
                 <div class="control-group">
	             	<label class="control-label" for="selCategoria">Categoria</label>
	                	<div class="controls">
		                	<select id="selCategoria" name="selCategoria" data-rel="chosen" style="width:280px;font-family:monospace;">
		                	    <option value="0">- Seleccione la Categoria -</option>
	                        	{section name="c" loop=$CATEGORIES_LIST}
	                            	<option value="{$CATEGORIES_LIST[c].id}"  {if $CATEGORIES_LIST[c].id eq $ITEM[0].idCategoria} selected{/if}>{$CATEGORIES_LIST[c].descripcion}</option>
                                {/section}
		                    </select>
						</div>
				 </div>
                 <div class="control-group">
	             	<label class="control-label" for="selProveedor">Proveedor</label>
	                	<div class="controls">
		                	<select id="selProveedor" name="selProveedor" data-rel="chosen" style="width:280px">
		                	    <option value="0">- Seleccione el Proveedor -</option>
	                        	{section name="p" loop=$SUPPLIERS_LIST}
	                            	<option value="{$SUPPLIERS_LIST[p].idProveedor}"  {if $SUPPLIERS_LIST[p].idProveedor eq $ITEM[0].idProveedor} selected{/if}>{$SUPPLIERS_LIST[p].nombreProveedor}</option>
                                {/section}
		                    </select>
						</div>
				 </div>
			<div class="modal-footer">								
				<button id=btnUpdItem type="submit" name="enviar" class="btn btn-primary">Actualizar</button>
				<a href="index.php" class="btn" data-dismiss="modal">Cerrar</a>
			</div>
			</fieldset>
		  </form>			
		    </div>				
		</div>		
		</div>
		
<script type="text/javascript">

function validateForm() {
   if (fieldBlank("Descripcion",document.forms["editForm"]["fDescripcion"].value)){
	   return false;
	   }	
   if (fieldBlank("Costo",document.forms["editForm"]["fcosto"].value)){
	   return false;
	   }
   if (fieldNoNumeric("Costo",document.forms["editForm"]["fcosto"].value)){
	   return false;
	   }      
   if (fieldBlank("Minimo",document.forms["editForm"]["fminimo"].value)){
	   return false;
	   }
   if (fieldNoNumeric("Minimo",document.forms["editForm"]["fminimo"].value)){
	   return false;
	   }
   if (fieldBlank("Maximo",document.forms["editForm"]["fmaximo"].value)){
	   return false;
	   }
   if (fieldNoNumeric("Maximo",document.forms["editForm"]["fmaximo"].value)){
	   return false;
	   }
   if (fieldBlank("Reorden",document.forms["editForm"]["freorden"].value)){
	   return false;
	   }
   if (fieldNoNumeric("Reorden",document.forms["editForm"]["freorden"].value)){
	   return false;
	   }
   if (fieldBlank("Precio",document.forms["editForm"]["fprecio"].value)){
	   return false;
	   }
   if (fieldNoNumeric("Precio",document.forms["editForm"]["fprecio"].value)){
	   return false;
	   }                         
   return true;
}

function fieldBlank(fieldName,fieldValue) {
    if (fieldValue == null || fieldValue == "") {
        alert(fieldName+" es requerido.");
        return true;
    }
    return false;
}

function fieldNoNumeric(fieldName,fieldValue) {
	var twoPlacedFloat = parseFloat(fieldValue).toFixed(2);
    if (twoPlacedFloat == "NaN" || Number(fieldValue).toString() == "NaN") {
    	alert(fieldName+" debe ser numerico.");
       	return true;
    }        
    return false;
}

</script>