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

/* __string_template__81304a7d9266c18d1da7b42bc7649aa0 */
class __TwigTemplate_7f0aa619903d3a49d03647a4d6db1d87 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__81304a7d9266c18d1da7b42bc7649aa0"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__81304a7d9266c18d1da7b42bc7649aa0"));

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

<title>Tema Gráfico e Logótipo > Tema gráfico • Life Style</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminThemes';
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
    var token = '4a3ecd6931384051ce674a32ed0b508b';
    var currentIndex = 'index.php?controller=AdminThemes';
    var employee_token = '6ccbaaaf4180464656563f6a8f917d03';
    var choose_language_translate = 'Escolher idioma:';
    var default_language = '2';
    var admin_modules_link = '/admin77500/index.php/improve/modules/manage?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU';
    var admin_notification_get_link = '/admin77500/index.php/common/notifications?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU';
    var admin_notification_push_link = adminNotificationPushLink = '/admin77500/index.php/common/notifications/ack?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU';
    var tab_modules_list = '';
    var update_success_msg = 'Atualizado com sucesso';
    var se";
        // line 43
        echo "arch_product_msg = 'Pesquisar um produto';
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
var changeFormLanguageUrl = \"\\/admin77500\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"Euro\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"EUR\",\"currencySymbol\":\"\\u20ac\",\"numberSymbols\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":true};
var show";
        // line 69
        echo "_new_customers = \"1\";
var show_new_messages = \"1\";
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
  class=\"lang-pt adminthemes multishop-enabled developer-mode\"
  data-base-url=\"/admin77500/index.php\"  data-token=\"h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\">

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
          <a class=\"dropdown-i";
        // line 124
        echo "tem quick-row-link \"
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
        data-rand=\"194\"
        data-icon=\"icon-AdminThemesParent\"
        data-method=\"add\"
        data-url=\"index.php/improve/design/themes\"
        data-post-link=\"http://lifestyle.local/admin77500/index.php?controller=AdminQuickAccesses&token=a7db0dd1c08db0707fec548a31b24c59\"
        data-prompt-text=\"Atribua um nome a este atalho:\"
        data-link=\"Tema Gr&aacute;fico e...\"
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
      method=\"post\"
      actio";
        // line 164
        echo "n=\"/admin77500/index.php?controller=AdminSearch&amp;token=cb6d663b2cc7366353eef3e57514b14b\"
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
        <a class=\"dropdown-item\" data-item=\"Faturas\" href=\"#\" data-value=\"4\" data-placeholder=\"Número da fatura\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Faturas</a>
  ";
        // line 181
        echo "      <a class=\"dropdown-item\" data-item=\"Carrinhos\" href=\"#\" data-value=\"5\" data-placeholder=\"ID do Carrinho\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carrinhos</a>
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
       href=\"http://lifest";
        // line 218
        echo "yle.local/admin77500/index.php/sell/catalog/products/new?token=59b18c8243971cbf21cd0ecc6a2bc905\"
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
      data-rand=\"128\"
      data-icon=\"icon-AdminThemesParent\"
      data-method=\"add\"
      data-url=\"index.php/improve/design/themes\"
      data-post-link=\"http://lifestyle.local/admin77500/index.php?controller=AdminQuickAccesses&token=a7db0dd1c08db0707fec548a31b24c59\"
      data-prompt-text=\"Atribua um nome a este atalho:\"
      data-link=\"Tema Gr&aacute;fico e...\"
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

              <div class=\"component hide-mobile-sm\" id=\"header-debug-mode-container\">
          <a class=\"link shop-state\"
             id=\"debug-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"<p class=&quot;text-left&quot;><strong>Your store is in debug mode.</strong></p><";
        // line 260
        echo "p class=&quot;text-left&quot;>Todos os erros PHP e mensagens são apresentados. Quando não necessitar mais, &lt;strong&gt;desligue&lt;/strong&gt; este modo.</p>\"
             href=\"/admin77500/index.php/configure/advanced/performance/?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\"
          >
            <i class=\"material-icons\">bug_report</i>
            <span>Modo de descoberta de erros (debug)</span>
          </a>
        </div>
      
      
      <div class=\"header-right\">
                          <div class=\"component header-right-component\" id=\"header-notifications-container\">
            <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
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
              data-type=\"cu";
        // line 308
        echo "stomer_message\"
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
              Verificou os seus <strong><a href=\"http://lifestyle.local/admin77500/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=5fdfa5a796a91c38bfa041582e286d57\">carrinhos abandonados</a></strong>?<br>A sua próxima encomenda poderá estar escondida aí!
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
    <a class=\"notif\" href='customer_u";
        // line 354
        echo "rl'>
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
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://lifestyle.local/img/pr/default.jpg\" alt=\"Bruno\" /></span>
        <span class=\"employee_profile\">Seja bem-vindo ao Bruno</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/admin77500/index.php/configure/advanced/employees/1/edit?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\">
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
  <span class=\"menu-collapse\" data-toggle-url=\"/admin77500/index.php/configure/advanced/employees/toggle-navigation?_token=h0NZQx7f38tgDL2RgJKoFs";
        // line 402
        echo "1qMhD9c0kZ_FMsVAcaAsU\">
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
              <a href=\"http://lifestyle.local/admin77500/index.php?controller=AdminDashboard&amp;token=80a25971ac7cefb6056feba3d832f5e5\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Painel de controlo</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Vender</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/admin77500/index.php/sell/orders/?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Encomendas
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                ";
        // line 446
        echo "            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/admin77500/index.php/sell/orders/?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\"> Encomendas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/admin77500/index.php/sell/orders/invoices/?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\"> Faturas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/admin77500/index.php/sell/orders/credit-slips/?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\"> Notas de Crédito
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/admin77500/index.php/sell/orders/delivery-slips/?_token=h0NZQx7f38";
        // line 476
        echo "tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\"> Notas de Entrega
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://lifestyle.local/admin77500/index.php?controller=AdminCarts&amp;token=5fdfa5a796a91c38bfa041582e286d57\" class=\"link\"> Carrinhos de Compras
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/admin77500/index.php/sell/catalog/products?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\">
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
                    ";
        // line 509
        echo "            <a href=\"/admin77500/index.php/sell/catalog/products?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\"> Produtos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/admin77500/index.php/sell/catalog/categories?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\"> Categorias
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/admin77500/index.php/sell/catalog/monitoring/?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\"> Monitorização
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://lifestyle.local/admin77500/index.php?controller=AdminAttributesGroups&amp;token=e44ac4055c7e4128cf8f35aa940f5fa6\" class=\"link\"> Atributos e Características
                                </a>
                              </li>

                                                                                  
                              
                                                            
      ";
        // line 540
        echo "                        <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/admin77500/index.php/sell/catalog/brands/?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\"> Marcas e Fornecedores
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/admin77500/index.php/sell/attachments/?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\"> Ficheiros
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://lifestyle.local/admin77500/index.php?controller=AdminCartRules&amp;token=f3fcfdfaca6d4c9a4dadfec52f9fff6b\" class=\"link\"> Descontos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/admin77500/index.php/sell/stocks/?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\"> Stocks
                                </a>
                              </li>

                                                                              </ul>
            ";
        // line 570
        echo "                            </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/admin77500/index.php/sell/customers/?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Clientes
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/admin77500/index.php/sell/customers/?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\"> Clientes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/admin77500/index.php/sell/addresses/?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\"> Endereços
                                </a>
                              </li>

                                ";
        // line 602
        echo "                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://lifestyle.local/admin77500/index.php?controller=AdminCustomerThreads&amp;token=5e1031b0d998731dd1ff831ed4d73372\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Apoio ao Cliente
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://lifestyle.local/admin77500/index.php?controller=AdminCustomerThreads&amp;token=5e1031b0d998731dd1ff831ed4d73372\" class=\"link\"> Apoio ao Cliente
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/admin77500/index.php/sell/cust";
        // line 631
        echo "omer-service/order-messages/?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\"> Mensagens de Encomendas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://lifestyle.local/admin77500/index.php?controller=AdminReturn&amp;token=9b18768cc96c68833de7b3f97fe45498\" class=\"link\"> Mercadorias Devolvidas
                                </a>
                              </li>

                                                                              </ul>
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
         ";
        // line 665
        echo "           <a href=\"http://lifestyle.local/admin77500/index.php?controller=MoloniStart&amp;token=617e0661d6e9a50499c0a89fbeefcd28\" class=\"link\">
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
                                <a href=\"http://lifestyle.local/admin77500/index.php?controller=MoloniStart&amp;token=617e0661d6e9a50499c0a89fbeefcd28\" class=\"link\"> Moloni
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"181\" id=\"subtab-MoloniMovimentos\">
                                <a href=\"http://lifestyle.local/admin77500/index.php?controller=MoloniMovimentos&amp;token=1c3f84119a422124e002b14473ae6510\" class=\"link\"> Documentos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"182\" id=\"subtab-MoloniConfiguraca";
        // line 694
        echo "o\">
                                <a href=\"http://lifestyle.local/admin77500/index.php?controller=MoloniConfiguracao&amp;token=c9535bef290c1d65f59fd11409eff799\" class=\"link\"> Definições
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                                            
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"42\" id=\"tab-IMPROVE\">
                <span class=\"title\">Melhorar</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/admin77500/index.php/improve/modules/manage?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\">
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
                                <a href=\"/admin77500/index.php/improve/modules/manage?_token=h0NZ";
        // line 730
        echo "Qx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\"> Module Manager
                                </a>
                              </li>

                                                                                  
                              
                                                                                                                          
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminModules\">
                                <a href=\"http://lifestyle.local/admin77500/index.php?controller=AdminModules&amp;token=7ce4934086e2ae06784ad2e750786b46\" class=\"link\"> AdminModules
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/admin77500/index.php/improve/design/themes/?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Design
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                      
                ";
        // line 760
        echo "              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"126\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/admin77500/index.php/improve/design/themes/?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\"> Tema Gráfico e Logótipo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"136\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"http://lifestyle.local/admin77500/index.php?controller=AdminPsMboTheme&amp;token=b4e173bc61a9f0914a55a70b8afcd92b\" class=\"link\"> Catálogo do Tema Gráfico
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/admin77500/index.php/improve/design/mail_theme/?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\"> Email Theme
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/admin77500/index.php/improve/design/cms-pages/?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\"> Páginas
                                </a>
