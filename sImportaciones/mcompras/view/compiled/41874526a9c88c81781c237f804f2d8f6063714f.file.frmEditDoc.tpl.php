<?php /* Smarty version Smarty-3.1.16, created on 2014-12-20 08:50:55
         compiled from "../mcompras/view/frmEditDoc.tpl" */ ?>
<?php /*%%SmartyHeaderCode:208226458254341db806f4e2-44753572%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41874526a9c88c81781c237f804f2d8f6063714f' => 
    array (
      0 => '../mcompras/view/frmEditDoc.tpl',
      1 => 1419087032,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '208226458254341db806f4e2-44753572',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_54341db80e6698_10264999',
  'variables' => 
  array (
    'NAV_MENU' => 0,
    'ID_PEDIDO' => 0,
    'FEC_DOC' => 0,
    'NUM_DOC' => 0,
    'DOCU_PEDIDO' => 0,
    'TIPO_DOCS' => 0,
    'MONEDAS' => 0,
    'PED_DOC_DESGLOSE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54341db80e6698_10264999')) {function content_54341db80e6698_10264999($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include '/var/www/CRM-SATEC/resources/libs/smarty/libs/plugins/modifier.capitalize.php';
?><?php echo $_smarty_tpl->tpl_vars['NAV_MENU']->value;?>

			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2>Información del Documento</h2>
					</div>
					<div class="box-content">
						<form class="form-horizontal" id="frmEditDoc" action="updateDoc.php" method="POST">
 			 <fieldset>
 			 		<input type="hidden" name="numIdPedido" id="numIdPedido" value="<?php echo $_smarty_tpl->tpl_vars['ID_PEDIDO']->value;?>
">
 			 		<input type="hidden" name="dateDocument" id="dateDocument" value="<?php echo $_smarty_tpl->tpl_vars['FEC_DOC']->value;?>
"> 			 		 			 		
 			 		<input type="hidden" name="noDocument" id="noDocument" value="<?php echo $_smarty_tpl->tpl_vars['NUM_DOC']->value;?>
">
 			 		<input type="hidden" name="docsList" id="docsList" value="<?php echo $_smarty_tpl->tpl_vars['DOCU_PEDIDO']->value[0]['idTipoDoc'];?>
">
                    <table class="table table-condensed">
                      <tbody> 

                          <tr>
                              <th>Documento</th>
                              <td>  
                                  
                                <div class="input-prepend pull-left" id="boxSelectDocs" >
                                    <span class="add-on" style="padding:0px; height:26px; margin:0px 3px 3px 0px;">                                    
                                        <select id="docsList" name="docsList" data-rel="chosen" style="height:25px; width:170px" disabled>
                                             <option value="0">- Tipo Documento -</option>
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
                                             <option value="<?php echo $_smarty_tpl->tpl_vars['TIPO_DOCS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']]['idTipoDocumento'];?>
" <?php if ($_smarty_tpl->tpl_vars['TIPO_DOCS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']]['idTipoDocumento']==((string)$_smarty_tpl->tpl_vars['DOCU_PEDIDO']->value[0]['idTipoDoc'])) {?> selected<?php }?>><?php echo smarty_modifier_capitalize(mb_strtolower($_smarty_tpl->tpl_vars['TIPO_DOCS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']]['descripcion'], 'UTF-8'));?>
</option>
                                             <?php endfor; endif; ?>
                                         </select> 
                                    </span>                                
                                </div>                                    

                              </td>
                          </tr>
                          <tr>
                              <th>Fecha</th>
                              <td>
                                <div class="pull-left control-group" id="input-dateDocument" >
                                    <input type="text" class="input-block-level datepicker" id="dateDocument" name="dateDocument" disabled value="<?php echo $_smarty_tpl->tpl_vars['FEC_DOC']->value;?>
">
                                </div>                                 
                              </td>
                          </tr>
                          <tr>
                              <th>No. Documento</th> 
                              <td>
                                <div class="pull-left control-group" id="input-noDocument" >
                                    <input type="text" class="input-block-level" id="noDocument" name="noDocument" disabled value="<?php echo $_smarty_tpl->tpl_vars['NUM_DOC']->value;?>
">
                                </div>                                 
                              </td>
                          </tr>
                          <tr>
                              <th>Moneda</th>
                              <td>

                                <div class="input-prepend pull-left" id="boxSelectMoneda">
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
" <?php if ($_smarty_tpl->tpl_vars['MONEDAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['m']['index']]['idMoneda']==((string)$_smarty_tpl->tpl_vars['DOCU_PEDIDO']->value[0]['idMoneda'])) {?> selected<?php }?>><?php echo smarty_modifier_capitalize(mb_strtolower($_smarty_tpl->tpl_vars['MONEDAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['m']['index']]['descripcion'], 'UTF-8'));?>
</option>
                                        <?php endfor; endif; ?>
                                        </select>
                                    </span>                                
                                </div>                                   
                                  
                              </td>
                          </tr>                          
                          
                          <tr>
                              <th>Monto</th>
                              <td>
                                <div class="pull-left control-group" id="input-Monto">
                                    <input type="text" class="input-mini input-block-level" id="monto" name="monto" style="text-align:right;" value="<?php echo $_smarty_tpl->tpl_vars['DOCU_PEDIDO']->value[0]['montoDoc'];?>
">
                                </div>                                 
                              </td>
                          </tr>
                          <tr>
                              <th>Desgloce</th>
                              <td>
                                <div class="pull-left control-group" id="input-desgloMonto">
                                    <input type="text" class="input-mini input-block-level" id="desmonto1" name="desmonto1" style="text-align:right;" value="<?php echo $_smarty_tpl->tpl_vars['PED_DOC_DESGLOSE']->value[0]['monto'];?>
"><br>
                                    <input type="text" class="input-mini input-block-level" id="desmonto2" name="desmonto2" style="text-align:right;" value="<?php echo $_smarty_tpl->tpl_vars['PED_DOC_DESGLOSE']->value[1]['monto'];?>
"><br>
                                    <input type="text" class="input-mini input-block-level" id="desmonto3" name="desmonto3" style="text-align:right;" value="<?php echo $_smarty_tpl->tpl_vars['PED_DOC_DESGLOSE']->value[2]['monto'];?>
"><br>
                                    <input type="text" class="input-mini input-block-level" id="desmonto4" name="desmonto4" style="text-align:right;" value="<?php echo $_smarty_tpl->tpl_vars['PED_DOC_DESGLOSE']->value[3]['monto'];?>
"><br>
                                    <input type="text" class="input-mini input-block-level" id="desmonto5" name="desmonto5" style="text-align:right;" value="<?php echo $_smarty_tpl->tpl_vars['PED_DOC_DESGLOSE']->value[4]['monto'];?>
"><br>
                                    <input type="text" class="input-mini input-block-level" id="desmonto6" name="desmonto6" style="text-align:right;" value="<?php echo $_smarty_tpl->tpl_vars['PED_DOC_DESGLOSE']->value[5]['monto'];?>
"><br>
                                    <input type="text" class="input-mini input-block-level" id="desmonto7" name="desmonto7" style="text-align:right;" value="<?php echo $_smarty_tpl->tpl_vars['PED_DOC_DESGLOSE']->value[6]['monto'];?>
"><br>
                                    <input type="text" class="input-mini input-block-level" id="desmonto8" name="desmonto8" style="text-align:right;" value="<?php echo $_smarty_tpl->tpl_vars['PED_DOC_DESGLOSE']->value[7]['monto'];?>
"><br>
                                    <input type="text" class="input-mini input-block-level" id="desmonto9" name="desmonto9" style="text-align:right;" value="<?php echo $_smarty_tpl->tpl_vars['PED_DOC_DESGLOSE']->value[8]['monto'];?>
"><br>
                                    <input type="text" class="input-mini input-block-level" id="desmonto10" name="desmonto10" style="text-align:right;" value="<?php echo $_smarty_tpl->tpl_vars['PED_DOC_DESGLOSE']->value[9]['monto'];?>
"><br>
                                    <input type="text" class="input-mini input-block-level" id="desmonto11" name="desmonto11" style="text-align:right;" value="<?php echo $_smarty_tpl->tpl_vars['PED_DOC_DESGLOSE']->value[10]['monto'];?>
"><br>
                                    <input type="text" class="input-mini input-block-level" id="desmonto12" name="desmonto12" style="text-align:right;" value="<?php echo $_smarty_tpl->tpl_vars['PED_DOC_DESGLOSE']->value[11]['monto'];?>
">
                                </div>                                 
                              </td>
                          </tr>
                          <tr>
                              <th>Fecha Pago</th>
                              <td>
                                <div class="pull-left control-group" id="input-fechaPago">
                                    <input type="text" class="input-block-level datepicker" id="fechaPago" name="fechaPago" value="<?php echo $_smarty_tpl->tpl_vars['DOCU_PEDIDO']->value[0]['fechaPago'];?>
">
                                </div>                                 
                              </td>
                          </tr>                                              
                          <tr>
                              <th>Comentario</th>
                              <td>
                                  <textarea class="input-block-level" placeholder="(opcional)" id="comments" name="comments" rows="1" style="margin-top:0px; resize: none;"><?php echo $_smarty_tpl->tpl_vars['DOCU_PEDIDO']->value[0]['comentario'];?>
</textarea> 
                              </td>
                          </tr>
                          <tr>
                          	<th></th>
                          	<td id="message-fields-obl"> </td> 
                          </tr>

                      </tbody>
                    </table>                    

		
 							<div class="modal-footer"> 								
								<button type="submit" name="enviar" class="btn btn-primary">Actualizar</button>
								<a href="docsRegister.php?id=<?php echo $_smarty_tpl->tpl_vars['ID_PEDIDO']->value;?>
" class="btn" data-dismiss="modal">Cerrar</a>
							  </div>  			
			
			</fieldset>
		  </form>			
		    </div>				
		</div>		
		</div>


<script type="text/javascript">
$(document).ready(function(){
    
    $('.datepicker').datepicker({
       language: "es",
       format:"dd/mm/yyyy",
       todayHighlight: true,
       autoclose: true
    });

    $('#monto').number( true, 2 ); 
    $('#desmonto1').number( true, 2 );
    $('#desmonto2').number( true, 2 );
    $('#desmonto3').number( true, 2 );
    $('#desmonto4').number( true, 2 );
    $('#desmonto5').number( true, 2 );
    $('#desmonto6').number( true, 2 );
    $('#desmonto7').number( true, 2 );
    $('#desmonto8').number( true, 2 );
    $('#desmonto9').number( true, 2 );
    $('#desmonto10').number( true, 2 );
    $('#desmonto11').number( true, 2 );
    $('#desmonto12').number( true, 2 );

           
});
$(function(){

    $.validator.addMethod("notEqual", function(value, element, param) {
        return this.optional(element) || value != param;
      }, "");  

    $.validator.addMethod("notEqualDesglo", function(value, element, param) {
        return this.optional(element) || value != param;
      }, "");   
	
    $('#frmEditDoc').validate({ 
        submitHandler: function (form) {             
            $("#message-fields-obl").css("display","none");
            form.submit();            
        }
    });
    
    $("#monto").rules('add', {
        required: function(){$("#input-Monto").removeClass("error"); return true;},
        messages: {
            required:  function(){
                               $("#input-Monto").addClass("error");
                               $("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Campo Requerido</strong></div>");
                            }
        }
    });

    
    $("#selMoneda").rules('add', {
        notEqual: 0,
        messages: {
            notEqual:  function(){                                   
                               $("#boxSelectMoneda").addClass("error");
                               $("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Moneda es Requerida</strong></div>");
                            }
        }
    });   
});

</script>
<?php }} ?>
