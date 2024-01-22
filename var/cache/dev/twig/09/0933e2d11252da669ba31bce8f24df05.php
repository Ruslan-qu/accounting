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

/* ku_dir/ku_dir_save.html.twig */
class __TwigTemplate_b27614636994e65baec884a37949626f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'logo' => [$this, 'block_logo'],
            'legend' => [$this, 'block_legend'],
            'legend_search' => [$this, 'block_legend_search'],
            'form_save_edit_sales' => [$this, 'block_form_save_edit_sales'],
            'form_search' => [$this, 'block_form_search'],
            'table_total_amount' => [$this, 'block_table_total_amount'],
            'tbody_total_amount' => [$this, 'block_tbody_total_amount'],
            'table_ku_dir_invoice' => [$this, 'block_table_ku_dir_invoice'],
            'tbody_ku_dir_invoice' => [$this, 'block_tbody_ku_dir_invoice'],
            'table_thead_tr' => [$this, 'block_table_thead_tr'],
            'tbody' => [$this, 'block_tbody'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ku_dir/ku_dir_save.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ku_dir/ku_dir_save.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "ku_dir/ku_dir_save.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["title_logo"]) || array_key_exists("title_logo", $context) ? $context["title_logo"] : (function () { throw new RuntimeError('Variable "title_logo" does not exist.', 3, $this->source); })()), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "logo"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "logo"));

        echo twig_escape_filter($this->env, (isset($context["title_logo"]) || array_key_exists("title_logo", $context) ? $context["title_logo"] : (function () { throw new RuntimeError('Variable "title_logo" does not exist.', 5, $this->source); })()), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_legend($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "legend"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "legend"));

        echo twig_escape_filter($this->env, (isset($context["legend"]) || array_key_exists("legend", $context) ? $context["legend"] : (function () { throw new RuntimeError('Variable "legend" does not exist.', 7, $this->source); })()), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_legend_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "legend_search"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "legend_search"));

        echo twig_escape_filter($this->env, (isset($context["legend_search"]) || array_key_exists("legend_search", $context) ? $context["legend_search"] : (function () { throw new RuntimeError('Variable "legend_search" does not exist.', 9, $this->source); })()), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 11
    public function block_form_save_edit_sales($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_save_edit_sales"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_save_edit_sales"));

        // line 12
        echo "
    <form action=\"/search_ku_dir\" name=\"search_ku_dir\" method=\"post\">
    <th><button class=\"search\" type=\"submit\" name=\"search_ku_dir\">Передти в<br>поиск по КуДир</button></th>
    </form>

    <form action=\"/reset_ku_dir\" name=\"reset_ku_dir\">
    <th><button class=\"reset\" type=\"submit\" name=\"reset_ku_dir\">Сбросить</button></th>
    </form>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 23
    public function block_form_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_search"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_search"));

        // line 25
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_ku_dir_manual_saving"]) || array_key_exists("form_ku_dir_manual_saving", $context) ? $context["form_ku_dir_manual_saving"] : (function () { throw new RuntimeError('Variable "form_ku_dir_manual_saving" does not exist.', 25, $this->source); })()), 'form_start');
        echo "
    ";
        // line 27
        echo "        ";
        $context["receipt_change_manual_savin"] = "";
        // line 28
        echo "        ";
        $context["receipt_number_manual_savin"] = "";
        // line 29
        echo "        ";
        $context["receipt_date_manual_savin"] = "";
        // line 30
        echo "        ";
        $context["coming_manual_savin"] = "";
        // line 31
        echo "        ";
        $context["expenditure_manual_savin"] = "";
        // line 32
        echo "
        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "flashes", ["receipt_change_save"], "method", false, false, false, 33));
        foreach ($context['_seq'] as $context["_key"] => $context["value_receipt_change_save"]) {
            echo "  
        ";
            // line 34
            $context["receipt_change_manual_savin"] = $context["value_receipt_change_save"];
            // line 35
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_receipt_change_save'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_manual_saving"]) || array_key_exists("form_ku_dir_manual_saving", $context) ? $context["form_ku_dir_manual_saving"] : (function () { throw new RuntimeError('Variable "form_ku_dir_manual_saving" does not exist.', 36, $this->source); })()), "receipt_change_save", [], "any", false, false, false, 36), 'label');
        echo "<br>
        ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_manual_saving"]) || array_key_exists("form_ku_dir_manual_saving", $context) ? $context["form_ku_dir_manual_saving"] : (function () { throw new RuntimeError('Variable "form_ku_dir_manual_saving" does not exist.', 37, $this->source); })()), "receipt_change_save", [], "any", false, false, false, 37), 'widget', ["value" =>         // line 38
(isset($context["receipt_change_manual_savin"]) || array_key_exists("receipt_change_manual_savin", $context) ? $context["receipt_change_manual_savin"] : (function () { throw new RuntimeError('Variable "receipt_change_manual_savin" does not exist.', 38, $this->source); })())]);
        echo "
        ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_manual_saving"]) || array_key_exists("form_ku_dir_manual_saving", $context) ? $context["form_ku_dir_manual_saving"] : (function () { throw new RuntimeError('Variable "form_ku_dir_manual_saving" does not exist.', 39, $this->source); })()), "receipt_change_save", [], "any", false, false, false, 39), 'errors');
        echo "</th>

        ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "flashes", ["receipt_number_save"], "method", false, false, false, 41));
        foreach ($context['_seq'] as $context["_key"] => $context["value_receipt_number_save"]) {
            echo "  
        ";
            // line 42
            $context["receipt_number_manual_savin"] = $context["value_receipt_number_save"];
            // line 43
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_receipt_number_save'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_manual_saving"]) || array_key_exists("form_ku_dir_manual_saving", $context) ? $context["form_ku_dir_manual_saving"] : (function () { throw new RuntimeError('Variable "form_ku_dir_manual_saving" does not exist.', 44, $this->source); })()), "receipt_number_save", [], "any", false, false, false, 44), 'label');
        echo "<br>
        ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_manual_saving"]) || array_key_exists("form_ku_dir_manual_saving", $context) ? $context["form_ku_dir_manual_saving"] : (function () { throw new RuntimeError('Variable "form_ku_dir_manual_saving" does not exist.', 45, $this->source); })()), "receipt_number_save", [], "any", false, false, false, 45), 'widget', ["value" =>         // line 46
(isset($context["receipt_number_manual_savin"]) || array_key_exists("receipt_number_manual_savin", $context) ? $context["receipt_number_manual_savin"] : (function () { throw new RuntimeError('Variable "receipt_number_manual_savin" does not exist.', 46, $this->source); })())]);
        echo "
        ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_manual_saving"]) || array_key_exists("form_ku_dir_manual_saving", $context) ? $context["form_ku_dir_manual_saving"] : (function () { throw new RuntimeError('Variable "form_ku_dir_manual_saving" does not exist.', 47, $this->source); })()), "receipt_number_save", [], "any", false, false, false, 47), 'errors');
        echo "</th> 

        ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "flashes", ["receipt_date_save"], "method", false, false, false, 49));
        foreach ($context['_seq'] as $context["_key"] => $context["value_receipt_date_save"]) {
            echo "  
        ";
            // line 50
            $context["receipt_date_manual_savin"] = $context["value_receipt_date_save"];
            // line 51
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_receipt_date_save'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_manual_saving"]) || array_key_exists("form_ku_dir_manual_saving", $context) ? $context["form_ku_dir_manual_saving"] : (function () { throw new RuntimeError('Variable "form_ku_dir_manual_saving" does not exist.', 52, $this->source); })()), "receipt_date_save", [], "any", false, false, false, 52), 'label');
        echo "<br>
        ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_manual_saving"]) || array_key_exists("form_ku_dir_manual_saving", $context) ? $context["form_ku_dir_manual_saving"] : (function () { throw new RuntimeError('Variable "form_ku_dir_manual_saving" does not exist.', 53, $this->source); })()), "receipt_date_save", [], "any", false, false, false, 53), 'widget', ["value" =>         // line 54
(isset($context["receipt_date_manual_savin"]) || array_key_exists("receipt_date_manual_savin", $context) ? $context["receipt_date_manual_savin"] : (function () { throw new RuntimeError('Variable "receipt_date_manual_savin" does not exist.', 54, $this->source); })())]);
        echo "
        ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_manual_saving"]) || array_key_exists("form_ku_dir_manual_saving", $context) ? $context["form_ku_dir_manual_saving"] : (function () { throw new RuntimeError('Variable "form_ku_dir_manual_saving" does not exist.', 55, $this->source); })()), "receipt_date_save", [], "any", false, false, false, 55), 'errors');
        echo "</th>

        ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "flashes", ["coming_save"], "method", false, false, false, 57));
        foreach ($context['_seq'] as $context["_key"] => $context["value_coming_save"]) {
            echo "  
        ";
            // line 58
            $context["coming_manual_savin"] = $context["value_coming_save"];
            // line 59
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_coming_save'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_manual_saving"]) || array_key_exists("form_ku_dir_manual_saving", $context) ? $context["form_ku_dir_manual_saving"] : (function () { throw new RuntimeError('Variable "form_ku_dir_manual_saving" does not exist.', 60, $this->source); })()), "coming_save", [], "any", false, false, false, 60), 'label');
        echo "<br>
        ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_manual_saving"]) || array_key_exists("form_ku_dir_manual_saving", $context) ? $context["form_ku_dir_manual_saving"] : (function () { throw new RuntimeError('Variable "form_ku_dir_manual_saving" does not exist.', 61, $this->source); })()), "coming_save", [], "any", false, false, false, 61), 'widget', ["value" =>         // line 62
(isset($context["coming_manual_savin"]) || array_key_exists("coming_manual_savin", $context) ? $context["coming_manual_savin"] : (function () { throw new RuntimeError('Variable "coming_manual_savin" does not exist.', 62, $this->source); })())]);
        echo "
        ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_manual_saving"]) || array_key_exists("form_ku_dir_manual_saving", $context) ? $context["form_ku_dir_manual_saving"] : (function () { throw new RuntimeError('Variable "form_ku_dir_manual_saving" does not exist.', 63, $this->source); })()), "coming_save", [], "any", false, false, false, 63), 'errors');
        echo "</th> 

        ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 65, $this->source); })()), "flashes", ["expenditure_save"], "method", false, false, false, 65));
        foreach ($context['_seq'] as $context["_key"] => $context["value_expenditure_save"]) {
            echo "  
        ";
            // line 66
            $context["expenditure_manual_savin"] = $context["value_expenditure_save"];
            // line 67
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_expenditure_save'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_manual_saving"]) || array_key_exists("form_ku_dir_manual_saving", $context) ? $context["form_ku_dir_manual_saving"] : (function () { throw new RuntimeError('Variable "form_ku_dir_manual_saving" does not exist.', 68, $this->source); })()), "expenditure_save", [], "any", false, false, false, 68), 'label');
        echo "<br>
        ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_manual_saving"]) || array_key_exists("form_ku_dir_manual_saving", $context) ? $context["form_ku_dir_manual_saving"] : (function () { throw new RuntimeError('Variable "form_ku_dir_manual_saving" does not exist.', 69, $this->source); })()), "expenditure_save", [], "any", false, false, false, 69), 'widget', ["value" =>         // line 70
(isset($context["expenditure_manual_savin"]) || array_key_exists("expenditure_manual_savin", $context) ? $context["expenditure_manual_savin"] : (function () { throw new RuntimeError('Variable "expenditure_manual_savin" does not exist.', 70, $this->source); })())]);
        echo "
        ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_manual_saving"]) || array_key_exists("form_ku_dir_manual_saving", $context) ? $context["form_ku_dir_manual_saving"] : (function () { throw new RuntimeError('Variable "form_ku_dir_manual_saving" does not exist.', 71, $this->source); })()), "expenditure_save", [], "any", false, false, false, 71), 'errors');
        echo "</th> 

        <th>";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_manual_saving"]) || array_key_exists("form_ku_dir_manual_saving", $context) ? $context["form_ku_dir_manual_saving"] : (function () { throw new RuntimeError('Variable "form_ku_dir_manual_saving" does not exist.', 73, $this->source); })()), "button_save_ku_dir", [], "any", false, false, false, 73), 'widget', ["label" => "Сохранить в КуДир", "attr" => ["class" => "save"]]);
        // line 74
        echo "</th>
        
    ";
        // line 76
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_ku_dir_manual_saving"]) || array_key_exists("form_ku_dir_manual_saving", $context) ? $context["form_ku_dir_manual_saving"] : (function () { throw new RuntimeError('Variable "form_ku_dir_manual_saving" does not exist.', 76, $this->source); })()), 'form_end');
        echo "

    </tr>
    
    <tr>
    ";
        // line 82
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_ku_dir_invoice_search"]) || array_key_exists("form_ku_dir_invoice_search", $context) ? $context["form_ku_dir_invoice_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_invoice_search" does not exist.', 82, $this->source); })()), 'form_start');
        echo "
