<?php /* Smarty version Smarty-3.1.16, created on 2017-03-02 12:39:01
         compiled from "../consultas/view/allreparaciones.tpl" */ ?>
<?php /*%%SmartyHeaderCode:158419585558b868164235c4-22552727%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b938d6d1d6ce34e0561122a2373f22aee31d5a0c' => 
    array (
      0 => '../consultas/view/allreparaciones.tpl',
      1 => 1488483515,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '158419585558b868164235c4-22552727',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_58b8681646dab2_70224347',
  'variables' => 
  array (
    'NAV_MENU' => 0,
    'LISTA_TIENDAS' => 0,
    'ID_TIENDA' => 0,
    'CURRENT_DATE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b8681646dab2_70224347')) {function content_58b8681646dab2_70224347($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['NAV_MENU']->value;?>

<section id="main" >
    <div class="box-content">
    
        <form class="form-horizontal">

            <div class="control-group" id="boxSelTiendas">              
                <label class="control-label" for="selectStore">Seleccionar Tienda </label>  
                <div class="controls">                                                      
                    <select  id="selectStore" name="selectStore">                               
                        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['name'] = 'lP';
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['LISTA_TIENDAS']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                            <option value="<?php echo $_smarty_tpl->tpl_vars['LISTA_TIENDAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['codTienda'];?>
" <?php if ($_smarty_tpl->tpl_vars['LISTA_TIENDAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['codTienda']==$_smarty_tpl->tpl_vars['ID_TIENDA']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LISTA_TIENDAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['nombreTienda'];?>
</option>                                 
                        <?php endfor; endif; ?>
                    </select>
                </div>
            </div>      

            <div class="control-group " id="boxSelectCriterio">
                <label class="control-label"  for="selectCriterio">Estados </label>
                <div class="controls ">                                             
                    <select id="selectCriterio"  name="selectCriterio">
                        <option  value="A">Activa</option> 
                        <option  value="F">Cerrada</option>
                        <option  value="R">Reparada</option>
                    </select>
                </div>
            </div>
            
            <div class="control-group " id="boxSelectCriterio">
                <label class="control-label"  for="selectCriterio2">Incluir con </label>
                <div class="controls ">                                             
                    <select id="selectCriterio2"  name="selectCriterio2">
                        <option  value="A">Adelanto</option> 
                        <option  value="R">Reparacion</option>
                        <option  value="N">Ambos</option>
                    </select>
                </div>
            </div>   

            <div class="control-group" id="boxdateFechaI">  
                <label class="control-label" for="dateFechaI">Fecha Inicial</label>                                           
                <div class="controls" id="input-dateFechaI">
                    <input type="text" class="datepicker" id="dateFechaI" name="dateFechaI" placeholder="Indicar Fecha Inicio" value="<?php echo $_smarty_tpl->tpl_vars['CURRENT_DATE']->value;?>
"> 
                </div>                       
            </div>                        
            <div class="control-group" id="boxdateFechaF">  
                <label class="control-label" for="dateFechaF">Fecha Final</label>                                           
                <div class="controls" id="input-dateFechaF">
                    <input type="text" class="datepicker" id="dateFechaF" name="dateFechaF" placeholder="Indicar Fecha Final" value="<?php echo $_smarty_tpl->tpl_vars['CURRENT_DATE']->value;?>
"> 
                </div>                       
            </div>            
            <form>
                <div class="form-actions">
                    <input type="button" id="btn_buscarMovi" onclick="findMovi()" value="Generar" class="btn btn-primary">
                </div>
        </form>
    </div>
</section>
    
    

<script type="text/javascript">

$(document).ready(function(){
    
    $('.datepicker').datepicker({
        language: "es",
        format:"dd/mm/yyyy",
        todayHighlight: true,
        autoclose: true
      //  ,           
      //  startDate: new Date(),
       , defaultDate : new Date()
     });


});


function findMovi(){
    
    //$("#btn_buscarMovi").prop("disabled",true);
    fechaI      = $("#dateFechaI").val();
    fechaF      = $("#dateFechaF").val();
    codtienda   = $("#selectStore").val(); 
    criterio    = $("#selectCriterio").val(); 
    incluir     = $("#selectCriterio2").val(); 

     window.open('buscarReparaciones.php?codtienda='+codtienda+"&criterio="+criterio+"&incluir="+incluir+"&fechaI="+fechaI+"&fechaF="+fechaF,'_blank');
}



</script>

<?php }} ?>
