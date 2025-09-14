<div class="modal fade js-product-images-modal" id="product-modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        {assign var=imagesCount value=$product.images|count}
		 <div class="view-products">
			<figure>
			  <img loading="lazy" class="js-modal-product-cover product-cover-modal" width="{$product.cover.large.width}" src="{$product.cover.large.url}" alt="{$product.cover.legend}" title="{$product.cover.legend}" itemprop="image">
			  <figcaption class="image-caption">
			  {block name='product_description_short'}
				<div id="product-description-short" itemprop="description">{$product.description_short nofilter}</div>
			  {/block}
			</figcaption>
			</figure>
		</div>
        <aside id="thumbnails_modal">
          {block name='product_images'}
			{foreach from=$product.images item=image}
			  <div class="thumb-container">
				<img loading="lazy" data-image-large-src="{$image.large.url}" class="thumb js-modal-thumb" src="{$image.medium.url}" alt="{$image.legend}" title="{$image.legend}" width="{$image.medium.width}" itemprop="image">
			  </div>
			{/foreach}
          {/block}
        </aside>
      </div>
    </div>
  </div>
</div>