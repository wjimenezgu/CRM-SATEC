{$NAV_MENU} 
<div class="row-fluid ">		
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2>Reporte de Facturación</h2>
        </div>
        <div class="box-content">

				<div class="control-group">
					<div class="controls">
					
                        <div class="input-prepend pull-left " id="boxselectStore">
                        	<span class="add-on" style="padding:0px; height:26px; margin:0px 3px 3px 0px;">                                                   
                        	<select class="pull-right" id="selectStore" name="selectStore" disabled> 
                        		<option value="-1"></option>
                            	{section name=lP loop=$LISTA_TIENDAS}                            		
                                	<option value="{$LISTA_TIENDAS[lP].codTienda}" {if $LISTA_TIENDAS[lP].codTienda eq $ID_TIENDA} selected{/if}>{$LISTA_TIENDAS[lP].nombreTienda}</option>                                	
                                {/section}
                            </select>
              				</span>                                      
                        </div>
                        
                        <br><br>
                        <div class="row-fluid" >                                  
                                	<div id="input-dateInicial">
                                    	<input type="text" class="datepicker" id="dateInicial" name="dateInicial" placeholder="Seleccione Fecha Inicial *" value=""> 
                                    </div>
                                    <div id="input-dateFinal">
                                    	<input type="text" class="datepicker" id="dateFinal" name="dateFinal" placeholder="Seleccione Fecha Final *" value=""> 
                                    </div>
                        </div>

                        
                        <br><br>
                        
                         <div id="message-fields-obl"></div>                  
						<button type="button" class="btn btn-large btn-primary" name ="btnImpFacturacion"  id="btnImpFacturacion" onclick="prnFacturacion()" style="float:right;margin-top:-30px;"><i class="icon-print icon-white"></i> Generar Reporte</button>
						 

    

					</div>               
				</div>
</div> <!-- box-content -->
			         
    </div><!--/span-->
</div><!--/row-->

{literal}
<script type="text/javascript">


function goPage(){
		var store 	= $("#selectStore").val();
		var fechaI 	= $("#dateInicial").val();
		var fechaF 	= $("#dateFinal").val();
				
		window.open('prnFacturacion.php?store='+store+"&fechaI="+fechaI+"&fechaF="+fechaF,'_blank');

	};	

$(document).ready(function(){    
    
    $('.datepicker').datepicker({
       language: "es",
       format:"dd/mm/yyyy",
       todayHighlight: true,
       autoclose: true
       //,           
       //startDate: new Date()
    });
    
    $( "#dateInicial" ).datepicker({dateFormat:"dd/mm/yyyy"}).datepicker("setDate",new Date());
    $( "#dateFinal" ).datepicker({dateFormat:"dd/mm/yyyy"}).datepicker("setDate",new Date());

});

function prnFacturacion(){
	// Se debe validar primero si los campos obligatorio fueron seleccionados.
	
	// se inicializa a con false, no hay errores
	var errors = false;

    // El campo tienda es obligatorio
	var selStore = $("#selectStore").val();
    if(selStore == "-1"){
        $("#boxselectStore").addClass("error");
        errors = true;
    }else{
        $("#boxselectStore").removeClass("error");
    }
	// fecha inicial es obligatorio
    var fInicial = $("#dateInicial").val();
    if(fInicial == ""){
        $("#input-dateInicial").addClass("error");
        errors = true;
    }else{
        $("#input-dateInicial").removeClass("error");
    }
   
	// fecha final es obligatorio
    var fFinal = $("#dateFinal").val();
    if(fFinal == ""){
        $("#input-dateFinal").addClass("error");
        errors = true;
    }else{
        $("#input-dateFinal").removeClass("error");
    }
    
    if(errors != true){
    	
    	// todos los datos obligarios fueron suministrados.
    	// se debe revisar fecha final >= a fecha inicial
    	var startDate = $('#dateInicial').datepicker('getDate');
		var endDate = $('#dateFinal').datepicker('getDate');	
		if (startDate > endDate){
			
			errors = true;
			// fecha inicial es mayor a la fecha final
			$("#input-dateFinal").addClass("error");
			$("#input-dateInicial").addClass("error");
			document.getElementById('message-fields-obl').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Fecha Inicial mayor a Fecha Final</strong></div>";
			return false;
		
		}else{
			$("#input-dateFinal").removeClass("error");
			$("#input-dateInicial").removeClass("error");
			// no hay errores se puede continuar
			// se limpia el campo de mensaje de errores.
			$("#message-fields-obl").html("");
			
			
			var store 	= $("#selectStore").val();
			var fechaI 	= $("#dateInicial").val();
			var fechaF 	= $("#dateFinal").val();
					
			window.open('prnFacturacion.php?store='+store+"&fechaI="+fechaI+"&fechaF="+fechaF,'_blank');
		}
   	 
    }else{
        $("#message-fields-obl").html("<div class='alert alert-error pull-left'><span class='icon icon-red icon-alert'/></span> Complete la Información Requerida</strong></div>");
        return false;
    } // if(errors != true)    
        
}




</script>
{/literal}
