<?php
/* Smarty version 4.2.1, created on 2023-10-04 07:50:13
  from '/home/brunofer/public_html/life-style.pt/public_html/themes/theme_corano1/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_651d0b25b3c033_85971314',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '684ac558bbcda1734e5663fb8289dd3248c14f69' => 
    array (
      0 => '/home/brunofer/public_html/life-style.pt/public_html/themes/theme_corano1/templates/page.tpl',
      1 => 1678521959,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_651d0b25b3c033_85971314 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1236018096651d0b25b34483_66007235', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_1250807372651d0b25b352c7_66468219 extends Smarty_Internal_Block
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
class Block_2118841449651d0b25b34ab3_84908116 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1250807372651d0b25b352c7_66468219', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_339325564651d0b25b395a4_64033867 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_1749467584651d0b25b39ec3_74121741 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_614110809651d0b25b38f99_67818490 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_339325564651d0b25b395a4_64033867', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1749467584651d0b25b39ec3_74121741', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_680914683651d0b25b3b1e5_86356816 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_135357241651d0b25b3ac51_66985481 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_680914683651d0b25b3b1e5_86356816', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_1236018096651d0b25b34483_66007235 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1236018096651d0b25b34483_66007235',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_2118841449651d0b25b34ab3_84908116',
  ),
  'page_title' => 
  array (
    0 => 'Block_1250807372651d0b25b352c7_66468219',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_614110809651d0b25b38f99_67818490',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_339325564651d0b25b395a4_64033867',
  ),
  'page_content' => 
  array (
    0 => 'Block_1749467584651d0b25b39ec3_74121741',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_135357241651d0b25b3ac51_66985481',
  ),
  'page_footer' => 
  array (
    0 => 'Block_680914683651d0b25b3b1e5_86356816',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2118841449651d0b25b34ab3_84908116', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_614110809651d0b25b38f99_67818490', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_135357241651d0b25b3ac51_66985481', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
