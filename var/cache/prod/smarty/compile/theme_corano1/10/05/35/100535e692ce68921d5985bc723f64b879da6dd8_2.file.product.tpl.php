<?php
/* Smarty version 4.3.4, created on 2024-10-20 10:22:23
  from 'C:\xampp\htdocs\lifestyle\themes\theme_corano1\templates\catalog\_partials\miniatures\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6714cbcf029da5_98260463',
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
function content_6714cbcf029da5_98260463 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

 <!-- style products default -->
 <?php if ($_smarty_tpl->tpl_vars['postheme']->value['grid_type'] == 0) {?>
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5651679996714cbcef08a23_35482374', 'product_miniature_item');
?>

 <!-- end style products default --> 
 
 <!-- style products default type 1 -->
<?php } elseif ($_smarty_tpl->tpl_vars['postheme']->value['grid_type'] == 1) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4507125806714cbcef1fde4_66681726', 'product_miniature_item');
?>

 <!-- end style products default type 1 -->
 
  <!-- style products default type 2 -->
<?php } elseif ($_smarty_tpl->tpl_vars['postheme']->value['grid_type'] == 2) {?>
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20307352436714cbcef3a988_32487531', 'product_miniature_item');
?>

 <!-- end style products default type 2 -->
 
 <!-- style products default type 3 -->
<?php } elseif ($_smarty_tpl->tpl_vars['postheme']->value['grid_type'] == 3) {?>
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7120963376714cbcf00eb27_10324111', 'product_miniature_item');
?>


<?php }?>
 <!-- end style products default type 3 --><?php }
/* {block 'product_thumbnail'} */
class Block_16811815756714cbcef097b6_48665780 extends Smarty_Internal_Block
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
class Block_17393935766714cbcef0f5b6_92669400 extends Smarty_Internal_Block
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
class Block_15212897176714cbcef10857_81377516 extends Smarty_Internal_Block
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
class Block_3434396226714cbcef13148_75161277 extends Smarty_Internal_Block
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
class Block_11035609616714cbcef14e43_47137323 extends Smarty_Internal_Block
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
class Block_6387525726714cbcef16dc0_48793353 extends Smarty_Internal_Block
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
class Block_6577732936714cbcef177f3_35713806 extends Smarty_Internal_Block
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
class Block_3784293466714cbcef1d430_11325956 extends Smarty_Internal_Block
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
class Block_13685932666714cbcef1df92_61637205 extends Smarty_Internal_Block
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
class Block_5651679996714cbcef08a23_35482374 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_miniature_item' => 
  array (
    0 => 'Block_5651679996714cbcef08a23_35482374',
  ),
  'product_thumbnail' => 
  array (
    0 => 'Block_16811815756714cbcef097b6_48665780',
  ),
  'quick_view' => 
  array (
    0 => 'Block_17393935766714cbcef0f5b6_92669400',
  ),
  'product_price_and_shipping' => 
  array (
    0 => 'Block_15212897176714cbcef10857_81377516',
    1 => 'Block_6577732936714cbcef177f3_35713806',
  ),
  'product_flags' => 
  array (
    0 => 'Block_3434396226714cbcef13148_75161277',
  ),
  'product_name' => 
  array (
    0 => 'Block_11035609616714cbcef14e43_47137323',
  ),
  'product_reviews' => 
  array (
    0 => 'Block_6387525726714cbcef16dc0_48793353',
  ),
  'product_description_short' => 
  array (
    0 => 'Block_3784293466714cbcef1d430_11325956',
  ),
  'product_variants' => 
  array (
    0 => 'Block_13685932666714cbcef1df92_61637205',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<article class="style_product_default product-miniature js-product-miniature item_in" data-id-product="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
" itemscope itemtype="http://schema.org/Product">
		<div class="img_block">
		  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16811815756714cbcef097b6_48665780', 'product_thumbnail', $this->tplIndex);
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17393935766714cbcef0f5b6_92669400', 'quick_view', $this->tplIndex);
?>

				</li>
			</ul> 
			<div class="cart">
				<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/customize/button-cart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, false);
?>
			</div>
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15212897176714cbcef10857_81377516', 'product_price_and_shipping', $this->tplIndex);
?>

			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3434396226714cbcef13148_75161277', 'product_flags', $this->tplIndex);
?>

		</div>
		<div class="product_desc">
						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11035609616714cbcef14e43_47137323', 'product_name', $this->tplIndex);
?>

			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6387525726714cbcef16dc0_48793353', 'product_reviews', $this->tplIndex);
?>
 
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6577732936714cbcef177f3_35713806', 'product_price_and_shipping', $this->tplIndex);
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3784293466714cbcef1d430_11325956', 'product_description_short', $this->tplIndex);
?>

		
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13685932666714cbcef1df92_61637205', 'product_variants', $this->tplIndex);
?>

		
		</div>
	</article>
