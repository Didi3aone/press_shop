<?php
/* Smarty version 3.1.33, created on 2019-01-25 16:49:25
  from '/var/www/html/press_shop/themes/classic/templates/catalog/_partials/product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c4adba50d0671_41809896',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd094a4c758f106121f8ecf199c51def2b061f23' => 
    array (
      0 => '/var/www/html/press_shop/themes/classic/templates/catalog/_partials/product-additional-info.tpl',
      1 => 1548407242,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c4adba50d0671_41809896 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
