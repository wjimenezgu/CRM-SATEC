<?php /* Smarty version Smarty-3.1.16, created on 2015-03-06 09:54:18
         compiled from "../items/view/allItems.tpl" */ ?>
<?php /*%%SmartyHeaderCode:96964663253de858fb0c960-72327859%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cbc0f85890bf94ced3a13ddc3cd1231da8321da6' => 
    array (
      0 => '../items/view/allItems.tpl',
      1 => 1425657243,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '96964663253de858fb0c960-72327859',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53de858fb8d604_61992053',
  'variables' => 
  array (
    'NAV_MENU' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53de858fb8d604_61992053')) {function content_53de858fb8d604_61992053($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['NAV_MENU']->value;?>

<div class="row-fluid ">		
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2></i>Admnistración de Articulos</h2>
        </div>
       
        <div class="box-content">
<!-- Agosto 18, William
     Se pone en comentario la linea para agregar articulo, por que no se ha definido con el usuario
     el modelo de registro de articulos.         
            <button type="button" class="btn btn-small btn-success" id="addNewRow" onclick="window.location ='add.php'" style="margin-bottom:12px;"><i class="icon-plus icon-white"></i> Agregar</button>
 -->

				<div class="control-group">
					<div class="controls">
				 		<label class="radio" style="font-size:1.2vw; ">Criterios de Búsqueda:</label>					
						<label class="radio" style="font-size:1.2vw; ">
							<input type="radio" name="criterio" id="optionCod" value="codigo" checked="" onclick="cleanTxtBuscar()">
							código
						</label>
						<label class="radio" style="font-size:1.2vw; ">
							<input type="radio" name="criterio" id="optionDes" value="nombre" onclick="cleanTxtBuscar()">
							descripción
						</label>
						<label class="radio" style="font-size:1.2vw; ">
							<input type="radio" name="criterio" id="optionExt" value="externo" onclick="cleanTxtBuscar()">
							código externo
						</label>						
                		<form style="margin:0px; padding:0px; float:right; margin-top:-5px;">
                			<input type="text" class="txt_search" id="texto-buscar" name="texto-buscar" value="" style="float: left; margin-left:-90px; font-size:1vw; width:200px;" placeholder="Iniciar Búsqueda">
                    		<input type="button" onclick="findProducto()" value="Buscar" class="alt_btn2" style="float:right; margin-top:4px; margin-left:5px; margin-right:10px; font-size:1.2vw;">
                		</form> 						
					</div>               
				</div>		                               
<!--                 
                <input type="radio" name="criterio" id="criterio" value="codigo" checked="" onclick="cleanTxtBuscar()"> <span style="font-weight:normal;">código</span>    
                <input type="radio" name="criterio" id="criterio" value="nombre" onclick="cleanTxtBuscar()"> <span style="font-weight:normal;">descripción</span>
 -->                
            <table class="table table-striped table-bordered bootstrap-datatable" id="tblItemsList">
                <thead>
                    <tr>
                        <th>Codigo</th>
                        <th>Descripcion</th>
                        <th>Codigo Externo</th>
                        <th>Desc. Externo</th>
                    </tr>
                </thead>
				<tbody id="info-items" >
                                            
                </tbody>
            </table>
         </div>


         

    </div><!--/span-->
</div><!--/row-->


<script type="text/javascript">

function cleanTxtBuscar(){
    
    $("#texto-buscar").val(""); 
    $("#texto-buscar").focus();
    
}

function findProducto(){
  
    criterio    = $('input[name=criterio]:checked').val();
    txtBusqueda = $("#texto-buscar").val();
  
    $("#info-items").load("buscarProducto.php", { criterio : criterio, txtBusqueda : txtBusqueda }, function(response,status,xhr){

    });    
    
    
}

</script>

<?php }} ?>
