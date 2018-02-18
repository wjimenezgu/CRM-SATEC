<table class="table table-condensed bootstrap-datatable" id="tblAllInventary" style="width:750px">
  <thead>
        <tr>
            <th style="cursor: pointer;">Codigo</th>
            <th style="cursor: pointer;">Descripción</th>
            <th style="cursor: pointer;text-align: right;">Precio IVI</th>
            <th style="cursor: pointer;text-align: right;">Existencia</th>
            <th></th>
        </tr>
  </thead>   
  <tbody> 
  	{assign var=names_count value=$INVENTARIO|@count} 
	 <input type="hidden" name="cantArti" id="cantArti" value="{$names_count}">
    {section loop=$INVENTARIO name=i}    
    <tr id="inv-rowArt1">
        <td>{$INVENTARIO[i].codArti}</td>
        <td class="center">{$INVENTARIO[i].desArticulo|lower|capitalize}</td>
        <td class="center" style="text-align: right;">{$INVENTARIO[i].precio}</td>
        <td class="center" style="text-align: right;">{$INVENTARIO[i].ExisLocal}</td>
        <td class="center">
        <!--    ARTICULODEF (etiqueta que sirve para buscar)							-->
        <!--   	Se envian utilizando el attibuto data varios datos del articulo			-->

            <a class="btn btn-mini btn-info" data="{$INVENTARIO[i].codArti}|{$INVENTARIO[i].desArticulo}|{$INVENTARIO[i].precio}|{$INVENTARIO[i].precioSinIV}"><i class="icon-plus icon-white"></i> Añadir</a>
        </td>        
    </tr>
    {/section}    

  </tbody>
