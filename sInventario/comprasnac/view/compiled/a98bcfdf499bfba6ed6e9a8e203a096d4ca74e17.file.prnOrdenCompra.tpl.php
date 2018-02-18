<?php /* Smarty version Smarty-3.1.16, created on 2017-07-17 15:33:12
         compiled from "../comprasnac/view/prnOrdenCompra.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5302520795690412d3abb68-99579956%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a98bcfdf499bfba6ed6e9a8e203a096d4ca74e17' => 
    array (
      0 => '../comprasnac/view/prnOrdenCompra.tpl',
      1 => 1481746646,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5302520795690412d3abb68-99579956',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5690412d3f17b6_74974776',
  'variables' => 
  array (
    'DATOS_TIENDA' => 0,
    'PEDIDO_NAC' => 0,
    'CURRENT_DATE' => 0,
    'TIT_REPORTE' => 0,
    'DETPEDIDO_NAC' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5690412d3f17b6_74974776')) {function content_5690412d3f17b6_74974776($_smarty_tpl) {?><form class="form-horizontal" id='frmAjustes'>
  	          	<div class='row-fluid'>
          		<table cellspacing="0" style="width: 100%;  font-size: 11px;font-family: Arial, Courier, Serif;">
			        <tr>
			            <td style="margin-left:15px; width: 50%;text-align:center;">
			                <?php echo $_smarty_tpl->tpl_vars['DATOS_TIENDA']->value[0]['NombreCia'];?>
<br>
			                <?php echo $_smarty_tpl->tpl_vars['DATOS_TIENDA']->value[0]['Direccion'];?>
<br>
			                <?php echo $_smarty_tpl->tpl_vars['DATOS_TIENDA']->value[0]['Ubicacion'];?>
<br>
			                <?php echo $_smarty_tpl->tpl_vars['DATOS_TIENDA']->value[0]['Telefonos'];?>

			            </td>
			            <td style="width: 10%;">                        
			            </td>
			            <td style="width: 40%; color: #444444; text-align:right; padding:5px;" valign="middle">                			            
			                <b>ORDEN DE COMPRA NO. | <?php echo $_smarty_tpl->tpl_vars['PEDIDO_NAC']->value[0]['numOrdenCompra'];?>
</b>
			                <label style="text-align: right; font-size: 100%; font-weight: bold" >FECHA: <?php echo $_smarty_tpl->tpl_vars['PEDIDO_NAC']->value[0]['fecCreacion'];?>
</label>
			                <label style="text-align: right; font-size: 80%" >Impreso: <?php echo $_smarty_tpl->tpl_vars['CURRENT_DATE']->value;?>
</label>
			            </td>
			        </tr>
			    </table>
     		
          	</div>
  	
  	
  	
	<div class="row-fluid" >		
		</br>
		<h2 style='text-align:  center;font-family: Arial, Courier, Serif;'><?php echo $_smarty_tpl->tpl_vars['TIT_REPORTE']->value;?>
</h2>
	    <div class="control-group" id="boxTiendaOrigen" style="margin-top:10px;">
			<label>SEÑORES: <?php echo $_smarty_tpl->tpl_vars['PEDIDO_NAC']->value[0]['nombreProveedor'];?>
</label>
		</div>   
		                                                    
	    <div class="control-group" id="boxFechaAjuste">
			<label style="font-family: Arial, Courier, Serif;">SIRVASE ENTREGAR A: ________________________________________</label> 
	    </div>     
	                                               	
		<div class="control-group" id="boxTipoMov" style="margin-top:6px;">
			<label style="font-family: Arial, Courier, Serif;">Y CARGAR A NUESTRA CUENTA CON UD(S) LO SIGUIENTE:</label> 
		</div>

    
    <div class="box-content">
    
    	<table class="table " id="tableItem" style="font-family: Arial, Courier, Serif;">
    	
        	<thead>
        	
            	<tr>
            	
                	<th style='width:10px;'>#</th>
                	<th style='width:500px;'>Artículo</th>
                    <th style='width: 40px; text-align:right'>Cantidad</th>
                    <th style='width: 100px;text-align:right'>Costo Unitario</th>
                    
                </tr>
                
            </thead>
            
            <tbody id="tbod" name="tbod">
            
            	<div id ="divtbod" class="grid" style="width: fit-content; border: 1px;"></div>
            	
        		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['name'] = 'lP';
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['DETPEDIDO_NAC']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
        								
					<tr style="padding:0px;" id="<?php echo $_smarty_tpl->tpl_vars['DETPEDIDO_NAC']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['idLinea'];?>
">
					
		    			<td style="width:10px;">
		    				<label id="row<?php echo $_smarty_tpl->tpl_vars['DETPEDIDO_NAC']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['idLinea'];?>
"><?php echo $_smarty_tpl->tpl_vars['DETPEDIDO_NAC']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['idLinea'];?>
</label>
		    			</td>
		    			
		    			<td style="width:455x;">
		    				<?php echo $_smarty_tpl->tpl_vars['DETPEDIDO_NAC']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['descArti'];?>

		    				
		    			</td>
		    									 							
            			<td style="width:40px; text-align:right">
            			    <?php echo $_smarty_tpl->tpl_vars['DETPEDIDO_NAC']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['cantidad'];?>

            				
            			</td>

            			<td style="width:100px;text-align:right" >
            			    <?php echo $_smarty_tpl->tpl_vars['DETPEDIDO_NAC']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['costoF'];?>

            				
            			</td>

        			
        			</tr> 
        			
        			
				<?php endfor; endif; ?>
				<tr>
        				<td colspan="5" style="text-align: center;"> ************** ÚLTIMA LINEA **************</td>
        		</tr>
			</tbody>
			
        </table>  
        
	</div>					
										
	<table class='table-condensed' style='text-align: center;font-family: Arial, Courier, Serif;'>
	
			<thead>
			
			    
				<tr>
				
					<th >________________________________</th>

					
				</tr>

			
				
			</thead>
			
			<tbody>
			
				<tr>
				
					<td>Por SATEC S.A.</td>
					
				</tr>
				<tr>
				<td>
				NOTA: Recibo de facturas para trámite de pago todos los dias. Pagos, jueves de 3:00 p.m. a 6:00 p.m.
				</td>
				</tr>				
				
			</tbody>
			
	</table>
	
</form>            <?php }} ?>
