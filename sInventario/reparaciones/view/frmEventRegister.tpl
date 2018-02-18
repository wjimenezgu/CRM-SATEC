{$NAV_MENU}
<div class="row-fluid">
        <div class="box span12">
                <div class="box-header well" data-original-title>
                        <h2><i class="icon icon-black icon-book"></i> REGISTRO DE EVENTOS</h2>
                </div>
                <div class="box-content">
                    <form class="form-horizontal" action="#" id="frm-eventRegister" method="post">
                    <input type="hidden" name="count-numRow" id="count-numRow" value="{$REGISTER}">
                    <input type="hidden" name="numIdPedido" id="numIdPedido" value="{$ID_PEDIDO}">
                    <input type="hidden" name="idTienda" id="idTienda" value="{$ID_TIENDA}">
                    <legend style="height:35px; text-align:right;">                                                
						<button type="button" class="btn btn-small btn-success" id="btnNewEvent" data-toggle="modal" data-target="#newEvent-modal"><i class="icon-plus icon-white"></i> Agregar Evento</button>
                    </legend>
                        
                    <div class="row-fluid">

                        <div class="span4">                                                   
                            
                            <div class="row-fluid" >
                                    <div class="span6">No. Boleta:</div>
                                    <div class="span6">                                        
                                        <div class="pull-left control-group" id="input-datePedido">
                                            <input type="text"   class="input-block-level" id="numOrder"   name="numOrder"   value="{$PED_HEADER[0].idReparacion}" readonly="">
                                            <input type="hidden" id="h_numOrder" name="h_numOrder" value="{$PED_HEADER[0].idReparacion}">
                                        </div>
                                    </div>
                            </div>                                              
                            
                        </div>
                                        
                        <div class="span4">                                                   
                            
                            <div class="row-fluid" >
                                    <div class="span6">Cliente:</div>
                                    <div class="span6">                                        
                                        <div class="pull-left control-group" id="input-datePedido">
                                            <input type="text" class="input-block-level"   id="nameProveedor" name="nameProveedor"     value="{$PED_HEADER[0].nombre}" readonly="">
                                            <input type="hidden" id="h_nameProveedor" name="h_nameProveedor" value="{$PED_HEADER[0].nombre}">
                                        </div>
                                    </div>
                            </div>                                              
                            
                        </div>
                                        
                        <div class="span4">                                                   
                            
                            <div class="row-fluid" >
                                    <div class="span6">Fecha Recibido::</div>
                                    <div class="span6">                                        
                                        <div class="pull-left control-group" id="input-datePedido">
                                            <input type="text"   class="input-block-level" id="datePedido" name="datePedido"   value="{$PED_HEADER[0].FechaRecibido}" readonly="">
                                            <input type="hidden" id="datePedido" name="h_datePedido" value="{$PED_HEADER[0].FechaRecibido}">
                                        </div>
                                    </div>
                            </div>                                                       
                            
                        </div>    

                    </div> 

                    <div class="row-fluid">
                            <div class="box span12">
                                    <div class="box-header well" data-original-title>
                                            <h2>Eventos de la Reparación</h2>
                                    </div>
                                    <div class="box-content" id="box-frmEvents">

                                        
                                        <table class="table table-striped tabs-content-inner" id="tblEvents">
							  <thead>
								<tr>
                                                                    <th>Fecha</th>
                                                                    <th>Usuario</th>
                                                                    <th>Evento</th>
                                                                    <th>Comentario</th>                                          
                                                                    <th>Días</th>                                          
                                                                    <th></th>                                          
                                                                      
                                                                </tr>
							  </thead>    
							  <tbody> 
                                                                <tr class="none"></tr>
                                                                {section loop=$ALL_EVENTOS name=e}
                                                                <tr class="numRow{$smarty.section.e.index+1}" id="register">
                                                                        <td class="evaldateEvent"><br><div style="margin-top:4px; ">{$ALL_EVENTOS[e].fecEvento}</div></td>
                                                                        <td class="evalUser">
                                                                            <br><div style="margin-top:4px; ">{$ALL_EVENTOS[e].userInsEvento}</div>
                                                                        </td>
                                                                        <td class="evalEvent">

                                                                            <br><div style="margin-top:4px; ">{$ALL_EVENTOS[e].idEvento} | {$ALL_EVENTOS[e].descripcion|lower|capitalize}</div>
                                                                            
                                                                        </td>
                                                                        <td class="evalComment" style="width:50px">
                                                                            <div class="pull-left control-group" id="row-input-comment" style="margin-right:3px;">
                                                                                <br><input title="{$ALL_EVENTOS[e].comentario}" data-rel="tooltip" class="input-large" id="row-comment"  name="row-comment"  type="text" value="{$ALL_EVENTOS[e].comentario}" style="border:none; background:#fff; cursor: text;" readonly="">
                                                                            </div>
                                                                        </td>
                                                                        <td class="evalDias">
                                                                            <br><div style="width:10px;">{$ALL_EVENTOS[e].dias}</div>
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
<!--  Se pasa para arriba                                                                
                                                                <tr>
                                                                     <td colspan="3">
                                                                     </td>
                                                                     <td colspan="4" style="text-align:right;">                                                                         
                                                                         <button type="button" class="btn btn-small btn-success" id="btnNewEvent" data-toggle="modal" data-target="#newEvent-modal"><i class="icon-plus icon-white"></i> Agregar Evento</button>
                                                                     </td>
                                                                </tr>
 -->
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
<div class="modal fade" id="newEvent-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3 class="modal-title blue"><i class="fa fa-bars"></i> Nuevo Evento</h3>
                <br />
                <p>Registrar evento a Reparación</p>
            </div>
            <form method="post" id="frm-newEvent">
                <div class="modal-body" id="newEvent">

                    <table class="table table-condensed">
                      <tbody> 

                          <tr>
                              <th>Evento</th>
                              <td>  
                                  
                                <div class="input-prepend pull-left" id="boxSelectEvents">
                                    <span class="add-on" style="padding:0px; height:26px; margin:0px 3px 3px 0px;">                                    
                                        <select id="eventList" name="eventList" data-rel="chosen" style="height:25px;">
                                             <option value="0">- Seleccione un Evento -</option>
                                             {section loop=$EVENTOS name=e}
                                             <option value="{$EVENTOS[e].idEvento}">{$EVENTOS[e].descripcion|lower|capitalize}</option>
                                             {/section}
                                         </select> 
                                    </span>                                
                                </div>                                    

                              </td>
                          </tr>
                          <tr>
                              <th>Comentario</th>
                              <td>
                                 <textarea class="input-block-level" id="comments" name="comments" rows="3" style="margin-top:0px; height:135px; resize: none;"></textarea> 
                              </td>
                          </tr>

                      </tbody>
                    </table>                    

                </div>
                <div class="modal-footer clearfix">
                    <div id="message-newArticle">

                    </div>    
                    <button type="button" class="btn btn-info" id="addEvent" name="addEvent"><i class="fa fa-check-square-o"></i> Agregar</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


