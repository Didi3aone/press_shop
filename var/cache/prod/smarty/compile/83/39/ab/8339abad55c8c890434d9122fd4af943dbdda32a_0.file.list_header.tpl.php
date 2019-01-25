<?php
/* Smarty version 3.1.33, created on 2019-01-25 16:50:58
  from '/var/www/html/press_shop/admin758kmbcbt/themes/default/template/controllers/attributes_groups/helpers/list/list_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c4adc02c48326_75973631',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8339abad55c8c890434d9122fd4af943dbdda32a' => 
    array (
      0 => '/var/www/html/press_shop/admin758kmbcbt/themes/default/template/controllers/attributes_groups/helpers/list/list_header.tpl',
      1 => 1548407241,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c4adc02c48326_75973631 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16057475165c4adc02c46d22_91378982', 'leadin');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_header.tpl");
}
/* {block 'leadin'} */
class Block_16057475165c4adc02c46d22_91378982 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'leadin' => 
  array (
    0 => 'Block_16057475165c4adc02c46d22_91378982',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo '<script'; ?>
 type="text/javascript">
		$(document).ready(function() {
			$(location.hash).click();
		});
	<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'leadin'} */
}
