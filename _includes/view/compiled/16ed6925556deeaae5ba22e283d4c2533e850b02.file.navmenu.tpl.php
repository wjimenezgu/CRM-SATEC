<?php /* Smarty version Smarty-3.1.16, created on 2014-05-24 01:55:11
         compiled from "..\_includes\view\navmenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17848537fdfdfa8b0f6-81264520%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '16ed6925556deeaae5ba22e283d4c2533e850b02' => 
    array (
      0 => '..\\_includes\\view\\navmenu.tpl',
      1 => 1392770106,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17848537fdfdfa8b0f6-81264520',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'OPTIONS_NAV_MENU' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_537fdfdfaadd87_40678097',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537fdfdfaadd87_40678097')) {function content_537fdfdfaadd87_40678097($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include 'C:\\xampp\\htdocs\\CRM-SATEC\\resources\\libs\\smarty\\libs\\plugins\\modifier.capitalize.php';
?>    <div>
            <ul class="breadcrumb">
                
                    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['onm'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['onm']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['onm']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['OPTIONS_NAV_MENU']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['onm']['name'] = 'onm';
$_smarty_tpl->tpl_vars['smarty']->value['section']['onm']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['onm']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['onm']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['onm']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['onm']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['onm']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['onm']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['onm']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['onm']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['onm']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['onm']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['onm']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['onm']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['onm']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['onm']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['onm']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['onm']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['onm']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['onm']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['onm']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['onm']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['onm']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['onm']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['onm']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['onm']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['onm']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['onm']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['onm']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['onm']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['onm']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['onm']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['onm']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['onm']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['onm']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['onm']['total']);
?>                    
                    <li>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['OPTIONS_NAV_MENU']->value[$_smarty_tpl->getVariable('smarty')->value['section']['onm']['index']]['link'];?>
"><?php echo smarty_modifier_capitalize(mb_strtolower($_smarty_tpl->tpl_vars['OPTIONS_NAV_MENU']->value[$_smarty_tpl->getVariable('smarty')->value['section']['onm']['index']]['opt'], 'UTF-8'));?>
</a> <span class="divider">/</span>
                    </li>
                    <?php endfor; endif; ?>
            </ul>
    </div><?php }} ?>
