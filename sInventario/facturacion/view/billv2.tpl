{$NAV_MENU}
        <form class="form-horizontal" id='myForm'  action="processBill.php" onsubmit="return validateForm()" method="POST">
            <input type="hidden" name="invOpen" id="invOpen" value="0">
            <input type="hidden" name="porce_iv" id="porce_iv" value="{$PORCE_IV[0].IV}">
            <input type="hidden" name="fac_esp" id="fac_esp" value="{$FAC_ESP}">
            <input type="hidden" name="idCliSel" id="idCliSel" value="0">
            <input type="hidden" name="idCliSinNombre" id="idCliSinNombre" value="{$IDCLI_SINNOMBRE[0].idCliSinNombre}">
            <input type="hidden" name="porce_max_desc" id="porce_max_desc" value="{$PORCE_MAX_DESC[0].MaxDesc}">
            <input type="hidden" name="porce_aut_desc" id="porce_aut_desc" value="{$PORCE_AUT_DESC[0].MaxAutDesc}">
            <input type="hidden" name="porce_uti_costo" id="porce_uti_costo" value="{$PORCE_UTI_COSTO[0].PorceUtiCosto}">
            <input type="hidden" name="aut_desc" id="aut_desc" value="{$AUT_DESC[0].AutDesc}">
            <input type="hidden" name="aut_desc_gere" id="aut_desc_gere" value="{$AUT_DESC_GERE[0].AutDesc}">
            <input type="hidden" name="id_tienda" id="id_tienda" value="{$ID_TIENDA}">
            <input type="hidden" name="prev_value" id="prev_value" value="0">
            <input type="hidden" name="prev_value_tot" id="prev_value_tot" value="0">
            <input type="hidden" name="ArticuloExiste" id="ArticuloExiste" value="false">
            <input type="hidden" name="codigoArticulo" id="codigoArticulo" value="">
            <input type="hidden" name="codigoArticuloProv" id="codigoArticuloProv" value="">
            <input type="hidden" name="codigoArticuloBarras" id="codigoArticuloBarras" value="">
            <input type="hidden" name="descipcionArticulo" id="descipcionArticulo" value="">
            <input type="hidden" name="existenciaArticulo" id="existenciaArticulo" value="">
            <input type="hidden" name="precioiviArticulo" id="precioiviArticulo" value="">
            <input type="hidden" name="precioArticulo" id="precioArticulo" value="">
            <input type="hidden" name="costoArticulo" id="costoArticulo" value="">
            <div class="row-fluid" >        
                <div class="box span12">
                    <div class="box-header well" data-original-title>
                        <h2>{$TIT_PAG}</h2>
                            <div class="vendedorvalido" id="0"></div>
                            <a style="font-size: 12px;margin-left:10px;">Vendedor:</a><input type="text" id="txtVendedor" name="txtVendedor" style="width: 100px;" value=" " ></input>
                            <a style="font-size: 12px;">Contraseña:</a><input id='txtPassVend' name="txtPassVend" type="password" style="width: 100px; value=" "></input>
            <!--            <button type="submit" id='apartado'  disabled name="action" value="A"  class="btn  btn-small btn-inverse" style="margin-left:20px;">APARTADO</button>                    -->        
                            <button type="submit" disabled id='proforma'  name="action" value="P"  class="btn btn-small btn-inverse" style="margin-left:20px;">PROFORMA</button>                            
                            <button type="submit" disabled id='facturar'  name="action" value="F"  class="btn btn-small btn-primary" style="margin-left:20px;">FACTURAR</button>
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
 
                        <div class="box span12" style="margin-left: 2px;" >
                            <div class="box-header well h2">
                                <h3>Información del Cliente</h3>
                            </div>
                            <div class="span9" id="divCliente">                             
                                <div class="control-group" id="boxSelCliente" style="margin-top: 15px;  margin-left: -175px;">
                                    <label class="control-label" for="selectCliente"></label>
                                    <div class="controls">
                                        <input type="text"  class="txt_search" id="txtCliente" name="txtCliente" value="" placeholder="En blanco indica Sin Nombre" style="margin-top:15px;  font-size:1vw; width:850px;">
                                    </div>
                                 </div>                                                                  
                            </div>
                            <div class="span2">                         
                        </div> <!-- class="box span10"  -->
                        <button id="btn-newCliente"  type="button" onclick="openModalCliente('I');" class="btn btn-large btn-success"  style=" width: 150px;  margin-left: 40px;text-align: center;">Agregar cliente</button>

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
                                            desc.
                                        </label>
                                        <label class="radio" style="font-size:1.2vw; margin-top:12px;">
                                            <input type="radio" name="criterio" id="optionExt" value="externo" onclick="cleanTxtBuscar()">
                                            externo
                                        </label>
                                        <label class="radio" style="font-size:1.2vw; margin-top:12px;">
                                            <input type="radio" name="criterio" id="optionBarras" value="barras" onclick="cleanTxtBuscar()">
                                            barras
                                        </label>                                                
                                        <form style="margin:0px; padding:0px; float:right; margin-top:-5px;">
                                            <input type="text"  accesskey="s" class="txt_search" id="texto-buscar" name="texto-buscar" value="" style="margin-top:6px; margin-left:10px; font-size:1vw; width:200px;" placeholder="Iniciar Búsqueda">                           
                                            <!-- <input type="text"  accesskey="s" class="txt_search" id="texto-buscar" name="texto-buscar" value="" style="margin-top:6px; margin-left:10px; font-size:1vw; width:200px;" placeholder="Iniciar Búsqueda">  -->
                                            <button id="btn-getInventario" style="margin-top:4px;margin-left:10px;" class="btn btn-small" data-toggle="modal" data-target="#inventory-modal" ><i class="icon-search"></i> Buscar</button>
                                            <input type="text"  id="descArticulo" name="descArticulo"  disabled value="" style="margin-top:4px; margin-left:10px; font-size:1vw; width:350px;" placeholder="Descripción">
                                            <input type="text"  id="precioivi" name="preciovi" disabled value="" style="margin-top:4px; margin-left:5px; font-size:1vw; width:110px;text-align:right;" placeholder="Precio IVI">
                                           <input type="text"  id="existencia" name="existencia"  style="margin-top:4px; margin-left:20px; color:red;font-weight:bold; font-size:1.5vw; width:70px;text-align:right" ; " class="btn btn-small" data-toggle="modal" data-target="#exist-modal" ><i" ; placeholder="Existencia">
                                            <button type="button" title="Agregar" class="btn btn-small btn-success" id="btnAgregaLinea" name="btnAgregaLinea" onclick="AgregaLinea();"><i class="icon-plus icon-white"></i> </button>
                                        </form>                         
                                    </div>  <!-- class controls -->             
                                </div>  <!-- boxCriterios -->                                                       
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
                                  
                                    Autorización Descuento: <input id='txtPass' name="txtPass" type="password"  style="margin-right: 10px; width: 100px;"></input>
                                
                                    Total   <input type="text" id="ftotal" name="ftotal" value="0.00" readonly="true" align='right' style="margin-left: 10px;margin-right: 18px;text-align: right; width: 90px;">
                                    <input type="checkbox" onchange="NoRedondeo();" id="noredondeo" name="noredondeo" title="No Redondeo">
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

