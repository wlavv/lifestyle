{if $postheme.product_thumbnail == 0}
	<div class="images-container">
	  {block name='product_cover'}
		<div class="product-view_content">
		  {block name='product_flags'}
			<ul class="product-flag">
			  {foreach from=$product.flags item=flag}
				<li class=" {$flag.type}">{$flag.label}</li>
			  {/foreach}
			</ul>
		  {/block}
		<div class="product-cover slider-for">
		 {foreach from=$product.images item=image}
		 
		    {*<div style="display: none;"><pre>{print_r($image)}</pre></div>*}
    		 <div class="thumb-item">
        		  {if $product.cover}
            		  <div class="easyzoom easyzoom--overlay">
            		    <a href="{$image.bySize.large_default.url}">
            		        <img class=""  style="width:100%;" src="{$image.bySize.large_default.url}" alt="{$image.legend}" title="{$image.legend}" itemprop="image">
            		    </a>
            		  </div>
        		  {else}
        			<img src="{$urls.no_picture_image.bySize.large_default.url}" style="width:100%;">
        		  {/if}
    		   </div>
		 {/foreach}
		</div>
		</div>
	  {/block}

	  {block name='product_images'}
            {if count($product.images) > 1}
                <ul class="product-images slider-nav">
                    {foreach from=$product.images item=image}
                      <div class="thumb-container">
                    	<div>
                    	<img
                    	  class="thumb js-thumb {if $image.id_image == $product.cover.id_image} selected {/if}"
                    	  src="{$image.bySize.home_default.url}"
                    	  alt="{$image.legend}"
                    	  title="{$image.legend}"
                    	  width="100"
                    	  itemprop="image"
                    	>
                    	</div>
                      </div>
                    {/foreach}
                </ul>
            {/if}
	  {/block}
	</div>
{else if $postheme.product_thumbnail == 1}
	<div class="images-container left_vertical"> 
		{block name='product_images'}
		<ul class="product-images slider-nav">
			{foreach from=$product.images item=image}
			<div class="thumb-container">
				<div>
				<img 
				  class="thumb js-thumb {if $image.id_image == $product.cover.id_image} selected {/if}"
				  src="{$image.bySize.home_default.url}"
				  alt="{$image.legend}"
				  title="{$image.legend}"
				  itemprop="image"
				>
				</div>
			</div>
			{/foreach}
		</ul>
		{/block}
	  {block name='product_cover'}
	   <div class="product-view_content">
		  {block name='product_flags'}
			<ul class="product-flag">
			  {foreach from=$product.flags item=flag}
				<li class=" {$flag.type}">{$flag.label}</li>
			  {/foreach}
			</ul>
		  {/block}
		<div class="product-cover slider-for">
		 {foreach from=$product.images item=image}
		 <div class="thumb-item">
		  {if $product.cover}
		  <div class="easyzoom easyzoom--overlay">
		  <a href="{$image.bySize.large_default.url}">
		   <img class=""  style="width:100%;" src="{$image.bySize.large_default.url}" alt="{$image.legend}" title="{$image.legend}" itemprop="image">
		  </a>
		  </div>

		  {else}
			<img src="{$urls.no_picture_image.bySize.large_default.url}" style="width:100%;">
		  {/if}
		   </div>
		 {/foreach}
		</div>
		</div>
	  {/block}
	</div>
{else if $postheme.product_thumbnail == 2}
	<div class="images-container right_vertical"> 
		{block name='product_images'}
		<ul class="product-images slider-nav">
			{foreach from=$product.images item=image}
			<div class="thumb-container">
				<div>
				<img 
				  class="thumb js-thumb {if $image.id_image == $product.cover.id_image} selected {/if}"
				  src="{$image.bySize.home_default.url}"
				  alt="{$image.legend}"
				  title="{$image.legend}"
				  itemprop="image"
				>
				</div>
			</div>
			{/foreach}
		</ul>
		{/block}
	  {block name='product_cover'}
	   <div class="product-view_content">
		  {block name='product_flags'}
			<ul class="product-flag">
			  {foreach from=$product.flags item=flag}
				<li class=" {$flag.type}">{$flag.label}</li>
			  {/foreach}
			</ul>
		  {/block}
		<div class="product-cover slider-for">
		 {foreach from=$product.images item=image}
		 <div class="thumb-item">
		  {if $product.cover}
		  <div class="easyzoom easyzoom--overlay">
		  <a href="{$image.bySize.large_default.url}">
		   <img class=""  style="width:100%;" src="{$image.bySize.large_default.url}" alt="{$image.legend}" title="{$image.legend}" itemprop="image">
		  </a>
		  </div>

		  {else}
			<img src="{$urls.no_picture_image.bySize.large_default.url}" style="width:100%;">
		  {/if}
		   </div>
		 {/foreach}
		</div>
		</div>
	  {/block}
	</div> 
{/if}

{hook h='displayAfterProductThumbs'}

<script type="text/javascript">
	$(document).ready(function() {
	$('.images-container .slider-for').slick({
	   slidesToShow: 1,
	   slidesToScroll: 1,
	   focusOnSelect: true,
	   arrows: true, 
	   fade: true,
	   infinite: true,
	   lazyLoad: 'ondemand',
	   asNavFor: '.slider-nav'
	 });
	  if ({$postheme.product_thumbnail} == 0) {
		 $('.images-container .slider-nav').slick({
		   slidesToShow: 4,
		   slidesToScroll: 1,
		   asNavFor: '.slider-for',
		   dots: false, 
		   arrows: true, 
		   infinite: true,
		   focusOnSelect: true
		 });
	 }else {
	 $('.images-container .slider-nav').slick({
	   slidesToShow: 4,
	   slidesToScroll: 1,
	   asNavFor: '.slider-for',
	   vertical:true,
	   dots: false, 
	   arrows: true, 
	   infinite: true,
	   focusOnSelect: true,
	   responsive: [
	   	{
		  breakpoint: 991,
		  settings: {
			slidesToShow: 2, 
			slidesToScroll: 1,
		  }
		},
		{
		  breakpoint: 767,
		  settings: {
			slidesToShow: 4, 
			slidesToScroll: 1,
		  }
		},
		{
		  breakpoint: 543,
		  settings: {
			slidesToShow: 3, 
			slidesToScroll: 1,
		  }
		},
		{
		  breakpoint: 399,
		  settings: {
			slidesToShow: 2,
			slidesToScroll: 1, 
		  }
		}
		]
	 });
	 }
	 
	 $('.images-container .slider-for').slickLightbox({
			src: 'src',
			itemSelector: '.thumb-item img'
	 });
	 	if($(window).width() >= 992) 
		{
			var $easyzoom = $('.images-container .easyzoom').easyZoom(); 
		}
	$(window).resize(function(){
		if($(window).width() >= 992)
		{
			 var $easyzoom = $('.images-container .easyzoom').easyZoom();  
			$('.easyzoom--overlay').addClass('easyzoom');
		}
		else
		{
			$('.easyzoom--overlay').removeClass('easyzoom'); 	
		}
	});
});
</script>