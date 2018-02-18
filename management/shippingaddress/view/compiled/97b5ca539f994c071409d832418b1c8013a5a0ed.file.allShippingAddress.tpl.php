<?php /* Smarty version Smarty-3.1.16, created on 2016-03-18 13:26:23
         compiled from "../shippingaddress/view/allShippingAddress.tpl" */ ?>
<?php /*%%SmartyHeaderCode:68913430053de8258449f00-55351570%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97b5ca539f994c071409d832418b1c8013a5a0ed' => 
    array (
      0 => '../shippingaddress/view/allShippingAddress.tpl',
      1 => 1457810183,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '68913430053de8258449f00-55351570',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53de82584d0912_29296708',
  'variables' => 
  array (
    'NAV_MENU' => 0,
    'SHIPPINGADDRESS_LIST' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53de82584d0912_29296708')) {function content_53de82584d0912_29296708($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include '/var/www/html/CRM-SATEC/resources/libs/smarty/libs/plugins/modifier.capitalize.php';
?><?php echo $_smarty_tpl->tpl_vars['NAV_MENU']->value;?>

<div class="row-fluid sortable">		
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2>Admnistración de Direccion de Entrega</h2>
        </div>
        <div class="box-content">

            <button type="button" class="btn btn-small btn-success" id="addNewRow" onclick="window.location ='add.php'" style="margin-bottom:12px;"><i class="icon-plus icon-white"></i> Agregar</button>

            <table class="table table-striped table-bordered bootstrap-datatable">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Descripcion</th>
                        <th>Linea 1</th>
                        <th>Linea 2</th>
                        <th>Linea 3</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['name'] = 'lP';
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['SHIPPINGADDRESS_LIST']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                    <tr style="padding:0px;" id="tr<?php echo $_smarty_tpl->tpl_vars['SHIPPINGADDRESS_LIST']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['id'];?>
"> 
                        <td style="width:40px;"><?php echo $_smarty_tpl->tpl_vars['SHIPPINGADDRESS_LIST']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['id'];?>
</td>                                                                          
                        <td style="width:385px;" align="left">
                            <a  style="color:#004C66;" href="edit.php?id=<?php echo $_smarty_tpl->tpl_vars['SHIPPINGADDRESS_LIST']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['id'];?>
" onclick=""><?php echo smarty_modifier_capitalize(mb_strtolower($_smarty_tpl->tpl_vars['SHIPPINGADDRESS_LIST']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['descripcion'], 'UTF-8'));?>
</a>
                        </td>
                        <td style="width:180px;"><?php echo $_smarty_tpl->tpl_vars['SHIPPINGADDRESS_LIST']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['linea1'];?>
</td>    								    								 
                        <td style="width:180px;"><?php echo $_smarty_tpl->tpl_vars['SHIPPINGADDRESS_LIST']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['linea2'];?>
</td>
                        <td style="width:180px;"><?php echo $_smarty_tpl->tpl_vars['SHIPPINGADDRESS_LIST']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['linea3'];?>
</td>                        
                        <td class="center">
                            <a href="#" class="btn-setting" onclick="loadInfoShippingAddress(<?php echo $_smarty_tpl->tpl_vars['SHIPPINGADDRESS_LIST']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['id'];?>
,'<?php echo $_smarty_tpl->tpl_vars['SHIPPINGADDRESS_LIST']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['descripcion'];?>
');"><i class="icon icon-color icon-remove"></i></a>
                        </td>
                    </tr> 
                    <?php endfor; endif; ?>
                </tbody>
            </table>  

        </div>
    </div><!--/span-->

</div><!--/row-->
<div class="modal hide fade" id="myModal">
        <div class="modal-header" >
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h3 id="textMessage"></h3>
        </div>
        <!-- 
        <div class="modal-body">
                <p>Direccion a borrar...</p>
        </div>
        -->
        <div class="modal-footer">
                <a href="#" class="btn" data-dismiss="modal">No</a>
                <a href="#" class="btn btn-primary idShp" onclick="confirmDelete();" id="0">Si</a>
        </div>
</div>

<script type="text/javascript">


        function loadInfoShippingAddress(id,descripcion){

                $("#textMessage").html("Realmente desea eliminar a "+descripcion+ " ("+id+")  ?");
                $(".idShp").attr("id", id);

        }

        function confirmDelete(){
                var idShipAdd = $(".idShp").attr("id");
                var properties = {
                                   url: "delete.php",
                                   async: true,
                                   cache: false,
                                   data: "id="+idShipAdd,
                                   type: "POST",
                                   success: function(data){
                     	                             if (data==0) {
	                                                          $("#tr"+idShipAdd).html("");
                                                              // cerrar la ventana del popup
                                                              $("#myModal").modal('toggle');							
                                                         }
                                                     else {
                                                         alert("No se puede eliminar");
                                                           }
                                            }
                                 };            
                $.ajax(properties);
        }



</script><?php }} ?>
