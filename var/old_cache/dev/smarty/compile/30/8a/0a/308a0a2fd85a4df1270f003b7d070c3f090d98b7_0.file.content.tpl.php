<?php
/* Smarty version 4.2.1, created on 2023-10-07 08:48:11
  from '/home/brunofer/public_html/life-style.pt/public_html/admin77500/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_65210d3bf363b1_13767830',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '308a0a2fd85a4df1270f003b7d070c3f090d98b7' => 
    array (
      0 => '/home/brunofer/public_html/life-style.pt/public_html/admin77500/themes/default/template/content.tpl',
      1 => 1678460200,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65210d3bf363b1_13767830 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
