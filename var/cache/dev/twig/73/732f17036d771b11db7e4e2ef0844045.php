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
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "flashes", ["children[part_numbers_sales].data_errors"], "method", false, false, false, 37));
        foreach ($context['_seq'] as $context["_key"] => $context["message_part_numbers_sales"]) {
            // line 38
            echo "            ";
            echo twig_escape_filter($this->env, $context["message_part_numbers_sales"], "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message_part_numbers_sales'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
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
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "flashes", ["children[original_number_sales].data_errors"], "method", false, false, false, 47));
        foreach ($context['_seq'] as $context["_key"] => $context["message_original_number_sales"]) {
            // line 48
            echo "            ";
            echo twig_escape_filter($this->env, $context["message_original_number_sales"], "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message_original_number_sales'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
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
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "flashes", ["children[manufacturers_sales].data_errors"], "method", false, false, false, 57));
        foreach ($context['_seq'] as $context["_key"] => $context["message_manufacturers_sales"]) {
            // line 58
            echo "            ";
            echo twig_escape_filter($this->env, $context["message_manufacturers_sales"], "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message_manufacturers_sales'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
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
        echo "
        ";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sales_search"]) || array_key_exists("form_sales_search", $context) ? $context["form_sales_search"] : (function () { throw new RuntimeError('Variable "form_sales_search" does not exist.', 119, $this->source); })()), "s_data_invoice_sales", [], "any", false, false, false, 119), 'errors');
        echo "<br>
        ";
        // line 120
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 120, $this->source); })()), "flashes", ["po_data_invoice_sales_search"], "method", false, false, false, 120));
        foreach ($context['_seq'] as $context["_key"] => $context["value_price"]) {
            echo "  
        ";
            // line 121
            $context["po_data_sales_search"] = $context["value_price"];
            // line 122
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_price'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "        ";
        echo "по ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sales_search"]) || array_key_exists("form_sales_search", $context) ? $context["form_sales_search"] : (function () { throw new RuntimeError('Variable "form_sales_search" does not exist.', 123, $this->source); })()), "po_data_invoice_sales", [], "any", false, false, false, 123), 'widget', ["value" => (isset($context["po_data_sales_search"]) || array_key_exists("po_data_sales_search", $context) ? $context["po_data_sales_search"] : (function () { throw new RuntimeError('Variable "po_data_sales_search" does not exist.', 123, $this->source); })())]);
        echo "<br>
        ";
        // line 124
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 124, $this->source); })()), "flashes", ["children[s_data_invoice_sales].data_errors"], "method", false, false, false, 124));
        foreach ($context['_seq'] as $context["_key"] => $context["message_s_data_invoice_sales"]) {
            // line 125
            echo "        ";
            echo twig_escape_filter($this->env, $context["message_s_data_invoice_sales"], "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message_s_data_invoice_sales'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 127, $this->source); })()), "flashes", ["children[po_data_invoice_sales].data_errors"], "method", false, false, false, 127));
        foreach ($context['_seq'] as $context["_key"] => $context["message_po_data_invoice_sales"]) {
            // line 128
            echo "        ";
            echo twig_escape_filter($this->env, $context["message_po_data_invoice_sales"], "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message_po_data_invoice_sales'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sales_search"]) || array_key_exists("form_sales_search", $context) ? $context["form_sales_search"] : (function () { throw new RuntimeError('Variable "form_sales_search" does not exist.', 130, $this->source); })()), "po_data_invoice_sales", [], "any", false, false, false, 130), 'errors');
        echo "</th>

        ";
        // line 132
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 132, $this->source); })()), "flashes", ["s_price_sales_search"], "method", false, false, false, 132));
        foreach ($context['_seq'] as $context["_key"] => $context["value_s_price_search"]) {
            echo "  
        ";
            // line 133
            $context["s_price_sales_search"] = $context["value_s_price_search"];
            // line 134
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_s_price_search'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sales_search"]) || array_key_exists("form_sales_search", $context) ? $context["form_sales_search"] : (function () { throw new RuntimeError('Variable "form_sales_search" does not exist.', 135, $this->source); })()), "s_price_sales", [], "any", false, false, false, 135), 'label');
        echo "<br>
        ";
        // line 136
        echo "с ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sales_search"]) || array_key_exists("form_sales_search", $context) ? $context["form_sales_search"] : (function () { throw new RuntimeError('Variable "form_sales_search" does not exist.', 136, $this->source); })()), "s_price_sales", [], "any", false, false, false, 136), 'widget', ["value" => (isset($context["s_price_sales_search"]) || array_key_exists("s_price_sales_search", $context) ? $context["s_price_sales_search"] : (function () { throw new RuntimeError('Variable "s_price_sales_search" does not exist.', 136, $this->source); })())]);
        echo "
        ";
        // line 137
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sales_search"]) || array_key_exists("form_sales_search", $context) ? $context["form_sales_search"] : (function () { throw new RuntimeError('Variable "form_sales_search" does not exist.', 137, $this->source); })()), "s_price_sales", [], "any", false, false, false, 137), 'errors');
        echo "<br>
        ";
        // line 138
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 138, $this->source); })()), "flashes", ["po_price_sales_search"], "method", false, false, false, 138));
        foreach ($context['_seq'] as $context["_key"] => $context["value_po_price_search"]) {
            echo "  
        ";
            // line 139
            $context["po_price_sales_search"] = $context["value_po_price_search"];
            // line 140
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_po_price_search'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        echo "        ";
        echo "по ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sales_search"]) || array_key_exists("form_sales_search", $context) ? $context["form_sales_search"] : (function () { throw new RuntimeError('Variable "form_sales_search" does not exist.', 141, $this->source); })()), "po_price_sales", [], "any", false, false, false, 141), 'widget', ["value" => (isset($context["po_price_sales_search"]) || array_key_exists("po_price_sales_search", $context) ? $context["po_price_sales_search"] : (function () { throw new RuntimeError('Variable "po_price_sales_search" does not exist.', 141, $this->source); })())]);
        echo "<br>
        ";
        // line 142
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 142, $this->source); })()), "flashes", ["children[s_price_sales].data_errors"], "method", false, false, false, 142));
        foreach ($context['_seq'] as $context["_key"] => $context["message_s_price_sales"]) {
            // line 143
            echo "        ";
            echo twig_escape_filter($this->env, $context["message_s_price_sales"], "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message_s_price_sales'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 145
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 145, $this->source); })()), "flashes", ["children[po_price_sales].data_errors"], "method", false, false, false, 145));
        foreach ($context['_seq'] as $context["_key"] => $context["message_po_price_sales"]) {
            // line 146
            echo "        ";
            echo twig_escape_filter($this->env, $context["message_po_price_sales"], "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message_po_price_sales'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 148
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sales_search"]) || array_key_exists("form_sales_search", $context) ? $context["form_sales_search"] : (function () { throw new RuntimeError('Variable "form_sales_search" does not exist.', 148, $this->source); })()), "po_price_sales", [], "any", false, false, false, 148), 'errors');
        echo "</th>

        <th>";
        // line 150
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sales_search"]) || array_key_exists("form_sales_search", $context) ? $context["form_sales_search"] : (function () { throw new RuntimeError('Variable "form_sales_search" does not exist.', 150, $this->source); })()), "button_sales", [], "any", false, false, false, 150), 'widget', ["label" => "Поиск", "attr" => ["class" => "search"]]);
        echo "</th>

    ";
        // line 152
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_sales_search"]) || array_key_exists("form_sales_search", $context) ? $context["form_sales_search"] : (function () { throw new RuntimeError('Variable "form_sales_search" does not exist.', 152, $this->source); })()), 'form_end');
        echo "

    <form action=\"/reset_sales\" name=\"reset_sales\">
        <th><button class=\"reset\" type=\"submit\" name=\"reset_sales\">Сбросить</button></th>
    </form>

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

        // line 164
        echo "            <th>№ Детали</th>
            <th>№ Оригинал</th>
            <th>Произ-тель</th>
            <th>Описание детали</th>
            <th>Название детали</th>
            <th>Марка</th>
            <th>Сторона</th>
            <th>Кузов</th>
            <th>Перед Зад</th>
            <th>Поставщик</th>
            <th>Способ оплаты</th>
            <th>Дата продажи</th>
            <th>Кол-во</th>
            <th>Цена шт</th>
            <th>Цена общая</th>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 186
    public function block_tbody($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tbody"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tbody"));

        // line 187
        echo "    ";
        // line 188
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["arr_sales"]) || array_key_exists("arr_sales", $context) ? $context["arr_sales"] : (function () { throw new RuntimeError('Variable "arr_sales" does not exist.', 188, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["arr_sales_price"]) {
            // line 189
            echo "            ";
            if ($context["arr_sales_price"]) {
                // line 190
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["arr_sales_price"]);
                foreach ($context['_seq'] as $context["_key"] => $context["sales_price"]) {
                    // line 191
                    echo "                        <tr>
                            <td>";
                    // line 192
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sales_price"], "getIdInvoice", [], "method", false, false, false, 192), "getIdDetails", [], "method", false, false, false, 192), "getPartNumbers", [], "method", false, false, false, 192), "html", null, true);
                    echo "</td>

                            <td>";
                    // line 194
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sales_price"], "getIdInvoice", [], "method", false, false, false, 194), "getIdDetails", [], "method", false, false, false, 194), "getIdOriginalNumber", [], "method", false, false, false, 194), "getOriginalNumber", [], "method", false, false, false, 195), "html", null, true);
                    // line 195
                    echo "</td>

                            <td>";
                    // line 197
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sales_price"], "getIdInvoice", [], "method", false, false, false, 197), "getIdManufacturer", [], "method", false, false, false, 197), "getManufacturers", [], "method", false, false, false, 197), "html", null, true);
                    echo "</td>

                            <td>";
                    // line 199
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sales_price"], "getIdInvoice", [], "method", false, false, false, 199), "getIdDetails", [], "method", false, false, false, 199), "getNameDetail", [], "method", false, false, false, 199), "html", null, true);
                    echo "</td>

                            <td>";
                    // line 201
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sales_price"], "getIdInvoice", [], "method", false, true, false, 201), "getIdDetails", [], "method", false, true, false, 201), "getIdPartName", [], "method", false, true, false, 201), "getPartName", [], "method", true, true, false, 202)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sales_price"], "getIdInvoice", [], "method", false, true, false, 201), "getIdDetails", [], "method", false, true, false, 201), "getIdPartName", [], "method", false, true, false, 201), "getPartName", [], "method", false, false, false, 202), "")) : ("")), "html", null, true);
                    // line 202
                    echo "</td>

                            <td>";
                    // line 204
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sales_price"], "getIdInvoice", [], "method", false, true, false, 204), "getIdDetails", [], "method", false, true, false, 204), "getIdCarBrand", [], "method", false, true, false, 204), "getCarBrand", [], "method", true, true, false, 205)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sales_price"], "getIdInvoice", [], "method", false, true, false, 204), "getIdDetails", [], "method", false, true, false, 204), "getIdCarBrand", [], "method", false, true, false, 204), "getCarBrand", [], "method", false, false, false, 205), "")) : ("")), "html", null, true);
                    // line 205
                    echo "</td>

                            <td>";
                    // line 207
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sales_price"], "getIdInvoice", [], "method", false, true, false, 207), "getIdDetails", [], "method", false, true, false, 207), "getIdSide", [], "method", false, true, false, 207), "getSide", [], "method", true, true, false, 208)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sales_price"], "getIdInvoice", [], "method", false, true, false, 207), "getIdDetails", [], "method", false, true, false, 207), "getIdSide", [], "method", false, true, false, 207), "getSide", [], "method", false, false, false, 208), "")) : ("")), "html", null, true);
                    // line 208
                    echo "</td>

                            <td>";
                    // line 210
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sales_price"], "getIdInvoice", [], "method", false, true, false, 210), "getIdDetails", [], "method", false, true, false, 210), "getIdBody", [], "method", false, true, false, 210), "getBody", [], "method", true, true, false, 211)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sales_price"], "getIdInvoice", [], "method", false, true, false, 210), "getIdDetails", [], "method", false, true, false, 210), "getIdBody", [], "method", false, true, false, 210), "getBody", [], "method", false, false, false, 211), "")) : ("")), "html", null, true);
                    // line 211
                    echo "</td>

                            <td>";
                    // line 213
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sales_price"], "getIdInvoice", [], "method", false, true, false, 213), "getIdDetails", [], "method", false, true, false, 213), "getIdAxle", [], "method", false, true, false, 213), "getAxle", [], "method", true, true, false, 214)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sales_price"], "getIdInvoice", [], "method", false, true, false, 213), "getIdDetails", [], "method", false, true, false, 213), "getIdAxle", [], "method", false, true, false, 213), "getAxle", [], "method", false, false, false, 214), "")) : ("")), "html", null, true);
                    // line 214
                    echo "</td>

                            <td>";
                    // line 216
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sales_price"], "getIdInvoice", [], "method", false, false, false, 216), "getIdCounterparty", [], "method", false, false, false, 216), "getCounterparty", [], "method", false, false, false, 217), "html", null, true);
                    // line 217
                    echo "</td>

                            <td>";
                    // line 219
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sales_price"], "getIdInvoice", [], "method", false, false, false, 219), "getIdPaymentMethod", [], "method", false, false, false, 219), "getMethod", [], "method", false, false, false, 220), "html", null, true);
                    // line 220
                    echo "</td>

                            <td>";
                    // line 222
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sales_price"], "getDateSold", [], "method", false, false, false, 222), "d-m-Y"), "html", null, true);
                    echo "</td>   

                            <td>";
                    // line 224
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sales_price"], "getQuantitySold", [], "method", false, false, false, 224), "html", null, true);
                    echo "</td>

                            <td>";
                    // line 226
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["sales_price"], "getPriceSold", [], "method", false, false, false, 226) / 100) / twig_get_attribute($this->env, $this->source,                     // line 227
$context["sales_price"], "getQuantitySold", [], "method", false, false, false, 227)), 2, ".", ""), "html", null, true);
                    echo "</td>

                            <td>";
                    // line 229
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["sales_price"], "getPriceSold", [], "method", false, false, false, 229) / 100), 2, ".", ""), "html", null, true);
                    echo "</td>
                        </tr> 
                    
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sales_price'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 233
                echo "            ";
            } else {
                // line 234
                echo "                <h2>Данные не найдены. Видите параметры в поиск</h2>  
            ";
            }
            // line 236
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['arr_sales_price'], $context['_parent'], $context['loop']);
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
        return array (  888 => 236,  884 => 234,  881 => 233,  871 => 229,  866 => 227,  865 => 226,  860 => 224,  855 => 222,  851 => 220,  849 => 219,  845 => 217,  843 => 216,  839 => 214,  837 => 213,  833 => 211,  831 => 210,  827 => 208,  825 => 207,  821 => 205,  819 => 204,  815 => 202,  813 => 201,  808 => 199,  803 => 197,  799 => 195,  797 => 194,  792 => 192,  789 => 191,  784 => 190,  781 => 189,  776 => 188,  774 => 187,  764 => 186,  739 => 164,  729 => 160,  712 => 152,  707 => 150,  701 => 148,  692 => 146,  687 => 145,  678 => 143,  674 => 142,  668 => 141,  662 => 140,  660 => 139,  654 => 138,  650 => 137,  645 => 136,  640 => 135,  634 => 134,  632 => 133,  626 => 132,  620 => 130,  611 => 128,  606 => 127,  597 => 125,  593 => 124,  587 => 123,  581 => 122,  579 => 121,  573 => 120,  569 => 119,  564 => 118,  559 => 117,  553 => 116,  551 => 115,  545 => 114,  540 => 112,  536 => 111,  531 => 110,  525 => 109,  523 => 108,  517 => 107,  512 => 105,  508 => 104,  503 => 103,  497 => 102,  495 => 101,  489 => 100,  484 => 98,  480 => 97,  475 => 96,  469 => 95,  467 => 94,  461 => 93,  456 => 91,  452 => 90,  447 => 89,  441 => 88,  439 => 87,  433 => 86,  425 => 81,  421 => 80,  416 => 79,  410 => 78,  408 => 77,  402 => 76,  397 => 74,  393 => 73,  388 => 72,  382 => 71,  380 => 70,  374 => 69,  369 => 67,  365 => 66,  360 => 65,  354 => 64,  352 => 63,  346 => 62,  340 => 60,  331 => 58,  327 => 57,  323 => 56,  318 => 55,  312 => 54,  310 => 53,  304 => 52,  298 => 50,  289 => 48,  285 => 47,  281 => 46,  276 => 45,  270 => 44,  268 => 43,  262 => 42,  256 => 40,  247 => 38,  243 => 37,  239 => 36,  234 => 35,  228 => 34,  226 => 33,  220 => 32,  217 => 31,  214 => 30,  211 => 29,  208 => 28,  205 => 27,  202 => 26,  199 => 25,  196 => 24,  193 => 23,  190 => 22,  187 => 21,  184 => 20,  181 => 19,  178 => 18,  175 => 17,  170 => 15,  168 => 14,  158 => 13,  140 => 11,  121 => 9,  103 => 7,  84 => 5,  65 => 3,  42 => 1,);
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
        {% for message_part_numbers_sales in app.flashes('children[part_numbers_sales].data_errors') %}
            {{ message_part_numbers_sales }}
        {% endfor %}
        {{ form_errors(form_sales_search.part_numbers_sales) }}</th>

        {% for value_original_number in app.flashes('original_number_sales_search') %}  
            {% set search_sales_id_original_number = value_original_number %}
        {% endfor %}
        <th>{{ form_label(form_sales_search.original_number_sales) }}<br>
        {{ form_widget(form_sales_search.original_number_sales, {value : search_sales_id_original_number}) }}<br>
        {% for message_original_number_sales in app.flashes('children[original_number_sales].data_errors') %}
            {{ message_original_number_sales }}
        {% endfor %}
        {{ form_errors(form_sales_search.original_number_sales) }}</th>

        {% for value_manufacturers in app.flashes('manufacturers_sales_search') %}  
                {% set search_sales_manufacturers = value_manufacturers %}
        {% endfor %}
        <th>{{ form_label(form_sales_search.manufacturers_sales) }}<br>
        {{ form_widget(form_sales_search.manufacturers_sales, {value : search_sales_manufacturers}) }}<br>
        {% for message_manufacturers_sales in app.flashes('children[manufacturers_sales].data_errors') %}
            {{ message_manufacturers_sales }}
        {% endfor %}
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
        {{'с '}}{{ form_widget(form_sales_search.s_data_invoice_sales, {value : s_data_sales_search}) }}
        {{ form_errors(form_sales_search.s_data_invoice_sales) }}<br>
        {% for value_price in app.flashes('po_data_invoice_sales_search') %}  
        {% set po_data_sales_search = value_price %}
        {% endfor %}
        {{'по '}}{{ form_widget(form_sales_search.po_data_invoice_sales, {value : po_data_sales_search}) }}<br>
        {% for message_s_data_invoice_sales in app.flashes('children[s_data_invoice_sales].data_errors') %}
        {{ message_s_data_invoice_sales }}
        {% endfor %}
        {% for message_po_data_invoice_sales in app.flashes('children[po_data_invoice_sales].data_errors') %}
        {{ message_po_data_invoice_sales }}
        {% endfor %}
        {{ form_errors(form_sales_search.po_data_invoice_sales) }}</th>

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
        {% for message_s_price_sales in app.flashes('children[s_price_sales].data_errors') %}
        {{ message_s_price_sales }}
        {% endfor %}
        {% for message_po_price_sales in app.flashes('children[po_price_sales].data_errors') %}
        {{ message_po_price_sales }}
        {% endfor %}
        {{ form_errors(form_sales_search.po_price_sales) }}</th>

        <th>{{ form_widget(form_sales_search.button_sales, { 'label': 'Поиск', 'attr': {'class': 'search'} }) }}</th>

    {{ form_end(form_sales_search) }}

    <form action=\"/reset_sales\" name=\"reset_sales\">
        <th><button class=\"reset\" type=\"submit\" name=\"reset_sales\">Сбросить</button></th>
    </form>

