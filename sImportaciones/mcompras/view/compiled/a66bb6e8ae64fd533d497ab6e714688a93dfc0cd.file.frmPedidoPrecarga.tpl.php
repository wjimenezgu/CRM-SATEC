<?php /* Smarty version Smarty-3.1.16, created on 2017-07-04 07:21:55
         compiled from "../mcompras/view/frmPedidoPrecarga.tpl" */ ?>
<?php /*%%SmartyHeaderCode:162308754458d9eeb227bac6-14322075%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a66bb6e8ae64fd533d497ab6e714688a93dfc0cd' => 
    array (
      0 => '../mcompras/view/frmPedidoPrecarga.tpl',
      1 => 1499174474,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '162308754458d9eeb227bac6-14322075',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_58d9eeb23ed473_22195847',
  'variables' => 
  array (
    'NAV_MENU' => 0,
    'ID_TIENDA' => 0,
    'ACTION' => 0,
    'ID_PEDIDO' => 0,
    'PORCE_IV' => 0,
    'PEDIDO_NAC' => 0,
    'PROVEEDORES' => 0,
    'CURRENT_DATE' => 0,
    'DETPEDIDO_NAC' => 0,
    'BTN_ACTION' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d9eeb23ed473_22195847')) {function content_58d9eeb23ed473_22195847($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['NAV_MENU']->value;?>

        <form class="form-horizontal" id='frmPedidoPrecarga'  action="procesaPedidoPrecarga.php"  method="POST">

            <input type="hidden" name="id_tienda" id="id_tienda" value="<?php echo $_smarty_tpl->tpl_vars['ID_TIENDA']->value;?>
">
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
        	<div class="row-fluid" >		
            	<div class="box span12">
                	<div class="box-header well" data-original-title>
                    	<h2>ORDEN DE COMPRA <?php if ($_smarty_tpl->tpl_vars['ACTION']->value!="1") {?>NO. | <?php echo $_smarty_tpl->tpl_vars['PEDIDO_NAC']->value[0]['numOrdenCompra'];?>
<?php }?></h2>                    	    
                  </div>
                  <div id="message-fields" style='alignment-adjust:  central;'></div>
                    
                            
                  <div class="control-group" id="boxSelectProveedor" style="margin-top: 15px;  margin-left: -75px;">
								    <label class="control-label" for="selectProveedor"> Proveedor</label>
								    <div class="controls">
									    <select data-placeholder="Ingrese Proveedor"   id="selectProveedor"  style="width:50%;" name ="selectProveedor"  data-rel="chosen"  >
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
                    </div>
                  </div>  
                            
                  <div class="control-group" id="boxFecMovi">
    								<label class="control-label" for="fecMoviI">Facturados a Partir</label>
    								<div class="controls">
    									<input class="input-medium focused datepicker" style="float: left;margin-left:10px;" id="fecMoviI" type="text" placeholder="Fecha Inicial" value="<?php echo $_smarty_tpl->tpl_vars['CURRENT_DATE']->value;?>
" >
    								</div>
							    </div>		

                  <legend style="height:5px"></legend>
                  <div class="box" style="margin-left: 10px;margin-right: 10px;margin-top: -20px;" id="boxArticulo">
                        	<div class="box-header well">
                            	<h3>Buscar Articulos</h3>
                            </div>
    								  <div class="control-group" style="margin-left: -150px;" id="boxCriterios">
    									  <div class="controls">
    												
                    						<form style="margin:0px; padding:0px; float:right; margin-top:5px;">
                    							<input type="text"  accesskey="c" class="txt_search" id="texto-codigo"  value="" style="margin-top:15px; margin-left:20px; font-size:1vw; width:100px;" placeholder="Código Artículo">
                    							<input type="text"  accesskey="c" class="txt_search" id="texto-codigoprov"  value="" style="margin-top:15px; margin-left:20px; font-size:1vw; width:155px;" placeholder="Código Arti. Proveedor">
                    							<input type="text"  id="descArticulo"  value="" style="margin-top:15px; margin-left:20px; font-size:1vw; width:375px;" placeholder="Descripción">
                                                <button id="btn-getInventario" style="margin-top:15px;margin-left:10px;" class="btn btn-small" data-toggle="modal" data-target="#inventory-modal" ><i class="icon-search"></i> Buscar</button>                							
                    							<input type="number"  id="cantidad" value="1" style="margin-top:15px; margin-left:20px; font-size:1vw; width:75px; text-align:right;" placeholder="Cantidad">
                    							<input type="number"    id="costo"  value="" style="text-align:right; margin-top:15px; margin-left:20px; font-size:1vw; width:100px;" placeholder="Costo">                							
                    							<button type="button" title="Agregar" style="margin-top:15px;" class="btn btn-small btn-success" id="btnHabilitaP2" onclick="AgregaLinea();"><i class="icon-plus icon-white"></i> </button>
                    							<button type="button" title="Articulo Nuevo" style="margin-top:15px;" class="btn btn-small btn-warning" id="btnArtiNuevo" data-toggle="modal" data-target="#newArticle-modal"><i class="icon icon-white icon-add"></i> Nuevo Artículo </button>                							                							
                    						</form> 					
    									  </div>  <!-- class controls -->             
    								  </div>	<!-- boxCriterios -->	
                  </div> <!-- class="box"  -->
                  <div class="box-content">
                    <table class="table table-striped table-bordered bootstrap-datatable" id="tableItem">
                      <thead>
                                	<tr>
                                    	<th >#</th>
                                    	<th >Artículo</th>
                                      <th >Código</th>
                                      <th>Cod.Proveed.</th>
                                      <th style=' text-align:right;'>Cantidad</th>
                                      <th style='text-align:right;'>Costo Unit.</th>
                                      <th >Acción</th>
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
        						    			<td ><?php echo $_smarty_tpl->tpl_vars['DETPEDIDO_NAC']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['idLinea'];?>
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
                              <td ><?php echo $_smarty_tpl->tpl_vars['DETPEDIDO_NAC']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['codProv'];?>

                                <input name="codProv[]" id="<?php echo $_smarty_tpl->tpl_vars['DETPEDIDO_NAC']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['idLinea'];?>
" type=hidden  value="<?php echo $_smarty_tpl->tpl_vars['DETPEDIDO_NAC']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['codProv'];?>
">
                              </td>     									
             									<td style="text-align:right;">
             										<input name="cant[]" id="<?php echo $_smarty_tpl->tpl_vars['DETPEDIDO_NAC']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['idLinea'];?>
" type=number style="text-align: right; width:50px;" value="<?php echo $_smarty_tpl->tpl_vars['DETPEDIDO_NAC']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['cantidad'];?>
">
             									</td>
             									<td style="text-align:right;">
             										<input name="costPed[]" id="<?php echo $_smarty_tpl->tpl_vars['DETPEDIDO_NAC']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['idLinea'];?>
" type=number style="text-align: right; width:100px;" value="<?php echo $_smarty_tpl->tpl_vars['DETPEDIDO_NAC']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['costoUnitario'];?>
">
             									</td>
        										<td class="center">
        											<a href="#" id="<?php echo $_smarty_tpl->tpl_vars['DETPEDIDO_NAC']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['idLinea'];?>
" <?php if (($_smarty_tpl->tpl_vars['ACTION']->value=='4'||$_smarty_tpl->tpl_vars['ACTION']->value=='7')) {?> hidden="true"<?php }?> type=hidden onclick="deleteCurrentRowJS(this)"><i class="icon icon-color icon-remove"></i></a>
        										</td>
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

<!-------------------------- MODAL ARTICULOS ---------------------------------->
<!-- -320 es el margen de arriba ,  -670 marge hacia la izquierda mas negativo mas hacia la izq. -->
<div class="modal fade" id="inventory-modal" tabindex="-1" role="dialog" data-refresh="true"  aria-hidden="true" style="margin: -320px 0 0 -650px;width:1250px">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header"> 
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3 class="modal-title green"><i class="fa fa-bars"></i> Inventario de Artículos</h3>                
            </div>
            <form action="#" method="post" id="frmAllInventory">
                <div class="modal-body" id="allInventory" style="max-height: 690px;">                    
                    <h5>Consultando Inventario</h5><div id='boxProgress2' style='width:100%; margin-top:10px;'><div class='progress progress-striped progress-info active' ><div class='bar' style='width:0%;'></div></div></div>                    
                </div>
                <div class="modal-footer clearfix">
                    <button type="button" class="btn btn-inverse" id="accept-choosed" data-dismiss="modal"><i class="fa fa-check-square-o"></i> Aceptar</button>
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
        //,           
        //startDate: new Date()
     });

	
	// si es agregar o modificar una compra hay datos que no deben solicitar
	if ($('#action').val() == '1' || $('#action').val() == 2){
		$("#boxNumFac").css("display",'none');		
		$("#boxFecFac").css("display",'none');
		$("#boxFormaPago").css("display",'none');
	//	$("#boxTipoCambio").css("display",'none');
		$("#boxGravado").css("display",'none');
		$("#boxTotal").css("display",'none');
		$("#boxImpuesto").css("display",'none');
		$("#boxDescuento").css("display",'none');
		$("#boxTotalD").css("display",'none');	
		
		
	}
	switch ($('#action').val()){
	case '1':
		$("#OC").css("display",'none');
		$("#tcambio").val(1.00);
		
		
		break;
	case '2':
		break;
	
	case '4': // visualizar
		$("#boxArticulo").css("display",'none');
		$("#btnAction").css("display",'none');
		$("#boxTotalD").css("display",'none');	
		$("#boxFecMovi").css("display",'none');
		$("#selectProveedor").prop("disabled",true);
		$("#frmCompraNac :input").attr('readonly', true);
		break;
	case '5': // recibir pedido
		
		// no se permite agregar articulos cuando se esta recibiendo la mercaderia.
		$("#boxArticulo").css("display",'none');					
		break;

	case '7': // visualizar
		$("#boxArticulo").css("display",'none');
		$("#boxTotalD").css("display",'none');	
		$("#selectProveedor").prop("disabled",true);
		$("#frmCompraNac :input").attr('readonly', true);
		break;		
		
	}
	// Si presiona enter en el campo texto a buscar que se ejecute el evento click() del boton buscar
	
    $('#texto-codigo').keypress(function(e){
        if(e.keyCode==13){
        	e.preventDefault();
        	BuscaArticulo('codigo',$('#texto-codigo').val());
        }
      });	
    
    $('#texto-codigoprov').keypress(function(e){
        if(e.keyCode==13){
        	e.preventDefault();
        	BuscaArticulo('codigoprov',$('#texto-codigoprov').val());
        }
      });

/*
    $("#texto-codigo").on("change", function(e){
        e.preventDefault();
        BuscaArticulo('codigo',$('#texto-codigo').val());
    });
    
    $("#texto-codigoprov").on("change", function(e){
        e.preventDefault();
        BuscaArticulo('codigoprov',$('#texto-codigoprov').val());
    });
*/    

    $('#tcambio').number( true, 2 );
    $('#gravado').number( true, 2 );
    $('#impuesto').number( true, 2 );
    $('#descuento').number( true, 2 );
    $('#total').number( true, 2 );
    $('#totalD').number( true, 2 );