";
        // line 789
        echo "                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"58\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/admin77500/index.php/improve/design/modules/positions/?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\"> Posições
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"59\" id=\"subtab-AdminImages\">
                                <a href=\"http://lifestyle.local/admin77500/index.php?controller=AdminImages&amp;token=c2db0f3090419f48f3c15a5c22ca698d\" class=\"link\"> Definições de Imagem
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"125\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/admin77500/index.php/modules/link-widget/list?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\"> Link Widget
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"141\" id=\"subtab-AdminPosStaticblocks\">
                                <a href=\"http://lifestyle.local/admin77500/index.php?contro";
        // line 819
        echo "ller=AdminPosStaticblocks&amp;token=48b535ac3ed3ae108d91a82a491e1d56\" class=\"link\"> Pos Staticblocks
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"142\" id=\"subtab-AdminStaticFooter\">
                                <a href=\"http://lifestyle.local/admin77500/index.php?controller=AdminStaticFooter&amp;token=033c237e2c47eb6809ec86fe8ac8e7c1\" class=\"link\"> Pos Staticfooter
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
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
                                                      
                              
                                                            
                              <li ";
        // line 851
        echo "class=\"link-leveltwo\" data-submenu=\"61\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://lifestyle.local/admin77500/index.php?controller=AdminCarriers&amp;token=b740044e52116717af10be5e6473758a\" class=\"link\"> Transportadoras
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminShipping\">
                                <a href=\"/admin77500/index.php/improve/shipping/preferences/?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\"> Preferências
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"63\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/admin77500/index.php/improve/payment/payment_methods?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Pagamento
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-63\" class=\"submenu panel-collapse\">
                                                      
               ";
        // line 882
        echo "               
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"64\" id=\"subtab-AdminPayment\">
                                <a href=\"/admin77500/index.php/improve/payment/payment_methods?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\"> Métodos de Pagamento
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"65\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/admin77500/index.php/improve/payment/preferences?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\"> Preferências
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"66\" id=\"subtab-AdminInternational\">
                    <a href=\"/admin77500/index.php/improve/international/localization/?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                          ";
        // line 913
        echo "    <ul id=\"collapse-66\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"67\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/admin77500/index.php/improve/international/localization/?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\"> Localização
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/admin77500/index.php/improve/international/zones/?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\"> Localizações
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"76\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/admin77500/index.php/improve/international/taxes/?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\"> IVA
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminTranslations\">
                                <a href=\"/admin77500/index.php/improve/international/translations/settings?";
        // line 942
        echo "_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\"> Traduções
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"146\" id=\"subtab-Adminxprtdashboard\">
                    <a href=\"http://lifestyle.local/admin77500/index.php?controller=Adminxippost&amp;token=2ccfc5324e3aa639a680cd1e599b7dc4\" class=\"link\">
                      <i class=\"material-icons mi-\"></i>
                      <span>
                      Xpert Blog
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-146\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"147\" id=\"subtab-Adminxippost\">
                                <a href=\"http://lifestyle.local/admin77500/index.php?controller=Adminxippost&amp;token=2ccfc5324e3aa639a680cd1e599b7dc4\" class=\"link\"> Blog Posts
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"148\" id=\"subtab-Adminxipca";
        // line 974
        echo "tegory\">
                                <a href=\"http://lifestyle.local/admin77500/index.php?controller=Adminxipcategory&amp;token=f650e592280c933bf865f62846ac60f2\" class=\"link\"> Blog Categories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"149\" id=\"subtab-Adminxipcomment\">
                                <a href=\"http://lifestyle.local/admin77500/index.php?controller=Adminxipcomment&amp;token=8c7fcb8aa51a8d1781c4c19149d5b34b\" class=\"link\"> Blog Comments
                                </a>
                              </li>

                                                                                  
                              
                                                            
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
                ";
        // line 1005
        echo "      Marketing
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-193\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"194\" id=\"subtab-AdminPsfacebookModule\">
                                <a href=\"http://lifestyle.local/admin77500/index.php?controller=AdminPsfacebookModule&amp;token=bdd659b903345471ccf990fc5be47c40\" class=\"link\"> Facebook
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"80\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configurar</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"81\" id=\"subtab-ShopParameters\">
                    <a href=\"/admin77500/index.php/configure/shop/preferences/preferences?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Parâmetros da Loja
                      </span>
                                                    <i class=\"mate";
        // line 1042
        echo "rial-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-81\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"82\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/admin77500/index.php/configure/shop/preferences/preferences?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\"> Geral
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"85\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/admin77500/index.php/configure/shop/order-preferences/?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\"> Definições da Encomenda
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"88\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/admin77500/index.php/configure/shop/product-preferences/?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\"> Produtos
                                </a>
                              </li>

                                                                                  
  ";
        // line 1072
        echo "                            
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/admin77500/index.php/configure/shop/customer-preferences/?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\"> Definições do cliente
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminParentStores\">
                                <a href=\"/admin77500/index.php/configure/shop/contacts/?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\"> Contacto
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/admin77500/index.php/configure/shop/seo-urls/?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\"> Tráfego e SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"100\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://lifestyle.local/admin77500/index.php?controller=AdminSearchConf&amp;token=29a70d7e3efa159d415a1202cb9422ef\" class=\"link\"> Pesquisar
                         ";
        // line 1100
        echo "       </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"130\" id=\"subtab-AdminGamification\">
                                <a href=\"http://lifestyle.local/admin77500/index.php?controller=AdminGamification&amp;token=78cc19cc33cdee0a343fd876ced38366\" class=\"link\"> Merchant Expertise
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"103\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/admin77500/index.php/configure/advanced/system-information/?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\">
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
                ";
        // line 1132
        echo "                <a href=\"/admin77500/index.php/configure/advanced/system-information/?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\"> Informação
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminPerformance\">
                                <a href=\"/admin77500/index.php/configure/advanced/performance/?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\"> Desempenho
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/admin77500/index.php/configure/advanced/administration/?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\"> Administração
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"107\" id=\"subtab-AdminEmails\">
                                <a href=\"/admin77500/index.php/configure/advanced/emails/?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\"> Email
                                </a>
                              </li>

                                                                                  
                              
                                                            
          ";
        // line 1163
        echo "                    <li class=\"link-leveltwo\" data-submenu=\"108\" id=\"subtab-AdminImport\">
                                <a href=\"/admin77500/index.php/configure/advanced/import/?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\"> Importar
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"109\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/admin77500/index.php/configure/advanced/employees/?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\"> Empregados
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"113\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/admin77500/index.php/configure/advanced/sql-requests/?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\"> Base de dados
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"116\" id=\"subtab-AdminLogs\">
                                <a href=\"/admin77500/index.php/configure/advanced/logs/?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\"> Registos
                                </a>
                              </li>

                                                                                  
               ";
        // line 1193
        echo "               
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"117\" id=\"subtab-AdminWebservice\">
                                <a href=\"/admin77500/index.php/configure/advanced/webservice-keys/?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"118\" id=\"subtab-AdminShopGroup\">
                                <a href=\"http://lifestyle.local/admin77500/index.php?controller=AdminShopGroup&amp;token=c063549379885a91172d6fcd223edf61\" class=\"link\"> Multi-Loja
                                </a>
                              </li>

                                                                                                                                        
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"211\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/admin77500/index.php/configure/advanced/feature-flags/?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\"> New &amp; Experimental Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"212\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"http://lifestyle.local/admin77500/index.php?controller=AdminParentSecurity&amp;token=f8bbc5e8fff784788534f297d";
        // line 1220
        echo "0d9e6e7\" class=\"link\"> Security
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"218\" id=\"subtab-AdminSelfUpgrade\">
                    <a href=\"http://lifestyle.local/admin77500/index.php?controller=AdminSelfUpgrade&amp;token=07784564a88bfbdce8b087420f6094e7\" class=\"link\">
                      <i class=\"material-icons mi-upgrade\">upgrade</i>
                      <span>
                      1-Click Upgrade
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
           ";
        // line 1261
        echo "                                         <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"145\" id=\"subtab-AdminPosLogo\">
                    <a href=\"http://lifestyle.local/admin77500/index.php?controller=AdminPosLogo&amp;token=74fb8508949090d235999570b3e9649a\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
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
        class=\"header-multishop header-multishop-dark\"
        data-shop-id=\"1\"                data-checkbox-notification=\"Para aplicar definições específicas a uma loja ou a um grupo de lojas, seleccione o parâmetro a modificar, faça as alterações e guarde. \"
    >
      <div class=\"header-multishop-top-bar\" style=\"background-color: #ffb809;\">
        <div class=\"header-multishop-center js-header-multishop-open-modal\">
                      <svg width=\"43px\" height=\"30px\" viewBox=\"0 0 43 30\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
  <de";
        // line 1298
        echo "fs>
    <rect id=\"path-1\" x=\"0\" y=\"0\" width=\"51\" height=\"36\"></rect>
  </defs>
  <g id=\"Page-1\" stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\" opacity=\"0.599844\">
    <g id=\"storefront-24px-(1)\" transform=\"translate(-4.000000, -6.000000)\">
      <g id=\"Shape\">
        <mask id=\"mask-2\" fill=\"#fefefe\">
          <use xlink:href=\"#path-1\"></use>
        </mask>
        <g id=\"Mask\"></g>
        <path d=\"M46.787234,18.4344444 L44.5290073,9.20888889 C44.0558551,7.30888889 42.3783153,6 40.4211856,6 L10.5480733,6 C8.61245052,6 6.91340382,7.33 6.46175849,9.20888889 L4.20353187,18.4344444 C3.68736578,20.5877778 4.16051803,22.7833333 5.53696092,24.5144444 C5.70901628,24.7466667 5.94559241,24.9155556 6.13915469,25.1266667 L6.13915469,39.7777778 C6.13915469,42.1 8.07477751,44 10.4405387,44 L40.5502271,44 C42.9159883,44 44.8516111,42.1 44.8516111,39.7777778 L44.8516111,25.1266667 C45.0451734,24.9366667 45.2817495,24.7466667 45.4538049,24.5355556 C46.8302478,22.8044444 47.324907,20.5877778 46.787234,18.4344444 Z M40.3566648,10.2011111 L42.6148914,19.4266667 C42.8299606,20.3133333 42.6363984,21.2 42.0772184,21.8966667 C41.7761215,22.2766667 41.1309139,22.8888889 40.0555679,22.8888889 C38.7436458,22.8888889 37.603779,21.8544444 37.4532306,20.4822222 L36.2058292,10.2222222 L40.3566648,10.2011111 Z M27.6460749,10.2222222 L31.8614313,10.2222222 L33.022805,19.7644444 C33.1303396,20.5877778 32.8722566,21.4111111 32.3130766,22.0233333 C31.8399244,22.5722222 31.1517029,22.8888889 30.2699192,22.8888889 C28.8289556,22.8888889 27.6460749,21.6433333 27.6460749,20.1233333 L27.6460749,10.2222222 Z M17.9464539,19.7644444 L19.1293345,10.2222222 L23.3446909,10.2222222 L23.3446909,20.1233333 C23.3446909,21.6433333 22.1618103,22.8888889 20.5702982,22.8888889 C19.8390629,22.8888889 19.1723484,22.5722222 18.6561823,22.0233333 C18.1185093,21.4111111 17.8604262,20.5877778 17.9464539,19.7644444 Z M8.37587439,19.4266667 L10.5480733,10.2222222 L14.7849366,10.2222222 L13.5375353,20.4822222 ";
        // line 1308
        echo "C13.3654799,21.8544444 12.24712,22.8888889 10.9351979,22.8888889 C9.88135881,22.8888889 9.21464428,22.2766667 8.93505432,21.8966667 C8.35436747,21.2211111 8.16080519,20.3133333 8.37587439,19.4266667 Z M10.4405387,39.7777778 L10.4405387,27.0477778 C10.6125941,27.0688889 10.7631425,27.1111111 10.9351979,27.1111111 C12.8063,27.1111111 14.5053467,26.3511111 15.752748,25.1055556 C17.0431633,26.3722222 18.7637169,27.1111111 20.7208466,27.1111111 C22.5919487,27.1111111 24.2694885,26.3511111 25.5168898,25.1477778 C26.7857981,26.3511111 28.5063517,27.1111111 30.4419746,27.1111111 C32.2485559,27.1111111 33.9691095,26.3722222 35.2595247,25.1055556 C36.5069261,26.3511111 38.2059728,27.1111111 40.0770748,27.1111111 C40.2491302,27.1111111 40.3996786,27.0688889 40.571734,27.0477778 L40.571734,39.7777778 L10.4405387,39.7777778 Z\" fill=\"black\" fill-rule=\"nonzero\" mask=\"url(#mask-2)\"></path>
      </g>
    </g>
  </g>
