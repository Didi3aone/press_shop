<?php
/* Smarty version 3.1.33, created on 2019-01-25 16:32:56
  from '/var/www/html/press_shop/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c4ad7c8ea1387_27569224',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f79adf9fa27c19b9cde944f57cb961c0c02bb2d3' => 
    array (
      0 => '/var/www/html/press_shop/themes/classic/templates/page.tpl',
      1 => 1548407242,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c4ad7c8ea1387_27569224 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4970589015c4ad7c8e9a570_65833425', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_13421167575c4ad7c8e9b468_12433824 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_2049839095c4ad7c8e9ac59_44320502 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13421167575c4ad7c8e9b468_12433824', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_6801857365c4ad7c8e9d182_61331131 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_10989839565c4ad7c8e9da14_36203306 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_3285119665c4ad7c8e9cb36_80509819 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6801857365c4ad7c8e9d182_61331131', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10989839565c4ad7c8e9da14_36203306', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_2687019615c4ad7c8e9f2a0_46423707 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_18025407475c4ad7c8e9e702_17022520 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2687019615c4ad7c8e9f2a0_46423707', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_4970589015c4ad7c8e9a570_65833425 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_4970589015c4ad7c8e9a570_65833425',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_2049839095c4ad7c8e9ac59_44320502',
  ),
  'page_title' => 
  array (
    0 => 'Block_13421167575c4ad7c8e9b468_12433824',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_3285119665c4ad7c8e9cb36_80509819',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_6801857365c4ad7c8e9d182_61331131',
  ),
  'page_content' => 
  array (
    0 => 'Block_10989839565c4ad7c8e9da14_36203306',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_18025407475c4ad7c8e9e702_17022520',
  ),
  'page_footer' => 
  array (
    0 => 'Block_2687019615c4ad7c8e9f2a0_46423707',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2049839095c4ad7c8e9ac59_44320502', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3285119665c4ad7c8e9cb36_80509819', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18025407475c4ad7c8e9e702_17022520', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
