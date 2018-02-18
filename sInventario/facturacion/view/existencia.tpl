<h3 class="modal-title green"><i class="fa fa-bars"></i> Existencia en Tiendas - {$COD_ART} {$DESCRIPCION} </h3>      
<table class="table table-condensed bootstrap-datatable" id="tblAllExistencia" style="width:750px">
  <thead>
        <tr> 
            <th style="cursor: pointer;">Tienda</th>
            <th style="cursor: pointer; text-align: right;">Existencia</th>
            <th></th>
        </tr>
  </thead>   
  <tbody> 
    {section loop=$EXISTENCIA name=i}    
    <tr id="inv-rowArt1">
        <td class="center">{$EXISTENCIA[i].Tienda|lower|capitalize}</td>
        <td class="center" style="text-align: right">{$EXISTENCIA[i].Existencia}</td>
        <td class="center">
       

    </td>        
    </tr>
    {/section}    
  </tbody>
</table>

</-- TABLA DE ARTICULOS EN TRANSITO -->

<h3 class="modal-title green"><i class="fa fa-bars"></i> En Transito Hacia </h3>  
<table class="table table-condensed bootstrap-datatable" id="tblTransito" style="width:750px">
  <thead>
        <tr>
            <th style="cursor: pointer;">Tienda (Id Traslado)</th>
            <th style="cursor: pointer; text-align: right;">Cantidad</th>
            <th></th>
        </tr>
  </thead>   
  <tbody> 
    {section loop=$TRANSITO name=x}    
    <tr id="inv-rowArt2">
        <td class="center">{$TRANSITO[x].NombreTienda} ({$TRANSITO[x].IdTraslado})</td>
        <td class="center" style="text-align: right">{$TRANSITO[x].Cantidad}</td>
        <td class="center">
       

    </td>        
    </tr>
    {/section}    

  </tbody>
</table>


