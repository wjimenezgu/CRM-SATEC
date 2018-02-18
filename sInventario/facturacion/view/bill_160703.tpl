{$NAV_MENU}
        <form class="form-horizontal" id='myForm'  action="processBill.php" onsubmit="return validateForm()" method="POST">
            <input type="hidden" name="invOpen" id="invOpen" value="0">
            <input type="hidden" name="porce_iv" id="porce_iv" value="{$PORCE_IV[0].IV}">
            <input type="hidden" name="porce_max_desc" id="porce_max_desc" value="{$PORCE_MAX_DESC[0].MaxDesc}">
            <input type="hidden" name="aut_desc" id="aut_desc" value="{$AUT_DESC[0].AutDesc}">
            <input type="hidden" name="id_tienda" id="id_tienda" value="{$ID_TIENDA}">
            <input type="hidden" name="prev_value" id="prev_value" value="0">
            <input type="hidden" name="prev_value_tot" id="prev_value_tot" value="0">
        	<div class="row-fluid" >		
            	<div class="box span12">
                	<div class="box-header well" data-original-title>
                    	<h2>Facturación</h2>
                    		<div class="vendedorvalido" id="0"></div>
                    	    <a style="font-size: 12px;margin-left:10px;">Vendedor:</a><input type="text" id="txtVendedor" name="txtVendedor" style="width: 100px;" value=" " ></input>
                    	    <a style="font-size: 12px;">Contraseña:</a><input id='txtPassVend' name="txtPassVend" type="password" style="width: 100px; value=" "></input>
			<!--     		<button type="submit" id='apartado'  disabled name="action" value="A"  class="btn  btn-small btn-inverse" style="margin-left:20px;">APARTADO</button>                    -->	    
                    	    <button type="submit" id='proforma'  disabled name="action" value="P"  class="btn btn-small btn-inverse" style="margin-left:20px;">PROFORMA</button>                    	    
                    	    <button type="submit" id='facturar'  disabled name="action" value="F"  class="btn btn-small btn-primary" style="margin-left:20px;">FACTURAR</button>
                    	    <button type="button" class="btn btn-small btn-info" onclick='clearAll();'  style='margin-left: 15px;'>LIMPIAR</button>
                    	    <button type="button" class="btn btn-small btn-info" onclick="Sale();"      style='margin-left: 15px;'>CERRAR </button>
                        	<select class="pull-right" id="selectStore" name="selectStore" disabled> 
                        		<option value="0"></option>
                            	{section name=lP loop=$LISTA_TIENDAS}
                            		
                                	<option value="{$LISTA_TIENDAS[lP].codTienda}" {if $LISTA_TIENDAS[lP].codTienda eq $ID_TIENDA} selected{/if}>{$LISTA_TIENDAS[lP].nombreTienda}</option>                                	
                                {/section}
                            </select>
                    </div>
                    <div id="message-fields" style='alignment-adjust:  central;'></div>
 
                    	<div class="box span10" style="margin-left: 10px;" >
                        	<div class="box-header well h2">
                            	<h3>Información del Cliente</h3>
                            </div>
                            <div class="span9" id="divCliente">                            	
                            	<div class="control-group" id="boxSelCliente" style="margin-top: 15px;  margin-left: -175px;">
									<label class="control-label" for="selectCliente"></label>
									<div class="controls">
									    <select data-placeholder="Ingrese Cliente" style="width: 650px; height: 30px;"  id="selectCliente"    name ="selectCliente"    data-rel="chosen">
                            				<option value="0"></option>
                            				{section name=lP loop=$LISTA_CLIENTES}
                                				<option value="{$LISTA_CLIENTES[lP].id}|{$LISTA_CLIENTES[lP].nombre}|{$LISTA_CLIENTES[lP].correoElectronico}|{$LISTA_CLIENTES[lP].telefono}" {if $LISTA_CLIENTES[lP].id eq $IDCLI_SINNOMBRE[0].idCliSinNombre} selected{/if}>{$LISTA_CLIENTES[lP].nombre} | {$LISTA_CLIENTES[lP].correoElectronico} | {$LISTA_CLIENTES[lP].telefono}</option>
                                			{/section}
                            			</select>
                                    </div>
                                 </div>                                                                  
                            </div>
                            <div class="span2">
                            	<button id="btn-updCliente" disabled type="button" onclick="openModalCliente('U');" class="btn btn-small btn-info"  style="width: 120px; margin-top: 15px; margin-left: 25px;text-align: center;">Actualizar Cliente</button>
                            </div>                           
                        </div> <!-- class="box span10"  -->
                        <button id="btn-newCliente" disabled type="button" onclick="openModalCliente('I');" class="btn btn-large btn-success"  style="height: 70px; width: 100px; margin-top: 15px; margin-left: 40px;text-align: center;">Agregar cliente</button>
                        <legend style="height:5px"></legend>
                        <div class="box" style="margin-left: 10px;margin-right: 10px;margin-top: -20px;" >
                        	<div class="box-header well">
                            	<h3>Buscar Articulos</h3>
                            </div>
								<div class="control-group" style="margin-left: -150px;" id="boxCriterios">
									<div class="controls">
				 						<label class="radio" style="font-size:1.2vw; margin-top:4px; ">Criterios:</label>					
										<label class="radio" style="font-size:1.2vw; margin-top:12px;">
											<input type="radio" name="criterio" id="optionCod" value="codigo" checked="" onclick="cleanTxtBuscar()">
											código
										</label>
										<label class="radio" style="font-size:1.2vw; margin-top:12px;">
											<input type="radio"  name="criterio" id="optionDes" value="nombre" onclick="cleanTxtBuscar()">
											descripción
										</label>
										<label class="radio" style="font-size:1.2vw; margin-top:12px;">
											<input type="radio" name="criterio" id="optionExt" value="externo" onclick="cleanTxtBuscar()">
											código externo
										</label>
										<label class="radio" style="font-size:1.2vw; margin-top:12px;">
											<input type="radio" name="criterio" id="optionBarras" value="barras" onclick="cleanTxtBuscar()">
											barras
										</label>												
                						<form style="margin:0px; padding:0px; float:right; margin-top:-5px;">
                							<input type="text"  accesskey="s" class="txt_search" id="texto-buscar" name="texto-buscar" value="" style="margin-top:4px; margin-left:50px; font-size:1vw; width:300px;" placeholder="Iniciar Búsqueda">                			
                    						<button id="btn-getInventario" disabled style="margin-top:4px;" class="btn btn-small" data-toggle="modal" data-target="#inventory-modal" ><i class="icon-search"></i> Buscar</button>
                						</form> 						
									</div>  <!-- class controls -->             
								</div>	<!-- boxCriterios -->	                                                    
                        </div> <!-- class="box"  -->
                        <div class="box-content">
                        	<table class="table table-striped table-bordered bootstrap-datatable" id="tableItem">
                            	<thead>
                                	<tr>
                                    	<th style='width:10px;'>#</th>
                                    	<th style='width:500px;'>Artículo</th>
                                        <th style='width:100px;'>Código</th>
                                        <th style='width:90px;'>Precio Venta</th>
                                        <th style='width: 10px;'>Cant.</th>
                                        <th style='width:10px;'>%Desc</th>
                                        <th style="width:110px;">Precio Total</th>
                                        <th style="width: 25px;">Acción</th>
                                    </tr>
                                </thead>
                                <tbody id="tbod" name="tbod" onload="LimpiaCampos()">
                                	<div id ="divtbod" class="grid" style="width: fit-content; border: 1px;"></div>
                                </tbody>
                            </table>  
                            <div >
                            	<div style="margin-left: 10px;margin-top: 10px; margin-bottom:10px; margin-right: 29px;">
                                	<p style="font-style: oblique; font-size: 14px;" align='right'>Subtotal   <input type="text" id="fsubtotal" name="fsubtotal" value="0.00" class='input' readonly align='right' style="margin-right: 42px; text-align: right; width: 90px;" ></p>                                	 
									<p style="font-style: oblique; font-size: 14px;"align='right'>Descuento
