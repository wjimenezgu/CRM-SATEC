<?php /* Smarty version Smarty-3.1.16, created on 2016-09-26 10:48:54
         compiled from "../consultas/view/moviPlantronics.tpl" */ ?>
<?php /*%%SmartyHeaderCode:120569290157e95176e6bea2-81894191%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5761f62feee43134bc96c6e8f1dba24c86f03a7d' => 
    array (
      0 => '../consultas/view/moviPlantronics.tpl',
      1 => 1474908215,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '120569290157e95176e6bea2-81894191',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'NAV_MENU' => 0,
    'CURRENT_DATE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_57e95176e9f0a3_40898442',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e95176e9f0a3_40898442')) {function content_57e95176e9f0a3_40898442($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['NAV_MENU']->value;?>

<section id="main" >
	<div class="box-content">
	
		<form class="form-horizontal">
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
	
	$("#btn_buscarMovi").prop("disabled",true);
    fechaI 		= $("#dateFechaI").val();
    fechaF 		= $("#dateFechaF").val();
    
    window.open('buscarMoviPlantronics.php?fechaI='+fechaI+"&fechaF="+fechaF,'_blank');
    
    $("#btn_buscarMovi").prop("disabled",false);
}



</script>

<?php }} ?>
