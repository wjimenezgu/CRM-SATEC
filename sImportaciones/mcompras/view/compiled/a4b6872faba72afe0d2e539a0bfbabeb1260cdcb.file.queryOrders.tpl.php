<?php /* Smarty version Smarty-3.1.16, created on 2016-04-05 15:51:32
         compiled from "../mcompras/view/queryOrders.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17172917555453c0f09d6778-13572322%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4b6872faba72afe0d2e539a0bfbabeb1260cdcb' => 
    array (
      0 => '../mcompras/view/queryOrders.tpl',
      1 => 1457810178,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17172917555453c0f09d6778-13572322',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5453c0f0a12b06_47244924',
  'variables' => 
  array (
    'NAV_MENU' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5453c0f0a12b06_47244924')) {function content_5453c0f0a12b06_47244924($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['NAV_MENU']->value;?>

	<section id="main" >
		<h4 class="alert_info_bar" style="font-size:1.2vw; ">
			<img src="../../resources/img/icn_alert_info.png" style="float: left; margin-top:2px; margin-left:10px;"> Criterios de Búsqueda:
			<label class="radio" style="font-size:1.2vw; ">    
				<input type="radio" name="criterio" id="criterio" value="0" checked="" onclick="cleanTxtBuscar()"> <span style="margin-left:5px;">Warehouse Receipt</span>    
			</label>
			<form style="margin:0px; padding:0px; float:right; margin-top:-5px;">
				<input type="text" class="txt_search" id="texto-buscar" name="texto-buscar" value="" style="float: left; margin-left:-90px; font-size:1vw; width:150px;" placeholder="Iniciar Búsqueda">
				<input type="button" id="btn_buscarProducto" onclick="findOrdenes()" value="Buscar" class="alt_btn2" style="float:right; margin-top:4px; margin-left:5px; margin-right:10px; font-size:1.2vw;">
			</form>               
		
		</h4>

		<div class="row-fluid ">		
    		<div class="box span12">
        		<div class="box-header well" data-original-title>
            		<h2>Recibir Mercaderia</h2>
    			</div>       
        		<div class="box-content">        
	            	<table class="table table-striped table-bordered bootstrap-datatable" id="tblItemsList">
                		<thead>
                    		<tr>
                        		<th>Orden</th>
                        		<th>#</th>                        
                        		<th>Codigo</th>
                        		<th>Externo</th>
                        		<th>Descripcion</th>                        
                        		<th>Cant. Solic.</th>
                        		<th>Cant. Recib.</th>
                        		<th>Tota. Recib.</th>
                        		<th>Diferencia</th>
                        		<th>Comentario</th>
                    		</tr>
                		</thead>
						<tbody id="info-items" >
                                            
                		</tbody>
            		</table>         	
         		</div>
    		</div><!--/span12-->
		</div><!--/row fluid-->
		<input type="button" name="btnAplicar" id="btnAplicar" onclick="aplicaCantRecibidas();" value="Aplicar" disabled class="btn btn-small btn-success" style="float:right; font-size:1.2vw;">
	</section>
	
<div id="myModal" class="modal hide fade">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">×</button>
      <h3 id="textMessage"></h3>
    </div>
    <div class="modal-body">            
        <div id="modalContent" style="display:none;">

        </div>
    </div>
    <div class="modal-footer">
      <a href="#" class="btn btn-info" data-dismiss="modal" >Cerrar</a>
    </div>
</div>  
	

<script type="text/javascript">

// Si presiona enter en el campo texto a buscar que se ejecute el evento click() del boton buscar
$('#texto-buscar').keypress(function(e){
    if(e.keyCode==13){
    	e.preventDefault();
    	$('#btn_buscarProducto').click();
    }
  });

function cleanTxtBuscar(){
    
    $("#texto-buscar").val(""); 
    $("#texto-buscar").focus();
    
}

function findOrdenes(){

	limpiaDetalleOrdenes(); 
    criterio    = $('input[name=criterio]:checked').val();
    txtBusqueda = $("#texto-buscar").val();

    
    $("#info-items").load("queryItemsOrders.php", { criterio : criterio, txtBusqueda : txtBusqueda }, function(response,status,xhr){
    });

  	// se habilita el boton conciliar para que el usuario lo pueda seleccionar
	$('input:button[name=btnAplicar]').prop('disabled', false);            
    	       
}

function limpiaDetalleOrdenes() {
    $("#info-items").html("");
    // se deshabilita el boton conciliar para que el usuario no lo pueda seleccionar
    $('input:button[name=btnAplicar]').prop('disabled', true);	
}

          
function aplicaCantRecibidas() {
	var TableData;
	TableData = storeTblValues()
	TableData = $.toJSON(TableData);

	var properties = {
            url: "processCantRecibida.php",
            async: true,
            cache: false,
            data: "pTableData=" + TableData,
            type: "POST",
            success: function(msg){                
					alert(msg);
            }
        };            
        $.ajax(properties);
}

function storeTblValues()
{
    var TableData = new Array();
    var i=1;

    $('#info-items tr').each(function(row, tr){
    	var aRowCant = document.getElementById('cantRow' + i);
    	
    	if (aRowCant !== null){ 
        	vCantStr = aRowCant.value;
    	}else{
        	vCantStr = "0";
    	}

		var aRowTot = document.getElementById('totRow' + i);
    	
    	if (aRowTot !== null){ 
        	vTot = aRowTot.value;
    	}else{
    		vTot = 0;
    	}

		var aRowDif = document.getElementById('difRow' + i);
    	
    	if (aRowDif !== null){ 
        	vDif = aRowDif.value;
    	}else{
        	vDif = 0;
    	}
    	    	
    	
    	var aRowComent = document.getElementById('comentRow' + i);
    	
    	if (aRowComent !== null){ 
        	vComent = aRowComent.value;
    	}else{
    		vComent = '';
    	}
    	
        TableData[row]={
            "Pedido" 		:$(tr).find('td:eq(0)').text()
            , "IdLinea" 	:$(tr).find('td:eq(1)').text()
            , "Codigo" 		:$(tr).find('td:eq(2)').text()
            , "CantRecibida":vCantStr
            , "CantTotal" 	:vTot
            , "CantDif" 	:vDif
            , "Comentario" 	:vComent
        }
        i++;       
    }); 
    //TableData.shift();  // first row will be empty - so remove
    return TableData;
}

</script>

<?php }} ?>
