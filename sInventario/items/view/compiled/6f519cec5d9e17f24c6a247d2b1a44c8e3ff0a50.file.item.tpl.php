<?php /* Smarty version Smarty-3.1.16, created on 2017-09-15 13:24:14
         compiled from "../items/view/item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:334472303550de8b5a555d2-27043711%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f519cec5d9e17f24c6a247d2b1a44c8e3ff0a50' => 
    array (
      0 => '../items/view/item.tpl',
      1 => 1505503407,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '334472303550de8b5a555d2-27043711',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_550de8b5b6a231_99145958',
  'variables' => 
  array (
    'NAV_MENU' => 0,
    'ACTION' => 0,
    'ID_ITEM' => 0,
    'ITEM' => 0,
    'EXISTENCIA_OFF' => 0,
    'ESTADOARTI_LIST' => 0,
    'CATEGORIES_LIST' => 0,
    'SUPPLIERS_LIST' => 0,
    'BTN_ACTION' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550de8b5b6a231_99145958')) {function content_550de8b5b6a231_99145958($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['NAV_MENU']->value;?>

	<div class="row-fluid">
		<div class="box span12">
			<div class="box-header well" data-original-title>
				<h2>Información Articulo</h2>
			</div>
			<div class="box-content">
				<form class="form-horizontal" id="frmEditItem"  action="processItem.php"  method="POST">
					<input type="hidden" id="action" name="action" value="<?php echo $_smarty_tpl->tpl_vars['ACTION']->value;?>
">
 			 		<fieldset>
						<div class="control-group" id="boxfidItem">
							<label class="control-label" for="disabledInput">Id</label>
							<div class="controls">
								<input class="input-xlarge " name="fidItem" id="fidItem" type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['ID_ITEM']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['ID_ITEM']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['ACTION']->value==2) {?> readonly="true"<?php }?> >
							</div>
						</div>				
						<div class="control-group" id="boxfDescripcion">
							<label class="control-label" for="focusedInput">Descripcion*</label>
							<div class="controls">
								<input class="input-xlarge focused" name ="fDescripcion" id="fDescripcion" type="text" maxlength="50"; value="<?php echo $_smarty_tpl->tpl_vars['ITEM']->value[0]['desArticulo'];?>
" style="width: 400px;">
							</div>
				 		</div>
				 		<div class="control-group" id="boxfcodigoExterno">
							<label class="control-label" for="focusedInput">Codigo Externo</label>
							<div class="controls">
								<input class="input-xlarge focused" name="fcodigoExterno" id="fcodigoExterno" type="text" value="<?php echo $_smarty_tpl->tpl_vars['ITEM']->value[0]['codArtiProveedor'];?>
">
							</div>
				 		</div>
				 		<div class="control-group" id="boxfdescExterno">
							<label class="control-label" for="focusedInput">Desc. Externo</label>
							<div class="controls">
								<input class="input-xlarge focused" name="fdescExterno" id="fdescExterno" type="text" maxlength="50"; value="<?php echo $_smarty_tpl->tpl_vars['ITEM']->value[0]['descArtiProveedor'];?>
" style="width: 400px;">
							</div>
				 		</div>				 
				 		<div class="control-group" id="boxfminimo">
							<label class="control-label" for="focusedInput">Minimo</label>
							<div class="controls">
								<input class="input-xlarge focused" name="fminimo"id="fminimo" type="text" value="<?php echo $_smarty_tpl->tpl_vars['ITEM']->value[0]['minimo'];?>
">
							</div>
				 		</div>
				 		<div class="control-group" id="boxfmaximo">
					<label class="control-label" for="focusedInput">Maximo</label>
					<div class="controls">
						<input class="input-xlarge focused" name="fmaximo" id="fmaximo" type="text" value="<?php echo $_smarty_tpl->tpl_vars['ITEM']->value[0]['maximo'];?>
">
					</div>
				 </div>
				 <div class="control-group" id="boxfreorden">
					<label class="control-label" for="focusedInput">Reorden</label>
					<div class="controls">
						<input class="input-xlarge focused" name="freorden" id="freorden" type="text" value="<?php echo $_smarty_tpl->tpl_vars['ITEM']->value[0]['reorden'];?>
">
					</div>
				 </div>
				 <div class="control-group" id="boxfexistencia">
					<label class="control-label" for="focusedInput">Existencia</label>
					<div class="controls">
						<input class="input-xlarge focused" name="fexistencia" id="fexistencia" type="text" value="<?php echo $_smarty_tpl->tpl_vars['ITEM']->value[0]['existencia'];?>
"
						<?php if ($_smarty_tpl->tpl_vars['EXISTENCIA_OFF']->value=="S") {?>  readonly="true" <?php }?>>
					</div>
				 </div>
				 <div class="control-group" id="boxfecexistencia">
					<label class="control-label" for="focusedInput">Fec.Existencia</label>
					<div class="controls">
						<input class="input-xlarge focused" name="fecexistencia" id="fecexistencia" type="text" value="<?php echo $_smarty_tpl->tpl_vars['ITEM']->value[0]['fecExistencia'];?>
 " readonly="true">
					</div>
				 </div>
				 <div class="control-group" id="boxfcosto">
					<label class="control-label" for="focusedInput">Costo*</label>
					<div class="controls">
						<input class="input-xlarge focused" name="fcosto"  id="fcosto" type="text" value="<?php echo $_smarty_tpl->tpl_vars['ITEM']->value[0]['costo'];?>
">
					</div>
				 </div>
				 <div class="control-group" id="boxfprecio">
					<label class="control-label" for="focusedInput">Precio*</label>
					<div class="controls">
						<input class="input-xlarge focused" name="fprecio" id="fprecio" type="text" value="<?php echo $_smarty_tpl->tpl_vars['ITEM']->value[0]['precio'];?>
">
					</div>
				 </div>
				 <div class="control-group" id="boxfporceComision">
					<label class="control-label" for="focusedInput">Comision (%)</label>
					<div class="controls">
						<input class="input-xlarge focused" name="fporceComision" id="fporceComision" type="text" value="<?php echo $_smarty_tpl->tpl_vars['ITEM']->value[0]['porceComision'];?>
">
					</div>
				 </div>
				 <div class="control-group" id="boxfactorUtilidad">
					<label class="control-label" for="focusedInput">Factor Utilidad</label>
					<div class="controls">
						<input class="input-xlarge focused" name="ffactorUtilidad" id="ffactorUtilidad" type="text" value="<?php echo $_smarty_tpl->tpl_vars['ITEM']->value[0]['factorUtilidad'];?>
">
					</div>
				 </div>	 				 									 
				 <div class="control-group" id="boxfcodigoBarras">
					<label class="control-label" for="focusedInput">Codigo Barras</label>
					<div class="controls">
						<input class="input-xlarge focused" name="fcodigoBarras" id="fcodigoBarras" type="text" value="<?php echo $_smarty_tpl->tpl_vars['ITEM']->value[0]['codigoBarras'];?>
">
					</div>
				 </div>
			     <div class="control-group" id="boxfexento">
			     	
				 	<label class="control-label">Exento</label>
				 	<div class="controls">
						<label class="radio-inline">
							<input type="radio" name="fexento" id="optionNo" value="N" <?php if ($_smarty_tpl->tpl_vars['ITEM']->value[0]['exento']=="N") {?> checked=""<?php }?>>	<span style="font-weight:normal;">No</span>
						</label>					
						<label class="radio-inline">
							<input type="radio" name="fexento" id="optionSi" value="S" <?php if ($_smarty_tpl->tpl_vars['ITEM']->value[0]['exento']=="S") {?> checked=""<?php }?>>	<span style="font-weight:normal;">Si</span>
						</label>
					</div>
				 </div>				 
                 <div class="control-group" id="boxselEstadoArti">
	             	<label class="control-label" for="selEstadoArti">Estado</label>
	                	<div class="controls">
		                	<select id="selEstadoArti" name="selEstadoArti">
	                        	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']["p"])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']["p"]);
$_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['name'] = "p";
$_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['ESTADOARTI_LIST']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
	                            	<option value="<?php echo $_smarty_tpl->tpl_vars['ESTADOARTI_LIST']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['idEstadoArti'];?>
" <?php if ($_smarty_tpl->tpl_vars['ESTADOARTI_LIST']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['idEstadoArti']==$_smarty_tpl->tpl_vars['ITEM']->value[0]['estado']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['ESTADOARTI_LIST']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['descripcion'];?>
</option>
                                <?php endfor; endif; ?>
		                    </select>
						</div>
				 </div>						
                 <div class="control-group" id="boxselCategoria">
	             	<label class="control-label" for="selCategoria">Categoria</label>
	                	<div class="controls">
		                	<select id="selCategoria" name="selCategoria" data-rel="chosen" style="width:280px;font-family:monospace">
		                	    <option value="0">- Seleccione la Categoria -</option>
	                        	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']["c"])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']["c"]);
$_smarty_tpl->tpl_vars['smarty']->value['section']["c"]['name'] = "c";
$_smarty_tpl->tpl_vars['smarty']->value['section']["c"]['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['CATEGORIES_LIST']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']["c"]['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']["c"]['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["c"]['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["c"]['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']["c"]['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["c"]['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']["c"]['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["c"]['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']["c"]['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["c"]['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']["c"]['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']["c"]['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["c"]['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["c"]['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']["c"]['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["c"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["c"]['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["c"]['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']["c"]['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["c"]['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']["c"]['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']["c"]['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']["c"]['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["c"]['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["c"]['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["c"]['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["c"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["c"]['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["c"]['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["c"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["c"]['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']["c"]['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']["c"]['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']["c"]['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']["c"]['total']);
?>
	                            	<option value="<?php echo $_smarty_tpl->tpl_vars['CATEGORIES_LIST']->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]['id'];?>
"  <?php if ($_smarty_tpl->tpl_vars['CATEGORIES_LIST']->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]['id']==$_smarty_tpl->tpl_vars['ITEM']->value[0]['idCategoria']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['CATEGORIES_LIST']->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]['descripcion'];?>
</option>
                                <?php endfor; endif; ?>
		                    </select>
						</div>
				 </div>
                 <div class="control-group" id="boxselProveedor">
	             	<label class="control-label" for="selProveedor">Proveedor</label>
	                	<div class="controls">
		                	<select id="selProveedor" name="selProveedor" data-rel="chosen" style="width:280px">
		                	    <option value="0">- Seleccione el Proveedor -</option>
	                        	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']["p"])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']["p"]);
$_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['name'] = "p";
$_smarty_tpl->tpl_vars['smarty']->value['section']["p"]['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['SUPPLIERS_LIST']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
	                            	<option value="<?php echo $_smarty_tpl->tpl_vars['SUPPLIERS_LIST']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['idProveedor'];?>
"  <?php if ($_smarty_tpl->tpl_vars['SUPPLIERS_LIST']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['idProveedor']==$_smarty_tpl->tpl_vars['ITEM']->value[0]['idProveedor']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['SUPPLIERS_LIST']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['nombreProveedor'];?>
</option>
                                <?php endfor; endif; ?>
		                    </select>
						</div>
				 </div>


 					<div class="modal-footer">

						<button id=btnSubFrmItem type="submit" name="enviar" class="btn btn-large btn-primary pull-right"><?php echo $_smarty_tpl->tpl_vars['BTN_ACTION']->value;?>
</button>
						<a href="index.php" class="btn btn-large pull-right" data-dismiss="modal">Cerrar</a>
						<div id="message-fields-obl"></div> 
					</div> 					


			
			</fieldset>
		  </form>			
		    </div>				
		</div>		
		</div>
		
<script type="text/javascript">
$(document).ready(function(){
	// Si la action es igual a 3 significa que es un borrado
	// se buscar desabilitar todos los campos y que solo pueda seleccionar los botones de accion.
	var newAction = document.getElementById('action'); 
	if (newAction.value == "3"){
		$("#frmEditItem :input").attr('readonly', true);
	}else if(newAction.value == "1") {
		// insertar registro valor default para exento es No.
		$("#optionNo").attr('checked', "checked");
	}
    $('#fminimo').number( true, 0 );
    $('#fmaximo').number( true, 0 );
    $('#freorden').number( true, 0 );
    $('#fcosto').number( true, 2 );
    $('#fprecio').number( true, 2 );
    $('#fporceComision').number( true, 2 );
    $('#ffactorUtilidad').number( true, 2 );

});

$(function(){
    $('#frmEditItem').validate({ 
        submitHandler: function (form) {             
            $("#message-fields-obl").css("display","none");
            if (ValideCampos()){
             form.submit();      
            }          
        }
    });

    $("#fidItem").rules('add', {
        required: function(){$("#boxfidItem").removeClass("error"); return true;},
        maxlength:12,
        messages: {
            required:  function(){
                               $("#boxfidItem").addClass("error");
                               $("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Codigo de Articulo Requerido.</strong></div>");
                            },
            maxlength:function(){
                				$("#boxfidItem").addClass("error");
                				$("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Codigo Articulo Máximo Largo 12.</strong></div>");
             }
        }
    });
    
    $("#fDescripcion").rules('add', {
        required: function(){$("#boxfDescripcion").removeClass("error"); return true;},
        maxlength:50,
        messages: {
            required:  function(){
                               $("#boxfDescripcion").addClass("error");
                               $("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Descripcion es requerida.</strong></div>");
                            },
            maxlength:function(){
                				$("#boxfDescripcion").addClass("error");
                				$("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Descripcion. Máximo Largo 50.</strong></div>");
            
            	}
            }
    });

    $("#fcodigoExterno").rules('add', {
        maxlength:20,
        messages: {
            maxlength:function(){
                				$("#boxfcodigoExterno").addClass("error");
                				$("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Codigo Externo. Máximo Largo 20.</strong></div>");
             }
        }
    });

    $("#fdescExterno").rules('add', {
        maxlength:50,
        messages: {
            maxlength:function(){
                				$("#boxfdescExterno").addClass("error");
                				$("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Desc. Externo. Máximo Largo 50.</strong></div>");
             }
        }
    });

    $("#fcosto").rules('add', {
        required: function(){$("#boxfcosto").removeClass("error"); return true;},
        messages: {
            required:  function(){
                               $("#boxfcosto").addClass("error");
                               $("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Costo es requerido.</strong></div>");
                            },
            
            }
    });
    
    $("#fprecio").rules('add', {
        required: function(){$("#boxfprecio").removeClass("error"); return true;},
        messages: {
            required:  function(){
                               $("#boxfprecio").addClass("error");
                               $("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Precio es requerido.</strong></div>");
                            },
            
            }
    });    

    $("#fcodigoBarras").rules('add', {
        maxlength:30,
        messages: {
            maxlength:function(){
                				$("#boxfcodigoBarras").addClass("error");
                				$("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Codigo Barras. Máximo Largo 30.</strong></div>");
             }
        }
    });
        
});

function ValideCampos(){
			var valStr = $("#fDescripcion").val();
			
			if(valStr.indexOf("'") > -1){
				alert("Comilla simple no es permitida como parte de la descripcion");
				return false;
			}
			if(valStr.indexOf('"') > -1){
				alert("Comillas no es permitida como parte de la descripcion");
				return false;
			}
			
			valStr = $("#fdescExterno").val();
			
			if(valStr.indexOf("'") > -1){
				alert("Comilla simple no es permitida como parte de la descripcion externa");
				return false;
			}
			if(valStr.indexOf('"') > -1){
				alert("Comillas no es permitida como parte de la descripcion externa");
				return false;
			}			
			
       //		valStr= valStr.replace(/'/g, " ");
		//	alert (valStr);
			return true;
}

/*
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
*/

</script>

<?php }} ?>