";
        // line 84
        echo "        ";
        // line 85
        echo "        ";
        $context["number_document_search_ku_dir"] = "";
        // line 86
        echo "        ";
        $context["from__data_invoice_search_ku_dir"] = "";
        // line 87
        echo "        ";
        $context["by_data_invoice_search_ku_dir"] = "";
        // line 88
        echo "        ";
        $context["counterparty_search_ku_dir"] = "";
        // line 89
        echo "        ";
        $context["details_search_ku_dir"] = "";
        // line 90
        echo "        ";
        $context["manufacturer_search_ku_dir"] = "";
        // line 91
        echo "        ";
        $context["from__price_search_ku_dir"] = "";
        // line 92
        echo "        ";
        $context["by_price_search_ku_dir"] = "";
        // line 93
        echo "
        ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 94, $this->source); })()), "flashes", ["search_number_document_invoice_ku_dir"], "method", false, false, false, 94));
        foreach ($context['_seq'] as $context["_key"] => $context["value_number_document_search"]) {
            echo "  
        ";
            // line 95
            $context["number_document_search_ku_dir"] = $context["value_number_document_search"];
            // line 96
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_number_document_search'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_invoice_search"]) || array_key_exists("form_ku_dir_invoice_search", $context) ? $context["form_ku_dir_invoice_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_invoice_search" does not exist.', 97, $this->source); })()), "search_number_document_invoice_ku_dir", [], "any", false, false, false, 97), 'label');
        echo "<br>
        ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_invoice_search"]) || array_key_exists("form_ku_dir_invoice_search", $context) ? $context["form_ku_dir_invoice_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_invoice_search" does not exist.', 98, $this->source); })()), "search_number_document_invoice_ku_dir", [], "any", false, false, false, 98), 'widget', ["value" =>         // line 99
