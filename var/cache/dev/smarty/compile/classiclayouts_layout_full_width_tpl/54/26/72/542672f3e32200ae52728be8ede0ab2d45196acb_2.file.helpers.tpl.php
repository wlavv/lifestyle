<?php
/* Smarty version 4.3.4, created on 2024-10-22 21:20:13
  from 'C:\xampp\htdocs\lifestyle\themes\classic\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_671808fd9c20f1_79948195',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '542672f3e32200ae52728be8ede0ab2d45196acb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lifestyle\\themes\\classic\\templates\\_partials\\helpers.tpl',
      1 => 1729359195,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_671808fd9c20f1_79948195 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\lifestyle\\var\\cache\\dev\\smarty\\compile\\classiclayouts_layout_full_width_tpl\\54\\26\\72\\542672f3e32200ae52728be8ede0ab2d45196acb_2.file.helpers.tpl.php',
    'uid' => '542672f3e32200ae52728be8ede0ab2d45196acb',
    'call_name' => 'smarty_template_function_renderLogo_1410951392671808fd8dc839_79261501',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_1410951392671808fd8dc839_79261501 */
if (!function_exists('smarty_template_function_renderLogo_1410951392671808fd8dc839_79261501')) {
function smarty_template_function_renderLogo_1410951392671808fd8dc839_79261501(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_1410951392671808fd8dc839_79261501 */
}
