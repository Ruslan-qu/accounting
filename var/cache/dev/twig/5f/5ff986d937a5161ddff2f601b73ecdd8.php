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

/* ku_dir/ku_dir.html.twig */
class __TwigTemplate_a2f9c4772cc556a9878e70d65ded1166 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ku_dir/ku_dir.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ku_dir/ku_dir.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "ku_dir/ku_dir.html.twig", 1);
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
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_ku_dir_search"]) || array_key_exists("form_ku_dir_search", $context) ? $context["form_ku_dir_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_search" does not exist.', 12, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("complete_sales")]);
        echo "

       ";
        // line 27
        echo "
        ";
        // line 28
        $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_search"]) || array_key_exists("form_ku_dir_search", $context) ? $context["form_ku_dir_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_search" does not exist.', 28, $this->source); })()), "receipt_change", [], "any", false, false, false, 28), 'widget');
        // line 29
        echo "        ";
        $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_search"]) || array_key_exists("form_ku_dir_search", $context) ? $context["form_ku_dir_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_search" does not exist.', 29, $this->source); })()), "receipt_number", [], "any", false, false, false, 29), 'widget');
        // line 30
        echo "        ";
        $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_search"]) || array_key_exists("form_ku_dir_search", $context) ? $context["form_ku_dir_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_search" does not exist.', 30, $this->source); })()), "receipt_from_date", [], "any", false, false, false, 30), 'widget');
        // line 31
        echo "        ";
        $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_search"]) || array_key_exists("form_ku_dir_search", $context) ? $context["form_ku_dir_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_search" does not exist.', 31, $this->source); })()), "receipt_by_date", [], "any", false, false, false, 31), 'widget');
        // line 32
        echo "        ";
        $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_search"]) || array_key_exists("form_ku_dir_search", $context) ? $context["form_ku_dir_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_search" does not exist.', 32, $this->source); })()), "hidden_ku_dir", [], "any", false, false, false, 32), 'widget');
        // line 33
        echo "                                                    
        <th>";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_search"]) || array_key_exists("form_ku_dir_search", $context) ? $context["form_ku_dir_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_search" does not exist.', 34, $this->source); })()), "button_ku_dir", [], "any", false, false, false, 34), 'widget', ["label" => "Поиск по КуДир", "attr" => ["class" => "search"]]);
        // line 35
        echo "</th>
            
    ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_ku_dir_search"]) || array_key_exists("form_ku_dir_search", $context) ? $context["form_ku_dir_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_search" does not exist.', 37, $this->source); })()), 'form_end');
        echo " 

    <form action=\"/reset_ku_dir\" name=\"reset_ku_dir\">
    <th><button class=\"reset\" type=\"submit\" name=\"reset_ku_dir\">Сбросить</button></th>
    </form>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 45
    public function block_form_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_search"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_search"));

        // line 46
        echo "    ";
        // line 47
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_ku_dir_invoice_search"]) || array_key_exists("form_ku_dir_invoice_search", $context) ? $context["form_ku_dir_invoice_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_invoice_search" does not exist.', 47, $this->source); })()), 'form_start');
        echo "
";
        // line 49
        echo "        ";
        // line 50
        echo "        ";
        $context["number_document_search_ku_dir"] = "";
        // line 51
        echo "        ";
        $context["from__data_invoice_search_ku_dir"] = "";
        // line 52
        echo "        ";
        $context["by_data_invoice_search_ku_dir"] = "";
        // line 53
        echo "        ";
        $context["counterparty_search_ku_dir"] = "";
        // line 54
        echo "        ";
        $context["details_search_ku_dir"] = "";
        // line 55
        echo "        ";
        $context["manufacturer_search_ku_dir"] = "";
        // line 56
        echo "        ";
        $context["from__price_search_ku_dir"] = "";
        // line 57
        echo "        ";
        $context["by_price_search_ku_dir"] = "";
        // line 58
        echo "
        ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "flashes", ["search_number_document_invoice_ku_dir"], "method", false, false, false, 59));
        foreach ($context['_seq'] as $context["_key"] => $context["value_number_document_search"]) {
            echo "  
        ";
            // line 60
            $context["number_document_search_ku_dir"] = $context["value_number_document_search"];
            // line 61
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_number_document_search'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_invoice_search"]) || array_key_exists("form_ku_dir_invoice_search", $context) ? $context["form_ku_dir_invoice_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_invoice_search" does not exist.', 62, $this->source); })()), "search_number_document_invoice_ku_dir", [], "any", false, false, false, 62), 'label');
        echo "<br>
        ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_invoice_search"]) || array_key_exists("form_ku_dir_invoice_search", $context) ? $context["form_ku_dir_invoice_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_invoice_search" does not exist.', 63, $this->source); })()), "search_number_document_invoice_ku_dir", [], "any", false, false, false, 63), 'widget', ["value" =>         // line 64
