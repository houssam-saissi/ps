<?php
/* Smarty version 3.1.39, created on 2021-05-28 19:26:03
  from '/var/www/vhosts/wyxar.com/ps.wyxar.com/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60b135bb8f30a0_49479147',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b771a10dd7604dcc248ea51f23b6d2efe19f752' => 
    array (
      0 => '/var/www/vhosts/wyxar.com/ps.wyxar.com/themes/classic/templates/index.tpl',
      1 => 1621609861,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60b135bb8f30a0_49479147 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_33566514860b135bb8ef892_39071361', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_189446859760b135bb8f0243_47113593 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_212467120860b135bb8f1431_27224548 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_65472785260b135bb8f0dd9_96211762 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_212467120860b135bb8f1431_27224548', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_33566514860b135bb8ef892_39071361 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_33566514860b135bb8ef892_39071361',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_189446859760b135bb8f0243_47113593',
  ),
  'page_content' => 
  array (
    0 => 'Block_65472785260b135bb8f0dd9_96211762',
  ),
  'hook_home' => 
  array (
    0 => 'Block_212467120860b135bb8f1431_27224548',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_189446859760b135bb8f0243_47113593', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_65472785260b135bb8f0dd9_96211762', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