<!-- 									 
									<input type="number"  min=0 disabled id="pdescuento" name="pdescuento" value="0" onchange="evaDiscountv2(this);" align='right' style="font-size: 12px;margin-right: 12px;text-align: right; width: 35px;">									
 -->
									<input type="text" readonly id="fdescuento" name="fdescuento" value="0.00" align='right' style="margin-right: 42px;text-align: right; width: 90px;"></p>
                                    <p style="font-style: oblique; font-size: 14px;"align='right'>Impuesto    <input type="text" id="fimpuesto" name ="fimpuesto" value ="0.00" readonly align='right' style="margin-right: 16px; text-align: right; width: 90px;">
                                    <input type="checkbox" onchange="Exento();" id="exento" name="exento" title="Exento">
                                    </p>
                                    
                                    <p style="font-style: oblique; font-size: 14px;"align='right'>
                                  
                                    Autorización Descuento: <input id='txtPass' name="txtPass" type="password"  disabled style="margin-right: 10px; width: 100px;"></input>
 								
                                    Total   <input type="text" id="ftotal" name="ftotal" value="0.00" readonly="true" align='right' style="margin-left: 10px;margin-right: 42px;text-align: right; width: 90px;">
                                
                                    </p>
                                    
                                </div>
                            </div>
                        </div>
                </div><!--class="box span12"-->
            </div><!--class="row-fluid" -->
   		</form>            