(isset($context["number_document_search_ku_dir"]) || array_key_exists("number_document_search_ku_dir", $context) ? $context["number_document_search_ku_dir"] : (function () { throw new RuntimeError('Variable "number_document_search_ku_dir" does not exist.', 64, $this->source); })())]);
        echo "<br>
        ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 65, $this->source); })()), "flashes", ["children[search_number_document_invoice_ku_dir].data"], "method", false, false, false, 65));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 66
            echo "        ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_invoice_search"]) || array_key_exists("form_ku_dir_invoice_search", $context) ? $context["form_ku_dir_invoice_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_invoice_search" does not exist.', 68, $this->source); })()), "search_number_document_invoice_ku_dir", [], "any", false, false, false, 68), 'errors');
        echo "</th>

        ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 70, $this->source); })()), "flashes", ["from_data_invoice_ku_dir"], "method", false, false, false, 70));
        foreach ($context['_seq'] as $context["_key"] => $context["value_data_invoice_search"]) {
            echo "  
        ";
            // line 71
            $context["from__data_invoice_search_ku_dir"] = $context["value_data_invoice_search"];
            // line 72
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_data_invoice_search'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_invoice_search"]) || array_key_exists("form_ku_dir_invoice_search", $context) ? $context["form_ku_dir_invoice_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_invoice_search" does not exist.', 73, $this->source); })()), "from_data_invoice_ku_dir", [], "any", false, false, false, 73), 'label');
        echo "<br>
        ";
        // line 74
        echo "с ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_invoice_search"]) || array_key_exists("form_ku_dir_invoice_search", $context) ? $context["form_ku_dir_invoice_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_invoice_search" does not exist.', 74, $this->source); })()), "from_data_invoice_ku_dir", [], "any", false, false, false, 74), 'widget', ["value" =>         // line 75
(isset($context["from__data_invoice_search_ku_dir"]) || array_key_exists("from__data_invoice_search_ku_dir", $context) ? $context["from__data_invoice_search_ku_dir"] : (function () { throw new RuntimeError('Variable "from__data_invoice_search_ku_dir" does not exist.', 75, $this->source); })())]);
        echo "
        ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_invoice_search"]) || array_key_exists("form_ku_dir_invoice_search", $context) ? $context["form_ku_dir_invoice_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_invoice_search" does not exist.', 76, $this->source); })()), "from_data_invoice_ku_dir", [], "any", false, false, false, 76), 'errors');
        echo "<br>
        ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "flashes", ["by_data_invoice_ku_dir"], "method", false, false, false, 77));
        foreach ($context['_seq'] as $context["_key"] => $context["value_price"]) {
            echo "  
        ";
            // line 78
            $context["by_data_invoice_search_ku_dir"] = $context["value_price"];
            // line 79
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_price'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "        ";
        echo "по ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_invoice_search"]) || array_key_exists("form_ku_dir_invoice_search", $context) ? $context["form_ku_dir_invoice_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_invoice_search" does not exist.', 80, $this->source); })()), "by_data_invoice_ku_dir", [], "any", false, false, false, 80), 'widget', ["value" =>         // line 81
(isset($context["by_data_invoice_search_ku_dir"]) || array_key_exists("by_data_invoice_search_ku_dir", $context) ? $context["by_data_invoice_search_ku_dir"] : (function () { throw new RuntimeError('Variable "by_data_invoice_search_ku_dir" does not exist.', 81, $this->source); })())]);
        echo "<br>
        ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_invoice_search"]) || array_key_exists("form_ku_dir_invoice_search", $context) ? $context["form_ku_dir_invoice_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_invoice_search" does not exist.', 82, $this->source); })()), "by_data_invoice_ku_dir", [], "any", false, false, false, 82), 'errors');
        echo "</th>

        ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 84, $this->source); })()), "flashes", ["search_id_counterparty_invoice_ku_dir"], "method", false, false, false, 84));
        foreach ($context['_seq'] as $context["_key"] => $context["value_id_counterparty_search"]) {
            echo "  
        ";
            // line 85
            $context["counterparty_search_ku_dir"] = $context["value_id_counterparty_search"];
            // line 86
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_id_counterparty_search'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_invoice_search"]) || array_key_exists("form_ku_dir_invoice_search", $context) ? $context["form_ku_dir_invoice_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_invoice_search" does not exist.', 87, $this->source); })()), "search_id_counterparty_invoice_ku_dir", [], "any", false, false, false, 87), 'label');
        echo "<br>
        ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_invoice_search"]) || array_key_exists("form_ku_dir_invoice_search", $context) ? $context["form_ku_dir_invoice_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_invoice_search" does not exist.', 88, $this->source); })()), "search_id_counterparty_invoice_ku_dir", [], "any", false, false, false, 88), 'widget', ["value" =>         // line 89
