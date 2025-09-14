<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__ad3630dbaf60f85687be2b7abc4cbc04 */
class __TwigTemplate_7b1a2be6d7898d3e109299dc146d4834 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"pt\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>SEO e URLs • Life Style</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminMeta';
    var iso_user = 'pt';
    var lang_is_rtl = '0';
    var full_language_code = 'pt-pt';
    var full_cldr_language_code = 'pt-PT';
    var country_iso_code = 'PT';
    var _PS_VERSION_ = '8.2.0';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'A new order has been placed on your store.';
    var order_number_msg = 'Número da encomenda: ';
    var total_msg = 'Total: ';
    var from_msg = 'De: ';
    var see_order_msg = 'Ver esta encomenda';
    var new_customer_msg = 'A new customer registered on your store.';
    var customer_name_msg = 'Nome do cliente: ';
    var new_msg = 'A new message was posted on your store.';
    var see_msg = 'Ler esta mensagem';
    var token = '04cf3f3483a8ed2114b1093eeab664de';
    var currentIndex = 'index.php?controller=AdminMeta';
    var employee_token = '6ccbaaaf4180464656563f6a8f917d03';
    var choose_language_translate = 'Escolher idioma:';
    var default_language = '2';
    var admin_modules_link = '/admin77500/index.php/improve/modules/manage?_token=k-cLLgKV9lVfDw27nLAas6vkjkE91EITadd_rWBEn6Y';
    var admin_notification_get_link = '/admin77500/index.php/common/notifications?_token=k-cLLgKV9lVfDw27nLAas6vkjkE91EITadd_rWBEn6Y';
    var admin_notification_push_link = adminNotificationPushLink = '/admin77500/index.php/common/notifications/ack?_token=k-cLLgKV9lVfDw27nLAas6vkjkE91EITadd_rWBEn6Y';
    var tab_modules_list = '';
    var update_success_msg = 'Atualizado com sucesso';
    var search_product_msg = 'Pesquisar um pr";
        // line 43
        echo "oduto';
  </script>



<link
      rel=\"preload\"
      href=\"/admin77500/themes/new-theme/public/2d8017489da689caedc1.preload..woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/admin77500/themes/new-theme/public/create_product_default_theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin77500/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin77500/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/admin77500\\/\";
var baseDir = \"\\/\";
var changeFormLanguageUrl = \"\\/admin77500\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=k-cLLgKV9lVfDw27nLAas6vkjkE91EITadd_rWBEn6Y\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"Euro\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"EUR\",\"currencySymbol\":\"\\u20ac\",\"numberSymbols\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new";
        // line 70
        echo "_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/admin77500/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/admin77500/themes/new-theme/public/multistore_dropdown.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=8.2.0\"></script>
<script type=\"text/javascript\" src=\"/admin77500/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=8.2.0\"></script>
<script type=\"text/javascript\" src=\"/admin77500/themes/new-theme/public/create_product.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/admin77500/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/blockwishlist/public/vendors.js\"></script>

  

