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

/* ku_dir/ku_dir_search.html.twig */
class __TwigTemplate_f2ddd5495b838210d345ebe2f05cb5e7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ku_dir/ku_dir_search.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ku_dir/ku_dir_search.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "ku_dir/ku_dir_search.html.twig", 1);
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
    <form action=\"/ku_dir\" name=\"save_ku_dir\" method=\"post\">
    <th><button class=\"save\" type=\"submit\" name=\"save_ku_dir\">Передти в<br>сохранение в КуДир</button></th>
    </form>

    <form action=\"/reset_ku_dir_search\" name=\"reset_ku_dir_search\">
    <th><button class=\"reset\" type=\"submit\" name=\"reset_ku_dir_search\">Сбросить</button></th>
    </form>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 23
    public function block_form_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_search"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_search"));

        // line 24
        echo "    ";
        // line 25
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_ku_dir_search"]) || array_key_exists("form_ku_dir_search", $context) ? $context["form_ku_dir_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_search" does not exist.', 25, $this->source); })()), 'form_start');
        echo "
";
        // line 27
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_search"]) || array_key_exists("form_ku_dir_search", $context) ? $context["form_ku_dir_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_search" does not exist.', 27, $this->source); })()), "receipt_change", [], "any", false, false, false, 27), 'label');
        echo "<br>
        ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_search"]) || array_key_exists("form_ku_dir_search", $context) ? $context["form_ku_dir_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_search" does not exist.', 28, $this->source); })()), "receipt_change", [], "any", false, false, false, 28), 'widget');
        echo "
        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_search"]) || array_key_exists("form_ku_dir_search", $context) ? $context["form_ku_dir_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_search" does not exist.', 29, $this->source); })()), "receipt_change", [], "any", false, false, false, 29), 'errors');
        echo "</th>   
                
        <th>";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_search"]) || array_key_exists("form_ku_dir_search", $context) ? $context["form_ku_dir_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_search" does not exist.', 31, $this->source); })()), "receipt_number", [], "any", false, false, false, 31), 'label');
        echo "<br>
        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_search"]) || array_key_exists("form_ku_dir_search", $context) ? $context["form_ku_dir_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_search" does not exist.', 32, $this->source); })()), "receipt_number", [], "any", false, false, false, 32), 'widget');
        echo "
        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_search"]) || array_key_exists("form_ku_dir_search", $context) ? $context["form_ku_dir_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_search" does not exist.', 33, $this->source); })()), "receipt_number", [], "any", false, false, false, 33), 'errors');
        echo "</th>   

        <th>";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_search"]) || array_key_exists("form_ku_dir_search", $context) ? $context["form_ku_dir_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_search" does not exist.', 35, $this->source); })()), "receipt_from_date", [], "any", false, false, false, 35), 'label');
        echo "<br>
        ";
        // line 36
        echo "с ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_search"]) || array_key_exists("form_ku_dir_search", $context) ? $context["form_ku_dir_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_search" does not exist.', 36, $this->source); })()), "receipt_from_date", [], "any", false, false, false, 36), 'widget');
        echo "
        ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_search"]) || array_key_exists("form_ku_dir_search", $context) ? $context["form_ku_dir_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_search" does not exist.', 37, $this->source); })()), "receipt_from_date", [], "any", false, false, false, 37), 'errors');
        echo "<br>
        ";
        // line 38
        echo "по ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_search"]) || array_key_exists("form_ku_dir_search", $context) ? $context["form_ku_dir_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_search" does not exist.', 38, $this->source); })()), "receipt_by_date", [], "any", false, false, false, 38), 'widget');
        echo "<br>
        ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_search"]) || array_key_exists("form_ku_dir_search", $context) ? $context["form_ku_dir_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_search" does not exist.', 39, $this->source); })()), "receipt_by_date", [], "any", false, false, false, 39), 'errors');
        echo "</th>

        <th>";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_search"]) || array_key_exists("form_ku_dir_search", $context) ? $context["form_ku_dir_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_search" does not exist.', 41, $this->source); })()), "button_ku_dir", [], "any", false, false, false, 41), 'widget', ["label" => "Поиск", "attr" => ["class" => "search"]]);
        // line 42
        echo "</th>
        
    ";
        // line 44
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_ku_dir_search"]) || array_key_exists("form_ku_dir_search", $context) ? $context["form_ku_dir_search"] : (function () { throw new RuntimeError('Variable "form_ku_dir_search" does not exist.', 44, $this->source); })()), 'form_end');
        echo "
    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 48
    public function block_table_total_amount($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_total_amount"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_total_amount"));

        // line 49
        echo "   ";
        // line 50
        echo "        <th>Общий<br>приход</th>
        <th>Общий<br>расход</th>
        <th>Общий<br>остаток</th>
        <th>Дата<br>с</th>
        <th>Дата<br>по</th>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 58
    public function block_tbody_total_amount($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tbody_total_amount"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tbody_total_amount"));

        // line 59
        echo "    <tr>
   ";
        // line 61
        echo "                <td>&nbsp;";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["arr_total_amount_coming_expenditure"] ?? null), "total_amount_coming", [], "any", true, true, false, 61)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["arr_total_amount_coming_expenditure"] ?? null), "total_amount_coming", [], "any", false, false, false, 61), "")) : ("")), "html", null, true);
        echo "</td>

                <td>&nbsp;";
        // line 63
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["arr_total_amount_coming_expenditure"] ?? null), "total_amount_expenditure", [], "any", true, true, false, 63)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["arr_total_amount_coming_expenditure"] ?? null), "total_amount_expenditure", [], "any", false, false, false, 63), "")) : ("")), "html", null, true);
        echo "</td>

                <td>&nbsp;";
        // line 65
        echo twig_escape_filter($this->env, _twig_default_filter((twig_get_attribute($this->env, $this->source, (isset($context["arr_total_amount_coming_expenditure"]) || array_key_exists("arr_total_amount_coming_expenditure", $context) ? $context["arr_total_amount_coming_expenditure"] : (function () { throw new RuntimeError('Variable "arr_total_amount_coming_expenditure" does not exist.', 65, $this->source); })()), "total_amount_coming", [], "any", false, false, false, 65) - twig_get_attribute($this->env, $this->source,         // line 66
(isset($context["arr_total_amount_coming_expenditure"]) || array_key_exists("arr_total_amount_coming_expenditure", $context) ? $context["arr_total_amount_coming_expenditure"] : (function () { throw new RuntimeError('Variable "arr_total_amount_coming_expenditure" does not exist.', 66, $this->source); })()), "total_amount_expenditure", [], "any", false, false, false, 66)), ""), "html", null, true);
        echo "</td>

                <td>&nbsp;";
        // line 68
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_converter($this->env, "midnight first day of this month"), "d-m-Y"), "html", null, true);
        echo "</td>

                <td>&nbsp;";
        // line 70
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_converter($this->env), "d-m-Y"), "html", null, true);
        echo "</td>
                
    </tr> 
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

        // line 87
        if ((isset($context["arr_ku_dir_search"]) || array_key_exists("arr_ku_dir_search", $context) ? $context["arr_ku_dir_search"] : (function () { throw new RuntimeError('Variable "arr_ku_dir_search" does not exist.', 87, $this->source); })())) {
            // line 88
            echo "            <th>Смена</th>
            <th>№<br>Чека</th>
            <th>Дата-<br>чека</th>
            <th>Номер<br>накладной</th>
            <th>Дата<br>накладной</th>
            <th>Оплата<br>в кассу</th>
            <th>Оплата<br>пост-ку</th>
            <th>Остаток</th>
            <th>Изменить</th>
            <th>Удалить</th>
";
        } else {
            // line 99
            echo "    <h2>Видите параметры в поиск.</h2> 
";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 103
    public function block_tbody($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tbody"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tbody"));

        // line 105
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["arr_ku_dir_search"]) || array_key_exists("arr_ku_dir_search", $context) ? $context["arr_ku_dir_search"] : (function () { throw new RuntimeError('Variable "arr_ku_dir_search" does not exist.', 105, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ku_dir_search"]) {
            // line 106
            echo "        ";
            if ($context["ku_dir_search"]) {
                // line 107
                echo "               
            <tr>
                <td>&nbsp;";
                // line 109
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ku_dir_search"], "getIdKuDir", [], "method", false, false, false, 109), "getReceiptChange", [], "method", false, false, false, 109), "html", null, true);
                echo "</td>

                <td>&nbsp;";
                // line 111
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ku_dir_search"], "getIdKuDir", [], "method", false, false, false, 111), "getReceiptNumber", [], "method", false, false, false, 111), "html", null, true);
                echo "</td>

                <td>&nbsp;";
                // line 113
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ku_dir_search"], "getIdKuDir", [], "method", false, false, false, 113), "getReceiptDate", [], "method", false, false, false, 113), "d-m-Y"), "html", null, true);
                echo "</td>

                <td>&nbsp;";
                // line 115
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ku_dir_search"], "getNumberDocument", [], "method", false, false, false, 115), "html", null, true);
                echo "</td>

                <td>&nbsp;";
                // line 117
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ku_dir_search"], "getDataInvoice", [], "method", false, false, false, 117), "d-m-Y"), "html", null, true);
                echo "</td>

                <td>&nbsp;";
                // line 119
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ku_dir_search"], "getIdKuDir", [], "method", false, false, false, 119), "getComing", [], "method", false, false, false, 119), "html", null, true);
                echo "</td>

                <td>&nbsp;";
                // line 121
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ku_dir_search"], "getIdKuDir", [], "method", false, false, false, 121), "getExpenditure", [], "method", false, false, false, 121) / 100), 2, ".", ""), "html", null, true);
                echo "</td>

                <td>&nbsp;";
                // line 123
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ku_dir_search"], "getIdKuDir", [], "method", false, false, false, 123), "getComing", [], "method", false, false, false, 123) - (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 124
$context["ku_dir_search"], "getIdKuDir", [], "method", false, false, false, 124), "getExpenditure", [], "method", false, false, false, 124) / 100)), 2, ".", ""), "html", null, true);
                echo "</td>

                <form action=\"/ku_dir_edit\" name=\"ku_dir_edit\" method=\"GET\">

                    <td><button class=\"edit\" type=\"submit\" name=\"ku_dir_edit\" 
                        value=\"";
                // line 129
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ku_dir_search"], "getIdKuDir", [], "method", false, false, false, 129), "getId", [], "method", false, false, false, 129), "html", null, true);
                echo "\">Изменить</button></td>
                                
                </form>

                <form action=\"/ku_dir_delete\" name=\"ku_dir_delete\" method=\"post\">

                    <td><button class=\"delete\" type=\"submit\" name=\"ku_dir_delete\" 
                        value=\"";
                // line 136
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ku_dir_search"], "getId", [], "method", false, false, false, 136), "html", null, true);
                echo "\">Удалить</button></td>
                                
                </form>
            </tr> 
                    
                
        ";
            } else {
                // line 143
                echo "            <h2>Данные не найдены. Видите параметры в Поиск счет-фактуру</h2>  
        ";
            }
            // line 145
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ku_dir_search'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "ku_dir/ku_dir_search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  461 => 145,  457 => 143,  447 => 136,  437 => 129,  429 => 124,  428 => 123,  423 => 121,  418 => 119,  413 => 117,  408 => 115,  403 => 113,  398 => 111,  393 => 109,  389 => 107,  386 => 106,  381 => 105,  371 => 103,  359 => 99,  346 => 88,  344 => 87,  334 => 85,  320 => 70,  315 => 68,  310 => 66,  309 => 65,  304 => 63,  298 => 61,  295 => 59,  285 => 58,  270 => 50,  268 => 49,  258 => 48,  245 => 44,  241 => 42,  239 => 41,  234 => 39,  229 => 38,  225 => 37,  220 => 36,  216 => 35,  211 => 33,  207 => 32,  203 => 31,  198 => 29,  194 => 28,  189 => 27,  184 => 25,  182 => 24,  172 => 23,  153 => 12,  143 => 11,  124 => 9,  105 => 7,  86 => 5,  67 => 3,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{title_logo}}{% endblock %}

