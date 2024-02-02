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
class __TwigTemplate_f77dc67a0a9381fa8ee9173aa9d43e9f extends Template
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

    </tr>
    <tr>

    ";
        // line 113
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_save_file"]) || array_key_exists("form_save_file", $context) ? $context["form_save_file"] : (function () { throw new RuntimeError('Variable "form_save_file" does not exist.', 113, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("saving_file")]);
        echo "

    <th>";
        // line 115
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_save_file"]) || array_key_exists("form_save_file", $context) ? $context["form_save_file"] : (function () { throw new RuntimeError('Variable "form_save_file" does not exist.', 115, $this->source); })()), "file_save", [], "any", false, false, false, 115), 'label');
        echo "<br>
        ";
        // line 116
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_save_file"]) || array_key_exists("form_save_file", $context) ? $context["form_save_file"] : (function () { throw new RuntimeError('Variable "form_save_file" does not exist.', 116, $this->source); })()), "file_save", [], "any", false, false, false, 116), 'widget');
        echo "
        ";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_save_file"]) || array_key_exists("form_save_file", $context) ? $context["form_save_file"] : (function () { throw new RuntimeError('Variable "form_save_file" does not exist.', 117, $this->source); })()), "file_save", [], "any", false, false, false, 117), 'errors');
        echo "</th>

    <th>";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_save_file"]) || array_key_exists("form_save_file", $context) ? $context["form_save_file"] : (function () { throw new RuntimeError('Variable "form_save_file" does not exist.', 119, $this->source); })()), "button_save_file", [], "any", false, false, false, 119), 'widget', ["label" => "Сохранить", "attr" => ["class" => "save"]]);
        // line 120
        echo "</th>
    
    ";
        // line 122
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_save_file"]) || array_key_exists("form_save_file", $context) ? $context["form_save_file"] : (function () { throw new RuntimeError('Variable "form_save_file" does not exist.', 122, $this->source); })()), 'form_end');
        echo "
   
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 127
    public function block_form_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_search"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_search"));

        // line 128
        echo "    ";
        // line 129
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 129, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("incoming_documents")]);
        echo "