<!-- NEW CLIENT MESSAGE MODAL -->
<div class="modal fade" id="newClient-modal" tabindex="-1" role="dialog" aria-hidden="true">

    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3 class="modal-title blue"><i class="fa fa-bars"></i> Información Cliente</h3>
                <br />
                <p>Complete la siguiente información</p>
            </div>
            <form method="post" id="frmCliente" action="processClient.php" method="post">
            
                <div class="modal-body" id="newClient">
					<div class="clienteId" id="0"></div>
					<div class="row-fluid" id="wrkArea">
                    <table class="table table-condensed">
                      <tbody> 

                          <tr>
                              <th>Nombre</th>
                              <td>                                
                                <div class="pull-left control-group" id="input-new-Nombre" style="margin-right:3px; width:70%;">
                                    <input type="text" class="input-block-level input-xlarge"  id="new-Nombre" name="new-Nombre" maxlength="100" value="" placeholder="Nombre Cliente">
                                </div>                                  
                              </td>
                          </tr>
                          <tr>
                              <th>Nombre Contacto</th>
                              <td>                                
                                <div class="pull-left control-group" id="input-new-Contacto" style="margin-right:3px; width:70%;">
                                    <input type="text" class="input-block-level input-xlarge"  id="new-NombreContacto" name="new-NombreContacto" maxlength="100" value="" placeholder="Contacto en Caso de Compañías">
                                </div>                                  
                              </td>
                          </tr>    
                          <tr>
                              <th>Correo</th>
                              <td>
                                  <div class="pull-left control-group" id="input-new-Correo" style="margin-right:3px; width:70%;">
                                    <input type="text" class="input-block-level" id="new-Correo" name="new-Correo" maxlength="100" value="" placeholder="Correo Electronico">
                                  </div>
                              </td>
                          </tr>
                          <tr>
                              <th>Teléfono</th>
                              <td>
                                  <div class="pull-left control-group" id="input-new-Telefono" style="margin-right:3px; width:70%;">
                                      <input type="text" class="input-block-level" id="new-Telefono" name="new-Telefono" placeholder="Telefono" maxlength="50" value="">
                                  </div>
                              </td>
                          </tr>

                      </tbody>
                    </table> 
                    </div>                   

                </div>
                <div class="modal-footer clearfix">
                    <div id="message-newClient">

                    </div>    
                    <button type="button" class="btn btn-success" id="add-new-client" name="add-new-client"><i class="fa fa-check-square-o"></i> Guardar</button>
                </div>
            </form>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->

</div><!-- /.modal -->
   
<!-------------------------- MODAL ARTICULOS ---------------------------------->
<div class="modal fade" id="inventory-modal" tabindex="-1" role="dialog" data-refresh="true"  aria-hidden="true" style="margin: -320px 0 0 -380px;width:800px">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header"> 
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3 class="modal-title green"><i class="fa fa-bars"></i> Inventario de Artículos</h3>                
            </div>
            <form action="#" method="post" id="frmAllInventory">
                <div class="modal-body" id="allInventory" style="max-height: 490px;">                    
                    <h5>Consultando Inventario</h5><div id='boxProgress2' style='width:100%; margin-top:10px;'><div class='progress progress-striped progress-info active' ><div class='bar' style='width:0%;'></div></div></div>                    
                </div>
                <div class="modal-footer clearfix">
                    <button type="button" class="btn btn-inverse" id="accept-choosed" data-dismiss="modal"><i class="fa fa-check-square-o"></i> Aceptar</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<script type="text/javascript">


