{block name='header_banner'}
<div class="header-banner">
	{hook h='displayBanner'}
</div>
{/block}

{block name='header_nav'}
<nav class="header-nav">
	<div class="container-fluid"> 
		{*<div class="hidden-md-down"> {hook h='displayNav'} </div>*}
		<div class="hidden-lg-up  mobile">
			<div class="row row-mobile">
				<div class="col-mobile mobile-top col-md-12 col-xs-12">
					<div class="top-logo" id="_mobile_logo"></div>
				</div>
				<div class="col-mobile mobile-bottom col-md-12 col-xs-12">
					
					<div class="float-xs-left" id="menu-icon">
						<i class="pe-7s-menu"></i>
					</div>
					<div id="mobile_top_menu_wrapper" class="row hidden-lg-up" style="display:none;">
						<div class="top-header-mobile">
							<div id="_mobile_static"></div>
						</div>
						{*<div id="_mobile_currency_selector"></div>
						<div id="_mobile_language_selector"></div>*}				
						<div class="menu-close"> 
							{l s='menu' d='Shop.Theme.Global'} <i class="material-icons float-xs-right">arrow_back</i>
						</div>
						<div class="menu-tabs">							
							<div class="js-top-menu-bottom">												
								<div id="_mobile_megamenu"></div>
							</div>
						</div>
					</div>
					<div id="_mobile_user_info"></div>
					<div id="_mobile_compare"></div>
					<div id="_mobile_wishtlist"></div>
					<div id="_mobile_cart_block"></div>
				</div>
			</div>
			<div id="_mobile_search_block"></div>
		</div>
	</div>
</nav>
{/block}

{block name='header_top'}
    <div class="header-top hidden-md-down">
    	<div class="container-fluid">
    		<div class="row">
    			<div class="col col col-lg-3" id="_desktop_logo">
    				{if $page.page_name == 'index'}
    				<a href="{$urls.base_url}">
    				<img loading="lazy" class="logo img-responsive" src="{$shop.logo}" alt="{$shop.name}">
    				</a>
    				{else}
    				<a href="{$urls.base_url}">
    				<img loading="lazy" class="logo img-responsive" src="{$shop.logo}" alt="{$shop.name}">
    				</a>
    				{/if}
    			</div>
    			<div class=" col col-lg-9 col-sm-12 position-static">	
    				{hook h='displaymegamenu'}
    				{hook h='displayTop'}
    			</div>
    		</div>
    	</div>
    
    </div>
    {hook h='displayNavFullWidth'}
{/block}