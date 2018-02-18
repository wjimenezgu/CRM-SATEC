<?php /* Smarty version Smarty-3.1.16, created on 2014-11-22 08:37:41
         compiled from "../items/view/editItem.tpl" */ ?>
<?php /*%%SmartyHeaderCode:158765239053defcfd8cecf7-85267513%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9db95be41b778f6e551d05f7438cedb5ef627979' => 
    array (
      0 => '../items/view/editItem.tpl',
      1 => 1416667043,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '158765239053defcfd8cecf7-85267513',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53defcfd931895_32841556',
  'variables' => 
  array (
    'NAV_MENU' => 0,
    'ID_ITEM' => 0,
    'ITEM' => 0,
    'ESTADOARTI_LIST' => 0,
    'CATEGORIES_LIST' => 0,
    'SUPPLIERS_LIST' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53defcfd931895_32841556')) {function content_53defcfd931895_32841556($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['NAV_MENU']->value;?>

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
						<input class="input-xlarge " name="fidItem" id="fidItem" type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['ID_ITEM']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['ID_ITEM']->value;?>
" readOnly="true" >
					</div>
				</div>				
				<div class="control-group">
					<label class="control-label" for="focusedInput">Descripcion*</label>
					<div class="controls">
						<input class="input-xlarge focused" name ="fDescripcion" id="fDescripcion" type="text" value="<?php echo $_smarty_tpl->tpl_vars['ITEM']->value[0]['desArticulo'];?>
">
					</div>
				 </div>
				 <div class="control-group">
					<label class="control-label" for="focusedInput">Codigo Externo</label>
					<div class="controls">
						<input class="input-xlarge focused" name="fcodigoExterno" id="fcodigoExterno" type="text" value="<?php echo $_smarty_tpl->tpl_vars['ITEM']->value[0]['codArtiProveedor'];?>
">
					</div>
				 </div>
				 <div class="control-group">
					<label class="control-label" for="focusedInput">Desc. Externo</label>
					<div class="controls">
						<input class="input-xlarge focused" name="fdescExterno" id="fdescExterno" type="text" value="<?php echo $_smarty_tpl->tpl_vars['ITEM']->value[0]['descArtiProveedor'];?>
">
					</div>
				 </div>				 
				 <div class="control-group">
					<label class="control-label" for="focusedInput">Minimo</label>
					<div class="controls">
						<input class="input-xlarge focused" name="fminimo"id="fminimo" type="text" value="<?php echo $_smarty_tpl->tpl_vars['ITEM']->value[0]['minimo'];?>
">
					</div>
				 </div>
				 <div class="control-group">
					<label class="control-label" for="focusedInput">Maximo</label>
					<div class="controls">
						<input class="input-xlarge focused" name="fmaximo" id="fmaximo" type="text" value="<?php echo $_smarty_tpl->tpl_vars['ITEM']->value[0]['maximo'];?>
">
					</div>
				 </div>
				 <div class="control-group">
					<label class="control-label" for="focusedInput">Reorden</label>
					<div class="controls">
						<input class="input-xlarge focused" name="freorden" id="freorden" type="text" value="<?php echo $_smarty_tpl->tpl_vars['ITEM']->value[0]['reorden'];?>
">
					</div>
				 </div>
				 <div class="control-group">
					<label class="control-label" for="focusedInput">Costo*</label>
					<div class="controls">
						<input class="input-xlarge focused" name="fcosto"  id="fcosto" type="text" value="<?php echo $_smarty_tpl->tpl_vars['ITEM']->value[0]['costo'];?>
">
					</div>
				 </div>
				 <div class="control-group">
					<label class="control-label" for="focusedInput">Precio*</label>
					<div class="controls">
						<input class="input-xlarge focused" name="fprecio" id="fprecio" type="text" value="<?php echo $_smarty_tpl->tpl_vars['ITEM']->value[0]['precio'];?>
">
					</div>
				 </div>
				 <div class="control-group">
					<label class="control-label" for="focusedInput">Comision (%)</label>
					<div class="controls">
						<input class="input-xlarge focused" name="fporceComision" id="fporceComision" type="text" value="<?php echo $_smarty_tpl->tpl_vars['ITEM']->value[0]['porceComision'];?>
">
					</div>
				 </div>
				 <div class="control-group">
					<label class="control-label" for="focusedInput">Factor Utilidad</label>
					<div class="controls">
						<input class="input-xlarge focused" name="ffactorUtilidad" id="ffactorUtilidad" type="text" value="<?php echo $_smarty_tpl->tpl_vars['ITEM']->value[0]['factorUtilidad'];?>
">
					</div>
				 </div>	 				 									 
				 <div class="control-group">
					<label class="control-label" for="focusedInput">Codigo Barras</label>
					<div class="controls">
						<input class="input-xlarge focused" name="fcodigoBarras" id="fcodigoBarras" type="text" value="<?php echo $_smarty_tpl->tpl_vars['ITEM']->value[0]['codigoBarras'];?>
">
					</div>
				 </div>
			     <div class="control-group">
				 	<label class="control-label">Exento</label>
					<div class="controls">
						<label class="radio">
							<input type="radio" name="fexento" id="optionNo" value="N" <?php if ($_smarty_tpl->tpl_vars['ITEM']->value[0]['exento']=="N") {?> checked=""<?php }?>>
							<span style="font-weight:normal;">No</span>
						</label>
						<div style="clear:both"></div>						
						<label class="radio">
							<input type="radio" name="fexento" id="optionSi" value="S" <?php if ($_smarty_tpl->tpl_vars['ITEM']->value[0]['exento']=="S") {?> checked=""<?php }?>>
							<span style="font-weight:normal;">Si</span>
						</label>
					</div>
				 </div>				 
                 <div class="control-group">
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
                 <div class="control-group">
	             	<label class="control-label" for="selCategoria">Categoria</label>
	                	<div class="controls">
		                	<select id="selCategoria" name="selCategoria" data-rel="chosen" style="width:280px">
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
                 <div class="control-group">
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

</script><?php }} ?>
