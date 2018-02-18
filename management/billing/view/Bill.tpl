
<!DOCTYPE html>
<html>
    <body>
        <form class="form-horizontal"  method="post" action="">
                    <div class="row-fluid" >		
                            <div class="box span12">
                                    <div class="box-header well" data-original-title>
                                            <h2>Confección de factura</h2>
                                    </div>

                                <div class="box span10" style="margin-left: 10px;" >
                                        <div class="box-header well h2">
                                        <h3>Información del Cliente</h3>
                                        </div>
                                    <div id="divCliente" style="margin-left: 10px;margin-top: 10px; margin-bottom:10px; " >
                                            
                                            Nombre del Cliente: <input onfocus="clearNombre();" onchange="getDataClient();" type="text" id="txtNombre" style="text-align: center; font-style: oblique; font-size: 14px; margin-right: 20px; width: 160px;" value="Cliente Contado">
                                            Teléfono:  <input  type="text" id="txtTelefono" style="text-align: center;font-style: oblique; font-size: 14px; margin-right: 20px; width: 160px;" >
                                            Correo:  <input type="text" id="txtCorreo" style="text-align: center;font-style: oblique; font-size: 14px; margin-right: 20px;width: 160px;" >
                                            Exento? <input type="checkbox" onchange="Exento();" id="exento" style="">
                                       
                                        </div>
                                    
                                    </div>
                                <button type="button" onclick="openModalCliente();" class="btn btn-large btn-success"  style="height: 70px; width: 100px; margin-top: 15px; margin-left: 40px;text-align: center;">Agregar cliente</button>
                                        
                                        
                                        
                                <div class="aligncenter" style="width:1060px;height:0; margin-left: 15px;margin-top: 25px; margin-bottom: 10px; border-top:1px solid lightgray;font-size:0;">-</div>

                                <div>
                                    
                                    <table class="table table-striped table-bordered bootstrap-datatable" style="width: 880px; margin-left: 12px; margin-bottom: -12px;">
                                              <thead>
                                                      <tr>
                                                              <th style="width: 85px;">Código</th>
                                                              <th style="width: 350px;">Artículo</th>
                                                              <th>Cantidad</th>
                                                              <th>Precio</th>
                                                              <th>PrecioIVI</th>
                                                              
                                                      </tr>

                                              </thead>
                                     </table>
                                    
                                    <input  type="text" style="width: 870px; margin-top: 15px; margin-left: 12px;" autofocus id="tags"></input>
                                    <input onfocus="clearCant();" type="text" style="width: 60px; margin-top: 15px; margin-left: 12px;" value="Cantidad" id="cant"></input>
                                    <button type="button" id="addSelItem" class="btn btn-lg btn-success" onclick="addNewRow();" style="margin-top: 11px; margin-left:10px; width: 60px; height: 25px; margin-right: 25px;">Añadir</button>
        
                                </div>
                                        
                                    <div class="box-content">

                                            <!---->
                                            <table class="table table-striped table-bordered bootstrap-datatable" id="tableItem">
                                              <thead>
                                                      <tr>
                                                              <th style='width:30px;'>#</th>
                                                              <th style='width:100px;'>Código</th>
                                                              <th style='width:800px;'>Artículo</th>
                                                              <th style='width: 35px;'>Cantidad</th>
                                                              <th style='width:200px;'>Precio de Venta</th>
                                                              <th style="width:200px;">Precio Total</th>
                                                              <th style="width: 10px;">Acción</th>
                                                      </tr>

                                              </thead>
                                              <tbody id="tbod">
                                              <div id ="divtbod" class="grid" style="width: fit-content; border: 1px;">
                                                  

                                              </div>
                                            </tbody>
                                      </table>  
                                      <div >
                                          <div style="margin-left: 10px;margin-top: 10px; margin-bottom:10px; margin-right: 29px;">
                                              <p style="font-style: oblique; font-size: 14px;" align='right'>Subtotal   <input type="text" id="fsubtotal" value="0.00" class='input' readonly="true" align='right' style="margin-right: 42px; text-align: right"></p> 
                                            <p style="font-style: oblique; font-size: 14px;"align='right'>Descuento   <input type="text" id="fdescuento" value="0.00" onclick="evaDiscount();" readonly="true" align='right' style="margin-right: 42px;text-align: right"></p> 
                                            <p style="font-style: oblique; font-size: 14px;"align='right'>Impuesto   <input type="text" id="fimpuesto"  value ="0.00" readonly="true" align='right' style="margin-right: 42px;text-align: right"></p>
                                            <p style="font-style: oblique; font-size: 14px;"align='right'>Total   <input type="text" id="ftotal" value="0.00" readonly="true" align='right' style="margin-right: 42px;text-align: right"></p>
                                          </div>
                                      </div>
                                        
                                      <div class="box-content">
                                          
                                          Usuario: <input type="text" id="txtUser" class="i" style="margin-right: 10px; width: 100px;"></input> Contraseña: <input type="text" style="margin-right: 10px; width: 100px;"></input><button type="submit" name="enviar" class="btn btn-large btn-primary pull-right" style='margin-bottom: 15px; '>Imprimir</button>
                                            <a href="index.php" class="btn btn-large pull-right" data-dismiss="modal" style='margin-bottom: 15px; margin-right: 15px;'>Limpiar</a>
                                            <div id="message-fields-obl"></div> 
                                    </div>

                                    </div>
                            </div><!--/span-->

                    </div><!--/row-->
   </form>            


