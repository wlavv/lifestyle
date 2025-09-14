<?php
/* Smarty version 4.3.4, created on 2024-12-06 09:32:16
  from 'C:\xampp\htdocs\lifestyle\themes\theme_corano1\templates\catalog\_partials\miniatures\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6752c4a018dbf1_90893554',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '100535e692ce68921d5985bc723f64b879da6dd8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lifestyle\\themes\\theme_corano1\\templates\\catalog\\_partials\\miniatures\\product.tpl',
      1 => 1698946920,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/customize/button-cart.tpl' => 4,
    'file:catalog/_partials/variant-links.tpl' => 4,
  ),
),false)) {
function content_6752c4a018dbf1_90893554 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

 <!-- style products default -->
 <?php if ($_smarty_tpl->tpl_vars['postheme']->value['grid_type'] == 0) {?>
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20563797166752c4a00eb181_86687546', 'product_miniature_item');
?>

 <!-- end style products default --> 
 
 <!-- style products default type 1 -->
<?php } elseif ($_smarty_tpl->tpl_vars['postheme']->value['grid_type'] == 1) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_655701016752c4a01109c3_35204349', 'product_miniature_item');
?>

 <!-- end style products default type 1 -->
 
  <!-- style products default type 2 -->
<?php } elseif ($_smarty_tpl->tpl_vars['postheme']->value['grid_type'] == 2) {?>
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2366928206752c4a013aed0_15565746', 'product_miniature_item');
?>

 <!-- end style products default type 2 -->
 
 <!-- style products default type 3 -->
<?php } elseif ($_smarty_tpl->tpl_vars['postheme']->value['grid_type'] == 3) {?>
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2932686986752c4a015b747_29643004', 'product_miniature_item');
?>


<?php }?>
 <!-- end style products default type 3 --><?php }
/* {block 'product_thumbnail'} */
class Block_1578140076752c4a00ec2f9_64337565 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail">
			  <img class="first-image "
			  width="360" 
			  height="360" 
			  src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
" 
				alt = "<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['cover']['legend'])) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],30,'...' )), ENT_QUOTES, 'UTF-8');
}?>"
				data-full-size-image-url = "<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
			  >
			   <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"rotatorImg",'product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>
	
			</a>
		  <?php
}
}
/* {/block 'product_thumbnail'} */
/* {block 'quick_view'} */
class Block_5551458606752c4a00f6cc0_41302810 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<a class="quick_view" href="#" data-link-action="quickview" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quick view','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
">
					 <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quick view','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
					</a>
					<?php
}
}
/* {/block 'quick_view'} */
/* {block 'product_price_and_shipping'} */
class Block_984187206752c4a00f8207_04879046 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			  <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
				<div class="product-price-and-shipping-top">
				  <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
					<?php if ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'percentage') {?>
					  <span class="discount-percentage discount-product"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['discount_percentage'], ENT_QUOTES, 'UTF-8');?>
</span>
					<?php } elseif ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'amount') {?>
					  <span class="discount-amount discount-product"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['discount_amount_to_display'], ENT_QUOTES, 'UTF-8');?>