<!-------------------------- MODAL EXISTENCIAS ---------------------------------->
<div class="modal fade" id="exist-modal" tabindex="-1" role="dialog" data-refresh="true"  aria-hidden="true" style="margin: -320px 0 0 -380px;width:800px">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header"> 
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>          
            </div>
            <form action="#" method="post" id="frmAllExistencias">
                <div class="modal-body" id="allExistencias" style="max-height: 490px;">                    
                    <h5>Consultando Existencias</h5><div id='boxProgress3' style='width:100%; margin-top:10px;'><div class='progress progress-striped progress-info active' ><div class='bar' style='width:0%;'></div></div></div>                    
                </div>
                <div class="modal-footer clearfix">
                    <button type="button" class="btn btn-inverse" id="accept-choosedE" data-dismiss="modal"><i class="fa fa-check-square-o"></i> Aceptar</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-------------------------- MODAL LISTA CLIENTES ---------------------------------->
<div class="modal fade" id="clientes-modal" tabindex="-1" role="dialog" data-refresh="true"  aria-hidden="true" style="margin: -320px 0 0 -380px;width:800px">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header"> 
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3 class="modal-title green"><i class="fa fa-bars"></i> Lista de Clientes</h3>                
            </div>
            <form action="#" method="post" id="frmAllClientes">
                <div class="modal-body" id="allClientes" style="max-height: 490px;">                    
                    <h5>Consultando Clientes</h5><div id='boxProgress4' style='width:100%; margin-top:10px;'><div class='progress progress-striped progress-info active' ><div class='bar' style='width:0%;'></div></div></div>                    
                </div>
                <div class="modal-footer clearfix">
                    <button type="button" class="btn btn-inverse" id="accept-choosedcli" data-dismiss="modal"><i class="fa fa-check-square-o"></i> Aceptar</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<script type="text/javascript">