(isset($context["counterparty_search_ku_dir"]) || array_key_exists("counterparty_search_ku_dir", $context) ? $context["counterparty_search_ku_dir"] : (function () { throw new RuntimeError('Variable "counterparty_search_ku_dir" does not exist.', 89, $this->source); })())]);
        echo "
        ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_invoice_search"]) || array_key_exists("form_ku_dir_invoice_search", $context) ? $context["form_ku_dir_invoice_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_invoice_search" does not exist.', 90, $this->source); })()), "search_id_counterparty_invoice_ku_dir", [], "any", false, false, false, 90), 'errors');
        echo "</th>

        ";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 92, $this->source); })()), "flashes", ["search_id_details_invoice_ku_dir"], "method", false, false, false, 92));
        foreach ($context['_seq'] as $context["_key"] => $context["value_id_details_search"]) {
            echo "  
        ";
            // line 93
            $context["details_search_ku_dir"] = $context["value_id_details_search"];
            // line 94
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_id_details_search'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_invoice_search"]) || array_key_exists("form_ku_dir_invoice_search", $context) ? $context["form_ku_dir_invoice_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_invoice_search" does not exist.', 95, $this->source); })()), "search_id_details_invoice_ku_dir", [], "any", false, false, false, 95), 'label');
        echo "<br>
        ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_invoice_search"]) || array_key_exists("form_ku_dir_invoice_search", $context) ? $context["form_ku_dir_invoice_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_invoice_search" does not exist.', 96, $this->source); })()), "search_id_details_invoice_ku_dir", [], "any", false, false, false, 96), 'widget', ["value" =>         // line 97