</span>
					<?php }?>
				  <?php }?>
				</div>
			  <?php }?>
			<?php
}
}
/* {/block 'product_price_and_shipping'} */
/* {block 'product_flags'} */
class Block_19032269896752c4a00fc305_50141168 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<ul class="product-flag">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
$_smarty_tpl->tpl_vars['flag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
$_smarty_tpl->tpl_vars['flag']->do_else = false;
?>
				<li class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</span></li>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</ul>
			<?php
}
}
/* {/block 'product_flags'} */
/* {block 'product_name'} */
class Block_21351054816752c4a00fff65_08092988 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			  <h3 itemprop="name"><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="product_name <?php if ($_smarty_tpl->tpl_vars['postheme']->value['name_length'] == 0) {?>one_line<?php }?>" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],50,'...' )), ENT_QUOTES, 'UTF-8');?>
</a></h3> 
			<?php
}
}
/* {/block 'product_name'} */
/* {block 'product_reviews'} */
class Block_11849322456752c4a0103314_81756074 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<div class="hook-reviews">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

				</div>
			<?php
}
}
/* {/block 'product_reviews'} */
/* {block 'product_price_and_shipping'} */
class Block_17012069826752c4a0104452_36602416 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			  <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
				<div class="product-price-and-shipping">
				  <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>


					<span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Regular price','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span>
					<span class="regular-price"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span>
				  <?php }?>

				  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl ) );?>


				  <span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Price','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span>
				  <span itemprop="price" class="price <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>price-sale<?php }?>"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>
				  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'unit_price'),$_smarty_tpl ) );?>


				  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'weight'),$_smarty_tpl ) );?>

				</div>
			  <?php }?>
			<?php
}
}
/* {/block 'product_price_and_shipping'} */
/* {block 'product_description_short'} */
class Block_10733308086752c4a010c6e3_61994984 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<div class="product-desc" itemprop="description"><?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>
</div>
			<?php
}
}
/* {/block 'product_description_short'} */
/* {block 'product_variants'} */
class Block_1662456786752c4a010d382_50863389 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<?php if ($_smarty_tpl->tpl_vars['product']->value['main_variants']) {?>
			<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/variant-links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('variants'=>$_smarty_tpl->tpl_vars['product']->value['main_variants']), 0, false);
?>
			<?php }?>
			<?php
}
}
/* {/block 'product_variants'} */
/* {block 'product_miniature_item'} */
class Block_20563797166752c4a00eb181_86687546 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_miniature_item' => 
  array (
    0 => 'Block_20563797166752c4a00eb181_86687546',
  ),
  'product_thumbnail' => 
  array (
    0 => 'Block_1578140076752c4a00ec2f9_64337565',
  ),
  'quick_view' => 
  array (
    0 => 'Block_5551458606752c4a00f6cc0_41302810',
  ),
  'product_price_and_shipping' => 
  array (
    0 => 'Block_984187206752c4a00f8207_04879046',
    1 => 'Block_17012069826752c4a0104452_36602416',
  ),
  'product_flags' => 
  array (
    0 => 'Block_19032269896752c4a00fc305_50141168',
  ),
  'product_name' => 
  array (
    0 => 'Block_21351054816752c4a00fff65_08092988',
  ),
  'product_reviews' => 
  array (
    0 => 'Block_11849322456752c4a0103314_81756074',
  ),
  'product_description_short' => 
  array (
    0 => 'Block_10733308086752c4a010c6e3_61994984',
  ),
  'product_variants' => 
  array (
    0 => 'Block_1662456786752c4a010d382_50863389',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<article class="style_product_default product-miniature js-product-miniature item_in" data-id-product="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
" itemscope itemtype="http://schema.org/Product">
		<div class="img_block">
		  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1578140076752c4a00ec2f9_64337565', 'product_thumbnail', $this->tplIndex);
?>

			<ul class="add-to-links">			
				<li>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListFunctionalButtons','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

				</li>
				<?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListCompare'),$_smarty_tpl ) );
$_prefixVariable2 = ob_get_clean();
$_smarty_tpl->_assignInScope('displayProductListCompare', $_prefixVariable2);?>
				<?php if ($_smarty_tpl->tpl_vars['displayProductListCompare']->value) {?>
				<li class="compare">	
					 <a href="#" class="poscompare-add compare-button js-poscompare-add"  data-id_product="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product'] )), ENT_QUOTES, 'UTF-8');?>
"   onclick="posCompare.addCompare($(this),<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product'] )), ENT_QUOTES, 'UTF-8');?>
); return false;" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to compare','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to compare','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span></a>
				</li>
				 <?php }?>
				<li class="quick-view">
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5551458606752c4a00f6cc0_41302810', 'quick_view', $this->tplIndex);
?>

				</li>
			</ul> 
			<div class="cart">
				<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/customize/button-cart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, false);
