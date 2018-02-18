<?php /* Smarty version Smarty-3.1.16, created on 2017-04-06 19:40:57
         compiled from "../docutype/view/allTipoDocumentos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:43584353953e6eb0a78dce4-29419916%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '397ec7fce6219db62b8a178a4b09662a18a04176' => 
    array (
      0 => '../docutype/view/allTipoDocumentos.tpl',
      1 => 1457810184,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '43584353953e6eb0a78dce4-29419916',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53e6eb0a7f1599_77047608',
  'variables' => 
  array (
    'NAV_MENU' => 0,
    'LISTA_TIPODOCUMENTOS' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53e6eb0a7f1599_77047608')) {function content_53e6eb0a7f1599_77047608($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include '/var/www/html/CRM-SATEC/resources/libs/smarty/libs/plugins/modifier.capitalize.php';
?><?php echo $_smarty_tpl->tpl_vars['NAV_MENU']->value;?>

			<div class="row-fluid sortable" id="myPrincipal">		
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2>Admnistración de Tipos de Documentos</h2>
					</div>
					<div class="box-content">
						<button type="button" class="btn btn-small btn-success" id="addNewRow" onclick="window.location ='editAdd.php'" style="margin-bottom:12px;"><i class="icon-plus icon-white"></i> Agregar</button>
						<table class="table table-striped table-bordered bootstrap-datatable">
						  <thead>
							  <tr>
								  <th>Id</th>
								  <th>Descripción</th>
								  <th>Siglas</th>								  
								  <th>Acción</th>
							  </tr>
						  </thead>						
						  <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['name'] = 'lP';
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['LISTA_TIPODOCUMENTOS']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
						  	<tr style="padding:0px;" id="tr<?php echo $_smarty_tpl->tpl_vars['LISTA_TIPODOCUMENTOS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['idTipoDocumento'];?>
"> 
     							<td style="width:40px;"><?php echo $_smarty_tpl->tpl_vars['LISTA_TIPODOCUMENTOS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['idTipoDocumento'];?>
</td>  
                                <td style="width:385px;" align="left"><a style="color:#004C66;" href="edit.php?id=<?php echo $_smarty_tpl->tpl_vars['LISTA_TIPODOCUMENTOS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['idTipoDocumento'];?>
"><?php echo smarty_modifier_capitalize(mb_strtolower($_smarty_tpl->tpl_vars['LISTA_TIPODOCUMENTOS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['descripcion'], 'UTF-8'));?>
</a></td>
                                <td style="width:60px;" align="left"><a style="color:#004C66;" ><?php echo smarty_modifier_capitalize(mb_strtolower($_smarty_tpl->tpl_vars['LISTA_TIPODOCUMENTOS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['siglasDoc'], 'UTF-8'));?>
</a></td>                                
								<td class="center">
                                	<a href="#" class="btn-setting" onclick="loadInfoTipoDocumento(<?php echo $_smarty_tpl->tpl_vars['LISTA_TIPODOCUMENTOS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['idTipoDocumento'];?>
,'<?php echo $_smarty_tpl->tpl_vars['LISTA_TIPODOCUMENTOS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['descripcion'];?>
');"><i class="icon icon-color icon-remove"></i></a>
								</td>
							</tr> 
						  <?php endfor; endif; ?>
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
				<p>Tipo Documento a borrar...</p>
			</div>
			-->
			<div class="modal-footer">
				<a href="#" class="btn" data-dismiss="modal">No</a>
				<a href="#" class="btn btn-primary idTD" onclick="confirmDelete();" id="0">Si</a>
			</div>
		</div>

	<script type="text/javascript">


		function loadInfoTipoDocumento(id,descripcion){

			$("#textMessage").html("Realmente desea eliminar a "+descripcion+ " ("+id+")  ?");
			$(".idTD").attr("id", id);

		}

		function confirmDelete(){
			var idTipoDocumento = $(".idTD").attr("id");

			var properties = {
                    url: "delete.php",
                    async: true,
                    cache: false,
                    data: "idTipoDocumento="+idTipoDocumento,
                    type: "POST",
                    success: function(data){
						if (data==0) {
	                    	$("#tr"+idTipoDocumento).html("");
	                    	// cerrar la ventana del popup
	                        $("#myModal").modal('toggle');
	                                            								
						}
						else {
							alert("No se puedo eliminar");
						}
                    }
                };            
                $.ajax(properties);
		   }
			


	</script><?php }} ?>