</svg>
          
          <h2 class=\"header-multishop-title\">
            Life Style
          </h2>

          <button class=\"header-multishop-button\">
            <i class=\"material-icons\">expand_more</i>
          </button>
        </div>
      </div>

              <div class=\"header-multishop-right\">
                    <a class=\"header-multishop-view-action\" href=\"http://lifestyle.local/\" target=\"_blank\" rel=\"nofollow\">View my store <i class=\"material-icons\">visibility</i></a>
                  </div>
      
      <div id=\"multishop-modal\" class=\"multishop-modal multishop-modal-hidden js-multishop-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"multishop-modal\" aria-hidden=\"true\">
        <div class=\"multishop-modal-dialog js-multishop-modal-dialog\" role=\"document\">
          <div class=\"multishop-modal-body\">
                                    <div class=\"multishop-modal-search-container\">
              <i class=\"material-icons\">search</i>
              <input type=\"text\" class=\"form-control multishop-modal-search js-multishop-modal-search\" placeholder=\"Se";
        // line 1333
        echo "arch store name\" data-no-results=\"Não foram encontrados resultados para\" data-searching=\"Pesquisar por\">
            </div>
                        
            <ul class=\"multishop-modal-group-list js-multishop-scrollbar\">
                                <li class=\"multishop-modal-all multishop-modal-item\">
                                      <span class=\"multishop-modal-color\" style=\"background-color:#25b9d7;\"></span>
                                    <a class=\"multishop-modal-all-name\" href=\"/admin77500/index.php/improve/design/themes/?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU&amp;setShopContext=\">
                    <span>Todas as lojas</span>
                  </a>
                </li>
                
                              <li class=\"multishop-modal-group-item multishop-modal-item first-group-item\">
                                    <span class=\"multishop-modal-color-container\">
                    <i class=\"material-icons\">check</i>
                    <a class=\"multishop-modal-color\" href=\"http://lifestyle.local/admin77500/index.php?controller=AdminShopGroup&amp;id_shop_group=1&amp;updateshop_group=1&amp;token=c063549379885a91172d6fcd223edf61\" data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"top\" data-content=\"Editar cor\" data-original-title=\"\" title=\"\"></a>
                  </span>
                  <a class=\"multishop-modal-group-name\" href=\"/admin77500/index.php/improve/design/themes/?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU&amp;setShopContext=g-1\">Grupo Default</a>
                                  </li>

                                  <li class=\"multishop-modal-shop-item multishop-modal-item\">
                                        <div class=\"multishop-modal-item-left\">
                      <span class=\"multishop-modal-color-container multishop-modal-color-check\">
                        <i class=\"material-icons\">check</i>
                        <a class=\"multishop-modal-color\" style=\"background-colo";
        // line 1356
        echo "r: #ffb809;\" href=\"http://lifestyle.local/admin77500/index.php?controller=AdminShop&amp;shop_id=1&amp;updateshop=1&amp;token=58881507d54dfb873ebda3d8b388f74b\" data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"top\" data-content=\"Editar cor\" data-original-title=\"\" title=\"\"></a>
                      </span>
                      <a class=\"multishop-modal-shop-name\" href=\"/admin77500/index.php/improve/design/themes/?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU&amp;setShopContext=s-1\">Life Style</a>                    </div>
                                          <a class=\"multishop-modal-shop-view\" href=\"http://lifestyle.local/\" target=\"_blank\" rel=\"noreferrer\">View my store <i class=\"material-icons\">visibility</i></a>
                                                          </li>
                                  <li class=\"multishop-modal-shop-item multishop-modal-item\">
                                        <div class=\"multishop-modal-item-left\">
                      <span class=\"multishop-modal-color-container\">
                        <i class=\"material-icons\">check</i>
                        <a class=\"multishop-modal-color\" style=\"background-color: #0da900;\" href=\"http://lifestyle.local/admin77500/index.php?controller=AdminShop&amp;shop_id=2&amp;updateshop=1&amp;token=58881507d54dfb873ebda3d8b388f74b\" data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"top\" data-content=\"Editar cor\" data-original-title=\"\" title=\"\"></a>
                      </span>
                      <a class=\"multishop-modal-shop-name\" href=\"/admin77500/index.php/improve/design/themes/?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU&amp;setShopContext=s-2\">Casual Vibes</a>                    </div>
                                          <a class=\"multishop-modal-shop-view\" href=\"http://moda.local/\" target=\"_blank\" rel=\"noreferrer\">View my store <i class=\"material-icons\">visibility</i></a>
                                                          </li>
     ";
        // line 1370
        echo "                             <li class=\"multishop-modal-shop-item multishop-modal-item\">
                                        <div class=\"multishop-modal-item-left\">
                      <span class=\"multishop-modal-color-container\">
                        <i class=\"material-icons\">check</i>
                        <a class=\"multishop-modal-color\" style=\"background-color: #f40d00;\" href=\"http://lifestyle.local/admin77500/index.php?controller=AdminShop&amp;shop_id=3&amp;updateshop=1&amp;token=58881507d54dfb873ebda3d8b388f74b\" data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"top\" data-content=\"Editar cor\" data-original-title=\"\" title=\"\"></a>
                      </span>
                      <a class=\"multishop-modal-shop-name\" href=\"/admin77500/index.php/improve/design/themes/?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU&amp;setShopContext=s-3\">As Yourself</a>                    </div>
                                          <a class=\"multishop-modal-shop-view\" href=\"http://cosmetica.local/\" target=\"_blank\" rel=\"noreferrer\">View my store <i class=\"material-icons\">visibility</i></a>
                                                          </li>
                                  <li class=\"multishop-modal-shop-item multishop-modal-item\">
                                        <div class=\"multishop-modal-item-left\">
                      <span class=\"multishop-modal-color-container\">
                        <i class=\"material-icons\">check</i>
                        <a class=\"multishop-modal-color\" style=\"background-color: #fd25ff;\" href=\"http://lifestyle.local/admin77500/index.php?controller=AdminShop&amp;shop_id=4&amp;updateshop=1&amp;token=58881507d54dfb873ebda3d8b388f74b\" data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"top\" data-content=\"Editar cor\" data-original-title=\"\" title=\"\"></a>
                      </span>
                      <a class=\"multishop-modal-shop-name\" href=\"/admin77500/index.php/improve/design/themes/?_token";
        // line 1385
        echo "=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU&amp;setShopContext=s-4\">2 Play 4 Fun</a>                    </div>
                                          <a class=\"multishop-modal-shop-view\" href=\"http://toys.local/\" target=\"_blank\" rel=\"noreferrer\">View my store <i class=\"material-icons\">visibility</i></a>
                                                          </li>
                                  <li class=\"multishop-modal-shop-item multishop-modal-item\">
                                        <div class=\"multishop-modal-item-left\">
                      <span class=\"multishop-modal-color-container\">
                        <i class=\"material-icons\">check</i>
                        <a class=\"multishop-modal-color\" style=\"background-color: #3973ff;\" href=\"http://lifestyle.local/admin77500/index.php?controller=AdminShop&amp;shop_id=5&amp;updateshop=1&amp;token=58881507d54dfb873ebda3d8b388f74b\" data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"top\" data-content=\"Editar cor\" data-original-title=\"\" title=\"\"></a>
                      </span>
                      <a class=\"multishop-modal-shop-name\" href=\"/admin77500/index.php/improve/design/themes/?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU&amp;setShopContext=s-5\">World Decor</a>                    </div>
                                          <a class=\"multishop-modal-shop-view\" href=\"http://decor.local/\" target=\"_blank\" rel=\"noreferrer\">View my store <i class=\"material-icons\">visibility</i></a>
                                                          </li>
                                  <li class=\"multishop-modal-shop-item multishop-modal-item\">
                                        <div class=\"multishop-modal-item-left\">
                      <span class=\"multishop-modal-color-container\">
                        <i class=\"material-icons\">check</i>
                        <a class=\"multishop-modal-color\" style=\"background-color: #19c2ff;\" href=\"http://lifestyle.local/admin77500/index";
        // line 1401
        echo ".php?controller=AdminShop&amp;shop_id=6&amp;updateshop=1&amp;token=58881507d54dfb873ebda3d8b388f74b\" data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"top\" data-content=\"Editar cor\" data-original-title=\"\" title=\"\"></a>
                      </span>
                      <a class=\"multishop-modal-shop-name\" href=\"/admin77500/index.php/improve/design/themes/?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU&amp;setShopContext=s-6\">InnovaTech-Zone</a>                    </div>
                                          <a class=\"multishop-modal-shop-view\" href=\"http://tech.local/\" target=\"_blank\" rel=\"noreferrer\">View my store <i class=\"material-icons\">visibility</i></a>
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
                      <li class=\"breadcrumb-item\">Tema Gráfico e Logótipo</li>
          
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Tema Gráfico e Logótipo &gt; Tema gráfico          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-add\"
                  href=\"/admin77500/index.php/improve/design/themes/import?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\"                  title=\"Adicionar novo tema gráfico\"                                  >
                  <i class=\"material-icons\">add</i>                  Adicionar novo tema gráfico
                </a>
                                                                    ";
        // line 1440
        echo "    <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-export\"
                  href=\"/admin77500/index.php/improve/design/themes/export?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\"                  title=\"Exportar tema atual\"                                  >
                  <i class=\"material-icons\">cloud_download</i>                  Exportar tema atual
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Ajuda\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/admin77500/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fpt%252Fdoc%252FAdminThemes%253Fversion%253D8.2.0%2526country%253Dpt/Ajuda?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\"
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
        // line 1466
        echo "                                                                                             <li class=\"nav-item\">
                    <a href=\"/admin77500/index.php/improve/design/themes/?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" id=\"subtab-AdminThemes\" class=\"nav-link tab active current\" data-submenu=\"53\">
                      Tema Gráfico e Logótipo
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"http://lifestyle.local/admin77500/index.php?controller=AdminPsThemeCustoConfiguration&token=0c0aadd1cee2c0e775745e7446b14569\" id=\"subtab-AdminPsThemeCustoConfiguration\" class=\"nav-link tab \" data-submenu=\"127\">
                      Pages Configuration
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"http://lifestyle.local/admin77500/index.php?controller=AdminPsThemeCustoAdvanced&token=ad2df57803088cc1a28de7f0b14a8ca6\" id=\"subtab-AdminPsThemeCustoAdvanced\" class=\"nav-link tab \" data-submenu=\"128\">
                      Advanced Customization
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                                                                                                                             ";
        // line 1490
        echo "                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       </ul>
    </div>
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-add\"
              href=\"/admin77500/index.php/improve/design/themes/import?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\"              title=\"Adicionar novo tema gráfico\"            >
              Adicionar novo tema gráfico
              <i class=\"material-icons\">add</i>            </a>
                                        <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-export\"
              href=\"/admin77500/index.php/improve/design/themes/export?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\"              title=\"Expo";
        // line 1507
        echo "rtar tema atual\"            >
              Exportar tema atual
              <i class=\"material-icons\">cloud_download</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Ajuda\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/admin77500/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fpt%252Fdoc%252FAdminThemes%253Fversion%253D8.2.0%2526country%253Dpt/Ajuda?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\"
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
        // line 1536
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
        // line 1570
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 87
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_stylesheets"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1536
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_footer"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_right"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_right"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1570
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translate_javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translate_javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "__string_template__81304a7d9266c18d1da7b42bc7649aa0";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1849 => 1570,  1780 => 1536,  1745 => 87,  1730 => 1570,  1690 => 1536,  1659 => 1507,  1640 => 1490,  1614 => 1466,  1586 => 1440,  1545 => 1401,  1527 => 1385,  1510 => 1370,  1494 => 1356,  1469 => 1333,  1442 => 1308,  1430 => 1298,  1391 => 1261,  1348 => 1220,  1319 => 1193,  1287 => 1163,  1254 => 1132,  1220 => 1100,  1190 => 1072,  1158 => 1042,  1119 => 1005,  1086 => 974,  1052 => 942,  1021 => 913,  988 => 882,  955 => 851,  921 => 819,  889 => 789,  858 => 760,  826 => 730,  788 => 694,  757 => 665,  721 => 631,  690 => 602,  656 => 570,  624 => 540,  591 => 509,  556 => 476,  524 => 446,  478 => 402,  428 => 354,  380 => 308,  330 => 260,  286 => 218,  247 => 181,  228 => 164,  186 => 124,  144 => 87,  124 => 69,  96 => 43,  52 => 1,);
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