?>
			</div>
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_984187206752c4a00f8207_04879046', 'product_price_and_shipping', $this->tplIndex);
?>

			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19032269896752c4a00fc305_50141168', 'product_flags', $this->tplIndex);
?>

		</div>
		<div class="product_desc">
						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21351054816752c4a00fff65_08092988', 'product_name', $this->tplIndex);
?>

			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11849322456752c4a0103314_81756074', 'product_reviews', $this->tplIndex);
?>
 
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17012069826752c4a0104452_36602416', 'product_price_and_shipping', $this->tplIndex);
?>

			<div class="availability"> 
		   <?php if ($_smarty_tpl->tpl_vars['product']->value['quantity'] > 0) {?>
				<div class="availability-list in-stock"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Availability','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
: <span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'In Stock','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span></div>

		   <?php } else { ?>

				<div class="availability-list out-of-stock"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Availability','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
: <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Out of stock','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span></div> 
			<?php }?>
			</div>
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10733308086752c4a010c6e3_61994984', 'product_description_short', $this->tplIndex);
?>

		
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1662456786752c4a010d382_50863389', 'product_variants', $this->tplIndex);
?>

		
		</div>
	</article>
<?php
}
}
/* {/block 'product_miniature_item'} */
/* {block 'product_thumbnail'} */
class Block_8472482456752c4a01117a7_27982661 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail">
			  <img class="first-image "
    			width="360" 
    			height="360" 
				src = "<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
" 
				alt = "<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['cover']['legend'])) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],30,'...' )), ENT_QUOTES, 'UTF-8');
}?>"
				data-full-size-image-url = "<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
			  >
			   <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"rotatorImg",'product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>
	
			</a>
		  <?php
}
}
/* {/block 'product_thumbnail'} */
/* {block 'quick_view'} */
class Block_11544475526752c4a0119ac3_92765948 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<a class="quick_view" href="#" data-link-action="quickview" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quick view','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
">
					 <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quick view','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
					</a>
					<?php
}
}
/* {/block 'quick_view'} */
/* {block 'product_price_and_shipping'} */
class Block_12078416676752c4a011ad13_01198888 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			  <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
				<div class="product-price-and-shipping-top">
				  <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
					<?php if ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'percentage') {?>
					  <span class="discount-percentage discount-product"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['discount_percentage'], ENT_QUOTES, 'UTF-8');?>
</span>
					<?php } elseif ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'amount') {?>
					  <span class="discount-amount discount-product"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['discount_amount_to_display'], ENT_QUOTES, 'UTF-8');?>
</span>
					<?php }?>
				  <?php }?>
				</div>
			  <?php }?>
			<?php
}
}
/* {/block 'product_price_and_shipping'} */
/* {block 'product_flags'} */
class Block_9611345046752c4a01240b7_99937100 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<ul class="product-flag">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
$_smarty_tpl->tpl_vars['flag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
$_smarty_tpl->tpl_vars['flag']->do_else = false;
?>
				<li class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</span></li>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</ul>
			<?php
}
}
/* {/block 'product_flags'} */
/* {block 'product_name'} */
class Block_4774056816752c4a0126e13_08760432 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<h3 itemprop="name"><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="product_name <?php if ($_smarty_tpl->tpl_vars['postheme']->value['name_length'] == 0) {?>one_line<?php }?>" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],50,'...' )), ENT_QUOTES, 'UTF-8');?>
</a></h3>
			<?php
}
}
/* {/block 'product_name'} */
/* {block 'product_reviews'} */
class Block_11077018066752c4a012a5c7_21974241 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<div class="hook-reviews">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

				</div>
			<?php
}
}
/* {/block 'product_reviews'} */
/* {block 'product_price_and_shipping'} */
class Block_1168834576752c4a012b368_31595569 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			  <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
				<div class="product-price-and-shipping">
				  <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>


					<span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Regular price','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span>
					<span class="regular-price"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span>
				  <?php }?>

				  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl ) );?>


				  <span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Price','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span>
				  <span itemprop="price" class="price <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>price-sale<?php }?>"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>
				  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'unit_price'),$_smarty_tpl ) );?>


				  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'weight'),$_smarty_tpl ) );?>

				</div>
			  <?php }?>
			<?php
}
}
/* {/block 'product_price_and_shipping'} */
/* {block 'product_description_short'} */
class Block_992818486752c4a0135aa6_58745852 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<div class="product-desc" itemprop="description"><?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>
</div>
			<?php
}
}
/* {/block 'product_description_short'} */
/* {block 'product_variants'} */
class Block_11856546516752c4a0137532_13603592 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<?php if ($_smarty_tpl->tpl_vars['product']->value['main_variants']) {?>
			<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/variant-links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('variants'=>$_smarty_tpl->tpl_vars['product']->value['main_variants']), 0, true);