$(document).ready(function(){
	$("#txtPassVend").on("change", function (e){
        e.preventDefault();
        verVendor();        
    });

	$("#txtVendedor").on("change", function (e){
        e.preventDefault();
        txtClave = $("#txtPassVend").val();
        if (txtClave.trim()!=""){
        	verVendor();
        }        
    });
	
    $("#btn-newCliente").on("click", function (e){
        e.preventDefault();
        $("#message-newClient").html("");
        $("#new-Nombre").val("");
        $("#new-Correo").val("");
        $("#new-Telefono").val("");
        $("#input-new-Nombre").removeClass("error");
        $("#input-new-Correo").removeClass("error"); 
        $("#input-new-Telefono").removeClass("error");            
    });


    $("#preValDesc").on("click", function(e){
		var id = res.getAttribute('id');
    	$("#message-DescuentoL").html("");
    	$("#nDescuentoL").val("0");
    	$("#faut_descL").val("");
    	$("#"+id).val($("#prev_value").val()).number(true,2);
    	math();
    	$("#input-Aut_DescL").removeClass("error");         
    	$("#modalEvaDiscountLinea").modal('hide');
        
    });
    
    $("#verifica_descuentoL").on("click", function(e){
        var errors = false;
    	var id = res.getAttribute('id');
    	var nDescuento   = parseInt($("#nDescuentoL").val());
        var maxDescuento = parseInt($("#porce_max_desc").val());
        if (nDescuento > maxDescuento){
        	if ($("#faut_descL").val()=="") {
            	errors=true;
            }else{
                if($("#faut_descL").val()!=$("#aut_desc").val()){
                	errors=true;
                };
            };
        }
        if (errors!=true){
        	$("#prev_value").val($("#nDescuentoL").val());
        	$("#"+id).val($("#nDescuentoL").val()).number(true,2);
        	$("#"+id).onblur();
        	math();
        	$("#message-DescuentoL").html("");
        	$("#nDescuentoL").val("0");
        	$("#faut_descL").val("");

        	$("#input-Aut_DescL").removeClass("error");         
        	$("#modalEvaDiscountLinea").modal('hide');
        }else{
        	$("#"+id).val($("#prev_value").val()).number(true,2);        	        	
        	$("#input-Aut_DescL").addClass("error");
        	$("#message-DescuentoL").html("<div class='alert alert-error pull-left'><strong><span class='icon icon-red icon-alert'/></span> <strong>Requiere Autorizacion.</strong></div>");           	      	
        }
        
        
        
    });
    $("#verifica_descuento").on("click", function(e){
        var errors = false;
        var nDescuento   = parseInt($("#nDescuento").val());
        var maxDescuento = parseInt($("#porce_max_desc").val());
            
        if (nDescuento > maxDescuento){
            if ($("#faut_desc").val()=="") {
            	errors=true;
            }else{
                if($("#faut_desc").val()!=$("#aut_desc").val()){
                	errors=true;
                };
            };
        }
        if (errors !=true){
        	$("#pdescuento").val(nDescuento);
        	math();

        	$("#message-Descuento").html("");
        	$("#nDescuento").val("0");
        	$("#faut_desc").val("");

        	$("#input-Aut_Desc").removeClass("error"); 
        	$("#modalEvaDiscount").modal('hide'); 
        }else{        	        	
        	$("#input-Aut_Desc").addClass("error");
        	$("#message-Descuento").html("<div class='alert alert-error pull-left'><strong><span class='icon icon-red icon-alert'/></span> <strong>Requiere Autorizacion.</strong></div>");           	      	
        }
    });
    
	// Si presiona enter en el campo texto a buscar que se ejecute el evento click() del boton buscar
    $('#texto-buscar').keypress(function(e){
        if(e.keyCode==13){
        	e.preventDefault();
        	$('#btn-getInventario').click();
        }
      });

    $("#selectCliente").on("change", function (e){
        e.preventDefault();
        $("#btn-updCliente").prop("disabled",false);
        $(".clienteId").attr("id", $("#selectCliente").val());       
    });

    $("#ftotalww").on("change", function (e){
    	
        e.preventDefault();
        
        //$("#facturar").prop("disabled",false); 
     
        $("#proforma").prop("disabled",false);   
     
        $("#pdescuento").prop("disabled",false);
    });      
    	
    var cache = {
            $btnInventario    : $("#btn-getInventario"),
            $boxInventory     : $("#allInventory"),
            $txtBuscar        : $("#texto-buscar"),
            $selCriterio      : $("#criterio")
        };

    //BOTON QUE CARGA EL INVENTARIO DE ARTICULOS
    cache.$btnInventario.on("click", function(e){

          cache.$boxInventory.html("<h5>Consultando Inventario</h5><div id='boxProgress2' style='width:100%; margin-top:10px;'><div class='progress progress-striped progress-info active' ><div class='bar' style='width:0%;'></div></div></div>");
          if($("#texto-buscar").val()!=""){
        		document.getElementById('message-fields').innerHTML = "";
                var vcriterio    = $('input[name=criterio]:checked').val();
                var vtxtBusqueda = cache.$txtBuscar.val();
              	
                if($("#texto-buscar").val()!=""){
                	var properties = {
                    			url: "ajaxLoad.php",
                        		async: true,
                        		cache: false,
                        		data: "txtBuscar="+vtxtBusqueda+"&criterio="+vcriterio+"&action=1",
                        		type: "POST",
                        		success: function(inventario){
                            		cache.$boxInventory.html(inventario);							
                        		} // success
                    		}; // var properties            
                    		$.ajax(properties);                
                }else{
                    	cache.$boxInventory.html("Debe indicar articulo a buscar.");
                }            
          }else{
        	  document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Debe indicar articulo a buscar.</strong></div>";    
          }        	
    });



    $('#inventory-modal').on('show', function (e) {
        if ($("#texto-buscar").val()=="") return e.preventDefault(); // stops modal from being shown
    });
    
    $("#nDescuento").number(true,0);
    $("#pdescuento").prop("disabled",true);
         
    $("#txtVendedor").focus();

                   
});

	function validateForm() {
		//
		// Se valida que el usuario haya indicado el cliente, es obligatorio.
		//
		document.getElementById('message-fields').innerHTML = "";
		var clienteSelect = $("#selectCliente").val();
		var cliente = clienteSelect.split("|");
		if (cliente[0]=="0"){
			document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Cliente es Requerido.</strong></div>";
			return false;
		}
		return true;
	}
	
	function verVendor(){   

		var user = $("#txtVendedor").val();
	    var pass = $("#txtPassVend").val();
	    user = user.trim();
	    pass = pass.trim();
	    var vendedorValido = false;

	    var claveVendedor ="";
	    
	    document.getElementById('message-fields').innerHTML = "";
	    if (user == ""){
	    	document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Campo Vendedor en Blanco.</strong></div>";
	    	$("#txtVendedor").focus();
	    	return;
	    }
	    if (pass == ""){
	    	document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Campo Clave en Blanco.</strong></div>";
	    	$("#txtPassVend").focus();
	    	return;
	    }
	    
	    
	    // se valida el codigo de vendedor y la clave
	      	$.ajax({
	        type: "POST",
	        url: "ValidaVendedor.php",
	        async: false,
	        dataType : "text",
	        data: "fVendedor="+user+"&fClaveVendedor="+pass,
	       	success: function(data2,strMsg){
	       		var vdata2 = parseInt(data2); 
	       		if ( vdata2 == 1) {
	       			$(".vendedorvalido").attr("id", "1");	
	       			//alert('true'+data2);
	       			vendedorValido = true;

	       		}
	       		else {
	       			//alert('false'+data2);
	       			$(".vendedorvalido").attr("id", "0");
					vendedorValido = false;

				}
	        },
	        error: function(jqXHR,textStatus,errorThrown){
	            alert('Error al validar Vendedor '+errorThrown);
	        }
	    });
	 
	//alert ('valido'+$(".vendedorvalido").attr("id"));
	    if ($(".vendedorvalido").attr("id") == "1" ){ 
	           $("#enviar").type = "submit";
	           habilitaCampos();
	           $("#texto-buscar").focus();
	    }else{
	          document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Vendedor y/o contraseña incorrectos</strong></div>";
	           deshabilitaCampos();
	           $("#txtVendedor").val("");
	           $("#txtPassVend").val("");
	           $("#txtVendedor").focus();          
	    };               
		} // function verVendedor

	
	function verVendorAnt(){               
    	var user = $("#txtVendedor").val();
        var pass = $("#txtPassVend").val();
        user = user.trim();
        pass = pass.trim();
        var vendedorValido = false;
        var vendedorLista ="";
        var claveVendedor ="";    
                  
		{foreach from=$LISTA_VENDS item=lP}
			vendedorLista="{$lP.userVendedor}";
			claveVendedor="{$lP.passVerificador}";

            if (vendedorLista==user){
               if(claveVendedor==pass){
               		vendedorValido=true;
               };
            };  
        {/foreach};   

        if (vendedorValido){
           $("#enviar").type = "submit";
           habilitaCampos();
           $("#texto-buscar").focus();
        }else{
           document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Vendedor y/o contraseña incorrectos</strong></div>";
           deshabilitaCampos();
           $("#txtVendedor").val("");
           $("#txtPassVend").val("");
           $("#txtVendedor").focus();              	
        };               
    } // function verVendedor
                    
    $("#btnVerify").on("click", function(){
             math();
        });
    

