<?php /* Smarty version Smarty-3.1.16, created on 2017-03-02 13:37:12
         compiled from "../consultas/view/listreparaciones.tpl" */ ?>
<?php /*%%SmartyHeaderCode:202344811558b869f0cd5554-73399008%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '784a464ae7aa68c9aa5ed49fb2ebbea0d1fc5681' => 
    array (
      0 => '../consultas/view/listreparaciones.tpl',
      1 => 1488487019,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '202344811558b869f0cd5554-73399008',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_58b869f0d690f7_12254670',
  'variables' => 
  array (
    'NAV_MENU' => 0,
    'NOMBRE_TIENDA' => 0,
    'ESTADO' => 0,
    'TIT_REPORTE' => 0,
    'CURRENT_DATE' => 0,
    'TIT_EXPORT' => 0,
    'INCLUIR' => 0,
    'LISTA_REPARACIONES' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b869f0d690f7_12254670')) {function content_58b869f0d690f7_12254670($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['NAV_MENU']->value;?>

    <section id="main" >
        <h2 style="font-family:'Courier New', Courier, serif;">TIENDA: <?php echo $_smarty_tpl->tpl_vars['NOMBRE_TIENDA']->value;?>
</h2>
        <h2 style="font-family:'Courier New', Courier, serif;">ESTADO REPARACION: <?php echo $_smarty_tpl->tpl_vars['ESTADO']->value;?>
</h2>
        <h2 style="font-family:'Courier New', Courier, serif;"><?php echo $_smarty_tpl->tpl_vars['TIT_REPORTE']->value;?>
</h2>
        Generado el: <?php echo $_smarty_tpl->tpl_vars['CURRENT_DATE']->value;?>

        <form name="export" id="export" method="post" action="reports_export_excel.php" target="_blank">
            <input type="hidden" id="cual" name="cual" value="<?php echo $_smarty_tpl->tpl_vars['TIT_EXPORT']->value;?>
" />
            <input type="hidden" id="cualEnc" name="cualEnc" value="<?php echo $_smarty_tpl->tpl_vars['TIT_REPORTE']->value;?>
" />
            <input type="hidden" id="incluir" name="incluir" value="<?php echo $_smarty_tpl->tpl_vars['INCLUIR']->value;?>
">
            <input type="hidden" id="cualTienda" name="cualTienda" value="<?php echo $_smarty_tpl->tpl_vars['NOMBRE_TIENDA']->value;?>
" />
            <input type="hidden" id="dataExcel" name="dataExcel" />
        </form>                                             
        <div id="imprimir" style="width:250px; margin: 15px 0;">
            <a href="javascript:;" onclick="printReport()" >Imprimir</a>
        </div>               
        <table  id="tblItemsList"  class="widefat" style="width: 100%;font-family:'Courier New', Courier, serif;">   
            <thead>
                <tr>                  
                    <th style="text-align:left">Fecha Recibido</th>
                    <th style="text-align:left">ID</th>  
                    <th style="text-align:left">Cliente</th>
                    <th style="text-align:left">Equipo</th> 
                    <th class="center <?php if ($_smarty_tpl->tpl_vars['INCLUIR']->value=="R") {?> hidden <?php }?>" style="text-align:right">Adelanto</th>
                    <th class="center <?php if ($_smarty_tpl->tpl_vars['INCLUIR']->value=="A") {?> hidden <?php }?>" style="text-align:right">Reparacion</th>
                </tr>
            </thead>
            <tbody id="info-items" >
                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['name'] = 'lP';
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['LISTA_REPARACIONES']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                    <tr style="padding:0px; id="REPARACIONES"> 
                        <td ><?php echo $_smarty_tpl->tpl_vars['LISTA_REPARACIONES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['FechaRecibido'];?>
</td> 
                        <td ><?php echo $_smarty_tpl->tpl_vars['LISTA_REPARACIONES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['idReparacion'];?>
</td>                  
                        <td ><?php echo $_smarty_tpl->tpl_vars['LISTA_REPARACIONES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['nombre'];?>
</td> 
                        <td ><?php echo $_smarty_tpl->tpl_vars['LISTA_REPARACIONES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['Equipo'];?>
</td>
                       
                        
                        <td class="center <?php if ($_smarty_tpl->tpl_vars['INCLUIR']->value=="R") {?> hidden <?php }?>" style="text-align:right"><?php echo $_smarty_tpl->tpl_vars['LISTA_REPARACIONES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['Adelanto'];?>
</td>

                        <td class="center <?php if ($_smarty_tpl->tpl_vars['INCLUIR']->value=="A") {?> hidden <?php }?>" style="text-align:right"><?php echo $_smarty_tpl->tpl_vars['LISTA_REPARACIONES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['TotalReparacion'];?>
</td>     
                    </tr> 
                <?php endfor; endif; ?>                                            
            </tbody>
        </table>    
</section>
    
    

<script type="text/javascript">

$(document).ready(function(){

});

function exportExcel(){
    //alert( $("<div>").append($(".widefat").eq(0).clone()).html() );
    $("#dataExcel").val( $("<div>").append($(".widefat").eq(0).clone()).html());
    $("#export").submit();
}

function printReport(){
    $('#imprimir').css('display', 'none'); 
    if (window.print) {
        window.print();
    }else{
        alert("Lo siento, pero a su navegador no se le puede ordenar imprimir" + " desde la web. Actualise.");
    }
    
    setTimeout("$('#imprimir').css('display', 'block')", 800);
}


</script>

<?php }} ?>
