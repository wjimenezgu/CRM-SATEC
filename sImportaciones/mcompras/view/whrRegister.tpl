{$NAV_MENU}
<div class="row-fluid">
        <div class="box span12">
                <div class="box-header well" data-original-title>
                        <h2><i class="icon-edit"></i> REGISTRO DE WAREHOUSE RECEIPT / TRACKING NUMBER</h2>
                </div>
                <div class="box-content">
                    <form class="form-horizontal" action="updateWHRTrackPedido.php" id="frm-newPedido" method="post">
                        <input type="hidden" name="idPedido" id="idPedido" value="{$ID_PEDIDO}"/>
                        <input type="hidden" name="count-numRow" id="count-numRow" value="{$NUM_ROW}">
                    	<legend style="height:35px">                                                
                        	<div class="span3" style="height:20px; margin-top:0px;">                            
                            	<p class="muted" style="font-size:13px; ">Proveedor: {$PED_HEADER['nombreProveedor']|lower|capitalize} </p>                            
                        	</div>
							<div class="span3" style="height:20px; margin-top:0px;">                            
                            	<p class="muted" style="font-size:13px;">Orden: {$PED_HEADER['numOrdenCompra']} </p>                            
                        	</div>
                        	<div class="span3" style="height:20px; margin-top:0px;">  
                            	<p class="muted" style="font-size:13px;">WHR:                           
                            	<input type="text" class="input-block-level" id="whr" name="whr" style="width:122px" value="{$PED_HEADER['whr']}">  </p>                          
                        	</div>       
                        	<div class="span3" style="height:20px; margin-top:0px;">  
                            	<p class="muted" style="font-size:13px;">Tracking No.:                           
                            	<input type="text" class="input-block-level" id="trackno" name="trackno" style="width:122px" value="{$PED_HEADER['trackNo']}">  </p>                          
                        	</div>                        
                    	</legend>

                    	<div class="row-fluid">
                            <div class="box span12">
                            	<div class="box-header well" >
                                	<h2>Lista de Artículos</h2>
                                </div>
                                <div class="box-content" id="box-frmPedido">
                                	<table class="table-striped tabs-content-inner" id="tblPedido">
							  			<thead>
											<tr>
                                            	<th style="text-align:center; ">#</th>
                                                <th style="text-align:center; ">Cant</th>
                                                <th >Artículo</th>
                                                <th>Tipo Compromiso</th>
                                                <th> WHR </th>
                                                <th> Tracking No. </th>                                                    
                                            </tr>
							  			</thead>    
							  			<tbody> 
                                        	<tr class="none"></tr>
                                            {section loop=$PED_DETAIL name=pd}
                                            	<tr class="numRow{$PED_DETAIL[pd].idLinea}" id="register{$PED_DETAIL[pd].idLinea}" style="font-size:11px;">
                                                	<td class="evalNumRegister" style="text-align:center;width:17px;"><div>{$PED_DETAIL[pd].idLinea}</div></td>
                                                    <td class="evalCant" style="text-align: center">
                                                    	<div class="control-group" id="row{$PED_DETAIL[pd].idLinea}-input-cant" >
                                                        	<br><input class="input-mini" name="row{$PED_DETAIL[pd].idLinea}-cant" disabled id="row{$PED_DETAIL[pd].idLinea}-cant" type="text" value="{$PED_DETAIL[pd].cantidad}" style="text-align:right; font-size:11px; width:19px;" readOnly="true"">
                                                        </div>
                                                    </td>
                                                    <td class="evalArti">
                                                    	<div class="pull-left control-group" id="row{$PED_DETAIL[pd].idLinea}-input-codProveedor" style="margin-right:3px;" title="codProveedor">
                                                        	<span class="label label-info">Cod.Arti.Prov</span><br><input type="text" class="input-mini" style="width:71px;font-size:11px;" disabled id="row{$PED_DETAIL[pd].idLinea}-codProveedor" name="row{$PED_DETAIL[pd].idLinea}-codProveedor" value="{$PED_DETAIL[pd].codArtiProveedor}" placeholder="Cod.Arti.Prov">                                                                                                               
                                                        </div>
                                                        <div class="pull-left control-group" id="row{$PED_DETAIL[pd].idLinea}-input-nameArticle" style="margin-right:3px;" title="nameArticle">
                                                            <span class="label label-info">Descripción</span><br><input type="text" class="input-mini" style="width:250px;font-size:11px;" disabled id="row{$PED_DETAIL[pd].idLinea}-nameArticle"  name="row{$PED_DETAIL[pd].idLinea}-nameArticle"  value="{$PED_DETAIL[pd].descArti}" placeholder="Nombre Artículo">
                                                        </div>                                                                            
                                                        <div class="pull-left control-group" id="row{$PED_DETAIL[pd].idLinea}-input-codInterno" style="margin-right:3px;" title="codInterno">
                                                            <span class="label label-info">Cod.Interno</span><br><input type="text" class="input-mini" style="width:60px;font-size:11px;" disabled id="row{$PED_DETAIL[pd].idLinea}-codInterno"   name="row{$PED_DETAIL[pd].idLinea}-codInterno"   value="{$PED_DETAIL[pd].codArti}" placeholder="Cod.Interno">
                                                        </div>                                                                                                                                                       
                                                    </td>
                                                                        
                                                    <td class='evalInfoRef'>
                                                    	
                                                    	<div class="pull-left ">
                                                        	<select disabled id="row{$PED_DETAIL[pd].idLinea}-typeRef" name="row{$PED_DETAIL[pd].idLinea}-typeRef" class="own-selected" style="width:68px; font-size:11px;padding:0; float: left; margin-top:2px; margin-right:2px;">
                                                            	<option value="0">Tipo</option>
                                                                {section loop=$COMPROMISOS name=co}
                                                                	{if $PED_DETAIL[pd].idCompromiso eq $COMPROMISOS[co].idTipoCompromiso}
                                                                    	<option value="{$COMPROMISOS[co].idTipoCompromiso}" selected>{$COMPROMISOS[co].descripcion|truncate:15:""}</option>
                                                                   	{else}
                                                                        <option value="{$COMPROMISOS[co].idTipoCompromiso}">{$COMPROMISOS[co].descripcion|truncate:15:""}</option>
                                                                    {/if}
                                                                {/section}                                                                                            
                                                            </select>                                                                        
                                                            <input type="text" disabled id="row{$PED_DETAIL[pd].idLinea}-numRef" name="row{$PED_DETAIL[pd].idLinea}-numRef" value="{$PED_DETAIL[pd].refCompromiso}" placeholder="#referencia" class="input-mini pull-left" style="margin:0px 3px 3px 0px; float: left; width:55px;font-size:11px;">
                                                            <input type="text" disabled id="row{$PED_DETAIL[pd].idLinea}-detRef" name="row{$PED_DETAIL[pd].idLinea}-detRef" value="{$PED_DETAIL[pd].refDetalleCompromiso}" placeholder="detalle" class="input-mini pull-left" style="margin:0px 3px 3px 0px; float: left; width:90px;font-size:11px;">
                                                        </div>
                                                    </td>
                                                                        
                                                    <td>
                                                    	
                                                        <div class="pull-left">
                                                        	<input type="text" id="row{$PED_DETAIL[pd].idLinea}-detRef" name="row{$PED_DETAIL[pd].idLinea}-whr" value="{$PED_DETAIL[pd].whr}" placeholder="WHR" class="input-mini pull-left" style="margin:0px 3px 3px 0px; float: left; width:110px;font-size:11px;">
                                                        </div> 
													</td>
													<td>
                                                    	
                                                        <div class="pull-left">
                                                        	<input type="text" id="row{$PED_DETAIL[pd].idLinea}-detRef" name="row{$PED_DETAIL[pd].idLinea}-trackno" value="{$PED_DETAIL[pd].trackNo}" placeholder="TRACKING" class="input-mini pull-left" style="margin:0px 3px 3px 0px; float: left; width:110px;font-size:11px;">
                                                        </div> 
													</td>
                                                                        
												</tr> <!-- tr rowid --> 
                                            {/section}
                                                                
                                            <tr>
                                                <td colspan="6" style="text-align:right;">                                                                 
                                                	<button type="submit" class="btn btn-large btn-primary pull-right">Actualizar Pedido</button>
                                                    <div id="message-fields-obl"></div>                                                                 
                                                    <div id="boxProgress" style="display:none; width:250px; margin-top:10px; margin-right:25px; float: right">
                                                    	<div class="progress progress-striped progress-info active" >
                                                    		<div class="bar" style="width:0%;"></div>
                                                    	</div>
                                                    </div>
                                                </td>                                       
                                            </tr>                                                          
                                                                
							            </tbody>
						            </table>                                                                                                                                    
                                </div> <!-- box-frmPedido -->
                            </div><!--/span-->
                    	</div><!--/row-->                    
                    </form>
                </div> <!-- box-content -->
        </div><!--/span 12-->

</div><!--/row-->

