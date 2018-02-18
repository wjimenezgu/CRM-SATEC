{$NAV_MENU}
	<section id="main" >
		<h4 class="alert_info_bar" style="font-size:1.2vw; ">
			<img src="../../resources/img/icn_alert_info.png" style="float: left; margin-top:2px; margin-left:10px;"> Criterios de Búsqueda:
			<label class="radio" style="font-size:1.2vw; ">    
				<input type="radio" name="criterio" id="criterio" value="0" checked="" onclick="cleanTxtBuscar()"> <span style="margin-left:5px;">Warehouse Receipt</span>    
			</label>
			<form style="margin:0px; padding:0px; float:right; margin-top:-5px;">
				<input type="text" class="txt_search" id="texto-buscar" name="texto-buscar" value="" style="float: left; margin-left:-90px; font-size:1vw; width:150px;" placeholder="Iniciar Búsqueda">
				<input type="button" onclick="findOrdenes('N')" value="Buscar" class="alt_btn2" style="float:right; margin-top:4px; margin-left:5px; margin-right:10px; font-size:1.2vw;">
			</form>               
		
		</h4>

		<div class="row-fluid ">		
    		<div class="box span12">
        		<div class="box-header well" data-original-title>
            		<h2>Liberar Mercaderia</h2>
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
                        		<th>Tota. Recib.</th>
                        		<th>Diferencia</th>
                        		<th>Sel</th>
                    		</tr>
                		</thead>
						<tbody id="info-items" >
                                            
                		</tbody>
            		</table>         	
         		</div>
    		</div><!--/span12-->
		</div><!--/row fluid-->
		<input type="button" name="btnSelTodos" id="btnSelTodos" onclick="findOrdenes('S');"    value="Todos"        disabled class="btn btn-small btn-info"    style="float:right;font-size:1.2vw;">
		<input type="button" name="btnAplicar"  id="btnAplicar"  onclick="liberaMercaderia();"  value="Liberar"      disabled class="btn btn-small btn-success" style="float:right;font-size:1.2vw;">
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
	
{literal}
<script type="text/javascript">


function cleanTxtBuscar(){
    
    $("#texto-buscar").val(""); 
    $("#texto-buscar").focus();
    
}

function findOrdenes(estaSel){

	limpiaDetalleOrdenes(); 
    criterio    = $('input[name=criterio]:checked').val();
    txtBusqueda = $("#texto-buscar").val();
    

    
    $("#info-items").load("releaseItemsOrders.php", { criterio : criterio, txtBusqueda : txtBusqueda, estaSel : estaSel }, function(response,status,xhr){
    });

  	// se habilita el boton conciliar para que el usuario lo pueda seleccionar
	$('input:button[name=btnAplicar]').prop('disabled', false); 
	$('input:button[name=btnSelTodos]').prop('disabled', false); 
    	       
}

function limpiaDetalleOrdenes() {
    $("#info-items").html("");
    // se deshabilita el boton conciliar para que el usuario no lo pueda seleccionar
    $('input:button[name=btnAplicar]').prop('disabled', true);	
}

          
function liberaMercaderia() {
	var TableData;
	TableData = storeTblValues()
	TableData = $.toJSON(TableData);

	var properties = {
            url: "processLiberaMercaderia.php",
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
		var aRowSel = document.getElementById('selRow' + i);
    	
    	if (aRowSel !== null){    		
    		if (aRowSel.checked == true){	
          	  estaSel = 'SI';
      	  	}else {
      		  estaSel = 'NO';
      	  	}	
    	}else{
        	estaSel = 'NO';
    	}
    	
        TableData[row]={
              "Pedido" 		:$(tr).find('td:eq(0)').text()
            , "IdLinea" 	:$(tr).find('td:eq(1)').text()
            , "Codigo" 		:$(tr).find('td:eq(2)').text()
            , "EstaSel" 	: estaSel
        }
        i++;       
    }); 
    //TableData.shift();  // first row will be empty - so remove
    return TableData;
}

</script>
{/literal}
