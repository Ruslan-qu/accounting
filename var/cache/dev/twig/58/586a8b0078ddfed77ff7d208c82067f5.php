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

/* counterparty/counterparty.html.twig */
class __TwigTemplate_cb0f2c2a5357b496ac4a0a3cebc8493d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "counterparty/counterparty.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "counterparty/counterparty.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "counterparty/counterparty.html.twig", 1);
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
    public function block_form_save_edit($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_save_edit"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_save_edit"));

        // line 12
        echo "    ";
        // line 13
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_counterparty_sales"]) || array_key_exists("form_counterparty_sales", $context) ? $context["form_counterparty_sales"] : (function () { throw new RuntimeError('Variable "form_counterparty_sales" does not exist.', 13, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sales_counterparty")]);
        echo "
";
        // line 16
        echo "        ";
        $context["sales_counterparty"] = "";
        // line 17
        echo "        ";
        $context["sales_mail_counterparty"] = "";
        // line 18
        echo "
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "flashes", ["counterparty_sales"], "method", false, false, false, 19));
        foreach ($context['_seq'] as $context["_key"] => $context["value_counterparty"]) {
            echo "  
            ";
            // line 20
            $context["sales_counterparty"] = $context["value_counterparty"];
            // line 21
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_counterparty'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_counterparty_sales"]) || array_key_exists("form_counterparty_sales", $context) ? $context["form_counterparty_sales"] : (function () { throw new RuntimeError('Variable "form_counterparty_sales" does not exist.', 22, $this->source); })()), "counterparty", [], "any", false, false, false, 22), 'label');
        echo "<br>
        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_counterparty_sales"]) || array_key_exists("form_counterparty_sales", $context) ? $context["form_counterparty_sales"] : (function () { throw new RuntimeError('Variable "form_counterparty_sales" does not exist.', 23, $this->source); })()), "counterparty", [], "any", false, false, false, 23), 'widget', ["value" => (isset($context["sales_counterparty"]) || array_key_exists("sales_counterparty", $context) ? $context["sales_counterparty"] : (function () { throw new RuntimeError('Variable "sales_counterparty" does not exist.', 23, $this->source); })())]);
        echo "<br>
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "flashes", ["children[counterparty].data_sales"], "method", false, false, false, 24));
        foreach ($context['_seq'] as $context["_key"] => $context["message_sales"]) {
            // line 25
            echo "            ";
            echo twig_escape_filter($this->env, $context["message_sales"], "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message_sales'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_counterparty_sales"]) || array_key_exists("form_counterparty_sales", $context) ? $context["form_counterparty_sales"] : (function () { throw new RuntimeError('Variable "form_counterparty_sales" does not exist.', 27, $this->source); })()), "counterparty", [], "any", false, false, false, 27), 'errors');
        echo "</th>

        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "flashes", ["mail_counterparty_sales"], "method", false, false, false, 29));
        foreach ($context['_seq'] as $context["_key"] => $context["value_mail_counterparty"]) {
            echo "  
            ";
            // line 30
            $context["sales_mail_counterparty"] = $context["value_mail_counterparty"];
            // line 31
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_mail_counterparty'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_counterparty_sales"]) || array_key_exists("form_counterparty_sales", $context) ? $context["form_counterparty_sales"] : (function () { throw new RuntimeError('Variable "form_counterparty_sales" does not exist.', 32, $this->source); })()), "mail_counterparty", [], "any", false, false, false, 32), 'label');
        echo "<br>
        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_counterparty_sales"]) || array_key_exists("form_counterparty_sales", $context) ? $context["form_counterparty_sales"] : (function () { throw new RuntimeError('Variable "form_counterparty_sales" does not exist.', 33, $this->source); })()), "mail_counterparty", [], "any", false, false, false, 33), 'widget', ["value" => (isset($context["sales_mail_counterparty"]) || array_key_exists("sales_mail_counterparty", $context) ? $context["sales_mail_counterparty"] : (function () { throw new RuntimeError('Variable "sales_mail_counterparty" does not exist.', 33, $this->source); })())]);
        echo "<br>
        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "flashes", ["children[mail_counterparty].data_sales"], "method", false, false, false, 34));
        foreach ($context['_seq'] as $context["_key"] => $context["message_sales"]) {
            // line 35
            echo "            ";
            echo twig_escape_filter($this->env, $context["message_sales"], "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message_sales'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "flashes", ["сount_mail_counterparty"], "method", false, false, false, 37));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 38
            echo "            ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_counterparty_sales"]) || array_key_exists("form_counterparty_sales", $context) ? $context["form_counterparty_sales"] : (function () { throw new RuntimeError('Variable "form_counterparty_sales" does not exist.', 40, $this->source); })()), "mail_counterparty", [], "any", false, false, false, 40), 'errors');
        echo "</th>

        <th>";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_counterparty_sales"]) || array_key_exists("form_counterparty_sales", $context) ? $context["form_counterparty_sales"] : (function () { throw new RuntimeError('Variable "form_counterparty_sales" does not exist.', 42, $this->source); })()), "button", [], "any", false, false, false, 42), 'widget', ["label" => "Сохранить", "attr" => ["class" => "save"]]);
        echo "</th>
        
   ";
        // line 44
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_counterparty_sales"]) || array_key_exists("form_counterparty_sales", $context) ? $context["form_counterparty_sales"] : (function () { throw new RuntimeError('Variable "form_counterparty_sales" does not exist.', 44, $this->source); })()), 'form_end');
        echo "

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 48
    public function block_form_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_search"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_search"));

        // line 49
        echo "
    ";
        // line 50
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_counterparty_search"]) || array_key_exists("form_counterparty_search", $context) ? $context["form_counterparty_search"] : (function () { throw new RuntimeError('Variable "form_counterparty_search" does not exist.', 50, $this->source); })()), 'form_start');
        echo "

        <th>";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_counterparty_search"]) || array_key_exists("form_counterparty_search", $context) ? $context["form_counterparty_search"] : (function () { throw new RuntimeError('Variable "form_counterparty_search" does not exist.', 52, $this->source); })()), "counterparty_search", [], "any", false, false, false, 52), 'label');
        echo "<br>
        ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_counterparty_search"]) || array_key_exists("form_counterparty_search", $context) ? $context["form_counterparty_search"] : (function () { throw new RuntimeError('Variable "form_counterparty_search" does not exist.', 53, $this->source); })()), "counterparty_search", [], "any", false, false, false, 53), 'widget');
        echo "
        ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_counterparty_search"]) || array_key_exists("form_counterparty_search", $context) ? $context["form_counterparty_search"] : (function () { throw new RuntimeError('Variable "form_counterparty_search" does not exist.', 54, $this->source); })()), "counterparty_search", [], "any", false, false, false, 54), 'errors');
        echo "</th>

        ";
        // line 56
        $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_counterparty_search"]) || array_key_exists("form_counterparty_search", $context) ? $context["form_counterparty_search"] : (function () { throw new RuntimeError('Variable "form_counterparty_search" does not exist.', 56, $this->source); })()), "mail_counterparty_search", [], "any", false, false, false, 56), 'widget');
        // line 57
        echo "
        <th>";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_counterparty_search"]) || array_key_exists("form_counterparty_search", $context) ? $context["form_counterparty_search"] : (function () { throw new RuntimeError('Variable "form_counterparty_search" does not exist.', 58, $this->source); })()), "button", [], "any", false, false, false, 58), 'widget', ["label" => "Поиск", "attr" => ["class" => "search"]]);
        echo "</th>

    ";
        // line 60
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_counterparty_search"]) || array_key_exists("form_counterparty_search", $context) ? $context["form_counterparty_search"] : (function () { throw new RuntimeError('Variable "form_counterparty_search" does not exist.', 60, $this->source); })()), 'form_end');
        echo "
    

    ";
        // line 63
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_counterparty_search"]) || array_key_exists("form_counterparty_search", $context) ? $context["form_counterparty_search"] : (function () { throw new RuntimeError('Variable "form_counterparty_search" does not exist.', 63, $this->source); })()), 'form_start');
        echo "

      ";
        // line 65
        $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_counterparty_reset"]) || array_key_exists("form_counterparty_reset", $context) ? $context["form_counterparty_reset"] : (function () { throw new RuntimeError('Variable "form_counterparty_reset" does not exist.', 65, $this->source); })()), "counterparty", [], "any", false, false, false, 65), 'widget');
        // line 66
        echo "       
      ";
        // line 67
        $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_counterparty_reset"]) || array_key_exists("form_counterparty_reset", $context) ? $context["form_counterparty_reset"] : (function () { throw new RuntimeError('Variable "form_counterparty_reset" does not exist.', 67, $this->source); })()), "mail_counterparty", [], "any", false, false, false, 67), 'widget');
        // line 68
        echo "
      <th>";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_counterparty_reset"]) || array_key_exists("form_counterparty_reset", $context) ? $context["form_counterparty_reset"] : (function () { throw new RuntimeError('Variable "form_counterparty_reset" does not exist.', 69, $this->source); })()), "button", [], "any", false, false, false, 69), 'widget', ["label" => "Сбросить", "attr" => ["class" => "reset"]]);
        echo "</th>

    ";
        // line 71
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_counterparty_search"]) || array_key_exists("form_counterparty_search", $context) ? $context["form_counterparty_search"] : (function () { throw new RuntimeError('Variable "form_counterparty_search" does not exist.', 71, $this->source); })()), 'form_end');
        echo "

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 75
    public function block_table_thead_tr($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_thead_tr"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_thead_tr"));

        // line 76
        echo "    ";
        if ((isset($context["arr_counterparty_search"]) || array_key_exists("arr_counterparty_search", $context) ? $context["arr_counterparty_search"] : (function () { throw new RuntimeError('Variable "arr_counterparty_search" does not exist.', 76, $this->source); })())) {
            // line 77
            echo "        <th>Поставщик</th>
        <th>Емаил поставщика</th>
        <th>Изменить</th>
        <th>Удаление</th>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 84
    public function block_tbody($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tbody"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tbody"));

        echo " 
    ";
        // line 85
        if ((isset($context["arr_counterparty_search"]) || array_key_exists("arr_counterparty_search", $context) ? $context["arr_counterparty_search"] : (function () { throw new RuntimeError('Variable "arr_counterparty_search" does not exist.', 85, $this->source); })())) {
            // line 86
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["arr_counterparty_search"]) || array_key_exists("arr_counterparty_search", $context) ? $context["arr_counterparty_search"] : (function () { throw new RuntimeError('Variable "arr_counterparty_search" does not exist.', 86, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["counterparty_search"]) {
                // line 87
                echo "            <tr>    

                <td>";
                // line 89
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["counterparty_search"], "getCounterparty", [], "method", false, false, false, 89), "html", null, true);
                echo "</td>

                <td>";
                // line 91
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["counterparty_search"], "getMailCounterparty", [], "method", false, false, false, 91), "html", null, true);
                echo "</td>

                <form action=\"/edit_counterparty\" name=\"edit_counterparty\" method=\"post\">

                <td><button class=\"edit\" type=\"submit\" name=\"edit_counterparty\" value=\"";
                // line 95
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["counterparty_search"], "getId", [], "method", false, false, false, 95), "html", null, true);
                echo "\">Изменить</button></td>
                                        
                </form>
                <form action=\"/delete_counterparty\" name=\"delete_counterparty\" method=\"post\">

                <td><button class=\"delete\" type=\"submit\" name=\"delete_counterparty\" value=\"";
                // line 100
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["counterparty_search"], "getId", [], "method", false, false, false, 100), "html", null, true);
                echo "\">Удалить</button></td>
                                        
                </form>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['counterparty_search'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 105
            echo "    ";
        } else {
            // line 106
            echo "        <h2>Данные не найдены. Видите параметры в поиск</h2>  
    ";
        }
        // line 108
        echo "    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "counterparty/counterparty.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  452 => 108,  448 => 106,  445 => 105,  434 => 100,  426 => 95,  419 => 91,  414 => 89,  410 => 87,  405 => 86,  403 => 85,  391 => 84,  376 => 77,  373 => 76,  363 => 75,  350 => 71,  345 => 69,  342 => 68,  340 => 67,  337 => 66,  335 => 65,  330 => 63,  324 => 60,  319 => 58,  316 => 57,  314 => 56,  309 => 54,  305 => 53,  301 => 52,  296 => 50,  293 => 49,  283 => 48,  270 => 44,  265 => 42,  259 => 40,  250 => 38,  245 => 37,  236 => 35,  232 => 34,  228 => 33,  223 => 32,  217 => 31,  215 => 30,  209 => 29,  203 => 27,  194 => 25,  190 => 24,  186 => 23,  181 => 22,  175 => 21,  173 => 20,  167 => 19,  164 => 18,  161 => 17,  158 => 16,  153 => 13,  151 => 12,  141 => 11,  122 => 9,  103 => 7,  84 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{title_logo}}{% endblock %}

