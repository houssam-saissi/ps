<?php
/* Smarty version 3.1.39, created on 2021-05-30 23:18:35
  from '/var/www/vhosts/wyxar.com/ps.wyxar.com/modules/blockreassurance/views/templates/admin/tabs/content/config_elements/language.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60b40f3bd3c7a0_65835945',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'add1c61fc21a94bd4d999695207796eed2ee0e16' => 
    array (
      0 => '/var/www/vhosts/wyxar.com/ps.wyxar.com/modules/blockreassurance/views/templates/admin/tabs/content/config_elements/language.tpl',
      1 => 1621609860,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60b40f3bd3c7a0_65835945 (Smarty_Internal_Template $_smarty_tpl) {
if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
<div class="form-group">
    <div class="col-xs-12 col-sm-12 col-md-5 col-lg-3">
        <div class="text-right">
            <label class="control-label">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Languages','d'=>'Modules.Blockreassurance.Admin'),$_smarty_tpl ) );?>

            </label>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-7 col-lg-4">
        <div class="input-group col-lg-12">
            <div class="col-xs-12 col-sm-12 col-md-7 col-lg-12">
                <select class="custom-select" name="psr-language">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'lang');
$_smarty_tpl->tpl_vars['lang']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['lang']->value) {
$_smarty_tpl->tpl_vars['lang']->do_else = false;
?>
                        <option <?php if ($_smarty_tpl->tpl_vars['lang']->value['id_lang'] == $_smarty_tpl->tpl_vars['defaultFormLanguage']->value) {?>selected="selected"<?php }?>
                                value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['id_lang'];?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['lang']->value['name'],'htmlall','UTF-8' ));?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
<?php }
}
}
