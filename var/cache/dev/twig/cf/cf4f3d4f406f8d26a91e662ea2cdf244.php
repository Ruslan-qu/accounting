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

/* incoming_documents/incoming_documents.html.twig */
class __TwigTemplate_bfa9d504aaf9e02355ce6f00b19ce0c3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "incoming_documents/incoming_documents.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "incoming_documents/incoming_documents.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "incoming_documents/incoming_documents.html.twig", 1);
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
";
        // line 14
        echo "    
    ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_i_d"]) || array_key_exists("form_i_d", $context) ? $context["form_i_d"] : (function () { throw new RuntimeError('Variable "form_i_d" does not exist.', 15, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sales_incoming_documents")]);
        echo "

        ";
        // line 18
        echo "        ";
        // line 19
        echo "        ";
        $context["number_document"] = "";
        // line 20
        echo "        ";
        $context["data_invoice"] = "";
        // line 21
        echo "        ";
        $context["id_counterparty"] = "";
        // line 22
        echo "        ";
        $context["part_numbers"] = "";
        // line 23
        echo "        ";
        $context["manufacturers"] = "";
        // line 24
        echo "        ";
        // line 25
        echo "        ";
        $context["quantity"] = "";
        // line 26
        echo "        ";
        $context["price"] = "";
        // line 27
        echo "        ";
        $context["id_payment_method"] = "";
        // line 28
        echo "
        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "flashes", ["number_document"], "method", false, false, false, 29));
        foreach ($context['_seq'] as $context["_key"] => $context["value_number_document"]) {
            echo "  
        ";
            // line 30
            $context["number_document"] = $context["value_number_document"];
            // line 31
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_number_document'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_i_d"]) || array_key_exists("form_i_d", $context) ? $context["form_i_d"] : (function () { throw new RuntimeError('Variable "form_i_d" does not exist.', 32, $this->source); })()), "number_document", [], "any", false, false, false, 32), 'label');
        echo "<br>
        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_i_d"]) || array_key_exists("form_i_d", $context) ? $context["form_i_d"] : (function () { throw new RuntimeError('Variable "form_i_d" does not exist.', 33, $this->source); })()), "number_document", [], "any", false, false, false, 33), 'widget', ["value" => (isset($context["number_document"]) || array_key_exists("number_document", $context) ? $context["number_document"] : (function () { throw new RuntimeError('Variable "number_document" does not exist.', 33, $this->source); })())]);
        echo "<br>
        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "flashes", ["children[number_document].data"], "method", false, false, false, 34));
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_i_d"]) || array_key_exists("form_i_d", $context) ? $context["form_i_d"] : (function () { throw new RuntimeError('Variable "form_i_d" does not exist.', 37, $this->source); })()), "number_document", [], "any", false, false, false, 37), 'errors');
        echo "</th>

        ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "flashes", ["data_invoice"], "method", false, false, false, 39));
        foreach ($context['_seq'] as $context["_key"] => $context["value_data_invoice"]) {
            echo "  
        ";
            // line 40
            $context["data_invoice"] = $context["value_data_invoice"];
            // line 41
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_data_invoice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_i_d"]) || array_key_exists("form_i_d", $context) ? $context["form_i_d"] : (function () { throw new RuntimeError('Variable "form_i_d" does not exist.', 42, $this->source); })()), "data_invoice", [], "any", false, false, false, 42), 'label');
        echo "<br>
        ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_i_d"]) || array_key_exists("form_i_d", $context) ? $context["form_i_d"] : (function () { throw new RuntimeError('Variable "form_i_d" does not exist.', 43, $this->source); })()), "data_invoice", [], "any", false, false, false, 43), 'widget', ["value" => (isset($context["data_invoice"]) || array_key_exists("data_invoice", $context) ? $context["data_invoice"] : (function () { throw new RuntimeError('Variable "data_invoice" does not exist.', 43, $this->source); })())]);
        echo "
        ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_i_d"]) || array_key_exists("form_i_d", $context) ? $context["form_i_d"] : (function () { throw new RuntimeError('Variable "form_i_d" does not exist.', 44, $this->source); })()), "data_invoice", [], "any", false, false, false, 44), 'errors');
        echo "</th>

        ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "flashes", ["id_counterparty"], "method", false, false, false, 46));
        foreach ($context['_seq'] as $context["_key"] => $context["value_id_counterparty"]) {
            echo "  
        ";
            // line 47
            $context["id_counterparty"] = $context["value_id_counterparty"];
            // line 48
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_id_counterparty'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_i_d"]) || array_key_exists("form_i_d", $context) ? $context["form_i_d"] : (function () { throw new RuntimeError('Variable "form_i_d" does not exist.', 49, $this->source); })()), "id_counterparty", [], "any", false, false, false, 49), 'label');
        echo "<br>
        ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_i_d"]) || array_key_exists("form_i_d", $context) ? $context["form_i_d"] : (function () { throw new RuntimeError('Variable "form_i_d" does not exist.', 50, $this->source); })()), "id_counterparty", [], "any", false, false, false, 50), 'widget', ["value" => (isset($context["id_counterparty"]) || array_key_exists("id_counterparty", $context) ? $context["id_counterparty"] : (function () { throw new RuntimeError('Variable "id_counterparty" does not exist.', 50, $this->source); })())]);
        echo "
        ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_i_d"]) || array_key_exists("form_i_d", $context) ? $context["form_i_d"] : (function () { throw new RuntimeError('Variable "form_i_d" does not exist.', 51, $this->source); })()), "id_counterparty", [], "any", false, false, false, 51), 'errors');
        echo "</th>

        ";
        // line 54
        echo "
            ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "flashes", ["part_numbers"], "method", false, false, false, 55));
        foreach ($context['_seq'] as $context["_key"] => $context["value_part_numbers"]) {
            echo "  
                ";
            // line 56
            $context["part_numbers"] = $context["value_part_numbers"];
            // line 57
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_part_numbers'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "            <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n"]) || array_key_exists("form_p_n", $context) ? $context["form_p_n"] : (function () { throw new RuntimeError('Variable "form_p_n" does not exist.', 58, $this->source); })()), "part_numbers", [], "any", false, false, false, 58), 'label');
        echo "<br>
            ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n"]) || array_key_exists("form_p_n", $context) ? $context["form_p_n"] : (function () { throw new RuntimeError('Variable "form_p_n" does not exist.', 59, $this->source); })()), "part_numbers", [], "any", false, false, false, 59), 'widget', ["value" => (isset($context["part_numbers"]) || array_key_exists("part_numbers", $context) ? $context["part_numbers"] : (function () { throw new RuntimeError('Variable "part_numbers" does not exist.', 59, $this->source); })())]);
        echo "<br>
            ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "flashes", ["children[part_numbers].data"], "method", false, false, false, 60));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 61
            echo "                ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n"]) || array_key_exists("form_p_n", $context) ? $context["form_p_n"] : (function () { throw new RuntimeError('Variable "form_p_n" does not exist.', 63, $this->source); })()), "part_numbers", [], "any", false, false, false, 63), 'errors');
        echo "</th>

            ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 65, $this->source); })()), "flashes", ["manufacturers"], "method", false, false, false, 65));
        foreach ($context['_seq'] as $context["_key"] => $context["value_manufacturers"]) {
            echo "  
                ";
            // line 66
            $context["manufacturers"] = $context["value_manufacturers"];
            // line 67
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_manufacturers'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "            <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n"]) || array_key_exists("form_p_n", $context) ? $context["form_p_n"] : (function () { throw new RuntimeError('Variable "form_p_n" does not exist.', 68, $this->source); })()), "manufacturers", [], "any", false, false, false, 68), 'label');
        echo "<br>
            ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n"]) || array_key_exists("form_p_n", $context) ? $context["form_p_n"] : (function () { throw new RuntimeError('Variable "form_p_n" does not exist.', 69, $this->source); })()), "manufacturers", [], "any", false, false, false, 69), 'widget', ["value" => (isset($context["manufacturers"]) || array_key_exists("manufacturers", $context) ? $context["manufacturers"] : (function () { throw new RuntimeError('Variable "manufacturers" does not exist.', 69, $this->source); })())]);
        echo "<br>
            ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 70, $this->source); })()), "flashes", ["children[manufacturers].data"], "method", false, false, false, 70));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 71
            echo "                ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n"]) || array_key_exists("form_p_n", $context) ? $context["form_p_n"] : (function () { throw new RuntimeError('Variable "form_p_n" does not exist.', 73, $this->source); })()), "manufacturers", [], "any", false, false, false, 73), 'errors');
        echo "</th>

            ";
        // line 84
        echo "
        ";
        // line 86
        echo "        
        ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 87, $this->source); })()), "flashes", ["quantity"], "method", false, false, false, 87));
        foreach ($context['_seq'] as $context["_key"] => $context["value_quantity"]) {
            echo "  
        ";
            // line 88
            $context["quantity"] = $context["value_quantity"];
            // line 89
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_quantity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_i_d"]) || array_key_exists("form_i_d", $context) ? $context["form_i_d"] : (function () { throw new RuntimeError('Variable "form_i_d" does not exist.', 90, $this->source); })()), "quantity", [], "any", false, false, false, 90), 'label');
        echo "<br>
        ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_i_d"]) || array_key_exists("form_i_d", $context) ? $context["form_i_d"] : (function () { throw new RuntimeError('Variable "form_i_d" does not exist.', 91, $this->source); })()), "quantity", [], "any", false, false, false, 91), 'widget', ["value" => (isset($context["quantity"]) || array_key_exists("quantity", $context) ? $context["quantity"] : (function () { throw new RuntimeError('Variable "quantity" does not exist.', 91, $this->source); })())]);
        echo "<br>
        ";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 92, $this->source); })()), "flashes", ["children[quantity].data"], "method", false, false, false, 92));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 93
            echo "        ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_i_d"]) || array_key_exists("form_i_d", $context) ? $context["form_i_d"] : (function () { throw new RuntimeError('Variable "form_i_d" does not exist.', 95, $this->source); })()), "quantity", [], "any", false, false, false, 95), 'errors');
        echo "</th>

        ";
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 97, $this->source); })()), "flashes", ["price"], "method", false, false, false, 97));
        foreach ($context['_seq'] as $context["_key"] => $context["value_price"]) {
            echo "  
        ";
            // line 98
            $context["price"] = $context["value_price"];
            // line 99
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_price'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_i_d"]) || array_key_exists("form_i_d", $context) ? $context["form_i_d"] : (function () { throw new RuntimeError('Variable "form_i_d" does not exist.', 100, $this->source); })()), "price", [], "any", false, false, false, 100), 'label');
        echo "<br>
        ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_i_d"]) || array_key_exists("form_i_d", $context) ? $context["form_i_d"] : (function () { throw new RuntimeError('Variable "form_i_d" does not exist.', 101, $this->source); })()), "price", [], "any", false, false, false, 101), 'widget', ["value" => (isset($context["price"]) || array_key_exists("price", $context) ? $context["price"] : (function () { throw new RuntimeError('Variable "price" does not exist.', 101, $this->source); })())]);
        echo "<br>
        ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 102, $this->source); })()), "flashes", ["children[price]"], "method", false, false, false, 102));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 103
            echo "        ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 105, $this->source); })()), "flashes", ["children[price].data"], "method", false, false, false, 105));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 106
            echo "        ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_i_d"]) || array_key_exists("form_i_d", $context) ? $context["form_i_d"] : (function () { throw new RuntimeError('Variable "form_i_d" does not exist.', 108, $this->source); })()), "price", [], "any", false, false, false, 108), 'errors');
        echo "</th>

        ";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 110, $this->source); })()), "flashes", ["id_payment_method"], "method", false, false, false, 110));
        foreach ($context['_seq'] as $context["_key"] => $context["value_id_payment_method"]) {
            echo "  
        ";
            // line 111
            $context["id_payment_method"] = $context["value_id_payment_method"];
            // line 112
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_id_payment_method'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_i_d"]) || array_key_exists("form_i_d", $context) ? $context["form_i_d"] : (function () { throw new RuntimeError('Variable "form_i_d" does not exist.', 113, $this->source); })()), "id_payment_method", [], "any", false, false, false, 113), 'label');
        echo "<br>
        ";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_i_d"]) || array_key_exists("form_i_d", $context) ? $context["form_i_d"] : (function () { throw new RuntimeError('Variable "form_i_d" does not exist.', 114, $this->source); })()), "id_payment_method", [], "any", false, false, false, 114), 'widget', ["value" => (isset($context["id_payment_method"]) || array_key_exists("id_payment_method", $context) ? $context["id_payment_method"] : (function () { throw new RuntimeError('Variable "id_payment_method" does not exist.', 114, $this->source); })())]);
        echo "
        ";
        // line 115
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_i_d"]) || array_key_exists("form_i_d", $context) ? $context["form_i_d"] : (function () { throw new RuntimeError('Variable "form_i_d" does not exist.', 115, $this->source); })()), "id_payment_method", [], "any", false, false, false, 115), 'errors');
        echo "</th>

        ";
        // line 117
        $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_i_d"]) || array_key_exists("form_i_d", $context) ? $context["form_i_d"] : (function () { throw new RuntimeError('Variable "form_i_d" does not exist.', 117, $this->source); })()), "id_refund_activity", [], "any", false, false, false, 117), 'widget');
        // line 118
        echo "
        <th><button class=\"save\" type=\"submit\" name=\"save\">Сохранить</button></th>     

    ";
        // line 121
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_i_d"]) || array_key_exists("form_i_d", $context) ? $context["form_i_d"] : (function () { throw new RuntimeError('Variable "form_i_d" does not exist.', 121, $this->source); })()), 'form_end');
        echo "
   
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 126
    public function block_form_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_search"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_search"));

        // line 127
        echo "    ";
        // line 128
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 128, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("incoming_documents")]);
        echo "