{% block logo %}{{title_logo}}{% endblock %}

{% block legend %}{{legend}}{% endblock legend%}

{% block legend_search %}{{legend_search}}{% endblock legend_search %}

{% block form_save_edit %}
    {#Форма сохранения деталей#}
    {{ form_start(form_counterparty_sales, {'action': path('sales_counterparty')}) }}
{#{{ dump(app.flashes()) }}
        Переменный для вывода данных в форме когда форма не прошла валидацию#}
        {% set sales_counterparty = '' %}
        {% set sales_mail_counterparty = '' %}

        {% for value_counterparty in app.flashes('counterparty_sales') %}  
            {% set sales_counterparty = value_counterparty %}
        {% endfor %}
        <th>{{ form_label(form_counterparty_sales.counterparty) }}<br>
        {{ form_widget(form_counterparty_sales.counterparty, {value : sales_counterparty}) }}<br>
        {% for message_sales in app.flashes('children[counterparty].data_sales') %}
            {{ message_sales }}
        {% endfor %}
        {{ form_errors(form_counterparty_sales.counterparty) }}</th>

        {% for value_mail_counterparty in app.flashes('mail_counterparty_sales') %}  
            {% set sales_mail_counterparty = value_mail_counterparty %}
        {% endfor %}
        <th>{{ form_label(form_counterparty_sales.mail_counterparty) }}<br>
        {{ form_widget(form_counterparty_sales.mail_counterparty, {value : sales_mail_counterparty}) }}<br>
        {% for message_sales in app.flashes('children[mail_counterparty].data_sales') %}
            {{ message_sales }}
        {% endfor %}
        {% for message in app.flashes('сount_mail_counterparty') %}
            {{ message }}
        {% endfor %}
        {{ form_errors(form_counterparty_sales.mail_counterparty) }}</th>

        <th>{{ form_widget(form_counterparty_sales.button, { 'label': 'Сохранить', 'attr': {'class': 'save'} }) }}</th>
        
   {{ form_end(form_counterparty_sales) }}

{% endblock form_save_edit %}

{% block form_search %}

    {{ form_start(form_counterparty_search) }}

        <th>{{ form_label(form_counterparty_search.counterparty_search) }}<br>
        {{ form_widget(form_counterparty_search.counterparty_search) }}
        {{ form_errors(form_counterparty_search.counterparty_search) }}</th>

        {% do form_widget(form_counterparty_search.mail_counterparty_search) %}

        <th>{{ form_widget(form_counterparty_search.button, { 'label': 'Поиск', 'attr': {'class': 'search'} }) }}</th>

    {{ form_end(form_counterparty_search) }}
    

    {{ form_start(form_counterparty_search) }}

      {% do form_widget(form_counterparty_reset.counterparty) %}
       
      {% do form_widget(form_counterparty_reset.mail_counterparty) %}

      <th>{{ form_widget(form_counterparty_reset.button, { 'label': 'Сбросить', 'attr': {'class': 'reset'} }) }}</th>

    {{ form_end(form_counterparty_search) }}

{% endblock form_search %}

{% block table_thead_tr %}
    {% if arr_counterparty_search %}
        <th>Поставщик</th>
        <th>Емаил поставщика</th>
        <th>Изменить</th>
        <th>Удаление</th>
    {% endif %}
{% endblock table_thead_tr %}

{% block tbody %} 
    {% if arr_counterparty_search %}
        {% for counterparty_search in arr_counterparty_search %}
            <tr>    

                <td>{{ counterparty_search.getCounterparty() }}</td>

                <td>{{ counterparty_search.getMailCounterparty() }}</td>

                <form action=\"/edit_counterparty\" name=\"edit_counterparty\" method=\"post\">

                <td><button class=\"edit\" type=\"submit\" name=\"edit_counterparty\" value=\"{{ counterparty_search.getId() }}\">Изменить</button></td>
                                        
                </form>
                <form action=\"/delete_counterparty\" name=\"delete_counterparty\" method=\"post\">

                <td><button class=\"delete\" type=\"submit\" name=\"delete_counterparty\" value=\"{{ counterparty_search.getId() }}\">Удалить</button></td>
                                        
                </form>
            </tr>
        {% endfor %}
    {% else %}
        <h2>Данные не найдены. Видите параметры в поиск</h2>  
    {% endif %}
    
{% endblock tbody %}", "counterparty/counterparty.html.twig", "/var/www/templates/counterparty/counterparty.html.twig");
    }
}
