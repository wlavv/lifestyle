<?php
/* Smarty version 4.3.4, created on 2024-10-22 21:29:10
  from 'C:\xampp\htdocs\lifestyle\admin77500\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67180b1651f422_18053661',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4af9173759287b5a96a68f76c39d0b96fbd98076' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lifestyle\\admin77500\\themes\\default\\template\\content.tpl',
      1 => 1729359103,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67180b1651f422_18053661 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
