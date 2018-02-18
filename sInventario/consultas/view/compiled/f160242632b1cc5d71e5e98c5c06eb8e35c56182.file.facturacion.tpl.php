<?php /* Smarty version Smarty-3.1.16, created on 2017-03-23 12:02:30
         compiled from "../consultas/view/facturacion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7082135725705a9e85403b3-93751188%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f160242632b1cc5d71e5e98c5c06eb8e35c56182' => 
    array (
      0 => '../consultas/view/facturacion.tpl',
      1 => 1490279496,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7082135725705a9e85403b3-93751188',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5705a9e8594c92_18592610',
  'variables' => 
  array (
    'NAV_MENU' => 0,
    'LISTA_TIENDAS' => 0,
    'ID_TIENDA' => 0,
    'CURRENT_DATE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5705a9e8594c92_18592610')) {function content_5705a9e8594c92_18592610($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['NAV_MENU']->value;?>

<section id="main" >
    <div class="box-content">
    <div class="control-group">
     
            <h1></i>Consulta Facturacion</h1>
     
     
            <form class="form-horizontal">

            <div class="control-group" id="boxselectStore">              
                <label class="control-label" for="selectStore">Seleccionar Tienda</label>   
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
            </form>           
                    
        <form class="form-horizontal">
            <div class="control-group" id="boxdateInicial">  
                <label class="control-label" for="dateInicial">Fecha Inicial</label>                                           
                <div class="controls" id="input-dateInicial">
                    <input type="text" class="datepicker" id="dateInicial" name="dateInicial" placeholder="Indicar Fecha Inicio" value="<?php echo $_smarty_tpl->tpl_vars['CURRENT_DATE']->value;?>
"> 
                </div>                       
            </div>                        
            <div class="control-group" id="boxdateFinal">  
                <label class="control-label" for="dateFinal">Fecha Final</label>                                           
                <div class="controls" id="input-dateFinal">
                    <input type="text" class="datepicker" id="dateFinal" name="dateFinal" placeholder="Indicar Fecha Final" value="<?php echo $_smarty_tpl->tpl_vars['CURRENT_DATE']->value;?>
"> 
                </div>                       
            </div>  
                 
            <form>
                <div class="form-actions">
                    <input type="button" id="btn_buscarMovi" onclick="prnFacturacion()" value="Generar Reporte" class="btn btn-primary">
                </div>
            </form>     
        </form>
    </div>
</section>
    

<script type="text/javascript">


function goPage(){
		var store 	= $("#selectStore").val();
		var fechaI 	= $("#dateInicial").val();
		var fechaF 	= $("#dateFinal").val();
				
		window.open('prnFacturacion.php?store='+store+"&fechaI="+fechaI+"&fechaF="+fechaF,'_blank');

	};	

$(document).ready(function(){    
    
    $('.datepicker').datepicker({
       language: "es",
       format:"dd/mm/yyyy",
       todayHighlight: true,
       autoclose: true
       //,           
       //startDate: new Date()
    });
    
    $( "#dateInicial" ).datepicker({dateFormat:"dd/mm/yyyy"}).datepicker("setDate",new Date());
    $( "#dateFinal" ).datepicker({dateFormat:"dd/mm/yyyy"}).datepicker("setDate",new Date());

});

function prnFacturacion(){
	// Se debe validar primero si los campos obligatorio fueron seleccionados.
	
	// se inicializa a con false, no hay errores
	var errors = false;

    // El campo tienda es obligatorio
	var selStore = $("#selectStore").val();
    if(selStore == "-1"){
        $("#boxselectStore").addClass("error");
        errors = true;
    }else{
        $("#boxselectStore").removeClass("error");
    }
	// fecha inicial es obligatorio
    var fInicial = $("#dateInicial").val();
    if(fInicial == ""){
        $("#input-dateInicial").addClass("error");
        errors = true;
    }else{
        $("#input-dateInicial").removeClass("error");
    }
   
	// fecha final es obligatorio
    var fFinal = $("#dateFinal").val();
    if(fFinal == ""){
        $("#input-dateFinal").addClass("error");
        errors = true;
    }else{
        $("#input-dateFinal").removeClass("error");
    }
    
    if(errors != true){
    	
    	// todos los datos obligarios fueron suministrados.
    	// se debe revisar fecha final >= a fecha inicial
    	var startDate = $('#dateInicial').datepicker('getDate');
		var endDate = $('#dateFinal').datepicker('getDate');	
		if (startDate > endDate){
			
			errors = true;
			// fecha inicial es mayor a la fecha final
			$("#input-dateFinal").addClass("error");
			$("#input-dateInicial").addClass("error");
			document.getElementById('message-fields-obl').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Fecha Inicial mayor a Fecha Final</strong></div>";
			return false;
		
		}else{
			$("#input-dateFinal").removeClass("error");
			$("#input-dateInicial").removeClass("error");
			// no hay errores se puede continuar
			// se limpia el campo de mensaje de errores.
			$("#message-fields-obl").html("");
			
			
			var store 	= $("#selectStore").val();
			var fechaI 	= $("#dateInicial").val();
			var fechaF 	= $("#dateFinal").val();
					
			window.open('prnFacturacion.php?store='+store+"&fechaI="+fechaI+"&fechaF="+fechaF,'_blank');
		}
   	 
    }else{
        $("#message-fields-obl").html("<div class='alert alert-error pull-left'><span class='icon icon-red icon-alert'/></span> Complete la Información Requerida</strong></div>");
        return false;
    } // if(errors != true)    
        
}




</script>

<?php }} ?>
