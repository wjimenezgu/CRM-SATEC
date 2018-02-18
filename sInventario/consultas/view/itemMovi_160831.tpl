{$NAV_MENU}
	<div class="row-fluid">
		<div class="box span12">
			<div class="box-header well" data-original-title>
				<h2>Información Articulo de {$NOMBRE_TIENDA}</h2>
			</div>
			<div class="box-content">
				<form class="form-horizontal" id="frmEditItem"  action="processItem.php"  method="POST">
					<input type="hidden" id="action" name="action" value="{$ACTION}">
 			 		<fieldset>
 			 		
 			 			<table class="table">
 			 				<tr>
 			 				<td>
					<div class="control-group" id="boxfidItem" style="margin-left:-90px">
							<label class="control-label" for="disabledInput">Codigo</label>
							<div class="controls">
								<input class="input " style="width:50px;" name="fidItem" id="fidItem" type="text" placeholder="{$ID_ITEM}" value="{$ID_ITEM}"  readonly="true" >
							</div>
				</div>
						</td>
						<td>			
			
							<label class="control-label" for="focusedInput">Descripcion*</label>
							<div class="controls">
								<input class="input focused" name ="fDescripcion" id="fDescripcion" type="text" value="{$ITEM[0].desArticulo}" style="width: 400px;" readonly="true" >
							</div>
				 	
				 		</td>
				 		<td>

							<label class="control-label" for="focusedInput">Externo</label>
							<div class="controls">
								<input class="input focused" name="fcodigoExterno" id="fcodigoExterno" type="text" value="{$ITEM[0].codArtiProveedor}" readonly="true" >
							</div>

				 		</td>				 		
				 		
				 		</tr>
		 		</table>				 
                                <table class="table table-bordered " id="tblListMov">
                                    <thead>
                                        <tr>
                                            <th>Tienda</th>
                                            <th>Fecha Mov.</th>                                            
                                            <th>Documento</th>                                                                                       
                                            <th>Movimiento</th>
                                            <th>Cantidad</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {section loop=$ITEM_MOVI name=p}
                                        <tr style="{if $ITEM_MOVI[p].Tienda ne $TIENDA_ACTUAL} {assign var="TIENDA_ACTUAL" value=$ITEM_MOVI[p].Tienda}       {cycle  assign='COLOR_LINEA' values="#ffff99,#ffccff"} background-color:{$COLOR_LINEA} {else}background-color:{$COLOR_LINEA} {/if}">

                                            <td>{if $ITEM_MOVI[p].Tienda ne $NOMBRE_TIENDA_ACTUAL} {assign var="NOMBRE_TIENDA_ACTUAL" value=$ITEM_MOVI[p].Tienda} {$ITEM_MOVI[p].Tienda} {else} {/if}</td>
                                            <td>{$ITEM_MOVI[p].FechaMovF}</td>
                                            <td>{$ITEM_MOVI[p].NumDocu}</td>
                                            <td>{$ITEM_MOVI[p].Siglas}</td>
                                            <td style="text-align: right;">{$ITEM_MOVI[p].CantiMov}</td>                                                                                                                                    
                                        </tr>
                                        {/section}
                                    </tbody>
                                </table>                                  

			
 					<div class="modal-footer">
						<a href="articulos.php" class="btn btn-large pull-right" data-dismiss="modal">Cerrar</a>
						<div id="message-fields-obl"></div> 
					</div> 
			</fieldset>
		  </form>			
		    </div>				
		</div>		
		</div>