";
        // line 130
        echo "        ";
        // line 131
        echo "        ";
        $context["number_document_search"] = "";
        // line 132
        echo "        ";
        $context["s_data_invoice_search"] = "";
        // line 133
        echo "        ";
        $context["po_data_invoice_search"] = "";
        // line 134
        echo "        ";
        $context["id_counterparty_search"] = "";
        // line 135
        echo "        ";
        $context["id_details_search"] = "";
        // line 136
        echo "        ";
        $context["id_manufacturer_search"] = "";
        // line 137
        echo "        ";
        // line 138
        echo "        ";
        $context["s_price_search"] = "";
        // line 139
        echo "        ";
        $context["po_price_search"] = "";
        // line 140
        echo "        ";
        $context["id_payment_method_search"] = "";
        // line 141
        echo "
        ";
        // line 142
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 142, $this->source); })()), "flashes", ["search_number_document"], "method", false, false, false, 142));
        foreach ($context['_seq'] as $context["_key"] => $context["value_number_document_search"]) {
            echo "  
        ";
            // line 143
            $context["number_document_search"] = $context["value_number_document_search"];
            // line 144
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_number_document_search'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 145
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 145, $this->source); })()), "search_number_document", [], "any", false, false, false, 145), 'label');
        echo "<br>
        ";
        // line 146
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 146, $this->source); })()), "search_number_document", [], "any", false, false, false, 146), 'widget', ["value" => (isset($context["number_document_search"]) || array_key_exists("number_document_search", $context) ? $context["number_document_search"] : (function () { throw new RuntimeError('Variable "number_document_search" does not exist.', 146, $this->source); })())]);
        echo "<br>
        ";
        // line 147
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 147, $this->source); })()), "flashes", ["children[search_number_document].data"], "method", false, false, false, 147));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 148
            echo "        ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 150
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 150, $this->source); })()), "search_number_document", [], "any", false, false, false, 150), 'errors');
        echo "</th>

        ";
        // line 152
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 152, $this->source); })()), "flashes", ["s_data_invoice"], "method", false, false, false, 152));
        foreach ($context['_seq'] as $context["_key"] => $context["value_data_invoice_search"]) {
            echo "  
        ";
            // line 153
            $context["s_data_invoice_search"] = $context["value_data_invoice_search"];
            // line 154
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_data_invoice_search'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 155
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 155, $this->source); })()), "s_data_invoice", [], "any", false, false, false, 155), 'label');
        echo "<br>
        ";
        // line 156
        echo "с ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 156, $this->source); })()), "s_data_invoice", [], "any", false, false, false, 156), 'widget', ["value" => (isset($context["s_data_invoice_search"]) || array_key_exists("s_data_invoice_search", $context) ? $context["s_data_invoice_search"] : (function () { throw new RuntimeError('Variable "s_data_invoice_search" does not exist.', 156, $this->source); })())]);
        echo "
        ";
        // line 157
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 157, $this->source); })()), "s_data_invoice", [], "any", false, false, false, 157), 'errors');
        echo "<br>
        ";
        // line 158
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 158, $this->source); })()), "flashes", ["po_data_invoice"], "method", false, false, false, 158));
        foreach ($context['_seq'] as $context["_key"] => $context["value_price"]) {
            echo "  
        ";
            // line 159
            $context["po_data_invoice_search"] = $context["value_price"];
            // line 160
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_price'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 161
        echo "        ";
        echo "по ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 161, $this->source); })()), "po_data_invoice", [], "any", false, false, false, 161), 'widget', ["value" => (isset($context["po_data_invoice_search"]) || array_key_exists("po_data_invoice_search", $context) ? $context["po_data_invoice_search"] : (function () { throw new RuntimeError('Variable "po_data_invoice_search" does not exist.', 161, $this->source); })())]);
        echo "<br>
        ";
        // line 162
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 162, $this->source); })()), "po_data_invoice", [], "any", false, false, false, 162), 'errors');
        echo "</th>

        ";
        // line 164
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 164, $this->source); })()), "flashes", ["search_id_counterparty"], "method", false, false, false, 164));
        foreach ($context['_seq'] as $context["_key"] => $context["value_id_counterparty_search"]) {
            echo "  
        ";
            // line 165
            $context["id_counterparty_search"] = $context["value_id_counterparty_search"];
            // line 166
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_id_counterparty_search'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 167
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 167, $this->source); })()), "search_id_counterparty", [], "any", false, false, false, 167), 'label');
        echo "<br>
        ";
        // line 168
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 168, $this->source); })()), "search_id_counterparty", [], "any", false, false, false, 168), 'widget', ["value" => (isset($context["id_counterparty_search"]) || array_key_exists("id_counterparty_search", $context) ? $context["id_counterparty_search"] : (function () { throw new RuntimeError('Variable "id_counterparty_search" does not exist.', 168, $this->source); })())]);
        echo "
        ";
        // line 169
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 169, $this->source); })()), "search_id_counterparty", [], "any", false, false, false, 169), 'errors');
        echo "</th>

        ";
        // line 171
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 171, $this->source); })()), "flashes", ["search_id_details"], "method", false, false, false, 171));
        foreach ($context['_seq'] as $context["_key"] => $context["value_id_details_search"]) {
            echo "  
        ";
            // line 172
            $context["id_details_search"] = $context["value_id_details_search"];
            // line 173
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_id_details_search'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 174
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 174, $this->source); })()), "search_id_details", [], "any", false, false, false, 174), 'label');
        echo "<br>
        ";
        // line 175
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 175, $this->source); })()), "search_id_details", [], "any", false, false, false, 175), 'widget', ["value" => (isset($context["id_details_search"]) || array_key_exists("id_details_search", $context) ? $context["id_details_search"] : (function () { throw new RuntimeError('Variable "id_details_search" does not exist.', 175, $this->source); })())]);
        echo "<br>
        ";
        // line 176
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 176, $this->source); })()), "flashes", ["children[search_id_details].data"], "method", false, false, false, 176));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 177
            echo "        ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 179
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 179, $this->source); })()), "search_id_details", [], "any", false, false, false, 179), 'errors');
        echo "</th>

        ";
        // line 181
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 181, $this->source); })()), "flashes", ["search_id_manufacturer"], "method", false, false, false, 181));
        foreach ($context['_seq'] as $context["_key"] => $context["value_id_manufacturer_search"]) {
            echo "  
        ";
            // line 182
            $context["id_manufacturer_search"] = $context["value_id_manufacturer_search"];
            // line 183
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_id_manufacturer_search'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 184
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 184, $this->source); })()), "search_id_manufacturer", [], "any", false, false, false, 184), 'label');
        echo "<br>
        ";
        // line 185
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 185, $this->source); })()), "search_id_manufacturer", [], "any", false, false, false, 185), 'widget', ["value" => (isset($context["id_manufacturer_search"]) || array_key_exists("id_manufacturer_search", $context) ? $context["id_manufacturer_search"] : (function () { throw new RuntimeError('Variable "id_manufacturer_search" does not exist.', 185, $this->source); })())]);
        echo "<br>
        ";
        // line 186
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 186, $this->source); })()), "flashes", ["children[search_id_manufacturer].data"], "method", false, false, false, 186));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 187
            echo "        ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 189
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 189, $this->source); })()), "search_id_manufacturer", [], "any", false, false, false, 189), 'errors');
        echo "</th>

        ";
        // line 200
        echo "
        ";
        // line 201
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 201, $this->source); })()), "flashes", ["s_price"], "method", false, false, false, 201));
        foreach ($context['_seq'] as $context["_key"] => $context["value_s_price_search"]) {
            echo "  
        ";
            // line 202
            $context["s_price_search"] = $context["value_s_price_search"];
            // line 203
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_s_price_search'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 204
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 204, $this->source); })()), "s_price", [], "any", false, false, false, 204), 'label');
        echo "<br>
        ";
        // line 205
        echo "с ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 205, $this->source); })()), "s_price", [], "any", false, false, false, 205), 'widget', ["value" => (isset($context["s_price_search"]) || array_key_exists("s_price_search", $context) ? $context["s_price_search"] : (function () { throw new RuntimeError('Variable "s_price_search" does not exist.', 205, $this->source); })())]);
        echo "
        ";
        // line 206
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 206, $this->source); })()), "s_price", [], "any", false, false, false, 206), 'errors');
        echo "<br>
        ";
        // line 207
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 207, $this->source); })()), "flashes", ["po_price"], "method", false, false, false, 207));
        foreach ($context['_seq'] as $context["_key"] => $context["value_po_price_search"]) {
            echo "  
        ";
            // line 208
            $context["po_price_search"] = $context["value_po_price_search"];
            // line 209
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_po_price_search'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 210
        echo "        ";
        echo "по ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 210, $this->source); })()), "po_price", [], "any", false, false, false, 210), 'widget', ["value" => (isset($context["po_price_search"]) || array_key_exists("po_price_search", $context) ? $context["po_price_search"] : (function () { throw new RuntimeError('Variable "po_price_search" does not exist.', 210, $this->source); })())]);
        echo "<br>
        ";
        // line 211
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 211, $this->source); })()), "flashes", ["children[s_price].data"], "method", false, false, false, 211));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 212
            echo "        ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 214
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 214, $this->source); })()), "flashes", ["children[po_price].data"], "method", false, false, false, 214));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 215
            echo "        ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 217
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 217, $this->source); })()), "po_price", [], "any", false, false, false, 217), 'errors');
        echo "</th>

        ";
        // line 219
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 219, $this->source); })()), "flashes", ["search_id_payment_method"], "method", false, false, false, 219));
        foreach ($context['_seq'] as $context["_key"] => $context["value_id_payment_method"]) {
            echo "  
        ";
            // line 220
            $context["id_payment_method_search"] = $context["value_id_payment_method"];
            // line 221
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_id_payment_method'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 222
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 222, $this->source); })()), "search_id_payment_method", [], "any", false, false, false, 222), 'label');
        echo "<br>
        ";
        // line 223
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 223, $this->source); })()), "search_id_payment_method", [], "any", false, false, false, 223), 'widget', ["value" => (isset($context["id_payment_method_search"]) || array_key_exists("id_payment_method_search", $context) ? $context["id_payment_method_search"] : (function () { throw new RuntimeError('Variable "id_payment_method_search" does not exist.', 223, $this->source); })())]);
        echo "
        ";
        // line 224
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 224, $this->source); })()), "search_id_payment_method", [], "any", false, false, false, 224), 'errors');
        echo "</th>

        ";
        // line 226
        $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 226, $this->source); })()), "button", [], "any", false, false, false, 226), 'widget');
        // line 227
        echo "
        <th><button class=\"search\" type=\"submit\" name=\"search\">Поиск</button></th>
        
    ";
        // line 230
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 230, $this->source); })()), 'form_end');
        echo "

    <form action=\"/reset_invoice\" name=\"reset_invoice\">
    <th><button class=\"reset\" type=\"submit\" name=\"reset_invoice\">Сбросить</button></th>
    </form>
    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 238
    public function block_table_thead_tr($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_thead_tr"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_thead_tr"));

        // line 240
        if ((isset($context["arr_incoming_documents"]) || array_key_exists("arr_incoming_documents", $context) ? $context["arr_incoming_documents"] : (function () { throw new RuntimeError('Variable "arr_incoming_documents" does not exist.', 240, $this->source); })())) {
            // line 241
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["arr_incoming_documents"]) || array_key_exists("arr_incoming_documents", $context) ? $context["arr_incoming_documents"] : (function () { throw new RuntimeError('Variable "arr_incoming_documents" does not exist.', 241, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["arr_search_invoice"]) {
                // line 242
                echo "        ";
                if ($context["arr_search_invoice"]) {
                    // line 243
                    echo "            <th>№ Накладной</th>
            <th>Дата накладной</th>
            <th>Поставщик</th>
            <th>№ Детали</th>
            <th>Производитель</th>
            <th>Кол-во</th>
            <th>Кол-во<br>продано</th>
            <th>Цена шт</th>
            <th>Цена общая</th>
            <th>Способ оплаты</th>
            <th>Возврат</th>
            <th>Удалить</th>
        ";
                }
                // line 256
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['arr_search_invoice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 258
            echo "    <h2>Видите параметры в поиск</h2> 
";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 262
    public function block_tbody($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tbody"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tbody"));

        // line 263
        echo "        ";
        // line 264
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["arr_incoming_documents"]) || array_key_exists("arr_incoming_documents", $context) ? $context["arr_incoming_documents"] : (function () { throw new RuntimeError('Variable "arr_incoming_documents" does not exist.', 264, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["arr_search_invoice"]) {
            // line 265
            echo "            ";
            if ($context["arr_search_invoice"]) {
                // line 266
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["arr_search_invoice"]);
                foreach ($context['_seq'] as $context["_key"] => $context["incoming_documents"]) {
                    // line 267
                    echo "                    <tr>
                        ";
                    // line 268
                    if (((twig_get_attribute($this->env, $this->source, $context["incoming_documents"], "getSales", [], "method", false, false, false, 268) == 1) && (twig_get_attribute($this->env, $this->source,                     // line 269
$context["incoming_documents"], "getRefund", [], "method", false, false, false, 269) == 1))) {
                        // line 270
                        echo "
                            <td>";
                        // line 271
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["incoming_documents"], "getNumberDocument", [], "method", false, false, false, 271), "html", null, true);
                        echo "</td>

                            <td>";
                        // line 273
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["incoming_documents"], "getDataInvoice", [], "method", false, false, false, 273), "d-m-Y"), "html", null, true);
                        echo "</td>

                            <td>";
                        // line 275
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["incoming_documents"], "getIdCounterparty", [], "method", false, false, false, 275), "getCounterparty", [], "method", false, false, false, 275), "html", null, true);
                        echo "</td>

                            <td>";
                        // line 277
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["incoming_documents"], "getIdDetails", [], "method", false, false, false, 277), "getPartNumbers", [], "method", false, false, false, 277), "html", null, true);
                        echo "</td>

                            <td>";
                        // line 279
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["incoming_documents"], "getIdManufacturer", [], "method", false, false, false, 279), "getManufacturers", [], "method", false, false, false, 279), "html", null, true);
                        echo "</td>

                            ";
                        // line 282
                        echo "
                            <td>";
                        // line 283
                        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["incoming_documents"], "getQuantity", [], "method", false, false, false, 283) - twig_get_attribute($this->env, $this->source, $context["incoming_documents"], "getQuantitySold", [], "method", false, false, false, 283)), "html", null, true);
                        echo "</td>

                            <td>";
                        // line 285
                        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["incoming_documents"], "getQuantitySold", [], "method", true, true, false, 285)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["incoming_documents"], "getQuantitySold", [], "method", false, false, false, 285), "")) : ("")), "html", null, true);
                        echo "</td>

                            <td>";
                        // line 287
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["incoming_documents"], "getPrice", [], "method", false, false, false, 287) / 100) / twig_get_attribute($this->env, $this->source,                         // line 288
$context["incoming_documents"], "getQuantity", [], "method", false, false, false, 288)), 2, ".", ""), "html", null, true);
                        echo "</td>

                            <td>";
                        // line 290
                        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["incoming_documents"], "getPrice", [], "method", false, false, false, 290) / 100) - (((twig_get_attribute($this->env, $this->source, $context["incoming_documents"], "getPrice", [], "method", false, false, false, 290) / 100) / twig_get_attribute($this->env, $this->source,                         // line 291
$context["incoming_documents"], "getQuantity", [], "method", false, false, false, 291)) * twig_get_attribute($this->env, $this->source, $context["incoming_documents"], "getQuantitySold", [], "method", false, false, false, 291))), "html", null, true);
                        echo "</td>

                            <td>";
                        // line 293
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["incoming_documents"], "getIdPaymentMethod", [], "method", false, false, false, 293), "getMethod", [], "method", false, false, false, 293), "html", null, true);
                        echo "</td>


                            <form action=\"/refund_part\" name=\"refund_part\" method=\"get\">

                                <td><button class=\"refund\" type=\"submit\" name=\"refund_part\" value=\"";
                        // line 298
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["incoming_documents"], "getId", [], "method", false, false, false, 298), "html", null, true);
                        echo "\">Возврат</button></td>
                                
                            </form>
                            <form action=\"/delete_invoice\" name=\"delete_invoice\" method=\"post\">

                                <td><button class=\"delete\" type=\"submit\" name=\"delete_invoice\" value=\"";
                        // line 303
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["incoming_documents"], "getId", [], "method", false, false, false, 303), "html", null, true);
                        echo "\">Удалить</button></td>
                                
                            </form>
                        ";
                    }
                    // line 307
                    echo "                    </tr>   
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['incoming_documents'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 309
                echo "            ";
            } else {
                // line 310
                echo "                <h2>Данные не найдены. Видите параметры в поиск</h2>  
            ";
            }
            // line 312
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['arr_search_invoice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 313
        echo "    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "incoming_documents/incoming_documents.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1105 => 313,  1099 => 312,  1095 => 310,  1092 => 309,  1085 => 307,  1078 => 303,  1070 => 298,  1062 => 293,  1057 => 291,  1056 => 290,  1051 => 288,  1050 => 287,  1045 => 285,  1040 => 283,  1037 => 282,  1032 => 279,  1027 => 277,  1022 => 275,  1017 => 273,  1012 => 271,  1009 => 270,  1007 => 269,  1006 => 268,  1003 => 267,  998 => 266,  995 => 265,  990 => 264,  988 => 263,  978 => 262,  966 => 258,  959 => 256,  944 => 243,  941 => 242,  936 => 241,  934 => 240,  924 => 238,  907 => 230,  902 => 227,  900 => 226,  895 => 224,  891 => 223,  886 => 222,  880 => 221,  878 => 220,  872 => 219,  866 => 217,  857 => 215,  852 => 214,  843 => 212,  839 => 211,  833 => 210,  827 => 209,  825 => 208,  819 => 207,  815 => 206,  810 => 205,  805 => 204,  799 => 203,  797 => 202,  791 => 201,  788 => 200,  782 => 189,  773 => 187,  769 => 186,  765 => 185,  760 => 184,  754 => 183,  752 => 182,  746 => 181,  740 => 179,  731 => 177,  727 => 176,  723 => 175,  718 => 174,  712 => 173,  710 => 172,  704 => 171,  699 => 169,  695 => 168,  690 => 167,  684 => 166,  682 => 165,  676 => 164,  671 => 162,  665 => 161,  659 => 160,  657 => 159,  651 => 158,  647 => 157,  642 => 156,  637 => 155,  631 => 154,  629 => 153,  623 => 152,  617 => 150,  608 => 148,  604 => 147,  600 => 146,  595 => 145,  589 => 144,  587 => 143,  581 => 142,  578 => 141,  575 => 140,  572 => 139,  569 => 138,  567 => 137,  564 => 136,  561 => 135,  558 => 134,  555 => 133,  552 => 132,  549 => 131,  547 => 130,  542 => 128,  540 => 127,  530 => 126,  517 => 121,  512 => 118,  510 => 117,  505 => 115,  501 => 114,  496 => 113,  490 => 112,  488 => 111,  482 => 110,  476 => 108,  467 => 106,  462 => 105,  453 => 103,  449 => 102,  445 => 101,  440 => 100,  434 => 99,  432 => 98,  426 => 97,  420 => 95,  411 => 93,  407 => 92,  403 => 91,  398 => 90,  392 => 89,  390 => 88,  384 => 87,  381 => 86,  378 => 84,  372 => 73,  363 => 71,  359 => 70,  355 => 69,  350 => 68,  344 => 67,  342 => 66,  336 => 65,  330 => 63,  321 => 61,  317 => 60,  313 => 59,  308 => 58,  302 => 57,  300 => 56,  294 => 55,  291 => 54,  286 => 51,  282 => 50,  277 => 49,  271 => 48,  269 => 47,  263 => 46,  258 => 44,  254 => 43,  249 => 42,  243 => 41,  241 => 40,  235 => 39,  229 => 37,  220 => 35,  216 => 34,  212 => 33,  207 => 32,  201 => 31,  199 => 30,  193 => 29,  190 => 28,  187 => 27,  184 => 26,  181 => 25,  179 => 24,  176 => 23,  173 => 22,  170 => 21,  167 => 20,  164 => 19,  162 => 18,  157 => 15,  154 => 14,  151 => 12,  141 => 11,  122 => 9,  103 => 7,  84 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{title_logo}}{% endblock %}

