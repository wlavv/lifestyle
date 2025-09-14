<?php
/* Smarty version 4.2.1, created on 2023-10-07 08:48:24
  from '/home/brunofer/public_html/life-style.pt/public_html/admin77500/themes/new-theme/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_65210d48cc2183_98160567',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f3cbf5a6553249744d6745283a5c2fff1f1f0a4c' => 
    array (
      0 => '/home/brunofer/public_html/life-style.pt/public_html/admin77500/themes/new-theme/template/content.tpl',
      1 => 1678460204,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65210d48cc2183_98160567 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>
<div id="content-message-box"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