</table>
{literal}
<script type="text/javascript">

	
		
	
		

	var inv_btnAdd = $("[id*='inv-rowArt']").find("td").find("a");
	$(inv_btnAdd).on("click", function(e){
		//se habilitan los botones facturar, proforma y apartado por que el usuario esta agregando un articulo al detalle
  		$("#facturar").prop("disabled",false);
  		$("#credito").prop("disabled",false);
  		$("#proforma").prop("disabled",false);
  		$("#apartado").prop("disabled",false);
        
  		// se extraen del atributo 'data' los campos del articulo para ponerlos en la linea
  		// ver arriba el detalle. buscar etiqueta ARTICULODEF
    	var arrRes = $(this).attr("data").split('|');
  		
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
    	labelArt.textContent = arrRes[1];
    	labelArt.setAttribute("name","item[]");
    	var celda2 = row.insertCell(1);
    	celda2.appendChild(labelArt);

    	
    	var contentArt = document.createElement("input");
    	contentArt.value = arrRes[1];
    	contentArt.setAttribute("name","item[]");    	
    	contentArt.type = "hidden";    	
    	celda2.appendChild(contentArt);

		//*****************************************************************
    	//codigo del articulo va en la celda 2

    	var labelArt2 = document.createElement("label");
        labelArt2.textContent = arrRes[0];
        labelArt2.setAttribute("name","codArti[]");
        var cell2= row.insertCell(2);
        cell2.appendChild(labelArt2);    	
    	
    	
    	var contentArt2 = document.createElement("input");
    	contentArt2.value = arrRes[0];
    	contentArt2.setAttribute("name","codArti[]");
    	contentArt2.type = "hidden";
    	cell2.appendChild(contentArt2);

    	//*****************************************************************
		// Precio de Venta sin impuesto de venta va en la celda 3

//		var precioVentaIVIStr = arrRes[2];
//		precioVentaIVIStr = precioVentaIVIStr.replace(',', ''); 
//		var precioVentaIVIFloat = parseFloat(precioVentaIVIStr);
//		var precioVentaSinIVIFloat = precioVentaIVIFloat / (1.00+$("#porce_iv").val()/100);
		
//		var precioVentaSinIVIFloat = arrRes[3];
	
		var price 		= document.createElement("input");		
//		price.value =  $.number(precioVentaSinIVIFloat,2);
		price.value =  $.number(arrRes[3],2);
		
		var precioVenta = document.createElement("input");	
		precioVenta.value = $.number(price.value,2);
		precioVenta.type = "text";
		precioVenta.id = "preciov"+rowCount;
		precioVenta.setAttribute("name","precioVenta[]");
		precioVenta.setAttribute('class', 'input-mini');
		precioVenta.setAttribute('style', 'text-align: right; width: 185px;');
		if ($("#fac_esp").val() == 'N'){
			precioVenta.setAttribute('readonly', 'true');
		}
		var cell3 = row.insertCell(3);
		cell3.appendChild(precioVenta);

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
                           price.value = precioTotalDescArti(precioVenta.value ,txtPorceDesc.value);
                           price.value = precioTotalArti(price.value ,txtCantidad.value);
                           precioTotal.value = $.number(price.value,2);
                           // se vuelve a recalcular los subtotales de la factura.
                           math();
        
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
		   			  	var vPorceDesc = parseInt(txtPorceDesc.value);
		   			   	var vmaxDescuento = parseInt($("#porce_max_desc").val());
		   			   	//se limpia la barra que indica el mensaje si el vendedor se pasa
		   			   	// del porcentaje permitido para el.
		   				document.getElementById('message-fields').innerHTML = "";
               			            			
						// si el porcentaje es <= al maximo se permite hacerlo
		   			   	if (vPorceDesc <= vmaxDescuento){
		   					$("#txtPass").val("");
//			   			    if (vPorceDesc==0){
			   			    	// si descuento es = 0 entonces se pone el precio sin impuesto de venta
//			   			    	precioVenta.value =  $.number(arrRes[3],2);
//			   			    }
			   			    //se salva el valor del porcentaje actual de descuento
			   			    // para hacer rollback si el usuario se esta pasando
			   			    $("#prev_value").val(txtPorceDesc.value);
                       		price.value = precioTotalDescArti(precioVenta.value ,txtPorceDesc.value);
                       		price.value = precioTotalArti(price.value ,txtCantidad.value);
                       		precioTotal.value = $.number(price.value,2);
                      		math();                      		 
		   			   }else{
		   				   // como el porcentaje es mayor al permitido, entonces se pide clave de
		   				   // supervisor para poder permitro
		   	        		if ($("#txtPass").val()=="") {
		   	        			// si la clave esta en blanco se envia mensaje de error.		   	        			
		   	        			document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Requiere Autorización para Descuento Especial</strong></div>";
		   	        			//se hace rollback al porcentaje de descuento al valor anterior
		   	        			txtPorceDesc.value = $("#prev_value").val();
		   	        			//se habilita el campo clave de supervidor para que digite y se pone el foco
		   	        			// en ese campo.
		   	        			$("#txtPass").prop("disabled",false);
		   	        			$("#txtPass").focus();	   	            		
		   	            	}else{
		   	            		// si ya se puso la clave del supervsor se valida que sea la permitida
		   	                	if($("#txtPass").val()!=$("#aut_desc").val()){
		   	                		txtPorceDesc.value = $("#prev_value").val();
		   	                		document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Requiere Autorización para Descuento Especial</strong></div>";
		   	                	}else{
		   	                		// como si fue correcta la clave
		   	                		// se guarda el porcentaje de descuento como valor previo
		   	                		// y se deshabilita el campo clave.
		   	                		$("#prev_value").val(txtPorceDesc.value);
		   	                		$("#txtPass").prop("disabled",true);
		   	                	};
		   	                	// siempre se debe limpiar el campo clave.
		   	                	$("#txtPass").val("");
		   	            	};
		   	        
//		   					txtPorceDesc.value = $("#prev_value").val();
//		   				    evaDiscountLinea(this);		   					
//		   					price.value = precioTotalDescArti(arrRes[3],txtPorceDesc.value);
		   					price.value = precioTotalDescArti(precioVenta.value,txtPorceDesc.value);
                       		price.value = precioTotalArti(price.value ,txtCantidad.value);
                       		precioTotal.value = $.number(price.value,2);
                      		math();                 
		   			   } //else if (vPorceDesc <= vmaxDescuento)
		}; // end onchange funcion
		var cell5 = row.insertCell(5);
		cell5.appendChild(txtPorceDesc);
		
    	//*****************************************************************
 		// precio total   
    	var precioTotal = document.createElement("input");
    	var price = document.createElement("input");
    	// se calcula el precio total
    	price.value =  precioTotalArti(precioVenta.value,cant);
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
    
    //	var cell7 = row.insertCell(7);

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
    	math();
		
//    	$("#pdescuento").prop("disabled",false); 

		// se limpia el campo para buscar artiulos
   		cleanTxtBuscar();

        // se posiciona en el campo select cliente por que la mayoria de la veces el usuario
        // quiere poner el cliente al agregar un articulo
        // $("#selectCliente").focus();

        
		// una vez agregado el articulo al detalle se regresa a la pantalla de la factura
		// se cierra el modal
    	$("#accept-choosed").click();
    
	});
	
	
	/* el siguiente codigo se deshabilita por que YA NO SE QUIERE que si es solo un articulo
	   no se agregue automaticamente.
	
	if ($("#cantArti").val() == "1"){
		// se agrega la linea del artculo
		$(inv_btnAdd).click();
		// se cierra la modal
		$("#accept-choosed").click();
		
	}
	*/

	//Retorna el precio total por articulo
	// basicamente la multiplicacion de cantdiad x precio
    function precioTotalArti(precio, cantidad){
		// el parametro precio viene ya aplicado el descuento si es que habia
		// tampoco tiene el impuesto de venta, es precio sin impuesto de venta
        var precioStr = precio;
		// se eliminan las comas que trae el precio
        var precioSin = precioStr.replace(',', '');
		// se convierten a numeros para realizar la operacion matematica
        var p = parseFloat(precioSin);
        var c = parseInt(cantidad);
        // se retorna precio x cantidad.
        return p*c;
    }

	//Retorna el precio total por articulo
    function precioTotalDescArti(precio, desc){
		// el parametro precio viene formateado con , y .
		// el parametro desc es el un valor entero inicando el descuento
        var precioStr = precio;
        var precioSin = precioStr.replace(',', '');
        // se convierten a numeros ambos valores.
        var p = parseFloat(precioSin);
        var c = parseInt(desc);
        // se calcula el descuento que se esta haciendo al articulo
        var pDesc = c/100.00;
        // se retorna el precio del articulo una aplicado el descuento.
         return (p-(p*pDesc));
        //return (p-ajustaDescuento(p*pDesc));
        
    }
	
	function ajustaDescuento(pDescuento){
        var totalDescuento = 0.00;
        var vTotalDescuento  = 0.00;
        var vDeci = 0.00;
        var vDescR = 0.00;
		
        vTotalDescuento = pDescuento / 10.00;  	
     	vDescR = vTotalDescuento | 0;
        vDeci = vTotalDescuento - vDescR;
        
        if ((vDeci*100) > 25.00){
        	totalDescuento = (vDescR * 10) + 5;
        }else{
        	totalDescuento = (vDescR * 10);
        }
        return totalDescuento;
	}
    
  //Calcula el subtotal, impuesto y total
    function math(){
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
            precioVenta    = precioVentaStr.replace(',', '');           
            descuento   = parseInt(table.rows[x].myRow.eight.value);  
            cant = parseInt(table.rows[x].myRow.four.value);  
            // se tiene que calcular el descuento para cada linea para totalizarlo y ponerlo abajo            
            totalDescuento +=  (descuento / 100.00) * (precioVenta * cant);           
        }
        
       // totalDescuento = ajustaDescuento(totalDescuento);
 //       vTotalDescuento = totalDescuento / 10.00;  	
 //    	vDescR = vTotalDescuento | 0;
 //       vDeci = vTotalDescuento - vDescR;
        
 //       if ((vDeci*100) > 25.00){
 //       	totalDescuento = (vDescR * 10) + 5;
 //       }else{
 //       	totalDescuento = (vDescR * 10);
 //       }
        
        
        $("#fdescuento").val(totalDescuento);
   		//     var desc = $("#pdescuento").val();
   		var desc = 0.00;
   		//     $("#fdescuento").val(suma*(desc/100.00));
   		//     var mDesc =  $("#fdescuento").val();
   		var mDesc =  0;
        $("#fsubtotal").val(suma);
        
        if($("#exento").is(":checked")){
             $("#fimpuesto").val(0);
             totalR5 = round5(precioTotal(suma,mDesc,0));
             //$("#ftotal").val(round5(precioTotal(suma,mDesc,0)));
             // si el impuesto es cero, no se debe redondear, por cuando se redondea
             // se hace con base al monto de impuesto
             $("#ftotal").val(precioTotalB(suma,mDesc,0));
        }else{
             // $("#fimpuesto").val(impuestoTotal(suma-mDesc)); 
             totalR5 = round5( precioTotal(suma,desc,impuestoTotal(suma-mDesc)) );
             $("#ftotal").val(round5(precioTotal(suma,desc,impuestoTotal(suma-mDesc))));
             $("#fimpuesto").val(totalR5-suma); 
        }
        
       
       
        		
        $("#fsubtotal").number(true,2);
        $("#fdescuento").number(true,2);
        $("#fimpuesto").number(true,2);
        $("#ftotal").number(true,2);
    }
  
    function round5(x)
    {
    	if($("#noredondeo").is(":checked")){
    		return x;
    	}else{
        	return Math.ceil(Number(x).toFixed(2)/5)*5;
    	}
    }