";
        // line 87
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-pt adminmeta multishop-enabled\"
  data-base-url=\"/admin77500/index.php\"  data-token=\"k-cLLgKV9lVfDw27nLAas6vkjkE91EITadd_rWBEn6Y\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://lifestyle.local/admin77500/index.php?controller=AdminDashboard&amp;token=80a25971ac7cefb6056feba3d832f5e5\"></a>
      <span id=\"shop_version\">8.2.0</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Acesso Rápido
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://lifestyle.local/admin77500/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=03571e8d0edcfb9a415a21ebe5c9ced6\"
                 data-item=\"Avaliação do catálogo\"
      >Avaliação do catálogo</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://lifestyle.local/admin77500/index.php/sell/orders?token=59b18c8243971cbf21cd0ecc6a2bc905\"
                 data-item=\"Encomendas\"
      >Encomendas</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://lifestyle.local/admin77500/index.php/improve/modules/manage?token=59b18c8243971cbf21cd0ecc6a2bc905\"
                 data-item=\"Módulos instalados\"
      >Módulos instalados</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://lifestyle.local/admin77500/index.php/sell/catalog/categories/new?token=59b18c8243971cbf21cd0ecc6a2bc905\"
                 data-item=\"Nova Categoria\"
      >Nova Categoria</a>
          <a class=\"dropdown-item quick-row-lin";
        // line 124
        echo "k \"
         href=\"http://lifestyle.local/admin77500/index.php/sell/catalog/products/new?token=59b18c8243971cbf21cd0ecc6a2bc905\"
                 data-item=\"Novo produto\"
      >Novo produto</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://lifestyle.local/admin77500/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=f3fcfdfaca6d4c9a4dadfec52f9fff6b\"
                 data-item=\"Novo Voucher\"
      >Novo Voucher</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://lifestyle.local/admin77500/index.php?controller=AdminModules&amp;&amp;configure=xipblog&amp;token=7ce4934086e2ae06784ad2e750786b46\"
                 data-item=\"XipBlog Settings\"
      >XipBlog Settings</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"52\"
        data-icon=\"icon-AdminParentMeta\"
        data-method=\"add\"
        data-url=\"index.php/configure/shop/seo-urls/?-cLLgKV9lVfDw27nLAas6vkjkE91EITadd_rWBEn6Y\"
        data-post-link=\"http://lifestyle.local/admin77500/index.php?controller=AdminQuickAccesses&token=a7db0dd1c08db0707fec548a31b24c59\"
        data-prompt-text=\"Atribua um nome a este atalho:\"
        data-link=\"SEO e URLs - Lista\"
      >
        <i class=\"material-icons\">add_circle</i>
        Adicionar página atual ao «Acesso Rápido»
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://lifestyle.local/admin77500/index.php?controller=AdminQuickAccesses&token=a7db0dd1c08db0707fec548a31b24c59\">
      <i class=\"material-icons\">settings</i>
      Gerir os seus acessos rápidos
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      metho";
        // line 163
        echo "d=\"post\"
      action=\"/admin77500/index.php?controller=AdminSearch&amp;token=cb6d663b2cc7366353eef3e57514b14b\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Pesquisar (por ex.: referência do produto, nome do cliente…)\" aria-label=\"Barra de pesquisa\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Em todo o lado
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Em todo o lado\" href=\"#\" data-value=\"0\" data-placeholder=\"O que procura?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Em todo o lado</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catálogo\" href=\"#\" data-value=\"1\" data-placeholder=\"Nome do produto, referência, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catálogo</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por nome\" href=\"#\" data-value=\"2\" data-placeholder=\"Nome\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clientes por nome</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por endereço IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clientes por endereço IP</a>
        <a class=\"dropdown-item\" data-item=\"Encomendas\" href=\"#\" data-value=\"3\" data-placeholder=\"Nº da Encomenda\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Encomendas</a>
        <a class=\"dropdown-item\" data-item=\"Faturas\" href=\"#\" data-value=\"4\" data-placeholder=\"Número da fatura\" data-icon=\"icon-book\"><i class=\"material-icons\">boo";
        // line 180
        echo "k</i> Faturas</a>
        <a class=\"dropdown-item\" data-item=\"Carrinhos\" href=\"#\" data-value=\"5\" data-placeholder=\"ID do Carrinho\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carrinhos</a>
        <a class=\"dropdown-item\" data-item=\"Módulos\" href=\"#\" data-value=\"7\" data-placeholder=\"Nome do Módulo\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Módulos</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">PESQUISAR</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
            <button class=\"component-search-cancel d-none\">Cancelar</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Acesso Rápido</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://lifestyle.local/admin77500/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=03571e8d0edcfb9a415a21ebe5c9ced6\"
             data-item=\"Avaliação do catálogo\"
    >Avaliação do catálogo</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://lifestyle.local/admin77500/index.php/sell/orders?token=59b18c8243971cbf21cd0ecc6a2bc905\"
             data-item=\"Encomendas\"
    >Encomendas</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://lifestyle.local/admin77500/index.php/improve/modules/manage?token=59b18c8243971cbf21cd0ecc6a2bc905\"
             data-item=\"Módulos instalados\"
    >Módulos instalados</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://lifestyle.local/admin77500/index.php/sell/catalog/categories/new?token=59b18c8243971cbf21cd0ecc6a2bc905\"
             data-item=\"Nova Categoria\"
    >Nova Categoria</a>
      <a class=\"dropdown-item quick-row-link\"
      ";
        // line 218
        echo " href=\"http://lifestyle.local/admin77500/index.php/sell/catalog/products/new?token=59b18c8243971cbf21cd0ecc6a2bc905\"
             data-item=\"Novo produto\"
    >Novo produto</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://lifestyle.local/admin77500/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=f3fcfdfaca6d4c9a4dadfec52f9fff6b\"
             data-item=\"Novo Voucher\"
    >Novo Voucher</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://lifestyle.local/admin77500/index.php?controller=AdminModules&amp;&amp;configure=xipblog&amp;token=7ce4934086e2ae06784ad2e750786b46\"
             data-item=\"XipBlog Settings\"
    >XipBlog Settings</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"192\"
      data-icon=\"icon-AdminParentMeta\"
      data-method=\"add\"
      data-url=\"index.php/configure/shop/seo-urls/?-cLLgKV9lVfDw27nLAas6vkjkE91EITadd_rWBEn6Y\"
      data-post-link=\"http://lifestyle.local/admin77500/index.php?controller=AdminQuickAccesses&token=a7db0dd1c08db0707fec548a31b24c59\"
      data-prompt-text=\"Atribua um nome a este atalho:\"
      data-link=\"SEO e URLs - Lista\"
    >
      <i class=\"material-icons\">add_circle</i>
      Adicionar página atual ao «Acesso Rápido»
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://lifestyle.local/admin77500/index.php?controller=AdminQuickAccesses&token=a7db0dd1c08db0707fec548a31b24c59\">
    <i class=\"material-icons\">settings</i>
    Gerir os seus acessos rápidos
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

      
      
      <div class=\"header-right\">
                          <div class=\"component header-right-component\" id=\"header-notifications-container\">
            <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown";
        // line 259
        echo "-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Encomendas<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Clientes<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Mensagens<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Nenhuma nova encomenda por enquanto :(<br>
              Verificou os seus <strong><a href=\"http://lifestyle.local/admin77500/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=5fdfa5a796a91c38bfa041582e286d57\">carrinhos abandonados</a></strong>?<br>A sua próxima encomenda poderá es";
        // line 309
        echo "tar escondida aí!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Nenhum novo cliente por enquanto :(<br>
              Tem estado ativo nas redes sociais estes últimos dias?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Sem nova mensagem por enquanto.<br>
              Ao que parece, todos os seus clientes estão satisfeitos :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registado <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
          </div>
        
        <div class=\"component\" id=\"header-employee-container\">
          <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle";
        // line 359
        echo "</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://lifestyle.local/img/pr/default.jpg\" alt=\"Bruno\" /></span>
        <span class=\"employee_profile\">Seja bem-vindo ao Bruno</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/admin77500/index.php/configure/advanced/employees/1/edit?_token=k-cLLgKV9lVfDw27nLAas6vkjkE91EITadd_rWBEn6Y\">
      <i class=\"material-icons\">edit</i>
      <span>O seu perfil</span>
    </a>
    </div>

    <p class=\"divider\"></p>

    
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://lifestyle.local/admin77500/index.php?controller=AdminLogin&amp;logout=1&amp;token=659310589aba3c1aeaccd458ceade003\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Fechar sessão</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/admin77500/index.php/configure/advanced/employees/toggle-navigation?_token=k-cLLgKV9lVfDw27nLAas6vkjkE91EITadd_rWBEn6Y\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"http://lifestyle.local/admin77500/index.php?controller=AdminDashboard&amp;token=80a25971ac7cefb6056feba3d832f5e5\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.2.0</span>
      </div>

      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"http://lifestyle.local/admin77500/index.php?controller=AdminDashb";
        // line 406
        echo "oard&amp;token=80a25971ac7cefb6056feba3d832f5e5\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Painel de controlo</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Vender</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/admin77500/index.php/sell/orders/?_token=k-cLLgKV9lVfDw27nLAas6vkjkE91EITadd_rWBEn6Y\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Encomendas
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/admin77500/index.php/sell/orders/?_token=k-cLLgKV9lVfDw27nLAas6vkjkE91EITadd_rWBEn6Y\" class=\"link\"> Encomendas
                                </a>
                              </li>

                                                                                  
                              
                                          ";
        // line 445
        echo "                  
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/admin77500/index.php/sell/orders/invoices/?_token=k-cLLgKV9lVfDw27nLAas6vkjkE91EITadd_rWBEn6Y\" class=\"link\"> Faturas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/admin77500/index.php/sell/orders/credit-slips/?_token=k-cLLgKV9lVfDw27nLAas6vkjkE91EITadd_rWBEn6Y\" class=\"link\"> Notas de Crédito
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/admin77500/index.php/sell/orders/delivery-slips/?_token=k-cLLgKV9lVfDw27nLAas6vkjkE91EITadd_rWBEn6Y\" class=\"link\"> Notas de Entrega
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://lifestyle.local/admin77500/index.php?controller=AdminCarts&amp;token=5fdfa5a796a91c38bfa041582e286d57\" class=\"link\"> Carrinhos de Compras
                                </a>
                              </li>

                                                                       ";
        // line 475
        echo "       </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/admin77500/index.php/sell/catalog/products?_token=k-cLLgKV9lVfDw27nLAas6vkjkE91EITadd_rWBEn6Y\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catálogo
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/admin77500/index.php/sell/catalog/products?_token=k-cLLgKV9lVfDw27nLAas6vkjkE91EITadd_rWBEn6Y\" class=\"link\"> Produtos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/admin77500/index.php/sell/catalog/categories?_token=k-cLLgKV9lVfDw27nLAas6vkjkE91EITadd_rWBEn6Y\" class=\"link\"> Categorias
                                </a>
                              </li>

             ";
        // line 508
        echo "                                                                     
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/admin77500/index.php/sell/catalog/monitoring/?_token=k-cLLgKV9lVfDw27nLAas6vkjkE91EITadd_rWBEn6Y\" class=\"link\"> Monitorização
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://lifestyle.local/admin77500/index.php?controller=AdminAttributesGroups&amp;token=e44ac4055c7e4128cf8f35aa940f5fa6\" class=\"link\"> Atributos e Características
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/admin77500/index.php/sell/catalog/brands/?_token=k-cLLgKV9lVfDw27nLAas6vkjkE91EITadd_rWBEn6Y\" class=\"link\"> Marcas e Fornecedores
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/admin77500/index.php/sell/attachments/?_token=k-cLLgKV9lVfDw27nLAas6vk";
        // line 536
        echo "jkE91EITadd_rWBEn6Y\" class=\"link\"> Ficheiros
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://lifestyle.local/admin77500/index.php?controller=AdminCartRules&amp;token=f3fcfdfaca6d4c9a4dadfec52f9fff6b\" class=\"link\"> Descontos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/admin77500/index.php/sell/stocks/?_token=k-cLLgKV9lVfDw27nLAas6vkjkE91EITadd_rWBEn6Y\" class=\"link\"> Stocks
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/admin77500/index.php/sell/customers/?_token=k-cLLgKV9lVfDw27nLAas6vkjkE91EITadd_rWBEn6Y\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Clientes
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                            ";
        // line 569
        echo "        keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/admin77500/index.php/sell/customers/?_token=k-cLLgKV9lVfDw27nLAas6vkjkE91EITadd_rWBEn6Y\" class=\"link\"> Clientes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/admin77500/index.php/sell/addresses/?_token=k-cLLgKV9lVfDw27nLAas6vkjkE91EITadd_rWBEn6Y\" class=\"link\"> Endereços
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://lifestyle.local/admin77500/index.php?controller=AdminCustomerThreads&amp;token=5e1031b0d998731dd1ff831ed4d73372\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Apoio ao Cliente
                      </span>
           ";
        // line 601
        echo "                                         <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://lifestyle.local/admin77500/index.php?controller=AdminCustomerThreads&amp;token=5e1031b0d998731dd1ff831ed4d73372\" class=\"link\"> Apoio ao Cliente
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/admin77500/index.php/sell/customer-service/order-messages/?_token=k-cLLgKV9lVfDw27nLAas6vkjkE91EITadd_rWBEn6Y\" class=\"link\"> Mensagens de Encomendas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://lifestyle.local/admin77500/index.php?controller=AdminReturn&amp;token=9b18768cc96c68833de7b3f97fe45498\" class=\"link\"> Mercadorias Devolvidas
                                </a>
                              </li>

             ";
        // line 630
        echo "                                                                 </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"http://lifestyle.local/admin77500/index.php?controller=AdminStats&amp;token=03571e8d0edcfb9a415a21ebe5c9ced6\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Estatísticas
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"179\" id=\"subtab-MoloniTab\">
                    <a href=\"http://lifestyle.local/admin77500/index.php?controller=MoloniStart&amp;token=617e0661d6e9a50499c0a89fbeefcd28\" class=\"link\">
                      <i class=\"material-icons mi-spa\">spa</i>
                      <span>
                      Moloni
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-179\" class=\"submenu panel-collapse\">
                                                   ";
        // line 662
        echo "   
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"180\" id=\"subtab-MoloniStart\">
                                <a href=\"http://lifestyle.local/admin77500/index.php?controller=MoloniStart&amp;token=617e0661d6e9a50499c0a89fbeefcd28\" class=\"link\"> Moloni
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"181\" id=\"subtab-MoloniMovimentos\">
                                <a href=\"http://lifestyle.local/admin77500/index.php?controller=MoloniMovimentos&amp;token=1c3f84119a422124e002b14473ae6510\" class=\"link\"> Documentos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"182\" id=\"subtab-MoloniConfiguracao\">
                                <a href=\"http://lifestyle.local/admin77500/index.php?controller=MoloniConfiguracao&amp;token=c9535bef290c1d65f59fd11409eff799\" class=\"link\"> Definições
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                                            
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"42\" id=\"tab-IMPROVE\">
                <span class=\"title\">Melhorar</span>
            </li>

                              
  ";
        // line 699
        echo "                
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/admin77500/index.php/improve/modules/manage?_token=k-cLLgKV9lVfDw27nLAas6vkjkE91EITadd_rWBEn6Y\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Módulos
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/admin77500/index.php/improve/modules/manage?_token=k-cLLgKV9lVfDw27nLAas6vkjkE91EITadd_rWBEn6Y\" class=\"link\"> Module Manager
                                </a>
                              </li>

                                                                                  
                              
                                                                                                                          
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminModules\">
                                <a href=\"http://lifestyle.local/admin77500/index.php?controller=AdminModules&amp;token=7ce4934086e2ae06784ad2e750786b46\" class=\"link\"> AdminModules
                                </a>
                              </li>

                    ";
        // line 729
        echo "                                                                                                                </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/admin77500/index.php/improve/design/themes/?_token=k-cLLgKV9lVfDw27nLAas6vkjkE91EITadd_rWBEn6Y\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Design
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"126\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/admin77500/index.php/improve/design/themes/?_token=k-cLLgKV9lVfDw27nLAas6vkjkE91EITadd_rWBEn6Y\" class=\"link\"> Tema Gráfico e Logótipo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"136\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"http://lifestyle.local/admin77500/index.php?controller=AdminPsMb";
        // line 758
        echo "oTheme&amp;token=b4e173bc61a9f0914a55a70b8afcd92b\" class=\"link\"> Catálogo do Tema Gráfico
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/admin77500/index.php/improve/design/mail_theme/?_token=k-cLLgKV9lVfDw27nLAas6vkjkE91EITadd_rWBEn6Y\" class=\"link\"> Email Theme
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/admin77500/index.php/improve/design/cms-pages/?_token=k-cLLgKV9lVfDw27nLAas6vkjkE91EITadd_rWBEn6Y\" class=\"link\"> Páginas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"58\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/admin77500/index.php/improve/design/modules/positions/?_token=k-cLLgKV9lVfDw27nLAas6vkjkE91EITadd_rWBEn6Y\" class=\"link\"> Posições
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"59\" id=\"subtab-A";
        // line 789
        echo "dminImages\">
                                <a href=\"http://lifestyle.local/admin77500/index.php?controller=AdminImages&amp;token=c2db0f3090419f48f3c15a5c22ca698d\" class=\"link\"> Definições de Imagem
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"125\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/admin77500/index.php/modules/link-widget/list?_token=k-cLLgKV9lVfDw27nLAas6vkjkE91EITadd_rWBEn6Y\" class=\"link\"> Link Widget
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"141\" id=\"subtab-AdminPosStaticblocks\">
                                <a href=\"http://lifestyle.local/admin77500/index.php?controller=AdminPosStaticblocks&amp;token=48b535ac3ed3ae108d91a82a491e1d56\" class=\"link\"> Pos Staticblocks
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"142\" id=\"subtab-AdminStaticFooter\">
                                <a href=\"http://lifestyle.local/admin77500/index.php?controller=AdminStaticFooter&amp;token=033c237e2c47eb6809ec86fe8ac8e7c1\" class=\"link\"> Pos Staticfooter
                                </a>
                              </li>

                                                                              </ul>
                           ";
        // line 819
        echo "             </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"60\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://lifestyle.local/admin77500/index.php?controller=AdminCarriers&amp;token=b740044e52116717af10be5e6473758a\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Envio
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-60\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"61\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://lifestyle.local/admin77500/index.php?controller=AdminCarriers&amp;token=b740044e52116717af10be5e6473758a\" class=\"link\"> Transportadoras
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminShipping\">
                                <a href=\"/admin77500/index.php/improve/shipping/preferences/?_token=k-cLLgKV9lVfDw27nLAas6vkjkE91EITadd_rWBEn6Y\" class=\"link\"> Preferências
                                </a>
                   ";
        // line 849
        echo "           </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"63\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/admin77500/index.php/improve/payment/payment_methods?_token=k-cLLgKV9lVfDw27nLAas6vkjkE91EITadd_rWBEn6Y\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Pagamento
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-63\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"64\" id=\"subtab-AdminPayment\">
                                <a href=\"/admin77500/index.php/improve/payment/payment_methods?_token=k-cLLgKV9lVfDw27nLAas6vkjkE91EITadd_rWBEn6Y\" class=\"link\"> Métodos de Pagamento
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"65\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/admin77500/index.php/improve/payment/preferences?_token=k-cLLgKV9lVf";
        // line 880
        echo "Dw27nLAas6vkjkE91EITadd_rWBEn6Y\" class=\"link\"> Preferências
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"66\" id=\"subtab-AdminInternational\">
                    <a href=\"/admin77500/index.php/improve/international/localization/?_token=k-cLLgKV9lVfDw27nLAas6vkjkE91EITadd_rWBEn6Y\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-66\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"67\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/admin77500/index.php/improve/international/localization/?_token=k-cLLgKV9lVfDw27nLAas6vkjkE91EITadd_rWBEn6Y\" class=\"link\"> Localização
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-Ad";
        // line 912
        echo "minParentCountries\">
                                <a href=\"/admin77500/index.php/improve/international/zones/?_token=k-cLLgKV9lVfDw27nLAas6vkjkE91EITadd_rWBEn6Y\" class=\"link\"> Localizações
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"76\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/admin77500/index.php/improve/international/taxes/?_token=k-cLLgKV9lVfDw27nLAas6vkjkE91EITadd_rWBEn6Y\" class=\"link\"> IVA
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminTranslations\">
                                <a href=\"/admin77500/index.php/improve/international/translations/settings?_token=k-cLLgKV9lVfDw27nLAas6vkjkE91EITadd_rWBEn6Y\" class=\"link\"> Traduções
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"146\" id=\"subtab-Adminxprtdashboard\">
                    <a href=\"http://lifestyle.local/admin77500/index.php?controller=Adminxippost&amp;token=2ccfc5324e3aa639a680cd1e599b7dc4\" class=\"link\">
                      <i class=\"material-icons mi-\"></i>
                      <span>
                      Xpert Blog
                      </spa";
        // line 944
        echo "n>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-146\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"147\" id=\"subtab-Adminxippost\">
                                <a href=\"http://lifestyle.local/admin77500/index.php?controller=Adminxippost&amp;token=2ccfc5324e3aa639a680cd1e599b7dc4\" class=\"link\"> Blog Posts
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"148\" id=\"subtab-Adminxipcategory\">
                                <a href=\"http://lifestyle.local/admin77500/index.php?controller=Adminxipcategory&amp;token=f650e592280c933bf865f62846ac60f2\" class=\"link\"> Blog Categories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"149\" id=\"subtab-Adminxipcomment\">
                                <a href=\"http://lifestyle.local/admin77500/index.php?controller=Adminxipcomment&amp;token=8c7fcb8aa51a8d1781c4c19149d5b34b\" class=\"link\"> Blog Comments
                                </a>
                              </li>

                       ";
        // line 974
        echo "                                                           
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"150\" id=\"subtab-Adminxipimagetype\">
                                <a href=\"http://lifestyle.local/admin77500/index.php?controller=Adminxipimagetype&amp;token=7c5814ebadafa449bd29ab077b2614c3\" class=\"link\"> Blog Image Type
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"193\" id=\"subtab-Marketing\">
                    <a href=\"http://lifestyle.local/admin77500/index.php?controller=AdminPsfacebookModule&amp;token=bdd659b903345471ccf990fc5be47c40\" class=\"link\">
                      <i class=\"material-icons mi-campaign\">campaign</i>
                      <span>
                      Marketing
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-193\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"194\" id=\"subtab-AdminPsfacebookModule\">
                                <a href=\"http://lifestyle.local/admin77500/index.php?controller=AdminPsfacebookModule&amp;token=bdd";
        // line 1003
        echo "659b903345471ccf990fc5be47c40\" class=\"link\"> Facebook
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"80\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configurar</span>
            </li>

                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"81\" id=\"subtab-ShopParameters\">
                    <a href=\"/admin77500/index.php/configure/shop/preferences/preferences?_token=k-cLLgKV9lVfDw27nLAas6vkjkE91EITadd_rWBEn6Y\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Parâmetros da Loja
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-81\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"82\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/admin77500/index.php/configure/shop/preferences/preferences?_token=k-cLLgKV9lVfDw27nLAas6vkjkE91EITadd_rWBEn6Y\" class=\"link\"> G";
        // line 1038
        echo "eral
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"85\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/admin77500/index.php/configure/shop/order-preferences/?_token=k-cLLgKV9lVfDw27nLAas6vkjkE91EITadd_rWBEn6Y\" class=\"link\"> Definições da Encomenda
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"88\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/admin77500/index.php/configure/shop/product-preferences/?_token=k-cLLgKV9lVfDw27nLAas6vkjkE91EITadd_rWBEn6Y\" class=\"link\"> Produtos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/admin77500/index.php/configure/shop/customer-preferences/?_token=k-cLLgKV9lVfDw27nLAas6vkjkE91EITadd_rWBEn6Y\" class=\"link\"> Definições do cliente
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminParentStores\">
   ";
        // line 1070
        echo "                             <a href=\"/admin77500/index.php/configure/shop/contacts/?_token=k-cLLgKV9lVfDw27nLAas6vkjkE91EITadd_rWBEn6Y\" class=\"link\"> Contacto
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"96\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/admin77500/index.php/configure/shop/seo-urls/?_token=k-cLLgKV9lVfDw27nLAas6vkjkE91EITadd_rWBEn6Y\" class=\"link\"> Tráfego e SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"100\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://lifestyle.local/admin77500/index.php?controller=AdminSearchConf&amp;token=29a70d7e3efa159d415a1202cb9422ef\" class=\"link\"> Pesquisar
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"130\" id=\"subtab-AdminGamification\">
                                <a href=\"http://lifestyle.local/admin77500/index.php?controller=AdminGamification&amp;token=78cc19cc33cdee0a343fd876ced38366\" class=\"link\"> Merchant Expertise
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                  ";
        // line 1100
        echo "                            
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"103\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/admin77500/index.php/configure/advanced/system-information/?_token=k-cLLgKV9lVfDw27nLAas6vkjkE91EITadd_rWBEn6Y\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Parâmetros Avançados
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-103\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"104\" id=\"subtab-AdminInformation\">
                                <a href=\"/admin77500/index.php/configure/advanced/system-information/?_token=k-cLLgKV9lVfDw27nLAas6vkjkE91EITadd_rWBEn6Y\" class=\"link\"> Informação
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminPerformance\">
                                <a href=\"/admin77500/index.php/configure/advanced/performance/?_token=k-cLLgKV9lVfDw27nLAas6vkjkE91EITadd_rWBEn6Y\" class=\"link\"> Desempenho
                                </a>
               ";
        // line 1129
        echo "               </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/admin77500/index.php/configure/advanced/administration/?_token=k-cLLgKV9lVfDw27nLAas6vkjkE91EITadd_rWBEn6Y\" class=\"link\"> Administração
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"107\" id=\"subtab-AdminEmails\">
                                <a href=\"/admin77500/index.php/configure/advanced/emails/?_token=k-cLLgKV9lVfDw27nLAas6vkjkE91EITadd_rWBEn6Y\" class=\"link\"> Email
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"108\" id=\"subtab-AdminImport\">
                                <a href=\"/admin77500/index.php/configure/advanced/import/?_token=k-cLLgKV9lVfDw27nLAas6vkjkE91EITadd_rWBEn6Y\" class=\"link\"> Importar
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"109\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/admin77500/index.php/configure/advanced/employees/?_token=k-cLLgKV9lVfDw27nLAas6vkjkE91E";
        // line 1159
        echo "ITadd_rWBEn6Y\" class=\"link\"> Empregados
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"113\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/admin77500/index.php/configure/advanced/sql-requests/?_token=k-cLLgKV9lVfDw27nLAas6vkjkE91EITadd_rWBEn6Y\" class=\"link\"> Base de dados
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"116\" id=\"subtab-AdminLogs\">
                                <a href=\"/admin77500/index.php/configure/advanced/logs/?_token=k-cLLgKV9lVfDw27nLAas6vkjkE91EITadd_rWBEn6Y\" class=\"link\"> Registos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"117\" id=\"subtab-AdminWebservice\">
                                <a href=\"/admin77500/index.php/configure/advanced/webservice-keys/?_token=k-cLLgKV9lVfDw27nLAas6vkjkE91EITadd_rWBEn6Y\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"118\" id=\"subtab-AdminShopGroup\">
                                <a";
        // line 1191
        echo " href=\"http://lifestyle.local/admin77500/index.php?controller=AdminShopGroup&amp;token=c063549379885a91172d6fcd223edf61\" class=\"link\"> Multi-Loja
                                </a>
                              </li>

                                                                                                                                        
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"211\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/admin77500/index.php/configure/advanced/feature-flags/?_token=k-cLLgKV9lVfDw27nLAas6vkjkE91EITadd_rWBEn6Y\" class=\"link\"> New &amp; Experimental Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"212\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"http://lifestyle.local/admin77500/index.php?controller=AdminParentSecurity&amp;token=f8bbc5e8fff784788534f297d0d9e6e7\" class=\"link\"> Security
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"218\" id=\"subtab-AdminSelfUpgrade\">
                    <a href=\"http://lifestyle.local/admin77500/index.php?controller=AdminSelfUpgrade&amp;token=07784564a88bfbdce8b087420f6094e7\" class=\"link\">
                      <i class=\"material-icons mi-upgrade\">upgrade</i>
                      <span>
               ";
        // line 1221
        echo "       1-Click Upgrade
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"143\" id=\"tab-AdminPosMenu\">
                <span class=\"title\">PosExtentions</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"144\" id=\"subtab-AdminTestimonials\">
                    <a href=\"http://lifestyle.local/admin77500/index.php?controller=AdminTestimonials&amp;token=c1b717eb2746176569cfde6d60591014\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Manage Testimonials
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"145\" id=\"subtab-AdminPosLogo\">
                    <a href=\"http://lifestyle.local/admin77500/index.php?controller=AdminPosLogo&amp;token=74fb8508949090d235999570b3e9649a\" class=\"link\">
                      <i cla";
        // line 1259
        echo "ss=\"material-icons mi-extension\">extension</i>
                      <span>
                      Manage Logo
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
        <div
        id=\"header-multishop\"
        class=\"header-multishop header-multishop-allshops header-multishop-dark\"
        data-all-shops=\"1\"                data-checkbox-notification=\"Para aplicar definições específicas a uma loja ou a um grupo de lojas, seleccione o parâmetro a modificar, faça as alterações e guarde. \"
    >
      <div class=\"header-multishop-top-bar\">
        <div class=\"header-multishop-center js-header-multishop-open-modal\">
                      <svg width=\"81px\" height=\"30px\" viewBox=\"0 0 81 30\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
  <defs>
    <path d=\"M6.548,0 L36.421,0 C38.378,0 40.056,1.309 40.528,3.208 L42.787,12.434 C43.324,14.588 42.83,16.805 41.453,18.536 C41.281,18.747 41.045,18.937 40.852,19.127 L40.852,30 L36.572,30 L36.572,21.047 C36.4,21.069 36.25,21.111 36.078,21.111 C34.206,21.111 32.507,20.352 31.259,19.106 C29.969,20.372 28.248,21.111 26.441,21.111 C24.506,21.111 22.786,20.352 21.516,19.148 C20.27,20.352 18.592,21.111 16.721,21.111 C14.764,21.111 13.043,20.372 11.753,19.106 C10.505,20.352 8.806,21.111 6.935,21.111 C6.763,21.111 6.612,21.069 6.441,21.047 L6.441,30 L2.139,30 L2.139,19.127 C1.945,18.916 1.709,18.747 1.537,18.515 C0.16,16.783 -0.312,14.588 0.204,12.434 L2.462,3.208 C2.914,1.33 4.613,0 6.548,0 Z M33.453,14.482 C33.604,15.854 34.744,16.888 36.05";
        // line 1286
        echo "6,16.888 C37.131,16.888 37.776,16.276 38.077,15.897 C38.636,15.2 38.831,14.314 38.615,13.426 L36.357,4.201 L32.207,4.223 L33.453,14.482 Z M23.646,14.124 C23.646,15.643 24.829,16.888 26.269,16.888 C27.151,16.888 27.84,16.572 28.312,16.024 C28.872,15.411 29.13,14.588 29.023,13.765 L27.862,4.223 L23.646,4.223 L23.646,14.124 Z M14.657,16.024 C15.172,16.572 15.839,16.888 16.57,16.888 C18.161,16.888 19.345,15.643 19.345,14.124 L19.345,4.223 L15.129,4.223 L13.947,13.765 C13.86,14.588 14.118,15.411 14.657,16.024 Z M4.935,15.897 C5.215,16.276 5.881,16.888 6.935,16.888 C8.247,16.888 9.366,15.854 9.537,14.482 L10.786,4.223 L6.548,4.223 L4.376,13.426 C4.16,14.314 4.354,15.221 4.935,15.897 Z\" id=\"path-1\"></path>
  </defs>
  <g id=\"Page-1\" stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\" opacity=\"0.6\">
    <g id=\"Group-9\">
      <g id=\"Group-3\" transform=\"translate(19.000000, 0.000000)\">
        <mask id=\"mask-2\" fill=\"black\">
          <use xlink:href=\"#path-1\"></use>
        </mask>
        <use id=\"Clip-2\" fill=\"black\" xlink:href=\"#path-1\"></use>
      </g>
      <g id=\"Group-8\" transform=\"translate(0.000000, 4.000000)\" fill=\"black\">
        <path d=\"M4.2258,11.7283 L6.0998,3.8023 L9.7558,3.8023 L8.6798,12.6373 C8.5318,13.8193 7.5658,14.7093 6.4338,14.7093 C5.5248,14.7093 4.9498,14.1833 4.7078,13.8553 C4.2068,13.2733 4.0398,12.4923 4.2258,11.7283 M2.2958,16.6373 L2.2958,25.9113 L6.0068,25.9113 L6.0068,18.2913 C6.1558,18.3093 6.2858,18.3453 6.4338,18.3453 C8.0488,18.3453 9.5138,17.6913 10.5898,16.6183 C11.7048,17.7093 13.1888,18.3453 14.8768,18.3453 C16.2248,18.3453 17.4538,17.8843 18.4508,17.1303 C18.0988,16.6513 17.1618,15.7283 16.5088,13.9473 C16.0798,14.4133 15.4638,14.7093 14.7468,14.7093 C14.1168,14.7093 13.5408,14.4373 13.0958,13.9643 C12.6318,13.4373 12.4098,12.7283 12.4838,12.0193 L13.5038,3.8023 L17.1408,3.8023 L17.1408,5.0093 C17.4468,3.5693 17.8188,1.9613 18.2638,0.1663 L6.0998,0.1663 C4.4298,0.1663 2.9638,1.3113 2.5748,2.9303 L0.6258,10.8743 C0.1808,1";
        // line 1297
        echo "2.7283 0.5888,14.6193 1.7768,16.1093 C1.9248,16.3103 2.1288,16.4553 2.2958,16.6373\" id=\"Fill-4\"></path>
        <path d=\"M75.1653,3.8025 L77.0393,11.7285 C77.2253,12.4915 77.0583,13.2735 76.5573,13.8555 C76.3153,14.1825 75.7403,14.7095 74.8313,14.7095 C73.6993,14.7095 72.7343,13.8195 72.5863,12.6375 L71.5103,3.8025 L75.1653,3.8025 Z M66.5193,14.7095 C65.8023,14.7095 65.1863,14.4135 64.7563,13.9475 C64.1033,15.7285 63.1663,16.6515 62.8143,17.1305 C63.8113,17.8845 65.0403,18.3455 66.3893,18.3455 C68.0773,18.3455 69.5613,17.7095 70.6753,16.6185 C71.7513,17.6915 73.2173,18.3455 74.8313,18.3455 C74.9793,18.3455 75.1093,18.3095 75.2583,18.2915 L75.2583,26.0025 L78.9693,26.0025 L78.9693,16.6365 C79.1363,16.4545 79.3403,16.3095 79.4883,16.1095 C80.6763,14.6185 81.0843,12.7285 80.6393,10.8745 L78.6903,2.9295 C78.3013,1.3115 76.8353,0.1665 75.1653,0.1665 L63.0013,0.1665 C63.4463,1.9615 63.8183,3.5695 64.1253,5.0095 L64.1253,3.8025 L67.7623,3.8025 L68.7823,12.0195 C68.8563,12.7285 68.6343,13.4375 68.1703,13.9645 C67.7253,14.4375 67.1493,14.7095 66.5193,14.7095 Z\" id=\"Fill-6\"></path>
      </g>
    </g>
  </g>