";
        // line 131
        echo "        ";
        // line 132
        echo "        ";
        $context["number_document_search"] = "";
        // line 133
        echo "        ";
        $context["s_data_invoice_search"] = "";
        // line 134
        echo "        ";
        $context["po_data_invoice_search"] = "";
        // line 135
        echo "        ";
        $context["id_counterparty_search"] = "";
        // line 136
        echo "        ";
        $context["id_details_search"] = "";
        // line 137
        echo "        ";
        $context["id_manufacturer_search"] = "";
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
        // line 191
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 191, $this->source); })()), "flashes", ["s_price"], "method", false, false, false, 191));
        foreach ($context['_seq'] as $context["_key"] => $context["value_s_price_search"]) {
            echo "  
        ";
            // line 192
            $context["s_price_search"] = $context["value_s_price_search"];
            // line 193
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_s_price_search'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 194
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 194, $this->source); })()), "s_price", [], "any", false, false, false, 194), 'label');
        echo "<br>
        ";
        // line 195
        echo "с ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 195, $this->source); })()), "s_price", [], "any", false, false, false, 195), 'widget', ["value" => (isset($context["s_price_search"]) || array_key_exists("s_price_search", $context) ? $context["s_price_search"] : (function () { throw new RuntimeError('Variable "s_price_search" does not exist.', 195, $this->source); })())]);
        echo "
        ";
        // line 196
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 196, $this->source); })()), "s_price", [], "any", false, false, false, 196), 'errors');
        echo "<br>
        ";
        // line 197
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 197, $this->source); })()), "flashes", ["po_price"], "method", false, false, false, 197));
        foreach ($context['_seq'] as $context["_key"] => $context["value_po_price_search"]) {
            echo "  
        ";
            // line 198
            $context["po_price_search"] = $context["value_po_price_search"];
            // line 199
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_po_price_search'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 200
        echo "        ";
        echo "по ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 200, $this->source); })()), "po_price", [], "any", false, false, false, 200), 'widget', ["value" => (isset($context["po_price_search"]) || array_key_exists("po_price_search", $context) ? $context["po_price_search"] : (function () { throw new RuntimeError('Variable "po_price_search" does not exist.', 200, $this->source); })())]);
        echo "<br>
        ";
        // line 201
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 201, $this->source); })()), "flashes", ["children[s_price].data"], "method", false, false, false, 201));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 202
            echo "        ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 204
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 204, $this->source); })()), "flashes", ["children[po_price].data"], "method", false, false, false, 204));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 205
            echo "        ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 207
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 207, $this->source); })()), "po_price", [], "any", false, false, false, 207), 'errors');
        echo "</th>

        ";
        // line 209
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 209, $this->source); })()), "flashes", ["search_id_payment_method"], "method", false, false, false, 209));
        foreach ($context['_seq'] as $context["_key"] => $context["value_id_payment_method"]) {
            echo "  
        ";
            // line 210
            $context["id_payment_method_search"] = $context["value_id_payment_method"];
            // line 211
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_id_payment_method'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 212
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 212, $this->source); })()), "search_id_payment_method", [], "any", false, false, false, 212), 'label');
        echo "<br>
        ";
        // line 213
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 213, $this->source); })()), "search_id_payment_method", [], "any", false, false, false, 213), 'widget', ["value" => (isset($context["id_payment_method_search"]) || array_key_exists("id_payment_method_search", $context) ? $context["id_payment_method_search"] : (function () { throw new RuntimeError('Variable "id_payment_method_search" does not exist.', 213, $this->source); })())]);
        echo "
        ";
        // line 214
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 214, $this->source); })()), "search_id_payment_method", [], "any", false, false, false, 214), 'errors');
        echo "</th>

        <th>";
        // line 216
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 216, $this->source); })()), "button_search_invoice", [], "any", false, false, false, 216), 'widget', ["label" => "Поиск", "attr" => ["class" => "search"]]);
        echo "</th>
        
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
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["incoming_documents"], "getPrice", [], "method", false, false, false, 278) / 100) - (((twig_get_attribute($this->env, $this->source,                         // line 279
$context["incoming_documents"], "getPrice", [], "method", false, false, false, 279) / 100) / twig_get_attribute($this->env, $this->source,                         // line 280
$context["incoming_documents"], "getQuantity", [], "method", false, false, false, 280)) * twig_get_attribute($this->env, $this->source,                         // line 281
$context["incoming_documents"], "getQuantitySold", [], "method", false, false, false, 281))), 2, ".", ""), "html", null, true);
                        echo "</td>

                            <td>";
                        // line 283
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["incoming_documents"], "getIdPaymentMethod", [], "method", false, false, false, 283), "getMethod", [], "method", false, false, false, 283), "html", null, true);
                        echo "</td>


                            <form action=\"/refund_part\" name=\"refund_part\" method=\"get\">

                                <td><button class=\"refund\" type=\"submit\" name=\"refund_part\" value=\"";
                        // line 288
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["incoming_documents"], "getId", [], "method", false, false, false, 288), "html", null, true);
                        echo "\">Возврат</button></td>
                                
                            </form>
                            <form action=\"/delete_invoice\" name=\"delete_invoice\" method=\"post\">

                                <td><button class=\"delete\" type=\"submit\" name=\"delete_invoice\" value=\"";
                        // line 293
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["incoming_documents"], "getId", [], "method", false, false, false, 293), "html", null, true);
                        echo "\">Удалить</button></td>
                                
                            </form>
                        ";
                    }
                    // line 297
                    echo "                    </tr>   
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['incoming_documents'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 299
                echo "            ";
            } else {
                // line 300
                echo "                <h2>Данные не найдены. Видите параметры в поиск</h2>  
            ";
            }
            // line 302
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['arr_search_invoice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 303
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
        return array (  1124 => 303,  1118 => 302,  1114 => 300,  1111 => 299,  1104 => 297,  1097 => 293,  1089 => 288,  1081 => 283,  1076 => 281,  1075 => 280,  1074 => 279,  1073 => 278,  1068 => 276,  1067 => 275,  1062 => 273,  1057 => 271,  1054 => 270,  1049 => 267,  1044 => 265,  1039 => 263,  1034 => 261,  1029 => 259,  1026 => 258,  1024 => 257,  1023 => 256,  1020 => 255,  1015 => 254,  1012 => 253,  1007 => 252,  1005 => 251,  995 => 250,  983 => 246,  976 => 244,  961 => 231,  958 => 230,  953 => 229,  951 => 228,  941 => 226,  924 => 218,  919 => 216,  914 => 214,  910 => 213,  905 => 212,  899 => 211,  897 => 210,  891 => 209,  885 => 207,  876 => 205,  871 => 204,  862 => 202,  858 => 201,  852 => 200,  846 => 199,  844 => 198,  838 => 197,  834 => 196,  829 => 195,  824 => 194,  818 => 193,  816 => 192,  810 => 191,  804 => 189,  795 => 187,  791 => 186,  787 => 185,  782 => 184,  776 => 183,  774 => 182,  768 => 181,  762 => 179,  753 => 177,  749 => 176,  745 => 175,  740 => 174,  734 => 173,  732 => 172,  726 => 171,  721 => 169,  717 => 168,  712 => 167,  706 => 166,  704 => 165,  698 => 164,  693 => 162,  687 => 161,  681 => 160,  679 => 159,  673 => 158,  669 => 157,  664 => 156,  659 => 155,  653 => 154,  651 => 153,  645 => 152,  639 => 150,  630 => 148,  626 => 147,  622 => 146,  617 => 145,  611 => 144,  609 => 143,  603 => 142,  600 => 141,  597 => 140,  594 => 139,  591 => 138,  588 => 137,  585 => 136,  582 => 135,  579 => 134,  576 => 133,  573 => 132,  571 => 131,  566 => 129,  564 => 128,  554 => 127,  541 => 122,  537 => 120,  535 => 119,  530 => 117,  526 => 116,  522 => 115,  516 => 113,  508 => 107,  503 => 104,  501 => 103,  496 => 101,  492 => 100,  487 => 99,  481 => 98,  479 => 97,  473 => 96,  467 => 94,  458 => 92,  453 => 91,  444 => 89,  440 => 88,  436 => 87,  431 => 86,  425 => 85,  423 => 84,  417 => 83,  411 => 81,  402 => 79,  398 => 78,  394 => 77,  389 => 76,  383 => 75,  381 => 74,  375 => 73,  369 => 71,  360 => 69,  356 => 68,  352 => 67,  347 => 66,  341 => 65,  339 => 64,  333 => 63,  327 => 61,  318 => 59,  314 => 58,  310 => 57,  305 => 56,  299 => 55,  297 => 54,  291 => 53,  286 => 51,  282 => 50,  277 => 49,  271 => 48,  269 => 47,  263 => 46,  258 => 44,  254 => 43,  249 => 42,  243 => 41,  241 => 40,  235 => 39,  229 => 37,  220 => 35,  216 => 34,  212 => 33,  207 => 32,  201 => 31,  199 => 30,  193 => 29,  190 => 28,  187 => 27,  184 => 26,  181 => 25,  179 => 24,  176 => 23,  173 => 22,  170 => 21,  167 => 20,  164 => 19,  162 => 18,  157 => 15,  154 => 14,  151 => 12,  141 => 11,  122 => 9,  103 => 7,  84 => 5,  65 => 3,  42 => 1,);
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

    </tr>
    <tr>

    {#Форма сохранения счет-фактур из файла#}
    {{ form_start(form_save_file, {'action': path('saving_file')}) }}

    <th>{{ form_label(form_save_file.file_save) }}<br>
        {{ form_widget(form_save_file.file_save) }}
        {{ form_errors(form_save_file.file_save) }}</th>

    <th>{{ form_widget(form_save_file.button_save_file, 
        {'label': 'Сохранить', 'attr': {'class': 'save'} }) }}</th>
    
    {{ form_end(form_save_file) }}
   
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
