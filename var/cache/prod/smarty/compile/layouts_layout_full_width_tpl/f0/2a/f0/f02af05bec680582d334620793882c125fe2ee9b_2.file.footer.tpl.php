<?php
/* Smarty version 3.1.33, created on 2019-01-25 16:50:21
  from '/var/www/html/press_shop/themes/classic/templates/checkout/_partials/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c4adbdded0f39_79913915',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f02af05bec680582d334620793882c125fe2ee9b' => 
    array (
      0 => '/var/www/html/press_shop/themes/classic/templates/checkout/_partials/footer.tpl',
      1 => 1548407242,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c4adbdded0f39_79913915 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11295428125c4adbddece147_48127570', 'footer');
?>

<?php }
/* {block 'footer'} */
class Block_11295428125c4adbddece147_48127570 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_11295428125c4adbddece147_48127570',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="text-sm-center">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%copyright% %year% - Ecommerce software by %prestashop%','sprintf'=>array('%prestashop%'=>'PrestaShop™','%year%'=>date('Y'),'%copyright%'=>'©'),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

</div>
<?php
}
}
/* {/block 'footer'} */
}
