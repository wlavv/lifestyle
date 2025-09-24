<!doctype html>
<html lang="{$language.iso_code}">

  <head>
    {block name='head'}
      {include file='_partials/head.tpl'}
    {/block}
  </head>

  <body itemscope itemtype="http://schema.org/WebPage" id="{$page.page_name}"  class="{$page.body_classes|classnames}"> 

    {block name='hook_after_body_opening_tag'}
      {hook h='displayAfterBodyOpeningTag'}
    {/block}

    <main>
      {block name='product_activation'}
        {include file='catalog/_partials/product-activation.tpl'}
      {/block}

      <header id="header">
        {block name='header'}
          {include file='_partials/header.tpl'}
        {/block}
		{block name='breadcrumb'}
			{include file='_partials/breadcrumb.tpl'}
		{/block}
	  </header>
	   {if $page.page_name == 'index'}
			<div class=" pos_bannerslide">
				{hook h='displayTopColumn'}
			</div>
		{/if}
      {block name='notifications'}
        {include file='_partials/notifications.tpl'}
      {/block}
     <div id="wrapper">
        {hook h="displayWrapperTop"}
        <div class="container">
			<div class="row">
			  {if ($page.page_name == 'product') || ( $page.page_name == 'category') || ( $page.page_name == 'manufacturer')}
    			  {block name="left_column"}
    				<div id="left-column" class="col-xs-12 col-sm-4 col-md-3">
    				  {if $page.page_name == 'product'}
    					{hook h='displayLeftColumnProduct'}
    				  {else}
        				{hook h="displayLeftColumn"}
    				  {/if}
    				</div>
    			  {/block}
			  {/if}

			  {block name="content_wrapper"}
				<div id="content-wrapper" class="left-column right-column col-sm-4 col-md-6">
				  {hook h="displayContentWrapperTop"}
				  {block name="content"}
					<p>Hello world! This is HTML5 Boilerplate.</p>
				  {/block}
				  {hook h="displayContentWrapperBottom"}
				</div>
			  {/block}

			  {block name="right_column"}
				<div id="right-column" class="col-xs-12 col-sm-4 col-md-3">
				  {if $page.page_name == 'product'}
					{hook h='displayRightColumnProduct'}
				  {else}
					{hook h="displayRightColumn"}
				  {/if}
				</div>   
			  {/block}
			</div>
			{if $page.page_name == 'product'}
				{block name='product_accessories'}
					{if $accessories}
					<section class="products-accessories clearfix">					
						<div class="pos_title">
							<h2>{l s='You might also like' d='Shop.Theme.Catalog'}</h2>
							<div class="desc_title">{l s='Add our products to weekly lineup' d='Shop.Theme.Catalog'}</div>
						</div>
						<div class="row pos_content">
							<div class="product_accessoriesslide owl-carousel">
							{foreach from=$accessories item="product_accessory"}
							{block name='product_miniature'}
							{include file='catalog/_partials/miniatures/product.tpl' product=$product_accessory}
							{/block}
							{/foreach}
							</div>
						</div>
					</section>
					{/if}
				{/block}
				{block name='product_footer'}
				  {hook h='displayFooterProduct' product=$product category=$category}
				{/block}
			{/if}
	
        </div>
		{if $page.page_name == 'index'}
			{hook h="displayFullbottom"}
			<div class="container">
				<div class="row">
				{hook h="displayContainerbottom"}
				</div>	
			</div>	
			{hook h="displayFullbottom2"}
			<div class="container">
			{hook h="displayBrandSlider"}
			</div>
		{/if}	
        {hook h="displayWrapperBottom"}
    </div>

    <footer id="footer">
        {block name="footer"}
          {include file="_partials/footer.tpl"}
        {/block}
    </footer>

    </main>
	<div class="back-top"><a href= "#" class="back-top-button"></a></div>

	{block name='javascript_head'}
        {include file="_partials/javascript.tpl" javascript=$javascript.head vars=$js_custom_vars}
    {/block}

    {block name='javascript_bottom'}
        {include file="_partials/javascript.tpl" javascript=$javascript.bottom}
    {/block}

    {block name='hook_before_body_closing_tag'}
      {hook h='displayBeforeBodyClosingTag'}
    {/block}

  </body>

</html>
