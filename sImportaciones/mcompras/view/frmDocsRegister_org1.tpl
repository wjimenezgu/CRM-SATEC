{$NAV_MENU}
<div class="row-fluid">
        <div class="box span12">
                <div class="box-header well" data-original-title>
                        <h2><i class="icon icon-black icon-book"></i> REGISTRO DE DOCUMENTOS</h2>
                </div>
                <div class="box-content">
                    <form class="form-horizontal" action="#" id="frm-eventRegister" method="post">
                    <input type="hidden" name="count-numRow" id="count-numRow" value="{$REGISTER}">
                    <input type="hidden" name="numIdPedido" id="numIdPedido" value="{$ID_PEDIDO}">
                    <legend style="height:35px">                                                

                        <div class="span4" style="height:30px; margin-top:0px;">                            
                            <p class="muted" style="font-size:13px;">Datos Generales:</p>                            
                        </div>
                        <div class="span8" id="content-message-obl">
                        </div>
                    </legend>
                        
                    <div class="row-fluid">

                        <div class="span4">                                                   
                            
                            <div class="row-fluid" >
                                    <div class="span6">No. Orden Compra:</div>
                                    <div class="span6">                                        
                                        <div class="pull-left control-group" id="input-datePedido">
                                            <input type="text"   class="input-block-level" id="numOrder"   name="numOrder"   value="{$PED_HEADER['numOrdenCompra']}" readonly="">
                                            <input type="hidden" id="h_numOrder" name="h_numOrder" value="{$PED_HEADER['numOrdenCompra']}">
                                        </div>
                                    </div>
                            </div>                                              
                            
                        </div>
                                        
                        <div class="span4">                                                   
                            
                            <div class="row-fluid" >
                                    <div class="span6">Proveedor:</div>
                                    <div class="span6">                                        
                                        <div class="pull-left control-group" id="input-datePedido">
                                            <input type="text" class="input-block-level"   id="nameProveedor" name="nameProveedor"     value="{$PED_HEADER['nombreProveedor']|lower|capitalize}" readonly="">
                                            <input type="hidden" id="h_nameProveedor" name="h_nameProveedor" value="{$PED_HEADER['nombreProveedor']|lower|capitalize}">
                                        </div>
                                    </div>
                            </div>                                              
                            
                        </div>
                                        
                        <div class="span4">                                                   
                            
                            <div class="row-fluid" >
                                    <div class="span6">Fecha Creación:</div>
                                    <div class="span6">                                        
                                        <div class="pull-left control-group" id="input-datePedido">
                                            <input type="text"   class="input-block-level" id="datePedido" name="datePedido"   value="{$PED_HEADER['fecCreacion']}" readonly="">
                                            <input type="hidden" id="datePedido" name="h_datePedido" value="{$PED_HEADER['fecCreacion']}">
                                        </div>
                                    </div>
                            </div>                                                       
                            
                        </div>    

                    </div> 

                    <div class="row-fluid">
                            <div class="box span12">
                                    <div class="box-header well" data-original-title>
                                            <h2>Documentos del Pedido</h2>
                                    </div>
                                    <div class="box-content" id="box-frmEvents">

                                        
                                        <table class="table table-striped tabs-content-inner" id="tblDocs">
							  <thead>
								<tr>
                                                                    <th>Fecha</th>
                                                                    <th>Usuario</th>
                                                                    <th>Documento</th>
                                                                    <th>Comentario</th>                                          
                                                                    <th>Monto</th>                                          
                                                                    <th>Moneda</th>                                          
                                                                    <th></th>                                          
                                                                      
                                                                </tr>
							  </thead>    
							  <tbody> 
                                                                <tr class="none"></tr>
                                                                {section loop=$ALL_DOCUMENTS name=e}
                                                                <tr class="numRow{$smarty.section.e.index+1}" id="register">
                                                                        <td class="evaldateDoc"><br><div style="margin-top:4px; ">{$ALL_DOCUMENTS[e].fecInsDoc}</div></td>
                                                                        <td class="evalUser">
                                                                            <br><div style="margin-top:4px; ">{$ALL_DOCUMENTS[e].userInsDoc}</div>
                                                                        </td>
                                                                        <td class="evalDoc">

                                                                            <br><div style="margin-top:4px; ">{$ALL_DOCUMENTS[e].siglasDoc} | {$ALL_DOCUMENTS[e].fecDoc} | {$ALL_DOCUMENTS[e].numDoc}</div>
                                                                            
                                                                        </td>
                                                                        <td class="evalComment" style="width:50px">
                                                                            <div class="pull-left control-group" id="row-input-comment" style="margin-right:3px;">
                                                                                <br><input title="{$ALL_DOCUMENTS[e].comentario}" data-rel='tooltip' class="input-medium" id="row-comment"  name="row-comment"  type="text" value="{$ALL_DOCUMENTS[e].comentario}" style="border:none; background:#fff; cursor: text;" readonly="">
                                                                            </div>
                                                                        </td>
                                                                        <td class="evalMonto">
                                                                            <br><div style="width:20px;">{$ALL_DOCUMENTS[e].montoDoc}</div>
                                                                        </td>                                                                        
                                                                        <td class="evalMoneda">
                                                                            <br><div style="width:20px;">{$ALL_DOCUMENTS[e].idMoneda}</div>
                                                                        </td>                                                                        
                                                                        <td class="evalActions">
                                                                            <br>
                                                                            <!--
                                                                            <a style="cursor: pointer;" class="pull-right"><span class="icon icon-color icon-remove"></span></a>
                                                                            <a style="cursor: pointer; margin-right:3px;" class="pull-right"><span class="icon icon-color icon-edit"></span></a>
                                                                            -->
                                                                        </td>                                                                        
								</tr> 
                                                                {/section}
                                                                
                                                                <tr>
                                                                     <td colspan="3">
                                                                     </td>
                                                                     <td colspan="4" style="text-align:right;">                                                                         
                                                                         <button type="button" class="btn btn-small btn-success" id="btnNewDocument" data-toggle="modal" data-target="#newDoc-modal"><i class="icon-plus icon-white"></i> Añadir Documento</button>
                                                                     </td>
                                                                </tr>

							  </tbody>
						 </table>                                                                                                                                    
                                    </div>
                            </div><!--/span-->
                    </div><!--/row-->                    
                    
                    </form>
                </div>
            
        </div><!--/span-->