//Abre el Modal donde se agregará un cliente    
    function openModalCliente(TipoOperacion){
        if (($("#txtVendedor").val()!="")&&($("#txtPassVend").val()!="")) {
        	document.getElementById('message-fields').innerHTML = "";    
        	$("#newClient-modal").modal('show');
       		if (TipoOperacion=='U') {
            	// si es un Update se carga los datos del cliente actual
            	// en caso de ser una Insercion los campos estan en blanco.
    			var clienteSelect = $("#selectCliente").val();
    			var cliente = clienteSelect.split("|")
    			$(".clienteId").attr("id", cliente[0]);	
        		$("#new-Nombre").val(cliente[1]);
        		$("#new-Correo").val(cliente[2]);
        		$("#new-Telefono").val(cliente[3]);
                $("#new-NombreContacto").val(cliente[4]);
       		}else{
        		$(".clienteId").attr("id", "0");
        	};
        }else{
        	document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Vendedor es requerido.</strong></div>";            
        };     
    }// function openModalCliente

//Define la factura como exenta
    function Exento(){
        if($("#exento").is(":checked")){
            $("#fimpuesto").val(0);
            math();
        }else{
            math();
        }
    }

//Llama al funcion Math() cuando se presiona el boton Agregar
    $("#addSelItem").on("click",function(){
        math();
    });
    
    
//Calcula el subtotal, impuesto y total
    function mathwww(){
        var table = document.getElementById("tableItem");
        var suma = 0.00;
        for(var x=1; x<table.rows.length; x++){
            suma += parseFloat(table.rows[x].myRow.six.value);        
        }
        var desc = $("#pdescuento").val();
        $("#fdescuento").val(suma*(desc/100.00));
        var mDesc =  $("#fdescuento").val();
        $("#fsubtotal").val(suma);
        
        if($("#exento").is(":checked")){
             $("#fimpuesto").val(0);
             $("#ftotal").val(precioTotal(suma,mDesc,0));
        }else{
             $("#fimpuesto").val(impuestoTotal(suma-mDesc)); 
             $("#ftotal").val(precioTotal(suma,desc,impuestoTotal(suma-mDesc)));
        }
       
        $("#fdescuento").number(true,2);
        $("#fsubtotal").number(true,2);
        $("#fimpuesto").number(true,2);
        $("#ftotal").number(true,2);
    } // function math


