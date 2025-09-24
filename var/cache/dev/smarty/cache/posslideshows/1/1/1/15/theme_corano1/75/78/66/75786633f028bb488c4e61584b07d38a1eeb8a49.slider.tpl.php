<?php
/* Smarty version 4.3.4, created on 2024-12-06 09:32:14
  from 'C:\xampp\htdocs\lifestyle\modules\posslideshows\views\templates\hook\slider.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6752c49e69be35_09498083',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ecbfa47cd3eefceb3a05a048caec3a219b4eb2d6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lifestyle\\modules\\posslideshows\\views\\templates\\hook\\slider.tpl',
      1 => 1698613753,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_6752c49e69be35_09498083 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="slideshow_container" data-speed="600" data-time="5000" data-nav="false" data-pag="false" data-pausehover="hover">
	<div class="pos-slideshow">
		<div class="flexslider ma-nivoslider">
			<div class="pos-loading"><span></span><img src="http://lifestyle.local/modules/posslideshows/images/77910740ebef52d5c4f96005d6f1a793da1b87c9_BANNER LS - JPEG.webp" alt="<br />
<b>Warning</b>:  Undefined array key "slide" in <b>C:\xampp\htdocs\lifestyle\var\cache\dev\smarty\compile\theme_corano1\ec\bf\a4\ecbfa47cd3eefceb3a05a048caec3a219b4eb2d6_2.file.slider.tpl.cache.php</b> on line <b>35</b><br />
<br />
<b>Warning</b>:  Attempt to read property "value" on null in <b>C:\xampp\htdocs\lifestyle\var\cache\dev\smarty\compile\theme_corano1\ec\bf\a4\ecbfa47cd3eefceb3a05a048caec3a219b4eb2d6_2.file.slider.tpl.cache.php</b> on line <b>35</b><br />
<br />
<b>Warning</b>:  Trying to access array offset on value of type null in <b>C:\xampp\htdocs\lifestyle\var\cache\dev\smarty\compile\theme_corano1\ec\bf\a4\ecbfa47cd3eefceb3a05a048caec3a219b4eb2d6_2.file.slider.tpl.cache.php</b> on line <b>35</b><br />
" /></div>
			<div id="pos-slideshow-home" class="slides">
				
													<a href="https://life-style.pt/12-bijuteria" title="Bijuteria" ><img style="display:none" src="http://lifestyle.local/modules/posslideshows/images/77910740ebef52d5c4f96005d6f1a793da1b87c9_BANNER LS - JPEG.webp"  data-thumb="http://lifestyle.local/modules/posslideshows/images/77910740ebef52d5c4f96005d6f1a793da1b87c9_BANNER LS - JPEG.webp"  alt="Bijuteria" title="#htmlcaption8"  /> </a>
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