{% block logo %}{{title_logo}}{% endblock %}

{% block legend %}{{legend}}{% endblock legend%}

{% block legend_search %}{{legend_search}}{% endblock legend_search %}

{% block form_save_edit_sales %}

{#Форма сохранения счет-фактур#}
    
    {{ form_start(form_i_d, {'action': path('sales_incoming_documents')}) }}

        {#{{ dump(app.flashes('children[price]')[0]) }}#}
        {#Переменный для вывода данных в форме когда форма не прошла валидацию#}
        {% set number_document = '' %}
        {% set data_invoice = '' %}
        {% set id_counterparty = '' %}
        {% set part_numbers = '' %}
        {% set manufacturers = '' %}
        {#{% set name_details = '' %}#}
        {% set quantity = '' %}
        {% set price = '' %}
        {% set id_payment_method = '' %}

        {% for value_number_document in app.flashes('number_document') %}  
        {% set number_document = value_number_document %}
        {% endfor %}
        <th>{{ form_label(form_i_d.number_document) }}<br>
        {{ form_widget(form_i_d.number_document, {value : number_document}) }}<br>
        {% for message in app.flashes('children[number_document].data') %}
        {{ message }}
        {% endfor %}
        {{ form_errors(form_i_d.number_document) }}</th>

        {% for value_data_invoice in app.flashes('data_invoice') %}  
        {% set data_invoice = value_data_invoice %}
        {% endfor %}
        <th>{{ form_label(form_i_d.data_invoice) }}<br>
        {{ form_widget(form_i_d.data_invoice, {value : data_invoice}) }}
        {{ form_errors(form_i_d.data_invoice) }}</th>

        {% for value_id_counterparty in app.flashes('id_counterparty') %}  
        {% set id_counterparty = value_id_counterparty %}
        {% endfor %}
        <th>{{ form_label(form_i_d.id_counterparty) }}<br>
        {{ form_widget(form_i_d.id_counterparty, {value : id_counterparty}) }}
        {{ form_errors(form_i_d.id_counterparty) }}</th>

        {#{{ form_start(form_p_n) }}#}

            {% for value_part_numbers in app.flashes('part_numbers') %}  
                {% set part_numbers = value_part_numbers %}
            {% endfor %}
            <th>{{ form_label(form_p_n.part_numbers) }}<br>
            {{ form_widget(form_p_n.part_numbers, {value : part_numbers}) }}<br>
            {% for message in app.flashes('children[part_numbers].data') %}
                {{ message }}
            {% endfor %}
            {{ form_errors(form_p_n.part_numbers) }}</th>

            {% for value_manufacturers in app.flashes('manufacturers') %}  
                {% set manufacturers = value_manufacturers %}
            {% endfor %}
            <th>{{ form_label(form_p_n.manufacturers) }}<br>
            {{ form_widget(form_p_n.manufacturers, {value : manufacturers}) }}<br>
            {% for message in app.flashes('children[manufacturers].data') %}
                {{ message }}
            {% endfor %}
            {{ form_errors(form_p_n.manufacturers) }}</th>

            {#{% for value_name_detail in app.flashes('name_details') %}  
            {% set name_details = value_name_detail %}
            {% endfor %}
            <th>{{ form_label(form_p_n.name_details) }}<br>
            {{ form_widget(form_p_n.name_details, {value : name_details}) }}<br>    
            {% for message in app.flashes('children[name_details].data') %}
            {{ message }}
            {% endfor %}
            {{ form_errors(form_p_n.name_details) }}</th>#}

        {#{{ form_end(form_p_n) }}#}
        
        {% for value_quantity in app.flashes('quantity') %}  
        {% set quantity = value_quantity %}
        {% endfor %}
        <th>{{ form_label(form_i_d.quantity) }}<br>
        {{ form_widget(form_i_d.quantity, {value : quantity}) }}<br>
        {% for message in app.flashes('children[quantity].data') %}
        {{ message }}
        {% endfor %}
        {{ form_errors(form_i_d.quantity) }}</th>

        {% for value_price in app.flashes('price') %}  
        {% set price = value_price %}
        {% endfor %}
        <th>{{ form_label(form_i_d.price) }}<br>
        {{ form_widget(form_i_d.price, {value : price}) }}<br>
        {% for message in app.flashes('children[price]') %}
        {{ message }}
        {% endfor %}
        {% for message in app.flashes('children[price].data') %}
        {{ message }}
        {% endfor %}
        {{ form_errors(form_i_d.price) }}</th>

        {% for value_id_payment_method in app.flashes('id_payment_method') %}  
        {% set id_payment_method = value_id_payment_method %}
        {% endfor %}
        <th>{{ form_label(form_i_d.id_payment_method) }}<br>
        {{ form_widget(form_i_d.id_payment_method, {value : id_payment_method}) }}
        {{ form_errors(form_i_d.id_payment_method) }}</th>

        {% do form_widget(form_i_d.id_refund_activity) %}

        <th><button class=\"save\" type=\"submit\" name=\"save\">Сохранить</button></th>     

    {{ form_end(form_i_d) }}
   
{% endblock form_save_edit_sales %}


{% block form_search %}
    {#Форма поиска счет-фактур#}
    {{ form_start(form_search, {'action': path('incoming_documents')}) }}
{#{{ dump(app.flashes()) }}#}
        {#Переменный для вывода данных в форме когда форма не прошла валидацию#}
        {% set number_document_search = '' %}
        {% set s_data_invoice_search = '' %}
        {% set po_data_invoice_search = '' %}
        {% set id_counterparty_search = '' %}
        {% set id_details_search = '' %}
        {% set id_manufacturer_search = '' %}
        {#{% set name_details_search = '' %}#}
        {% set s_price_search = '' %}
        {% set po_price_search = '' %}
        {% set id_payment_method_search = '' %}

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

        {#{% for value_isearch_name_details in app.flashes('search_name_details') %}  
        {% set name_details_search = value_id_manufacturer_search %}
        {% endfor %}
        <th>{{ form_label(form_search.search_name_details) }}<br>
        {{ form_widget(form_search.search_name_details, {value : name_details_search}) }}<br>
        {% for message in app.flashes('children[search_name_details].data') %}
        {{ message }}
        {% endfor %}
        {{ form_errors(form_search.search_name_details) }}</th>#}

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

        {% for value_id_payment_method in app.flashes('search_id_payment_method') %}  
        {% set id_payment_method_search = value_id_payment_method %}
        {% endfor %}
        <th>{{ form_label(form_search.search_id_payment_method) }}<br>
        {{ form_widget(form_search.search_id_payment_method, {value : id_payment_method_search}) }}
        {{ form_errors(form_search.search_id_payment_method) }}</th>

        {% do form_widget(form_search.button) %}

        <th><button class=\"search\" type=\"submit\" name=\"search\">Поиск</button></th>
        
    {{ form_end(form_search) }}

    <form action=\"/reset_invoice\" name=\"reset_invoice\">
    <th><button class=\"reset\" type=\"submit\" name=\"reset_invoice\">Сбросить</button></th>
    </form>
    
{% endblock form_search %}

{% block table_thead_tr %}
{#Таблица#}
{% if arr_incoming_documents %}
    {% for arr_search_invoice in arr_incoming_documents %}
        {% if arr_search_invoice %}
            <th>№ Накладной</th>
            <th>Дата накладной</th>
            <th>Поставщик</th>
            <th>№ Детали</th>
            <th>Производитель</th>
            <th>Кол-во</th>
            <th>Кол-во<br>продано</th>
            <th>Цена шт</th>
            <th>Цена общая</th>
            <th>Способ оплаты</th>
            <th>Возврат</th>
            <th>Удалить</th>
        {% endif %}
    {% endfor %}
{% else %}
    <h2>Видите параметры в поиск</h2> 
{% endif %}
{% endblock table_thead_tr %}

{% block tbody %}
        {#выводит таблицу по поиску#}
        {% for arr_search_invoice in arr_incoming_documents %}
            {% if arr_search_invoice %}
                {% for incoming_documents in arr_search_invoice %}
                    <tr>
                        {% if incoming_documents.getSales() == 1 
                        and incoming_documents.getRefund() == 1 %}

                            <td>{{ incoming_documents.getNumberDocument() }}</td>

                            <td>{{ incoming_documents.getDataInvoice()|date(\"d-m-Y\") }}</td>

                            <td>{{ incoming_documents.getIdCounterparty().getCounterparty() }}</td>

                            <td>{{ incoming_documents.getIdDetails().getPartNumbers() }}</td>

                            <td>{{ incoming_documents.getIdManufacturer().getManufacturers() }}</td>

                            {#<td>{{ incoming_documents.getIdNameDetail(). getNameDetails() }}</td>#}

                            <td>{{ incoming_documents.getQuantity() - incoming_documents.getQuantitySold() }}</td>

                            <td>{{ incoming_documents.getQuantitySold()|default('') }}</td>

                            <td>{{ ((incoming_documents.getPrice() / 100) 
                                        / incoming_documents.getQuantity())|number_format(2, '.', '') }}</td>

                            <td>{{ (incoming_documents.getPrice() / 100) - (((incoming_documents.getPrice() / 100) 
                                        / incoming_documents.getQuantity()) * incoming_documents.getQuantitySold()) }}</td>

                            <td>{{ incoming_documents.getIdPaymentMethod().getMethod() }}</td>


                            <form action=\"/refund_part\" name=\"refund_part\" method=\"get\">

                                <td><button class=\"refund\" type=\"submit\" name=\"refund_part\" value=\"{{ incoming_documents.getId() }}\">Возврат</button></td>
                                
                            </form>
                            <form action=\"/delete_invoice\" name=\"delete_invoice\" method=\"post\">

                                <td><button class=\"delete\" type=\"submit\" name=\"delete_invoice\" value=\"{{ incoming_documents.getId() }}\">Удалить</button></td>
                                
                            </form>
                        {% endif %}
                    </tr>   
                {% endfor %}
            {% else %}
                <h2>Данные не найдены. Видите параметры в поиск</h2>  
            {% endif %}
        {% endfor %}
    
{% endblock tbody %}", "incoming_documents/incoming_documents.html.twig", "/var/www/templates/incoming_documents/incoming_documents.html.twig");
    }
}
