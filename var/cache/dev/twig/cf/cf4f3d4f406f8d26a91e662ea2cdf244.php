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
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "flashes", ["part_numbers"], "method", false, false, false, 53));
        foreach ($context['_seq'] as $context["_key"] => $context["value_part_numbers"]) {
            echo "  
                ";
            // line 54
            $context["part_numbers"] = $context["value_part_numbers"];
            // line 55
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_part_numbers'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "            <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n"]) || array_key_exists("form_p_n", $context) ? $context["form_p_n"] : (function () { throw new RuntimeError('Variable "form_p_n" does not exist.', 56, $this->source); })()), "part_numbers", [], "any", false, false, false, 56), 'label');
        echo "<br>
            ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n"]) || array_key_exists("form_p_n", $context) ? $context["form_p_n"] : (function () { throw new RuntimeError('Variable "form_p_n" does not exist.', 57, $this->source); })()), "part_numbers", [], "any", false, false, false, 57), 'widget', ["value" => (isset($context["part_numbers"]) || array_key_exists("part_numbers", $context) ? $context["part_numbers"] : (function () { throw new RuntimeError('Variable "part_numbers" does not exist.', 57, $this->source); })())]);
        echo "<br>
            ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "flashes", ["children[part_numbers].data"], "method", false, false, false, 58));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 59
            echo "                ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n"]) || array_key_exists("form_p_n", $context) ? $context["form_p_n"] : (function () { throw new RuntimeError('Variable "form_p_n" does not exist.', 61, $this->source); })()), "part_numbers", [], "any", false, false, false, 61), 'errors');
        echo "</th>

            ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 63, $this->source); })()), "flashes", ["manufacturers"], "method", false, false, false, 63));
        foreach ($context['_seq'] as $context["_key"] => $context["value_manufacturers"]) {
            echo "  
                ";
            // line 64
            $context["manufacturers"] = $context["value_manufacturers"];
            // line 65
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_manufacturers'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "            <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n"]) || array_key_exists("form_p_n", $context) ? $context["form_p_n"] : (function () { throw new RuntimeError('Variable "form_p_n" does not exist.', 66, $this->source); })()), "manufacturers", [], "any", false, false, false, 66), 'label');
        echo "<br>
            ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n"]) || array_key_exists("form_p_n", $context) ? $context["form_p_n"] : (function () { throw new RuntimeError('Variable "form_p_n" does not exist.', 67, $this->source); })()), "manufacturers", [], "any", false, false, false, 67), 'widget', ["value" => (isset($context["manufacturers"]) || array_key_exists("manufacturers", $context) ? $context["manufacturers"] : (function () { throw new RuntimeError('Variable "manufacturers" does not exist.', 67, $this->source); })())]);
        echo "<br>
            ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "flashes", ["children[manufacturers].data"], "method", false, false, false, 68));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 69
            echo "                ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n"]) || array_key_exists("form_p_n", $context) ? $context["form_p_n"] : (function () { throw new RuntimeError('Variable "form_p_n" does not exist.', 71, $this->source); })()), "manufacturers", [], "any", false, false, false, 71), 'errors');
        echo "</th>
        
        ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 73, $this->source); })()), "flashes", ["quantity"], "method", false, false, false, 73));
        foreach ($context['_seq'] as $context["_key"] => $context["value_quantity"]) {
            echo "  
        ";
            // line 74
            $context["quantity"] = $context["value_quantity"];
            // line 75
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_quantity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_i_d"]) || array_key_exists("form_i_d", $context) ? $context["form_i_d"] : (function () { throw new RuntimeError('Variable "form_i_d" does not exist.', 76, $this->source); })()), "quantity", [], "any", false, false, false, 76), 'label');
        echo "<br>
        ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_i_d"]) || array_key_exists("form_i_d", $context) ? $context["form_i_d"] : (function () { throw new RuntimeError('Variable "form_i_d" does not exist.', 77, $this->source); })()), "quantity", [], "any", false, false, false, 77), 'widget', ["value" => (isset($context["quantity"]) || array_key_exists("quantity", $context) ? $context["quantity"] : (function () { throw new RuntimeError('Variable "quantity" does not exist.', 77, $this->source); })())]);
        echo "<br>
        ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 78, $this->source); })()), "flashes", ["children[quantity].data"], "method", false, false, false, 78));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 79
            echo "        ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_i_d"]) || array_key_exists("form_i_d", $context) ? $context["form_i_d"] : (function () { throw new RuntimeError('Variable "form_i_d" does not exist.', 81, $this->source); })()), "quantity", [], "any", false, false, false, 81), 'errors');
        echo "</th>

        ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 83, $this->source); })()), "flashes", ["price"], "method", false, false, false, 83));
        foreach ($context['_seq'] as $context["_key"] => $context["value_price"]) {
            echo "  
        ";
            // line 84
            $context["price"] = $context["value_price"];
            // line 85
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_price'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_i_d"]) || array_key_exists("form_i_d", $context) ? $context["form_i_d"] : (function () { throw new RuntimeError('Variable "form_i_d" does not exist.', 86, $this->source); })()), "price", [], "any", false, false, false, 86), 'label');
        echo "<br>
        ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_i_d"]) || array_key_exists("form_i_d", $context) ? $context["form_i_d"] : (function () { throw new RuntimeError('Variable "form_i_d" does not exist.', 87, $this->source); })()), "price", [], "any", false, false, false, 87), 'widget', ["value" => (isset($context["price"]) || array_key_exists("price", $context) ? $context["price"] : (function () { throw new RuntimeError('Variable "price" does not exist.', 87, $this->source); })())]);
        echo "<br>
        ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 88, $this->source); })()), "flashes", ["children[price]"], "method", false, false, false, 88));
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 91, $this->source); })()), "flashes", ["children[price].data"], "method", false, false, false, 91));
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_i_d"]) || array_key_exists("form_i_d", $context) ? $context["form_i_d"] : (function () { throw new RuntimeError('Variable "form_i_d" does not exist.', 94, $this->source); })()), "price", [], "any", false, false, false, 94), 'errors');
        echo "</th>

        ";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 96, $this->source); })()), "flashes", ["id_payment_method"], "method", false, false, false, 96));
        foreach ($context['_seq'] as $context["_key"] => $context["value_id_payment_method"]) {
            echo "  
        ";
            // line 97
            $context["id_payment_method"] = $context["value_id_payment_method"];
            // line 98
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_id_payment_method'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_i_d"]) || array_key_exists("form_i_d", $context) ? $context["form_i_d"] : (function () { throw new RuntimeError('Variable "form_i_d" does not exist.', 99, $this->source); })()), "id_payment_method", [], "any", false, false, false, 99), 'label');
        echo "<br>
        ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_i_d"]) || array_key_exists("form_i_d", $context) ? $context["form_i_d"] : (function () { throw new RuntimeError('Variable "form_i_d" does not exist.', 100, $this->source); })()), "id_payment_method", [], "any", false, false, false, 100), 'widget', ["value" => (isset($context["id_payment_method"]) || array_key_exists("id_payment_method", $context) ? $context["id_payment_method"] : (function () { throw new RuntimeError('Variable "id_payment_method" does not exist.', 100, $this->source); })())]);
        echo "
        ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_i_d"]) || array_key_exists("form_i_d", $context) ? $context["form_i_d"] : (function () { throw new RuntimeError('Variable "form_i_d" does not exist.', 101, $this->source); })()), "id_payment_method", [], "any", false, false, false, 101), 'errors');
        echo "</th>

        ";
        // line 103
        $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_i_d"]) || array_key_exists("form_i_d", $context) ? $context["form_i_d"] : (function () { throw new RuntimeError('Variable "form_i_d" does not exist.', 103, $this->source); })()), "id_refund_activity", [], "any", false, false, false, 103), 'widget');
        // line 104
        echo "
        <th><button class=\"save\" type=\"submit\" name=\"save\">Сохранить</button></th>     

    ";
        // line 107
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_i_d"]) || array_key_exists("form_i_d", $context) ? $context["form_i_d"] : (function () { throw new RuntimeError('Variable "form_i_d" does not exist.', 107, $this->source); })()), 'form_end');
        echo "
   
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 112
    public function block_form_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_search"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_search"));

        // line 113
        echo "    ";
        // line 114
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 114, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("incoming_documents")]);
        echo "
