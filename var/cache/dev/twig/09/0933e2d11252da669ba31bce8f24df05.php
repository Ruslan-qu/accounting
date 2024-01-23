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

        // line 24
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "flashes", ["error_сount_receipt_change_number"], "method", false, false, false, 24));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            echo "  
       <h2> ";
            // line 25
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</h2> 
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo " 
     ";
        // line 27
        if ((isset($context["last_check"]) || array_key_exists("last_check", $context) ? $context["last_check"] : (function () { throw new RuntimeError('Variable "last_check" does not exist.', 27, $this->source); })())) {
            // line 28
            echo "        <th>Последний чек<br>Смена Номер<br>
            ";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["last_check"]) || array_key_exists("last_check", $context) ? $context["last_check"] : (function () { throw new RuntimeError('Variable "last_check" does not exist.', 29, $this->source); })()), 0, [], "array", false, false, false, 29), "getReceiptChange", [], "method", false, false, false, 29), "html", null, true);
            echo " 
             &nbsp; &nbsp; &nbsp; : &nbsp; &nbsp; &nbsp;
                ";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["last_check"]) || array_key_exists("last_check", $context) ? $context["last_check"] : (function () { throw new RuntimeError('Variable "last_check" does not exist.', 31, $this->source); })()), 0, [], "array", false, false, false, 31), "getReceiptNumber", [], "method", false, false, false, 31), "html", null, true);
            echo "</th>
    ";
        }
        // line 33
        echo "        
    ";
        // line 35
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_ku_dir_manual_saving"]) || array_key_exists("form_ku_dir_manual_saving", $context) ? $context["form_ku_dir_manual_saving"] : (function () { throw new RuntimeError('Variable "form_ku_dir_manual_saving" does not exist.', 35, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ku_dir_manual_saving")]);
        echo "
    ";
        // line 37
        echo "        ";
        $context["receipt_change_manual_savin"] = "";
        // line 38
        echo "        ";
        $context["receipt_number_manual_savin"] = "";
        // line 39
        echo "        ";
        $context["receipt_date_manual_savin"] = "";
        // line 40
        echo "        ";
        $context["coming_manual_savin"] = "";
        // line 41
        echo "        ";
        $context["expenditure_manual_savin"] = "";
        // line 42
        echo "
        ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "flashes", ["receipt_change_save"], "method", false, false, false, 43));
        foreach ($context['_seq'] as $context["_key"] => $context["value_receipt_change_save"]) {
            echo "  
        ";
            // line 44
            $context["receipt_change_manual_savin"] = $context["value_receipt_change_save"];
            // line 45
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_receipt_change_save'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_manual_saving"]) || array_key_exists("form_ku_dir_manual_saving", $context) ? $context["form_ku_dir_manual_saving"] : (function () { throw new RuntimeError('Variable "form_ku_dir_manual_saving" does not exist.', 46, $this->source); })()), "receipt_change_save", [], "any", false, false, false, 46), 'label');
        echo "<br>
        ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_manual_saving"]) || array_key_exists("form_ku_dir_manual_saving", $context) ? $context["form_ku_dir_manual_saving"] : (function () { throw new RuntimeError('Variable "form_ku_dir_manual_saving" does not exist.', 47, $this->source); })()), "receipt_change_save", [], "any", false, false, false, 47), 'widget', ["value" =>         // line 48
(isset($context["receipt_change_manual_savin"]) || array_key_exists("receipt_change_manual_savin", $context) ? $context["receipt_change_manual_savin"] : (function () { throw new RuntimeError('Variable "receipt_change_manual_savin" does not exist.', 48, $this->source); })())]);
        echo "
        ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_manual_saving"]) || array_key_exists("form_ku_dir_manual_saving", $context) ? $context["form_ku_dir_manual_saving"] : (function () { throw new RuntimeError('Variable "form_ku_dir_manual_saving" does not exist.', 49, $this->source); })()), "receipt_change_save", [], "any", false, false, false, 49), 'errors');
        echo "</th>

        ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "flashes", ["receipt_number_save"], "method", false, false, false, 51));
        foreach ($context['_seq'] as $context["_key"] => $context["value_receipt_number_save"]) {
            echo "  
        ";
            // line 52
            $context["receipt_number_manual_savin"] = $context["value_receipt_number_save"];
            // line 53
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_receipt_number_save'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_manual_saving"]) || array_key_exists("form_ku_dir_manual_saving", $context) ? $context["form_ku_dir_manual_saving"] : (function () { throw new RuntimeError('Variable "form_ku_dir_manual_saving" does not exist.', 54, $this->source); })()), "receipt_number_save", [], "any", false, false, false, 54), 'label');
        echo "<br>
        ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_manual_saving"]) || array_key_exists("form_ku_dir_manual_saving", $context) ? $context["form_ku_dir_manual_saving"] : (function () { throw new RuntimeError('Variable "form_ku_dir_manual_saving" does not exist.', 55, $this->source); })()), "receipt_number_save", [], "any", false, false, false, 55), 'widget', ["value" =>         // line 56
(isset($context["receipt_number_manual_savin"]) || array_key_exists("receipt_number_manual_savin", $context) ? $context["receipt_number_manual_savin"] : (function () { throw new RuntimeError('Variable "receipt_number_manual_savin" does not exist.', 56, $this->source); })())]);
        echo "
        ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_manual_saving"]) || array_key_exists("form_ku_dir_manual_saving", $context) ? $context["form_ku_dir_manual_saving"] : (function () { throw new RuntimeError('Variable "form_ku_dir_manual_saving" does not exist.', 57, $this->source); })()), "receipt_number_save", [], "any", false, false, false, 57), 'errors');
        echo "</th> 

        ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "flashes", ["receipt_date_save"], "method", false, false, false, 59));
        foreach ($context['_seq'] as $context["_key"] => $context["value_receipt_date_save"]) {
            echo "  
        ";
            // line 60
            $context["receipt_date_manual_savin"] = $context["value_receipt_date_save"];
            // line 61
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_receipt_date_save'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_manual_saving"]) || array_key_exists("form_ku_dir_manual_saving", $context) ? $context["form_ku_dir_manual_saving"] : (function () { throw new RuntimeError('Variable "form_ku_dir_manual_saving" does not exist.', 62, $this->source); })()), "receipt_date_save", [], "any", false, false, false, 62), 'label');
        echo "<br>
        ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_manual_saving"]) || array_key_exists("form_ku_dir_manual_saving", $context) ? $context["form_ku_dir_manual_saving"] : (function () { throw new RuntimeError('Variable "form_ku_dir_manual_saving" does not exist.', 63, $this->source); })()), "receipt_date_save", [], "any", false, false, false, 63), 'widget', ["value" =>         // line 64
(isset($context["receipt_date_manual_savin"]) || array_key_exists("receipt_date_manual_savin", $context) ? $context["receipt_date_manual_savin"] : (function () { throw new RuntimeError('Variable "receipt_date_manual_savin" does not exist.', 64, $this->source); })())]);
        echo "
        ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_manual_saving"]) || array_key_exists("form_ku_dir_manual_saving", $context) ? $context["form_ku_dir_manual_saving"] : (function () { throw new RuntimeError('Variable "form_ku_dir_manual_saving" does not exist.', 65, $this->source); })()), "receipt_date_save", [], "any", false, false, false, 65), 'errors');
        echo "</th>

        ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "flashes", ["coming_save"], "method", false, false, false, 67));
        foreach ($context['_seq'] as $context["_key"] => $context["value_coming_save"]) {
            echo "  
        ";
            // line 68
            $context["coming_manual_savin"] = $context["value_coming_save"];
            // line 69
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_coming_save'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_manual_saving"]) || array_key_exists("form_ku_dir_manual_saving", $context) ? $context["form_ku_dir_manual_saving"] : (function () { throw new RuntimeError('Variable "form_ku_dir_manual_saving" does not exist.', 70, $this->source); })()), "coming_save", [], "any", false, false, false, 70), 'label');
        echo "<br>
        ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_manual_saving"]) || array_key_exists("form_ku_dir_manual_saving", $context) ? $context["form_ku_dir_manual_saving"] : (function () { throw new RuntimeError('Variable "form_ku_dir_manual_saving" does not exist.', 71, $this->source); })()), "coming_save", [], "any", false, false, false, 71), 'widget', ["value" =>         // line 72
(isset($context["coming_manual_savin"]) || array_key_exists("coming_manual_savin", $context) ? $context["coming_manual_savin"] : (function () { throw new RuntimeError('Variable "coming_manual_savin" does not exist.', 72, $this->source); })())]);
        echo "
        ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_manual_saving"]) || array_key_exists("form_ku_dir_manual_saving", $context) ? $context["form_ku_dir_manual_saving"] : (function () { throw new RuntimeError('Variable "form_ku_dir_manual_saving" does not exist.', 73, $this->source); })()), "coming_save", [], "any", false, false, false, 73), 'errors');
        echo "</th> 

        ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 75, $this->source); })()), "flashes", ["expenditure_save"], "method", false, false, false, 75));
        foreach ($context['_seq'] as $context["_key"] => $context["value_expenditure_save"]) {
            echo "  
        ";
            // line 76
            $context["expenditure_manual_savin"] = $context["value_expenditure_save"];
            // line 77
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_expenditure_save'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_manual_saving"]) || array_key_exists("form_ku_dir_manual_saving", $context) ? $context["form_ku_dir_manual_saving"] : (function () { throw new RuntimeError('Variable "form_ku_dir_manual_saving" does not exist.', 78, $this->source); })()), "expenditure_save", [], "any", false, false, false, 78), 'label');
        echo "<br>
        ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_manual_saving"]) || array_key_exists("form_ku_dir_manual_saving", $context) ? $context["form_ku_dir_manual_saving"] : (function () { throw new RuntimeError('Variable "form_ku_dir_manual_saving" does not exist.', 79, $this->source); })()), "expenditure_save", [], "any", false, false, false, 79), 'widget', ["value" =>         // line 80
(isset($context["expenditure_manual_savin"]) || array_key_exists("expenditure_manual_savin", $context) ? $context["expenditure_manual_savin"] : (function () { throw new RuntimeError('Variable "expenditure_manual_savin" does not exist.', 80, $this->source); })())]);
        echo "<br>
        ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 81, $this->source); })()), "flashes", ["children[expenditure_save]"], "method", false, false, false, 81));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 82
            echo "        ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_manual_saving"]) || array_key_exists("form_ku_dir_manual_saving", $context) ? $context["form_ku_dir_manual_saving"] : (function () { throw new RuntimeError('Variable "form_ku_dir_manual_saving" does not exist.', 84, $this->source); })()), "expenditure_save", [], "any", false, false, false, 84), 'errors');
        echo "</th> 

        <th>";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_manual_saving"]) || array_key_exists("form_ku_dir_manual_saving", $context) ? $context["form_ku_dir_manual_saving"] : (function () { throw new RuntimeError('Variable "form_ku_dir_manual_saving" does not exist.', 86, $this->source); })()), "button_save_ku_dir", [], "any", false, false, false, 86), 'widget', ["label" => "Сохранить в КуДир", "attr" => ["class" => "save"]]);
        // line 87
        echo "</th>
        
    ";
        // line 89
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_ku_dir_manual_saving"]) || array_key_exists("form_ku_dir_manual_saving", $context) ? $context["form_ku_dir_manual_saving"] : (function () { throw new RuntimeError('Variable "form_ku_dir_manual_saving" does not exist.', 89, $this->source); })()), 'form_end');
        echo "

    </tr>
    
    <tr>
    ";
        // line 95
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_ku_dir_invoice_search"]) || array_key_exists("form_ku_dir_invoice_search", $context) ? $context["form_ku_dir_invoice_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_invoice_search" does not exist.', 95, $this->source); })()), 'form_start');
        echo "