//Calcula el total por aparte para poder utilizarlo en 2 funciones
    function precioTotal(sub,desc,imp){
        var totDesc =  (sub *(desc/100));   
        var total = imp + (sub - totDesc);
        return total;
        
    }

//Calcula el impuesto de toda la factura
    function impuestoTotal(sub){
        //var porceIV = parseInt($("#porce_iv").val());
        var imp = (sub *($("#porce_iv").val()/100));
        return imp;
    }
    
//Limpia la cantidad
    function clearCant(){
        $("#cant").val("");
    }  

//Limpia el nombre
     function clearNombre(){
        $("#txtNombre").val("");
    }  
    
//Limpia el input de articulo
     function clearTags(){
        $("#selectError").chosen('destroy')
                         .trigger("liszt:updated");
    }  
 //Deshabilita los campos
    function deshabilitaCampos(){
    	$("#btn-getInventario").prop("disabled",true);
        $("#btn-newCliente").prop("disabled",true);
        $("#selectCliente").val('0');
        $("#selectCliente").prop("disabled",true);
        $("#txtPass").prop("disabled",true);
        //$("#fdescuento").prop("disabled",true);           
        $("#pdescuento").prop("disabled",true);
    }

  //Habilita los campos
    function habilitaCampos(){
    	$("#btn-getInventario").prop("disabled",false);
        $("#btn-newCliente").prop("disabled",false);
        $("#selectCliente").prop("disabled",false);
        
        document.getElementById('message-fields').innerHTML = "";           
    }

//Inserta un cliente por medio de AJAX y lo añade a los datos del cliente en la factura
    $("#add-new-client").click(function(e){
     	e.preventDefault();
        var newNombre   = $("#new-Nombre").val();
        var newCorreo   = $("#new-Correo").val();
        var newTelefono = $("#new-Telefono").val();  
        var newClientId = $(".clienteId").attr("id");
        var vendedor    = $("#txtVendedor").val();
        var errors      = false;

        if(newNombre == ""){
            $("#input-new-Nombre").addClass("error");
            errors = true;
        }else{
            $("#input-new-Nombre").removeClass("error");
        }                

        if(errors != true){ 
           //alert(newClientId);
       	$.ajax({
            type: "POST",
            url: "processClient.php",             
            dataType : "text",
            data: "fclienteId="+newClientId+"&fnombre="+newNombre+"&fcorreo="+newCorreo+"&ftelefono="+newTelefono+"&fvendedor="+vendedor,
           	success: function(data2,strMsg){
           		if (data2!="-1") {
            		var nombre = 	$("#new-Nombre").val(),
                 		tel = 		$("#new-Telefono").val(),
                		cor = 		$("#new-Correo").val();
                        contacto =  $("#new-NombreContacto").val();
                	//$("#selectCliente").append("<option value='"+data+"' selected>" + nombre + " | " + cor + " | " + tel + "</option>")
                	// se borra primero la opcion que esta seleccionada
                	// por que esa es la que el usuario actualizo.
                	// para poder agregar la nueva actualizada.
                	//$("#selectCliente option:selected").remove();
                	
                	//se actualiza el campo que guarda el id del cliente seleccionado con el que se acaba de 
                	// insertar. por si el usuario decide seleccionar actualizar los datos.
                	//alert(data2);
                	$(".clienteId").attr("id", data2);
                	$("#btn-updCliente").prop("disabled",false);
                	// se agregan los datos actualizados.
                	//$("#selectCliente").append("<option  value='"+data2+"|"+nombre+"|"+cor+"|"+tel+"' selected>" + nombre + " | " + cor + " | " + tel + "</option>")
                    //               .trigger("liszt:updated");
                    $("#selectCliente").append("<option  value='"+data2+"|"+nombre+"|"+cor+"|"+tel+"|"+contacto+"' selected>" + nombre + " | " + cor + " | " + tel + "| " + contacto + "</option>")
                                     .trigger("liszt:updated");
                    // se cierra el modal        
                	$("#newClient-modal").modal('hide');
           		}
           		else {
					alert("No se puedo insertar");
				}
            },
            error: function(jqXHR,textStatus,errorThrown){
                alert('Error al insertar '+errorThrown);
            }
        });
        }else{
            $("#message-newClient").html("<div class='alert alert-error pull-left'><strong><span class='icon icon-red icon-alert'/></span> <strong>Complete la Información Requerida</strong></div>");
            return false;            
        }
    });
    
	//Setea un objeto para almacenar las variables
    function myRowObject(one, two, three, four, five, six, seven,eight){
		this.one = one; 		// consecutivo de las lineas
		this.two = two; 		// descripcion del articulo
		this.three = three; 	// codigo del articulo
		this.four = four; 		// precio venta
        this.five = five; 		// cantidad
        this.six = six;			// porcentaje descuento
        this.seven = seven; 	// precio total
        this.eight = eight;		// porcentaje descuento
     } 

	//Hace los preparativos para eliminar una fila, además llama a la funcion qu elimina la fila y recalcula
	//el subtotal, impuesto, y total
	function deleteCurrentRow(obj){
	
		var delRow = obj.parentNode.parentNode;
		var tbl = delRow.parentNode.parentNode;
		// obtiene la fila seleccionada
		var rIndex = delRow.sectionRowIndex;
                
		// borra la fila
		var rowArray = new Array(delRow);
		deleteRows(rowArray);
		
		//reordena la tabla para corregir el consecutivo
		reorderRows(tbl, rIndex);
		// se recalculan los totales.
        math();
	}

	//Reordena la tabla despues que una fila fue eliminada
	function reorderRows(tbl, startingIndex){

		if (tbl.rows.length==1){
			// si es igual a 1 la tabla esta vacia, solo tiene la linea del encabezado
			$("#facturar").prop("disabled",true);
			$("#proforma").prop("disabled",true);
			$("#apartado").prop("disabled",true);
		
			$("#fdescuento").val("0.00");
			//$("#fdescuento").prop("disabled",true);
			$("#pdescuento").val("0");
			$("#pdescuento").prop("disabled",true);
		}else{
    		if(tbl.rows[startingIndex]){
				var count = startingIndex;
				for (var i=startingIndex; i<tbl.rows.length; i++) {
					// CONFIG: next line is affected by myRowObject settings
					tbl.rows[i].myRow.one.data = count; // text
					count++;
				};
    		};
		};	
	}

	//Elimina una fila de la tabla
	function deleteRows(rowObjArray){	
		for (var i=0; i<rowObjArray.length; i++) {
			var rIndex = rowObjArray[i].sectionRowIndex;
			rowObjArray[i].parentNode.deleteRow(rIndex);
		}	
	}


