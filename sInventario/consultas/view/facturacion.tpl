{$NAV_MENU}
<section id="main" >
    <div class="box-content">
    <div class="control-group">
     
            <h1></i>Consulta Facturacion</h1>
     
     
            <form class="form-horizontal">

            <div class="control-group" id="boxselectStore">              
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
            <div class="control-group" id="boxdateInicial">  
                <label class="control-label" for="dateInicial">Fecha Inicial</label>                                           
                <div class="controls" id="input-dateInicial">
                    <input type="text" class="datepicker" id="dateInicial" name="dateInicial" placeholder="Indicar Fecha Inicio" value="{$CURRENT_DATE}"> 
                </div>                       
            </div>                        
            <div class="control-group" id="boxdateFinal">  
                <label class="control-label" for="dateFinal">Fecha Final</label>                                           
                <div class="controls" id="input-dateFinal">
                    <input type="text" class="datepicker" id="dateFinal" name="dateFinal" placeholder="Indicar Fecha Final" value="{$CURRENT_DATE}"> 
                </div>                       
            </div>  
                 
            <form>
                <div class="form-actions">
                    <input type="button" id="btn_buscarMovi" onclick="prnFacturacion()" value="Generar Reporte" class="btn btn-primary">
                </div>
            </form>     
        </form>
    </div>
</section>
    
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
