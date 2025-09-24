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

/* @PrestaShop/Admin/Configure/AdvancedParameters/performance.html.twig */
class __TwigTemplate_8f4b1885626c744197ad932c19e12376c602dfc2d7891ec550ce619df1a90f1f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'perfs_form_smarty_cache' => [$this, 'block_perfs_form_smarty_cache'],
            'perfs_form_smarty_cache_form' => [$this, 'block_perfs_form_smarty_cache_form'],
            'perfs_form_debug_mode' => [$this, 'block_perfs_form_debug_mode'],
            'perfs_form_debug_mode_form' => [$this, 'block_perfs_form_debug_mode_form'],
            'perfs_form_modules' => [$this, 'block_perfs_form_modules'],
            'perfs_form_modules_form' => [$this, 'block_perfs_form_modules_form'],
            'perfs_form_optional_features' => [$this, 'block_perfs_form_optional_features'],
            'perfs_form_optional_features_form' => [$this, 'block_perfs_form_optional_features_form'],
            'perfs_form_ccc' => [$this, 'block_perfs_form_ccc'],
            'perfs_form_ccc_form' => [$this, 'block_perfs_form_ccc_form'],
            'perfs_form_media_servers' => [$this, 'block_perfs_form_media_servers'],
            'perfs_form_media_servers_form' => [$this, 'block_perfs_form_media_servers_form'],
            'perfs_form_caching' => [$this, 'block_perfs_form_caching'],
            'perfs_form_caching_form' => [$this, 'block_perfs_form_caching_form'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 25
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/AdvancedParameters/performance.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/AdvancedParameters/performance.html.twig"));

        // line 27
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["smartyForm"]) || array_key_exists("smartyForm", $context) ? $context["smartyForm"] : (function () { throw new RuntimeError('Variable "smartyForm" does not exist.', 27, $this->source); })()), [0 => "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig"], true);
        // line 28
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["debugModeForm"]) || array_key_exists("debugModeForm", $context) ? $context["debugModeForm"] : (function () { throw new RuntimeError('Variable "debugModeForm" does not exist.', 28, $this->source); })()), [0 => "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig"], true);
        // line 29
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["optionalFeaturesForm"]) || array_key_exists("optionalFeaturesForm", $context) ? $context["optionalFeaturesForm"] : (function () { throw new RuntimeError('Variable "optionalFeaturesForm" does not exist.', 29, $this->source); })()), [0 => "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig"], true);
        // line 30
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["combineCompressCacheForm"]) || array_key_exists("combineCompressCacheForm", $context) ? $context["combineCompressCacheForm"] : (function () { throw new RuntimeError('Variable "combineCompressCacheForm" does not exist.', 30, $this->source); })()), [0 => "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig"], true);
        // line 31
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["mediaServersForm"]) || array_key_exists("mediaServersForm", $context) ? $context["mediaServersForm"] : (function () { throw new RuntimeError('Variable "mediaServersForm" does not exist.', 31, $this->source); })()), [0 => "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig"], true);
        // line 32
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["cachingForm"]) || array_key_exists("cachingForm", $context) ? $context["cachingForm"] : (function () { throw new RuntimeError('Variable "cachingForm" does not exist.', 32, $this->source); })()), [0 => "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig"], true);
        // line 25
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/performance.html.twig", 25);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 34
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 35
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["smartyForm"]) || array_key_exists("smartyForm", $context) ? $context["smartyForm"] : (function () { throw new RuntimeError('Variable "smartyForm" does not exist.', 35, $this->source); })()), 'form_start', ["attr" => ["class" => "form"], "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_performance_smarty_save")]);
        echo "
  ";
        // line 36
        $this->displayBlock('perfs_form_smarty_cache', $context, $blocks);
        // line 56
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["smartyForm"]) || array_key_exists("smartyForm", $context) ? $context["smartyForm"] : (function () { throw new RuntimeError('Variable "smartyForm" does not exist.', 56, $this->source); })()), 'form_end');
        echo "

  ";
        // line 58
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["debugModeForm"]) || array_key_exists("debugModeForm", $context) ? $context["debugModeForm"] : (function () { throw new RuntimeError('Variable "debugModeForm" does not exist.', 58, $this->source); })()), 'form_start', ["attr" => ["class" => "form"], "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_performance_debug_mode_save")]);
        echo "
  ";
        // line 59
        $this->displayBlock('perfs_form_debug_mode', $context, $blocks);
        // line 79
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["debugModeForm"]) || array_key_exists("debugModeForm", $context) ? $context["debugModeForm"] : (function () { throw new RuntimeError('Variable "debugModeForm" does not exist.', 79, $this->source); })()), 'form_end');
        echo "

  ";
        // line 81
        $this->displayBlock('perfs_form_modules', $context, $blocks);
        // line 117
        echo "
  ";
        // line 118
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["optionalFeaturesForm"]) || array_key_exists("optionalFeaturesForm", $context) ? $context["optionalFeaturesForm"] : (function () { throw new RuntimeError('Variable "optionalFeaturesForm" does not exist.', 118, $this->source); })()), 'form_start', ["attr" => ["class" => "form"], "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_performance_optional_features_save")]);
        echo "
  ";
        // line 119
        $this->displayBlock('perfs_form_optional_features', $context, $blocks);
        // line 148
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["optionalFeaturesForm"]) || array_key_exists("optionalFeaturesForm", $context) ? $context["optionalFeaturesForm"] : (function () { throw new RuntimeError('Variable "optionalFeaturesForm" does not exist.', 148, $this->source); })()), 'form_end');
        echo "

  ";
        // line 150
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["combineCompressCacheForm"]) || array_key_exists("combineCompressCacheForm", $context) ? $context["combineCompressCacheForm"] : (function () { throw new RuntimeError('Variable "combineCompressCacheForm" does not exist.', 150, $this->source); })()), 'form_start', ["attr" => ["class" => "form"], "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_performance_combine_compress_cache_save")]);
        echo "
  ";
        // line 151
        $this->displayBlock('perfs_form_ccc', $context, $blocks);
        // line 180
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["combineCompressCacheForm"]) || array_key_exists("combineCompressCacheForm", $context) ? $context["combineCompressCacheForm"] : (function () { throw new RuntimeError('Variable "combineCompressCacheForm" does not exist.', 180, $this->source); })()), 'form_end');
        echo "

  ";
        // line 182
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["mediaServersForm"]) || array_key_exists("mediaServersForm", $context) ? $context["mediaServersForm"] : (function () { throw new RuntimeError('Variable "mediaServersForm" does not exist.', 182, $this->source); })()), 'form_start', ["attr" => ["class" => "form"], "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_performance_media_servers_save")]);
        echo "
  ";
        // line 183
        $this->displayBlock('perfs_form_media_servers', $context, $blocks);
        // line 212
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["mediaServersForm"]) || array_key_exists("mediaServersForm", $context) ? $context["mediaServersForm"] : (function () { throw new RuntimeError('Variable "mediaServersForm" does not exist.', 212, $this->source); })()), 'form_end');
        echo "

  ";
        // line 214
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["cachingForm"]) || array_key_exists("cachingForm", $context) ? $context["cachingForm"] : (function () { throw new RuntimeError('Variable "cachingForm" does not exist.', 214, $this->source); })()), 'form_start', ["attr" => ["class" => "form"], "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_performance_caching_save")]);
        echo "
  ";
        // line 215
        $this->displayBlock('perfs_form_caching', $context, $blocks);
        // line 237
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["cachingForm"]) || array_key_exists("cachingForm", $context) ? $context["cachingForm"] : (function () { throw new RuntimeError('Variable "cachingForm" does not exist.', 237, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 36
    public function block_perfs_form_smarty_cache($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "perfs_form_smarty_cache"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "perfs_form_smarty_cache"));

        // line 37
        echo "    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">business_center</i>
        ";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Smarty", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
      </h3>
      <div class=\"card-body\">
        <div class=\"form-wrapper\">
          ";
        // line 44
        $this->displayBlock('perfs_form_smarty_cache_form', $context, $blocks);
        // line 47
        echo "        </div>
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\">";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
        </div>
      </div>
    </div>
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 44
    public function block_perfs_form_smarty_cache_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "perfs_form_smarty_cache_form"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "perfs_form_smarty_cache_form"));

        // line 45
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["smartyForm"]) || array_key_exists("smartyForm", $context) ? $context["smartyForm"] : (function () { throw new RuntimeError('Variable "smartyForm" does not exist.', 45, $this->source); })()), 'widget');
        echo "
          ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 59
    public function block_perfs_form_debug_mode($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "perfs_form_debug_mode"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "perfs_form_debug_mode"));

        // line 60
        echo "    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">bug_report</i>
        ";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Debug mode", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
      </h3>
      <div class=\"card-body\">
        <div class=\"form-wrapper\">
          ";
        // line 67
        $this->displayBlock('perfs_form_debug_mode_form', $context, $blocks);
        // line 70
        echo "        </div>
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\">";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
        </div>
      </div>
    </div>
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 67
    public function block_perfs_form_debug_mode_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "perfs_form_debug_mode_form"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "perfs_form_debug_mode_form"));

        // line 68
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["debugModeForm"]) || array_key_exists("debugModeForm", $context) ? $context["debugModeForm"] : (function () { throw new RuntimeError('Variable "debugModeForm" does not exist.', 68, $this->source); })()), 'widget');
        echo "
          ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 81
    public function block_perfs_form_modules($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "perfs_form_modules"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "perfs_form_modules"));

        // line 82
        echo "    <div class=\"card form-horizontal\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">bug_report</i>
        ";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Modules", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "

        <span
          class=\"help-box\"
          data-container=\"body\"
          data-toggle=\"popover\"
          data-trigger=\"hover\"
          data-placement=\"right\"
          data-content=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This feature allows you to identify modules that might be causing bugs on your store. Disable all non-built-in modules (not listed in composer.json). Then, re-enable each module one by one and check that everything works properly before moving on to the next one.", [], "Admin.Advparameters.Help"), "html_attr");
        echo "\"
          title=\"\"
          data-original-title=\"\"
        ></span>
      </h3>
      <div class=\"card-body\">
        <div class=\"form-wrapper\">
          ";
        // line 100
        $this->displayBlock('perfs_form_modules_form', $context, $blocks);
        // line 113
        echo "        </div>
      </div>
    </div>
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 100
    public function block_perfs_form_modules_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "perfs_form_modules_form"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "perfs_form_modules_form"));

        // line 101
        echo "            <div class=\"form-group row\">
              <label class=\"form-control-label\">
                ";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Disable non built-in modules", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
              </label>

              <div class=\"col-sm input-container\">
                <a class=\"btn btn-primary pointer\" href=\"";
        // line 107
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_performance_module_disable_non_builtin");
        echo "\" title=\"Clear cache\">
                  ";
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Disable", [], "Admin.Actions"), "html", null, true);
        echo "
                </a>
              </div>
            </div>
          ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 119
    public function block_perfs_form_optional_features($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "perfs_form_optional_features"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "perfs_form_optional_features"));

        // line 120
        echo "    <div class=\"card\" id=\"optional_features\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">extension</i>
        ";
        // line 123
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional features", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "

        <span class=\"help-box\"
              data-container=\"body\"
              data-toggle=\"popover\"
              data-trigger=\"hover\"
              data-placement=\"right\"
              data-content=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Some features can be disabled in order to improve performance.", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "\"
              title=\"\">
        </span>
      </h3>
      <div class=\"card-body\">
        <div class=\"form-wrapper\">
          ";
        // line 136
        $this->displayBlock('perfs_form_optional_features_form', $context, $blocks);
        // line 139
        echo "        </div>
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\">";
        // line 143
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
        </div>
      </div>
    </div>
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 136
    public function block_perfs_form_optional_features_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "perfs_form_optional_features_form"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "perfs_form_optional_features_form"));

        // line 137
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["optionalFeaturesForm"]) || array_key_exists("optionalFeaturesForm", $context) ? $context["optionalFeaturesForm"] : (function () { throw new RuntimeError('Variable "optionalFeaturesForm" does not exist.', 137, $this->source); })()), 'widget');
        echo "
          ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 151
    public function block_perfs_form_ccc($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "perfs_form_ccc"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "perfs_form_ccc"));

        // line 152
        echo "    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">zoom_out_map</i>
        ";
        // line 155
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("CCC (Combine, Compress and Cache)", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "

        <span class=\"help-box\"
              data-container=\"body\"
              data-toggle=\"popover\"
              data-trigger=\"hover\"
              data-placement=\"right\"
              data-content=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("CCC allows you to reduce the loading time of your page. With these settings you will gain performance without even touching the code of your theme. Make sure, however, that your theme is compatible with PrestaShop 1.7+. Otherwise, CCC will cause problems.", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "\"
              title=\"\">
        </span>
      </h3>
      <div class=\"card-body\">
        <div class=\"form-wrapper\">
          ";
        // line 168
        $this->displayBlock('perfs_form_ccc_form', $context, $blocks);
        // line 171
        echo "        </div>
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\">";
        // line 175
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
        </div>
      </div>
    </div>
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 168
    public function block_perfs_form_ccc_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "perfs_form_ccc_form"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "perfs_form_ccc_form"));

        // line 169
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["combineCompressCacheForm"]) || array_key_exists("combineCompressCacheForm", $context) ? $context["combineCompressCacheForm"] : (function () { throw new RuntimeError('Variable "combineCompressCacheForm" does not exist.', 169, $this->source); })()), 'widget');
        echo "
          ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 183
    public function block_perfs_form_media_servers($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "perfs_form_media_servers"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "perfs_form_media_servers"));

        // line 184
        echo "    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">link</i>
        ";
        // line 187
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Media servers (use only with CCC)", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "

        <span class=\"help-box\"
              data-container=\"body\"
              data-toggle=\"popover\"
              data-trigger=\"hover\"
              data-placement=\"right\"
              data-content=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You must enter another domain, or subdomain, in order to use cookieless static content.", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "\"
              title=\"\">
        </span>
      </h3>
      <div class=\"card-body\">
        <div class=\"form-wrapper\">
          ";
        // line 200
        $this->displayBlock('perfs_form_media_servers_form', $context, $blocks);
        // line 203
        echo "        </div>
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\">";
        // line 207
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
        </div>
      </div>
    </div>
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 200
    public function block_perfs_form_media_servers_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "perfs_form_media_servers_form"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "perfs_form_media_servers_form"));

        // line 201
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["mediaServersForm"]) || array_key_exists("mediaServersForm", $context) ? $context["mediaServersForm"] : (function () { throw new RuntimeError('Variable "mediaServersForm" does not exist.', 201, $this->source); })()), 'widget');
        echo "
          ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 215
    public function block_perfs_form_caching($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "perfs_form_caching"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "perfs_form_caching"));

        // line 216
        echo "    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">link</i>
        ";
        // line 219
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Caching", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
      </h3>
      <div class=\"card-body\">
        <div class=\"form-wrapper\">
          ";
        // line 223
        $this->displayBlock('perfs_form_caching_form', $context, $blocks);
        // line 226
        echo "
          ";
        // line 227
        echo twig_include($this->env, $context, "@AdvancedParameters/memcache_servers.html.twig", ["form" => (isset($context["memcacheForm"]) || array_key_exists("memcacheForm", $context) ? $context["memcacheForm"] : (function () { throw new RuntimeError('Variable "memcacheForm" does not exist.', 227, $this->source); })())]);
        echo "
        </div>
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\">";
        // line 232
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
        </div>
      </div>
    </div>
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 223
    public function block_perfs_form_caching_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "perfs_form_caching_form"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "perfs_form_caching_form"));

        // line 224
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["cachingForm"]) || array_key_exists("cachingForm", $context) ? $context["cachingForm"] : (function () { throw new RuntimeError('Variable "cachingForm" does not exist.', 224, $this->source); })()), 'widget');
        echo "
          ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 240
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 241
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script src=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/default/js/bundle/admin_parameters/performancePage.js"), "html", null, true);
        echo "\"></script>
  <script>
    var configuration = {
      'addServerUrl': '";
        // line 245
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_servers_add"), "js"), "html", null, true);
        echo "',
      'removeServerUrl': '";
        // line 246
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_servers_delete"), "js"), "html", null, true);
        echo "',
      'testServerUrl': '";
        // line 247
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_servers_test"), "js"), "html", null, true);
        echo "'
    };
    var app = new PerformancePage(configuration.addServerUrl, configuration.removeServerUrl, configuration.testServerUrl);

    window.addEventListener('load', function () {
      var addServerBtn = document.getElementById('add-server-btn');
      var testServerBtn = document.getElementById('test-server-btn');

      addServerBtn.addEventListener('click', function (event) {
        event.preventDefault();
        app.addServer();
      });

      testServerBtn.addEventListener('click', function (event) {
        event.preventDefault();
        app.testServer();
      });
    });
  </script>

  <script src=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/default/js/bundle/admin_parameters/performancePageUI.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/performance.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  773 => 267,  750 => 247,  746 => 246,  742 => 245,  736 => 242,  731 => 241,  721 => 240,  708 => 224,  698 => 223,  683 => 232,  675 => 227,  672 => 226,  670 => 223,  663 => 219,  658 => 216,  648 => 215,  635 => 201,  625 => 200,  610 => 207,  604 => 203,  602 => 200,  593 => 194,  583 => 187,  578 => 184,  568 => 183,  555 => 169,  545 => 168,  530 => 175,  524 => 171,  522 => 168,  513 => 162,  503 => 155,  498 => 152,  488 => 151,  475 => 137,  465 => 136,  450 => 143,  444 => 139,  442 => 136,  433 => 130,  423 => 123,  418 => 120,  408 => 119,  393 => 108,  389 => 107,  382 => 103,  378 => 101,  368 => 100,  355 => 113,  353 => 100,  343 => 93,  332 => 85,  327 => 82,  317 => 81,  304 => 68,  294 => 67,  279 => 74,  273 => 70,  271 => 67,  264 => 63,  259 => 60,  249 => 59,  236 => 45,  226 => 44,  211 => 51,  205 => 47,  203 => 44,  196 => 40,  191 => 37,  181 => 36,  168 => 237,  166 => 215,  162 => 214,  156 => 212,  154 => 183,  150 => 182,  144 => 180,  142 => 151,  138 => 150,  132 => 148,  130 => 119,  126 => 118,  123 => 117,  121 => 81,  115 => 79,  113 => 59,  109 => 58,  103 => 56,  101 => 36,  96 => 35,  86 => 34,  75 => 25,  73 => 32,  71 => 31,  69 => 30,  67 => 29,  65 => 28,  63 => 27,  50 => 25,);
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
{% extends '@PrestaShop/Admin/layout.html.twig' %}
{% trans_default_domain \"Admin.Advparameters.Feature\" %}
{% form_theme smartyForm '@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig' %}
{% form_theme debugModeForm '@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig' %}
{% form_theme optionalFeaturesForm '@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig' %}
{% form_theme combineCompressCacheForm '@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig' %}
{% form_theme mediaServersForm '@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig' %}
{% form_theme cachingForm '@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig' %}

{% block content %}
  {{ form_start(smartyForm, {attr : {class: 'form'}, action: path('admin_performance_smarty_save') }) }}
  {% block perfs_form_smarty_cache %}
    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">business_center</i>
        {{ 'Smarty'|trans }}
      </h3>
      <div class=\"card-body\">
        <div class=\"form-wrapper\">
          {% block perfs_form_smarty_cache_form %}
            {{ form_widget(smartyForm) }}
          {% endblock %}
        </div>
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\">{{ 'Save'|trans({}, 'Admin.Actions') }}</button>
        </div>
      </div>
    </div>
  {% endblock %}
  {{ form_end(smartyForm) }}

  {{ form_start(debugModeForm, {attr : {class: 'form'}, action: path('admin_performance_debug_mode_save') }) }}
  {% block perfs_form_debug_mode %}
    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">bug_report</i>
        {{ 'Debug mode'|trans }}
      </h3>
      <div class=\"card-body\">
        <div class=\"form-wrapper\">
          {% block perfs_form_debug_mode_form %}
            {{ form_widget(debugModeForm) }}
          {% endblock %}
        </div>
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\">{{ 'Save'|trans({}, 'Admin.Actions') }}</button>
        </div>
      </div>
    </div>
  {% endblock %}
  {{ form_end(debugModeForm) }}

  {% block perfs_form_modules %}
    <div class=\"card form-horizontal\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">bug_report</i>
        {{ 'Modules'|trans }}

        <span
          class=\"help-box\"
          data-container=\"body\"
          data-toggle=\"popover\"
          data-trigger=\"hover\"
          data-placement=\"right\"
          data-content=\"{{ 'This feature allows you to identify modules that might be causing bugs on your store. Disable all non-built-in modules (not listed in composer.json). Then, re-enable each module one by one and check that everything works properly before moving on to the next one.'|trans({}, 'Admin.Advparameters.Help')|escape('html_attr') }}\"
          title=\"\"
          data-original-title=\"\"
        ></span>
      </h3>
      <div class=\"card-body\">
        <div class=\"form-wrapper\">
          {% block perfs_form_modules_form %}
            <div class=\"form-group row\">
              <label class=\"form-control-label\">
                {{ 'Disable non built-in modules'|trans({}, 'Admin.Advparameters.Feature') }}
              </label>

              <div class=\"col-sm input-container\">
                <a class=\"btn btn-primary pointer\" href=\"{{ path('admin_performance_module_disable_non_builtin') }}\" title=\"Clear cache\">
                  {{ 'Disable'|trans({}, 'Admin.Actions') }}
                </a>
              </div>
            </div>
          {% endblock %}
        </div>
      </div>
    </div>
  {% endblock %}

  {{ form_start(optionalFeaturesForm, {attr : {class: 'form'}, action: path('admin_performance_optional_features_save') }) }}
  {% block perfs_form_optional_features %}
    <div class=\"card\" id=\"optional_features\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">extension</i>
        {{ 'Optional features'|trans }}

        <span class=\"help-box\"
              data-container=\"body\"
              data-toggle=\"popover\"
              data-trigger=\"hover\"
              data-placement=\"right\"
              data-content=\"{{ 'Some features can be disabled in order to improve performance.'|trans({}, 'Admin.Advparameters.Help') }}\"
              title=\"\">
        </span>
      </h3>
      <div class=\"card-body\">
        <div class=\"form-wrapper\">
          {% block perfs_form_optional_features_form %}
            {{ form_widget(optionalFeaturesForm) }}
          {% endblock %}
        </div>
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\">{{ 'Save'|trans({}, 'Admin.Actions') }}</button>
        </div>
      </div>
    </div>
  {% endblock %}
  {{ form_end(optionalFeaturesForm) }}

  {{ form_start(combineCompressCacheForm, {attr : {class: 'form'}, action: path('admin_performance_combine_compress_cache_save') }) }}
  {% block perfs_form_ccc %}
    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">zoom_out_map</i>
        {{ 'CCC (Combine, Compress and Cache)'|trans }}

        <span class=\"help-box\"
              data-container=\"body\"
              data-toggle=\"popover\"
              data-trigger=\"hover\"
              data-placement=\"right\"
              data-content=\"{{ 'CCC allows you to reduce the loading time of your page. With these settings you will gain performance without even touching the code of your theme. Make sure, however, that your theme is compatible with PrestaShop 1.7+. Otherwise, CCC will cause problems.'|trans({}, 'Admin.Advparameters.Help') }}\"
              title=\"\">
        </span>
      </h3>
      <div class=\"card-body\">
        <div class=\"form-wrapper\">
          {% block perfs_form_ccc_form %}
            {{ form_widget(combineCompressCacheForm) }}
          {% endblock %}
        </div>
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\">{{ 'Save'|trans({}, 'Admin.Actions') }}</button>
        </div>
      </div>
    </div>
  {% endblock %}
  {{ form_end(combineCompressCacheForm) }}

  {{ form_start(mediaServersForm, {attr : {class: 'form'}, action: path('admin_performance_media_servers_save') }) }}
  {% block perfs_form_media_servers %}
    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">link</i>
        {{ 'Media servers (use only with CCC)'|trans }}

        <span class=\"help-box\"
              data-container=\"body\"
              data-toggle=\"popover\"
              data-trigger=\"hover\"
              data-placement=\"right\"
              data-content=\"{{ 'You must enter another domain, or subdomain, in order to use cookieless static content.'|trans({}, 'Admin.Advparameters.Feature') }}\"
              title=\"\">
        </span>
      </h3>
      <div class=\"card-body\">
        <div class=\"form-wrapper\">
          {% block perfs_form_media_servers_form %}
            {{ form_widget(mediaServersForm) }}
          {% endblock %}
        </div>
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\">{{ 'Save'|trans({}, 'Admin.Actions') }}</button>
        </div>
      </div>
    </div>
  {% endblock %}
  {{ form_end(mediaServersForm) }}

  {{ form_start(cachingForm, {attr : {class: 'form'}, action: path('admin_performance_caching_save') }) }}
  {% block perfs_form_caching %}
    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">link</i>
        {{ 'Caching'|trans }}
      </h3>
      <div class=\"card-body\">
        <div class=\"form-wrapper\">
          {% block perfs_form_caching_form %}
            {{ form_widget(cachingForm) }}
          {% endblock %}

          {{ include('@AdvancedParameters/memcache_servers.html.twig', {'form': memcacheForm}) }}
        </div>
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\">{{ 'Save'|trans({}, 'Admin.Actions') }}</button>
        </div>
      </div>
    </div>
  {% endblock %}
  {{ form_end(cachingForm) }}
{% endblock %}

{% block javascripts %}
  {{ parent() }}
  <script src=\"{{ asset('themes/default/js/bundle/admin_parameters/performancePage.js') }}\"></script>
  <script>
    var configuration = {
      'addServerUrl': '{{ url('admin_servers_add')|e('js') }}',
      'removeServerUrl': '{{ url('admin_servers_delete')|e('js') }}',
      'testServerUrl': '{{ url('admin_servers_test')|e('js') }}'
    };
    var app = new PerformancePage(configuration.addServerUrl, configuration.removeServerUrl, configuration.testServerUrl);

    window.addEventListener('load', function () {
      var addServerBtn = document.getElementById('add-server-btn');
      var testServerBtn = document.getElementById('test-server-btn');

      addServerBtn.addEventListener('click', function (event) {
        event.preventDefault();
        app.addServer();
      });

      testServerBtn.addEventListener('click', function (event) {
        event.preventDefault();
        app.testServer();
      });
    });
  </script>

  <script src=\"{{ asset('themes/default/js/bundle/admin_parameters/performancePageUI.js') }}\"></script>
{% endblock %}
", "@PrestaShop/Admin/Configure/AdvancedParameters/performance.html.twig", "/home/brunofer/public_html/life-style.pt/public_html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/performance.html.twig");
    }
}