//Retorna el precio total por articulo
    function precioTotalArti(precio, cantidad){
        var p = parseInt(precio);
        var c = parseInt(cantidad);
        return p*c;
    }
    
//Elimina el impuesto para poder concatenarlo al string autocompletar del input articulos
    function delImpuesto(precio){
        var imp = (precio*13)/100;
        var res = precio + imp;
        return res;
    }


//Llama al Modal de evaluación de Seguridad 
    function evaDiscount(row){
        $("#modalEvaDiscount").modal('show');
        
        var id = row.getAttribute('id');
        $("#bvalue").val($("#"+id).val());
        $("#nDescuento").val("0");
        
        $("#input-Aut_Desc").removeClass("error");
        $("#message-Descuento").html("");
        //window.res = row;
    }


    function evaDiscountv2(row){ 
               
		var vPorceDesc = parseInt(row.value);
		
		var vmaxDescuento = parseInt($("#porce_max_desc").val());
		document.getElementById('message-fields').innerHTML = "";

		if (vPorceDesc <= vmaxDescuento){
			$("#txtPass").val("");
   			$("#prev_value_tot").val(row.value);
          	math();                      		 
		}else{
	    	if ($("#txtPass").val()=="") {
	        	document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Requiere Autorización para Descuento Especial</strong></div>";
	        	row.value = $("#prev_value_tot").val();
	        	$("#txtPass").prop("disabled",false);
	        	$("#txtPass").focus();	   	            		
	        }else{
	        	if($("#txtPass").val()!=$("#aut_desc").val()){
	        		row.value = $("#prev_value_tot").val();
	                document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Requiere Autorización para Descuento Especial</strong></div>";
	            }else{
	                $("#prev_value_tot").val(row.value);
	                $("#txtPass").prop("disabled",true);
	            };
	            $("#txtPass").val("");
	        };
			math();                 
		};
    }
    

    function evaDiscountLinea(row){
    	$("#modalEvaDiscountLinea").modal('show');
        var id = row.getAttribute('id');
        //$("#bvalueL").val($("#"+id).val());
        //$("#nDescuentoL").val("0");
        $("#bvalueL").val($("#prev_value").val());
        $("#nDescuentoL").val($("#"+id).val());
        $("#input-Aut_DescL").removeClass("error");
        $("#message-DescuentoL").html("");
        window.res = row;
    }
       
//Verifica si el usuario y el password son  
    function verificar(){

        var id = res.getAttribute('id');
              
        $("#"+id).val($("#avalue").val()).number(true,2);
                 
        $("#modalEvaluate").modal('hide');
        math();
        $("#modalEvaluate")[0].reset();     
    }
    
