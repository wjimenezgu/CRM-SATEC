<?php /* Smarty version Smarty-3.1.16, created on 2014-10-16 11:17:48
         compiled from "../events/view/eventerror.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1086522165543fe6d37da371-24380753%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '388f15e9912cec086999bb7f995786920ea342ba' => 
    array (
      0 => '../events/view/eventerror.tpl',
      1 => 1413476013,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1086522165543fe6d37da371-24380753',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_543fe6d3887664_17557351',
  'variables' => 
  array (
    'NAV_MENU' => 0,
    'ERRORMSG' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543fe6d3887664_17557351')) {function content_543fe6d3887664_17557351($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['NAV_MENU']->value;?>

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
