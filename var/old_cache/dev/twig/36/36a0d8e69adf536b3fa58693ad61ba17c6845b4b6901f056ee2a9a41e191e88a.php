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

/* __string_template__7d97f0cd227efdc94b3631b280a775af3b1036d9ce696f9e8fa761607d00f0a3 */
class __TwigTemplate_d5bf123ad59f0e542d2bedf99d0cdf93e6ee6c66f4bad3327267472dc84ac314 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__7d97f0cd227efdc94b3631b280a775af3b1036d9ce696f9e8fa761607d00f0a3"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__7d97f0cd227efdc94b3631b280a775af3b1036d9ce696f9e8fa761607d00f0a3"));

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

<title>Performance • Life Style</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminPerformance';
    var iso_user = 'pt';
    var lang_is_rtl = '0';
    var full_language_code = 'pt-pt';
    var full_cldr_language_code = 'pt-PT';
    var country_iso_code = 'PT';
    var _PS_VERSION_ = '8.0.0';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'A new order has been placed on your shop.';
    var order_number_msg = 'Order number: ';
    var total_msg = 'Total: ';
    var from_msg = 'From: ';
    var see_order_msg = 'View this order';
    var new_customer_msg = 'A new customer registered on your shop.';
    var customer_name_msg = 'Customer name: ';
    var new_msg = 'A new message was posted on your shop.';
    var see_msg = 'Read this message';
    var token = 'ae836315442fdf3859f2077c1a78ceff';
    var token_admin_orders = tokenAdminOrders = 'c3e255d5b5cecfbd2568bbf66efd5f79';
    var token_admin_customers = '297718d126d38d2619d0c87e5aac29cc';
    var token_admin_customer_threads = tokenAdminCustomerThreads = '5e1031b0d998731dd1ff831ed4d73372';
    var currentIndex = 'index.php?controller=AdminPerformance';
    var employee_token = '6ccbaaaf4180464656563f6a8f917d03';
    var choose_language_translate = 'Choose language:';
    var default_language = '2';
    var admin_modules_link = '/admin77500/index.php/improve/modules/manage?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA';
    var admin_notification_get_link = '/admin77500/index.php/common/notifications?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA';
    var admin_notification_push_link = admi";
        // line 43
        echo "nNotificationPushLink = '/admin77500/index.php/common/notifications/ack?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA';
    var tab_modules_list = '';
    var update_success_msg = 'Update successful';
    var search_product_msg = 'Search for a product';
  </script>



<link
      rel=\"preload\"
      href=\"/admin77500/themes/new-theme/public/auto703cf8f274fbb265d49c6262825780e1.preload.woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/admin77500/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin77500/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/admin77500\\/\";
var baseDir = \"\\/\";
var changeFormLanguageUrl = \"\\/admin77500\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"Euro\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"EUR\",\"currencySymbol\":\"\\u20ac\",\"numberSymbols\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":true};";
        // line 69
        echo "
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/admin77500/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=8.0.0\"></script>
<script type=\"text/javascript\" src=\"/admin77500/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=8.0.0\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/admin77500/themes/default/js/vendor/nv.d3.min.js\"></script>

  