//Rellena el input de los clientes para que se muestre un autocompletar 
    $(function(){
       var availableTags = [
                       {foreach from=$LISTA_CLIENTES item=lP}
                          "{$lP.nombre}"+" | "+ "{$lP.telefono}"+" | "+"{$lP.correo}" 
                          {if $LISTA_CLIENTES.foreach.things.last != true} ,{/if}  
                       {/foreach}   

       ];

       $( "#txtNombre").autocomplete({
                   source: availableTags
       });
     });	
        

//Rellene con un autocomplete el campo usuario para la agil selección antes de imprimir
    $(function(){
    var availableTags = [
                    {foreach from=$LISTA_VENDS item=lP}
                       "{$lP.user}"
                       {if $LISTA_VENDS.foreach.things.last != true} ,{/if}  
                    {/foreach}   
                      
    ];

    $( "#txtUser").autocomplete({
                source: availableTags
            });
        });


//No permite la entrada de ninguna letra o caracter especial al input cantidad
    $(document).ready(function() {
        $("#cant").keydown(function (e) {
            // Allow: backspace, delete, tab, escape, enter and .
            if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
                 // Allow: Ctrl+A
                (e.keyCode == 65 && e.ctrlKey === true) || 
                 // Allow: home, end, left, right, down, up
                (e.keyCode >= 35 && e.keyCode <= 40)) {
                     // let it happen, don't do anything
                     return;
            }
            // Ensure that it is a number and stop the keypress
            if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                e.preventDefault();
            }
        });
    });
    
    $(document).ready(function() {
        $("#avalue").keydown(function (e) {
            // Allow: backspace, delete, tab, escape, enter and .
            if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
                 // Allow: Ctrl+A
                (e.keyCode == 65 && e.ctrlKey === true) || 
                 // Allow: home, end, left, right, down, up
                (e.keyCode >= 35 && e.keyCode <= 40)) {
                     // let it happen, don't do anything
                     return;
            }
            // Ensure that it is a number and stop the keypress
            if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                e.preventDefault();
            }
        });
    });


//Limpia toda la pantalla para realizar una factura nueva
    function clearAll(){
        $('#myForm')[0].reset();
        document.getElementById('message-fields').innerHTML ="";
        var table = document.getElementById("tableItem");
        while(table.rows.length > 1) {
        	  table.deleteRow(1);
        	}
        $("#selectCliente option:selected").remove();                
        $("#selectCliente").chosen('destroy').trigger('liszt:updated');    
        $(".clienteId").attr("id", "0");                
        $('#frmCliente')[0].reset();
        $("#btn-updCliente").prop("disabled",true);
        $("#btn-newCliente").prop("disabled",true);
        $("#selectCliente").prop("disabled",true);

        $("#btn-getInventario").prop("disabled",true);

        
        $("#facturar").prop("disabled",true);
        $("#proforma").prop("disabled",true);
        $("#apartado").prop("disabled",true);
        $("#pdescuento").prop("disabled",true);
        $("#txtVendedor").focus();
    }


    function findItems(){
    	  
        criterio    = $('input[name=criterio]:checked').val();
        txtBusqueda = $("#texto-buscar").val();
      
        $("#info-items").load("buscarProducto.php", { criterio : criterio, txtBusqueda : txtBusqueda }, function(response,status,xhr){

        });    
        
        
    }

    function openModalArticulos(){
        if ($("#texto-buscar").val()==""){
        	document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Debe indicar articulo a busar.</strong></div>";
        }else{
        	document.getElementById('message-fields').innerHTML ="";
            $("#inventory-modal").modal('show');
            var progress = setInterval(function() {
                var $bar = $('.bar');
                if ($bar.width()>=450) {
                    clearInterval(progress);
                    $('.progress').removeClass('active');

                    var idProveedor = '1021';

                    var vcriterio    = cache.$selCriterio.val();
                    var vtxtBusqueda = cache.$txtBuscar.val();
                    
                    if(idProveedor != 0){
                        var properties = {
                            url: "ajaxLoad.php",
                            async: true,
                            cache: false,
                            data: "idProveedor="+idProveedor+"&action=1",
                            type: "POST",
                            //dataType: "json",
                            error: cache.$boxInventory.html("Error cargando articulos"),
                            success: function(inventario){

                                cache.$boxInventory.html(inventario);
							
                            }
                        };            
                        $.ajax(properties);                
                    }else{
                        cache.$boxInventory.html("Debe seleccionar al menos 1 proveedor");
                    }            
                } else {
                    $bar.width($bar.width()+150);
                }
                $bar.text($bar.width()/5 + "%");

            }, 2300);
        
            $("#invOpen").val("1");
            
        }
    }

    function cleanTxtBuscar(){
        
        $("#texto-buscar").val(""); 
        $("#texto-buscar").focus();
        
    }
    

	function Sale(){
		
		window.location="../../home";
			
	}


    

    
	</script>