</div><!--/row-->


<!-- NEW ARTICLE MESSAGE MODAL -->
<div class="modal fade" id="newDoc-modal" tabindex="-1" role="dialog" aria-hidden="true" style="margin: -320px 0 0 -280px;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3 class="modal-title blue"><i class="fa fa-bars"></i> Nuevo Documento</h3>
                <br />
                <p>Registrar documento al pedido</p>
            </div>
            <form method="post" id="frm-newDoc">
                <div class="modal-body" id="newDoc" style="max-height: 490px;">

                    <table class="table table-condensed">
                      <tbody> 

                          <tr>
                              <th>Documento</th>
                              <td>  
                                  
                                <div class="input-prepend pull-left" id="boxSelectDocs">
                                    <span class="add-on" style="padding:0px; height:26px; margin:0px 3px 3px 0px;">                                    
                                        <select id="docsList" name="docsList" data-rel="chosen" style="height:25px; width:170px">
                                             <option value="0">- Tipo Documento -</option>
                                             {section loop=$TIPO_DOCS name=e}
                                             <option value="{$TIPO_DOCS[e].idTipoDocumento}">{$TIPO_DOCS[e].descripcion|lower|capitalize}</option>
                                             {/section}
                                         </select> 
                                    </span>                                
                                </div>                                    

                              </td>
                          </tr>
                          <tr>
                              <th>Fecha</th>
                              <td>
                                <div class="pull-left control-group" id="input-dateDocument">
                                    <input type="text" class="input-block-level datepicker" id="dateDocument" name="dateDocument" value="">
                                </div>                                 
                              </td>
                          </tr>
                          <tr>
                              <th>No. Documento</th> 
                              <td>
                                <div class="pull-left control-group" id="input-noDocument">
                                    <input type="text" class="input-block-level" id="noDocument" name="noDocument" value="">
                                </div>                                 
                              </td>
                          </tr>
                          <tr>
                              <th>Monto</th>
                              <td>
                                <div class="pull-left control-group" id="input-noDocument">
                                    <input type="text" class="input-block-level" id="monto" name="monto" value="">
                                </div>                                 
                              </td>
                          </tr> 
                          <tr>
                              <th>Moneda</th>
                              <td>

                                <div class="input-prepend pull-left" id="boxSelectMoneda">
                                    <span class="add-on" style="padding:0px; height:26px; margin:0px 3px 3px 0px;">                                    
                                        <select id="selMoneda"  name="selMoneda" style="width:170px">
                                            <option style="padding:5px;" value="0">- Moneda -</option>
                                        {section name=m loop=$MONEDAS}
                                            <option style="padding:5px;" value="{$MONEDAS[m].idMoneda}" {if $MONEDAS[m].idMoneda eq "DOL"} selected{/if}>{$MONEDAS[m].descripcion|lower|capitalize}</option>
                                        {/section}
                                        </select>
                                    </span>                                
                                </div>                                   
                                  
                              </td>
                          </tr>                          
                          <tr>
                              <th>Comentario</th>
                              <td>
                                  <textarea class="input-block-level" placeholder="(opcional)" id="comments" name="comments" rows="3" style="margin-top:0px; height:135px; resize: none;"></textarea> 
                              </td>
                          </tr>

                      </tbody>
                    </table>                    

                </div>
                <div class="modal-footer clearfix">
                    <div id="message-newArticle">

                    </div>    
                    <button type="button" class="btn btn-info" id="addDocument" name="addDocument"><i class="fa fa-check-square-o"></i> Agregar</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


