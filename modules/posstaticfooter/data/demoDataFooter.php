<?php

class demoDataFooter
{
    public function initData()
    {
        $return = true;
        $languages = Language::getLanguages(true);
        $id_shop = Context::getContext()->shop->id;
        $id_hook_footer = (int)Hook::getIdByName('displayFooter');
        $id_hook_footerafter = (int)Hook::getIdByName('displayFooterAfter');
        $id_hook_footerbottom = (int)Hook::getIdByName('displayFooterBottom');
        $queries = [
            'INSERT INTO `'._DB_PREFIX_.'posstaticfooter` (`id_posstaticfooter`, `id_hook`, `position`, `width`, `type_content`, `name_module`, `content`,`active_title`) VALUES
                (1, '.$id_hook_footer.', 1, 3, 1, 0, \'{"cms":[false],"product":[false],"static":[false]}\', 0),
                (2, '.$id_hook_footer.', 2, 3, 1, 0, \'{"cms":[false],"product":[false],"static":[false]}\', 1),
				(3, '.$id_hook_footer.', 3, 3, 0, 0, \'{"cms":["1","4","5"],"product":[false],"static":["contact","sitemap","stores"]}\', 1),
				(4, '.$id_hook_footer.', 4, 3, 1, \'ps_socialfollow\', \'{"cms":[false],"product":[false],"static":[false]}\', 1),
				(5, '.$id_hook_footerafter.', 5, 6, 1,\'ps_emailsubscription\', \'{"cms":[false],"product":[false],"static":[false]}\', 1),
				(6, '.$id_hook_footerafter.', 6, 6, 1, 0, \'{"cms":[false],"product":[false],"static":[false]}\', 0),
				(7, '.$id_hook_footerbottom.', 7, 12, 1, 0, \'{"cms":[false],"product":[false],"static":[false]}\', 0);'
        ];

        foreach (Language::getLanguages(true, Context::getContext()->shop->id) as $lang) {
            $queries[] = 'INSERT INTO `'._DB_PREFIX_.'posstaticfooter_lang` (`id_posstaticfooter`, `id_lang`, `name`, `html_content`, `custom_content`) VALUES
                (1, '.(int)$lang['id_lang'].', "About us", \'<div class="footer_about_us">
					<div class="logo_footer">
						<a href="#"><img src="/pos_corano/img/cms/logo_footer.png" alt=""></a>
					</div>
					<div class="desc_info">
						We are a team of designers and developers that create high quality Magento, Prestashop, Opencart.
					</div>
				</div>\', ""),
                (2, '.(int)$lang['id_lang'].', "Contact",\'	<div class="contact-footer">
						<p class="address add">
							<span>4710-4890 Breckinridge USA</span>
						</p>
						<p class="email add">
							<a href="#">demo@posthemes.com</a>
						</p>
						<p class="phone add">
							<span>1-1001-234-5678</span>
						</p>
					</div>	\', ""),
				(3, '.(int)$lang['id_lang'].', "Information", "", ""),
				(4, '.(int)$lang['id_lang'].', "Follow Us", "", ""),				
				(5, '.(int)$lang['id_lang'].', "Sign up to Newsletter", "", ""),
				(6, '.(int)$lang['id_lang'].', "Payment Block", \'<div class="payment"><img src="/pos_corano/img/cms/payment.png" alt="" class="img-responsive"></div>\', ""),				
				(7, '.(int)$lang['id_lang'].', "Copyright Block", \'<div class="copyright">Copyright © 2019 <a href="http://posthemes.com/">Posthemes</a>. All Rights Reserved</div>\', "")'
				
            ;
        }

        $queries[] = 'INSERT INTO `'._DB_PREFIX_.'posstaticfooter_shop` (`id_posstaticfooter`, `id_shop`) VALUES
                (1, 1),
                (2, 1),
                (3, 1),
                (4, 1),
                (5, 1),
                (6, 1),
                (7, 1)';

        foreach ($queries as $query) {
            $return &= Db::getInstance()->execute($query);
        }

        return $return;
    }
}
?>