{% endblock form_search %}

{% block table_thead_tr %}
{#{% if arr_part_no %}
    {% for arr_search_part_no in arr_part_no %}
        {% if arr_search_part_no %}#}
            <th>№ Детали</th>
            <th>№ Оригинал</th>
            <th>Произ-тель</th>
            <th>Описание детали</th>
            <th>Название детали</th>
            <th>Марка</th>
            <th>Сторона</th>
            <th>Кузов</th>
            <th>Перед Зад</th>
            <th>Поставщик</th>
            <th>Способ оплаты</th>
            <th>Дата продажи</th>
            <th>Кол-во</th>
            <th>Цена шт</th>
            <th>Цена общая</th>
        {#{% endif %}
    {% endfor %}
{% else %}
    <h2>Видите параметры в поиск</h2> 
{% endif %}#}
{% endblock table_thead_tr %}

{% block tbody %}
    {#выводит таблицу по поиску#}
      {% for arr_sales_price in arr_sales %}
            {% if arr_sales_price %}
                {% for sales_price in arr_sales_price %}
                        <tr>
                            <td>{{ sales_price.getIdInvoice().getIdDetails().getPartNumbers() }}</td>

                            <td>{{ sales_price.getIdInvoice().getIdDetails()
                                .getIdOriginalNumber().getOriginalNumber() }}</td>

                            <td>{{ sales_price.getIdInvoice().getIdManufacturer().getManufacturers() }}</td>

                            <td>{{ sales_price.getIdInvoice().getIdDetails().getNameDetail() }}</td>

                            <td>{{ sales_price.getIdInvoice().getIdDetails()
                                .getIdPartName().getPartName()|default('') }}</td>

                            <td>{{ sales_price.getIdInvoice().getIdDetails()
                                .getIdCarBrand().getCarBrand()|default('') }}</td>

                            <td>{{ sales_price.getIdInvoice().getIdDetails()
                                .getIdSide().getSide()|default('') }}</td>

                            <td>{{ sales_price.getIdInvoice().getIdDetails()
                                .getIdBody().getBody()|default('') }}</td>

                            <td>{{ sales_price.getIdInvoice().getIdDetails()
                                .getIdAxle().getAxle()|default('') }}</td>

                            <td>{{ sales_price.getIdInvoice()
                                .getIdCounterparty().getCounterparty() }}</td>

                            <td>{{ sales_price.getIdInvoice()
                                .getIdPaymentMethod().getMethod() }}</td>

                            <td>{{ sales_price.getDateSold()|date(\"d-m-Y\") }}</td>   

                            <td>{{ sales_price.getQuantitySold() }}</td>

                            <td>{{ ((sales_price.getPriceSold() / 100) 
                                        / sales_price.getQuantitySold())|number_format(2, '.', '') }}</td>

                            <td>{{ (sales_price.getPriceSold() / 100)|number_format(2, '.', '') }}</td>
                        </tr> 
                    
                {% endfor %}
            {% else %}
                <h2>Данные не найдены. Видите параметры в поиск</h2>  
            {% endif %}
        {% endfor %}
{% endblock tbody %}", "sales/sales.html.twig", "/var/www/templates/sales/sales.html.twig");
    }
}
