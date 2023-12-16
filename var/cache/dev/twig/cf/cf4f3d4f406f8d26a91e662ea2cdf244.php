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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_i_d"]) || array_key_exists("form_i_d", $context) ? $context["form_i_d"] : (function () { throw new RuntimeError('Variable "form_i_d" does not exist.', 15, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("save_incoming_documents")]);
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
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 75, $this->source); })()), "flashes", ["quantity"], "method", false, false, false, 75));
        foreach ($context['_seq'] as $context["_key"] => $context["value_quantity"]) {
            echo "  
        ";
            // line 76
            $context["quantity"] = $context["value_quantity"];
            // line 77
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_quantity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_i_d"]) || array_key_exists("form_i_d", $context) ? $context["form_i_d"] : (function () { throw new RuntimeError('Variable "form_i_d" does not exist.', 78, $this->source); })()), "quantity", [], "any", false, false, false, 78), 'label');
        echo "<br>
        ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_i_d"]) || array_key_exists("form_i_d", $context) ? $context["form_i_d"] : (function () { throw new RuntimeError('Variable "form_i_d" does not exist.', 79, $this->source); })()), "quantity", [], "any", false, false, false, 79), 'widget', ["value" => (isset($context["quantity"]) || array_key_exists("quantity", $context) ? $context["quantity"] : (function () { throw new RuntimeError('Variable "quantity" does not exist.', 79, $this->source); })())]);
        echo "<br>
        ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 80, $this->source); })()), "flashes", ["children[quantity].data"], "method", false, false, false, 80));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 81
            echo "        ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_i_d"]) || array_key_exists("form_i_d", $context) ? $context["form_i_d"] : (function () { throw new RuntimeError('Variable "form_i_d" does not exist.', 83, $this->source); })()), "quantity", [], "any", false, false, false, 83), 'errors');
        echo "</th>

        ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 85, $this->source); })()), "flashes", ["price"], "method", false, false, false, 85));
        foreach ($context['_seq'] as $context["_key"] => $context["value_price"]) {
            echo "  
        ";
            // line 86
            $context["price"] = $context["value_price"];
            // line 87
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_price'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_i_d"]) || array_key_exists("form_i_d", $context) ? $context["form_i_d"] : (function () { throw new RuntimeError('Variable "form_i_d" does not exist.', 88, $this->source); })()), "price", [], "any", false, false, false, 88), 'label');
        echo "<br>
        ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_i_d"]) || array_key_exists("form_i_d", $context) ? $context["form_i_d"] : (function () { throw new RuntimeError('Variable "form_i_d" does not exist.', 89, $this->source); })()), "price", [], "any", false, false, false, 89), 'widget', ["value" => (isset($context["price"]) || array_key_exists("price", $context) ? $context["price"] : (function () { throw new RuntimeError('Variable "price" does not exist.', 89, $this->source); })())]);
        echo "<br>
        ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 90, $this->source); })()), "flashes", ["children[price]"], "method", false, false, false, 90));
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 93, $this->source); })()), "flashes", ["children[price].data"], "method", false, false, false, 93));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 94
            echo "        ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_i_d"]) || array_key_exists("form_i_d", $context) ? $context["form_i_d"] : (function () { throw new RuntimeError('Variable "form_i_d" does not exist.', 96, $this->source); })()), "price", [], "any", false, false, false, 96), 'errors');
        echo "</th>

        ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 98, $this->source); })()), "flashes", ["id_payment_method"], "method", false, false, false, 98));
        foreach ($context['_seq'] as $context["_key"] => $context["value_id_payment_method"]) {
            echo "  
        ";
            // line 99
            $context["id_payment_method"] = $context["value_id_payment_method"];
            // line 100
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_id_payment_method'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_i_d"]) || array_key_exists("form_i_d", $context) ? $context["form_i_d"] : (function () { throw new RuntimeError('Variable "form_i_d" does not exist.', 101, $this->source); })()), "id_payment_method", [], "any", false, false, false, 101), 'label');
        echo "<br>
        ";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_i_d"]) || array_key_exists("form_i_d", $context) ? $context["form_i_d"] : (function () { throw new RuntimeError('Variable "form_i_d" does not exist.', 102, $this->source); })()), "id_payment_method", [], "any", false, false, false, 102), 'widget', ["value" => (isset($context["id_payment_method"]) || array_key_exists("id_payment_method", $context) ? $context["id_payment_method"] : (function () { throw new RuntimeError('Variable "id_payment_method" does not exist.', 102, $this->source); })())]);
        echo "
        ";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_i_d"]) || array_key_exists("form_i_d", $context) ? $context["form_i_d"] : (function () { throw new RuntimeError('Variable "form_i_d" does not exist.', 103, $this->source); })()), "id_payment_method", [], "any", false, false, false, 103), 'errors');
        echo "</th>

        ";
        // line 105
        $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_i_d"]) || array_key_exists("form_i_d", $context) ? $context["form_i_d"] : (function () { throw new RuntimeError('Variable "form_i_d" does not exist.', 105, $this->source); })()), "id_refund_activity", [], "any", false, false, false, 105), 'widget');
        // line 106
        echo "
        <th><button class=\"save\" type=\"submit\" name=\"save\">Сохранить</button></th>     

    ";
        // line 109
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_i_d"]) || array_key_exists("form_i_d", $context) ? $context["form_i_d"] : (function () { throw new RuntimeError('Variable "form_i_d" does not exist.', 109, $this->source); })()), 'form_end');
        echo "
   
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 114
    public function block_form_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_search"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_search"));

        // line 115
        echo "    ";
        // line 116
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 116, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("incoming_documents")]);
        echo "
