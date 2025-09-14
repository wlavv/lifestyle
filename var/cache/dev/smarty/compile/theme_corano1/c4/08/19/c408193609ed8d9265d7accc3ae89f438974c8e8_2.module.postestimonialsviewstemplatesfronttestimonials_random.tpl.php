<?php
/* Smarty version 4.3.4, created on 2024-12-06 09:32:21
  from 'module:postestimonialsviewstemplatesfronttestimonials_random.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6752c4a5d668d8_30552420',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c408193609ed8d9265d7accc3ae89f438974c8e8' => 
    array (
      0 => 'module:postestimonialsviewstemplatesfronttestimonials_random.tpl',
      1 => 1678521959,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6752c4a5d668d8_30552420 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin C:\xampp\htdocs\lifestyle/themes/theme_corano1/modules/postestimonials/views/templates/front/testimonials_random.tpl --><?php if ($_smarty_tpl->tpl_vars['testimonials']->value) {?>
	<div class="testimonials_container">
		<div class="container">
			<div class="pos_title">
				<h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Client Testimonials','mod'=>'postestimonials'),$_smarty_tpl ) );?>
</h2>
				<div class=" desc_title">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'What they say','mod'=>'postestimonials'),$_smarty_tpl ) );?>

				</div>
			</div>
			<div class=" row pos_content">
				<ul class="thumb">
				  <?php $_smarty_tpl->_assignInScope('j', 0);?> 
				  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['testimonials']->value, 'testimonial', false, NULL, 'myLoop', array (
  'index' => true,
  'first' => true,
  'iteration' => true,
  'last' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['testimonial']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['testimonial']->value) {
$_smarty_tpl->tpl_vars['testimonial']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['index'];
$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['total'];
?>
					 <?php if ($_smarty_tpl->tpl_vars['testimonial']->value['active'] == 1) {?>
							<?php if (in_array($_smarty_tpl->tpl_vars['testimonial']->value['media_type'],$_smarty_tpl->tpl_vars['arr_img_type']->value)) {?>
								<li class="testithumb<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['j']->value, ENT_QUOTES, 'UTF-8');?>
" onclick="testislider(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['j']->value, ENT_QUOTES, 'UTF-8');?>
)">
									<img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['mediaUrl']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['testimonial']->value['media'], ENT_QUOTES, 'UTF-8');?>
" alt="Image Testimonial">
								</li>
							<?php }?>
					<?php }?>
					<?php $_smarty_tpl->_assignInScope('j', $_smarty_tpl->tpl_vars['j']->value+1);?> 
				  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</ul>
				<div class="testimonialsSlide owl-carousel">
				  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['testimonials']->value, 'testimonial', false, NULL, 'myLoop', array (
  'index' => true,
  'first' => true,
  'iteration' => true,
  'last' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['testimonial']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['testimonial']->value) {
$_smarty_tpl->tpl_vars['testimonial']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['index'];
$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['total'];
?>
					<?php if ($_smarty_tpl->tpl_vars['testimonial']->value['active'] == 1) {?>
						<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['index'] : null)%1 == 0 || (isset($_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['first'] : null)) {?>
						<div class="item-testimonials">
						<?php }?>	
							<div class="item">										
								<div class="content_author">
									<div class="content_test">										
										<div class="des_testimonial"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['testimonial']->value['content'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</div>	
										<p class="des_email"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['testimonial']->value['email'], ENT_QUOTES, 'UTF-8');?>
</p>										
										<p class="des_namepost"><span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['testimonial']->value['name_post'], ENT_QUOTES, 'UTF-8');?>
</span></p>							
									</div>							
								</div>						
							</div>
						<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['iteration'] : null)%1 == 0 || (isset($_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['last'] : null)) {?>
						</div>
						<?php }?>
					<?php }?>
				  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</div>
			</div>
		</div>
	</div>

<?php echo '<script'; ?>
 type="text/javascript">
$(document).ready(function() {
	var testi = $(".testimonialsSlide");
	testi.owlCarousel({
		autoplay :true,
		autoplayHoverPause: true,
		smartSpeed : 1000,
		nav :false,
		dots : false,
		responsiveClass:true,
		responsive : {
		  0 : {
	          items: 1
	      },
	      480 : {
	          items: 1
	      },
	      768 : {
	          items: 1
	      },
	      992 : {
	          items: 1
	      },
		  1200 : {
	          items: 1
	      }
		}
	});
	$(".testimonials_container .thumb li:first").addClass('active');
	testi.on('translated.owl.carousel', function(event) {
	    x = $( ".testimonials_container .owl-item" ).index( $( ".testimonials_container .testimonialsSlide .active" ));
	    
	    var testithumb = ".testithumb"+x;
		$(".testimonials_container .thumb li").removeClass('active');
		$(testithumb).addClass('active');
	});
	
});
function testislider(x)
{	var testi = $(".testimonialsSlide");
	testi.trigger("to.owl.carousel", [x, 500, true]);
	
	
}

<?php echo '</script'; ?>
>

 <?php }?><!-- end C:\xampp\htdocs\lifestyle/themes/theme_corano1/modules/postestimonials/views/templates/front/testimonials_random.tpl --><?php }
}
