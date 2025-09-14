<?php
/* Smarty version 4.3.4, created on 2024-10-22 21:20:13
  from 'C:\xampp\htdocs\lifestyle\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_671808fd161d85_61097020',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '14677b657367b6ee48cdc2e338cb23a02189ea9a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lifestyle\\themes\\classic\\templates\\page.tpl',
      1 => 1729359195,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_671808fd161d85_61097020 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_950026004671808fd15a989_79165348', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_1427721054671808fd15b3c2_74341371 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_1343939403671808fd15ae80_99974668 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1427721054671808fd15b3c2_74341371', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_1185728746671808fd15f849_55723193 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_1932305932671808fd15ffa7_23116245 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_15691445671808fd15dc15_47626639 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1185728746671808fd15f849_55723193', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1932305932671808fd15ffa7_23116245', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_116338646671808fd161151_05229051 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_25864918671808fd1608f1_82999553 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_116338646671808fd161151_05229051', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_950026004671808fd15a989_79165348 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_950026004671808fd15a989_79165348',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_1343939403671808fd15ae80_99974668',
  ),
  'page_title' => 
  array (
    0 => 'Block_1427721054671808fd15b3c2_74341371',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_15691445671808fd15dc15_47626639',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_1185728746671808fd15f849_55723193',
  ),
  'page_content' => 
  array (
    0 => 'Block_1932305932671808fd15ffa7_23116245',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_25864918671808fd1608f1_82999553',
  ),
  'page_footer' => 
  array (
    0 => 'Block_116338646671808fd161151_05229051',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1343939403671808fd15ae80_99974668', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15691445671808fd15dc15_47626639', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_25864918671808fd1608f1_82999553', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
