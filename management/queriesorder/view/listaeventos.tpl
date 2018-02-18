<table class="table table-striped table-bordered span12">
	<thead>
		<tr>
			<th>Fecha Evento</th>
			<th>Usuario</th>
			<th>Evento</th>
			<th>Comentario</th>
		</tr>
	</thead>
	{section name=lP loop=$INFOEVENTOS}
		<tr> 
     		<td style="width:30%;">{$INFOEVENTOS[lP].fecEvento}</td> 
     		<td style="width:10%;">{$INFOEVENTOS[lP].userInsEvento}</td> 
     		<td style="width:35%;">{$INFOEVENTOS[lP].descripcion}</td>
     		<td style="width:25%;">{$INFOEVENTOS[lP].comentario}</td>
		</tr> 
	{/section}						  						
</table>  
					            
