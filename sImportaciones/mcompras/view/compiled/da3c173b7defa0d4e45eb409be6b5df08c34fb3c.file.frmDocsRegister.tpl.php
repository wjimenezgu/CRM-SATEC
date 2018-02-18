<?php /* Smarty version Smarty-3.1.16, created on 2016-03-16 11:11:55
         compiled from "../mcompras/view/frmDocsRegister.tpl" */ ?>
<?php /*%%SmartyHeaderCode:872814812542c8a89de49d5-13159101%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da3c173b7defa0d4e45eb409be6b5df08c34fb3c' => 
    array (
      0 => '../mcompras/view/frmDocsRegister.tpl',
      1 => 1457810179,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '872814812542c8a89de49d5-13159101',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_542c8a8a0575d9_26244042',
  'variables' => 
  array (
    'NAV_MENU' => 0,
    'REGISTER' => 0,
    'ID_PEDIDO' => 0,
    'PED_HEADER' => 0,
    'ALL_DOCUMENTS' => 0,
    'TIPO_DOCS' => 0,
    'MONEDAS' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542c8a8a0575d9_26244042')) {function content_542c8a8a0575d9_26244042($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include '/var/www/html/CRM-SATEC/resources/libs/smarty/libs/plugins/modifier.capitalize.php';
?><?php echo $_smarty_tpl->tpl_vars['NAV_MENU']->value;?>

<div class="row-fluid">
        <div class="box span12">
                <div class="box-header well" data-original-title>
                        <h2><i class="icon icon-black icon-book"></i> REGISTRO DE DOCUMENTOS</h2>
                </div>
                <div class="box-content">
                    <form class="form-horizontal" action="#" id="frm-eventRegister" method="post">
                    <input type="hidden" name="count-numRow" id="count-numRow" value="<?php echo $_smarty_tpl->tpl_vars['REGISTER']->value;?>
">
                    <input type="hidden" name="numIdPedido" id="numIdPedido" value="<?php echo $_smarty_tpl->tpl_vars['ID_PEDIDO']->value;?>
">
                    <legend style="height:35px; text-align:right;">                                                

                            <button type="button" class="btn btn-small btn-success" id="btnNewDocument" data-toggle="modal" data-target="#newDoc-modal"><i class="icon-plus icon-white"></i> Añadir Documento</button>

                    </legend>
                        
                    <div class="row-fluid">

                        <div class="span4">                                                   
                            
                            <div class="row-fluid" >
                                    <div class="span6">No. Orden Compra:</div>
                                    <div class="span6">                                        
                                        <div class="pull-left control-group" id="input-datePedido">
                                            <input type="text"   class="input-block-level" id="numOrder"   name="numOrder"   value="<?php echo $_smarty_tpl->tpl_vars['PED_HEADER']->value['numOrdenCompra'];?>
" readonly="">
                                            <input type="hidden" id="h_numOrder" name="h_numOrder" value="<?php echo $_smarty_tpl->tpl_vars['PED_HEADER']->value['numOrdenCompra'];?>
">
                                        </div>
                                    </div>
                            </div>                                              
                            
                        </div>
                                        
                        <div class="span4">                                                   
                            
                            <div class="row-fluid" >
                                    <div class="span6">Proveedor:</div>
                                    <div class="span6">                                        
                                        <div class="pull-left control-group" id="input-datePedido">
                                            <input type="text" class="input-block-level"   id="nameProveedor" name="nameProveedor"     value="<?php echo smarty_modifier_capitalize(mb_strtolower($_smarty_tpl->tpl_vars['PED_HEADER']->value['nombreProveedor'], 'UTF-8'));?>
" readonly="">
                                            <input type="hidden" id="h_nameProveedor" name="h_nameProveedor" value="<?php echo smarty_modifier_capitalize(mb_strtolower($_smarty_tpl->tpl_vars['PED_HEADER']->value['nombreProveedor'], 'UTF-8'));?>
">
                                        </div>
                                    </div>
                            </div>                                              
                            
                        </div>
                                        
                        <div class="span4">                                                   
                            
                            <div class="row-fluid" >
                                    <div class="span6">Fecha Creación:</div>
                                    <div class="span6">                                        
                                        <div class="pull-left control-group" id="input-datePedido">
                                            <input type="text"   class="input-block-level" id="datePedido" name="datePedido"   value="<?php echo $_smarty_tpl->tpl_vars['PED_HEADER']->value['fecCreacion'];?>
" readonly="">
                                            <input type="hidden" id="datePedido" name="h_datePedido" value="<?php echo $_smarty_tpl->tpl_vars['PED_HEADER']->value['fecCreacion'];?>
">
                                        </div>
                                    </div>
                            </div>                                                       
                            
                        </div>    

                    </div> 

                    <div class="row-fluid">
                            <div class="box span12">
                                    <div class="box-header well" data-original-title>
                                            <h2>Documentos del Pedido</h2>
                                    </div>
                                    <div class="box-content" id="box-frmEvents">

                                        
                                        <table class="table table-striped tabs-content-inner" id="tblDocs">
							  <thead>
								<tr>
                                                                    <th>Fecha</th>
                                                                    <th>Usuario</th>
                                                                    <th>Documento</th>
                                                                    <th>Comentario</th>                                          
                                                                    <th>Monto</th>                                          
                                                                    <th>Moneda</th>
                                                                    <th>Acción</th>                                                                                    
                                                                      
                                                                </tr>
							  </thead>    
							  <tbody> 
                                                                <tr class="none"></tr>
                                                                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['e'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['e']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['ALL_DOCUMENTS']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['name'] = 'e';
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['e']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['e']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['e']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['e']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['e']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['e']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['total']);
?>
                                                                <tr class="numRow<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['e']['index']+1;?>
" id="register">
                                                                        <td class="evaldateDoc"><br><div style="margin-top:4px; "><?php echo $_smarty_tpl->tpl_vars['ALL_DOCUMENTS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']]['fecInsDoc'];?>
</div></td>
                                                                        <td class="evalUser">
                                                                            <br><div style="margin-top:4px; "><?php echo $_smarty_tpl->tpl_vars['ALL_DOCUMENTS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']]['userInsDoc'];?>
</div>
                                                                        </td>
                                                                        <td class="evalDoc">

                                                                            <br><div style="margin-top:4px; "><?php echo $_smarty_tpl->tpl_vars['ALL_DOCUMENTS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']]['siglasDoc'];?>
 | <?php echo $_smarty_tpl->tpl_vars['ALL_DOCUMENTS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']]['fecDoc'];?>
 | <?php echo $_smarty_tpl->tpl_vars['ALL_DOCUMENTS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']]['numDoc'];?>
</div>
                                                                            
                                                                        </td>
                                                                        <td class="evalComment" style="width:50px">
                                                                            <div class="pull-left control-group" id="row-input-comment" style="margin-right:3px;">
                                                                                <br><input title="<?php echo $_smarty_tpl->tpl_vars['ALL_DOCUMENTS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']]['comentario'];?>
" data-rel='tooltip' class="input-medium" id="row-comment"  name="row-comment"  type="text" value="<?php echo $_smarty_tpl->tpl_vars['ALL_DOCUMENTS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']]['comentario'];?>
" style="border:none; background:#fff; cursor: text;" readonly="">
                                                                            </div>
                                                                        </td>
                                                                        <td class="evalMonto">
                                                                            <br><div style="width:20px;"><?php echo $_smarty_tpl->tpl_vars['ALL_DOCUMENTS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']]['montoDoc'];?>
</div>
                                                                        </td>                                                                        
                                                                        <td class="evalMoneda">
                                                                            <br><div style="width:20px;"><?php echo $_smarty_tpl->tpl_vars['ALL_DOCUMENTS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']]['idMoneda'];?>
</div>
                                                                        </td>                                                                        
                                                                        <td class="evalActions">
                                                                            <br>

                                                                                <!--
                                                                                        <a href="editDoc.php?idPedido=<?php echo $_smarty_tpl->tpl_vars['ID_PEDIDO']->value;?>
&idNumDoc=<?php echo $_smarty_tpl->tpl_vars['ALL_DOCUMENTS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']]['numDoc'];?>
&idFecDoc=<?php echo $_smarty_tpl->tpl_vars['ALL_DOCUMENTS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']]['fecDoc'];?>
"><i class="icon icon-color icon-edit"></i></a>
                                                                                -->
                                                                                <a class="btnEditDocument" style="cursor: pointer;" data="<?php echo $_smarty_tpl->tpl_vars['ID_PEDIDO']->value;?>
|<?php echo $_smarty_tpl->tpl_vars['ALL_DOCUMENTS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']]['numDoc'];?>
|<?php echo $_smarty_tpl->tpl_vars['ALL_DOCUMENTS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']]['fecDoc'];?>
"><i class="icon icon-color icon-edit"></i></a>
                                                                        </td>                                                                        
								</tr> 
                                                                <?php endfor; endif; ?>
<!--                                                                 
                                                                <tr>
                                                                     <td colspan="3">
                                                                     </td>
                                                                     <td colspan="4" style="text-align:right;">                                                                         
                                                                         <button type="button" class="btn btn-small btn-success" id="btnNewDocument" data-toggle="modal" data-target="#newDoc-modal"><i class="icon-plus icon-white"></i> Añadir Documento</button>
                                                                     </td>
                                                                </tr>
 -->
							  </tbody>
						 </table>                                                                                                                                    
                                    </div>
                            </div><!--/span-->
                    </div><!--/row-->                    
                    
                    </form>
                </div>
            
        </div><!--/span-->

</div><!--/row-->


<!-- NEW ARTICLE MESSAGE MODAL -->
<div class="modal fade" id="newDoc-modal" tabindex="-1" role="dialog" aria-hidden="true" style="margin: -320px 0 0 -280px;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3 class="modal-title blue" id="ntitleModal"><i class="fa fa-bars"></i> Nuevo Documento</h3>
                <br />
                <p id="ntextnext">Registrar documento al pedido</p>
            </div>
            <form method="post" id="frm-newDoc">
                <div class="modal-body" id="newDoc" style="max-height: 490px;">

                    <table class="table table-condensed">
                      <tbody> 

                          <tr>
                              <th>Documento*</th>
                              <td>  
                                  
                                <div class="input-prepend pull-left" id="boxSelectDocs">
                                    <span class="add-on" style="padding:0px; height:26px; margin:0px 3px 3px 0px;">                                    
                                        <select id="docsList" name="docsList" style="height:25px; width:170px">
                                            <option value="0" style="padding:5px">- Tipo Documento -</option>
                                             <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['e'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['e']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['TIPO_DOCS']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['name'] = 'e';
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['e']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['e']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['e']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['e']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['e']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['e']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['total']);
?>
                                            <option style="padding:5px" value="<?php echo $_smarty_tpl->tpl_vars['TIPO_DOCS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']]['idTipoDocumento'];?>
"><?php echo smarty_modifier_capitalize(mb_strtolower($_smarty_tpl->tpl_vars['TIPO_DOCS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']]['descripcion'], 'UTF-8'));?>
</option>
                                             <?php endfor; endif; ?>
                                         </select> 
                                    </span>                                
                                </div>                                    

                              </td>
                          </tr>
                          <tr>
                              <th>Fecha*</th>
                              <td>
                                <div class="pull-left control-group" id="input-dateDocument">
                                    <input type="text" class="input-block-level datepicker" id="dateDocument" name="dateDocument" value="">
                                </div>                                 
                              </td>
                          </tr>
                          <tr>
                              <th>No. Documento*</th> 
                              <td>
                                <div class="pull-left control-group" id="input-noDocument">
                                    <input type="text" class="input-block-level" id="noDocument" name="noDocument" value="">
                                </div>                                 
                              </td>
                          </tr>
                          <tr>
                              <th>Moneda*</th>
                              <td>

                                <div class="input-prepend pull-left" id="input-selMoneda">
                                    <span class="add-on" style="padding:0px; height:26px; margin:0px 3px 3px 0px;">                                    
                                        <select id="selMoneda"  name="selMoneda" style="width:170px">
                                            <option style="padding:5px;" value="0">- Moneda -</option>
                                        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['m'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['m']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['m']['name'] = 'm';
$_smarty_tpl->tpl_vars['smarty']->value['section']['m']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['MONEDAS']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['m']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['m']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['m']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['m']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['m']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['m']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['m']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['m']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['m']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['m']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['m']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['m']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['m']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['m']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['m']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['total']);
?>
                                            <option style="padding:5px;" value="<?php echo $_smarty_tpl->tpl_vars['MONEDAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['m']['index']]['idMoneda'];?>
" <?php if ($_smarty_tpl->tpl_vars['MONEDAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['m']['index']]['idMoneda']=="DOL") {?> selected<?php }?>><?php echo smarty_modifier_capitalize(mb_strtolower($_smarty_tpl->tpl_vars['MONEDAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['m']['index']]['descripcion'], 'UTF-8'));?>
</option>
                                        <?php endfor; endif; ?>
                                        </select>
                                    </span>                                
                                </div>                                   
                                  
                              </td>
                          </tr>                          
                          
                          <tr>
                              <th>Monto*</th>
                              <td>
                                <div class="pull-left control-group" id="input-Monto">
                                    <input type="text" class="input-block-level" id="monto" name="monto" value="" style="text-align:right;">
                                </div>                                 
                              </td>
                          </tr>
                          <tr>
                              <th>Desgloce</th>
                              <td>
                                  <div class="pull-left" id="box-desgloMonto" style="padding: 0;">                                                                            
                                      <button type="button" class="btn btn-mini btn-success pull-left" id="btnAddInputDes"><b>+</b></button>                                    
                                  </div>
                                  <div class="pull-left" id="btn-desgloMonto" style="padding-top:5px; padding-left:5px;">                                                        
                                </div>                                 
                              </td>
                          </tr>
                          <tr>
                              <th>Fecha Pago</th>
                              <td>
                                <div class="pull-left control-group" id="input-fechaPago">
                                    <input type="text" class="input-block-level datepicker" id="fechaPago" name="fechaPago" value="">
                                </div>                                 
                              </td>
                          </tr>                                                      
                          <tr>
                              <th>Comentario</th>
                              <td>
                                  <textarea class="input-block-level" placeholder="(opcional)" id="comments" name="comments" rows="1" style="margin-top:0px; resize: none;"></textarea> 
                              </td>
                          </tr>


                      </tbody>
                    </table>                    

                </div>
                <div class="modal-footer clearfix">
                    <div id="message-newDoc">

                    </div>    
                    <button type="button" class="btn btn-info" id="addDocument" name="addDocument"><i class="fa fa-check-square-o"></i> Agregar</button>
                    <input type="hidden" name="actionModal" id="actionModal" value="save">
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
// Agosto 11, William. Se pone en comentario las dos lineas de abajo para que el usuario pueda
// seleccionar una fecha previo al dia del sistema. Por que el documento que va a registrar puede tener
// una fecha inferior. Por ejemplo, lo recibio ayer y tarde y lo registra hasta hoy.
//           ,           
//           startDate: new Date()
        });        
      
        var cache = {  
            $tblDocs     : $("#tblDocs"),
            $idPedido    : $("#numIdPedido"),                         
            $selDocument : $("#docsList"),
            $date        : $("#dateDocument"),
            $fechaPago   : $("#fechaPago"),
            $noDocument  : $("#noDocument"), 
            $monto       : $("#monto"), 
            $selMoneda   : $("#selMoneda"),             
            $comment     : $("#comments"),
            $boxdesgloMonto : $("#box-desgloMonto"),
            $btnAddDes   : $("#btnAddInputDes"),
            $btnEditDes   : $(".btnEditDocument"),
            $actionModal   : $("#actionModal")
        };       
      
        cache.$btnAddDes.on("click", function (f){
            
            var inputDes = '<input type="text" class="desmonto input-block-level" name="desmonto[]" value="" style="text-align:right;"><br class="dmBr">';            
            cache.$boxdesgloMonto.append(inputDes);            
            
            $('.desmonto').number( true, 2 );
            $(".desmonto").focus();
            
        });
      
        cache.$btnEditDes.on("click", function (f){
            resetModal();
            
            $("#ntitleModal").text("Actualizar Documento");
            $("#ntextnext").text("Modificar documento del pedido");
            $("#addDocument").text("Actualizar");
            
            $("#actionModal").val("update");
            var infoDoc = $(this).attr("data");
            var dataDoc = infoDoc.split("|"); 
            
            var idPedido = dataDoc[0];
            var idNumDoc = dataDoc[1];
            var idFecDoc = dataDoc[2];
                        
            var infoDocument = {
                    url: "editDoc.php",
                    async: true,
                    cache: false,                    
                    data: "idPedido="+idPedido+"&idNumDoc="+idNumDoc+"&idFecDoc="+idFecDoc,
                    type: "POST",
                    dataType: "json",
                    success: function(data){
                        
                        $('#docsList option[value='+data.idTipoDoc+']').attr('selected','selected');
                        $('#docsList').prop('disabled',true);
                        $("#dateDocument").val(data.fecDoc);
                        $("#dateDocument").attr('disabled','disabled');
                        $("#noDocument").val(data.numDoc);   
                        $("#noDocument").attr('disabled','disabled');
                        $('#selMoneda option[value='+data.idMoneda+']').attr('selected','selected');
                        $('#selMoneda').prop('disabled',true);
                        $("#monto").val(data.montoDoc)
                        
                        var allMontos = data.desMontos;
                        var inputsList = "";
                        allMontos.forEach(function(entry) {
                            inputsList += '<input type="text" class="desmonto input-block-level pull-left" name="desmonto[]" value="'+entry+'" style="text-align:right;"><br class="dmBr">';                                        
                        });                        
                        cache.$boxdesgloMonto.append(inputsList); 
                        $('.desmonto').number( true, 2 );
                        $("#fechaPago").val(data.fechaPago)
                        $("#comments").val(data.comentario)
                        
                        $('#newDoc-modal').modal('toggle');                         
                        
                    }            
            
                
            };
            $.ajax(infoDocument);             
            
        });
      

      
        $("#boxSelectDocs").on("click", function (x){
            var cont = 0;
            $("[id*='docsList_chzn_o_']").each(function() {
              if( $("#"+"docsList_chzn_o_"+cont).hasClass("result-selected")){                                                     
                  $("#"+"docsList_chzn_o_"+cont).removeClass("highlighted");
              }
              cont++;
            }); 
            $("#newDoc").find('ul.chzn-results').find("li#docsList_chzn_o_0").addClass("result-selected");
            $("#newDoc").find('ul.chzn-results').find("li#docsList_chzn_o_0").addClass("highlighted");
        });
      
        $("#btnNewDocument").on("click", function (e){
            
            e.preventDefault();
            resetModal();
        });
        
        
        $("#addDocument").on("click", function (e){
            /*
            $("[class*='desmonto']").each(function() {
            });  
            */
           
            //
            //alert('adddocument click');
            
            // Octubre 10, 2014 William Jimenez
            // Se agrega la validacion de los campos de la pantalla modal donde se solicitan los campos
            // para el nuevo documento que se desea agregar.
            //
            
            // se inicializa a con false, no hay errores
            var errors = false;
            var msgError ='';

            // numero de documento es obligatorio
            var newNumDoc   = $("#noDocument").val();
            if(newNumDoc == ""){
                $("#input-noDocument").addClass("error");
                msgError = 'Numero Documento requerido';
                errors = true;
            }else{
                $("#input-noDocument").removeClass("error");
            }

                // el monto es obligario
                var newMonto = $("#monto").val();
                
            if(newMonto == ""){
                $("#input-Monto").addClass("error");
                msgError = 'Monto de Documento requerido';
                errors = true;
            }else{
                $("#input-Monto").removeClass("error");
                //
                // Si el usuario hizo desglose de montos, la suma de ellos debe ser igual al monto indicado
                //totMontoDesgloce=strToMonto($("#desmonto1").val())+strToMonto($("#desmonto2").val())+strToMonto($("#desmonto2").val())+strToMonto($("#desmonto4").val())+strToMonto($("#desmonto5").val());
                //totMontoDesgloce=strToMonto($("#desmonto1").val())+strToMonto($("#desmonto2").val())+strToMonto($("#desmonto3").val())+strToMonto($("#desmonto4").val())+strToMonto($("#desmonto5").val())+strToMonto($("#desmonto6").val())+strToMonto($("#desmonto7").val())+strToMonto($("#desmonto8").val())+strToMonto($("#desmonto9").val())+strToMonto($("#desmonto10").val())+strToMonto($("#desmonto11").val())+strToMonto($("#desmonto12").val());    
                totMontoDesgloce=0;                    
                $("[class*='desmonto']").each(function() {
                    totMontoDesgloce += strToMonto($(this).val());
                });                  
                
                totMontoConvertido=parseFloat(totMontoDesgloce).toFixed(2);
                newMontoConvertido=parseFloat(newMonto).toFixed(2);
                if ((totMontoConvertido !==parseFloat('0.00').toFixed(2)) && (totMontoConvertido != newMontoConvertido)){
                        $("#input-Monto").addClass("error");
                        msgError = 'Desglose '+totMontoConvertido+' debe ser igual monto '+newMonto;
	       errors = true;		                
            	}
            }
            // la fecha es obligario
            var newdateDocument = $("#dateDocument").val();
            if(newdateDocument == ""){
                $("#input-dateDocument").addClass("error");
                msgError = 'Fecha Documento requerido';
                errors = true;
            }else{
                $("#input-dateDocument").removeClass("error");
            }

            // el tipo de moneda es obligatorio
            var newselMoneda = $("#selMoneda").val();
            if(newselMoneda == "0"){
                $("#input-selMoneda").addClass("error");
                msgError = 'Tipo de Moneda requerido';
                errors = true;
            }else{
                $("#input-selMoneda").removeClass("error");
            }

            // el tipo de documento es obligatorio            			
            var newdocsList = $("#docsList").val();
            if(newdocsList == "0"){
                $("#boxSelectDocs").addClass("error");
                msgError = 'Tipo de Documento requerido';
                errors = true;
            }else{
                $("#boxSelectDocs").removeClass("error");
            }


            if(errors != true){   
                var allMontos = []; 
                $("[class*='desmonto']").each(function() {   
                    if($(this).val() != ""){
                        allMontos.push($(this).val());  
                    }
                    
                });                 
                
            var infoDocument = {
                    url: "saveDocs.php",
                    async: true,
                    cache: false,
                    /*data: "idPedido="+cache.$idPedido.val()+"&idDocumento="+cache.$selDocument.val()+"&nameDoc="+$('#docsList option:selected').text()+"&dateDocument="+cache.$date.val()+"&fechaPago="+cache.$fechaPago.val()+"&noDocument="+cache.$noDocument.val()+"&monto="+cache.$monto.val()+"&selMoneda="+cache.$selMoneda.val()+"&comment="+cache.$comment.val()+"&desmonto1="+cache.$desmonto1.val()+"&desmonto2="+cache.$desmonto2.val()+"&desmonto3="+cache.$desmonto3.val()+"&desmonto4="+cache.$desmonto4.val()+"&desmonto5="+cache.$desmonto5.val()+"&desmonto6="+cache.$desmonto6.val()+"&desmonto7="+cache.$desmonto7.val()+"&desmonto8="+cache.$desmonto8.val()+"&desmonto9="+cache.$desmonto9.val()+"&desmonto10="+cache.$desmonto10.val()+"&desmonto11="+cache.$desmonto11.val()+"&desmonto12="+cache.$desmonto12.val(),*/
                    data: "idPedido="+cache.$idPedido.val()+"&idDocumento="+cache.$selDocument.val()+"&nameDoc="+$('#docsList option:selected').val()+"&dateDocument="+cache.$date.val()+"&fechaPago="+cache.$fechaPago.val()+"&noDocument="+cache.$noDocument.val()+"&monto="+cache.$monto.val()+"&selMoneda="+cache.$selMoneda.val()+"&comment="+cache.$comment.val()+"&allDesMontos="+allMontos+"&action="+cache.$actionModal.val(),
                    type: "POST",
                    dataType: "json",
                    success: function(data){
                        //alert(data);
                        
                        if(data.actionPast !="update"){
                            var htmlTable = "";                        
                            var pageAnt = parseInt($("#count-numRow").val());            
                            var numRow = parseInt($("#count-numRow").val())+ 1;                        
                            htmlTable += "<tr class='numRow"+numRow+"'>";
                            htmlTable += "        <td class='evaldateDoc'><br><div style='margin-top:4px; '>"+data.fecha+"</div></td>";
                            htmlTable += "        <td class='evalUser'>";
                            htmlTable += "            <br><div style='margin-top:4px; '>"+data.usuario+"</div>";
                            htmlTable += "        </td>";
                            htmlTable += "        <td class='evalDoc'>";
                            htmlTable += "            <br><div style='margin-top:4px; '>"+data.documento+"</div>";
                            htmlTable += "        </td>";
                            htmlTable += "        <td class='evalComment' style='width:50px'>";
                            htmlTable += "            <div class='pull-left control-group' id='row-input-comment' style='margin-right:3px;'>";
                            htmlTable += "                <br><input title='"+data.comentario+"' data-rel='tooltip' class='input-medium' id='row-comment'  name='row-comment'  type='text' value='"+data.comentario+"' style='border:none; background:#fff; cursor: text;' readonly=''>";
                            htmlTable += "            </div>";
                            htmlTable += "        </td>";
                            htmlTable += "        <td class='evalMonto'>";
                            htmlTable += "            <br><div style='width:20px;'>"+data.monto+"</div>";
                            htmlTable += "        </td>";
                            htmlTable += "        <td class='evalMoneda'>";
                            htmlTable += "            <br><div style='width:20px;'>"+data.moneda+"</div>";
                            htmlTable += "        </td>";
                            htmlTable += "        <td class='evalActions'>";
                            htmlTable += "            <br>";
                            htmlTable += "            <!--";
                            htmlTable += "            <a style='cursor: pointer;' class='pull-right'><span class='icon icon-color icon-remove'></span></a>";
                            htmlTable += "            <a style='cursor: pointer; margin-right:3px;' class='pull-right'><span class='icon icon-color icon-edit'></span></a>";
                            htmlTable += "            -->";                            
                            htmlTable += "            <a class='btnEditDocument' style='cursor: pointer;' data='"+data.idPedido+"|"+data.numDoc+"|"+data.fecDoc+"'><i class='icon icon-color icon-edit'></i></a>";
                            htmlTable += "        </td>";
                            htmlTable += "</tr>";
    
                            cache.$tblDocs.find("tr.none").after(htmlTable);        

                            $("#count-numRow").val(numRow);
                        }else{
                            window.location.href = "docsRegister.php?id="+cache.$idPedido.val();
                        }
                        
                        $('#newDoc-modal').modal('toggle');                         
                        
                    }            
            
                
            };
            $.ajax(infoDocument);
            }else{
                $("#message-newDoc").html("<div class='alert alert-error pull-left'><strong><span class='icon icon-red icon-alert'/></span> <strong>"+msgError+"</strong></div>");
                return false;
            } // if(errors != true)
           
        });
        
      
    });
    function strToMonto(pMonto){
    	  $var = pMonto;    
    	  if(isEmpty($var)) {    
    	        // It's empty
    		return parseFloat("0.00");
    	    
    	  }
    	  else {    
    	        // It's not empty
    		return parseFloat($var);    
    	    }
    	}
    function isEmpty( inputStr ) { 
        if ( null == inputStr || "" == inputStr ) { return true; } return false; 
    }
    
     function resetModal(){            
         
            $("#ntitleModal").text("Nuevo Documento");
            $("#ntextnext").text("Registrar documento al pedido");
            $("#addDocument").text("Agregar");         
         
            $("#message-newDoc").html("");
            $('#docsList').prop('selectedIndex',0);  
            $('#docsList').prop('disabled',false);
            var textReset = $("#docsList option:selected").text();                     
            $('#comments').val("");
            $('#dateDocument').val("");              
            $("#dateDocument").removeAttr('disabled');
            $('#fechaPago').val("");
            $('#noDocument').val("");
            $("#noDocument").removeAttr('disabled');
            $('#monto').val("");  
            $('#monto').number( true, 2 );
            $('#selMoneda').prop('selectedIndex',2);    
            $('#selMoneda').prop('disabled',false);
            $(".desmonto").remove();
            $(".dmBr").remove(); 
            $("#actionModal").val("save");
     }
    
</script>
<?php }} ?>