<?php
}
}
/* {/block 'product_miniature_item'} */
/* {block 'product_thumbnail'} */
class Block_8749546036714cbcef20979_71476982 extends Smarty_Internal_Block
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
class Block_7251596786714cbcef285c5_92866481 extends Smarty_Internal_Block
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
class Block_531342396714cbcef29a51_96034069 extends Smarty_Internal_Block
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
class Block_1623579956714cbcef2c6f4_52259103 extends Smarty_Internal_Block
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
class Block_8041715286714cbcef2e198_40706466 extends Smarty_Internal_Block
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
class Block_2630471406714cbcef30011_87385665 extends Smarty_Internal_Block
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
class Block_20128022496714cbcef30a52_05883361 extends Smarty_Internal_Block
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
class Block_14666828636714cbcef37c99_01575864 extends Smarty_Internal_Block
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
class Block_9379965896714cbcef387c2_07965160 extends Smarty_Internal_Block
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
class Block_4507125806714cbcef1fde4_66681726 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_miniature_item' => 
  array (
    0 => 'Block_4507125806714cbcef1fde4_66681726',
  ),
  'product_thumbnail' => 
  array (
    0 => 'Block_8749546036714cbcef20979_71476982',
  ),
  'quick_view' => 
  array (
    0 => 'Block_7251596786714cbcef285c5_92866481',
  ),
  'product_price_and_shipping' => 
  array (
    0 => 'Block_531342396714cbcef29a51_96034069',
    1 => 'Block_20128022496714cbcef30a52_05883361',
  ),
  'product_flags' => 
  array (
    0 => 'Block_1623579956714cbcef2c6f4_52259103',
  ),
  'product_name' => 
  array (
    0 => 'Block_8041715286714cbcef2e198_40706466',
  ),
  'product_reviews' => 
  array (
    0 => 'Block_2630471406714cbcef30011_87385665',
  ),
  'product_description_short' => 
  array (
    0 => 'Block_14666828636714cbcef37c99_01575864',
  ),
  'product_variants' => 
  array (
    0 => 'Block_9379965896714cbcef387c2_07965160',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<article class="product-miniature js-product-miniature style_product1" data-id-product="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
" itemscope itemtype="http://schema.org/Product">
		<div class="img_block">
		  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8749546036714cbcef20979_71476982', 'product_thumbnail', $this->tplIndex);
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7251596786714cbcef285c5_92866481', 'quick_view', $this->tplIndex);
?>

				</li>
				
			</ul> 
			
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_531342396714cbcef29a51_96034069', 'product_price_and_shipping', $this->tplIndex);
?>

			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1623579956714cbcef2c6f4_52259103', 'product_flags', $this->tplIndex);
?>

		</div>
		<div class="product_desc">
		    			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8041715286714cbcef2e198_40706466', 'product_name', $this->tplIndex);
?>

			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2630471406714cbcef30011_87385665', 'product_reviews', $this->tplIndex);
?>
 
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20128022496714cbcef30a52_05883361', 'product_price_and_shipping', $this->tplIndex);
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14666828636714cbcef37c99_01575864', 'product_description_short', $this->tplIndex);
?>

		
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9379965896714cbcef387c2_07965160', 'product_variants', $this->tplIndex);
?>

		
		</div>
	</article>
<?php
}
}
/* {/block 'product_miniature_item'} */
/* {block 'product_thumbnail'} */
class Block_15283112116714cbcef3b559_48683634 extends Smarty_Internal_Block
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
class Block_9915637026714cbcef40e88_54960949 extends Smarty_Internal_Block
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
class Block_5659336496714cbcef42090_51143092 extends Smarty_Internal_Block
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
class Block_4469005386714cbcf0024d4_95648165 extends Smarty_Internal_Block
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
class Block_15798554926714cbcf003cb2_90352031 extends Smarty_Internal_Block
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
class Block_14298292296714cbcf005ae3_98627285 extends Smarty_Internal_Block
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
class Block_835519166714cbcf006654_39452382 extends Smarty_Internal_Block
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
class Block_21110414686714cbcf00c1a5_55612787 extends Smarty_Internal_Block
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
class Block_10177821536714cbcf00cc37_02044025 extends Smarty_Internal_Block
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
class Block_20307352436714cbcef3a988_32487531 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_miniature_item' => 
  array (
    0 => 'Block_20307352436714cbcef3a988_32487531',
  ),
  'product_thumbnail' => 
  array (
    0 => 'Block_15283112116714cbcef3b559_48683634',
  ),
  'quick_view' => 
  array (
    0 => 'Block_9915637026714cbcef40e88_54960949',
  ),
  'product_price_and_shipping' => 
  array (
    0 => 'Block_5659336496714cbcef42090_51143092',
    1 => 'Block_835519166714cbcf006654_39452382',
  ),
  'product_flags' => 
  array (
    0 => 'Block_4469005386714cbcf0024d4_95648165',
  ),
  'product_name' => 
  array (
    0 => 'Block_15798554926714cbcf003cb2_90352031',
  ),
  'product_reviews' => 
  array (
    0 => 'Block_14298292296714cbcf005ae3_98627285',
  ),
  'product_description_short' => 
  array (
    0 => 'Block_21110414686714cbcf00c1a5_55612787',
  ),
  'product_variants' => 
  array (
    0 => 'Block_10177821536714cbcf00cc37_02044025',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<article class="product-miniature js-product-miniature style_product2" data-id-product="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
" itemscope itemtype="http://schema.org/Product">
		<div class="img_block">
		  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15283112116714cbcef3b559_48683634', 'product_thumbnail', $this->tplIndex);
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9915637026714cbcef40e88_54960949', 'quick_view', $this->tplIndex);
?>

				</li>
				<li class="cart"> 
					<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/customize/button-cart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
				</li>
			</ul> 
		
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5659336496714cbcef42090_51143092', 'product_price_and_shipping', $this->tplIndex);
?>

			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4469005386714cbcf0024d4_95648165', 'product_flags', $this->tplIndex);
?>

		</div>
		<div class="product_desc">
		    			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15798554926714cbcf003cb2_90352031', 'product_name', $this->tplIndex);
?>

			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14298292296714cbcf005ae3_98627285', 'product_reviews', $this->tplIndex);
?>
 
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_835519166714cbcf006654_39452382', 'product_price_and_shipping', $this->tplIndex);
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21110414686714cbcf00c1a5_55612787', 'product_description_short', $this->tplIndex);
?>

		
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10177821536714cbcf00cc37_02044025', 'product_variants', $this->tplIndex);
?>

		
		</div>
	</article>
<?php
}
}
/* {/block 'product_miniature_item'} */
/* {block 'product_thumbnail'} */
class Block_2085030436714cbcf00f6b8_43258453 extends Smarty_Internal_Block
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
class Block_955563156714cbcf0152e5_14433819 extends Smarty_Internal_Block
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
class Block_336311216714cbcf016654_11653930 extends Smarty_Internal_Block
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
class Block_9394490436714cbcf018d22_14665567 extends Smarty_Internal_Block
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
class Block_15538006426714cbcf01a6d1_28606638 extends Smarty_Internal_Block
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
class Block_7495538806714cbcf01c563_75484882 extends Smarty_Internal_Block
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
class Block_16918238216714cbcf01cf70_39143780 extends Smarty_Internal_Block
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
class Block_10734290166714cbcf022be6_33275506 extends Smarty_Internal_Block
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
class Block_11309767676714cbcf0237b7_87149174 extends Smarty_Internal_Block
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
class Block_7120963376714cbcf00eb27_10324111 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_miniature_item' => 
  array (
    0 => 'Block_7120963376714cbcf00eb27_10324111',
  ),
  'product_thumbnail' => 
  array (
    0 => 'Block_2085030436714cbcf00f6b8_43258453',
  ),
  'quick_view' => 
  array (
    0 => 'Block_955563156714cbcf0152e5_14433819',
  ),
  'product_price_and_shipping' => 
  array (
    0 => 'Block_336311216714cbcf016654_11653930',
    1 => 'Block_16918238216714cbcf01cf70_39143780',
  ),
  'product_flags' => 
  array (
    0 => 'Block_9394490436714cbcf018d22_14665567',
  ),
  'product_name' => 
  array (
    0 => 'Block_15538006426714cbcf01a6d1_28606638',
  ),
  'product_reviews' => 
  array (
    0 => 'Block_7495538806714cbcf01c563_75484882',
  ),
  'product_description_short' => 
  array (
    0 => 'Block_10734290166714cbcf022be6_33275506',
  ),
  'product_variants' => 
  array (
    0 => 'Block_11309767676714cbcf0237b7_87149174',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<article class="product-miniature js-product-miniature style_product3" data-id-product="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
" itemscope itemtype="http://schema.org/Product">
		<div class="img_block">
		  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2085030436714cbcf00f6b8_43258453', 'product_thumbnail', $this->tplIndex);
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_955563156714cbcf0152e5_14433819', 'quick_view', $this->tplIndex);
?>

				</li>
				<li class="cart">
					<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/customize/button-cart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
				</li>
			</ul> 
			
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_336311216714cbcf016654_11653930', 'product_price_and_shipping', $this->tplIndex);
?>

			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9394490436714cbcf018d22_14665567', 'product_flags', $this->tplIndex);
?>

		</div>
		<div class="product_desc">
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15538006426714cbcf01a6d1_28606638', 'product_name', $this->tplIndex);
?>

						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7495538806714cbcf01c563_75484882', 'product_reviews', $this->tplIndex);
?>
 
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16918238216714cbcf01cf70_39143780', 'product_price_and_shipping', $this->tplIndex);
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10734290166714cbcf022be6_33275506', 'product_description_short', $this->tplIndex);
?>

		
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11309767676714cbcf0237b7_87149174', 'product_variants', $this->tplIndex);
?>

		
		</div>
	</article>
	<?php
}
}
/* {/block 'product_miniature_item'} */
}
