{$NAV_MENU}
	<div class="row-fluid sortable">
		<div class="box span12">
			<div class="box-header well" data-original-title>
				<h2>ERROR INESPERADO</h2>
			</div>

			<div class="box-content">
					<table class="table table-striped tabs-content-inner" border="0">
					<tbody>
						<tr>
							<td style="text-align:center;" class="alert alert-error" ><strong>{$ERRORMSG}</strong></td> 
						</tr>
					<tbody>
					</table>  

 					<div class="modal-footer">
						<a href="#" class="btn btn-primary" onclick="Regresar();">Regresar</a>
 
					</div> 							
		    </div>
		        				
		</div>		
	</div>
<script type="text/javascript">
function Regresar(){
	// Regresa al usuario a la pagina anterior
	history.go(-1)		
}
</script>