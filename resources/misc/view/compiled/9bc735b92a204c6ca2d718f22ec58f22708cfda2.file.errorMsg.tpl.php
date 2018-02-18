<?php /* Smarty version Smarty-3.1.16, created on 2016-04-15 14:46:00
         compiled from "errorMsg.tpl" */ ?>
<?php /*%%SmartyHeaderCode:398407005543ff31ce8be02-62854435%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9bc735b92a204c6ca2d718f22ec58f22708cfda2' => 
    array (
      0 => 'errorMsg.tpl',
      1 => 1457810177,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '398407005543ff31ce8be02-62854435',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_543ff31ced8f71_19933608',
  'variables' => 
  array (
    'NAV_MENU' => 0,
    'ERRORMSG' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543ff31ced8f71_19933608')) {function content_543ff31ced8f71_19933608($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['NAV_MENU']->value;?>

	<div class="row-fluid sortable">
		<div class="box span12">
			<div class="box-header well" data-original-title>
				<h2>ERROR INESPERADO</h2>
			</div>

			<div class="box-content">
					<table class="table table-striped tabs-content-inner" border="0">
					<tbody>
						<tr>
							<td style="text-align:center;" class="alert alert-error" ><strong><?php echo $_smarty_tpl->tpl_vars['ERRORMSG']->value;?>
</strong></td> 
						</tr>
					<tbody>
					</table>  

 					<div class="modal-footer">
						<a href="#" class="btn btn-primary" onclick="Regresar();">Regresar</a>
 
					</div> 							
		    </div>
		        				
		</div>		
	</div>
<script type="text/javascript">
function Regresar(){
	// Regresa al usuario a la pagina anterior
	history.go(-1)		
}
</script><?php }} ?>
