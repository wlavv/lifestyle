<?php
/* Smarty version 4.2.1, created on 2023-10-04 07:50:14
  from '/home/brunofer/public_html/life-style.pt/public_html/themes/theme_corano1/templates/catalog/_partials/customize/button-cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_651d0b26ac2db2_03343572',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a578c7e2deb6d25ad320abe4506009e88f58331d' => 
    array (
      0 => '/home/brunofer/public_html/life-style.pt/public_html/themes/theme_corano1/templates/catalog/_partials/customize/button-cart.tpl',
      1 => 1678521959,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_651d0b26ac2db2_03343572 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['configuration']->value['is_catalog']) {
if (($_smarty_tpl->tpl_vars['product']->value['quantity'] > 0 || $_smarty_tpl->tpl_vars['product']->value['allow_oosp'])) {?>
<div class="product-add-to-cart">	
 <form action="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" method="post" class="add-to-cart-or-refresh">
   <input type="hidden" name="token" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
">
   <input type="hidden" name="id_product" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" class="product_page_product_id">
   <input type="hidden" name="qty" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['minimal_quantity'], ENT_QUOTES, 'UTF-8');?>
">
   <button class="button ajax_add_to_cart_button add-to-cart btn-default" data-button-action="add-to-cart" type="submit" >
  		 <i class="fa fa-shopping-cart"></i> <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
   </button>
 </form>
</div>
<?php } else { ?>
	<span class="ajax_add_to_cart_button disabled" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>' Out of stock ','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
" ><i class="fa fa-shopping-cart"></i> <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span></span>
<?php }
}?> <?php }
}
