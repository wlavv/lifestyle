<?php
/* Smarty version 4.2.1, created on 2023-07-13 13:57:56
  from '/home/brunofer/public_html/life-style.pt/public_html/themes/theme_corano1/templates/errors/maintenance.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_64aff4d4c01c42_85076529',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '642557f124abc1041ce50e21a9b12f2127a4a6e0' => 
    array (
      0 => '/home/brunofer/public_html/life-style.pt/public_html/themes/theme_corano1/templates/errors/maintenance.tpl',
      1 => 1678521959,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64aff4d4c01c42_85076529 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_151791557464aff4d4bf8bd7_51678135', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-error.tpl');
}
/* {block 'page_header_logo'} */
class Block_183150759164aff4d4bf9732_77952898 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="logo"><img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="logo"></div>
        <?php
}
}
/* {/block 'page_header_logo'} */
/* {block 'hook_maintenance'} */
class Block_88184977764aff4d4bfc380_30309344 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php echo $_smarty_tpl->tpl_vars['HOOK_MAINTENANCE']->value;?>

        <?php
}
}
/* {/block 'hook_maintenance'} */
/* {block 'page_title'} */
class Block_107414681264aff4d4bfd634_78506032 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'We\'ll be back soon.','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );
}
}
/* {/block 'page_title'} */
/* {block 'page_header'} */
class Block_96499924964aff4d4bfd110_39872601 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <h1><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_107414681264aff4d4bfd634_78506032', 'page_title', $this->tplIndex);
?>
</h1>
        <?php
}
}
/* {/block 'page_header'} */
/* {block 'page_header_container'} */
class Block_145827446264aff4d4bf91e3_20040955 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <header class="page-header">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_183150759164aff4d4bf9732_77952898', 'page_header_logo', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_88184977764aff4d4bfc380_30309344', 'hook_maintenance', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_96499924964aff4d4bfd110_39872601', 'page_header', $this->tplIndex);
?>

      </header>
    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content'} */
class Block_60305832164aff4d4c000d7_38358030 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php echo $_smarty_tpl->tpl_vars['maintenance_text']->value;?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_78418258764aff4d4bffa94_31653987 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content page-maintenance">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_60305832164aff4d4c000d7_38358030', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer_container'} */
class Block_211170355064aff4d4c01139_57962052 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_151791557464aff4d4bf8bd7_51678135 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_151791557464aff4d4bf8bd7_51678135',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_145827446264aff4d4bf91e3_20040955',
  ),
  'page_header_logo' => 
  array (
    0 => 'Block_183150759164aff4d4bf9732_77952898',
  ),
  'hook_maintenance' => 
  array (
    0 => 'Block_88184977764aff4d4bfc380_30309344',
  ),
  'page_header' => 
  array (
    0 => 'Block_96499924964aff4d4bfd110_39872601',
  ),
  'page_title' => 
  array (
    0 => 'Block_107414681264aff4d4bfd634_78506032',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_78418258764aff4d4bffa94_31653987',
  ),
  'page_content' => 
  array (
    0 => 'Block_60305832164aff4d4c000d7_38358030',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_211170355064aff4d4c01139_57962052',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_145827446264aff4d4bf91e3_20040955', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_78418258764aff4d4bffa94_31653987', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_211170355064aff4d4c01139_57962052', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
