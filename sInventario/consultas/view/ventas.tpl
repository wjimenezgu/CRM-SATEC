{$NAV_MENU}
<section id="main" >
	<div class="box-content">
	<div class="control-group">
	 <div class="box-header well" data-original-title>
            <h2></i>Consulta Ventas x Articulos</h2>
        </div>
        	<form class="form-horizontal">

			<div class="control-group" id="boxSelTiendas">				
				<label class="control-label" for="selectStore">Seleccionar Tienda</label>	
				<div class="controls">   				                	                
                	<select  id="selectStore" name="selectStore">                         		
	                	{section name=lP loop=$LISTA_TIENDAS}                            		
	                    	<option value="{$LISTA_TIENDAS[lP].codTienda}" {if $LISTA_TIENDAS[lP].codTienda eq $ID_TIENDA} selected{/if}>{$LISTA_TIENDAS[lP].nombreTienda}</option>                                	
	                    {/section}
                	</select>
                </div>
            </div>	
            </form>           
            
             <form class="form-horizontal">
                  
		   <div class="control-group" id="boxSelectCriterio">
                <label class="control-label"  for="selectCriterio">Criterio de Búsqueda</label>
            	<div class="controls">                                                   
            		<select id="selectCriterio"  name="selectCriterio" >
                		<option  value="codigo">Codigo</option>                                         
                    	<option  value="nombre">Descripcion</option>
                    	<option  value="externo">Codigo Externo</option>	
                	</select>
                 </div>
           </div>
                  </form>
                	
					<form>
					
						<input type="text" class="txt_search" id="texto-buscar" name="texto-buscar" value="" style="font-size:1vw; width:210px; margin-left:160px;" placeholder="Iniciar Búsqueda">
					</form>
					
		<form class="form-horizontal">
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

    
	codtienda   = $("#selectStore").val(); 
	criterio    = $("#selectCriterio").val(); 
    txtBusqueda = $("#texto-buscar").val();
    fechaI 		= $("#dateFechaI").val();
    fechaF 		= $("#dateFechaF").val();
    
   // window.open('buscarVentas.php?fechaI='+fechaI+"&fechaF="+fechaF,'_blank');
    
    window.open('buscarVentas.php?criterio='+criterio+"&codtienda="+codtienda+"&txtBusqueda="+txtBusqueda+"&fechaI="+fechaI+"&fechaF="+fechaF,'_blank');
    
    
}



</script>
{/literal}
