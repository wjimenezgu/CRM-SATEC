{$NAV_MENU}
<div class="row-fluid">
        <div class="box span12">
                <div class="box-header well" data-original-title>
                        <h2><i class="icon-edit"></i> MODIFICAR DE PEDIDO</h2>
                </div>
                <div class="box-content">
                    <form class="form-horizontal" action="updatePedido.php" id="frm-newPedido" method="post">
                        <input type="hidden" name="idPedido" id="idPedido" value="{$ID_PEDIDO}"/>
                        <input type="hidden" name="count-numRow" id="count-numRow" value="{$NUM_ROW}">
                        <input type="hidden" name="invOpen" id="invOpen" value="0">
                    <legend style="height:35px">                                                

                        <div class="span4" style="height:30px; margin-top:0px;">                            
                            <p class="muted" style="font-size:13px;">Proveedor: <a href="#" data-rel="tooltip" data-original-title="Nombre del Proveedor">{$PED_HEADER['nombreProveedor']|lower|capitalize}</a> </p>                            
                            <input type="hidden" name="selectProveedor" id="selectProveedor" value="{$PED_HEADER['idProveedor']}"/>
                            <input type='hidden' name='txt-costObl' id='txt-costObl' value='{$PED_HEADER['obligatorioCosto']}'>
                        </div>
                        <div class="span3" style="height:20px; margin-top:0px;">                            
                          <p class="muted" style="font-size:13px;">Orden: <a href="#" data-rel="tooltip" data-original-title="Numero de Orden">{$PED_HEADER['numOrdenCompra']} </p>                            
                        </div>
                        
                        <div class="span8" id="content-message-obl">
                            {if $PED_HEADER['obligatorioCosto'] eq "S"}
                            <div class='alert alert-warning pull-right' style='font-size:12px; height:30px; padding:0px; padding:0 5px;'><strong>IMPORTANTE: </strong> Para este Proveedor debe de indicar los costos.</div>
                            {/if}
                        </div>
                    </legend>
                        
                    <div class="row-fluid">

                        <div class="span4">                                                   
                            
                            <div class="row-fluid" >
                                    <div class="span6">Fecha Pedido:</div>
                                    <div class="span6">                                        
                                        <div class="pull-left control-group" id="input-datePedido">
                                            <input type="text" class="input-block-level datepicker" id="datePedido" name="datePedido" style="width:122px" value="{$PED_HEADER['fecCreacion']}">
                                        </div>
                                    </div>
                            </div>
                                        
                        </div>  
                                        
                        <div class="span4"> 
                            
                            <div class="row-fluid">
                                    <div class="span6">Fecha de Arribo:</div>
                                    <div class="span6">
                                        <div class="pull-left control-group" id="input-dateArribo">
                                            <input type="text" class="input-block-level datepicker" id="dateArribo" name="dateArribo" style="width:122px" value="{$PED_HEADER['fecEmbarque']}">
                                        </div>
                                    </div>
                            </div>                                                        
                            
                        </div>    
                                        
                        <div class="span4"> 
                            
                            <div class="row-fluid">
                                    <div class="span4">Embarques Parciales:</div>
                                    <div class="span8">
                                        <label class="radio">
                                        {if $PED_HEADER['aceptaParciales'] eq "N"}
                                            <input type="radio" name="embarquesP" id="embarquesP1" value="N" checked> No
                                        {else}
                                            <input type="radio" name="embarquesP" id="embarquesP1" value="N" > No
                                        {/if}
                                        </label>
                                        <label class="radio">
                                        {if $PED_HEADER['aceptaParciales'] eq "S"}
                                            <input type="radio" name="embarquesP" id="embarquesP2" value="S" checked> Sí
                                        {else}
                                            <input type="radio" name="embarquesP" id="embarquesP2" value="S" > Sí
                                        {/if}
                                        </label>
                                    </div>
                            </div>                                                        
                            
                        </div>
                                        
                    </div>
                                        
                    <div class="row-fluid">
                        
                            <div class="span4">                                                   

                            <div class="row-fluid" >
                                    <div class="span6">Dirección Envío:</div>
                                    <div class="span6">                                        
                                        <div class="pull-left control-group" id="input-DirEnvio">
                                        <select id="selectDirEnvio"  name="selectDirEnvio" style="width:122px">
                                            <option style="padding:5px;" value="0">- Dir. Envío -</option>
                                        {section name=tc loop=$ALL_DIR_ENVIO}
                                            {if $PED_HEADER['idDirEnvioMer'] == $ALL_DIR_ENVIO[tc].id}
                                            <option style="padding:5px;" value="{$ALL_DIR_ENVIO[tc].id}" selected>{$ALL_DIR_ENVIO[tc].DirEnvioMer}</option>
                                            {else}
                                            <option style="padding:5px;" value="{$ALL_DIR_ENVIO[tc].id}">{$ALL_DIR_ENVIO[tc].DirEnvioMer}</option>
                                            {/if}
                                        {/section}
                                        </select>                                        
                                        </div>
                                    </div>
                            </div>                             

                           <div class="row-fluid" style="margin-top:20px;">
                                    <div class="span6">Forma de Pago:</div>
                                    <div class="span6">
                                        {section loop=$LIST_OPT_PAGO name=opt}
                                        <label class="radio" style="margin-left:-7px;">
											<input type="radio" name="payMethod" id="payMethod{$LIST_OPT_PAGO[opt].idOpcionPago}" value="{$LIST_OPT_PAGO[opt].idOpcionPago}" {if $PED_HEADER['idOpcionPago'] eq $LIST_OPT_PAGO[opt].idOpcionPago} checked {/if}> {$LIST_OPT_PAGO[opt].descripcion|lower|capitalize}                                                                                        
                                        </label>
                                        <br />
                                        {/section} 
                                                                                                                 
                                        <script type="text/javascript">
                                        
                                            var arr = [ 
                                                        {section loop=$LIST_OPT_PAGO name=val} 
                                                            {$smarty.section.val.index+1} 
                                                            {if $smarty.section.val.index eq count($LIST_OPT_PAGO)-1} 
                                                            {else},
                                                            {/if} 
                                                        {/section}
                                                      ];                                                                                     
                                        </script>
                                         
                                    </div>
                            </div>                                          

                        </div>
                                     
                    </div>                    
                    </form>
                </div>
        </div><!--/span-->

</div><!--/row-->

{literal}
<script type="text/javascript">
    $(document).ready(function(){
               
    }) // document.ready function
     
</script>
{/literal}