<?php /* Smarty version Smarty-3.1.16, created on 2016-05-27 17:21:21
         compiled from "../traslados/view/listItems.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8592365245576fa507b4e33-42060960%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '632b507048fde1345cbd3d2f25c352a9d531666f' => 
    array (
      0 => '../traslados/view/listItems.tpl',
      1 => 1464391121,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8592365245576fa507b4e33-42060960',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5576fa5087f171_02583752',
  'variables' => 
  array (
    'INVENTARIO' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5576fa5087f171_02583752')) {function content_5576fa5087f171_02583752($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include '/var/www/html/CRM-SATEC/resources/libs/smarty/libs/plugins/modifier.capitalize.php';
?><table class="table table-condensed bootstrap-datatable" id="tblAllInventary" style="width:750px">
  <thead>
        <tr>
            <th style="cursor: pointer;">Codigo</th>
            <th style="cursor: pointer;">Descripción</th>
            <th style="cursor: pointer;text-align: right;">Existencia</th>
            <th></th>
        </tr>
  </thead>   
  <tbody> 

    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['INVENTARIO']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
    <tr id="inv-rowArt1">
        <td><?php echo $_smarty_tpl->tpl_vars['INVENTARIO']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['codArti'];?>
</td>
        <td class="center"><?php echo smarty_modifier_capitalize(mb_strtolower($_smarty_tpl->tpl_vars['INVENTARIO']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['desArticulo'], 'UTF-8'));?>
</td>
        <td class="center" style="text-align: right;"><?php echo $_smarty_tpl->tpl_vars['INVENTARIO']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ExisLocal'];?>
</td>
        <td class="center">
            <a class="btn btn-mini btn-info" data="<?php echo $_smarty_tpl->tpl_vars['INVENTARIO']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['codArti'];?>
|<?php echo smarty_modifier_capitalize(mb_strtolower($_smarty_tpl->tpl_vars['INVENTARIO']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['desArticulo'], 'UTF-8'));?>
|<?php echo $_smarty_tpl->tpl_vars['INVENTARIO']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['precio'];?>
|<?php echo $_smarty_tpl->tpl_vars['INVENTARIO']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ExisLocal'];?>
"><i class="icon-plus icon-white"></i> Añadir</a>
        </td>        
    </tr>
    <?php endfor; endif; ?>    

  </tbody>
</table>

<script type="text/javascript">

	var inv_btnAdd = $("[id*='inv-rowArt']").find("td").find("a");
	
	$(inv_btnAdd).on("click", function(e){

  	$("#facturar").prop("disabled",false);
  	//$("#fdescuento").prop("disabled",false);            
    	var arrRes = $(this).attr("data").split('|');
    	var cant = '1';
    	var table = document.getElementById("tableItem");
    
    	var rowCount = table.rows.length;
    	var row = table.insertRow(rowCount);

    	//consecutivo de linea
    	var cell0 = row.insertCell(0);
    	var textNode = document.createTextNode(rowCount);
    	cell0.appendChild(textNode);


    	//descripcion del articulo
    	var cell1 = row.insertCell(1);
    	var labelArt = document.createElement("label");
    	var contentArt = document.createElement("input");
    	contentArt.value = arrRes[1];
    	contentArt.setAttribute("name","item[]");
    	contentArt.type = "hidden";
    	labelArt.textContent = arrRes[1];
    	labelArt.setAttribute("name","item[]");
    	cell1.appendChild(labelArt);
    	cell1.appendChild(contentArt);


    	//codigo del articulo
    	var  cell2= row.insertCell(2);
    	//var desArticulo = document.createTextNode(arrRes[0]);

    	var labelArt2 = document.createElement("label");
    	var contentArt2 = document.createElement("input");
    	contentArt2.value = arrRes[0];
    	contentArt2.setAttribute("name","codArti[]");
    	contentArt2.type = "hidden";
    	labelArt2.textContent = arrRes[0];
    	labelArt2.setAttribute("name","codArti[]");
    	cell2.appendChild(labelArt2);
    	cell2.appendChild(contentArt2);


        // existencia
        var  cell3= row.insertCell(3);        

        var labelArt3 = document.createElement("label");
        var contentArt3 = document.createElement("input");
        contentArt3.value = arrRes[3];
        contentArt3.setAttribute("name","existencia[]");
        contentArt3.type = "hidden";
        labelArt3.textContent = arrRes[3];
        labelArt3.setAttribute("name","existencia[]");
        cell3.appendChild(labelArt3);
        cell3.appendChild(contentArt3);


    	// cantidad
   		var cell4 = row.insertCell(4);
    	var txtCantidad = document.createElement("input");
    	txtCantidad.type = "number";
    	txtCantidad.min = 1;
    	txtCantidad.id = "cant";
    	txtCantidad.setAttribute("name","cant[]");
    	txtCantidad.value = cant;
    	txtCantidad.setAttribute('class', 'input-mini');
    	txtCantidad.setAttribute('style', 'text-align: right');

    	cell4.appendChild(txtCantidad);

    //boton borrar linea
    //
    
    	var cell5 = row.insertCell(5);

    	var ita=document.createElement('a');
    	ita.setAttribute('href', '#');
    	ita.setAttribute('onClick', 'deleteCurrentRow(this)');
    	var iti=document.createElement('i');
    	iti.setAttribute('class', 'icon icon-color icon-remove');
    	ita.appendChild(iti);
    

    	cell5.appendChild(ita);

        // campo checkbox que se utiliza cuando borrar muchas lineas.
        // se pone en la misma celda del boton de eliminar.
        var ckSel = document.createElement("input");
        ckSel.type = "checkbox";
        ckSel.id = 'selRow'+rowCount;
        ckSel.value = 's';
        ckSel.setAttribute('class', 'input-xlarge');
        ckSel.setAttribute('style', 'margin-left: 2px;height:15px;width:25px;');
        cell5.appendChild(ckSel);

    	row.myRow = new myRowObject(textNode, labelArt, labelArt2, labelArt3,txtCantidad );

                               
    	$("#accept-choosed").click();
    
	});


	function deleteCurrentRow(obj){
		
		var delRow = obj.parentNode.parentNode;
		var tbl = delRow.parentNode.parentNode;
		var rIndex = delRow.sectionRowIndex;             
		var rowArray = new Array(delRow);
		deleteRows(rowArray);
		reorderRows(tbl, rIndex);

}
	
	$("#tblAllInventary").dataTable({                        
			"sDom": "<'row-fluid'<'span6'l><'span6'f>r>t<'row-fluid'<'span12'i><'span12 center'p>>",
			"sPaginationType": "bootstrap",
                        'iDisplayLength': 12,
                        "aLengthMenu": [[12, 40, 60, 80, -1], [12, 40, 60, 80, "Todos"]],
			"oLanguage": {
                        "sProcessing":     "Procesando...",
                        "sLengthMenu":     "Mostrar _MENU_ registros",
                        "sZeroRecords":    "No se encontraron resultados",
                        "sEmptyTable":     "Ningún dato disponible en esta tabla",
                        "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                        "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                        "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                        "sInfoPostFix":    "",
                        "sSearch":         "Buscar:",
                        "sUrl":            "",
                        "sInfoThousands":  ",",
                        "sLoadingRecords": "Cargando..."
			}
		} );           
        
//    });      
</script>
<?php }} ?>