(isset($context["details_search_ku_dir"]) || array_key_exists("details_search_ku_dir", $context) ? $context["details_search_ku_dir"] : (function () { throw new RuntimeError('Variable "details_search_ku_dir" does not exist.', 97, $this->source); })())]);
        echo "<br>
        ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 98, $this->source); })()), "flashes", ["children[search_id_details_invoice_ku_dir].data"], "method", false, false, false, 98));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 99
            echo "        ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_invoice_search"]) || array_key_exists("form_ku_dir_invoice_search", $context) ? $context["form_ku_dir_invoice_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_invoice_search" does not exist.', 101, $this->source); })()), "search_id_details_invoice_ku_dir", [], "any", false, false, false, 101), 'errors');
        echo "</th>

        ";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 103, $this->source); })()), "flashes", ["search_id_manufacturer_invoice_ku_dir"], "method", false, false, false, 103));
        foreach ($context['_seq'] as $context["_key"] => $context["value_id_manufacturer_search"]) {
            echo "  
        ";
            // line 104
            $context["manufacturer_search_ku_dir"] = $context["value_id_manufacturer_search"];
            // line 105
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_id_manufacturer_search'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_invoice_search"]) || array_key_exists("form_ku_dir_invoice_search", $context) ? $context["form_ku_dir_invoice_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_invoice_search" does not exist.', 106, $this->source); })()), "search_id_manufacturer_invoice_ku_dir", [], "any", false, false, false, 106), 'label');
        echo "<br>
        ";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_invoice_search"]) || array_key_exists("form_ku_dir_invoice_search", $context) ? $context["form_ku_dir_invoice_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_invoice_search" does not exist.', 107, $this->source); })()), "search_id_manufacturer_invoice_ku_dir", [], "any", false, false, false, 107), 'widget', ["value" =>         // line 108
(isset($context["manufacturer_search_ku_dir"]) || array_key_exists("manufacturer_search_ku_dir", $context) ? $context["manufacturer_search_ku_dir"] : (function () { throw new RuntimeError('Variable "manufacturer_search_ku_dir" does not exist.', 108, $this->source); })())]);
        echo "<br>
        ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 109, $this->source); })()), "flashes", ["children[search_id_manufacturer_invoice_ku_dir].data"], "method", false, false, false, 109));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 110
            echo "        ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_invoice_search"]) || array_key_exists("form_ku_dir_invoice_search", $context) ? $context["form_ku_dir_invoice_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_invoice_search" does not exist.', 112, $this->source); })()), "search_id_manufacturer_invoice_ku_dir", [], "any", false, false, false, 112), 'errors');
        echo "</th>

        ";
        // line 114
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 114, $this->source); })()), "flashes", ["from_price_invoice_ku_dir"], "method", false, false, false, 114));
        foreach ($context['_seq'] as $context["_key"] => $context["value_s_price_search"]) {
            echo "  
        ";
            // line 115
            $context["from__price_search_ku_dir"] = $context["value_s_price_search"];
            // line 116
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_s_price_search'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_invoice_search"]) || array_key_exists("form_ku_dir_invoice_search", $context) ? $context["form_ku_dir_invoice_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_invoice_search" does not exist.', 117, $this->source); })()), "from_price_invoice_ku_dir", [], "any", false, false, false, 117), 'label');
        echo "<br>
        ";
        // line 118
        echo "с ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_invoice_search"]) || array_key_exists("form_ku_dir_invoice_search", $context) ? $context["form_ku_dir_invoice_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_invoice_search" does not exist.', 118, $this->source); })()), "from_price_invoice_ku_dir", [], "any", false, false, false, 118), 'widget', ["value" =>         // line 119
(isset($context["from__price_search_ku_dir"]) || array_key_exists("from__price_search_ku_dir", $context) ? $context["from__price_search_ku_dir"] : (function () { throw new RuntimeError('Variable "from__price_search_ku_dir" does not exist.', 119, $this->source); })())]);
        echo "
        ";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_invoice_search"]) || array_key_exists("form_ku_dir_invoice_search", $context) ? $context["form_ku_dir_invoice_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_invoice_search" does not exist.', 120, $this->source); })()), "from_price_invoice_ku_dir", [], "any", false, false, false, 120), 'errors');
        echo "<br>
        ";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 121, $this->source); })()), "flashes", ["by_price_invoice_ku_dir"], "method", false, false, false, 121));
        foreach ($context['_seq'] as $context["_key"] => $context["value_po_price_search"]) {
            echo "  
        ";
            // line 122
            $context["by_price_search_ku_dir"] = $context["value_po_price_search"];
            // line 123
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_po_price_search'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo "        ";
        echo "по ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_invoice_search"]) || array_key_exists("form_ku_dir_invoice_search", $context) ? $context["form_ku_dir_invoice_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_invoice_search" does not exist.', 124, $this->source); })()), "by_price_invoice_ku_dir", [], "any", false, false, false, 124), 'widget', ["value" =>         // line 125
(isset($context["by_price_search_ku_dir"]) || array_key_exists("by_price_search_ku_dir", $context) ? $context["by_price_search_ku_dir"] : (function () { throw new RuntimeError('Variable "by_price_search_ku_dir" does not exist.', 125, $this->source); })())]);
        echo "<br>
        ";
        // line 126
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_invoice_search"]) || array_key_exists("form_ku_dir_invoice_search", $context) ? $context["form_ku_dir_invoice_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_invoice_search" does not exist.', 126, $this->source); })()), "by_price_invoice_ku_dir", [], "any", false, false, false, 126), 'errors');
        echo "</th>

        <th>";
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_invoice_search"]) || array_key_exists("form_ku_dir_invoice_search", $context) ? $context["form_ku_dir_invoice_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_invoice_search" does not exist.', 128, $this->source); })()), "button_search_invoice_ku_dir", [], "any", false, false, false, 128), 'widget', ["label" => "Поиск счет-фактуру", "attr" => ["class" => "search"]]);
        // line 129
        echo "</th>
        
    ";
        // line 131
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_ku_dir_invoice_search"]) || array_key_exists("form_ku_dir_invoice_search", $context) ? $context["form_ku_dir_invoice_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_invoice_search" does not exist.', 131, $this->source); })()), 'form_end');
        echo "
    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 135
    public function block_table_total_amount($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_total_amount"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_total_amount"));

        // line 136
        echo "    ";
        if ((isset($context["arr_ku_dir"]) || array_key_exists("arr_ku_dir", $context) ? $context["arr_ku_dir"] : (function () { throw new RuntimeError('Variable "arr_ku_dir" does not exist.', 136, $this->source); })())) {
            // line 137
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

    // line 148
    public function block_tbody_total_amount($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tbody_total_amount"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tbody_total_amount"));

        // line 150
        echo "