//    $('#costo').number( true, 2 );
    
    
    
  //Inserta un cliente por medio de AJAX y lo añade a los datos del cliente en la factura
    $("#add-new-article").click(function(e){
     	e.preventDefault();
        var newCodInterno   = $("#new-codInterno").val();
        var newNameArticulo = $("#new-nameArticulo").val();
        var newCodProveedor = $("#new-codProveedor").val();  
        var provSelect      = $("#selectProveedor").val();	


        
        var errors      = false;

        if(newCodInterno == ""){
            $("#input-new-codInterno").addClass("error");
            errors = true;
        }else{
            $("#input-new-codInterno").removeClass("error");
        }
        
        if(newNameArticulo == ""){
            $("#input-new-nameArticulo").addClass("error");
            errors = true;
        }else{
            $("#input-new-nameArticulo").removeClass("error");
        }
        


        if(errors != true){ 
           //alert(newClientId);
       	$.ajax({
            type: "POST",
            url: "processArtiNuevo.php",             
            dataType : "html",
            data: "codInterno="+newCodInterno+"&nameArticulo="+newNameArticulo+"&codProveedor="+newCodProveedor+"&idProveedor="+provSelect,
           	success: function(data2,strMsg,jqXHR){
           		var esOK = "O";
           		//alert(jqXHR.responseText);
           		//alert(strMsg);
           	//alert(data2);
           		if (data2 == 0) {
            		$("#texto-codigo").val($("#new-codInterno").val());
            		$("#descArticulo").val($("#new-nameArticulo").val());
            		$("#texto-codigoprov").val($("#new-codProveedor").val());
            		// se limpian los campos del modal
            		$("#new-codInterno").val("");
            		$("#new-nameArticulo").val("");
            		$("#new-codProveedor").val("");
                    // se cierra el modal        
                	$("#newArticle-modal").modal('hide');
           		}
           		else {
					//alert("No se puede insertar artículo");
					alert(data2);
				}
            },
            error: function(jqXHR,textStatus,errorThrown){
                alert('Error al insertar '+errorThrown);
            }
        });
        }else{
            $("#message-newArticle").html("<div class='alert alert-error pull-left'><strong><span class='icon icon-red icon-alert'/></span> <strong>Complete la Información Requerida</strong></div>");
            return false;            
        }
    });

  
  
    var cache = {
            $btnInventario    : $("#btn-getInventario"),
            $btnExistencia    : $("#existencia"),
            $boxInventory     : $("#allInventory"),
            $boxExistencia    : $("#allExistencias"),
            $txtBuscar        : $("#texto-codigo"),
            $selCriterio      : $("#criterio")
        };

    //BOTON QUE CARGA EL INVENTARIO DE ARTICULOS
    
    cache.$btnInventario.on("click", function(e){
		  var vcriterio = "codigo";
		  var vtxtBusqueda = '1';
		  var str = "";
          cache.$boxInventory.html("<h5>Consultando Inventario</h5><div id='boxProgress2' style='width:100%; margin-top:10px;'><div class='progress progress-striped progress-info active' ><div class='bar' style='width:0%;'></div></div></div>");
          if($("#texto-codigo").val()!=""){
        	  vcriterio = "codigo";
        	  str = $("#texto-codigo").val();        	  
          }else{
        	  if($("#texto-codigoprov").val()!= ""){
        		  vcriterio = "externo";
            	  str = $("#texto-codigoprov").val();
        	  }else{
        		  if($("#descArticulo").val()!= ""){
        			  vcriterio = "nombre";
                	  str = $("#descArticulo").val();
        		  }else{
                vcriterio = "todos";
                /*
        			  document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Debe indicar articulo a buscar 2.</strong></div>";
        			  return; */
        		  }
        	  }
          }
          
          // se continua con la consulta
          document.getElementById('message-fields').innerHTML = "";
               
          vtxtBusqueda = str.replace("%", "%25");
               
          var properties = {
                     url: "invLoad.php",
                     async: true,
                     cache: false,
                     data: "txtBuscar="+vtxtBusqueda+"&criterio="+vcriterio+"&fecIni="+$("#fecMoviI").val()+"&provSel="+$("#selectProveedor").val(),
                     type: "GET",
                     success: function(inventario){
                         cache.$boxInventory.html(inventario);                           
                     }, // success
                     error: function(jqXHR,textStatus,errorThrown){
                         alert('Error Fatal al Listar Articulos '+errorThrown);
                     }
                 }; // var properties            
                 $.ajax(properties);                
        
    });
    



    $('#inventory-modal').on('show', function (e) {
        if ($("#texto-buscar").val()=="") return e.preventDefault(); // stops modal from being shown
    });

                   
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
         //  	alert(data);
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
		
	function AgregaLinea(){
		var $hayError = false;
		document.getElementById('message-fields').innerHTML = "";
		if ($("#cantidad").val() == ''){
			$hayError = true;
			document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Cantidad no puede ser blanco.</strong></div>";
			$("#cantidad").focus();
			return;
		}
		if ($("#texto-codigo").val() == ''){
			$hayError = true;
			document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Código no puede ser blanco.</strong></div>";
			$("#texto-codigo").focus();
			return;
		}
		
		//
		// antes de agregar la linea al detalle de articulo se asigna el campo descarticulo a descripcionArticulo
		// por que el usuario pudo haber cambiado la descripcion para efectos de enviar una descripción mas entendible
		// para el proveedor.
		//
		$('#descipcionArticulo').val($('#descArticulo').val());
		
		// se obtiene un puntero a la tabla de articulos
    	var table = document.getElementById("tableItem");
    
    	// se obtiene la cantidad de filas de tabla, el numero incluye la fila del encabezado de las columnas
    	var rowCount = table.rows.length;
    	
    	// se agrega una fila a la tabla para llenarla con los datos del articulo
    	// row apunta a la fila    	
    	var row = table.insertRow(rowCount);

    	//******************************************************************
    	//consecutivo de linea va en la celda 0
    	var textNode = document.createTextNode(rowCount);
    	var celda = row.insertCell(0);
    	celda.appendChild(textNode);

		//*****************************************************************
    	//descripcion del articulo va en la celda 1
    	
    	var labelArt = document.createElement("label");
    	// se obtiene la descripcion del arreglo.
    	labelArt.textContent = $('#descipcionArticulo').val();
    	labelArt.setAttribute("name","item[]");    	
    	labelArt.style.width = '750px';
    	var celda2 = row.insertCell(1);
    	celda2.appendChild(labelArt);
    	
    	
    	var contentArt = document.createElement("input");
    	contentArt.value = $('#descipcionArticulo').val();
    	contentArt.setAttribute("name","item[]");
    	contentArt.type = "hidden";    	
    	celda2.appendChild(contentArt);
    	
    	
		//*****************************************************************
    	//codigo del articulo va en la celda 2

    	var labelArt2 = document.createElement("label");
        labelArt2.textContent = $("#texto-codigo").val();
        labelArt2.setAttribute("name","codArti[]");
        labelArt2.style.width = '200px';
        var cell2= row.insertCell(2);
        cell2.appendChild(labelArt2);   
        
    	var contentArt2 = document.createElement("input");
    	contentArt2.value = $("#texto-codigo").val();
    	contentArt2.setAttribute("name","codArti[]");
    	contentArt2.type = "hidden";
    	cell2.appendChild(contentArt2);


    //*****************************************************************
      //codigo proveedor del articulo va en la celda 3

      var labelArt3 = document.createElement("label");
        labelArt3.textContent = $("#texto-codigoprov").val();
        labelArt3.setAttribute("name","codProv[]");
        labelArt3.style.width = '200px';
        var cell3= row.insertCell(3);
        cell3.appendChild(labelArt3);   
        
      var contentArt3 = document.createElement("input");
      contentArt3.value = $("#texto-codigoprov").val();
      contentArt3.setAttribute("name","codProv[]");
      contentArt3.type = "hidden";
      cell3.appendChild(contentArt3);

        
      //*****************************************************************
    	// cantidad que inicia con 1 y va en la celda 4
    	
    	var txtCantidad = document.createElement("label");
    	txtCantidad.textContent = $("#cantidad").val();
    	txtCantidad.setAttribute("name","cant[]");
    	txtCantidad.style.width = '75px';
        var cell4= row.insertCell(4);
      //  cell3.appendChild(txtCantidad);   
        
    	var contentCant = document.createElement("input");
    	contentCant.value = $("#cantidad").val();
    	contentCant.setAttribute("name","cant[]");
    //	contentCant.style.width = '50px';
    	contentCant.setAttribute('style', 'text-align:right; width:50px');
    	contentCant.setAttribute('type', 'number');
    	//contentCant.type = "numer";
    	cell4.appendChild(contentCant);

    	
        //*****************************************************************
    	// costo que inicia con 0 y va en la celda 5
    	
    	var txtCosto = document.createElement("label");   
        
        var tmp = $("#costo").val();
    	tmp = tmp.trim();
    	  
        if (tmp == ""){
        	tmp = "0.00";
        }
    //	txtCosto.textContent = $('#costo').val();
    	txtCosto.textContent = tmp;
    	txtCosto.setAttribute("name","costPed[]");
    	txtCosto.setAttribute('style', 'text-align:right; width:100px');
        var cell5= row.insertCell(5);
 //       cell4.appendChild(txtCosto);   
        
    	var contentCosto = document.createElement("input");
    
   // 	var tmp = parseFloat($("#costo").val()).toFixed(2);
    	tmp = parseFloat(tmp).toFixed(2);
    	//alert(tmp);
    	// contentCosto.value = $("#costo").val();  
    	contentCosto.value = tmp;
    	contentCosto.setAttribute("name","costPed[]");
    	contentCosto.setAttribute('style', 'text-align:right; width:100px');
    	contentCosto.setAttribute('type', 'number');
//    	contentCosto.type = "hidden";
    	cell5.appendChild(contentCosto);
    	
    	//*****************************************************************
    	//boton borrar linea
    	//
    
    //	var cell5 = row.insertCell(5);

    	var ita=document.createElement('a');
    	ita.setAttribute('href', '#');
    	ita.setAttribute('onClick', 'deleteCurrentRow(this)');
    	var iti=document.createElement('i');
    	iti.setAttribute('class', 'icon icon-color icon-remove');
    	iti.setAttribute('style', 'text-align:center');
    	ita.appendChild(iti);
    
    	var cell6 = row.insertCell(6);
    	cell6.appendChild(ita);
		
    	// se agrega la linea
    	row.myRow = new myRowObject(textNode, labelArt, labelArt2, labelArt3,txtCantidad,txtCosto);		
				
		$("#cantidad").val('1');
		$("#costo").val('');
		$('#descArticulo').val('');
		
		$("#texto-codigo").val('');
		$("#texto-codigoprov").val('');
		$("#texto-codigo").focus();
	}
	
    
	//Setea un objeto para almacenar las variables
    function myRowObject(one, two, three, four, five, six, seven,eight){
		this.one = one; 		// consecutivo de las lineas
		this.two = two; 		// descripcion del articulo
		this.three = three; 	// codigo del articulo
    this.four = four;     // codigo proveedor
		this.four = five; 		// cantidad
		this.five = six; 		// costo
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
    	    	document.forms["frmPedidoPrecarga"].submit();
    			alert('Operación exitosa.');
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
    	    	    	
    	return true;
    }
    
    function DetalleValido(){
		// se obtiene un puntero a la tabla de articulos
	
		var totalCalculado = 0.00;
		var totalGravado   = 0.00;
		var impuestoCalculado = 0.00;
		var lCost  = 0.00;
		var lCant  = 0;
		var tmp = "";
		var valorEnCero = 0;
		
		 var porce_imp = parseFloat(($("#porce_iv").val()/100.00));
		
    	var tbl = document.getElementById("tableItem");
    	for (var i=1; i<tbl.rows.length; i++) {
			tmp = $('input[name^="cost"]').eq(i).val();
            tmp = tmp.trim();
  
            if (tmp == ""){
            	tmp = "0.00";
            }
            if (tmp == "0.00"){
            	valorEnCero = 1;
            }
			lCost = parseFloat(tmp);
			tmp = $('input[name^="cant"]').eq(i).val();
			tmp = tmp.trim();
			if (tmp == ""){
            	tmp = "0.00";
            }
            if (tmp == "0.00"){
            	valorEnCero = 1;
            }
			lCant = parseInt(tmp);
			tmp = $('input[name^="precioNuevo"]').eq(i).val();
			tmp = tmp.trim();
			if (tmp == ""){
            	tmp = "0.00";
            }
            if (tmp == "0.00"){
            	valorEnCero = 1;
            }
			totalGravado += (lCant * lCost);         	    	
		};
//		alert('salio');
		impuestoCalculado = totalGravado * porce_imp;
		
		
		// si un valor viene en blanco, se pone cero, y si el usuario pone cero, tambien es un error.
		if (valorEnCero == 1){
			document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Valores en cero no son permitidos.</strong></div>";
    		return false;
		}
		
		
		// el impuesto debe conciliar
		if (impuestoCalculado != parseFloat($('#impuesto').val())){
			document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Monto Impuesto no concilia.</strong></div>";
    		return false;
		}
		
		// el monto gravado debe conciliar
		if (totalGravado != parseFloat($('#gravado').val())){
			document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Monto Gravado no concilia.</strong></div>";
    		return false;
		}
		
		totalCalculado = totalGravado + impuestoCalculado - parseFloat($('#descuento').val());
		
		$('#totalD').val(totalCalculado);
		
		if (totalCalculado != parseFloat($('#total').val())){
			document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Total Digitado no concilia.</strong></div>";
    		return false;
		}
		
    	return true;
    }

	function Sale(){
		
		window.location="../mcompras/listPedidos.php";
			
	}
  
	</script><?php }} ?>