?>
			<?php }?>
			<?php
}
}
/* {/block 'product_variants'} */
/* {block 'product_miniature_item'} */
class Block_655701016752c4a01109c3_35204349 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_miniature_item' => 
  array (
    0 => 'Block_655701016752c4a01109c3_35204349',
  ),
  'product_thumbnail' => 
  array (
    0 => 'Block_8472482456752c4a01117a7_27982661',
  ),
  'quick_view' => 
  array (
    0 => 'Block_11544475526752c4a0119ac3_92765948',
  ),
  'product_price_and_shipping' => 
  array (
    0 => 'Block_12078416676752c4a011ad13_01198888',
    1 => 'Block_1168834576752c4a012b368_31595569',
  ),
  'product_flags' => 
  array (
    0 => 'Block_9611345046752c4a01240b7_99937100',
  ),
  'product_name' => 
  array (
    0 => 'Block_4774056816752c4a0126e13_08760432',
  ),
  'product_reviews' => 
  array (
    0 => 'Block_11077018066752c4a012a5c7_21974241',
  ),
  'product_description_short' => 
  array (
    0 => 'Block_992818486752c4a0135aa6_58745852',
  ),
  'product_variants' => 
  array (
    0 => 'Block_11856546516752c4a0137532_13603592',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<article class="product-miniature js-product-miniature style_product1" data-id-product="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
" itemscope itemtype="http://schema.org/Product">
		<div class="img_block">
		  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8472482456752c4a01117a7_27982661', 'product_thumbnail', $this->tplIndex);
?>

			<ul class="add-to-links">
				<li>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListFunctionalButtons','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

				</li>
				<?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListCompare'),$_smarty_tpl ) );
$_prefixVariable3 = ob_get_clean();
$_smarty_tpl->_assignInScope('displayProductListCompare', $_prefixVariable3);?>
				<?php if ($_smarty_tpl->tpl_vars['displayProductListCompare']->value) {?>
				<li class="compare">	
					 <a href="#" class="poscompare-add compare-button js-poscompare-add"  data-id_product="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product'] )), ENT_QUOTES, 'UTF-8');?>
"   onclick="posCompare.addCompare($(this),<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product'] )), ENT_QUOTES, 'UTF-8');?>
); return false;" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to compare','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to compare','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span></a>
				</li>
				 <?php }?>
				<li class="quick-view">
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11544475526752c4a0119ac3_92765948', 'quick_view', $this->tplIndex);
?>

				</li>
				
			</ul> 
			
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12078416676752c4a011ad13_01198888', 'product_price_and_shipping', $this->tplIndex);
?>

			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9611345046752c4a01240b7_99937100', 'product_flags', $this->tplIndex);
?>

		</div>
		<div class="product_desc">
		    			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4774056816752c4a0126e13_08760432', 'product_name', $this->tplIndex);
?>

			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11077018066752c4a012a5c7_21974241', 'product_reviews', $this->tplIndex);
?>
 
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1168834576752c4a012b368_31595569', 'product_price_and_shipping', $this->tplIndex);
?>

			<div class="cart">
				<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/customize/button-cart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
			</div>
			<div class="availability"> 
		   <?php if ($_smarty_tpl->tpl_vars['product']->value['quantity'] > 0) {?>
				<div class="availability-list in-stock"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Availability','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
: <span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'In Stock','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span></div>

		   <?php } else { ?>

				<div class="availability-list out-of-stock"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Availability','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
: <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Out of stock','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span></div> 
			<?php }?>
			</div>
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_992818486752c4a0135aa6_58745852', 'product_description_short', $this->tplIndex);
?>

		
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11856546516752c4a0137532_13603592', 'product_variants', $this->tplIndex);
?>

		
		</div>
	</article>
<?php
}
}
/* {/block 'product_miniature_item'} */
/* {block 'product_thumbnail'} */
class Block_20168136606752c4a013be29_38793152 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail">
			  <img class="first-image"
			    width="360" 
			    height="360" 
				src = "<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
				alt = "<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['cover']['legend'])) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],30,'...' )), ENT_QUOTES, 'UTF-8');
}?>"
				data-full-size-image-url = "<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
			  >
			   <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"rotatorImg",'product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>
	
			</a>
		  <?php
}
}
/* {/block 'product_thumbnail'} */
/* {block 'quick_view'} */
class Block_7224620036752c4a0143942_34348571 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<a class="quick_view" href="#" data-link-action="quickview" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quick view','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
">
					  <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quick view','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
					</a>
					<?php
}
}
/* {/block 'quick_view'} */
/* {block 'product_price_and_shipping'} */
class Block_11038327436752c4a0145782_00658577 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			  <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
				<div class="product-price-and-shipping-top">
				  <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
					<?php if ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'percentage') {?>
					  <span class="discount-percentage discount-product"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['discount_percentage'], ENT_QUOTES, 'UTF-8');?>