<title>Tema Gráfico e Logótipo > Tema gráfico • Life Style</title>

  <script type=\"text/javascript\">
    var help_class_name = \\'AdminThemes\\';
    var iso_user = \\'pt\\';
    var lang_is_rtl = \\'0\\';
    var full_language_code = \\'pt-pt\\';
    var full_cldr_language_code = \\'pt-PT\\';
    var country_iso_code = \\'PT\\';
    var _PS_VERSION_ = \\'8.2.0\\';
    var roundMode = 2;
    var youEditFieldFor = \\'\\';
        var new_order_msg = \\'A new order has been placed on your store.\\';
    var order_number_msg = \\'Número da encomenda: \\';
    var total_msg = \\'Total: \\';
    var from_msg = \\'De: \\';
    var see_order_msg = \\'Ver esta encomenda\\';
    var new_customer_msg = \\'A new customer registered on your store.\\';
    var customer_name_msg = \\'Nome do cliente: \\';
    var new_msg = \\'A new message was posted on your store.\\';
    var see_msg = \\'Ler esta mensagem\\';
    var token = \\'4a3ecd6931384051ce674a32ed0b508b\\';
    var currentIndex = \\'index.php?controller=AdminThemes\\';
    var employee_token = \\'6ccbaaaf4180464656563f6a8f917d03\\';
    var choose_language_translate = \\'Escolher idioma:\\';
    var default_language = \\'2\\';
    var admin_modules_link = \\'/admin77500/index.php/improve/modules/manage?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\\';
    var admin_notification_get_link = \\'/admin77500/index.php/common/notifications?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\\';
    var admin_notification_push_link = adminNotificationPushLink = \\'/admin77500/index.php/common/notifications/ack?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\\';
    var tab_modules_list = \\'\\';
    var update_success_msg = \\'Atualizado com sucesso\\';
    var se' | raw }}{{ 'arch_product_msg = \\'Pesquisar um produto\\';
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
var baseAdminDir = \"\\\\/admin77500\\\\/\";
var baseDir = \"\\\\/\";
var changeFormLanguageUrl = \"\\\\/admin77500\\\\/index.php\\\\/configure\\\\/advanced\\\\/employees\\\\/change-form-language?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\\\u20ac\",\"name\":\"Euro\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"currencyCode\":\"EUR\",\"currencySymbol\":\"\\\\u20ac\",\"numberSymbols\":[\",\",\"\\\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\\\u00a0\\\\u00a4\",\"negativePattern\":\"-#,##0.00\\\\u00a0\\\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\",\",\"\\\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\"\\\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":true};
var show' | raw }}{{ '_new_customers = \"1\";
var show_new_messages = \"1\";
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

  

