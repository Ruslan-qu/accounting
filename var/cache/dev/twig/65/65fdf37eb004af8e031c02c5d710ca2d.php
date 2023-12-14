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
            'form_save_edit' => [$this, 'block_form_save_edit'],
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
    public function block_form_save_edit($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_save_edit"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_save_edit"));

        
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
        echo "
        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "flashes", ["search_number_document"], "method", false, false, false, 27));
        foreach ($context['_seq'] as $context["_key"] => $context["value_number_document_search"]) {
            echo "  
        ";
            // line 28
            $context["number_document_search"] = $context["value_number_document_search"];
            // line 29
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_number_document_search'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 30, $this->source); })()), "search_number_document", [], "any", false, false, false, 30), 'label');
        echo "<br>
        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 31, $this->source); })()), "search_number_document", [], "any", false, false, false, 31), 'widget', ["value" => (isset($context["number_document_search"]) || array_key_exists("number_document_search", $context) ? $context["number_document_search"] : (function () { throw new RuntimeError('Variable "number_document_search" does not exist.', 31, $this->source); })())]);
        echo "<br>
        ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "flashes", ["children[search_number_document].data"], "method", false, false, false, 32));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 33
            echo "        ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 35, $this->source); })()), "search_number_document", [], "any", false, false, false, 35), 'errors');
        echo "</th>

        ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "flashes", ["s_data_invoice"], "method", false, false, false, 37));
        foreach ($context['_seq'] as $context["_key"] => $context["value_data_invoice_search"]) {
            echo "  
        ";
            // line 38
            $context["s_data_invoice_search"] = $context["value_data_invoice_search"];
            // line 39
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_data_invoice_search'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 40, $this->source); })()), "s_data_invoice", [], "any", false, false, false, 40), 'label');
        echo "<br>
        ";
        // line 41
        echo "с ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 41, $this->source); })()), "s_data_invoice", [], "any", false, false, false, 41), 'widget', ["value" => (isset($context["s_data_invoice_search"]) || array_key_exists("s_data_invoice_search", $context) ? $context["s_data_invoice_search"] : (function () { throw new RuntimeError('Variable "s_data_invoice_search" does not exist.', 41, $this->source); })())]);
        echo "
        ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 42, $this->source); })()), "s_data_invoice", [], "any", false, false, false, 42), 'errors');
        echo "<br>
        ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "flashes", ["po_data_invoice"], "method", false, false, false, 43));
        foreach ($context['_seq'] as $context["_key"] => $context["value_price"]) {
            echo "  
        ";
            // line 44
            $context["po_data_invoice_search"] = $context["value_price"];
            // line 45
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_price'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "        ";
        echo "по ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 46, $this->source); })()), "po_data_invoice", [], "any", false, false, false, 46), 'widget', ["value" => (isset($context["po_data_invoice_search"]) || array_key_exists("po_data_invoice_search", $context) ? $context["po_data_invoice_search"] : (function () { throw new RuntimeError('Variable "po_data_invoice_search" does not exist.', 46, $this->source); })())]);
        echo "<br>
        ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 47, $this->source); })()), "po_data_invoice", [], "any", false, false, false, 47), 'errors');
        echo "</th>

        ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "flashes", ["search_id_counterparty"], "method", false, false, false, 49));
        foreach ($context['_seq'] as $context["_key"] => $context["value_id_counterparty_search"]) {
            echo "  
        ";
            // line 50
            $context["id_counterparty_search"] = $context["value_id_counterparty_search"];
            // line 51
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_id_counterparty_search'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 52, $this->source); })()), "search_id_counterparty", [], "any", false, false, false, 52), 'label');
        echo "<br>
        ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 53, $this->source); })()), "search_id_counterparty", [], "any", false, false, false, 53), 'widget', ["value" => (isset($context["id_counterparty_search"]) || array_key_exists("id_counterparty_search", $context) ? $context["id_counterparty_search"] : (function () { throw new RuntimeError('Variable "id_counterparty_search" does not exist.', 53, $this->source); })())]);
        echo "
        ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 54, $this->source); })()), "search_id_counterparty", [], "any", false, false, false, 54), 'errors');
        echo "</th>

        ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "flashes", ["search_id_details"], "method", false, false, false, 56));
        foreach ($context['_seq'] as $context["_key"] => $context["value_id_details_search"]) {
            echo "  
        ";
            // line 57
            $context["id_details_search"] = $context["value_id_details_search"];
            // line 58
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_id_details_search'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 59, $this->source); })()), "search_id_details", [], "any", false, false, false, 59), 'label');
        echo "<br>
        ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 60, $this->source); })()), "search_id_details", [], "any", false, false, false, 60), 'widget', ["value" => (isset($context["id_details_search"]) || array_key_exists("id_details_search", $context) ? $context["id_details_search"] : (function () { throw new RuntimeError('Variable "id_details_search" does not exist.', 60, $this->source); })())]);
        echo "<br>
        ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "flashes", ["children[search_id_details].data"], "method", false, false, false, 61));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 62
            echo "        ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 64, $this->source); })()), "search_id_details", [], "any", false, false, false, 64), 'errors');
        echo "</th>

        ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 66, $this->source); })()), "flashes", ["search_id_manufacturer"], "method", false, false, false, 66));
        foreach ($context['_seq'] as $context["_key"] => $context["value_id_manufacturer_search"]) {
            echo "  
        ";
            // line 67
            $context["id_manufacturer_search"] = $context["value_id_manufacturer_search"];
            // line 68
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_id_manufacturer_search'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 69, $this->source); })()), "search_id_manufacturer", [], "any", false, false, false, 69), 'label');
        echo "<br>
        ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 70, $this->source); })()), "search_id_manufacturer", [], "any", false, false, false, 70), 'widget', ["value" => (isset($context["id_manufacturer_search"]) || array_key_exists("id_manufacturer_search", $context) ? $context["id_manufacturer_search"] : (function () { throw new RuntimeError('Variable "id_manufacturer_search" does not exist.', 70, $this->source); })())]);
        echo "<br>
        ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 71, $this->source); })()), "flashes", ["children[search_id_manufacturer].data"], "method", false, false, false, 71));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 72
            echo "        ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 74, $this->source); })()), "search_id_manufacturer", [], "any", false, false, false, 74), 'errors');
        echo "</th>

        ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "flashes", ["s_price"], "method", false, false, false, 76));
        foreach ($context['_seq'] as $context["_key"] => $context["value_s_price_search"]) {
            echo "  
        ";
            // line 77
            $context["s_price_search"] = $context["value_s_price_search"];
            // line 78
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_s_price_search'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 79, $this->source); })()), "s_price", [], "any", false, false, false, 79), 'label');
        echo "<br>
        ";
        // line 80
        echo "с ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 80, $this->source); })()), "s_price", [], "any", false, false, false, 80), 'widget', ["value" => (isset($context["s_price_search"]) || array_key_exists("s_price_search", $context) ? $context["s_price_search"] : (function () { throw new RuntimeError('Variable "s_price_search" does not exist.', 80, $this->source); })())]);
        echo "
        ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 81, $this->source); })()), "s_price", [], "any", false, false, false, 81), 'errors');
        echo "<br>
        ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 82, $this->source); })()), "flashes", ["po_price"], "method", false, false, false, 82));
        foreach ($context['_seq'] as $context["_key"] => $context["value_po_price_search"]) {
            echo "  
        ";
            // line 83
            $context["po_price_search"] = $context["value_po_price_search"];
            // line 84
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_po_price_search'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "        ";
        echo "по ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 85, $this->source); })()), "po_price", [], "any", false, false, false, 85), 'widget', ["value" => (isset($context["po_price_search"]) || array_key_exists("po_price_search", $context) ? $context["po_price_search"] : (function () { throw new RuntimeError('Variable "po_price_search" does not exist.', 85, $this->source); })())]);
        echo "<br>
        ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 86, $this->source); })()), "flashes", ["children[s_price].data"], "method", false, false, false, 86));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 87
            echo "        ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 89, $this->source); })()), "flashes", ["children[po_price].data"], "method", false, false, false, 89));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 90
            echo "        ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 92, $this->source); })()), "po_price", [], "any", false, false, false, 92), 'errors');
        echo "</th>

        ";
        // line 94
        $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 94, $this->source); })()), "search_id_payment_method", [], "any", false, false, false, 94), 'widget');
        // line 95
        echo "
        <th>";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 96, $this->source); })()), "button", [], "any", false, false, false, 96), 'widget', ["label" => "Поиск", "attr" => ["class" => "search"]]);
        echo "</th>
        
    ";
        // line 98
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 98, $this->source); })()), 'form_end');
        echo "
    <form action=\"/reset_refund\" name=\"reset_refund\">
    <th><button class=\"reset\" type=\"submit\" name=\"reset_refund\">Сбросить</button></th>
    </form>
    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 105
    public function block_table_thead_tr($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_thead_tr"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_thead_tr"));

        // line 107
        if ((isset($context["arr_refund"]) || array_key_exists("arr_refund", $context) ? $context["arr_refund"] : (function () { throw new RuntimeError('Variable "arr_refund" does not exist.', 107, $this->source); })())) {
            // line 108
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["arr_refund"]) || array_key_exists("arr_refund", $context) ? $context["arr_refund"] : (function () { throw new RuntimeError('Variable "arr_refund" does not exist.', 108, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["arr_search_refund"]) {
                // line 109
                echo "        ";
                if ($context["arr_search_refund"]) {
                    // line 110
                    echo "            <th>№ Накладной</th>
            <th>Дата накладной</th>
            <th>Поставщик</th>
            <th>№ Детали</th>
            <th>Производитель</th>
            <th>Кол-во</th>
            <th>Цена общая</th>
            <th>Состояния</th>
            <th>Изменить<br>состояния</th>
            <th>Отменить<br>возврат</th>
            <th>Удалить</th>
        ";
                }
                // line 122
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['arr_search_refund'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 124
            echo "    <h2>Видите параметры в поиск</h2> 
";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 128
    public function block_tbody($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tbody"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tbody"));

        // line 129
        echo "        ";
        // line 130
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["arr_refund"]) || array_key_exists("arr_refund", $context) ? $context["arr_refund"] : (function () { throw new RuntimeError('Variable "arr_refund" does not exist.', 130, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["arr_search_refund"]) {
            // line 131
            echo "            ";
            if ($context["arr_search_refund"]) {
                // line 132
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["arr_search_refund"]);
                foreach ($context['_seq'] as $context["_key"] => $context["search_refund"]) {
                    // line 133
                    echo "
                    <tr>
                        ";
                    // line 135
                    if ((twig_get_attribute($this->env, $this->source, $context["search_refund"], "getRefund", [], "method", false, false, false, 135) == 2)) {
                        // line 136
                        echo "
                            <td>";
                        // line 137
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["search_refund"], "getNumberDocument", [], "method", false, false, false, 137), "html", null, true);
                        echo "</td>

                            <td>";
                        // line 139
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["search_refund"], "getDataInvoice", [], "method", false, false, false, 139), "d-m-Y"), "html", null, true);
                        echo "</td>

                            <td>";
                        // line 141
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["search_refund"], "getIdCounterparty", [], "method", false, false, false, 141), "getCounterparty", [], "method", false, false, false, 141), "html", null, true);
                        echo "</td>

                            <td>";
                        // line 143
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["search_refund"], "getIdDetails", [], "method", false, false, false, 143), "getPartNumbers", [], "method", false, false, false, 143), "html", null, true);
                        echo "</td>

                            <td>";
                        // line 145
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["search_refund"], "getIdManufacturer", [], "method", false, false, false, 145), "getManufacturers", [], "method", false, false, false, 145), "html", null, true);
                        echo "</td>

                            <td>";
                        // line 147
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["search_refund"], "getQuantity", [], "method", false, false, false, 147), "html", null, true);
                        echo "</td>

                            <td>";
                        // line 149
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["search_refund"], "getPrice", [], "method", false, false, false, 149) / 100), 2, ".", ""), "html", null, true);
                        echo "</td>

                            <td>";
                        // line 151
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["search_refund"], "getIdRefundActivity", [], "method", false, false, false, 151), "getActivity", [], "method", false, false, false, 151), "html", null, true);
                        echo "</td>

                            <form action=\"/edit_activity\" name=\"edit_activity\" method=\"post\">

                                <td><button class=\"edit\" type=\"submit\" name=\"edit_activity\" value=\"";
                        // line 155
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["search_refund"], "getId", [], "method", false, false, false, 155), "html", null, true);
                        echo "\">Изменить</button></td>  

                            </form>

                            <form action=\"/edit_refund\" name=\"edit_refund\" method=\"post\">

                                <td><button class=\"edit\" type=\"submit\" name=\"edit_refund\" value=\"";
                        // line 161
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["search_refund"], "getId", [], "method", false, false, false, 161), "html", null, true);
                        echo "\">Отменить</button></td>  

                            </form>

                            <form action=\"/delete_refund\" name=\"delete_refund\" method=\"post\">

                                <td><button class=\"delete\" type=\"submit\" name=\"delete_refund\" value=\"";
                        // line 167
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["search_refund"], "getId", [], "method", false, false, false, 167), "html", null, true);
                        echo "\">Удалить</button></td>
   
                            </form>
                        ";
                    }
                    // line 171
                    echo "                    </tr>   
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['search_refund'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 173
                echo "            ";
            } else {
                // line 174
                echo "                <h2>Данные не найдены. Видите параметры в поиск</h2>  
            ";
            }
            // line 176
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['arr_search_refund'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 177
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
        return array (  692 => 177,  686 => 176,  682 => 174,  679 => 173,  672 => 171,  665 => 167,  656 => 161,  647 => 155,  640 => 151,  635 => 149,  630 => 147,  625 => 145,  620 => 143,  615 => 141,  610 => 139,  605 => 137,  602 => 136,  600 => 135,  596 => 133,  591 => 132,  588 => 131,  583 => 130,  581 => 129,  571 => 128,  559 => 124,  552 => 122,  538 => 110,  535 => 109,  530 => 108,  528 => 107,  518 => 105,  502 => 98,  497 => 96,  494 => 95,  492 => 94,  486 => 92,  477 => 90,  472 => 89,  463 => 87,  459 => 86,  453 => 85,  447 => 84,  445 => 83,  439 => 82,  435 => 81,  430 => 80,  425 => 79,  419 => 78,  417 => 77,  411 => 76,  405 => 74,  396 => 72,  392 => 71,  388 => 70,  383 => 69,  377 => 68,  375 => 67,  369 => 66,  363 => 64,  354 => 62,  350 => 61,  346 => 60,  341 => 59,  335 => 58,  333 => 57,  327 => 56,  322 => 54,  318 => 53,  313 => 52,  307 => 51,  305 => 50,  299 => 49,  294 => 47,  288 => 46,  282 => 45,  280 => 44,  274 => 43,  270 => 42,  265 => 41,  260 => 40,  254 => 39,  252 => 38,  246 => 37,  240 => 35,  231 => 33,  227 => 32,  223 => 31,  218 => 30,  212 => 29,  210 => 28,  204 => 27,  201 => 26,  198 => 25,  195 => 24,  192 => 23,  189 => 22,  186 => 21,  183 => 20,  180 => 19,  177 => 18,  175 => 17,  170 => 15,  168 => 14,  158 => 13,  140 => 11,  121 => 9,  103 => 7,  84 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{title_logo}}{% endblock %}

{% block logo %}{{title_logo}}{% endblock %}

{% block legend %}{% endblock legend%}

{% block legend_search %}{{legend_search}}{% endblock legend_search %}

{% block form_save_edit %}{% endblock form_save_edit %}

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

        {% for value_number_document_search in app.flashes('search_number_document') %}  
        {% set number_document_search = value_number_document_search %}
        {% endfor %}
        <th>{{ form_label(form_search.search_number_document) }}<br>
        {{ form_widget(form_search.search_number_document, {value : number_document_search}) }}<br>
        {% for message in app.flashes('children[search_number_document].data') %}
        {{ message }}
        {% endfor %}
        {{ form_errors(form_search.search_number_document) }}</th>

        {% for value_data_invoice_search in app.flashes('s_data_invoice') %}  
        {% set s_data_invoice_search = value_data_invoice_search %}
        {% endfor %}
        <th>{{ form_label(form_search.s_data_invoice) }}<br>
        {{'с '}}{{ form_widget(form_search.s_data_invoice, {value : s_data_invoice_search}) }}
        {{ form_errors(form_search.s_data_invoice) }}<br>
        {% for value_price in app.flashes('po_data_invoice') %}  
        {% set po_data_invoice_search = value_price %}
        {% endfor %}
        {{'по '}}{{ form_widget(form_search.po_data_invoice, {value : po_data_invoice_search}) }}<br>
        {{ form_errors(form_search.po_data_invoice) }}</th>

        {% for value_id_counterparty_search in app.flashes('search_id_counterparty') %}  
        {% set id_counterparty_search = value_id_counterparty_search %}
        {% endfor %}
        <th>{{ form_label(form_search.search_id_counterparty) }}<br>
        {{ form_widget(form_search.search_id_counterparty, {value : id_counterparty_search}) }}
        {{ form_errors(form_search.search_id_counterparty) }}</th>

        {% for value_id_details_search in app.flashes('search_id_details') %}  
        {% set id_details_search = value_id_details_search %}
        {% endfor %}
        <th>{{ form_label(form_search.search_id_details) }}<br>
        {{ form_widget(form_search.search_id_details, {value : id_details_search}) }}<br>
        {% for message in app.flashes('children[search_id_details].data') %}
        {{ message }}
        {% endfor %}
        {{ form_errors(form_search.search_id_details) }}</th>

        {% for value_id_manufacturer_search in app.flashes('search_id_manufacturer') %}  
        {% set id_manufacturer_search = value_id_manufacturer_search %}
        {% endfor %}
        <th>{{ form_label(form_search.search_id_manufacturer) }}<br>
        {{ form_widget(form_search.search_id_manufacturer, {value : id_manufacturer_search}) }}<br>
        {% for message in app.flashes('children[search_id_manufacturer].data') %}
        {{ message }}
        {% endfor %}
        {{ form_errors(form_search.search_id_manufacturer) }}</th>

        {% for value_s_price_search in app.flashes('s_price') %}  
        {% set s_price_search = value_s_price_search %}
        {% endfor %}
        <th>{{ form_label(form_search.s_price) }}<br>
        {{'с '}}{{ form_widget(form_search.s_price, {value : s_price_search}) }}
        {{ form_errors(form_search.s_price) }}<br>
        {% for value_po_price_search in app.flashes('po_price') %}  
        {% set po_price_search = value_po_price_search %}
        {% endfor %}
        {{'по '}}{{ form_widget(form_search.po_price, {value : po_price_search}) }}<br>
        {% for message in app.flashes('children[s_price].data') %}
        {{ message }}
        {% endfor %}
        {% for message in app.flashes('children[po_price].data') %}
        {{ message }}
        {% endfor %}
        {{ form_errors(form_search.po_price) }}</th>

        {% do form_widget(form_search.search_id_payment_method) %}

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
                        {% if search_refund.getRefund() == 2 %}

                            <td>{{ search_refund.getNumberDocument() }}</td>

                            <td>{{ search_refund.getDataInvoice()|date(\"d-m-Y\") }}</td>

                            <td>{{ search_refund.getIdCounterparty().getCounterparty() }}</td>

                            <td>{{ search_refund.getIdDetails().getPartNumbers() }}</td>

                            <td>{{ search_refund.getIdManufacturer().getManufacturers() }}</td>

                            <td>{{ search_refund.getQuantity() }}</td>

                            <td>{{ (search_refund.getPrice() / 100)|number_format(2, '.', '')}}</td>

                            <td>{{ search_refund.getIdRefundActivity().getActivity() }}</td>

                            <form action=\"/edit_activity\" name=\"edit_activity\" method=\"post\">

                                <td><button class=\"edit\" type=\"submit\" name=\"edit_activity\" value=\"{{ search_refund.getId() }}\">Изменить</button></td>  

                            </form>

                            <form action=\"/edit_refund\" name=\"edit_refund\" method=\"post\">

                                <td><button class=\"edit\" type=\"submit\" name=\"edit_refund\" value=\"{{ search_refund.getId() }}\">Отменить</button></td>  

                            </form>

                            <form action=\"/delete_refund\" name=\"delete_refund\" method=\"post\">

                                <td><button class=\"delete\" type=\"submit\" name=\"delete_refund\" value=\"{{ search_refund.getId() }}\">Удалить</button></td>
   
                            </form>
                        {% endif %}
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