$(document).ready(function(){

    $("#txtVendedor").on("change", function (e){
        e.preventDefault();
        txtClave = $("#txtPassVend").val();
        if (txtClave.trim()!=""){
            verVendor();
        }        
    });
    
    $('#texto-buscar').keypress(function(e){
        if(e.keyCode==13){
            e.preventDefault();
            BuscaArticulo($('input[name=criterio]:checked').val(),$('#texto-buscar').val());
        }
    });

    $('#txtCliente').keypress(function(e){
        if(e.keyCode==13){
            e.preventDefault();            
            vTxtCliente = $("#txtCliente").val();
            if (vTxtCliente.trim()!=""){
                $("#idCliSel").val("0");                   
                $("#clientes-modal").modal('show');
                cache.$boxClientes.html("<h5>Consultando Clientes</h5><div id='boxProgress4' style='width:100%; margin-top:10px;'><div class='progress progress-striped progress-info active' ><div class='bar' style='width:0%;'></div></div></div>");
                var progress = setInterval(function() {
                var $bar = $('.bar');
                if ($bar.width()>=450) {
                    clearInterval(progress);
                    $('.progress').removeClass('active');
                    var properties = {
                            url: "ajaxCliente.php",
                            async: true,
                            cache: false,
                            data: "nombreCliente="+vTxtCliente.trim(),
                            type: "POST",
                            //dataType: "json",
                            error: cache.$boxClientes.html("Error cargando clientes"),
                            success: function(clientes){

                                cache.$boxClientes.html(clientes);
                            
                            }
                        };            
                        $.ajax(properties);                
                              
                } else {
                    $bar.width($bar.width()+150);
                }
                $bar.text($bar.width()/5 + "%");

            }, 2300);





                //  BuscaCliente($('input[name=criterio]:checked').val(),$('#texto-buscar').val());
            }else{ 
                $("#idCliSel").val($("#idCliSinNombre").val());
            }
        }
    }); 
    
    $('#txtVendedor').keypress(function(e){
        if(e.keyCode==13){
            e.preventDefault();
            $("#txtPassVend").focus();
        }
    });     
    
    $('#txtPassVend').keypress(function(e){
        if(e.keyCode==13){
            e.preventDefault();
            
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
        mathB();
        $("#input-Aut_DescL").removeClass("error");         
        $("#modalEvaDiscountLinea").modal('hide');
        
    });
    /*
    $("#facturar").on("click", function(e){
    
        if (validateForm()){
            document.forms["myForm"].submit();
        }
    });  
  */  
    
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
            mathB();
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
            mathB();

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
/*
    $('#texto-buscar').keypress(function(e){
        if(e.keyCode==13){
            e.preventDefault();
            $('#btn-getInventario').click();
        }
      });
*/
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
            $btnExistencia    : $("#existencia"),
            $boxInventory     : $("#allInventory"),
            $boxExistencia    : $("#allExistencias"),
            $boxClientes      : $("#allClientes"),
            $txtBuscar        : $("#texto-buscar"),
            $selCriterio      : $("#criterio")
        };

    //BOTON QUE CARGA EL INVENTARIO DE ARTICULOS
    
    cache.$btnInventario.on("click", function(e){

          cache.$boxInventory.html("<h5>Consultando Inventario</h5><div id='boxProgress2' style='width:100%; margin-top:10px;'><div class='progress progress-striped progress-info active' ><div class='bar' style='width:0%;'></div></div></div>");
          if($("#texto-buscar").val()!=""){
                document.getElementById('message-fields').innerHTML = "";
                var vcriterio    = $('input[name=criterio]:checked').val();
                //var vtxtBusqueda = cache.$txtBuscar.val();

                var str = cache.$txtBuscar.val();
                var vtxtBusqueda = str.replace("%", "%25");
                
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
              document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Debe indicar articulo a buscar 2.</strong></div>";    
          }         
    });
    



    $('#inventory-modal').on('show', function (e) {
        if ($("#texto-buscar").val()=="") return e.preventDefault(); // stops modal from being shown
    });
    
    $("#nDescuento").number(true,0);
    $("#pdescuento").prop("disabled",true);
         
    $("#texto-buscar").focus();

   //BOTON QUE CARGA EL INVENTARIO DE EXISTENCIA
    
    cache.$btnExistencia.on("click", function(e){

          cache.$boxExistencia.html("<h5>Consultando Existencia</h5><div id='boxProgress3' style='width:100%; margin-top:10px;'><div class='progress progress-striped progress-info active' ><div class='bar' style='width:0%;'></div></div></div>");
          if($("#texto-buscar").val()!=""){
                document.getElementById('message-fields').innerHTML = "";
               
                var vtienda = $("#selectStore").val(); 
                var vcodart = $("#codigoArticulo").val();
                var vdesart = $("#descipcionArticulo").val();
                
                var str = cache.$txtBuscar.val();
                var vtxtBusqueda = str.replace("%", "%25");
                
                if($("#texto-buscar").val()!=""){
                    var properties = {
                                url: "existencia.php",
                                async: true,
                                cache: false,
                                data: "codArt="+vcodart+"&id_tienda="+vtienda+"&desArt="+vdesart,
                                type: "POST",
                                success: function(existencia){
                                    cache.$boxExistencia.html(existencia);                           
                                } // success
                            }; // var properties            
                            $.ajax(properties);                
                }else{
                        cache.$boxExistencia.html("Debe indicar articulo a buscar.");
                }            
          }else{
              document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Debe indicar articulo a buscar 2.</strong></div>";    
          }         
    });
    


    // MODAL EXISTENCIAS
    $('#exist-modal').on('show', function (e) {
        if ($("#texto-buscar").val()=="") return e.preventDefault(); // stops modal from being shown
    });


//////////////////////////////////////////////// 
    }); // SI SE QUITA ESTO NO CARGA DATOS DEL ARTICULO//


    function BuscaArticulo(criterio,valor){

    }

    function BuscaArticulo(criterio,valor){
        
        document.getElementById('message-fields').innerHTML = "";
        
        validaArticulo(criterio,valor);
        
        switch (criterio){
            case 'barras':
                $('#descArticulo').val($('#descipcionArticulo').val());
                $('#precioivi').val($('#precioiviArticulo').val());
                $('#existencia').val($('#existenciaArticulo').val());
                if (parseInt($('#existencia').val()) <= 0){
                    $('#existencia').css('color','red');
                }else{
                    $('#existencia').css('color','blue');
                }
                $('#precio').val($('#precioArticulo').val());
                if ($('#ArticuloExiste').val() == 'true'){
                    $("#btnAgregaLinea").focus();   
                }else{
                    document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Artículo no existe.</strong></div>";
                    $('#texto-buscar').focus();
                }
                break;
            case 'codigo':
            
                $('#descArticulo').val($('#descipcionArticulo').val());
                $('#precioivi').val($('#precioiviArticulo').val());
                $('#existencia').val($('#existenciaArticulo').val());
                if (parseInt($('#existencia').val()) <= 0){
                    $('#existencia').css('color','red');
                }else{
                    $('#existencia').css('color','blue');
                }
                $('#precio').val($('#precioArticulo').val());
                if ($('#ArticuloExiste').val() == 'true'){
                    $("#btnAgregaLinea").focus();   
                }else{
                    document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Artículo no existe.</strong></div>";
                    $('#texto-buscar').focus();
                }               
                break;
            case 'externo':
                $('#descArticulo').val($('#descipcionArticulo').val());
                $('#precioivi').val($('#precioiviArticulo').val());
                $('#existencia').val($('#existenciaArticulo').val());
                if (parseInt($('#existencia').val()) <= 0){
                    $('#existencia').css('color','red');
                }else{
                    $('#existencia').css('color','blue');
                }
                $('#precio').val($('#precioArticulo').val());
                if ($('#ArticuloExiste').val() == 'true'){
                    $("#btnAgregaLinea").focus();   
                }else{
                    document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Artículo no existe.</strong></div>";
                    $('#texto-buscar').focus();
                }               
                break;
            case 'nombre':
                $('#descArticulo').val($('#descipcionArticulo').val());
                $('#precioivi').val($('#precioiviArticulo').val());
                $('#existencia').val($('#existenciaArticulo').val());
                if (parseInt($('#existencia').val()) <= 0){
                    $('#existencia').css('color','red');
                }else{
                    $('#existencia').css('color','blue');
                }
                $('#precio').val($('#precioArticulo').val());
                if ($('#ArticuloExiste').val() == 'true'){
                    $("#btnAgregaLinea").focus();   
                }else{
                    document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Artículo no existe.</strong></div>";
                    $('#texto-buscar').focus();
                }               
                break;              
        }   
        
    }
    
    
    function validaArticulo(criterio,valor){
    
        $('#ArticuloExiste').val('false');
        
        $.ajax({
            type: "GET",
            url: "processGetArticulo.php",             
            dataType : "text",
            async: false,
            cache: false,
            data: "criterio="+criterio+"&valor="+valor,
            success: function(data,strMsg){
          //    alert(data);
                $dataStr = (data.trim().split("|"));
            //    alert($dataStr[1]);

               
                
                if ($dataStr[0].trim()=='OK') {
                
                    // todo OK, se verifica si el articulo existe
                    $('#codigoArticulo').val($dataStr[1].trim());
                    $('#codigoArticuloProv').val($dataStr[2].trim());
                    $('#codigoArticuloBarras').val($dataStr[3].trim());
                    $('#descipcionArticulo').val($dataStr[4].trim());
                    $('#ArticuloExiste').val($dataStr[5].trim()); 
                    
                    $('#precioiviArticulo').val($dataStr[6]);                   
                    $('#precioArticulo').val($dataStr[7]);
                    $('#existenciaArticulo').val($dataStr[8]);
                    $('#costoArticulo').val($dataStr[9]);

                }else{
                    alert(data);
                    document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Error Inesperado.</strong></div>";
                }

            },
            error: function(jqXHR,textStatus,errorThrown){
                alert('Error Fatal al Validar Articulo '+textStatus);
            }
        });
        
    }

    function AgregaLinea(){
        
        var $hayError = false;
        document.getElementById('message-fields').innerHTML = "";
        $("#facturar").prop("disabled",false); 
        $("#proforma").prop("disabled",false);
                
        if ($("#texto-buscar").val() == ''){
            $hayError = true;
            document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> No hay articulo que agregar.</strong></div>";
            $("#texto-buscar").focus();
            return;
        }
        if ($("#descArticulo").val() == ''){
            $hayError = true;
            document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> No hay articulo que agregar.</strong></div>";
            $("#texto-buscar").focus();
            return;
        }
        if ($("#precioivi").val() == ''){
            $hayError = true;
            document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> No hay articulo que agregar.</strong></div>";
            $("#texto-buscar").focus();
            return;
        }
        if ($("#existencia").val() == ''){
            $hayError = true;
            document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> No hay articulo que agregar.</strong></div>";
            $("#texto-buscar").focus();
            return;
        }
        
        // por default se agrega el articulo con 1 unidad como compra, el usuario puede cambiarla despues
        var cant = '1';
        
        // se obtiene un puntero a la tabla de articulos
        var table = document.getElementById("tableItem");
    
        // se obtiene la cantidad de filas de tabla, el numero incluye la fila del encabezado de las columnas
        var rowCount = table.rows.length;
        
        // se agrega una fila a la tabla para llenarla con los datos del articulo
        // row apunta a la fila     
        var row = table.insertRow(rowCount);

        //******************************************************************
        //consecutivo de linea va en la celda 0
        var textNode = document.createTextNode(rowCount);
        var celda = row.insertCell(0);
        celda.appendChild(textNode);
        
 

        //*****************************************************************
        //descripcion del articulo va en la celda 1
        
        
        var labelArt = document.createElement("label");
        // se obtiene la descripcion del arreglo.
        labelArt.textContent = $('#descipcionArticulo').val();
        labelArt.setAttribute("name","item[]");
        var celda2 = row.insertCell(1);
        celda2.appendChild(labelArt);

        
        var contentArt = document.createElement("input");
        contentArt.value = $('#descipcionArticulo').val();
        contentArt.setAttribute("name","item[]");       
        contentArt.type = "hidden";     
        celda2.appendChild(contentArt);
        
            
        //*****************************************************************
        //codigo del articulo va en la celda 2


        var labelArt2 = document.createElement("label");
        labelArt2.textContent = $('#codigoArticulo').val();
        labelArt2.setAttribute("name","codArti[]");
        var cell2= row.insertCell(2);
        cell2.appendChild(labelArt2);       
        
        
        var contentArt2 = document.createElement("input");
        contentArt2.value = $('#codigoArticulo').val()
        contentArt2.setAttribute("name","codArti[]");
        contentArt2.type = "hidden";
        cell2.appendChild(contentArt2);

        //*****************************************************************
        // Precio de Venta sin impuesto de venta va en la celda 3
        
        var price       = document.createElement("input");      
        price.value     = $.number($('#precioArticulo').val(),2);

        var costo       = document.createElement("input");      
        costo.value     = $.number($('#costoArticulo').val(),2);        
        costo.setAttribute("name","costo[]");       
        costo.type      = "hidden";             
        
        var precioVenta = document.createElement("input");  

        precioVenta.id = "preciov"+rowCount;
        precioVenta.setAttribute("name","precioVenta[]");       
        precioVenta.setAttribute('class', 'input-mini');
        precioVenta.setAttribute('style', 'text-align: right; width: 185px;');
        if ($("#fac_esp").val() == 'N'){
            precioVenta.setAttribute('readonly', 'true');
            precioVenta.type = "text";
            precioVenta.value = $.number(price.value,2);
        }else{
            precioVenta.value = parseFloat($('#precioArticulo').val()).toFixed(2);          
            precioVenta.type = "number";            
            precioVenta.setAttribute("pattern","[0-9]*");
            precioVenta.setAttribute("step","0.01");
            precioVenta.onchange = function(){
                price.value = precioTotalDescArtiB(precioVenta.value ,txtPorceDesc.value);
                price.value = precioTotalArtiB(price.value ,txtCantidad.value);
                precioTotal.value = $.number(price.value,2);                                    
                // se vuelve a recalcular los subtotales de la factura.
                mathB();
            };
            
        }
        var cell3 = row.insertCell(3);
        cell3.appendChild(precioVenta);
        cell3.appendChild(costo);
        
      //*****************************************************************
        // cantidad que inicia con 1 y va en la celda 4
        
        var txtCantidad = document.createElement("input");
        txtCantidad.type = "number";
        txtCantidad.min = 1;
        txtCantidad.id = "cant";
        txtCantidad.setAttribute("name","cant[]");
        txtCantidad.value = cant;
        txtCantidad.setAttribute('class', 'input-mini');
        txtCantidad.setAttribute('style', 'text-align: right');
        txtCantidad.onchange = function(){
                           price.value = precioTotalDescArtiB(precioVenta.value ,txtPorceDesc.value);
                           price.value = precioTotalArtiB(price.value ,txtCantidad.value);
                           precioTotal.value = $.number(price.value,2);
                           // se vuelve a recalcular los subtotales de la factura.
                           mathB();
        
        };
        var cell4 = row.insertCell(4);
        cell4.appendChild(txtCantidad);     

        
        
        //*****************************************************************
        // % Descuento y va en la columna 5, inicia con 0% descuento
        
        var txtPorceDesc = document.createElement("input");
        txtPorceDesc.type = "number";
        txtPorceDesc.min = 0;
        txtPorceDesc.id = "pdesc";
        txtPorceDesc.setAttribute("name","pdesc[]");
        txtPorceDesc.value = 0;
        txtPorceDesc.setAttribute('class', 'input-mini');
        txtPorceDesc.setAttribute('style', 'text-align: right');
        //txtPorceDesc.setAttribute('readonly', 'true');
        //txtPorceDesc.setAttribute('onclick', 'evaDiscount(this)');
        //txtPorceDesc.setAttribute('onclick', 'evaDiscountLinea(this)');
    
    
        // cuando cambia el % de descuento se debe aplicar al articulo
        txtPorceDesc.onchange = function(){
                        // se debe revisar si el porcentaje de descuento
                        // que el vendedor esta indicando no sobre pasa el
                        // maximo permitido para los vendedores.
                        var vPorceDesc     = parseInt(txtPorceDesc.value);
                        var vmaxDescuento  = parseInt($("#porce_max_desc").val());
                        var vmaxAutDesc    = parseInt($("#porce_aut_desc").val());
                        var vporceUtiCosto = parseInt($("#porce_uti_costo").val()) / 100.00;
                      
                        //se limpia la barra que indica el mensaje si el vendedor se pasa
                        // del porcentaje permitido para el.
                        document.getElementById('message-fields').innerHTML = "";
                                                
                        // si el porcentaje es <= al maximo se permite hacerlo
                        if (vPorceDesc <= vmaxDescuento){                       

                            // se salva el valor del porcentaje actual de descuento
                            // para hacer rollback si el usuario se esta pasando
                            $("#prev_value").val(txtPorceDesc.value);
                            price.value = precioTotalDescArtiB(precioVenta.value ,txtPorceDesc.value);
                            
                            // se revisa el precio despues de aplicar el descuento es menor al
                            // costo del articulo + el porcentaje de util minimo
                            
                            // el costo trae commas como separador
                            var costoStr = costo.value;
                            costoStr= costoStr.replace(/,/g, '');
                            var vcostoUti = parseFloat(costoStr).toFixed(2) * (1 + vporceUtiCosto);
                                
                            if (parseFloat(price.value).toFixed(2) < vcostoUti){
                            
                                if ($("#txtPass").val() == "") {
                                    //se hace rollback al porcentaje de descuento al valor anterior
                                    //txtPorceDesc.value = $("#prev_value").val();
                                    txtPorceDesc.value = 0;
                                    document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Requiere Autorización de Gerencia para Descuento mayor a utilidad</strong></div>";
                                    $("#txtPass").prop("disabled",false);
                                    $("#txtPass").val("");
                                    $("#txtPass").focus();
                                }else{
                                    
                                
                                    if($("#txtPass").val() != $("#aut_desc_gere").val()){
                                        // txtPorceDesc.value = $("#prev_value").val();
                                        txtPorceDesc.value = 0;
                                        document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Requiere Autorización de Gerencia para Descuento mayor a utilidad</strong></div>";
                                        $("#txtPass").prop("disabled",false);
                                        $("#txtPass").val("");
                                        $("#txtPass").focus();
                                    }else{
                                        // como si fue correcta la clave
                                        // se guarda el porcentaje de descuento como valor previo
                                        // y se deshabilita el campo clave.
                                        $("#prev_value").val(txtPorceDesc.value);                                       
                                                                                                    
                                        $("#txtPass").val("");
                                    //  $("#txtPass").prop("disabled",true);
                                        price.value = precioTotalArtiB(price.value ,txtCantidad.value);
                                        precioTotal.value = $.number(price.value,2);
                                        mathB();
                                        $("#texto-buscar").focus();
                                    }
                                }
                            }else{ 
                            
                                price.value = precioTotalArtiB(price.value ,txtCantidad.value);
                                precioTotal.value = $.number(price.value,2);
                                mathB();
                            }
                       }else{
                           // como el porcentaje es mayor al permitido, entonces se pide clave de
                           // supervisor para poder permitro

                           // si ya se puso la clave del supervisor se valida que sea la permitida
                           if( ($("#txtPass").val() != $("#aut_desc").val() && vPorceDesc <= vmaxAutDesc) && ($("#txtPass").val() != $("#aut_desc_gere").val()) && vPorceDesc > vmaxDescuento ){
                                //  txtPorceDesc.value = $("#prev_value").val();
                                    txtPorceDesc.value = 0;
                                    document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Requiere Autorización para Descuento Especial 1</strong></div>";
                                    $("#txtPass").prop("disabled",false);
                                    $("#txtPass").val("");
                                    $("#txtPass").focus();
                           }else{
                                    // como si fue correcta la clave
                                    // se guarda el porcentaje de descuento como valor previo
                                    // y se deshabilita el campo clave.
                                    document.getElementById('message-fields').innerHTML = "";
                                    
                                //  $("#txtPass").val("");
                                //  $("#txtPass").prop("disabled",true);
                           };
                                // siempre se debe limpiar el campo clave.
                                //$("#txtPass").val("");
                  
                    
                            price.value = precioTotalDescArtiB(precioVenta.value,txtPorceDesc.value);
                            // se revisa el precio despues de aplicar el descuento es menor al
                            // costo del articulo + el porcentaje de util minimo
                            
                            // el costo trae commas como separador
                            var costoStr = costo.value;
                            costoStr= costoStr.replace(/,/g, '');
                            var vcostoUti = parseFloat(costoStr).toFixed(2) * (1 + vporceUtiCosto);
                            
                            if (parseFloat(price.value).toFixed(2) < vcostoUti){
                                
                                    if($("#txtPass").val() != $("#aut_desc_gere").val()){
                                        // txtPorceDesc.value = $("#prev_value").val();
                                        txtPorceDesc.value = 0;
                                        document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Requiere Autorización de Gerencia para Descuento mayor a utilidad</strong></div>";
                                        $("#txtPass").prop("disabled",false);
                                        $("#txtPass").val("");
                                        $("#txtPass").focus();
                                    }else{
                                        document.getElementById('message-fields').innerHTML = "";
                                        // como si fue correcta la clave
                                        // se guarda el porcentaje de descuento como valor previo
                                        // y se deshabilita el campo clave.
                                        $("#prev_value").val(txtPorceDesc.value); 
                                        
                                                                                                    
                                        $("#txtPass").val("");
                                    //  $("#txtPass").prop("disabled",true);
                                        price.value = precioTotalArtiB(price.value ,txtCantidad.value);
                                        precioTotal.value = $.number(price.value,2);
                                        mathB();
                                        $("#texto-buscar").focus();
                                    }
                                
                            }else{
                                $("#txtPass").val("");
                                //$("#txtPass").prop("disabled",true);
                                $("#prev_value").val(txtPorceDesc.value);
                                price.value = precioTotalArtiB(price.value ,txtCantidad.value);
                                precioTotal.value = $.number(price.value,2);
                                mathB();
                            }
                       } //else if (vPorceDesc <= vmaxDescuento)
        }; // end onchange funcion
        var cell5 = row.insertCell(5);
        cell5.appendChild(txtPorceDesc);
        
        //*****************************************************************
        // precio total   
        var precioTotal = document.createElement("input");
        var price = document.createElement("input");
        // se calcula el precio total
        price.value =  precioTotalArtiB(precioVenta.value,cant);
        precioTotal.value = $.number(price.value,2);
        precioTotal.type = "text";
        precioTotal.id = "precio"+rowCount;
        precioTotal.setAttribute("name","totPrice[]");
        precioTotal.setAttribute('class', 'input-mini');
        precioTotal.setAttribute('style', 'text-align: right; width: 185px;');
        precioTotal.setAttribute('readonly', 'true');
        //precioTotal.setAttribute('onclick', 'evaDiscount(this)');
        var cell6 = row.insertCell(6);
        cell6.appendChild(precioTotal);

        //*****************************************************************
        //boton borrar linea
        //
    
  //    var cell7 = row.insertCell(7);

        var ita=document.createElement('a');
        ita.setAttribute('href', '#');
        ita.setAttribute('onClick', 'deleteCurrentRow(this)');
        var iti=document.createElement('i');
        iti.setAttribute('class', 'icon icon-color icon-remove');
        ita.appendChild(iti);
    
        var cell7 = row.insertCell(7);
        cell7.appendChild(ita);
        
        // se agrega la linea
        row.myRow = new myRowObject(textNode, labelArt, labelArt2, txtCantidad,precioVenta,price, precioTotal, txtPorceDesc);
        
        // se recalulan los totales de la factura
        mathB();            
        $("#existencia").val('');
        $('#descArticulo').val('');
        $('#precioivi').val('');        
        $("#codigoArticulo").val('');
        $("#descipcionArticulo").val('');
        $("#existenciaArticulo").val('');
        $("#recioiviArticulo").val('');
        $("#precioArticulo").val('');
        $("#costoArticulo").val('');
        $("#texto-buscar").val(''); 
        $("#texto-buscar").focus();
        
    }

    //Retorna el precio total por articulo
    function precioTotalDescArtiB(precio, desc){
        // el parametro precio viene formateado con , y .
        // el parametro desc es el un valor entero inicando el descuento
        var precioStr = precio;
        var precioSin = precioStr.replace(/,/g, '');
        // se convierten a numeros ambos valores.
        var p = parseFloat(precioSin);
        var c = parseInt(desc);
        // se calcula el descuento que se esta haciendo al articulo
        var pDesc = c/100.00;
        // se retorna el precio del articulo una aplicado el descuento.
         return (p-(p*pDesc));
        //return (p-ajustaDescuento(p*pDesc));
        
    }
    
    //Retorna el precio total por articulo
    // basicamente la multiplicacion de cantdiad x precio
    function precioTotalArtiB(precio, cantidad){
        // el parametro precio viene ya aplicado el descuento si es que habia
        // tampoco tiene el impuesto de venta, es precio sin impuesto de venta
        var precioStr = precio;
        // se eliminan las comas que trae el precio
        var precioSin = precioStr.replace(/,/g, '');
        // se convierten a numeros para realizar la operacion matematica
        var p = parseFloat(precioSin);
        var c = parseInt(cantidad);
        // se retorna precio x cantidad.
        return p*c;
    }
    
    
    //Calcula el subtotal, impuesto y total
    function mathB(){
        var table = document.getElementById("tableItem");
        var suma = 0.00;
        var precioVenta = 0.00;
        var precioVentaStr = "";
        var descuento = 0;
        var totalDescuento = 0.00;
        var vTotalDescuento  = 0.00;
        var vDeci = 0.00;
        var vDescR = 0.00;
        var totalR5 = 0.00;
        var cant = 1;
      
        for(var x=1; x<table.rows.length; x++){            
            suma += parseFloat(table.rows[x].myRow.six.value);
            // el precio de venta viene formateado con comas, hay que quitarlas.
            precioVentaStr = table.rows[x].myRow.five.value;
            precioVenta    = precioVentaStr.replace(/,/g, '');           
            descuento   = parseInt(table.rows[x].myRow.eight.value);  
            cant = parseInt(table.rows[x].myRow.four.value);  
            // se tiene que calcular el descuento para cada linea para totalizarlo y ponerlo abajo            
            totalDescuento +=  (descuento / 100.00) * (precioVenta * cant);           
        }

     
        
        $("#fdescuento").val(totalDescuento);
        
        var desc = 0.00;
    
        var mDesc =  0;
        $("#fsubtotal").val(suma);
           
        if($("#exento").is(":checked")){
             $("#fimpuesto").val(0);
             totalR5 = round5B(precioTotalB(suma,mDesc,0));     
             // $("#ftotal").val(round5B(precioTotalB(suma,mDesc,0)));
             // si el impuesto es cero, no se debe redondear, por cuando se redondea
             // se hace con base al monto de impuesto
             $("#ftotal").val(precioTotalB(suma,mDesc,0));
        }else{
             totalR5 = round5B( precioTotalB(suma,desc,impuestoTotalB(suma-mDesc)) );
             $("#ftotal").val(round5B(precioTotalB(suma,desc,impuestoTotalB(suma-mDesc))));
             $("#fimpuesto").val(totalR5-suma); 
        }
        
   
       
                
        $("#fsubtotal").number(true,2);
        $("#fdescuento").number(true,2);
        $("#fimpuesto").number(true,2);
        $("#ftotal").number(true,2);
 
    }
  
    function round5B(x)
    {
        if($("#noredondeo").is(":checked")){
            return x;
        }else{
            return Math.ceil(Number(x).toFixed(2)/5)*5;
        }
    }
    
    
  //Calcula el total por aparte para poder utilizarlo en 2 funciones
    function precioTotalB(sub,desc,imp){
        var totDesc =  (sub *(desc/100));   
        var total = imp + (sub - totDesc);
   
        //var total = imp + (sub - (sub *(desc/100)));
        return total;
        
    }



  //Calcula el impuesto de toda la factura
    function impuestoTotalB(sub){
        //var porceIV = parseInt($("#porce_iv").val());
        var imp = (sub *($("#porce_iv").val()/100));
        return imp;
    }   
    
    
    function validateForm() {

        //
        // Se valida que el usuario haya indicado el cliente, es obligatorio.
        //
        document.getElementById('message-fields').innerHTML = "";
        vTxtCliente = $("#txtCliente").val();
        if (vTxtCliente.trim()==""){ 
            $("#idCliSel").val($("#idCliSinNombre").val());
        }
        if ($("#idCliSel").val()=="0"){
            document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Cliente es Requerido.</strong></div>";
            $("#txtVendedor").val(" ");
            $("#txtPassVend").val("");
            return false;
        }       
        
        var table = document.getElementById("tableItem");
        
        // se obtiene la cantidad de filas de tabla, el numero incluye la fila del encabezado de las columnas
        var rowCount = table.rows.length;
        
        if (rowCount == 1){
            // solo tiene el encabezado
            document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> No hay articulos que facturar.</strong></div>";
            $("#txtVendedor").val(" ");
            $("#txtPassVend").val("");
            $("#texto-buscar").focus();
            return false;
        }
        
        if ($.trim($("#txtVendedor").val()) == ""){
            document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Campo Vendedor en Blanco.</strong></div>";
            $("#txtVendedor").focus();
            return false;           
        }
        
        if ($("#txtPassVend").val() == ""){
            document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Campo Clave en Blanco.</strong></div>";
            $("#txtPassVend").focus();
            return false;           
        }
        
    
        
        if (validaVendedor() == false){
            document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Vendedor y/o contraseña incorrectos.</strong></div>";
            $("#txtVendedor").focus();
            return false;    
        }
        
    
        return true;
    }

    
    function validaVendedor(){   

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
            return false;
        }
        if (pass == ""){
            document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Campo Clave en Blanco.</strong></div>";
            $("#txtPassVend").focus();
            return false;
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
           
                    vendedorValido = true;

                }
                else {
                    
                    $(".vendedorvalido").attr("id", "0");
                    vendedorValido = false;

                }
            },
            error: function(jqXHR,textStatus,errorThrown){
                alert('Error al validar Vendedor '+errorThrown);
            }
        });
     

        if ($(".vendedorvalido").attr("id") == "1" ){ 

               return true;

        }else{
              document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Vendedor y/o contraseña incorrectos</strong></div>";
             //  deshabilitaCampos();
    
               $("#txtVendedor").val("");
               $("#txtPassVend").val("");
               $("#txtVendedor").focus();
               return false;
        };               
        } // function validaVendedor

    
    
    
    
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
              // $("#enviar").type = "submit";
               habilitaCampos();
               //$("#texto-buscar").focus();
        }else{
              document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Vendedor y/o contraseña incorrectos</strong></div>";
             //  deshabilitaCampos();
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
         //  $("#enviar").type = "submit";
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
             mathB();
        });
    

