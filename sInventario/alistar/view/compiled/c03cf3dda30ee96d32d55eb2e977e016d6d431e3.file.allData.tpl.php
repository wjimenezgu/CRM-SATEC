<?php /* Smarty version Smarty-3.1.16, created on 2016-07-02 00:38:32
         compiled from "../alistar/view/allData.tpl" */ ?>
<?php /*%%SmartyHeaderCode:219946217561d4ea7ce4ab3-90971798%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c03cf3dda30ee96d32d55eb2e977e016d6d431e3' => 
    array (
      0 => '../alistar/view/allData.tpl',
      1 => 1467441502,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '219946217561d4ea7ce4ab3-90971798',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_561d4ea7d436b4_72351181',
  'variables' => 
  array (
    'NAV_MENU' => 0,
    'CRM_SERVER' => 0,
    'ID_TIENDA' => 0,
    'NOMBRE_TIENDA' => 0,
    'LISTA_DATA' => 0,
    'ID_FACACTUAL' => 0,
    'COLOR_LINEA' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561d4ea7d436b4_72351181')) {function content_561d4ea7d436b4_72351181($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/var/www/html/CRM-SATEC/resources/libs/smarty/libs/plugins/function.cycle.php';
?><?php echo $_smarty_tpl->tpl_vars['NAV_MENU']->value;?>

	<div class="container-fluid">
		<audio id="alerta" src="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/resources/sounds/glassping.mp3" type="audio/mpeg" loop="loop"></audio>
		<div class="row-fluid sortable">
			<!-- Inicia Lista de Articulos -->
			<div class="box span12">
				<div class="box-header well">
				<!-- fake fields are a workaround for chrome autofill getting the wrong fields -->
				<input style="display:none" type="text" name="fakeusernameremembered"/>
				<input style="display:none" type="password" name="fakepasswordremembered"/>
					<input type="hidden" name="idTienda" id="idTienda" value="<?php echo $_smarty_tpl->tpl_vars['ID_TIENDA']->value;?>
">
					<h2><i class="icon-th"></i>Lista de  Articulos</h2>
					<input type="text"  id="tienda" style="background-color: AliceBlue; margin-left:70px;" name="tienda"   value="<?php echo $_smarty_tpl->tpl_vars['NOMBRE_TIENDA']->value;?>
">
					<div class="box-icon">
						<a href="javascript:history.go(0)" title="Refrescar la lista de Artículos" data-rel="tooltip" class="btn btn-settings btn-round"><i class="icon-refresh"></i></a>
					</div>	
				</div>
				<div class="box-content">
					<table class="table  table-bordered bootstrap-datatable" id="tblDetArti">
						<thead>
							<tr>
								<th>Artículo</th>
								<th>Código</th>							
								<th>Ubicación</th>
								<th>Cantidad</th>
								<th style="text-align: center;">Alistar</th>
							</tr>
						</thead>
						<tbody id="tblDetArtiAlistar">

<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['name'] = 'lP';
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['LISTA_DATA']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
	<tr style="<?php if ($_smarty_tpl->tpl_vars['LISTA_DATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['NumFactura']!=$_smarty_tpl->tpl_vars['ID_FACACTUAL']->value) {?> <?php $_smarty_tpl->tpl_vars["ID_FACACTUAL"] = new Smarty_variable($_smarty_tpl->tpl_vars['LISTA_DATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['NumFactura'], null, 0);?> <?php echo smarty_function_cycle(array('assign'=>'COLOR_LINEA','values'=>"#ffff99,#ffccff"),$_smarty_tpl);?>
 background-color:<?php echo $_smarty_tpl->tpl_vars['COLOR_LINEA']->value;?>
 <?php } else { ?>background-color:<?php echo $_smarty_tpl->tpl_vars['COLOR_LINEA']->value;?>
 <?php }?>">                                                                           
		<td><?php echo $_smarty_tpl->tpl_vars['LISTA_DATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['DesArticulo'];?>
<?php echo $_smarty_tpl->tpl_vars['LISTA_DATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['NumFactura'];?>
<?php echo $_smarty_tpl->tpl_vars['ID_FACACTUAL']->value;?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['LISTA_DATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['CodArti'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['LISTA_DATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['ubicacion'];?>
</td>
		<td style="text-align:right;"><?php echo $_smarty_tpl->tpl_vars['LISTA_DATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['cantidad'];?>
</td>
		<td>
			<input type="checkbox" name="ckArti[]" id="selRow<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']+1;?>
" value='s'>
			<input <?php if ($_smarty_tpl->tpl_vars['LISTA_DATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['indObligaSerie']=='S') {?> type="text" <?php } else { ?> type="hidden" <?php }?> autocomplete="false" name="numSerie[]" id="selRow<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']+1;?>
" placeholder="Oblgatorio Indicar Serie" value="">
			<input type="hidden"   name="artLis[]" id="valRow<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']+1;?>
" value='<?php echo $_smarty_tpl->tpl_vars['LISTA_DATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['IdFactura'];?>
|<?php echo $_smarty_tpl->tpl_vars['LISTA_DATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['NumLinea'];?>
|<?php echo $_smarty_tpl->tpl_vars['LISTA_DATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['CodArti'];?>
|<?php echo $_smarty_tpl->tpl_vars['LISTA_DATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['indObligaSerie'];?>
|<?php echo $_smarty_tpl->tpl_vars['LISTA_DATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['DesArticulo'];?>
|<?php echo $_smarty_tpl->tpl_vars['LISTA_DATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['NumFactura'];?>
'>
			<a href="#" id="<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']+1;?>
"  onclick="goPage(6, this.id)" <?php if ($_smarty_tpl->tpl_vars['LISTA_DATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['indObligaSerie']=='N') {?> hidden='true'<?php }?> Title="Imprimir Garantía"><i class="icon icon-color icon-print"></i></a>
		</td>
	</tr> 
<?php endfor; endif; ?>
                        </tbody>
					</table>
				</div> <!-- box-content -->
				

			</div><!--/box span12-->
			<!-- ************************************************************ -->
			<!-- Finaliza Lista de Facturas -->
			<!-- ************************************************************ -->			
		</div><!--/row-fluid sortable -->
	</div> <!-- container-fluid -->
				<div  style="text-align:right;margin-top:-15px;">


					<div class="bodeguerovalido" id="0"></div>
					<input name ="fClaveBodeguero" id="fClaveBodeguero" type="password" autocomplete="false" value="" placeholder="Codigo Bodeguero" >
		 		
					<button type="button" class="btn btn-large" onclick="Sale();">Cerrar</button>
					<button type="submit" onclick="AplicaActualizar();" id="btnImp" class="btn btn-large btn-primary"></i> Actualizar</button>
							
				</div>	
	<div id="message-fields" style='alignment-adjust:  central;'></div>
	


<script type="text/javascript">
$(document).ready(function(){  

//	$("#tblDetArtiAlistar").load("buscarDetArtiAlistar.php", { idTienda : $('#idTienda').val() }, function(response,status,xhr){
//	});
//	document.getElementById("alerta").play();  
//	document.getElementById("alerta").stop();
	var tblArti = document.getElementById('tblDetArti');
    var nRows = tblArti.rows.length -1; // -1 para excluir el encabezado
    //alert (nRows);
    if (nRows > 0){
    	// se hace un beep.
    	document.getElementById("alerta").play();
    	
    	myVar = setTimeout(ApagaSonido, 4000);
		//clearTimeout(myVar);
    }

});     

$("#fClaveBodeguero").change(function (e) {
    
	$("#btnImp").focus();
});

function ApagaSonido(){
	document.getElementById("alerta").pause();
}

function AplicaActualizar() {

		
	// primero se valida la clave del bodeguero con una pantalla modal
	    
	    document.getElementById('message-fields').innerHTML = "";
	    if (!validaBodeguero()){
	 //   if ($('#fClaveBodeguero').val() == ""){
		   return;
//			document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Codigo Bodeguero Obligatorio.</strong></div>";
	    }else{
		var TableData;
		TableData = storeTblValues()
		TableData = $.toJSON(TableData);

		var properties = {
            url: "processArtiAlistar.php",
            async: false,
            cache: false,
            data: "pTableData=" + TableData + '&pidTienda='+$('#idTienda').val(),
            type: "POST",
            success: function(msg){                
					alert(msg);
            },
            error: function(jqXHR,textStatus,errorThrown){
				 	var err = eval("(" + jqXHR.responseText + ")");
				  	alert('Error al Alistar '+err.Message);
					//alert('Error al imprimir '+errorThrown);
					}
        };            
        $.ajax(properties);
 
        history.go(0);
		//$("#tblDetArtiAlistar").load("buscarDetArtiAlistar.php", { idTienda : $('#idTienda').val() }, function(response,status,xhr){
    	//});
	    } // else if bodeguero
             
}

function storeTblValues(){
    var TableData = new Array();
    var vTiraDatos = new Array();
	var tbl = document.getElementById('tblDetArti');
    var numRows = tbl.rows.length -1; // -1 para excluir el encabezado
    var numRow;
    if (numRows > 0){    
    	var i;
    	for (i=1; i <= numRows; i++) {
    		// se obtine el numero de fila para efectos de procesar cada linea
    		numRow = i - 1;

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
        	vDatos 	 = $('input[name^="artLis"]').eq(numRow).val();
        	vNumSerie = $('input[name^="numSerie"]').eq(numRow).val();
       //alert(vNumSerie);


        	var vTiraDatos = vDatos.split("|");
    		// se agrega la entrada a la tabla
    		TableData[numRow]={
    	              "EstaSel" 	:estaSel
    	            , "IdFactura" 	:vTiraDatos[0]
    	            , "NumLinea"	:vTiraDatos[1]
    	            , "CodArti"     :vTiraDatos[2]
    			    , "NumSerie"    :vNumSerie
    			    , "IndObligaSerie"    :vTiraDatos[3]
    	        }   		
    	} //for
    } // if numRows >
    return TableData;
}

function Sale(){
	
	window.location="../../home";
		
}

function goPage(action, id){
	
	var numRow = 0;
	if(action == 6){
		numRow = parseInt(id)-1;
		
    	vNumSerie = $('input[name^="numSerie"]').eq(numRow).val();
    	vDatos 	 = $('input[name^="artLis"]').eq(numRow).val();
    	if (vNumSerie == ""){
    		// numero de serie es obligatorio
    		alert('Número de Serie es obligatorio para imprimir garantía.');
    	}else{
    		// alert('se imprime garantia '+ vDatos);
    		window.open('prnArtiGarantia.php?datosArti='+vDatos+"&numSerie="+vNumSerie,'_blank');
    	}

	}		
};


function validaBodeguero(){   

    var pass = $('#fClaveBodeguero').val();
    pass = pass.trim();
    var esValido = false;
    
    document.getElementById('message-fields').innerHTML = "";
    if (pass == ""){
    	document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Codigo Bodeguero Obligatorio.</strong></div>";
    	$("#fClaveBodeguero").focus();
    	return false;
    }
    
    
    // se valida el codigo de bodeguero 
      	$.ajax({
        type: "POST",
        url: "ValidaBodeguero.php",
        async: false,
        dataType : "text",
        data: "fClave="+pass,
       	success: function(data2,strMsg){
       		var vdata2 = parseInt(data2); 
       		if ( vdata2 == 1) {
       			$(".bodeguerovalido").attr("id", "1");	
       			//alert('true'+data2);
       			esValido = true;

       		}
       		else {
       			//alert('false'+data2);
       			$(".bodeguerovalido").attr("id", "0");
       			esValido = false;

			}
        },
        error: function(jqXHR,textStatus,errorThrown){
            alert('Error al validar Vendedor '+errorThrown);
            return false;
        }
    });
 
//alert ('valido'+$(".vendedorvalido").attr("id"));
    if ($(".bodeguerovalido").attr("id") == "1" ){ 
    //if (vendedorValido=true){
    	return true;
    }else{
       document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Código Bodeguero incorrecto.</strong></div>";       
       $("#fClaveBodeguero").val("");
       $("#fClaveBodeguero").focus(); 
       return false;
    };               
	} // function validaBodeguero




</script>

<?php }} ?>
