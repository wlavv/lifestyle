
<div class="pos_new_product col-lg-3 col-md-12 col-sm-12  col-xs-12" 
	data-items="{$slider_options.number_item}" 
	data-speed="{$slider_options.speed_slide}"
	data-autoplay="{$slider_options.auto_play}"
	data-time="{$slider_options.auto_time}"
	data-arrow="{$slider_options.show_arrow}"
	data-pagination="{$slider_options.show_pagination}"
	data-move="{$slider_options.move}"
	data-pausehover="{$slider_options.pausehover}"
	data-lg="{$slider_options.items_lg}" 
	data-md="{$slider_options.items_md}"
	data-sm="{$slider_options.items_sm}"
	data-xs="{$slider_options.items_xs}"
	data-xxs="{$slider_options.items_xxs}">
	
	<div class="pos_title_column">
		{if $title}
		 <h2>
			{$title}
		</h2>
		{/if}
		{if $desc}
		<div class="desc_title">
			{$desc} 
		</div>
		{/if}		
	</div>

	{$rows= $slider_options.rows}
	<div class="row pos_content">
		<div class="newSlide owl-carousel ">
		{foreach from=$products item=product name=myLoop}
			{if $smarty.foreach.myLoop.index % $rows == 0 || $smarty.foreach.myLoop.first }
			<div class="item-product"> 
			{/if}
				<article class="product-miniature js-product-miniature item_in" data-id-product="{$product.id_product}" data-id-product-attribute="{$product.id_product_attribute}" itemscope itemtype="http://schema.org/Product">
					<div class="img_block">
					  {block name='product_thumbnail'}
						<a href="{$product.url}" class="thumbnail product-thumbnail">
						  <img class="first-image "
						  src="{$product.cover.bySize.home_default.url}" 
							alt = "{if !empty($product.cover.legend)}{$product.cover.legend}{else}{$product.name|truncate:30:'...'}{/if}"
							data-full-size-image-url = "{$product.cover.large.url}"
						  >
						   {hook h="rotatorImg" product=$product}	
						</a>
					  {/block}
						
						{block name='product_price_and_shipping'}
						  {if $product.show_price}
							<div class="product-price-and-shipping-top">
							  {if $product.has_discount}
								{if $product.discount_type === 'percentage'}
								  <span class="discount-percentage discount-product">{$product.discount_percentage}</span>
								{elseif $product.discount_type === 'amount'}
								  <span class="discount-amount discount-product">{$product.discount_amount_to_display}</span>
								{/if}
							  {/if}
							</div>
						  {/if}
						{/block}
						{block name='product_flags'}
						<ul class="product-flag">
						{foreach from=$product.flags item=flag}
							<li class="{$flag.type}"><span>{$flag.label}</span></li>
						{/foreach}
						</ul>
						{/block}
					</div>
					<div class="product_desc">
						{if isset($product.id_manufacturer)}
							<div class="manufacturer"><a href="{$link->getManufacturerLink($product.id_manufacturer)}">{Manufacturer::getnamebyid($product.id_manufacturer)}</a></div>
						{/if}
						{block name='product_name'}
						  <h3 itemprop="name"><a href="{$product.url}" class="product_name {if $postheme.name_length ==0 }one_line{/if}" title="{$product.name}">{$product.name|truncate:50:'...'}</a></h3> 
						{/block}						
						{block name='product_reviews'}
							<div class="hook-reviews">
							{hook h='displayProductListReviews' product=$product}
							</div>
						{/block} 
						{block name='product_price_and_shipping'}
						  {if $product.show_price}
							<div class="product-price-and-shipping">
							  {if $product.has_discount}
								{hook h='displayProductPriceBlock' product=$product type="old_price"}

								<span class="sr-only">{l s='Regular price' d='Shop.Theme.Catalog'}</span>
								<span class="regular-price">{$product.regular_price}</span>
							  {/if}

							  {hook h='displayProductPriceBlock' product=$product type="before_price"}

							  <span class="sr-only">{l s='Price' d='Shop.Theme.Catalog'}</span>
							  <span itemprop="price" class="price {if $product.has_discount}price-sale{/if}">{$product.price}</span>
							  {hook h='displayProductPriceBlock' product=$product type='unit_price'}

							  {hook h='displayProductPriceBlock' product=$product type='weight'}
							</div>
						  {/if}
						{/block}
					</div>
				</article>
			{if $smarty.foreach.myLoop.iteration % $rows == 0 || $smarty.foreach.myLoop.last  }
			</div>
			{/if}
		{/foreach}
		</div>
	</div>
</div>

