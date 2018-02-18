<table class="table table-condensed bootstrap-datatable" id="tblAllInventary">
  <thead>
        <tr>
            <th style="cursor: pointer;">Codigo</th>
            <th style="cursor: pointer;">Descripción</th>
            <th></th>
        </tr>
  </thead>   
  <tbody> 

    {section loop=$INVENTARIO name=i}
    <tr id="inv-rowArt1">
        <td>{$INVENTARIO[i].codArti}</td>
        <td class="center">{$INVENTARIO[i].desArticulo|lower|capitalize}</td>
        <td class="center">
            <a class="btn btn-mini btn-info" data="{$INVENTARIO[i].codArti}|{$INVENTARIO[i].desArticulo|lower|capitalize}|{$INVENTARIO[i].codArtiProveedor}"><i class="icon-plus icon-white"></i> Añadir</a>
        </td>
    </tr>
    {/section}    

  </tbody>
</table>
{literal}
<script type="text/javascript">
//$(function(){
        
        var cache = {
            $selProveedor  : $("#selectProveedor"),
            $addNewRow     : $("#addNewRow"),
            $tblPedido     : $("#tblPedido"),
            $btnInventario : $("#btn-getInventario"),
            $boxInventory  : $("#allInventory"),
            $infoProveedor : {}
        };                
                
        var inv_btnAdd = $("[id*='inv-rowArt']").find("td").find("a");
        $(inv_btnAdd).on("click", function(e){

            var htmlTable = "";
                        
            var dataArticulo = $(this).attr("data").split('|');                                                
            
            var pageAnt = parseInt($("#count-numRow").val());            
            var numRow = parseInt($("#count-numRow").val())+ 1;
            
            htmlTable += "<tr class=\"numRow"+numRow+"\" id=\"register"+numRow+"\">";
            htmlTable += "<td class='evalNumRegister' style=\"text-align:center;\"><div style='margin-top:4px;'><br>"+numRow+"</div></td>";
            htmlTable += "<td class='evalCant' style=\"text-align: center\"><div class='control-group' id='row"+numRow+"-input-cant'><br><input class=\"input-mini toCalc\" name=\"row"+numRow+"-cant\" id=\"row"+numRow+"-cant\" type=\"text\" value=\"0\" style=\"text-align:right; width:28px;\"  oninput=\"makeCal(this.id)\"></div></td>";
            htmlTable += "<td class='evalArti'>";
            htmlTable += "<div class='pull-left control-group' id='row"+numRow+"-input-codProveedor' style='margin-right:3px;' title='codProveedor'><span class=\"label label-info\">Cod.Arti.Prov</span><br><input type=\"text\" class=\"input-mini\" style=\"width:71px;\" id=\"row"+numRow+"-codProveedor\" name=\"row"+numRow+"-codProveedor\" value=\""+dataArticulo[2]+"\" placeholder=\"Cod.Arti.Prov\"></div>";            
            htmlTable += "<div class='pull-left control-group' id='row"+numRow+"-input-nameArticle' style='margin-right:3px;' title='nameArticle'><span class=\"label label-info\">Descripción</span><br><input type=\"text\" class=\"input-mini\" style=\"width:78px;\" id=\"row"+numRow+"-nameArticle\"  name=\"row"+numRow+"-nameArticle\"  value=\""+dataArticulo[1]+"\" placeholder=\"Nombre Artículo\"></div>";
            htmlTable += "<div class='pull-left control-group' id='row"+numRow+"-input-codInterno' style='margin-right:3px;' title='codInterno'><span class=\"label label-info\">Cod.Interno</span><br><input type=\"text\" class=\"input-mini\"  style=\"width:65px;\" id=\"row"+numRow+"-codInterno\"   name=\"row"+numRow+"-codInterno\"   value=\""+dataArticulo[0]+"\" placeholder=\"Cod.Interno\"></div>";                        
            htmlTable += "<!--<i class=\"icon icon-blue icon-info\"></i>-->";
            htmlTable += "</td>";
            htmlTable += "<td class='evalCostUnit'><div class='pull-left control-group' id='row"+numRow+"-input-costUnit' style='margin-right:3px;'><br><input class=\"input-mini toCalc\" id=\"row"+numRow+"-costUnit\"  name=\"row"+numRow+"-costUnit\"  type=\"text\" value=\"0\" style=\"text-align:right;\" oninput=\"makeCal(this.id)\"></div></td>";
            htmlTable += "<td class='evalCostTotal'><br><input class=\"input-mini toCalc\" id=\"row"+numRow+"-costTotal\" name=\"row"+numRow+"-costTotal\" type=\"text\" value=\"0\" style=\"text-align:right;\"></td>";
            htmlTable += "<td class='evalInfoRef'><br>";
        
            htmlTable += "<div class=\"pull-left\">";

            htmlTable += "          <select id=\"row"+numRow+"-typeRef\" name=\"row"+numRow+"-typeRef\" class=\"own-selected\" style=\"width:48px; padding:0; float: left; margin-top:2px; margin-right:2px;\">";
            htmlTable += "                <option>Tipo</option>";
            htmlTable += "                <option>COD</option>";
            htmlTable += "                <option>PRO</option>";
            htmlTable += "                <option>CLI</option>";
            htmlTable += "          </select>";

            htmlTable += "<input type=\"text\" id=\"row"+numRow+"-numRef\" name=\"row"+numRow+"-numRef\" placeholder=\"#referencia\" class=\"input-mini pull-left\" style=\"margin:0px 3px 3px 0px; float: left; width:47px;\">";
            htmlTable += "<input type=\"text\" id=\"row"+numRow+"-detRef\" name=\"row"+numRow+"-detRef\" placeholder=\"detalle\" class=\"input-mini pull-left\" style=\"margin:0px 3px 3px 0px; float: left;\">";

            htmlTable += "</div>";

        
            htmlTable += "</td>";
            htmlTable += "<td class='evalBtnDel'><br><a onclick='delRegister("+numRow+")' style='cursor: pointer;'><span class='icon icon-color icon-remove'></span></a></td>";
            htmlTable += "</tr>";                              
            
            if(pageAnt == 0){
                cache.$tblPedido.find("tr.none").after(htmlTable);        
            }else{
                cache.$tblPedido.find("tr.numRow"+pageAnt).after(htmlTable);        
            }
            
            var strCompromisos = "";
            var listCompromisos = {                                                        
                url: "loadListCompromisos.php",
                async: true,
                cache: false,
                type: "POST",
                dataType: "json",
                success: function(infoComp){
                    
                    var total = Object.keys(infoComp).length
                    
                    strCompromisos += "<option value='0'>Tipo</option>";
                    for(var x=0; x < total; x++){
                        if(infoComp[x].descripcion == "STOCK"){
                            strCompromisos += "<option value='"+infoComp[x].id+"' selected>"+infoComp[x].descripcion+"</option>";
                        }else{
                            strCompromisos += "<option value='"+infoComp[x].id+"'>"+infoComp[x].descripcion+"</option>";
                        }
                        
                    }
                    
                    $("#row"+numRow+"-typeRef").html(strCompromisos);                    
                    //alert(strCompromisos);
                }                                                           

            };
            $.ajax(listCompromisos);           
            
            $('#row'+numRow+'-costUnit').number( true, 2 );
            $('#row'+numRow+'-costTotal').number( true, 2 );            
            
            var infoProveedor = {
                url: "loadInfoProveedor.php",
                async: true,
                cache: false,
                data: "idProveedor="+cache.$selProveedor.val(),
                type: "POST",
                dataType: "json",
                success: function(dataProveedor){                        

                    if(dataProveedor["LIST_CODES"] != "0"){
                        //SE CARGAN LOS DATOS DE LOS ARTICULOS UNA VEZ QUE SE SE SELECCIONE EL PROVEEDOR: MAS EFICIENTE (Funciona con la Primera linea)//
                        $( "#row"+numRow+"-codInterno" ).autocomplete(
                                {
                                        source:dataProveedor["LIST_CODES"][0],
                                        select: function( event, ui ) {                    
                                                //$( "#codInterno" ).val( ui.item.label + " / " + ui.item.DesArticulo );
                                                //$( "#row"+numRow+"-codInterno" ).val( ui.item.label );
                                                //alert($(this).attr("id"));
                                                var choosedRow = $(this).attr("id").split('-');                                                
                                                $( "#"+choosedRow[0]+"-codInterno" ).val( ui.item.label );
                                                
                                                    var infoCodSel = {                                                        
                                                        url: "loadInfoByCod.php",
                                                        async: true,
                                                        cache: false,
                                                        data: "idProveedor="+cache.$selProveedor.val()+"&codArticulo="+ui.item.label,
                                                        type: "POST",
                                                        dataType: "json",
                                                        success: function(infoCod){
                                                            $( "#"+choosedRow[0]+"-codProveedor" ).val( infoCod[0].CodArtiPro );
                                                            $( "#"+choosedRow[0]+"-nameArticle" ).val( infoCod[0].DesArticulo );
                                                        }                                                           
                                                        
                                                    };
                                                    $.ajax(infoCodSel);                                                
                                                
                                                
                                                return false;
                                        }
                                }).data( "autocomplete" )._renderItem = function( ul, item ) {

                                            return $( "<li></li>" )
                                                    .data( "item.autocomplete", item )
                                                    //.append( "<a><strong>" + item.label + "</strong> / " + item.DesArticulo + "</a>" )
                                                    .append( "<a><strong>" + item.label + "</strong></a>" )
                                                    .appendTo( ul );


                                  };                                         

                        //SE CARGAN LOS DATOS DE LOS ARTICULOS UNA VEZ QUE SE SE SELECCIONE EL PROVEEDOR: MAS EFICIENTE (Funciona con la Primera linea)//
                        $( "#row"+numRow+"-nameArticle" ).autocomplete(
                                {
                                        source:dataProveedor["LIST_CODES"][1],
                                        select: function( event, ui ) {                    
                                                //$( "#codInterno" ).val( ui.item.label + " / " + ui.item.DesArticulo );                                                
                                                var choosedRow = $(this).attr("id").split('-');                                                
                                                $( "#"+choosedRow[0]+"-nameArticle" ).val( ui.item.label );                                                
                                                
                                                    var infoDesSel = {                                                        
                                                        url: "loadInfoByDes.php",
                                                        async: true,
                                                        cache: false,
                                                        data: "idProveedor="+cache.$selProveedor.val()+"&desArticle="+ui.item.label,
                                                        type: "POST",
                                                        dataType: "json",
                                                        success: function(infoDes){
                                                            
                                                            $( "#"+choosedRow[0]+"-codInterno" ).val( infoDes[0].CodArti );
                                                            $( "#"+choosedRow[0]+"-codProveedor" ).val( infoDes[0].CodArtiPro );
                                                            
                                                        }                                                           
                                                        
                                                    };
                                                    $.ajax(infoDesSel);                                                 
                                                
                                                return false;
                                        }
                                }).data( "autocomplete" )._renderItem = function( ul, item ) {
                                        return $( "<li></li>" )
                                                .data( "item.autocomplete", item )
                                                //.append( "<a><strong>" + item.label + "</strong> / " + item.DesArticulo + "</a>" )
                                                .append( "<a><strong>" + item.label + "</strong></a>" )
                                                .appendTo( ul );
                                  };
                                  

                            $( "#row"+numRow+"-codProveedor" ).autocomplete(
                                    {
                                            source:dataProveedor["LIST_CODES"][2],
                                            select: function( event, ui ) {                    
                                                    //$( "#codInterno" ).val( ui.item.label + " / " + ui.item.DesArticulo );                                                    
                                                    var choosedRow = $(this).attr("id").split('-');                                                
                                                    $( "#"+choosedRow[0]+"-codProveedor" ).val( ui.item.label );     
                                                
                                                    var infoProSel = {                                                        
                                                        url: "loadInfoByCodPro.php",
                                                        async: true,
                                                        cache: false,
                                                        data: "idProveedor="+cache.$selProveedor.val()+"&codProArticle="+ui.item.label,
                                                        type: "POST",
                                                        dataType: "json",
                                                        success: function(infoPro){
                                                            //alert(infoPro)                                                            
                                                            $( "#"+choosedRow[0]+"-codInterno" ).val( infoPro[0].CodArti );
                                                            $( "#"+choosedRow[0]+"-nameArticle" ).val( infoPro[0].DesArticulo );
                                                            
                                                        }                                                           
                                                        
                                                    };
                                                    $.ajax(infoProSel);                                                    
                                                    
                                                    
                                                    return false;
                                            }
                                    }).data( "autocomplete" )._renderItem = function( ul, item ) {
                                            return $( "<li></li>" )
                                                    .data( "item.autocomplete", item )
                                                    //.append( "<a><strong>" + item.label + "</strong> / " + item.DesArticulo + "</a>" )
                                                    .append( "<a><strong>" + item.label + "</strong></a>" )
                                                    .appendTo( ul );
                                      };    
            
                                  
                    }else{
                     
                        //SE CARGAN LOS DATOS DE LOS ARTICULOS UNA VEZ QUE SE SE SELECCIONE EL PROVEEDOR: MAS EFICIENTE (Funciona con la Primera linea)//
                        $( "#row"+numRow+"-codInterno" ).autocomplete(
                                {
                                        source:[{"label":"Sin Resultados"}],
                                        select: function( event, ui ) {                    
                                                //$( "#codInterno" ).val( ui.item.label + " / " + ui.item.DesArticulo );
                                                $( "#row"+numRow+"-codInterno" ).val( ui.item.label );                                                
                                                return false;
                                        }
                                }).data( "autocomplete" )._renderItem = function( ul, item ) {

                                            return $( "<li></li>" )
                                                    .data( "item.autocomplete", item )
                                                    //.append( "<a><strong>" + item.label + "</strong> / " + item.DesArticulo + "</a>" )
                                                    .append( "<a><strong>" + item.label + "</strong></a>" )
                                                    .appendTo( ul );


                                  };                                         

                        //SE CARGAN LOS DATOS DE LOS ARTICULOS UNA VEZ QUE SE SE SELECCIONE EL PROVEEDOR: MAS EFICIENTE (Funciona con la Primera linea)//
                        $( "#row"+numRow+"-nameArticle" ).autocomplete(
                                {
                                        source:[{"label":"Sin Resultados"}],
                                        select: function( event, ui ) {                    
                                                //$( "#codInterno" ).val( ui.item.label + " / " + ui.item.DesArticulo );
                                                $( "#row"+numRow+"-nameArticle" ).val( ui.item.label );
                                                return false;
                                        }
                                }).data( "autocomplete" )._renderItem = function( ul, item ) {
                                        return $( "<li></li>" )
                                                .data( "item.autocomplete", item )
                                                //.append( "<a><strong>" + item.label + "</strong> / " + item.DesArticulo + "</a>" )
                                                .append( "<a><strong>" + item.label + "</strong></a>" )
                                                .appendTo( ul );
                                  };                              

                    }                        

                }
            };                   
            $.ajax(infoProveedor);            
            
            $("#count-numRow").val(numRow); 
            
            $("input[type=text]").on("click", function(e){
                this.select();
            });            
            
             var statusCostObl = $("#txt-costObl").val();
             $("[id*='register']").each(function() {

               var rwIDName = $(this).find('td.evalCant').find("div").attr("id");
               var inputIDName = $(this).find('td.evalCant').find("div").find("input").attr("id");
               
                $("#"+inputIDName).rules('add', {
                    required: function(){
                        $("#"+rwIDName).removeClass("error"); return true;
                    },
                    min:1,
                    messages: {
                        required:  function(){
                                           $("#"+rwIDName).addClass("error");
                                           $("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Complete la Información Requerida</strong></div>");                                           
                                        },
                        min:  function(){
                                           $("#"+rwIDName).addClass("error");
                                           $("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Complete la Información Requerida</strong></div>");
                                        }
                    }
                });

//               var rwIDName2 = $(this).find('td.evalArti').find("div[title=codInterno]").attr("id");
//               var inputIDName2 = $(this).find('td.evalArti').find("div[title=codInterno]").find("input").attr("id");
//                              
//                $("#"+inputIDName2).rules('add', {
//                    required: function(){
//                        $("#"+rwIDName2).removeClass("error"); return true;
//                    },
//                    min:1,
//                    messages: {
//                        required:  function(){
//                                           $("#"+rwIDName2).addClass("error");
//                                           $("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Complete la Información Requerida</strong></div>");                                           
//                                        }
//                    ,
//                       min:  function(){
//                                           $("#"+rwIDName2).addClass("error");
//                                           $("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Complete la Información Requerida</strong></div>");
//                                        }
//                    }
//                });

               var rwIDName3 = $(this).find('td.evalArti').find("div[title=codProveedor]").attr("id");
               var inputIDName3 = $(this).find('td.evalArti').find("div[title=codProveedor]").find("input").attr("id");
                              
                $("#"+inputIDName3).rules('add', {
                    required: function(){
                        $("#"+rwIDName3).removeClass("error"); return true;
                    },
                    messages: {
                        required:  function(){
                                           $("#"+rwIDName3).addClass("error");
                                           $("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Complete la Información Requerida</strong></div>");                                           
                                        }
                    }
                });

               var rwIDName4 = $(this).find('td.evalArti').find("div[title=nameArticle]").attr("id");
               var inputIDName4 = $(this).find('td.evalArti').find("div[title=nameArticle]").find("input").attr("id");
                              
                $("#"+inputIDName4).rules('add', {
                    required: function(){
                        $("#"+rwIDName4).removeClass("error"); return true;
                    },
                    messages: {
                        required:  function(){
                                           $("#"+rwIDName4).addClass("error");
                                           $("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Complete la Información Requerida</strong></div>");                                           
                                        }
                    }
                });
                
                
                if(statusCostObl == "S"){
                    
                    var rwIDName5 = $(this).find('td.evalCostUnit').find("div").attr("id");
                    var inputIDName5 = $(this).find('td.evalCostUnit').find("div").find("input").attr("id");

                     $("#"+inputIDName5).rules('add', {
                         required: function(){
                             $("#"+rwIDName5).removeClass("error"); return true;
                         },
                         number:true,
                         notEqual: 0,
                         messages: {
                             required:  function(){
                                                $("#"+rwIDName5).addClass("error");
                                                $("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Complete la Información Requerida</strong></div>");                                           
                                             },
                             number:  function(){
                                                $("#"+rwIDName5).addClass("error");
                                                $("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Complete la Información Requerida</strong></div>");
                                             },
                             notEqual:  function(){
                                                       $("#"+rwIDName5).addClass("error");
                                                       $("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Complete la Información Requerida</strong></div>");
                                                    }
                         }
                     });                   
                }else{
                    var inputIDName5 = $(this).find('td.evalCostUnit').find("div").find("input").attr("id");
                    $("#"+inputIDName5).rules('remove');
                }

            });            
            
            

        });                
        
        //docReady();
        
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