//Calcula el total por aparte para poder utilizarlo en 2 funciones
    function precioTotal(sub,desc,imp){
        var totDesc =  (sub *(desc/100));   
        var total = imp + (sub - totDesc);
            
        //var total = imp + (sub - (sub *(desc/100)));
        return total;
        
    }



  //Calcula el impuesto de toda la factura
    function impuestoTotal(sub){
        //var porceIV = parseInt($("#porce_iv").val());
        var imp = (sub *($("#porce_iv").val()/100));
        return imp;
    }

	
	
	$("#tblAllInventary").dataTable({                        
			"sDom": "<'row-fluid'<'span6'l><'span6'f>r>t<'row-fluid'<'span12'i><'span12 center'p>>",
			"sPaginationType": "bootstrap",
                        'iDisplayLength': 12,
                        "aLengthMenu": [[12, 40, 60, 80, -1], [12, 40, 60, 80, "Todos"]],
			"oLanguage": {
                        "sProcessing":     "Procesando...",
                        "sLengthMenu":     "Mostrar _MENU_ registros",
                        "sZeroRecords":    "No se encontraron resultados",
                        "sEmptyTable":     "Ningún dato disponible en esta tabla",
                        "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                        "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                        "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                        "sInfoPostFix":    "",
                        "sSearch":         "Buscar:",
                        "sUrl":            "",
                        "sInfoThousands":  ",",
                        "sLoadingRecords": "Cargando..."
			}
		} );           
        
//    });      
</script>
{/literal}