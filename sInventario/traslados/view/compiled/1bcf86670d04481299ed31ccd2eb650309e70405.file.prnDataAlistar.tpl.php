<?php /* Smarty version Smarty-3.1.16, created on 2016-06-11 08:44:35
         compiled from "../traslados/view/prnDataAlistar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14818641157437f8fef79c8-86167756%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1bcf86670d04481299ed31ccd2eb650309e70405' => 
    array (
      0 => '../traslados/view/prnDataAlistar.tpl',
      1 => 1465655767,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14818641157437f8fef79c8-86167756',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_57437f90030a23_96272233',
  'variables' => 
  array (
    'NOMBRE_TIENDA' => 0,
    'TRASLADO' => 0,
    'ID_TRASLADO' => 0,
    'TIT_REPORTE' => 0,
    'CURRENT_DATE' => 0,
    'DETTRASLADO' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57437f90030a23_96272233')) {function content_57437f90030a23_96272233($_smarty_tpl) {?>        <form class="form-horizontal" id='frmAjustes'  action="procesaTrasladoTienda.php" onsubmit="return validateForm()" method="POST">
          	
          	
          	<div class='row-fluid'>
          		<table cellspacing="0" style="width: 100%;  font-size: 16px;font-family:monospace;">
			        <tr>
			            <td style="margin-left:15px; width: 50%;">
			          <div class="control-group" id="boxTiendaOrigen" style="margin-top:5px;font-family:monospace;">
								<label>Tienda Origen: <?php echo $_smarty_tpl->tpl_vars['NOMBRE_TIENDA']->value;?>
 - Tienda Destino: <?php echo $_smarty_tpl->tpl_vars['TRASLADO']->value[0]['NombreTiendaDestino'];?>
</label>
							</div>                                                       
							<div class="control-group" id="boxFecha" style="margin-top:-20px;font-family:monospace;">
								<label >Fecha: <?php echo $_smarty_tpl->tpl_vars['TRASLADO']->value[0]['fecMovimiento'];?>
</label> 
							</div>
							<div class="control-group" id="boxdetalle" style="margin-top:-20px;font-family:monospace;">
								<label >Detalle: <?php echo $_smarty_tpl->tpl_vars['TRASLADO']->value[0]['detalle'];?>
</label> 
								
				 			</div>	
                        
			            </td>
			            <td style="width: 10%;">                        
			            </td>
			            <td style="width: 40%; color: #444444; text-align:right;  valign="middle">                
			            
			                <b>TRASLADO NO. | <?php echo $_smarty_tpl->tpl_vars['ID_TRASLADO']->value;?>
</b>
			                </br>
			                <b><?php echo $_smarty_tpl->tpl_vars['TIT_REPORTE']->value;?>
</b>
			                </br>
			                <label style="text-align: right; font-size: 60%" >Generado: <?php echo $_smarty_tpl->tpl_vars['CURRENT_DATE']->value;?>
</label>
			            </td>
			        </tr>
			    </table>
          		
          		
          	</div>
        	<div class="row-fluid" >		

                    <div id="message-fields"></div>
                    							

                        <div class="box-content">
                        	<table class="table-reportes " style="font-family:monospace" id="tableItem">
                            	<thead>
                                	<tr>
                                    	<th style='width:10px;'>#</th>
                                    	<th style='width:500px;'>Artículo</th>
                                    	<th style='width:100;'>Ubicación</th>
                                        <th style='width:100px;' align="left">Código</th>
                                        <th style='width: 10px;'>Cant.</th>
                                    </tr>
                                </thead>
                                <tbody id="tbod" name="tbod">
                                	<div id ="divtbod" class="grid" style="width: fit-content; border: 1px;"></div>
                            		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['name'] = 'lP';
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['DETTRASLADO']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
										<tr style="padding:0px;" id="<?php echo $_smarty_tpl->tpl_vars['DETTRASLADO']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['numLinea'];?>
">
						    			<td style="width:10px;">
						    				<label id="row<?php echo $_smarty_tpl->tpl_vars['DETTRASLADO']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['numLinea'];?>
"><?php echo $_smarty_tpl->tpl_vars['DETTRASLADO']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['numLinea'];?>
</label>
						    			</td>
						    			<td style="width:455x;">
						    				<?php echo $_smarty_tpl->tpl_vars['DETTRASLADO']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['desArticulo'];?>

						    				<input name="item[]" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['DETTRASLADO']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['desArticulo'];?>
">
						    			</td>
						    			<td style="width:10px;">
     										<input name="codArti[]" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['DETTRASLADO']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['Ubicacion'];?>
">
     										<?php echo $_smarty_tpl->tpl_vars['DETTRASLADO']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['Ubicacion'];?>

     									</td>     									
     									<td style="width:10px;">
     										<input name="codArti[]" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['DETTRASLADO']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['codArti'];?>
">
     										<?php echo $_smarty_tpl->tpl_vars['DETTRASLADO']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['codArti'];?>

     									</td>     									
                            			<td style="width:10px;" align="center">
                            			    <?php echo $_smarty_tpl->tpl_vars['DETTRASLADO']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['cantidad'];?>

                            				<input class="input-mini"  name="cant[]" id="cant[]"  type="hidden"  style="text-align: right;"  value="<?php echo $_smarty_tpl->tpl_vars['DETTRASLADO']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['cantidad'];?>
">
                            			</td>
                            												</tr> 
								<?php endfor; endif; ?>
								
								
								
								    </tbody>
                            </table>  
								
								 </div>
								
								
							</div><!--class="row-fluid" -->	
								
								
								
								
                            
                        
                         
                
            
   		</form>            <?php }} ?>