";
        // line 152
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["arr_ku_dir"]) || array_key_exists("arr_ku_dir", $context) ? $context["arr_ku_dir"] : (function () { throw new RuntimeError('Variable "arr_ku_dir" does not exist.', 152, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["list_ku_dir"]) {
            // line 153
            echo "        ";
            if ($context["list_ku_dir"]) {
                // line 154
                echo "            ";
                $context["expenditure_total_amount"] = 0;
                // line 155
                echo "            ";
                $context["remains"] = 0;
                // line 156
                echo "            <tr>
                <td>&nbsp;";
                // line 157
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list_ku_dir"], "getId", [], "method", false, false, false, 157), "html", null, true);
                echo "</td>

                <td>&nbsp;";
                // line 159
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list_ku_dir"], "getReceiptChange", [], "method", false, false, false, 159), "html", null, true);
                echo "</td>

                <td>&nbsp;";
                // line 161
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list_ku_dir"], "getReceiptNumber", [], "method", false, false, false, 161), "html", null, true);
                echo "</td>

                <td>&nbsp;";
                // line 163
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list_ku_dir"], "getReceiptDate", [], "method", false, false, false, 163), "d-m-Y"), "html", null, true);
                echo "</td>

                <td>&nbsp;";
                // line 165
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list_ku_dir"], "getComing", [], "method", false, false, false, 165), "html", null, true);
                echo "</td>

                ";
                // line 167
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["arr_total_amount_expenditure"]) || array_key_exists("arr_total_amount_expenditure", $context) ? $context["arr_total_amount_expenditure"] : (function () { throw new RuntimeError('Variable "arr_total_amount_expenditure" does not exist.', 167, $this->source); })()));
                foreach ($context['_seq'] as $context["key"] => $context["total_amount_expenditure"]) {
                    // line 168
                    echo "
                    ";
                    // line 169
                    if ((twig_get_attribute($this->env, $this->source, $context["list_ku_dir"], "getId", [], "method", false, false, false, 169) == $context["key"])) {
                        // line 170
                        echo "
                        ";
                        // line 171
                        $context["expenditure_total_amount"] = $context["total_amount_expenditure"];
                        // line 172
                        echo "
                    ";
                    }
                    // line 173
                    echo "        
                    
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['total_amount_expenditure'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 175
                echo "  
                <td>&nbsp;";
                // line 176
                echo twig_escape_filter($this->env, (isset($context["expenditure_total_amount"]) || array_key_exists("expenditure_total_amount", $context) ? $context["expenditure_total_amount"] : (function () { throw new RuntimeError('Variable "expenditure_total_amount" does not exist.', 176, $this->source); })()), "html", null, true);
                echo "</td>

                ";
                // line 178
                if (((isset($context["expenditure_total_amount"]) || array_key_exists("expenditure_total_amount", $context) ? $context["expenditure_total_amount"] : (function () { throw new RuntimeError('Variable "expenditure_total_amount" does not exist.', 178, $this->source); })()) != 0)) {
                    // line 179
                    echo "
                    ";
                    // line 180
                    $context["remains"] = (twig_get_attribute($this->env, $this->source, $context["list_ku_dir"], "getComing", [], "method", false, false, false, 180) - (isset($context["expenditure_total_amount"]) || array_key_exists("expenditure_total_amount", $context) ? $context["expenditure_total_amount"] : (function () { throw new RuntimeError('Variable "expenditure_total_amount" does not exist.', 180, $this->source); })()));
                    // line 181
                    echo "
                ";
                }
                // line 182
                echo " 

                <td>&nbsp;";
                // line 184
                echo twig_escape_filter($this->env, (isset($context["remains"]) || array_key_exists("remains", $context) ? $context["remains"] : (function () { throw new RuntimeError('Variable "remains" does not exist.', 184, $this->source); })()), "html", null, true);
                echo "</td>

                <form action=\"/ku_dir_save\" name=\"ku_dir_save\" method=\"post\">

                    <input type=\"hidden\" name=\"id_ku_dir\" value=\"";
                // line 188
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list_ku_dir"], "getId", [], "method", false, false, false, 188), "html", null, true);
                echo "\"></input>

                    <td><button class=\"save\" type=\"submit\" name=\"expenditure\" 
                        value=\"";
                // line 191
                echo twig_escape_filter($this->env, (isset($context["expenditure_total_amount"]) || array_key_exists("expenditure_total_amount", $context) ? $context["expenditure_total_amount"] : (function () { throw new RuntimeError('Variable "expenditure_total_amount" does not exist.', 191, $this->source); })()), "html", null, true);
                echo "\">Сохранить</button></td>
                                
                </form>

            </tr> 
                                     
        ";
            }
            // line 198
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['list_ku_dir'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 201
    public function block_table_ku_dir_invoice($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_ku_dir_invoice"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_ku_dir_invoice"));

        // line 202
        echo "    ";
        if ((isset($context["arr_invoice_id_ku_dir"]) || array_key_exists("arr_invoice_id_ku_dir", $context) ? $context["arr_invoice_id_ku_dir"] : (function () { throw new RuntimeError('Variable "arr_invoice_id_ku_dir" does not exist.', 202, $this->source); })())) {
            // line 203
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

    // line 217
    public function block_tbody_ku_dir_invoice($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tbody_ku_dir_invoice"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tbody_ku_dir_invoice"));

        // line 218
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["arr_invoice_id_ku_dir"]) || array_key_exists("arr_invoice_id_ku_dir", $context) ? $context["arr_invoice_id_ku_dir"] : (function () { throw new RuntimeError('Variable "arr_invoice_id_ku_dir" does not exist.', 218, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["list_invoice_id_ku_dir"]) {
            // line 219
            echo "        ";
            if ($context["list_invoice_id_ku_dir"]) {
                echo "              
            <tr>
                <td>&nbsp;";
                // line 221
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list_invoice_id_ku_dir"], "getNumberDocument", [], "method", false, false, false, 221), "html", null, true);
                echo "</td>

                <td>&nbsp;";
                // line 223
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list_invoice_id_ku_dir"], "getDataInvoice", [], "method", false, false, false, 223), "d-m-Y"), "html", null, true);
                echo "</td>

                <td>&nbsp;";
                // line 225
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["list_invoice_id_ku_dir"], "getIdCounterparty", [], "method", false, false, false, 225), "getCounterparty", [], "method", false, false, false, 225), "html", null, true);
                echo "</td>

                <td>&nbsp;";
                // line 227
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["list_invoice_id_ku_dir"], "getIdDetails", [], "method", false, false, false, 227), "getPartNumbers", [], "method", false, false, false, 227), "html", null, true);
                echo "</td>

                <td>&nbsp;";
                // line 229
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["list_invoice_id_ku_dir"], "getIdManufacturer", [], "method", false, false, false, 229), "getManufacturers", [], "method", false, false, false, 229), "html", null, true);
                echo "</td>

                <td>&nbsp;";
                // line 231
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list_invoice_id_ku_dir"], "getQuantity", [], "method", false, false, false, 231), "html", null, true);
                echo "</td>

                <td>&nbsp;";
                // line 233
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["list_invoice_id_ku_dir"], "getPrice", [], "method", false, false, false, 233) / 100), 2, ".", ""), "html", null, true);
                echo "</td>

                <td>&nbsp;";
                // line 235
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["list_invoice_id_ku_dir"], "getIdKuDir", [], "method", false, false, false, 235), "getId", [], "method", false, false, false, 235), "html", null, true);
                echo "</td>

                <form action=\"/delete_list_invoice_id_ku_dir\" name=\"delete_list_invoice_id_ku_dir\" method=\"post\">

                    <td><button class=\"delete\" type=\"submit\" name=\"id_invoice\" 
                        value=\"";
                // line 240
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list_invoice_id_ku_dir"], "getId", [], "method", false, false, false, 240), "html", null, true);
                echo "\">Удалить</button></td>
                                
                </form>

            </tr>  
        ";
            }
            // line 246
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['list_invoice_id_ku_dir'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 249
    public function block_table_thead_tr($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_thead_tr"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_thead_tr"));

        // line 251
        echo "    ";
        if ((isset($context["arr_invoice_ku_dir"]) || array_key_exists("arr_invoice_ku_dir", $context) ? $context["arr_invoice_ku_dir"] : (function () { throw new RuntimeError('Variable "arr_invoice_ku_dir" does not exist.', 251, $this->source); })())) {
            // line 252
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

    // line 266
    public function block_tbody($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tbody"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tbody"));

        // line 268
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["arr_invoice_ku_dir"]) || array_key_exists("arr_invoice_ku_dir", $context) ? $context["arr_invoice_ku_dir"] : (function () { throw new RuntimeError('Variable "arr_invoice_ku_dir" does not exist.', 268, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["list_invoice_ku_dir"]) {
            // line 269
            echo "        ";
            if ($context["list_invoice_ku_dir"]) {
                // line 270
                echo "               
            <tr>
                <td>&nbsp;";
                // line 272
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list_invoice_ku_dir"], "getNumberDocument", [], "method", false, false, false, 272), "html", null, true);
                echo "</td>

                <td>&nbsp;";
                // line 274
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list_invoice_ku_dir"], "getDataInvoice", [], "method", false, false, false, 274), "d-m-Y"), "html", null, true);
                echo "</td>

                <td>&nbsp;";
                // line 276
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["list_invoice_ku_dir"], "getIdCounterparty", [], "method", false, false, false, 276), "getCounterparty", [], "method", false, false, false, 276), "html", null, true);
                echo "</td>

                <td>&nbsp;";
                // line 278
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["list_invoice_ku_dir"], "getIdDetails", [], "method", false, false, false, 278), "getPartNumbers", [], "method", false, false, false, 278), "html", null, true);
                echo "</td>

                <td>&nbsp;";
                // line 280
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["list_invoice_ku_dir"], "getIdManufacturer", [], "method", false, false, false, 280), "getManufacturers", [], "method", false, false, false, 280), "html", null, true);
                echo "</td>

                <td>&nbsp;";
                // line 282
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list_invoice_ku_dir"], "getQuantity", [], "method", false, false, false, 282), "html", null, true);
                echo "</td>

                <td>&nbsp;";
                // line 284
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["list_invoice_ku_dir"], "getPrice", [], "method", false, false, false, 284) / 100), 2, ".", ""), "html", null, true);
                echo "</td>

                <form action=\"/id_ku_dir_save\" name=\"id_ku_dir_save\" method=\"post\">

                    <td><input type=\"number\" name=\"id_ku_dir\"></td>

                    <td><button class=\"save\" type=\"submit\" name=\"id_invoice\" 
                        value=\"";
                // line 291
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list_invoice_ku_dir"], "getId", [], "method", false, false, false, 291), "html", null, true);
                echo "\">КуДир</button></td>
                                
                </form>
            </tr> 
                    
                
        ";
            } else {
                // line 298
                echo "            <h2>Данные не найдены. Видите параметры в Поиск счет-фактуру</h2>  
        ";
            }
            // line 300
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
        return "ku_dir/ku_dir.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  943 => 300,  939 => 298,  929 => 291,  919 => 284,  914 => 282,  909 => 280,  904 => 278,  899 => 276,  894 => 274,  889 => 272,  885 => 270,  882 => 269,  877 => 268,  867 => 266,  845 => 252,  842 => 251,  832 => 249,  818 => 246,  809 => 240,  801 => 235,  796 => 233,  791 => 231,  786 => 229,  781 => 227,  776 => 225,  771 => 223,  766 => 221,  760 => 219,  755 => 218,  745 => 217,  723 => 203,  720 => 202,  710 => 201,  696 => 198,  686 => 191,  680 => 188,  673 => 184,  669 => 182,  665 => 181,  663 => 180,  660 => 179,  658 => 178,  653 => 176,  650 => 175,  642 => 173,  638 => 172,  636 => 171,  633 => 170,  631 => 169,  628 => 168,  624 => 167,  619 => 165,  614 => 163,  609 => 161,  604 => 159,  599 => 157,  596 => 156,  593 => 155,  590 => 154,  587 => 153,  582 => 152,  579 => 150,  569 => 148,  550 => 137,  547 => 136,  537 => 135,  524 => 131,  520 => 129,  518 => 128,  513 => 126,  509 => 125,  506 => 124,  500 => 123,  498 => 122,  492 => 121,  488 => 120,  484 => 119,  482 => 118,  477 => 117,  471 => 116,  469 => 115,  463 => 114,  457 => 112,  448 => 110,  444 => 109,  440 => 108,  439 => 107,  434 => 106,  428 => 105,  426 => 104,  420 => 103,  414 => 101,  405 => 99,  401 => 98,  397 => 97,  396 => 96,  391 => 95,  385 => 94,  383 => 93,  377 => 92,  372 => 90,  368 => 89,  367 => 88,  362 => 87,  356 => 86,  354 => 85,  348 => 84,  343 => 82,  339 => 81,  336 => 80,  330 => 79,  328 => 78,  322 => 77,  318 => 76,  314 => 75,  312 => 74,  307 => 73,  301 => 72,  299 => 71,  293 => 70,  287 => 68,  278 => 66,  274 => 65,  270 => 64,  269 => 63,  264 => 62,  258 => 61,  256 => 60,  250 => 59,  247 => 58,  244 => 57,  241 => 56,  238 => 55,  235 => 54,  232 => 53,  229 => 52,  226 => 51,  223 => 50,  221 => 49,  216 => 47,  214 => 46,  204 => 45,  187 => 37,  183 => 35,  181 => 34,  178 => 33,  175 => 32,  172 => 31,  169 => 30,  166 => 29,  164 => 28,  161 => 27,  155 => 12,  145 => 11,  126 => 9,  107 => 7,  88 => 5,  69 => 3,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{title_logo}}{% endblock %}

