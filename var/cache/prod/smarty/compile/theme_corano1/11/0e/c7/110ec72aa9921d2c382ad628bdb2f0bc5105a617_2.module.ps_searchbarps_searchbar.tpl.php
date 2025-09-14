<?php
/* Smarty version 4.3.4, created on 2024-10-20 10:22:21
  from 'module:ps_searchbarps_searchbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6714cbcdb37b04_48115470',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '110ec72aa9921d2c382ad628bdb2f0bc5105a617' => 
    array (
      0 => 'module:ps_searchbarps_searchbar.tpl',
      1 => 1698619265,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6714cbcdb37b04_48115470 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="_desktop_search_block" class="col-md-12 col-sm-12 col-xs-12">
	<div id="search_widget" class="search_top" data-search-controller-url="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search_controller_url']->value, ENT_QUOTES, 'UTF-8');?>
">
		<form method="get" action="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search_controller_url']->value, ENT_QUOTES, 'UTF-8');?>
">
			<input type="hidden" name="controller" value="search">
			<input class="text_input" type="text" name="s" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search_string']->value, ENT_QUOTES, 'UTF-8');?>
" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search products...','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
">
			<button type="submit" name="Search for an item" title="Search for an item">
				<i class="pe-7s-search"></i>
			</button>
		</form>
	</div>
</div><?php }
}
