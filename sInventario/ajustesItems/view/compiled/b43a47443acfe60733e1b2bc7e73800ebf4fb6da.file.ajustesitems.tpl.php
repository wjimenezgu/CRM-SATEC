<?php /* Smarty version Smarty-3.1.16, created on 2017-08-10 18:35:20
         compiled from "../ajustesItems/view/ajustesitems.tpl" */ ?>
<?php /*%%SmartyHeaderCode:208039842455521bc19bf1f1-14809522%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b43a47443acfe60733e1b2bc7e73800ebf4fb6da' => 
    array (
      0 => '../ajustesItems/view/ajustesitems.tpl',
      1 => 1502395959,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '208039842455521bc19bf1f1-14809522',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_55521bc1afbc43_17706027',
  'variables' => 
  array (
    'NAV_MENU' => 0,
    'ID_AJUSTE' => 0,
    'ID_TIENDA' => 0,
    'ACTION' => 0,
    'EoS' => 0,
    'CURRENT_DATE' => 0,
    'DESC_MOV' => 0,
    'LISTA_TIENDAS' => 0,
    'AJUSTE' => 0,
    'LISTA_TIPOMOV' => 0,
    'DETAJUSTE' => 0,
    'BTN_ACTION' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55521bc1afbc43_17706027')) {function content_55521bc1afbc43_17706027($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['NAV_MENU']->value;?>
 
        <form class="form-horizontal" id='frmAjustes'  action="processAjustes.php" onsubmit="return validateForm()" method="POST">
            <input type="hidden" name="id_ajuste" id="id_ajuste" value="<?php echo $_smarty_tpl->tpl_vars['ID_AJUSTE']->value;?>
">
            <input type="hidden" name="id_tienda" id="id_tienda" value="<?php echo $_smarty_tpl->tpl_vars['ID_TIENDA']->value;?>
">
            <input type="hidden" name="action"    id="action"    value="<?php echo $_smarty_tpl->tpl_vars['ACTION']->value;?>
">
            <input type="hidden" name="EoS"       id="EoS"       value="<?php echo $_smarty_tpl->tpl_vars['EoS']->value;?>
">
            <input type="hidden" name="current_date"    id="current_date"    value="<?php echo $_smarty_tpl->tpl_vars['CURRENT_DATE']->value;?>
">
        	<div class="row-fluid" >		
            	<div class="box span12">
                	<div class="box-header well" data-original-title>
                    	<h2>Ajustes Inventario - <?php echo $_smarty_tpl->tpl_vars['DESC_MOV']->value;?>
</h2>
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
" 
                                		<?php if ($_smarty_tpl->tpl_vars['LISTA_TIENDAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['codTienda']==$_smarty_tpl->tpl_vars['ID_TIENDA']->value) {?> selected<?php }?>
                                	>
                                		<?php echo $_smarty_tpl->tpl_vars['LISTA_TIENDAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['nombreTienda'];?>

                                	</option>                                	
                                <?php endfor; endif; ?>
                            </select>
                    </div>
                    <div id="message-fields" style='alignment-adjust:  central;'></div>
                    <div class="box" style="margin-left: 10px;margin-right: 10px;" >
                        	<div class="box-header well">
                            	<h3>Encabezado Ajuste</h3>
                            </div>
                    	
							<div class="control-group" id="boxFechaAjuste" style="margin-top:6px;">
								<label class="control-label" for="disabledInput">Fecha Ajuste*</label>
								<div class="controls">
									<input class="input-xlarge datepicker"  name="ffechaAjuste" id="ffechaAjuste" type="text" placeholder="Fecha Ajuste" value="<?php echo $_smarty_tpl->tpl_vars['AJUSTE']->value[0]['fecMovimiento'];?>
">
								</div>
							</div>
							<div class="control-group" id="boxTipoMov">
								<label class="control-label" for="selectTipoMov">Tipo Movimiento*</label>
								<div class="controls">
									<select id="selectTipoMov" name="selectTipoMov" class="input-xlarge focused">
										<option value="0">Sin Tipo Movimieto</option>
	                        				<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']["lc"])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']["lc"]);
$_smarty_tpl->tpl_vars['smarty']->value['section']["lc"]['name'] = "lc";
$_smarty_tpl->tpl_vars['smarty']->value['section']["lc"]['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['LISTA_TIPOMOV']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']["lc"]['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']["lc"]['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["lc"]['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["lc"]['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']["lc"]['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["lc"]['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']["lc"]['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["lc"]['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']["lc"]['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["lc"]['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']["lc"]['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']["lc"]['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["lc"]['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["lc"]['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']["lc"]['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["lc"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["lc"]['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["lc"]['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']["lc"]['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["lc"]['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']["lc"]['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']["lc"]['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']["lc"]['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["lc"]['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["lc"]['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["lc"]['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["lc"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["lc"]['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["lc"]['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["lc"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["lc"]['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']["lc"]['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']["lc"]['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']["lc"]['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']["lc"]['total']);
?>
	                            				<option 
	                            					value="<?php echo $_smarty_tpl->tpl_vars['LISTA_TIPOMOV']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lc']['index']]['codTipoMov'];?>
"
	                            					<?php if ($_smarty_tpl->tpl_vars['LISTA_TIPOMOV']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lc']['index']]['codTipoMov']==$_smarty_tpl->tpl_vars['AJUSTE']->value[0]['codTipoMov']) {?> selected<?php }?>	                            					
	                            				>
	                            				<?php echo $_smarty_tpl->tpl_vars['LISTA_TIPOMOV']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lc']['index']]['descTipoMov'];?>

	                            				</option>
                                			<?php endfor; endif; ?>
									</select>
								</div>
							</div>
							<div class="control-group" id="boxdetalle" >
								<label class="control-label" for="focusedInput">Detalle*</label>
								<div class="controls">
									<textarea id="fdetalle" name="fdetalle" class="autogrow" style="width: 270px; height: 30px" maxlength="200" ><?php echo $_smarty_tpl->tpl_vars['AJUSTE']->value[0]['detalle'];?>
</textarea>
								</div>
				 			</div>	
                        </div> <!-- class box -->
                        <div class="box" style="margin-left: 10px;margin-right: 10px;" >
                        	<div class="box-header well">
                            	<h3>Buscar Articulos</h3>
                            </div>
								<div class="control-group" style="margin-left: -150px;" id="boxCriterios">
									<div class="controls">
				 						<label class="radio" style="font-size:1.2vw; margin-top:4px; ">Criterios:</label>					
										<label class="radio" style="font-size:1.2vw; margin-top:12px;">
											<input type="radio" name="criterio" id="optionCod" value="codigo" checked="" onclick="cleanTxtBuscar()">
											código
										</label>
										<label class="radio" style="font-size:1.2vw; margin-top:12px;">
											<input type="radio"  name="criterio" id="optionDes" value="nombre" onclick="cleanTxtBuscar()">
											descripción
										</label>
										<label class="radio" style="font-size:1.2vw; margin-top:12px;">
											<input type="radio" name="criterio" id="optionExt" value="externo" onclick="cleanTxtBuscar()">
											código externo
										</label>
										<label class="radio" style="font-size:1.2vw; margin-top:12px;">
											<input type="radio" name="criterio" id="optionBarras" value="barras" onclick="cleanTxtBuscar()">
											barras
										</label>												
                						<form style="margin:0px; padding:0px; float:right; margin-top:-5px;">
                							<input type="text"  accesskey="s" class="txt_search" id="texto-buscar" name="texto-buscar" value="" style="margin-top:4px; margin-left:50px; font-size:1vw; width:300px;" placeholder="Iniciar Búsqueda">                			
                    						<button id="btn-getInventario" style="margin-top:4px;" class="btn btn-small" data-toggle="modal" data-target="#inventory-modal" ><i class="icon-search"></i> Buscar</button>
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
                                        <th style='width: 10px;'>Cant.</th>
                                        <th style="width: 25px;">Acción</th>
                                    </tr>
                                </thead>
                                <tbody id="tbod" name="tbod">
                                	<div id ="divtbod" class="grid" style="width: fit-content; border: 1px;"></div>
                            		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['name'] = 'lP';
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['DETAJUSTE']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
										<tr style="padding:0px;" id="tr<?php echo $_smarty_tpl->tpl_vars['DETAJUSTE']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['numLinea'];?>
">
						    			<td style="width:10px;">
											<?php echo $_smarty_tpl->tpl_vars['DETAJUSTE']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['numLinea'];?>
											
										</td>
						    			<td style="width:455x;">
											<?php echo $_smarty_tpl->tpl_vars['DETAJUSTE']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['desArticulo'];?>

											<input name="item[]" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['DETAJUSTE']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['desArticulo'];?>
">
										</td>
     									<td style="width:10px;">
											<?php echo $_smarty_tpl->tpl_vars['DETAJUSTE']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['codArti'];?>

											<input name="codArti[]" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['DETAJUSTE']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['codArti'];?>
">
										</td>     									
                            			<td style="width:10px;" align="left">
                            			<!-- 	<input class="input-mini"  id="cantRow<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']+1;?>
" type="number"  value="<?php echo $_smarty_tpl->tpl_vars['DETAJUSTE']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['cantidad'];?>
">   -->
                            				<input class="input-mini"  name="cant[]" id="cant[]"  type="number"  <?php if ($_smarty_tpl->tpl_vars['ACTION']->value=="5"||$_smarty_tpl->tpl_vars['ACTION']->value=="4"||$_smarty_tpl->tpl_vars['ACTION']->value=="6") {?> disabled <?php }?> style="text-align: right;"  value="<?php echo $_smarty_tpl->tpl_vars['DETAJUSTE']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['cantidad'];?>
">
                            			</td>
                            			
										<td class="center">
											<a href="#" id="<?php echo $_smarty_tpl->tpl_vars['DETAJUSTE']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['idAjuste'];?>
" onclick="goPage(3, this.id,'<?php echo $_smarty_tpl->tpl_vars['EoS']->value;?>
')"><i class="icon icon-color icon-remove"></i></a>
										</td>
									</tr> 
								<?php endfor; endif; ?>
                                </tbody>
                            </table>  
                         </div>
                         <div class="modal-footer">
                         	<button type="button" class="btn btn-large btn-info pull-right" onclick="goBack('<?php echo $_smarty_tpl->tpl_vars['EoS']->value;?>
');"  style='margin-left: 15px;'>Cerrar</button>
                       		<button type="submit" id='facturar' name="enviar" class="btn btn-large btn-primary pull-right"><?php echo $_smarty_tpl->tpl_vars['BTN_ACTION']->value;?>
</button>
                         </div>
                         
                </div><!--class="box span12"-->
            </div><!--class="row-fluid" -->
   		</form>            


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
        //,           
        //startDate: new Date()
     });
    
    var newAction = $("#action").val();	
    
    if (newAction == "1"){
    	$( "#ffechaAjuste" ).val($( "#current_date" ).val());
    }
    
   
	
	// Si presiona enter en el campo texto a buscar que se ejecute el evento click() del boton buscar
    $('#texto-buscar').keypress(function(e){
        if(e.keyCode==13){
        	e.preventDefault();
        	$('#btn-getInventario').click();
        }
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
                var vtxtBusqueda = cache.$txtBuscar.val();
              	
                if($("#texto-buscar").val()!=""){
                	var properties = {
                    			url: "itemsLoad.php",
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
        	  document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Debe indicar articulo a buscar.</strong></div>";    
          }        	
    });



    $('#inventory-modal').on('show', function (e) {
        if ($("#texto-buscar").val()=="") return e.preventDefault(); // stops modal from being shown
    });

    $("#facturar").on("click", function(e){

        $("#facturar").prop("disabled",true);
        document.forms["frmAjustes"].submit();        
    });  
    
    $("#selectTipoMov").focus();

                   
});

	function validateForm() {
		//
		// Se valida que el usuario haya indicado la fecha de ajuste, es obligatorio.
		//
		$("#boxFechaAjuste").removeClass("error");
		$("#boxdetalle").removeClass("error");
		$("#boxTipoMov").removeClass("error");
		document.getElementById('message-fields').innerHTML = "";
		if ($("#ffechaAjuste").val() == ''){
			$("#boxFechaAjuste").addClass("error");

            document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Fecha Ajuste es Requerido.</strong></div>";            
            return false;
		}
		// un detalle es obligatorio
		if ($("#fdetalle").val() == ''){
			$("#boxdetalle").addClass("error");
            document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Detalle es Requerido.</strong></div>";
            return false;
		}		
		// tipo de movimiento es obligatorio
		if ($("#selectTipoMov").val() == '0'){
			$("#boxTipoMov").addClass("error");
            document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Tipo Movimiento es Requerido.</strong></div>";
            return false;
		}
		// debe indicar al menos un articulo si el largo es igual a una solo tiene el encabezado
		var table = document.getElementById("tableItem");
		if (table.rows.length == 1) {
            document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Debe indicar al menos 1 articulo.</strong></div>";
            return false;
		}
		
		
		
		
		return true;
	}
	

    

 //Deshabilita los campos
    function deshabilitaCampos(){
    	$("#btn-getInventario").prop("disabled",true);
    }

  //Habilita los campos
    function habilitaCampos(){
    	$("#btn-getInventario").prop("disabled",false);        
        document.getElementById('message-fields').innerHTML = "";           
    }

    
//Setea un objeto para almacenar las variables
    function myRowObject(one, two, three, four){
		this.one = one; // text object
		this.two = two; // input text object
		this.three = three; // cantidad
		this.four = four; // precio de venta
     } 
    


//Hace los preparativos para eliminar una fila, además llama a la funcion qu elimina la fila y recalcula
//el subtotal, impuesto, y total
function deleteCurrentRow(obj){
	
		var delRow = obj.parentNode.parentNode;
		var tbl = delRow.parentNode.parentNode;
		var rIndex = delRow.sectionRowIndex;
                
		var rowArray = new Array(delRow);
		deleteRows(rowArray);
		reorderRows(tbl, rIndex);
                math();
}

//Reordena la tabla despues que una fila fue eliminada
function reorderRows(tbl, startingIndex){

	if (tbl.rows.length==1){
		// si es igual a 1 la tabla esta vacia, solo tiene la linea del encabezado
		$("#facturar").prop("disabled",true);
		$("#fdescuento").val("0.00");
		//$("#fdescuento").prop("disabled",true);
		$("#pdescuento").val("0");
		$("#pdescuento").prop("disabled",true);
	}else{
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

//Elimina una fila de la tabla
function deleteRows(rowObjArray){
	
		for (var i=0; i<rowObjArray.length; i++) {
			var rIndex = rowObjArray[i].sectionRowIndex;
			rowObjArray[i].parentNode.deleteRow(rIndex);
		}
	
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
    
    $(document).ready(function() {
        $("#avalue").keydown(function (e) {
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


//Limpia toda la pantalla para realizar una factura nueva
    function clearAll(){
        $('#myForm')[0].reset();
        document.getElementById('message-fields').innerHTML ="";
        var table = document.getElementById("tableItem");
        while(table.rows.length > 1) {
        	  table.deleteRow(1);
        	}                

        $("#btn-getInventario").prop("disabled",true);

        
        $("#facturar").prop("disabled",true);
 
        $("#selectTipoMov").focus();
    }

    function goBack(EoS){
    	
		if(EoS=="E"){		
			window.location.href ='allEntradas.php';
		}else{
			window.location.href ='allSalidas.php';
		}
	};


    function findItems(){
    	  
        criterio    = $('input[name=criterio]:checked').val();
        txtBusqueda = $("#texto-buscar").val();
      
        $("#info-items").load("buscarProducto.php", { criterio : criterio, txtBusqueda : txtBusqueda }, function(response,status,xhr){

        });    
        
        
    }

    function openModalArticulos(){
        if ($("#texto-buscar").val()==""){
        	document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Debe indicar articulo a busar.</strong></div>";
        }else{
        	document.getElementById('message-fields').innerHTML ="";
            $("#inventory-modal").modal('show');
            var progress = setInterval(function() {
                var $bar = $('.bar');
                if ($bar.width()>=450) {
                    clearInterval(progress);
                    $('.progress').removeClass('active');

                    var idProveedor = '1021';

                    var vcriterio    = cache.$selCriterio.val();
                    var vtxtBusqueda = cache.$txtBuscar.val();
                    
                    if(idProveedor != 0){
                        var properties = {
                            url: "itemsLoad.php",
                            async: true,
                            cache: false,
                            data: "idProveedor="+idProveedor+"&action=1",
                            type: "POST",
                            //dataType: "json",
                            error: cache.$boxInventory.html("Error cargando articulos"),
                            success: function(inventario){

                                cache.$boxInventory.html(inventario);
							
                            }
                        };            
                        $.ajax(properties);                
                    }else{
                        cache.$boxInventory.html("Debe seleccionar al menos 1 proveedor");
                    }            
                } else {
                    $bar.width($bar.width()+150);
                }
                $bar.text($bar.width()/5 + "%");

            }, 2300);
        
            $("#invOpen").val("1");
            
        }
    }

    function cleanTxtBuscar(){
        
        $("#texto-buscar").val(""); 
        $("#texto-buscar").focus();
        
    }

  


    

    
	</script>
<?php }} ?>
