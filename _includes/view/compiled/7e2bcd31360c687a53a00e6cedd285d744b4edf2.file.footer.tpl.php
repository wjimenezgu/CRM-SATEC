<?php /* Smarty version Smarty-3.1.16, created on 2016-03-12 12:23:18
         compiled from "../_includes/view/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:138097471953e1a2c1ba1c30-58649865%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e2bcd31360c687a53a00e6cedd285d744b4edf2' => 
    array (
      0 => '../_includes/view/footer.tpl',
      1 => 1457810174,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '138097471953e1a2c1ba1c30-58649865',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53e1a2c1ca47f5_38360013',
  'variables' => 
  array (
    'ELEMENTS_VISIBLE' => 0,
    'CRM_SERVER' => 0,
    'ANGULARJS' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53e1a2c1ca47f5_38360013')) {function content_53e1a2c1ca47f5_38360013($_smarty_tpl) {?>		<?php if ($_smarty_tpl->tpl_vars['ELEMENTS_VISIBLE']->value!=false) {?>
			<!-- content ends -->
			</div><!--/#content.span10-->
		<?php }?>
		</div><!--/fluid-row-->

		<?php if ($_smarty_tpl->tpl_vars['ELEMENTS_VISIBLE']->value!=false) {?>		
		<hr>

		<div class="modal hide fade" id="myModal">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">×</button>
				<h3>Settings</h3>
			</div>
			<div class="modal-body">
				<p>Here settings can be configured...</p>
			</div>
			<div class="modal-footer">
				<a href="#" class="btn" data-dismiss="modal">Close</a>
				<a href="#" class="btn btn-primary">Save changes</a>
			</div>
		</div>

		<footer>
		<!-- 
			<p class="pull-left">&copy; <a href="http://usman.it" target="_blank">Satec S.A.</a> <<?php ?>?php echo date('Y') ?<?php ?>></p>
			<p class="pull-right">Desarrollado por: <a href="http://usman.it/free-responsive-admin-template">Etecno S.A</a></p>
		 -->
			<p class="pull-left">&copy; <a href="http://www.satecsa.com" target="_blank">Satec S.A.</a> <<?php ?>?php echo date('Y') ?<?php ?>></p>
			<p class="pull-right">Desarrollado por: <a>Etecno S.A</a></p>
		 
		</footer>
                
		<?php }?>
                
	</div><!--/.fluid-container-->

	<!-- external javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->

	<!-- jQuery -->

	<!-- transition / effect library -->
	<script src="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/resources/js/bootstrap-transition.js"></script>
	<!-- alert enhancer library -->
	<script src="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/resources/js/bootstrap-alert.js"></script>
	<!-- modal / dialog library -->
	<script src="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/resources/js/bootstrap-modal.js"></script>
	<!-- custom dropdown library -->
	<script src="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/resources/js/bootstrap-dropdown.js"></script>
	<!-- scrolspy library -->
	<script src="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/resources/js/bootstrap-scrollspy.js"></script>
	<!-- library for creating tabs -->
	<script src="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/resources/js/bootstrap-tab.js"></script>
	<!-- library for advanced tooltip -->
	<script src="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/resources/js/bootstrap-tooltip.js"></script>
	<!-- popover effect library -->
	<script src="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/resources/js/bootstrap-popover.js"></script>
	<!-- button enhancer library -->
	<script src="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/resources/js/bootstrap-button.js"></script>
	<!-- accordion library (optional, not used in demo) -->
	<script src="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/resources/js/bootstrap-collapse.js"></script>
	<!-- carousel slideshow library (optional, not used in demo) -->
	<script src="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/resources/js/bootstrap-carousel.js"></script>
	<!-- autocomplete library -->
	<script src="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/resources/js/bootstrap-typeahead.js"></script>
	<!-- tour library -->
	<script src="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/resources/js/bootstrap-tour.js"></script>
	<!-- library for cookie management -->
	<script src="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/resources/js/jquery.cookie.js"></script>
	<!-- calander plugin -->
	<script src='http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/resources/js/fullcalendar.min.js'></script>
	
        
	<!-- data table plugin -->
	<script src='http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/resources/js/jquery.dataTables.min.js'></script>

	<!-- chart libraries start -->
	<script src="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/resources/js/excanvas.js"></script>
	<script src="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/resources/js/jquery.flot.min.js"></script>
	<script src="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/resources/js/jquery.flot.pie.min.js"></script>
	<script src="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/resources/js/jquery.flot.stack.js"></script>
	<script src="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/resources/js/jquery.flot.resize.min.js"></script>
	<!-- chart libraries end -->

	<!-- select or dropdown enhancer -->
	<script src="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/resources/js/jquery.chosen.min.js"></script>
	<!-- checkbox, radio, and file input styler -->
	<script src="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/resources/js/jquery.uniform.min.js"></script>
	<!-- plugin for gallery image view -->
	<script src="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/resources/js/jquery.colorbox.min.js"></script>
	<!-- rich text editor library -->
	<script src="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/resources/js/jquery.cleditor.min.js"></script>
	<!-- notification plugin -->
	<script src="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/resources/js/jquery.noty.js"></script>
	<!-- file manager library -->
	<script src="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/resources/js/jquery.elfinder.min.js"></script>
	<!-- star rating plugin -->
	<script src="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/resources/js/jquery.raty.min.js"></script>
	<!-- for iOS style toggle switch -->
	<script src="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/resources/js/jquery.iphone.toggle.js"></script>
	<!-- autogrowing textarea plugin -->
	<script src="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/resources/js/jquery.autogrow-textarea.js"></script>
	<!-- multiple file upload plugin -->
	<script src="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/resources/js/jquery.uploadify-3.1.min.js"></script>
	<!-- history.js for cross-browser state change on ajax -->
	<script src="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/resources/js/jquery.history.js"></script>
	<!-- application script for Charisma demo -->
	<script src="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/resources/js/_infoCRM.js"></script>
	<script src="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/resources/js/charisma.js"></script>
	
    <!-- application script for Validate Forms -->
    <script src="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/<?php echo $_smarty_tpl->getConfigVariable('js_validate_forms');?>
"></script>
    <script src="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/<?php echo $_smarty_tpl->getConfigVariable('js_frm_login');?>
"></script>
    
    <?php if ($_smarty_tpl->tpl_vars['ANGULARJS']->value!=false) {?>
    <!-- ANGULARJS-->
    <script src="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/resources/js/angularJS/angular.js"></script>
    <script src="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/resources/js/angularJS/angular-route.js"></script>
    <script src="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/resources/js/angularJS/angular-animate.js"></script>
    <script>
 
        angular.module('app', [])
  .config(['$interpolateProvider', function ($interpolateProvider) {
    $interpolateProvider.startSymbol('[[');
    $interpolateProvider.endSymbol(']]');
  }]);
        
    </script>
    <?php }?>
</body>
</html><?php }} ?>
