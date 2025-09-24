<?php
/* Smarty version 4.2.1, created on 2023-10-05 10:15:08
  from '/home/brunofer/public_html/life-style.pt/public_html/modules/posslideshows/views/templates/hook/slider.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_651e7e9cd72244_32651882',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5fb8f3ecdb4f7867a79dc3d06253300a98e66d47' => 
    array (
      0 => '/home/brunofer/public_html/life-style.pt/public_html/modules/posslideshows/views/templates/hook/slider.tpl',
      1 => 1678723255,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_651e7e9cd72244_32651882 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="slideshow_container" data-speed="600" data-time="5000" data-nav="false" data-pag="false" data-pausehover="hover">
	<div class="pos-slideshow">
		<div class="flexslider ma-nivoslider">
			<div class="pos-loading"><span></span><img src="https://life-style.pt/modules/posslideshows/images/77910740ebef52d5c4f96005d6f1a793da1b87c9_BANNER LS - JPEG.jpg" alt="" /></div>
			<div id="pos-slideshow-home" class="slides">
				
													<a href="https://life-style.pt/12-bijuteria" title="Bijuteria" ><img style="display:none" src="https://life-style.pt/modules/posslideshows/images/77910740ebef52d5c4f96005d6f1a793da1b87c9_BANNER LS - JPEG.jpg"  data-thumb="https://life-style.pt/modules/posslideshows/images/77910740ebef52d5c4f96005d6f1a793da1b87c9_BANNER LS - JPEG.jpg"  alt="Bijuteria" title="#htmlcaption8"  /> </a>
			   			</div>
																<div id="htmlcaption8" class="pos-slideshow-caption nivo-html-caption nivo-caption">					
							<div class="timethai" style=" 
								position:absolute;
								top:0;
								left:0;
								z-index:8;
								background-color: rgba(49, 56, 72, 0.298);
								height:5px;
								-webkit-animation: myfirst 5000ms ease-in-out;
								-moz-animation: myfirst 5000ms ease-in-out;
								-ms-animation: myfirst 5000ms ease-in-out;
								animation: myfirst 5000ms ease-in-out;
							
							">
							</div>
																																		</div>
									 			 		</div>
	</div>
</div>

 <script type="text/javascript">
 $(document).ready(function() {
	//Function to animate slider captions 
	function doAnimations( elems ) {
		//Cache the animationend event in a variable
		var animEndEv = 'webkitAnimationEnd animationend';
		
		elems.each(function () {
			var $this = $(this),
				$animationType = $this.data('animation');
			$this.addClass($animationType).one(animEndEv, function () {
				$this.removeClass($animationType);
			});
		});
	}
	//Variables on page load 
	var $myCarousel = $('.ma-nivoslider'),
		$firstAnimatingElems = $myCarousel.find('.nivo-caption').find("[data-animation ^= 'animated']");
	//Animate captions in first slide on page load 
	doAnimations($firstAnimatingElems);

});
</script><?php }
}
