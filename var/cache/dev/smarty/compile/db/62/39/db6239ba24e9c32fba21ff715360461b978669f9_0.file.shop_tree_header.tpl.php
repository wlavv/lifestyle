<?php
/* Smarty version 4.3.4, created on 2024-10-22 21:15:27
  from 'C:\xampp\htdocs\lifestyle\admin77500\themes\default\template\controllers\shop\helpers\tree\shop_tree_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_671807df1ead91_80451691',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db6239ba24e9c32fba21ff715360461b978669f9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lifestyle\\admin77500\\themes\\default\\template\\controllers\\shop\\helpers\\tree\\shop_tree_header.tpl',
      1 => 1729359105,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_671807df1ead91_80451691 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel-heading">
	<?php if ((isset($_smarty_tpl->tpl_vars['title']->value))) {?><i class="icon-sitemap"></i>&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl ) );
}?>
	<div class="pull-right">
		<?php if ((isset($_smarty_tpl->tpl_vars['toolbar']->value))) {
echo $_smarty_tpl->tpl_vars['toolbar']->value;
}?>
	</div>
</div>
<?php }
}
