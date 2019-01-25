<?php
/* Smarty version 3.1.33, created on 2019-01-25 16:50:21
  from '/var/www/html/press_shop/themes/classic/templates/checkout/_partials/steps/unreachable.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c4adbddd69af7_87117969',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd6a14a619305162608d5b22086fdbeec87f37eb' => 
    array (
      0 => '/var/www/html/press_shop/themes/classic/templates/checkout/_partials/steps/unreachable.tpl',
      1 => 1548407242,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c4adbddd69af7_87117969 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15481186505c4adbddd685b6_19605735', 'step');
?>

<?php }
/* {block 'step'} */
class Block_15481186505c4adbddd685b6_19605735 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'step' => 
  array (
    0 => 'Block_15481186505c4adbddd685b6_19605735',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section class="checkout-step -unreachable" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['identifier']->value, ENT_QUOTES, 'UTF-8');?>
">
    <h1 class="step-title h3">
      <span class="step-number"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['position']->value, ENT_QUOTES, 'UTF-8');?>
</span> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>

    </h1>
  </section>
<?php
}
}
/* {/block 'step'} */
}
