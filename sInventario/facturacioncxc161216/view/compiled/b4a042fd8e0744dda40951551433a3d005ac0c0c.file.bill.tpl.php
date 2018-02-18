<?php /* Smarty version Smarty-3.1.16, created on 2016-12-13 10:53:14
         compiled from "../facturacioncxc/view/bill.tpl" */ ?>
<?php /*%%SmartyHeaderCode:177416218057e86ae3aa9f86-41545212%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b4a042fd8e0744dda40951551433a3d005ac0c0c' => 
    array (
      0 => '../facturacioncxc/view/bill.tpl',
      1 => 1481647907,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '177416218057e86ae3aa9f86-41545212',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_57e86ae3d2beb3_68245552',
  'variables' => 
  array (
    'NAV_MENU' => 0,
    'PORCE_IV' => 0,
    'PORCE_MAX_DESC' => 0,
    'PORCE_UTI_COSTO' => 0,
    'ID_TIENDA' => 0,
    'TIT_PAG' => 0,
    'LISTA_TIENDAS' => 0,
    'LISTA_CLIENTES' => 0,
    'CURRENT_DATE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e86ae3d2beb3_68245552')) {function content_57e86ae3d2beb3_68245552($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['NAV_MENU']->value;?>

        <form class="form-horizontal" id='myForm'  action="processBill.php"  method="POST">
            <input type="hidden" id="porce_iv" value="<?php echo $_smarty_tpl->tpl_vars['PORCE_IV']->value[0]['IV'];?>
">
            <input type="hidden" id="porce_max_desc" value="<?php echo $_smarty_tpl->tpl_vars['PORCE_MAX_DESC']->value[0]['MaxDesc'];?>
">
            <input type="hidden" id="porce_uti_costo" value="<?php echo $_smarty_tpl->tpl_vars['PORCE_UTI_COSTO']->value[0]['PorceUtiCosto'];?>
">            
            <input type="hidden" id="req_aut_gere" value="0">
            <input type="hidden" id="req_aut_desc" value="0">
            <input type="hidden" name="id_tienda" id="id_tienda" value="<?php echo $_smarty_tpl->tpl_vars['ID_TIENDA']->value;?>
">
            <input type="hidden" id="ArticuloExiste" value="false">
            <input type="hidden" id="codigoArticulo" value="">
            <input type="hidden" id="codigoArticuloProv" value="">
            <input type="hidden" id="codigoArticuloBarras" value="">
            <input type="hidden" id="descipcionArticulo" value="">
            <input type="hidden" id="existenciaArticulo" value="">
            <input type="hidden" id="precioiviArticulo" value="">
            <input type="hidden" id="precioArticulo" value="">
            <input type="hidden" id="costoArticulo" value="">
            <input type="hidden" name="posPresupestaria" id="posPresupestaria" value="">
            <input type="hidden" name="fondo" id="fondo" value="">
            <input type="hidden" name="areaFuncional" id="areaFuncional" value="">
            <input type="hidden" name="solPedido" id="solPedido" value="">
            <input type="hidden" name="tramiCompra" id="tramiCompra" value="">
            <input type="hidden" name="ctaCliente" id="ctaCliente" value="">
            <input type="hidden" name="usrVendedor" id="usrVendedor" value="">
        	<div class="row-fluid" >		
            	<div class="box span12">
                	<div class="box-header well" data-original-title>
                    	<h2><?php echo $_smarty_tpl->tpl_vars['TIT_PAG']->value;?>
</h2>                    	
                    		<div class="vendedorvalido"  id="0"></div>
                    		<div class="clavegerevalido" id="0"></div>                    		
                    		
                    	    <button type="button" id='facturar' class="btn btn-small btn-success" style="margin-left:20px;">FACTURAR CREDITO</button>                   	    
                    	    <button type="button" class="btn btn-small btn-info" onclick="javascript:history.go(0)"  style='margin-left: 15px;'>LIMPIAR</button>     					                    	    
                    	    <button type="button" class="btn btn-small btn-info" onclick="Sale();"      style='margin-left: 15px;'>CERRAR </button>
                        	<select class="pull-right" id="selectStore" name="selectStore" disabled> 
                        		<option value="0"></option>
                            	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['name'] = 'lP';
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['LISTA_TIENDAS']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                                	<option value="<?php echo $_smarty_tpl->tpl_vars['LISTA_TIENDAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['codTienda'];?>
" <?php if ($_smarty_tpl->tpl_vars['LISTA_TIENDAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['codTienda']==$_smarty_tpl->tpl_vars['ID_TIENDA']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LISTA_TIENDAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['nombreTienda'];?>
</option>                                	
                                <?php endfor; endif; ?>
                            </select>
                    </div>
                    <div id="message-fields" style='alignment-adjust:  central;'></div>
 					
                    	<div class="box-content span12" style="margin-left: 10px;" >
							<div class="box" id="boxValida" style="display:none;margin-right: 10px;">
								<form class="form-horizontal" >
						            <div class="control-group" id="boxClaveVendedor" style="margin-top:20px;">	
						            	<label class="control-label" for="fclaveVendedor">Clave Vendedor</label>                                           
						                <div class="controls" id="input-fclaveVendedor">
						                	<input type="password" class=" input-large" id="fclaveVendedor" value=""> 
						                </div>                       
						            </div>                        
						            <div class="control-group" id="boxClaveAutoriza" style="display:none">	
						            	<label class="control-label" for="fclaveAutFactu">Clave Autoriza</label>                                           
						                <div class="controls" id="input-fclaveAutFactu">
						                	<input type="password" class=" input-large"  id="fclaveAutFactu"  value=""> 
						                </div>                       
						            </div>
						            <div id="message-validaFinal" style='alignment-adjust:  central;'></div>            
									<form>
										<div class="form-actions">
											<input type="button" id="btn_continuar" onclick="validaClaves()" value="Continuar" class="btn btn-primary">
											<input type="button" id="btn_cerrar" onclick="cierraClaves()" value="Cerrar" class="btn btn-warning">
										</div>
									</form>		
								</form>                      
							</div>    	
                            <div class="control-group" id="boxSelCliente" style="margin-top: 15px;  margin-left: -95px;margin-right: 10px;">
								<label class="control-label" for="selectCliente"> Cliente</label>
								<div class="controls">
									    <select data-placeholder="Ingrese Cliente" style="width:100%;"  id="selectCliente"    name ="selectCliente"  data-rel="chosen"  >
                            				<option value="0"></option>
                            				<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['name'] = 'lP';
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['LISTA_CLIENTES']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                                				<option <?php if ($_smarty_tpl->tpl_vars['LISTA_CLIENTES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['idEstadoCliPro']=='3') {?> style='background-color: red;'<?php }?><?php if ($_smarty_tpl->tpl_vars['LISTA_CLIENTES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['idEstadoCliPro']=='2') {?> style='background-color: yellow;'<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['LISTA_CLIENTES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['id'];?>
|<?php echo $_smarty_tpl->tpl_vars['LISTA_CLIENTES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['nombre'];?>
|<?php echo $_smarty_tpl->tpl_vars['LISTA_CLIENTES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['idEstadoCliPro'];?>
"><?php echo $_smarty_tpl->tpl_vars['LISTA_CLIENTES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['nombre'];?>
</option>
                                			<?php endfor; endif; ?>
                            			</select>
                                </div>
                            </div>                                                                  
                           	<div class="control-group" id="boxfecFactura" style="float:left;margin-left: -95px;margin-top:10px;">
				            	<label class="control-label" for="ffecFactura">Fecha</label>	
				            	<div class="controls">   
									<input type="text"  class="input-small datepicker" id="ffecFactura" name="ffecFactura" value="<?php echo $_smarty_tpl->tpl_vars['CURRENT_DATE']->value;?>
" placeholder="Indicar fecha">
								</div>
							</div>                        
                          	<div class="control-group" id="boxfoc" style="float:left;margin-left: -95px;margin-top:10px;">
				            	<label class="control-label" for="foc">O.C.</label>	
				            	<div class="controls">   
									<input type="text"  id="foc" name="foc" value="" placeholder="Indicar orden de compra">
								</div>
							</div>
                          	<div class="control-group" id="boxtc" style="float:left;margin-left:-55px;margin-top:10px;">
				            	<label class="control-label" for="ftc">T.Cambio</label>	
				            	<div class="controls">   
									<input type="text" class="input-small" style="text-align:right;" id="ftc" name="ftc" value="1.00">
								</div>
							</div>
							<a href="#" title="Ver totales factura en d&oacute;lares seg&uacute;n tipo de cambio." id="vDol" name="vDol" data-rel="tooltip" style="float:left;margin-top:10px;margin-left:10px;" class="btn btn-warning">Ver en D&oacute;lares</a>												
							<a href="#" title="Ingresar Datos de Gobierno" id="fGob" name="fGob" data-rel="tooltip" style="float:left;margin-top:10px;margin-left:10px;" class="btn btn-warning">Modo Gobierno</a>
							<div class="control-group" id="boxindi">
								<label class="control-label" style="margin-left: -55px;margin-top:10px;">Indicar</label>
								<div class="controls">
								  <label class="checkbox inline" style="margin-top:10px;">
									<input type="checkbox"  id="indMontoLetras" name="indMontoLetras" value="S"> Monto en Letras
								  </label>
								</div>
							  </div>								
							<div class="control-group" id="boxfobs" style="margin-left: -95px;margin-top:10px;margin-right: 10px;">
								<label class="control-label" for="fobs">Obs</label>					            	
				            	<div class="controls">   
									<textarea class="input-block-level" id="fobs" name="fobs" value="" placeholder="Indicar observaciones si se requiere"></textarea>
								</div>
							</div>


                        <legend style="height:5px"></legend>
                        <div class="box" style="margin-left: 10px;margin-right: 10px;margin-top: -20px;" >
                        	<div class="box-header well">
                            	<h3>Buscar Articulos</h3>
                            </div>
								<div class="control-group" style="margin-left: -150px;" id="boxCriterios">
									<div class="controls">
				 						<label class="radio" style="font-size:1.2vw; margin-top:4px; ">Por:</label>					
										<label class="radio" style="font-size:1.2vw; margin-top:12px;">
											<input type="radio" name="criterio" id="optionCod" value="codigo" checked="" onclick="cleanTxtBuscar()">
											código
										</label>
										<label class="radio" style="font-size:1.2vw; margin-top:12px;">
											<input type="radio"  name="criterio" id="optionDes" value="nombre" onclick="cleanTxtBuscar()">
											desc.
										</label>
										<label class="radio" style="font-size:1.2vw; margin-top:12px;">
											<input type="radio" name="criterio" id="optionExt" value="externo" onclick="cleanTxtBuscar()">
											externo
										</label>
										<label class="radio" style="font-size:1.2vw; margin-top:12px;">
											<input type="radio" name="criterio" id="optionBarras" value="barras" onclick="cleanTxtBuscar()">
											barras
										</label>												
                						<form style="margin:0px; padding:0px; float:right; margin-top:5px;">
                							<input type="text"  accesskey="s" class="txt_search" id="texto-buscar"  value="" style="margin-top:6px; margin-left:10px; font-size:1vw; width:200px;" placeholder="Iniciar Búsqueda">                			
                							<!-- <input type="text"  accesskey="s" class="txt_search" id="texto-buscar" name="texto-buscar" value="" style="margin-top:6px; margin-left:10px; font-size:1vw; width:200px;" placeholder="Iniciar Búsqueda">  -->
                    						<button id="btn-getInventario" style="margin-top:4px;margin-left:10px;" class="btn btn-small" data-toggle="modal" data-target="#inventory-modal" ><i class="icon-search"></i> Buscar</button>
                    						<input type="text"  id="descArticulo" name="descArticulo"  disabled value="" style="margin-top:4px; margin-left:10px; font-size:1vw; width:350px;" placeholder="Descripción">
                    						<input type="text"  id="precioivi" name="preciovi" disabled value="" style="margin-top:4px; margin-left:5px; font-size:1vw; width:110px;text-align:right;" placeholder="Precio IVI">
                    						<input type="text" class="input-small" id="existencia" name="existencia" disabled value="" style="margin-top:4px; margin-left:20px; color:red; text-align:right" placeholder="Existencia">
                							<button type="button" title="Agregar" class="btn btn-small btn-success" id="btnAgregaLinea" name="btnAgregaLinea" style="margin-right:10px;" onclick="AgregaLinea();"><i class="icon-plus icon-white"></i> </button>
                						</form> 						
									</div>  <!-- class controls -->             
								</div>	<!-- boxCriterios -->	                                                    
                        </div> <!-- class="box"  -->             
                        <div class="box-content">
                        	<table class="table table-striped table-bordered bootstrap-datatable" id="tableItem">
                            	<thead>
                                	<tr>
                                    	<th style='width:10px;'>#</th>
                                    	<th style='width:500px;'>Artículo</th>
                                        <th style='width:100px;'>Código</th>
                                        <th style='width:90px;'>Precio Venta</th>
                                        <th style='width: 10px;'>Cant.</th>
                                        <th style='width:10px;'>%Desc</th>
                                        <th style="width:110px;">Precio Total</th>
                                        <th style="width: 25px;">Acción</th>
                                    </tr>
                                </thead>
                                <tbody id="tbod" name="tbod" onload="LimpiaCampos()">
                                	<div id ="divtbod" class="grid" style="width: fit-content; border: 1px;"></div>
                                </tbody>
                            </table>  
                            <div >
                            	<div style="margin-left: 10px;margin-top: 10px; margin-bottom:10px; margin-right: 29px;">
                                	<p style="font-style: oblique; font-size: 14px;" align='right'>Subtotal   <input type="text" id="fsubtotal" name="fsubtotal" value="0.00" class='input' readonly align='right' style="margin-right: 42px; text-align: right; width: 90px;" ></p>                                	 
									<p style="font-style: oblique; font-size: 14px;"align='right'>Descuento

									<input type="text" readonly id="fdescuento" name="fdescuento" value="0.00" align='right' style="margin-right: 42px;text-align: right; width: 90px;"></p>
                                    <p style="font-style: oblique; font-size: 14px;"align='right'>Impuesto    <input type="text" id="fimpuesto" name ="fimpuesto" value ="0.00" readonly align='right' style="margin-right: 16px; text-align: right; width: 90px;">
                                    <input type="checkbox" onchange="Exento();" id="exento" name="exento" title="Exento">
                                    </p>
                                    
                                    <p style="font-style: oblique; font-size: 14px;"align='right'>
                                    Total   <input type="text" id="ftotal" value="0.00" readonly="true" align='right' style="margin-left: 10px;margin-right: 18px;text-align: right; width: 90px;">
                                    <input type="checkbox" onchange="NoRedondeo();" id="noredondeo" name="noredondeo" checked title="No Redondeo">
                                    </p>
                                    
                                </div>
                            </div>
                        </div>
                </div><!--class="box span12"-->
            </div><!--class="row-fluid" -->
   		</form>            


<!-- VISTA DOLARES MODAL -->
<div class="modal fade" id="viewDOL-modal" tabindex="-1" role="dialog" aria-hidden="true">

    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3 class="modal-title blue"><i class="fa fa-bars"></i> Información de Factura en D&oacute;lares</h3>

            </div>
            <form method="post" id="frmDolares"  method="post">
            
                <div class="modal-body" id="viewDOL">					
					<div class="row-fluid" id="wrkArea">
                    <table class="table table-condensed">
                      <tbody> 

                          <tr>
                              <th>Subtotal</th>
                              <td>                                
                                <div class="pull-left control-group" style="margin-right:3px; width:70%;">
                                    <input type="text" class="input-block-level input-xlarge"  style="text-align:right;" id="fSubtotal" name="fSubtotal"  value="">
                                </div>                                  
                              </td>
                          </tr>
                          <tr>
                              <th>Descuento</th>
                              <td>                                
                                <div class="pull-left control-group"  style="margin-right:3px; width:70%;">
                                    <input type="text" class="input-block-level input-xlarge"  style="text-align:right;" id="fDescuento" name="fDescuento" value="">
                                </div>                                  
                              </td>
                          </tr>    
                          <tr>
                              <th>Impuesto</th>
                              <td>
                                  <div class="pull-left control-group" style="margin-right:3px; width:70%;">
                                    <input type="text" class="input-block-level input-xlarge" style="text-align:right;" id="fImpuesto" name="fImpuesto"  value="">
                                  </div>
                              </td>
                          </tr>
                          <tr>
                              <th>Total</th>
                              <td>
                                  <div class="pull-left control-group" style="margin-right:3px; width:70%;">
                                      <input type="text" class="input-block-level input-xlarge" style="text-align:right;" id="fTotal" name="fTotal" value="" >
                                  </div>
                              </td>
                          </tr>

                      </tbody>
                    </table> 
                    </div>                   

                </div>
            </form>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->

</div><!-- /.modal -->

<!-- MODO GOBIERNO MODAL -->
<div class="modal fade" id="modoGOB-modal" tabindex="-1" role="dialog" aria-hidden="true">

    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3 class="modal-title blue"><i class="fa fa-bars"></i> Datos Gobierno</h3>
				<br />
                <p>Se imprimira en la factura tal y como digite los valores en cada campo. </p>
                <p>Recuerde usar etiquetas. Los que queden en blanco no se imprimiran.</p>
            </div>
            <form action="#" method="post" id="frmModoGob">
            
                <div class="modal-body" id="modoGob">					
					<div class="row-fluid" id="wrkArea2">
                    <table class="table table-condensed">
                      <tbody> 

                          <tr>
                        <!--  <th>POS. PRESUPUESTARIA</th>   --> 
                              <th>Campo 1</th>
                              <td>                                
                                <div class="pull-left control-group" style="margin-right:3px; width:70%;">
                                    <input type="text" class="input-block-level input-xlarge" id="fPosPresup" name="fPosPresup"  maxlength="90"; value="POS. PRESUPUESTARIA:">
                                </div>                                  
                              </td>
                          </tr>
                          <tr>
                        <!--  <th>TRAMITE DE COMPRA</th>   --> 
                              <th>Campo 5</th>
                              <td>
                                  <div class="pull-left control-group" style="margin-right:3px; width:70%;">
                                      <input type="text" class="input-block-level input-xlarge" id="fTramiCompra" name="fTramiCompra" maxlength="90"; value="TRAMITE DE COMPRA:" >
                                  </div>
                              </td>
                          </tr>       
                          <tr>
                         <!-- <th>FONDO</th>   -->  
                              <th>Campo 2</th>
                              <td>                                
                                <div class="pull-left control-group"  style="margin-right:3px; width:70%;">
                                    <input type="text" class="input-block-level input-xlarge"  id="fFondo" name="fFondo" maxlength="90"; value="FONDO:">
                                </div>                                  
                              </td>
                          </tr>    
                          <tr>
                        <!--  <th>AREA FUNCIONAL</th>  --> 
                              <th>Campo 3</th>
                              <td>
                                  <div class="pull-left control-group" style="margin-right:3px; width:70%;">
                                    <input type="text" class="input-block-level input-xlarge" id="fAreaFunc" name="fAreaFunc"  maxlength="90"; value="AREA FUNCIONAL:">
                                  </div>
                              </td>
                          </tr>
                          <tr>
                         <!-- <th>N. SOLICITUD DE PEDIDO</th>  -->   
                              <th>Campo 4</th>
                              <td>
                                  <div class="pull-left control-group" style="margin-right:3px; width:70%;">
                                      <input type="text" class="input-block-level input-xlarge" id="fSolPed" name="fSolPed" maxlength="90"; value="N.SOLICITUD PEDIDO:" >
                                  </div>
                              </td>
                          </tr>                   
                          <tr>
                        <!--  <th>CUENTA CLIENTE</th>    --> 
                              <th>Campo 6</th>
                              <td>
                                  <div class="pull-left control-group" style="margin-right:3px; width:70%;">
                                      <input type="text" class="input-block-level input-xlarge" id="fCtaClie" name="fCtaClie" maxlength="90"; value="CUENTA CLIENTE: 15100010010447006" >
                                  </div>
                              </td>
                          </tr>

                      </tbody>
                    </table> 
                    </div>                   

                </div>
                <div class="modal-footer clearfix">  
                    <button type="button" class="btn btn-success" data-dismiss="modal"  id="btnModoGob" name="btnModoGob"><i class="fa fa-check-square-o"></i> Aceptar</button>
                </div>                
            </form>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->

</div><!-- /.modal -->
   
<!-------------------------- MODAL ARTICULOS ---------------------------------->
<div class="modal fade" id="inventory-modal" tabindex="-1" role="dialog" data-refresh="true"  aria-hidden="true" style="margin: -320px 0 0 -380px;width:800px">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header"> 
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3 class="modal-title green"><i class="fa fa-bars"></i> Inventario de Artículos</h3>                
            </div>
            <form action="#" method="post" id="frmAllInventory">
                <div class="modal-body" id="allInventory" style="max-height: 490px;">                    
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
      //  ,           
      //  startDate: new Date(),
       , defaultDate : new Date()
     });
	
	$("#fPosPresup").on("change", function (e){
        e.preventDefault();
        $("#posPresupestaria").val($("#fPosPresup").val());
        $("#ctaCliente").val($("#fCtaClie").val());
             
    });
	
	
	$("#fFondo").on("change", function (e){
        e.preventDefault();
        $("#fondo").val($("#fFondo").val());
        $("#ctaCliente").val($("#fCtaClie").val());
     
    });

	
	$("#fAreaFunc").on("change", function (e){
        e.preventDefault();
        $("#areaFuncional").val($("#fAreaFunc").val());
        $("#ctaCliente").val($("#fCtaClie").val());
    
    });
	
	
	$("#fSolPed").on("change", function (e){
        e.preventDefault();
        $("#solPedido").val($("#fSolPed").val());   
        $("#ctaCliente").val($("#fCtaClie").val());
    });

	
	$("#fTramiCompra").on("change", function (e){
        e.preventDefault();
        $("#tramiCompra").val($("#fTramiCompra").val());
        $("#ctaCliente").val($("#fCtaClie").val());
    });	
		
	
	$("#fCtaClie").on("change", function (e){
        e.preventDefault();
        $("#ctaCliente").val($("#fCtaClie").val());   
    });
	
	$("#fclaveVendedor").on("change", function (e){
        e.preventDefault();
        $("#usrVendedor").val($("#fclaveVendedor").val());   
    });
			
	
    $('#texto-buscar').keypress(function(e){
        if(e.keyCode==13){
        	e.preventDefault();
        	BuscaArticulo($('input[name=criterio]:checked').val(),$('#texto-buscar').val());
        }
    });	
          
    $("#vDol").on("click", function (e){
    	 e.preventDefault();
    	 openModalViewDOL();
    	 // el subtotal de la factura esta formateado con comas, para calcular hay que quitarlas.
    	 var valorStr = $("#fsubtotal").val();
		 // se eliminan las comas que trae el valor
         var valorSin = valorStr.replace(/,/g, '');
		// se convierten a numeros para realizar la operacion matematica
         var p = parseFloat(valorSin) / parseFloat($("#ftc").val());  	 
    	 $("#fSubtotal").val(p);
    	 
    	 valorStr = $("#fdescuento").val();
		 // se eliminan las comas que trae el valor
         valorSin = valorStr.replace(/,/g, '');
		// se convierten a numeros para realizar la operacion matematica
         p = parseFloat(valorSin) / parseFloat($("#ftc").val());
         $("#fDescuento").val(p);
         
         valorStr = $("#fimpuesto").val();
		 // se eliminan las comas que trae el valor
         valorSin = valorStr.replace(/,/g, '');
		// se convierten a numeros para realizar la operacion matematica
         p = parseFloat(valorSin) / parseFloat($("#ftc").val());
         $("#fImpuesto").val(p);
         
         valorStr = $("#ftotal").val();
		 // se eliminan las comas que trae el valor
         valorSin = valorStr.replace(/,/g, '');
		// se convierten a numeros para realizar la operacion matematica
         p = parseFloat(valorSin) / parseFloat($("#ftc").val());
         $("#fTotal").val(p);
    	 
    	 $("#fSubtotal").number(true,2);
         $("#fDescuento").number(true,2);
         $("#fImpuesto").number(true,2);
         $("#fTotal").number(true,2);
         
    });
    
    $("#fGob").on("click", function (e){
   	 	e.preventDefault();
   	 	openModalModoGob();   		
  
   });

    
    $("#facturar").on("click", function(e){
    	$("#boxValida").css("display","none");	
    	document.getElementById('message-validaFinal').innerHTML = "";
    	mathB();
		if (validateForm()){			
	    	$("#fclaveVendedor").val("");
	    	$("#fclaveAutFactu").val("");
	    	// se despliega el bloque que solicita la clave del vendedor.
			$("#boxValida").css("display","block");
			if(($("#req_aut_gere").val() == "1") || ($("#req_aut_desc").val() == "1") ){
				
				$("#boxClaveAutoriza").css("display","block");
				
				if(($("#req_aut_desc").val() == "1")){
					document.getElementById('message-validaFinal').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Requiere Autorizacion Especial.</strong></div>";
				}
				if(($("#req_aut_gere").val() == "1")){
					document.getElementById('message-validaFinal').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Requiere Autorizacion Gerencial.</strong></div>";
				}				
			}else{
				$("#boxClaveAutoriza").css("display","none");
				
			}				
			$("#fclaveVendedor").focus();		
		}
    });  

    $("#selectCliente").on("change", function (e){
        e.preventDefault();
        $("#boxValida").css("display","none");	
        $("#btn-updCliente").prop("disabled",false);        
        $(".clienteId").attr("id", $("#selectCliente").val());       
    });
    	
    var cache = {
            $btnInventario    : $("#btn-getInventario"),
            $boxInventory     : $("#allInventory"),
            $txtBuscar        : $("#texto-buscar"),
            $selCriterio      : $("#criterio")
        };

    //BOTON QUE CARGA EL INVENTARIO DE ARTICULOS
    
    cache.$btnInventario.on("click", function(e){

          cache.$boxInventory.html("<h5>Consultando Inventario</h5><div id='boxProgress2' style='width:100%; margin-top:10px;'><div class='progress progress-striped progress-info active' ><div class='bar' style='width:0%;'></div></div></div>");
          if($("#texto-buscar").val()!=""){
        		document.getElementById('message-fields').innerHTML = "";
                var vcriterio    = $('input[name=criterio]:checked').val();
               // var vtxtBusqueda = cache.$txtBuscar.val();
                
                var str = cache.$txtBuscar.val();
                var vtxtBusqueda = str.replace("%", "%25");
       //     alert(vtxtBusqueda); 	
                if($("#texto-buscar").val()!=""){
                	var properties = {
                    			url: "buscaArticulos.php",
                        		async: true,
                        		cache: false,
                        		data: "txtBuscar="+vtxtBusqueda+"&criterio="+vcriterio+"&action=1",
                        		type: "POST",
                        		success: function(inventario){
                            		cache.$boxInventory.html(inventario);							
                        		} // success
                    		}; // var properties            
                    		$.ajax(properties);                
                }else{
                    	cache.$boxInventory.html("Debe indicar articulo a buscar.");
                }            
          }else{
        	  document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Debe indicar articulo a buscar 2.</strong></div>";    
          }        	
    });

    $('#inventory-modal').on('show', function (e) {
        if ($("#texto-buscar").val()=="") return e.preventDefault(); // stops modal from being shown
    });
         
    $("#texto-buscar").focus();

                   
});


	function BuscaArticulo(criterio,valor){
		
		document.getElementById('message-fields').innerHTML = "";
		
		validaArticulo(criterio,valor);
		
		switch (criterio){
			case 'barras':
				$('#descArticulo').val($('#descipcionArticulo').val());
				$('#precioivi').val($('#precioiviArticulo').val());
				$('#existencia').val($('#existenciaArticulo').val());
                if (parseInt($('#existencia').val()) <= 0){
                    $('#existencia').css('color','red');
                }else{
                    $('#existencia').css('color','blue');
                }
				$('#precio').val($('#precioArticulo').val());
				if ($('#ArticuloExiste').val() == 'true'){
					$("#btnAgregaLinea").focus();	
				}else{
					document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Artículo no existe.</strong></div>";
					$('#texto-buscar').focus();
				}
				break;
			case 'codigo':
			
				$('#descArticulo').val($('#descipcionArticulo').val());
				$('#precioivi').val($('#precioiviArticulo').val());
				$('#existencia').val($('#existenciaArticulo').val());
                if (parseInt($('#existencia').val()) <= 0){
                    $('#existencia').css('color','red');
                }else{
                    $('#existencia').css('color','blue');
                }
				$('#precio').val($('#precioArticulo').val());
				if ($('#ArticuloExiste').val() == 'true'){
					$("#btnAgregaLinea").focus();	
				}else{
					document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Artículo no existe.</strong></div>";
					$('#texto-buscar').focus();
				}				
				break;
			case 'externo':
				$('#descArticulo').val($('#descipcionArticulo').val());
				$('#precioivi').val($('#precioiviArticulo').val());
				$('#existencia').val($('#existenciaArticulo').val());
                if (parseInt($('#existencia').val()) <= 0){
                    $('#existencia').css('color','red');
                }else{
                    $('#existencia').css('color','blue');
                }
				$('#precio').val($('#precioArticulo').val());
				if ($('#ArticuloExiste').val() == 'true'){
					$("#btnAgregaLinea").focus();	
				}else{
					document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Artículo no existe.</strong></div>";
					$('#texto-buscar').focus();
				}				
				break;
			case 'nombre':
				$('#descArticulo').val($('#descipcionArticulo').val());
				$('#precioivi').val($('#precioiviArticulo').val());
				$('#existencia').val($('#existenciaArticulo').val());
                if (parseInt($('#existencia').val()) <= 0){
                    $('#existencia').css('color','red');
                }else{
                    $('#existencia').css('color','blue');
                }
				$('#precio').val($('#precioArticulo').val());
				if ($('#ArticuloExiste').val() == 'true'){
					$("#btnAgregaLinea").focus();	
				}else{
					document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Artículo no existe.</strong></div>";
					$('#texto-buscar').focus();
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
          // 	alert(data);
           		$dataStr = (data.trim().split("|"));
    		//    alert($dataStr[1]);

    		   
    		    
    			if ($dataStr[0].trim()=='OK') {
    			
    				// todo OK, se verifica si el articulo existe
    				$('#codigoArticulo').val($dataStr[1].trim());
    				$('#codigoArticuloProv').val($dataStr[2].trim());
    				$('#codigoArticuloBarras').val($dataStr[3].trim());
    				$('#descipcionArticulo').val($dataStr[4].trim());
    				$('#ArticuloExiste').val($dataStr[5].trim()); 
    				
    				$('#precioiviArticulo').val($dataStr[6]);    				
    				$('#precioArticulo').val($dataStr[7]);
    				$('#existenciaArticulo').val($dataStr[8]);
    				$('#costoArticulo').val($dataStr[9]);

    			}else{
    				alert(data);
					document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Error Inesperado.</strong></div>";
    			}

            },
            error: function(jqXHR,textStatus,errorThrown){
                alert('Error Fatal al Validar Articulo '+textStatus);
            }
        });
		
	}

	function AgregaLinea(){
		
		var $hayError = false;
		document.getElementById('message-fields').innerHTML = "";
		$("#facturar").prop("disabled",false); 
  		$("#proforma").prop("disabled",false);
  		
				
		if ($("#texto-buscar").val() == ''){
			$hayError = true;
			document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> No hay articulo que agregar.</strong></div>";
			$("#texto-buscar").focus();
			return;
		}
		if ($("#descArticulo").val() == ''){
			$hayError = true;
			document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> No hay articulo que agregar.</strong></div>";
			$("#texto-buscar").focus();
			return;
		}
		if ($("#precioivi").val() == ''){
			$hayError = true;
			document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> No hay articulo que agregar.</strong></div>";
			$("#texto-buscar").focus();
			return;
		}
		if ($("#existencia").val() == ''){
			$hayError = true;
			document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> No hay articulo que agregar.</strong></div>";
			$("#texto-buscar").focus();
			return;
		}
		
    	// por default se agrega el articulo con 1 unidad como compra, el usuario puede cambiarla despues
    	var cant = '1';
    	
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
		labelArt2.textContent = $('#codigoArticulo').val();
		labelArt2.setAttribute("name","codArti[]");
		var cell2= row.insertCell(2);
		cell2.appendChild(labelArt2);    	
		
		
		var contentArt2 = document.createElement("input");
		contentArt2.value = $('#codigoArticulo').val()
		contentArt2.setAttribute("name","codArti[]");
		contentArt2.type = "hidden";
		cell2.appendChild(contentArt2);

    	//*****************************************************************
		// Precio de Venta sin impuesto de venta va en la celda 3
		
		var price 		= document.createElement("input");		
		price.value 	= $.number($('#precioArticulo').val(),2);

		var costo 		= document.createElement("input");		
		costo.value 	= $.number($('#costoArticulo').val(),2);		
		costo.setAttribute("name","costo[]");    	
		costo.type 		= "hidden";    			
		
		var precioVenta = document.createElement("input");	

		precioVenta.id = "preciov"+rowCount;
		precioVenta.setAttribute("name","precioVenta[]");		
		precioVenta.setAttribute('class', 'input-mini');
		precioVenta.setAttribute('style', 'text-align: right; width: 185px;');

		precioVenta.value = parseFloat($('#precioArticulo').val()).toFixed(2);			
		precioVenta.type = "number";			
		precioVenta.setAttribute("pattern","[0-9]*");
		precioVenta.setAttribute("step","0.01");
		precioVenta.onchange = function(){
	            price.value = precioTotalDescArtiB(precioVenta.value ,txtPorceDesc.value);
	            price.value = precioTotalArtiB(price.value ,txtCantidad.value);
	            precioTotal.value = $.number(price.value,2);						            
	            // se vuelve a recalcular los subtotales de la factura.
	            mathB();
			};
		var cell3 = row.insertCell(3);
		cell3.appendChild(precioVenta);
		cell3.appendChild(costo);
        
      //*****************************************************************
    	// cantidad que inicia con 1 y va en la celda 4
    	
    	var txtCantidad = document.createElement("input");
    	txtCantidad.type = "number";
    	txtCantidad.min = 1;
    	txtCantidad.id = "cant";
   	 	txtCantidad.setAttribute("name","cant[]");
    	txtCantidad.value = cant;
    	txtCantidad.setAttribute('class', 'input-mini');
    	txtCantidad.setAttribute('style', 'text-align: right');
    	txtCantidad.onchange = function(){
                           price.value = precioTotalDescArtiB(precioVenta.value ,txtPorceDesc.value);
                           price.value = precioTotalArtiB(price.value ,txtCantidad.value);
                           precioTotal.value = $.number(price.value,2);
                           // se vuelve a recalcular los subtotales de la factura.
                           mathB();
        
    	};
    	var cell4 = row.insertCell(4);
    	cell4.appendChild(txtCantidad);    	
   	
       	//*****************************************************************
 		// % Descuento y va en la columna 5, inicia con 0% descuento
		
		var txtPorceDesc = document.createElement("input");
		txtPorceDesc.type = "number";
		txtPorceDesc.min = 0;
		txtPorceDesc.id = "pdesc";
		txtPorceDesc.setAttribute("name","pdesc[]");
		txtPorceDesc.value = 0;
		txtPorceDesc.setAttribute('class', 'input-mini');
		txtPorceDesc.setAttribute('style', 'text-align: right');
		
		// cuando cambia el % de descuento se debe aplicar al articulo
		txtPorceDesc.onchange = function(){	
			/*
			price.value = precioTotalDescArtiB(precioVenta.value ,txtPorceDesc.value);
			var costoStr = costo.value;
            costoStr= costoStr.replace(/,/g, '');                   		
            precioTotal.value = $.number(price.value,2);
           	mathB();
           	*/
           	price.value = precioTotalDescArtiB(precioVenta.value ,txtPorceDesc.value);
            price.value = precioTotalArtiB(price.value ,txtCantidad.value);
            precioTotal.value = $.number(price.value,2);
        	mathB();
        	
		}; // end onchange funcion
		var cell5 = row.insertCell(5);
		cell5.appendChild(txtPorceDesc);
		
    	//*****************************************************************
 		// precio total   
    	var precioTotal = document.createElement("input");
    	var price = document.createElement("input");
    	// se calcula el precio total
    	price.value =  precioTotalArtiB(precioVenta.value,cant);
   		precioTotal.value = $.number(price.value,2);
    	precioTotal.type = "text";
    	precioTotal.id = "precio"+rowCount;
    	precioTotal.setAttribute("name","totPrice[]");
    	precioTotal.setAttribute('class', 'input-mini');
    	precioTotal.setAttribute('style', 'text-align: right; width: 185px;');
    	precioTotal.setAttribute('readonly', 'true');
    	//precioTotal.setAttribute('onclick', 'evaDiscount(this)');
    	var cell6 = row.insertCell(6);
    	cell6.appendChild(precioTotal);

    	//*****************************************************************
    	//boton borrar linea
    	//
    
    	var ita=document.createElement('a');
    	ita.setAttribute('href', '#');
    	ita.setAttribute('onClick', 'deleteCurrentRow(this)');
    	var iti=document.createElement('i');
    	iti.setAttribute('class', 'icon icon-color icon-remove');
    	ita.appendChild(iti);
    
    	var cell7 = row.insertCell(7);
    	cell7.appendChild(ita);
    	
		// se agrega la linea
    	row.myRow = new myRowObject(textNode, labelArt, labelArt2, txtCantidad,precioVenta,price, precioTotal, txtPorceDesc,costo);
		
		// se recalulan los totales de la factura
    	mathB();			
		$("#existencia").val('');
		$('#descArticulo').val('');
		$('#precioivi').val('');		
		$("#codigoArticulo").val('');
		$("#descipcionArticulo").val('');
		$("#existenciaArticulo").val('');
		$("#recioiviArticulo").val('');
		$("#precioArticulo").val('');
		$("#costoArticulo").val('');
		$("#texto-buscar").val('');	
		$("#texto-buscar").focus();
		
	}

	//Retorna el precio total por articulo
    function precioTotalDescArtiB(precio, desc){
		// el parametro precio viene formateado con , y .
		// el parametro desc es el un valor entero inicando el descuento
        var precioStr = precio;
        var precioSin = precioStr.replace(/,/g, '');
        // se convierten a numeros ambos valores.
        var p = parseFloat(precioSin);
        var c = parseInt(desc);
        // se calcula el descuento que se esta haciendo al articulo
        var pDesc = c/100.00;
        // se retorna el precio del articulo una aplicado el descuento.
         return (p-(p*pDesc));
        //return (p-ajustaDescuento(p*pDesc));
        
    }
	
	//Retorna el precio total por articulo
	// basicamente la multiplicacion de cantdiad x precio
    function precioTotalArtiB(precio, cantidad){
		// el parametro precio viene ya aplicado el descuento si es que habia
		// tampoco tiene el impuesto de venta, es precio sin impuesto de venta
        var precioStr = precio;
		// se eliminan las comas que trae el precio
        var precioSin = precioStr.replace(/,/g, '');
		// se convierten a numeros para realizar la operacion matematica
        var p = parseFloat(precioSin);
        var c = parseInt(cantidad);
        // se retorna precio x cantidad.
        return p*c;
    }
	
	
    //Calcula el subtotal, impuesto y total
    function mathB(){
        var table = document.getElementById("tableItem");
        var suma = 0.00;
        var precioVenta = 0.00;
        var costouti = 0.00
        var cosoStr = "";
        var precioVentaStr = "";
        var descuento = 0;
        var totalDescuento = 0.00;
        var vTotalDescuento  = 0.00;
        var vDeci = 0.00;
        var vDescR = 0.00;
        var totalR5 = 0.00;
        var cant = 1;
        var maxDesc 	= parseInt($("#porce_max_desc").val());

        
        var vporceUtiCosto = parseInt($("#porce_uti_costo").val()) / 100.00;
        
        $("#boxValida").css("display","none");	
        $("#req_aut_desc").val("0");
        $("#req_aut_gere").val("0");   
   
        for(var x=1; x<table.rows.length; x++){            
            suma += parseFloat(table.rows[x].myRow.six.value);
            // el precio de venta viene formateado con comas, hay que quitarlas.

            precioVentaStr = table.rows[x].myRow.five.value;  
            precioVentaStr = precioVentaStr.replace(/,/g, '');  
            precioVenta    = parseFloat(precioVentaStr).toFixed(2) 

            descuento   = parseInt(table.rows[x].myRow.eight.value);

            costoStr = table.rows[x].myRow.nine.value;

       		costoStr= costoStr.replace(/,/g, '');

       		vcostoUti = parseFloat(costoStr).toFixed(2) * (1 + vporceUtiCosto);
            if (descuento > maxDesc){            	
            	$("#req_aut_gere").val("1");
            }
            if (precioVenta < vcostoUti){                       			
    			$("#req_aut_gere").val("1");    			
    		}
            cant = parseInt(table.rows[x].myRow.four.value);  
            // se tiene que calcular el descuento para cada linea para totalizarlo y ponerlo abajo            
            totalDescuento +=  (descuento / 100.00) * (precioVenta * cant);           
        }
             
        $("#fdescuento").val(totalDescuento);
   		
   		var desc = 0.00;
   	
   		var mDesc =  0;
        $("#fsubtotal").val(suma);
           
        if($("#exento").is(":checked")){
             $("#fimpuesto").val(0);
             totalR5 = round5B(precioTotalB(suma,mDesc,0));     
             // $("#ftotal").val(round5B(precioTotalB(suma,mDesc,0)));
             // si el impuesto es cero, no se debe redondear, por cuando se redondea
             // se hace con base al monto de impuesto
             $("#ftotal").val(precioTotalB(suma,mDesc,0));
        }else{
             totalR5 = round5B( precioTotalB(suma,desc,impuestoTotalB(suma-mDesc)) );
             $("#ftotal").val(round5B(precioTotalB(suma,desc,impuestoTotalB(suma-mDesc))));             
             $("#fimpuesto").val(totalR5-suma);              
        }
       		
        $("#fsubtotal").number(true,2);
        $("#fdescuento").number(true,2);
        $("#fimpuesto").number(true,2);
        $("#ftotal").number(true,2);
 
    }
  
    function round5B(x)
    {
    	if($("#noredondeo").is(":checked")){
    		return x;
    	}else{    		
        	return Math.ceil(Number(x).toFixed(2)/5)*5;    		
    	}
    }
	
	
  //Calcula el total por aparte para poder utilizarlo en 2 funciones
    function precioTotalB(sub,desc,imp){
        var totDesc =  (sub *(desc/100));   
        var total = imp + (sub - totDesc);
   
        //var total = imp + (sub - (sub *(desc/100)));
        return total;
        
    }



  //Calcula el impuesto de toda la factura
    function impuestoTotalB(sub){
        //var porceIV = parseInt($("#porce_iv").val());
        var imp = (sub *($("#porce_iv").val()/100));
        return imp;
    }	
	
	function cierraClaves(){
		
		$("#boxValida").css("display","none");
	}
	
	function validaClaves() {

    	var strClVendedor = "";
    	var strClAutFactu = "";
    	strClVendedor = $.trim($("#fclaveVendedor").val());
    	strClAutFactu = $.trim($("#fclaveAutFactu").val());
       
        var errors      = false;
        
        if(strClVendedor == ""){
            $("#input-fclaveVendedor").addClass("error");
            document.getElementById('message-validaFinal').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Clave Vendedor incorrecta.</strong></div>";
	        $("#fclaveVendedor").focus();
            errors = true;
        }else{
            $("#input-fclaveVendedor").removeClass("error");
        }
        
        if((strClAutFactu == "") && (($("#req_aut_gere").val() == "1") || ($("#req_aut_desc").val() == "1"))) {
            $("#input-fclaveAutFactu").addClass("error");
            document.getElementById('message-validaFinal').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Clave Gerencia incorrecta.</strong></div>";
	           $("#fclaveAutFactu").focus();
            errors = true;
        }else{
            $("#input-fclaveAutFactu").removeClass("error");
        }

    	
    	if(errors != true){
    	    // se valida la clave del vendedor
	      	$.ajax({
		        type: "POST",
		        url: "ValidaClaveVendedor.php",
		        async: false,
		        dataType : "text",
		        data: "fClaveVendedor="+strClVendedor,
		       	success: function(data2,strMsg){
		    		$dataStr = (data2.trim().split("|"));
		    		if ($dataStr[0].trim()=='OK') {
		    			if ($dataStr[1] == "1"){
		    				$(".vendedorvalido").attr("id", "1");	
		    				$("#usrVendedor").val($dataStr[2]);
		    				
		    			}else{
		    				$(".vendedorvalido").attr("id", "0");
		    				document.getElementById('message-validaFinal').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Clave Vendedor incorrecta.</strong></div>";
		    		        $("#fclaveVendedor").focus();
		    		        errors = true;
		    			}		    			
		    		}else{
	    				alert($dataStr[0]);
						document.getElementById('message-validaFinal').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Error Inesperado.</strong></div>";
    				}		    		
		        },
		        error: function(jqXHR,textStatus,errorThrown){
		            alert('Error al validar Vendedor '+errorThrown);
		        }
	    	});
	    	if ($(".vendedorvalido").attr("id") == "1" ){
                if (($("#req_aut_gere").val() == "1") || ($("#req_aut_desc").val() == "1")){
		    		$.ajax({
				        type: "POST",
				        url: "ValidaClaveGere.php",
				        async: false,
				        dataType : "text",
				        data: "fClaveGere="+strClAutFactu,
				       	success: function(data2,strMsg){
				    		$dataStr = (data2.trim().split("|"));
				    		if ($dataStr[0].trim()=='OK') {
				    			if ($dataStr[1] == "1"){
				    				$(".clavegerevalido").attr("id", "1");					    		
				    			}else{
				    				$(".clavegerevalido").attr("id", "0");
				    				$("#input-fclaveAutFactu").addClass("error");
				    				document.getElementById('message-validaFinal').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Clave Gerencia incorrecta.</strong></div>";
				    		        $("#fclaveAutFactu").focus();
				    		        errors = true;
				    			}		    			
				    		}else{
			    				alert($dataStr[0]);
								document.getElementById('message-validaFinal').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Error Inesperado Valida Gerencia.</strong></div>";
		    				}		    		
				        },
				        error: function(jqXHR,textStatus,errorThrown){
				            alert('Error al validar Gerencia '+errorThrown);
				        }
			    	});
		    		if ($(".clavegerevalido").attr("id") == "1" ){
			    	   document.forms["myForm"].submit();
			    	  // window.location.href ='../facturacioncxc/'; 
		    		}else{
		    			$("#input-fclaveAutFactu").addClass("error");
		                document.getElementById('message-validaFinal').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Clave Gerencia incorrecta 2.</strong></div>";
		    	        $("#fclaveAutFactu").focus();
		    		}
                }else{
                	 document.forms["myForm"].submit();
                }
	          
	    	}else{ // errors != true)
	          document.getElementById('message-validaFinal').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Clave Vendedor incorrecta.</strong></div>";
	           $("#fclaveVendedor").focus();
	    	};    		    		
        }
	}
	
	function validateForm() {

		//
		// Se valida que el usuario haya indicado el cliente, es obligatorio.
		//
		document.getElementById('message-fields').innerHTML = "";
		var clienteSelect = $("#selectCliente").val();
		var cliente = clienteSelect.split("|");
		if (cliente[0]=="0"){
			document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Cliente es Requerido.</strong></div>";
			return false;
		}
		//
		// en la posicion 2 se encuentra en que estado en la que se encuentra el cliente
		// 3 significa que esta moroso y se requiere la autorizacion del gerente.
		//
		if (cliente[2]=="3"){
			$("#req_aut_gere").val('1');
		}
		
    	var table = document.getElementById("tableItem");
        
    	// se obtiene la cantidad de filas de tabla, el numero incluye la fila del encabezado de las columnas
    	var rowCount = table.rows.length;
    	
    	if (rowCount == 1){
    		// solo tiene el encabezado
    		document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> No hay articulos que facturar.</strong></div>";
    		$("#texto-buscar").focus();
			return false;
    	}

		return true;
	}
    