";
        // line 97
        echo "        ";
        // line 98
        echo "        ";
        $context["number_document_search_ku_dir"] = "";
        // line 99
        echo "        ";
        $context["from__data_invoice_search_ku_dir"] = "";
        // line 100
        echo "        ";
        $context["by_data_invoice_search_ku_dir"] = "";
        // line 101
        echo "        ";
        $context["counterparty_search_ku_dir"] = "";
        // line 102
        echo "        ";
        $context["details_search_ku_dir"] = "";
        // line 103
        echo "        ";
        $context["manufacturer_search_ku_dir"] = "";
        // line 104
        echo "        ";
        $context["from__price_search_ku_dir"] = "";
        // line 105
        echo "        ";
        $context["by_price_search_ku_dir"] = "";
        // line 106
        echo "
        ";
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 107, $this->source); })()), "flashes", ["search_number_document_invoice_ku_dir"], "method", false, false, false, 107));
        foreach ($context['_seq'] as $context["_key"] => $context["value_number_document_search"]) {
            echo "  
        ";
            // line 108
            $context["number_document_search_ku_dir"] = $context["value_number_document_search"];
            // line 109
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_number_document_search'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_invoice_search"]) || array_key_exists("form_ku_dir_invoice_search", $context) ? $context["form_ku_dir_invoice_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_invoice_search" does not exist.', 110, $this->source); })()), "search_number_document_invoice_ku_dir", [], "any", false, false, false, 110), 'label');
        echo "<br>
        ";
        // line 111
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_invoice_search"]) || array_key_exists("form_ku_dir_invoice_search", $context) ? $context["form_ku_dir_invoice_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_invoice_search" does not exist.', 111, $this->source); })()), "search_number_document_invoice_ku_dir", [], "any", false, false, false, 111), 'widget', ["value" =>         // line 112
(isset($context["number_document_search_ku_dir"]) || array_key_exists("number_document_search_ku_dir", $context) ? $context["number_document_search_ku_dir"] : (function () { throw new RuntimeError('Variable "number_document_search_ku_dir" does not exist.', 112, $this->source); })())]);
        echo "<br>
        ";
        // line 113
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_invoice_search"]) || array_key_exists("form_ku_dir_invoice_search", $context) ? $context["form_ku_dir_invoice_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_invoice_search" does not exist.', 113, $this->source); })()), "search_number_document_invoice_ku_dir", [], "any", false, false, false, 113), 'errors');
        echo "</th>

        ";
        // line 115
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 115, $this->source); })()), "flashes", ["from_data_invoice_ku_dir"], "method", false, false, false, 115));
        foreach ($context['_seq'] as $context["_key"] => $context["value_data_invoice_search"]) {
            echo "  
        ";
            // line 116
            $context["from__data_invoice_search_ku_dir"] = $context["value_data_invoice_search"];
            // line 117
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_data_invoice_search'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_invoice_search"]) || array_key_exists("form_ku_dir_invoice_search", $context) ? $context["form_ku_dir_invoice_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_invoice_search" does not exist.', 118, $this->source); })()), "from_data_invoice_ku_dir", [], "any", false, false, false, 118), 'label');
        echo "<br>
        ";
        // line 119
        echo "с ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_invoice_search"]) || array_key_exists("form_ku_dir_invoice_search", $context) ? $context["form_ku_dir_invoice_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_invoice_search" does not exist.', 119, $this->source); })()), "from_data_invoice_ku_dir", [], "any", false, false, false, 119), 'widget', ["value" =>         // line 120
(isset($context["from__data_invoice_search_ku_dir"]) || array_key_exists("from__data_invoice_search_ku_dir", $context) ? $context["from__data_invoice_search_ku_dir"] : (function () { throw new RuntimeError('Variable "from__data_invoice_search_ku_dir" does not exist.', 120, $this->source); })())]);
        echo "
        ";
        // line 121
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_invoice_search"]) || array_key_exists("form_ku_dir_invoice_search", $context) ? $context["form_ku_dir_invoice_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_invoice_search" does not exist.', 121, $this->source); })()), "from_data_invoice_ku_dir", [], "any", false, false, false, 121), 'errors');
        echo "<br>
        ";
        // line 122
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 122, $this->source); })()), "flashes", ["by_data_invoice_ku_dir"], "method", false, false, false, 122));
        foreach ($context['_seq'] as $context["_key"] => $context["value_price"]) {
            echo "  
        ";
            // line 123
            $context["by_data_invoice_search_ku_dir"] = $context["value_price"];
            // line 124
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_price'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        echo "        ";
        echo "по ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_invoice_search"]) || array_key_exists("form_ku_dir_invoice_search", $context) ? $context["form_ku_dir_invoice_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_invoice_search" does not exist.', 125, $this->source); })()), "by_data_invoice_ku_dir", [], "any", false, false, false, 125), 'widget', ["value" =>         // line 126
(isset($context["by_data_invoice_search_ku_dir"]) || array_key_exists("by_data_invoice_search_ku_dir", $context) ? $context["by_data_invoice_search_ku_dir"] : (function () { throw new RuntimeError('Variable "by_data_invoice_search_ku_dir" does not exist.', 126, $this->source); })())]);
        echo "<br>
        ";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_invoice_search"]) || array_key_exists("form_ku_dir_invoice_search", $context) ? $context["form_ku_dir_invoice_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_invoice_search" does not exist.', 127, $this->source); })()), "by_data_invoice_ku_dir", [], "any", false, false, false, 127), 'errors');
        echo "</th>

        ";
        // line 129
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 129, $this->source); })()), "flashes", ["search_id_counterparty_invoice_ku_dir"], "method", false, false, false, 129));
        foreach ($context['_seq'] as $context["_key"] => $context["value_id_counterparty_search"]) {
            echo "  
        ";
            // line 130
            $context["counterparty_search_ku_dir"] = $context["value_id_counterparty_search"];
            // line 131
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_id_counterparty_search'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_invoice_search"]) || array_key_exists("form_ku_dir_invoice_search", $context) ? $context["form_ku_dir_invoice_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_invoice_search" does not exist.', 132, $this->source); })()), "search_id_counterparty_invoice_ku_dir", [], "any", false, false, false, 132), 'label');
        echo "<br>
        ";
        // line 133
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_invoice_search"]) || array_key_exists("form_ku_dir_invoice_search", $context) ? $context["form_ku_dir_invoice_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_invoice_search" does not exist.', 133, $this->source); })()), "search_id_counterparty_invoice_ku_dir", [], "any", false, false, false, 133), 'widget', ["value" =>         // line 134
(isset($context["counterparty_search_ku_dir"]) || array_key_exists("counterparty_search_ku_dir", $context) ? $context["counterparty_search_ku_dir"] : (function () { throw new RuntimeError('Variable "counterparty_search_ku_dir" does not exist.', 134, $this->source); })())]);
        echo "
        ";
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_invoice_search"]) || array_key_exists("form_ku_dir_invoice_search", $context) ? $context["form_ku_dir_invoice_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_invoice_search" does not exist.', 135, $this->source); })()), "search_id_counterparty_invoice_ku_dir", [], "any", false, false, false, 135), 'errors');
        echo "</th>

        ";
        // line 137
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 137, $this->source); })()), "flashes", ["search_id_details_invoice_ku_dir"], "method", false, false, false, 137));
        foreach ($context['_seq'] as $context["_key"] => $context["value_id_details_search"]) {
            echo "  
        ";
            // line 138
            $context["details_search_ku_dir"] = $context["value_id_details_search"];
            // line 139
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_id_details_search'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 140
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_invoice_search"]) || array_key_exists("form_ku_dir_invoice_search", $context) ? $context["form_ku_dir_invoice_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_invoice_search" does not exist.', 140, $this->source); })()), "search_id_details_invoice_ku_dir", [], "any", false, false, false, 140), 'label');
        echo "<br>
        ";
        // line 141
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_invoice_search"]) || array_key_exists("form_ku_dir_invoice_search", $context) ? $context["form_ku_dir_invoice_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_invoice_search" does not exist.', 141, $this->source); })()), "search_id_details_invoice_ku_dir", [], "any", false, false, false, 141), 'widget', ["value" =>         // line 142
(isset($context["details_search_ku_dir"]) || array_key_exists("details_search_ku_dir", $context) ? $context["details_search_ku_dir"] : (function () { throw new RuntimeError('Variable "details_search_ku_dir" does not exist.', 142, $this->source); })())]);
        echo "<br>
        ";
        // line 143
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_invoice_search"]) || array_key_exists("form_ku_dir_invoice_search", $context) ? $context["form_ku_dir_invoice_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_invoice_search" does not exist.', 143, $this->source); })()), "search_id_details_invoice_ku_dir", [], "any", false, false, false, 143), 'errors');
        echo "</th>

        ";
        // line 145
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 145, $this->source); })()), "flashes", ["search_id_manufacturer_invoice_ku_dir"], "method", false, false, false, 145));
        foreach ($context['_seq'] as $context["_key"] => $context["value_id_manufacturer_search"]) {
            echo "  
        ";
            // line 146
            $context["manufacturer_search_ku_dir"] = $context["value_id_manufacturer_search"];
            // line 147
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_id_manufacturer_search'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 148
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_invoice_search"]) || array_key_exists("form_ku_dir_invoice_search", $context) ? $context["form_ku_dir_invoice_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_invoice_search" does not exist.', 148, $this->source); })()), "search_id_manufacturer_invoice_ku_dir", [], "any", false, false, false, 148), 'label');
        echo "<br>
        ";
        // line 149
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_invoice_search"]) || array_key_exists("form_ku_dir_invoice_search", $context) ? $context["form_ku_dir_invoice_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_invoice_search" does not exist.', 149, $this->source); })()), "search_id_manufacturer_invoice_ku_dir", [], "any", false, false, false, 149), 'widget', ["value" =>         // line 150
(isset($context["manufacturer_search_ku_dir"]) || array_key_exists("manufacturer_search_ku_dir", $context) ? $context["manufacturer_search_ku_dir"] : (function () { throw new RuntimeError('Variable "manufacturer_search_ku_dir" does not exist.', 150, $this->source); })())]);
        echo "<br>
        ";
        // line 151
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_invoice_search"]) || array_key_exists("form_ku_dir_invoice_search", $context) ? $context["form_ku_dir_invoice_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_invoice_search" does not exist.', 151, $this->source); })()), "search_id_manufacturer_invoice_ku_dir", [], "any", false, false, false, 151), 'errors');
        echo "</th>

        ";
        // line 153
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 153, $this->source); })()), "flashes", ["from_price_invoice_ku_dir"], "method", false, false, false, 153));
        foreach ($context['_seq'] as $context["_key"] => $context["value_s_price_search"]) {
            echo "  
        ";
            // line 154
            $context["from__price_search_ku_dir"] = $context["value_s_price_search"];
            // line 155
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_s_price_search'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 156
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_invoice_search"]) || array_key_exists("form_ku_dir_invoice_search", $context) ? $context["form_ku_dir_invoice_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_invoice_search" does not exist.', 156, $this->source); })()), "from_price_invoice_ku_dir", [], "any", false, false, false, 156), 'label');
        echo "<br>
        ";
        // line 157
        echo "с ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_invoice_search"]) || array_key_exists("form_ku_dir_invoice_search", $context) ? $context["form_ku_dir_invoice_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_invoice_search" does not exist.', 157, $this->source); })()), "from_price_invoice_ku_dir", [], "any", false, false, false, 157), 'widget', ["value" =>         // line 158
(isset($context["from__price_search_ku_dir"]) || array_key_exists("from__price_search_ku_dir", $context) ? $context["from__price_search_ku_dir"] : (function () { throw new RuntimeError('Variable "from__price_search_ku_dir" does not exist.', 158, $this->source); })())]);
        echo "
        ";
        // line 159
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_invoice_search"]) || array_key_exists("form_ku_dir_invoice_search", $context) ? $context["form_ku_dir_invoice_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_invoice_search" does not exist.', 159, $this->source); })()), "from_price_invoice_ku_dir", [], "any", false, false, false, 159), 'errors');
        echo "<br>
        ";
        // line 160
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 160, $this->source); })()), "flashes", ["by_price_invoice_ku_dir"], "method", false, false, false, 160));
        foreach ($context['_seq'] as $context["_key"] => $context["value_po_price_search"]) {
            echo "  
        ";
            // line 161
            $context["by_price_search_ku_dir"] = $context["value_po_price_search"];
            // line 162
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_po_price_search'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        echo "        ";
        echo "по ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_invoice_search"]) || array_key_exists("form_ku_dir_invoice_search", $context) ? $context["form_ku_dir_invoice_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_invoice_search" does not exist.', 163, $this->source); })()), "by_price_invoice_ku_dir", [], "any", false, false, false, 163), 'widget', ["value" =>         // line 164
(isset($context["by_price_search_ku_dir"]) || array_key_exists("by_price_search_ku_dir", $context) ? $context["by_price_search_ku_dir"] : (function () { throw new RuntimeError('Variable "by_price_search_ku_dir" does not exist.', 164, $this->source); })())]);
        echo "<br>
        ";
        // line 165
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_invoice_search"]) || array_key_exists("form_ku_dir_invoice_search", $context) ? $context["form_ku_dir_invoice_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_invoice_search" does not exist.', 165, $this->source); })()), "by_price_invoice_ku_dir", [], "any", false, false, false, 165), 'errors');
        echo "</th>

        <th>";
        // line 167
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_invoice_search"]) || array_key_exists("form_ku_dir_invoice_search", $context) ? $context["form_ku_dir_invoice_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_invoice_search" does not exist.', 167, $this->source); })()), "button_search_invoice_ku_dir", [], "any", false, false, false, 167), 'widget', ["label" => "Поиск счет-фактуру", "attr" => ["class" => "search"]]);
        // line 168
        echo "</th>
        
    ";
        // line 170
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_ku_dir_invoice_search"]) || array_key_exists("form_ku_dir_invoice_search", $context) ? $context["form_ku_dir_invoice_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_invoice_search" does not exist.', 170, $this->source); })()), 'form_end');
        echo "
    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 174
    public function block_table_total_amount($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_total_amount"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_total_amount"));

        // line 175
        echo "    ";
        if ((isset($context["arr_ku_dir"]) || array_key_exists("arr_ku_dir", $context) ? $context["arr_ku_dir"] : (function () { throw new RuntimeError('Variable "arr_ku_dir" does not exist.', 175, $this->source); })())) {
            // line 176
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

    // line 187
    public function block_tbody_total_amount($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tbody_total_amount"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tbody_total_amount"));

        // line 189
        echo "
