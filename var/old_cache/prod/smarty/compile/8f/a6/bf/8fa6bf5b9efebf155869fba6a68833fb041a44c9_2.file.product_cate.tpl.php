<?php
/* Smarty version 4.2.1, created on 2023-10-04 07:50:16
  from '/home/brunofer/public_html/life-style.pt/public_html/themes/theme_corano1/modules/postabcateslider/product_cate.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_651d0b28094e91_02701562',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8fa6bf5b9efebf155869fba6a68833fb041a44c9' => 
    array (
      0 => '/home/brunofer/public_html/life-style.pt/public_html/themes/theme_corano1/modules/postabcateslider/product_cate.tpl',
      1 => 1678521959,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product.tpl' => 1,
  ),
),false)) {
function content_651d0b28094e91_02701562 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['productCate']->value) {?>
	<div class='imgSpinner'> </div>	
		<div class="productTabCategorySlider owl-carousel">						
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productCate']->value, 'product', false, NULL, 'myLoop', array (
  'index' => true,
  'first' => true,
  'iteration' => true,
  'last' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['index'];
$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['total'];
?>	
				<?php if (((isset($_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['index'] : null))%$_smarty_tpl->tpl_vars['rows']->value == 0 || (isset($_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['first'] : null)) {?>
					<div class="item-product">
				<?php }?>
					<?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
					
				<?php if (((isset($_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['iteration'] : null))%$_smarty_tpl->tpl_vars['rows']->value == 0 || (isset($_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['last'] : null)) {?>
					</div>
				<?php }?>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
<?php }
echo '<script'; ?>
>
	var tabcateSlide = $(".tab-category-container-slider .productTabCategorySlider");
	var $tabcateSlideConf = $('.tab-category-container-slider');
	var items       = parseInt($tabcateSlideConf.attr('data-items'));
	var speed     	= parseInt($tabcateSlideConf.attr('data-speed'));
	var autoPlay    = parseInt($tabcateSlideConf.attr('data-autoplay'));
	var time    	= parseInt($tabcateSlideConf.attr('data-time'));
	var arrow       = parseInt($tabcateSlideConf.attr('data-arrow'));
	var pagination  = parseInt($tabcateSlideConf.attr('data-pagination'));
	var move        = parseInt($tabcateSlideConf.attr('data-move'));
	var pausehover  = parseInt($tabcateSlideConf.attr('data-pausehover'));
	var lg          = parseInt($tabcateSlideConf.attr('data-lg'));
	var md          = parseInt($tabcateSlideConf.attr('data-md'));
	var sm          = parseInt($tabcateSlideConf.attr('data-sm'));
	var xs          = parseInt($tabcateSlideConf.attr('data-xs'));
	var xxs         = parseInt($tabcateSlideConf.attr('data-xxs'));
	
	if(autoPlay==1) {
		if(time){
			autoPlay = time;
		}else{
			autoPlay = '3000';
		}
	}else{
		autoPlay = false;
	}
	if(pausehover){ pausehover = true }else{ pausehover=false }
	if(move){ move = false }else{ move=true }
	if(arrow){ arrow =true }else{ arrow=false }
	if(pagination==1){ pagination = true }else{ pagination=false }
	tabcateSlide.owlCarousel({
		autoplay : autoPlay ,
		smartSpeed: speed,
		autoplayHoverPause: pausehover,
		addClassActive: true,
		scrollPerPage: move,
		nav : arrow,
		dots : pagination,
		responsiveClass:true,		
		responsive:{
			0:{
				items:xxs,
			},
			360:{
				items:xs,
			},	
			576:{
				items:sm,
			},
			768:{
				items:md,
			},
			992:{
				items:lg,
			},
			1200:{
				items:items,
			}
		}
	});
	checkClasses();
    tabcateSlide.on('translated.owl.carousel', function(event) {
        checkClasses();
    });

    function checkClasses(){
        tabcateSlide.each(function(){
        	var total = $(this).find('.owl-stage .owl-item.active').length;
			$(this).find('.owl-item').removeClass('firstActiveItem');
			$(this).find('.owl-item').removeClass('lastActiveItem');
			$(this).find('.owl-item.active').each(function(index){
				if (index === 0) { $(this).addClass('firstActiveItem'); }
				if (index === total - 1 && total>1) {
					$(this).addClass('lastActiveItem'); 
				}
			}) 
        });
    }
<?php echo '</script'; ?>
>	
<?php }
}