{% block logo %}{{title_logo}}{% endblock %}

{% block legend %}{{legend}}{% endblock legend%}

{% block legend_search %}{{legend_search}}{% endblock legend_search %}

{% block form_save_edit_sales %}
    {{ form_start(form_ku_dir_search, {'action': path('complete_sales')}) }}

       {#<th>{{ form_label(form_ku_dir_search.receipt_change) }}<br>
        {{ form_widget(form_ku_dir_search.receipt_change) }}
        {{ form_errors(form_ku_dir_search.receipt_change) }}</th>   
                
        <th>{{ form_label(form_ku_dir_search.receipt_number) }}<br>
        {{ form_widget(form_ku_dir_search.receipt_number) }}
        {{ form_errors(form_ku_dir_search.receipt_number) }}</th>   

        <th>{{ form_label(form_ku_dir_search.receipt_from_date) }}<br>
        {{'с '}}{{ form_widget(form_ku_dir_search.receipt_from_date) }}
        {{ form_errors(form_ku_dir_search.receipt_from_date) }}<br>
        {{'по '}}{{ form_widget(form_ku_dir_search.receipt_by_date) }}<br>
        {{ form_errors(form_ku_dir_search.receipt_by_date) }}</th>#}

        {% do form_widget(form_ku_dir_search.receipt_change) %}
        {% do form_widget(form_ku_dir_search.receipt_number) %}
        {% do form_widget(form_ku_dir_search.receipt_from_date) %}
        {% do form_widget(form_ku_dir_search.receipt_by_date) %}
        {% do form_widget(form_ku_dir_search.hidden_ku_dir) %}
                                                    
        <th>{{ form_widget(form_ku_dir_search.button_ku_dir
            , {'label': 'Поиск по КуДир', 'attr': {'class': 'search'} }) }}</th>
            
    {{ form_end(form_ku_dir_search) }} 

    <form action=\"/reset_ku_dir\" name=\"reset_ku_dir\">
    <th><button class=\"reset\" type=\"submit\" name=\"reset_ku_dir\">Сбросить</button></th>
    </form>

{% endblock form_save_edit_sales %}

{% block form_search %}
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
        {% for message in app.flashes('children[search_number_document_invoice_ku_dir].data') %}
        {{ message }}
        {% endfor %}
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
        {% for message in app.flashes('children[search_id_details_invoice_ku_dir].data') %}
        {{ message }}
        {% endfor %}
        {{ form_errors(form_ku_dir_invoice_search.search_id_details_invoice_ku_dir) }}</th>

        {% for value_id_manufacturer_search in app.flashes('search_id_manufacturer_invoice_ku_dir') %}  
        {% set manufacturer_search_ku_dir = value_id_manufacturer_search %}
        {% endfor %}
        <th>{{ form_label(form_ku_dir_invoice_search.search_id_manufacturer_invoice_ku_dir) }}<br>
        {{ form_widget(form_ku_dir_invoice_search.search_id_manufacturer_invoice_ku_dir, 
            {value : manufacturer_search_ku_dir}) }}<br>
        {% for message in app.flashes('children[search_id_manufacturer_invoice_ku_dir].data') %}
        {{ message }}
        {% endfor %}
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
{% endblock tbody %}", "ku_dir/ku_dir.html.twig", "/var/www/templates/ku_dir/ku_dir.html.twig");
    }
}
