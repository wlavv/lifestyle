<div id="js-product-list-top" class=" products-selection">
<div class="row">
  <div class="col-md-4 total-products">
    {*<ul class="display">
		<li id="grid"> <i class="fa fa-th show_grid"></i></li>
		<li id="list"> <i class="fa fa-list show_list"></i></li>
	</ul>*}
    {if $listing.pagination.total_items > 1}
      <p class="hidden-sm-down">{l s='There are %product_count% products.' d='Shop.Theme.Catalog' sprintf=['%product_count%' => $listing.pagination.total_items]}</p>
    {else if $listing.pagination.total_items > 0}
      <p>{l s='There is 1 product.' d='Shop.Theme.Catalog'}</p>
    {/if}
  </div>
  <div class="col-md-8">
    <div class="row sort-by-row">

      {block name='sort_by'}
        {include file='catalog/_partials/sort-orders.tpl' sort_orders=$listing.sort_orders}
      {/block}

      {if !empty($listing.rendered_facets)}
        <div class="col-sm-6 col-xs-4 hidden-md-up filter-button">
          <button id="search_filter_toggler" class="btn btn-secondary" href="#search_filters_wrapper">
            {l s='Filter' d='Shop.Theme.Actions'}
          </button>
        </div>
      {/if}
    </div>
  </div>

</div>
</div>
