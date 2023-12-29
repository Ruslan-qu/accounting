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

/* sales/sales.html.twig */
class __TwigTemplate_2b0d693e5fcf8a97c64dca9ddf24d937 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sales/sales.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sales/sales.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "sales/sales.html.twig", 1);
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 13
    public function block_form_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_search"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_search"));

        // line 14
        echo "    ";
        // line 15
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_sales_search"]) || array_key_exists("form_sales_search", $context) ? $context["form_sales_search"] : (function () { throw new RuntimeError('Variable "form_sales_search" does not exist.', 15, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sales")]);
        echo "
        ";
        // line 17
        echo "        ";
        $context["search_sales_part_numbers"] = "";
        // line 18
        echo "        ";
        $context["search_sales_id_original_number"] = "";
        // line 19
        echo "        ";
        $context["search_sales_manufacturers"] = "";
        // line 20
        echo "        ";
        $context["search_id_counterparty"] = "";
        // line 21
        echo "        ";
        $context["search_id_payment_method"] = "";
        // line 22
        echo "        ";
        $context["search_sales_id_part_name"] = "";
        // line 23
        echo "        ";
        $context["search_sales_id_car_brand"] = "";
        // line 24
        echo "        ";
        $context["search_sales_id_side"] = "";
        // line 25
        echo "        ";
        $context["search_sales_id_body"] = "";
        // line 26
        echo "        ";
        $context["search_sales_id_axle"] = "";
        // line 27
        echo "        ";
        $context["s_data_sales_search"] = "";
        // line 28
        echo "        ";
        $context["po_data_sales_search"] = "";
        // line 29
        echo "        ";
        $context["s_price_sales_search"] = "";
        // line 30
        echo "        ";
        $context["po_price_sales_search"] = "";
        // line 31
        echo "
        ";
        // line 32
        $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sales_search"]) || array_key_exists("form_sales_search", $context) ? $context["form_sales_search"] : (function () { throw new RuntimeError('Variable "form_sales_search" does not exist.', 32, $this->source); })()), "quantity_sales", [], "any", false, false, false, 32), 'widget');
        // line 33
        echo "
        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "flashes", ["part_numbers_sales_search"], "method", false, false, false, 34));
        foreach ($context['_seq'] as $context["_key"] => $context["value_part_numbers"]) {
            echo "  
            ";
            // line 35
            $context["search_sales_part_numbers"] = $context["value_part_numbers"];
            // line 36
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_part_numbers'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sales_search"]) || array_key_exists("form_sales_search", $context) ? $context["form_sales_search"] : (function () { throw new RuntimeError('Variable "form_sales_search" does not exist.', 37, $this->source); })()), "part_numbers_sales", [], "any", false, false, false, 37), 'label');
        echo "<br>
        ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sales_search"]) || array_key_exists("form_sales_search", $context) ? $context["form_sales_search"] : (function () { throw new RuntimeError('Variable "form_sales_search" does not exist.', 38, $this->source); })()), "part_numbers_sales", [], "any", false, false, false, 38), 'widget', ["value" => (isset($context["search_sales_part_numbers"]) || array_key_exists("search_sales_part_numbers", $context) ? $context["search_sales_part_numbers"] : (function () { throw new RuntimeError('Variable "search_sales_part_numbers" does not exist.', 38, $this->source); })())]);
        echo "<br>
       ";
        // line 42
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sales_search"]) || array_key_exists("form_sales_search", $context) ? $context["form_sales_search"] : (function () { throw new RuntimeError('Variable "form_sales_search" does not exist.', 42, $this->source); })()), "part_numbers_sales", [], "any", false, false, false, 42), 'errors');
        echo "</th>

        ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "flashes", ["original_number_sales_search"], "method", false, false, false, 44));
        foreach ($context['_seq'] as $context["_key"] => $context["value_original_number"]) {
            echo "  
            ";
            // line 45
            $context["search_sales_id_original_number"] = $context["value_original_number"];
            // line 46
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_original_number'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sales_search"]) || array_key_exists("form_sales_search", $context) ? $context["form_sales_search"] : (function () { throw new RuntimeError('Variable "form_sales_search" does not exist.', 47, $this->source); })()), "original_number_sales", [], "any", false, false, false, 47), 'label');
        echo "<br>
        ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sales_search"]) || array_key_exists("form_sales_search", $context) ? $context["form_sales_search"] : (function () { throw new RuntimeError('Variable "form_sales_search" does not exist.', 48, $this->source); })()), "original_number_sales", [], "any", false, false, false, 48), 'widget', ["value" => (isset($context["search_sales_id_original_number"]) || array_key_exists("search_sales_id_original_number", $context) ? $context["search_sales_id_original_number"] : (function () { throw new RuntimeError('Variable "search_sales_id_original_number" does not exist.', 48, $this->source); })())]);
        echo "<br>
        ";
        // line 52
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sales_search"]) || array_key_exists("form_sales_search", $context) ? $context["form_sales_search"] : (function () { throw new RuntimeError('Variable "form_sales_search" does not exist.', 52, $this->source); })()), "original_number_sales", [], "any", false, false, false, 52), 'errors');
        echo "</th>

        ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "flashes", ["manufacturers_sales_search"], "method", false, false, false, 54));
        foreach ($context['_seq'] as $context["_key"] => $context["value_manufacturers"]) {
            echo "  
                ";
            // line 55
            $context["search_sales_manufacturers"] = $context["value_manufacturers"];
            // line 56
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_manufacturers'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sales_search"]) || array_key_exists("form_sales_search", $context) ? $context["form_sales_search"] : (function () { throw new RuntimeError('Variable "form_sales_search" does not exist.', 57, $this->source); })()), "manufacturers_sales", [], "any", false, false, false, 57), 'label');
        echo "<br>
        ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sales_search"]) || array_key_exists("form_sales_search", $context) ? $context["form_sales_search"] : (function () { throw new RuntimeError('Variable "form_sales_search" does not exist.', 58, $this->source); })()), "manufacturers_sales", [], "any", false, false, false, 58), 'widget', ["value" => (isset($context["search_sales_manufacturers"]) || array_key_exists("search_sales_manufacturers", $context) ? $context["search_sales_manufacturers"] : (function () { throw new RuntimeError('Variable "search_sales_manufacturers" does not exist.', 58, $this->source); })())]);
        echo "<br>
        ";
        // line 62
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sales_search"]) || array_key_exists("form_sales_search", $context) ? $context["form_sales_search"] : (function () { throw new RuntimeError('Variable "form_sales_search" does not exist.', 62, $this->source); })()), "manufacturers_sales", [], "any", false, false, false, 62), 'errors');
        echo "</th>

        ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 64, $this->source); })()), "flashes", ["id_counterparty_sales_search"], "method", false, false, false, 64));
        foreach ($context['_seq'] as $context["_key"] => $context["value_id_counterparty"]) {
            echo "  
        ";
            // line 65
            $context["search_id_counterparty"] = $context["value_id_counterparty"];
            // line 66
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_id_counterparty'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sales_search"]) || array_key_exists("form_sales_search", $context) ? $context["form_sales_search"] : (function () { throw new RuntimeError('Variable "form_sales_search" does not exist.', 67, $this->source); })()), "id_counterparty_sales", [], "any", false, false, false, 67), 'label');
        echo "<br>
        ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sales_search"]) || array_key_exists("form_sales_search", $context) ? $context["form_sales_search"] : (function () { throw new RuntimeError('Variable "form_sales_search" does not exist.', 68, $this->source); })()), "id_counterparty_sales", [], "any", false, false, false, 68), 'widget', ["value" => (isset($context["search_id_counterparty"]) || array_key_exists("search_id_counterparty", $context) ? $context["search_id_counterparty"] : (function () { throw new RuntimeError('Variable "search_id_counterparty" does not exist.', 68, $this->source); })())]);
        echo "
        ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sales_search"]) || array_key_exists("form_sales_search", $context) ? $context["form_sales_search"] : (function () { throw new RuntimeError('Variable "form_sales_search" does not exist.', 69, $this->source); })()), "id_counterparty_sales", [], "any", false, false, false, 69), 'errors');
        echo "</th>

        ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 71, $this->source); })()), "flashes", ["id_payment_method_sales_search"], "method", false, false, false, 71));
        foreach ($context['_seq'] as $context["_key"] => $context["value_id_payment_method"]) {
            echo "  
        ";
            // line 72
            $context["search_id_payment_method"] = $context["value_id_payment_method"];
            // line 73
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_id_payment_method'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sales_search"]) || array_key_exists("form_sales_search", $context) ? $context["form_sales_search"] : (function () { throw new RuntimeError('Variable "form_sales_search" does not exist.', 74, $this->source); })()), "id_payment_method_sales", [], "any", false, false, false, 74), 'label');
        echo "<br>
        ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sales_search"]) || array_key_exists("form_sales_search", $context) ? $context["form_sales_search"] : (function () { throw new RuntimeError('Variable "form_sales_search" does not exist.', 75, $this->source); })()), "id_payment_method_sales", [], "any", false, false, false, 75), 'widget', ["value" => (isset($context["search_id_payment_method"]) || array_key_exists("search_id_payment_method", $context) ? $context["search_id_payment_method"] : (function () { throw new RuntimeError('Variable "search_id_payment_method" does not exist.', 75, $this->source); })())]);
        echo "
        ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sales_search"]) || array_key_exists("form_sales_search", $context) ? $context["form_sales_search"] : (function () { throw new RuntimeError('Variable "form_sales_search" does not exist.', 76, $this->source); })()), "id_payment_method_sales", [], "any", false, false, false, 76), 'errors');
        echo "</th>

        ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 78, $this->source); })()), "flashes", ["id_part_name_sales_search"], "method", false, false, false, 78));
        foreach ($context['_seq'] as $context["_key"] => $context["value_id_part_name"]) {
            echo "  
            ";
            // line 79
            $context["search_sales_id_part_name"] = $context["value_id_part_name"];
            // line 80
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_id_part_name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sales_search"]) || array_key_exists("form_sales_search", $context) ? $context["form_sales_search"] : (function () { throw new RuntimeError('Variable "form_sales_search" does not exist.', 81, $this->source); })()), "id_part_name_sales", [], "any", false, false, false, 81), 'label');
        echo "<br>
        ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sales_search"]) || array_key_exists("form_sales_search", $context) ? $context["form_sales_search"] : (function () { throw new RuntimeError('Variable "form_sales_search" does not exist.', 82, $this->source); })()), "id_part_name_sales", [], "any", false, false, false, 82), 'widget', ["value" => (isset($context["search_sales_id_part_name"]) || array_key_exists("search_sales_id_part_name", $context) ? $context["search_sales_id_part_name"] : (function () { throw new RuntimeError('Variable "search_sales_id_part_name" does not exist.', 82, $this->source); })())]);
        echo "
        ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sales_search"]) || array_key_exists("form_sales_search", $context) ? $context["form_sales_search"] : (function () { throw new RuntimeError('Variable "form_sales_search" does not exist.', 83, $this->source); })()), "id_part_name_sales", [], "any", false, false, false, 83), 'errors');
        echo "</th>

    </tr>
    <tr>

        ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 88, $this->source); })()), "flashes", ["id_car_brand_sales_search"], "method", false, false, false, 88));
        foreach ($context['_seq'] as $context["_key"] => $context["value_id_car_brand"]) {
            echo "  
            ";
            // line 89
            $context["search_sales_id_car_brand"] = $context["value_id_car_brand"];
            // line 90
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_id_car_brand'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sales_search"]) || array_key_exists("form_sales_search", $context) ? $context["form_sales_search"] : (function () { throw new RuntimeError('Variable "form_sales_search" does not exist.', 91, $this->source); })()), "id_car_brand_sales", [], "any", false, false, false, 91), 'label');
        echo "<br>
        ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sales_search"]) || array_key_exists("form_sales_search", $context) ? $context["form_sales_search"] : (function () { throw new RuntimeError('Variable "form_sales_search" does not exist.', 92, $this->source); })()), "id_car_brand_sales", [], "any", false, false, false, 92), 'widget', ["value" => (isset($context["search_sales_id_car_brand"]) || array_key_exists("search_sales_id_car_brand", $context) ? $context["search_sales_id_car_brand"] : (function () { throw new RuntimeError('Variable "search_sales_id_car_brand" does not exist.', 92, $this->source); })())]);
        echo "
        ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sales_search"]) || array_key_exists("form_sales_search", $context) ? $context["form_sales_search"] : (function () { throw new RuntimeError('Variable "form_sales_search" does not exist.', 93, $this->source); })()), "id_car_brand_sales", [], "any", false, false, false, 93), 'errors');
        echo "</th> 

        ";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 95, $this->source); })()), "flashes", ["id_side_sales_search"], "method", false, false, false, 95));
        foreach ($context['_seq'] as $context["_key"] => $context["value_id_side"]) {
            echo "  
            ";
            // line 96
            $context["search_sales_id_side"] = $context["value_id_side"];
            // line 97
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_id_side'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sales_search"]) || array_key_exists("form_sales_search", $context) ? $context["form_sales_search"] : (function () { throw new RuntimeError('Variable "form_sales_search" does not exist.', 98, $this->source); })()), "id_side_sales", [], "any", false, false, false, 98), 'label');
        echo "<br>
        ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sales_search"]) || array_key_exists("form_sales_search", $context) ? $context["form_sales_search"] : (function () { throw new RuntimeError('Variable "form_sales_search" does not exist.', 99, $this->source); })()), "id_side_sales", [], "any", false, false, false, 99), 'widget', ["value" => (isset($context["search_sales_id_side"]) || array_key_exists("search_sales_id_side", $context) ? $context["search_sales_id_side"] : (function () { throw new RuntimeError('Variable "search_sales_id_side" does not exist.', 99, $this->source); })())]);
        echo "
        ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sales_search"]) || array_key_exists("form_sales_search", $context) ? $context["form_sales_search"] : (function () { throw new RuntimeError('Variable "form_sales_search" does not exist.', 100, $this->source); })()), "id_side_sales", [], "any", false, false, false, 100), 'errors');
        echo "</th>

        ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 102, $this->source); })()), "flashes", ["id_body_sales_search"], "method", false, false, false, 102));
        foreach ($context['_seq'] as $context["_key"] => $context["value_id_body"]) {
            echo "  
            ";
            // line 103
            $context["search_sales_id_body"] = $context["value_id_body"];
            // line 104
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_id_body'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sales_search"]) || array_key_exists("form_sales_search", $context) ? $context["form_sales_search"] : (function () { throw new RuntimeError('Variable "form_sales_search" does not exist.', 105, $this->source); })()), "id_body_sales", [], "any", false, false, false, 105), 'label');
        echo "<br>
        ";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sales_search"]) || array_key_exists("form_sales_search", $context) ? $context["form_sales_search"] : (function () { throw new RuntimeError('Variable "form_sales_search" does not exist.', 106, $this->source); })()), "id_body_sales", [], "any", false, false, false, 106), 'widget', ["value" => (isset($context["search_sales_id_body"]) || array_key_exists("search_sales_id_body", $context) ? $context["search_sales_id_body"] : (function () { throw new RuntimeError('Variable "search_sales_id_body" does not exist.', 106, $this->source); })())]);
        echo "
        ";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sales_search"]) || array_key_exists("form_sales_search", $context) ? $context["form_sales_search"] : (function () { throw new RuntimeError('Variable "form_sales_search" does not exist.', 107, $this->source); })()), "id_body_sales", [], "any", false, false, false, 107), 'errors');
        echo "</th>

        ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 109, $this->source); })()), "flashes", ["id_axle_sales_search"], "method", false, false, false, 109));
        foreach ($context['_seq'] as $context["_key"] => $context["value_id_axle"]) {
            echo "  
            ";
            // line 110
            $context["search_sales_id_axle"] = $context["value_id_axle"];
            // line 111
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_id_axle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sales_search"]) || array_key_exists("form_sales_search", $context) ? $context["form_sales_search"] : (function () { throw new RuntimeError('Variable "form_sales_search" does not exist.', 112, $this->source); })()), "id_axle_sales", [], "any", false, false, false, 112), 'label');
        echo "<br>
        ";
        // line 113
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sales_search"]) || array_key_exists("form_sales_search", $context) ? $context["form_sales_search"] : (function () { throw new RuntimeError('Variable "form_sales_search" does not exist.', 113, $this->source); })()), "id_axle_sales", [], "any", false, false, false, 113), 'widget', ["value" => (isset($context["search_sales_id_axle"]) || array_key_exists("search_sales_id_axle", $context) ? $context["search_sales_id_axle"] : (function () { throw new RuntimeError('Variable "search_sales_id_axle" does not exist.', 113, $this->source); })())]);
        echo "
        ";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sales_search"]) || array_key_exists("form_sales_search", $context) ? $context["form_sales_search"] : (function () { throw new RuntimeError('Variable "form_sales_search" does not exist.', 114, $this->source); })()), "id_axle_sales", [], "any", false, false, false, 114), 'errors');
        echo "</th>

        ";
        // line 116
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 116, $this->source); })()), "flashes", ["s_data_invoice_sales_search"], "method", false, false, false, 116));
        foreach ($context['_seq'] as $context["_key"] => $context["value_data_invoice_search"]) {
            echo "  
        ";
            // line 117
            $context["s_data_sales_search"] = $context["value_data_invoice_search"];
            // line 118
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_data_invoice_search'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sales_search"]) || array_key_exists("form_sales_search", $context) ? $context["form_sales_search"] : (function () { throw new RuntimeError('Variable "form_sales_search" does not exist.', 119, $this->source); })()), "s_data_invoice_sales", [], "any", false, false, false, 119), 'label');
        echo "<br>
        ";
        // line 120
        echo "с ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sales_search"]) || array_key_exists("form_sales_search", $context) ? $context["form_sales_search"] : (function () { throw new RuntimeError('Variable "form_sales_search" does not exist.', 120, $this->source); })()), "s_data_invoice_sales", [], "any", false, false, false, 120), 'widget', ["value" => (isset($context["s_data_sales_search"]) || array_key_exists("s_data_sales_search", $context) ? $context["s_data_sales_search"] : (function () { throw new RuntimeError('Variable "s_data_sales_search" does not exist.', 120, $this->source); })())]);
        echo "<br>
        ";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 121, $this->source); })()), "flashes", ["po_data_invoice_sales_search"], "method", false, false, false, 121));
        foreach ($context['_seq'] as $context["_key"] => $context["value_price"]) {
            echo "  
        ";
            // line 122
            $context["po_data_sales_search"] = $context["value_price"];
            // line 123
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_price'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo "        ";
        echo "по ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sales_search"]) || array_key_exists("form_sales_search", $context) ? $context["form_sales_search"] : (function () { throw new RuntimeError('Variable "form_sales_search" does not exist.', 124, $this->source); })()), "po_data_invoice_sales", [], "any", false, false, false, 124), 'widget', ["value" => (isset($context["po_data_sales_search"]) || array_key_exists("po_data_sales_search", $context) ? $context["po_data_sales_search"] : (function () { throw new RuntimeError('Variable "po_data_sales_search" does not exist.', 124, $this->source); })())]);
        echo "</th>

        ";
        // line 126
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 126, $this->source); })()), "flashes", ["s_price_sales_search"], "method", false, false, false, 126));
        foreach ($context['_seq'] as $context["_key"] => $context["value_s_price_search"]) {
            echo "  
        ";
            // line 127
            $context["s_price_sales_search"] = $context["value_s_price_search"];
            // line 128
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_s_price_search'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sales_search"]) || array_key_exists("form_sales_search", $context) ? $context["form_sales_search"] : (function () { throw new RuntimeError('Variable "form_sales_search" does not exist.', 129, $this->source); })()), "s_price_sales", [], "any", false, false, false, 129), 'label');
        echo "<br>
        ";
        // line 130
        echo "с ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sales_search"]) || array_key_exists("form_sales_search", $context) ? $context["form_sales_search"] : (function () { throw new RuntimeError('Variable "form_sales_search" does not exist.', 130, $this->source); })()), "s_price_sales", [], "any", false, false, false, 130), 'widget', ["value" => (isset($context["s_price_sales_search"]) || array_key_exists("s_price_sales_search", $context) ? $context["s_price_sales_search"] : (function () { throw new RuntimeError('Variable "s_price_sales_search" does not exist.', 130, $this->source); })())]);
        echo "
        ";
        // line 131
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sales_search"]) || array_key_exists("form_sales_search", $context) ? $context["form_sales_search"] : (function () { throw new RuntimeError('Variable "form_sales_search" does not exist.', 131, $this->source); })()), "s_price_sales", [], "any", false, false, false, 131), 'errors');
        echo "<br>
        ";
        // line 132
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 132, $this->source); })()), "flashes", ["po_price_sales_search"], "method", false, false, false, 132));
        foreach ($context['_seq'] as $context["_key"] => $context["value_po_price_search"]) {
            echo "  
        ";
            // line 133
            $context["po_price_sales_search"] = $context["value_po_price_search"];
            // line 134
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_po_price_search'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        echo "        ";
        echo "по ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sales_search"]) || array_key_exists("form_sales_search", $context) ? $context["form_sales_search"] : (function () { throw new RuntimeError('Variable "form_sales_search" does not exist.', 135, $this->source); })()), "po_price_sales", [], "any", false, false, false, 135), 'widget', ["value" => (isset($context["po_price_sales_search"]) || array_key_exists("po_price_sales_search", $context) ? $context["po_price_sales_search"] : (function () { throw new RuntimeError('Variable "po_price_sales_search" does not exist.', 135, $this->source); })())]);
        echo "<br>
        ";
        // line 142
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sales_search"]) || array_key_exists("form_sales_search", $context) ? $context["form_sales_search"] : (function () { throw new RuntimeError('Variable "form_sales_search" does not exist.', 142, $this->source); })()), "po_price_sales", [], "any", false, false, false, 142), 'errors');
        echo "</th>

        <th>";
        // line 144
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sales_search"]) || array_key_exists("form_sales_search", $context) ? $context["form_sales_search"] : (function () { throw new RuntimeError('Variable "form_sales_search" does not exist.', 144, $this->source); })()), "button_sales", [], "any", false, false, false, 144), 'widget', ["label" => "Поиск", "attr" => ["class" => "search"]]);
        echo "</th>

    ";
        // line 146
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_sales_search"]) || array_key_exists("form_sales_search", $context) ? $context["form_sales_search"] : (function () { throw new RuntimeError('Variable "form_sales_search" does not exist.', 146, $this->source); })()), 'form_end');
        echo "

    <form action=\"/reset_sales\" name=\"reset_sales\">
        <th><button class=\"reset\" type=\"submit\" name=\"reset_sales\">Сбросить</button></th>
    </form>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 154
    public function block_table_total_amount($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_total_amount"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_total_amount"));

        // line 155
        echo "    <th>Общая сумма</th>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 158
    public function block_tbody_total_amount($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tbody_total_amount"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tbody_total_amount"));

        // line 159
        echo "<td>&nbsp;";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["total_amount"]) || array_key_exists("total_amount", $context) ? $context["total_amount"] : (function () { throw new RuntimeError('Variable "total_amount" does not exist.', 159, $this->source); })()), 2, ".", ""), "html", null, true);
        echo "</td>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 162
    public function block_table_thead_tr($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_thead_tr"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_thead_tr"));

        // line 164
        if ((isset($context["arr_sales"]) || array_key_exists("arr_sales", $context) ? $context["arr_sales"] : (function () { throw new RuntimeError('Variable "arr_sales" does not exist.', 164, $this->source); })())) {
            // line 165
            echo "            <th>№<br>Детали</th>
            <th>№<br>Оригинал</th>
            <th>Произ-<br>тель</th>
            <th>Описание<br>детали</th>
            <th>Название<br>детали</th>
            <th>Марка</th>
            <th>Сторона</th>
            <th>Кузов</th>
            <th>Перед<br>Зад</th>
            <th>Пос-<br>щик</th>
            <th>Способ<br>оплаты</th>
            <th>Дата<br>продажи</th>
            <th>Кол-<br>во</th>
            <th>Цена<br>шт<br>закуп</th>
            <th>Цена<br>общая<br>закуп</th>
            <th>Цена<br>общая<br>продажи</th>
            <th>Прибыль</th>
            <th>Возврат</th>
";
        } else {
            // line 184
            echo "    <h2>Видите параметры в поиск.</h2> 
";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 188
    public function block_tbody($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tbody"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tbody"));

        // line 189
        echo "    ";
        // line 190
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["arr_sales"]) || array_key_exists("arr_sales", $context) ? $context["arr_sales"] : (function () { throw new RuntimeError('Variable "arr_sales" does not exist.', 190, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["sales_price"]) {
            // line 191
            echo "            ";
            if ($context["sales_price"]) {
                // line 192
                echo "               
                        <tr>
                            <td>&nbsp;";
                // line 194
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sales_price"], "getIdInvoice", [], "method", false, false, false, 194), "getIdDetails", [], "method", false, false, false, 194), "getPartNumbers", [], "method", false, false, false, 194), "html", null, true);
                echo "</td>

                            <td>&nbsp;";
                // line 196
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sales_price"], "getIdInvoice", [], "method", false, false, false, 196), "getIdDetails", [], "method", false, false, false, 196), "getIdOriginalNumber", [], "method", false, false, false, 196), "getOriginalNumber", [], "method", false, false, false, 197), "html", null, true);
                // line 197
                echo "</td>

                            <td>&nbsp;";
                // line 199
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sales_price"], "getIdInvoice", [], "method", false, false, false, 199), "getIdManufacturer", [], "method", false, false, false, 199), "getManufacturers", [], "method", false, false, false, 199), "html", null, true);
                echo "</td>

                            <td>&nbsp;";
                // line 201
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sales_price"], "getIdInvoice", [], "method", false, false, false, 201), "getIdDetails", [], "method", false, false, false, 201), "getNameDetail", [], "method", false, false, false, 201), "html", null, true);
                echo "</td>

                            <td>&nbsp;";
                // line 203
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sales_price"], "getIdInvoice", [], "method", false, true, false, 203), "getIdDetails", [], "method", false, true, false, 203), "getIdPartName", [], "method", false, true, false, 203), "getPartName", [], "method", true, true, false, 204)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sales_price"], "getIdInvoice", [], "method", false, true, false, 203), "getIdDetails", [], "method", false, true, false, 203), "getIdPartName", [], "method", false, true, false, 203), "getPartName", [], "method", false, false, false, 204), "")) : ("")), "html", null, true);
                // line 204
                echo "</td>

                            <td>&nbsp;";
                // line 206
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sales_price"], "getIdInvoice", [], "method", false, true, false, 206), "getIdDetails", [], "method", false, true, false, 206), "getIdCarBrand", [], "method", false, true, false, 206), "getCarBrand", [], "method", true, true, false, 207)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sales_price"], "getIdInvoice", [], "method", false, true, false, 206), "getIdDetails", [], "method", false, true, false, 206), "getIdCarBrand", [], "method", false, true, false, 206), "getCarBrand", [], "method", false, false, false, 207), "")) : ("")), "html", null, true);
                // line 207
                echo "</td>

                            <td>&nbsp;";
                // line 209
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sales_price"], "getIdInvoice", [], "method", false, true, false, 209), "getIdDetails", [], "method", false, true, false, 209), "getIdSide", [], "method", false, true, false, 209), "getSide", [], "method", true, true, false, 210)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sales_price"], "getIdInvoice", [], "method", false, true, false, 209), "getIdDetails", [], "method", false, true, false, 209), "getIdSide", [], "method", false, true, false, 209), "getSide", [], "method", false, false, false, 210), "")) : ("")), "html", null, true);
                // line 210
                echo "</td>

                            <td>&nbsp;";
                // line 212
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sales_price"], "getIdInvoice", [], "method", false, true, false, 212), "getIdDetails", [], "method", false, true, false, 212), "getIdBody", [], "method", false, true, false, 212), "getBody", [], "method", true, true, false, 213)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sales_price"], "getIdInvoice", [], "method", false, true, false, 212), "getIdDetails", [], "method", false, true, false, 212), "getIdBody", [], "method", false, true, false, 212), "getBody", [], "method", false, false, false, 213), "")) : ("")), "html", null, true);
                // line 213
                echo "</td>

                            <td>&nbsp;";
                // line 215
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sales_price"], "getIdInvoice", [], "method", false, true, false, 215), "getIdDetails", [], "method", false, true, false, 215), "getIdAxle", [], "method", false, true, false, 215), "getAxle", [], "method", true, true, false, 216)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sales_price"], "getIdInvoice", [], "method", false, true, false, 215), "getIdDetails", [], "method", false, true, false, 215), "getIdAxle", [], "method", false, true, false, 215), "getAxle", [], "method", false, false, false, 216), "")) : ("")), "html", null, true);
                // line 216
                echo "</td>

                            <td>&nbsp;";
                // line 218
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sales_price"], "getIdInvoice", [], "method", false, false, false, 218), "getIdCounterparty", [], "method", false, false, false, 218), "getCounterparty", [], "method", false, false, false, 219), "html", null, true);
                // line 219
                echo "</td>

                            <td>&nbsp;";
                // line 221
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sales_price"], "getIdInvoice", [], "method", false, false, false, 221), "getIdPaymentMethod", [], "method", false, false, false, 221), "getMethod", [], "method", false, false, false, 222), "html", null, true);
                // line 222
                echo "</td>

                            <td>&nbsp;";
                // line 224
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sales_price"], "getDateSold", [], "method", false, false, false, 224), "d-m-Y"), "html", null, true);
                echo "</td>   

                            <td>&nbsp;";
                // line 226
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sales_price"], "getQuantitySold", [], "method", false, false, false, 226), "html", null, true);
                echo "</td>

                            <td>&nbsp;";
                // line 228
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sales_price"], "getIdInvoice", [], "method", false, false, false, 228), "getPrice", [], "method", false, false, false, 228) / 100) / twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 229
$context["sales_price"], "getIdInvoice", [], "method", false, false, false, 229), "getQuantity", [], "method", false, false, false, 229)), 2, ".", ""), "html", null, true);
                echo "</td>

                            <td>&nbsp;";
                // line 231
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sales_price"], "getIdInvoice", [], "method", false, false, false, 231), "getPrice", [], "method", false, false, false, 231) / 100) / twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 232
$context["sales_price"], "getIdInvoice", [], "method", false, false, false, 232), "getQuantity", [], "method", false, false, false, 232)) * twig_get_attribute($this->env, $this->source,                 // line 233
$context["sales_price"], "getQuantitySold", [], "method", false, false, false, 233)), 2, ".", ""), "html", null, true);
                echo "</td>

                            <td>&nbsp;";
                // line 235
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["sales_price"], "getPriceSold", [], "method", false, false, false, 235) / 100), 2, ".", ""), "html", null, true);
                echo "</td>

                            <td>&nbsp;";
                // line 237
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["sales_price"], "getPriceSold", [], "method", false, false, false, 237) / 100) - (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 238
$context["sales_price"], "getIdInvoice", [], "method", false, false, false, 238), "getPrice", [], "method", false, false, false, 238) / 100) / twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 239
$context["sales_price"], "getIdInvoice", [], "method", false, false, false, 239), "getQuantity", [], "method", false, false, false, 239)) * twig_get_attribute($this->env, $this->source,                 // line 240
$context["sales_price"], "getQuantitySold", [], "method", false, false, false, 240))), 2, ".", ""), "html", null, true);
                echo "</td>

                            <form action=\"/quantity_return_product\" name=\"quantity_return_product\" method=\"post\">

                                <td><button class=\"refund\" type=\"submit\" name=\"quantity_return_product\" value=\"";
                // line 244
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sales_price"], "getIdInvoice", [], "method", false, false, false, 244), "getId", [], "method", false, false, false, 244), "html", null, true);
                echo "\">Возврат</button></td>
                                                            
                            </form>
                            
                        </tr> 
                    
                
            ";
            } else {
                // line 252
                echo "                <h2>Данные не найдены. Видите параметры в поиск</h2>  
            ";
            }
            // line 254
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sales_price'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "sales/sales.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  863 => 254,  859 => 252,  848 => 244,  841 => 240,  840 => 239,  839 => 238,  838 => 237,  833 => 235,  828 => 233,  827 => 232,  826 => 231,  821 => 229,  820 => 228,  815 => 226,  810 => 224,  806 => 222,  804 => 221,  800 => 219,  798 => 218,  794 => 216,  792 => 215,  788 => 213,  786 => 212,  782 => 210,  780 => 209,  776 => 207,  774 => 206,  770 => 204,  768 => 203,  763 => 201,  758 => 199,  754 => 197,  752 => 196,  747 => 194,  743 => 192,  740 => 191,  735 => 190,  733 => 189,  723 => 188,  711 => 184,  690 => 165,  688 => 164,  678 => 162,  665 => 159,  655 => 158,  644 => 155,  634 => 154,  617 => 146,  612 => 144,  606 => 142,  600 => 135,  594 => 134,  592 => 133,  586 => 132,  582 => 131,  577 => 130,  572 => 129,  566 => 128,  564 => 127,  558 => 126,  551 => 124,  545 => 123,  543 => 122,  537 => 121,  532 => 120,  527 => 119,  521 => 118,  519 => 117,  513 => 116,  508 => 114,  504 => 113,  499 => 112,  493 => 111,  491 => 110,  485 => 109,  480 => 107,  476 => 106,  471 => 105,  465 => 104,  463 => 103,  457 => 102,  452 => 100,  448 => 99,  443 => 98,  437 => 97,  435 => 96,  429 => 95,  424 => 93,  420 => 92,  415 => 91,  409 => 90,  407 => 89,  401 => 88,  393 => 83,  389 => 82,  384 => 81,  378 => 80,  376 => 79,  370 => 78,  365 => 76,  361 => 75,  356 => 74,  350 => 73,  348 => 72,  342 => 71,  337 => 69,  333 => 68,  328 => 67,  322 => 66,  320 => 65,  314 => 64,  308 => 62,  304 => 58,  299 => 57,  293 => 56,  291 => 55,  285 => 54,  279 => 52,  275 => 48,  270 => 47,  264 => 46,  262 => 45,  256 => 44,  250 => 42,  246 => 38,  241 => 37,  235 => 36,  233 => 35,  227 => 34,  224 => 33,  222 => 32,  219 => 31,  216 => 30,  213 => 29,  210 => 28,  207 => 27,  204 => 26,  201 => 25,  198 => 24,  195 => 23,  192 => 22,  189 => 21,  186 => 20,  183 => 19,  180 => 18,  177 => 17,  172 => 15,  170 => 14,  160 => 13,  142 => 11,  123 => 9,  105 => 7,  86 => 5,  67 => 3,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{title_logo}}{% endblock %}

