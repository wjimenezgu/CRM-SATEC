<?php /* Smarty version Smarty-3.1.16, created on 2017-03-27 23:03:29
         compiled from "../../_includes/view/topBar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:70892212253e1a2c94aa194-37288065%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e5664afa09847d8678fd9cecda140a7bcda7e68' => 
    array (
      0 => '../../_includes/view/topBar.tpl',
      1 => 1490677393,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '70892212253e1a2c94aa194-37288065',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53e1a2c94c6d74_97865352',
  'variables' => 
  array (
    'CRM_SERVER' => 0,
    'USER_SESSION' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53e1a2c94c6d74_97865352')) {function content_53e1a2c94c6d74_97865352($_smarty_tpl) {?>	<!-- topbar starts -->
		<div class="navbar">
		
		<div >
		
<div class="container-fluid">
				<!-- user dropdown starts -->
<div class="span10">			
				<a class=" pull-left"href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/home/"> <img alt="Charisma Logo" src="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/resources/img/logoPage.jpg" /> </a>
			<div id="divSIST_IMPORTACION">								
					<div class="btn-group pull-left" >
					<a class="btn btn-large  dropdown-toggle" style="margin-left:5px;margin-top:5px;"  data-toggle="dropdown" href="#">
						<i class="icon-globe"></i><span class="hidden-phone"> Importaciones</span>
						<span class="caret"></span>
					</a>
                              
					<ul class="dropdown-menu" id="SIST_IMPORTACION" >
					    <li id="module_1_title" class="nav-header hidden-tablet"><?php echo $_smarty_tpl->getConfigVariable('module_1_title');?>
</li>
                        <li id="module_1_option_1"><a class="ajax-link" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/sImportaciones/mcompras/newOrder.php"  ><i class="icon-home" ></i><span class="hidden-tablet"  > <?php echo $_smarty_tpl->getConfigVariable('module_1_option_1');?>
</span></a></li>
                        <li id="module_1_option_3"><a class="ajax-link" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/sImportaciones/mcompras/listOrders.php"><i class="icon-edit"></i><span class="hidden-tablet"> <?php echo $_smarty_tpl->getConfigVariable('module_1_option_3');?>
</span></a></li>
                        <li id="module_1_option_6"><a class="ajax-link" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/sImportaciones/mcompras/conciliatc.php"><i class="icon-check"></i><span class="hidden-tablet"> <?php echo $_smarty_tpl->getConfigVariable('module_1_option_6');?>
</span></a></li>
                        <li id="module_1_option_10"><a class="ajax-link" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/sImportaciones/mcompras/allGuias.php"><i class="icon-check"></i><span class="hidden-tablet"> <?php echo $_smarty_tpl->getConfigVariable('module_1_option_10');?>
</span></a></li>
                        <li id="module_1_option_7"><a class="ajax-link" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/sImportaciones/mcompras/receiveOrders.php"><i class="icon-check"></i><span class="hidden-tablet"> <?php echo $_smarty_tpl->getConfigVariable('module_1_option_7');?>
</span></a></li>
                        <li id="module_1_option_8"><a class="ajax-link" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/sImportaciones/mcompras/releaseOrders.php"><i class="icon-check"></i><span class="hidden-tablet"> <?php echo $_smarty_tpl->getConfigVariable('module_1_option_8');?>
</span></a></li>                                                                                                                                
                        <li id="module_1_option_9"><a class="ajax-link" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/sImportaciones/mcompras/inputOrders.php"><i class="icon-check"></i><span class="hidden-tablet"> <?php echo $_smarty_tpl->getConfigVariable('module_1_option_9');?>
</span></a></li>
                        <li id="module_1_option_11"><a class="ajax-link" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/management/factor"><i class="icon-check"></i><span class="hidden-tablet"> <?php echo $_smarty_tpl->getConfigVariable('module_1_option_11');?>
</span></a></li>
                        <li id="module_1_option_12"><a class="ajax-link" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/sInventario/comprasnac"><i class="icon-check"></i><span class="hidden-tablet"> <?php echo $_smarty_tpl->getConfigVariable('module_1_option_12');?>
</span></a></li>
                        <li id="module_1_option_13"><a class="ajax-link" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/sImportaciones/mcompras/listPedidos.php"><i class="icon-check"></i><span class="hidden-tablet"> <?php echo $_smarty_tpl->getConfigVariable('module_1_option_13');?>
</span></a></li>
					</ul>
			
                        </div>
         </div>   
         <div id="divSIST_INVENTARIO">	
				<div class="btn-group pull-left" >
					<a class="btn btn-large dropdown-toggle" style="margin-left:5px;margin-top:5px;"  data-toggle="dropdown" href="#">
						<i class="icon-book"></i><span class="hidden-phone"> Inventario</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu" id="SIST_INVENTARIO">
						<li id="module_2_title" class="nav-header hidden-tablet"><?php echo $_smarty_tpl->getConfigVariable('module_2_title');?>
</li>
                    	<li id="module_2_option_1"><a class="ajax-link" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/sInventario/facturacion/index.php"><i class="icon-home"></i><span class="hidden-tablet"> <?php echo $_smarty_tpl->getConfigVariable('module_2_option_1');?>
</span></a></li>
                    	<li id="module_2_option_2"><a class="ajax-link" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/sInventario/cobrar/index.php"><i class="icon-edit"></i><span class="hidden-tablet"> <?php echo $_smarty_tpl->getConfigVariable('module_2_option_2');?>
</span></a></li>
                    	<li id="module_2_option_7"><a class="ajax-link" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/sInventario/alistar/index.php"><i class="icon-edit"></i><span class="hidden-tablet"> <?php echo $_smarty_tpl->getConfigVariable('module_2_option_7');?>
</span></a></li>                    	
                    	<li id="module_2_option_4"><a class="ajax-link" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/sInventario/reparaciones/index.php"><i class="icon-font"></i><span class="hidden-tablet"> <?php echo $_smarty_tpl->getConfigVariable('module_2_option_4');?>
</span></a></li>
                    	<li id="module_2_option_5"><a class="ajax-link" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/sInventario/facturas/index.php"><i class="icon-edit"></i><span class="hidden-tablet"> <?php echo $_smarty_tpl->getConfigVariable('module_2_option_5');?>
</span></a></li>
						<li id="module_2_option_8"><a class="ajax-link" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/sInventario/notascr/index.php"><i class="icon-edit"></i><span class="hidden-tablet"> <?php echo $_smarty_tpl->getConfigVariable('module_2_option_8');?>
</span></a></li>                    	                    	
                    	<li id="module_2_option_6"><a class="ajax-link" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/sInventario/proformas/index.php"><i class="icon-edit"></i><span class="hidden-tablet"> <?php echo $_smarty_tpl->getConfigVariable('module_2_option_6');?>
</span></a></li>
                    	<li id="module_2_option_3"><a class="ajax-link" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/sInventario/apartados/index.php"><i class="icon-font"></i><span class="hidden-tablet"> <?php echo $_smarty_tpl->getConfigVariable('module_2_option_3');?>
</span></a></li>
                    	<li id="module_2_option_9"><a class="ajax-link" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/sInventario/cobrardife/index.php"><i class="icon-edit"></i><span class="hidden-tablet"> <?php echo $_smarty_tpl->getConfigVariable('module_2_option_9');?>
</span></a></li>                    	                    	
                    	<li id="module_2_option_10"><a class="ajax-link" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/sInventario/itemsBodega/index.php"><i class="icon-edit"></i><span class="hidden-tablet"> <?php echo $_smarty_tpl->getConfigVariable('module_2_option_10');?>
</span></a></li>
                    	<li id="module_2_option_11"><a class="ajax-link" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/sInventario/facturacion/indexEsp.php"><i class="icon-edit"></i><span class="hidden-tablet"> <?php echo $_smarty_tpl->getConfigVariable('module_2_option_11');?>
</span></a></li>
                    	<li id="module_2_option_12"><a class="ajax-link" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/sInventario/controlrepa/index.php"><i class="icon-edit"></i><span class="hidden-tablet"> <?php echo $_smarty_tpl->getConfigVariable('module_2_option_12');?>
</span></a></li>
                    	<li id="module_2_option_13"><a class="ajax-link" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/sInventario/facturacioncxc/index.php"><i class="icon-edit"></i><span class="hidden-tablet"> <?php echo $_smarty_tpl->getConfigVariable('module_2_option_13');?>
</span></a></li> 
                        <li id="module_2_option_14"><a class="ajax-link" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/sInventario/facturascxc/index.php"><i class="icon-edit"></i><span class="hidden-tablet"> <?php echo $_smarty_tpl->getConfigVariable('module_2_option_14');?>
</span></a></li>                    	                                      	                    	
						<li id="module_2_option_15"><a class="ajax-link" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/sInventario/notascrcxc/index.php"><i class="icon-edit"></i><span class="hidden-tablet"> <?php echo $_smarty_tpl->getConfigVariable('module_2_option_15');?>
</span></a></li>                    	
						<li id="module_3_title" class="nav-header hidden-tablet"><?php echo $_smarty_tpl->getConfigVariable('module_3_title');?>
</li>                    	
                    	<li id="module_3_option_1"><a class="ajax-link" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/sInventario/ajustesItems/allEntradas.php"><i class="icon-check"></i><span class="hidden-tablet"> <?php echo $_smarty_tpl->getConfigVariable('module_3_option_1');?>
</span></a></li>
                    	<li id="module_3_option_2"><a class="ajax-link" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/sInventario/ajustesItems/allSalidas.php"><i class="icon-check"></i><span class="hidden-tablet"> <?php echo $_smarty_tpl->getConfigVariable('module_3_option_2');?>
</span></a></li>
                    	<li id="module_3_option_3"><a class="ajax-link" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/sInventario/traslados/allSolicitar.php?EoS=O"><i class="icon-check"></i><span class="hidden-tablet"> <?php echo $_smarty_tpl->getConfigVariable('module_3_option_3');?>
</span></a></li>
                    	<li id="module_3_option_4"><a class="ajax-link" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/sInventario/traslados/allSolicitar.php?EoS=E"><i class="icon-check"></i><span class="hidden-tablet"> <?php echo $_smarty_tpl->getConfigVariable('module_3_option_4');?>
</span></a></li>                    	                    	
                    	<li id="module_3_option_5"><a class="ajax-link" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/sInventario/tomafisica/index.php"><i class="icon-check"></i><span class="hidden-tablet"> <?php echo $_smarty_tpl->getConfigVariable('module_3_option_5');?>
</span></a></li>
                    	<li id="module_3_option_6"><a class="ajax-link" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/sInventario/pedidotiendas/allSolicitar.php?EoS=O"><i class="icon-check"></i><span class="hidden-tablet"> <?php echo $_smarty_tpl->getConfigVariable('module_3_option_6');?>
</span></a></li>
                    	                                                                                                        
					</ul>
				</div>
		</div>
		<div id="divSIST_CONSULTAS">	
				<div class="btn-group pull-left" >
					<a class="btn btn-large dropdown-toggle" style="margin-left:5px;margin-top:5px;"  data-toggle="dropdown" href="#">
						<i class="icon-check"></i><span class="hidden-phone"> Consultas</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu" id="SIST_CONSULTAS">
						<li id="module_4_title" class="nav-header hidden-tablet"><?php echo $_smarty_tpl->getConfigVariable('module_4_title');?>
</li>
                    	<li id="module_4_option_1"><a class="ajax-link" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/management/queriesorder"><i class="icon-search"></i><span class="hidden-tablet"> <?php echo $_smarty_tpl->getConfigVariable('module_4_option_1');?>
</span></a></li>						
                    	<li id="module_4_option_3"><a class="ajax-link" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/sInventario/consultas/articulos.php"><i class="icon-search"></i><span class="hidden-tablet"> <?php echo $_smarty_tpl->getConfigVariable('module_4_option_3');?>
</span></a></li>
						<li id="module_4_option_2"><a class="ajax-link" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/sInventario/consultas/facturacion.php"><i class="icon-search"></i><span class="hidden-tablet"> <?php echo $_smarty_tpl->getConfigVariable('module_4_option_2');?>
</span></a></li>                    	
						<li id="module_4_option_5"><a class="ajax-link" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/sInventario/consultas/facturas.php"><i class="icon-search"></i><span class="hidden-tablet"> <?php echo $_smarty_tpl->getConfigVariable('module_4_option_5');?>
</span></a></li>
						<li id="module_4_option_6"><a class="ajax-link" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/sInventario/consultas/existencias.php"><i class="icon-search"></i><span class="hidden-tablet"> <?php echo $_smarty_tpl->getConfigVariable('module_4_option_6');?>
</span></a></li>						
						<li id="module_4_option_7"><a class="ajax-link" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/sInventario/consultas/moviPlantronics.php"><i class="icon-search"></i><span class="hidden-tablet"> <?php echo $_smarty_tpl->getConfigVariable('module_4_option_7');?>
</span></a></li>	
                        <li id="module_4_option_8"><a class="ajax-link" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/sInventario/consultas/moviArtTiempo.php"><i class="icon-search"></i><span class="hidden-tablet"> <?php echo $_smarty_tpl->getConfigVariable('module_4_option_8');?>
</span></a></li>
                        <li id="module_4_option_9"><a class="ajax-link" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/sInventario/consultas/ventas.php"><i class="icon-search"></i><span class="hidden-tablet"> <?php echo $_smarty_tpl->getConfigVariable('module_4_option_9');?>
</span></a></li>
                        <li id="module_4_option_10"><a class="ajax-link" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/sInventario/facturascxc/index.php"><i class="icon-search"></i><span class="hidden-tablet"> <?php echo $_smarty_tpl->getConfigVariable('module_4_option_10');?>
</span></a></li>
                        <li id="module_4_option_11"><a class="ajax-link" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/sInventario/consultas/reparaciones.php"><i class="icon-search"></i><span class="hidden-tablet"> <?php echo $_smarty_tpl->getConfigVariable('module_4_option_11');?>
</span></a></li>

					</ul>
				</div>
		</div>


        
		
        <div id="divSIST_MANAGMENT">   
                <div class="btn-group pull-left" >
                    <a class="btn btn-large dropdown-toggle" style="margin-left:5px;margin-top:5px;"  data-toggle="dropdown" href="#">
                        <i class="icon-book"></i><span class="hidden-phone"> Mantenimientos</span>
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" id="SIST_MANAGMENT">
                        <li id="module_5_title" class="nav-header hidden-tablet"><?php echo $_smarty_tpl->getConfigVariable('module_5_title');?>
</li>
                        
                        <li id="module_5_option_1"><a class="ajax-link" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/sInventario/items"><i class="icon-home"></i><span class="hidden-tablet"> <?php echo $_smarty_tpl->getConfigVariable('module_5_option_1');?>
</span></a></li>
                        <li id="module_5_option_2"><a class="ajax-link" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/management/suppliers"><i class="icon-list-alt"></i><span class="hidden-tablet">  <?php echo $_smarty_tpl->getConfigVariable('module_5_option_2');?>
</span></a></li>
                        <li id="module_5_option_3"><a class="ajax-link" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/management/coins"><i class="icon-list-alt"></i><span class="hidden-tablet"> <?php echo $_smarty_tpl->getConfigVariable('module_5_option_3');?>
</span></a></li>
                        <li id="module_5_option_2"><a class="ajax-link" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/management/suppliers"><i class="icon-list-alt"></i><span class="hidden-tablet">  <?php echo $_smarty_tpl->getConfigVariable('module_5_option_2');?>
</span></a></li>
                        <li id="module_5_option_3"><a class="ajax-link" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/management/coins"><i class="icon-list-alt"></i><span class="hidden-tablet"> <?php echo $_smarty_tpl->getConfigVariable('module_5_option_3');?>
</span></a></li>
                         <li id="module_5_option_4"><a class="ajax-link" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/management/events"><i class="icon-list-alt"></i><span class="hidden-tablet"> <?php echo $_smarty_tpl->getConfigVariable('module_5_option_4');?>
</span></a></li>
                         <li id="module_5_option_5"><a class="ajax-link" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/management/eventstype"><i class="icon-list-alt"></i><span class="hidden-tablet">  <?php echo $_smarty_tpl->getConfigVariable('module_5_option_5');?>
</span></a></li>
                         <li id="module_5_option_6"><a class="ajax-link" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/management/invparam"><i class="icon-list-alt"></i><span class="hidden-tablet"> <?php echo $_smarty_tpl->getConfigVariable('module_5_option_6');?>
</span></a></li>
                         <li id="module_5_option_7"><a class="ajax-link" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/management/commitmenttype"><i class="icon-list-alt"></i><span class="hidden-tablet"> <?php echo $_smarty_tpl->getConfigVariable('module_5_option_7');?>
</span></a></li>
                         <li id="module_5_option_8"><a class="ajax-link" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/management/docutype"><i class="icon-list-alt"></i><span class="hidden-tablet"> <?php echo $_smarty_tpl->getConfigVariable('module_5_option_8');?>
</span></a></li>                                                    
                         <li id="module_5_option_9"><a class="ajax-link" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/management/paymentoptions"><i class="icon-list-alt"></i><span class="hidden-tablet"> <?php echo $_smarty_tpl->getConfigVariable('module_5_option_9');?>
</span></a></li>
                         <li id="module_5_option_10"><a class="ajax-link" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/management/shippingaddress"><i class="icon-list-alt"></i><span class="hidden-tablet"> <?php echo $_smarty_tpl->getConfigVariable('module_5_option_10');?>
</span></a></li>
                         <li id="module_5_option_11"><a class="ajax-link" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/management/store"><i class="icon-list-alt"></i><span class="hidden-tablet"> <?php echo $_smarty_tpl->getConfigVariable('module_5_option_11');?>
</span></a></li>
                         <li id="module_5_option_12"><a class="ajax-link" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/management/shippingaddress"><i class="icon-list-alt"></i><span class="hidden-tablet"> <?php echo $_smarty_tpl->getConfigVariable('module_5_option_12');?>
</span></a></li>
                         <li id="module_5_option_13"><a class="ajax-link" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/management/invvendedores"><i class="icon-list-alt"></i><span class="hidden-tablet"> <?php echo $_smarty_tpl->getConfigVariable('module_5_option_13');?>
</span></a></li>
                         <li id="module_5_option_14"><a class="ajax-link" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/management/categories"><i class="icon-list-alt"></i><span class="hidden-tablet"> <?php echo $_smarty_tpl->getConfigVariable('module_5_option_14');?>
</span></a></li>
                         <li id="module_5_option_15"><a class="ajax-link" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/management/shippingaddress"><i class="icon-list-alt"></i><span class="hidden-tablet"> <?php echo $_smarty_tpl->getConfigVariable('module_5_option_15');?>
</span></a></li>
                         <li id="module_5_option_16"><a class="ajax-link" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/management/shippingaddress"><i class="icon-list-alt"></i><span class="hidden-tablet"> <?php echo $_smarty_tpl->getConfigVariable('module_5_option_16');?>
</span></a></li>
                         <li id="module_5_option_17"><a class="ajax-link" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/management/invusuariotienda"><i class="icon-list-alt"></i><span class="hidden-tablet"> <?php echo $_smarty_tpl->getConfigVariable('module_5_option_17');?>
</span></a></li>
                         <li id="module_5_option_18"><a class="ajax-link" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/management/invbodeguero"><i class="icon-list-alt"></i><span class="hidden-tablet"> <?php echo $_smarty_tpl->getConfigVariable('module_5_option_18');?>
</span></a></li>
                         <li id="module_5_option_19"><a class="ajax-link" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/management/tlineas"><i class="icon-list-alt"></i><span class="hidden-tablet"> <?php echo $_smarty_tpl->getConfigVariable('module_5_option_19');?>
</span></a></li>
                         <li id="module_5_option_20"><a class="ajax-link" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/management/invtlineas"><i class="icon-list-alt"></i><span class="hidden-tablet"> <?php echo $_smarty_tpl->getConfigVariable('module_5_option_20');?>
</span></a></li>
                         <li id="module_5_option_21"><a class="ajax-link" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/management/invtipofact"><i class="icon-list-alt"></i><span class="hidden-tablet"> <?php echo $_smarty_tpl->getConfigVariable('module_5_option_21');?>
</span></a></li>
                         <li id="module_5_option_22"><a class="ajax-link" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/management/profiles"><i class="icon-list-alt"></i><span class="hidden-tablet"> <?php echo $_smarty_tpl->getConfigVariable('module_5_option_22');?>
</span></a></li>
                         <li id="module_5_option_23"><a class="ajax-link" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/management/userhide"><i class="icon-list-alt"></i><span class="hidden-tablet"> <?php echo $_smarty_tpl->getConfigVariable('module_5_option_23');?>
</span></a></li>
                         <li id="module_5_option_24"><a class="ajax-link" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/management/investadoarticulo"><i class="icon-list-alt"></i><span class="hidden-tablet"> <?php echo $_smarty_tpl->getConfigVariable('module_5_option_24');?>
</span></a></li>
                         <li id="module_5_option_25"><a class="ajax-link" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/management/investadotraslado"><i class="icon-list-alt"></i><span class="hidden-tablet"> <?php echo $_smarty_tpl->getConfigVariable('module_5_option_25');?>
</span></a></li>
                         <li id="module_5_option_26"><a class="ajax-link" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/management/invformapago"><i class="icon-list-alt"></i><span class="hidden-tablet"> <?php echo $_smarty_tpl->getConfigVariable('module_5_option_26');?>
</span></a></li>
                         <li id="module_5_option_27"><a class="ajax-link" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/management/pedparam"><i class="icon-list-alt"></i><span class="hidden-tablet"> <?php echo $_smarty_tpl->getConfigVariable('module_5_option_27');?>
</span></a></li>
                         <li id="module_5_option_28"><a class="ajax-link" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/management/invtipomov"><i class="icon-list-alt"></i><span class="hidden-tablet"> <?php echo $_smarty_tpl->getConfigVariable('module_5_option_28');?>
</span></a></li>
                         
                    </ul>
                    
                 </div>
        </div>
				
		</div>  <!-- span 10 -->
		
				<div class="btn-group pull-right" >
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="icon-user"></i><span class="hidden-phone"> <?php echo $_smarty_tpl->tpl_vars['USER_SESSION']->value;?>
</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/security/closeSession.php"><?php echo $_smarty_tpl->getConfigVariable('text_logOut');?>
</a></li>
						<li class="divider"></li>
						<li><a href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/login/cambioclave/frmChangePwd.php"><?php echo $_smarty_tpl->getConfigVariable('text_changepwd');?>
</a></li>
					</ul>
				</div>
				<!-- user dropdown ends -->

			</div>
		</div>
	</div>	
	<!-- topbar ends -->
<?php }} ?>
