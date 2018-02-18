<?php /* Smarty version Smarty-3.1.16, created on 2016-05-20 13:58:18
         compiled from "../ajustesItems/view/listItems.tpl" */ ?>
<?php /*%%SmartyHeaderCode:96370950655522e00a43509-83958737%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02e57e50a6f2e084d1065b8c11d55fa21fa0d543' => 
    array (
      0 => '../ajustesItems/view/listItems.tpl',
      1 => 1457810180,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '96370950655522e00a43509-83958737',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_55522e00b05046_59825923',
  'variables' => 
  array (
    'INVENTARIO' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55522e00b05046_59825923')) {function content_55522e00b05046_59825923($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include '/var/www/html/CRM-SATEC/resources/libs/smarty/libs/plugins/modifier.capitalize.php';
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
|<?php echo $_smarty_tpl->tpl_vars['INVENTARIO']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['precioSinIV'];?>
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

    // cantidad
    var cell4 = row.insertCell(3);
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
    
    var cell5 = row.insertCell(4);

    var ita=document.createElement('a');
    ita.setAttribute('href', '#');
    ita.setAttribute('onClick', 'deleteCurrentRow(this)');
    var iti=document.createElement('i');
    iti.setAttribute('class', 'icon icon-color icon-remove');
    ita.appendChild(iti);
    

    cell5.appendChild(ita);
    

    row.myRow = new myRowObject(textNode, labelArt, labelArt2, txtCantidad );

                               
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