//Abre el Modal donde se agregará un cliente    
    function openModalCliente(TipoOperacion){
 //       if (($("#txtVendedor").val()!="")&&($("#txtPassVend").val()!="")) {
            document.getElementById('message-fields').innerHTML = "";    
            $("#newClient-modal").modal('show');
            if (TipoOperacion=='U') {
                // si es un Update se carga los datos del cliente actual
                // en caso de ser una Insercion los campos estan en blanco.
                var clienteSelect = $("#selectCliente").val();
                var cliente = clienteSelect.split("|")
                $(".clienteId").attr("id", cliente[0]); 
                $("#idCliSel").val(cliente[0]);             
                $("#new-Nombre").val(cliente[1]);
                $("#new-Correo").val(cliente[2]);
                $("#new-Telefono").val(cliente[3]);
                $("#new-NombreContacto").val(cliente[4]);
            }else{
                $(".clienteId").attr("id", "0");
                $("#idCliSel").val("0");                
            };
 //       }else{
 //         document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Vendedor es requerido.</strong></div>";            
 //       };     
    }// function openModalCliente

//Define la factura como exenta
    function Exento(){
        if($("#exento").is(":checked")){
            $("#fimpuesto").val(0);
            mathB();
        }else{
            mathB();
        }
    }
    
    function NoRedondeo(){
        if($("#noredondeo").is(":checked")){
            alert("Acaba de seleccionar NO REDONDEAR");
            mathB();
        }else{
            mathB();
        }
    }