{% block logo %}{{title_logo}}{% endblock %}

{% block legend %}{{legend}}{% endblock legend%}

{% block legend_search %}{{legend_search}}{% endblock legend_search %}

{% block form_save_edit_sales %}

    <form action=\"/ku_dir\" name=\"save_ku_dir\" method=\"post\">
    <th><button class=\"save\" type=\"submit\" name=\"save_ku_dir\">Передти в<br>сохранение в КуДир</button></th>
    </form>

    <form action=\"/reset_ku_dir_search\" name=\"reset_ku_dir_search\">
    <th><button class=\"reset\" type=\"submit\" name=\"reset_ku_dir_search\">Сбросить</button></th>
    </form>

{% endblock form_save_edit_sales %}

{% block form_search %}
    {#Форма поиска счет-фактур#}
    {{ form_start(form_ku_dir_search) }}
{#{{ dump(app.flashes()) }}#}
        <th>{{ form_label(form_ku_dir_search.receipt_change) }}<br>
        {{ form_widget(form_ku_dir_search.receipt_change) }}
        {{ form_errors(form_ku_dir_search.receipt_change) }}</th>   
                
        <th>{{ form_label(form_ku_dir_search.receipt_number) }}<br>
        {{ form_widget(form_ku_dir_search.receipt_number) }}
        {{ form_errors(form_ku_dir_search.receipt_number) }}</th>   

        <th>{{ form_label(form_ku_dir_search.receipt_from_date) }}<br>
        {{'с '}}{{ form_widget(form_ku_dir_search.receipt_from_date) }}
        {{ form_errors(form_ku_dir_search.receipt_from_date) }}<br>
        {{'по '}}{{ form_widget(form_ku_dir_search.receipt_by_date) }}<br>
        {{ form_errors(form_ku_dir_search.receipt_by_date) }}</th>

        <th>{{ form_widget(form_ku_dir_search.button_ku_dir, 
            { 'label': 'Поиск', 'attr': {'class': 'search'} }) }}</th>
        
    {{ form_end(form_ku_dir_search) }}
    
{% endblock form_search %}

{% block table_total_amount %}
   {#} {% if arr_ku_dir %}#}
        <th>Общий<br>приход</th>
        <th>Общий<br>расход</th>
        <th>Общий<br>остаток</th>
        <th>Дата<br>с</th>
        <th>Дата<br>по</th>
    {#{% endif %}#}
{% endblock table_total_amount %}

{% block tbody_total_amount %}
    <tr>
   {#} {{ dump(arr_total_amount_coming_expenditure.total_amount_coming) }}#}
                <td>&nbsp;{{ arr_total_amount_coming_expenditure.total_amount_coming|default('') }}</td>

                <td>&nbsp;{{ arr_total_amount_coming_expenditure.total_amount_expenditure|default('') }}</td>

                <td>&nbsp;{{ (arr_total_amount_coming_expenditure.total_amount_coming
                    - arr_total_amount_coming_expenditure.total_amount_expenditure)|default('')  }}</td>

                <td>&nbsp;{{ date('midnight first day of this month')|date(\"d-m-Y\") }}</td>

                <td>&nbsp;{{ date()|date(\"d-m-Y\") }}</td>
                
    </tr> 
{% endblock tbody_total_amount %}

{#{% block table_ku_dir_invoice %}
    {% if arr_invoice_id_ku_dir %}

        <th>Последняя<br>cмена</th>
        <th>Последний<br>№ чека</th>
        <th>Последняя<br>дата чека</th>

    {% endif %}
{% endblock table_ku_dir_invoice %}#}

{% block table_thead_tr %}
{#{{ dump(arr_sales) }}#}
{% if arr_ku_dir_search %}
            <th>Смена</th>
            <th>№<br>Чека</th>
            <th>Дата-<br>чека</th>
            <th>Номер<br>накладной</th>
            <th>Дата<br>накладной</th>
            <th>Оплата<br>в кассу</th>
            <th>Оплата<br>пост-ку</th>
            <th>Остаток</th>
            <th>Изменить</th>
            <th>Удалить</th>
{% else %}
    <h2>Видите параметры в поиск.</h2> 
{% endif %}
{% endblock table_thead_tr %}

{% block tbody %}
{#{{ dump(arr_invoice_ku_dir) }}#}
    {% for ku_dir_search in arr_ku_dir_search %}
        {% if ku_dir_search %}
               
            <tr>
                <td>&nbsp;{{ ku_dir_search.getIdKuDir().getReceiptChange() }}</td>

                <td>&nbsp;{{ ku_dir_search.getIdKuDir().getReceiptNumber() }}</td>

                <td>&nbsp;{{ ku_dir_search.getIdKuDir().getReceiptDate()|date(\"d-m-Y\") }}</td>

                <td>&nbsp;{{ ku_dir_search.getNumberDocument() }}</td>

                <td>&nbsp;{{ ku_dir_search.getDataInvoice()|date(\"d-m-Y\") }}</td>

                <td>&nbsp;{{ ku_dir_search.getIdKuDir().getComing() }}</td>

                <td>&nbsp;{{ (ku_dir_search.getIdKuDir().getExpenditure() / 100)|number_format(2, '.', '')}}</td>

                <td>&nbsp;{{ (ku_dir_search.getIdKuDir().getComing() 
                    - (ku_dir_search.getIdKuDir().getExpenditure() / 100))|number_format(2, '.', '')}}</td>

                <form action=\"/ku_dir_edit\" name=\"ku_dir_edit\" method=\"GET\">

                    <td><button class=\"edit\" type=\"submit\" name=\"ku_dir_edit\" 
                        value=\"{{ ku_dir_search.getIdKuDir().getId() }}\">Изменить</button></td>
                                
                </form>

                <form action=\"/ku_dir_delete\" name=\"ku_dir_delete\" method=\"post\">

                    <td><button class=\"delete\" type=\"submit\" name=\"ku_dir_delete\" 
                        value=\"{{ ku_dir_search.getId() }}\">Удалить</button></td>
                                
                </form>
            </tr> 
                    
                
        {% else %}
            <h2>Данные не найдены. Видите параметры в Поиск счет-фактуру</h2>  
        {% endif %}
    {% endfor %}
{% endblock tbody %}", "ku_dir/ku_dir_search.html.twig", "/var/www/templates/ku_dir/ku_dir_search.html.twig");
    }
}
