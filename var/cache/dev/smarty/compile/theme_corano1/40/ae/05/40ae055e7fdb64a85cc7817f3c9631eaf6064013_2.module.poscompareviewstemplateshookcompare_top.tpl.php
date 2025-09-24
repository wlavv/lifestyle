<?php
/* Smarty version 4.3.4, created on 2024-12-06 09:32:13
  from 'module:poscompareviewstemplateshookcompare_top.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6752c49d63d7f5_89327089',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40ae055e7fdb64a85cc7817f3c9631eaf6064013' => 
    array (
      0 => 'module:poscompareviewstemplateshookcompare_top.tpl',
      1 => 1678521914,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6752c49d63d7f5_89327089 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin C:\xampp\htdocs\lifestyle/modules/poscompare/views/templates/hook/compare_top.tpl --><div id="_desktop_compare">
	<div class="compare_top">
		<a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['content_dir']->value, ENT_QUOTES, 'UTF-8');?>
module/poscompare/comparePage">
			<i class="pe-7s-refresh-2"></i><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Compare','mod'=>'poscompare'),$_smarty_tpl ) );?>
 <span
						id="poscompare-nb"></span></span>
		</a>
	</div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
var baseDir ='<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['content_dir']->value, ENT_QUOTES, 'UTF-8');?>
'; 
<?php echo '</script'; ?>
>
<!-- end C:\xampp\htdocs\lifestyle/modules/poscompare/views/templates/hook/compare_top.tpl --><?php }
}
