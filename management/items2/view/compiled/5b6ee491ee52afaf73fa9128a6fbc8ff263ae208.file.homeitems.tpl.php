<?php /* Smarty version Smarty-3.1.16, created on 2014-08-18 13:27:15
         compiled from "../items2/view/homeitems.tpl" */ ?>
<?php /*%%SmartyHeaderCode:51336503653f01d884b44e1-72626841%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b6ee491ee52afaf73fa9128a6fbc8ff263ae208' => 
    array (
      0 => '../items2/view/homeitems.tpl',
      1 => 1408386334,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '51336503653f01d884b44e1-72626841',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53f01d8851cc04_11126105',
  'variables' => 
  array (
    'NAV_MENU' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f01d8851cc04_11126105')) {function content_53f01d8851cc04_11126105($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['NAV_MENU']->value;?>

<div class="row-fluid ">		
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2></i>Admnistración de Articulos</h2>
        </div>
       
        <div class="box-content">
            <button type="button" class="btn btn-small btn-success" id="addNewRow" onclick="window.location ='add.php'" style="margin-bottom:12px;"><i class="icon-plus icon-white"></i> Agregar</button>
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
