<?php
/* Smarty version 4.2.1, created on 2023-10-07 08:45:43
  from '/home/brunofer/public_html/life-style.pt/public_html/modules/blockwishlist/blockwishlist_top.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_65210ca7caddd3_52207301',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a3ed6853d4f321e8720077c2aa2f70a47308ae9' => 
    array (
      0 => '/home/brunofer/public_html/life-style.pt/public_html/modules/blockwishlist/blockwishlist_top.tpl',
      1 => 1678521914,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65210ca7caddd3_52207301 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
var wishlistProductsIds='';
var baseDir ='<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['content_dir']->value, ENT_QUOTES, 'UTF-8');?>
';
var static_token='<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
';
var isLogged ='<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['isLogged']->value, ENT_QUOTES, 'UTF-8');?>
';
var loggin_required='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You must be logged in to manage your wishlist.','mod'=>'blockwishlist','js'=>1),$_smarty_tpl ) );?>
';
var added_to_wishlist ='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The product was successfully added to your wishlist.','mod'=>'blockwishlist','js'=>1),$_smarty_tpl ) );?>
';
var mywishlist_url='<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getModuleLink('blockwishlist','mywishlist',array(),true),'quotes','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
';
<?php if ((isset($_smarty_tpl->tpl_vars['isLogged']->value)) && $_smarty_tpl->tpl_vars['isLogged']->value) {?>
	var isLoggedWishlist=true;
<?php } else { ?>
	var isLoggedWishlist=false;
<?php }
echo '</script'; ?>
>
<div id="_desktop_wishtlist">
	<div class="wishtlist_top">
	<a class="" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getModuleLink('blockwishlist','mywishlist',array(),true),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
		<i class="pe-7s-like"></i><span class="txt_wishlist"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Wishlist','mod'=>'blockwishlist'),$_smarty_tpl ) );?>
</span><span class="cart-wishlist-number"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['count_product']->value, ENT_QUOTES, 'UTF-8');?>
</span>
	</a>
	</div>
</div><?php }
}