<!---------------------- MODAL AGREGAR CLIENTE -------------------------------->  
                        
                <div class="modal fade" id="modalCliente" >
                    <form class="form-horizontal" id="frmCliente" action="processClient.php" method="post">
                    <div class="modal-header">
                      <h3>Agregar Cliente</h3>
                    </div>
                    <div class="modal-body">
                      <div class="span6">
                          <div >
                              <label style="margin-bottom: ">Nombre: <input  name="fnombre" id="fnombre" type="text" class="input-xlarge" style="margin-bottom: 15px; margin-top: -5px;"></label>
                              <label style="margin-bottom: ">Correo: <input  name="fcorreo" id="fcorreo" type="text" class="input-xlarge" style="margin-bottom: 15px; margin-top: -5px;"></label>
                              <label style="margin-bottom: ">Teléfono: <input name="ftelefono" id="ftelefono" type="text" class="input-xlarge" style="margin-bottom: 15px; margin-top: -5px;"></label>
                              
                          </div>
                      </div>
                      
                    </div>
                    <div class="modal-footer">
                      <a href="#" class="btn" data-dismiss="modal">Cerrar(Esc)</a>
                      <button id="btnInsCliente" href="#" type="submit"  name="enviar" class="btn btn-large btn-primary pull-right" >Agregar</button>
                      
                    </div>
                    </form>
                </div>
        
<!-- --------------------MODAL SEGURIDAD----------------------- -->
        
                <div class="modal fade" id="modalEvaluate" >
                    <form class="form-horizontal" id="frmCliente" action="processClient.php" method="post">
                    <div class="modal-header">
                      <h3>Seguridad</h3>
                    </div>
                    <div class="modal-body">
                      <div class="span6">
                          <div >
                              <label style="margin-bottom: ">Usuario: <input  name="fuser" id="fuser" type="text" class="input-xlarge" style="margin-bottom: 15px; margin-top: -5px;"></label>
                              <label style="margin-bottom: ">Contraseña: <input  name="fpass" id="fpass" type="text" class="input-xlarge" style="margin-bottom: 15px; margin-top: -5px;"></label>
                          </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <a href="#" class="btn" data-dismiss="modal">Cerrar(Esc)</a>
                      <button id="btnVerify" href="#" type="button"  name="enviar" class="btn btn-large btn-primary pull-right" >Verificar</button>
                      
                    </div>
                    </form>
                </div>
   
                                          
   

<script type="text/javascript">
 
//Abre el Modal donde se agregará un cliente    
    function openModalCliente(){
        $("#modalCliente").modal('show');
    }

//Define la factura como exenta
    function Exento(){
        if($("#exento").is(":checked")){
            $("#fimpuesto").val("0.00");
            calcula(parseInt($("#fsubtotal").val()),0);
        }
    }

//Define el subtotal, impuesto y total de la factura
    $("#addSelItem").on("click",function(e){
        var table = document.getElementById("tableItem").rows.length;
        var sum = "";
        for(x=1;x<table;x++){
         
         sum += $("#precio"+x).val()+ "|";
        
        }
        
        var res = sum.split("|");
        var sum1 = 0;
        for(i=0;i<res.length-1;i++){
            sum1 += parseInt(res[i]);
           
        }
      $("#fsubtotal").val(sum1+".00");
      var imp = (sum1*13)/100;
      $("#fimpuesto").val(imp);
      calcula(sum1, imp);
      
    });


//Calcula el total por aparte para poder utilizarlo en 2 funciones
    function calcula(sub,imp){
        var total = imp + sub;
        $("#ftotal").val(total);
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
        $("#tags").val("");
    }  
    

