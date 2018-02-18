<table class="table table-condensed bootstrap-datatable" id="tblAllInventary" style="width:750px">
  <thead>
        <tr>
            <th style="cursor: pointer;">Codigo</th>
            <th style="cursor: pointer;">Descripción</th>
            <th style="cursor: pointer;text-align: right;">Existencia</th>
            <th></th>
        </tr>
  </thead>   
  <tbody> 

    {section loop=$INVENTARIO name=i}
    <tr id="inv-rowArt1">
        <td>{$INVENTARIO[i].codArti}</td>
        <td class="center">{$INVENTARIO[i].desArticulo|lower|capitalize}</td>
        <td class="center" style="text-align: right;">{$INVENTARIO[i].ExisLocal}</td>
        <td class="center">
            <a class="btn btn-mini btn-info" data="{$INVENTARIO[i].codArti}|{$INVENTARIO[i].desArticulo|lower|capitalize}|{$INVENTARIO[i].precio}|{$INVENTARIO[i].precioSinIV}"><i class="icon-plus icon-white"></i> Añadir</a>
        </td>        
    </tr>
    {/section}    

  </tbody>
</table>
{literal}
<script type="text/javascript">

	var inv_btnAdd = $("[id*='inv-rowArt']").find("td").find("a");
	$(inv_btnAdd).on("click", function(e){

  	$("#facturar").prop("disabled",false);
  	//$("#fdescuento").prop("disabled",false);            
    var arrRes = $(this).attr("data").split('|');
    var cant = '1';
    var table = document.getElementById("tableItem");
    
    var rowCount = table.rows.length;
    var row = table.insertRow(rowCount);

    //consecutivo de linea
    var cell0 = row.insertCell(0);
    var textNode = document.createTextNode(rowCount);
    cell0.appendChild(textNode);


    //descripcion del articulo
    var cell1 = row.insertCell(1);
    var labelArt = document.createElement("label");
    var contentArt = document.createElement("input");
    contentArt.value = arrRes[1];
    contentArt.setAttribute("name","item[]");
    contentArt.type = "hidden";
    labelArt.textContent = arrRes[1];
    labelArt.setAttribute("name","item[]");
    cell1.appendChild(labelArt);
    cell1.appendChild(contentArt);


    //codigo del articulo
    var  cell2= row.insertCell(2);
    //var desArticulo = document.createTextNode(arrRes[0]);

    var labelArt2 = document.createElement("label");
    var contentArt2 = document.createElement("input");
    contentArt2.value = arrRes[0];
    contentArt2.setAttribute("name","codArti[]");
    contentArt2.type = "hidden";
    labelArt2.textContent = arrRes[0];
    labelArt2.setAttribute("name","codArti[]");
    cell2.appendChild(labelArt2);
    cell2.appendChild(contentArt2);

    // cantidad
    var cell4 = row.insertCell(3);
    var txtCantidad = document.createElement("input");
    txtCantidad.type = "number";
    txtCantidad.min = 1;
    txtCantidad.id = "cant";
    txtCantidad.setAttribute("name","cant[]");
    txtCantidad.value = cant;
    txtCantidad.setAttribute('class', 'input-mini');
    txtCantidad.setAttribute('style', 'text-align: right');

    cell4.appendChild(txtCantidad);

    //boton borrar linea
    //
    
    var cell5 = row.insertCell(4);

    var ita=document.createElement('a');
    ita.setAttribute('href', '#');
    ita.setAttribute('onClick', 'deleteCurrentRow(this)');
    var iti=document.createElement('i');
    iti.setAttribute('class', 'icon icon-color icon-remove');
    ita.appendChild(iti);
    

    cell5.appendChild(ita);
    

    row.myRow = new myRowObject(textNode, labelArt, labelArt2, txtCantidad );

                               
    $("#accept-choosed").click();
    
	});


	function deleteCurrentRow(obj){
		
		var delRow = obj.parentNode.parentNode;
		var tbl = delRow.parentNode.parentNode;
		var rIndex = delRow.sectionRowIndex;
                
		var rowArray = new Array(delRow);
		deleteRows(rowArray);
		reorderRows(tbl, rIndex);

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