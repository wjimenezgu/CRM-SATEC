<?php /* Smarty version Smarty-3.1.16, created on 2017-08-07 21:44:18
         compiled from "../comprasnac/view/frmCompraNacReci.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1148611591582661cad04e09-89859635%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '347d6897267ca7cc609e8222a34fd51ac1c2bc6a' => 
    array (
      0 => '../comprasnac/view/frmCompraNacReci.tpl',
      1 => 1502163833,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1148611591582661cad04e09-89859635',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_582661cadff4b7_35343563',
  'variables' => 
  array (
    'NAV_MENU' => 0,
    'ACTION' => 0,
    'ID_PEDIDO' => 0,
    'PORCE_IV' => 0,
    'CURRENT_DATE' => 0,
    'PROVEEDORES' => 0,
    'PEDIDO_NAC' => 0,
    'DETPEDIDO_NAC' => 0,
    'BTN_ACTION' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582661cadff4b7_35343563')) {function content_582661cadff4b7_35343563($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['NAV_MENU']->value;?>

        <form class="form-horizontal" id='frmCompraNacReci'  action="procesaCompraNac.php"  method="POST">
            
            <input type="hidden" name="action" id="action" value="<?php echo $_smarty_tpl->tpl_vars['ACTION']->value;?>
">
            <input type="hidden" name="idPedido" id="idPedido" value="<?php echo $_smarty_tpl->tpl_vars['ID_PEDIDO']->value;?>
">
            <input type="hidden" id="porce_iv" value="<?php echo $_smarty_tpl->tpl_vars['PORCE_IV']->value[0]['IV'];?>
">
            <input type="hidden" id="ArticuloExiste" value="false">            
            <input type="hidden" id="codigoArticulo" value="">
            <input type="hidden" id="codigoArticuloProv" value="">
            <input type="hidden" id="codigoArticuloBarras" value="">
            <input type="hidden" id="descipcionArticulo" value="">         
            <input type="hidden" id="current_date" value="<?php echo $_smarty_tpl->tpl_vars['CURRENT_DATE']->value;?>
">   
        	<div class="row-fluid" >		
            	<div class="box span12">
                	<div class="box-header well" data-original-title>
                    	<h2>Registro Pedido Nacional</h2>                    	    
                    </div>
                    <div id="message-fields" style='alignment-adjust:  central;'></div>
                       <table cellspacing="0" style="width: 100%;">
                       <tr>
                        <td style="width: 50%">
						<div class="input-prepend pull-left" id="boxSelectProveedor">
                        	<span class="add-on" style="padding:0px; height:26px; margin:5px 13px 13px 10px;">                                    
                            	<select id="selectProveedor" disabled style="height:25px;width:100%">
                                	<option value="0">- Seleccione el Proveedor -</option>
                                    	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']["p"])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']["p"]);
$_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['name'] = "p";
$_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['PROVEEDORES']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['total']);
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['PROVEEDORES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['idProveedor'];?>
" <?php if ($_smarty_tpl->tpl_vars['PROVEEDORES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['idProveedor']==$_smarty_tpl->tpl_vars['PEDIDO_NAC']->value[0]['idProveedor']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['PROVEEDORES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['nombreProveedor'];?>
</option>
                                        <?php endfor; endif; ?>
                                </select>                                    
                            </span>                                
                        </div>
                        </td>
                         <td style="width: 10%;">    
                        <td style="width: 40%;text-align:right;">
                        <div id="OC" style="margin-right:10px;"><b>ORDEN DE COMPRA NO. | <?php echo $_smarty_tpl->tpl_vars['PEDIDO_NAC']->value[0]['numOrdenCompra'];?>
</b></div>
                        </td>
                        </tr>
					   </table>
                        <table  id="tblEncPed">
                        	<tbody>
                        		<tr>
                        			<td>
                        				<div class="control-group" id="boxFecFac">
											<label class="control-label" for="focusedInput">Fecha</label>
											<div class="controls">
												<input class="input-medium focused datepicker" name="fecFac" id="fecFac" type="text" placeholder="Fecha Factura" value="<?php echo $_smarty_tpl->tpl_vars['PEDIDO_NAC']->value[0]['fecFactura'];?>
" >
											</div>
										</div>		
                        			</td>                        		                        		
                        			<td>
                        				<div class="control-group" id="boxNumFac">
											<label class="control-label" for="focusedInput">Factura</label>
											<div class="controls">
												<input class="input-medium focused" name="numFac" id="numFac" type="text" placeholder="Numero Factura" value="<?php echo $_smarty_tpl->tpl_vars['PEDIDO_NAC']->value[0]['numFactura'];?>
" >
											</div>
										</div>		
                        			</td>   
                        			<td>
                        				<div class="control-group" id="boxFormaPago">
											<label class="control-label" for="selectFormaPago">Forma Pago</label>
											<div class="controls">
												<select id="selectFiltro" name ="selectFormaPago" style="width: 175px;">
                            						<option value="2" selected>Crédito</option>
                            						<option value="1">Contado</option>
                        						</select>
                        					</div>
                    					</div>
                        			</td>
                        			<td>
                        			    <div class="control-group" style="margin-left:-50px;" id="boxTipoCambio">
											<label class="control-label" for="focusedInput">Tipo Cambio</label>
											<div class="controls">
												<input class="input-small " style="text-align:right;" readonly name="tcambio" id="tcambio" type="text" placeholder="T.Cambio si Aplica" value="<?php echo $_smarty_tpl->tpl_vars['PEDIDO_NAC']->value[0]['tipoCambio'];?>
" >
											</div>
										</div>	
                        			</td>
                        		</tr>
                        		<tr>
                        			<td>
                        				<div class="control-group" id="boxGravado">
											<label class="control-label" for="focusedInput">Gravado</label>
											<div class="controls">
												<input class="input-medium focused" style="text-align:right;" name="gravado" id="gravado" type="text" placeholder="Total Gravado" value="" >
											</div>
										</div>		
                        			</td>
                        			<td>
                        				<div class="control-group" id="boxImpuesto">
											<label class="control-label" for="focusedInput">Impuesto</label>
											<div class="controls">
												<input class="input-medium focused" style="text-align:right;" name="impuesto" id="impuesto" type="text" placeholder="Total Impuesto" value="" >
                                                <input type="checkbox" id="exento" name="exento" title="Exento">Exento
											</div>                                            
										</div>		
                        			</td>
                        			<td>
                        				<div class="control-group" id="boxDescuento">
											<label class="control-label" for="focusedInput">Descuento</label>
											<div class="controls">
												<input class="input-medium focused" style="text-align:right;" name="descuento" id="descuento" type="text" placeholder="Total Descuento" value="" >
											</div>
										</div>		
                        			</td>
                        			<td>
                        				<div class="control-group" style="margin-left:-50px;"  id="boxTotal">
											<label class="control-label" for="focusedInput">Total</label>
											<div class="controls">
												<input class="input-medium focused" style="text-align:right;" name="total" id="total" type="text" placeholder="Total Factura" value="" >
											</div>
										</div>		
                        			</td>
                        		</tr>
                        			<td colspan="3"></td>
                        			<td>
                        				<div class="control-group" style="margin-left:-50px;"  id="boxTotalD">
											<label class="control-label" for="focusedInput">Total Digitado</label>
											<div class="controls">
												<input class="input-medium focused" style="text-align:right;" name="totalD" id="totalD" disabled type="text" placeholder="Total Digitado" value="0.00" >
											</div>
										</div>		
                        			</td>
                        		<tr>
                        		</tr>
                        	</tbody>
                        </table>
                     
                        <legend style="height:5px"></legend>
                        <div class="box" style="margin-left: 10px;margin-right: 10px;margin-top: -20px;" id="boxArticulo">
                        	<div class="box-header well">
                            	<h3>Buscar Articulos</h3>
                            </div>
								<div class="control-group" style="margin-left: -150px;" id="boxCriterios">
									<div class="controls">
												
                						<form style="margin:0px; padding:0px; float:right; margin-top:-5px;">
                							<input type="text"  accesskey="c" class="txt_search" id="texto-codigo"  value="" style="margin-top:4px; margin-left:20px; font-size:1vw; width:100px;" placeholder="Código Artículo">
                							<input type="text"  accesskey="c" class="txt_search" id="texto-codigoprov"  value="" style="margin-top:4px; margin-left:20px; font-size:1vw; width:155px;" placeholder="Código Arti. Proveedor">
                							<input type="text"  id="descArticulo" value="" style="margin-top:4px; margin-left:20px; font-size:1vw; width:375px;" placeholder="Descripción">
                							<input type="number"  id="cantidad" value="1" style="margin-top:4px; margin-left:20px; font-size:1vw; width:75px; text-align:right;" placeholder="Cantidad">
                							<input type="text"    id="costo" value="0.00" style="text-align:right; margin-top:4px; margin-left:20px; font-size:1vw; width:100px;" placeholder="Costo">                							
                							<button type="button" title="Agregar" class="btn btn-small btn-success" id="btnHabilitaP2" onclick="AgregaLinea();"><i class="icon-plus icon-white"></i> </button>
                							<button type="button" title="Articulo Nuevo" class="btn btn-small btn-warning" id="btnArtiNuevo" data-toggle="modal" data-target="#newArticle-modal"><i class="icon icon-white icon-add"></i> Nuevo Artículo </button>                							
<!-- 											<a class="btn btn-small" data-toggle="modal" style="display: none" data-target="#message-NA" id="btn-NA"><i class="icon icon-orange icon-add"></i> Nuevo Artículo</a>  -->                							
                						</form> 					
									</div>  <!-- class controls -->             
								</div>	<!-- boxCriterios -->	                                                    
                        </div> <!-- class="box"  -->
                        <div class="box-content">
                        	<table class="table table-striped table-bordered bootstrap-datatable" id="tableItem">
                            	<thead>
                                	<tr>
                                    	<th style='width:10px;'>#</th>
                                    	<th >Artículo</th>
                                        <th >Código</th>
                                        <th style='  text-align:right;'>Cantidad</th>
                                        <th style='  text-align:right;'>Costo Pedido</th>
                                        <th style=' text-align:right;'>Costo Ult.Compra</th>
                                        <th style=' text-align:right;'>Costo Nuevo</th>
                                        
                                        <th style=' text-align:right;'>Utildad Actual</th>
                                        <th style=' text-align:right;'>Utilidad Nueva</th>
                                        
                                        <th style=' text-align:right;'>Precio Actual</th>
                                        <th style='text-align:right;'>Precio Nuevo</th>
                             <!--            <th>Acción</th>   -->
                                    </tr>
                                </thead>
                                <tbody id="tbod" name="tbod" onload="LimpiaCampos()">
                                	<div id ="divtbod" class="grid" style="width: fit-content; border: 1px;"></div>
                                	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['name'] = 'lP';
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['DETPEDIDO_NAC']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['total']);
?> 								
										<tr style="padding:0px;" id="tr<?php echo $_smarty_tpl->tpl_vars['DETPEDIDO_NAC']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['idLinea'];?>
">
						    			<td style="width:10px;"><?php echo $_smarty_tpl->tpl_vars['DETPEDIDO_NAC']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['idLinea'];?>
</td>
						    			<td ><?php echo $_smarty_tpl->tpl_vars['DETPEDIDO_NAC']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['descArti'];?>

						    			  	<input name="item[]" id="<?php echo $_smarty_tpl->tpl_vars['DETPEDIDO_NAC']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['idLinea'];?>
" type=hidden  value="<?php echo $_smarty_tpl->tpl_vars['DETPEDIDO_NAC']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['descArti'];?>
">
						    			</td>
     									<td ><?php echo $_smarty_tpl->tpl_vars['DETPEDIDO_NAC']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['codArti'];?>

     										<input name="codArti[]" id="<?php echo $_smarty_tpl->tpl_vars['DETPEDIDO_NAC']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['idLinea'];?>
" type=hidden  value="<?php echo $_smarty_tpl->tpl_vars['DETPEDIDO_NAC']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['codArti'];?>
">
     									</td>     									
     									<td style=" text-align:right;">
     									    <?php echo $_smarty_tpl->tpl_vars['DETPEDIDO_NAC']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['cantidad'];?>

     										<input name="cant[]" id="cant<?php echo $_smarty_tpl->tpl_vars['DETPEDIDO_NAC']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['idLinea'];?>
" type=hidden style="text-align: right; width:50px;" value="<?php echo $_smarty_tpl->tpl_vars['DETPEDIDO_NAC']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['cantidad'];?>
">
     									</td>
     									<td style=" text-align:right;">
     									    <?php echo $_smarty_tpl->tpl_vars['DETPEDIDO_NAC']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['costoF'];?>

     										<input name="costPed[]" id="costPed<?php echo $_smarty_tpl->tpl_vars['DETPEDIDO_NAC']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['idLinea'];?>
" type=hidden style="text-align: right; width:100px;" value="<?php echo $_smarty_tpl->tpl_vars['DETPEDIDO_NAC']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['costoF'];?>
">
     									</td>     									
     									<td style=" text-align:right;">
     									    <?php echo $_smarty_tpl->tpl_vars['DETPEDIDO_NAC']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['costoUltCompra'];?>

     									<!-- 	<input name="actuCost[]"  id="<?php echo $_smarty_tpl->tpl_vars['DETPEDIDO_NAC']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['idLinea'];?>
" type=hidden style="text-align: right; width:100px;" value="<?php echo $_smarty_tpl->tpl_vars['DETPEDIDO_NAC']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['costoUltCompra'];?>
">  -->
     									</td>
     									<td style=" text-align:right;">
     									    <?php echo $_smarty_tpl->tpl_vars['DETPEDIDO_NAC']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['costoPedido'];?>

     									 <input  id="cost<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']+1;?>
" type=hidden style="text-align: right; width:100px;" value="<?php echo $_smarty_tpl->tpl_vars['DETPEDIDO_NAC']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['costoPedido'];?>
">  	
     									</td>
     									
     									<td style=" text-align:right;">
     									    <?php echo $_smarty_tpl->tpl_vars['DETPEDIDO_NAC']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['utiActual'];?>

     								<!-- 	<input name="utiActu[]" id="utiActu<?php echo $_smarty_tpl->tpl_vars['DETPEDIDO_NAC']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['idLinea']+1;?>
" type=hidden style="text-align: right; width:100px;" value="<?php echo $_smarty_tpl->tpl_vars['DETPEDIDO_NAC']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['utiActual'];?>
">  -->	
     									</td>
     									<td style=" text-align:right;">
     										<input name="utiNueva[]" id="unu<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']+1;?>
" type=number style="text-align: right; width:100px;" onchange="recalculaPrecio(this.id)" value="<?php echo $_smarty_tpl->tpl_vars['DETPEDIDO_NAC']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['utiActual'];?>
">
     									</td>     									     									
     									
     									<td style=" text-align:right;">
     									    <?php echo $_smarty_tpl->tpl_vars['DETPEDIDO_NAC']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['precioUnitarioF'];?>

     								<!-- 	<input name="precioActu[]" id="<?php echo $_smarty_tpl->tpl_vars['DETPEDIDO_NAC']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['idLinea'];?>
" type=hidden style="text-align: right; width:100px;" value="<?php echo $_smarty_tpl->tpl_vars['DETPEDIDO_NAC']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['precioUnitarioF'];?>
">   -->	
     									</td>
     									<td style=" text-align:right;">
     										<input name="precioNuevo[]" id="pnu<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']+1;?>
" type=number style="text-align: right; width:100px;" onchange="recalculaUtilidad(this.id)" value="<?php echo $_smarty_tpl->tpl_vars['DETPEDIDO_NAC']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['precioNuevo'];?>
">
     									</td>
     							<!-- 
										<td class="center">
											<a href="#" id="<?php echo $_smarty_tpl->tpl_vars['DETPEDIDO_NAC']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['idLinea'];?>
" <?php if (($_smarty_tpl->tpl_vars['ACTION']->value=='4'||$_smarty_tpl->tpl_vars['ACTION']->value=='7')) {?> hidden="true"<?php }?> type=hidden onclick="deleteCurrentRowJS(this)"><i class="icon icon-color icon-remove"></i></a>
										</td>
										 -->
									</tr> 
								<?php endfor; endif; ?>
                                </tbody>
                            </table>  

                        </div>
                </div><!--class="box span12"-->
            </div><!--class="row-fluid" -->
				<div  style="text-align:right;margin-top:-15px;">
					<button type="button" class="btn btn-large" onclick="Sale();">Cerrar</button>
					<button type="submit" onclick="AplicaGuardar();" id="btnAction" name="btnAction" class="btn btn-large btn-primary"><?php echo $_smarty_tpl->tpl_vars['BTN_ACTION']->value;?>
</button>	
				</div>	            
   		</form> 
   		
<!-- NEW ARTICLE MESSAGE MODAL -->
<div class="modal fade" id="newArticle-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3 class="modal-title blue"><i class="fa fa-bars"></i> Nuevo Artículo</h3>
                <br />
                <p>Para agregar un nuevo articulo, complete la siguiente información</p>
            </div>
            <form method="post" id="frm-newArticle">
                <div class="modal-body" id="newArticle">

                    <table class="table table-condensed">
                      <tbody> 

                          <tr>
                              <th>Cod. Artículo</th>
                              <td>                                
                                <div class="pull-left control-group" id="input-new-codInterno" style="margin-right:3px;">
                                    <input type="text" class="input-block-level"  id="new-codInterno" name="new-codInterno" value="" placeholder="Codigo Interno">
                                </div>                                  
                              </td>
                          </tr>
                          <tr>
                              <th>Descripción</th>
                              <td>
                                  <div class="pull-left control-group" id="input-new-nameArticulo" style="margin-right:3px;">
                                    <input type="text" class="input-block-level" id="new-nameArticulo" name="new-nameArticulo" value="" placeholder="Descripción del Articulo">
                                  </div>
                              </td>
                          </tr>
                          <tr>
                              <th>Cod. Arti. Proveedor</th>
                              <td>
                                  <div class="pull-left control-group" id="input-new-codProveedor" style="margin-right:3px;">
                                      <input type="text" class="input-block-level" id="new-codProveedor" name="new-codProveedor" placeholder="Codx. Arti. Proveedor" value="N/A">
                                  </div>
                              </td>
                          </tr>

                      </tbody>
                    </table>                    

                </div>
                <div class="modal-footer clearfix">
                    <div id="message-newArticle">

                    </div>    
                    <button type="button" class="btn btn-success" id="add-new-article" name="add-new-article"><i class="fa fa-check-square-o"></i> Agregar Artículo</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->   		           

<script type="text/javascript">


$(document).ready(function(){
	
	$('.datepicker').datepicker({
        language: "es",
        format:"dd/mm/yyyy",
        todayHighlight: true,
        autoclose: true
    //    defaultDate: new Date()
        //,           
        //startDate: new Date()
     });

	
	// si es agregar o modificar una compra hay datos que no deben solicitar
	if ($('#action').val() == '1' || $('#action').val() == 2){
		$("#boxNumFac").css("display",'none');		
		$("#boxFecFac").css("display",'none');
		$("#boxFormaPago").css("display",'none');
		$("#boxTipoCambio").css("display",'none');
		$("#boxGravado").css("display",'none');
		$("#boxTotal").css("display",'none');
		$("#boxImpuesto").css("display",'none');
		$("#boxDescuento").css("display",'none');
		$("#boxTotalD").css("display",'none');	
		
	}
	switch ($('#action').val()){
	case '1':
		$("#OC").css("display",'none');
		
		break;
	case '2':
		break;
	
	case '4': // visualizar
		$("#boxArticulo").css("display",'none');
		$("#btnAction").css("display",'none');
		$("#boxTotalD").css("display",'none');	
		$("#selectProveedor").prop("disabled",true);
		$("#frmCompraNac :input").attr('readonly', true);
		break;
	case '5': // recibir pedido
		
		// no se permite agregar articulos cuando se esta recibiendo la mercaderia.
		$("#boxArticulo").css("display",'none');	
		$( "#fecFac" ).val($( "#current_date" ).val());

		break;

	case '7': // visualizar
		$("#boxArticulo").css("display",'none');
		$("#boxTotalD").css("display",'none');	
		$("#selectProveedor").prop("disabled",true);
		$("#frmCompraNac :input").attr('readonly', true);
		break;		
		
	}

    

    $('#tcambio').number( true, 2 );
    $('#gravado').number( true, 2 );
    $('#impuesto').number( true, 2 );
    $('#descuento').number( true, 2 );
    $('#total').number( true, 2 );
    $('#totalD').number( true, 2 );
    $('#costo').number( true, 2 );
    $('#numFac').focus();
    

                   
});
	
    	
	function BuscaArticulo(criterio,valor){
		
		document.getElementById('message-fields').innerHTML = "";
		
		validaArticulo(criterio,valor);
		
		switch (criterio){
			case 'barras':
				$('#texto-codigoprov').val($('#codigoArticuloProv').val());
				$('#texto-codigo').val($('#codigoArticulo').val());				
				$('#descArticulo').val($('#descipcionArticulo').val());
				if ($('#ArticuloExiste').val() == 'true'){
					$("#cantidad").focus();	
				}else{
					document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Artículo no existe.</strong></div>";
					$('#texto-barras').focus();
				}
				break;
			case 'codigo':
				$('#texto-codigoprov').val($('#codigoArticuloProv').val());
				$('#texto-barras').val($('#codigoArticuloBarras').val());
				$('#descArticulo').val($('#descipcionArticulo').val());
				if ($('#ArticuloExiste').val() == 'true'){
					$("#cantidad").focus();	
				}else{
					document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Artículo no existe.</strong></div>";
					$('#texto-codigo').focus();
				}				
				break;
			case 'codigoprov':
				$('#texto-barras').val($('#codigoArticuloBarras').val());
				$('#texto-codigo').val($('#codigoArticulo').val());
				$('#descArticulo').val($('#descipcionArticulo').val());
				if ($('#ArticuloExiste').val() == 'true'){
					$("#cantidad").focus();	
				}else{
					document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Artículo no existe.</strong></div>";
					$('#texto-codigoprov').focus();
				}				
				break;
		}	
		
	}
	
	
	function validaArticulo(criterio,valor){
	
		$('#ArticuloExiste').val('false');
		
		$.ajax({
            type: "GET",
            url: "processGetArticulo.php",             
            dataType : "text",
            async: false,
    		cache: false,
            data: "criterio="+criterio+"&valor="+valor,
           	success: function(data,strMsg){
           	//alert(data);
           		$dataStr = (data.trim().split("|"));
    		   // alert($dataStr[5]);
    			if ($dataStr[0].trim()=='OK') {
    			
    				// todo OK, se verifica si el articulo existe
    				$('#codigoArticulo').val($dataStr[1].trim());
    				$('#codigoArticuloProv').val($dataStr[2].trim());
    				$('#codigoArticuloBarras').val($dataStr[3].trim());
    				$('#descipcionArticulo').val($dataStr[4].trim());
    				$('#ArticuloExiste').val($dataStr[5].trim());     				
    			}else{
    				alert(data);
					document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Error Inesperado.</strong></div>";
    			}

            },
            error: function(jqXHR,textStatus,errorThrown){
                alert('Error Fatal al Validar Articulo '+errorThrown);
            }
        });
		
	}
		
 

	//Hace los preparativos para eliminar una fila, además llama a la funcion qu elimina la fila 
	function deleteCurrentRowJS(obj){	
		var delRow = obj.parentNode.parentNode;
				
		// se obtiene un puntero a la tabla de articulos
    	var tbl = document.getElementById("tableItem");

		// obtiene la fila seleccionada
		var rIndex = delRow.sectionRowIndex;
                
		// borra la fila
		var rowArray = new Array(delRow);
		deleteRows(rowArray);
		
		//reordena la tabla para corregir el consecutivo
		reorderRowsJS(tbl, rIndex);		
	}   
	
	//Hace los preparativos para eliminar una fila, además llama a la funcion qu elimina la fila 
	function deleteCurrentRow(obj){	
		var delRow = obj.parentNode.parentNode;
		var tbl = delRow.parentNode.parentNode;
		// obtiene la fila seleccionada
		var rIndex = delRow.sectionRowIndex;
                
		// borra la fila
		var rowArray = new Array(delRow);
		deleteRows(rowArray);
		
		//reordena la tabla para corregir el consecutivo
		reorderRows(tbl, rIndex);		
	}

	//Reordena la tabla despues que una fila fue eliminada
	function reorderRows(tbl, startingIndex){
		if (tbl.rows.length!=1){
    		if(tbl.rows[startingIndex]){
				var count = startingIndex;
				for (var i=startingIndex; i<tbl.rows.length; i++) {
					// CONFIG: next line is affected by myRowObject settings
					tbl.rows[i].myRow.one.data = count; // text
					count++;
				};
    		};
		};	
	}
	
	function reorderRowsJS(tbl, startingIndex){
		if (tbl.rows.length!=1){
    		if(tbl.rows[startingIndex]){
				var count = startingIndex;
				for (var i=startingIndex; i<tbl.rows.length; i++) {
					// CONFIG: next line is affected by myRowObject settings
					//$('input[name^="label"]').eq(i).val(count);
					tbl.rows[i].cells[0].innerHTML = count; // text
					//tbl.rows[i].myRow.one.data = count; // text
					count++;
				};
    		};
		};	
	}	
	
	vCosto 	 = $('input[name^="cpedido"]').eq(numRow).val();
	

	//Elimina una fila de la tabla
	function deleteRows(rowObjArray){
		for (var i=0; i<rowObjArray.length; i++) {
			var rIndex = rowObjArray[i].sectionRowIndex;
			rowObjArray[i].parentNode.deleteRow(rIndex);
		}	
	}

	
    function AplicaGuardar() {		
    	// primero se realiza la validacion de los campos.
    	    document.getElementById('message-fields').innerHTML = "";
    	    if (validateForm()){
    	    	document.forms["frmCompraNacReci"].submit();
    		//	alert('Operación exitosa.');
    	    } // else if validateForm    	        
    }
        
    function validateForm() {    		
    	
	    document.getElementById('message-fields').innerHTML = "";
	    
	    //
		// Se valida que el usuario haya indicado el proveedor, es obligatorio.
		//
	    var provSelect = $("#selectProveedor").val();	

		if (provSelect == "0"){
			document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Proveedor es Requerido.</strong></div>";
			return false;
		}
    		
    	// se valida que haya indicado al menos un articulo
    	var table = document.getElementById("tableItem");
    	if (table.rows.length == 1){
    		document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Debe indicar al menos un artículo.</strong></div>";
    		return false;
    	}
    	
    	// si es recepcion de la mercaderia se deben hacer varias validaciones adicionales.
    	if ($('#action').val() == '5'){
    		// numero de factura obligatorio
    		if ($('#numFac').val() == ""){
    			document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Número Factura es obligatorio.</strong></div>";
        		return false;
    		}  		
    		
    		//fecha factura obligatorio
    		if ($('#fecFac').val() == ""){
    			document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Fecha Factura es obligatorio.</strong></div>";
        		return false;
    		}    
    		
    		// tipo de cambio no puede ser 0.00
    		if ($('#tcambio').val() == 0.00){
    			document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Tipo de Cambio no puede ser 0.00.</strong></div>";
        		return false;
    		}      		
    		
    		//monto gravado obligatorio
    		if ($('#gravado').val() == ""){
    			document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Monto gravado es obligatorio.</strong></div>";
        		return false;
    		}
    		//impuesto obligatorio
    		if ($('#impuesto').val() == ""){
    			document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Monto Impuesto es obligatorio.</strong></div>";
        		return false;
    		}    		
    		
    		//descuento obligatorio	
    		if ($('#descuento').val() == ""){
    			document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Monto Descuento es obligatorio.</strong></div>";
        		return false;
    		}     		
    		
    		//total factura obligatorio
    		if ($('#total').val() == ""){
    			document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Monto Total es obligatorio.</strong></div>";
        		return false;
    		}        		
    		
    		
    		// se debe revisar los montos en el detalle concilie con los montos digitados.
    		
    		if (!DetalleValido()){
    			//document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Montos del Detalle no concilian.</strong></div>";
        		return false;
    		}    	 		
    		
    	}
    	
    	return true;
    }
    
    function DetalleValido(){
		// se obtiene un puntero a la tabla de articulos
		
		var totalCalculado = 0.00;
		var totalGravado   = 0.00;
		var impuestoCalculado = 0.00;
		var descuento = parseFloat($('#descuento').val());
		var lCost  = 0.00;
		var lCant  = 0;
		var tmp = "";
		var valorEnCero = 0;
		
		var porce_imp = parseFloat(($("#porce_iv").val()/100.00));
		
    	var tbl = document.getElementById("tableItem");
    	var numRows = tbl.rows.length -1; // -1 para excluir el encabezado
    	var numRow;
    	for (var i=1; i <= numRows; i++) {
    	
    		// se obtine el numero de fila para efectos de procesar cada linea
			numRow = i;

		//	tmp = $('input[name^="cost"]').eq(numRow).val();
			tmp  = document.getElementById("costPed"+numRow).value;
			tmp = tmp.replace(/,/g, '');				
            tmp = tmp.trim();  
   
            if (tmp == ""){
            	tmp = "0.00";
            }
            if (tmp == "0.00"){
            	
            	valorEnCero = 1;
            }    
			lCost = parseFloat(tmp);
	
	//		tmp = $('input[name^="cant"]').eq(numRow).val();
			tmp  = document.getElementById("cant"+numRow).value;
			tmp = tmp.replace(/,/g, '');	
			tmp = tmp.trim();

			if (tmp == ""){
            	tmp = "0.00";
            }
            if (tmp == "0.00"){
            	valorEnCero = 1;
            }
			lCant = parseInt(tmp);
			
		//	tmp = $('input[name^="precioNuevo"]').eq(numRow).val();
			tmp  = document.getElementById("pnu"+numRow).value;
			tmp = tmp.trim();

			if (tmp == ""){
            	tmp = "0.00";
            }
            if (tmp == "0.00"){
            	valorEnCero = 1;
            }    

			totalGravado += (lCant * lCost);  
			
			
		};

		impuestoCalculado = totalGravado * porce_imp;

        // si se selecciono que esta exento se intepreta que el impuesto
        // es igual a cero.
        if($("#exento").is(":checked")){
            impuestoCalculado = 0.00;
        }


		// si un valor viene en blanco, se pone cero, y si el usuario pone cero, tambien es un error.
		if (valorEnCero == 1){
			document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Valores en cero en el detalle no son permitidos.</strong></div>";
    		return false;
		}
				
		// el impuesto debe conciliar
	
		if (impuestoCalculado.toFixed(2) != parseFloat($('#impuesto').val()).toFixed(2)){

			document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Monto Impuesto no concilia "+impuestoCalculado.toFixed(2)+".</strong></div>";
    		return false;
		}
		
		// el monto gravado debe conciliar
		if (totalGravado.toFixed(2) != parseFloat($('#gravado').val()).toFixed(2)){
			document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Monto Gravado no concilia.</strong></div>";
    		return false;
		}

		totalCalculado = ((totalGravado + impuestoCalculado) - (descuento));
		
		$('#totalD').val(totalCalculado);

		if (totalCalculado.toFixed(2) != parseFloat($('#total').val()).toFixed(2)){
			document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Total Digitado no concilia.</strong></div>";
    		return false;
		}
		
    	return true;
    }

	function Sale(){
		
		window.location="../comprasnac/index.php";
			
	}
	
	function recalculaPrecio(idRow){
		
		var numRow   = idRow.substring(3);
		
//		var vUtil  = $('input[name^="utiNueva"]').eq(numRow).val();
		var vUtil  = document.getElementById("unu"+numRow).value;
			
		if (vUtil.length === 0){
//			vUtil  = $('input[name^="utiActu"]').eq(numRow).val();
			vUtil  = document.getElementById("utiActu"+numRow).value;
		}
			
//		var vCosto = $('input[name^="cost"]').eq(numRow).val();
		var vCosto = document.getElementById("cost"+numRow).value;
	
		vCostoS    = vCosto.replace(",","");
		var nPrecio = parseFloat(vCostoS) * (1 + (parseFloat(vUtil) / 100.00));
		
		var nPrecioStr = nPrecio.toFixed(2).replace(/./g, function(c, i, a) {
		    return i && c !== "." && ((a.length - i) % 3 === 0) ? ',' + c : c;
		})
		
//		$('input[name^="precioNuevo"]').eq(numRow).val(nPrecioStr);
		document.getElementById("pnu"+numRow).value = nPrecio.toFixed(2);

	}

	function recalculaUtilidad(idRow){
		
		var numRow   = idRow.substring(3);
		// ((Precio / Costo) - 1) * 100 = UTIL
//		var vPrecio = $('input[name^="precioNuevo"]').eq(numRow).val();
		var vPrecio = document.getElementById("pnu"+numRow).value;
		
		if (vPrecio.length === 0){
			// si el precio queda nulo se debe volver a calcular.
			// primero con base a un nuevo factor de utilidad.
			// si el nuevo factor esta nulo se utiliza el factor de utilidad actual.
	//		var vUtil  = $('input[name^="utiNueva"]').eq(numRow).val();
			var vUtil  = document.getElementById("unu"+numRow).value;
			
			if (vUtil.length === 0){
	//			vUtil  = $('input[name^="utiActu"]').eq(numRow).val();
				vUtil  = document.getElementById("utiActu"+numRow).value;
			}
//			var vCosto = $('input[name^="cost"]').eq(numRow).val();
			var vCosto = document.getElementById("cost"+numRow).value;
			vCostoS    = vCosto.replace(",","");
			var nPrecio = parseFloat(vCostoS) * (1 + (parseFloat(vUtil) / 100.00));

		}else{
			// Se recalcula la utilidad con base al nuevo precio
			// que el usuario a digitado
	//		var vCosto = $('input[name^="cost"]').eq(numRow).val();
			var vCosto = document.getElementById("cost"+numRow).value;
			vCostoS    = vCosto.replace(",","");
			
			var nUtil = ((parseFloat(vPrecio) / parseFloat(vCostoS)) - 1) * 100.00;
	//		$('input[name^="utiNueva"]').eq(numRow).val(parseFloat(nUtil).toFixed(2));
			document.getElementById("unu"+numRow).value = nUtil.toFixed(2);
			
			var nPrecio = parseFloat(vPrecio) * 1;

		};
//		var nPrecioStr = nPrecio.toFixed(2).replace(/./g, function(c, i, a) {
//		    return i && c !== "." && ((a.length - i) % 3 === 0) ? ',' + c : c;
//		});
//		$('input[name^="precioNuevo""]').eq(numRow).val(nPrecioStr);
		document.getElementById("pnu"+numRow).value = nPrecio;
		
	}
  
	</script><?php }} ?>
