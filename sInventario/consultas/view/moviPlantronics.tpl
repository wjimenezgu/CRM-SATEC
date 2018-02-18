{$NAV_MENU}
<section id="main" >
	<div class="box-content">
	
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
	
	$("#btn_buscarMovi").prop("disabled",true);
    fechaI 		= $("#dateFechaI").val();
    fechaF 		= $("#dateFechaF").val();
    
    window.open('buscarMoviPlantronics.php?fechaI='+fechaI+"&fechaF="+fechaF,'_blank');
    
    $("#btn_buscarMovi").prop("disabled",false);
}



</script>
{/literal}
