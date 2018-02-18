<?php /* Smarty version Smarty-3.1.16, created on 2016-03-16 14:31:51
         compiled from "../suppliers/view/allSuppliers.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16936249855212ce056e359-20560861%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2f9095fe1f8617cebba857d7126df5488e87622' => 
    array (
      0 => '../suppliers/view/allSuppliers.tpl',
      1 => 1457810185,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16936249855212ce056e359-20560861',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_55212ce0669da6_41069673',
  'variables' => 
  array (
    'NAV_MENU' => 0,
    'LISTA_PROVEEDORES' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55212ce0669da6_41069673')) {function content_55212ce0669da6_41069673($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include '/var/www/html/CRM-SATEC/resources/libs/smarty/libs/plugins/modifier.capitalize.php';
?><?php echo $_smarty_tpl->tpl_vars['NAV_MENU']->value;?>

<div class="row-fluid ">		
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2>Admnistración de Proveedores</h2>
        </div>
        <div class="box-content">

            <button type="button" class="btn btn-small btn-success" id="addNewRow" onclick="window.location ='add.php'" style="margin-bottom:12px;"><i class="icon-plus icon-white"></i> Agregar</button>

            <table class="table table-striped table-bordered bootstrap-datatable" id="tblSuppliersList">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Teléfono</th>
                        <th>Fax</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['name'] = 'lP';
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['LISTA_PROVEEDORES']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                    <tr style="padding:0px;" id="tr<?php echo $_smarty_tpl->tpl_vars['LISTA_PROVEEDORES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['idProveedor'];?>
"> 
                        <td style="width:40px;"><?php echo $_smarty_tpl->tpl_vars['LISTA_PROVEEDORES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['idProveedor'];?>
</td>                                                                          
                        <td style="width:385px;" align="left">
                            <a  style="color:#004C66;" href="edit.php?id=<?php echo $_smarty_tpl->tpl_vars['LISTA_PROVEEDORES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['idProveedor'];?>
" onclick=""><?php echo smarty_modifier_capitalize(mb_strtolower($_smarty_tpl->tpl_vars['LISTA_PROVEEDORES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['nombreProveedor'], 'UTF-8'));?>
</a>
                        </td>
                        <td style="width:180px;"><?php echo $_smarty_tpl->tpl_vars['LISTA_PROVEEDORES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['telefono'];?>
</td>    								    								 
                        <td style="width:180px;"><?php echo $_smarty_tpl->tpl_vars['LISTA_PROVEEDORES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['fax'];?>
</td>
                        <td class="center">
                            <a href="#" class="btn-setting" onclick="loadInfoProveedor(<?php echo $_smarty_tpl->tpl_vars['LISTA_PROVEEDORES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['idProveedor'];?>
,'<?php echo $_smarty_tpl->tpl_vars['LISTA_PROVEEDORES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['nombreProveedor'];?>
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
                <p>Proveedor a borrar...</p>
        </div>
        -->
        <div class="modal-footer">
                <a href="#" class="btn" data-dismiss="modal">No</a>
                <a href="#" class="btn btn-primary idPrv" onclick="confirmDelete();" id="0">Si</a>
        </div>
</div>

<script type="text/javascript">


        function loadInfoProveedor(idProveedor,nombreProveedor){

                $("#textMessage").html("Realmente desea eliminar a "+nombreProveedor+ " ("+idProveedor+")  ?");
                $(".idPrv").attr("id", idProveedor);

        }

        function confirmDelete(){
                var idProveedor = $(".idPrv").attr("id");
                //alert($(".idPrv").attr("id"));

                //$("#tr"+idProveedor).html("");

                var properties = {
            url: "delete.php",
            async: true,
            cache: false,
            data: "idProveedor="+idProveedor,
            type: "POST",
            success: function(data){
                                        if (data==0) {
                        $("#tr"+idProveedor).html("");
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

        $(document).ready(function(){
            
        	$('#tblSuppliersList').dataTable({                        
        			"sDom": "<'row-fluid'<'span6'l><'span6'f>r>t<'row-fluid'<'span12'i><'span12 center'p>>",
        			"sPaginationType": "bootstrap",
                                'iDisplayLength': 8,
                                "aLengthMenu": [[8, 16, 24, 32, -1], [8, 16, 24, 32, "Todos"]],
                                "aaSorting": [[ 1, "asc" ]],
        			"oLanguage": {
                                "sProcessing":     "Procesando...",
                                "sLengthMenu":     "Mostrar _MENU_ registros",
                                "sZeroRecords":    "No se encontraron resultados",
                                "sEmptyTable":     "Ningún dato disponible en esta tabla",
                                "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                                "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                                "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                                "sInfoPostFix":    "",
                                "sSearch":         "Buscar:",
                                "sUrl":            "",
                                "sInfoThousands":  ",",
                                "sLoadingRecords": "Cargando..."
        			}
        		});    
                        
           });

</script>
<?php }} ?>