' | raw }}{% block stylesheets %}{% endblock %}{% block extra_stylesheets %}{% endblock %}</head>{{ '

<body
  class=\"lang-pt adminthemes multishop-enabled developer-mode\"
  data-base-url=\"/admin77500/index.php\"  data-token=\"h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\">

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
          <a class=\"dropdown-i' | raw }}{{ 'tem quick-row-link \"
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
        data-rand=\"194\"
        data-icon=\"icon-AdminThemesParent\"
        data-method=\"add\"
        data-url=\"index.php/improve/design/themes\"
        data-post-link=\"http://lifestyle.local/admin77500/index.php?controller=AdminQuickAccesses&token=a7db0dd1c08db0707fec548a31b24c59\"
        data-prompt-text=\"Atribua um nome a este atalho:\"
        data-link=\"Tema Gr&aacute;fico e...\"
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
      method=\"post\"
      actio' | raw }}{{ 'n=\"/admin77500/index.php?controller=AdminSearch&amp;token=cb6d663b2cc7366353eef3e57514b14b\"
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
        <a class=\"dropdown-item\" data-item=\"Faturas\" href=\"#\" data-value=\"4\" data-placeholder=\"Número da fatura\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Faturas</a>
  ' | raw }}{{ '      <a class=\"dropdown-item\" data-item=\"Carrinhos\" href=\"#\" data-value=\"5\" data-placeholder=\"ID do Carrinho\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carrinhos</a>
        <a class=\"dropdown-item\" data-item=\"Módulos\" href=\"#\" data-value=\"7\" data-placeholder=\"Nome do Módulo\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Módulos</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">PESQUISAR</span><i class=\"material-icons\">search</i></button>
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
       href=\"http://lifest' | raw }}{{ 'yle.local/admin77500/index.php/sell/catalog/products/new?token=59b18c8243971cbf21cd0ecc6a2bc905\"
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
      data-rand=\"128\"
      data-icon=\"icon-AdminThemesParent\"
      data-method=\"add\"
      data-url=\"index.php/improve/design/themes\"
      data-post-link=\"http://lifestyle.local/admin77500/index.php?controller=AdminQuickAccesses&token=a7db0dd1c08db0707fec548a31b24c59\"
      data-prompt-text=\"Atribua um nome a este atalho:\"
      data-link=\"Tema Gr&aacute;fico e...\"
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

              <div class=\"component hide-mobile-sm\" id=\"header-debug-mode-container\">
          <a class=\"link shop-state\"
             id=\"debug-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"<p class=&quot;text-left&quot;><strong>Your store is in debug mode.</strong></p><' | raw }}{{ 'p class=&quot;text-left&quot;>Todos os erros PHP e mensagens são apresentados. Quando não necessitar mais, &lt;strong&gt;desligue&lt;/strong&gt; este modo.</p>\"
             href=\"/admin77500/index.php/configure/advanced/performance/?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\"
          >
            <i class=\"material-icons\">bug_report</i>
            <span>Modo de descoberta de erros (debug)</span>
          </a>
        </div>
      
      
      <div class=\"header-right\">
                          <div class=\"component header-right-component\" id=\"header-notifications-container\">
            <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
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
              data-type=\"cu' | raw }}{{ 'stomer_message\"
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
              Verificou os seus <strong><a href=\"http://lifestyle.local/admin77500/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=5fdfa5a796a91c38bfa041582e286d57\">carrinhos abandonados</a></strong>?<br>A sua próxima encomenda poderá estar escondida aí!
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
    <a class=\"notif\" href=\\'order_url\\'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href=\\'customer_u' | raw }}{{ 'rl\\'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registado <strong>_date_add_</strong>
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
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://lifestyle.local/img/pr/default.jpg\" alt=\"Bruno\" /></span>
        <span class=\"employee_profile\">Seja bem-vindo ao Bruno</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/admin77500/index.php/configure/advanced/employees/1/edit?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\">
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
  <span class=\"menu-collapse\" data-toggle-url=\"/admin77500/index.php/configure/advanced/employees/toggle-navigation?_token=h0NZQx7f38tgDL2RgJKoFs' | raw }}{{ '1qMhD9c0kZ_FMsVAcaAsU\">
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
              <a href=\"http://lifestyle.local/admin77500/index.php?controller=AdminDashboard&amp;token=80a25971ac7cefb6056feba3d832f5e5\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Painel de controlo</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Vender</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/admin77500/index.php/sell/orders/?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Encomendas
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                ' | raw }}{{ '            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/admin77500/index.php/sell/orders/?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\"> Encomendas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/admin77500/index.php/sell/orders/invoices/?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\"> Faturas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/admin77500/index.php/sell/orders/credit-slips/?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\"> Notas de Crédito
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/admin77500/index.php/sell/orders/delivery-slips/?_token=h0NZQx7f38' | raw }}{{ 'tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\"> Notas de Entrega
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://lifestyle.local/admin77500/index.php?controller=AdminCarts&amp;token=5fdfa5a796a91c38bfa041582e286d57\" class=\"link\"> Carrinhos de Compras
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/admin77500/index.php/sell/catalog/products?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\">
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
                    ' | raw }}{{ '            <a href=\"/admin77500/index.php/sell/catalog/products?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\"> Produtos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/admin77500/index.php/sell/catalog/categories?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\"> Categorias
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/admin77500/index.php/sell/catalog/monitoring/?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\"> Monitorização
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://lifestyle.local/admin77500/index.php?controller=AdminAttributesGroups&amp;token=e44ac4055c7e4128cf8f35aa940f5fa6\" class=\"link\"> Atributos e Características
                                </a>
                              </li>

                                                                                  
                              
                                                            
      ' | raw }}{{ '                        <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/admin77500/index.php/sell/catalog/brands/?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\"> Marcas e Fornecedores
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/admin77500/index.php/sell/attachments/?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\"> Ficheiros
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://lifestyle.local/admin77500/index.php?controller=AdminCartRules&amp;token=f3fcfdfaca6d4c9a4dadfec52f9fff6b\" class=\"link\"> Descontos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/admin77500/index.php/sell/stocks/?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\"> Stocks
                                </a>
                              </li>

                                                                              </ul>
            ' | raw }}{{ '                            </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/admin77500/index.php/sell/customers/?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Clientes
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/admin77500/index.php/sell/customers/?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\"> Clientes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/admin77500/index.php/sell/addresses/?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\"> Endereços
                                </a>
                              </li>

                                ' | raw }}{{ '                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://lifestyle.local/admin77500/index.php?controller=AdminCustomerThreads&amp;token=5e1031b0d998731dd1ff831ed4d73372\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Apoio ao Cliente
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://lifestyle.local/admin77500/index.php?controller=AdminCustomerThreads&amp;token=5e1031b0d998731dd1ff831ed4d73372\" class=\"link\"> Apoio ao Cliente
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/admin77500/index.php/sell/cust' | raw }}{{ 'omer-service/order-messages/?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\"> Mensagens de Encomendas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://lifestyle.local/admin77500/index.php?controller=AdminReturn&amp;token=9b18768cc96c68833de7b3f97fe45498\" class=\"link\"> Mercadorias Devolvidas
                                </a>
                              </li>

                                                                              </ul>
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
         ' | raw }}{{ '           <a href=\"http://lifestyle.local/admin77500/index.php?controller=MoloniStart&amp;token=617e0661d6e9a50499c0a89fbeefcd28\" class=\"link\">
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
                                <a href=\"http://lifestyle.local/admin77500/index.php?controller=MoloniStart&amp;token=617e0661d6e9a50499c0a89fbeefcd28\" class=\"link\"> Moloni
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"181\" id=\"subtab-MoloniMovimentos\">
                                <a href=\"http://lifestyle.local/admin77500/index.php?controller=MoloniMovimentos&amp;token=1c3f84119a422124e002b14473ae6510\" class=\"link\"> Documentos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"182\" id=\"subtab-MoloniConfiguraca' | raw }}{{ 'o\">
                                <a href=\"http://lifestyle.local/admin77500/index.php?controller=MoloniConfiguracao&amp;token=c9535bef290c1d65f59fd11409eff799\" class=\"link\"> Definições
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                                            
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"42\" id=\"tab-IMPROVE\">
                <span class=\"title\">Melhorar</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/admin77500/index.php/improve/modules/manage?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\">
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
                                <a href=\"/admin77500/index.php/improve/modules/manage?_token=h0NZ' | raw }}{{ 'Qx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\"> Module Manager
                                </a>
                              </li>

                                                                                  
                              
                                                                                                                          
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminModules\">
                                <a href=\"http://lifestyle.local/admin77500/index.php?controller=AdminModules&amp;token=7ce4934086e2ae06784ad2e750786b46\" class=\"link\"> AdminModules
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/admin77500/index.php/improve/design/themes/?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Design
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                      
                ' | raw }}{{ '              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"126\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/admin77500/index.php/improve/design/themes/?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\"> Tema Gráfico e Logótipo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"136\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"http://lifestyle.local/admin77500/index.php?controller=AdminPsMboTheme&amp;token=b4e173bc61a9f0914a55a70b8afcd92b\" class=\"link\"> Catálogo do Tema Gráfico
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/admin77500/index.php/improve/design/mail_theme/?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\"> Email Theme
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/admin77500/index.php/improve/design/cms-pages/?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\"> Páginas
                                </a>