{% block logo %}{{title_logo}}{% endblock %}
 
 {% block legend %}{% endblock legend%}

{% block legend_search %}{{legend_search}}{% endblock legend_search %}

{% block form_save_edit_sales %}{% endblock form_save_edit_sales %}

{% block form_search %}
    {#Форма поиска #}
    {{ form_start(form_sales_search, {'action': path('sales')}) }}
        {#Переменный для вывода данных в форме когда форма не прошла валидацию#}
        {% set search_sales_part_numbers = '' %}
        {% set search_sales_id_original_number = '' %}
        {% set search_sales_manufacturers = '' %}
        {% set search_id_counterparty = '' %}
        {% set search_id_payment_method = '' %}
        {% set search_sales_id_part_name = '' %}
        {% set search_sales_id_car_brand = '' %}
        {% set search_sales_id_side = '' %}
        {% set search_sales_id_body = '' %}
        {% set search_sales_id_axle = '' %}
        {% set s_data_sales_search = '' %}
        {% set po_data_sales_search = '' %}
        {% set s_price_sales_search = '' %}
        {% set po_price_sales_search = '' %}

        {% do form_widget(form_sales_search.quantity_sales) %}

        {% for value_part_numbers in app.flashes('part_numbers_sales_search') %}  
            {% set search_sales_part_numbers = value_part_numbers %}
        {% endfor %}
        <th>{{ form_label(form_sales_search.part_numbers_sales) }}<br>
        {{ form_widget(form_sales_search.part_numbers_sales, {value : search_sales_part_numbers}) }}<br>
       {# {% for message_part_numbers_sales in app.flashes('children[part_numbers_sales].data_errors') %}
            {{ message_part_numbers_sales }}
        {% endfor %}#}
        {{ form_errors(form_sales_search.part_numbers_sales) }}</th>

        {% for value_original_number in app.flashes('original_number_sales_search') %}  
            {% set search_sales_id_original_number = value_original_number %}
        {% endfor %}
        <th>{{ form_label(form_sales_search.original_number_sales) }}<br>
        {{ form_widget(form_sales_search.original_number_sales, {value : search_sales_id_original_number}) }}<br>
        {#{% for message_original_number_sales in app.flashes('children[original_number_sales].data_errors') %}
            {{ message_original_number_sales }}
        {% endfor %}#}
        {{ form_errors(form_sales_search.original_number_sales) }}</th>

        {% for value_manufacturers in app.flashes('manufacturers_sales_search') %}  
                {% set search_sales_manufacturers = value_manufacturers %}
        {% endfor %}
        <th>{{ form_label(form_sales_search.manufacturers_sales) }}<br>
        {{ form_widget(form_sales_search.manufacturers_sales, {value : search_sales_manufacturers}) }}<br>
        {#{% for message_manufacturers_sales in app.flashes('children[manufacturers_sales].data_errors') %}
            {{ message_manufacturers_sales }}
        {% endfor %}#}
        {{ form_errors(form_sales_search.manufacturers_sales) }}</th>

        {% for value_id_counterparty in app.flashes('id_counterparty_sales_search') %}  
        {% set search_id_counterparty = value_id_counterparty %}
        {% endfor %}
        <th>{{ form_label(form_sales_search.id_counterparty_sales) }}<br>
        {{ form_widget(form_sales_search.id_counterparty_sales, {value : search_id_counterparty}) }}
        {{ form_errors(form_sales_search.id_counterparty_sales) }}</th>

        {% for value_id_payment_method in app.flashes('id_payment_method_sales_search') %}  
        {% set search_id_payment_method = value_id_payment_method %}
        {% endfor %}
        <th>{{ form_label(form_sales_search.id_payment_method_sales) }}<br>
        {{ form_widget(form_sales_search.id_payment_method_sales, {value : search_id_payment_method}) }}
        {{ form_errors(form_sales_search.id_payment_method_sales) }}</th>

        {% for value_id_part_name in app.flashes('id_part_name_sales_search') %}  
            {% set search_sales_id_part_name = value_id_part_name %}
        {% endfor %}
        <th>{{ form_label(form_sales_search.id_part_name_sales) }}<br>
        {{ form_widget(form_sales_search.id_part_name_sales, {value : search_sales_id_part_name}) }}
        {{ form_errors(form_sales_search.id_part_name_sales) }}</th>

    </tr>
    <tr>

        {% for value_id_car_brand in app.flashes('id_car_brand_sales_search') %}  
            {% set search_sales_id_car_brand = value_id_car_brand %}
        {% endfor %}
        <th>{{ form_label(form_sales_search.id_car_brand_sales) }}<br>
        {{ form_widget(form_sales_search.id_car_brand_sales, {value : search_sales_id_car_brand}) }}
        {{ form_errors(form_sales_search.id_car_brand_sales) }}</th> 

        {% for value_id_side in app.flashes('id_side_sales_search') %}  
            {% set search_sales_id_side = value_id_side %}
        {% endfor %}
        <th>{{ form_label(form_sales_search.id_side_sales) }}<br>
        {{ form_widget(form_sales_search.id_side_sales, {value : search_sales_id_side}) }}
        {{ form_errors(form_sales_search.id_side_sales) }}</th>

        {% for value_id_body in app.flashes('id_body_sales_search') %}  
            {% set search_sales_id_body = value_id_body %}
        {% endfor %}
        <th>{{ form_label(form_sales_search.id_body_sales) }}<br>
        {{ form_widget(form_sales_search.id_body_sales, {value : search_sales_id_body}) }}
        {{ form_errors(form_sales_search.id_body_sales) }}</th>

        {% for value_id_axle in app.flashes('id_axle_sales_search') %}  
            {% set search_sales_id_axle = value_id_axle %}
        {% endfor %}
        <th>{{ form_label(form_sales_search.id_axle_sales) }}<br>
        {{ form_widget(form_sales_search.id_axle_sales, {value : search_sales_id_axle}) }}
        {{ form_errors(form_sales_search.id_axle_sales) }}</th>

        {% for value_data_invoice_search in app.flashes('s_data_invoice_sales_search') %}  
        {% set s_data_sales_search = value_data_invoice_search %}
        {% endfor %}
        <th>{{ form_label(form_sales_search.s_data_invoice_sales) }}<br>
        {{'с '}}{{ form_widget(form_sales_search.s_data_invoice_sales, {value : s_data_sales_search}) }}<br>
        {% for value_price in app.flashes('po_data_invoice_sales_search') %}  
        {% set po_data_sales_search = value_price %}
        {% endfor %}
        {{'по '}}{{ form_widget(form_sales_search.po_data_invoice_sales, {value : po_data_sales_search}) }}</th>

        {% for value_s_price_search in app.flashes('s_price_sales_search') %}  
        {% set s_price_sales_search = value_s_price_search %}
        {% endfor %}
        <th>{{ form_label(form_sales_search.s_price_sales) }}<br>
        {{'с '}}{{ form_widget(form_sales_search.s_price_sales, {value : s_price_sales_search}) }}
        {{ form_errors(form_sales_search.s_price_sales) }}<br>
        {% for value_po_price_search in app.flashes('po_price_sales_search') %}  
        {% set po_price_sales_search = value_po_price_search %}
        {% endfor %}
        {{'по '}}{{ form_widget(form_sales_search.po_price_sales, {value : po_price_sales_search}) }}<br>
        {#{% for message_s_price_sales in app.flashes('children[s_price_sales].data_errors') %}
        {{ message_s_price_sales }}
        {% endfor %}
        {% for message_po_price_sales in app.flashes('children[po_price_sales].data_errors') %}
        {{ message_po_price_sales }}
        {% endfor %}#}
        {{ form_errors(form_sales_search.po_price_sales) }}</th>

        <th>{{ form_widget(form_sales_search.button_sales, { 'label': 'Поиск', 'attr': {'class': 'search'} }) }}</th>

    {{ form_end(form_sales_search) }}

    <form action=\"/reset_sales\" name=\"reset_sales\">
        <th><button class=\"reset\" type=\"submit\" name=\"reset_sales\">Сбросить</button></th>
    </form>

{% endblock form_search %}

{% block table_total_amount %}
    <th>Общая сумма</th>
{% endblock table_total_amount %}

{% block tbody_total_amount %}
<td>&nbsp;{{total_amount|number_format(2, '.', '')}}</td>
{% endblock tbody_total_amount %}

{% block table_thead_tr %}
{#{{ dump(arr_sales) }}#}
{% if arr_sales %}
            <th>№<br>Детали</th>
            <th>№<br>Оригинал</th>
            <th>Произ-<br>тель</th>
            <th>Описание<br>детали</th>
            <th>Название<br>детали</th>
            <th>Марка</th>
            <th>Сторона</th>
            <th>Кузов</th>
            <th>Перед<br>Зад</th>
            <th>Пос-<br>щик</th>
            <th>Способ<br>оплаты</th>
            <th>Дата<br>продажи</th>
            <th>Кол-<br>во</th>
            <th>Цена<br>шт<br>закуп</th>
            <th>Цена<br>общая<br>закуп</th>
            <th>Цена<br>общая<br>продажи</th>
            <th>Прибыль</th>
            <th>Возврат</th>
{% else %}
    <h2>Видите параметры в поиск.</h2> 
{% endif %}
{% endblock table_thead_tr %}

{% block tbody %}
    {#выводит таблицу по поиску#}
      {% for sales_price in arr_sales %}
            {% if sales_price %}
               
                        <tr>
                            <td>&nbsp;{{ sales_price.getIdInvoice().getIdDetails().getPartNumbers() }}</td>

                            <td>&nbsp;{{ sales_price.getIdInvoice().getIdDetails()
                                .getIdOriginalNumber().getOriginalNumber() }}</td>

                            <td>&nbsp;{{ sales_price.getIdInvoice().getIdManufacturer().getManufacturers() }}</td>

                            <td>&nbsp;{{ sales_price.getIdInvoice().getIdDetails().getNameDetail() }}</td>

                            <td>&nbsp;{{ sales_price.getIdInvoice().getIdDetails()
                                .getIdPartName().getPartName()|default('') }}</td>

                            <td>&nbsp;{{ sales_price.getIdInvoice().getIdDetails()
                                .getIdCarBrand().getCarBrand()|default('') }}</td>

                            <td>&nbsp;{{ sales_price.getIdInvoice().getIdDetails()
                                .getIdSide().getSide()|default('') }}</td>

                            <td>&nbsp;{{ sales_price.getIdInvoice().getIdDetails()
                                .getIdBody().getBody()|default('') }}</td>

                            <td>&nbsp;{{ sales_price.getIdInvoice().getIdDetails()
                                .getIdAxle().getAxle()|default('') }}</td>

                            <td>&nbsp;{{ sales_price.getIdInvoice()
                                .getIdCounterparty().getCounterparty() }}</td>

                            <td>&nbsp;{{ sales_price.getIdInvoice()
                                .getIdPaymentMethod().getMethod() }}</td>

                            <td>&nbsp;{{ sales_price.getDateSold()|date(\"d-m-Y\") }}</td>   

                            <td>&nbsp;{{ sales_price.getQuantitySold() }}</td>

                            <td>&nbsp;{{ ((sales_price.getIdInvoice().getPrice() / 100) 
                                    / sales_price.getIdInvoice().getQuantity())|number_format(2, '.', '') }}</td>

                            <td>&nbsp;{{ (((sales_price.getIdInvoice().getPrice() / 100) 
                                        / sales_price.getIdInvoice().getQuantity())
                                            * sales_price.getQuantitySold())|number_format(2, '.', '') }}</td>

                            <td>&nbsp;{{ (sales_price.getPriceSold() / 100)|number_format(2, '.', '') }}</td>

                            <td>&nbsp;{{ ((sales_price.getPriceSold() / 100)
                                -(((sales_price.getIdInvoice().getPrice() / 100) 
                                        / sales_price.getIdInvoice().getQuantity())
                                            * sales_price.getQuantitySold()))|number_format(2, '.', '') }}</td>

                            <form action=\"/quantity_return_product\" name=\"quantity_return_product\" method=\"post\">

                                <td><button class=\"refund\" type=\"submit\" name=\"quantity_return_product\" value=\"{{ sales_price.getIdInvoice().getId() }}\">Возврат</button></td>
                                                            
                            </form>
                            
                        </tr> 
                    
                
            {% else %}
                <h2>Данные не найдены. Видите параметры в поиск</h2>  
            {% endif %}
        {% endfor %}
{% endblock tbody %}", "sales/sales.html.twig", "/var/www/templates/sales/sales.html.twig");
    }
}
