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

/* refund/refund.html.twig */
class __TwigTemplate_2e25de5c2f2cc5c67db1260468101bff extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "refund/refund.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "refund/refund.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "refund/refund.html.twig", 1);
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 15, $this->source); })()), 'form_start');
        echo "
";
        // line 17
        echo "        ";
        // line 18
        echo "        ";
        $context["number_document_search"] = "";
        // line 19
        echo "        ";
        $context["s_data_invoice_search"] = "";
        // line 20
        echo "        ";
        $context["po_data_invoice_search"] = "";
        // line 21
        echo "        ";
        $context["id_counterparty_search"] = "";
        // line 22
        echo "        ";
        $context["id_details_search"] = "";
        // line 23
        echo "        ";
        $context["id_manufacturer_search"] = "";
        // line 24
        echo "        ";
        $context["s_price_search"] = "";
        // line 25
        echo "        ";
        $context["po_price_search"] = "";
        // line 26
        echo "        ";
        $context["data_refund_search"] = "";
        // line 27
        echo "        ";
        $context["activity_refund_search"] = "";
        // line 28
        echo "
        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "flashes", ["search_number_document_refund"], "method", false, false, false, 29));
        foreach ($context['_seq'] as $context["_key"] => $context["value_number_document_search"]) {
            echo "  
        ";
            // line 30
            $context["number_document_search"] = $context["value_number_document_search"];
            // line 31
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_number_document_search'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 32, $this->source); })()), "search_number_document_refund", [], "any", false, false, false, 32), 'label');
        echo "<br>
        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 33, $this->source); })()), "search_number_document_refund", [], "any", false, false, false, 33), 'widget', ["value" => (isset($context["number_document_search"]) || array_key_exists("number_document_search", $context) ? $context["number_document_search"] : (function () { throw new RuntimeError('Variable "number_document_search" does not exist.', 33, $this->source); })())]);
        echo "<br>
        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "flashes", ["children[search_number_document_refund].data"], "method", false, false, false, 34));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 35
            echo "        ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 37, $this->source); })()), "search_number_document_refund", [], "any", false, false, false, 37), 'errors');
        echo "</th>

        ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "flashes", ["s_data_invoice_refund"], "method", false, false, false, 39));
        foreach ($context['_seq'] as $context["_key"] => $context["value_data_invoice_search"]) {
            echo "  
        ";
            // line 40
            $context["s_data_invoice_search"] = $context["value_data_invoice_search"];
            // line 41
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_data_invoice_search'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 42, $this->source); })()), "s_data_invoice_refund", [], "any", false, false, false, 42), 'label');
        echo "<br>
        ";
        // line 43
        echo "с ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 43, $this->source); })()), "s_data_invoice_refund", [], "any", false, false, false, 43), 'widget', ["value" => (isset($context["s_data_invoice_search"]) || array_key_exists("s_data_invoice_search", $context) ? $context["s_data_invoice_search"] : (function () { throw new RuntimeError('Variable "s_data_invoice_search" does not exist.', 43, $this->source); })())]);
        echo "
        ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 44, $this->source); })()), "s_data_invoice_refund", [], "any", false, false, false, 44), 'errors');
        echo "<br>
        ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "flashes", ["po_data_invoice_refund"], "method", false, false, false, 45));
        foreach ($context['_seq'] as $context["_key"] => $context["value_price"]) {
            echo "  
        ";
            // line 46
            $context["po_data_invoice_search"] = $context["value_price"];
            // line 47
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_price'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "        ";
        echo "по ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 48, $this->source); })()), "po_data_invoice_refund", [], "any", false, false, false, 48), 'widget', ["value" => (isset($context["po_data_invoice_search"]) || array_key_exists("po_data_invoice_search", $context) ? $context["po_data_invoice_search"] : (function () { throw new RuntimeError('Variable "po_data_invoice_search" does not exist.', 48, $this->source); })())]);
        echo "<br>
        ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 49, $this->source); })()), "po_data_invoice_refund", [], "any", false, false, false, 49), 'errors');
        echo "</th>

        ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "flashes", ["search_id_counterparty_refund"], "method", false, false, false, 51));
        foreach ($context['_seq'] as $context["_key"] => $context["value_id_counterparty_search"]) {
            echo "  
        ";
            // line 52
            $context["id_counterparty_search"] = $context["value_id_counterparty_search"];
            // line 53
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_id_counterparty_search'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 54, $this->source); })()), "search_id_counterparty_refund", [], "any", false, false, false, 54), 'label');
        echo "<br>
        ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 55, $this->source); })()), "search_id_counterparty_refund", [], "any", false, false, false, 55), 'widget', ["value" => (isset($context["id_counterparty_search"]) || array_key_exists("id_counterparty_search", $context) ? $context["id_counterparty_search"] : (function () { throw new RuntimeError('Variable "id_counterparty_search" does not exist.', 55, $this->source); })())]);
        echo "
        ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 56, $this->source); })()), "search_id_counterparty_refund", [], "any", false, false, false, 56), 'errors');
        echo "</th>

        ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "flashes", ["search_id_details_refund"], "method", false, false, false, 58));
        foreach ($context['_seq'] as $context["_key"] => $context["value_id_details_search"]) {
            echo "  
        ";
            // line 59
            $context["id_details_search"] = $context["value_id_details_search"];
            // line 60
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_id_details_search'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 61, $this->source); })()), "search_id_details_refund", [], "any", false, false, false, 61), 'label');
        echo "<br>
        ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 62, $this->source); })()), "search_id_details_refund", [], "any", false, false, false, 62), 'widget', ["value" => (isset($context["id_details_search"]) || array_key_exists("id_details_search", $context) ? $context["id_details_search"] : (function () { throw new RuntimeError('Variable "id_details_search" does not exist.', 62, $this->source); })())]);
        echo "<br>
        ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 63, $this->source); })()), "flashes", ["children[search_id_details_refund].data"], "method", false, false, false, 63));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 64
            echo "        ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 66, $this->source); })()), "search_id_details_refund", [], "any", false, false, false, 66), 'errors');
        echo "</th>

        ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "flashes", ["search_id_manufacturer_refund"], "method", false, false, false, 68));
        foreach ($context['_seq'] as $context["_key"] => $context["value_id_manufacturer_search"]) {
            echo "  
        ";
            // line 69
            $context["id_manufacturer_search"] = $context["value_id_manufacturer_search"];
            // line 70
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_id_manufacturer_search'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 71, $this->source); })()), "search_id_manufacturer_refund", [], "any", false, false, false, 71), 'label');
        echo "<br>
        ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 72, $this->source); })()), "search_id_manufacturer_refund", [], "any", false, false, false, 72), 'widget', ["value" => (isset($context["id_manufacturer_search"]) || array_key_exists("id_manufacturer_search", $context) ? $context["id_manufacturer_search"] : (function () { throw new RuntimeError('Variable "id_manufacturer_search" does not exist.', 72, $this->source); })())]);
        echo "<br>
        ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 73, $this->source); })()), "flashes", ["children[search_id_manufacturer_refund].data"], "method", false, false, false, 73));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 74
            echo "        ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 76, $this->source); })()), "search_id_manufacturer_refund", [], "any", false, false, false, 76), 'errors');
        echo "</th>

        ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 78, $this->source); })()), "flashes", ["s_price_refund"], "method", false, false, false, 78));
        foreach ($context['_seq'] as $context["_key"] => $context["value_s_price_search"]) {
            echo "  
        ";
            // line 79
            $context["s_price_search"] = $context["value_s_price_search"];
            // line 80
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_s_price_search'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 81, $this->source); })()), "s_price_refund", [], "any", false, false, false, 81), 'label');
        echo "<br>
        ";
        // line 82
        echo "с ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 82, $this->source); })()), "s_price_refund", [], "any", false, false, false, 82), 'widget', ["value" => (isset($context["s_price_search"]) || array_key_exists("s_price_search", $context) ? $context["s_price_search"] : (function () { throw new RuntimeError('Variable "s_price_search" does not exist.', 82, $this->source); })())]);
        echo "
        ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 83, $this->source); })()), "s_price_refund", [], "any", false, false, false, 83), 'errors');
        echo "<br>
        ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 84, $this->source); })()), "flashes", ["po_price_refund"], "method", false, false, false, 84));
        foreach ($context['_seq'] as $context["_key"] => $context["value_po_price_search"]) {
            echo "  
        ";
            // line 85
            $context["po_price_search"] = $context["value_po_price_search"];
            // line 86
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_po_price_search'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "        ";
        echo "по ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 87, $this->source); })()), "po_price_refund", [], "any", false, false, false, 87), 'widget', ["value" => (isset($context["po_price_search"]) || array_key_exists("po_price_search", $context) ? $context["po_price_search"] : (function () { throw new RuntimeError('Variable "po_price_search" does not exist.', 87, $this->source); })())]);
        echo "<br>
        ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 88, $this->source); })()), "flashes", ["children[s_price_refund].data"], "method", false, false, false, 88));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 89
            echo "        ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 91, $this->source); })()), "flashes", ["children[po_price_refund].data"], "method", false, false, false, 91));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 92
            echo "        ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 94, $this->source); })()), "po_price_refund", [], "any", false, false, false, 94), 'errors');
        echo "</th>

        ";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 96, $this->source); })()), "flashes", ["data_refund"], "method", false, false, false, 96));
        foreach ($context['_seq'] as $context["_key"] => $context["value_data_refund_search"]) {
            echo "  
        ";
            // line 97
            $context["data_refund_search"] = $context["value_data_refund_search"];
            // line 98
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_data_refund_search'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 99, $this->source); })()), "data_refund", [], "any", false, false, false, 99), 'label');
        echo "<br>
        ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 100, $this->source); })()), "data_refund", [], "any", false, false, false, 100), 'widget', ["value" => (isset($context["data_refund_search"]) || array_key_exists("data_refund_search", $context) ? $context["data_refund_search"] : (function () { throw new RuntimeError('Variable "data_refund_search" does not exist.', 100, $this->source); })())]);
        echo "
        ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 101, $this->source); })()), "data_refund", [], "any", false, false, false, 101), 'errors');
        echo "</th>

        ";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 103, $this->source); })()), "flashes", ["refund_activity_refund_refund"], "method", false, false, false, 103));
        foreach ($context['_seq'] as $context["_key"] => $context["value_activity_refund_search"]) {
            echo "  
        ";
            // line 104
            $context["activity_refund_search"] = $context["value_activity_refund_search"];
            // line 105
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_activity_refund_search'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 106, $this->source); })()), "refund_activity_refund", [], "any", false, false, false, 106), 'label');
        echo "<br>
        ";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 107, $this->source); })()), "refund_activity_refund", [], "any", false, false, false, 107), 'widget', ["value" => (isset($context["activity_refund_search"]) || array_key_exists("activity_refund_search", $context) ? $context["activity_refund_search"] : (function () { throw new RuntimeError('Variable "activity_refund_search" does not exist.', 107, $this->source); })())]);
        echo "
        ";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 108, $this->source); })()), "refund_activity_refund", [], "any", false, false, false, 108), 'errors');
        echo "</th>

        <th>";
        // line 110
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 110, $this->source); })()), "button", [], "any", false, false, false, 110), 'widget', ["label" => "Поиск", "attr" => ["class" => "search"]]);
        echo "</th>
        
    ";
        // line 112
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 112, $this->source); })()), 'form_end');
        echo "
    <form action=\"/reset_refund\" name=\"reset_refund\">
    <th><button class=\"reset\" type=\"submit\" name=\"reset_refund\">Сбросить</button></th>
    </form>
    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 119
    public function block_table_thead_tr($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_thead_tr"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_thead_tr"));

        // line 121
        if ((isset($context["arr_refund"]) || array_key_exists("arr_refund", $context) ? $context["arr_refund"] : (function () { throw new RuntimeError('Variable "arr_refund" does not exist.', 121, $this->source); })())) {
            // line 122
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["arr_refund"]) || array_key_exists("arr_refund", $context) ? $context["arr_refund"] : (function () { throw new RuntimeError('Variable "arr_refund" does not exist.', 122, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["arr_search_refund"]) {
                // line 123
                echo "        ";
                if ($context["arr_search_refund"]) {
                    // line 124
                    echo "            <th>№ Накладной</th>
            <th>Дата накладной</th>
            <th>Поставщик</th>
            <th>№ Детали</th>
            <th>Производитель</th>
            <th>Кол-во</th>
            <th>Цена общая</th>
            <th>Состояния</th>
            <th>Дата возврата</th>
            <th>Изменить<br>состояния</th>
            <th>Отменить<br>возврат</th>
            <th>Удалить</th>
        ";
                }
                // line 137
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['arr_search_refund'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 139
            echo "    <h2>Видите параметры в поиск</h2> 
";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 143
    public function block_tbody($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tbody"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tbody"));

        // line 144
        echo "        ";
        // line 145
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["arr_refund"]) || array_key_exists("arr_refund", $context) ? $context["arr_refund"] : (function () { throw new RuntimeError('Variable "arr_refund" does not exist.', 145, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["arr_search_refund"]) {
            // line 146
            echo "            ";
            if ($context["arr_search_refund"]) {
                // line 147
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["arr_search_refund"]);
                foreach ($context['_seq'] as $context["_key"] => $context["search_refund"]) {
                    // line 148
                    echo "
                    <tr>
                            <td>";
                    // line 150
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["search_refund"], "getIdInvoiceRefundDate", [], "method", false, false, false, 150), "getNumberDocument", [], "method", false, false, false, 150), "html", null, true);
                    echo "</td>

                            <td>";
                    // line 152
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["search_refund"], "getIdInvoiceRefundDate", [], "method", false, false, false, 152), "getDataInvoice", [], "method", false, false, false, 152), "d-m-Y"), "html", null, true);
                    echo "</td>

                            <td>";
                    // line 154
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["search_refund"], "getIdInvoiceRefundDate", [], "method", false, false, false, 154), "getIdCounterparty", [], "method", false, false, false, 154), "getCounterparty", [], "method", false, false, false, 154), "html", null, true);
                    echo "</td>

                            <td>";
                    // line 156
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["search_refund"], "getIdInvoiceRefundDate", [], "method", false, false, false, 156), "getIdDetails", [], "method", false, false, false, 156), "getPartNumbers", [], "method", false, false, false, 156), "html", null, true);
                    echo "</td>

                            <td>";
                    // line 158
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["search_refund"], "getIdInvoiceRefundDate", [], "method", false, false, false, 158), "getIdManufacturer", [], "method", false, false, false, 158), "getManufacturers", [], "method", false, false, false, 158), "html", null, true);
                    echo "</td>

                            <td>";
                    // line 160
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["search_refund"], "getIdInvoiceRefundDate", [], "method", false, false, false, 160), "getQuantity", [], "method", false, false, false, 160), "html", null, true);
                    echo "</td>

                            <td>";
                    // line 162
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["search_refund"], "getIdInvoiceRefundDate", [], "method", false, false, false, 162), "getPrice", [], "method", false, false, false, 162) / 100), 2, ".", ""), "html", null, true);
                    echo "</td>

                            <td>";
                    // line 164
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["search_refund"], "getIdInvoiceRefundDate", [], "method", false, false, false, 164), "getIdRefundActivity", [], "method", false, false, false, 164), "getActivity", [], "method", false, false, false, 164), "html", null, true);
                    echo "</td>

                            <td>";
                    // line 166
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["search_refund"], "getRefundDate", [], "method", false, false, false, 166), "d-m-Y"), "html", null, true);
                    echo "</td>

                            <form action=\"/edit_activity\" name=\"edit_activity\" method=\"post\">

                                <td><button class=\"edit\" type=\"submit\" name=\"edit_activity\" value=\"";
                    // line 170
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["search_refund"], "getIdInvoiceRefundDate", [], "method", false, false, false, 170), "getId", [], "method", false, false, false, 170), "html", null, true);
                    echo "\">Изменить</button></td>  

                            </form>

                            <form action=\"/edit_refund\" name=\"edit_refund\" method=\"post\">

                                <td><button class=\"edit\" type=\"submit\" name=\"edit_refund\" value=\"";
                    // line 176
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["search_refund"], "getIdInvoiceRefundDate", [], "method", false, false, false, 176), "getId", [], "method", false, false, false, 176), "html", null, true);
                    echo "\">Отменить</button></td>  

                            </form>

                            <form action=\"/delete_refund\" name=\"delete_refund\" method=\"post\">

                                <td><button class=\"delete\" type=\"submit\" name=\"delete_refund\" value=\"";
                    // line 182
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["search_refund"], "getIdInvoiceRefundDate", [], "method", false, false, false, 182), "getId", [], "method", false, false, false, 182), "html", null, true);
                    echo "\">Удалить</button></td>
   
                            </form>
                    </tr>   
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['search_refund'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 187
                echo "            ";
            } else {
                // line 188
                echo "                <h2>Данные не найдены. Видите параметры в поиск</h2>  
            ";
            }
            // line 190
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['arr_search_refund'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 191
        echo "    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "refund/refund.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  747 => 191,  741 => 190,  737 => 188,  734 => 187,  723 => 182,  714 => 176,  705 => 170,  698 => 166,  693 => 164,  688 => 162,  683 => 160,  678 => 158,  673 => 156,  668 => 154,  663 => 152,  658 => 150,  654 => 148,  649 => 147,  646 => 146,  641 => 145,  639 => 144,  629 => 143,  617 => 139,  610 => 137,  595 => 124,  592 => 123,  587 => 122,  585 => 121,  575 => 119,  559 => 112,  554 => 110,  549 => 108,  545 => 107,  540 => 106,  534 => 105,  532 => 104,  526 => 103,  521 => 101,  517 => 100,  512 => 99,  506 => 98,  504 => 97,  498 => 96,  492 => 94,  483 => 92,  478 => 91,  469 => 89,  465 => 88,  459 => 87,  453 => 86,  451 => 85,  445 => 84,  441 => 83,  436 => 82,  431 => 81,  425 => 80,  423 => 79,  417 => 78,  411 => 76,  402 => 74,  398 => 73,  394 => 72,  389 => 71,  383 => 70,  381 => 69,  375 => 68,  369 => 66,  360 => 64,  356 => 63,  352 => 62,  347 => 61,  341 => 60,  339 => 59,  333 => 58,  328 => 56,  324 => 55,  319 => 54,  313 => 53,  311 => 52,  305 => 51,  300 => 49,  294 => 48,  288 => 47,  286 => 46,  280 => 45,  276 => 44,  271 => 43,  266 => 42,  260 => 41,  258 => 40,  252 => 39,  246 => 37,  237 => 35,  233 => 34,  229 => 33,  224 => 32,  218 => 31,  216 => 30,  210 => 29,  207 => 28,  204 => 27,  201 => 26,  198 => 25,  195 => 24,  192 => 23,  189 => 22,  186 => 21,  183 => 20,  180 => 19,  177 => 18,  175 => 17,  170 => 15,  168 => 14,  158 => 13,  140 => 11,  121 => 9,  103 => 7,  84 => 5,  65 => 3,  42 => 1,);
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
    {#Форма поиска возврата#}
    {{ form_start(form_search) }}
{#{{ dump(app.flashes()) }}#}
        {#Переменный для вывода данных в форме когда форма не прошла валидацию#}
        {% set number_document_search = '' %}
        {% set s_data_invoice_search = '' %}
        {% set po_data_invoice_search = '' %}
        {% set id_counterparty_search = '' %}
        {% set id_details_search = '' %}
        {% set id_manufacturer_search = '' %}
        {% set s_price_search = '' %}
        {% set po_price_search = '' %}
        {% set data_refund_search = '' %}
        {% set activity_refund_search = '' %}

        {% for value_number_document_search in app.flashes('search_number_document_refund') %}  
        {% set number_document_search = value_number_document_search %}
        {% endfor %}
        <th>{{ form_label(form_search.search_number_document_refund) }}<br>
        {{ form_widget(form_search.search_number_document_refund, {value : number_document_search}) }}<br>
        {% for message in app.flashes('children[search_number_document_refund].data') %}
        {{ message }}
        {% endfor %}
        {{ form_errors(form_search.search_number_document_refund) }}</th>

        {% for value_data_invoice_search in app.flashes('s_data_invoice_refund') %}  
        {% set s_data_invoice_search = value_data_invoice_search %}
        {% endfor %}
        <th>{{ form_label(form_search.s_data_invoice_refund) }}<br>
        {{'с '}}{{ form_widget(form_search.s_data_invoice_refund, {value : s_data_invoice_search}) }}
        {{ form_errors(form_search.s_data_invoice_refund) }}<br>
        {% for value_price in app.flashes('po_data_invoice_refund') %}  
        {% set po_data_invoice_search = value_price %}
        {% endfor %}
        {{'по '}}{{ form_widget(form_search.po_data_invoice_refund, {value : po_data_invoice_search}) }}<br>
        {{ form_errors(form_search.po_data_invoice_refund) }}</th>

        {% for value_id_counterparty_search in app.flashes('search_id_counterparty_refund') %}  
        {% set id_counterparty_search = value_id_counterparty_search %}
        {% endfor %}
        <th>{{ form_label(form_search.search_id_counterparty_refund) }}<br>
        {{ form_widget(form_search.search_id_counterparty_refund, {value : id_counterparty_search}) }}
        {{ form_errors(form_search.search_id_counterparty_refund) }}</th>

        {% for value_id_details_search in app.flashes('search_id_details_refund') %}  
        {% set id_details_search = value_id_details_search %}
        {% endfor %}
        <th>{{ form_label(form_search.search_id_details_refund) }}<br>
        {{ form_widget(form_search.search_id_details_refund, {value : id_details_search}) }}<br>
        {% for message in app.flashes('children[search_id_details_refund].data') %}
        {{ message }}
        {% endfor %}
        {{ form_errors(form_search.search_id_details_refund) }}</th>

        {% for value_id_manufacturer_search in app.flashes('search_id_manufacturer_refund') %}  
        {% set id_manufacturer_search = value_id_manufacturer_search %}
        {% endfor %}
        <th>{{ form_label(form_search.search_id_manufacturer_refund) }}<br>
        {{ form_widget(form_search.search_id_manufacturer_refund, {value : id_manufacturer_search}) }}<br>
        {% for message in app.flashes('children[search_id_manufacturer_refund].data') %}
        {{ message }}
        {% endfor %}
        {{ form_errors(form_search.search_id_manufacturer_refund) }}</th>

        {% for value_s_price_search in app.flashes('s_price_refund') %}  
        {% set s_price_search = value_s_price_search %}
        {% endfor %}
        <th>{{ form_label(form_search.s_price_refund) }}<br>
        {{'с '}}{{ form_widget(form_search.s_price_refund, {value : s_price_search}) }}
        {{ form_errors(form_search.s_price_refund) }}<br>
        {% for value_po_price_search in app.flashes('po_price_refund') %}  
        {% set po_price_search = value_po_price_search %}
        {% endfor %}
        {{'по '}}{{ form_widget(form_search.po_price_refund, {value : po_price_search}) }}<br>
        {% for message in app.flashes('children[s_price_refund].data') %}
        {{ message }}
        {% endfor %}
        {% for message in app.flashes('children[po_price_refund].data') %}
        {{ message }}
        {% endfor %}
        {{ form_errors(form_search.po_price_refund) }}</th>

        {% for value_data_refund_search in app.flashes('data_refund') %}  
        {% set data_refund_search = value_data_refund_search %}
        {% endfor %}
        <th>{{ form_label(form_search.data_refund) }}<br>
        {{ form_widget(form_search.data_refund, {value : data_refund_search}) }}
        {{ form_errors(form_search.data_refund) }}</th>

        {% for value_activity_refund_search in app.flashes('refund_activity_refund_refund') %}  
        {% set activity_refund_search = value_activity_refund_search %}
        {% endfor %}
        <th>{{ form_label(form_search.refund_activity_refund) }}<br>
        {{ form_widget(form_search.refund_activity_refund, {value : activity_refund_search}) }}
        {{ form_errors(form_search.refund_activity_refund) }}</th>

        <th>{{ form_widget(form_search.button, { 'label': 'Поиск', 'attr': {'class': 'search'} }) }}</th>
        
    {{ form_end(form_search) }}
    <form action=\"/reset_refund\" name=\"reset_refund\">
    <th><button class=\"reset\" type=\"submit\" name=\"reset_refund\">Сбросить</button></th>
    </form>
    
{% endblock form_search %}

{% block table_thead_tr %}
{#Таблица#}
{% if arr_refund %}
    {% for arr_search_refund in arr_refund %}
        {% if arr_search_refund %}
            <th>№ Накладной</th>
            <th>Дата накладной</th>
            <th>Поставщик</th>
            <th>№ Детали</th>
            <th>Производитель</th>
            <th>Кол-во</th>
            <th>Цена общая</th>
            <th>Состояния</th>
            <th>Дата возврата</th>
            <th>Изменить<br>состояния</th>
            <th>Отменить<br>возврат</th>
            <th>Удалить</th>
        {% endif %}
    {% endfor %}
{% else %}
    <h2>Видите параметры в поиск</h2> 
{% endif %}
{% endblock table_thead_tr %}

{% block tbody %}
        {#выводит таблицу по поиску#}
        {% for arr_search_refund in arr_refund %}
            {% if arr_search_refund %}
                {% for search_refund in arr_search_refund %}

                    <tr>
                            <td>{{ search_refund.getIdInvoiceRefundDate().getNumberDocument() }}</td>

                            <td>{{ search_refund.getIdInvoiceRefundDate().getDataInvoice()|date(\"d-m-Y\") }}</td>

                            <td>{{ search_refund.getIdInvoiceRefundDate().getIdCounterparty().getCounterparty() }}</td>

                            <td>{{ search_refund.getIdInvoiceRefundDate().getIdDetails().getPartNumbers() }}</td>

                            <td>{{ search_refund.getIdInvoiceRefundDate().getIdManufacturer().getManufacturers() }}</td>

                            <td>{{ search_refund.getIdInvoiceRefundDate().getQuantity() }}</td>

                            <td>{{ (search_refund.getIdInvoiceRefundDate().getPrice() / 100)|number_format(2, '.', '')}}</td>

                            <td>{{ search_refund.getIdInvoiceRefundDate().getIdRefundActivity().getActivity() }}</td>

                            <td>{{ search_refund.getRefundDate()|date(\"d-m-Y\") }}</td>

                            <form action=\"/edit_activity\" name=\"edit_activity\" method=\"post\">

                                <td><button class=\"edit\" type=\"submit\" name=\"edit_activity\" value=\"{{ search_refund.getIdInvoiceRefundDate().getId() }}\">Изменить</button></td>  

                            </form>

                            <form action=\"/edit_refund\" name=\"edit_refund\" method=\"post\">

                                <td><button class=\"edit\" type=\"submit\" name=\"edit_refund\" value=\"{{ search_refund.getIdInvoiceRefundDate().getId() }}\">Отменить</button></td>  

                            </form>

                            <form action=\"/delete_refund\" name=\"delete_refund\" method=\"post\">

                                <td><button class=\"delete\" type=\"submit\" name=\"delete_refund\" value=\"{{ search_refund.getIdInvoiceRefundDate().getId() }}\">Удалить</button></td>
   
                            </form>
                    </tr>   
                {% endfor %}
            {% else %}
                <h2>Данные не найдены. Видите параметры в поиск</h2>  
            {% endif %}
        {% endfor %}
    
{% endblock tbody %}
", "refund/refund.html.twig", "/var/www/templates/refund/refund.html.twig");
    }
}
