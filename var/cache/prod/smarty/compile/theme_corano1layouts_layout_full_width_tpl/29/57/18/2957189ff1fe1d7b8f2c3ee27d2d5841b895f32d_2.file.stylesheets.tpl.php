<?php
/* Smarty version 4.3.4, created on 2024-10-20 10:22:20
  from 'C:\xampp\htdocs\lifestyle\themes\theme_corano1\templates\_partials\stylesheets.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6714cbcc79b539_99882156',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2957189ff1fe1d7b8f2c3ee27d2d5841b895f32d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lifestyle\\themes\\theme_corano1\\templates\\_partials\\stylesheets.tpl',
      1 => 1699120295,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6714cbcc79b539_99882156 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['stylesheets']->value['external'], 'stylesheet');
$_smarty_tpl->tpl_vars['stylesheet']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['stylesheet']->value) {
$_smarty_tpl->tpl_vars['stylesheet']->do_else = false;
?>
  <link rel="stylesheet" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['stylesheet']->value['uri'], ENT_QUOTES, 'UTF-8');?>
" type="text/css" media="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['stylesheet']->value['media'], ENT_QUOTES, 'UTF-8');?>
">
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<link rel="stylesheet" href="https://life-style.pt/themes/theme_corano1/assets/css/Pe-icon-7-stroke.css" type="text/css" media="all">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['stylesheets']->value['inline'], 'stylesheet');
$_smarty_tpl->tpl_vars['stylesheet']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['stylesheet']->value) {
$_smarty_tpl->tpl_vars['stylesheet']->do_else = false;
?>
  <style>
    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['stylesheet']->value['content'], ENT_QUOTES, 'UTF-8');?>

  </style>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<style>
    .pos_bannerslide{ margin-bottom: 20px; }
    
    .search_top form button i { font-size: 21px; display: block; line-height: 0px; }
    
    #search_widget form i{ position: relative; padding: 0; }
    
</style>
<?php }
}
