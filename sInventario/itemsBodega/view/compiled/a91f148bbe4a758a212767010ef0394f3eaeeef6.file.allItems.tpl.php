<?php /* Smarty version Smarty-3.1.16, created on 2015-03-14 10:38:27
         compiled from "../items3/view/allItems.tpl" */ ?>
<?php /*%%SmartyHeaderCode:158103300954f9cc5982cd08-11026875%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a91f148bbe4a758a212767010ef0394f3eaeeef6' => 
    array (
      0 => '../items3/view/allItems.tpl',
      1 => 1426347483,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '158103300954f9cc5982cd08-11026875',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_54f9cc5986ed77_57699653',
  'variables' => 
  array (
    'NAV_MENU' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f9cc5986ed77_57699653')) {function content_54f9cc5986ed77_57699653($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['NAV_MENU']->value;?>

<div class="row-fluid ">		
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2></i>Admnistración de Articulos</h2>
        </div>
       
        <div class="box-content">
        <!--  
            <button type="button" class="btn btn-small btn-success" id="addNewRow" onclick="window.location ='add.php'" style="margin-bottom:12px;"><i class="icon-plus icon-white"></i> Agregar</button>
          -->
            <button type="button" class="btn btn-small btn-success" id="addNewRow" onclick="goPage(1,0)" style="margin-bottom:12px;"><i class="icon-plus icon-white"></i> Agregar</button>

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
                    		<input type="button" id="btn_buscarItems" onclick="findItems()" value="Buscar" class="alt_btn2" style="float:right; margin-top:4px; margin-left:5px; margin-right:10px; font-size:1.2vw;">
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
                        <th>Código</th>
                        <th>Descripción</th>
                        <th>Código Externo</th>
                        <th>Desc. Externo</th>
                        <th>Acción</th>
                    </tr>
                </thead>
				<tbody id="info-items" >
                                            
                </tbody>
            </table>
         </div>


         

    </div><!--/span-->
</div><!--/row-->


<script type="text/javascript">

$(document).ready(function(){

	// Si presiona enter en el campo texto a buscar que se ejecute el evento click() del boton buscar
    $('#texto-buscar').keypress(function(e){
        if(e.keyCode==13){
        	e.preventDefault();
        	$('#btn_buscarItems').click();
        }
      });

	// si cambia el criterio de busqueda se limpia la tabla y el "focus" se pone en el texto a buscar
	// eso lo hace la funcion cleanTxtBuscar();
    $("#selectCriterio").on("change", function(e){
        e.preventDefault();
        cleanTxtBuscar();
        $("#texto-buscar").focus();
    });

});


function cleanTxtBuscar(){
    
    $("#texto-buscar").val(""); 
    $("#texto-buscar").focus();
    
}

function findItems(){
  
    criterio    = $('input[name=criterio]:checked').val();
    txtBusqueda = $("#texto-buscar").val();
  
    $("#info-items").load("buscarProducto.php", { criterio : criterio, txtBusqueda : txtBusqueda }, function(response,status,xhr){

    });    
    
    
}

// Octubre 15, 2014 William Jimenez
// Function goPage
// Descripcion: permite enviar al usuario a la pantalla para agregar o modificar registro
// Parametros:
//			action: 1> Insertar, 2>Modificar, 3>Borrar
//			id: El id del registro que se desea modificar o borrar, en el caso de insertar este parametro no se utiliza.
function goPage(action, id){
	
	window.location.href ='items.php?action='+action+"&id="+id;	
}	

</script>

<?php }} ?>