(isset($context["number_document_search_ku_dir"]) || array_key_exists("number_document_search_ku_dir", $context) ? $context["number_document_search_ku_dir"] : (function () { throw new RuntimeError('Variable "number_document_search_ku_dir" does not exist.', 99, $this->source); })())]);
        echo "<br>
        ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_invoice_search"]) || array_key_exists("form_ku_dir_invoice_search", $context) ? $context["form_ku_dir_invoice_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_invoice_search" does not exist.', 100, $this->source); })()), "search_number_document_invoice_ku_dir", [], "any", false, false, false, 100), 'errors');
        echo "</th>

        ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 102, $this->source); })()), "flashes", ["from_data_invoice_ku_dir"], "method", false, false, false, 102));
        foreach ($context['_seq'] as $context["_key"] => $context["value_data_invoice_search"]) {
            echo "  
        ";
            // line 103
            $context["from__data_invoice_search_ku_dir"] = $context["value_data_invoice_search"];
            // line 104
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_data_invoice_search'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_invoice_search"]) || array_key_exists("form_ku_dir_invoice_search", $context) ? $context["form_ku_dir_invoice_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_invoice_search" does not exist.', 105, $this->source); })()), "from_data_invoice_ku_dir", [], "any", false, false, false, 105), 'label');
        echo "<br>
        ";
        // line 106
        echo "с ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_invoice_search"]) || array_key_exists("form_ku_dir_invoice_search", $context) ? $context["form_ku_dir_invoice_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_invoice_search" does not exist.', 106, $this->source); })()), "from_data_invoice_ku_dir", [], "any", false, false, false, 106), 'widget', ["value" =>         // line 107
(isset($context["from__data_invoice_search_ku_dir"]) || array_key_exists("from__data_invoice_search_ku_dir", $context) ? $context["from__data_invoice_search_ku_dir"] : (function () { throw new RuntimeError('Variable "from__data_invoice_search_ku_dir" does not exist.', 107, $this->source); })())]);
        echo "
        ";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_invoice_search"]) || array_key_exists("form_ku_dir_invoice_search", $context) ? $context["form_ku_dir_invoice_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_invoice_search" does not exist.', 108, $this->source); })()), "from_data_invoice_ku_dir", [], "any", false, false, false, 108), 'errors');
        echo "<br>
        ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 109, $this->source); })()), "flashes", ["by_data_invoice_ku_dir"], "method", false, false, false, 109));
        foreach ($context['_seq'] as $context["_key"] => $context["value_price"]) {
            echo "  
        ";
            // line 110
            $context["by_data_invoice_search_ku_dir"] = $context["value_price"];
            // line 111
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_price'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "        ";
        echo "по ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_invoice_search"]) || array_key_exists("form_ku_dir_invoice_search", $context) ? $context["form_ku_dir_invoice_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_invoice_search" does not exist.', 112, $this->source); })()), "by_data_invoice_ku_dir", [], "any", false, false, false, 112), 'widget', ["value" =>         // line 113
(isset($context["by_data_invoice_search_ku_dir"]) || array_key_exists("by_data_invoice_search_ku_dir", $context) ? $context["by_data_invoice_search_ku_dir"] : (function () { throw new RuntimeError('Variable "by_data_invoice_search_ku_dir" does not exist.', 113, $this->source); })())]);
        echo "<br>
        ";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_invoice_search"]) || array_key_exists("form_ku_dir_invoice_search", $context) ? $context["form_ku_dir_invoice_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_invoice_search" does not exist.', 114, $this->source); })()), "by_data_invoice_ku_dir", [], "any", false, false, false, 114), 'errors');
        echo "</th>

        ";
        // line 116
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 116, $this->source); })()), "flashes", ["search_id_counterparty_invoice_ku_dir"], "method", false, false, false, 116));
        foreach ($context['_seq'] as $context["_key"] => $context["value_id_counterparty_search"]) {
            echo "  
        ";
            // line 117
            $context["counterparty_search_ku_dir"] = $context["value_id_counterparty_search"];
            // line 118
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_id_counterparty_search'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_invoice_search"]) || array_key_exists("form_ku_dir_invoice_search", $context) ? $context["form_ku_dir_invoice_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_invoice_search" does not exist.', 119, $this->source); })()), "search_id_counterparty_invoice_ku_dir", [], "any", false, false, false, 119), 'label');
        echo "<br>
        ";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_invoice_search"]) || array_key_exists("form_ku_dir_invoice_search", $context) ? $context["form_ku_dir_invoice_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_invoice_search" does not exist.', 120, $this->source); })()), "search_id_counterparty_invoice_ku_dir", [], "any", false, false, false, 120), 'widget', ["value" =>         // line 121
(isset($context["counterparty_search_ku_dir"]) || array_key_exists("counterparty_search_ku_dir", $context) ? $context["counterparty_search_ku_dir"] : (function () { throw new RuntimeError('Variable "counterparty_search_ku_dir" does not exist.', 121, $this->source); })())]);
        echo "
        ";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_invoice_search"]) || array_key_exists("form_ku_dir_invoice_search", $context) ? $context["form_ku_dir_invoice_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_invoice_search" does not exist.', 122, $this->source); })()), "search_id_counterparty_invoice_ku_dir", [], "any", false, false, false, 122), 'errors');
        echo "</th>

        ";
        // line 124
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 124, $this->source); })()), "flashes", ["search_id_details_invoice_ku_dir"], "method", false, false, false, 124));
        foreach ($context['_seq'] as $context["_key"] => $context["value_id_details_search"]) {
            echo "  
        ";
            // line 125
            $context["details_search_ku_dir"] = $context["value_id_details_search"];
            // line 126
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_id_details_search'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_invoice_search"]) || array_key_exists("form_ku_dir_invoice_search", $context) ? $context["form_ku_dir_invoice_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_invoice_search" does not exist.', 127, $this->source); })()), "search_id_details_invoice_ku_dir", [], "any", false, false, false, 127), 'label');
        echo "<br>
        ";
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_invoice_search"]) || array_key_exists("form_ku_dir_invoice_search", $context) ? $context["form_ku_dir_invoice_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_invoice_search" does not exist.', 128, $this->source); })()), "search_id_details_invoice_ku_dir", [], "any", false, false, false, 128), 'widget', ["value" =>         // line 129
(isset($context["details_search_ku_dir"]) || array_key_exists("details_search_ku_dir", $context) ? $context["details_search_ku_dir"] : (function () { throw new RuntimeError('Variable "details_search_ku_dir" does not exist.', 129, $this->source); })())]);
        echo "<br>
        ";
        // line 130
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_invoice_search"]) || array_key_exists("form_ku_dir_invoice_search", $context) ? $context["form_ku_dir_invoice_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_invoice_search" does not exist.', 130, $this->source); })()), "search_id_details_invoice_ku_dir", [], "any", false, false, false, 130), 'errors');
        echo "</th>

        ";
        // line 132
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 132, $this->source); })()), "flashes", ["search_id_manufacturer_invoice_ku_dir"], "method", false, false, false, 132));
        foreach ($context['_seq'] as $context["_key"] => $context["value_id_manufacturer_search"]) {
            echo "  
        ";
            // line 133
            $context["manufacturer_search_ku_dir"] = $context["value_id_manufacturer_search"];
            // line 134
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_id_manufacturer_search'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_invoice_search"]) || array_key_exists("form_ku_dir_invoice_search", $context) ? $context["form_ku_dir_invoice_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_invoice_search" does not exist.', 135, $this->source); })()), "search_id_manufacturer_invoice_ku_dir", [], "any", false, false, false, 135), 'label');
        echo "<br>
        ";
        // line 136
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_invoice_search"]) || array_key_exists("form_ku_dir_invoice_search", $context) ? $context["form_ku_dir_invoice_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_invoice_search" does not exist.', 136, $this->source); })()), "search_id_manufacturer_invoice_ku_dir", [], "any", false, false, false, 136), 'widget', ["value" =>         // line 137
(isset($context["manufacturer_search_ku_dir"]) || array_key_exists("manufacturer_search_ku_dir", $context) ? $context["manufacturer_search_ku_dir"] : (function () { throw new RuntimeError('Variable "manufacturer_search_ku_dir" does not exist.', 137, $this->source); })())]);
        echo "<br>
        ";
        // line 138
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_invoice_search"]) || array_key_exists("form_ku_dir_invoice_search", $context) ? $context["form_ku_dir_invoice_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_invoice_search" does not exist.', 138, $this->source); })()), "search_id_manufacturer_invoice_ku_dir", [], "any", false, false, false, 138), 'errors');
        echo "</th>

        ";
        // line 140
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 140, $this->source); })()), "flashes", ["from_price_invoice_ku_dir"], "method", false, false, false, 140));
        foreach ($context['_seq'] as $context["_key"] => $context["value_s_price_search"]) {
            echo "  
        ";
            // line 141
            $context["from__price_search_ku_dir"] = $context["value_s_price_search"];
            // line 142
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_s_price_search'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 143
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_invoice_search"]) || array_key_exists("form_ku_dir_invoice_search", $context) ? $context["form_ku_dir_invoice_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_invoice_search" does not exist.', 143, $this->source); })()), "from_price_invoice_ku_dir", [], "any", false, false, false, 143), 'label');
        echo "<br>
        ";
        // line 144
        echo "с ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_invoice_search"]) || array_key_exists("form_ku_dir_invoice_search", $context) ? $context["form_ku_dir_invoice_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_invoice_search" does not exist.', 144, $this->source); })()), "from_price_invoice_ku_dir", [], "any", false, false, false, 144), 'widget', ["value" =>         // line 145
(isset($context["from__price_search_ku_dir"]) || array_key_exists("from__price_search_ku_dir", $context) ? $context["from__price_search_ku_dir"] : (function () { throw new RuntimeError('Variable "from__price_search_ku_dir" does not exist.', 145, $this->source); })())]);
        echo "
        ";
        // line 146
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_invoice_search"]) || array_key_exists("form_ku_dir_invoice_search", $context) ? $context["form_ku_dir_invoice_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_invoice_search" does not exist.', 146, $this->source); })()), "from_price_invoice_ku_dir", [], "any", false, false, false, 146), 'errors');
        echo "<br>
        ";
        // line 147
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 147, $this->source); })()), "flashes", ["by_price_invoice_ku_dir"], "method", false, false, false, 147));
        foreach ($context['_seq'] as $context["_key"] => $context["value_po_price_search"]) {
            echo "  
        ";
            // line 148
            $context["by_price_search_ku_dir"] = $context["value_po_price_search"];
            // line 149
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_po_price_search'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 150
        echo "        ";
        echo "по ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_invoice_search"]) || array_key_exists("form_ku_dir_invoice_search", $context) ? $context["form_ku_dir_invoice_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_invoice_search" does not exist.', 150, $this->source); })()), "by_price_invoice_ku_dir", [], "any", false, false, false, 150), 'widget', ["value" =>         // line 151
(isset($context["by_price_search_ku_dir"]) || array_key_exists("by_price_search_ku_dir", $context) ? $context["by_price_search_ku_dir"] : (function () { throw new RuntimeError('Variable "by_price_search_ku_dir" does not exist.', 151, $this->source); })())]);
        echo "<br>
        ";
        // line 152
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_invoice_search"]) || array_key_exists("form_ku_dir_invoice_search", $context) ? $context["form_ku_dir_invoice_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_invoice_search" does not exist.', 152, $this->source); })()), "by_price_invoice_ku_dir", [], "any", false, false, false, 152), 'errors');
        echo "</th>

        <th>";
        // line 154
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_invoice_search"]) || array_key_exists("form_ku_dir_invoice_search", $context) ? $context["form_ku_dir_invoice_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_invoice_search" does not exist.', 154, $this->source); })()), "button_search_invoice_ku_dir", [], "any", false, false, false, 154), 'widget', ["label" => "Поиск счет-фактуру", "attr" => ["class" => "search"]]);
        // line 155
        echo "</th>
        
    ";
        // line 157
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_ku_dir_invoice_search"]) || array_key_exists("form_ku_dir_invoice_search", $context) ? $context["form_ku_dir_invoice_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_invoice_search" does not exist.', 157, $this->source); })()), 'form_end');
        echo "
    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 161
    public function block_table_total_amount($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_total_amount"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_total_amount"));

        // line 162
        echo "    ";
        if ((isset($context["arr_ku_dir"]) || array_key_exists("arr_ku_dir", $context) ? $context["arr_ku_dir"] : (function () { throw new RuntimeError('Variable "arr_ku_dir" does not exist.', 162, $this->source); })())) {
            // line 163
            echo "        <th>Id<br>КуДир</th>
        <th>Смена<br>Чека</th>
        <th>№<br>Чека</th>
        <th>Дата<br>чека</th>
        <th>Оплата<br>в кассу</th>
        <th>Оплата<br>пост-ку</th>
        <th>Остаток</th>
        <th>Сохранить<br>в КуДир</th>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 174
    public function block_tbody_total_amount($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tbody_total_amount"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tbody_total_amount"));

        // line 176
        echo "
