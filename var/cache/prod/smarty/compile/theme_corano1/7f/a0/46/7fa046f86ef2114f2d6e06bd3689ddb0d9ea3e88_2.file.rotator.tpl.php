<?php
/* Smarty version 4.3.4, created on 2024-10-20 10:22:24
  from 'C:\xampp\htdocs\lifestyle\modules\posrotatorimg\rotator.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6714cbd03c7a72_87657219',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7fa046f86ef2114f2d6e06bd3689ddb0d9ea3e88' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lifestyle\\modules\\posrotatorimg\\rotator.tpl',
      1 => 1678521914,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6714cbd03c7a72_87657219 (Smarty_Internal_Template $_smarty_tpl) {
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
