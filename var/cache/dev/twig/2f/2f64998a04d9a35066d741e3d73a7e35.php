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

/* sales/quantity_return_product.html.twig */
class __TwigTemplate_ee378963e31a2f2b645803ca1212aad5 extends Template
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
            'form_save_edit_sales' => [$this, 'block_form_save_edit_sales'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sales/quantity_return_product.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sales/quantity_return_product.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "sales/quantity_return_product.html.twig", 1);
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
    public function block_form_save_edit_sales($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_save_edit_sales"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_save_edit_sales"));

        // line 10
        echo "
    ";
        // line 12
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_return_product"]) || array_key_exists("form_return_product", $context) ? $context["form_return_product"] : (function () { throw new RuntimeError('Variable "form_return_product" does not exist.', 12, $this->source); })()), 'form_start');
        echo "
        ";
        // line 14
        echo "        ";
        $context["id_return_product"] = ((twig_get_attribute($this->env, $this->source, ($context["return_product"] ?? null), "getId", [], "method", true, true, false, 14)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["return_product"] ?? null), "getId", [], "method", false, false, false, 14), "")) : (""));
        // line 15
        echo "        
        ";
        // line 16
        $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_return_product"]) || array_key_exists("form_return_product", $context) ? $context["form_return_product"] : (function () { throw new RuntimeError('Variable "form_return_product" does not exist.', 16, $this->source); })()), "part_numbers_sales", [], "any", false, false, false, 16), 'widget');
        // line 17
        echo "        ";
        $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_return_product"]) || array_key_exists("form_return_product", $context) ? $context["form_return_product"] : (function () { throw new RuntimeError('Variable "form_return_product" does not exist.', 17, $this->source); })()), "original_number_sales", [], "any", false, false, false, 17), 'widget');
        // line 18
        echo "        ";
        $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_return_product"]) || array_key_exists("form_return_product", $context) ? $context["form_return_product"] : (function () { throw new RuntimeError('Variable "form_return_product" does not exist.', 18, $this->source); })()), "manufacturers_sales", [], "any", false, false, false, 18), 'widget');
        // line 19
        echo "        ";
        $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_return_product"]) || array_key_exists("form_return_product", $context) ? $context["form_return_product"] : (function () { throw new RuntimeError('Variable "form_return_product" does not exist.', 19, $this->source); })()), "id_counterparty_sales", [], "any", false, false, false, 19), 'widget');
        // line 20
        echo "        ";
        $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_return_product"]) || array_key_exists("form_return_product", $context) ? $context["form_return_product"] : (function () { throw new RuntimeError('Variable "form_return_product" does not exist.', 20, $this->source); })()), "id_payment_method_sales", [], "any", false, false, false, 20), 'widget');
        // line 21
        echo "        ";
        $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_return_product"]) || array_key_exists("form_return_product", $context) ? $context["form_return_product"] : (function () { throw new RuntimeError('Variable "form_return_product" does not exist.', 21, $this->source); })()), "id_part_name_sales", [], "any", false, false, false, 21), 'widget');
        // line 22
        echo "        ";
        $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_return_product"]) || array_key_exists("form_return_product", $context) ? $context["form_return_product"] : (function () { throw new RuntimeError('Variable "form_return_product" does not exist.', 22, $this->source); })()), "id_car_brand_sales", [], "any", false, false, false, 22), 'widget');
        // line 23
        echo "        ";
        $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_return_product"]) || array_key_exists("form_return_product", $context) ? $context["form_return_product"] : (function () { throw new RuntimeError('Variable "form_return_product" does not exist.', 23, $this->source); })()), "id_side_sales", [], "any", false, false, false, 23), 'widget');
        // line 24
        echo "        ";
        $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_return_product"]) || array_key_exists("form_return_product", $context) ? $context["form_return_product"] : (function () { throw new RuntimeError('Variable "form_return_product" does not exist.', 24, $this->source); })()), "id_body_sales", [], "any", false, false, false, 24), 'widget');
        // line 25
        echo "        ";
        $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_return_product"]) || array_key_exists("form_return_product", $context) ? $context["form_return_product"] : (function () { throw new RuntimeError('Variable "form_return_product" does not exist.', 25, $this->source); })()), "id_axle_sales", [], "any", false, false, false, 25), 'widget');
        // line 26
        echo "        ";
        $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_return_product"]) || array_key_exists("form_return_product", $context) ? $context["form_return_product"] : (function () { throw new RuntimeError('Variable "form_return_product" does not exist.', 26, $this->source); })()), "s_data_invoice_sales", [], "any", false, false, false, 26), 'widget');
        // line 27
        echo "        ";
        $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_return_product"]) || array_key_exists("form_return_product", $context) ? $context["form_return_product"] : (function () { throw new RuntimeError('Variable "form_return_product" does not exist.', 27, $this->source); })()), "po_data_invoice_sales", [], "any", false, false, false, 27), 'widget');
        // line 28
        echo "        ";
        $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_return_product"]) || array_key_exists("form_return_product", $context) ? $context["form_return_product"] : (function () { throw new RuntimeError('Variable "form_return_product" does not exist.', 28, $this->source); })()), "s_price_sales", [], "any", false, false, false, 28), 'widget');
        // line 29
        echo "        ";
        $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_return_product"]) || array_key_exists("form_return_product", $context) ? $context["form_return_product"] : (function () { throw new RuntimeError('Variable "form_return_product" does not exist.', 29, $this->source); })()), "po_price_sales", [], "any", false, false, false, 29), 'widget');
        // line 30
        echo "
        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "flashes", ["hidden_edit"], "method", false, false, false, 31));
        foreach ($context['_seq'] as $context["_key"] => $context["value_id_part"]) {
            echo "  
            ";
            // line 32
            $context["id_edit_part"] = $context["value_id_part"];
            // line 33
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_id_part'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_return_product"]) || array_key_exists("form_return_product", $context) ? $context["form_return_product"] : (function () { throw new RuntimeError('Variable "form_return_product" does not exist.', 34, $this->source); })()), "hidden_sales", [], "any", false, false, false, 34), 'widget', ["value" => (isset($context["id_return_product"]) || array_key_exists("id_return_product", $context) ? $context["id_return_product"] : (function () { throw new RuntimeError('Variable "id_return_product" does not exist.', 34, $this->source); })())]);
        echo "

        <th>";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_return_product"]) || array_key_exists("form_return_product", $context) ? $context["form_return_product"] : (function () { throw new RuntimeError('Variable "form_return_product" does not exist.', 36, $this->source); })()), "quantity_sales", [], "any", false, false, false, 36), 'label');
        echo "<br>
        ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_return_product"]) || array_key_exists("form_return_product", $context) ? $context["form_return_product"] : (function () { throw new RuntimeError('Variable "form_return_product" does not exist.', 37, $this->source); })()), "quantity_sales", [], "any", false, false, false, 37), 'widget');
        echo "<br>
        ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_return_product"]) || array_key_exists("form_return_product", $context) ? $context["form_return_product"] : (function () { throw new RuntimeError('Variable "form_return_product" does not exist.', 38, $this->source); })()), "quantity_sales", [], "any", false, false, false, 38), 'errors');
        echo "</th>

        <th>";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_return_product"]) || array_key_exists("form_return_product", $context) ? $context["form_return_product"] : (function () { throw new RuntimeError('Variable "form_return_product" does not exist.', 40, $this->source); })()), "button_sales", [], "any", false, false, false, 40), 'widget', ["label" => "Возврат", "attr" => ["class" => "edit"]]);
        echo "</th>

    ";
        // line 42
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_return_product"]) || array_key_exists("form_return_product", $context) ? $context["form_return_product"] : (function () { throw new RuntimeError('Variable "form_return_product" does not exist.', 42, $this->source); })()), 'form_end');
        echo "        

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "sales/quantity_return_product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 42,  219 => 40,  214 => 38,  210 => 37,  206 => 36,  200 => 34,  194 => 33,  192 => 32,  186 => 31,  183 => 30,  180 => 29,  177 => 28,  174 => 27,  171 => 26,  168 => 25,  165 => 24,  162 => 23,  159 => 22,  156 => 21,  153 => 20,  150 => 19,  147 => 18,  144 => 17,  142 => 16,  139 => 15,  136 => 14,  131 => 12,  128 => 10,  118 => 9,  99 => 7,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{title_logo}}{% endblock %}

