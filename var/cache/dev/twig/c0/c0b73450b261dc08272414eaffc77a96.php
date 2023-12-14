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

/* counterparty/edit_counterparty.html.twig */
class __TwigTemplate_9f6ca2e7d43dfbea1a9d7250a8a2fd08 extends Template
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
            'form_sales_edit' => [$this, 'block_form_sales_edit'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "counterparty/edit_counterparty.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "counterparty/edit_counterparty.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "counterparty/edit_counterparty.html.twig", 1);
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
    public function block_form_sales_edit($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_sales_edit"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_sales_edit"));

        // line 10
        echo "
    ";
        // line 12
        echo "    ";
        $context["counterparty_edit"] = ((twig_get_attribute($this->env, $this->source, ($context["edit_counterparty"] ?? null), "getCounterparty", [], "method", true, true, false, 12)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["edit_counterparty"] ?? null), "getCounterparty", [], "method", false, false, false, 12), "")) : (""));
        // line 13
        echo "    ";
        $context["edit_mail_counterparty"] = ((twig_get_attribute($this->env, $this->source, ($context["edit_counterparty"] ?? null), "getMailCounterparty", [], "method", true, true, false, 13)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["edit_counterparty"] ?? null), "getMailCounterparty", [], "method", false, false, false, 13), "")) : (""));
        // line 14
        echo "    ";
        $context["id_counterparty"] = ((twig_get_attribute($this->env, $this->source, ($context["edit_counterparty"] ?? null), "getId", [], "method", true, true, false, 14)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["edit_counterparty"] ?? null), "getId", [], "method", false, false, false, 14), "")) : (""));
        // line 15
        echo "
";
        // line 17
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_counterparty_edit"]) || array_key_exists("form_counterparty_edit", $context) ? $context["form_counterparty_edit"] : (function () { throw new RuntimeError('Variable "form_counterparty_edit" does not exist.', 17, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_counterparty")]);
        echo "