</span>
					<?php } elseif ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'amount') {?>
					  <span class="discount-amount discount-product"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['discount_amount_to_display'], ENT_QUOTES, 'UTF-8');?>
</span>
					<?php }?>
				  <?php }?>
				</div>
			  <?php }?>
			<?php
}
}
/* {/block 'product_price_and_shipping'} */
/* {block 'product_flags'} */
class Block_21190036156752c4a0148d36_52449900 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<ul class="product-flag">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
$_smarty_tpl->tpl_vars['flag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
$_smarty_tpl->tpl_vars['flag']->do_else = false;
?>
				<li class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</span></li>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</ul>
			<?php
}
}
/* {/block 'product_flags'} */
/* {block 'product_name'} */
class Block_18679855406752c4a014b967_35794347 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<h3 itemprop="name"><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="product_name <?php if ($_smarty_tpl->tpl_vars['postheme']->value['name_length'] == 0) {?>one_line<?php }?>" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],50,'...' )), ENT_QUOTES, 'UTF-8');?>
</a></h3>
			<?php
}
}
/* {/block 'product_name'} */
/* {block 'product_reviews'} */
class Block_14040276376752c4a014dd52_26753501 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<div class="hook-reviews">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

				</div>
			<?php
}
}
/* {/block 'product_reviews'} */
/* {block 'product_price_and_shipping'} */
class Block_8468528776752c4a014f261_17420045 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			  <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
				<div class="product-price-and-shipping">
				  <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>


					<span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Regular price','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span>
					<span class="regular-price"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span>
				  <?php }?>

				  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl ) );?>


				  <span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Price','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span>
				  <span itemprop="price" class="price <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>price-sale<?php }?>"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>
				  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'unit_price'),$_smarty_tpl ) );?>


				  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'weight'),$_smarty_tpl ) );?>

				</div>
			  <?php }?>
			<?php
}
}
/* {/block 'product_price_and_shipping'} */
/* {block 'product_description_short'} */
class Block_7956171016752c4a0157707_27829358 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<div class="product-desc" itemprop="description"><?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>
</div>
			<?php
}
}
/* {/block 'product_description_short'} */
/* {block 'product_variants'} */
class Block_2956230306752c4a0158352_11803774 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<?php if ($_smarty_tpl->tpl_vars['product']->value['main_variants']) {?>
			<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/variant-links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('variants'=>$_smarty_tpl->tpl_vars['product']->value['main_variants']), 0, true);
