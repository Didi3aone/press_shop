<?php
/* Smarty version 3.1.33, created on 2019-01-25 16:32:56
  from '/var/www/html/press_shop/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c4ad7c8e96387_65808612',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e7fe18f84485474d137c1474d84f8aee6092c4e' => 
    array (
      0 => '/var/www/html/press_shop/themes/classic/templates/index.tpl',
      1 => 1548407242,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c4ad7c8e96387_65808612 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21368967685c4ad7c8e933b5_61386925', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_3259317915c4ad7c8e93b12_20492657 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_1045607925c4ad7c8e94b52_51508831 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_5440551805c4ad7c8e94569_36508862 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1045607925c4ad7c8e94b52_51508831', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_21368967685c4ad7c8e933b5_61386925 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_21368967685c4ad7c8e933b5_61386925',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_3259317915c4ad7c8e93b12_20492657',
  ),
  'page_content' => 
  array (
    0 => 'Block_5440551805c4ad7c8e94569_36508862',
  ),
  'hook_home' => 
  array (
    0 => 'Block_1045607925c4ad7c8e94b52_51508831',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3259317915c4ad7c8e93b12_20492657', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5440551805c4ad7c8e94569_36508862', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
