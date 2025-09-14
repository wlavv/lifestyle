<?php
/* Smarty version 4.3.4, created on 2024-10-20 10:18:55
  from 'C:\xampp\htdocs\lifestyle\admin77500\themes\new-theme\template\components\layout\error_messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6714caffaa2227_46415094',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0fe2cf9b61d86158069e344a4bbb1d90a0778a3a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lifestyle\\admin77500\\themes\\new-theme\\template\\components\\layout\\error_messages.tpl',
      1 => 1729359111,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6714caffaa2227_46415094 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\lifestyle\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
if (count($_smarty_tpl->tpl_vars['errors']->value) && current($_smarty_tpl->tpl_vars['errors']->value) != '' && (!(isset($_smarty_tpl->tpl_vars['disableDefaultErrorOutPut']->value)) || $_smarty_tpl->tpl_vars['disableDefaultErrorOutPut']->value == false)) {?>
  <div class="bootstrap">
    <div class="alert alert-danger">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <?php if (count($_smarty_tpl->tpl_vars['errors']->value) == 1) {?>
        <?php echo reset($_smarty_tpl->tpl_vars['errors']->value);?>

      <?php } else { ?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There are %d errors.','sprintf'=>array(smarty_modifier_count($_smarty_tpl->tpl_vars['errors']->value)),'d'=>'Admin.Notifications.Error'),$_smarty_tpl ) );?>

        <br/>
        <ol>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'error');
$_smarty_tpl->tpl_vars['error']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->do_else = false;
?>
            <li><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ol>
      <?php }?>
    </div>
  </div>
<?php }
}
}