//Inserta un cliente por medio de AJAX y lo añade a los datos del cliente en la factura
    $("#btnInsCliente").click(function(e){
     // e.preventDefault();
        $.ajax({
            type: "POST",
            url: "processClient.php", //process to mail
            data: $('modalCliente :input').serialize(),
            success: function(){   
                
                $("#txtNombre").val($("#fnombre").val());
                $("#txtTelefono").val($("#ftelefono").val());
                $("#txtCorreo").val($("#fcorreo").val());
                $("#modalCliente").modal('hide');
      
            },
            
            error: function(){
                alert("failure");
            }
        });
    });
 
 //Toma el valor del input, lo divide y lo añande a la tabla de articulos por comprar
    function addNewRow(){
        var res = $("#tags").val();
             var arrRes = res.split("|");
             var cant = $("#cant").val();
             addRow(arrRes,cant);
             clearCant();
             clearTags();           
    }
    
 //Pinta una fila a la tabla de articulos cuando inserta un articulo a comprar   
   function addRow(arrRes, cant) {
 
            var table = document.getElementById("tableItem");
 
            var rowCount = table.rows.length;
            var row = table.insertRow(rowCount);
            
            
            var num = row.insertCell(0);
            var labNum = document.createElement("label");
            labNum.id = "row"+rowCount;
            labNum.textContent = rowCount;
            num.appendChild(labNum);
            
            
            var codArticulo = row.insertCell(1);
            codArticulo.innerHTML = arrRes[0];
            
            var desArticulo = row.insertCell(2);
            desArticulo.innerHTML = arrRes[1];
            
            
            var cantidad = row.insertCell(3);
            var element2 = document.createElement("input");
            element2.type = "text";
            element2.name = "tCantidad";
            element2.value = cant;
            element2.setAttribute('class', 'input-mini');
            element2.setAttribute('style', 'text-align: right');
            element2.setAttribute('onchange', 'refrescarCantidad($(tCantidad).val())');
            cantidad.appendChild(element2);
            
            var prVenta = row.insertCell(4);
            var precioVenta = document.createElement("label");
            precioVenta.setAttribute('style', 'text-align: right');
            precioVenta.textContent = arrRes[2];
            
            prVenta.appendChild(precioVenta);
            
            var precioTotal = row.insertCell(5);
            var element3 = document.createElement("input");
            element3.value = precioTotalArti(arrRes[2],cant);
            element3.type = "text";
            element3.id = "precio"+rowCount;
            element3.setAttribute('class', 'input-mini');
            element3.setAttribute('style', 'text-align: right; width: 185px;');
            element3.setAttribute('readonly', 'true');
            element3.setAttribute('onclick', 'evaDiscount()');
            precioTotal.appendChild(element3);
            
            var btnEliminar = row.insertCell(6);
            var element4 = document.createElement("input");
            element4.type = "button";
            
            element4.setAttribute('class', 'btn btn-round btn-mini icon icon-remove icon-color');
            element4.onclick = function(){ 
                                    document.getElementById("tableItem").deleteRow(parseInt(rowCount));
                                    reorderRows(rowCount);
                               }; 
                
            btnEliminar.appendChild(element4);
          
        }

        

function reorderRows(startingIndex)
{
        var tbl = document.getElementById("tableItem");
        
	if (hasLoaded) {
		if (tbl.tBodies[0].rows[startingIndex]) {
			var count = startingIndex + ROW_BASE;
			for (var i=startingIndex; i<tbl.tBodies[0].rows.length; i++) {
			
				// CONFIG: next line is affected by myRowObject settings
				tbl.tBodies[0].rows[i].myRow.one.data = count; // text
				
				// CONFIG: next line is affected by myRowObject settings
				tbl.tBodies[0].rows[i].myRow.two.name = INPUT_NAME_PREFIX + count; // input text
				
				
				count++;
			}
		}
	}
}


//Retorna el precio total por articulo
    function precioTotalArti(precio, cantidad){
        var p = parseInt(precio);
        var c = parseInt(cantidad);
        return p*c;
    }

//Llama al Modal de evaluación de Seguridad 
    function evaDiscount(){
           $("#modalEvaluate").modal('show');
    }

//Rellena los campos de los datos del usuario con la información de autocompletar
    function getDataClient(){
       var str = $("#txtNombre").val();
       var res = str.split("|");

       $('#txtNombre').val(res[0]);
       $('#txtTelefono').val(res[1]);
       $('#txtCorreo').val(res[2]);
    }

//Elimina el impuesto para poder concatenarlo al string autocompletar del input articulos
    function delImpuesto(precio){
        var imp = (precio*13)/100;
        var res = precio - imp;
        return res;
    }
    
    
    
 
    $("#btnVerify").on("click",function(e){
        var user = $("#fuser").val();
        var pass = $("#fpass").val();
        
        var data = [
            {foreach from=$LISTA_VENDS item=lP}
               "{$lP.user}|{$lP.pass}"
               {if $LISTA_VENDS.foreach.things.last != true} ,{/if}  
            {/foreach}   
                      
        ];
        
        var dataSpt = new Array();
        for(i=0;i<data.length;i++){
            dataSpt[i] = data[i].split("|"); 
        }
        
       
        
        for(x=0;x<dataSpt.length;x++){     

           if(user == dataSpt[x][0] && pass == dataSpt[x][1]){
                alert("fineeeee");
            }else{
                alert("naaaa");
            }
                  
        }
        
        
    });
 
 
 
 
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

//Rellena el input de los articulos para que se muestre un autocompletar
  $(function() {ldelim} 
    var availableTags = [
                    {foreach from=$LISTA_ITEMS item=lP}
                            "{$lP.codArti} | {$lP.desArticulo} | {$lP.precio} | "+ delImpuesto({$lP.precio})
                                {if $LISTA_ITEMS.foreach.things.last != true} ,{/if}
                    {/foreach}
    ];
    
    $( "#tags" ).autocomplete( {ldelim} 
      source: availableTags
      
    {rdelim});
  {rdelim});		
      
	</script>
        </body>
     </html>