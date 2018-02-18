<?php /* Smarty version Smarty-3.1.16, created on 2014-05-29 21:16:13
         compiled from "..\coins\view\allMonedas.tpl" */ ?>
<?php /*%%SmartyHeaderCode:194365386b649f36498-02247601%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a9d61afc42163dcfba1580e8d6e3ae78d98cce6' => 
    array (
      0 => '..\\coins\\view\\allMonedas.tpl',
      1 => 1401390935,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '194365386b649f36498-02247601',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5386b64a06e2d9_51759959',
  'variables' => 
  array (
    'NAV_MENU' => 0,
    'LISTA_MONEDAS' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5386b64a06e2d9_51759959')) {function content_5386b64a06e2d9_51759959($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include 'C:\\xampp\\htdocs\\CRM-SATEC\\resources\\libs\\smarty\\libs\\plugins\\modifier.capitalize.php';
?><?php echo $_smarty_tpl->tpl_vars['NAV_MENU']->value;?>

			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2>Admnistración de Monedas</h2>
					</div>
					<div class="box-content">
                                            
                                                <button type="button" class="btn btn-small btn-success" id="addNewRow" onclick="window.location ='editAdd.php'" style="margin-bottom:12px;"><i class="icon-plus icon-white"></i> Agregar</button>
						<table class="table table-striped table-bordered bootstrap-datatable">
						  <thead>
							  <tr>
								  <th>Id</th>
								  <th>Descripción</th>
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
								<tr style="padding:0px;" id="tr<?php echo $_smarty_tpl->tpl_vars['LISTA_MONEDAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['idMoneda'];?>
"> 
     								<td style="width:40px;"><?php echo $_smarty_tpl->tpl_vars['LISTA_MONEDAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['idMoneda'];?>
</td>  
                                                                <td style="width:385px;" align="left"><a style="color:#004C66;" href="edit.php?id=<?php echo $_smarty_tpl->tpl_vars['LISTA_MONEDAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['idMoneda'];?>
" onclick=""><?php echo smarty_modifier_capitalize(mb_strtolower($_smarty_tpl->tpl_vars['LISTA_MONEDAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['descripcion'], 'UTF-8'));?>
</a></td>
									<td style="width:180px;"><?php echo $_smarty_tpl->tpl_vars['LISTA_MONEDAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['simboloMoneda'];?>
</td>    								
									<td class="center">
                                                                            <a href="#" class="btn-setting" onclick="loadInfoMoneda('<?php echo $_smarty_tpl->tpl_vars['LISTA_MONEDAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['idMoneda'];?>
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
			


	</script><?php }} ?>