";
        // line 191
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["arr_ku_dir"]) || array_key_exists("arr_ku_dir", $context) ? $context["arr_ku_dir"] : (function () { throw new RuntimeError('Variable "arr_ku_dir" does not exist.', 191, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["list_ku_dir"]) {
            // line 192
            echo "        ";
            if ($context["list_ku_dir"]) {
                // line 193
                echo "            ";
                $context["expenditure_total_amount"] = 0;
                // line 194
                echo "            ";
                $context["remains"] = 0;
                // line 195
                echo "            <tr>
                <td>&nbsp;";
                // line 196
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list_ku_dir"], "getId", [], "method", false, false, false, 196), "html", null, true);
                echo "</td>

                <td>&nbsp;";
                // line 198
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list_ku_dir"], "getReceiptChange", [], "method", false, false, false, 198), "html", null, true);
                echo "</td>

                <td>&nbsp;";
                // line 200
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list_ku_dir"], "getReceiptNumber", [], "method", false, false, false, 200), "html", null, true);
                echo "</td>

                <td>&nbsp;";
                // line 202
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list_ku_dir"], "getReceiptDate", [], "method", false, false, false, 202), "d-m-Y"), "html", null, true);
                echo "</td>

                <td>&nbsp;";
                // line 204
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list_ku_dir"], "getComing", [], "method", false, false, false, 204), "html", null, true);
                echo "</td>

                ";
                // line 206
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["arr_total_amount_expenditure"]) || array_key_exists("arr_total_amount_expenditure", $context) ? $context["arr_total_amount_expenditure"] : (function () { throw new RuntimeError('Variable "arr_total_amount_expenditure" does not exist.', 206, $this->source); })()));
                foreach ($context['_seq'] as $context["key"] => $context["total_amount_expenditure"]) {
                    // line 207
                    echo "
                    ";
                    // line 208
                    if ((twig_get_attribute($this->env, $this->source, $context["list_ku_dir"], "getId", [], "method", false, false, false, 208) == $context["key"])) {
                        // line 209
                        echo "
                        ";
                        // line 210
                        $context["expenditure_total_amount"] = $context["total_amount_expenditure"];
                        // line 211
                        echo "
                    ";
                    }
                    // line 212
                    echo "        
                    
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['total_amount_expenditure'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 214
                echo "  
                <td>&nbsp;";
                // line 215
                echo twig_escape_filter($this->env, (isset($context["expenditure_total_amount"]) || array_key_exists("expenditure_total_amount", $context) ? $context["expenditure_total_amount"] : (function () { throw new RuntimeError('Variable "expenditure_total_amount" does not exist.', 215, $this->source); })()), "html", null, true);
                echo "</td>

                ";
                // line 217
                if (((isset($context["expenditure_total_amount"]) || array_key_exists("expenditure_total_amount", $context) ? $context["expenditure_total_amount"] : (function () { throw new RuntimeError('Variable "expenditure_total_amount" does not exist.', 217, $this->source); })()) != 0)) {
                    // line 218
                    echo "
                    ";
                    // line 219
                    $context["remains"] = (twig_get_attribute($this->env, $this->source, $context["list_ku_dir"], "getComing", [], "method", false, false, false, 219) - (isset($context["expenditure_total_amount"]) || array_key_exists("expenditure_total_amount", $context) ? $context["expenditure_total_amount"] : (function () { throw new RuntimeError('Variable "expenditure_total_amount" does not exist.', 219, $this->source); })()));
                    // line 220
                    echo "
                ";
                }
                // line 221
                echo " 

                <td>&nbsp;";
                // line 223
                echo twig_escape_filter($this->env, (isset($context["remains"]) || array_key_exists("remains", $context) ? $context["remains"] : (function () { throw new RuntimeError('Variable "remains" does not exist.', 223, $this->source); })()), "html", null, true);
                echo "</td>

                <form action=\"/ku_dir_save\" name=\"ku_dir_save\" method=\"post\">

                    <input type=\"hidden\" name=\"id_ku_dir\" value=\"";
                // line 227
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list_ku_dir"], "getId", [], "method", false, false, false, 227), "html", null, true);
                echo "\"></input>

                    <td><button class=\"save\" type=\"submit\" name=\"expenditure\" 
                        value=\"";
                // line 230
                echo twig_escape_filter($this->env, (isset($context["expenditure_total_amount"]) || array_key_exists("expenditure_total_amount", $context) ? $context["expenditure_total_amount"] : (function () { throw new RuntimeError('Variable "expenditure_total_amount" does not exist.', 230, $this->source); })()), "html", null, true);
                echo "\">Сохранить</button></td>
                                
                </form>

            </tr> 
                                     
        ";
            }
            // line 237
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['list_ku_dir'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 240
    public function block_table_ku_dir_invoice($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_ku_dir_invoice"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_ku_dir_invoice"));

        // line 241
        echo "    ";
        if ((isset($context["arr_invoice_id_ku_dir"]) || array_key_exists("arr_invoice_id_ku_dir", $context) ? $context["arr_invoice_id_ku_dir"] : (function () { throw new RuntimeError('Variable "arr_invoice_id_ku_dir" does not exist.', 241, $this->source); })())) {
            // line 242
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

    // line 256
    public function block_tbody_ku_dir_invoice($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tbody_ku_dir_invoice"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tbody_ku_dir_invoice"));

        // line 257
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["arr_invoice_id_ku_dir"]) || array_key_exists("arr_invoice_id_ku_dir", $context) ? $context["arr_invoice_id_ku_dir"] : (function () { throw new RuntimeError('Variable "arr_invoice_id_ku_dir" does not exist.', 257, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["list_invoice_id_ku_dir"]) {
            // line 258
            echo "        ";
            if ($context["list_invoice_id_ku_dir"]) {
                echo "              
            <tr>
                <td>&nbsp;";
                // line 260
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list_invoice_id_ku_dir"], "getNumberDocument", [], "method", false, false, false, 260), "html", null, true);
                echo "</td>

                <td>&nbsp;";
                // line 262
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list_invoice_id_ku_dir"], "getDataInvoice", [], "method", false, false, false, 262), "d-m-Y"), "html", null, true);
                echo "</td>

                <td>&nbsp;";
                // line 264
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["list_invoice_id_ku_dir"], "getIdCounterparty", [], "method", false, false, false, 264), "getCounterparty", [], "method", false, false, false, 264), "html", null, true);
                echo "</td>

                <td>&nbsp;";
                // line 266
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["list_invoice_id_ku_dir"], "getIdDetails", [], "method", false, false, false, 266), "getPartNumbers", [], "method", false, false, false, 266), "html", null, true);
                echo "</td>

                <td>&nbsp;";
                // line 268
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["list_invoice_id_ku_dir"], "getIdManufacturer", [], "method", false, false, false, 268), "getManufacturers", [], "method", false, false, false, 268), "html", null, true);
                echo "</td>

                <td>&nbsp;";
                // line 270
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list_invoice_id_ku_dir"], "getQuantity", [], "method", false, false, false, 270), "html", null, true);
                echo "</td>

                <td>&nbsp;";
                // line 272
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["list_invoice_id_ku_dir"], "getPrice", [], "method", false, false, false, 272) / 100), 2, ".", ""), "html", null, true);
                echo "</td>

                <td>&nbsp;";
                // line 274
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["list_invoice_id_ku_dir"], "getIdKuDir", [], "method", false, false, false, 274), "getId", [], "method", false, false, false, 274), "html", null, true);
                echo "</td>

                <form action=\"/delete_list_invoice_id_ku_dir\" name=\"delete_list_invoice_id_ku_dir\" method=\"post\">

                    <td><button class=\"delete\" type=\"submit\" name=\"id_invoice\" 
                        value=\"";
                // line 279
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list_invoice_id_ku_dir"], "getId", [], "method", false, false, false, 279), "html", null, true);
                echo "\">Удалить</button></td>
                                
                </form>

            </tr>  
        ";
            }
            // line 285
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['list_invoice_id_ku_dir'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 288
    public function block_table_thead_tr($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_thead_tr"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_thead_tr"));

        // line 290
        echo "    ";
        if ((isset($context["arr_invoice_ku_dir"]) || array_key_exists("arr_invoice_ku_dir", $context) ? $context["arr_invoice_ku_dir"] : (function () { throw new RuntimeError('Variable "arr_invoice_ku_dir" does not exist.', 290, $this->source); })())) {
            // line 291
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

    // line 305
    public function block_tbody($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tbody"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tbody"));

        // line 307
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["arr_invoice_ku_dir"]) || array_key_exists("arr_invoice_ku_dir", $context) ? $context["arr_invoice_ku_dir"] : (function () { throw new RuntimeError('Variable "arr_invoice_ku_dir" does not exist.', 307, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["list_invoice_ku_dir"]) {
            // line 308
            echo "        ";
            if ($context["list_invoice_ku_dir"]) {
                // line 309
                echo "               
            <tr>
                <td>&nbsp;";
                // line 311
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list_invoice_ku_dir"], "getNumberDocument", [], "method", false, false, false, 311), "html", null, true);
                echo "</td>

                <td>&nbsp;";
                // line 313
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list_invoice_ku_dir"], "getDataInvoice", [], "method", false, false, false, 313), "d-m-Y"), "html", null, true);
                echo "</td>

                <td>&nbsp;";
                // line 315
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["list_invoice_ku_dir"], "getIdCounterparty", [], "method", false, false, false, 315), "getCounterparty", [], "method", false, false, false, 315), "html", null, true);
                echo "</td>

                <td>&nbsp;";
                // line 317
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["list_invoice_ku_dir"], "getIdDetails", [], "method", false, false, false, 317), "getPartNumbers", [], "method", false, false, false, 317), "html", null, true);
                echo "</td>

                <td>&nbsp;";
                // line 319
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["list_invoice_ku_dir"], "getIdManufacturer", [], "method", false, false, false, 319), "getManufacturers", [], "method", false, false, false, 319), "html", null, true);
                echo "</td>

                <td>&nbsp;";
                // line 321
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list_invoice_ku_dir"], "getQuantity", [], "method", false, false, false, 321), "html", null, true);
                echo "</td>

                <td>&nbsp;";
                // line 323
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["list_invoice_ku_dir"], "getPrice", [], "method", false, false, false, 323) / 100), 2, ".", ""), "html", null, true);
                echo "</td>

                <form action=\"/id_ku_dir_save\" name=\"id_ku_dir_save\" method=\"post\">

                    <td><input type=\"number\" name=\"id_ku_dir\"></td>

                    <td><button class=\"save\" type=\"submit\" name=\"id_invoice\" 
                        value=\"";
                // line 330
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list_invoice_ku_dir"], "getId", [], "method", false, false, false, 330), "html", null, true);
                echo "\">КуДир</button></td>
                                
                </form>
            </tr> 
                    
                
        ";
            } else {
                // line 337
                echo "            <h2>Данные не найдены. Видите параметры в Поиск счет-фактуру</h2>  
        ";
            }
            // line 339
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
        return array (  1101 => 339,  1097 => 337,  1087 => 330,  1077 => 323,  1072 => 321,  1067 => 319,  1062 => 317,  1057 => 315,  1052 => 313,  1047 => 311,  1043 => 309,  1040 => 308,  1035 => 307,  1025 => 305,  1003 => 291,  1000 => 290,  990 => 288,  976 => 285,  967 => 279,  959 => 274,  954 => 272,  949 => 270,  944 => 268,  939 => 266,  934 => 264,  929 => 262,  924 => 260,  918 => 258,  913 => 257,  903 => 256,  881 => 242,  878 => 241,  868 => 240,  854 => 237,  844 => 230,  838 => 227,  831 => 223,  827 => 221,  823 => 220,  821 => 219,  818 => 218,  816 => 217,  811 => 215,  808 => 214,  800 => 212,  796 => 211,  794 => 210,  791 => 209,  789 => 208,  786 => 207,  782 => 206,  777 => 204,  772 => 202,  767 => 200,  762 => 198,  757 => 196,  754 => 195,  751 => 194,  748 => 193,  745 => 192,  740 => 191,  737 => 189,  727 => 187,  708 => 176,  705 => 175,  695 => 174,  682 => 170,  678 => 168,  676 => 167,  671 => 165,  667 => 164,  664 => 163,  658 => 162,  656 => 161,  650 => 160,  646 => 159,  642 => 158,  640 => 157,  635 => 156,  629 => 155,  627 => 154,  621 => 153,  616 => 151,  612 => 150,  611 => 149,  606 => 148,  600 => 147,  598 => 146,  592 => 145,  587 => 143,  583 => 142,  582 => 141,  577 => 140,  571 => 139,  569 => 138,  563 => 137,  558 => 135,  554 => 134,  553 => 133,  548 => 132,  542 => 131,  540 => 130,  534 => 129,  529 => 127,  525 => 126,  522 => 125,  516 => 124,  514 => 123,  508 => 122,  504 => 121,  500 => 120,  498 => 119,  493 => 118,  487 => 117,  485 => 116,  479 => 115,  474 => 113,  470 => 112,  469 => 111,  464 => 110,  458 => 109,  456 => 108,  450 => 107,  447 => 106,  444 => 105,  441 => 104,  438 => 103,  435 => 102,  432 => 101,  429 => 100,  426 => 99,  423 => 98,  421 => 97,  416 => 95,  408 => 89,  404 => 87,  402 => 86,  396 => 84,  387 => 82,  383 => 81,  379 => 80,  378 => 79,  373 => 78,  367 => 77,  365 => 76,  359 => 75,  354 => 73,  350 => 72,  349 => 71,  344 => 70,  338 => 69,  336 => 68,  330 => 67,  325 => 65,  321 => 64,  320 => 63,  315 => 62,  309 => 61,  307 => 60,  301 => 59,  296 => 57,  292 => 56,  291 => 55,  286 => 54,  280 => 53,  278 => 52,  272 => 51,  267 => 49,  263 => 48,  262 => 47,  257 => 46,  251 => 45,  249 => 44,  243 => 43,  240 => 42,  237 => 41,  234 => 40,  231 => 39,  228 => 38,  225 => 37,  220 => 35,  217 => 33,  212 => 31,  207 => 29,  204 => 28,  202 => 27,  199 => 26,  191 => 25,  184 => 24,  174 => 23,  155 => 12,  145 => 11,  126 => 9,  107 => 7,  88 => 5,  69 => 3,  46 => 1,);
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
    {% for message in app.flashes('error_сount_receipt_change_number') %}  
       <h2> {{ message }}</h2> 
    {% endfor %} 
     {% if last_check %}
        <th>Последний чек<br>Смена Номер<br>
            {{ last_check[0].getReceiptChange() }} 
             &nbsp; &nbsp; &nbsp; : &nbsp; &nbsp; &nbsp;
                {{ last_check[0].getReceiptNumber() }}</th>
    {% endif %}
        
    {#Форма сохранения в КуДир#}
    {{ form_start(form_ku_dir_manual_saving, {'action': path('ku_dir_manual_saving')}) }}
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
            {value : expenditure_manual_savin}) }}<br>
        {% for message in app.flashes('children[expenditure_save]') %}
        {{ message }}
        {% endfor %}
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
