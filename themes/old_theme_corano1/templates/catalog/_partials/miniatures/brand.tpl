{block name='brand_miniature_item'}
    {if $brand.nb_products > 0}
      <li class="brand" style="border-bottom: 1px solid #c29958; width: 100%;margin: 0;">
        <div class="brand-img" style="margin: 0 20px; width: 150px;"><a href="{$brand.url}"><img loading="lazy" src="{$brand.image}" alt="{$brand.name}" style="width: 150px;"></a></div>
        <div class="brand-infos" style="margin: 20px; width:  calc(100% - 250px)">
            <p>
                <a href="{$brand.url}">{$brand.name}</a>
                <br>
                <a href="{$brand.url}"><span style="font-size: 12px;color: #c29958">({$brand.nb_products})</span></a>
            </p>
            {$brand.text nofilter}
        </div>
        <div class="brand-products" style="margin-left: 20px; width:  100px)">
            <a href="{$brand.url}">{l s='View products' d='Shop.Theme.Actions'}</a>
        </div>          
      </li>
  {/if}
{/block}
