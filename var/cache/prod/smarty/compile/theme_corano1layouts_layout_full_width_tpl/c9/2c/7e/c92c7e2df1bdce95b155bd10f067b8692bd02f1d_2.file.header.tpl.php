<?php
/* Smarty version 4.3.4, created on 2024-10-20 10:22:20
  from 'C:\xampp\htdocs\lifestyle\themes\theme_corano1\templates\_partials\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6714cbccaaa745_56507268',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c92c7e2df1bdce95b155bd10f067b8692bd02f1d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lifestyle\\themes\\theme_corano1\\templates\\_partials\\header.tpl',
      1 => 1699115582,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6714cbccaaa745_56507268 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2109244976714cbccaa4c09_41856838', 'header_banner');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_427852006714cbccaa5d43_26852883', 'header_nav');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12555009676714cbccaa6de9_65532042', 'header_top');
?>


<?php }
/* {block 'header_banner'} */
class Block_2109244976714cbccaa4c09_41856838 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_banner' => 
  array (
    0 => 'Block_2109244976714cbccaa4c09_41856838',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="header-banner">
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBanner'),$_smarty_tpl ) );?>

</div>
<?php
}
}
/* {/block 'header_banner'} */
/* {block 'header_nav'} */
class Block_427852006714cbccaa5d43_26852883 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_nav' => 
  array (
    0 => 'Block_427852006714cbccaa5d43_26852883',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<nav class="header-nav">
	<div class="container-fluid"> 
		<div class="hidden-md-down">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav'),$_smarty_tpl ) );?>

		</div>
		<div class="hidden-lg-up  mobile">
			<div class="row row-mobile">
				<div class="col-mobile mobile-top col-md-12 col-xs-12">
					<div class="top-logo" id="_mobile_logo"></div>
				</div>
				<div class="col-mobile mobile-bottom col-md-12 col-xs-12">
					
					<div class="float-xs-left" id="menu-icon">
						<i class="pe-7s-menu"></i>
					</div>
					<div id="mobile_top_menu_wrapper" class="row hidden-lg-up" style="display:none;">
						<div class="top-header-mobile">
							<div id="_mobile_static"></div>
						</div>
						<div id="_mobile_currency_selector"></div>
						<div id="_mobile_language_selector"></div>				
						<div class="menu-close"> 
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'menu','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
 <i class="material-icons float-xs-right">arrow_back</i>
						</div>
						<div class="menu-tabs">							
							<div class="js-top-menu-bottom">												
								<div id="_mobile_megamenu"></div>
							</div>
							
						</div>
					</div>
					<div id="_mobile_user_info"></div>
					<div id="_mobile_compare"></div>
					<div id="_mobile_wishtlist"></div>
					<div id="_mobile_cart_block"></div>
				</div>
			</div>
			<div id="_mobile_search_block"></div>
		</div>
	</div>
</nav>
<?php
}
}
/* {/block 'header_nav'} */
/* {block 'header_top'} */
class Block_12555009676714cbccaa6de9_65532042 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_top' => 
  array (
    0 => 'Block_12555009676714cbccaa6de9_65532042',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="header-top hidden-md-down">
	<div class="container-fluid">
		<div class="row">
			<div class="col col col-lg-3" id="_desktop_logo">
				<?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {?>
				<a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
">
				<img class="logo img-responsive" src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
" width="175" height="56">
				</a>
				<?php } else { ?>
				<a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
">
				<img class="logo img-responsive" src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
" width="175" height="56">
				</a>
				<?php }?>
			</div>
			<div class=" col col-lg-9 col-sm-12 position-static">	
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayMegamenu'),$_smarty_tpl ) );?>

				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTop'),$_smarty_tpl ) );?>

			</div>
			
		</div>
	</div>

</div>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavFullWidth'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'header_top'} */
}
