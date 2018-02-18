<?php /* Smarty version Smarty-3.1.16, created on 2017-04-17 18:37:21
         compiled from "../mcompras/view/selGuiaWhrs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:94804188654c444e4c41ba7-90779182%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a3dce84574ae7f72e9bbff0313206f258d5a1da5' => 
    array (
      0 => '../mcompras/view/selGuiaWhrs.tpl',
      1 => 1457810178,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '94804188654c444e4c41ba7-90779182',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_54c444e4ca45b1_40456656',
  'variables' => 
  array (
    'NAV_MENU' => 0,
    'NUMGUIA' => 0,
    'LISTA_REGS' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c444e4ca45b1_40456656')) {function content_54c444e4ca45b1_40456656($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['NAV_MENU']->value;?>

<div class="row-fluid sortable">		
	<div class="box span12">
		<div class="box-header well" data-original-title>
			<h2>Seleccionar WHR para la Guia <?php echo $_smarty_tpl->tpl_vars['NUMGUIA']->value;?>
</h2>
		</div>
		<div class="box-content">
			<button type="button" class="btn btn-small btn-success" id="addNewReg" onclick="agregaWHR('<?php echo $_smarty_tpl->tpl_vars['NUMGUIA']->value;?>
');" style="margin-bottom:12px;"><i class="icon-plus icon-white"></i> Agregar</button>
			<table class="table table-striped table-bordered bootstrap-datatable" id="tblRegs">
				<thead>
					<tr>
						<th>WhareHouse Receipt</th>
						<th>Seleccionar</th>
					</tr>
				</thead>						
				<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['name'] = 'lP';
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['LISTA_REGS']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
					<tr style="padding:0px;" id="tr<?php echo $_smarty_tpl->tpl_vars['LISTA_REGS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['whr'];?>
">
     					<td style="width:240px;"><?php echo $_smarty_tpl->tpl_vars['LISTA_REGS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['whr'];?>
</td>  
						<td class="center">							
							<input type="checkbox"  id="selRow<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']+1;?>
" value='s'>
						</td>
					</tr> 
				<?php endfor; endif; ?>
			 </table>  					            
		</div><!-- box-content -->
	</div><!--/box span12-->			
</div><!--/row fluid-->

<script type="text/javascript">

function agregaWHR(numGuia) {
	var TableData;
	TableData = storeTblValues()
	TableData = $.toJSON(TableData);

	var properties = {
            url: "processAgregaWHRs.php",
            async: true,
            cache: false,
            data: "pTableData=" + TableData+"&numGuia="+numGuia,
            type: "POST",
            success: function(msg){                
					alert(msg);
            }
        };            
        $.ajax(properties);
}

function storeTblValues()
{
    var TableData = new Array();
    var i=0;
    $('#tblRegs tr').each(function(row, tr){
    	var aRowSel = document.getElementById('selRow' + i);
    	
    	if (aRowSel !== null){    		
    		if (aRowSel.checked == true){	
          	  estaSel = 'SI';
      	  	}else {
      		  estaSel = 'NO';
      	  	}	
    	}else{
        	estaSel = 'NO';
    	}
        TableData[row]={
            "Whr" : $(tr).find('td:eq(0)').text()
            , "EstaSel" : estaSel
        }
        i++;    
    }); 
    TableData.shift();  // first row will be empty - so remove
    return TableData;
}


</script><?php }} ?>