?>
			<?php }?>
			<?php
}
}
/* {/block 'product_variants'} */
/* {block 'product_miniature_item'} */
class Block_2366928206752c4a013aed0_15565746 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_miniature_item' => 
  array (
    0 => 'Block_2366928206752c4a013aed0_15565746',
  ),
  'product_thumbnail' => 
  array (
    0 => 'Block_20168136606752c4a013be29_38793152',
  ),
  'quick_view' => 
  array (
    0 => 'Block_7224620036752c4a0143942_34348571',
  ),
  'product_price_and_shipping' => 
  array (
    0 => 'Block_11038327436752c4a0145782_00658577',
    1 => 'Block_8468528776752c4a014f261_17420045',
  ),
  'product_flags' => 
  array (
    0 => 'Block_21190036156752c4a0148d36_52449900',
  ),
  'product_name' => 
  array (
    0 => 'Block_18679855406752c4a014b967_35794347',
  ),
  'product_reviews' => 
  array (
    0 => 'Block_14040276376752c4a014dd52_26753501',
  ),
  'product_description_short' => 
  array (
    0 => 'Block_7956171016752c4a0157707_27829358',
  ),
  'product_variants' => 
  array (
    0 => 'Block_2956230306752c4a0158352_11803774',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<article class="product-miniature js-product-miniature style_product2" data-id-product="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
" itemscope itemtype="http://schema.org/Product">
		<div class="img_block">
		  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20168136606752c4a013be29_38793152', 'product_thumbnail', $this->tplIndex);
?>

			<ul class="add-to-links">
				<li>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListFunctionalButtons','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

				</li>
				<?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListCompare'),$_smarty_tpl ) );
$_prefixVariable4 = ob_get_clean();
$_smarty_tpl->_assignInScope('displayProductListCompare', $_prefixVariable4);?>
				<?php if ($_smarty_tpl->tpl_vars['displayProductListCompare']->value) {?>
				<li class="compare">	
					 <a href="#" class="poscompare-add compare-button js-poscompare-add"  data-id_product="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product'] )), ENT_QUOTES, 'UTF-8');?>
"   onclick="posCompare.addCompare($(this),<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product'] )), ENT_QUOTES, 'UTF-8');?>
); return false;" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to compare','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to compare','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span></a>
				</li>
				 <?php }?>
				<li class="quick-view">
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7224620036752c4a0143942_34348571', 'quick_view', $this->tplIndex);
?>

				</li>
				<li class="cart"> 
					<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/customize/button-cart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
				</li>
			</ul> 
		
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11038327436752c4a0145782_00658577', 'product_price_and_shipping', $this->tplIndex);
?>

			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21190036156752c4a0148d36_52449900', 'product_flags', $this->tplIndex);
?>

		</div>
		<div class="product_desc">
		    			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18679855406752c4a014b967_35794347', 'product_name', $this->tplIndex);
?>

			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14040276376752c4a014dd52_26753501', 'product_reviews', $this->tplIndex);
?>
 
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8468528776752c4a014f261_17420045', 'product_price_and_shipping', $this->tplIndex);
?>

			<div class="availability"> 
		   <?php if ($_smarty_tpl->tpl_vars['product']->value['quantity'] > 0) {?>
				<div class="availability-list in-stock"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Availability','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
: <span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'In Stock','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span></div>

		   <?php } else { ?>

				<div class="availability-list out-of-stock"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Availability','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
: <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Out of stock','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span></div> 
			<?php }?>
			</div>
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7956171016752c4a0157707_27829358', 'product_description_short', $this->tplIndex);
?>

		
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2956230306752c4a0158352_11803774', 'product_variants', $this->tplIndex);
?>

		
		</div>
	</article>
<?php
}
}
/* {/block 'product_miniature_item'} */
/* {block 'product_thumbnail'} */
class Block_16277525726752c4a015c4a1_34778373 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail">
			  <img class="first-image"
			    width="360" 
  			    height="360" 
				src = "<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
