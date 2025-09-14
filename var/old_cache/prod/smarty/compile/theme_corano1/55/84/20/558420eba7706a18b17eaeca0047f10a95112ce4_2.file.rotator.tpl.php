<?php
/* Smarty version 4.2.1, created on 2023-10-04 07:50:14
  from '/home/brunofer/public_html/life-style.pt/public_html/modules/posrotatorimg/rotator.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_651d0b26a99ec1_25611153',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '558420eba7706a18b17eaeca0047f10a95112ce4' => 
    array (
      0 => '/home/brunofer/public_html/life-style.pt/public_html/modules/posrotatorimg/rotator.tpl',
      1 => 1678521914,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_651d0b26a99ec1_25611153 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['rotator_img']->value))) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rotator_img']->value, 'image', false, NULL, 'thumbnails', array (
));
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
?>
		  <?php $_smarty_tpl->_assignInScope('imageIds', ((string)$_smarty_tpl->tpl_vars['product']->value['id_product'])."-".((string)$_smarty_tpl->tpl_vars['image']->value['id_image']));?>
          <img class="img-responsive second-image <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['class_name']->value, ENT_QUOTES, 'UTF-8');?>
" 
		  <?php if ((isset($_smarty_tpl->tpl_vars['imagesize']->value))) {?>
			src="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['imageIds']->value,$_smarty_tpl->tpl_vars['imagesize']->value),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" 
		  <?php } else { ?>
			src="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['imageIds']->value,'home_default'),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" 
		  <?php }?>
		  alt="" itemprop="image"  />
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>		<?php }
}