</svg>
          
          <h2 class=\"header-multishop-title\">
            Todas as lojas
          </h2>

          <button class=\"header-multishop-button\">
            <i class=\"material-icons\">expand_more</i>
          </button>
        </div>
      </div>

      
      <div id=\"multishop-modal\" class=\"multishop-modal multishop-modal-hidden js-multishop-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"multishop-modal\" aria-hidden=\"true\">
        <div class=\"multishop-modal-dialog js-multishop-modal-dialog\" role=\"document\">
          <div class=\"multishop-modal-body\">
                                    <div class=\"multishop-modal-search-container\">
              <i class=\"material-icons\">search</i>
              <input type=\"text\" class=\"form-control multishop-modal-search js-multishop-modal-search\" placeholder=\"Search store name\" data-no-results=\"Não foram encont";
        // line 1320
        echo "rados resultados para\" data-searching=\"Pesquisar por\">
            </div>
                        
            <ul class=\"multishop-modal-group-list js-multishop-scrollbar\">
                                <li class=\"multishop-modal-all multishop-modal-item\">
                                      <i class=\"material-icons\">check</i>
                                    <a class=\"multishop-modal-all-name\" href=\"/admin77500/index.php/configure/shop/seo-urls/?_token=k-cLLgKV9lVfDw27nLAas6vkjkE91EITadd_rWBEn6Y&amp;setShopContext=\">
                    <span>Todas as lojas</span>
                  </a>
                </li>
                
                              <li class=\"multishop-modal-group-item multishop-modal-item first-group-item\">
                                    <span class=\"multishop-modal-color-container\">
                    <i class=\"material-icons\">check</i>
                    <a class=\"multishop-modal-color\" href=\"http://lifestyle.local/admin77500/index.php?controller=AdminShopGroup&amp;id_shop_group=1&amp;updateshop_group=1&amp;token=c063549379885a91172d6fcd223edf61\" data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"top\" data-content=\"Editar cor\" data-original-title=\"\" title=\"\"></a>
                  </span>
                  <a class=\"multishop-modal-group-name\" href=\"/admin77500/index.php/configure/shop/seo-urls/?_token=k-cLLgKV9lVfDw27nLAas6vkjkE91EITadd_rWBEn6Y&amp;setShopContext=g-1\">Grupo Default</a>
                                  </li>

                                  <li class=\"multishop-modal-shop-item multishop-modal-item\">
                                        <div class=\"multishop-modal-item-left\">
                      <span class=\"multishop-modal-color-container\">
                        <i class=\"material-icons\">check</i>
                        <a class=\"multishop-modal-color\" style=\"background-color: #ffb809;\" href=\"http://lifestyle.local/admin77500/index.php?controller=AdminShop&amp;shop_id=1&amp;updateshop=1&am";
        // line 1343
        echo "p;token=58881507d54dfb873ebda3d8b388f74b\" data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"top\" data-content=\"Editar cor\" data-original-title=\"\" title=\"\"></a>
                      </span>
                      <a class=\"multishop-modal-shop-name\" href=\"/admin77500/index.php/configure/shop/seo-urls/?_token=k-cLLgKV9lVfDw27nLAas6vkjkE91EITadd_rWBEn6Y&amp;setShopContext=s-1\">Life Style</a>                    </div>
                                          <a class=\"multishop-modal-shop-view\" href=\"http://lifestyle.local/\" target=\"_blank\" rel=\"noreferrer\">View my store <i class=\"material-icons\">visibility</i></a>
                                                          </li>
                                  <li class=\"multishop-modal-shop-item multishop-modal-item\">
                                        <div class=\"multishop-modal-item-left\">
                      <span class=\"multishop-modal-color-container\">
                        <i class=\"material-icons\">check</i>
                        <a class=\"multishop-modal-color\" style=\"background-color: #0da900;\" href=\"http://lifestyle.local/admin77500/index.php?controller=AdminShop&amp;shop_id=2&amp;updateshop=1&amp;token=58881507d54dfb873ebda3d8b388f74b\" data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"top\" data-content=\"Editar cor\" data-original-title=\"\" title=\"\"></a>
                      </span>
                      <a class=\"multishop-modal-shop-name multishop-modal-no-url\">Casual Vibes</a>                    </div>
                                          <a class=\"multishop-modal-shop-view\" href=\"http://lifestyle.local/admin77500/index.php?controller=AdminShopUrl&amp;shop_id=2&amp;addshop_url=1&amp;token=d49029ca7afa25cb4659f428b9c939d6\" rel=\"noreferrer\">Configurar URL <i class=\"material-icons\">visibility</i></a>
                                                          </li>
                                  <li class=\"multishop-modal-shop-item multishop-modal-item\">
                    ";
        // line 1358
        echo "                    <div class=\"multishop-modal-item-left\">
                      <span class=\"multishop-modal-color-container\">
                        <i class=\"material-icons\">check</i>
                        <a class=\"multishop-modal-color\" style=\"background-color: #f40d00;\" href=\"http://lifestyle.local/admin77500/index.php?controller=AdminShop&amp;shop_id=3&amp;updateshop=1&amp;token=58881507d54dfb873ebda3d8b388f74b\" data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"top\" data-content=\"Editar cor\" data-original-title=\"\" title=\"\"></a>
                      </span>
                      <a class=\"multishop-modal-shop-name multishop-modal-no-url\">As Yourself</a>                    </div>
                                          <a class=\"multishop-modal-shop-view\" href=\"http://lifestyle.local/admin77500/index.php?controller=AdminShopUrl&amp;shop_id=3&amp;addshop_url=1&amp;token=d49029ca7afa25cb4659f428b9c939d6\" rel=\"noreferrer\">Configurar URL <i class=\"material-icons\">visibility</i></a>
                                                          </li>
                                  <li class=\"multishop-modal-shop-item multishop-modal-item\">
                                        <div class=\"multishop-modal-item-left\">
                      <span class=\"multishop-modal-color-container\">
                        <i class=\"material-icons\">check</i>
                        <a class=\"multishop-modal-color\" style=\"background-color: #fd25ff;\" href=\"http://lifestyle.local/admin77500/index.php?controller=AdminShop&amp;shop_id=4&amp;updateshop=1&amp;token=58881507d54dfb873ebda3d8b388f74b\" data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"top\" data-content=\"Editar cor\" data-original-title=\"\" title=\"\"></a>
                      </span>
                      <a class=\"multishop-modal-shop-name multishop-modal-no-url\">2 Play 4 Fun</a>                    </div>
                                          <a class=\"multishop-modal-shop-view\" href=\"http://lifesty";
        // line 1373
        echo "le.local/admin77500/index.php?controller=AdminShopUrl&amp;shop_id=4&amp;addshop_url=1&amp;token=d49029ca7afa25cb4659f428b9c939d6\" rel=\"noreferrer\">Configurar URL <i class=\"material-icons\">visibility</i></a>
                                                          </li>
                                  <li class=\"multishop-modal-shop-item multishop-modal-item\">
                                        <div class=\"multishop-modal-item-left\">
                      <span class=\"multishop-modal-color-container\">
                        <i class=\"material-icons\">check</i>
                        <a class=\"multishop-modal-color\" style=\"background-color: #3973ff;\" href=\"http://lifestyle.local/admin77500/index.php?controller=AdminShop&amp;shop_id=5&amp;updateshop=1&amp;token=58881507d54dfb873ebda3d8b388f74b\" data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"top\" data-content=\"Editar cor\" data-original-title=\"\" title=\"\"></a>
                      </span>
                      <a class=\"multishop-modal-shop-name multishop-modal-no-url\">World Decor</a>                    </div>
                                          <a class=\"multishop-modal-shop-view\" href=\"http://lifestyle.local/admin77500/index.php?controller=AdminShopUrl&amp;shop_id=5&amp;addshop_url=1&amp;token=d49029ca7afa25cb4659f428b9c939d6\" rel=\"noreferrer\">Configurar URL <i class=\"material-icons\">visibility</i></a>
                                                          </li>
                                  <li class=\"multishop-modal-shop-item multishop-modal-item\">
                                        <div class=\"multishop-modal-item-left\">
                      <span class=\"multishop-modal-color-container\">
                        <i class=\"material-icons\">check</i>
                        <a class=\"multishop-modal-color\" style=\"background-color: #017cff;\" href=\"http://lifestyle.local/admin77500/index.php?controller=AdminShop&amp;shop_id=6&amp;updateshop=1&amp;token=58881507d54dfb873ebda3d8b388f7";
        // line 1388
        echo "4b\" data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"top\" data-content=\"Editar cor\" data-original-title=\"\" title=\"\"></a>
                      </span>
                      <a class=\"multishop-modal-shop-name multishop-modal-no-url\">InnovaTech-Vibe</a>                    </div>
                                          <a class=\"multishop-modal-shop-view\" href=\"http://lifestyle.local/admin77500/index.php?controller=AdminShopUrl&amp;shop_id=6&amp;addshop_url=1&amp;token=d49029ca7afa25cb4659f428b9c939d6\" rel=\"noreferrer\">Configurar URL <i class=\"material-icons\">visibility</i></a>
                                                          </li>
                                          </ul>
          </div>
        </div>
      </div>
    </div>

    <script src=\"/admin77500/themes/new-theme/public/multistore_header.bundle.js?8.2.0\"></script>
  
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Tráfego e SEO</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/admin77500/index.php/configure/shop/seo-urls/?_token=k-cLLgKV9lVfDw27nLAas6vkjkE91EITadd_rWBEn6Y\" aria-current=\"page\">SEO e URLs</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            SEO e URLs          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-add\"
                  href=\"/admin77500/index.php/configure/shop/seo-urls/new?_token=k-cLLgKV9lVfDw27nLAas6vkjkE91EITadd_rWBEn6Y\"                  title=\"Adicionar nova página\"                                  >
                  <i class=\"material-icons\">add_circle_outline</i>                  Adicionar nov";
        // line 1428
        echo "a página
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Ajuda\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/admin77500/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fpt%252Fdoc%252FAdminMeta%253Fversion%253D8.2.0%2526country%253Dpt/Ajuda?_token=k-cLLgKV9lVfDw27nLAas6vkjkE91EITadd_rWBEn6Y\"
                   id=\"product_form_open_help\"
                >
                  Ajuda
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     ";
        // line 1451
        echo "                                                                                                                                                                                                                                                                                                                                                                                                         <li class=\"nav-item\">
                    <a href=\"/admin77500/index.php/configure/shop/seo-urls/?_token=k-cLLgKV9lVfDw27nLAas6vkjkE91EITadd_rWBEn6Y\" id=\"subtab-AdminMeta\" class=\"nav-link tab active current\" data-submenu=\"97\">
                      SEO e URLs
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/admin77500/index.php/configure/shop/search-engines/?_token=k-cLLgKV9lVfDw27nLAas6vkjkE91EITadd_rWBEn6Y\" id=\"subtab-AdminSearchEngines\" class=\"nav-link tab \" data-submenu=\"98\">
                      Motores de Pesquisa
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        </ul>
    </div>
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"colla";
        // line 1471
        echo "pse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-add\"
              href=\"/admin77500/index.php/configure/shop/seo-urls/new?_token=k-cLLgKV9lVfDw27nLAas6vkjkE91EITadd_rWBEn6Y\"              title=\"Adicionar nova página\"            >
              Adicionar nova página
              <i class=\"material-icons\">add_circle_outline</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Ajuda\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/admin77500/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fpt%252Fdoc%252FAdminMeta%253Fversion%253D8.2.0%2526country%253Dpt/Ajuda?_token=k-cLLgKV9lVfDw27nLAas6vkjkE91EITadd_rWBEn6Y\"
            >
              Ajuda
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  with-tabs\">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1508
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh, não!</h1>
  <p class=\"mt-3\">
    A versão móvel desta página ainda não está disponível.
  </p>
  <p class=\"mt-2\">
    Utilize um computador para obter acesso a esta página, até ser adaptada para um telemóvel.
  </p>
  <p class=\"mt-2\">
    Obrigado.
  </p>
  <a href=\"http://lifestyle.local/admin77500/index.php?controller=AdminDashboard&amp;token=80a25971ac7cefb6056feba3d832f5e5\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Voltar
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1542
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 87
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1508
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1542
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "__string_template__ad3630dbaf60f85687be2b7abc4cbc04";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1735 => 1542,  1714 => 1508,  1703 => 87,  1694 => 1542,  1654 => 1508,  1615 => 1471,  1593 => 1451,  1568 => 1428,  1526 => 1388,  1509 => 1373,  1492 => 1358,  1475 => 1343,  1450 => 1320,  1425 => 1297,  1412 => 1286,  1383 => 1259,  1343 => 1221,  1311 => 1191,  1277 => 1159,  1245 => 1129,  1214 => 1100,  1182 => 1070,  1148 => 1038,  1111 => 1003,  1080 => 974,  1048 => 944,  1014 => 912,  980 => 880,  947 => 849,  915 => 819,  883 => 789,  850 => 758,  819 => 729,  787 => 699,  748 => 662,  714 => 630,  683 => 601,  649 => 569,  614 => 536,  584 => 508,  549 => 475,  517 => 445,  476 => 406,  427 => 359,  375 => 309,  323 => 259,  280 => 218,  240 => 180,  221 => 163,  180 => 124,  138 => 87,  119 => 70,  90 => 43,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__ad3630dbaf60f85687be2b7abc4cbc04", "");
    }
}
