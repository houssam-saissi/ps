<?php
/* Smarty version 3.1.39, created on 2021-05-30 23:18:35
  from '/var/www/vhosts/wyxar.com/ps.wyxar.com/modules/blockreassurance/views/templates/admin/tabs/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60b40f3bcd3ab8_42157336',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f59418fbfa5e51ba23143ab310e4a5e329540ec1' => 
    array (
      0 => '/var/www/vhosts/wyxar.com/ps.wyxar.com/modules/blockreassurance/views/templates/admin/tabs/content.tpl',
      1 => 1621609859,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./content/listing.tpl' => 1,
    'file:./content/config.tpl' => 1,
  ),
),false)) {
function content_60b40f3bcd3ab8_42157336 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./content/listing.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:./content/config.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