{literal}
<script type="text/javascript">
    $(document).ready(function(){
      
        $('.datepicker').datepicker({
           language: "es",
           format:"dd/mm/yyyy",
           todayHighlight: true,
           autoclose: true
// Agosto 11, William. Se pone en comentario las dos lineas de abajo para que el usuario pueda
// seleccionar una fecha previo al dia del sistema. Por que el documento que va a registrar puede tener
// una fecha inferior. Por ejemplo, lo recibio ayer y tarde y lo registra hasta hoy.
//           ,           
//           startDate: new Date()
        });        
      
        var cache = {  
            $tblDocs     : $("#tblDocs"),
            $idPedido    : $("#numIdPedido"),                         
            $selDocument : $("#docsList"),
            $date        : $("#dateDocument"), 
            $noDocument  : $("#noDocument"), 
            $monto       : $("#monto"), 
            $selMoneda   : $("#selMoneda"),             
            $comment     : $("#comments")
        };       
      
        $("#boxSelectDocs").on("click", function (x){
            var cont = 0;
            $("[id*='docsList_chzn_o_']").each(function() {
              if( $("#"+"docsList_chzn_o_"+cont).hasClass("result-selected")){                                                     
                  $("#"+"docsList_chzn_o_"+cont).removeClass("highlighted");
              }
              cont++;
            }); 
            $("#newDoc").find('ul.chzn-results').find("li#docsList_chzn_o_0").addClass("result-selected");
            $("#newDoc").find('ul.chzn-results').find("li#docsList_chzn_o_0").addClass("highlighted");
        });
      
        $("#btnNewDocument").on("click", function (e){
            
            $('#docsList').prop('selectedIndex',0);             
            var textReset = $("#docsList option:selected").text();
            
            $("#newDoc").find('a.chzn-single').find("span").text(textReset);            
            $('#comments').val("");
            $('#dateDocument').val("");  
            $('#noDocument').val("");  
            $('#monto').val("");  
            $('#selMoneda').prop('selectedIndex',0); 
            
        });
        
        
        $("#addDocument").on("click", function (e){
            
            //
            var infoDocument = {
                    url: "saveDocs.php",
                    async: true,
                    cache: false,
                    data: "idPedido="+cache.$idPedido.val()+"&idDocumento="+cache.$selDocument.val()+"&nameDoc="+$('#docsList option:selected').text()+"&dateDocument="+cache.$date.val()+"&noDocument="+cache.$noDocument.val()+"&monto="+cache.$monto.val()+"&selMoneda="+cache.$selMoneda.val()+"&comment="+cache.$comment.val(),
                    type: "POST",
                    dataType: "json",
                    success: function(data){
                        //alert(data);
                        var htmlTable = "";
                        
                        var pageAnt = parseInt($("#count-numRow").val());            
                        var numRow = parseInt($("#count-numRow").val())+ 1;                        
                        htmlTable += "<tr class='numRow"+numRow+"'>";
                        htmlTable += "        <td class='evaldateDoc'><br><div style='margin-top:4px; '>"+data.fecha+"</div></td>";
                        htmlTable += "        <td class='evalUser'>";
                        htmlTable += "            <br><div style='margin-top:4px; '>"+data.usuario+"</div>";
                        htmlTable += "        </td>";
                        htmlTable += "        <td class='evalDoc'>";
                        htmlTable += "            <br><div style='margin-top:4px; '>"+data.documento+"</div>";
                        htmlTable += "        </td>";
                        htmlTable += "        <td class='evalComment' style='width:50px'>";
                        htmlTable += "            <div class='pull-left control-group' id='row-input-comment' style='margin-right:3px;'>";
                        htmlTable += "                <br><input title='"+data.comentario+"' data-rel='tooltip' class='input-medium' id='row-comment'  name='row-comment'  type='text' value='"+data.comentario+"' style='border:none; background:#fff; cursor: text;' readonly=''>";
                        htmlTable += "            </div>";
                        htmlTable += "        </td>";
                        htmlTable += "        <td class='evalMonto'>";
                        htmlTable += "            <br><div style='width:20px;'>"+data.monto+"</div>";
                        htmlTable += "        </td>";
                        htmlTable += "        <td class='evalMoneda'>";
                        htmlTable += "            <br><div style='width:20px;'>"+data.moneda+"</div>";
                        htmlTable += "        </td>";
                        htmlTable += "        <td class='evalActions'>";
                        htmlTable += "            <br>";
                        htmlTable += "            <!--";
                        htmlTable += "            <a style='cursor: pointer;' class='pull-right'><span class='icon icon-color icon-remove'></span></a>";
                        htmlTable += "            <a style='cursor: pointer; margin-right:3px;' class='pull-right'><span class='icon icon-color icon-edit'></span></a>";
                        htmlTable += "            -->";
                        htmlTable += "        </td>";
                        htmlTable += "</tr>";
                        
                        cache.$tblDocs.find("tr.none").after(htmlTable);        
                        
                        $("#count-numRow").val(numRow);
                       
                        $('#newDoc-modal').modal('toggle');                         
                        
                        /*
                        var htmlTable = "";

                        var pageAnt = parseInt($("#count-numRow").val());            
                        var numRow = parseInt($("#count-numRow").val())+ 1;                        

                        htmlTable += "<tr class='numRow"+numRow+"' id='register'>";
                        htmlTable += "        <td class='evaldateEvent'><br><div style='margin-top:4px; '>"+data.fecha+"</div></td>";
                        htmlTable += "        <td class='evalUser'>";
                        htmlTable += "            <br><div style='margin-top:4px; '>"+data.usuario+"</div>";
                        htmlTable += "        </td>";
                        htmlTable += "        <td class='evalEvent'>";
                        htmlTable += "            <br><div style='margin-top:4px; '>"+data.evento+"</div>";
                        htmlTable += "        </td>";
                        htmlTable += "        <td class='evalComment' style='width:50px'>";
                        htmlTable += "            <div class='pull-left control-group' id='row-input-comment' style='margin-right:3px;'>";
                        htmlTable += "                <br><input class='input-large' id='row-comment'  name='row-comment'  type='text' value='"+data.comentario+"' style='border:none; background:#fff; cursor: text;' readonly=''>";
                        htmlTable += "            </div>";
                        htmlTable += "        </td>";
                        htmlTable += "        <td class='evalDias'>";
                        htmlTable += "            <br><div style='width:20px;'>"+data.dias+"</div>";
                        htmlTable += "        </td>";
                        htmlTable += "        <td class='evalActions'>";
                        htmlTable += "            <br>";
                        htmlTable += "            <a style='cursor: pointer;' class='pull-right'><span class='icon icon-color icon-remove'></span></a>";
                        htmlTable += "            <a style='cursor: pointer; margin-right:3px;' class='pull-right'><span class='icon icon-color icon-edit'></span></a>";
                        htmlTable += "        </td>";
                        htmlTable += "</tr>";                        
                        
                        if(pageAnt == 0){
                            
                            cache.$tblDocs.find("tr.none").after(htmlTable);        
                        }else{
                            cache.$tblDocs.find("tr.numRow"+pageAnt).after(htmlTable);        
                        }            
                       
                        $("#count-numRow").val(numRow);
                       
                        $('#newEvent-modal').modal('toggle'); 
                        */
                    }            
            
                
            };
            $.ajax(infoDocument);
           
        });
        
      
    });    
</script>
{/literal}