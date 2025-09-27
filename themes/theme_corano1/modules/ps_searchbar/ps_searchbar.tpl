<div id="_desktop_search_block" class="col-md-12 col-sm-12 col-xs-12">
	<div id="search_widget" class="search_top" data-search-controller-url="{$search_controller_url}">
		<form method="get" action="{$search_controller_url}">
			<input type="hidden" name="controller" value="search">
			<input class="text_input" type="text" name="s" value="{$search_string}" placeholder="22 {l s='Search products...' d='Shop.Theme.Catalog'}" aria-label="{l s='Search' d='Shop.Theme.Catalog'}">
			<button type="submit" name="Search for an item" title="Search for an item">
				<i class="pe-7s-search"></i>
			</button>
		</form>
	</div>
</div>