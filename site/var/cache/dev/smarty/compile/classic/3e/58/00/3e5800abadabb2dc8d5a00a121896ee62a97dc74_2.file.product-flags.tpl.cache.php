<?php
/* Smarty version 3.1.39, created on 2021-05-28 19:26:03
  from '/var/www/vhosts/wyxar.com/ps.wyxar.com/themes/classic/templates/catalog/_partials/product-flags.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60b135bb7dc7a6_62913055',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e5800abadabb2dc8d5a00a121896ee62a97dc74' => 
    array (
      0 => '/var/www/vhosts/wyxar.com/ps.wyxar.com/themes/classic/templates/catalog/_partials/product-flags.tpl',
      1 => 1621609861,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60b135bb7dc7a6_62913055 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '155944298960b135bb7d5758_03557033';
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_213263888660b135bb7d94c9_07343560', 'product_flags');
?>

<?php }
/* {block 'product_flags'} */
class Block_213263888660b135bb7d94c9_07343560 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_flags' => 
  array (
    0 => 'Block_213263888660b135bb7d94c9_07343560',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <ul class="product-flags">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
$_smarty_tpl->tpl_vars['flag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
$_smarty_tpl->tpl_vars['flag']->do_else = false;
?>
            <li class="product-flag <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
<?php
}
}
/* {/block 'product_flags'} */
}
