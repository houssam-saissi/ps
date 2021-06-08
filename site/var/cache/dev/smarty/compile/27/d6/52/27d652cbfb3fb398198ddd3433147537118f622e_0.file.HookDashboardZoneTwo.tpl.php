<?php
/* Smarty version 3.1.39, created on 2021-05-28 19:26:17
  from '/var/www/vhosts/wyxar.com/ps.wyxar.com/modules/ps_metrics/views/templates/hook/HookDashboardZoneTwo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60b135c9a12c81_96149193',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '27d652cbfb3fb398198ddd3433147537118f622e' => 
    array (
      0 => '/var/www/vhosts/wyxar.com/ps.wyxar.com/modules/ps_metrics/views/templates/hook/HookDashboardZoneTwo.tpl',
      1 => 1621610039,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60b135c9a12c81_96149193 (Smarty_Internal_Template $_smarty_tpl) {
?>
<link href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pathDashboardVendor']->value,'htmlall','UTF-8' ));?>
" rel=preload as=script>
<link href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pathDashboardApp']->value,'htmlall','UTF-8' ));?>
" rel=preload as=script>

<div id="dashboardApp"></div>

<?php echo '<script'; ?>
 src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pathDashboardVendor']->value,'htmlall','UTF-8' ));?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pathDashboardApp']->value,'htmlall','UTF-8' ));?>
"><?php echo '</script'; ?>
>
<?php }
}
