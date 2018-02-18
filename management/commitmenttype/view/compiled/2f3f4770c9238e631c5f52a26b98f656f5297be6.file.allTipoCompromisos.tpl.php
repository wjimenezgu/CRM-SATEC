<?php /* Smarty version Smarty-3.1.16, created on 2014-05-28 19:13:38
         compiled from "../tipoCompromiso/view/allTipoCompromisos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1774820902537b75f36426b5-45333262%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f3f4770c9238e631c5f52a26b98f656f5297be6' => 
    array (
      0 => '../tipoCompromiso/view/allTipoCompromisos.tpl',
      1 => 1401322411,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1774820902537b75f36426b5-45333262',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_537b75f3977503_95483068',
  'variables' => 
  array (
    'HEADER_PAGE' => 0,
    'LISTA_COMPROMISOS' => 0,
    'FOOTER_PAGE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537b75f3977503_95483068')) {function content_537b75f3977503_95483068($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/var/www/CRM-SATEC/resources/libs/smarty/libs/plugins/function.cycle.php';
?><?php echo $_smarty_tpl->tpl_vars['HEADER_PAGE']->value;?>

			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2>Mantenimiento de Tipos de Compromisos </h2>
					</div>
					<div class="box-content">
						<a  href="editAdd.php"><i class="icon icon-color icon-add"></i> </a>
						<table class="table table-striped table-bordered bootstrap-datatable">
						  <thead>
							  <tr>
								  <th>Id</th>
								  <th>Descripcion</th>
								  <th>Acción</th>
							  </tr>
						  </thead>						
								<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['name'] = 'lP';
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['LISTA_COMPROMISOS']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
								<tr bgcolor="<?php echo smarty_function_cycle(array('values'=>"#F0F0FF,#ffffff"),$_smarty_tpl);?>
" style="padding:0px; font-size:1vw;" id="tr<?php echo $_smarty_tpl->tpl_vars['LISTA_COMPROMISOS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['idTipoCompromiso'];?>
"> 
     								<td style="width:40px;"><?php echo $_smarty_tpl->tpl_vars['LISTA_COMPROMISOS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['idTipoCompromiso'];?>
</td>  
    								<td style="width:385px;" align="left"><a style="color:#004C66;" href="edit.php?id=<?php echo $_smarty_tpl->tpl_vars['LISTA_COMPROMISOS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['idTipoCompromiso'];?>
" onclick=""><?php echo $_smarty_tpl->tpl_vars['LISTA_COMPROMISOS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['descripcion'];?>
</a></td>
									<td class="center">
										<a class="btn btn-danger btn-setting" onclick="loadInfoTipoCompromiso(<?php echo $_smarty_tpl->tpl_vars['LISTA_COMPROMISOS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['idTipoCompromiso'];?>
,'<?php echo $_smarty_tpl->tpl_vars['LISTA_COMPROMISOS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['descripcion'];?>
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
				<p>Moneda a borrar...</p>
			</div>
			-->
			<div class="modal-footer">
				<a href="#" class="btn" data-dismiss="modal">No</a>
				<a href="#" class="btn btn-primary idTC" onclick="confirmDelete();" id="0">Si</a>
			</div>
		</div>

	<script type="text/javascript">


		function loadInfoTipoCompromiso(id,descripcion){

			$("#textMessage").html("Realmente desea eliminar a "+descripcion+ " ("+id+")  ?");
			$(".idTC").attr("id", id);

		}

		function confirmDelete(){
			var idTipoCompromiso = $(".idTC").attr("id");

			var properties = {
                    url: "delete.php",
                    async: true,
                    cache: false,
                    data: "idTipoCompromiso="+idTipoCompromiso,
                    type: "POST",
                    success: function(data){
						if (data==0) {
	                    	$("#tr"+idTipoCompromiso).html("");
	                    	// cerrar la ventana del popup							
						}
						else {
							alert("No se puedo eliminar");
						}
                    }
                };            
                $.ajax(properties);
		   }
			


	</script>

<?php echo $_smarty_tpl->tpl_vars['FOOTER_PAGE']->value;?>
<?php }} ?>
