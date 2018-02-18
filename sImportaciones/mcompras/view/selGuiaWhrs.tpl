{$NAV_MENU}
<div class="row-fluid sortable">		
	<div class="box span12">
		<div class="box-header well" data-original-title>
			<h2>Seleccionar WHR para la Guia {$NUMGUIA}</h2>
		</div>
		<div class="box-content">
			<button type="button" class="btn btn-small btn-success" id="addNewReg" onclick="agregaWHR('{$NUMGUIA}');" style="margin-bottom:12px;"><i class="icon-plus icon-white"></i> Agregar</button>
			<table class="table table-striped table-bordered bootstrap-datatable" id="tblRegs">
				<thead>
					<tr>
						<th>WhareHouse Receipt</th>
						<th>Seleccionar</th>
					</tr>
				</thead>						
				{section name=lP loop=$LISTA_REGS} 								
					<tr style="padding:0px;" id="tr{$LISTA_REGS[lP].whr}">
     					<td style="width:240px;">{$LISTA_REGS[lP].whr}</td>  
						<td class="center">							
							<input type="checkbox"  id="selRow{$smarty.section.lP.index+1}" value='s'>
						</td>
					</tr> 
				{/section}
			 </table>  					            
		</div><!-- box-content -->
	</div><!--/box span12-->			
</div><!--/row fluid-->

<script type="text/javascript">

function agregaWHR(numGuia) {
	var TableData;
	TableData = storeTblValues()
	TableData = $.toJSON(TableData);

	var properties = {
            url: "processAgregaWHRs.php",
            async: true,
            cache: false,
            data: "pTableData=" + TableData+"&numGuia="+numGuia,
            type: "POST",
            success: function(msg){                
					alert(msg);
            }
        };            
        $.ajax(properties);
}

function storeTblValues()
{
    var TableData = new Array();
    var i=0;
    $('#tblRegs tr').each(function(row, tr){
    	var aRowSel = document.getElementById('selRow' + i);
    	
    	if (aRowSel !== null){    		
    		if (aRowSel.checked == true){	
          	  estaSel = 'SI';
      	  	}else {
      		  estaSel = 'NO';
      	  	}	
    	}else{
        	estaSel = 'NO';
    	}
        TableData[row]={
            "Whr" : $(tr).find('td:eq(0)').text()
            , "EstaSel" : estaSel
        }
        i++;    
    }); 
    TableData.shift();  // first row will be empty - so remove
    return TableData;
}


</script>