";
        // line 85
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-pt adminperformance\"
  data-base-url=\"/admin77500/index.php\"  data-token=\"vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"https://life-style.pt/admin77500/index.php?controller=AdminDashboard&amp;token=80a25971ac7cefb6056feba3d832f5e5\"></a>
      <span id=\"shop_version\">8.0.0</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Quick Access
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://life-style.pt/admin77500/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=03571e8d0edcfb9a415a21ebe5c9ced6\"
                 data-item=\"Avaliação do catálogo\"
      >Avaliação do catálogo</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://life-style.pt/admin77500/index.php/sell/orders?token=59b18c8243971cbf21cd0ecc6a2bc905\"
                 data-item=\"Encomendas\"
      >Encomendas</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://life-style.pt/admin77500/index.php/improve/modules/manage?token=59b18c8243971cbf21cd0ecc6a2bc905\"
                 data-item=\"Módulos instalados\"
      >Módulos instalados</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://life-style.pt/admin77500/index.php/sell/catalog/categories/new?token=59b18c8243971cbf21cd0ecc6a2bc905\"
                 data-item=\"Nova Categoria\"
      >Nova Categoria</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http";
        // line 123
        echo "s://life-style.pt/admin77500/index.php/sell/catalog/products/new?token=59b18c8243971cbf21cd0ecc6a2bc905\"
                 data-item=\"Novo produto\"
      >Novo produto</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://life-style.pt/admin77500/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=f3fcfdfaca6d4c9a4dadfec52f9fff6b\"
                 data-item=\"Novo Voucher\"
      >Novo Voucher</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://life-style.pt/admin77500/index.php?controller=AdminModules&amp;&amp;configure=xipblog&amp;token=7ce4934086e2ae06784ad2e750786b46\"
                 data-item=\"XipBlog Settings\"
      >XipBlog Settings</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"190\"
        data-icon=\"icon-AdminAdvancedParameters\"
        data-method=\"add\"
        data-url=\"index.php/configure/advanced/performance\"
        data-post-link=\"https://life-style.pt/admin77500/index.php?controller=AdminQuickAccesses&token=a7db0dd1c08db0707fec548a31b24c59\"
        data-prompt-text=\"Please name this shortcut:\"
        data-link=\"Desempenho - List\"
      >
        <i class=\"material-icons\">add_circle</i>
        Add current page to Quick Access
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"https://life-style.pt/admin77500/index.php?controller=AdminQuickAccesses&token=a7db0dd1c08db0707fec548a31b24c59\">
      <i class=\"material-icons\">settings</i>
      Manage your quick accesses
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/admin77500/index.php?controller=AdminSearch&amp;token=cb";
        // line 162
        echo "6d663b2cc7366353eef3e57514b14b\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Search (e.g.: product reference, customer name…)\" aria-label=\"Searchbar\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Everywhere
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Everywhere\" href=\"#\" data-value=\"0\" data-placeholder=\"What are you looking for?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Everywhere</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalog\" href=\"#\" data-value=\"1\" data-placeholder=\"Product name, reference, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalog</a>
        <a class=\"dropdown-item\" data-item=\"Customers by name\" href=\"#\" data-value=\"2\" data-placeholder=\"Name\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Customers by name</a>
        <a class=\"dropdown-item\" data-item=\"Customers by ip address\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Customers by IP address</a>
        <a class=\"dropdown-item\" data-item=\"Orders\" href=\"#\" data-value=\"3\" data-placeholder=\"Order ID\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Orders</a>
        <a class=\"dropdown-item\" data-item=\"Invoices\" href=\"#\" data-value=\"4\" data-placeholder=\"Invoice number\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Invoices</a>
        <a class=\"dropdown-item\" data-item=\"Carts\" href=\"#\" data-value=\"5\" data-placeholder=\"Cart ID\" data-icon=\"i";
        // line 179
        echo "con-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carts</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Module name\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">SEARCH</span><i class=\"material-icons\">search</i></button>
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
            <button class=\"component-search-cancel d-none\">Cancel</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Quick Access</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://life-style.pt/admin77500/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=03571e8d0edcfb9a415a21ebe5c9ced6\"
             data-item=\"Avaliação do catálogo\"
    >Avaliação do catálogo</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://life-style.pt/admin77500/index.php/sell/orders?token=59b18c8243971cbf21cd0ecc6a2bc905\"
             data-item=\"Encomendas\"
    >Encomendas</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://life-style.pt/admin77500/index.php/improve/modules/manage?token=59b18c8243971cbf21cd0ecc6a2bc905\"
             data-item=\"Módulos instalados\"
    >Módulos instalados</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://life-style.pt/admin77500/index.php/sell/catalog/categories/new?token=59b18c8243971cbf21cd0ecc6a2bc905\"
             data-item=\"Nova Categoria\"
    >Nova Categoria</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://life-style.pt/admin77500/index.php/sell/catalog/products/new?token=59b18c8243971cbf21cd0ecc6a2bc905\"
             data-item=\"Novo produto\"
    >Novo ";
        // line 218
        echo "produto</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://life-style.pt/admin77500/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=f3fcfdfaca6d4c9a4dadfec52f9fff6b\"
             data-item=\"Novo Voucher\"
    >Novo Voucher</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://life-style.pt/admin77500/index.php?controller=AdminModules&amp;&amp;configure=xipblog&amp;token=7ce4934086e2ae06784ad2e750786b46\"
             data-item=\"XipBlog Settings\"
    >XipBlog Settings</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"1\"
      data-icon=\"icon-AdminAdvancedParameters\"
      data-method=\"add\"
      data-url=\"index.php/configure/advanced/performance\"
      data-post-link=\"https://life-style.pt/admin77500/index.php?controller=AdminQuickAccesses&token=a7db0dd1c08db0707fec548a31b24c59\"
      data-prompt-text=\"Please name this shortcut:\"
      data-link=\"Desempenho - List\"
    >
      <i class=\"material-icons\">add_circle</i>
      Add current page to Quick Access
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"https://life-style.pt/admin77500/index.php?controller=AdminQuickAccesses&token=a7db0dd1c08db0707fec548a31b24c59\">
    <i class=\"material-icons\">settings</i>
    Manage your quick accesses
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

              <div class=\"component hide-mobile-sm\" id=\"header-debug-mode-container\">
          <a class=\"link shop-state\"
             id=\"debug-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"<p class=&quot;text-left&quot;><strong>Your shop is in debug mode.</strong></p><p class=&quot;text-left&quot;>All the PHP errors and messages are displayed. When you no longer need it, &lt;strong&gt;turn off&lt;/strong&gt; this mode.</p>\"
      ";
        // line 259
        echo "       href=\"/admin77500/index.php/configure/advanced/performance/?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\"
          >
            <i class=\"material-icons\">bug_report</i>
            <span>Debug mode</span>
          </a>
        </div>
      
              <div class=\"component hide-mobile-sm\" id=\"header-maintenance-mode-container\">
          <a class=\"link shop-state\"
             id=\"maintenance-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"<p class=&quot;text-left&quot;><strong>Your shop is in maintenance.</strong></p><p class=&quot;text-left&quot;>Your visitors and customers cannot access your shop while in maintenance mode.&lt;br /&gt; To manage the maintenance settings, go to Shop Parameters &amp;gt; Maintenance tab.</p>\" href=\"/admin77500/index.php/configure/shop/maintenance/?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\"
          >
            <i class=\"material-icons\">build</i>
            <span>Maintenance mode</span>
          </a>
        </div>
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"https://life-style.pt/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>View my shop</span>
    </a>
  </div>
          </div>
                          <div class=\"component header-right-component\" id=\"header-notifications-container\">
            <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
        ";
        // line 297
        echo "                  <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Orders<span id=\"_nb_new_orders_\"></span>
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
              Customers<span id=\"_nb_new_customers_\"></span>
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
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new order for now :(<br>
              Have you checked your <strong><a href=\"https://life-style.pt/admin77500/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=5fdfa5a796a91c38bfa041582e286d57\">abandoned carts</a></strong>?<br>Your next order could be hiding there!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new customer for now :(<br>
              Are you active on social media these ";
        // line 347
        echo "days?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new message for now.<br>
              Seems like all your customers are happy :)
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
      from <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registered <strong>_date_add_</strong>
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
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"https://life-style.pt/img/pr/default.jpg\" alt=\"Bruno\" /></span>
        <span class=\"employee_profile\">Welcome back Bruno</span>
      </div>

      <a class=\"dropdown-item employee";
        // line 399
        echo "-link profile-link\" href=\"/admin77500/index.php/configure/advanced/employees/1/edit?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\">
      <i class=\"material-icons\">edit</i>
      <span>Your profile</span>
    </a>
    </div>

    <p class=\"divider\"></p>

    
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"https://life-style.pt/admin77500/index.php?controller=AdminLogin&amp;logout=1&amp;token=659310589aba3c1aeaccd458ceade003\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Sign out</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/admin77500/index.php/configure/advanced/employees/toggle-navigation?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"https://life-style.pt/admin77500/index.php?controller=AdminDashboard&amp;token=80a25971ac7cefb6056feba3d832f5e5\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.0.0</span>
      </div>

      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"https://life-style.pt/admin77500/index.php?controller=AdminDashboard&amp;token=80a25971ac7cefb6056feba3d832f5e5\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Painel de controlo</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Vende";
        // line 448
        echo "r</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/admin77500/index.php/sell/orders/?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\">
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
                                <a href=\"/admin77500/index.php/sell/orders/?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\"> Encomendas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/admin77500/index.php/sell/orders/invoices/?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\"> Faturas
                                </a>
                              </li>

                                                             ";
        // line 482
        echo "                     
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/admin77500/index.php/sell/orders/credit-slips/?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\"> Notas de Crédito
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/admin77500/index.php/sell/orders/delivery-slips/?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\"> Notas de Entrega
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"https://life-style.pt/admin77500/index.php?controller=AdminCarts&amp;token=5fdfa5a796a91c38bfa041582e286d57\" class=\"link\"> Carrinhos de Compras
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/admin77500/index.php/sell/catalog/products?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbN";
        // line 513
        echo "QTg8pxA\" class=\"link\">
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
                                <a href=\"/admin77500/index.php/sell/catalog/products?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\"> Produtos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/admin77500/index.php/sell/catalog/categories?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\"> Categorias
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/admin77500/index.php/sell/catalog/monitoring/?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link";
        // line 543
        echo "\"> Monitorização
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"https://life-style.pt/admin77500/index.php?controller=AdminAttributesGroups&amp;token=e44ac4055c7e4128cf8f35aa940f5fa6\" class=\"link\"> Atributos e Características
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/admin77500/index.php/sell/catalog/brands/?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\"> Marcas e Fornecedores
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/admin77500/index.php/sell/attachments/?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\"> Ficheiros
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
             ";
        // line 575
        echo "                   <a href=\"https://life-style.pt/admin77500/index.php?controller=AdminCartRules&amp;token=f3fcfdfaca6d4c9a4dadfec52f9fff6b\" class=\"link\"> Descontos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/admin77500/index.php/sell/stocks/?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\"> Stocks
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/admin77500/index.php/sell/customers/?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Clientes
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                            ";
        // line 607
        echo "  <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/admin77500/index.php/sell/customers/?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\"> Clientes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/admin77500/index.php/sell/addresses/?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\"> Endereços
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"https://life-style.pt/admin77500/index.php?controller=AdminCustomerThreads&amp;token=5e1031b0d998731dd1ff831ed4d73372\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Apoio ao Cliente
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                 ";
        // line 637
        echo "                     
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"https://life-style.pt/admin77500/index.php?controller=AdminCustomerThreads&amp;token=5e1031b0d998731dd1ff831ed4d73372\" class=\"link\"> Apoio ao Cliente
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/admin77500/index.php/sell/customer-service/order-messages/?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\"> Mensagens de Encomendas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"https://life-style.pt/admin77500/index.php?controller=AdminReturn&amp;token=9b18768cc96c68833de7b3f97fe45498\" class=\"link\"> Mercadorias Devolvidas
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"https://life-style.pt/admin77500/index.php?cont";
        // line 668
        echo "roller=AdminStats&amp;token=03571e8d0edcfb9a415a21ebe5c9ced6\" class=\"link\">
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
                    <a href=\"https://life-style.pt/admin77500/index.php?controller=MoloniStart&amp;token=617e0661d6e9a50499c0a89fbeefcd28\" class=\"link\">
                      <i class=\"material-icons mi-spa\">spa</i>
                      <span>
                      Moloni
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-179\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"180\" id=\"subtab-MoloniStart\">
                                <a href=\"https://life-style.pt/admin77500/index.php?controller=MoloniStart&amp;token=617e0661d6e9a50499c0a89fbeefcd28\" class=\"link\"> Moloni
                                </a>
                ";
        // line 699
        echo "              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"181\" id=\"subtab-MoloniMovimentos\">
                                <a href=\"https://life-style.pt/admin77500/index.php?controller=MoloniMovimentos&amp;token=1c3f84119a422124e002b14473ae6510\" class=\"link\"> Documentos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"182\" id=\"subtab-MoloniConfiguracao\">
                                <a href=\"https://life-style.pt/admin77500/index.php?controller=MoloniConfiguracao&amp;token=c9535bef290c1d65f59fd11409eff799\" class=\"link\"> Definições
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                                            
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"42\" id=\"tab-IMPROVE\">
                <span class=\"title\">Melhorar</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/admin77500/index.php/improve/modules/manage?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
          ";
        // line 736
        echo "            <span>
                      Módulos
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/admin77500/index.php/improve/modules/manage?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\"> Module Manager
                                </a>
                              </li>

                                                                                  
                              
                                                                                                                          
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminModules\">
                                <a href=\"https://life-style.pt/admin77500/index.php?controller=AdminModules&amp;token=7ce4934086e2ae06784ad2e750786b46\" class=\"link\"> AdminModules
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                ";
        // line 767
        echo "    <a href=\"/admin77500/index.php/improve/design/themes/?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\">
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
                                <a href=\"/admin77500/index.php/improve/design/themes/?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\"> Tema Gráfico e Logótipo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"136\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"https://life-style.pt/admin77500/index.php?controller=AdminPsMboTheme&amp;token=b4e173bc61a9f0914a55a70b8afcd92b\" class=\"link\"> Catálogo do Tema Gráfico
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-";
        // line 796
        echo "AdminParentMailTheme\">
                                <a href=\"/admin77500/index.php/improve/design/mail_theme/?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\"> Email Theme
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/admin77500/index.php/improve/design/cms-pages/?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\"> Páginas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"58\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/admin77500/index.php/improve/design/modules/positions/?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\"> Posições
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"59\" id=\"subtab-AdminImages\">
                                <a href=\"https://life-style.pt/admin77500/index.php?controller=AdminImages&amp;token=c2db0f3090419f48f3c15a5c22ca698d\" class=\"link\"> Definições de Imagem
                                </a>
                              </li>

                                                                                  
                              
                                     ";
        // line 827
        echo "                       
                              <li class=\"link-leveltwo\" data-submenu=\"125\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/admin77500/index.php/modules/link-widget/list?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\"> Link Widget
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"141\" id=\"subtab-AdminPosStaticblocks\">
                                <a href=\"https://life-style.pt/admin77500/index.php?controller=AdminPosStaticblocks&amp;token=48b535ac3ed3ae108d91a82a491e1d56\" class=\"link\"> Pos Staticblocks
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"142\" id=\"subtab-AdminStaticFooter\">
                                <a href=\"https://life-style.pt/admin77500/index.php?controller=AdminStaticFooter&amp;token=033c237e2c47eb6809ec86fe8ac8e7c1\" class=\"link\"> Pos Staticfooter
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"60\" id=\"subtab-AdminParentShipping\">
                    <a href=\"https://life-style.pt/admin77500/index.php?controller=AdminCarriers&amp;token=b740044e52116717af10be5e6473758a\" class=\"link\">
        ";
        // line 857
        echo "              <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Envio
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-60\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"61\" id=\"subtab-AdminCarriers\">
                                <a href=\"https://life-style.pt/admin77500/index.php?controller=AdminCarriers&amp;token=b740044e52116717af10be5e6473758a\" class=\"link\"> Transportadoras
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminShipping\">
                                <a href=\"/admin77500/index.php/improve/shipping/preferences/?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\"> Preferências
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"63\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/admin77";
        // line 889
        echo "500/index.php/improve/payment/payment_methods?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\">
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
                                <a href=\"/admin77500/index.php/improve/payment/payment_methods?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\"> Métodos de Pagamento
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"65\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/admin77500/index.php/improve/payment/preferences?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\"> Preferências
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li clas";
        // line 921
        echo "s=\"link-levelone has_submenu\" data-submenu=\"66\" id=\"subtab-AdminInternational\">
                    <a href=\"/admin77500/index.php/improve/international/localization/?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\">
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
                                <a href=\"/admin77500/index.php/improve/international/localization/?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\"> Localização
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/admin77500/index.php/improve/international/zones/?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\"> Localizações
                                </a>
                              </li>

                                                                                  
                              
                                                 ";
        // line 950
        echo "           
                              <li class=\"link-leveltwo\" data-submenu=\"76\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/admin77500/index.php/improve/international/taxes/?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\"> IVA
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminTranslations\">
                                <a href=\"/admin77500/index.php/improve/international/translations/settings?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\"> Traduções
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"193\" id=\"subtab-Marketing\">
                    <a href=\"https://life-style.pt/admin77500/index.php?controller=AdminPsfacebookModule&amp;token=bdd659b903345471ccf990fc5be47c40\" class=\"link\">
                      <i class=\"material-icons mi-campaign\">campaign</i>
                      <span>
                      Marketing
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-193\" class=\"submenu panel-collapse\">
                  ";
        // line 981
        echo "                                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"194\" id=\"subtab-AdminPsfacebookModule\">
                                <a href=\"https://life-style.pt/admin77500/index.php?controller=AdminPsfacebookModule&amp;token=bdd659b903345471ccf990fc5be47c40\" class=\"link\"> Facebook
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"80\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configurar</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"81\" id=\"subtab-ShopParameters\">
                    <a href=\"/admin77500/index.php/configure/shop/preferences/preferences?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Parâmetros da Loja
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-81\" class=\"submenu panel-collapse\">
                                                      
                              
                                  ";
        // line 1018
        echo "                          
                              <li class=\"link-leveltwo\" data-submenu=\"82\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/admin77500/index.php/configure/shop/preferences/preferences?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\"> Geral
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"85\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/admin77500/index.php/configure/shop/order-preferences/?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\"> Definições da Encomenda
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"88\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/admin77500/index.php/configure/shop/product-preferences/?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\"> Produtos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/admin77500/index.php/configure/shop/customer-preferences/?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\"> Definições do cliente
                                </a>
              ";
        // line 1046
        echo "                </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminParentStores\">
                                <a href=\"/admin77500/index.php/configure/shop/contacts/?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\"> Contacto
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/admin77500/index.php/configure/shop/seo-urls/?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\"> Tráfego e SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"100\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"https://life-style.pt/admin77500/index.php?controller=AdminSearchConf&amp;token=29a70d7e3efa159d415a1202cb9422ef\" class=\"link\"> Pesquisar
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"130\" id=\"subtab-AdminGamification\">
                                <a href=\"https://life-style.pt/admin77500/index.php?controller=AdminGamification&amp;tok";
        // line 1076
        echo "en=78cc19cc33cdee0a343fd876ced38366\" class=\"link\"> Merchant Expertise
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"103\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/admin77500/index.php/configure/advanced/system-information/?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Parâmetros Avançados
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-103\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"104\" id=\"subtab-AdminInformation\">
                                <a href=\"/admin77500/index.php/configure/advanced/system-information/?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\"> Informação
                                </a>
                              </li>

                                                                                  
                              
                                   ";
        // line 1107
        echo "                         
                              <li class=\"link-leveltwo link-active\" data-submenu=\"105\" id=\"subtab-AdminPerformance\">
                                <a href=\"/admin77500/index.php/configure/advanced/performance/?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\"> Desempenho
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/admin77500/index.php/configure/advanced/administration/?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\"> Administração
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"107\" id=\"subtab-AdminEmails\">
                                <a href=\"/admin77500/index.php/configure/advanced/emails/?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\"> Email
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"108\" id=\"subtab-AdminImport\">
                                <a href=\"/admin77500/index.php/configure/advanced/import/?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\"> Importar
                                </a>
                              </li>

                                               ";
        // line 1137
        echo "                                   
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"109\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/admin77500/index.php/configure/advanced/employees/?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\"> Empregados
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"113\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/admin77500/index.php/configure/advanced/sql-requests/?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\"> Base de dados
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"116\" id=\"subtab-AdminLogs\">
                                <a href=\"/admin77500/index.php/configure/advanced/logs/?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\"> Registos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"117\" id=\"subtab-AdminWebservice\">
                                <a href=\"/admin77500/index.php/configure/advanced/webservice-keys/?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\"> Webservice
                   ";
        // line 1166
        echo "             </a>
                              </li>

                                                                                                                                                                                              
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"211\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/admin77500/index.php/configure/advanced/feature-flags/?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\"> New &amp; Experimental Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"212\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"https://life-style.pt/admin77500/index.php?controller=AdminParentSecurity&amp;token=f8bbc5e8fff784788534f297d0d9e6e7\" class=\"link\"> Security
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Parâmetros Avançados</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/admin77500/index.php/configure/advanced/performance/?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" aria-current=\"page\">Desempenho</a>
            </li>
                  </ol>
      </nav>
    

    <di";
        // line 1211
        echo "v class=\"title-row\">
      
          <h1 class=\"title\">
            Performance          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-clear_cache\"
                  href=\"/admin77500/index.php/configure/advanced/performance/clear-cache?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\"                  title=\"Clear cache\"                >
                  <i class=\"material-icons\">delete</i>                  Clear cache
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Help\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/admin77500/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fpt%252Fdoc%252FAdminAdvancedParametersPerformance%253Fversion%253D8.0.0%2526country%253Dpt/Help?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\"
                   id=\"product_form_open_help\"
                >
                  Help
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-clear_cache\"
              href=\"/admin77500/index.php/configure/advanced/performance/clear-cache?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5Db";
        // line 1255
        echo "NQTg8pxA\"              title=\"Clear cache\"            >
              Clear cache
              <i class=\"material-icons\">delete</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Help\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/admin77500/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fpt%252Fdoc%252FAdminAdvancedParametersPerformance%253Fversion%253D8.0.0%2526country%253Dpt/Help?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\"
            >
              Help
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  \">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1284
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh no!</h1>
  <p class=\"mt-3\">
    The mobile version of this page is not available yet.
  </p>
  <p class=\"mt-2\">
    Please use a desktop computer to access this page, until is adapted to mobile.
  </p>
  <p class=\"mt-2\">
    Thank you.
  </p>
  <a href=\"https://life-style.pt/admin77500/index.php?controller=AdminDashboard&amp;token=80a25971ac7cefb6056feba3d832f5e5\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Back
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1318
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 85
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 1284
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_footer"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_right"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_right"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 1318
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translate_javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translate_javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "__string_template__7d97f0cd227efdc94b3631b280a775af3b1036d9ce696f9e8fa761607d00f0a3";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1573 => 1318,  1504 => 1284,  1469 => 85,  1454 => 1318,  1414 => 1284,  1383 => 1255,  1337 => 1211,  1290 => 1166,  1259 => 1137,  1227 => 1107,  1194 => 1076,  1162 => 1046,  1132 => 1018,  1093 => 981,  1060 => 950,  1029 => 921,  995 => 889,  961 => 857,  929 => 827,  896 => 796,  865 => 767,  832 => 736,  793 => 699,  760 => 668,  727 => 637,  695 => 607,  661 => 575,  627 => 543,  595 => 513,  562 => 482,  526 => 448,  475 => 399,  421 => 347,  369 => 297,  329 => 259,  286 => 218,  245 => 179,  226 => 162,  185 => 123,  142 => 85,  124 => 69,  96 => 43,  52 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ '<!DOCTYPE html>
<html lang=\"pt\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Performance • Life Style</title>

  <script type=\"text/javascript\">
    var help_class_name = \\'AdminPerformance\\';
    var iso_user = \\'pt\\';
    var lang_is_rtl = \\'0\\';
    var full_language_code = \\'pt-pt\\';
    var full_cldr_language_code = \\'pt-PT\\';
    var country_iso_code = \\'PT\\';
    var _PS_VERSION_ = \\'8.0.0\\';
    var roundMode = 2;
    var youEditFieldFor = \\'\\';
        var new_order_msg = \\'A new order has been placed on your shop.\\';
    var order_number_msg = \\'Order number: \\';
    var total_msg = \\'Total: \\';
    var from_msg = \\'From: \\';
    var see_order_msg = \\'View this order\\';
    var new_customer_msg = \\'A new customer registered on your shop.\\';
    var customer_name_msg = \\'Customer name: \\';
    var new_msg = \\'A new message was posted on your shop.\\';
    var see_msg = \\'Read this message\\';
    var token = \\'ae836315442fdf3859f2077c1a78ceff\\';
    var token_admin_orders = tokenAdminOrders = \\'c3e255d5b5cecfbd2568bbf66efd5f79\\';
    var token_admin_customers = \\'297718d126d38d2619d0c87e5aac29cc\\';
    var token_admin_customer_threads = tokenAdminCustomerThreads = \\'5e1031b0d998731dd1ff831ed4d73372\\';
    var currentIndex = \\'index.php?controller=AdminPerformance\\';
    var employee_token = \\'6ccbaaaf4180464656563f6a8f917d03\\';
    var choose_language_translate = \\'Choose language:\\';
    var default_language = \\'2\\';
    var admin_modules_link = \\'/admin77500/index.php/improve/modules/manage?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\\';
    var admin_notification_get_link = \\'/admin77500/index.php/common/notifications?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\\';
    var admin_notification_push_link = admi' | raw }}{{ 'nNotificationPushLink = \\'/admin77500/index.php/common/notifications/ack?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\\';
    var tab_modules_list = \\'\\';
    var update_success_msg = \\'Update successful\\';
    var search_product_msg = \\'Search for a product\\';
  </script>



