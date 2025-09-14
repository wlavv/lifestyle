<?php
/* Smarty version 4.3.4, created on 2024-10-22 21:20:13
  from 'C:\xampp\htdocs\lifestyle\themes\classic\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_671808fd036e27_21247011',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a07302cb7235476a8a4f729b5ed02de0ec2c3cb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lifestyle\\themes\\classic\\templates\\index.tpl',
      1 => 1729359195,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_671808fd036e27_21247011 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1299529063671808fd031b74_05127027', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_981252151671808fd0321f6_41963038 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_1642566730671808fd032db0_47658826 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_360236358671808fd032a05_98831367 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1642566730671808fd032db0_47658826', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_1299529063671808fd031b74_05127027 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_1299529063671808fd031b74_05127027',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_981252151671808fd0321f6_41963038',
  ),
  'page_content' => 
  array (
    0 => 'Block_360236358671808fd032a05_98831367',
  ),
  'hook_home' => 
  array (
    0 => 'Block_1642566730671808fd032db0_47658826',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_981252151671808fd0321f6_41963038', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_360236358671808fd032a05_98831367', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
