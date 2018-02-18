<?php /* Smarty version Smarty-3.1.16, created on 2017-02-22 04:59:09
         compiled from "../consultas/view/itemMovi.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1449703601576d6f89b34e87-24918585%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ae9cb7c967427b1af4a223da2392848786115e3' => 
    array (
      0 => '../consultas/view/itemMovi.tpl',
      1 => 1487764707,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1449703601576d6f89b34e87-24918585',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_576d6f89c151c9_35812062',
  'variables' => 
  array (
    'NAV_MENU' => 0,
    'NOMBRE_TIENDA' => 0,
    'ACTION' => 0,
    'ID_ITEM' => 0,
    'ITEM' => 0,
    'ITEM_MOVI' => 0,
    'TIENDA_ACTUAL' => 0,
    'COLOR_LINEA' => 0,
    'NOMBRE_TIENDA_ACTUAL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_576d6f89c151c9_35812062')) {function content_576d6f89c151c9_35812062($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/var/www/html/CRM-SATEC/resources/libs/smarty/libs/plugins/function.cycle.php';
?><?php echo $_smarty_tpl->tpl_vars['NAV_MENU']->value;?>

	<div class="row-fluid">
		<div class="box span12">
			<div class="box-header well" data-original-title>
				<h2>Información Articulo de <?php echo $_smarty_tpl->tpl_vars['NOMBRE_TIENDA']->value;?>
</h2>
			</div>
			<div class="box-content">
				<form class="form-horizontal" id="frmEditItem"  action="processItem.php"  method="POST">
					<input type="hidden" id="action" name="action" value="<?php echo $_smarty_tpl->tpl_vars['ACTION']->value;?>
">
 			 		<fieldset>
 			 		
 			 			<table class="table">
 			 				<tr>
 			 				<td>
					<div class="control-group" id="boxfidItem" style="margin-left:-90px">
							<label class="control-label" for="disabledInput">Codigo</label>
							<div class="controls">
								<input class="input " style="width:50px;" name="fidItem" id="fidItem" type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['ID_ITEM']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['ID_ITEM']->value;?>
"  readonly="true" >
							</div>
				</div>
						</td>
						<td>			
			
							<label class="control-label" for="focusedInput">Descripcion*</label>
							<div class="controls">
								<input class="input focused" name ="fDescripcion" id="fDescripcion" type="text" value="<?php echo $_smarty_tpl->tpl_vars['ITEM']->value[0]['desArticulo'];?>
" style="width: 400px;" readonly="true" >
							</div>
				 	
				 		</td>
				 		<td>

							<label class="control-label" for="focusedInput">Externo</label>
							<div class="controls">
								<input class="input focused" name="fcodigoExterno" id="fcodigoExterno" type="text" value="<?php echo $_smarty_tpl->tpl_vars['ITEM']->value[0]['codArtiProveedor'];?>
" readonly="true" >
							</div>

				 		</td>				 		
				 		
				 		</tr>
		 		</table>				 
                                <table class="table table-bordered " id="tblListMov">
                                    <thead>
                                        <tr>
                                            <th>Tienda</th>
                                            <th>Fecha Mov.</th>                                            
                                            <th>Documento</th>           
                                            <th>Movimiento</th>
                                            <th>Nombre</th>
                                            <th>Cantidad</th>
                                             <th>Saldo</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['p'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['p']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['ITEM_MOVI']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                                        <tr style="<?php if ($_smarty_tpl->tpl_vars['ITEM_MOVI']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['Tienda']!=$_smarty_tpl->tpl_vars['TIENDA_ACTUAL']->value) {?> <?php $_smarty_tpl->tpl_vars["TIENDA_ACTUAL"] = new Smarty_variable($_smarty_tpl->tpl_vars['ITEM_MOVI']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['Tienda'], null, 0);?>       <?php echo smarty_function_cycle(array('assign'=>'COLOR_LINEA','values'=>"#ffff99,#ffccff"),$_smarty_tpl);?>
 background-color:<?php echo $_smarty_tpl->tpl_vars['COLOR_LINEA']->value;?>
 <?php } else { ?>background-color:<?php echo $_smarty_tpl->tpl_vars['COLOR_LINEA']->value;?>
 <?php }?>">

                                            <td><?php if ($_smarty_tpl->tpl_vars['ITEM_MOVI']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['Tienda']!=$_smarty_tpl->tpl_vars['NOMBRE_TIENDA_ACTUAL']->value) {?> <?php $_smarty_tpl->tpl_vars["NOMBRE_TIENDA_ACTUAL"] = new Smarty_variable($_smarty_tpl->tpl_vars['ITEM_MOVI']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['Tienda'], null, 0);?> <?php echo $_smarty_tpl->tpl_vars['ITEM_MOVI']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['Tienda'];?>
 <?php } else { ?> <?php }?></td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['ITEM_MOVI']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['FechaMovF'];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['ITEM_MOVI']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['NumDocu'];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['ITEM_MOVI']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['Siglas'];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['ITEM_MOVI']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['Nombre'];?>
</td>
                                            <td style="text-align: right;"><?php echo $_smarty_tpl->tpl_vars['ITEM_MOVI']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['CantiMov'];?>
</td>
                                            <td style="text-align: right;"><?php echo $_smarty_tpl->tpl_vars['ITEM_MOVI']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['Saldo'];?>
</td>                                                                                                                                    
                                        </tr>
                                        <?php endfor; endif; ?>
                                    </tbody>
                                </table>                                  

			
 					<div class="modal-footer">
						<a href="articulos.php" class="btn btn-large pull-right" data-dismiss="modal">Cerrar</a>
						<div id="message-fields-obl"></div> 
					</div> 
			</fieldset>
		  </form>			
		    </div>				
		</div>		
		</div>
<?php }} ?>
