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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "flashes", ["part_numbers_sales_search"], "method", false, false, false, 32));
        foreach ($context['_seq'] as $context["_key"] => $context["value_part_numbers"]) {
            echo "  
            ";
            // line 33
            $context["search_sales_part_numbers"] = $context["value_part_numbers"];
            // line 34
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_part_numbers'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sales_search"]) || array_key_exists("form_sales_search", $context) ? $context["form_sales_search"] : (function () { throw new RuntimeError('Variable "form_sales_search" does not exist.', 35, $this->source); })()), "part_numbers_sales", [], "any", false, false, false, 35), 'label');
        echo "<br>
        ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sales_search"]) || array_key_exists("form_sales_search", $context) ? $context["form_sales_search"] : (function () { throw new RuntimeError('Variable "form_sales_search" does not exist.', 36, $this->source); })()), "part_numbers_sales", [], "any", false, false, false, 36), 'widget', ["value" => (isset($context["search_sales_part_numbers"]) || array_key_exists("search_sales_part_numbers", $context) ? $context["search_sales_part_numbers"] : (function () { throw new RuntimeError('Variable "search_sales_part_numbers" does not exist.', 36, $this->source); })())]);
        echo "<br>
       ";
        // line 40
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sales_search"]) || array_key_exists("form_sales_search", $context) ? $context["form_sales_search"] : (function () { throw new RuntimeError('Variable "form_sales_search" does not exist.', 40, $this->source); })()), "part_numbers_sales", [], "any", false, false, false, 40), 'errors');
        echo "</th>

        ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "flashes", ["original_number_sales_search"], "method", false, false, false, 42));
        foreach ($context['_seq'] as $context["_key"] => $context["value_original_number"]) {
            echo "  
            ";
            // line 43
            $context["search_sales_id_original_number"] = $context["value_original_number"];
            // line 44
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_original_number'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sales_search"]) || array_key_exists("form_sales_search", $context) ? $context["form_sales_search"] : (function () { throw new RuntimeError('Variable "form_sales_search" does not exist.', 45, $this->source); })()), "original_number_sales", [], "any", false, false, false, 45), 'label');
        echo "<br>
        ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sales_search"]) || array_key_exists("form_sales_search", $context) ? $context["form_sales_search"] : (function () { throw new RuntimeError('Variable "form_sales_search" does not exist.', 46, $this->source); })()), "original_number_sales", [], "any", false, false, false, 46), 'widget', ["value" => (isset($context["search_sales_id_original_number"]) || array_key_exists("search_sales_id_original_number", $context) ? $context["search_sales_id_original_number"] : (function () { throw new RuntimeError('Variable "search_sales_id_original_number" does not exist.', 46, $this->source); })())]);
        echo "<br>
        ";
        // line 50
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sales_search"]) || array_key_exists("form_sales_search", $context) ? $context["form_sales_search"] : (function () { throw new RuntimeError('Variable "form_sales_search" does not exist.', 50, $this->source); })()), "original_number_sales", [], "any", false, false, false, 50), 'errors');
        echo "</th>

        ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "flashes", ["manufacturers_sales_search"], "method", false, false, false, 52));
        foreach ($context['_seq'] as $context["_key"] => $context["value_manufacturers"]) {
            echo "  
                ";
            // line 53
            $context["search_sales_manufacturers"] = $context["value_manufacturers"];
            // line 54
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_manufacturers'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sales_search"]) || array_key_exists("form_sales_search", $context) ? $context["form_sales_search"] : (function () { throw new RuntimeError('Variable "form_sales_search" does not exist.', 55, $this->source); })()), "manufacturers_sales", [], "any", false, false, false, 55), 'label');
        echo "<br>
        ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sales_search"]) || array_key_exists("form_sales_search", $context) ? $context["form_sales_search"] : (function () { throw new RuntimeError('Variable "form_sales_search" does not exist.', 56, $this->source); })()), "manufacturers_sales", [], "any", false, false, false, 56), 'widget', ["value" => (isset($context["search_sales_manufacturers"]) || array_key_exists("search_sales_manufacturers", $context) ? $context["search_sales_manufacturers"] : (function () { throw new RuntimeError('Variable "search_sales_manufacturers" does not exist.', 56, $this->source); })())]);
        echo "<br>
        ";
        // line 60
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sales_search"]) || array_key_exists("form_sales_search", $context) ? $context["form_sales_search"] : (function () { throw new RuntimeError('Variable "form_sales_search" does not exist.', 60, $this->source); })()), "manufacturers_sales", [], "any", false, false, false, 60), 'errors');
        echo "</th>

        ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 62, $this->source); })()), "flashes", ["id_counterparty_sales_search"], "method", false, false, false, 62));
        foreach ($context['_seq'] as $context["_key"] => $context["value_id_counterparty"]) {
            echo "  
        ";
            // line 63
            $context["search_id_counterparty"] = $context["value_id_counterparty"];
            // line 64
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_id_counterparty'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sales_search"]) || array_key_exists("form_sales_search", $context) ? $context["form_sales_search"] : (function () { throw new RuntimeError('Variable "form_sales_search" does not exist.', 65, $this->source); })()), "id_counterparty_sales", [], "any", false, false, false, 65), 'label');
        echo "<br>
        ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sales_search"]) || array_key_exists("form_sales_search", $context) ? $context["form_sales_search"] : (function () { throw new RuntimeError('Variable "form_sales_search" does not exist.', 66, $this->source); })()), "id_counterparty_sales", [], "any", false, false, false, 66), 'widget', ["value" => (isset($context["search_id_counterparty"]) || array_key_exists("search_id_counterparty", $context) ? $context["search_id_counterparty"] : (function () { throw new RuntimeError('Variable "search_id_counterparty" does not exist.', 66, $this->source); })())]);
        echo "
        ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sales_search"]) || array_key_exists("form_sales_search", $context) ? $context["form_sales_search"] : (function () { throw new RuntimeError('Variable "form_sales_search" does not exist.', 67, $this->source); })()), "id_counterparty_sales", [], "any", false, false, false, 67), 'errors');
        echo "</th>

        ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "flashes", ["id_payment_method_sales_search"], "method", false, false, false, 69));
        foreach ($context['_seq'] as $context["_key"] => $context["value_id_payment_method"]) {
            echo "  
        ";
            // line 70
            $context["search_id_payment_method"] = $context["value_id_payment_method"];
            // line 71
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_id_payment_method'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sales_search"]) || array_key_exists("form_sales_search", $context) ? $context["form_sales_search"] : (function () { throw new RuntimeError('Variable "form_sales_search" does not exist.', 72, $this->source); })()), "id_payment_method_sales", [], "any", false, false, false, 72), 'label');
        echo "<br>
        ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sales_search"]) || array_key_exists("form_sales_search", $context) ? $context["form_sales_search"] : (function () { throw new RuntimeError('Variable "form_sales_search" does not exist.', 73, $this->source); })()), "id_payment_method_sales", [], "any", false, false, false, 73), 'widget', ["value" => (isset($context["search_id_payment_method"]) || array_key_exists("search_id_payment_method", $context) ? $context["search_id_payment_method"] : (function () { throw new RuntimeError('Variable "search_id_payment_method" does not exist.', 73, $this->source); })())]);
        echo "
        ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sales_search"]) || array_key_exists("form_sales_search", $context) ? $context["form_sales_search"] : (function () { throw new RuntimeError('Variable "form_sales_search" does not exist.', 74, $this->source); })()), "id_payment_method_sales", [], "any", false, false, false, 74), 'errors');
        echo "</th>

        ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "flashes", ["id_part_name_sales_search"], "method", false, false, false, 76));
        foreach ($context['_seq'] as $context["_key"] => $context["value_id_part_name"]) {
            echo "  
            ";
            // line 77
            $context["search_sales_id_part_name"] = $context["value_id_part_name"];
            // line 78
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_id_part_name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sales_search"]) || array_key_exists("form_sales_search", $context) ? $context["form_sales_search"] : (function () { throw new RuntimeError('Variable "form_sales_search" does not exist.', 79, $this->source); })()), "id_part_name_sales", [], "any", false, false, false, 79), 'label');
        echo "<br>
        ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sales_search"]) || array_key_exists("form_sales_search", $context) ? $context["form_sales_search"] : (function () { throw new RuntimeError('Variable "form_sales_search" does not exist.', 80, $this->source); })()), "id_part_name_sales", [], "any", false, false, false, 80), 'widget', ["value" => (isset($context["search_sales_id_part_name"]) || array_key_exists("search_sales_id_part_name", $context) ? $context["search_sales_id_part_name"] : (function () { throw new RuntimeError('Variable "search_sales_id_part_name" does not exist.', 80, $this->source); })())]);
        echo "
        ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sales_search"]) || array_key_exists("form_sales_search", $context) ? $context["form_sales_search"] : (function () { throw new RuntimeError('Variable "form_sales_search" does not exist.', 81, $this->source); })()), "id_part_name_sales", [], "any", false, false, false, 81), 'errors');
        echo "</th>

    </tr>
    <tr>

        ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 86, $this->source); })()), "flashes", ["id_car_brand_sales_search"], "method", false, false, false, 86));
        foreach ($context['_seq'] as $context["_key"] => $context["value_id_car_brand"]) {
            echo "  
            ";
            // line 87
            $context["search_sales_id_car_brand"] = $context["value_id_car_brand"];
            // line 88
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_id_car_brand'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sales_search"]) || array_key_exists("form_sales_search", $context) ? $context["form_sales_search"] : (function () { throw new RuntimeError('Variable "form_sales_search" does not exist.', 89, $this->source); })()), "id_car_brand_sales", [], "any", false, false, false, 89), 'label');
        echo "<br>
        ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sales_search"]) || array_key_exists("form_sales_search", $context) ? $context["form_sales_search"] : (function () { throw new RuntimeError('Variable "form_sales_search" does not exist.', 90, $this->source); })()), "id_car_brand_sales", [], "any", false, false, false, 90), 'widget', ["value" => (isset($context["search_sales_id_car_brand"]) || array_key_exists("search_sales_id_car_brand", $context) ? $context["search_sales_id_car_brand"] : (function () { throw new RuntimeError('Variable "search_sales_id_car_brand" does not exist.', 90, $this->source); })())]);
        echo "
        ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sales_search"]) || array_key_exists("form_sales_search", $context) ? $context["form_sales_search"] : (function () { throw new RuntimeError('Variable "form_sales_search" does not exist.', 91, $this->source); })()), "id_car_brand_sales", [], "any", false, false, false, 91), 'errors');
        echo "</th> 

        ";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 93, $this->source); })()), "flashes", ["id_side_sales_search"], "method", false, false, false, 93));
        foreach ($context['_seq'] as $context["_key"] => $context["value_id_side"]) {
            echo "  
            ";
            // line 94
            $context["search_sales_id_side"] = $context["value_id_side"];
            // line 95
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_id_side'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sales_search"]) || array_key_exists("form_sales_search", $context) ? $context["form_sales_search"] : (function () { throw new RuntimeError('Variable "form_sales_search" does not exist.', 96, $this->source); })()), "id_side_sales", [], "any", false, false, false, 96), 'label');
        echo "<br>
        ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sales_search"]) || array_key_exists("form_sales_search", $context) ? $context["form_sales_search"] : (function () { throw new RuntimeError('Variable "form_sales_search" does not exist.', 97, $this->source); })()), "id_side_sales", [], "any", false, false, false, 97), 'widget', ["value" => (isset($context["search_sales_id_side"]) || array_key_exists("search_sales_id_side", $context) ? $context["search_sales_id_side"] : (function () { throw new RuntimeError('Variable "search_sales_id_side" does not exist.', 97, $this->source); })())]);
        echo "
        ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sales_search"]) || array_key_exists("form_sales_search", $context) ? $context["form_sales_search"] : (function () { throw new RuntimeError('Variable "form_sales_search" does not exist.', 98, $this->source); })()), "id_side_sales", [], "any", false, false, false, 98), 'errors');
        echo "</th>

        ";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 100, $this->source); })()), "flashes", ["id_body_sales_search"], "method", false, false, false, 100));
        foreach ($context['_seq'] as $context["_key"] => $context["value_id_body"]) {
            echo "  
            ";
            // line 101
            $context["search_sales_id_body"] = $context["value_id_body"];
            // line 102
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_id_body'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sales_search"]) || array_key_exists("form_sales_search", $context) ? $context["form_sales_search"] : (function () { throw new RuntimeError('Variable "form_sales_search" does not exist.', 103, $this->source); })()), "id_body_sales", [], "any", false, false, false, 103), 'label');
        echo "<br>
        ";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sales_search"]) || array_key_exists("form_sales_search", $context) ? $context["form_sales_search"] : (function () { throw new RuntimeError('Variable "form_sales_search" does not exist.', 104, $this->source); })()), "id_body_sales", [], "any", false, false, false, 104), 'widget', ["value" => (isset($context["search_sales_id_body"]) || array_key_exists("search_sales_id_body", $context) ? $context["search_sales_id_body"] : (function () { throw new RuntimeError('Variable "search_sales_id_body" does not exist.', 104, $this->source); })())]);
        echo "
        ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sales_search"]) || array_key_exists("form_sales_search", $context) ? $context["form_sales_search"] : (function () { throw new RuntimeError('Variable "form_sales_search" does not exist.', 105, $this->source); })()), "id_body_sales", [], "any", false, false, false, 105), 'errors');
        echo "</th>

        ";
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 107, $this->source); })()), "flashes", ["id_axle_sales_search"], "method", false, false, false, 107));
        foreach ($context['_seq'] as $context["_key"] => $context["value_id_axle"]) {
            echo "  
            ";
            // line 108
            $context["search_sales_id_axle"] = $context["value_id_axle"];
            // line 109
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_id_axle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sales_search"]) || array_key_exists("form_sales_search", $context) ? $context["form_sales_search"] : (function () { throw new RuntimeError('Variable "form_sales_search" does not exist.', 110, $this->source); })()), "id_axle_sales", [], "any", false, false, false, 110), 'label');
        echo "<br>
        ";
        // line 111
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sales_search"]) || array_key_exists("form_sales_search", $context) ? $context["form_sales_search"] : (function () { throw new RuntimeError('Variable "form_sales_search" does not exist.', 111, $this->source); })()), "id_axle_sales", [], "any", false, false, false, 111), 'widget', ["value" => (isset($context["search_sales_id_axle"]) || array_key_exists("search_sales_id_axle", $context) ? $context["search_sales_id_axle"] : (function () { throw new RuntimeError('Variable "search_sales_id_axle" does not exist.', 111, $this->source); })())]);
        echo "
        ";
        // line 112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sales_search"]) || array_key_exists("form_sales_search", $context) ? $context["form_sales_search"] : (function () { throw new RuntimeError('Variable "form_sales_search" does not exist.', 112, $this->source); })()), "id_axle_sales", [], "any", false, false, false, 112), 'errors');
        echo "</th>

        ";
        // line 114
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 114, $this->source); })()), "flashes", ["s_data_invoice_sales_search"], "method", false, false, false, 114));
        foreach ($context['_seq'] as $context["_key"] => $context["value_data_invoice_search"]) {
            echo "  
        ";
            // line 115
            $context["s_data_sales_search"] = $context["value_data_invoice_search"];
            // line 116
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_data_invoice_search'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sales_search"]) || array_key_exists("form_sales_search", $context) ? $context["form_sales_search"] : (function () { throw new RuntimeError('Variable "form_sales_search" does not exist.', 117, $this->source); })()), "s_data_invoice_sales", [], "any", false, false, false, 117), 'label');
        echo "<br>
        ";
        // line 118
        echo "с ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sales_search"]) || array_key_exists("form_sales_search", $context) ? $context["form_sales_search"] : (function () { throw new RuntimeError('Variable "form_sales_search" does not exist.', 118, $this->source); })()), "s_data_invoice_sales", [], "any", false, false, false, 118), 'widget', ["value" => (isset($context["s_data_sales_search"]) || array_key_exists("s_data_sales_search", $context) ? $context["s_data_sales_search"] : (function () { throw new RuntimeError('Variable "s_data_sales_search" does not exist.', 118, $this->source); })())]);
        echo "<br>
        ";
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 119, $this->source); })()), "flashes", ["po_data_invoice_sales_search"], "method", false, false, false, 119));
        foreach ($context['_seq'] as $context["_key"] => $context["value_price"]) {
            echo "  
        ";
            // line 120
            $context["po_data_sales_search"] = $context["value_price"];
            // line 121
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_price'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "        ";
        echo "по ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sales_search"]) || array_key_exists("form_sales_search", $context) ? $context["form_sales_search"] : (function () { throw new RuntimeError('Variable "form_sales_search" does not exist.', 122, $this->source); })()), "po_data_invoice_sales", [], "any", false, false, false, 122), 'widget', ["value" => (isset($context["po_data_sales_search"]) || array_key_exists("po_data_sales_search", $context) ? $context["po_data_sales_search"] : (function () { throw new RuntimeError('Variable "po_data_sales_search" does not exist.', 122, $this->source); })())]);
        echo "</th>

        ";
        // line 124
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 124, $this->source); })()), "flashes", ["s_price_sales_search"], "method", false, false, false, 124));
        foreach ($context['_seq'] as $context["_key"] => $context["value_s_price_search"]) {
            echo "  
        ";
            // line 125
            $context["s_price_sales_search"] = $context["value_s_price_search"];
            // line 126
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_s_price_search'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sales_search"]) || array_key_exists("form_sales_search", $context) ? $context["form_sales_search"] : (function () { throw new RuntimeError('Variable "form_sales_search" does not exist.', 127, $this->source); })()), "s_price_sales", [], "any", false, false, false, 127), 'label');
        echo "<br>
        ";
        // line 128
        echo "с ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sales_search"]) || array_key_exists("form_sales_search", $context) ? $context["form_sales_search"] : (function () { throw new RuntimeError('Variable "form_sales_search" does not exist.', 128, $this->source); })()), "s_price_sales", [], "any", false, false, false, 128), 'widget', ["value" => (isset($context["s_price_sales_search"]) || array_key_exists("s_price_sales_search", $context) ? $context["s_price_sales_search"] : (function () { throw new RuntimeError('Variable "s_price_sales_search" does not exist.', 128, $this->source); })())]);
        echo "
        ";
        // line 129
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sales_search"]) || array_key_exists("form_sales_search", $context) ? $context["form_sales_search"] : (function () { throw new RuntimeError('Variable "form_sales_search" does not exist.', 129, $this->source); })()), "s_price_sales", [], "any", false, false, false, 129), 'errors');
        echo "<br>
        ";
        // line 130
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 130, $this->source); })()), "flashes", ["po_price_sales_search"], "method", false, false, false, 130));
        foreach ($context['_seq'] as $context["_key"] => $context["value_po_price_search"]) {
            echo "  
        ";
            // line 131
            $context["po_price_sales_search"] = $context["value_po_price_search"];
            // line 132
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_po_price_search'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        echo "        ";
        echo "по ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sales_search"]) || array_key_exists("form_sales_search", $context) ? $context["form_sales_search"] : (function () { throw new RuntimeError('Variable "form_sales_search" does not exist.', 133, $this->source); })()), "po_price_sales", [], "any", false, false, false, 133), 'widget', ["value" => (isset($context["po_price_sales_search"]) || array_key_exists("po_price_sales_search", $context) ? $context["po_price_sales_search"] : (function () { throw new RuntimeError('Variable "po_price_sales_search" does not exist.', 133, $this->source); })())]);
        echo "<br>
        ";
        // line 140
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sales_search"]) || array_key_exists("form_sales_search", $context) ? $context["form_sales_search"] : (function () { throw new RuntimeError('Variable "form_sales_search" does not exist.', 140, $this->source); })()), "po_price_sales", [], "any", false, false, false, 140), 'errors');
        echo "</th>

        <th>";
        // line 142
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sales_search"]) || array_key_exists("form_sales_search", $context) ? $context["form_sales_search"] : (function () { throw new RuntimeError('Variable "form_sales_search" does not exist.', 142, $this->source); })()), "button_sales", [], "any", false, false, false, 142), 'widget', ["label" => "Поиск", "attr" => ["class" => "search"]]);
        echo "</th>

    ";
        // line 144
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_sales_search"]) || array_key_exists("form_sales_search", $context) ? $context["form_sales_search"] : (function () { throw new RuntimeError('Variable "form_sales_search" does not exist.', 144, $this->source); })()), 'form_end');
        echo "

    <form action=\"/reset_sales\" name=\"reset_sales\">
        <th><button class=\"reset\" type=\"submit\" name=\"reset_sales\">Сбросить</button></th>
    </form>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 152
    public function block_table_total_amount($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_total_amount"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_total_amount"));

        // line 153
        echo "    <th>Общая сумма</th>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 156
    public function block_tbody_total_amount($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tbody_total_amount"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tbody_total_amount"));

        // line 157
        echo "<td>&nbsp;";
        echo twig_escape_filter($this->env, (isset($context["total_amount"]) || array_key_exists("total_amount", $context) ? $context["total_amount"] : (function () { throw new RuntimeError('Variable "total_amount" does not exist.', 157, $this->source); })()), "html", null, true);
        echo "</td>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 160
    public function block_table_thead_tr($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_thead_tr"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_thead_tr"));

        // line 162
        if ((isset($context["arr_sales"]) || array_key_exists("arr_sales", $context) ? $context["arr_sales"] : (function () { throw new RuntimeError('Variable "arr_sales" does not exist.', 162, $this->source); })())) {
            // line 163
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
            <th>Возврат</th>
";
        } else {
            // line 181
            echo "    <h2>Видите параметры в поиск.</h2> 
";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 185
    public function block_tbody($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tbody"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tbody"));

        // line 186
        echo "    ";
        // line 187
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["arr_sales"]) || array_key_exists("arr_sales", $context) ? $context["arr_sales"] : (function () { throw new RuntimeError('Variable "arr_sales" does not exist.', 187, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["sales_price"]) {
            // line 188
            echo "            ";
            if ($context["sales_price"]) {
                // line 189
                echo "               
                        <tr>
                            <td>&nbsp;";
                // line 191
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sales_price"], "getIdInvoice", [], "method", false, false, false, 191), "getIdDetails", [], "method", false, false, false, 191), "getPartNumbers", [], "method", false, false, false, 191), "html", null, true);
                echo "</td>

                            <td>&nbsp;";
                // line 193
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sales_price"], "getIdInvoice", [], "method", false, false, false, 193), "getIdDetails", [], "method", false, false, false, 193), "getIdOriginalNumber", [], "method", false, false, false, 193), "getOriginalNumber", [], "method", false, false, false, 194), "html", null, true);
                // line 194
                echo "</td>

                            <td>&nbsp;";
                // line 196
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sales_price"], "getIdInvoice", [], "method", false, false, false, 196), "getIdManufacturer", [], "method", false, false, false, 196), "getManufacturers", [], "method", false, false, false, 196), "html", null, true);
                echo "</td>

                            <td>&nbsp;";
                // line 198
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sales_price"], "getIdInvoice", [], "method", false, false, false, 198), "getIdDetails", [], "method", false, false, false, 198), "getNameDetail", [], "method", false, false, false, 198), "html", null, true);
                echo "</td>

                            <td>&nbsp;";
                // line 200
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sales_price"], "getIdInvoice", [], "method", false, true, false, 200), "getIdDetails", [], "method", false, true, false, 200), "getIdPartName", [], "method", false, true, false, 200), "getPartName", [], "method", true, true, false, 201)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sales_price"], "getIdInvoice", [], "method", false, true, false, 200), "getIdDetails", [], "method", false, true, false, 200), "getIdPartName", [], "method", false, true, false, 200), "getPartName", [], "method", false, false, false, 201), "")) : ("")), "html", null, true);
                // line 201
                echo "</td>

                            <td>&nbsp;";
                // line 203
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sales_price"], "getIdInvoice", [], "method", false, true, false, 203), "getIdDetails", [], "method", false, true, false, 203), "getIdCarBrand", [], "method", false, true, false, 203), "getCarBrand", [], "method", true, true, false, 204)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sales_price"], "getIdInvoice", [], "method", false, true, false, 203), "getIdDetails", [], "method", false, true, false, 203), "getIdCarBrand", [], "method", false, true, false, 203), "getCarBrand", [], "method", false, false, false, 204), "")) : ("")), "html", null, true);
                // line 204
                echo "</td>

                            <td>&nbsp;";
                // line 206
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sales_price"], "getIdInvoice", [], "method", false, true, false, 206), "getIdDetails", [], "method", false, true, false, 206), "getIdSide", [], "method", false, true, false, 206), "getSide", [], "method", true, true, false, 207)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sales_price"], "getIdInvoice", [], "method", false, true, false, 206), "getIdDetails", [], "method", false, true, false, 206), "getIdSide", [], "method", false, true, false, 206), "getSide", [], "method", false, false, false, 207), "")) : ("")), "html", null, true);
                // line 207
                echo "</td>

                            <td>&nbsp;";
                // line 209
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sales_price"], "getIdInvoice", [], "method", false, true, false, 209), "getIdDetails", [], "method", false, true, false, 209), "getIdBody", [], "method", false, true, false, 209), "getBody", [], "method", true, true, false, 210)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sales_price"], "getIdInvoice", [], "method", false, true, false, 209), "getIdDetails", [], "method", false, true, false, 209), "getIdBody", [], "method", false, true, false, 209), "getBody", [], "method", false, false, false, 210), "")) : ("")), "html", null, true);
                // line 210
                echo "</td>

                            <td>&nbsp;";
                // line 212
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sales_price"], "getIdInvoice", [], "method", false, true, false, 212), "getIdDetails", [], "method", false, true, false, 212), "getIdAxle", [], "method", false, true, false, 212), "getAxle", [], "method", true, true, false, 213)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sales_price"], "getIdInvoice", [], "method", false, true, false, 212), "getIdDetails", [], "method", false, true, false, 212), "getIdAxle", [], "method", false, true, false, 212), "getAxle", [], "method", false, false, false, 213), "")) : ("")), "html", null, true);
                // line 213
                echo "</td>

                            <td>&nbsp;";
                // line 215
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sales_price"], "getIdInvoice", [], "method", false, false, false, 215), "getIdCounterparty", [], "method", false, false, false, 215), "getCounterparty", [], "method", false, false, false, 216), "html", null, true);
                // line 216
                echo "</td>

                            <td>&nbsp;";
                // line 218
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sales_price"], "getIdInvoice", [], "method", false, false, false, 218), "getIdPaymentMethod", [], "method", false, false, false, 218), "getMethod", [], "method", false, false, false, 219), "html", null, true);
                // line 219
                echo "</td>

                            <td>&nbsp;";
                // line 221
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sales_price"], "getDateSold", [], "method", false, false, false, 221), "d-m-Y"), "html", null, true);
                echo "</td>   

                            <td>&nbsp;";
                // line 223
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sales_price"], "getQuantitySold", [], "method", false, false, false, 223), "html", null, true);
                echo "</td>

                            <td>&nbsp;";
                // line 225
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sales_price"], "getIdInvoice", [], "method", false, false, false, 225), "getPrice", [], "method", false, false, false, 225) / 100) / twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 226
$context["sales_price"], "getIdInvoice", [], "method", false, false, false, 226), "getQuantity", [], "method", false, false, false, 226)), 2, ".", ""), "html", null, true);
                echo "</td>

                            <td>&nbsp;";
                // line 228
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sales_price"], "getIdInvoice", [], "method", false, false, false, 228), "getPrice", [], "method", false, false, false, 228) / 100) / twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 229
$context["sales_price"], "getIdInvoice", [], "method", false, false, false, 229), "getQuantity", [], "method", false, false, false, 229)) * twig_get_attribute($this->env, $this->source,                 // line 230
$context["sales_price"], "getQuantitySold", [], "method", false, false, false, 230)), 2, ".", ""), "html", null, true);
                echo "</td>

                            <td>&nbsp;";
                // line 232
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["sales_price"], "getPriceSold", [], "method", false, false, false, 232) / 100), 2, ".", ""), "html", null, true);
                echo "</td>

                            <form action=\"/refund_sales\" name=\"refund_sales\" method=\"get\">

                                <td><button class=\"refund\" type=\"submit\" name=\"refund_sales\" value=\"";
                // line 236
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sales_price"], "getId", [], "method", false, false, false, 236), "html", null, true);
                echo "\">Возврат</button></td>
                                
                            </form>
                        </tr> 
                    
                
            ";
            } else {
                // line 243
                echo "                <h2>Данные не найдены. Видите параметры в поиск</h2>  
            ";
            }
            // line 245
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
        return array (  848 => 245,  844 => 243,  834 => 236,  827 => 232,  822 => 230,  821 => 229,  820 => 228,  815 => 226,  814 => 225,  809 => 223,  804 => 221,  800 => 219,  798 => 218,  794 => 216,  792 => 215,  788 => 213,  786 => 212,  782 => 210,  780 => 209,  776 => 207,  774 => 206,  770 => 204,  768 => 203,  764 => 201,  762 => 200,  757 => 198,  752 => 196,  748 => 194,  746 => 193,  741 => 191,  737 => 189,  734 => 188,  729 => 187,  727 => 186,  717 => 185,  705 => 181,  685 => 163,  683 => 162,  673 => 160,  660 => 157,  650 => 156,  639 => 153,  629 => 152,  612 => 144,  607 => 142,  601 => 140,  595 => 133,  589 => 132,  587 => 131,  581 => 130,  577 => 129,  572 => 128,  567 => 127,  561 => 126,  559 => 125,  553 => 124,  546 => 122,  540 => 121,  538 => 120,  532 => 119,  527 => 118,  522 => 117,  516 => 116,  514 => 115,  508 => 114,  503 => 112,  499 => 111,  494 => 110,  488 => 109,  486 => 108,  480 => 107,  475 => 105,  471 => 104,  466 => 103,  460 => 102,  458 => 101,  452 => 100,  447 => 98,  443 => 97,  438 => 96,  432 => 95,  430 => 94,  424 => 93,  419 => 91,  415 => 90,  410 => 89,  404 => 88,  402 => 87,  396 => 86,  388 => 81,  384 => 80,  379 => 79,  373 => 78,  371 => 77,  365 => 76,  360 => 74,  356 => 73,  351 => 72,  345 => 71,  343 => 70,  337 => 69,  332 => 67,  328 => 66,  323 => 65,  317 => 64,  315 => 63,  309 => 62,  303 => 60,  299 => 56,  294 => 55,  288 => 54,  286 => 53,  280 => 52,  274 => 50,  270 => 46,  265 => 45,  259 => 44,  257 => 43,  251 => 42,  245 => 40,  241 => 36,  236 => 35,  230 => 34,  228 => 33,  222 => 32,  219 => 31,  216 => 30,  213 => 29,  210 => 28,  207 => 27,  204 => 26,  201 => 25,  198 => 24,  195 => 23,  192 => 22,  189 => 21,  186 => 20,  183 => 19,  180 => 18,  177 => 17,  172 => 15,  170 => 14,  160 => 13,  142 => 11,  123 => 9,  105 => 7,  86 => 5,  67 => 3,  44 => 1,);
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
<td>&nbsp;{{total_amount}}</td>
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

                            <form action=\"/refund_sales\" name=\"refund_sales\" method=\"get\">

                                <td><button class=\"refund\" type=\"submit\" name=\"refund_sales\" value=\"{{ sales_price.getId() }}\">Возврат</button></td>
                                
                            </form>
                        </tr> 
                    
                
            {% else %}
                <h2>Данные не найдены. Видите параметры в поиск</h2>  
            {% endif %}
        {% endfor %}
{% endblock tbody %}", "sales/sales.html.twig", "/var/www/templates/sales/sales.html.twig");
    }
}
