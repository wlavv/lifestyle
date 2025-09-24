<?php
/* Smarty version 4.3.4, created on 2024-10-20 10:22:24
  from 'module:xipblogdisplaypostsviewstemplatesfrontxipblogdisplayposts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6714cbd0c05ca0_18733875',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b406bda4217a646cba89bbc02e37a6d3c8189cae' => 
    array (
      0 => 'module:xipblogdisplaypostsviewstemplatesfrontxipblogdisplayposts.tpl',
      1 => 1678521915,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:xipblogdisplayposts/views/templates/front/post-video.tpl' => 2,
    'module:xipblogdisplayposts/views/templates/front/post-audio.tpl' => 2,
    'module:xipblogdisplayposts/views/templates/front/post-gallery.tpl' => 2,
  ),
),false)) {
function content_6714cbd0c05ca0_18733875 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\lifestyle\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),1=>array('file'=>'C:\\xampp\\htdocs\\lifestyle\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>

<div class="home_blog_post_area <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['xipbdp_designlayout']->value, ENT_QUOTES, 'UTF-8');?>
">
	<div class="container">
		<div class=" pos_title">
			<?php if ((isset($_smarty_tpl->tpl_vars['xipbdp_title']->value))) {?>
				<h2>
					<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['xipbdp_title']->value, ENT_QUOTES, 'UTF-8');?>

				
				</h2>
			<?php }?>
			<?php if ((isset($_smarty_tpl->tpl_vars['xipbdp_subtext']->value))) {?>
			<div class=" desc_title">
				<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['xipbdp_subtext']->value, ENT_QUOTES, 'UTF-8');?>

			</div>
			<?php }?>
		</div>
	
		<div class="home_blog_post_inner">
		<?php if (((isset($_smarty_tpl->tpl_vars['xipblogposts']->value)) && !empty($_smarty_tpl->tpl_vars['xipblogposts']->value))) {?>
			<div class="row pos_content">
			<div class="blog_slider owl-carousel">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['xipblogposts']->value, 'xipblgpst', false, NULL, 'myLoop', array (
  'index' => true,
  'first' => true,
  'iteration' => true,
  'last' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['xipblgpst']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['xipblgpst']->value) {
$_smarty_tpl->tpl_vars['xipblgpst']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['index'];
$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['total'];
?>
					<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['index'] : null)%1 == 0 || (isset($_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['first'] : null)) {?>
					<div class="item">
					<?php }?>
				
						<article class="blog_post">
							<div class="blog_post_content_top">
								<div class="post_thumbnail">
									<?php if ($_smarty_tpl->tpl_vars['xipblgpst']->value['post_format'] == 'video') {?>
										<?php $_smarty_tpl->_assignInScope('postvideos', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'explode' ][ 0 ], array( ',',$_smarty_tpl->tpl_vars['xipblgpst']->value['video'] )));?>
										<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['postvideos']->value) > 1) {?>
											<?php $_smarty_tpl->_subTemplateRender("module:xipblogdisplayposts/views/templates/front/post-video.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('videos'=>$_smarty_tpl->tpl_vars['postvideos']->value,'width'=>'370','height'=>"256",'class'=>"carousel"), 0, true);
?>
										<?php } else { ?>
											<?php $_smarty_tpl->_subTemplateRender("module:xipblogdisplayposts/views/templates/front/post-video.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('videos'=>$_smarty_tpl->tpl_vars['postvideos']->value,'width'=>'370','height'=>"316",'class'=>''), 0, true);
?>
										<?php }?>
									<?php } elseif ($_smarty_tpl->tpl_vars['xipblgpst']->value['post_format'] == 'audio') {?>
										<?php $_smarty_tpl->_assignInScope('postaudio', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'explode' ][ 0 ], array( ',',$_smarty_tpl->tpl_vars['xipblgpst']->value['audio'] )));?>
										<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['postaudio']->value) > 1) {?>
											<?php $_smarty_tpl->_subTemplateRender("module:xipblogdisplayposts/views/templates/front/post-audio.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('audios'=>$_smarty_tpl->tpl_vars['postaudio']->value,'width'=>'370','height'=>"316",'class'=>"carousel"), 0, true);
?>
										<?php } else { ?>
											<?php $_smarty_tpl->_subTemplateRender("module:xipblogdisplayposts/views/templates/front/post-audio.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('audios'=>$_smarty_tpl->tpl_vars['postaudio']->value,'width'=>'370','height'=>"316",'class'=>''), 0, true);
?>
										<?php }?>
									<?php } elseif ($_smarty_tpl->tpl_vars['xipblgpst']->value['post_format'] == 'gallery') {?>
										<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['xipblgpst']->value['gallery_lists']) > 1) {?>
											<?php $_smarty_tpl->_subTemplateRender("module:xipblogdisplayposts/views/templates/front/post-gallery.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('gallery'=>$_smarty_tpl->tpl_vars['xipblgpst']->value['gallery_lists'],'imagesize'=>"home_default",'class'=>"carousel"), 0, true);
?>
										<?php } else { ?>
											<?php $_smarty_tpl->_subTemplateRender("module:xipblogdisplayposts/views/templates/front/post-gallery.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('gallery'=>$_smarty_tpl->tpl_vars['xipblgpst']->value['gallery_lists'],'imagesize'=>"home_default",'class'=>''), 0, true);
?>
										<?php }?>
									<?php } else { ?>
										<a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['xipblgpst']->value['link'], ENT_QUOTES, 'UTF-8');?>
" class="img_content"><img class="xipblog_img img-responsive" src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['xipblgpst']->value['post_img_home_default'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['xipblgpst']->value['post_title'], ENT_QUOTES, 'UTF-8');?>
"></a>									
									<?php }?>
								</div>
							</div>
							<div class="post_content">
								<div class="content-inner">	
									<div class="post_meta clearfix">
										<p class="meta_author">
											<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Posted by ','mod'=>'xipblogdisplayposts'),$_smarty_tpl ) );?>

											<span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['xipblgpst']->value['post_author_arr']['firstname'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['xipblgpst']->value['post_author_arr']['lastname'], ENT_QUOTES, 'UTF-8');?>
</span>
										</p>
										<p class="meta_date">
											<?php echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['xipblgpst']->value['post_date'],"%b %dTH, %Y"), ENT_QUOTES, 'UTF-8');?>

										</p>
										<p class="meta_category">
												<a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['xipblgpst']->value['category_default_arr']['link'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['xipblgpst']->value['category_default_arr']['name'], ENT_QUOTES, 'UTF-8');?>
</a>
										</p>
									</div>	
									<h4  class="post_title"><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['xipblgpst']->value['link'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['xipblgpst']->value['post_title'], ENT_QUOTES, 'UTF-8');?>
</a></h4>												
									<p class="post_description">
										<?php if ((isset($_smarty_tpl->tpl_vars['xipblgpst']->value['post_excerpt'])) && !empty($_smarty_tpl->tpl_vars['xipblgpst']->value['post_excerpt'])) {?>
											<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['xipblgpst']->value['post_excerpt'],160,' ...' )),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

										<?php } else { ?>
											<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['xipblgpst']->value['post_content'],160,' ...' )),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

										<?php }?>
									</p>
									<div  class="read_more"><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['xipblgpst']->value['link'], ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Read More','mod'=>'xipblogdisplayposts'),$_smarty_tpl ) );?>
</a></div>	
								</div>
							</div>
						</article>
					<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['iteration'] : null)%1 == 0 || (isset($_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['last'] : null)) {?>
					</div>
					<?php }?>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</div>
			</div>
		<?php } else { ?>
			<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No Blog Post Found','mod'=>'xipblogdisplayposts'),$_smarty_tpl ) );?>
</p>
		<?php }?>
		</div>

	</div>
</div>
<?php }
}
