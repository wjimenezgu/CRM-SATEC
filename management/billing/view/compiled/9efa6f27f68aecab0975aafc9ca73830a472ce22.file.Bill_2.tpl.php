<?php /* Smarty version Smarty-3.1.16, created on 2015-02-03 10:23:00
         compiled from "../billing/view/Bill_2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:119419052954d0f5e4ba99f3-06956115%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9efa6f27f68aecab0975aafc9ca73830a472ce22' => 
    array (
      0 => '../billing/view/Bill_2.tpl',
      1 => 1421799956,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '119419052954d0f5e4ba99f3-06956115',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LISTA_TIENDAS' => 0,
    'LISTA_CLIENTES' => 0,
    'LISTA_ITEMS' => 0,
    'LISTA_VENDS' => 0,
    'lP' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_54d0f5e4cb1a60_87945981',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d0f5e4cb1a60_87945981')) {function content_54d0f5e4cb1a60_87945981($_smarty_tpl) {?>
<!DOCTYPE html>
<html>
    <body>
        <form class="form-horizontal" id='myForm'  action="processBill.php" method="POST">
                    <div class="row-fluid" >		
                            <div class="box span12">
                                    <div class="box-header well" data-original-title>
                                            <h2>Confección de factura</h2>
                                            <select class="pull-right" id="selectStore[]" name="selectStore[]" > 
                                                 <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['name'] = 'lP';
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['LISTA_TIENDAS']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['total']);
?>
                                                  <option value="<?php echo $_smarty_tpl->tpl_vars['LISTA_TIENDAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['idTienda'];?>
"><?php echo $_smarty_tpl->tpl_vars['LISTA_TIENDAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['descTienda'];?>
</option>
                                                 <?php endfor; endif; ?>
                                            </select>
                                    </div>
                                <div id="message-fields" style='alignment-adjust:  central;'></div>
                                <div class="box span10" style="margin-left: 10px;" >
                                        <div class="box-header well h2">
                                        <h3>Información del Cliente</h3>
                                        </div>
                                    <div id="divCliente" style=" " >
                                            
                                       <div class="control-group" id="boxSelItem" style="margin-top: 15px;  margin-left: -100px;">
						<label class="control-label" for="selectError1"></label>
						<div class="controls">
                                                    <select style="width: 600px; height: 30px;" id="selectError1" name ="selectError1[]" data-rel="chosen">
                                                           
                                                            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['name'] = 'lP';
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['LISTA_CLIENTES']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['total']);
?>
                                                           <option value="<?php echo $_smarty_tpl->tpl_vars['LISTA_CLIENTES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['idCliente'];?>
" <?php if ($_smarty_tpl->tpl_vars['LISTA_CLIENTES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['idCliente']==1) {?> selected<?php }?> > <?php echo $_smarty_tpl->tpl_vars['LISTA_CLIENTES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['nombre'];?>
 | <?php echo $_smarty_tpl->tpl_vars['LISTA_CLIENTES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['telefono'];?>
 | <?php echo $_smarty_tpl->tpl_vars['LISTA_CLIENTES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['correo'];?>
</option>
                                                            <?php endfor; endif; ?>
                                                    </select>
                                                    Exento? <input type="checkbox" onchange="Exento();" id="exento" style="margin-top: -5px;">
                           			
                                                </div>
                                                
                                       </div>
                                    </div>
                                    
                                </div>
                                <button type="button" onclick="openModalCliente();" class="btn btn-large btn-success"  style="height: 70px; width: 100px; margin-top: 15px; margin-left: 40px;text-align: center;">Agregar cliente</button>
                                        
                                        
                                        
                                <div class="aligncenter" style="width:1060px;height:0; margin-left: 15px;margin-top:60px; margin-bottom: 10px; border-top:1px solid lightgray;font-size:0;">-</div>

                                <div>
                                    
                                    <table class="table table-striped table-bordered bootstrap-datatable" style="width: 880px; margin-left: 12px; margin-bottom: -12px;">
                                              <thead>
                                                      <tr>
                                                              <th style="width: 85px;">Código</th>
                                                              <th style="width: 350px;">Artículo</th>
                                                              <th>Cantidad</th>
                                                              <th>Precio</th>
                                                              <th>PrecioIVI</th>
                                                              
                                                      </tr>

                                              </thead>
                                     </table>
                                    <div class="control-group" id="boxSelItem" style="margin-top: 20px; margin-left: -150px;">
						<label class="control-label" for="selectError"></label>
						<div class="controls">
                                                    <select data-placeholder="Seleccionar Articulo" style="width: 880px; height: 30px;" id="selectError" data-rel="chosen">
                                                           <option value="0"></option>
                                                            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['name'] = 'lP';
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['LISTA_ITEMS']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['total']);
?>
                                                                <option ><?php echo $_smarty_tpl->tpl_vars['LISTA_ITEMS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['codArti'];?>
 | <?php echo $_smarty_tpl->tpl_vars['LISTA_ITEMS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['desArticulo'];?>
 | <?php echo $_smarty_tpl->tpl_vars['LISTA_ITEMS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['cantidad'];?>
 | <?php echo $_smarty_tpl->tpl_vars['LISTA_ITEMS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['precio'];?>
</option>
                                                            <?php endfor; endif; ?>
                                                    </select>
                                                    <input onfocus="clearCant();" type="text" style="width: 50px;  margin-left: 5px;" value="Cantidad" id="cant"></input>
                                                    <button type="button" id="addSelItem" class="btn btn-lg btn-success" onclick="addNewRow();" style=" margin-left:10px; width: 60px; height: 25px; margin-right: 25px;">Añadir</button>
                           			
                                                </div>
                                                
                                    </div>
                                   
                                    
        
                                </div>
                                        
                                    <div class="box-content">

                                            <!---->
                                            <table class="table table-striped table-bordered bootstrap-datatable" id="tableItem">
                                              <thead>
                                                      <tr>
                                                              <th style='width:30px;'>#</th>
                                                              <th style='width:100px;'>Código</th>
                                                              <th style='width:800px;'>Artículo</th>
                                                              <th style='width: 35px;'>Cantidad</th>
                                                              <th style='width:200px;'>Precio de Venta</th>
                                                              <th style="width:200px;">Precio Total</th>
                                                              <th style="width: 10px;">Acción</th>
                                                      </tr>

                                              </thead>
                                              <tbody id="tbod">
                                              <div id ="divtbod" class="grid" style="width: fit-content; border: 1px;">
                                                  

                                              </div>
                                            </tbody>
                                      </table>  
                                      <div >
                                          <div style="margin-left: 10px;margin-top: 10px; margin-bottom:10px; margin-right: 29px;">
                                              <p style="font-style: oblique; font-size: 14px;" align='right'>Subtotal   <input type="text" id="fsubtotal" name="fsubtotal" value="0.00" class='input' readonly="true" align='right' style="margin-right: 42px; text-align: right; width: 90px;" ></p> 
                                            <p style="font-style: oblique; font-size: 14px;"align='right'>Descuento   <input type="text" id="fdescuento" name="fdescuento" value="0" onclick="evaDiscount(this);" readonly="true" align='right' style="margin-right: 42px;text-align: right; width: 90px;"></p> 
                                            <p style="font-style: oblique; font-size: 14px;"align='right'>Impuesto   <input type="text" id="fimpuesto" name ="fimpuesto" value ="0.00" readonly="true" align='right' style="margin-right: 42px;text-align: right; width: 90px;"></p>
                                            <p style="font-style: oblique; font-size: 14px;"align='right'>Total   <input type="text" id="ftotal" name="ftotal" value="0.00" readonly="true" align='right' style="margin-right: 42px;text-align: right; width: 90px;"></p>
                                          </div>
                                      </div>
                                        
                                      
                                      <div class="box-content">
                                          
                                          Usuario: <input type="text" id="txtUser" name="txtUser" style="margin-right: 10px; width: 100px;"></input> Contraseña: <input id='txtPass' type="password" style="margin-right: 10px; width: 100px;"></input> 
                                         
                                         <div>
                                          <button type="submit" id='enviar' name="enviar" class="btn btn-large btn-primary pull-right" style='margin-bottom: 15px; '>Facturar</button>
                                            <button type="button" class="btn btn-large pull-right" onclick='clearAll();'  style='margin-bottom: 15px; margin-right: 15px;'>Limpiar</button>
                                         </div>
                                    </div>

                                    </div>
                            </div><!--/span-->

                    </div><!--/row-->
   </form>            


<!---------------------- MODAL AGREGAR CLIENTE -------------------------------->  
                        
                <div class="modal fade" id="modalCliente" >
                    <form class="form-horizontal" id="frmCliente" action="processClient.php" method="post">
                    <div class="modal-header">
                      <h3>Agregar Cliente</h3>
                    </div>
                    <div class="modal-body">
                      <div class="span6">
                          <div >
                              <label style="margin-bottom: ">Nombre: <input  name="fnombre" id="fnombre" type="text" class="input-xlarge" style="margin-bottom: 15px; margin-top: -5px;"></label>
                              <label style="margin-bottom: ">Correo: <input  name="fcorreo" id="fcorreo" type="email" class="input-xlarge" style="margin-bottom: 15px; margin-top: -5px;"></label>
                              <label style="margin-bottom: ">Teléfono: <input name="ftelefono" id="ftelefono" type="text" class="input-xlarge" style="margin-bottom: 15px; margin-top: -5px;"></label>
                              
                          </div>
                      </div>
                      
                    </div>
                    <div class="modal-footer">
                      <a href="#" class="btn" data-dismiss="modal">Cerrar(Esc)</a>
                      <button id="btnInsCliente" href="#" type="submit"  name="enviar" class="btn btn-large btn-primary pull-right" >Agregar</button>
                      
                    </div>
                    </form>
                </div>
        
<!-------------------------- MODAL SEGURIDAD ---------------------------------->
        
                <div class="modal fade" id="modalEvaluate" >
                    <form class="form-horizontal" id="frmSeguridad" action="processClient.php" method="post">
                    <div class="modal-header">
                      <h3>Seguridad</h3>
                    </div>
                    <div class="modal-body">
                      <div class="span6">
                          <div >
                              
                               <label style="margin-bottom: ">Valor Anterior: <input readonly name="bvalue" id="bvalue" type="text" class="input-xlarge" style="margin-bottom: 15px; margin-top: -5px;"></label>
                               <label style="margin-bottom: ">Nuevo Valor: <input  name="avalue" id="avalue" type="text" class="input-xlarge" style="margin-bottom: 15px; margin-top: -5px;"></label>
                              <label style="margin-bottom: ">Usuario: <input  name="fuser" id="fuser" type="text" class="input-xlarge" style="margin-bottom: 15px; margin-top: -5px;"></label>
                              <label style="margin-bottom: ">Contraseña: <input  name="fpass" id="fpass" type="password" class="input-xlarge" style="margin-bottom: 15px; margin-top: -5px;"></label>
                          </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <a href="#" class="btn" data-dismiss="modal">Cerrar(Esc)</a>
                      <button id="btnVerify" href="#" type="button" onclick='verificar();' name="enviar" class="btn btn-large btn-primary pull-right" >Verificar</button>
                      
                    </div>
                    </form>
                </div>
   
                                          
   

<script type="text/javascript">
    function verVendor(){
       
        var user = $("#txtUser").val();
         var pass = $("#txtPass").val();    
            
        var data = [
            <?php  $_smarty_tpl->tpl_vars['lP'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lP']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LISTA_VENDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lP']->key => $_smarty_tpl->tpl_vars['lP']->value) {
$_smarty_tpl->tpl_vars['lP']->_loop = true;
?>
               "<?php echo $_smarty_tpl->tpl_vars['lP']->value['user'];?>
|<?php echo $_smarty_tpl->tpl_vars['lP']->value['pass'];?>
"
               <?php if ($_smarty_tpl->tpl_vars['LISTA_VENDS']->value['foreach']['things']['last']!=true) {?> ,<?php }?>  
            <?php } ?>   
                      
        ];
        
        var dataSpt = new Array();
        for(i=0;i<data.length;i++){
            dataSpt[i] = data[i].split("|"); 
        }
        
        for(x=0;x<dataSpt.length;x++){     

           if(user === dataSpt[x][0] && pass === dataSpt[x][1]){
                $("#enviar").type = "submit";
            }else{
                document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Usuario o contraseña incorrectos</strong></div>";
            }
                  
        }
       
        
    }
    
    
    $("#btnVerify").on("click", function(){
             math();
        });
    

//Abre el Modal donde se agregará un cliente    
    function openModalCliente(){
        $("#modalCliente").modal('show');
    }

//Define la factura como exenta
    function Exento(){
        if($("#exento").is(":checked")){
            $("#fimpuesto").val(0);
            math();
        }else{
            math();
        }
    }

//Llama al funcion Math() cuando se presiona el boton Agregar
    $("#addSelItem").on("click",function(){
        math(); 
    });
    
    
//Calcula el subtotal, impuesto y total
    function math(){
         var table = document.getElementById("tableItem");
        var suma = 0;
       
        for(var x=1; x<table.rows.length; x++){
            
            suma += parseInt(table.rows[x].myRow.six.value);
        
        }
        var desc = $("#fdescuento").val();
        $("#fsubtotal").val(suma);
        
        if($("#exento").is(":checked")){
             $("#fimpuesto").val(0);
             $("#ftotal").val(precioTotal(suma,desc,0));
        }else{
             $("#fimpuesto").val(impuestoTotal(suma)); 
             $("#ftotal").val(precioTotal(suma,desc,impuestoTotal(suma)));
        }
        
       
        
        $("#fsubtotal").number(true,2);
        $("#fimpuesto").number(true,2);
        $("#ftotal").number(true,2);
    }


//Calcula el total por aparte para poder utilizarlo en 2 funciones
    function precioTotal(sub,desc,imp){
            
        var total = imp + (sub - (sub *(desc/100)));
        return total;
        
    }

//Calcula el impuesto de toda la factura
    function impuestoTotal(sub){
        var imp = (sub * 13)/100;
        return imp;
    }
    
//Limpia la cantidad
    function clearCant(){
        $("#cant").val("");
    }  

//Limpia el nombre
     function clearNombre(){
        $("#txtNombre").val("");
    }  
    
//Limpia el input de articulo
     function clearTags(){
        $("#selectError").chosen('destroy')
                         .trigger("liszt:updated");
    }  
    

//Inserta un cliente por medio de AJAX y lo añade a los datos del cliente en la factura
    $("#btnInsCliente").click(function(e){
     e.preventDefault();
     
       $.ajax({
            type: "POST",
            url: "processClient.php", 
            data:  $('#modalCliente :input').serialize(),
            
           success: function(data){
               
               
            var nombre = $("#fnombre").val(),
                 tel = $("#ftelefono").val(),
                cor = $("#fcorreo").val();
                 
               
                 $("#selectError1").append("<option value='"+data+"' selected>" + nombre + " | " + tel + " | " + cor + "</option>")
                                   .trigger("liszt:updated");
                  
                 $("#modalCliente").modal('hide');

            },
            
            error: function(){
                alert("failure");
            }
        });

    });
    

 
 //Toma el valor del input, lo divide y lo añande a la tabla de articulos por comprar
    function addNewRow(){
        var table = document.getElementById("tableItem"),
            cant = $("#cant").val();

        if(cant !== ""){
            if(cant !== "0"){
                if($("#selectError option:selected").val() !== "0"){
                   document.getElementById('message-fields').innerHTML ="";

                    var res = $("#selectError").val(),
                        arrRes = res.split("|"),
                         found = Boolean(),
                         row = "";


                        for(var x=0; x<table.rows.length;x++){  
                            if(table.rows[x].cells[1].textContent === arrRes[0]){
                                found = true;
                                row = table.rows[x];
                                break;
                            }else{
                                found = false;
                                }
                         }
 
                         if(found === false){
                                    addRow(arrRes,cant);
                                    clearCant();
                                    clearTags();
                                }else{
                                    row.cells[3].children[0].value = cantChange(row.cells[3],cant);
                                   row.myRow.six.value = precioTotalArti(arrRes[3] ,cantChange(row.cells[3],cant));
                                   row.myRow.seven.value = $.number(row.myRow.six.value,2);
                                   math();
                                   clearCant();
                                   clearTags();
                                }
                }else{
                    document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Debe seleccionar un artículo</strong></div>";
                   }
            }else{
                 document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Debe ingresar un número mayor que cero</strong></div>";
                }
        }else{
              document.getElementById('message-fields').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Debe ingresar una cantidad</strong></div>";
             }    
    }
    
    function cantChange(row, cant){
        var result = parseInt(row.children[0].value);
         result = result + parseInt(cant);
        return result;
    }
    
//Setea un objeto para almacenar las variables
    function myRowObject(one, two, three, four, five, six, seven){
	this.one = one; // text object
	this.two = two; // input text object
	this.three = three; // cantidad
	this.four = four; // precio de venta
        this.five = five; //precio total
        this.six = six;// delete button
        this.seven = seven;
     } 
    
 //Pinta una fila a la tabla de articulos cuando inserta un articulo a comprar   
   function addRow(arrRes, cant) {
 
            var table = document.getElementById("tableItem");
 
            var rowCount = table.rows.length;
            var row = table.insertRow(rowCount);
            
            var cell0 = row.insertCell(0);
            var textNode = document.createTextNode(rowCount);
            cell0.appendChild(textNode);
            
            var cell1 = row.insertCell(1);
            var labelArt = document.createElement("label");
            var contentArt = document.createElement("input");
            contentArt.value = arrRes[0];
            contentArt.setAttribute("name","item[]");
            contentArt.type = "hidden";
            labelArt.textContent = arrRes[0];
            labelArt.setAttribute("name","item[]");
            cell1.appendChild(labelArt);
            cell1.appendChild(contentArt);
            
            var  cell2= row.insertCell(2);
            var desArticulo = document.createTextNode(arrRes[1]);
            cell2.appendChild(desArticulo);
            
            var cell3 = row.insertCell(3);
            var txtCantidad = document.createElement("input");
            txtCantidad.type = "number";
            txtCantidad.min = 1;
            txtCantidad.id = "cant";
            txtCantidad.setAttribute("name","cant[]");
            txtCantidad.value = cant;
            txtCantidad.setAttribute('class', 'input-mini');
            txtCantidad.setAttribute('style', 'text-align: right');
            txtCantidad.onchange = function(){
                
                                   price.value = precioTotalArti(arrRes[3] ,txtCantidad.value);
                                   precioTotal.value = $.number(price.value,2);
                                   math();
                
            };

            cell3.appendChild(txtCantidad);
            
            var cell4 = row.insertCell(4);
            var precioVenta = document.createElement("label");
            precioVenta.setAttribute('style', 'text-align: right');
            precioVenta.textContent = $.number(arrRes[3],2);
           cell4.appendChild(precioVenta);
            
            var cell5 = row.insertCell(5);
            var precioTotal = document.createElement("input");
            var price = document.createElement("input");
            price.value =  precioTotalArti(arrRes[3],cant);
            precioTotal.value = $.number(price.value,2);
            precioTotal.type = "text";
            precioTotal.id = "precio"+rowCount;
            precioTotal.setAttribute("name","totPrice[]");
            precioTotal.setAttribute('class', 'input-mini');
            precioTotal.setAttribute('style', 'text-align: right; width: 185px;');
            precioTotal.setAttribute('readonly', 'true');
            precioTotal.setAttribute('onclick', 'evaDiscount(this)');
            cell5.appendChild(precioTotal);
            
            var cell6 = row.insertCell(6);
            var btnDelete = document.createElement("input");
            btnDelete.type = "button";
            btnDelete.setAttribute('class', 'btn btn-round btn-mini icon icon-remove icon-color');
            btnDelete.onclick = function(){ 
                                    deleteCurrentRow(this);
                               }; 
            cell6.appendChild(btnDelete);
            
           
            
            row.myRow = new myRowObject(textNode, labelArt, desArticulo, txtCantidad,precioVenta,price, precioTotal );
        
        }
        

           
   


//Hace los preparativos para eliminar una fila, además llama a la funcion qu elimina la fila y recalcula
//el subtotal, impuesto, y total
function deleteCurrentRow(obj){
	
		var delRow = obj.parentNode.parentNode;
		var tbl = delRow.parentNode.parentNode;
		var rIndex = delRow.sectionRowIndex;
                
		var rowArray = new Array(delRow);
		deleteRows(rowArray);
		reorderRows(tbl, rIndex);
                math();
}

//Reordena la tabla despues que una fila fue eliminada
function reorderRows(tbl, startingIndex){


                if(tbl.rows[startingIndex]){
			var count = startingIndex;
			for (var i=startingIndex; i<tbl.rows.length; i++) {
			
				// CONFIG: next line is affected by myRowObject settings
				tbl.rows[i].myRow.one.data = count; // text

				count++;
			}
                    }
	
}

//Elimina una fila de la tabla
function deleteRows(rowObjArray){
	
		for (var i=0; i<rowObjArray.length; i++) {
			var rIndex = rowObjArray[i].sectionRowIndex;
			rowObjArray[i].parentNode.deleteRow(rIndex);
		}
	
}


//Retorna el precio total por articulo
    function precioTotalArti(precio, cantidad){
        var p = parseInt(precio);
        var c = parseInt(cantidad);
        return p*c;
    }
    
//Elimina el impuesto para poder concatenarlo al string autocompletar del input articulos
    function delImpuesto(precio){
        var imp = (precio*13)/100;
        var res = precio + imp;
        return res;
    }


//Llama al Modal de evaluación de Seguridad 
    function evaDiscount(row){
        $("#modalEvaluate").modal('show');
        
           var id = row.getAttribute('id');
           $("#bvalue").val($("#"+id).val());
           
               window.res = row;
    }
      
//Verifica si el usuario y el password son  
    function verificar(){
       
        var user = $("#fuser").val();
         var pass = $("#fpass").val();    
            
        var data = [
            <?php  $_smarty_tpl->tpl_vars['lP'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lP']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LISTA_VENDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lP']->key => $_smarty_tpl->tpl_vars['lP']->value) {
$_smarty_tpl->tpl_vars['lP']->_loop = true;
?>
               "<?php echo $_smarty_tpl->tpl_vars['lP']->value['user'];?>
|<?php echo $_smarty_tpl->tpl_vars['lP']->value['pass'];?>
"
               <?php if ($_smarty_tpl->tpl_vars['LISTA_VENDS']->value['foreach']['things']['last']!=true) {?> ,<?php }?>  
            <?php } ?>   
                      
        ];
        
        var dataSpt = new Array();
        var id = res.getAttribute('id');
        for(i=0;i<data.length;i++){
            dataSpt[i] = data[i].split("|"); 
        }
        
        for(x=0;x<dataSpt.length;x++){     

           if(user === dataSpt[x][0] && pass === dataSpt[x][1]){
               
                 $("#"+id).val($("#avalue").val()).number(true,2);
                 //res.seven.value = $("#avalue").val();
                 
                 $("#modalEvaluate").modal('hide');
                 math();
                 $("#modalEvaluate")[0].reset();
                 
            }
                  
        }
       
        
    }
    
    
    
     
    
 
//Rellena el input de los clientes para que se muestre un autocompletar 
    $(function(){
       var availableTags = [
                       <?php  $_smarty_tpl->tpl_vars['lP'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lP']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LISTA_CLIENTES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lP']->key => $_smarty_tpl->tpl_vars['lP']->value) {
$_smarty_tpl->tpl_vars['lP']->_loop = true;
?>
                          "<?php echo $_smarty_tpl->tpl_vars['lP']->value['nombre'];?>
"+" | "+ "<?php echo $_smarty_tpl->tpl_vars['lP']->value['telefono'];?>
"+" | "+"<?php echo $_smarty_tpl->tpl_vars['lP']->value['correo'];?>
" 
                          <?php if ($_smarty_tpl->tpl_vars['LISTA_CLIENTES']->value['foreach']['things']['last']!=true) {?> ,<?php }?>  
                       <?php } ?>   

       ];

       $( "#txtNombre").autocomplete({
                   source: availableTags
       });
     });	
        

//Rellene con un autocomplete el campo usuario para la agil selección antes de imprimir
    $(function(){
    var availableTags = [
                    <?php  $_smarty_tpl->tpl_vars['lP'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lP']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LISTA_VENDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lP']->key => $_smarty_tpl->tpl_vars['lP']->value) {
$_smarty_tpl->tpl_vars['lP']->_loop = true;
?>
                       "<?php echo $_smarty_tpl->tpl_vars['lP']->value['user'];?>
"
                       <?php if ($_smarty_tpl->tpl_vars['LISTA_VENDS']->value['foreach']['things']['last']!=true) {?> ,<?php }?>  
                    <?php } ?>   
                      
    ];

    $( "#txtUser").autocomplete({
                source: availableTags
            });
        });


//No permite la entrada de ninguna letra o caracter especial al input cantidad
    $(document).ready(function() {
        $("#cant").keydown(function (e) {
            // Allow: backspace, delete, tab, escape, enter and .
            if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
                 // Allow: Ctrl+A
                (e.keyCode == 65 && e.ctrlKey === true) || 
                 // Allow: home, end, left, right, down, up
                (e.keyCode >= 35 && e.keyCode <= 40)) {
                     // let it happen, don't do anything
                     return;
            }
            // Ensure that it is a number and stop the keypress
            if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                e.preventDefault();
            }
        });
    });
    
    $(document).ready(function() {
        $("#avalue").keydown(function (e) {
            // Allow: backspace, delete, tab, escape, enter and .
            if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
                 // Allow: Ctrl+A
                (e.keyCode == 65 && e.ctrlKey === true) || 
                 // Allow: home, end, left, right, down, up
                (e.keyCode >= 35 && e.keyCode <= 40)) {
                     // let it happen, don't do anything
                     return;
            }
            // Ensure that it is a number and stop the keypress
            if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                e.preventDefault();
            }
        });
    });


//Limpia toda la pantalla para realizar una factura nueva
    function clearAll(){
        $('#myForm')[0].reset();
        document.getElementById('message-fields').innerHTML ="";
        var table = document.getElementById("tableItem");
        for(var x=1;x<table.rows.length;x++){
                table.deleteRow(x);
            }
       $("#selectError").chosen('destroy')
                            .trigger('liszt:updated');
                       
       $("#selectError1").chosen('destroy')
                            .trigger('liszt:updated');
                        
        $('#frmCliente')[0].reset();
        $('#frmSeguridad')[0].reset();
    }
	</script>
        </body>
     </html><?php }} ?>
