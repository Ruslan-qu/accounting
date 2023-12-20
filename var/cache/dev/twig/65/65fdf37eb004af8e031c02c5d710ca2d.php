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
        echo "
        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "flashes", ["search_number_document_refund"], "method", false, false, false, 28));
        foreach ($context['_seq'] as $context["_key"] => $context["value_number_document_search"]) {
            echo "  
        ";
            // line 29
            $context["number_document_search"] = $context["value_number_document_search"];
            // line 30
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_number_document_search'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 31, $this->source); })()), "search_number_document_refund", [], "any", false, false, false, 31), 'label');
        echo "<br>
        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 32, $this->source); })()), "search_number_document_refund", [], "any", false, false, false, 32), 'widget', ["value" => (isset($context["number_document_search"]) || array_key_exists("number_document_search", $context) ? $context["number_document_search"] : (function () { throw new RuntimeError('Variable "number_document_search" does not exist.', 32, $this->source); })())]);
        echo "<br>
        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "flashes", ["children[search_number_document_refund].data"], "method", false, false, false, 33));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 34
            echo "        ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 36, $this->source); })()), "search_number_document_refund", [], "any", false, false, false, 36), 'errors');
        echo "</th>

        ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "flashes", ["s_data_invoice_refund"], "method", false, false, false, 38));
        foreach ($context['_seq'] as $context["_key"] => $context["value_data_invoice_search"]) {
            echo "  
        ";
            // line 39
            $context["s_data_invoice_search"] = $context["value_data_invoice_search"];
            // line 40
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_data_invoice_search'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 41, $this->source); })()), "s_data_invoice_refund", [], "any", false, false, false, 41), 'label');
        echo "<br>
        ";
        // line 42
        echo "с ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 42, $this->source); })()), "s_data_invoice_refund", [], "any", false, false, false, 42), 'widget', ["value" => (isset($context["s_data_invoice_search"]) || array_key_exists("s_data_invoice_search", $context) ? $context["s_data_invoice_search"] : (function () { throw new RuntimeError('Variable "s_data_invoice_search" does not exist.', 42, $this->source); })())]);
        echo "
        ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 43, $this->source); })()), "s_data_invoice_refund", [], "any", false, false, false, 43), 'errors');
        echo "<br>
        ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "flashes", ["po_data_invoice_refund"], "method", false, false, false, 44));
        foreach ($context['_seq'] as $context["_key"] => $context["value_price"]) {
            echo "  
        ";
            // line 45
            $context["po_data_invoice_search"] = $context["value_price"];
            // line 46
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_price'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "        ";
        echo "по ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 47, $this->source); })()), "po_data_invoice_refund", [], "any", false, false, false, 47), 'widget', ["value" => (isset($context["po_data_invoice_search"]) || array_key_exists("po_data_invoice_search", $context) ? $context["po_data_invoice_search"] : (function () { throw new RuntimeError('Variable "po_data_invoice_search" does not exist.', 47, $this->source); })())]);
        echo "<br>
        ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 48, $this->source); })()), "po_data_invoice_refund", [], "any", false, false, false, 48), 'errors');
        echo "</th>

        ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "flashes", ["search_id_counterparty_refund"], "method", false, false, false, 50));
        foreach ($context['_seq'] as $context["_key"] => $context["value_id_counterparty_search"]) {
            echo "  
        ";
            // line 51
            $context["id_counterparty_search"] = $context["value_id_counterparty_search"];
            // line 52
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_id_counterparty_search'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 53, $this->source); })()), "search_id_counterparty_refund", [], "any", false, false, false, 53), 'label');
        echo "<br>
        ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 54, $this->source); })()), "search_id_counterparty_refund", [], "any", false, false, false, 54), 'widget', ["value" => (isset($context["id_counterparty_search"]) || array_key_exists("id_counterparty_search", $context) ? $context["id_counterparty_search"] : (function () { throw new RuntimeError('Variable "id_counterparty_search" does not exist.', 54, $this->source); })())]);
        echo "
        ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 55, $this->source); })()), "search_id_counterparty_refund", [], "any", false, false, false, 55), 'errors');
        echo "</th>

        ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "flashes", ["search_id_details_refund"], "method", false, false, false, 57));
        foreach ($context['_seq'] as $context["_key"] => $context["value_id_details_search"]) {
            echo "  
        ";
            // line 58
            $context["id_details_search"] = $context["value_id_details_search"];
            // line 59
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_id_details_search'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 60, $this->source); })()), "search_id_details_refund", [], "any", false, false, false, 60), 'label');
        echo "<br>
        ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 61, $this->source); })()), "search_id_details_refund", [], "any", false, false, false, 61), 'widget', ["value" => (isset($context["id_details_search"]) || array_key_exists("id_details_search", $context) ? $context["id_details_search"] : (function () { throw new RuntimeError('Variable "id_details_search" does not exist.', 61, $this->source); })())]);
        echo "<br>
        ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 62, $this->source); })()), "flashes", ["children[search_id_details_refund].data"], "method", false, false, false, 62));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 63
            echo "        ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 65, $this->source); })()), "search_id_details_refund", [], "any", false, false, false, 65), 'errors');
        echo "</th>

        ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "flashes", ["search_id_manufacturer_refund"], "method", false, false, false, 67));
        foreach ($context['_seq'] as $context["_key"] => $context["value_id_manufacturer_search"]) {
            echo "  
        ";
            // line 68
            $context["id_manufacturer_search"] = $context["value_id_manufacturer_search"];
            // line 69
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_id_manufacturer_search'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 70, $this->source); })()), "search_id_manufacturer_refund", [], "any", false, false, false, 70), 'label');
        echo "<br>
        ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 71, $this->source); })()), "search_id_manufacturer_refund", [], "any", false, false, false, 71), 'widget', ["value" => (isset($context["id_manufacturer_search"]) || array_key_exists("id_manufacturer_search", $context) ? $context["id_manufacturer_search"] : (function () { throw new RuntimeError('Variable "id_manufacturer_search" does not exist.', 71, $this->source); })())]);
        echo "<br>
        ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 72, $this->source); })()), "flashes", ["children[search_id_manufacturer_refund].data"], "method", false, false, false, 72));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 73
            echo "        ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 75, $this->source); })()), "search_id_manufacturer_refund", [], "any", false, false, false, 75), 'errors');
        echo "</th>

        ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "flashes", ["s_price_refund"], "method", false, false, false, 77));
        foreach ($context['_seq'] as $context["_key"] => $context["value_s_price_search"]) {
            echo "  
        ";
            // line 78
            $context["s_price_search"] = $context["value_s_price_search"];
            // line 79
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_s_price_search'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 80, $this->source); })()), "s_price_refund", [], "any", false, false, false, 80), 'label');
        echo "<br>
        ";
        // line 81
        echo "с ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 81, $this->source); })()), "s_price_refund", [], "any", false, false, false, 81), 'widget', ["value" => (isset($context["s_price_search"]) || array_key_exists("s_price_search", $context) ? $context["s_price_search"] : (function () { throw new RuntimeError('Variable "s_price_search" does not exist.', 81, $this->source); })())]);
        echo "
        ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 82, $this->source); })()), "s_price_refund", [], "any", false, false, false, 82), 'errors');
        echo "<br>
        ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 83, $this->source); })()), "flashes", ["po_price_refund"], "method", false, false, false, 83));
        foreach ($context['_seq'] as $context["_key"] => $context["value_po_price_search"]) {
            echo "  
        ";
            // line 84
            $context["po_price_search"] = $context["value_po_price_search"];
            // line 85
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_po_price_search'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "        ";
        echo "по ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 86, $this->source); })()), "po_price_refund", [], "any", false, false, false, 86), 'widget', ["value" => (isset($context["po_price_search"]) || array_key_exists("po_price_search", $context) ? $context["po_price_search"] : (function () { throw new RuntimeError('Variable "po_price_search" does not exist.', 86, $this->source); })())]);
        echo "<br>
        ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 87, $this->source); })()), "flashes", ["children[s_price_refund].data"], "method", false, false, false, 87));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 88
            echo "        ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 90, $this->source); })()), "flashes", ["children[po_price_refund].data"], "method", false, false, false, 90));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 91
            echo "        ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 93, $this->source); })()), "po_price_refund", [], "any", false, false, false, 93), 'errors');
        echo "</th>

        ";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 95, $this->source); })()), "flashes", ["data_refund"], "method", false, false, false, 95));
        foreach ($context['_seq'] as $context["_key"] => $context["value_data_refund_search"]) {
            echo "  
        ";
            // line 96
            $context["data_refund_search"] = $context["value_data_refund_search"];
            // line 97
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_data_refund_search'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 98, $this->source); })()), "data_refund", [], "any", false, false, false, 98), 'label');
        echo "<br>
        ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 99, $this->source); })()), "data_refund", [], "any", false, false, false, 99), 'widget', ["value" => (isset($context["data_refund_search"]) || array_key_exists("data_refund_search", $context) ? $context["data_refund_search"] : (function () { throw new RuntimeError('Variable "data_refund_search" does not exist.', 99, $this->source); })())]);
        echo "
        ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 100, $this->source); })()), "data_refund", [], "any", false, false, false, 100), 'errors');
        echo "</th>

        <th>";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 102, $this->source); })()), "button", [], "any", false, false, false, 102), 'widget', ["label" => "Поиск", "attr" => ["class" => "search"]]);
        echo "</th>
        
    ";
        // line 104
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 104, $this->source); })()), 'form_end');
        echo "
    <form action=\"/reset_refund\" name=\"reset_refund\">
    <th><button class=\"reset\" type=\"submit\" name=\"reset_refund\">Сбросить</button></th>
    </form>
    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 111
    public function block_table_thead_tr($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_thead_tr"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_thead_tr"));

        // line 113
        if ((isset($context["arr_refund"]) || array_key_exists("arr_refund", $context) ? $context["arr_refund"] : (function () { throw new RuntimeError('Variable "arr_refund" does not exist.', 113, $this->source); })())) {
            // line 114
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["arr_refund"]) || array_key_exists("arr_refund", $context) ? $context["arr_refund"] : (function () { throw new RuntimeError('Variable "arr_refund" does not exist.', 114, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["arr_search_refund"]) {
                // line 115
                echo "        ";
                if ($context["arr_search_refund"]) {
                    // line 116
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
                // line 129
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['arr_search_refund'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 131
            echo "    <h2>Видите параметры в поиск</h2> 
";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 135
    public function block_tbody($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tbody"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tbody"));

        // line 136
        echo "        ";
        // line 137
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["arr_refund"]) || array_key_exists("arr_refund", $context) ? $context["arr_refund"] : (function () { throw new RuntimeError('Variable "arr_refund" does not exist.', 137, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["arr_search_refund"]) {
            // line 138
            echo "            ";
            if ($context["arr_search_refund"]) {
                // line 139
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["arr_search_refund"]);
                foreach ($context['_seq'] as $context["_key"] => $context["search_refund"]) {
                    // line 140
                    echo "
                    <tr>
                            <td>";
                    // line 142
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["search_refund"], "getIdInvoiceRefundDate", [], "method", false, false, false, 142), "getNumberDocument", [], "method", false, false, false, 142), "html", null, true);
                    echo "</td>

                            <td>";
                    // line 144
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["search_refund"], "getIdInvoiceRefundDate", [], "method", false, false, false, 144), "getDataInvoice", [], "method", false, false, false, 144), "d-m-Y"), "html", null, true);
                    echo "</td>

                            <td>";
                    // line 146
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["search_refund"], "getIdInvoiceRefundDate", [], "method", false, false, false, 146), "getIdCounterparty", [], "method", false, false, false, 146), "getCounterparty", [], "method", false, false, false, 146), "html", null, true);
                    echo "</td>

                            <td>";
                    // line 148
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["search_refund"], "getIdInvoiceRefundDate", [], "method", false, false, false, 148), "getIdDetails", [], "method", false, false, false, 148), "getPartNumbers", [], "method", false, false, false, 148), "html", null, true);
                    echo "</td>

                            <td>";
                    // line 150
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["search_refund"], "getIdInvoiceRefundDate", [], "method", false, false, false, 150), "getIdManufacturer", [], "method", false, false, false, 150), "getManufacturers", [], "method", false, false, false, 150), "html", null, true);
                    echo "</td>

                            <td>";
                    // line 152
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["search_refund"], "getIdInvoiceRefundDate", [], "method", false, false, false, 152), "getQuantity", [], "method", false, false, false, 152), "html", null, true);
                    echo "</td>

                            <td>";
                    // line 154
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["search_refund"], "getIdInvoiceRefundDate", [], "method", false, false, false, 154), "getPrice", [], "method", false, false, false, 154) / 100), 2, ".", ""), "html", null, true);
                    echo "</td>

                            <td>";
                    // line 156
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["search_refund"], "getIdInvoiceRefundDate", [], "method", false, false, false, 156), "getIdRefundActivity", [], "method", false, false, false, 156), "getActivity", [], "method", false, false, false, 156), "html", null, true);
                    echo "</td>

                            <td>";
                    // line 158
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["search_refund"], "getRefundDate", [], "method", false, false, false, 158), "d-m-Y"), "html", null, true);
                    echo "</td>

                            <form action=\"/edit_activity\" name=\"edit_activity\" method=\"post\">

                                <td><button class=\"edit\" type=\"submit\" name=\"edit_activity\" value=\"";
                    // line 162
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["search_refund"], "getIdInvoiceRefundDate", [], "method", false, false, false, 162), "getId", [], "method", false, false, false, 162), "html", null, true);
                    echo "\">Изменить</button></td>  

                            </form>

                            <form action=\"/edit_refund\" name=\"edit_refund\" method=\"post\">

                                <td><button class=\"edit\" type=\"submit\" name=\"edit_refund\" value=\"";
                    // line 168
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["search_refund"], "getIdInvoiceRefundDate", [], "method", false, false, false, 168), "getId", [], "method", false, false, false, 168), "html", null, true);
                    echo "\">Отменить</button></td>  

                            </form>

                            <form action=\"/delete_refund\" name=\"delete_refund\" method=\"post\">

                                <td><button class=\"delete\" type=\"submit\" name=\"delete_refund\" value=\"";
                    // line 174
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["search_refund"], "getIdInvoiceRefundDate", [], "method", false, false, false, 174), "getId", [], "method", false, false, false, 174), "html", null, true);
                    echo "\">Удалить</button></td>
   
                            </form>
                    </tr>   
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['search_refund'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 179
                echo "            ";
            } else {
                // line 180
                echo "                <h2>Данные не найдены. Видите параметры в поиск</h2>  
            ";
            }
            // line 182
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['arr_search_refund'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 183
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
        return array (  716 => 183,  710 => 182,  706 => 180,  703 => 179,  692 => 174,  683 => 168,  674 => 162,  667 => 158,  662 => 156,  657 => 154,  652 => 152,  647 => 150,  642 => 148,  637 => 146,  632 => 144,  627 => 142,  623 => 140,  618 => 139,  615 => 138,  610 => 137,  608 => 136,  598 => 135,  586 => 131,  579 => 129,  564 => 116,  561 => 115,  556 => 114,  554 => 113,  544 => 111,  528 => 104,  523 => 102,  518 => 100,  514 => 99,  509 => 98,  503 => 97,  501 => 96,  495 => 95,  489 => 93,  480 => 91,  475 => 90,  466 => 88,  462 => 87,  456 => 86,  450 => 85,  448 => 84,  442 => 83,  438 => 82,  433 => 81,  428 => 80,  422 => 79,  420 => 78,  414 => 77,  408 => 75,  399 => 73,  395 => 72,  391 => 71,  386 => 70,  380 => 69,  378 => 68,  372 => 67,  366 => 65,  357 => 63,  353 => 62,  349 => 61,  344 => 60,  338 => 59,  336 => 58,  330 => 57,  325 => 55,  321 => 54,  316 => 53,  310 => 52,  308 => 51,  302 => 50,  297 => 48,  291 => 47,  285 => 46,  283 => 45,  277 => 44,  273 => 43,  268 => 42,  263 => 41,  257 => 40,  255 => 39,  249 => 38,  243 => 36,  234 => 34,  230 => 33,  226 => 32,  221 => 31,  215 => 30,  213 => 29,  207 => 28,  204 => 27,  201 => 26,  198 => 25,  195 => 24,  192 => 23,  189 => 22,  186 => 21,  183 => 20,  180 => 19,  177 => 18,  175 => 17,  170 => 15,  168 => 14,  158 => 13,  140 => 11,  121 => 9,  103 => 7,  84 => 5,  65 => 3,  42 => 1,);
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
