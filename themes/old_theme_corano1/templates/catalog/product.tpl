{extends file=$layout}

{block name='head_seo' prepend}
  <link rel="canonical" href="{$product.canonical_url}">
{/block}

{block name='head' append}
  <meta property="og:type" content="product">
  <meta property="og:url" content="{$urls.current_url}">
  <meta property="og:title" content="{$page.meta.title}">
  <meta property="og:site_name" content="{$shop.name}">
  <meta property="og:description" content="{$page.meta.description}">
  
  {assign var="post_image" value="{$base_dir}img/social/{$product.id_product}.jpg"}
  {if file_exists($post_image)}
    <meta property="og:image" content="https://life-style.pt/img/social/{$product.id_product}.jpg?timestamp={rand(0,100)}">
  {else} 
    <meta property="og:image" content="{$product.cover.large.url}">
  {/if}

  <meta property="product:pretax_price:amount" content="{$product.price_tax_exc}">
  <meta property="product:pretax_price:currency" content="{$currency.iso_code}">
  <meta property="product:price:amount" content="{$product.price_amount}">
  <meta property="product:price:currency" content="{$currency.iso_code}">
  {if isset($product.weight) && ($product.weight != 0)}
  <meta property="product:weight:value" content="{$product.weight}">
  <meta property="product:weight:units" content="{$product.weight_unit}">
  {/if}
{/block}