";
        // line 22
        echo "
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "flashes", ["hidden_edit"], "method", false, false, false, 23));
        foreach ($context['_seq'] as $context["_key"] => $context["value_counterparty"]) {
            echo "  
            ";
            // line 24
            $context["id_counterparty"] = $context["value_counterparty"];
            // line 25
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_counterparty'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_counterparty_edit"]) || array_key_exists("form_counterparty_edit", $context) ? $context["form_counterparty_edit"] : (function () { throw new RuntimeError('Variable "form_counterparty_edit" does not exist.', 26, $this->source); })()), "hidden", [], "any", false, false, false, 26), 'widget', ["value" => (isset($context["id_counterparty"]) || array_key_exists("id_counterparty", $context) ? $context["id_counterparty"] : (function () { throw new RuntimeError('Variable "id_counterparty" does not exist.', 26, $this->source); })())]);
        echo "

        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "flashes", ["counterparty_edit"], "method", false, false, false, 28));
        foreach ($context['_seq'] as $context["_key"] => $context["value_counterparty"]) {
            echo "  
            ";
            // line 29
            $context["counterparty_edit"] = $context["value_counterparty"];
            // line 30
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_counterparty'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_counterparty_edit"]) || array_key_exists("form_counterparty_edit", $context) ? $context["form_counterparty_edit"] : (function () { throw new RuntimeError('Variable "form_counterparty_edit" does not exist.', 31, $this->source); })()), "counterparty", [], "any", false, false, false, 31), 'label');
        echo "<br>
        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_counterparty_edit"]) || array_key_exists("form_counterparty_edit", $context) ? $context["form_counterparty_edit"] : (function () { throw new RuntimeError('Variable "form_counterparty_edit" does not exist.', 32, $this->source); })()), "counterparty", [], "any", false, false, false, 32), 'widget', ["value" => (isset($context["counterparty_edit"]) || array_key_exists("counterparty_edit", $context) ? $context["counterparty_edit"] : (function () { throw new RuntimeError('Variable "counterparty_edit" does not exist.', 32, $this->source); })())]);
        echo "<br>
        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_counterparty_edit"]) || array_key_exists("form_counterparty_edit", $context) ? $context["form_counterparty_edit"] : (function () { throw new RuntimeError('Variable "form_counterparty_edit" does not exist.', 33, $this->source); })()), "counterparty", [], "any", false, false, false, 33), 'errors');
        echo "</th>
        
        

        ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "flashes", ["mail_counterparty_edit"], "method", false, false, false, 37));
        foreach ($context['_seq'] as $context["_key"] => $context["value_mail_counterparty"]) {
            echo "  
            ";
            // line 38
            $context["edit_mail_counterparty"] = $context["value_mail_counterparty"];
            // line 39
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_mail_counterparty'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_counterparty_edit"]) || array_key_exists("form_counterparty_edit", $context) ? $context["form_counterparty_edit"] : (function () { throw new RuntimeError('Variable "form_counterparty_edit" does not exist.', 40, $this->source); })()), "mail_counterparty", [], "any", false, false, false, 40), 'label');
        echo "<br>
        ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_counterparty_edit"]) || array_key_exists("form_counterparty_edit", $context) ? $context["form_counterparty_edit"] : (function () { throw new RuntimeError('Variable "form_counterparty_edit" does not exist.', 41, $this->source); })()), "mail_counterparty", [], "any", false, false, false, 41), 'widget', ["value" => (isset($context["edit_mail_counterparty"]) || array_key_exists("edit_mail_counterparty", $context) ? $context["edit_mail_counterparty"] : (function () { throw new RuntimeError('Variable "edit_mail_counterparty" does not exist.', 41, $this->source); })())]);
        echo "<br>
        ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_counterparty_edit"]) || array_key_exists("form_counterparty_edit", $context) ? $context["form_counterparty_edit"] : (function () { throw new RuntimeError('Variable "form_counterparty_edit" does not exist.', 42, $this->source); })()), "mail_counterparty", [], "any", false, false, false, 42), 'errors');
        echo "</th>

        <th>";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_counterparty_edit"]) || array_key_exists("form_counterparty_edit", $context) ? $context["form_counterparty_edit"] : (function () { throw new RuntimeError('Variable "form_counterparty_edit" does not exist.', 44, $this->source); })()), "button", [], "any", false, false, false, 44), 'widget', ["label" => "Редоктировать", "attr" => ["class" => "save"]]);
        echo "</th>

   ";
        // line 46
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_counterparty_edit"]) || array_key_exists("form_counterparty_edit", $context) ? $context["form_counterparty_edit"] : (function () { throw new RuntimeError('Variable "form_counterparty_edit" does not exist.', 46, $this->source); })()), 'form_end');
        echo "
   
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 50
    public function block_form_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_search"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_search"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 52
    public function block_table_thead_tr($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_thead_tr"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_thead_tr"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 54
    public function block_tbody($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tbody"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tbody"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "counterparty/edit_counterparty.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 54,  269 => 52,  251 => 50,  238 => 46,  233 => 44,  228 => 42,  224 => 41,  219 => 40,  213 => 39,  211 => 38,  205 => 37,  198 => 33,  194 => 32,  189 => 31,  183 => 30,  181 => 29,  175 => 28,  169 => 26,  163 => 25,  161 => 24,  155 => 23,  152 => 22,  146 => 17,  143 => 15,  140 => 14,  137 => 13,  134 => 12,  131 => 10,  121 => 9,  102 => 7,  83 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{title_logo}}{% endblock %}

{% block logo %}{{title_logo}}{% endblock %}

{% block legend %}{{legend}}{% endblock legend%}

{% block form_sales_edit %}

    {#Переменный для вывода данных в форме #}
    {% set counterparty_edit = edit_counterparty.getCounterparty()|default('') %}
    {% set edit_mail_counterparty = edit_counterparty.getMailCounterparty()|default('') %}
    {% set id_counterparty = edit_counterparty.getId()|default('') %}

{#Форма редактирования детали#}
    {{ form_start(form_counterparty_edit, {'action': path('edit_counterparty')}) }}

{#{{ dump(edit_counterparty) }}
{{ dump(id_counterparty) }}
  {{ dump(app.flashes()) }} #}

        {% for value_counterparty in app.flashes('hidden_edit') %}  
            {% set id_counterparty = value_counterparty %}
        {% endfor %}
        {{ form_widget(form_counterparty_edit.hidden, {value : id_counterparty}) }}

        {% for value_counterparty in app.flashes('counterparty_edit') %}  
            {% set counterparty_edit = value_counterparty %}
        {% endfor %}
        <th>{{ form_label(form_counterparty_edit.counterparty) }}<br>
        {{ form_widget(form_counterparty_edit.counterparty, {value : counterparty_edit}) }}<br>
        {{ form_errors(form_counterparty_edit.counterparty) }}</th>
        
        

        {% for value_mail_counterparty in app.flashes('mail_counterparty_edit') %}  
            {% set edit_mail_counterparty = value_mail_counterparty %}
        {% endfor %}
        <th>{{ form_label(form_counterparty_edit.mail_counterparty) }}<br>
        {{ form_widget(form_counterparty_edit.mail_counterparty, {value : edit_mail_counterparty}) }}<br>
        {{ form_errors(form_counterparty_edit.mail_counterparty) }}</th>

        <th>{{ form_widget(form_counterparty_edit.button, {'label': 'Редоктировать', 'attr': {'class': 'save'}})}}</th>

   {{ form_end(form_counterparty_edit) }}
   
{% endblock form_sales_edit %}

{% block form_search %}{% endblock form_search %}

{% block table_thead_tr %}{% endblock table_thead_tr %}

{% block tbody %}{% endblock tbody %}", "counterparty/edit_counterparty.html.twig", "/var/www/templates/counterparty/edit_counterparty.html.twig");
    }
}
