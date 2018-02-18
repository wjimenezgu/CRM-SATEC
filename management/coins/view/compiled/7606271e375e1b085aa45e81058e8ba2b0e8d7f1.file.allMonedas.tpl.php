<?php /* Smarty version Smarty-3.1.16, created on 2014-05-28 21:32:08
         compiled from "../monedas/view/allMonedas.tpl" */ ?>
<?php /*%%SmartyHeaderCode:573093093537cbc90c03978-50867684%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7606271e375e1b085aa45e81058e8ba2b0e8d7f1' => 
    array (
      0 => '../monedas/view/allMonedas.tpl',
      1 => 1401330726,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '573093093537cbc90c03978-50867684',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_537cbc90c68830_71238026',
  'variables' => 
  array (
    'HEADER_PAGE' => 0,
    'LISTA_MONEDAS' => 0,
    'FOOTER_PAGE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537cbc90c68830_71238026')) {function content_537cbc90c68830_71238026($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/var/www/CRM-SATEC/resources/libs/smarty/libs/plugins/function.cycle.php';
?><?php echo $_smarty_tpl->tpl_vars['HEADER_PAGE']->value;?>

			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2>Mantenimiento de Monedas </h2>
					</div>
					<div class="box-content">
						<a  href="editAdd.php"><i class="icon icon-color icon-add"></i> </a>
						<table class="table table-striped table-bordered bootstrap-datatable">
						  <thead>
							  <tr>
								  <th>Id</th>
								  <th>Descripcion</th>
  								  <th>Símbolo</th>
								  <th>Acción</th>
							  </tr>
						  </thead>						
								<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['name'] = 'lP';
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['LISTA_MONEDAS']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
" style="padding:0px; font-size:1vw;" id="tr<?php echo $_smarty_tpl->tpl_vars['LISTA_MONEDAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['idMoneda'];?>
"> 
     								<td style="width:40px;"><?php echo $_smarty_tpl->tpl_vars['LISTA_MONEDAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['idMoneda'];?>
</td>  
    								<td style="width:385px;" align="left"><a style="color:#004C66;" href="edit.php?id=<?php echo $_smarty_tpl->tpl_vars['LISTA_MONEDAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['idMoneda'];?>
" onclick=""><?php echo $_smarty_tpl->tpl_vars['LISTA_MONEDAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['descripcion'];?>
</a></td>
									<td style="width:180px;"><?php echo $_smarty_tpl->tpl_vars['LISTA_MONEDAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['simboloMoneda'];?>
</td>    								
									<td class="center">
										<a class="btn btn-danger btn-setting" onclick="loadInfoMoneda('<?php echo $_smarty_tpl->tpl_vars['LISTA_MONEDAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['idMoneda'];?>
','<?php echo $_smarty_tpl->tpl_vars['LISTA_MONEDAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['descripcion'];?>
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
				<a href="#" class="btn btn-primary idMon" onclick="confirmDelete();" id="0">Si</a>
			</div>
		</div>

	<script type="text/javascript">


		function loadInfoMoneda(id,descripcion){

			$("#textMessage").html("Realmente desea eliminar a "+descripcion+ "("+id+")  ?");
			$(".idMon").attr("id", id);

		}

		function confirmDelete(){
			var idMoneda = $(".idMon").attr("id");

			var properties = {
                    url: "delete.php",
                    async: true,
                    cache: false,
                    data: "idMoneda="+idMoneda,
                    type: "POST",
                    success: function(data){
						if (data==0) {
	                    	$("#tr"+idMoneda).html("");
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
