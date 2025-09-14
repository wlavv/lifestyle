<?php
/* Smarty version 4.3.4, created on 2024-10-22 21:15:27
  from 'C:\xampp\htdocs\lifestyle\admin77500\themes\default\template\helpers\tree\tree_toolbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_671807df038ce8_60400063',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e5d9b12b7c3ef27c9ea0b50acc9dcd3ca94c2c6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lifestyle\\admin77500\\themes\\default\\template\\helpers\\tree\\tree_toolbar.tpl',
      1 => 1729359105,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_671807df038ce8_60400063 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tree-actions pull-right">
	<?php if ((isset($_smarty_tpl->tpl_vars['actions']->value))) {?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['actions']->value, 'action');
$_smarty_tpl->tpl_vars['action']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['action']->value) {
$_smarty_tpl->tpl_vars['action']->do_else = false;
?>
		<?php echo $_smarty_tpl->tpl_vars['action']->value->render();?>

	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php }?>
</div>
<?php }
}
