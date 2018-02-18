{$NAV_MENU}
<section id="main" >
    <div class="box-content">
    
        <form class="form-horizontal">

            <div class="control-group" id="boxSelTiendas">              
                <label class="control-label" for="selectStore">Seleccionar Tienda </label>  
                <div class="controls">                                                      
                    <select  id="selectStore" name="selectStore">                               
                        {section name=lP loop=$LISTA_TIENDAS}                                   
                            <option value="{$LISTA_TIENDAS[lP].codTienda}" {if $LISTA_TIENDAS[lP].codTienda eq $ID_TIENDA} selected{/if}>{$LISTA_TIENDAS[lP].nombreTienda}</option>                                 
                        {/section}
                    </select>
                </div>
            </div>      

            <div class="control-group " id="boxSelectCriterio">
                <label class="control-label"  for="selectCriterio">Estados </label>
                <div class="controls ">                                             
                    <select id="selectCriterio"  name="selectCriterio">
                        <option  value="A">Activa</option> 
                        <option  value="F">Cerrada</option>
                        <option  value="R">Reparada</option>
                    </select>
                </div>
            </div>
            
            <div class="control-group " id="boxSelectCriterio">
                <label class="control-label"  for="selectCriterio2">Incluir con </label>
                <div class="controls ">                                             
                    <select id="selectCriterio2"  name="selectCriterio2">
                        <option  value="A">Adelanto</option> 
                        <option  value="R">Reparacion</option>
                        <option  value="N">Ambos</option>
                    </select>
                </div>
            </div>   

            <div class="control-group" id="boxdateFechaI">  
                <label class="control-label" for="dateFechaI">Fecha Inicial</label>                                           
                <div class="controls" id="input-dateFechaI">
                    <input type="text" class="datepicker" id="dateFechaI" name="dateFechaI" placeholder="Indicar Fecha Inicio" value="{$CURRENT_DATE}"> 
                </div>                       
            </div>                        
            <div class="control-group" id="boxdateFechaF">  
                <label class="control-label" for="dateFechaF">Fecha Final</label>                                           
                <div class="controls" id="input-dateFechaF">
                    <input type="text" class="datepicker" id="dateFechaF" name="dateFechaF" placeholder="Indicar Fecha Final" value="{$CURRENT_DATE}"> 
                </div>                       
            </div>            
            <form>
                <div class="form-actions">
                    <input type="button" id="btn_buscarMovi" onclick="findMovi()" value="Generar" class="btn btn-primary">
                </div>
        </form>
    </div>
</section>
    
    
{literal}
<script type="text/javascript">

$(document).ready(function(){
    
    $('.datepicker').datepicker({
        language: "es",
        format:"dd/mm/yyyy",
        todayHighlight: true,
        autoclose: true
      //  ,           
      //  startDate: new Date(),
       , defaultDate : new Date()
     });


});


function findMovi(){
    
    //$("#btn_buscarMovi").prop("disabled",true);
    fechaI      = $("#dateFechaI").val();
    fechaF      = $("#dateFechaF").val();
    codtienda   = $("#selectStore").val(); 
    criterio    = $("#selectCriterio").val(); 
    incluir     = $("#selectCriterio2").val(); 

     window.open('buscarReparaciones.php?codtienda='+codtienda+"&criterio="+criterio+"&incluir="+incluir+"&fechaI="+fechaI+"&fechaF="+fechaF,'_blank');
}



</script>
{/literal}