<link
      rel=\"preload\"
      href=\"/admin77500/themes/new-theme/public/auto703cf8f274fbb265d49c6262825780e1.preload.woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/admin77500/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin77500/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\\\/admin77500\\\\/\";
var baseDir = \"\\\\/\";
var changeFormLanguageUrl = \"\\\\/admin77500\\\\/index.php\\\\/configure\\\\/advanced\\\\/employees\\\\/change-form-language?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\\\u20ac\",\"name\":\"Euro\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"currencyCode\":\"EUR\",\"currencySymbol\":\"\\\\u20ac\",\"numberSymbols\":[\",\",\"\\\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\\\u00a0\\\\u00a4\",\"negativePattern\":\"-#,##0.00\\\\u00a0\\\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\",\",\"\\\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\"\\\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":true};' | raw }}{{ '
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/admin77500/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=8.0.0\"></script>
<script type=\"text/javascript\" src=\"/admin77500/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=8.0.0\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/admin77500/themes/default/js/vendor/nv.d3.min.js\"></script>

  

' | raw }}{% block stylesheets %}{% endblock %}{% block extra_stylesheets %}{% endblock %}</head>{{ '

<body
  class=\"lang-pt adminperformance\"
  data-base-url=\"/admin77500/index.php\"  data-token=\"vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"https://life-style.pt/admin77500/index.php?controller=AdminDashboard&amp;token=80a25971ac7cefb6056feba3d832f5e5\"></a>
      <span id=\"shop_version\">8.0.0</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Quick Access
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://life-style.pt/admin77500/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=03571e8d0edcfb9a415a21ebe5c9ced6\"
                 data-item=\"Avaliação do catálogo\"
      >Avaliação do catálogo</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://life-style.pt/admin77500/index.php/sell/orders?token=59b18c8243971cbf21cd0ecc6a2bc905\"
                 data-item=\"Encomendas\"
      >Encomendas</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://life-style.pt/admin77500/index.php/improve/modules/manage?token=59b18c8243971cbf21cd0ecc6a2bc905\"
                 data-item=\"Módulos instalados\"
      >Módulos instalados</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://life-style.pt/admin77500/index.php/sell/catalog/categories/new?token=59b18c8243971cbf21cd0ecc6a2bc905\"
                 data-item=\"Nova Categoria\"
      >Nova Categoria</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http' | raw }}{{ 's://life-style.pt/admin77500/index.php/sell/catalog/products/new?token=59b18c8243971cbf21cd0ecc6a2bc905\"
                 data-item=\"Novo produto\"
      >Novo produto</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://life-style.pt/admin77500/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=f3fcfdfaca6d4c9a4dadfec52f9fff6b\"
                 data-item=\"Novo Voucher\"
      >Novo Voucher</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://life-style.pt/admin77500/index.php?controller=AdminModules&amp;&amp;configure=xipblog&amp;token=7ce4934086e2ae06784ad2e750786b46\"
                 data-item=\"XipBlog Settings\"
      >XipBlog Settings</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"190\"
        data-icon=\"icon-AdminAdvancedParameters\"
        data-method=\"add\"
        data-url=\"index.php/configure/advanced/performance\"
        data-post-link=\"https://life-style.pt/admin77500/index.php?controller=AdminQuickAccesses&token=a7db0dd1c08db0707fec548a31b24c59\"
        data-prompt-text=\"Please name this shortcut:\"
        data-link=\"Desempenho - List\"
      >
        <i class=\"material-icons\">add_circle</i>
        Add current page to Quick Access
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"https://life-style.pt/admin77500/index.php?controller=AdminQuickAccesses&token=a7db0dd1c08db0707fec548a31b24c59\">
      <i class=\"material-icons\">settings</i>
      Manage your quick accesses
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/admin77500/index.php?controller=AdminSearch&amp;token=cb' | raw }}{{ '6d663b2cc7366353eef3e57514b14b\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Search (e.g.: product reference, customer name…)\" aria-label=\"Searchbar\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Everywhere
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Everywhere\" href=\"#\" data-value=\"0\" data-placeholder=\"What are you looking for?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Everywhere</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalog\" href=\"#\" data-value=\"1\" data-placeholder=\"Product name, reference, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalog</a>
        <a class=\"dropdown-item\" data-item=\"Customers by name\" href=\"#\" data-value=\"2\" data-placeholder=\"Name\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Customers by name</a>
        <a class=\"dropdown-item\" data-item=\"Customers by ip address\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Customers by IP address</a>
        <a class=\"dropdown-item\" data-item=\"Orders\" href=\"#\" data-value=\"3\" data-placeholder=\"Order ID\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Orders</a>
        <a class=\"dropdown-item\" data-item=\"Invoices\" href=\"#\" data-value=\"4\" data-placeholder=\"Invoice number\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Invoices</a>
        <a class=\"dropdown-item\" data-item=\"Carts\" href=\"#\" data-value=\"5\" data-placeholder=\"Cart ID\" data-icon=\"i' | raw }}{{ 'con-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carts</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Module name\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">SEARCH</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$(\\'#bo_query\\').one(\\'click\\', function() {
    \$(this).closest(\\'form\\').removeClass(\\'collapsed\\');
  });
});
</script>
            <button class=\"component-search-cancel d-none\">Cancel</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Quick Access</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://life-style.pt/admin77500/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=03571e8d0edcfb9a415a21ebe5c9ced6\"
             data-item=\"Avaliação do catálogo\"
    >Avaliação do catálogo</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://life-style.pt/admin77500/index.php/sell/orders?token=59b18c8243971cbf21cd0ecc6a2bc905\"
             data-item=\"Encomendas\"
    >Encomendas</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://life-style.pt/admin77500/index.php/improve/modules/manage?token=59b18c8243971cbf21cd0ecc6a2bc905\"
             data-item=\"Módulos instalados\"
    >Módulos instalados</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://life-style.pt/admin77500/index.php/sell/catalog/categories/new?token=59b18c8243971cbf21cd0ecc6a2bc905\"
             data-item=\"Nova Categoria\"
    >Nova Categoria</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://life-style.pt/admin77500/index.php/sell/catalog/products/new?token=59b18c8243971cbf21cd0ecc6a2bc905\"
             data-item=\"Novo produto\"
    >Novo ' | raw }}{{ 'produto</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://life-style.pt/admin77500/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=f3fcfdfaca6d4c9a4dadfec52f9fff6b\"
             data-item=\"Novo Voucher\"
    >Novo Voucher</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://life-style.pt/admin77500/index.php?controller=AdminModules&amp;&amp;configure=xipblog&amp;token=7ce4934086e2ae06784ad2e750786b46\"
             data-item=\"XipBlog Settings\"
    >XipBlog Settings</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"1\"
      data-icon=\"icon-AdminAdvancedParameters\"
      data-method=\"add\"
      data-url=\"index.php/configure/advanced/performance\"
      data-post-link=\"https://life-style.pt/admin77500/index.php?controller=AdminQuickAccesses&token=a7db0dd1c08db0707fec548a31b24c59\"
      data-prompt-text=\"Please name this shortcut:\"
      data-link=\"Desempenho - List\"
    >
      <i class=\"material-icons\">add_circle</i>
      Add current page to Quick Access
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"https://life-style.pt/admin77500/index.php?controller=AdminQuickAccesses&token=a7db0dd1c08db0707fec548a31b24c59\">
    <i class=\"material-icons\">settings</i>
    Manage your quick accesses
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

              <div class=\"component hide-mobile-sm\" id=\"header-debug-mode-container\">
          <a class=\"link shop-state\"
             id=\"debug-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"<p class=&quot;text-left&quot;><strong>Your shop is in debug mode.</strong></p><p class=&quot;text-left&quot;>All the PHP errors and messages are displayed. When you no longer need it, &lt;strong&gt;turn off&lt;/strong&gt; this mode.</p>\"
      ' | raw }}{{ '       href=\"/admin77500/index.php/configure/advanced/performance/?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\"
          >
            <i class=\"material-icons\">bug_report</i>
            <span>Debug mode</span>
          </a>
        </div>
      
              <div class=\"component hide-mobile-sm\" id=\"header-maintenance-mode-container\">
          <a class=\"link shop-state\"
             id=\"maintenance-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"<p class=&quot;text-left&quot;><strong>Your shop is in maintenance.</strong></p><p class=&quot;text-left&quot;>Your visitors and customers cannot access your shop while in maintenance mode.&lt;br /&gt; To manage the maintenance settings, go to Shop Parameters &amp;gt; Maintenance tab.</p>\" href=\"/admin77500/index.php/configure/shop/maintenance/?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\"
          >
            <i class=\"material-icons\">build</i>
            <span>Maintenance mode</span>
          </a>
        </div>
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"https://life-style.pt/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>View my shop</span>
    </a>
  </div>
          </div>
                          <div class=\"component header-right-component\" id=\"header-notifications-container\">
            <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
        ' | raw }}{{ '                  <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Orders<span id=\"_nb_new_orders_\"></span>
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
              Customers<span id=\"_nb_new_customers_\"></span>
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
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new order for now :(<br>
              Have you checked your <strong><a href=\"https://life-style.pt/admin77500/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=5fdfa5a796a91c38bfa041582e286d57\">abandoned carts</a></strong>?<br>Your next order could be hiding there!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new customer for now :(<br>
              Are you active on social media these ' | raw }}{{ 'days?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new message for now.<br>
              Seems like all your customers are happy :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href=\\'order_url\\'>
      #_id_order_ -
      from <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href=\\'customer_url\\'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registered <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href=\\'message_url\\'>
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
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"https://life-style.pt/img/pr/default.jpg\" alt=\"Bruno\" /></span>
        <span class=\"employee_profile\">Welcome back Bruno</span>
      </div>

      <a class=\"dropdown-item employee' | raw }}{{ '-link profile-link\" href=\"/admin77500/index.php/configure/advanced/employees/1/edit?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\">
      <i class=\"material-icons\">edit</i>
      <span>Your profile</span>
    </a>
    </div>

    <p class=\"divider\"></p>

    
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"https://life-style.pt/admin77500/index.php?controller=AdminLogin&amp;logout=1&amp;token=659310589aba3c1aeaccd458ceade003\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Sign out</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/admin77500/index.php/configure/advanced/employees/toggle-navigation?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"https://life-style.pt/admin77500/index.php?controller=AdminDashboard&amp;token=80a25971ac7cefb6056feba3d832f5e5\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.0.0</span>
      </div>

      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"https://life-style.pt/admin77500/index.php?controller=AdminDashboard&amp;token=80a25971ac7cefb6056feba3d832f5e5\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Painel de controlo</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Vende' | raw }}{{ 'r</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/admin77500/index.php/sell/orders/?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\">
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
                                <a href=\"/admin77500/index.php/sell/orders/?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\"> Encomendas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/admin77500/index.php/sell/orders/invoices/?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\"> Faturas
                                </a>
                              </li>

                                                             ' | raw }}{{ '                     
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/admin77500/index.php/sell/orders/credit-slips/?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\"> Notas de Crédito
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/admin77500/index.php/sell/orders/delivery-slips/?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\"> Notas de Entrega
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"https://life-style.pt/admin77500/index.php?controller=AdminCarts&amp;token=5fdfa5a796a91c38bfa041582e286d57\" class=\"link\"> Carrinhos de Compras
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/admin77500/index.php/sell/catalog/products?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbN' | raw }}{{ 'QTg8pxA\" class=\"link\">
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
                                <a href=\"/admin77500/index.php/sell/catalog/products?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\"> Produtos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/admin77500/index.php/sell/catalog/categories?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\"> Categorias
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/admin77500/index.php/sell/catalog/monitoring/?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link' | raw }}{{ '\"> Monitorização
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"https://life-style.pt/admin77500/index.php?controller=AdminAttributesGroups&amp;token=e44ac4055c7e4128cf8f35aa940f5fa6\" class=\"link\"> Atributos e Características
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/admin77500/index.php/sell/catalog/brands/?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\"> Marcas e Fornecedores
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/admin77500/index.php/sell/attachments/?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\"> Ficheiros
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
             ' | raw }}{{ '                   <a href=\"https://life-style.pt/admin77500/index.php?controller=AdminCartRules&amp;token=f3fcfdfaca6d4c9a4dadfec52f9fff6b\" class=\"link\"> Descontos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/admin77500/index.php/sell/stocks/?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\"> Stocks
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/admin77500/index.php/sell/customers/?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Clientes
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                            ' | raw }}{{ '  <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/admin77500/index.php/sell/customers/?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\"> Clientes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/admin77500/index.php/sell/addresses/?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\"> Endereços
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"https://life-style.pt/admin77500/index.php?controller=AdminCustomerThreads&amp;token=5e1031b0d998731dd1ff831ed4d73372\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Apoio ao Cliente
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                 ' | raw }}{{ '                     
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"https://life-style.pt/admin77500/index.php?controller=AdminCustomerThreads&amp;token=5e1031b0d998731dd1ff831ed4d73372\" class=\"link\"> Apoio ao Cliente
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/admin77500/index.php/sell/customer-service/order-messages/?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\"> Mensagens de Encomendas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"https://life-style.pt/admin77500/index.php?controller=AdminReturn&amp;token=9b18768cc96c68833de7b3f97fe45498\" class=\"link\"> Mercadorias Devolvidas
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"https://life-style.pt/admin77500/index.php?cont' | raw }}{{ 'roller=AdminStats&amp;token=03571e8d0edcfb9a415a21ebe5c9ced6\" class=\"link\">
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
                    <a href=\"https://life-style.pt/admin77500/index.php?controller=MoloniStart&amp;token=617e0661d6e9a50499c0a89fbeefcd28\" class=\"link\">
                      <i class=\"material-icons mi-spa\">spa</i>
                      <span>
                      Moloni
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-179\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"180\" id=\"subtab-MoloniStart\">
                                <a href=\"https://life-style.pt/admin77500/index.php?controller=MoloniStart&amp;token=617e0661d6e9a50499c0a89fbeefcd28\" class=\"link\"> Moloni
                                </a>
                ' | raw }}{{ '              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"181\" id=\"subtab-MoloniMovimentos\">
                                <a href=\"https://life-style.pt/admin77500/index.php?controller=MoloniMovimentos&amp;token=1c3f84119a422124e002b14473ae6510\" class=\"link\"> Documentos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"182\" id=\"subtab-MoloniConfiguracao\">
                                <a href=\"https://life-style.pt/admin77500/index.php?controller=MoloniConfiguracao&amp;token=c9535bef290c1d65f59fd11409eff799\" class=\"link\"> Definições
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                                            
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"42\" id=\"tab-IMPROVE\">
                <span class=\"title\">Melhorar</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/admin77500/index.php/improve/modules/manage?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
          ' | raw }}{{ '            <span>
                      Módulos
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/admin77500/index.php/improve/modules/manage?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\"> Module Manager
                                </a>
                              </li>

                                                                                  
                              
                                                                                                                          
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminModules\">
                                <a href=\"https://life-style.pt/admin77500/index.php?controller=AdminModules&amp;token=7ce4934086e2ae06784ad2e750786b46\" class=\"link\"> AdminModules
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                ' | raw }}{{ '    <a href=\"/admin77500/index.php/improve/design/themes/?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\">
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
                                <a href=\"/admin77500/index.php/improve/design/themes/?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\"> Tema Gráfico e Logótipo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"136\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"https://life-style.pt/admin77500/index.php?controller=AdminPsMboTheme&amp;token=b4e173bc61a9f0914a55a70b8afcd92b\" class=\"link\"> Catálogo do Tema Gráfico
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-' | raw }}{{ 'AdminParentMailTheme\">
                                <a href=\"/admin77500/index.php/improve/design/mail_theme/?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\"> Email Theme
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/admin77500/index.php/improve/design/cms-pages/?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\"> Páginas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"58\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/admin77500/index.php/improve/design/modules/positions/?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\"> Posições
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"59\" id=\"subtab-AdminImages\">
                                <a href=\"https://life-style.pt/admin77500/index.php?controller=AdminImages&amp;token=c2db0f3090419f48f3c15a5c22ca698d\" class=\"link\"> Definições de Imagem
                                </a>
                              </li>

                                                                                  
                              
                                     ' | raw }}{{ '                       
                              <li class=\"link-leveltwo\" data-submenu=\"125\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/admin77500/index.php/modules/link-widget/list?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\"> Link Widget
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"141\" id=\"subtab-AdminPosStaticblocks\">
                                <a href=\"https://life-style.pt/admin77500/index.php?controller=AdminPosStaticblocks&amp;token=48b535ac3ed3ae108d91a82a491e1d56\" class=\"link\"> Pos Staticblocks
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"142\" id=\"subtab-AdminStaticFooter\">
                                <a href=\"https://life-style.pt/admin77500/index.php?controller=AdminStaticFooter&amp;token=033c237e2c47eb6809ec86fe8ac8e7c1\" class=\"link\"> Pos Staticfooter
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"60\" id=\"subtab-AdminParentShipping\">
                    <a href=\"https://life-style.pt/admin77500/index.php?controller=AdminCarriers&amp;token=b740044e52116717af10be5e6473758a\" class=\"link\">
        ' | raw }}{{ '              <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Envio
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-60\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"61\" id=\"subtab-AdminCarriers\">
                                <a href=\"https://life-style.pt/admin77500/index.php?controller=AdminCarriers&amp;token=b740044e52116717af10be5e6473758a\" class=\"link\"> Transportadoras
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminShipping\">
                                <a href=\"/admin77500/index.php/improve/shipping/preferences/?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\"> Preferências
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"63\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/admin77' | raw }}{{ '500/index.php/improve/payment/payment_methods?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\">
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
                                <a href=\"/admin77500/index.php/improve/payment/payment_methods?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\"> Métodos de Pagamento
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"65\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/admin77500/index.php/improve/payment/preferences?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\"> Preferências
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li clas' | raw }}{{ 's=\"link-levelone has_submenu\" data-submenu=\"66\" id=\"subtab-AdminInternational\">
                    <a href=\"/admin77500/index.php/improve/international/localization/?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\">
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
                                <a href=\"/admin77500/index.php/improve/international/localization/?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\"> Localização
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/admin77500/index.php/improve/international/zones/?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\"> Localizações
                                </a>
                              </li>

                                                                                  
                              
                                                 ' | raw }}{{ '           
                              <li class=\"link-leveltwo\" data-submenu=\"76\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/admin77500/index.php/improve/international/taxes/?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\"> IVA
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminTranslations\">
                                <a href=\"/admin77500/index.php/improve/international/translations/settings?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\"> Traduções
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"193\" id=\"subtab-Marketing\">
                    <a href=\"https://life-style.pt/admin77500/index.php?controller=AdminPsfacebookModule&amp;token=bdd659b903345471ccf990fc5be47c40\" class=\"link\">
                      <i class=\"material-icons mi-campaign\">campaign</i>
                      <span>
                      Marketing
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-193\" class=\"submenu panel-collapse\">
                  ' | raw }}{{ '                                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"194\" id=\"subtab-AdminPsfacebookModule\">
                                <a href=\"https://life-style.pt/admin77500/index.php?controller=AdminPsfacebookModule&amp;token=bdd659b903345471ccf990fc5be47c40\" class=\"link\"> Facebook
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"80\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configurar</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"81\" id=\"subtab-ShopParameters\">
                    <a href=\"/admin77500/index.php/configure/shop/preferences/preferences?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Parâmetros da Loja
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-81\" class=\"submenu panel-collapse\">
                                                      
                              
                                  ' | raw }}{{ '                          
                              <li class=\"link-leveltwo\" data-submenu=\"82\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/admin77500/index.php/configure/shop/preferences/preferences?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\"> Geral
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"85\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/admin77500/index.php/configure/shop/order-preferences/?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\"> Definições da Encomenda
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"88\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/admin77500/index.php/configure/shop/product-preferences/?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\"> Produtos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/admin77500/index.php/configure/shop/customer-preferences/?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\"> Definições do cliente
                                </a>
              ' | raw }}{{ '                </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminParentStores\">
                                <a href=\"/admin77500/index.php/configure/shop/contacts/?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\"> Contacto
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/admin77500/index.php/configure/shop/seo-urls/?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\"> Tráfego e SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"100\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"https://life-style.pt/admin77500/index.php?controller=AdminSearchConf&amp;token=29a70d7e3efa159d415a1202cb9422ef\" class=\"link\"> Pesquisar
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"130\" id=\"subtab-AdminGamification\">
                                <a href=\"https://life-style.pt/admin77500/index.php?controller=AdminGamification&amp;tok' | raw }}{{ 'en=78cc19cc33cdee0a343fd876ced38366\" class=\"link\"> Merchant Expertise
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"103\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/admin77500/index.php/configure/advanced/system-information/?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Parâmetros Avançados
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-103\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"104\" id=\"subtab-AdminInformation\">
                                <a href=\"/admin77500/index.php/configure/advanced/system-information/?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\"> Informação
                                </a>
                              </li>

                                                                                  
                              
                                   ' | raw }}{{ '                         
                              <li class=\"link-leveltwo link-active\" data-submenu=\"105\" id=\"subtab-AdminPerformance\">
                                <a href=\"/admin77500/index.php/configure/advanced/performance/?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\"> Desempenho
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/admin77500/index.php/configure/advanced/administration/?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\"> Administração
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"107\" id=\"subtab-AdminEmails\">
                                <a href=\"/admin77500/index.php/configure/advanced/emails/?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\"> Email
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"108\" id=\"subtab-AdminImport\">
                                <a href=\"/admin77500/index.php/configure/advanced/import/?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\"> Importar
                                </a>
                              </li>

                                               ' | raw }}{{ '                                   
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"109\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/admin77500/index.php/configure/advanced/employees/?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\"> Empregados
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"113\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/admin77500/index.php/configure/advanced/sql-requests/?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\"> Base de dados
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"116\" id=\"subtab-AdminLogs\">
                                <a href=\"/admin77500/index.php/configure/advanced/logs/?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\"> Registos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"117\" id=\"subtab-AdminWebservice\">
                                <a href=\"/admin77500/index.php/configure/advanced/webservice-keys/?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\"> Webservice
                   ' | raw }}{{ '             </a>
                              </li>

                                                                                                                                                                                              
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"211\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/admin77500/index.php/configure/advanced/feature-flags/?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" class=\"link\"> New &amp; Experimental Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"212\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"https://life-style.pt/admin77500/index.php?controller=AdminParentSecurity&amp;token=f8bbc5e8fff784788534f297d0d9e6e7\" class=\"link\"> Security
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Parâmetros Avançados</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/admin77500/index.php/configure/advanced/performance/?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\" aria-current=\"page\">Desempenho</a>
            </li>
                  </ol>
      </nav>
    

    <di' | raw }}{{ 'v class=\"title-row\">
      
          <h1 class=\"title\">
            Performance          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-clear_cache\"
                  href=\"/admin77500/index.php/configure/advanced/performance/clear-cache?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\"                  title=\"Clear cache\"                >
                  <i class=\"material-icons\">delete</i>                  Clear cache
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Help\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/admin77500/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fpt%252Fdoc%252FAdminAdvancedParametersPerformance%253Fversion%253D8.0.0%2526country%253Dpt/Help?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\"
                   id=\"product_form_open_help\"
                >
                  Help
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-clear_cache\"
              href=\"/admin77500/index.php/configure/advanced/performance/clear-cache?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5Db' | raw }}{{ 'NQTg8pxA\"              title=\"Clear cache\"            >
              Clear cache
              <i class=\"material-icons\">delete</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Help\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/admin77500/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fpt%252Fdoc%252FAdminAdvancedParametersPerformance%253Fversion%253D8.0.0%2526country%253Dpt/Help?_token=vncHtdgdJEHxxEvfSpr9M7KzErcilKHH5DbNQTg8pxA\"
            >
              Help
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  \">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ' | raw }}{% block content_header %}{% endblock %}{% block content %}{% endblock %}{% block content_footer %}{% endblock %}{% block sidebar_right %}{% endblock %}{{ '

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh no!</h1>
  <p class=\"mt-3\">
    The mobile version of this page is not available yet.
  </p>
  <p class=\"mt-2\">
    Please use a desktop computer to access this page, until is adapted to mobile.
  </p>
  <p class=\"mt-2\">
    Thank you.
  </p>
  <a href=\"https://life-style.pt/admin77500/index.php?controller=AdminDashboard&amp;token=80a25971ac7cefb6056feba3d832f5e5\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Back
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
' | raw }}{% block javascripts %}{% endblock %}{% block extra_javascripts %}{% endblock %}{% block translate_javascripts %}{% endblock %}</body>{{ '
</html>' | raw }}", "__string_template__7d97f0cd227efdc94b3631b280a775af3b1036d9ce696f9e8fa761607d00f0a3", "");
    }
}