" 
				alt = "<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['cover']['legend'])) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],30,'...' )), ENT_QUOTES, 'UTF-8');
}?>"
				data-full-size-image-url = "<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
			  >
			   <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"rotatorImg",'product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>
	
			</a>
		  <?php
}
}
/* {/block 'product_thumbnail'} */
/* {block 'quick_view'} */
class Block_19001844936752c4a016c352_46824659 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<a class="quick_view" href="#" data-link-action="quickview" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quick view','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
">
					 <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quick view','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
					</a>
					<?php
}
}
/* {/block 'quick_view'} */
/* {block 'product_price_and_shipping'} */
class Block_16844530106752c4a016dca1_84220417 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			  <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
				<div class="product-price-and-shipping-top">
				  <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
					<?php if ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'percentage') {?>
					  <span class="discount-percentage discount-product"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['discount_percentage'], ENT_QUOTES, 'UTF-8');?>
</span>
					<?php } elseif ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'amount') {?>
					  <span class="discount-amount discount-product"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['discount_amount_to_display'], ENT_QUOTES, 'UTF-8');?>
</span>
					<?php }?>
				  <?php }?>
				</div>
			  <?php }?>
			<?php
}
}
/* {/block 'product_price_and_shipping'} */
/* {block 'product_flags'} */
class Block_3598624226752c4a01740f4_70155662 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<ul class="product-flag">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
$_smarty_tpl->tpl_vars['flag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
$_smarty_tpl->tpl_vars['flag']->do_else = false;
?>
				<li class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</span></li>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</ul>
			<?php
}
}
/* {/block 'product_flags'} */
/* {block 'product_name'} */
class Block_19018298456752c4a0176162_07213049 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<h3 itemprop="name"><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="product_name <?php if ($_smarty_tpl->tpl_vars['postheme']->value['name_length'] == 0) {?>one_line<?php }?>" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],50,'...' )), ENT_QUOTES, 'UTF-8');?>
</a></h3>
			<?php
}
}
/* {/block 'product_name'} */
/* {block 'product_reviews'} */
class Block_15276529966752c4a017aef2_70674675 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<div class="hook-reviews">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

				</div>
			<?php
}
}
/* {/block 'product_reviews'} */
/* {block 'product_price_and_shipping'} */
class Block_18136993686752c4a017ca92_60912113 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			  <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
				<div class="product-price-and-shipping">
				  <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>


					<span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Regular price','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span>
					<span class="regular-price"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span>
				  <?php }?>

				  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl ) );?>


				  <span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Price','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span>
				  <span itemprop="price" class="price <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>price-sale<?php }?>"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>
				  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'unit_price'),$_smarty_tpl ) );?>


				  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'weight'),$_smarty_tpl ) );?>

				</div>
			  <?php }?>
			<?php
}
}
/* {/block 'product_price_and_shipping'} */
/* {block 'product_description_short'} */
class Block_5847803856752c4a0189399_47048536 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<div class="product-desc" itemprop="description"><?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>
</div>
			<?php
}
}
/* {/block 'product_description_short'} */
/* {block 'product_variants'} */
class Block_7612081476752c4a018aac5_50483453 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<?php if ($_smarty_tpl->tpl_vars['product']->value['main_variants']) {?>
			<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/variant-links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('variants'=>$_smarty_tpl->tpl_vars['product']->value['main_variants']), 0, true);