";
        // line 116
        echo "        ";
        // line 117
        echo "        ";
        $context["number_document_search"] = "";
        // line 118
        echo "        ";
        $context["s_data_invoice_search"] = "";
        // line 119
        echo "        ";
        $context["po_data_invoice_search"] = "";
        // line 120
        echo "        ";
        $context["id_counterparty_search"] = "";
        // line 121
        echo "        ";
        $context["id_details_search"] = "";
        // line 122
        echo "        ";
        $context["id_manufacturer_search"] = "";
        // line 123
        echo "        ";
        $context["s_price_search"] = "";
        // line 124
        echo "        ";
        $context["po_price_search"] = "";
        // line 125
        echo "        ";
        $context["id_payment_method_search"] = "";
        // line 126
        echo "
        ";
        // line 127
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 127, $this->source); })()), "flashes", ["search_number_document"], "method", false, false, false, 127));
        foreach ($context['_seq'] as $context["_key"] => $context["value_number_document_search"]) {
            echo "  
        ";
            // line 128
            $context["number_document_search"] = $context["value_number_document_search"];
            // line 129
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_number_document_search'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 130, $this->source); })()), "search_number_document", [], "any", false, false, false, 130), 'label');
        echo "<br>
        ";
        // line 131
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 131, $this->source); })()), "search_number_document", [], "any", false, false, false, 131), 'widget', ["value" => (isset($context["number_document_search"]) || array_key_exists("number_document_search", $context) ? $context["number_document_search"] : (function () { throw new RuntimeError('Variable "number_document_search" does not exist.', 131, $this->source); })())]);
        echo "<br>
        ";
        // line 132
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 132, $this->source); })()), "flashes", ["children[search_number_document].data"], "method", false, false, false, 132));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 133
            echo "        ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 135, $this->source); })()), "search_number_document", [], "any", false, false, false, 135), 'errors');
        echo "</th>

        ";
        // line 137
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 137, $this->source); })()), "flashes", ["s_data_invoice"], "method", false, false, false, 137));
        foreach ($context['_seq'] as $context["_key"] => $context["value_data_invoice_search"]) {
            echo "  
        ";
            // line 138
            $context["s_data_invoice_search"] = $context["value_data_invoice_search"];
            // line 139
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_data_invoice_search'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 140
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 140, $this->source); })()), "s_data_invoice", [], "any", false, false, false, 140), 'label');
        echo "<br>
        ";
        // line 141
        echo "с ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 141, $this->source); })()), "s_data_invoice", [], "any", false, false, false, 141), 'widget', ["value" => (isset($context["s_data_invoice_search"]) || array_key_exists("s_data_invoice_search", $context) ? $context["s_data_invoice_search"] : (function () { throw new RuntimeError('Variable "s_data_invoice_search" does not exist.', 141, $this->source); })())]);
        echo "
        ";
        // line 142
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 142, $this->source); })()), "s_data_invoice", [], "any", false, false, false, 142), 'errors');
        echo "<br>
        ";
        // line 143
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 143, $this->source); })()), "flashes", ["po_data_invoice"], "method", false, false, false, 143));
        foreach ($context['_seq'] as $context["_key"] => $context["value_price"]) {
            echo "  
        ";
            // line 144
            $context["po_data_invoice_search"] = $context["value_price"];
            // line 145
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_price'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        echo "        ";
        echo "по ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 146, $this->source); })()), "po_data_invoice", [], "any", false, false, false, 146), 'widget', ["value" => (isset($context["po_data_invoice_search"]) || array_key_exists("po_data_invoice_search", $context) ? $context["po_data_invoice_search"] : (function () { throw new RuntimeError('Variable "po_data_invoice_search" does not exist.', 146, $this->source); })())]);
        echo "<br>
        ";
        // line 147
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 147, $this->source); })()), "po_data_invoice", [], "any", false, false, false, 147), 'errors');
        echo "</th>

        ";
        // line 149
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 149, $this->source); })()), "flashes", ["search_id_counterparty"], "method", false, false, false, 149));
        foreach ($context['_seq'] as $context["_key"] => $context["value_id_counterparty_search"]) {
            echo "  
        ";
            // line 150
            $context["id_counterparty_search"] = $context["value_id_counterparty_search"];
            // line 151
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_id_counterparty_search'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 152
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 152, $this->source); })()), "search_id_counterparty", [], "any", false, false, false, 152), 'label');
        echo "<br>
        ";
        // line 153
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 153, $this->source); })()), "search_id_counterparty", [], "any", false, false, false, 153), 'widget', ["value" => (isset($context["id_counterparty_search"]) || array_key_exists("id_counterparty_search", $context) ? $context["id_counterparty_search"] : (function () { throw new RuntimeError('Variable "id_counterparty_search" does not exist.', 153, $this->source); })())]);
        echo "
        ";
        // line 154
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 154, $this->source); })()), "search_id_counterparty", [], "any", false, false, false, 154), 'errors');
        echo "</th>

        ";
        // line 156
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 156, $this->source); })()), "flashes", ["search_id_details"], "method", false, false, false, 156));
        foreach ($context['_seq'] as $context["_key"] => $context["value_id_details_search"]) {
            echo "  
        ";
            // line 157
            $context["id_details_search"] = $context["value_id_details_search"];
            // line 158
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_id_details_search'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 159
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 159, $this->source); })()), "search_id_details", [], "any", false, false, false, 159), 'label');
        echo "<br>
        ";
        // line 160
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 160, $this->source); })()), "search_id_details", [], "any", false, false, false, 160), 'widget', ["value" => (isset($context["id_details_search"]) || array_key_exists("id_details_search", $context) ? $context["id_details_search"] : (function () { throw new RuntimeError('Variable "id_details_search" does not exist.', 160, $this->source); })())]);
        echo "<br>
        ";
        // line 161
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 161, $this->source); })()), "flashes", ["children[search_id_details].data"], "method", false, false, false, 161));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 162
            echo "        ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 164
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 164, $this->source); })()), "search_id_details", [], "any", false, false, false, 164), 'errors');
        echo "</th>

        ";
        // line 166
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 166, $this->source); })()), "flashes", ["search_id_manufacturer"], "method", false, false, false, 166));
        foreach ($context['_seq'] as $context["_key"] => $context["value_id_manufacturer_search"]) {
            echo "  
        ";
            // line 167
            $context["id_manufacturer_search"] = $context["value_id_manufacturer_search"];
            // line 168
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_id_manufacturer_search'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 169
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 169, $this->source); })()), "search_id_manufacturer", [], "any", false, false, false, 169), 'label');
        echo "<br>
        ";
        // line 170
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 170, $this->source); })()), "search_id_manufacturer", [], "any", false, false, false, 170), 'widget', ["value" => (isset($context["id_manufacturer_search"]) || array_key_exists("id_manufacturer_search", $context) ? $context["id_manufacturer_search"] : (function () { throw new RuntimeError('Variable "id_manufacturer_search" does not exist.', 170, $this->source); })())]);
        echo "<br>
        ";
        // line 171
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 171, $this->source); })()), "flashes", ["children[search_id_manufacturer].data"], "method", false, false, false, 171));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 172
            echo "        ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 174
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 174, $this->source); })()), "search_id_manufacturer", [], "any", false, false, false, 174), 'errors');
        echo "</th>

        ";
        // line 176
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 176, $this->source); })()), "flashes", ["s_price"], "method", false, false, false, 176));
        foreach ($context['_seq'] as $context["_key"] => $context["value_s_price_search"]) {
            echo "  
        ";
            // line 177
            $context["s_price_search"] = $context["value_s_price_search"];
            // line 178
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_s_price_search'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 179
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 179, $this->source); })()), "s_price", [], "any", false, false, false, 179), 'label');
        echo "<br>
        ";
        // line 180
        echo "с ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 180, $this->source); })()), "s_price", [], "any", false, false, false, 180), 'widget', ["value" => (isset($context["s_price_search"]) || array_key_exists("s_price_search", $context) ? $context["s_price_search"] : (function () { throw new RuntimeError('Variable "s_price_search" does not exist.', 180, $this->source); })())]);
        echo "
        ";
        // line 181
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 181, $this->source); })()), "s_price", [], "any", false, false, false, 181), 'errors');
        echo "<br>
        ";
        // line 182
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 182, $this->source); })()), "flashes", ["po_price"], "method", false, false, false, 182));
        foreach ($context['_seq'] as $context["_key"] => $context["value_po_price_search"]) {
            echo "  
        ";
            // line 183
            $context["po_price_search"] = $context["value_po_price_search"];
            // line 184
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_po_price_search'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 185
        echo "        ";
        echo "по ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 185, $this->source); })()), "po_price", [], "any", false, false, false, 185), 'widget', ["value" => (isset($context["po_price_search"]) || array_key_exists("po_price_search", $context) ? $context["po_price_search"] : (function () { throw new RuntimeError('Variable "po_price_search" does not exist.', 185, $this->source); })())]);
        echo "<br>
        ";
        // line 186
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 186, $this->source); })()), "flashes", ["children[s_price].data"], "method", false, false, false, 186));
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 189, $this->source); })()), "flashes", ["children[po_price].data"], "method", false, false, false, 189));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 190
            echo "        ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 192
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 192, $this->source); })()), "po_price", [], "any", false, false, false, 192), 'errors');
        echo "</th>

        ";
        // line 194
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 194, $this->source); })()), "flashes", ["search_id_payment_method"], "method", false, false, false, 194));
        foreach ($context['_seq'] as $context["_key"] => $context["value_id_payment_method"]) {
            echo "  
        ";
            // line 195
            $context["id_payment_method_search"] = $context["value_id_payment_method"];
            // line 196
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_id_payment_method'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 197
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 197, $this->source); })()), "search_id_payment_method", [], "any", false, false, false, 197), 'label');
        echo "<br>
        ";
        // line 198
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 198, $this->source); })()), "search_id_payment_method", [], "any", false, false, false, 198), 'widget', ["value" => (isset($context["id_payment_method_search"]) || array_key_exists("id_payment_method_search", $context) ? $context["id_payment_method_search"] : (function () { throw new RuntimeError('Variable "id_payment_method_search" does not exist.', 198, $this->source); })())]);
        echo "
        ";
        // line 199
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 199, $this->source); })()), "search_id_payment_method", [], "any", false, false, false, 199), 'errors');
        echo "</th>

        <th>";
        // line 201
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 201, $this->source); })()), "button_search_invoice", [], "any", false, false, false, 201), 'widget', ["label" => "Поиск", "attr" => ["class" => "search"]]);
        echo "</th>
        
    ";
        // line 203
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 203, $this->source); })()), 'form_end');
        echo "

    <form action=\"/reset_invoice\" name=\"reset_invoice\">
    <th><button class=\"reset\" type=\"submit\" name=\"reset_invoice\">Сбросить</button></th>
    </form>
    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 211
    public function block_table_thead_tr($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_thead_tr"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_thead_tr"));

        // line 213
        if ((isset($context["arr_incoming_documents"]) || array_key_exists("arr_incoming_documents", $context) ? $context["arr_incoming_documents"] : (function () { throw new RuntimeError('Variable "arr_incoming_documents" does not exist.', 213, $this->source); })())) {
            // line 214
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["arr_incoming_documents"]) || array_key_exists("arr_incoming_documents", $context) ? $context["arr_incoming_documents"] : (function () { throw new RuntimeError('Variable "arr_incoming_documents" does not exist.', 214, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["arr_search_invoice"]) {
                // line 215
                echo "        ";
                if ($context["arr_search_invoice"]) {
                    // line 216
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
                // line 229
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['arr_search_invoice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 231
            echo "    <h2>Видите параметры в поиск</h2> 
";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 235
    public function block_tbody($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tbody"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tbody"));

        // line 236
        echo "        ";
        // line 237
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["arr_incoming_documents"]) || array_key_exists("arr_incoming_documents", $context) ? $context["arr_incoming_documents"] : (function () { throw new RuntimeError('Variable "arr_incoming_documents" does not exist.', 237, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["arr_search_invoice"]) {
            // line 238
            echo "            ";
            if ($context["arr_search_invoice"]) {
                // line 239
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["arr_search_invoice"]);
                foreach ($context['_seq'] as $context["_key"] => $context["incoming_documents"]) {
                    // line 240
                    echo "                    <tr>
                        ";
                    // line 241
                    if (((twig_get_attribute($this->env, $this->source, $context["incoming_documents"], "getSales", [], "method", false, false, false, 241) == 1) && (twig_get_attribute($this->env, $this->source,                     // line 242
$context["incoming_documents"], "getRefund", [], "method", false, false, false, 242) == 1))) {
                        // line 243
                        echo "
                            <td>";
                        // line 244
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["incoming_documents"], "getNumberDocument", [], "method", false, false, false, 244), "html", null, true);
                        echo "</td>

                            <td>";
                        // line 246
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["incoming_documents"], "getDataInvoice", [], "method", false, false, false, 246), "d-m-Y"), "html", null, true);
                        echo "</td>

                            <td>";
                        // line 248
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["incoming_documents"], "getIdCounterparty", [], "method", false, false, false, 248), "getCounterparty", [], "method", false, false, false, 248), "html", null, true);
                        echo "</td>

                            <td>";
                        // line 250
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["incoming_documents"], "getIdDetails", [], "method", false, false, false, 250), "getPartNumbers", [], "method", false, false, false, 250), "html", null, true);
                        echo "</td>

                            <td>";
                        // line 252
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["incoming_documents"], "getIdManufacturer", [], "method", false, false, false, 252), "getManufacturers", [], "method", false, false, false, 252), "html", null, true);
                        echo "</td>

                            ";
                        // line 255
                        echo "
                            <td>";
                        // line 256
                        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["incoming_documents"], "getQuantity", [], "method", false, false, false, 256) - twig_get_attribute($this->env, $this->source, $context["incoming_documents"], "getQuantitySold", [], "method", false, false, false, 256)), "html", null, true);
                        echo "</td>

                            <td>";
                        // line 258
                        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["incoming_documents"], "getQuantitySold", [], "method", true, true, false, 258)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["incoming_documents"], "getQuantitySold", [], "method", false, false, false, 258), "")) : ("")), "html", null, true);
                        echo "</td>

                            <td>";
                        // line 260
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["incoming_documents"], "getPrice", [], "method", false, false, false, 260) / 100) / twig_get_attribute($this->env, $this->source,                         // line 261
$context["incoming_documents"], "getQuantity", [], "method", false, false, false, 261)), 2, ".", ""), "html", null, true);
                        echo "</td>

                            <td>";
                        // line 263
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["incoming_documents"], "getPrice", [], "method", false, false, false, 263) / 100) - (((twig_get_attribute($this->env, $this->source,                         // line 264
$context["incoming_documents"], "getPrice", [], "method", false, false, false, 264) / 100) / twig_get_attribute($this->env, $this->source,                         // line 265
$context["incoming_documents"], "getQuantity", [], "method", false, false, false, 265)) * twig_get_attribute($this->env, $this->source,                         // line 266
$context["incoming_documents"], "getQuantitySold", [], "method", false, false, false, 266))), 2, ".", ""), "html", null, true);
                        echo "</td>

                            <td>";
                        // line 268
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["incoming_documents"], "getIdPaymentMethod", [], "method", false, false, false, 268), "getMethod", [], "method", false, false, false, 268), "html", null, true);
                        echo "</td>


                            <form action=\"/refund_part\" name=\"refund_part\" method=\"get\">

                                <td><button class=\"refund\" type=\"submit\" name=\"refund_part\" value=\"";
                        // line 273
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["incoming_documents"], "getId", [], "method", false, false, false, 273), "html", null, true);
                        echo "\">Возврат</button></td>
                                
                            </form>
                            <form action=\"/delete_invoice\" name=\"delete_invoice\" method=\"post\">

                                <td><button class=\"delete\" type=\"submit\" name=\"delete_invoice\" value=\"";
                        // line 278
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["incoming_documents"], "getId", [], "method", false, false, false, 278), "html", null, true);
                        echo "\">Удалить</button></td>
                                
                            </form>
                        ";
                    }
                    // line 282
                    echo "                    </tr>   
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['incoming_documents'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 284
                echo "            ";
            } else {
                // line 285
                echo "                <h2>Данные не найдены. Видите параметры в поиск</h2>  
            ";
            }
            // line 287
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['arr_search_invoice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 288
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
        return array (  1091 => 288,  1085 => 287,  1081 => 285,  1078 => 284,  1071 => 282,  1064 => 278,  1056 => 273,  1048 => 268,  1043 => 266,  1042 => 265,  1041 => 264,  1040 => 263,  1035 => 261,  1034 => 260,  1029 => 258,  1024 => 256,  1021 => 255,  1016 => 252,  1011 => 250,  1006 => 248,  1001 => 246,  996 => 244,  993 => 243,  991 => 242,  990 => 241,  987 => 240,  982 => 239,  979 => 238,  974 => 237,  972 => 236,  962 => 235,  950 => 231,  943 => 229,  928 => 216,  925 => 215,  920 => 214,  918 => 213,  908 => 211,  891 => 203,  886 => 201,  881 => 199,  877 => 198,  872 => 197,  866 => 196,  864 => 195,  858 => 194,  852 => 192,  843 => 190,  838 => 189,  829 => 187,  825 => 186,  819 => 185,  813 => 184,  811 => 183,  805 => 182,  801 => 181,  796 => 180,  791 => 179,  785 => 178,  783 => 177,  777 => 176,  771 => 174,  762 => 172,  758 => 171,  754 => 170,  749 => 169,  743 => 168,  741 => 167,  735 => 166,  729 => 164,  720 => 162,  716 => 161,  712 => 160,  707 => 159,  701 => 158,  699 => 157,  693 => 156,  688 => 154,  684 => 153,  679 => 152,  673 => 151,  671 => 150,  665 => 149,  660 => 147,  654 => 146,  648 => 145,  646 => 144,  640 => 143,  636 => 142,  631 => 141,  626 => 140,  620 => 139,  618 => 138,  612 => 137,  606 => 135,  597 => 133,  593 => 132,  589 => 131,  584 => 130,  578 => 129,  576 => 128,  570 => 127,  567 => 126,  564 => 125,  561 => 124,  558 => 123,  555 => 122,  552 => 121,  549 => 120,  546 => 119,  543 => 118,  540 => 117,  538 => 116,  533 => 114,  531 => 113,  521 => 112,  508 => 107,  503 => 104,  501 => 103,  496 => 101,  492 => 100,  487 => 99,  481 => 98,  479 => 97,  473 => 96,  467 => 94,  458 => 92,  453 => 91,  444 => 89,  440 => 88,  436 => 87,  431 => 86,  425 => 85,  423 => 84,  417 => 83,  411 => 81,  402 => 79,  398 => 78,  394 => 77,  389 => 76,  383 => 75,  381 => 74,  375 => 73,  369 => 71,  360 => 69,  356 => 68,  352 => 67,  347 => 66,  341 => 65,  339 => 64,  333 => 63,  327 => 61,  318 => 59,  314 => 58,  310 => 57,  305 => 56,  299 => 55,  297 => 54,  291 => 53,  286 => 51,  282 => 50,  277 => 49,  271 => 48,  269 => 47,  263 => 46,  258 => 44,  254 => 43,  249 => 42,  243 => 41,  241 => 40,  235 => 39,  229 => 37,  220 => 35,  216 => 34,  212 => 33,  207 => 32,  201 => 31,  199 => 30,  193 => 29,  190 => 28,  187 => 27,  184 => 26,  181 => 25,  179 => 24,  176 => 23,  173 => 22,  170 => 21,  167 => 20,  164 => 19,  162 => 18,  157 => 15,  154 => 14,  151 => 12,  141 => 11,  122 => 9,  103 => 7,  84 => 5,  65 => 3,  42 => 1,);
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

        <th>{{ form_widget(form_search.button_search_invoice, { 'label': 'Поиск', 'attr': {'class': 'search'} }) }}</th>
        
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

                            <td>{{ ((incoming_documents.getPrice() / 100) 
                                - (((incoming_documents.getPrice() / 100) 
                                    / incoming_documents.getQuantity()) 
                                    * incoming_documents.getQuantitySold()))|number_format(2, '.', '') }}</td>

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
