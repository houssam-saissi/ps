<?php
/* Smarty version 3.1.39, created on 2021-05-30 23:18:35
  from '/var/www/vhosts/wyxar.com/ps.wyxar.com/modules/blockreassurance/views/templates/admin/addons-suggestion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60b40f3be00244_49666313',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b994b45e835ccb369fb94ac7b4fe4e007d23df6' => 
    array (
      0 => '/var/www/vhosts/wyxar.com/ps.wyxar.com/modules/blockreassurance/views/templates/admin/addons-suggestion.tpl',
      1 => 1621609860,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60b40f3be00244_49666313 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="module-addons-suggestion">
    <div class="suggestion-icon">
    </div>
    <div class="suggestion-category-details">
        <div>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Want to go further?','d'=>'Admin.Modules.Feature'),$_smarty_tpl ) );?>

        </div>
        <div class="category-label">
            <?php echo $_smarty_tpl->tpl_vars['addons_category']->value['name'];?>

        </div>
        <div class="marketplace-label">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Addons Marketplace','d'=>'Admin.Global'),$_smarty_tpl ) );?>

        </div>
    </div>
    <div class="suggestion-category-description">
        <?php echo $_smarty_tpl->tpl_vars['addons_category']->value['description'];?>

    </div>
    <div class="suggestion-link">
        <a target="_blank" class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['addons_category']->value['link'];?>
">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Discover all modules','d'=>'Admin.Modules.Feature'),$_smarty_tpl ) );?>

        </a>
    </div>
</div>
<?php }
}