{literal}
<script type="text/javascript">
    $(document).ready(function(){
      
        var cache = {
            $idTienda  : $("#idTienda"),
            $idReparacion  : $("#numIdPedido"),
            $tblEvents : $("#tblEvents"),
            $selEvento : $("#eventList"),
            $comment   : $("#comments")
        };       
      
        
      
        $("#boxSelectEvents").on("click", function (x){
                       var cont = 0;
            $("[id*='eventList_chzn_o_']").each(function() {
              if( $("#"+"eventList_chzn_o_"+cont).hasClass("result-selected")){                                                     
                  $("#"+"eventList_chzn_o_"+cont).removeClass("highlighted");
              }
              cont++;
            }); 
            $("#newEvent").find('ul.chzn-results').find("li#eventList_chzn_o_0").addClass("result-selected");
            $("#newEvent").find('ul.chzn-results').find("li#eventList_chzn_o_0").addClass("highlighted");
        });
      
        $("#btnNewEvent").on("click", function (e){
            
            $('#eventList').prop('selectedIndex',0);             
            var textReset = $("#eventList option:selected").text();
            
            $("#newEvent").find('a.chzn-single').find("span").text(textReset);            
            $('#comments').val("");
            
        });                
                
        
        $("#addEvent").on("click", function (e){
            
            
            var infoEvent = {
                    url: "saveEvent.php",
                    async: true,
                    cache: false,
                    data: "idReparacion="+cache.$idReparacion.val()+"&idEvento="+cache.$selEvento.val()+"&nameEvent="+$('#eventList option:selected').text()+"&comment="+cache.$comment.val(),
                    type: "POST",
                    dataType: "json",
                    success: function(data){
                        //alert("Se almacena la info\nPENDIENTE: Mostrar el evento registrado");
                        var htmlTable = "";
                        //alert(data);
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
                        htmlTable += "                <br><input title='"+data.comentario+"' data-rel='tooltip' class='input-large' id='row-comment'  name='row-comment'  type='text' value='"+data.comentario+"' style='border:none; background:#fff; cursor: text;' readonly=''>";
                        htmlTable += "            </div>";
                        htmlTable += "        </td>";
                        htmlTable += "        <td class='evalDias'>";
                        htmlTable += "            <br><div style='width:20px;'>"+data.dias+"</div>";
                        htmlTable += "        </td>";
                        htmlTable += "        <td class='evalActions'>";
                        htmlTable += "            <br><!--";
                        htmlTable += "            <a style='cursor: pointer;' class='pull-right'><span class='icon icon-color icon-remove'></span></a>";
                        htmlTable += "            <a style='cursor: pointer; margin-right:3px;' class='pull-right'><span class='icon icon-color icon-edit'></span></a>";
                        htmlTable += "        --></td>";
                        htmlTable += "</tr>";                        
                        
                        cache.$tblEvents.find("tr.none").after(htmlTable);        
                            
                        $("#count-numRow").val(numRow);                       
                        $('#newEvent-modal').modal('toggle'); 
                        
                    }            
            
                
            };
            $.ajax(infoEvent);
           
        });
        
      
    });    
</script>
{/literal}