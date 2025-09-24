<?php

class demoData
{
    public function initData()
    {
        $return = true;
        $languages = Language::getLanguages(true);
        $id_shop = Context::getContext()->shop->id;
        $id_hook_nav = (int)Hook::getIdByName('displayNav');
        $id_hook_top = (int)Hook::getIdByName('displayTopColumn');
        $id_hook_home = (int)Hook::getIdByName('displayHome');
        $id_hook_bottom = (int)Hook::getIdByName('displayContainerbottom');
        
        $queries = [
            'INSERT INTO `'._DB_PREFIX_.'pos_staticblock` (`id_pos_staticblock`, `id_hook`, `position`, `name`,`active`) VALUES
                (1, '.$id_hook_nav.', 1, "Static Nav", 1),
                (2, '.$id_hook_top.', 2, "Custom Text", 1),
                (3, '.$id_hook_top.', 3, "Static Cms", 1),
                (4, '.$id_hook_home.', 4, "Home Banner", 1),
                (5, '.$id_hook_bottom.', 5, "Left Banner", 1)'
        ];

        foreach (Language::getLanguages(true, Context::getContext()->shop->id) as $lang) {
            $queries[] = 'INSERT INTO `'._DB_PREFIX_.'pos_staticblock_lang` (`id_pos_staticblock`, `id_lang`, `content`) VALUES
                (1, '.(int)$lang['id_lang'].', \'<div id="_desktop_static">
				<div class="static-nav">Free shipping for all products</div>
				</div>\'),
                (2, '.(int)$lang['id_lang'].', \'<div class="container">
				<div class="custom_text">Corano - Multipurpose Responsive #prestashop #Theme" on #Envato by <span>@Posthemes #Themeforest <a href="#">https://t.co/DNdhAwzm88</a></span></div>
				</div>\'),
				(3, '.(int)$lang['id_lang'].', \'<div class="static-info">
				<div class="container">
				<div class="row">
				<div class="col col-md-6 col-lg-3  col-sm-6 col-xs-12">
				<div class="info info1">
				<h4>Free Shipping</h4>
				<span>Free shipping on all US order or order above $200</span></div>
				</div>
				<div class="col col-md-6 col-lg-3  col-sm-6 col-xs-12">
				<div class="info info2">
				<h4>Support 24/7</h4>
				<span>Contact us 24 hours a day, 7 days a week</span></div>
				</div>
				<div class="col col-md-6 col-lg-3  col-sm-6 col-xs-12">
				<div class="info info3">
				<h4>30 Days Return</h4>
				<span>Simply return it within 30 days for an exchange</span></div>
				</div>
				<div class="col col-md-6 col-lg-3  col-sm-6 col-xs-12">
				<div class="info info4">
				<h4>100% Payment Secure</h4>
				<span>We ensure secure payment with PEV</span></div>
				</div>
				</div>
				</div>
				</div>\'),
				(4, '.(int)$lang['id_lang'].', \'<div class="home-banner">
				<div class="row">
				<div class="col col-right col-lg-6 col-md-6 col-sm-12  col-xs-12">
				<div class="banner-box"><img src="/pos_corano/img/cms/1_1.jpg" alt="" />
				<div class="txt_cms">
				<h3>Beautiful</h3>
				<h2>Wedding</h2>
				<h2>Rings</h2>
				<a href="#">Shop Now</a></div>
				</div>
				</div>
				<div class="col col-lg-6 col-md-6 col-sm-12  col-xs-12">
				<div class="banner-box"><img src="/pos_corano/img/cms/2_1.jpg" alt="" />
				<div class="txt_cms">
				<h3>earring</h3>
				<h2>Tangerine Floral</h2>
				<h2>Earring</h2>
				<a href="#">Shop Now</a></div>
				</div>
				</div>
				</div>
				<div class="row">
				<div class="col col-lg-6 col-md-6 col-sm-12  col-xs-12">
				<div class="banner-box"><img src="/pos_corano/img/cms/3_1.jpg" alt="" />
				<div class="txt_cms">
				<h3>new arrivals</h3>
				<h2>Pearl</h2>
				<h2>Necklaces</h2>
				<a href="#">Shop Now</a></div>
				</div>
				</div>
				<div class="col col-right col-lg-6 col-md-6 col-sm-12  col-xs-12">
				<div class="banner-box"><img src="/pos_corano/img/cms/4_1.jpg" alt="" />
				<div class="txt_cms">
				<h3>new design</h3>
				<h2>Diamond</h2>
				<h2>Jewelry</h2>
				<a href="#">Shop Now</a></div>
				</div>
				</div>
				</div>
				</div>\'),
                (5, '.(int)$lang['id_lang'].', \'<div class="left-banner col-lg-6 col-md-12 col-sm-12  col-xs-12">
				<div class="banner-box"><img src="/pos_corano/img/cms/5_1.jpg" alt="" />
				<div class="txt_cms">
				<h3>Beautiful</h3>
				<h2>Wedding Rings</h2>
				<a href="#">Shop Now</a></div>
				</div>
				</div>\')'
            ;
        }

        $queries[] = 'INSERT INTO `'._DB_PREFIX_.'pos_staticblock_shop` (`id_pos_staticblock`, `id_shop`) VALUES
                (1, 1),
                (2, 1),   
				(3, 1),
                (4, 1),  
                (5, 1)'; 

        foreach ($queries as $query) {
            $return &= Db::getInstance()->execute($query);
        }

        return $return;
    }
}
?>