<div id="js-product-list" data-cate="{$postheme.cate_product_per_row}" data-type="{$postheme.grid_type}" data-list="{$postheme.cate_default_display}">
   <div class="row product_content grid {if isset($smarty.cookies.show_list)}list {/if}">
    {foreach from=$listing.products item="product"}
      {block name='product_miniature'}
	  	<div class="item-product col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-4">
			{include file='catalog/_partials/miniatures/product.tpl' product=$product}
		</div>
      {/block}
    {/foreach}
  </div>
  {block name='pagination'}
    {include file='_partials/pagination.tpl' pagination=$listing.pagination}
  {/block}
</div>
