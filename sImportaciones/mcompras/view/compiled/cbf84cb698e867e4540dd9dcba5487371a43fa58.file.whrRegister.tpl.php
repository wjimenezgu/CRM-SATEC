<?php /* Smarty version Smarty-3.1.16, created on 2016-03-16 10:54:47
         compiled from "../mcompras/view/whrRegister.tpl" */ ?>
<?php /*%%SmartyHeaderCode:520133914546779d0c2b483-15589442%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cbf84cb698e867e4540dd9dcba5487371a43fa58' => 
    array (
      0 => '../mcompras/view/whrRegister.tpl',
      1 => 1457810178,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '520133914546779d0c2b483-15589442',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_546779d1004f96_27802135',
  'variables' => 
  array (
    'NAV_MENU' => 0,
    'ID_PEDIDO' => 0,
    'NUM_ROW' => 0,
    'PED_HEADER' => 0,
    'PED_DETAIL' => 0,
    'COMPROMISOS' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546779d1004f96_27802135')) {function content_546779d1004f96_27802135($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include '/var/www/html/CRM-SATEC/resources/libs/smarty/libs/plugins/modifier.capitalize.php';
if (!is_callable('smarty_modifier_truncate')) include '/var/www/html/CRM-SATEC/resources/libs/smarty/libs/plugins/modifier.truncate.php';
?><?php echo $_smarty_tpl->tpl_vars['NAV_MENU']->value;?>

<div class="row-fluid">
        <div class="box span12">
                <div class="box-header well" data-original-title>
                        <h2><i class="icon-edit"></i> REGISTRO DE WAREHOUSE RECEIPT / TRACKING NUMBER</h2>
                </div>
                <div class="box-content">
                    <form class="form-horizontal" action="updateWHRTrackPedido.php" id="frm-newPedido" method="post">
                        <input type="hidden" name="idPedido" id="idPedido" value="<?php echo $_smarty_tpl->tpl_vars['ID_PEDIDO']->value;?>
"/>
                        <input type="hidden" name="count-numRow" id="count-numRow" value="<?php echo $_smarty_tpl->tpl_vars['NUM_ROW']->value;?>
">
                    	<legend style="height:35px">                                                
                        	<div class="span3" style="height:20px; margin-top:0px;">                            
                            	<p class="muted" style="font-size:13px; ">Proveedor: <?php echo smarty_modifier_capitalize(mb_strtolower($_smarty_tpl->tpl_vars['PED_HEADER']->value['nombreProveedor'], 'UTF-8'));?>
 </p>                            
                        	</div>
							<div class="span3" style="height:20px; margin-top:0px;">                            
                            	<p class="muted" style="font-size:13px;">Orden: <?php echo $_smarty_tpl->tpl_vars['PED_HEADER']->value['numOrdenCompra'];?>
 </p>                            
                        	</div>
                        	<div class="span3" style="height:20px; margin-top:0px;">  
                            	<p class="muted" style="font-size:13px;">WHR:                           
                            	<input type="text" class="input-block-level" id="whr" name="whr" style="width:122px" value="<?php echo $_smarty_tpl->tpl_vars['PED_HEADER']->value['whr'];?>
">  </p>                          
                        	</div>       
                        	<div class="span3" style="height:20px; margin-top:0px;">  
                            	<p class="muted" style="font-size:13px;">Tracking No.:                           
                            	<input type="text" class="input-block-level" id="trackno" name="trackno" style="width:122px" value="<?php echo $_smarty_tpl->tpl_vars['PED_HEADER']->value['trackNo'];?>
">  </p>                          
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
                                            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['pd'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['pd']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pd']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['PED_DETAIL']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pd']['name'] = 'pd';
$_smarty_tpl->tpl_vars['smarty']->value['section']['pd']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pd']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pd']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pd']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pd']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pd']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['pd']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pd']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pd']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pd']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pd']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['pd']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pd']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pd']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['pd']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pd']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pd']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['pd']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['pd']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['pd']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['pd']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pd']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['pd']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pd']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pd']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pd']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['pd']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pd']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pd']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['pd']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pd']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['pd']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pd']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['pd']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['pd']['total']);
?>
                                            	<tr class="numRow<?php echo $_smarty_tpl->tpl_vars['PED_DETAIL']->value[$_smarty_tpl->getVariable('smarty')->value['section']['pd']['index']]['idLinea'];?>
" id="register<?php echo $_smarty_tpl->tpl_vars['PED_DETAIL']->value[$_smarty_tpl->getVariable('smarty')->value['section']['pd']['index']]['idLinea'];?>
" style="font-size:11px;">
                                                	<td class="evalNumRegister" style="text-align:center;width:17px;"><div><?php echo $_smarty_tpl->tpl_vars['PED_DETAIL']->value[$_smarty_tpl->getVariable('smarty')->value['section']['pd']['index']]['idLinea'];?>
</div></td>
                                                    <td class="evalCant" style="text-align: center">
                                                    	<div class="control-group" id="row<?php echo $_smarty_tpl->tpl_vars['PED_DETAIL']->value[$_smarty_tpl->getVariable('smarty')->value['section']['pd']['index']]['idLinea'];?>
-input-cant" >
                                                        	<br><input class="input-mini" name="row<?php echo $_smarty_tpl->tpl_vars['PED_DETAIL']->value[$_smarty_tpl->getVariable('smarty')->value['section']['pd']['index']]['idLinea'];?>
-cant" disabled id="row<?php echo $_smarty_tpl->tpl_vars['PED_DETAIL']->value[$_smarty_tpl->getVariable('smarty')->value['section']['pd']['index']]['idLinea'];?>
-cant" type="text" value="<?php echo $_smarty_tpl->tpl_vars['PED_DETAIL']->value[$_smarty_tpl->getVariable('smarty')->value['section']['pd']['index']]['cantidad'];?>
" style="text-align:right; font-size:11px; width:19px;" readOnly="true"">
                                                        </div>
                                                    </td>
                                                    <td class="evalArti">
                                                    	<div class="pull-left control-group" id="row<?php echo $_smarty_tpl->tpl_vars['PED_DETAIL']->value[$_smarty_tpl->getVariable('smarty')->value['section']['pd']['index']]['idLinea'];?>
-input-codProveedor" style="margin-right:3px;" title="codProveedor">
                                                        	<span class="label label-info">Cod.Arti.Prov</span><br><input type="text" class="input-mini" style="width:71px;font-size:11px;" disabled id="row<?php echo $_smarty_tpl->tpl_vars['PED_DETAIL']->value[$_smarty_tpl->getVariable('smarty')->value['section']['pd']['index']]['idLinea'];?>
-codProveedor" name="row<?php echo $_smarty_tpl->tpl_vars['PED_DETAIL']->value[$_smarty_tpl->getVariable('smarty')->value['section']['pd']['index']]['idLinea'];?>
-codProveedor" value="<?php echo $_smarty_tpl->tpl_vars['PED_DETAIL']->value[$_smarty_tpl->getVariable('smarty')->value['section']['pd']['index']]['codArtiProveedor'];?>
" placeholder="Cod.Arti.Prov">                                                                                                               
                                                        </div>
                                                        <div class="pull-left control-group" id="row<?php echo $_smarty_tpl->tpl_vars['PED_DETAIL']->value[$_smarty_tpl->getVariable('smarty')->value['section']['pd']['index']]['idLinea'];?>
-input-nameArticle" style="margin-right:3px;" title="nameArticle">
                                                            <span class="label label-info">Descripción</span><br><input type="text" class="input-mini" style="width:250px;font-size:11px;" disabled id="row<?php echo $_smarty_tpl->tpl_vars['PED_DETAIL']->value[$_smarty_tpl->getVariable('smarty')->value['section']['pd']['index']]['idLinea'];?>
-nameArticle"  name="row<?php echo $_smarty_tpl->tpl_vars['PED_DETAIL']->value[$_smarty_tpl->getVariable('smarty')->value['section']['pd']['index']]['idLinea'];?>
-nameArticle"  value="<?php echo $_smarty_tpl->tpl_vars['PED_DETAIL']->value[$_smarty_tpl->getVariable('smarty')->value['section']['pd']['index']]['descArti'];?>
" placeholder="Nombre Artículo">
                                                        </div>                                                                            
                                                        <div class="pull-left control-group" id="row<?php echo $_smarty_tpl->tpl_vars['PED_DETAIL']->value[$_smarty_tpl->getVariable('smarty')->value['section']['pd']['index']]['idLinea'];?>
-input-codInterno" style="margin-right:3px;" title="codInterno">
                                                            <span class="label label-info">Cod.Interno</span><br><input type="text" class="input-mini" style="width:60px;font-size:11px;" disabled id="row<?php echo $_smarty_tpl->tpl_vars['PED_DETAIL']->value[$_smarty_tpl->getVariable('smarty')->value['section']['pd']['index']]['idLinea'];?>
-codInterno"   name="row<?php echo $_smarty_tpl->tpl_vars['PED_DETAIL']->value[$_smarty_tpl->getVariable('smarty')->value['section']['pd']['index']]['idLinea'];?>
-codInterno"   value="<?php echo $_smarty_tpl->tpl_vars['PED_DETAIL']->value[$_smarty_tpl->getVariable('smarty')->value['section']['pd']['index']]['codArti'];?>
" placeholder="Cod.Interno">
                                                        </div>                                                                                                                                                       
                                                    </td>
                                                                        
                                                    <td class='evalInfoRef'>
                                                    	
                                                    	<div class="pull-left ">
                                                        	<select disabled id="row<?php echo $_smarty_tpl->tpl_vars['PED_DETAIL']->value[$_smarty_tpl->getVariable('smarty')->value['section']['pd']['index']]['idLinea'];?>
-typeRef" name="row<?php echo $_smarty_tpl->tpl_vars['PED_DETAIL']->value[$_smarty_tpl->getVariable('smarty')->value['section']['pd']['index']]['idLinea'];?>
-typeRef" class="own-selected" style="width:68px; font-size:11px;padding:0; float: left; margin-top:2px; margin-right:2px;">
                                                            	<option value="0">Tipo</option>
                                                                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['co'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['co']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['co']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['COMPROMISOS']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['co']['name'] = 'co';
$_smarty_tpl->tpl_vars['smarty']->value['section']['co']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['co']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['co']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['co']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['co']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['co']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['co']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['co']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['co']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['co']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['co']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['co']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['co']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['co']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['co']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['co']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['co']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['co']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['co']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['co']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['co']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['co']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['co']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['co']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['co']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['co']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['co']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['co']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['co']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['co']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['co']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['co']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['co']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['co']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['co']['total']);
?>
                                                                	<?php if ($_smarty_tpl->tpl_vars['PED_DETAIL']->value[$_smarty_tpl->getVariable('smarty')->value['section']['pd']['index']]['idCompromiso']==$_smarty_tpl->tpl_vars['COMPROMISOS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['co']['index']]['idTipoCompromiso']) {?>
                                                                    	<option value="<?php echo $_smarty_tpl->tpl_vars['COMPROMISOS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['co']['index']]['idTipoCompromiso'];?>
" selected><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['COMPROMISOS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['co']['index']]['descripcion'],15,'');?>
</option>
                                                                   	<?php } else { ?>
                                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['COMPROMISOS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['co']['index']]['idTipoCompromiso'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['COMPROMISOS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['co']['index']]['descripcion'],15,'');?>
</option>
                                                                    <?php }?>
                                                                <?php endfor; endif; ?>                                                                                            
                                                            </select>                                                                        
                                                            <input type="text" disabled id="row<?php echo $_smarty_tpl->tpl_vars['PED_DETAIL']->value[$_smarty_tpl->getVariable('smarty')->value['section']['pd']['index']]['idLinea'];?>
-numRef" name="row<?php echo $_smarty_tpl->tpl_vars['PED_DETAIL']->value[$_smarty_tpl->getVariable('smarty')->value['section']['pd']['index']]['idLinea'];?>
-numRef" value="<?php echo $_smarty_tpl->tpl_vars['PED_DETAIL']->value[$_smarty_tpl->getVariable('smarty')->value['section']['pd']['index']]['refCompromiso'];?>
" placeholder="#referencia" class="input-mini pull-left" style="margin:0px 3px 3px 0px; float: left; width:55px;font-size:11px;">
                                                            <input type="text" disabled id="row<?php echo $_smarty_tpl->tpl_vars['PED_DETAIL']->value[$_smarty_tpl->getVariable('smarty')->value['section']['pd']['index']]['idLinea'];?>
-detRef" name="row<?php echo $_smarty_tpl->tpl_vars['PED_DETAIL']->value[$_smarty_tpl->getVariable('smarty')->value['section']['pd']['index']]['idLinea'];?>
-detRef" value="<?php echo $_smarty_tpl->tpl_vars['PED_DETAIL']->value[$_smarty_tpl->getVariable('smarty')->value['section']['pd']['index']]['refDetalleCompromiso'];?>
" placeholder="detalle" class="input-mini pull-left" style="margin:0px 3px 3px 0px; float: left; width:90px;font-size:11px;">
                                                        </div>
                                                    </td>
                                                                        
                                                    <td>
                                                    	
                                                        <div class="pull-left">
                                                        	<input type="text" id="row<?php echo $_smarty_tpl->tpl_vars['PED_DETAIL']->value[$_smarty_tpl->getVariable('smarty')->value['section']['pd']['index']]['idLinea'];?>
-detRef" name="row<?php echo $_smarty_tpl->tpl_vars['PED_DETAIL']->value[$_smarty_tpl->getVariable('smarty')->value['section']['pd']['index']]['idLinea'];?>
-whr" value="<?php echo $_smarty_tpl->tpl_vars['PED_DETAIL']->value[$_smarty_tpl->getVariable('smarty')->value['section']['pd']['index']]['whr'];?>
" placeholder="WHR" class="input-mini pull-left" style="margin:0px 3px 3px 0px; float: left; width:110px;font-size:11px;">
                                                        </div> 
													</td>
													<td>
                                                    	
                                                        <div class="pull-left">
                                                        	<input type="text" id="row<?php echo $_smarty_tpl->tpl_vars['PED_DETAIL']->value[$_smarty_tpl->getVariable('smarty')->value['section']['pd']['index']]['idLinea'];?>
-detRef" name="row<?php echo $_smarty_tpl->tpl_vars['PED_DETAIL']->value[$_smarty_tpl->getVariable('smarty')->value['section']['pd']['index']]['idLinea'];?>
-trackno" value="<?php echo $_smarty_tpl->tpl_vars['PED_DETAIL']->value[$_smarty_tpl->getVariable('smarty')->value['section']['pd']['index']]['trackNo'];?>
" placeholder="TRACKING" class="input-mini pull-left" style="margin:0px 3px 3px 0px; float: left; width:110px;font-size:11px;">
                                                        </div> 
													</td>
                                                                        
												</tr> <!-- tr rowid --> 
                                            <?php endfor; endif; ?>
                                                                
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

<?php }} ?>
