<?php /* Smarty version Smarty-3.1.16, created on 2016-10-11 10:20:39
         compiled from "../facturacion/view/existencia.tpl" */ ?>
<?php /*%%SmartyHeaderCode:49242682357fd11576cd7b8-51657234%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8d544db614e1cc4852872dfcb5fbf12067af6ac' => 
    array (
      0 => '../facturacion/view/existencia.tpl',
      1 => 1476202546,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '49242682357fd11576cd7b8-51657234',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'COD_ART' => 0,
    'DESCRIPCION' => 0,
    'EXISTENCIA' => 0,
    'TRANSITO' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_57fd1157738011_86959658',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57fd1157738011_86959658')) {function content_57fd1157738011_86959658($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include '/var/www/html/CRM-SATEC/resources/libs/smarty/libs/plugins/modifier.capitalize.php';
?><h3 class="modal-title green"><i class="fa fa-bars"></i> Existencia en Tiendas - <?php echo $_smarty_tpl->tpl_vars['COD_ART']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['DESCRIPCION']->value;?>
 </h3>      
<table class="table table-condensed bootstrap-datatable" id="tblAllExistencia" style="width:750px">
  <thead>
        <tr> 
            <th style="cursor: pointer;">Tienda</th>
            <th style="cursor: pointer; text-align: right;">Existencia</th>
            <th></th>
        </tr>
  </thead>   
  <tbody> 
    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['EXISTENCIA']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>    
    <tr id="inv-rowArt1">
        <td class="center"><?php echo smarty_modifier_capitalize(mb_strtolower($_smarty_tpl->tpl_vars['EXISTENCIA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['Tienda'], 'UTF-8'));?>
</td>
        <td class="center" style="text-align: right"><?php echo $_smarty_tpl->tpl_vars['EXISTENCIA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['Existencia'];?>
</td>
        <td class="center">
       

    </td>        
    </tr>
    <?php endfor; endif; ?>    
  </tbody>
</table>

</-- TABLA DE ARTICULOS EN TRANSITO -->

<h3 class="modal-title green"><i class="fa fa-bars"></i> En Transito Hacia </h3>  
<table class="table table-condensed bootstrap-datatable" id="tblTransito" style="width:750px">
  <thead>
        <tr>
            <th style="cursor: pointer;">Tienda (Id Traslado)</th>
            <th style="cursor: pointer; text-align: right;">Cantidad</th>
            <th></th>
        </tr>
  </thead>   
  <tbody> 
    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['x'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['x']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['TRANSITO']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['name'] = 'x';
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['x']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['x']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['x']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['x']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['x']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['x']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['total']);
?>    
    <tr id="inv-rowArt2">
        <td class="center"><?php echo $_smarty_tpl->tpl_vars['TRANSITO']->value[$_smarty_tpl->getVariable('smarty')->value['section']['x']['index']]['NombreTienda'];?>
 (<?php echo $_smarty_tpl->tpl_vars['TRANSITO']->value[$_smarty_tpl->getVariable('smarty')->value['section']['x']['index']]['IdTraslado'];?>
)</td>
        <td class="center" style="text-align: right"><?php echo $_smarty_tpl->tpl_vars['TRANSITO']->value[$_smarty_tpl->getVariable('smarty')->value['section']['x']['index']]['Cantidad'];?>
</td>
        <td class="center">
       

    </td>        
    </tr>
    <?php endfor; endif; ?>    

  </tbody>
</table>


<?php }} ?>
