<?php
/* Smarty version 4.2.1, created on 2023-10-07 08:45:43
  from 'module:poscompareviewstemplatesh' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_65210ca7cb6304_75027300',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40ae055e7fdb64a85cc7817f3c9631eaf6064013' => 
    array (
      0 => 'module:poscompareviewstemplatesh',
      1 => 1678521914,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65210ca7cb6304_75027300 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /home/brunofer/public_html/life-style.pt/public_html/modules/poscompare/views/templates/hook/compare_top.tpl --><div id="_desktop_compare">
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
<!-- end /home/brunofer/public_html/life-style.pt/public_html/modules/poscompare/views/templates/hook/compare_top.tpl --><?php }
}