{% block logo %}{{title_logo}}{% endblock %}

{% block legend %}{{legend}}{% endblock legend%}

{% block form_save_edit_sales %}

    {#Форма поиска #}
    {{ form_start(form_return_product) }}
        {#Переменный для вывода данных в форме #}
        {% set id_return_product = return_product.getId()|default('') %}
        
        {% do form_widget(form_return_product.part_numbers_sales) %}
        {% do form_widget(form_return_product.original_number_sales) %}
        {% do form_widget(form_return_product.manufacturers_sales) %}
        {% do form_widget(form_return_product.id_counterparty_sales) %}
        {% do form_widget(form_return_product.id_payment_method_sales) %}
        {% do form_widget(form_return_product.id_part_name_sales) %}
        {% do form_widget(form_return_product.id_car_brand_sales) %}
        {% do form_widget(form_return_product.id_side_sales) %}
        {% do form_widget(form_return_product.id_body_sales) %}
        {% do form_widget(form_return_product.id_axle_sales) %}
        {% do form_widget(form_return_product.s_data_invoice_sales) %}
        {% do form_widget(form_return_product.po_data_invoice_sales) %}
        {% do form_widget(form_return_product.s_price_sales) %}
        {% do form_widget(form_return_product.po_price_sales) %}

        {% for value_id_part in app.flashes('hidden_edit') %}  
            {% set id_edit_part = value_id_part %}
        {% endfor %}
        {{ form_widget(form_return_product.hidden_sales, {value : id_return_product}) }}

        <th>{{ form_label(form_return_product.quantity_sales) }}<br>
        {{ form_widget(form_return_product.quantity_sales) }}<br>
        {{ form_errors(form_return_product.quantity_sales) }}</th>

        <th>{{ form_widget(form_return_product.button_sales, { 'label': 'Возврат', 'attr': {'class': 'edit'} }) }}</th>

    {{ form_end(form_return_product) }}        

{% endblock form_save_edit_sales %}", "sales/quantity_return_product.html.twig", "/var/www/templates/sales/quantity_return_product.html.twig");
    }
}