{block name='content'}

  <section id="main" itemscope itemtype="https://schema.org/Product">
    <meta itemprop="url" content="{$product.url}">

    <div class="row">
      <div class="{if $postheme.product_thumbnail == 0}col-md-6 {else} col-md-6 {/if}">
        {block name='page_content_container'}
          <section class="page-content" id="content">
            {block name='page_content'}
            
              {block name='product_cover_thumbnails'}
				{include file='catalog/_partials/product-cover-thumbnails.tpl'}
              {/block}           
            {/block}
          </section>
        {/block}
        </div>
        <div class="{if $postheme.product_thumbnail == 0}col-md-6 {else} col-md-6 {/if}">
			<div class="content_info">
				{block name='page_header_container'}
					{block name='page_header'}
					  <h1 class="h1 namne_details" itemprop="name">{block name='page_title'}{$product.name}{/block}</h1>
					{/block}
				{/block}
				{hook h='DisplayReviewsProduct'}
			  {block name='product_prices'}
				{include file='catalog/_partials/product-prices.tpl'}
			  {/block}

			  <div class="product-information">
				{block name='product_description_short'}
			        {if $product.description_short|count_characters}
				      <div id="product-description-short-{$product.id}" class="product-description-short" itemprop="description">{$product.description_short nofilter}</div>
				    {/if}
				{/block}

				{if $product.is_customizable && count($product.customizations.fields)}
				  {block name='product_customization'}
					{include file="catalog/_partials/product-customization.tpl" customizations=$product.customizations}
				  {/block}
				{/if}

				<div class="product-actions">
				  {block name='product_buy'}
					<form action="{$urls.pages.cart}" method="post" id="add-to-cart-or-refresh">
					  <input type="hidden" name="token" value="{$static_token}">
					  <input type="hidden" name="id_product" value="{$product.id}" id="product_page_product_id">
					  <input type="hidden" name="id_customization" value="{$product.id_customization}" id="product_customization_id">

					  {block name='product_variants'}
						{include file='catalog/_partials/product-variants.tpl'}
					  {/block}

					  {block name='product_pack'}
						{if $packItems}
						  <section class="product-pack">
							<p class="h4">{l s='This pack contains' d='Shop.Theme.Catalog'}</p>
							{foreach from=$packItems item="product_pack"}
							  {block name='product_miniature'}
								{include file='catalog/_partials/miniatures/pack-product.tpl' product=$product_pack}
							  {/block}
							{/foreach}
						</section>
						{/if}
					  {/block}

					  {block name='product_discounts'}
						{include file='catalog/_partials/product-discounts.tpl'}
					  {/block}

					  {block name='product_add_to_cart'}
						{include file='catalog/_partials/product-add-to-cart.tpl'}
					  {/block}

					  {block name='product_additional_info'}
						{include file='catalog/_partials/product-additional-info.tpl'}
					  {/block}

					  {* Input to refresh product HTML removed, block kept for compatibility with themes *}
					  {block name='product_refresh'}{/block}
					</form>
				  {/block}

				</div>

				{*{block name='hook_display_reassurance'}
				  {hook h='displayReassurance'}
				{/block} *}
			</div>
		  </div>
      </div>
    </div>
	<div class="row">
		<div class="col-xs-12">
			{block name='product_tabs'}
            <div class="tabs {if $postheme.product_infotab == 1}tabs-left{else if $postheme.product_infotab == 2} tabs-right {/if}">  
                <ul class="nav nav-tabs" role="tablist">
                  {if $product.description|count_characters}
                    <li class="nav-item">
                       <a
                         class="nav-link{if $product.description} active{/if}"
                         data-toggle="tab"
                         href="#description"
                         role="tab"
                         aria-controls="description"
                         {if $product.description} aria-selected="true"{/if}>{l s='Description' d='Shop.Theme.Catalog'}</a>
                    </li>
                  {/if}
                  <li class="nav-item">
                    <a
                      class="nav-link{if !$product.description} active{/if}"
                      data-toggle="tab"
                      href="#product-details"
                      role="tab"
                      aria-controls="product-details"
                      {if !$product.description} aria-selected="true"{/if}>{l s='Product Details' d='Shop.Theme.Catalog'}</a>
                  </li>
				  {hook h='ProductTab'}
                  {if $product.attachments}
                    <li class="nav-item">
                      <a
                        class="nav-link"
                        data-toggle="tab"
                        href="#attachments"
                        role="tab"
                        aria-controls="attachments">{l s='Attachments' d='Shop.Theme.Catalog'}</a>
                    </li>
                  {/if}
                  {foreach from=$product.extraContent item=extra key=extraKey}
                    <li class="nav-item">
                      <a
                        class="nav-link"
                        data-toggle="tab"
                        href="#extra-{$extraKey}"
                        role="tab"
                        aria-controls="extra-{$extraKey}">{$extra.title}</a>
                    </li>
                  {/foreach}
                </ul>

                <div class="tab-content" id="tab-content">
                  {if $product.description|count_characters}
                     <div class="tab-pane fade in{if $product.description} active{/if}" id="description" role="tabpanel">
                       {block name='product_description'}
                         <div class="product-description">{$product.description|unescape:'html' nofilter}</div>
                       {/block}
                     </div>
                    {/if}
                 {block name='product_details'}
                   {include file='catalog/_partials/product-details.tpl'}
                 {/block}
				<div class="tab-pane fade in" id="idTab5">
					{hook h='ProductTabContent'}
				</div>	
                 {block name='product_attachments'}
                   {if $product.attachments}
                    <div class="tab-pane fade in" id="attachments" role="tabpanel">
                       <section class="product-attachments" style="text-align: center;">
                         {foreach from=$product.attachments item=attachment}
                           <div class="attachment">
                             <h4><a href="{url entity='attachment' params=['id_attachment' => $attachment.id_attachment]}">{$attachment.name}</a></h4>
                             <p>{$attachment.description}</p
                             <a href="{url entity='attachment' params=['id_attachment' => $attachment.id_attachment]}">
                               {l s='Download' d='Shop.Theme.Actions'} ({$attachment.file_size_formatted})
                             </a>
                           </div>
                         {/foreach}
                       </section>
                     </div>
                   {/if}
                 {/block}

                 {foreach from=$product.extraContent item=extra key=extraKey}
                 <div class="tab-pane fade in {$extra.attr.class}" id="extra-{$extraKey}" role="tabpanel" {foreach $extra.attr as $key => $val} {$key}="{$val}"{/foreach}>
                   {$extra.content nofilter}
                 </div>
                 {/foreach}
                </div>  
            </div>
          {/block}
		</div>
	</div>
    {block name='product_images_modal'}
      {include file='catalog/_partials/product-images-modal.tpl'}
    {/block}

    {block name='page_footer_container'}
      <footer class="page-footer">
        {block name='page_footer'}
          <!-- Footer content -->
        {/block}
      </footer>
    {/block}
	<script>
	
	</script>
  </section>
  
  <style>
      .product-description > p{ line-height: 2; font-size: 16px;}
      .tabs .tab-pane{ padding-top: 0; }
  </style>
  
{/block}