//Abre el Modal donde se ve la informacion en Dolares   
    function openModalViewDOL(){
    	$("#viewDOL-modal").modal('show'); 
    }// function openModalViewDOL

  //Abre el Modal donde captura la informacion de gobierno   
    function openModalModoGob(){
     
    	$("#modoGOB-modal").modal('show');
    	$("#fPosPresup").focus();	
    }// function openModalModoGob    
    
    //Define la factura como exenta
    function Exento(){
        if($("#exento").is(":checked")){
            $("#fimpuesto").val(0);
            mathB();
        }else{
            mathB();
        }
    }
    
    function NoRedondeo(){
        if($("#noredondeo").is(":checked")){
        	alert("Acaba de seleccionar NO REDONDEAR");
            mathB();
        }else{
            mathB();
        }
    }

    //Llama al funcion Math() cuando se presiona el boton Agregar
    $("#addSelItem").on("click",function(){
        mathB();
    });
    

     //Calcula el total por aparte para poder utilizarlo en 2 funciones
    function precioTotal(sub,desc,imp){
        var totDesc =  (sub *(desc/100));   
        var total = imp + (sub - totDesc);
        return total;
        
    }

	//Calcula el impuesto de toda la factura
    function impuestoTotal(sub){
        //var porceIV = parseInt($("#porce_iv").val());
        var imp = (sub *($("#porce_iv").val()/100));
        return imp;
    }


    
	//Setea un objeto para almacenar las variables
    function myRowObject(one, two, three, four, five, six, seven,eight,nine){
		this.one = one; 		// consecutivo de las lineas
		this.two = two; 		// descripcion del articulo
		this.three = three; 	// codigo del articulo
		this.four = four; 		// precio venta
        this.five = five; 		// cantidad
        this.six = six;			// porcentaje descuento
        this.seven = seven; 	// precio total
        this.eight = eight;		// porcentaje descuento
        this.nine = nine;		// costo
     } 

	//Hace los preparativos para eliminar una fila, además llama a la funcion qu elimina la fila y recalcula
	//el subtotal, impuesto, y total
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
		// se recalculan los totales.
        mathB();
		
		// como borro una linea se ubica en campo de buscar codigos por que es esperable que quiera
		// buscar otro codigo
		//
        $("#texto-buscar").focus();
	}

	//Reordena la tabla despues que una fila fue eliminada
	function reorderRows(tbl, startingIndex){
		if (tbl.rows.length !=1){
			// si es igual a 1 la tabla esta vacia, solo tiene la linea del encabezado			
    		if(tbl.rows[startingIndex]){
				var count = startingIndex;
				for (var i=startingIndex; i<tbl.rows.length; i++) {
					// CONFIG: next line is affected by myRowObject settings
					tbl.rows[i].myRow.one.data = count; // text
					count++;
				};
    		};
		}
	}

	//Elimina una fila de la tabla
	function deleteRows(rowObjArray){	
		for (var i=0; i<rowObjArray.length; i++) {
			var rIndex = rowObjArray[i].sectionRowIndex;
			rowObjArray[i].parentNode.deleteRow(rIndex);
		}	
	}


	//Retorna el precio total por articulo
    function precioTotalArti(precio, cantidad){
        var p = parseInt(precio);
        var c = parseInt(cantidad);
        return p*c;
    }

     
	//No permite la entrada de ninguna letra o caracter especial al input cantidad
    $(document).ready(function() {
        $("#cant").keydown(function (e) {
            // Allow: backspace, delete, tab, escape, enter and .
            if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
                 // Allow: Ctrl+A
                (e.keyCode == 65 && e.ctrlKey === true) || 
                 // Allow: home, end, left, right, down, up
                (e.keyCode >= 35 && e.keyCode <= 40)) {
                     // let it happen, don't do anything
                     return;
            }
            // Ensure that it is a number and stop the keypress
            if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                e.preventDefault();
            }
        });
    });

    function cleanTxtBuscar(){   
		$("#descArticulo").val("");
		$("#existencia").val("");
		$("#precioivi").val("");
		$("#texto-buscar").val("");
        $("#texto-buscar").focus();
    }
    
	function Sale(){
		
		window.location="../../home";
			
	}
  
	</script>
<?php }} ?>
