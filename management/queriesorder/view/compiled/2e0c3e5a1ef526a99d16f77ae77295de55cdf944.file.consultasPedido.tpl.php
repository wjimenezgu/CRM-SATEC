<?php /* Smarty version Smarty-3.1.16, created on 2016-03-14 09:36:23
         compiled from "../queriesorder/view/consultasPedido.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1753232335423544bf0fa19-31356687%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e0c3e5a1ef526a99d16f77ae77295de55cdf944' => 
    array (
      0 => '../queriesorder/view/consultasPedido.tpl',
      1 => 1457810183,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1753232335423544bf0fa19-31356687',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5423544c000af3_01220608',
  'variables' => 
  array (
    'NAV_MENU' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5423544c000af3_01220608')) {function content_5423544c000af3_01220608($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['NAV_MENU']->value;?>

<section id="main" >
	<div class="box-content">
		<form class="form-horizontal">
    		<div class="control-group" id="boxSelectCriterio">
        		<label class="control-label" for="selectCriterio">Criterio de Búsqueda</label>
            	<div class="controls">                                                   
            		<select id="selectCriterio"  name="selectCriterio" style="width:250px; margin-top:10px;font-size:1vw;">
                		<option  value="0">Codigo</option>                                         
                    	<option  value="1">Descripcion</option>
                    	<option  value="2">Compromiso:Boleta, OC, Cliente</option>
                    	<option  value="3">Descripcion Compromiso</option>
                    	<option  value="4">Codigo Articulo Proveedor</option>
                    	<option  value="5">Numero de Orden</option>
                	</select>
					<form>
						<input type="text" class="txt_search" id="texto-buscar" name="texto-buscar" value="" style="font-size:1vw; width:250px; margin-left:230px;" placeholder="Iniciar Búsqueda">
						<input type="button" id="btn_buscarProducto" onclick="findProducto()" value="Buscar" class="alt_btn2" style="float:right;  margin-left:5px; margin-right:10px; font-size:1.2vw;">
					</form>			               
                
            	</div>
        	</div>	
        </form>
    </div>	             	                                

	<div class="row-fluid ">		
		<div class="box span12">
        	<div class="box-header well" data-original-title>
	            <h2>Consultas Pedidos</h2>
    		</div>
    		<br>       
        	<div class="box-content">        
            	<table class="table table-striped table-bordered bootstrap-datatable" id="tblItemsList">
                	<thead>
                   	 <tr>
                   	     <th>Orden</th>                        
                   	     <th>Línea</th>
                   	     <th>Código</th>
                   	     <th>Código Provee.</th>
                   	     <th>Descripción</th>
                   	     <th>Cantidad</th>                        
                   	     <th>Compromiso</th>
                   	     <th>Est.Arribo</th>
                   	     <th>Estado</th>
                   	   <!--  <th>Eventos</th> -->
                   	 </tr>
                	</thead>
					<tbody id="info-items" >
                                            
                	</tbody>
            	</table>
         	</div>
    	</div><!--/span-->
	</div><!--/row-->
</section>
	
<div id="myModal" class="modal hide fade">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">×</button>
      <h3 id="textMessage"></h3>
    </div>
    <div class="modal-body" >            
        <div id="modalContent" style="display:none;">

        </div>
    </div>
    <div class="modal-footer">
      <a href="#" class="btn btn-info" data-dismiss="modal" >Cerrar</a>
    </div>
</div>  
	

<script type="text/javascript">

$(document).ready(function(){

	// Si presiona enter en el campo texto a buscar que se ejecute el evento click() del boton buscar
    $('#texto-buscar').keypress(function(e){
        if(e.keyCode==13){
        	e.preventDefault();
        	$('#btn_buscarProducto').click();
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

	$("#info-items").html("");
    $("#texto-buscar").val(""); 
    $("#texto-buscar").focus();
    
}

function findProducto(){

    criterio    = $("#selectCriterio").val(); 
    txtBusqueda = $("#texto-buscar").val();
    
    $("#info-items").load("buscarPedidos.php", { criterio : criterio, txtBusqueda : txtBusqueda }, function(response,status,xhr){
    });       
}

function loadInfoEventos2(idPedido,numOrden){

	$("#textMessage").html("Lista de Eventos del Pedido 1 "+numOrden);
	$("#myModal").modal('toggle');
}


function loadInfoEventos(idPedido,numOrden){
	$("#textMessage").html("Lista de Eventos del Pedido "+numOrden);
	$("#myModal").modal('toggle');

	$.ajax({
	    	  cache: false,
	          type : "POST",
	           url : "loadEventos.php", // in here you should put your query 
	          data :  "idPedido="+ idPedido, // here you pass your id via ajax .
	                     // in php you should use $_POST['post_id'] to get this value 
	       success : function(data)
	           {
	              // now you can show output in your modal 
	              $("#mymodal").show();  // put your modal id 
	              $("#modalContent").show().html(data);
	           }
	    });
};

</script>

<?php }} ?>
