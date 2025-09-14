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

/* @PrestaShop/Admin/Improve/International/Localization/Blocks/import_localization_pack_block.html.twig */
class __TwigTemplate_fd215d47f06a247c6aed4ffa8c3a226d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'import_localization_pack' => [$this, 'block_import_localization_pack'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/International/Localization/Blocks/import_localization_pack_block.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/International/Localization/Blocks/import_localization_pack_block.html.twig"));

        // line 25
        echo "
";
        // line 27
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["localizationPackImportForm"]) || array_key_exists("localizationPackImportForm", $context) ? $context["localizationPackImportForm"] : (function () { throw new RuntimeError('Variable "localizationPackImportForm" does not exist.', 27, $this->source); })()), [0 => "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig"], true);
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('import_localization_pack', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_import_localization_pack($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "import_localization_pack"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "import_localization_pack"));

        // line 30
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["localizationPackImportForm"]) || array_key_exists("localizationPackImportForm", $context) ? $context["localizationPackImportForm"] : (function () { throw new RuntimeError('Variable "localizationPackImportForm" does not exist.', 30, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_localization_import_pack")]);
        echo "
  <div class=\"card\">
    <h3 class=\"card-header\">
      <i class=\"material-icons\">language</i> ";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Import a localization pack", [], "Admin.International.Feature"), "html", null, true);
        echo "
    </h3>

    <div class=\"card-body\">
      <div class=\"form-wrapper\">
        ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["localizationPackImportForm"]) || array_key_exists("localizationPackImportForm", $context) ? $context["localizationPackImportForm"] : (function () { throw new RuntimeError('Variable "localizationPackImportForm" does not exist.', 38, $this->source); })()), 'widget');
        echo "
      </div>
    </div>

    <div class=\"card-footer\">
      <div class=\"d-flex justify-content-end\">
        <button class=\"btn btn-primary\" id=\"form-import-localization-save-button\">
          <i class=\"material-icons\">cloud_download</i>
          <span>";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Import", [], "Admin.Actions"), "html", null, true);
        echo "</span>
        </button>
      </div>
    </div>
  </div>
  ";
        // line 51
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["localizationPackImportForm"]) || array_key_exists("localizationPackImportForm", $context) ? $context["localizationPackImportForm"] : (function () { throw new RuntimeError('Variable "localizationPackImportForm" does not exist.', 51, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/International/Localization/Blocks/import_localization_pack_block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 51,  97 => 46,  86 => 38,  78 => 33,  71 => 30,  52 => 29,  49 => 28,  47 => 27,  44 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("{#**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 *#}

{% trans_default_domain 'Admin.International.Feature' %}
{% form_theme localizationPackImportForm '@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig' %}

{% block import_localization_pack %}
  {{ form_start(localizationPackImportForm, {'action': path('admin_localization_import_pack')}) }}
  <div class=\"card\">
    <h3 class=\"card-header\">
      <i class=\"material-icons\">language</i> {{ 'Import a localization pack'|trans }}
    </h3>

    <div class=\"card-body\">
      <div class=\"form-wrapper\">
        {{ form_widget(localizationPackImportForm) }}
      </div>
    </div>

    <div class=\"card-footer\">
      <div class=\"d-flex justify-content-end\">
        <button class=\"btn btn-primary\" id=\"form-import-localization-save-button\">
          <i class=\"material-icons\">cloud_download</i>
          <span>{{ 'Import'|trans({}, 'Admin.Actions') }}</span>
        </button>
      </div>
    </div>
  </div>
  {{ form_end(localizationPackImportForm) }}
{% endblock %}
", "@PrestaShop/Admin/Improve/International/Localization/Blocks/import_localization_pack_block.html.twig", "C:\\xampp\\htdocs\\lifestyle\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Improve\\International\\Localization\\Blocks\\import_localization_pack_block.html.twig");
    }
}
