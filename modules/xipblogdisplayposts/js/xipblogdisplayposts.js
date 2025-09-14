jQuery(document).ready(function($) {  
	var blog = $(".blog_slider");
		blog.owlCarousel({
		autoPlay : true ,
		smartSpeed: 1000,
		autoplayHoverPause: true,
		nav: true,
		dots : false,	
		responsive:{
			0:{
				items:1,
			},
			360:{
				items:1,
			},	
			576:{
				items:2,
			},
			768:{
				items:2,
			},
			992:{
				items:3,
			},
			1200:{
				items:3,
			}
		}
	}); 
});