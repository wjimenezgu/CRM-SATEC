<?php /* Smarty version Smarty-3.1.16, created on 2015-11-14 12:59:20
         compiled from "../mcompras/view/prnData.tpl" */ ?>
<?php /*%%SmartyHeaderCode:130098043855aa6c06609580-07007619%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ce2a7e2e52270cc645356aa4598aac23f79c79e' => 
    array (
      0 => '../mcompras/view/prnData.tpl',
      1 => 1445375853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '130098043855aa6c06609580-07007619',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_55aa6c066b42e9_19135727',
  'variables' => 
  array (
    'CURRENT_DATE' => 0,
    'TIT_REPORTE' => 0,
    'TARJETA' => 0,
    'FECHA_CORTE' => 0,
    'CONCILIO' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55aa6c066b42e9_19135727')) {function content_55aa6c066b42e9_19135727($_smarty_tpl) {?><form class="form-horizontal" id='frmAjustes'>

  	<div class='row-fluid'>
  	
  		<table cellspacing="0" style="width: 100%;  font-size: 16px;">
  		
	        <tr>
	        
	            <td style="margin-left:15px; width: 50%;">
	                <img  src="../../resources/img/logoPage.jpg" alt="Logo"><br>
	                <label style="text-align: left; font-size: 60%" >Impreso: <?php echo $_smarty_tpl->tpl_vars['CURRENT_DATE']->value;?>
</label>
	            </td>
	            
	        </tr>
	        
	    </table>
	    
  	</div>
  	
	<div class="row-fluid" >		
	
		</br>
		</br>
		<h2 style='text-align:  center;'><?php echo $_smarty_tpl->tpl_vars['TIT_REPORTE']->value;?>
</h2>
		</br>

	    <div class="control-group" id="boxTiendaOrigen" style="margin-top:10px;">
			<label>Tarjeta: <?php echo $_smarty_tpl->tpl_vars['TARJETA']->value[0]['Tarjeta'];?>
</label>
		</div>   
		                                                    
	    <div class="control-group" id="boxFechaAjuste">
			<label >Fecha de Corte: <?php echo $_smarty_tpl->tpl_vars['FECHA_CORTE']->value;?>
</label> 
	    </div>     

	</div>
	
	</br>
	</br>
    
    <div class="box-content">
    
    	<table class="table " id="tableItem">
    	
        	<thead>
        	
            	<tr>
            	
                	<th style='width: 10%;'>Pedido</th>
                	<th style='width: 25%;'>Proveedor</th>
                    <th style='width: 15%;'>Factura</th>
                    <th style='width: 15%;'>Fecha</th>
                    <th style='width: 15%;'>Moneda</th>
                    <th style='width: 20%;'>Monto</th>
                    
                </tr>
                
            </thead>
            
            <tbody id="tbod" name="tbod">
            
            	<div id ="divtbod" class="grid" style="width: fit-content; border: 1px;"></div>
            	
        		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['name'] = 'lP';
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['CONCILIO']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
        								
					<tr style="padding:0px;" >
					
		    			<td style="width:10px;">
		    				<label id="row<?php echo $_smarty_tpl->tpl_vars['CONCILIO']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['numOrdenCompra'];?>
"><?php echo $_smarty_tpl->tpl_vars['CONCILIO']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['numOrdenCompra'];?>
</label>
		    			</td>
		    			
		    			<td style="width:455x;">
		    				<?php echo $_smarty_tpl->tpl_vars['CONCILIO']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['nombreProveedor'];?>

		    				
		    			</td>
		    			
						<td style="width:10px;">
							<?php echo $_smarty_tpl->tpl_vars['CONCILIO']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['numDoc'];?>

						</td>    
						 									
            			<td style="width:10px;" align="left">
            			    <?php echo $_smarty_tpl->tpl_vars['CONCILIO']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['fecDoc'];?>

            				
            			</td>
            			
            			<td style="width:10px;">
							
							<?php echo $_smarty_tpl->tpl_vars['CONCILIO']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['idMoneda'];?>

						</td>
						
						<td style="width:10px;">
							
							<?php echo $_smarty_tpl->tpl_vars['CONCILIO']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['montoDoc'];?>

						</td>

        			</tr> 
        			
				<?php endfor; endif; ?>
				
			</tbody>
			
        </table>  
        
	</div>
			
	</br>
		</br>
			</br>
				</br>
					</br>
						
										
	<table class='table-condensed' style='text-align: center;'>
	
			<thead>
			
				<tr>
				
					<th >________________________________</th>
					<!--<th>_________________________________</th>
					<th>_________________________________</th>-->
					
				</tr>
				
			</thead>
			
			<tbody>
			
				<tr>
				
					<td>Conciliado por:</td>
					<!--<td>Firma Chofer</td>
					<td>Firma Recibe Destino</td>-->
					
				</tr>
				
			</tbody>
			
	</table>
	
</form>            <?php }} ?>
