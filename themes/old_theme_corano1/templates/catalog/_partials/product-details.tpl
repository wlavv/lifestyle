<div class="tab-pane fade{if !$product.description} in active{/if}" id="product-details" data-product="{$product.embedded_attributes|json_encode}" role="tabpanel">
  {block name='product_reference'}
    {if isset($product_manufacturer->id) && !Context::getContext()->isMobile() }
      <div class="product-manufacturer">
        {if isset($manufacturer_image_url)}
          <a href="{$product_brand_url}">
            <img loading="lazy" src="{$manufacturer_image_url}" class="img img-thumbnail manufacturer-logo" alt="{$product_manufacturer->name}">
          </a>
        {else}
          <label class="label">{l s='Brand' d='Shop.Theme.Catalog'}</label>
          <span>
            <a href="{$product_brand_url}">{$product_manufacturer->name}</a>
          </span>
        {/if}
      </div>
    {/if}
  {/block}

{*
  {block name='product_quantities'}
    {if $product.show_quantities}
      <div class="product-quantities">
        <label class="label">{l s='In stock' d='Shop.Theme.Catalog'}</label>
        <span data-stock="{$product.quantity}" data-allow-oosp="{$product.allow_oosp}">{$product.quantity} {$product.quantity_label}</span>
      </div>
    {/if}
  {/block}
*}
  {block name='product_availability_date'}
    {if $product.availability_date}
      <div class="product-availability-date">
        <label>{l s='Availability date:' d='Shop.Theme.Catalog'} </label>
        <span>{$product.availability_date}</span>
      </div>
    {/if}
  {/block}

  {block name='product_out_of_stock'}
    <div class="product-out-of-stock">
      {hook h='actionProductOutOfStock' product=$product}
    </div>
  {/block}

  {block name='product_features'}
    {*{if $product.grouped_features}*}
      <section class="product-features">
        <p class="h6">{l s='Data sheet' d='Shop.Theme.Catalog'}</p>
        <dl class="data-sheet">
            
            <dt class="name">{l s='Brand' d='Shop.Theme.Catalog'}</dt>
            <dd class="value">{$product_manufacturer->name}</dd>
            
            {foreach from=$product.grouped_features item=feature}
                <dt class="name">{$feature.name}</dt>
                <dd class="value">{$feature.value|escape:'htmlall'|nl2br nofilter}</dd>
            {/foreach}

            {if $product.show_quantities}
                <dt class="name">{l s='In stock' d='Shop.Theme.Catalog'}</dt>
                <dd class="value">{$product.quantity} {$product.quantity_label}</dd>
            {/if}
    
            <dt class="name">{l s='Reference' d='Shop.Theme.Catalog'}</dt>
            <dd class="value">{$product.reference_to_display}</dd>

            {if $product.ean13|count_characters > 0}
                <dt class="name">{l s='Código de barras' d='Shop.Theme.Catalog'}</dt>
                <dd class="value">{$product.ean13}</dd>
            {/if}
        </dl>
      </section>
    {*{/if}*}
  {/block}

  {* if product have specific references, a table will be added to product details section *}
  {block name='product_specific_references'}
    {if !empty($product.specific_references)}
      <section class="product-features">
        <p class="h6">{l s='Specific References' d='Shop.Theme.Catalog'}</p>
          <dl class="data-sheet">
            {foreach from=$product.specific_references item=reference key=key}
              <dt class="name">{$key}</dt>
              <dd class="value">{$reference}</dd>
            {/foreach}
          </dl>
      </section>
    {/if}
  {/block}

  {block name='product_condition'}
    {if $product.condition}
      <div class="product-condition">
        <label class="label">{l s='Condition' d='Shop.Theme.Catalog'} </label>
        <link itemprop="itemCondition" href="{$product.condition.schema_url}"/>
        <span>{$product.condition.label}</span>
      </div>
    {/if}
  {/block}
</div>

<style>
    #product-details{ padding-top: 0; }
    .product-manufacturer{ float: right;margin-top: 30px; }
    .manufacturer-logo{ width:150px;}
</style>