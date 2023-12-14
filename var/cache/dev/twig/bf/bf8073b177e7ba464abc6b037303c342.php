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
            'form' => [$this, 'block_form'],
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
    public function block_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form"));

        // line 12
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_i_d"]) || array_key_exists("form_i_d", $context) ? $context["form_i_d"] : (function () { throw new RuntimeError('Variable "form_i_d" does not exist.', 12, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sales_incoming_documents")]);
        echo "
        <th>";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_i_d"]) || array_key_exists("form_i_d", $context) ? $context["form_i_d"] : (function () { throw new RuntimeError('Variable "form_i_d" does not exist.', 13, $this->source); })()), "number_document", [], "any", false, false, false, 13), 'label');
        echo "<br>
        ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_i_d"]) || array_key_exists("form_i_d", $context) ? $context["form_i_d"] : (function () { throw new RuntimeError('Variable "form_i_d" does not exist.', 14, $this->source); })()), "number_document", [], "any", false, false, false, 14), 'widget');
        echo "
        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_i_d"]) || array_key_exists("form_i_d", $context) ? $context["form_i_d"] : (function () { throw new RuntimeError('Variable "form_i_d" does not exist.', 15, $this->source); })()), "number_document", [], "any", false, false, false, 15), 'errors');
        echo "</th>
        <th>";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_i_d"]) || array_key_exists("form_i_d", $context) ? $context["form_i_d"] : (function () { throw new RuntimeError('Variable "form_i_d" does not exist.', 16, $this->source); })()), "data_invoice", [], "any", false, false, false, 16), 'label');
        echo "<br>
        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_i_d"]) || array_key_exists("form_i_d", $context) ? $context["form_i_d"] : (function () { throw new RuntimeError('Variable "form_i_d" does not exist.', 17, $this->source); })()), "data_invoice", [], "any", false, false, false, 17), 'widget');
        echo "
        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_i_d"]) || array_key_exists("form_i_d", $context) ? $context["form_i_d"] : (function () { throw new RuntimeError('Variable "form_i_d" does not exist.', 18, $this->source); })()), "data_invoice", [], "any", false, false, false, 18), 'errors');
        echo "</th>
        <th>";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_i_d"]) || array_key_exists("form_i_d", $context) ? $context["form_i_d"] : (function () { throw new RuntimeError('Variable "form_i_d" does not exist.', 19, $this->source); })()), "id_counterparty", [], "any", false, false, false, 19), 'label');
        echo "<br>
        ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_i_d"]) || array_key_exists("form_i_d", $context) ? $context["form_i_d"] : (function () { throw new RuntimeError('Variable "form_i_d" does not exist.', 20, $this->source); })()), "id_counterparty", [], "any", false, false, false, 20), 'widget');
        echo "
        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_i_d"]) || array_key_exists("form_i_d", $context) ? $context["form_i_d"] : (function () { throw new RuntimeError('Variable "form_i_d" does not exist.', 21, $this->source); })()), "id_counterparty", [], "any", false, false, false, 21), 'errors');
        echo "</th>
        ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_p_n"]) || array_key_exists("form_p_n", $context) ? $context["form_p_n"] : (function () { throw new RuntimeError('Variable "form_p_n" does not exist.', 22, $this->source); })()), 'form_start');
        echo "
            <th>";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n"]) || array_key_exists("form_p_n", $context) ? $context["form_p_n"] : (function () { throw new RuntimeError('Variable "form_p_n" does not exist.', 23, $this->source); })()), "part_numbers", [], "any", false, false, false, 23), 'label');
        echo "<br>
            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n"]) || array_key_exists("form_p_n", $context) ? $context["form_p_n"] : (function () { throw new RuntimeError('Variable "form_p_n" does not exist.', 24, $this->source); })()), "part_numbers", [], "any", false, false, false, 24), 'widget');
        echo "
            ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n"]) || array_key_exists("form_p_n", $context) ? $context["form_p_n"] : (function () { throw new RuntimeError('Variable "form_p_n" does not exist.', 25, $this->source); })()), "part_numbers", [], "any", false, false, false, 25), 'errors');
        echo "</th>
            <th>";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n"]) || array_key_exists("form_p_n", $context) ? $context["form_p_n"] : (function () { throw new RuntimeError('Variable "form_p_n" does not exist.', 26, $this->source); })()), "manufacturers", [], "any", false, false, false, 26), 'label');
        echo "<br>
            ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n"]) || array_key_exists("form_p_n", $context) ? $context["form_p_n"] : (function () { throw new RuntimeError('Variable "form_p_n" does not exist.', 27, $this->source); })()), "manufacturers", [], "any", false, false, false, 27), 'widget');
        echo "
            ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n"]) || array_key_exists("form_p_n", $context) ? $context["form_p_n"] : (function () { throw new RuntimeError('Variable "form_p_n" does not exist.', 28, $this->source); })()), "manufacturers", [], "any", false, false, false, 28), 'errors');
        echo "</th>
        <th>";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_i_d"]) || array_key_exists("form_i_d", $context) ? $context["form_i_d"] : (function () { throw new RuntimeError('Variable "form_i_d" does not exist.', 29, $this->source); })()), "name_detail", [], "any", false, false, false, 29), 'label');
        echo "<br>
        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_i_d"]) || array_key_exists("form_i_d", $context) ? $context["form_i_d"] : (function () { throw new RuntimeError('Variable "form_i_d" does not exist.', 30, $this->source); })()), "name_detail", [], "any", false, false, false, 30), 'widget');
        echo "
        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_i_d"]) || array_key_exists("form_i_d", $context) ? $context["form_i_d"] : (function () { throw new RuntimeError('Variable "form_i_d" does not exist.', 31, $this->source); })()), "name_detail", [], "any", false, false, false, 31), 'errors');
        echo "</th>
        <th>";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_i_d"]) || array_key_exists("form_i_d", $context) ? $context["form_i_d"] : (function () { throw new RuntimeError('Variable "form_i_d" does not exist.', 32, $this->source); })()), "quantity", [], "any", false, false, false, 32), 'label');
        echo "<br>
        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_i_d"]) || array_key_exists("form_i_d", $context) ? $context["form_i_d"] : (function () { throw new RuntimeError('Variable "form_i_d" does not exist.', 33, $this->source); })()), "quantity", [], "any", false, false, false, 33), 'widget');
        echo "
        ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_i_d"]) || array_key_exists("form_i_d", $context) ? $context["form_i_d"] : (function () { throw new RuntimeError('Variable "form_i_d" does not exist.', 34, $this->source); })()), "quantity", [], "any", false, false, false, 34), 'errors');
        echo "</th>
        <th>";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_i_d"]) || array_key_exists("form_i_d", $context) ? $context["form_i_d"] : (function () { throw new RuntimeError('Variable "form_i_d" does not exist.', 35, $this->source); })()), "price", [], "any", false, false, false, 35), 'label');
        echo "<br>
        ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_i_d"]) || array_key_exists("form_i_d", $context) ? $context["form_i_d"] : (function () { throw new RuntimeError('Variable "form_i_d" does not exist.', 36, $this->source); })()), "price", [], "any", false, false, false, 36), 'widget');
        echo "
        ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_i_d"]) || array_key_exists("form_i_d", $context) ? $context["form_i_d"] : (function () { throw new RuntimeError('Variable "form_i_d" does not exist.', 37, $this->source); })()), "price", [], "any", false, false, false, 37), 'errors');
        echo "</th>
        <th><button class=\"save\" type=\"submit\" name=\"save\">Сохранить</button></th>
        ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_p_n"]) || array_key_exists("form_p_n", $context) ? $context["form_p_n"] : (function () { throw new RuntimeError('Variable "form_p_n" does not exist.', 39, $this->source); })()), 'form_end');
        echo "
    ";
        // line 40
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_i_d"]) || array_key_exists("form_i_d", $context) ? $context["form_i_d"] : (function () { throw new RuntimeError('Variable "form_i_d" does not exist.', 40, $this->source); })()), 'form_end');
        echo "   
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 43
    public function block_form_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_search"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_search"));

        // line 44
        echo "
    ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 45, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("incoming_documents")]);
        echo "

        <th>";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 47, $this->source); })()), "number_document", [], "any", false, false, false, 47), 'label');
        echo "<br>
        ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 48, $this->source); })()), "number_document", [], "any", false, false, false, 48), 'widget');
        echo "
        ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 49, $this->source); })()), "number_document", [], "any", false, false, false, 49), 'errors');
        echo "</th>

        <th>";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 51, $this->source); })()), "s_data_invoice", [], "any", false, false, false, 51), 'label');
        echo "<br>
        ";
        // line 52
        echo "с ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 52, $this->source); })()), "s_data_invoice", [], "any", false, false, false, 52), 'widget');
        echo "
        ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 53, $this->source); })()), "s_data_invoice", [], "any", false, false, false, 53), 'errors');
        echo "<br>
        ";
        // line 54
        echo "по ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 54, $this->source); })()), "po_data_invoice", [], "any", false, false, false, 54), 'widget');
        echo "
        ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 55, $this->source); })()), "po_data_invoice", [], "any", false, false, false, 55), 'errors');
        echo "</th>

        <th>";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 57, $this->source); })()), "id_counterparty", [], "any", false, false, false, 57), 'label');
        echo "<br>
        ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 58, $this->source); })()), "id_counterparty", [], "any", false, false, false, 58), 'widget');
        echo "
        ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 59, $this->source); })()), "id_counterparty", [], "any", false, false, false, 59), 'errors');
        echo "</th>

        <th>";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 61, $this->source); })()), "id_details", [], "any", false, false, false, 61), 'label');
        echo "<br>
        ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 62, $this->source); })()), "id_details", [], "any", false, false, false, 62), 'widget');
        echo "
        ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 63, $this->source); })()), "id_details", [], "any", false, false, false, 63), 'errors');
        echo "</th>

        <th>";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 65, $this->source); })()), "id_manufacturer", [], "any", false, false, false, 65), 'label');
        echo "<br>
        ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 66, $this->source); })()), "id_manufacturer", [], "any", false, false, false, 66), 'widget');
        echo "
        ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 67, $this->source); })()), "id_manufacturer", [], "any", false, false, false, 67), 'errors');
        echo "</th>

        <th>";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 69, $this->source); })()), "s_price", [], "any", false, false, false, 69), 'label');
        echo "<br>
        ";
        // line 70
        echo "с ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 70, $this->source); })()), "s_price", [], "any", false, false, false, 70), 'widget');
        echo "
        ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 71, $this->source); })()), "s_price", [], "any", false, false, false, 71), 'errors');
        echo "<br>
        ";
        // line 72
        echo "по ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 72, $this->source); })()), "po_price", [], "any", false, false, false, 72), 'widget');
        echo "
        ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 73, $this->source); })()), "po_price", [], "any", false, false, false, 73), 'errors');
        echo "</th>

        <th><button class=\"search\" type=\"submit\" name=\"search\">Поиск</button></th>
        
    ";
        // line 77
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_search"]) || array_key_exists("form_search", $context) ? $context["form_search"] : (function () { throw new RuntimeError('Variable "form_search" does not exist.', 77, $this->source); })()), 'form_end');
        echo "

    <form action=\"/reset\" name=\"reset\">
    <th><button class=\"reset\" type=\"submit\" name=\"reset\" value=\"reset\">Сбросить</button></th>
    </form>
    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 85
    public function block_table_thead_tr($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_thead_tr"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_thead_tr"));

        // line 86
        echo "    <th>№ Накладной</th>
    <th>Дата накладной</th>
    <th>Поставщик</th>
    <th>№ Детали</th>
    <th>Производитель</th>
    <th>Описание детали</th>
    <th>Кол-во</th>
    <th>Цена шт</th>
    <th>Цена общая</th>
    <th>Продано шт</th>
    <th>Продано Цена</th>
    <th>Дата прод-жи</th>
    <th>Продано</th>
    <th>Возврат</th>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 102
    public function block_tbody($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tbody"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tbody"));

        // line 103
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["arr_incoming_documents"]) || array_key_exists("arr_incoming_documents", $context) ? $context["arr_incoming_documents"] : (function () { throw new RuntimeError('Variable "arr_incoming_documents" does not exist.', 103, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["arr_search_invoice"]) {
            // line 104
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["arr_search_invoice"]);
            foreach ($context['_seq'] as $context["_key"] => $context["incoming_documents"]) {
                // line 105
                echo "            <tr>
                ";
                // line 106
                if (((twig_get_attribute($this->env, $this->source, $context["incoming_documents"], "getSales", [], "method", false, false, false, 106) == 1) && (twig_get_attribute($this->env, $this->source,                 // line 107
$context["incoming_documents"], "getRefund", [], "method", false, false, false, 107) == 1))) {
                    // line 108
                    echo "                    <td>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["incoming_documents"], "getNumberDocument", [], "method", false, false, false, 108), "html", null, true);
                    echo "</td>
                    <td>";
                    // line 109
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["incoming_documents"], "getDataInvoice", [], "method", false, false, false, 109), "d-m-Y"), "html", null, true);
                    echo "</td>
                    <td>";
                    // line 110
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["incoming_documents"], "getIdCounterparty", [], "method", false, false, false, 110), "getCounterparty", [], "method", false, false, false, 110), "html", null, true);
                    echo "</td>
                    <td>";
                    // line 111
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["incoming_documents"], "getIdDetails", [], "method", false, false, false, 111), "getPartNumbers", [], "method", false, false, false, 111), "html", null, true);
                    echo "</td>
                    <td>";
                    // line 112
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["incoming_documents"], "getIdManufacturer", [], "method", false, false, false, 112), "getManufacturers", [], "method", false, false, false, 112), "html", null, true);
                    echo "</td>
                    <td>";
                    // line 113
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["incoming_documents"], "getNameDetail", [], "method", false, false, false, 113), "html", null, true);
                    echo "</td>
                    <td>";
                    // line 114
                    echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["incoming_documents"], "getQuantity", [], "method", false, false, false, 114) - twig_get_attribute($this->env, $this->source, $context["incoming_documents"], "getQuantitySold", [], "method", false, false, false, 114)), "html", null, true);
                    echo "</td>
                    <td>";
                    // line 115
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["incoming_documents"], "getPrice", [], "method", false, false, false, 115) / 100) / twig_get_attribute($this->env, $this->source, $context["incoming_documents"], "getQuantity", [], "method", false, false, false, 115)), 2, ".", ""), "html", null, true);
                    echo "</td>
                    <td>";
                    // line 116
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["incoming_documents"], "getPrice", [], "method", false, false, false, 116) / 100) - (((twig_get_attribute($this->env, $this->source, $context["incoming_documents"], "getPrice", [], "method", false, false, false, 116) / 100) / twig_get_attribute($this->env, $this->source,                     // line 117
$context["incoming_documents"], "getQuantity", [], "method", false, false, false, 117)) * twig_get_attribute($this->env, $this->source, $context["incoming_documents"], "getQuantitySold", [], "method", false, false, false, 117))), "html", null, true);
                    echo "</td>
                    <form action=\"/sales_parts\" name=\"form_sales\" method=\"post\">
                        <input type=\"hidden\" name=\"id\" required=\"required\" value=\"";
                    // line 119
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["incoming_documents"], "getId", [], "method", false, false, false, 119), "html", null, true);
                    echo "\" />
                        <td><input type=\"number\" name=\"quantity_sold\" required=\"required\" 
                            style=\"width: 70px\" placeholder=\"шт\" />
                                ";
                    // line 122
                    if ((twig_get_attribute($this->env, $this->source, $context["incoming_documents"], "getId", [], "method", false, false, false, 122) == (isset($context["errors_id"]) || array_key_exists("errors_id", $context) ? $context["errors_id"] : (function () { throw new RuntimeError('Variable "errors_id" does not exist.', 122, $this->source); })()))) {
                        // line 123
                        echo "                                    ";
                        echo "Неверное <br> количество";
                        echo "
                                ";
                    }
                    // line 124
                    echo "</td>
                        <td><input type=\"number\" name=\"price_sold\" required=\"required\" 
                            style=\"width: 98px\" placeholder=\"Цена\" /></td>
                        <td><input type=\"date\" name=\"today_date\" required=\"required\" /></td>
                        <td><button class=\"sales\" type=\"submit\" name=\"sales\">Продано</button></td>    
                    </form>
                    <form action=\"/refund_part\" name=\"refund_part\" method=\"get\">
                        <td><button class=\"refund\" type=\"submit\" name=\"refund_part\" value=\"";
                    // line 131
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["incoming_documents"], "getId", [], "method", false, false, false, 131), "html", null, true);
                    echo "\">Возврат</button></td>
                    </form>
                ";
                }
                // line 134
                echo "            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['incoming_documents'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 136
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['arr_search_invoice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
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
        return array (  543 => 136,  536 => 134,  530 => 131,  521 => 124,  515 => 123,  513 => 122,  507 => 119,  502 => 117,  501 => 116,  497 => 115,  493 => 114,  489 => 113,  485 => 112,  481 => 111,  477 => 110,  473 => 109,  468 => 108,  466 => 107,  465 => 106,  462 => 105,  457 => 104,  452 => 103,  442 => 102,  418 => 86,  408 => 85,  391 => 77,  384 => 73,  379 => 72,  375 => 71,  370 => 70,  366 => 69,  361 => 67,  357 => 66,  353 => 65,  348 => 63,  344 => 62,  340 => 61,  335 => 59,  331 => 58,  327 => 57,  322 => 55,  317 => 54,  313 => 53,  308 => 52,  304 => 51,  299 => 49,  295 => 48,  291 => 47,  286 => 45,  283 => 44,  273 => 43,  261 => 40,  257 => 39,  252 => 37,  248 => 36,  244 => 35,  240 => 34,  236 => 33,  232 => 32,  228 => 31,  224 => 30,  220 => 29,  216 => 28,  212 => 27,  208 => 26,  204 => 25,  200 => 24,  196 => 23,  192 => 22,  188 => 21,  184 => 20,  180 => 19,  176 => 18,  172 => 17,  168 => 16,  164 => 15,  160 => 14,  156 => 13,  151 => 12,  141 => 11,  122 => 9,  103 => 7,  84 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{title_logo}}{% endblock %}

{% block logo %}{{title_logo}}{% endblock %}

{% block legend %}{{legend}}{% endblock legend%}

{% block legend_search %}{{legend_search}}{% endblock legend_search %}

{% block form %}
    {{ form_start(form_i_d, {'action': path('sales_incoming_documents')}) }}
        <th>{{ form_label(form_i_d.number_document) }}<br>
        {{ form_widget(form_i_d.number_document) }}
        {{ form_errors(form_i_d.number_document) }}</th>
        <th>{{ form_label(form_i_d.data_invoice) }}<br>
        {{ form_widget(form_i_d.data_invoice) }}
        {{ form_errors(form_i_d.data_invoice) }}</th>
        <th>{{ form_label(form_i_d.id_counterparty) }}<br>
        {{ form_widget(form_i_d.id_counterparty) }}
        {{ form_errors(form_i_d.id_counterparty) }}</th>
        {{ form_start(form_p_n) }}
            <th>{{ form_label(form_p_n.part_numbers) }}<br>
            {{ form_widget(form_p_n.part_numbers) }}
            {{ form_errors(form_p_n.part_numbers) }}</th>
            <th>{{ form_label(form_p_n.manufacturers) }}<br>
            {{ form_widget(form_p_n.manufacturers) }}
            {{ form_errors(form_p_n.manufacturers) }}</th>
        <th>{{ form_label(form_i_d.name_detail) }}<br>
        {{ form_widget(form_i_d.name_detail) }}
        {{ form_errors(form_i_d.name_detail) }}</th>
        <th>{{ form_label(form_i_d.quantity) }}<br>
        {{ form_widget(form_i_d.quantity) }}
        {{ form_errors(form_i_d.quantity) }}</th>
        <th>{{ form_label(form_i_d.price) }}<br>
        {{ form_widget(form_i_d.price) }}
        {{ form_errors(form_i_d.price) }}</th>
        <th><button class=\"save\" type=\"submit\" name=\"save\">Сохранить</button></th>
        {{ form_end(form_p_n) }}
    {{ form_end(form_i_d) }}   
{% endblock %}

{% block form_search %}

    {{ form_start(form_search, {'action': path('incoming_documents')}) }}

        <th>{{ form_label(form_search.number_document) }}<br>
        {{ form_widget(form_search.number_document) }}
        {{ form_errors(form_search.number_document) }}</th>

        <th>{{ form_label(form_search.s_data_invoice) }}<br>
        {{'с '}}{{ form_widget(form_search.s_data_invoice) }}
        {{ form_errors(form_search.s_data_invoice) }}<br>
        {{'по '}}{{ form_widget(form_search.po_data_invoice) }}
        {{ form_errors(form_search.po_data_invoice) }}</th>

        <th>{{ form_label(form_search.id_counterparty) }}<br>
        {{ form_widget(form_search.id_counterparty) }}
        {{ form_errors(form_search.id_counterparty) }}</th>

        <th>{{ form_label(form_search.id_details) }}<br>
        {{ form_widget(form_search.id_details) }}
        {{ form_errors(form_search.id_details) }}</th>

        <th>{{ form_label(form_search.id_manufacturer) }}<br>
        {{ form_widget(form_search.id_manufacturer) }}
        {{ form_errors(form_search.id_manufacturer) }}</th>

        <th>{{ form_label(form_search.s_price) }}<br>
        {{'с '}}{{ form_widget(form_search.s_price) }}
        {{ form_errors(form_search.s_price) }}<br>
        {{'по '}}{{ form_widget(form_search.po_price) }}
        {{ form_errors(form_search.po_price) }}</th>

        <th><button class=\"search\" type=\"submit\" name=\"search\">Поиск</button></th>
        
    {{ form_end(form_search) }}

    <form action=\"/reset\" name=\"reset\">
    <th><button class=\"reset\" type=\"submit\" name=\"reset\" value=\"reset\">Сбросить</button></th>
    </form>
    
{% endblock form_search %}

{% block table_thead_tr %}
    <th>№ Накладной</th>
    <th>Дата накладной</th>
    <th>Поставщик</th>
    <th>№ Детали</th>
    <th>Производитель</th>
    <th>Описание детали</th>
    <th>Кол-во</th>
    <th>Цена шт</th>
    <th>Цена общая</th>
    <th>Продано шт</th>
    <th>Продано Цена</th>
    <th>Дата прод-жи</th>
    <th>Продано</th>
    <th>Возврат</th>
{% endblock table_thead_tr %}

{% block tbody %}
    {% for arr_search_invoice in arr_incoming_documents %}
        {% for incoming_documents in arr_search_invoice %}
            <tr>
                {% if incoming_documents.getSales() == 1 
                and incoming_documents.getRefund() == 1 %}
                    <td>{{ incoming_documents.getNumberDocument() }}</td>
                    <td>{{ incoming_documents.getDataInvoice()|date(\"d-m-Y\") }}</td>
                    <td>{{ incoming_documents.getIdCounterparty().getCounterparty() }}</td>
                    <td>{{ incoming_documents.getIdDetails().getPartNumbers() }}</td>
                    <td>{{ incoming_documents.getIdManufacturer().getManufacturers() }}</td>
                    <td>{{ incoming_documents.getNameDetail() }}</td>
                    <td>{{ incoming_documents.getQuantity() - incoming_documents.getQuantitySold() }}</td>
                    <td>{{ ((incoming_documents.getPrice() / 100) / incoming_documents.getQuantity())|number_format(2, '.', '') }}</td>
                    <td>{{ (incoming_documents.getPrice() / 100) - (((incoming_documents.getPrice() / 100) 
                                / incoming_documents.getQuantity()) * incoming_documents.getQuantitySold()) }}</td>
                    <form action=\"/sales_parts\" name=\"form_sales\" method=\"post\">
                        <input type=\"hidden\" name=\"id\" required=\"required\" value=\"{{ incoming_documents.getId() }}\" />
                        <td><input type=\"number\" name=\"quantity_sold\" required=\"required\" 
                            style=\"width: 70px\" placeholder=\"шт\" />
                                {% if incoming_documents.getId() == errors_id %}
                                    {{'Неверное <br> количество'}}
                                {% endif %}</td>
                        <td><input type=\"number\" name=\"price_sold\" required=\"required\" 
                            style=\"width: 98px\" placeholder=\"Цена\" /></td>
                        <td><input type=\"date\" name=\"today_date\" required=\"required\" /></td>
                        <td><button class=\"sales\" type=\"submit\" name=\"sales\">Продано</button></td>    
                    </form>
                    <form action=\"/refund_part\" name=\"refund_part\" method=\"get\">
                        <td><button class=\"refund\" type=\"submit\" name=\"refund_part\" value=\"{{ incoming_documents.getId() }}\">Возврат</button></td>
                    </form>
                {% endif %}
            </tr>
        {% endfor %}
    {% endfor %}
{% endblock %}", "incoming_documents/incoming_documents.html.twig", "/var/www/templates/incoming_documents/incoming_documents.html.twig");
    }
}