' | raw }}{{ '                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"58\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/admin77500/index.php/improve/design/modules/positions/?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\"> Posições
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"59\" id=\"subtab-AdminImages\">
                                <a href=\"http://lifestyle.local/admin77500/index.php?controller=AdminImages&amp;token=c2db0f3090419f48f3c15a5c22ca698d\" class=\"link\"> Definições de Imagem
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"125\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/admin77500/index.php/modules/link-widget/list?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\"> Link Widget
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"141\" id=\"subtab-AdminPosStaticblocks\">
                                <a href=\"http://lifestyle.local/admin77500/index.php?contro' | raw }}{{ 'ller=AdminPosStaticblocks&amp;token=48b535ac3ed3ae108d91a82a491e1d56\" class=\"link\"> Pos Staticblocks
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"142\" id=\"subtab-AdminStaticFooter\">
                                <a href=\"http://lifestyle.local/admin77500/index.php?controller=AdminStaticFooter&amp;token=033c237e2c47eb6809ec86fe8ac8e7c1\" class=\"link\"> Pos Staticfooter
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
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
                                                      
                              
                                                            
                              <li ' | raw }}{{ 'class=\"link-leveltwo\" data-submenu=\"61\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://lifestyle.local/admin77500/index.php?controller=AdminCarriers&amp;token=b740044e52116717af10be5e6473758a\" class=\"link\"> Transportadoras
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminShipping\">
                                <a href=\"/admin77500/index.php/improve/shipping/preferences/?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\"> Preferências
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"63\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/admin77500/index.php/improve/payment/payment_methods?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Pagamento
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-63\" class=\"submenu panel-collapse\">
                                                      
               ' | raw }}{{ '               
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"64\" id=\"subtab-AdminPayment\">
                                <a href=\"/admin77500/index.php/improve/payment/payment_methods?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\"> Métodos de Pagamento
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"65\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/admin77500/index.php/improve/payment/preferences?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\"> Preferências
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"66\" id=\"subtab-AdminInternational\">
                    <a href=\"/admin77500/index.php/improve/international/localization/?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                          ' | raw }}{{ '    <ul id=\"collapse-66\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"67\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/admin77500/index.php/improve/international/localization/?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\"> Localização
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/admin77500/index.php/improve/international/zones/?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\"> Localizações
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"76\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/admin77500/index.php/improve/international/taxes/?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\"> IVA
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminTranslations\">
                                <a href=\"/admin77500/index.php/improve/international/translations/settings?' | raw }}{{ '_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\"> Traduções
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"146\" id=\"subtab-Adminxprtdashboard\">
                    <a href=\"http://lifestyle.local/admin77500/index.php?controller=Adminxippost&amp;token=2ccfc5324e3aa639a680cd1e599b7dc4\" class=\"link\">
                      <i class=\"material-icons mi-\"></i>
                      <span>
                      Xpert Blog
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-146\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"147\" id=\"subtab-Adminxippost\">
                                <a href=\"http://lifestyle.local/admin77500/index.php?controller=Adminxippost&amp;token=2ccfc5324e3aa639a680cd1e599b7dc4\" class=\"link\"> Blog Posts
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"148\" id=\"subtab-Adminxipca' | raw }}{{ 'tegory\">
                                <a href=\"http://lifestyle.local/admin77500/index.php?controller=Adminxipcategory&amp;token=f650e592280c933bf865f62846ac60f2\" class=\"link\"> Blog Categories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"149\" id=\"subtab-Adminxipcomment\">
                                <a href=\"http://lifestyle.local/admin77500/index.php?controller=Adminxipcomment&amp;token=8c7fcb8aa51a8d1781c4c19149d5b34b\" class=\"link\"> Blog Comments
                                </a>
                              </li>

                                                                                  
                              
                                                            
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
                ' | raw }}{{ '      Marketing
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-193\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"194\" id=\"subtab-AdminPsfacebookModule\">
                                <a href=\"http://lifestyle.local/admin77500/index.php?controller=AdminPsfacebookModule&amp;token=bdd659b903345471ccf990fc5be47c40\" class=\"link\"> Facebook
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"80\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configurar</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"81\" id=\"subtab-ShopParameters\">
                    <a href=\"/admin77500/index.php/configure/shop/preferences/preferences?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Parâmetros da Loja
                      </span>
                                                    <i class=\"mate' | raw }}{{ 'rial-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-81\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"82\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/admin77500/index.php/configure/shop/preferences/preferences?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\"> Geral
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"85\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/admin77500/index.php/configure/shop/order-preferences/?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\"> Definições da Encomenda
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"88\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/admin77500/index.php/configure/shop/product-preferences/?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\"> Produtos
                                </a>
                              </li>

                                                                                  
  ' | raw }}{{ '                            
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/admin77500/index.php/configure/shop/customer-preferences/?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\"> Definições do cliente
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminParentStores\">
                                <a href=\"/admin77500/index.php/configure/shop/contacts/?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\"> Contacto
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/admin77500/index.php/configure/shop/seo-urls/?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\"> Tráfego e SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"100\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://lifestyle.local/admin77500/index.php?controller=AdminSearchConf&amp;token=29a70d7e3efa159d415a1202cb9422ef\" class=\"link\"> Pesquisar
                         ' | raw }}{{ '       </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"130\" id=\"subtab-AdminGamification\">
                                <a href=\"http://lifestyle.local/admin77500/index.php?controller=AdminGamification&amp;token=78cc19cc33cdee0a343fd876ced38366\" class=\"link\"> Merchant Expertise
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"103\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/admin77500/index.php/configure/advanced/system-information/?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\">
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
                ' | raw }}{{ '                <a href=\"/admin77500/index.php/configure/advanced/system-information/?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\"> Informação
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminPerformance\">
                                <a href=\"/admin77500/index.php/configure/advanced/performance/?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\"> Desempenho
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/admin77500/index.php/configure/advanced/administration/?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\"> Administração
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"107\" id=\"subtab-AdminEmails\">
                                <a href=\"/admin77500/index.php/configure/advanced/emails/?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\"> Email
                                </a>
                              </li>

                                                                                  
                              
                                                            
          ' | raw }}{{ '                    <li class=\"link-leveltwo\" data-submenu=\"108\" id=\"subtab-AdminImport\">
                                <a href=\"/admin77500/index.php/configure/advanced/import/?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\"> Importar
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"109\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/admin77500/index.php/configure/advanced/employees/?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\"> Empregados
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"113\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/admin77500/index.php/configure/advanced/sql-requests/?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\"> Base de dados
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"116\" id=\"subtab-AdminLogs\">
                                <a href=\"/admin77500/index.php/configure/advanced/logs/?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\"> Registos
                                </a>
                              </li>

                                                                                  
               ' | raw }}{{ '               
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"117\" id=\"subtab-AdminWebservice\">
                                <a href=\"/admin77500/index.php/configure/advanced/webservice-keys/?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"118\" id=\"subtab-AdminShopGroup\">
                                <a href=\"http://lifestyle.local/admin77500/index.php?controller=AdminShopGroup&amp;token=c063549379885a91172d6fcd223edf61\" class=\"link\"> Multi-Loja
                                </a>
                              </li>

                                                                                                                                        
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"211\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/admin77500/index.php/configure/advanced/feature-flags/?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" class=\"link\"> New &amp; Experimental Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"212\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"http://lifestyle.local/admin77500/index.php?controller=AdminParentSecurity&amp;token=f8bbc5e8fff784788534f297d' | raw }}{{ '0d9e6e7\" class=\"link\"> Security
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"218\" id=\"subtab-AdminSelfUpgrade\">
                    <a href=\"http://lifestyle.local/admin77500/index.php?controller=AdminSelfUpgrade&amp;token=07784564a88bfbdce8b087420f6094e7\" class=\"link\">
                      <i class=\"material-icons mi-upgrade\">upgrade</i>
                      <span>
                      1-Click Upgrade
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
           ' | raw }}{{ '                                         <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"145\" id=\"subtab-AdminPosLogo\">
                    <a href=\"http://lifestyle.local/admin77500/index.php?controller=AdminPosLogo&amp;token=74fb8508949090d235999570b3e9649a\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
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
        class=\"header-multishop header-multishop-dark\"
        data-shop-id=\"1\"                data-checkbox-notification=\"Para aplicar definições específicas a uma loja ou a um grupo de lojas, seleccione o parâmetro a modificar, faça as alterações e guarde. \"
    >
      <div class=\"header-multishop-top-bar\" style=\"background-color: #ffb809;\">
        <div class=\"header-multishop-center js-header-multishop-open-modal\">
                      <svg width=\"43px\" height=\"30px\" viewBox=\"0 0 43 30\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
  <de' | raw }}{{ 'fs>
    <rect id=\"path-1\" x=\"0\" y=\"0\" width=\"51\" height=\"36\"></rect>
  </defs>
  <g id=\"Page-1\" stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\" opacity=\"0.599844\">
    <g id=\"storefront-24px-(1)\" transform=\"translate(-4.000000, -6.000000)\">
      <g id=\"Shape\">
        <mask id=\"mask-2\" fill=\"#fefefe\">
          <use xlink:href=\"#path-1\"></use>
        </mask>
        <g id=\"Mask\"></g>
        <path d=\"M46.787234,18.4344444 L44.5290073,9.20888889 C44.0558551,7.30888889 42.3783153,6 40.4211856,6 L10.5480733,6 C8.61245052,6 6.91340382,7.33 6.46175849,9.20888889 L4.20353187,18.4344444 C3.68736578,20.5877778 4.16051803,22.7833333 5.53696092,24.5144444 C5.70901628,24.7466667 5.94559241,24.9155556 6.13915469,25.1266667 L6.13915469,39.7777778 C6.13915469,42.1 8.07477751,44 10.4405387,44 L40.5502271,44 C42.9159883,44 44.8516111,42.1 44.8516111,39.7777778 L44.8516111,25.1266667 C45.0451734,24.9366667 45.2817495,24.7466667 45.4538049,24.5355556 C46.8302478,22.8044444 47.324907,20.5877778 46.787234,18.4344444 Z M40.3566648,10.2011111 L42.6148914,19.4266667 C42.8299606,20.3133333 42.6363984,21.2 42.0772184,21.8966667 C41.7761215,22.2766667 41.1309139,22.8888889 40.0555679,22.8888889 C38.7436458,22.8888889 37.603779,21.8544444 37.4532306,20.4822222 L36.2058292,10.2222222 L40.3566648,10.2011111 Z M27.6460749,10.2222222 L31.8614313,10.2222222 L33.022805,19.7644444 C33.1303396,20.5877778 32.8722566,21.4111111 32.3130766,22.0233333 C31.8399244,22.5722222 31.1517029,22.8888889 30.2699192,22.8888889 C28.8289556,22.8888889 27.6460749,21.6433333 27.6460749,20.1233333 L27.6460749,10.2222222 Z M17.9464539,19.7644444 L19.1293345,10.2222222 L23.3446909,10.2222222 L23.3446909,20.1233333 C23.3446909,21.6433333 22.1618103,22.8888889 20.5702982,22.8888889 C19.8390629,22.8888889 19.1723484,22.5722222 18.6561823,22.0233333 C18.1185093,21.4111111 17.8604262,20.5877778 17.9464539,19.7644444 Z M8.37587439,19.4266667 L10.5480733,10.2222222 L14.7849366,10.2222222 L13.5375353,20.4822222 ' | raw }}{{ 'C13.3654799,21.8544444 12.24712,22.8888889 10.9351979,22.8888889 C9.88135881,22.8888889 9.21464428,22.2766667 8.93505432,21.8966667 C8.35436747,21.2211111 8.16080519,20.3133333 8.37587439,19.4266667 Z M10.4405387,39.7777778 L10.4405387,27.0477778 C10.6125941,27.0688889 10.7631425,27.1111111 10.9351979,27.1111111 C12.8063,27.1111111 14.5053467,26.3511111 15.752748,25.1055556 C17.0431633,26.3722222 18.7637169,27.1111111 20.7208466,27.1111111 C22.5919487,27.1111111 24.2694885,26.3511111 25.5168898,25.1477778 C26.7857981,26.3511111 28.5063517,27.1111111 30.4419746,27.1111111 C32.2485559,27.1111111 33.9691095,26.3722222 35.2595247,25.1055556 C36.5069261,26.3511111 38.2059728,27.1111111 40.0770748,27.1111111 C40.2491302,27.1111111 40.3996786,27.0688889 40.571734,27.0477778 L40.571734,39.7777778 L10.4405387,39.7777778 Z\" fill=\"black\" fill-rule=\"nonzero\" mask=\"url(#mask-2)\"></path>
      </g>
    </g>
  </g>