";
        // line 118
        echo "        ";
        // line 119
        echo "        ";
        $context["number_document_search"] = "";
        // line 120
        echo "        ";
        $context["s_data_invoice_search"] = "";
        // line 121
        echo "        ";
        $context["po_data_invoice_search"] = "";
        // line 122
        echo "        ";
        $context["id_counterparty_search"] = "";
        // line 123
        echo "        ";
        $context["id_details_search"] = "";
        // line 124
        echo "        ";
        $context["id_manufacturer_search"] = "";
        // line 125
        echo "        ";
        // line 126
        echo "        ";
        $context["s_price_search"] = "";
        // line 127
        echo "        ";
        $context["po_price_search"] = "";
        // line 128
        echo "        ";
        $context["id_payment_method_search"] = "";
        // line 129
        echo "
        ";
        // line 130
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 130, $this->source); })()), "flashes", ["search_number_document"], "method", false, false, false, 130));
        foreach ($context['_seq'] as $context["_key"] => $context["value_number_document_search"]) {
            echo "  
        ";
            // line 131
            $context["number_document_search"] = $context["value_number_document_search"];
            // line 132
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_number_document_search'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 133, $this->source); })()), "search_number_document", [], "any", false, false, false, 133), 'label');
        echo "<br>
        ";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 134, $this->source); })()), "search_number_document", [], "any", false, false, false, 134), 'widget', ["value" => (isset($context["number_document_search"]) || array_key_exists("number_document_search", $context) ? $context["number_document_search"] : (function () { throw new RuntimeError('Variable "number_document_search" does not exist.', 134, $this->source); })())]);
        echo "<br>
        ";
        // line 135
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 135, $this->source); })()), "flashes", ["children[search_number_document].data"], "method", false, false, false, 135));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 136
            echo "        ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 138, $this->source); })()), "search_number_document", [], "any", false, false, false, 138), 'errors');
        echo "</th>

        ";
        // line 140
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 140, $this->source); })()), "flashes", ["s_data_invoice"], "method", false, false, false, 140));
        foreach ($context['_seq'] as $context["_key"] => $context["value_data_invoice_search"]) {
            echo "  
        ";
            // line 141
            $context["s_data_invoice_search"] = $context["value_data_invoice_search"];
            // line 142
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_data_invoice_search'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 143
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 143, $this->source); })()), "s_data_invoice", [], "any", false, false, false, 143), 'label');
        echo "<br>
        ";
        // line 144
        echo "с ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 144, $this->source); })()), "s_data_invoice", [], "any", false, false, false, 144), 'widget', ["value" => (isset($context["s_data_invoice_search"]) || array_key_exists("s_data_invoice_search", $context) ? $context["s_data_invoice_search"] : (function () { throw new RuntimeError('Variable "s_data_invoice_search" does not exist.', 144, $this->source); })())]);
        echo "
        ";
        // line 145
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 145, $this->source); })()), "s_data_invoice", [], "any", false, false, false, 145), 'errors');
        echo "<br>
        ";
        // line 146
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 146, $this->source); })()), "flashes", ["po_data_invoice"], "method", false, false, false, 146));
        foreach ($context['_seq'] as $context["_key"] => $context["value_price"]) {
            echo "  
        ";
            // line 147
            $context["po_data_invoice_search"] = $context["value_price"];
            // line 148
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_price'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        echo "        ";
        echo "по ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 149, $this->source); })()), "po_data_invoice", [], "any", false, false, false, 149), 'widget', ["value" => (isset($context["po_data_invoice_search"]) || array_key_exists("po_data_invoice_search", $context) ? $context["po_data_invoice_search"] : (function () { throw new RuntimeError('Variable "po_data_invoice_search" does not exist.', 149, $this->source); })())]);
        echo "<br>
        ";
        // line 150
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 150, $this->source); })()), "po_data_invoice", [], "any", false, false, false, 150), 'errors');
        echo "</th>

        ";
        // line 152
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 152, $this->source); })()), "flashes", ["search_id_counterparty"], "method", false, false, false, 152));
        foreach ($context['_seq'] as $context["_key"] => $context["value_id_counterparty_search"]) {
            echo "  
        ";
            // line 153
            $context["id_counterparty_search"] = $context["value_id_counterparty_search"];
            // line 154
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_id_counterparty_search'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 155
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 155, $this->source); })()), "search_id_counterparty", [], "any", false, false, false, 155), 'label');
        echo "<br>
        ";
        // line 156
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 156, $this->source); })()), "search_id_counterparty", [], "any", false, false, false, 156), 'widget', ["value" => (isset($context["id_counterparty_search"]) || array_key_exists("id_counterparty_search", $context) ? $context["id_counterparty_search"] : (function () { throw new RuntimeError('Variable "id_counterparty_search" does not exist.', 156, $this->source); })())]);
        echo "
        ";
        // line 157
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 157, $this->source); })()), "search_id_counterparty", [], "any", false, false, false, 157), 'errors');
        echo "</th>

        ";
        // line 159
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 159, $this->source); })()), "flashes", ["search_id_details"], "method", false, false, false, 159));
        foreach ($context['_seq'] as $context["_key"] => $context["value_id_details_search"]) {
            echo "  
        ";
            // line 160
            $context["id_details_search"] = $context["value_id_details_search"];
            // line 161
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_id_details_search'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 162
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 162, $this->source); })()), "search_id_details", [], "any", false, false, false, 162), 'label');
        echo "<br>
        ";
        // line 163
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 163, $this->source); })()), "search_id_details", [], "any", false, false, false, 163), 'widget', ["value" => (isset($context["id_details_search"]) || array_key_exists("id_details_search", $context) ? $context["id_details_search"] : (function () { throw new RuntimeError('Variable "id_details_search" does not exist.', 163, $this->source); })())]);
        echo "<br>
        ";
        // line 164
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 164, $this->source); })()), "flashes", ["children[search_id_details].data"], "method", false, false, false, 164));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 165
            echo "        ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 167
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 167, $this->source); })()), "search_id_details", [], "any", false, false, false, 167), 'errors');
        echo "</th>

        ";
        // line 169
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 169, $this->source); })()), "flashes", ["search_id_manufacturer"], "method", false, false, false, 169));
        foreach ($context['_seq'] as $context["_key"] => $context["value_id_manufacturer_search"]) {
            echo "  
        ";
            // line 170
            $context["id_manufacturer_search"] = $context["value_id_manufacturer_search"];
            // line 171
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_id_manufacturer_search'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 172
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 172, $this->source); })()), "search_id_manufacturer", [], "any", false, false, false, 172), 'label');
        echo "<br>
        ";
        // line 173
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 173, $this->source); })()), "search_id_manufacturer", [], "any", false, false, false, 173), 'widget', ["value" => (isset($context["id_manufacturer_search"]) || array_key_exists("id_manufacturer_search", $context) ? $context["id_manufacturer_search"] : (function () { throw new RuntimeError('Variable "id_manufacturer_search" does not exist.', 173, $this->source); })())]);
        echo "<br>
        ";
        // line 174
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 174, $this->source); })()), "flashes", ["children[search_id_manufacturer].data"], "method", false, false, false, 174));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 175
            echo "        ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 177
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 177, $this->source); })()), "search_id_manufacturer", [], "any", false, false, false, 177), 'errors');
        echo "</th>

        ";
        // line 188
        echo "
        ";
        // line 189
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 189, $this->source); })()), "flashes", ["s_price"], "method", false, false, false, 189));
        foreach ($context['_seq'] as $context["_key"] => $context["value_s_price_search"]) {
            echo "  
        ";
            // line 190
            $context["s_price_search"] = $context["value_s_price_search"];
            // line 191
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_s_price_search'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 192
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 192, $this->source); })()), "s_price", [], "any", false, false, false, 192), 'label');
        echo "<br>
        ";
        // line 193
        echo "с ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 193, $this->source); })()), "s_price", [], "any", false, false, false, 193), 'widget', ["value" => (isset($context["s_price_search"]) || array_key_exists("s_price_search", $context) ? $context["s_price_search"] : (function () { throw new RuntimeError('Variable "s_price_search" does not exist.', 193, $this->source); })())]);
        echo "
        ";
        // line 194
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 194, $this->source); })()), "s_price", [], "any", false, false, false, 194), 'errors');
        echo "<br>
        ";
        // line 195
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 195, $this->source); })()), "flashes", ["po_price"], "method", false, false, false, 195));
        foreach ($context['_seq'] as $context["_key"] => $context["value_po_price_search"]) {
            echo "  
        ";
            // line 196
            $context["po_price_search"] = $context["value_po_price_search"];
            // line 197
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_po_price_search'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 198
        echo "        ";
        echo "по ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 198, $this->source); })()), "po_price", [], "any", false, false, false, 198), 'widget', ["value" => (isset($context["po_price_search"]) || array_key_exists("po_price_search", $context) ? $context["po_price_search"] : (function () { throw new RuntimeError('Variable "po_price_search" does not exist.', 198, $this->source); })())]);
        echo "<br>
        ";
        // line 199
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 199, $this->source); })()), "flashes", ["children[s_price].data"], "method", false, false, false, 199));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 200
            echo "        ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 202
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 202, $this->source); })()), "flashes", ["children[po_price].data"], "method", false, false, false, 202));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 203
            echo "        ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 205
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 205, $this->source); })()), "po_price", [], "any", false, false, false, 205), 'errors');
        echo "</th>

        ";
        // line 207
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 207, $this->source); })()), "flashes", ["search_id_payment_method"], "method", false, false, false, 207));
        foreach ($context['_seq'] as $context["_key"] => $context["value_id_payment_method"]) {
            echo "  
        ";
            // line 208
            $context["id_payment_method_search"] = $context["value_id_payment_method"];
            // line 209
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_id_payment_method'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 210
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 210, $this->source); })()), "search_id_payment_method", [], "any", false, false, false, 210), 'label');
        echo "<br>
        ";
        // line 211
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 211, $this->source); })()), "search_id_payment_method", [], "any", false, false, false, 211), 'widget', ["value" => (isset($context["id_payment_method_search"]) || array_key_exists("id_payment_method_search", $context) ? $context["id_payment_method_search"] : (function () { throw new RuntimeError('Variable "id_payment_method_search" does not exist.', 211, $this->source); })())]);
        echo "
        ";
        // line 212
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 212, $this->source); })()), "search_id_payment_method", [], "any", false, false, false, 212), 'errors');
        echo "</th>

        ";
        // line 214
        $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 214, $this->source); })()), "button", [], "any", false, false, false, 214), 'widget');
        // line 215
        echo "
        <th><button class=\"search\" type=\"submit\" name=\"search\">Поиск</button></th>
        
    ";
        // line 218
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 218, $this->source); })()), 'form_end');
        echo "

    <form action=\"/reset_invoice\" name=\"reset_invoice\">
    <th><button class=\"reset\" type=\"submit\" name=\"reset_invoice\">Сбросить</button></th>
    </form>
    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 226
    public function block_table_thead_tr($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_thead_tr"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_thead_tr"));

        // line 228
        if ((isset($context["arr_incoming_documents"]) || array_key_exists("arr_incoming_documents", $context) ? $context["arr_incoming_documents"] : (function () { throw new RuntimeError('Variable "arr_incoming_documents" does not exist.', 228, $this->source); })())) {
            // line 229
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["arr_incoming_documents"]) || array_key_exists("arr_incoming_documents", $context) ? $context["arr_incoming_documents"] : (function () { throw new RuntimeError('Variable "arr_incoming_documents" does not exist.', 229, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["arr_search_invoice"]) {
                // line 230
                echo "        ";
                if ($context["arr_search_invoice"]) {
                    // line 231
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
                // line 244
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['arr_search_invoice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 246
            echo "    <h2>Видите параметры в поиск</h2> 
";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 250
    public function block_tbody($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tbody"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tbody"));

        // line 251
        echo "        ";
        // line 252
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["arr_incoming_documents"]) || array_key_exists("arr_incoming_documents", $context) ? $context["arr_incoming_documents"] : (function () { throw new RuntimeError('Variable "arr_incoming_documents" does not exist.', 252, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["arr_search_invoice"]) {
            // line 253
            echo "            ";
            if ($context["arr_search_invoice"]) {
                // line 254
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["arr_search_invoice"]);
                foreach ($context['_seq'] as $context["_key"] => $context["incoming_documents"]) {
                    // line 255
                    echo "                    <tr>
                        ";
                    // line 256
                    if (((twig_get_attribute($this->env, $this->source, $context["incoming_documents"], "getSales", [], "method", false, false, false, 256) == 1) && (twig_get_attribute($this->env, $this->source,                     // line 257
$context["incoming_documents"], "getRefund", [], "method", false, false, false, 257) == 1))) {
                        // line 258
                        echo "
                            <td>";
                        // line 259
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["incoming_documents"], "getNumberDocument", [], "method", false, false, false, 259), "html", null, true);
                        echo "</td>

                            <td>";
                        // line 261
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["incoming_documents"], "getDataInvoice", [], "method", false, false, false, 261), "d-m-Y"), "html", null, true);
                        echo "</td>

                            <td>";
                        // line 263
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["incoming_documents"], "getIdCounterparty", [], "method", false, false, false, 263), "getCounterparty", [], "method", false, false, false, 263), "html", null, true);
                        echo "</td>

                            <td>";
                        // line 265
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["incoming_documents"], "getIdDetails", [], "method", false, false, false, 265), "getPartNumbers", [], "method", false, false, false, 265), "html", null, true);
                        echo "</td>

                            <td>";
                        // line 267
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["incoming_documents"], "getIdManufacturer", [], "method", false, false, false, 267), "getManufacturers", [], "method", false, false, false, 267), "html", null, true);
                        echo "</td>

                            ";
                        // line 270
                        echo "
                            <td>";
                        // line 271
                        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["incoming_documents"], "getQuantity", [], "method", false, false, false, 271) - twig_get_attribute($this->env, $this->source, $context["incoming_documents"], "getQuantitySold", [], "method", false, false, false, 271)), "html", null, true);
                        echo "</td>

                            <td>";
                        // line 273
                        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["incoming_documents"], "getQuantitySold", [], "method", true, true, false, 273)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["incoming_documents"], "getQuantitySold", [], "method", false, false, false, 273), "")) : ("")), "html", null, true);
                        echo "</td>

                            <td>";
                        // line 275
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["incoming_documents"], "getPrice", [], "method", false, false, false, 275) / 100) / twig_get_attribute($this->env, $this->source,                         // line 276
$context["incoming_documents"], "getQuantity", [], "method", false, false, false, 276)), 2, ".", ""), "html", null, true);
                        echo "</td>

                            <td>";
                        // line 278
                        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["incoming_documents"], "getPrice", [], "method", false, false, false, 278) / 100) - (((twig_get_attribute($this->env, $this->source, $context["incoming_documents"], "getPrice", [], "method", false, false, false, 278) / 100) / twig_get_attribute($this->env, $this->source,                         // line 279
$context["incoming_documents"], "getQuantity", [], "method", false, false, false, 279)) * twig_get_attribute($this->env, $this->source, $context["incoming_documents"], "getQuantitySold", [], "method", false, false, false, 279))), "html", null, true);
                        echo "</td>

                            <td>";
                        // line 281
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["incoming_documents"], "getIdPaymentMethod", [], "method", false, false, false, 281), "getMethod", [], "method", false, false, false, 281), "html", null, true);
                        echo "</td>


                            <form action=\"/refund_part\" name=\"refund_part\" method=\"get\">

                                <td><button class=\"refund\" type=\"submit\" name=\"refund_part\" value=\"";
                        // line 286
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["incoming_documents"], "getId", [], "method", false, false, false, 286), "html", null, true);
                        echo "\">Возврат</button></td>
                                
                            </form>
                            <form action=\"/delete_invoice\" name=\"delete_invoice\" method=\"post\">

                                <td><button class=\"delete\" type=\"submit\" name=\"delete_invoice\" value=\"";
                        // line 291
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["incoming_documents"], "getId", [], "method", false, false, false, 291), "html", null, true);
                        echo "\">Удалить</button></td>
                                
                            </form>
                        ";
                    }
                    // line 295
                    echo "                    </tr>   
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['incoming_documents'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 297
                echo "            ";
            } else {
                // line 298
                echo "                <h2>Данные не найдены. Видите параметры в поиск</h2>  
            ";
            }
            // line 300
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['arr_search_invoice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 301
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
        return array (  1099 => 301,  1093 => 300,  1089 => 298,  1086 => 297,  1079 => 295,  1072 => 291,  1064 => 286,  1056 => 281,  1051 => 279,  1050 => 278,  1045 => 276,  1044 => 275,  1039 => 273,  1034 => 271,  1031 => 270,  1026 => 267,  1021 => 265,  1016 => 263,  1011 => 261,  1006 => 259,  1003 => 258,  1001 => 257,  1000 => 256,  997 => 255,  992 => 254,  989 => 253,  984 => 252,  982 => 251,  972 => 250,  960 => 246,  953 => 244,  938 => 231,  935 => 230,  930 => 229,  928 => 228,  918 => 226,  901 => 218,  896 => 215,  894 => 214,  889 => 212,  885 => 211,  880 => 210,  874 => 209,  872 => 208,  866 => 207,  860 => 205,  851 => 203,  846 => 202,  837 => 200,  833 => 199,  827 => 198,  821 => 197,  819 => 196,  813 => 195,  809 => 194,  804 => 193,  799 => 192,  793 => 191,  791 => 190,  785 => 189,  782 => 188,  776 => 177,  767 => 175,  763 => 174,  759 => 173,  754 => 172,  748 => 171,  746 => 170,  740 => 169,  734 => 167,  725 => 165,  721 => 164,  717 => 163,  712 => 162,  706 => 161,  704 => 160,  698 => 159,  693 => 157,  689 => 156,  684 => 155,  678 => 154,  676 => 153,  670 => 152,  665 => 150,  659 => 149,  653 => 148,  651 => 147,  645 => 146,  641 => 145,  636 => 144,  631 => 143,  625 => 142,  623 => 141,  617 => 140,  611 => 138,  602 => 136,  598 => 135,  594 => 134,  589 => 133,  583 => 132,  581 => 131,  575 => 130,  572 => 129,  569 => 128,  566 => 127,  563 => 126,  561 => 125,  558 => 124,  555 => 123,  552 => 122,  549 => 121,  546 => 120,  543 => 119,  541 => 118,  536 => 116,  534 => 115,  524 => 114,  511 => 109,  506 => 106,  504 => 105,  499 => 103,  495 => 102,  490 => 101,  484 => 100,  482 => 99,  476 => 98,  470 => 96,  461 => 94,  456 => 93,  447 => 91,  443 => 90,  439 => 89,  434 => 88,  428 => 87,  426 => 86,  420 => 85,  414 => 83,  405 => 81,  401 => 80,  397 => 79,  392 => 78,  386 => 77,  384 => 76,  378 => 75,  372 => 73,  363 => 71,  359 => 70,  355 => 69,  350 => 68,  344 => 67,  342 => 66,  336 => 65,  330 => 63,  321 => 61,  317 => 60,  313 => 59,  308 => 58,  302 => 57,  300 => 56,  294 => 55,  291 => 54,  286 => 51,  282 => 50,  277 => 49,  271 => 48,  269 => 47,  263 => 46,  258 => 44,  254 => 43,  249 => 42,  243 => 41,  241 => 40,  235 => 39,  229 => 37,  220 => 35,  216 => 34,  212 => 33,  207 => 32,  201 => 31,  199 => 30,  193 => 29,  190 => 28,  187 => 27,  184 => 26,  181 => 25,  179 => 24,  176 => 23,  173 => 22,  170 => 21,  167 => 20,  164 => 19,  162 => 18,  157 => 15,  154 => 14,  151 => 12,  141 => 11,  122 => 9,  103 => 7,  84 => 5,  65 => 3,  42 => 1,);
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
    
    {{ form_start(form_i_d, {'action': path('save_incoming_documents')}) }}

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
