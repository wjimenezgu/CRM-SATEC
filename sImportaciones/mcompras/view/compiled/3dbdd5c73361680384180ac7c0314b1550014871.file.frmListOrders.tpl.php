<?php /* Smarty version Smarty-3.1.16, created on 2017-07-12 18:44:11
         compiled from "../mcompras/view/frmListOrders.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1368267106541c925c7453d4-62529841%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3dbdd5c73361680384180ac7c0314b1550014871' => 
    array (
      0 => '../mcompras/view/frmListOrders.tpl',
      1 => 1499906488,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1368267106541c925c7453d4-62529841',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_541c925c9b6966_54845545',
  'variables' => 
  array (
    'NAV_MENU' => 0,
    'LIST_PEDIDOS' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541c925c9b6966_54845545')) {function content_541c925c9b6966_54845545($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include '/var/www/html/CRM-SATEC/resources/libs/smarty/libs/plugins/modifier.capitalize.php';
?><?php echo $_smarty_tpl->tpl_vars['NAV_MENU']->value;?>

<div class="row-fluid">
        <div class="box span12">
                <div class="box-header well" data-original-title>
                        <h2><i class="icon-list"></i> LISTA DE PEDIDOS</h2>
                </div>
                <div class="box-content">
                    <form class="form-horizontal" action="savePedido.php" method="post">
                        
                        <div class="row-fluid">
<!-- 
       					<div class="box-body table-responsive">		
                                <table class="table table-striped table-bordered " id="tblListOrders">
 -->                                                                               
                             <div class="span12">

                                <table class="table table-striped table-bordered " id="tblListOrders">
                                    <thead>
                                        <tr>
                                            <th># Pedido</th>
                                            <th>N° Orden</th>                                            
                                            <th>Proveedor</th>                                                                                       
                                            <th>Fecha Creación</th>
                                            <th>Estado</th>
                                            <th>Dias</th>                                            
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['p'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['p']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['LIST_PEDIDOS']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['name'] = 'p';
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total']);
?>
                                        <tr id="register<?php echo $_smarty_tpl->tpl_vars['LIST_PEDIDOS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['idPedido'];?>
">
                                            <td><?php echo $_smarty_tpl->tpl_vars['LIST_PEDIDOS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['idPedido'];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['LIST_PEDIDOS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['numOrdenCompra'];?>
</td>
                                            <td><?php echo smarty_modifier_capitalize(mb_strtolower($_smarty_tpl->tpl_vars['LIST_PEDIDOS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['nombreProveedor'], 'UTF-8'));?>
</td>                                                                                  
                                            <td><?php echo $_smarty_tpl->tpl_vars['LIST_PEDIDOS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['fecCreacion'];?>
</td> 
                                            <td class="center">
                                            <!--  
												<span class="label label-success">Verde</span>
												<span class="label label-important">Rojo</span>
												<span class="label " style="background-color: #FFD700;">Amarillo</span>
												<span class="label " style="background-color: #FFD700;"><?php echo $_smarty_tpl->tpl_vars['LIST_PEDIDOS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['NDias'];?>
</span>																								
												<?php if ($_smarty_tpl->tpl_vars['LIST_PEDIDOS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['NDias']<5) {?> <span class="label label-success">Verde</span><?php }?>
												<?php if ($_smarty_tpl->tpl_vars['LIST_PEDIDOS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['NDias']>5) {?> <span class="label" style="background-color: #FFD700;">Amarillo</span><?php }?>
												<?php if ($_smarty_tpl->tpl_vars['LIST_PEDIDOS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['NDias']>10) {?> <span class="label label-success">Rojo</span><?php }?>

<?php if ($_smarty_tpl->tpl_vars['LIST_PEDIDOS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['NDias']>10) {?> <span class="label label-success"><?php echo $_smarty_tpl->tpl_vars['LIST_PEDIDOS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['NDias'];?>
</span><?php } elseif ($_smarty_tpl->tpl_vars['LIST_PEDIDOS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['NDias']>5) {?> <span class="label" style="background-color: #FFD700;"><?php echo $_smarty_tpl->tpl_vars['LIST_PEDIDOS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['NDias'];?>
</span><?php } else { ?><span class="label label-success"><?php echo $_smarty_tpl->tpl_vars['LIST_PEDIDOS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['NDias'];?>
</span><?php }?>												
												<?php if ($_smarty_tpl->tpl_vars['LIST_PEDIDOS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['NDias']>10&&$_smarty_tpl->tpl_vars['LIST_PEDIDOS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['NDias']<50) {?> <span class="label" style="background-color: #FFD700;"><?php echo $_smarty_tpl->tpl_vars['LIST_PEDIDOS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['NDias'];?>
</span><?php }?>
											 -->												
												<?php if ($_smarty_tpl->tpl_vars['LIST_PEDIDOS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['NDias']<5&&$_smarty_tpl->tpl_vars['LIST_PEDIDOS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['estadoPedido']=='A') {?> <span class="label label-success">Verde</span><?php }?>
												<?php if ($_smarty_tpl->tpl_vars['LIST_PEDIDOS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['NDias']>4&&$_smarty_tpl->tpl_vars['LIST_PEDIDOS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['NDias']<8&&$_smarty_tpl->tpl_vars['LIST_PEDIDOS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['estadoPedido']=='A') {?> <span class="label" style="background-color: #FFD700;">Amarillo</span><?php }?>
												<?php if ($_smarty_tpl->tpl_vars['LIST_PEDIDOS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['NDias']>7&&$_smarty_tpl->tpl_vars['LIST_PEDIDOS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['estadoPedido']=='A') {?> <span class="label label-important">Rojo</span><?php }?>
											    <?php if ($_smarty_tpl->tpl_vars['LIST_PEDIDOS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['estadoPedido']=='C') {?> <span class="label" style="background-color: #0000FF;">Cerrado</span><?php }?>
											    <?php if ($_smarty_tpl->tpl_vars['LIST_PEDIDOS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['estadoPedido']=='N') {?> <span class="label" style="background-color: #FF9933;">Cancelado</span><?php }?>																																													
											</td>
                                            <td><?php if ($_smarty_tpl->tpl_vars['LIST_PEDIDOS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['estadoPedido']=='A') {?><?php echo $_smarty_tpl->tpl_vars['LIST_PEDIDOS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['NDias'];?>
<?php }?></td>											
                                            <td>
                                                <!--
                                                <a class="btn btn-mini btn-inverse" href="genPurchaseOrder.php?id=<?php echo $_smarty_tpl->tpl_vars['LIST_PEDIDOS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['idPedido'];?>
" target="__blank" style="padding:0px; padding-left:1px;" title="Generar Orden de Compra" data-rel="tooltip"><i class="icon-download-alt icon-white"></i></a>
                                                -->
                                                <a href="genPurchaseOrder.php?id=<?php echo $_smarty_tpl->tpl_vars['LIST_PEDIDOS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['idPedido'];?>
" target="__blank" title="Generar Orden de Compra" data-rel="tooltip"><i class="icon icon-blue icon-archive"></i></a>                                                
                                                <a href="eventRegister.php?id=<?php echo $_smarty_tpl->tpl_vars['LIST_PEDIDOS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['idPedido'];?>
" title="Registrar Eventos" data-rel="tooltip"><i class="icon icon-blue icon-book"></i></a>
                                                <a href="docsRegister.php?id=<?php echo $_smarty_tpl->tpl_vars['LIST_PEDIDOS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['idPedido'];?>
" title="Agregar Documentos" data-rel="tooltip"><i class="icon icon-blue icon-attachment"></i></a>
<!-- William todavia en desarrollo  -->
                                                <a href="whrRegister.php?id=<?php echo $_smarty_tpl->tpl_vars['LIST_PEDIDOS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['idPedido'];?>
" title="Agregar Warehouse Receipt" data-rel="tooltip"><i class="icon icon-blue icon-tag"></i></a>
<a href="prnBoletaBodega.php?idPedido=<?php echo $_smarty_tpl->tpl_vars['LIST_PEDIDOS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['idPedido'];?>
" target="_blank" title="Boleta Ingreso Mercaderia"id="<?php echo $_smarty_tpl->tpl_vars['LIST_PEDIDOS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['idPedido'];?>
" ><i class="icon icon-color icon-clipboard"></i></a>
                                           
 <!-- William Jimenez , Nov 22, 2014 se esconde para evitar que se puedan eliminar pedidos
      se definira con el usuario administrador como se debe proceder.    
                                                <a title="Eliminar" data-rel="tooltip" class="rdelPedido pull-right" data-toggle="modal" data-target="#delete-modal" style="cursor: pointer;" id="<?php echo $_smarty_tpl->tpl_vars['LIST_PEDIDOS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['idPedido'];?>
"><i class="icon icon-color icon-remove"></i></a>
 -->                                                
                                                <a href="editOrder.php?id=<?php echo $_smarty_tpl->tpl_vars['LIST_PEDIDOS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['idPedido'];?>
" class="pull-right" title="Modificar Pedido" data-rel="tooltip" style="margin-right:3px;"><i class="icon icon-color icon-edit"></i></a>
                                            </td>
                                        </tr>
                                        <?php endfor; endif; ?>
                                        
                                        
                                        <div id="nofify-message"></div>
                                        
                                    </tbody>
                                </table>                                  
                                
                            </div>                                                   

                        </div> 
                    
                    </form>
                </div>
        </div><!--/span-->

</div><!--/row-->

<!-- NEW ARTICLE MESSAGE MODAL -->
<div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3 class="modal-title"><i class="icon-bullhorn"></i> Atencion!</h3>
            </div>
            <form action="#" method="post" id="frmListStudent">

                <div class="alert alert-waring">                        
                    ¿Realmente desea <strong>eliminar</strong> el pedido #<span id="numPedido"></span>?.
                </div>                
                <div class="modal-footer clearfix">                   
                    <button type="button" class="btn btn-danger " data-dismiss="modal">No</button>
                    <button type="button" class="btn btn-primary " data-dismiss="modal" id="confirm-delete">Si</button>                     
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<script type="text/javascript">
    $(document).ready(function(){
                
	$('#tblListOrders').dataTable({                        
			"sDom": "<'row-fluid'<'span6'l><'span6'f>r>t<'row-fluid'<'span12'i><'span12 center'p>>",
			"bSort":true,
			"aoColumnDefs": [
			                 { "bSortable": true, "aTargets": [ 0 ] },
			                 { "bSortable": true, "aTargets": [ 1 ] },
			                 { "bSortable": true, "aTargets": [ 2 ] },
			                 { "bSortable": true, "aTargets": [ 3 ] },
			                 { "bSortable": false, "aTargets": [ 4 ] },
			                 { "bSortable": true, "aTargets": [ 5 ] }			                 
			              ], 
			"sPaginationType": "bootstrap",
                        'iDisplayLength': 24,
                        "aLengthMenu": [[24, 32, -1], [24, 32, "Todos"]],
                        "aaSorting": [[ 3, "desc" ]],
            
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
		} );    

                $(".rdelPedido").on("click", function(){
                    $("#numPedido").html(this.id);
                });

                $("#confirm-delete").on("click", function (e){
                           
                    var infoToDelete = {                                                        
                        url: "deletePedido.php",
                        async: true,
                        cache: false,
                        data: "idPedido="+$("#numPedido").text(),
                        type: "POST",
                        success: function(response){
                            var message = "";
                            var type = "";
                            if(response == 1){            
                                message = "<span style='font-size:12px;'>El pedido #"+$("#numPedido").text()+" ha sido eliminado</span>";
                                type = "success";
                                $("#register"+$("#numPedido").text()).css("display","none");
                            }else{                                
                                message = "<span style='font-size:12px;'>ERROR: NO se pudo eliminar el pedido #"+$("#numPedido").text()+"</span>";
                                type = "error";
                            }

                            $('#nofify-message').noty({
                                text:message,
                                layout:"top",
                                type:type,
                                timeout: 1800    
                            });
                        }                                                           

                    };
                    
                    $.ajax(infoToDelete);                        

                });
        
                
   }); 
</script>

<?php }} ?>