";
        // line 178
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["arr_ku_dir"]) || array_key_exists("arr_ku_dir", $context) ? $context["arr_ku_dir"] : (function () { throw new RuntimeError('Variable "arr_ku_dir" does not exist.', 178, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["list_ku_dir"]) {
            // line 179
            echo "        ";
            if ($context["list_ku_dir"]) {
                // line 180
                echo "            ";
                $context["expenditure_total_amount"] = 0;
                // line 181
                echo "            ";
                $context["remains"] = 0;
                // line 182
                echo "            <tr>
                <td>&nbsp;";
                // line 183
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list_ku_dir"], "getId", [], "method", false, false, false, 183), "html", null, true);
                echo "</td>

                <td>&nbsp;";
                // line 185
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list_ku_dir"], "getReceiptChange", [], "method", false, false, false, 185), "html", null, true);
                echo "</td>

                <td>&nbsp;";
                // line 187
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list_ku_dir"], "getReceiptNumber", [], "method", false, false, false, 187), "html", null, true);
                echo "</td>

                <td>&nbsp;";
                // line 189
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list_ku_dir"], "getReceiptDate", [], "method", false, false, false, 189), "d-m-Y"), "html", null, true);
                echo "</td>

                <td>&nbsp;";
                // line 191
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list_ku_dir"], "getComing", [], "method", false, false, false, 191), "html", null, true);
                echo "</td>

                ";
                // line 193
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["arr_total_amount_expenditure"]) || array_key_exists("arr_total_amount_expenditure", $context) ? $context["arr_total_amount_expenditure"] : (function () { throw new RuntimeError('Variable "arr_total_amount_expenditure" does not exist.', 193, $this->source); })()));
                foreach ($context['_seq'] as $context["key"] => $context["total_amount_expenditure"]) {
                    // line 194
                    echo "
                    ";
                    // line 195
                    if ((twig_get_attribute($this->env, $this->source, $context["list_ku_dir"], "getId", [], "method", false, false, false, 195) == $context["key"])) {
                        // line 196
                        echo "
                        ";
                        // line 197
                        $context["expenditure_total_amount"] = $context["total_amount_expenditure"];
                        // line 198
                        echo "
                    ";
                    }
                    // line 199
                    echo "        
                    
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['total_amount_expenditure'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 201
                echo "  
                <td>&nbsp;";
                // line 202
                echo twig_escape_filter($this->env, (isset($context["expenditure_total_amount"]) || array_key_exists("expenditure_total_amount", $context) ? $context["expenditure_total_amount"] : (function () { throw new RuntimeError('Variable "expenditure_total_amount" does not exist.', 202, $this->source); })()), "html", null, true);
                echo "</td>

                ";
                // line 204
                if (((isset($context["expenditure_total_amount"]) || array_key_exists("expenditure_total_amount", $context) ? $context["expenditure_total_amount"] : (function () { throw new RuntimeError('Variable "expenditure_total_amount" does not exist.', 204, $this->source); })()) != 0)) {
                    // line 205
                    echo "
                    ";
                    // line 206
                    $context["remains"] = (twig_get_attribute($this->env, $this->source, $context["list_ku_dir"], "getComing", [], "method", false, false, false, 206) - (isset($context["expenditure_total_amount"]) || array_key_exists("expenditure_total_amount", $context) ? $context["expenditure_total_amount"] : (function () { throw new RuntimeError('Variable "expenditure_total_amount" does not exist.', 206, $this->source); })()));
                    // line 207
                    echo "
                ";
                }
                // line 208
                echo " 

                <td>&nbsp;";
                // line 210
                echo twig_escape_filter($this->env, (isset($context["remains"]) || array_key_exists("remains", $context) ? $context["remains"] : (function () { throw new RuntimeError('Variable "remains" does not exist.', 210, $this->source); })()), "html", null, true);
                echo "</td>

                <form action=\"/ku_dir_save\" name=\"ku_dir_save\" method=\"post\">

                    <input type=\"hidden\" name=\"id_ku_dir\" value=\"";
                // line 214
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list_ku_dir"], "getId", [], "method", false, false, false, 214), "html", null, true);
                echo "\"></input>

                    <td><button class=\"save\" type=\"submit\" name=\"expenditure\" 
                        value=\"";
                // line 217
                echo twig_escape_filter($this->env, (isset($context["expenditure_total_amount"]) || array_key_exists("expenditure_total_amount", $context) ? $context["expenditure_total_amount"] : (function () { throw new RuntimeError('Variable "expenditure_total_amount" does not exist.', 217, $this->source); })()), "html", null, true);
                echo "\">Сохранить</button></td>
                                
                </form>

            </tr> 
                                     
        ";
            }
            // line 224
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['list_ku_dir'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 227
    public function block_table_ku_dir_invoice($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_ku_dir_invoice"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_ku_dir_invoice"));

        // line 228
        echo "    ";
        if ((isset($context["arr_invoice_id_ku_dir"]) || array_key_exists("arr_invoice_id_ku_dir", $context) ? $context["arr_invoice_id_ku_dir"] : (function () { throw new RuntimeError('Variable "arr_invoice_id_ku_dir" does not exist.', 228, $this->source); })())) {
            // line 229
            echo "
        <th>Номер<br>накладной</th>
        <th>Дата<br>накладной</th>
        <th>Поставщик</th>
        <th>№ Детали</th>
        <th>Производитель</th>
        <th>Кол-во</th>
        <th>Цена</th>
        <th>Id<br>КуДир</th>
        <th>Удалить</th>

    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 243
    public function block_tbody_ku_dir_invoice($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tbody_ku_dir_invoice"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tbody_ku_dir_invoice"));

        // line 244
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["arr_invoice_id_ku_dir"]) || array_key_exists("arr_invoice_id_ku_dir", $context) ? $context["arr_invoice_id_ku_dir"] : (function () { throw new RuntimeError('Variable "arr_invoice_id_ku_dir" does not exist.', 244, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["list_invoice_id_ku_dir"]) {
            // line 245
            echo "        ";
            if ($context["list_invoice_id_ku_dir"]) {
                echo "              
            <tr>
                <td>&nbsp;";
                // line 247
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list_invoice_id_ku_dir"], "getNumberDocument", [], "method", false, false, false, 247), "html", null, true);
                echo "</td>

                <td>&nbsp;";
                // line 249
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list_invoice_id_ku_dir"], "getDataInvoice", [], "method", false, false, false, 249), "d-m-Y"), "html", null, true);
                echo "</td>

                <td>&nbsp;";
                // line 251
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["list_invoice_id_ku_dir"], "getIdCounterparty", [], "method", false, false, false, 251), "getCounterparty", [], "method", false, false, false, 251), "html", null, true);
                echo "</td>

                <td>&nbsp;";
                // line 253
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["list_invoice_id_ku_dir"], "getIdDetails", [], "method", false, false, false, 253), "getPartNumbers", [], "method", false, false, false, 253), "html", null, true);
                echo "</td>

                <td>&nbsp;";
                // line 255
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["list_invoice_id_ku_dir"], "getIdManufacturer", [], "method", false, false, false, 255), "getManufacturers", [], "method", false, false, false, 255), "html", null, true);
                echo "</td>

                <td>&nbsp;";
                // line 257
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list_invoice_id_ku_dir"], "getQuantity", [], "method", false, false, false, 257), "html", null, true);
                echo "</td>

                <td>&nbsp;";
                // line 259
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["list_invoice_id_ku_dir"], "getPrice", [], "method", false, false, false, 259) / 100), 2, ".", ""), "html", null, true);
                echo "</td>

                <td>&nbsp;";
                // line 261
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["list_invoice_id_ku_dir"], "getIdKuDir", [], "method", false, false, false, 261), "getId", [], "method", false, false, false, 261), "html", null, true);
                echo "</td>

                <form action=\"/delete_list_invoice_id_ku_dir\" name=\"delete_list_invoice_id_ku_dir\" method=\"post\">

                    <td><button class=\"delete\" type=\"submit\" name=\"id_invoice\" 
                        value=\"";
                // line 266
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list_invoice_id_ku_dir"], "getId", [], "method", false, false, false, 266), "html", null, true);
                echo "\">Удалить</button></td>
                                
                </form>

            </tr>  
        ";
            }
            // line 272
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['list_invoice_id_ku_dir'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 275
    public function block_table_thead_tr($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_thead_tr"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_thead_tr"));

        // line 277
        echo "    ";
        if ((isset($context["arr_invoice_ku_dir"]) || array_key_exists("arr_invoice_ku_dir", $context) ? $context["arr_invoice_ku_dir"] : (function () { throw new RuntimeError('Variable "arr_invoice_ku_dir" does not exist.', 277, $this->source); })())) {
            // line 278
            echo "
        <th>Номер<br>накладной</th>
        <th>Дата<br>накладной</th>
        <th>Поставщик</th>
        <th>№ Детали</th>
        <th>Производитель</th>
        <th>Кол-во</th>
        <th>Цена</th>
        <th>Id<br>КуДир</th>
        <th>КуДир</th>

    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 292
    public function block_tbody($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tbody"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tbody"));

        // line 294
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["arr_invoice_ku_dir"]) || array_key_exists("arr_invoice_ku_dir", $context) ? $context["arr_invoice_ku_dir"] : (function () { throw new RuntimeError('Variable "arr_invoice_ku_dir" does not exist.', 294, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["list_invoice_ku_dir"]) {
            // line 295
            echo "        ";
            if ($context["list_invoice_ku_dir"]) {
                // line 296
                echo "               
            <tr>
                <td>&nbsp;";
                // line 298
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list_invoice_ku_dir"], "getNumberDocument", [], "method", false, false, false, 298), "html", null, true);
                echo "</td>

                <td>&nbsp;";
                // line 300
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list_invoice_ku_dir"], "getDataInvoice", [], "method", false, false, false, 300), "d-m-Y"), "html", null, true);
                echo "</td>

                <td>&nbsp;";
                // line 302
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["list_invoice_ku_dir"], "getIdCounterparty", [], "method", false, false, false, 302), "getCounterparty", [], "method", false, false, false, 302), "html", null, true);
                echo "</td>

                <td>&nbsp;";
                // line 304
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["list_invoice_ku_dir"], "getIdDetails", [], "method", false, false, false, 304), "getPartNumbers", [], "method", false, false, false, 304), "html", null, true);
                echo "</td>

                <td>&nbsp;";
                // line 306
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["list_invoice_ku_dir"], "getIdManufacturer", [], "method", false, false, false, 306), "getManufacturers", [], "method", false, false, false, 306), "html", null, true);
                echo "</td>

                <td>&nbsp;";
                // line 308
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list_invoice_ku_dir"], "getQuantity", [], "method", false, false, false, 308), "html", null, true);
                echo "</td>

                <td>&nbsp;";
                // line 310
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["list_invoice_ku_dir"], "getPrice", [], "method", false, false, false, 310) / 100), 2, ".", ""), "html", null, true);
                echo "</td>

                <form action=\"/id_ku_dir_save\" name=\"id_ku_dir_save\" method=\"post\">

                    <td><input type=\"number\" name=\"id_ku_dir\"></td>

                    <td><button class=\"save\" type=\"submit\" name=\"id_invoice\" 
                        value=\"";
                // line 317
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list_invoice_ku_dir"], "getId", [], "method", false, false, false, 317), "html", null, true);
                echo "\">КуДир</button></td>
                                
                </form>
            </tr> 
                    
                
        ";
            } else {
                // line 324
                echo "            <h2>Данные не найдены. Видите параметры в Поиск счет-фактуру</h2>  
        ";
            }
            // line 326
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['list_invoice_ku_dir'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "ku_dir/ku_dir_save.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1051 => 326,  1047 => 324,  1037 => 317,  1027 => 310,  1022 => 308,  1017 => 306,  1012 => 304,  1007 => 302,  1002 => 300,  997 => 298,  993 => 296,  990 => 295,  985 => 294,  975 => 292,  953 => 278,  950 => 277,  940 => 275,  926 => 272,  917 => 266,  909 => 261,  904 => 259,  899 => 257,  894 => 255,  889 => 253,  884 => 251,  879 => 249,  874 => 247,  868 => 245,  863 => 244,  853 => 243,  831 => 229,  828 => 228,  818 => 227,  804 => 224,  794 => 217,  788 => 214,  781 => 210,  777 => 208,  773 => 207,  771 => 206,  768 => 205,  766 => 204,  761 => 202,  758 => 201,  750 => 199,  746 => 198,  744 => 197,  741 => 196,  739 => 195,  736 => 194,  732 => 193,  727 => 191,  722 => 189,  717 => 187,  712 => 185,  707 => 183,  704 => 182,  701 => 181,  698 => 180,  695 => 179,  690 => 178,  687 => 176,  677 => 174,  658 => 163,  655 => 162,  645 => 161,  632 => 157,  628 => 155,  626 => 154,  621 => 152,  617 => 151,  614 => 150,  608 => 149,  606 => 148,  600 => 147,  596 => 146,  592 => 145,  590 => 144,  585 => 143,  579 => 142,  577 => 141,  571 => 140,  566 => 138,  562 => 137,  561 => 136,  556 => 135,  550 => 134,  548 => 133,  542 => 132,  537 => 130,  533 => 129,  532 => 128,  527 => 127,  521 => 126,  519 => 125,  513 => 124,  508 => 122,  504 => 121,  503 => 120,  498 => 119,  492 => 118,  490 => 117,  484 => 116,  479 => 114,  475 => 113,  472 => 112,  466 => 111,  464 => 110,  458 => 109,  454 => 108,  450 => 107,  448 => 106,  443 => 105,  437 => 104,  435 => 103,  429 => 102,  424 => 100,  420 => 99,  419 => 98,  414 => 97,  408 => 96,  406 => 95,  400 => 94,  397 => 93,  394 => 92,  391 => 91,  388 => 90,  385 => 89,  382 => 88,  379 => 87,  376 => 86,  373 => 85,  371 => 84,  366 => 82,  358 => 76,  354 => 74,  352 => 73,  347 => 71,  343 => 70,  342 => 69,  337 => 68,  331 => 67,  329 => 66,  323 => 65,  318 => 63,  314 => 62,  313 => 61,  308 => 60,  302 => 59,  300 => 58,  294 => 57,  289 => 55,  285 => 54,  284 => 53,  279 => 52,  273 => 51,  271 => 50,  265 => 49,  260 => 47,  256 => 46,  255 => 45,  250 => 44,  244 => 43,  242 => 42,  236 => 41,  231 => 39,  227 => 38,  226 => 37,  221 => 36,  215 => 35,  213 => 34,  207 => 33,  204 => 32,  201 => 31,  198 => 30,  195 => 29,  192 => 28,  189 => 27,  184 => 25,  174 => 23,  155 => 12,  145 => 11,  126 => 9,  107 => 7,  88 => 5,  69 => 3,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{title_logo}}{% endblock %}

{% block logo %}{{title_logo}}{% endblock %}

{% block legend %}{{legend}}{% endblock legend%}

{% block legend_search %}{{legend_search}}{% endblock legend_search %}

{% block form_save_edit_sales %}

    <form action=\"/search_ku_dir\" name=\"search_ku_dir\" method=\"post\">
    <th><button class=\"search\" type=\"submit\" name=\"search_ku_dir\">Передти в<br>поиск по КуДир</button></th>
    </form>

    <form action=\"/reset_ku_dir\" name=\"reset_ku_dir\">
    <th><button class=\"reset\" type=\"submit\" name=\"reset_ku_dir\">Сбросить</button></th>
    </form>

{% endblock form_save_edit_sales %}

{% block form_search %}
{#Форма сохранения в КуДир#}
    {{ form_start(form_ku_dir_manual_saving) }}
    {#{{ dump(app.flashes()) }}#}
        {% set receipt_change_manual_savin = '' %}
        {% set receipt_number_manual_savin = '' %}
        {% set receipt_date_manual_savin = '' %}
        {% set coming_manual_savin = '' %}
        {% set expenditure_manual_savin = '' %}

        {% for value_receipt_change_save in app.flashes('receipt_change_save') %}  
        {% set receipt_change_manual_savin = value_receipt_change_save %}
        {% endfor %}
        <th>{{ form_label(form_ku_dir_manual_saving.receipt_change_save) }}<br>
        {{ form_widget(form_ku_dir_manual_saving.receipt_change_save, 
            {value : receipt_change_manual_savin}) }}
        {{ form_errors(form_ku_dir_manual_saving.receipt_change_save) }}</th>

        {% for value_receipt_number_save in app.flashes('receipt_number_save') %}  
        {% set receipt_number_manual_savin = value_receipt_number_save %}
        {% endfor %}
        <th>{{ form_label(form_ku_dir_manual_saving.receipt_number_save) }}<br>
        {{ form_widget(form_ku_dir_manual_saving.receipt_number_save, 
            {value : receipt_number_manual_savin}) }}
        {{ form_errors(form_ku_dir_manual_saving.receipt_number_save) }}</th> 

        {% for value_receipt_date_save in app.flashes('receipt_date_save') %}  
        {% set receipt_date_manual_savin = value_receipt_date_save %}
        {% endfor %}
        <th>{{ form_label(form_ku_dir_manual_saving.receipt_date_save) }}<br>
        {{ form_widget(form_ku_dir_manual_saving.receipt_date_save, 
            {value : receipt_date_manual_savin}) }}
        {{ form_errors(form_ku_dir_manual_saving.receipt_date_save) }}</th>

        {% for value_coming_save in app.flashes('coming_save') %}  
        {% set coming_manual_savin = value_coming_save %}
        {% endfor %}
        <th>{{ form_label(form_ku_dir_manual_saving.coming_save) }}<br>
        {{ form_widget(form_ku_dir_manual_saving.coming_save, 
            {value : coming_manual_savin}) }}
        {{ form_errors(form_ku_dir_manual_saving.coming_save) }}</th> 

        {% for value_expenditure_save in app.flashes('expenditure_save') %}  
        {% set expenditure_manual_savin = value_expenditure_save %}
        {% endfor %}
        <th>{{ form_label(form_ku_dir_manual_saving.expenditure_save) }}<br>
        {{ form_widget(form_ku_dir_manual_saving.expenditure_save, 
            {value : expenditure_manual_savin}) }}
        {{ form_errors(form_ku_dir_manual_saving.expenditure_save) }}</th> 

        <th>{{ form_widget(form_ku_dir_manual_saving.button_save_ku_dir, 
            { 'label': 'Сохранить в КуДир', 'attr': {'class': 'save'} }) }}</th>
        
    {{ form_end(form_ku_dir_manual_saving) }}

    </tr>
    
    <tr>
    {#Форма поиска счет-фактур#}
    {{ form_start(form_ku_dir_invoice_search) }}
{#{{ dump(app.flashes()) }}#}
        {#Переменный для вывода данных в форме когда форма не прошла валидацию#}
        {% set number_document_search_ku_dir = '' %}
        {% set from__data_invoice_search_ku_dir = '' %}
        {% set by_data_invoice_search_ku_dir = '' %}
        {% set counterparty_search_ku_dir = '' %}
        {% set details_search_ku_dir = '' %}
        {% set manufacturer_search_ku_dir = '' %}
        {% set from__price_search_ku_dir = '' %}
        {% set by_price_search_ku_dir = '' %}

        {% for value_number_document_search in app.flashes('search_number_document_invoice_ku_dir') %}  
        {% set number_document_search_ku_dir = value_number_document_search %}
        {% endfor %}
        <th>{{ form_label(form_ku_dir_invoice_search.search_number_document_invoice_ku_dir) }}<br>
        {{ form_widget(form_ku_dir_invoice_search.search_number_document_invoice_ku_dir, 
            {value : number_document_search_ku_dir}) }}<br>
        {{ form_errors(form_ku_dir_invoice_search.search_number_document_invoice_ku_dir) }}</th>

        {% for value_data_invoice_search in app.flashes('from_data_invoice_ku_dir') %}  
        {% set from__data_invoice_search_ku_dir = value_data_invoice_search %}
        {% endfor %}
        <th>{{ form_label(form_ku_dir_invoice_search.from_data_invoice_ku_dir) }}<br>
        {{'с '}}{{ form_widget(form_ku_dir_invoice_search.from_data_invoice_ku_dir, 
            {value : from__data_invoice_search_ku_dir}) }}
        {{ form_errors(form_ku_dir_invoice_search.from_data_invoice_ku_dir) }}<br>
        {% for value_price in app.flashes('by_data_invoice_ku_dir') %}  
        {% set by_data_invoice_search_ku_dir = value_price %}
        {% endfor %}
        {{'по '}}{{ form_widget(form_ku_dir_invoice_search.by_data_invoice_ku_dir, 
            {value : by_data_invoice_search_ku_dir}) }}<br>
        {{ form_errors(form_ku_dir_invoice_search.by_data_invoice_ku_dir) }}</th>

        {% for value_id_counterparty_search in app.flashes('search_id_counterparty_invoice_ku_dir') %}  
        {% set counterparty_search_ku_dir = value_id_counterparty_search %}
        {% endfor %}
        <th>{{ form_label(form_ku_dir_invoice_search.search_id_counterparty_invoice_ku_dir) }}<br>
        {{ form_widget(form_ku_dir_invoice_search.search_id_counterparty_invoice_ku_dir, 
            {value : counterparty_search_ku_dir}) }}
        {{ form_errors(form_ku_dir_invoice_search.search_id_counterparty_invoice_ku_dir) }}</th>

        {% for value_id_details_search in app.flashes('search_id_details_invoice_ku_dir') %}  
        {% set details_search_ku_dir = value_id_details_search %}
        {% endfor %}
        <th>{{ form_label(form_ku_dir_invoice_search.search_id_details_invoice_ku_dir) }}<br>
        {{ form_widget(form_ku_dir_invoice_search.search_id_details_invoice_ku_dir, 
            {value : details_search_ku_dir}) }}<br>
        {{ form_errors(form_ku_dir_invoice_search.search_id_details_invoice_ku_dir) }}</th>

        {% for value_id_manufacturer_search in app.flashes('search_id_manufacturer_invoice_ku_dir') %}  
        {% set manufacturer_search_ku_dir = value_id_manufacturer_search %}
        {% endfor %}
        <th>{{ form_label(form_ku_dir_invoice_search.search_id_manufacturer_invoice_ku_dir) }}<br>
        {{ form_widget(form_ku_dir_invoice_search.search_id_manufacturer_invoice_ku_dir, 
            {value : manufacturer_search_ku_dir}) }}<br>
        {{ form_errors(form_ku_dir_invoice_search.search_id_manufacturer_invoice_ku_dir) }}</th>

        {% for value_s_price_search in app.flashes('from_price_invoice_ku_dir') %}  
        {% set from__price_search_ku_dir = value_s_price_search %}
        {% endfor %}
        <th>{{ form_label(form_ku_dir_invoice_search.from_price_invoice_ku_dir) }}<br>
        {{'с '}}{{ form_widget(form_ku_dir_invoice_search.from_price_invoice_ku_dir, 
            {value : from__price_search_ku_dir}) }}
        {{ form_errors(form_ku_dir_invoice_search.from_price_invoice_ku_dir) }}<br>
        {% for value_po_price_search in app.flashes('by_price_invoice_ku_dir') %}  
        {% set by_price_search_ku_dir = value_po_price_search %}
        {% endfor %}
        {{'по '}}{{ form_widget(form_ku_dir_invoice_search.by_price_invoice_ku_dir, 
            {value : by_price_search_ku_dir}) }}<br>
        {{ form_errors(form_ku_dir_invoice_search.by_price_invoice_ku_dir) }}</th>

        <th>{{ form_widget(form_ku_dir_invoice_search.button_search_invoice_ku_dir, 
            { 'label': 'Поиск счет-фактуру', 'attr': {'class': 'search'} }) }}</th>
        
    {{ form_end(form_ku_dir_invoice_search) }}
    
{% endblock form_search %}

{% block table_total_amount %}
    {% if arr_ku_dir %}
        <th>Id<br>КуДир</th>
        <th>Смена<br>Чека</th>
        <th>№<br>Чека</th>
        <th>Дата<br>чека</th>
        <th>Оплата<br>в кассу</th>
        <th>Оплата<br>пост-ку</th>
        <th>Остаток</th>
        <th>Сохранить<br>в КуДир</th>
    {% endif %}
{% endblock table_total_amount %}

{% block tbody_total_amount %}
{#{{ dump(arr_invoice_id_ku_dir) }}#}

{#выводит таблицу по поиску#}
    {% for list_ku_dir in arr_ku_dir %}
        {% if list_ku_dir %}
            {% set expenditure_total_amount = 0 %}
            {% set remains = 0 %}
            <tr>
                <td>&nbsp;{{ list_ku_dir.getId() }}</td>

                <td>&nbsp;{{ list_ku_dir.getReceiptChange() }}</td>

                <td>&nbsp;{{ list_ku_dir.getReceiptNumber() }}</td>

                <td>&nbsp;{{ list_ku_dir.getReceiptDate()|date(\"d-m-Y\") }}</td>

                <td>&nbsp;{{ list_ku_dir.getComing() }}</td>

                {% for key, total_amount_expenditure in arr_total_amount_expenditure %}

                    {% if list_ku_dir.getId() == key %}

                        {% set expenditure_total_amount = total_amount_expenditure %}

                    {% endif %}        
                    
                {% endfor %}  
                <td>&nbsp;{{ expenditure_total_amount }}</td>

                {% if expenditure_total_amount != 0 %}

                    {% set remains = (list_ku_dir.getComing() - expenditure_total_amount) %}

                {% endif %} 

                <td>&nbsp;{{ remains }}</td>

                <form action=\"/ku_dir_save\" name=\"ku_dir_save\" method=\"post\">

                    <input type=\"hidden\" name=\"id_ku_dir\" value=\"{{ list_ku_dir.getId() }}\"></input>

                    <td><button class=\"save\" type=\"submit\" name=\"expenditure\" 
                        value=\"{{ expenditure_total_amount }}\">Сохранить</button></td>
                                
                </form>

            </tr> 
                                     
        {% endif %}
    {% endfor %}
{% endblock tbody_total_amount %}

{% block table_ku_dir_invoice %}
    {% if arr_invoice_id_ku_dir %}

        <th>Номер<br>накладной</th>
        <th>Дата<br>накладной</th>
        <th>Поставщик</th>
        <th>№ Детали</th>
        <th>Производитель</th>
        <th>Кол-во</th>
        <th>Цена</th>
        <th>Id<br>КуДир</th>
        <th>Удалить</th>

    {% endif %}
{% endblock table_ku_dir_invoice %}

{% block tbody_ku_dir_invoice %}
    {% for list_invoice_id_ku_dir in arr_invoice_id_ku_dir %}
        {% if list_invoice_id_ku_dir %}              
            <tr>
                <td>&nbsp;{{ list_invoice_id_ku_dir.getNumberDocument() }}</td>

                <td>&nbsp;{{ list_invoice_id_ku_dir.getDataInvoice()|date(\"d-m-Y\") }}</td>

                <td>&nbsp;{{ list_invoice_id_ku_dir.getIdCounterparty().getCounterparty() }}</td>

                <td>&nbsp;{{ list_invoice_id_ku_dir.getIdDetails().getPartNumbers() }}</td>

                <td>&nbsp;{{ list_invoice_id_ku_dir.getIdManufacturer().getManufacturers() }}</td>

                <td>&nbsp;{{ list_invoice_id_ku_dir.getQuantity() }}</td>

                <td>&nbsp;{{ (list_invoice_id_ku_dir.getPrice() / 100)|number_format(2, '.', '') }}</td>

                <td>&nbsp;{{ list_invoice_id_ku_dir.getIdKuDir().getId() }}</td>

                <form action=\"/delete_list_invoice_id_ku_dir\" name=\"delete_list_invoice_id_ku_dir\" method=\"post\">

                    <td><button class=\"delete\" type=\"submit\" name=\"id_invoice\" 
                        value=\"{{ list_invoice_id_ku_dir.getId() }}\">Удалить</button></td>
                                
                </form>

            </tr>  
        {% endif %}
    {% endfor %}
{% endblock tbody_ku_dir_invoice %}

{% block table_thead_tr %}
{#{{ dump(arr_sales) }}#}
    {% if arr_invoice_ku_dir %}

        <th>Номер<br>накладной</th>
        <th>Дата<br>накладной</th>
        <th>Поставщик</th>
        <th>№ Детали</th>
        <th>Производитель</th>
        <th>Кол-во</th>
        <th>Цена</th>
        <th>Id<br>КуДир</th>
        <th>КуДир</th>

    {% endif %}
{% endblock table_thead_tr %}

{% block tbody %}
{#{{ dump(arr_invoice_ku_dir) }}#}
    {% for list_invoice_ku_dir in arr_invoice_ku_dir %}
        {% if list_invoice_ku_dir %}
               
            <tr>
                <td>&nbsp;{{ list_invoice_ku_dir.getNumberDocument() }}</td>

                <td>&nbsp;{{ list_invoice_ku_dir.getDataInvoice()|date(\"d-m-Y\") }}</td>

                <td>&nbsp;{{ list_invoice_ku_dir.getIdCounterparty().getCounterparty() }}</td>

                <td>&nbsp;{{ list_invoice_ku_dir.getIdDetails().getPartNumbers() }}</td>

                <td>&nbsp;{{ list_invoice_ku_dir.getIdManufacturer().getManufacturers() }}</td>

                <td>&nbsp;{{ list_invoice_ku_dir.getQuantity() }}</td>

                <td>&nbsp;{{ (list_invoice_ku_dir.getPrice() / 100)|number_format(2, '.', '') }}</td>

                <form action=\"/id_ku_dir_save\" name=\"id_ku_dir_save\" method=\"post\">

                    <td><input type=\"number\" name=\"id_ku_dir\"></td>

                    <td><button class=\"save\" type=\"submit\" name=\"id_invoice\" 
                        value=\"{{ list_invoice_ku_dir.getId() }}\">КуДир</button></td>
                                
                </form>
            </tr> 
                    
                
        {% else %}
            <h2>Данные не найдены. Видите параметры в Поиск счет-фактуру</h2>  
        {% endif %}
    {% endfor %}
{% endblock tbody %}", "ku_dir/ku_dir_save.html.twig", "/var/www/templates/ku_dir/ku_dir_save.html.twig");
    }
}