</svg>
          
          <h2 class=\"header-multishop-title\">
            Life Style
          </h2>

          <button class=\"header-multishop-button\">
            <i class=\"material-icons\">expand_more</i>
          </button>
        </div>
      </div>

              <div class=\"header-multishop-right\">
                    <a class=\"header-multishop-view-action\" href=\"http://lifestyle.local/\" target=\"_blank\" rel=\"nofollow\">View my store <i class=\"material-icons\">visibility</i></a>
                  </div>
      
      <div id=\"multishop-modal\" class=\"multishop-modal multishop-modal-hidden js-multishop-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"multishop-modal\" aria-hidden=\"true\">
        <div class=\"multishop-modal-dialog js-multishop-modal-dialog\" role=\"document\">
          <div class=\"multishop-modal-body\">
                                    <div class=\"multishop-modal-search-container\">
              <i class=\"material-icons\">search</i>
              <input type=\"text\" class=\"form-control multishop-modal-search js-multishop-modal-search\" placeholder=\"Se' | raw }}{{ 'arch store name\" data-no-results=\"Não foram encontrados resultados para\" data-searching=\"Pesquisar por\">
            </div>
                        
            <ul class=\"multishop-modal-group-list js-multishop-scrollbar\">
                                <li class=\"multishop-modal-all multishop-modal-item\">
                                      <span class=\"multishop-modal-color\" style=\"background-color:#25b9d7;\"></span>
                                    <a class=\"multishop-modal-all-name\" href=\"/admin77500/index.php/improve/design/themes/?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU&amp;setShopContext=\">
                    <span>Todas as lojas</span>
                  </a>
                </li>
                
                              <li class=\"multishop-modal-group-item multishop-modal-item first-group-item\">
                                    <span class=\"multishop-modal-color-container\">
                    <i class=\"material-icons\">check</i>
                    <a class=\"multishop-modal-color\" href=\"http://lifestyle.local/admin77500/index.php?controller=AdminShopGroup&amp;id_shop_group=1&amp;updateshop_group=1&amp;token=c063549379885a91172d6fcd223edf61\" data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"top\" data-content=\"Editar cor\" data-original-title=\"\" title=\"\"></a>
                  </span>
                  <a class=\"multishop-modal-group-name\" href=\"/admin77500/index.php/improve/design/themes/?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU&amp;setShopContext=g-1\">Grupo Default</a>
                                  </li>

                                  <li class=\"multishop-modal-shop-item multishop-modal-item\">
                                        <div class=\"multishop-modal-item-left\">
                      <span class=\"multishop-modal-color-container multishop-modal-color-check\">
                        <i class=\"material-icons\">check</i>
                        <a class=\"multishop-modal-color\" style=\"background-colo' | raw }}{{ 'r: #ffb809;\" href=\"http://lifestyle.local/admin77500/index.php?controller=AdminShop&amp;shop_id=1&amp;updateshop=1&amp;token=58881507d54dfb873ebda3d8b388f74b\" data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"top\" data-content=\"Editar cor\" data-original-title=\"\" title=\"\"></a>
                      </span>
                      <a class=\"multishop-modal-shop-name\" href=\"/admin77500/index.php/improve/design/themes/?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU&amp;setShopContext=s-1\">Life Style</a>                    </div>
                                          <a class=\"multishop-modal-shop-view\" href=\"http://lifestyle.local/\" target=\"_blank\" rel=\"noreferrer\">View my store <i class=\"material-icons\">visibility</i></a>
                                                          </li>
                                  <li class=\"multishop-modal-shop-item multishop-modal-item\">
                                        <div class=\"multishop-modal-item-left\">
                      <span class=\"multishop-modal-color-container\">
                        <i class=\"material-icons\">check</i>
                        <a class=\"multishop-modal-color\" style=\"background-color: #0da900;\" href=\"http://lifestyle.local/admin77500/index.php?controller=AdminShop&amp;shop_id=2&amp;updateshop=1&amp;token=58881507d54dfb873ebda3d8b388f74b\" data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"top\" data-content=\"Editar cor\" data-original-title=\"\" title=\"\"></a>
                      </span>
                      <a class=\"multishop-modal-shop-name\" href=\"/admin77500/index.php/improve/design/themes/?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU&amp;setShopContext=s-2\">Casual Vibes</a>                    </div>
                                          <a class=\"multishop-modal-shop-view\" href=\"http://moda.local/\" target=\"_blank\" rel=\"noreferrer\">View my store <i class=\"material-icons\">visibility</i></a>
                                                          </li>
     ' | raw }}{{ '                             <li class=\"multishop-modal-shop-item multishop-modal-item\">
                                        <div class=\"multishop-modal-item-left\">
                      <span class=\"multishop-modal-color-container\">
                        <i class=\"material-icons\">check</i>
                        <a class=\"multishop-modal-color\" style=\"background-color: #f40d00;\" href=\"http://lifestyle.local/admin77500/index.php?controller=AdminShop&amp;shop_id=3&amp;updateshop=1&amp;token=58881507d54dfb873ebda3d8b388f74b\" data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"top\" data-content=\"Editar cor\" data-original-title=\"\" title=\"\"></a>
                      </span>
                      <a class=\"multishop-modal-shop-name\" href=\"/admin77500/index.php/improve/design/themes/?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU&amp;setShopContext=s-3\">As Yourself</a>                    </div>
                                          <a class=\"multishop-modal-shop-view\" href=\"http://cosmetica.local/\" target=\"_blank\" rel=\"noreferrer\">View my store <i class=\"material-icons\">visibility</i></a>
                                                          </li>
                                  <li class=\"multishop-modal-shop-item multishop-modal-item\">
                                        <div class=\"multishop-modal-item-left\">
                      <span class=\"multishop-modal-color-container\">
                        <i class=\"material-icons\">check</i>
                        <a class=\"multishop-modal-color\" style=\"background-color: #fd25ff;\" href=\"http://lifestyle.local/admin77500/index.php?controller=AdminShop&amp;shop_id=4&amp;updateshop=1&amp;token=58881507d54dfb873ebda3d8b388f74b\" data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"top\" data-content=\"Editar cor\" data-original-title=\"\" title=\"\"></a>
                      </span>
                      <a class=\"multishop-modal-shop-name\" href=\"/admin77500/index.php/improve/design/themes/?_token' | raw }}{{ '=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU&amp;setShopContext=s-4\">2 Play 4 Fun</a>                    </div>
                                          <a class=\"multishop-modal-shop-view\" href=\"http://toys.local/\" target=\"_blank\" rel=\"noreferrer\">View my store <i class=\"material-icons\">visibility</i></a>
                                                          </li>
                                  <li class=\"multishop-modal-shop-item multishop-modal-item\">
                                        <div class=\"multishop-modal-item-left\">
                      <span class=\"multishop-modal-color-container\">
                        <i class=\"material-icons\">check</i>
                        <a class=\"multishop-modal-color\" style=\"background-color: #3973ff;\" href=\"http://lifestyle.local/admin77500/index.php?controller=AdminShop&amp;shop_id=5&amp;updateshop=1&amp;token=58881507d54dfb873ebda3d8b388f74b\" data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"top\" data-content=\"Editar cor\" data-original-title=\"\" title=\"\"></a>
                      </span>
                      <a class=\"multishop-modal-shop-name\" href=\"/admin77500/index.php/improve/design/themes/?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU&amp;setShopContext=s-5\">World Decor</a>                    </div>
                                          <a class=\"multishop-modal-shop-view\" href=\"http://decor.local/\" target=\"_blank\" rel=\"noreferrer\">View my store <i class=\"material-icons\">visibility</i></a>
                                                          </li>
                                  <li class=\"multishop-modal-shop-item multishop-modal-item\">
                                        <div class=\"multishop-modal-item-left\">
                      <span class=\"multishop-modal-color-container\">
                        <i class=\"material-icons\">check</i>
                        <a class=\"multishop-modal-color\" style=\"background-color: #19c2ff;\" href=\"http://lifestyle.local/admin77500/index' | raw }}{{ '.php?controller=AdminShop&amp;shop_id=6&amp;updateshop=1&amp;token=58881507d54dfb873ebda3d8b388f74b\" data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"top\" data-content=\"Editar cor\" data-original-title=\"\" title=\"\"></a>
                      </span>
                      <a class=\"multishop-modal-shop-name\" href=\"/admin77500/index.php/improve/design/themes/?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU&amp;setShopContext=s-6\">InnovaTech-Zone</a>                    </div>
                                          <a class=\"multishop-modal-shop-view\" href=\"http://tech.local/\" target=\"_blank\" rel=\"noreferrer\">View my store <i class=\"material-icons\">visibility</i></a>
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
                      <li class=\"breadcrumb-item\">Tema Gráfico e Logótipo</li>
          
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Tema Gráfico e Logótipo &gt; Tema gráfico          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-add\"
                  href=\"/admin77500/index.php/improve/design/themes/import?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\"                  title=\"Adicionar novo tema gráfico\"                                  >
                  <i class=\"material-icons\">add</i>                  Adicionar novo tema gráfico
                </a>
                                                                    ' | raw }}{{ '    <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-export\"
                  href=\"/admin77500/index.php/improve/design/themes/export?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\"                  title=\"Exportar tema atual\"                                  >
                  <i class=\"material-icons\">cloud_download</i>                  Exportar tema atual
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Ajuda\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/admin77500/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fpt%252Fdoc%252FAdminThemes%253Fversion%253D8.2.0%2526country%253Dpt/Ajuda?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\"
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
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     ' | raw }}{{ '                                                                                             <li class=\"nav-item\">
                    <a href=\"/admin77500/index.php/improve/design/themes/?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\" id=\"subtab-AdminThemes\" class=\"nav-link tab active current\" data-submenu=\"53\">
                      Tema Gráfico e Logótipo
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"http://lifestyle.local/admin77500/index.php?controller=AdminPsThemeCustoConfiguration&token=0c0aadd1cee2c0e775745e7446b14569\" id=\"subtab-AdminPsThemeCustoConfiguration\" class=\"nav-link tab \" data-submenu=\"127\">
                      Pages Configuration
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"http://lifestyle.local/admin77500/index.php?controller=AdminPsThemeCustoAdvanced&token=ad2df57803088cc1a28de7f0b14a8ca6\" id=\"subtab-AdminPsThemeCustoAdvanced\" class=\"nav-link tab \" data-submenu=\"128\">
                      Advanced Customization
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                                                                                                                             ' | raw }}{{ '                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       </ul>
    </div>
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-add\"
              href=\"/admin77500/index.php/improve/design/themes/import?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\"              title=\"Adicionar novo tema gráfico\"            >
              Adicionar novo tema gráfico
              <i class=\"material-icons\">add</i>            </a>
                                        <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-export\"
              href=\"/admin77500/index.php/improve/design/themes/export?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\"              title=\"Expo' | raw }}{{ 'rtar tema atual\"            >
              Exportar tema atual
              <i class=\"material-icons\">cloud_download</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Ajuda\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/admin77500/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fpt%252Fdoc%252FAdminThemes%253Fversion%253D8.2.0%2526country%253Dpt/Ajuda?_token=h0NZQx7f38tgDL2RgJKoFs1qMhD9c0kZ_FMsVAcaAsU\"
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


  ' | raw }}{% block content_header %}{% endblock %}{% block content %}{% endblock %}{% block content_footer %}{% endblock %}{% block sidebar_right %}{% endblock %}{{ '

        

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
  
' | raw }}{% block javascripts %}{% endblock %}{% block extra_javascripts %}{% endblock %}{% block translate_javascripts %}{% endblock %}</body>{{ '
</html>' | raw }}", "__string_template__81304a7d9266c18d1da7b42bc7649aa0", "");
    }
}