//Llama al funcion Math() cuando se presiona el boton Agregar
    $("#addSelItem").on("click",function(){
        mathB();
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
   //   $("#btn-getInventario").prop("disabled",false);
   //     $("#btn-newCliente").prop("disabled",false);
   //     $("#selectCliente").prop("disabled",false);
        $("#facturar").prop("disabled",false);
        $("#proforma").prop("disabled",false);
  
        document.getElementById('message-fields').innerHTML = "";           
    }

//Inserta un cliente por medio de AJAX y lo añade a los datos del cliente en la factura
    $("#add-new-client").click(function(e){
        e.preventDefault();
        // var newNombre   = $("#new-Nombre").val();
        var str = "";
        str = $("#new-Nombre").val();
        var newNombre   = str.replace("&", "%26");

        var newCorreo   = $("#new-Correo").val();
        var newTelefono = $("#new-Telefono").val(); 
        //var newContacto = $("#new-NombreContacto").val();
        str = $("#new-NombreContacto").val();
        var newContacto = str.replace("&", "%26");
        var newClientId = $(".clienteId").attr("id");
        $("#idCliSel").val($(".clienteId").attr("id"));  
        var vendedor    = $("#txtVendedor").val();
        var errors      = false;

        if ($.trim($("#txtVendedor").val()) ==""){
            vendedor = "root";
        }
        
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
            data: "fclienteId="+newClientId+"&fnombre="+newNombre+"&fcorreo="+newCorreo+"&ftelefono="+newTelefono+"&fvendedor="+vendedor+"&fcontacto="+newContacto,
            success: function(data2,strMsg){
                if (data2!="-1") {
                    var nombre =    $("#new-Nombre").val(),
                        tel =       $("#new-Telefono").val(),
                        cor =       $("#new-Correo").val();
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
                    $("#idCliSel").val(data2);
                    $("#txtCliente").val(nombre);
                    //$("#btn-updCliente").prop("disabled",false);                                
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
        this.one = one;         // consecutivo de las lineas
        this.two = two;         // descripcion del articulo
        this.three = three;     // codigo del articulo
        this.four = four;       // precio venta
        this.five = five;       // cantidad
        this.six = six;         // porcentaje descuento
        this.seven = seven;     // precio total
        this.eight = eight;     // porcentaje descuento
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
        mathB();
        
        // como borro una linea se ubica en campo de buscar codigos por que es esperable que quiera
        // buscar otro codigo
        //
        $("#texto-buscar").focus();
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
            mathB();                             
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
            mathB();                 
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
        mathB();
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
        $("#idCliSel").val("0");             
        $('#frmCliente')[0].reset();
   //     $("#btn-updCliente").prop("disabled",true);
   //     $("#btn-newCliente").prop("disabled",true);
   //     $("#selectCliente").prop("disabled",true);

   //     $("#btn-getInventario").prop("disabled",true);

        
        $("#facturar").prop("disabled",true);
        $("#proforma").prop("disabled",true);
        $("#apartado").prop("disabled",true);
        $("#pdescuento").prop("disabled",true);
        $("#texto-buscar").focus();
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
        $("#descArticulo").val("");
        $("#existencia").val("");
        $("#precioivi").val("");
        $("#texto-buscar").val("");
        $("#texto-buscar").focus();
        
    }
    

    function Sale(){
        
        window.location="../../home";
            
    }


    

    
    </script>
