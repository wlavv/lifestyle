<?php
/* Smarty version 4.2.1, created on 2023-10-04 07:50:14
  from '/home/brunofer/public_html/life-style.pt/public_html/modules/blockwishlist/blockwishlist_button.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_651d0b26aac6d1_43687997',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '065698135d2f48a579c88db63d2d2d62e7d8b3a0' => 
    array (
      0 => '/home/brunofer/public_html/life-style.pt/public_html/modules/blockwishlist/blockwishlist_button.tpl',
      1 => 1678521914,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_651d0b26aac6d1_43687997 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['wishlists']->value)) && count($_smarty_tpl->tpl_vars['wishlists']->value) > 1) {?>   
    	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['wishlists']->value, 'wishlist', false, NULL, 'wl', array (
  'first' => true,
  'last' => true,
  'index' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['wishlist']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['wishlist']->value) {
$_smarty_tpl->tpl_vars['wishlist']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_wl']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_wl']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_wl']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_wl']->value['index'];
$_smarty_tpl->tpl_vars['__smarty_foreach_wl']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_wl']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_wl']->value['total'];
?>
    		<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_wl']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_wl']->value['first'] : null)) {?>
    			<a class="addToWishlist wishlist_button_list" tabindex="0" data-toggle="popover" data-trigger="focus" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Wishlist','mod'=>'blockwishlist'),$_smarty_tpl ) );?>
" data-placement="bottom"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to wishlist','mod'=>'blockwishlist'),$_smarty_tpl ) );?>
</a>
    				<div hidden class="popover-content">
    					<table class="table" border="1">
    						<tbody>
    		<?php }?>
    							<tr title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['wishlist']->value['name'], ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['wishlist']->value['id_wishlist'], ENT_QUOTES, 'UTF-8');?>
" onclick="WishlistCart('wishlist_block_list', 'add', '<?php echo htmlspecialchars((string) intval($_smarty_tpl->tpl_vars['product']->value['id_product']), ENT_QUOTES, 'UTF-8');?>
', false, 1, '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['wishlist']->value['id_wishlist'], ENT_QUOTES, 'UTF-8');?>
');">
    								<td>
    									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to %s','sprintf'=>array($_smarty_tpl->tpl_vars['wishlist']->value['name']),'mod'=>'blockwishlist'),$_smarty_tpl ) );?>

    								</td>
    							</tr>
    		<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_wl']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_wl']->value['last'] : null)) {?>
    					</tbody>
    				</table>
    			</div>
    		<?php }?>
    	<?php
}
if ($_smarty_tpl->tpl_vars['wishlist']->do_else) {
?>
    		<a class="addToWishlist" href="#" id="wishlist_button_nopop" onclick="WishlistCart('wishlist_block_list', 'add', '<?php echo htmlspecialchars((string) intval($_smarty_tpl->tpl_vars['id_product']->value), ENT_QUOTES, 'UTF-8');?>
', $('#idCombination').val(), document.getElementById('quantity_wanted').value); return false;" rel="nofollow"  title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to my wishlist','mod'=>'blockwishlist'),$_smarty_tpl ) );?>
">
    			<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to wishlist','mod'=>'blockwishlist'),$_smarty_tpl ) );?>
</span>
    		</a>
    	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php } else { ?>

	<a class="addToWishlist wishlistProd_<?php echo htmlspecialchars((string) intval($_smarty_tpl->tpl_vars['product']->value['id_product']), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to wishlist','mod'=>'blockwishlist'),$_smarty_tpl ) );?>
" href="#" data-rel="<?php echo htmlspecialchars((string) intval($_smarty_tpl->tpl_vars['product']->value['id_product']), ENT_QUOTES, 'UTF-8');?>
" onclick="WishlistCart('wishlist_block_list', 'add', '<?php echo htmlspecialchars((string) intval($_smarty_tpl->tpl_vars['product']->value['id_product']), ENT_QUOTES, 'UTF-8');?>
', false, 1); return false;">
		<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to wishlist','mod'=>'blockwishlist'),$_smarty_tpl ) );?>
</span>
	</a>

<?php }
}
}
