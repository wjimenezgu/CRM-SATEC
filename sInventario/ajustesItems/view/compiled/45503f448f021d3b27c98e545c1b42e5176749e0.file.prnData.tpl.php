<?php /* Smarty version Smarty-3.1.16, created on 2016-06-17 10:06:14
         compiled from "../ajustesItems/view/prnData.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21484967855aa8a86e450c0-33910712%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '45503f448f021d3b27c98e545c1b42e5176749e0' => 
    array (
      0 => '../ajustesItems/view/prnData.tpl',
      1 => 1466179551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21484967855aa8a86e450c0-33910712',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_55aa8a86eac0c5_68190998',
  'variables' => 
  array (
    'NOMBRE_TIENDA' => 0,
    'AJUSTE' => 0,
    'TIT_REPORTE' => 0,
    'CURRENT_DATE' => 0,
    'DETAJUSTE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55aa8a86eac0c5_68190998')) {function content_55aa8a86eac0c5_68190998($_smarty_tpl) {?><form class="form-horizontal" id='frmAjustes'>

  	<div class='row-fluid'>
  	
  		<table cellspacing="0" style="width: 100%;  font-size: 16px;font-family:Sans-serif;">
  		
	        <tr>
	        
	            <td style="margin-left:15px; width: 50%;">
	    <div class="control-group" id="boxTiendaOrigen" style="margin-top:5px;">
			<label>Tienda: <?php echo $_smarty_tpl->tpl_vars['NOMBRE_TIENDA']->value;?>
</label>
		</div>   
		                                                    
	    <div class="control-group" id="boxFechaAjuste" style="margin-top:-20px;">
			<label >Fecha Ajuste: <?php echo $_smarty_tpl->tpl_vars['AJUSTE']->value[0]['fecMovimiento'];?>
</label> 
	    </div>     
	                                               	
		<div class="control-group" id="boxTipoMov" style="margin-top:-20px;">
			<label >Tipo de Movimiento: <?php echo $_smarty_tpl->tpl_vars['AJUSTE']->value[0]['descTipoMov'];?>
</label> 
		</div>
		
		<div class="control-group" id="boxDetalle" style="margin-top:-20px;">
			<label >Detalle: <?php echo $_smarty_tpl->tpl_vars['AJUSTE']->value[0]['detalle'];?>
</label> 
		</div>
	            </td>
	            
	            <td style="width: 40%; color: #444444; text-align:right; padding:10px;" valign="middle margin-top:-20px;">                
	            
	                <b><?php echo $_smarty_tpl->tpl_vars['TIT_REPORTE']->value;?>
 - AJUSTE NO. | <?php echo $_smarty_tpl->tpl_vars['AJUSTE']->value[0]['numDocu'];?>
</b>
	                </br>
	                <label style="text-align: right; font-size: 60%" >Impreso: <?php echo $_smarty_tpl->tpl_vars['CURRENT_DATE']->value;?>
</label>
	                
	            </td>
	            
	        </tr>
	        
	    </table>
	    
  	</div>
  	

    
    <div class="box-content">
    
    	<table class="table-reportes " id="tableItem" style="width: 100%;  font-family:Sans-serif;">
    	
        	<thead>
        	
            	<tr>
            	
                	<th style='width:10px;'>#</th>
                	<th style='width:500px;'>Artículo</th>
                    <th style='width:100px;' align="left">Código</th>
                    <th style='width: 10px;' align="right">Cant.</th>
                    
                </tr>
                
            </thead>
            
            <tbody id="tbod" name="tbod">
            
            	<div id ="divtbod" class="grid" style="width: fit-content; border: 1px;"></div>
            	
        		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['name'] = 'lP';
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['DETAJUSTE']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
        								
					<tr style="padding:0px;" id="<?php echo $_smarty_tpl->tpl_vars['DETAJUSTE']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['numLinea'];?>
">
					
		    			<td style="width:10px;">
		    				<label id="row<?php echo $_smarty_tpl->tpl_vars['DETAJUSTE']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['numLinea'];?>
"><?php echo $_smarty_tpl->tpl_vars['DETAJUSTE']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['numLinea'];?>
</label>
		    			</td>
		    			
		    			<td style="width:455x;">
		    				<?php echo $_smarty_tpl->tpl_vars['DETAJUSTE']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['desArticulo'];?>

		    				<input name="item[]" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['DETAJUSTE']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['desArticulo'];?>
">
		    			</td>
		    			
						<td style="width:10px; align="left"">
							<input name="codArti[]" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['DETAJUSTE']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['codArti'];?>
">
							<?php echo $_smarty_tpl->tpl_vars['DETAJUSTE']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['codArti'];?>

						</td>    
						 									
            			<td style="width:10px;" align="right">
            			    <?php echo $_smarty_tpl->tpl_vars['DETAJUSTE']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['cantidad'];?>

            				<input class="input-mini"  name="cant[]" id="cant[]"  type="hidden"  style="text-align: right;"  value="<?php echo $_smarty_tpl->tpl_vars['DETAJUSTE']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['cantidad'];?>
">
            			</td>
        			
        			</tr> 
        			
				<?php endfor; endif; ?>
				
			</tbody>
			
        </table>  
        
	</div>

					</br>
						
										
	<table class='table-reportes' style='text-align: center;font-family:Sans-serif;'>
	
			<thead>
			
				<tr>
				
					<th >________________________________</th>
					<!--<th>_________________________________</th>
					<th>_________________________________</th>-->
					
				</tr>
				
			</thead>
			
			<tbody>
			
				<tr>
				
					<td>Firma Encargado</td>
					<!--<td>Firma Chofer</td>
					<td>Firma Recibe Destino</td>-->
					
				</tr>
				
			</tbody>
			
	</table>
	
</form>            <?php }} ?>
