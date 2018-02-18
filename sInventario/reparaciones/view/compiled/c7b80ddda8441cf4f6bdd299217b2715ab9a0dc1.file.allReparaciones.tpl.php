<?php /* Smarty version Smarty-3.1.16, created on 2016-07-15 09:12:39
         compiled from "../reparaciones/view/allReparaciones.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29167832955f74d6a748883-62359480%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7b80ddda8441cf4f6bdd299217b2715ab9a0dc1' => 
    array (
      0 => '../reparaciones/view/allReparaciones.tpl',
      1 => 1468595551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29167832955f74d6a748883-62359480',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_55f74d6a792835_14939351',
  'variables' => 
  array (
    'NAV_MENU' => 0,
    'ID_TIENDA' => 0,
    'NOMBRE_TIENDA' => 0,
    'LISTA_TIENDAS' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f74d6a792835_14939351')) {function content_55f74d6a792835_14939351($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['NAV_MENU']->value;?>

			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<input type="hidden" name="id_tienda" id="id_tienda" value="<?php echo $_smarty_tpl->tpl_vars['ID_TIENDA']->value;?>
">
						<h2>Administración de Reparaciones</h2>
					<!-- <input type="text" class="pull-right" id="tienda" style="background-color: AliceBlue;" name="tienda"   value="<?php echo $_smarty_tpl->tpl_vars['NOMBRE_TIENDA']->value;?>
">   -->	
						
					</div>
					<div class="box-content">
						<table class="form-horizontal" style="width:100%">
						<tbody>
						<td>
						<button type="button" class="btn btn-small btn-success" id="addReparacion" onclick="goPage(1,0)" style="margin-bottom:12px;"><i class="icon-plus icon-white"></i> Agregar</button>
						</td>
                    		<td align="right">
                    		<div class="control-group" id="boxSelTiendas">
                    		<select  id="selectStore" name="selectStore" disabled>                         		
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
                    		</td>
                    		</tbody>						
						</table>
						<table class="table table-striped table-bordered bootstrap-datatable" id="tblDataE">
						  <thead>
							  <tr>
								  <th>Fecha Recibida</th>
								  <th>Id</th>
								  <th>Cliente</th>
								  <th>Equipo</th>
								  <th>Daño/Problema</th>
								  <th>Reparacion</th>
								  <th>Estado</th>
								  <th>Acción</th>
							  </tr>
						  </thead>
						  <tbody id="info-repa" >						
						  </tbody>
					  </table>  
					            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->

<script type="text/javascript">
$(document).ready(function(){  


	findRepa();
});

	// Octubre 15, 2014 William Jimenez
	// Function goPage
	// Descripcion: permite enviar al usuario a la pantalla para agregar o modificar registro
	// Parametros:
	//			action: 1> Insertar, 2>Modificar, 3>Borrar, 6>Imprimir
	//			id: El id del registro que se desea modificar o borrar, en el caso de insertar este parametro no se utiliza.
	function goPage(action,id){			
		if(action == 7){
			window.open('prnListData.php?action='+action+"&id="+id,'_blank');
		}else{
			if (action == 6 || action == 8){ // facturar la boleta ya sea el adelanto o la reparacion
			
				if (confirm('Esta seguro que desea facturarlo?')) {
				    // Save it!
					var properties = {
	            			url  : "prnFactuRepa.php",
	                		async: false,
	                		cache: false,
	                		datatype:"text",
	                		data : "action="+action+"&id="+id+"&idTienda="+$('#id_tienda').val(),	
	                		type : "GET",
	                		success: function(data){
	                			if (data.trim()!='OK') {
	                				alert(data);
	                			}else{
	                				
	                				//todo OK se manda a imprimir la factura de la reparacion.
	                				// version anterior para imprimr factura, esta opcion abre una pantalla con los datos de la factura
	                				//window.open('imprimir.php?factura='+$('#idFactura').val(),'_blank');
	                				// nueva version de imprimir esta no abre pantalla alguna, imprime la factura
	                				// directamente en la impresora default.
	                			//	window.location.href ='ImpreFacRepa.php?idDoc='+id+'&action='+action; // factura
	                				window.location.href = 'index.php';                				
	                				//$dummy="";
	                				//window.location.href ='index.php';        
	                			}
	                		}, // success,
	      					error: function(jqXHR,textStatus,errorThrown){
	      						 	var err = eval("(" + jqXHR.responseText + ")");
	      						  	alert('Error al Imprimir Factura Reparacion'+err.Message);
	          						//alert('Error al imprimir '+errorThrown);
	      							}
	            		}; // var properties            
	      				$.ajax(properties);
				} 
				
				
			                
								
			//	window.open('prnFactuRepa.php?action='+action+"&id="+id);				
			}else{
				window.location.href ='Reparaciones.php?action='+action+"&id="+id;
			}
		}	
		
	};
	
	$("#selectFiltroRep").on("change", function(e){
	    e.preventDefault();
	    var table = document.getElementById("info-repa");
        while(table.rows.length > 1) {
        	  table.deleteRow(1);
        	}
        findRepa();
        /*
	    criterio    = $("#selectFiltroRep").val(); // posibles valores A: activas, C: cerradas	  	
	    idTienda    = $("#selectStore").val();
	    
	    $("#info-repa").load("buscaReparaciones.php", { criterio : criterio, idTienda : idTienda }, function(response,status,xhr){
	    }); 
	   */
	});
	
	
	function findRepa(){
	
	//	$('#tblDataE').fnDestroy();
	//	tableRep.fnDestroy();
	    criterio    = $("#selectFiltroRep").val(); // posibles valores A: activas, H: historicas
	    idTienda    = $("#selectStore").val(); 
	    
	    $("#info-repa").load("buscaReparaciones.php", { criterio : criterio , idTienda : idTienda }, function(response,status,xhr){

	    });    
	    
	    
	}
	
	$("#selectStore").on("change", function(e){
	    e.preventDefault();
	  
	    criterio    = $("#selectFiltroRep").val(); // posibles valores A: activas, C: cerradas	  	
	    idTienda    = $("#selectStore").val(); 
	    $("#info-repa").load("buscaReparaciones.php", { criterio : criterio, idTienda : idTienda }, function(response,status,xhr){
	    }); 
	});
	
</script><?php }} ?>
