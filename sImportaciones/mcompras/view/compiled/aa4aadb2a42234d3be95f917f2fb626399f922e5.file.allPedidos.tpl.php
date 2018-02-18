<?php /* Smarty version Smarty-3.1.16, created on 2017-03-27 23:03:30
         compiled from "../mcompras/view/allPedidos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:213523693758d9eea231bd85-23510473%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa4aadb2a42234d3be95f917f2fb626399f922e5' => 
    array (
      0 => '../mcompras/view/allPedidos.tpl',
      1 => 1490677143,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '213523693758d9eea231bd85-23510473',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'NAV_MENU' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_58d9eea232efa3_34825451',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d9eea232efa3_34825451')) {function content_58d9eea232efa3_34825451($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['NAV_MENU']->value;?>

			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2>Lista de Pedidos</h2>
						
					</div>
					<div class="box-content">
						<table class="form-horizontal">
						<tbody>
						<td>
						<button type="button" class="btn btn-small btn-success" id="addCompra" onclick="goPage(1,0)" style="margin-bottom:12px;"><i class="icon-plus icon-white"></i> Agregar</button>
						</td>
						<td style="width:500px;">
						<div class="control-group" id="boxFiltroRep">
								<label class="control-label" for="selectFiltro">Desplegar solo</label>
								<div class="controls">
									<select id="selectFiltro" name ="selectFiltro" style="width: 175px;">
                            			<option value="A" selected>Abiertos</option>
                            			<option value="C">Cerrados</option>
                        			</select>
                        		</div>
                    		</div>
                    		</td>
                    		</tbody>						
						</table>
						<table class="table table-striped table-bordered bootstrap-datatable" id="tblDataE">
						  <thead>
							  <tr>
                                            <th># Pedido</th>
                                            <th>N° Orden</th>                                            
                                            <th>Proveedor</th> 
                              
                                            <th>Fecha Creación</th>
                                            <th>Acciones</th>
                                        </tr>
						  </thead>
						  <tbody id="info-ped" >
					
						  </tbody>
					  </table>  
					            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->

<script type="text/javascript">
$(document).ready(function(){    

	findPedidos();

});

	// Octubre 15, 2014 William Jimenez
	// Function goPage
	// Descripcion: permite enviar al usuario a la pantalla para agregar o modificar registro
	// Parametros:
	//			action: 1> Insertar, 2>Modificar, 3>Borrar, 4>Visualizar, 6>Imprimir
	//			id: El id del registro que se desea modificar o borrar, en el caso de insertar este parametro no se utiliza.
	function goPage(action,id){			
		
		window.location.href ='pedidoPrecarga.php?action='+action+"&id="+id;			
			
		
	};
	
	$("#selectFiltro").on("change", function(e){
	    e.preventDefault();
	  
	    criterio    = $("#selectFiltro").val(); // posibles valores A: Pendientes, R: recibidas N: anuladas	  	
	    
	    $("#info-ped").load("buscaPedidos.php", { criterio : criterio }, function(response,status,xhr){
	    }); 
	});
	
	
	function findPedidos(){
		 
	    criterio    = $("#selectFiltro").val(); // posibles valores A: Pendientes, R: recibidas N: anuladas
	  
	    $("#info-ped").load("buscaPedidos.php", { criterio : criterio }, function(response,status,xhr){

	    });    
	    
	    
	}
	
</script><?php }} ?>
