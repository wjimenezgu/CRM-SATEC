<?php /* Smarty version Smarty-3.1.16, created on 2016-06-04 10:09:44
         compiled from "../reparaciones/view/frmEventRegister.tpl" */ ?>
<?php /*%%SmartyHeaderCode:56704252755f9a26f5c8f32-03885112%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3182200ae505c7ca572be2a5aa10c671284d2355' => 
    array (
      0 => '../reparaciones/view/frmEventRegister.tpl',
      1 => 1457810180,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '56704252755f9a26f5c8f32-03885112',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_55f9a26f779b23_48953639',
  'variables' => 
  array (
    'NAV_MENU' => 0,
    'REGISTER' => 0,
    'ID_PEDIDO' => 0,
    'ID_TIENDA' => 0,
    'PED_HEADER' => 0,
    'ALL_EVENTOS' => 0,
    'EVENTOS' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f9a26f779b23_48953639')) {function content_55f9a26f779b23_48953639($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include '/var/www/html/CRM-SATEC/resources/libs/smarty/libs/plugins/modifier.capitalize.php';
?><?php echo $_smarty_tpl->tpl_vars['NAV_MENU']->value;?>

<div class="row-fluid">
        <div class="box span12">
                <div class="box-header well" data-original-title>
                        <h2><i class="icon icon-black icon-book"></i> REGISTRO DE EVENTOS</h2>
                </div>
                <div class="box-content">
                    <form class="form-horizontal" action="#" id="frm-eventRegister" method="post">
                    <input type="hidden" name="count-numRow" id="count-numRow" value="<?php echo $_smarty_tpl->tpl_vars['REGISTER']->value;?>
">
                    <input type="hidden" name="numIdPedido" id="numIdPedido" value="<?php echo $_smarty_tpl->tpl_vars['ID_PEDIDO']->value;?>
">
                    <input type="hidden" name="idTienda" id="idTienda" value="<?php echo $_smarty_tpl->tpl_vars['ID_TIENDA']->value;?>
">
                    <legend style="height:35px; text-align:right;">                                                
						<button type="button" class="btn btn-small btn-success" id="btnNewEvent" data-toggle="modal" data-target="#newEvent-modal"><i class="icon-plus icon-white"></i> Agregar Evento</button>
                    </legend>
                        
                    <div class="row-fluid">

                        <div class="span4">                                                   
                            
                            <div class="row-fluid" >
                                    <div class="span6">No. Boleta:</div>
                                    <div class="span6">                                        
                                        <div class="pull-left control-group" id="input-datePedido">
                                            <input type="text"   class="input-block-level" id="numOrder"   name="numOrder"   value="<?php echo $_smarty_tpl->tpl_vars['PED_HEADER']->value[0]['idReparacion'];?>
" readonly="">
                                            <input type="hidden" id="h_numOrder" name="h_numOrder" value="<?php echo $_smarty_tpl->tpl_vars['PED_HEADER']->value[0]['idReparacion'];?>
">
                                        </div>
                                    </div>
                            </div>                                              
                            
                        </div>
                                        
                        <div class="span4">                                                   
                            
                            <div class="row-fluid" >
                                    <div class="span6">Cliente:</div>
                                    <div class="span6">                                        
                                        <div class="pull-left control-group" id="input-datePedido">
                                            <input type="text" class="input-block-level"   id="nameProveedor" name="nameProveedor"     value="<?php echo $_smarty_tpl->tpl_vars['PED_HEADER']->value[0]['nombre'];?>
" readonly="">
                                            <input type="hidden" id="h_nameProveedor" name="h_nameProveedor" value="<?php echo $_smarty_tpl->tpl_vars['PED_HEADER']->value[0]['nombre'];?>
">
                                        </div>
                                    </div>
                            </div>                                              
                            
                        </div>
                                        
                        <div class="span4">                                                   
                            
                            <div class="row-fluid" >
                                    <div class="span6">Fecha Recibido::</div>
                                    <div class="span6">                                        
                                        <div class="pull-left control-group" id="input-datePedido">
                                            <input type="text"   class="input-block-level" id="datePedido" name="datePedido"   value="<?php echo $_smarty_tpl->tpl_vars['PED_HEADER']->value[0]['FechaRecibido'];?>
" readonly="">
                                            <input type="hidden" id="datePedido" name="h_datePedido" value="<?php echo $_smarty_tpl->tpl_vars['PED_HEADER']->value[0]['FechaRecibido'];?>
">
                                        </div>
                                    </div>
                            </div>                                                       
                            
                        </div>    

                    </div> 

                    <div class="row-fluid">
                            <div class="box span12">
                                    <div class="box-header well" data-original-title>
                                            <h2>Eventos de la Reparación</h2>
                                    </div>
                                    <div class="box-content" id="box-frmEvents">

                                        
                                        <table class="table table-striped tabs-content-inner" id="tblEvents">
							  <thead>
								<tr>
                                                                    <th>Fecha</th>
                                                                    <th>Usuario</th>
                                                                    <th>Evento</th>
                                                                    <th>Comentario</th>                                          
                                                                    <th>Días</th>                                          
                                                                    <th></th>                                          
                                                                      
                                                                </tr>
							  </thead>    
							  <tbody> 
                                                                <tr class="none"></tr>
                                                                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['e'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['e']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['ALL_EVENTOS']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                                                                        <td class="evaldateEvent"><br><div style="margin-top:4px; "><?php echo $_smarty_tpl->tpl_vars['ALL_EVENTOS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']]['fecEvento'];?>
</div></td>
                                                                        <td class="evalUser">
                                                                            <br><div style="margin-top:4px; "><?php echo $_smarty_tpl->tpl_vars['ALL_EVENTOS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']]['userInsEvento'];?>
</div>
                                                                        </td>
                                                                        <td class="evalEvent">

                                                                            <br><div style="margin-top:4px; "><?php echo $_smarty_tpl->tpl_vars['ALL_EVENTOS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']]['idEvento'];?>
 | <?php echo smarty_modifier_capitalize(mb_strtolower($_smarty_tpl->tpl_vars['ALL_EVENTOS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']]['descripcion'], 'UTF-8'));?>
</div>
                                                                            
                                                                        </td>
                                                                        <td class="evalComment" style="width:50px">
                                                                            <div class="pull-left control-group" id="row-input-comment" style="margin-right:3px;">
                                                                                <br><input title="<?php echo $_smarty_tpl->tpl_vars['ALL_EVENTOS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']]['comentario'];?>
" data-rel="tooltip" class="input-large" id="row-comment"  name="row-comment"  type="text" value="<?php echo $_smarty_tpl->tpl_vars['ALL_EVENTOS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']]['comentario'];?>
" style="border:none; background:#fff; cursor: text;" readonly="">
                                                                            </div>
                                                                        </td>
                                                                        <td class="evalDias">
                                                                            <br><div style="width:10px;"><?php echo $_smarty_tpl->tpl_vars['ALL_EVENTOS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']]['dias'];?>
</div>
                                                                        </td>                                                                        
                                                                        <td class="evalActions">
                                                                            <br>
                                                                            <!--
                                                                            <a style="cursor: pointer;" class="pull-right"><span class="icon icon-color icon-remove"></span></a>
                                                                            <a style="cursor: pointer; margin-right:3px;" class="pull-right"><span class="icon icon-color icon-edit"></span></a>
                                                                            -->
                                                                        </td>
                                                                        
								</tr> 
                                                                <?php endfor; endif; ?>
<!--  Se pasa para arriba                                                                
                                                                <tr>
                                                                     <td colspan="3">
                                                                     </td>
                                                                     <td colspan="4" style="text-align:right;">                                                                         
                                                                         <button type="button" class="btn btn-small btn-success" id="btnNewEvent" data-toggle="modal" data-target="#newEvent-modal"><i class="icon-plus icon-white"></i> Agregar Evento</button>
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
<div class="modal fade" id="newEvent-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3 class="modal-title blue"><i class="fa fa-bars"></i> Nuevo Evento</h3>
                <br />
                <p>Registrar evento a Reparación</p>
            </div>
            <form method="post" id="frm-newEvent">
                <div class="modal-body" id="newEvent">

                    <table class="table table-condensed">
                      <tbody> 

                          <tr>
                              <th>Evento</th>
                              <td>  
                                  
                                <div class="input-prepend pull-left" id="boxSelectEvents">
                                    <span class="add-on" style="padding:0px; height:26px; margin:0px 3px 3px 0px;">                                    
                                        <select id="eventList" name="eventList" data-rel="chosen" style="height:25px;">
                                             <option value="0">- Seleccione un Evento -</option>
                                             <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['e'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['e']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['EVENTOS']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                                             <option value="<?php echo $_smarty_tpl->tpl_vars['EVENTOS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']]['idEvento'];?>
"><?php echo smarty_modifier_capitalize(mb_strtolower($_smarty_tpl->tpl_vars['EVENTOS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']]['descripcion'], 'UTF-8'));?>
</option>
                                             <?php endfor; endif; ?>
                                         </select> 
                                    </span>                                
                                </div>                                    

                              </td>
                          </tr>
                          <tr>
                              <th>Comentario</th>
                              <td>
                                 <textarea class="input-block-level" id="comments" name="comments" rows="3" style="margin-top:0px; height:135px; resize: none;"></textarea> 
                              </td>
                          </tr>

                      </tbody>
                    </table>                    

                </div>
                <div class="modal-footer clearfix">
                    <div id="message-newArticle">

                    </div>    
                    <button type="button" class="btn btn-info" id="addEvent" name="addEvent"><i class="fa fa-check-square-o"></i> Agregar</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



<script type="text/javascript">
    $(document).ready(function(){
      
        var cache = {
            $idTienda  : $("#idTienda"),
            $idReparacion  : $("#numIdPedido"),
            $tblEvents : $("#tblEvents"),
            $selEvento : $("#eventList"),
            $comment   : $("#comments")
        };       
      
        
      
        $("#boxSelectEvents").on("click", function (x){
                       var cont = 0;
            $("[id*='eventList_chzn_o_']").each(function() {
              if( $("#"+"eventList_chzn_o_"+cont).hasClass("result-selected")){                                                     
                  $("#"+"eventList_chzn_o_"+cont).removeClass("highlighted");
              }
              cont++;
            }); 
            $("#newEvent").find('ul.chzn-results').find("li#eventList_chzn_o_0").addClass("result-selected");
            $("#newEvent").find('ul.chzn-results').find("li#eventList_chzn_o_0").addClass("highlighted");
        });
      
        $("#btnNewEvent").on("click", function (e){
            
            $('#eventList').prop('selectedIndex',0);             
            var textReset = $("#eventList option:selected").text();
            
            $("#newEvent").find('a.chzn-single').find("span").text(textReset);            
            $('#comments').val("");
            
        });                
                
        
        $("#addEvent").on("click", function (e){
            
            
            var infoEvent = {
                    url: "saveEvent.php",
                    async: true,
                    cache: false,
                    data: "idReparacion="+cache.$idReparacion.val()+"&idEvento="+cache.$selEvento.val()+"&nameEvent="+$('#eventList option:selected').text()+"&comment="+cache.$comment.val(),
                    type: "POST",
                    dataType: "json",
                    success: function(data){
                        //alert("Se almacena la info\nPENDIENTE: Mostrar el evento registrado");
                        var htmlTable = "";
                        //alert(data);
                        var pageAnt = parseInt($("#count-numRow").val());            
                        var numRow = parseInt($("#count-numRow").val())+ 1;                        

                        htmlTable += "<tr class='numRow"+numRow+"' id='register'>";
                        htmlTable += "        <td class='evaldateEvent'><br><div style='margin-top:4px; '>"+data.fecha+"</div></td>";
                        htmlTable += "        <td class='evalUser'>";
                        htmlTable += "            <br><div style='margin-top:4px; '>"+data.usuario+"</div>";
                        htmlTable += "        </td>";
                        htmlTable += "        <td class='evalEvent'>";
                        htmlTable += "            <br><div style='margin-top:4px; '>"+data.evento+"</div>";
                        htmlTable += "        </td>";
                        htmlTable += "        <td class='evalComment' style='width:50px'>";
                        htmlTable += "            <div class='pull-left control-group' id='row-input-comment' style='margin-right:3px;'>";
                        htmlTable += "                <br><input title='"+data.comentario+"' data-rel='tooltip' class='input-large' id='row-comment'  name='row-comment'  type='text' value='"+data.comentario+"' style='border:none; background:#fff; cursor: text;' readonly=''>";
                        htmlTable += "            </div>";
                        htmlTable += "        </td>";
                        htmlTable += "        <td class='evalDias'>";
                        htmlTable += "            <br><div style='width:20px;'>"+data.dias+"</div>";
                        htmlTable += "        </td>";
                        htmlTable += "        <td class='evalActions'>";
                        htmlTable += "            <br><!--";
                        htmlTable += "            <a style='cursor: pointer;' class='pull-right'><span class='icon icon-color icon-remove'></span></a>";
                        htmlTable += "            <a style='cursor: pointer; margin-right:3px;' class='pull-right'><span class='icon icon-color icon-edit'></span></a>";
                        htmlTable += "        --></td>";
                        htmlTable += "</tr>";                        
                        
                        cache.$tblEvents.find("tr.none").after(htmlTable);        
                            
                        $("#count-numRow").val(numRow);                       
                        $('#newEvent-modal').modal('toggle'); 
                        
                    }            
            
                
            };
            $.ajax(infoEvent);
           
        });
        
      
    });    
</script>
<?php }} ?>