?>
			<?php }?>
			<?php
}
}
/* {/block 'product_variants'} */
/* {block 'product_miniature_item'} */
class Block_2932686986752c4a015b747_29643004 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_miniature_item' => 
  array (
    0 => 'Block_2932686986752c4a015b747_29643004',
  ),
  'product_thumbnail' => 
  array (
    0 => 'Block_16277525726752c4a015c4a1_34778373',
  ),
  'quick_view' => 
  array (
    0 => 'Block_19001844936752c4a016c352_46824659',
  ),
  'product_price_and_shipping' => 
  array (
    0 => 'Block_16844530106752c4a016dca1_84220417',
    1 => 'Block_18136993686752c4a017ca92_60912113',
  ),
  'product_flags' => 
  array (
    0 => 'Block_3598624226752c4a01740f4_70155662',
  ),
  'product_name' => 
  array (
    0 => 'Block_19018298456752c4a0176162_07213049',
  ),
  'product_reviews' => 
  array (
    0 => 'Block_15276529966752c4a017aef2_70674675',
  ),
  'product_description_short' => 
  array (
    0 => 'Block_5847803856752c4a0189399_47048536',
  ),
  'product_variants' => 
  array (
    0 => 'Block_7612081476752c4a018aac5_50483453',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<article class="product-miniature js-product-miniature style_product3" data-id-product="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
" itemscope itemtype="http://schema.org/Product">
		<div class="img_block">
		  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16277525726752c4a015c4a1_34778373', 'product_thumbnail', $this->tplIndex);
?>

			<ul class="add-to-links">
				<li>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListFunctionalButtons','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

				</li>
				<?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListCompare'),$_smarty_tpl ) );
$_prefixVariable5 = ob_get_clean();
$_smarty_tpl->_assignInScope('displayProductListCompare', $_prefixVariable5);?>
				<?php if ($_smarty_tpl->tpl_vars['displayProductListCompare']->value) {?>
				<li class="compare">	
					 <a href="#" class="poscompare-add compare-button js-poscompare-add"  data-id_product="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product'] )), ENT_QUOTES, 'UTF-8');?>
"   onclick="posCompare.addCompare($(this),<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product'] )), ENT_QUOTES, 'UTF-8');?>
); return false;" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to compare','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to compare','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span></a>
				</li>
				 <?php }?>
				<li class="quick-view">
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19001844936752c4a016c352_46824659', 'quick_view', $this->tplIndex);
?>

				</li>
				<li class="cart">
					<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/customize/button-cart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
				</li>
			</ul> 
			
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16844530106752c4a016dca1_84220417', 'product_price_and_shipping', $this->tplIndex);
?>

			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3598624226752c4a01740f4_70155662', 'product_flags', $this->tplIndex);
?>

		</div>
		<div class="product_desc">
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19018298456752c4a0176162_07213049', 'product_name', $this->tplIndex);
?>

						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15276529966752c4a017aef2_70674675', 'product_reviews', $this->tplIndex);
?>
 
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18136993686752c4a017ca92_60912113', 'product_price_and_shipping', $this->tplIndex);
?>

			<div class="availability"> 
		   <?php if ($_smarty_tpl->tpl_vars['product']->value['quantity'] > 0) {?>
				<div class="availability-list in-stock"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Availability','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
: <span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'In Stock','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span></div>

		   <?php } else { ?>

				<div class="availability-list out-of-stock"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Availability','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
: <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Out of stock','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span></div> 
			<?php }?>
			</div>
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5847803856752c4a0189399_47048536', 'product_description_short', $this->tplIndex);
?>

		
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7612081476752c4a018aac5_50483453', 'product_variants', $this->tplIndex);
?>

		
		</div>
	</article>
	<?php
}
}
/* {/block 'product_miniature_item'} */
}
