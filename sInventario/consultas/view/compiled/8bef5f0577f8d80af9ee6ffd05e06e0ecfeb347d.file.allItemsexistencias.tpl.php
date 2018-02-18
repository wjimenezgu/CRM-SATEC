<?php /* Smarty version Smarty-3.1.16, created on 2016-09-24 22:38:33
         compiled from "../consultas/view/allItemsexistencias.tpl" */ ?>
<?php /*%%SmartyHeaderCode:197941804457e754c9462d40-08688776%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8bef5f0577f8d80af9ee6ffd05e06e0ecfeb347d' => 
    array (
      0 => '../consultas/view/allItemsexistencias.tpl',
      1 => 1474778161,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '197941804457e754c9462d40-08688776',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'NAV_MENU' => 0,
    'LISTA_TIENDAS' => 0,
    'ID_TIENDA' => 0,
    'CURRENT_DATE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_57e754c9497192_45290131',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e754c9497192_45290131')) {function content_57e754c9497192_45290131($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['NAV_MENU']->value;?>

<section id="main" >
	<div class="box-content">
	
		<form class="form-horizontal">

			<div class="control-group" id="boxSelTiendas">				
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
    		<div class="control-group " id="boxSelectCriterio">
        		<label class="control-label"  for="selectCriterio">Criterio de Búsqueda</label>
            	<div class="controls ">                                             
            		<select id="selectCriterio"  name="selectCriterio">
                		<option  value="codigo">Codigo</option>                                         
                    	<option  value="nombre">Descripcion</option>
                    	<option  value="externo">Codigo Articulo Proveedor</option>
                	</select>
                </div>
         	</div>
            <div class="control-group form-inline" id="boxtexto-buscar">
            	<label class="control-label" for="texto-buscar">Indicar Valor Criterio </label>	
            	<div class="controls form-inline">   
					<input type="text" class="txt_search " id="texto-buscar" name="texto-buscar" value="" placeholder="En blanco, todos">
				</div>
			</div>
            <div class="control-group" id="boxdateCorte">	
            	<label class="control-label" for="dateCorte">Fecha Corte</label>                                           
                <div class="controls" id="input-dateCorte">
                	<input type="text" class="datepicker" id="dateCorte" name="dateCorte" placeholder="Indicar Fecha" value="<?php echo $_smarty_tpl->tpl_vars['CURRENT_DATE']->value;?>
"> 
                </div>                       
            </div>                        
			<form>
				<div class="form-actions">
					<input type="button" id="btn_buscarProducto" onclick="findProducto()" value="Buscar" class="btn btn-primary">
				</div>
			</form>		
		</form>
    </div>

<!--    	             	                                
	<div id="imprimir" style="width:250px; margin: 15px 0;display:none;">
		<a href="javascript:;" onclick="printReport()" >Imprimir</a> | <a href="javascript:;" onclick="exportExcel()">Exportar Excel</a> 
	</div>
	<div class="row-fluid ">		
		<div class="box span12">
        	<div class="box-header well" data-original-title>
	            <h2>Consultas Existencias x Articulo</h2>
    		</div>
    		<br>       
        	<div class="box-content">        
            	<table class="table table-striped table-bordered bootstrap-datatable" id="tblItemsList">
                	<thead>
                   	 <tr>
                   	     <th>Codigo</th>                        
                     	 <th>Código Provee.</th>
                   	     <th>Descripción</th>
                   	     <th>Existencia</th>                        
                   	 </tr>
                	</thead>
					<tbody id="info-items" >
                                            
                	</tbody>
            	</table>
         	</div>
    	</div>
	</div>
 --> 
</section>
	
	

<script type="text/javascript">

$(document).ready(function(){

	// Si presiona enter en el campo texto a buscar que se ejecute el evento click() del boton buscar
    $('#texto-buscar').keypress(function(e){
        if(e.keyCode==13){
        	e.preventDefault();
        	$('#btn_buscarProducto').click();
        	$("#btn_buscarProducto").prop("disabled",true);
        }
      });

	// si cambia el criterio de busqueda se limpia la tabla y el "focus" se pone en el texto a buscar
	// eso lo hace la funcion cleanTxtBuscar();
    $("#selectCriterio").on("change", function(e){
        e.preventDefault();
        cleanTxtBuscar();
        $("#btn_buscarProducto").prop("disabled",false);
        $("#texto-buscar").focus();
    });
    
    $("#selectStore").on("change", function(e){
        e.preventDefault();
        cleanTxtBuscar();
        $("#btn_buscarProducto").prop("disabled",false);
        $("#texto-buscar").focus();
    }); 
    
    $("#texto-buscar").on("change", function(e){
        e.preventDefault();
        $("#info-items").html("");
        $("#btn_buscarProducto").prop("disabled",false);        
    }); 
	
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

function cleanTxtBuscar(){

//	$("#info-items").html("");
    $("#texto-buscar").val(""); 
    $("#texto-buscar").focus();
    
}

function findProducto(){
	
	$("#btn_buscarProducto").prop("disabled",true);
	$('#imprimir').css('display', 'block'); 
    criterio    = $("#selectCriterio").val(); 
    txtBusqueda = $("#texto-buscar").val();
    tienda      = $("#selectStore").val(); 
    fecha 		= $("#dateCorte").val();

    /*
    $("#info-items").load("buscarExistencias.php", { criterio : criterio, txtBusqueda : txtBusqueda , tienda : tienda, fecha:fecha}, function(response,status,xhr){
    }); 
    */
    
    window.open('buscarExistencias.php?criterio='+criterio+"&txtBusqueda="+txtBusqueda+"&tienda="+tienda+"&fecha="+fecha,'_blank');
    
    $("#btn_buscarProducto").prop("disabled",false);
}


function printReport(){
	$('#imprimir').css('display', 'none'); 
	if (window.print) {
		window.print();
	}else{
		alert("Lo siento, pero a su navegador no se le puede ordenar imprimir" + " desde la web. Actualise o hagalo desde los menús");
	}
	
	setTimeout("$('#imprimir').css('display', 'block')", 800);
}


</script>

<?php }} ?>
