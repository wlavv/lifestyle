<?php
/* Smarty version 4.3.4, created on 2024-10-20 10:22:17
  from 'module:posstaticblocksviewstemplateshookstaticblocks.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6714cbc9d64095_11397833',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0829da04d5d5f17e8e472e3ded17d4886e54661f' => 
    array (
      0 => 'module:posstaticblocksviewstemplateshookstaticblocks.tpl',
      1 => 1678521914,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6714cbc9d64095_11397833 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '7824404766714cbc9d5ccd2_72724473';
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['linkBlocks']->value, 'linkBlock');
$_smarty_tpl->tpl_vars['linkBlock']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['linkBlock']->value) {
$_smarty_tpl->tpl_vars['linkBlock']->do_else = false;
?>
  <?php echo $_smarty_tpl->tpl_vars['linkBlock']->value['content'];?>

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
