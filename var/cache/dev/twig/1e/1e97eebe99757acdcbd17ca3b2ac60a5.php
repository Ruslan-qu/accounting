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

/* ku_dir/edit_ku_dir.html.twig */
class __TwigTemplate_78541b81e5b9b85f7fe6fb11d56d9d79 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ku_dir/edit_ku_dir.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ku_dir/edit_ku_dir.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "ku_dir/edit_ku_dir.html.twig", 1);
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_ku_dir_edit"]) || array_key_exists("form_ku_dir_edit", $context) ? $context["form_ku_dir_edit"] : (function () { throw new RuntimeError('Variable "form_ku_dir_edit" does not exist.', 12, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ku_dir_edit_save")]);
        echo "
            
        ";
        // line 14
        $context["edit_receipt_change"] = ((twig_get_attribute($this->env, $this->source, ($context["arr_ku_dir"] ?? null), "getReceiptChange", [], "method", true, true, false, 14)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["arr_ku_dir"] ?? null), "getReceiptChange", [], "method", false, false, false, 14), "")) : (""));
        // line 15
        echo "        ";
        $context["edit_receipt_number"] = ((twig_get_attribute($this->env, $this->source, ($context["arr_ku_dir"] ?? null), "getReceiptNumber", [], "method", true, true, false, 15)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["arr_ku_dir"] ?? null), "getReceiptNumber", [], "method", false, false, false, 15), "")) : (""));
        // line 16
        echo "        ";
        $context["edit_receipt_date"] = _twig_default_filter(twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["arr_ku_dir"]) || array_key_exists("arr_ku_dir", $context) ? $context["arr_ku_dir"] : (function () { throw new RuntimeError('Variable "arr_ku_dir" does not exist.', 16, $this->source); })()), "getReceiptDate", [], "method", false, false, false, 16), "Y-m-d"), "");
        // line 17
        echo "        ";
        $context["edit_coming"] = ((twig_get_attribute($this->env, $this->source, ($context["arr_ku_dir"] ?? null), "getComing", [], "method", true, true, false, 17)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["arr_ku_dir"] ?? null), "getComing", [], "method", false, false, false, 17), "")) : (""));
        // line 18
        echo "        ";
        $context["edit_expenditure"] = _twig_default_filter((twig_get_attribute($this->env, $this->source, (isset($context["arr_ku_dir"]) || array_key_exists("arr_ku_dir", $context) ? $context["arr_ku_dir"] : (function () { throw new RuntimeError('Variable "arr_ku_dir" does not exist.', 18, $this->source); })()), "getExpenditure", [], "method", false, false, false, 18) / 100), "");
        // line 19
        echo "        ";
        $context["edit_hidden"] = ((twig_get_attribute($this->env, $this->source, ($context["arr_ku_dir"] ?? null), "getId", [], "method", true, true, false, 19)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["arr_ku_dir"] ?? null), "getId", [], "method", false, false, false, 19), "")) : (""));
        // line 20
        echo "
        <th>";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_edit"]) || array_key_exists("form_ku_dir_edit", $context) ? $context["form_ku_dir_edit"] : (function () { throw new RuntimeError('Variable "form_ku_dir_edit" does not exist.', 21, $this->source); })()), "receipt_change_edit", [], "any", false, false, false, 21), 'label');
        echo "<br>
        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_edit"]) || array_key_exists("form_ku_dir_edit", $context) ? $context["form_ku_dir_edit"] : (function () { throw new RuntimeError('Variable "form_ku_dir_edit" does not exist.', 22, $this->source); })()), "receipt_change_edit", [], "any", false, false, false, 22), 'widget', ["value" => (isset($context["edit_receipt_change"]) || array_key_exists("edit_receipt_change", $context) ? $context["edit_receipt_change"] : (function () { throw new RuntimeError('Variable "edit_receipt_change" does not exist.', 22, $this->source); })())]);
        echo "<br>
        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_edit"]) || array_key_exists("form_ku_dir_edit", $context) ? $context["form_ku_dir_edit"] : (function () { throw new RuntimeError('Variable "form_ku_dir_edit" does not exist.', 23, $this->source); })()), "receipt_change_edit", [], "any", false, false, false, 23), 'errors');
        echo "</th>

        <th>";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_edit"]) || array_key_exists("form_ku_dir_edit", $context) ? $context["form_ku_dir_edit"] : (function () { throw new RuntimeError('Variable "form_ku_dir_edit" does not exist.', 25, $this->source); })()), "receipt_number_edit", [], "any", false, false, false, 25), 'label');
        echo "<br>
        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_edit"]) || array_key_exists("form_ku_dir_edit", $context) ? $context["form_ku_dir_edit"] : (function () { throw new RuntimeError('Variable "form_ku_dir_edit" does not exist.', 26, $this->source); })()), "receipt_number_edit", [], "any", false, false, false, 26), 'widget', ["value" => (isset($context["edit_receipt_number"]) || array_key_exists("edit_receipt_number", $context) ? $context["edit_receipt_number"] : (function () { throw new RuntimeError('Variable "edit_receipt_number" does not exist.', 26, $this->source); })())]);
        echo "<br>
        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_edit"]) || array_key_exists("form_ku_dir_edit", $context) ? $context["form_ku_dir_edit"] : (function () { throw new RuntimeError('Variable "form_ku_dir_edit" does not exist.', 27, $this->source); })()), "receipt_number_edit", [], "any", false, false, false, 27), 'errors');
        echo "</th>

        <th>";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_edit"]) || array_key_exists("form_ku_dir_edit", $context) ? $context["form_ku_dir_edit"] : (function () { throw new RuntimeError('Variable "form_ku_dir_edit" does not exist.', 29, $this->source); })()), "receipt_date_edit", [], "any", false, false, false, 29), 'label');
        echo "<br>
        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_edit"]) || array_key_exists("form_ku_dir_edit", $context) ? $context["form_ku_dir_edit"] : (function () { throw new RuntimeError('Variable "form_ku_dir_edit" does not exist.', 30, $this->source); })()), "receipt_date_edit", [], "any", false, false, false, 30), 'widget', ["value" => (isset($context["edit_receipt_date"]) || array_key_exists("edit_receipt_date", $context) ? $context["edit_receipt_date"] : (function () { throw new RuntimeError('Variable "edit_receipt_date" does not exist.', 30, $this->source); })())]);
        echo "<br>
        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_edit"]) || array_key_exists("form_ku_dir_edit", $context) ? $context["form_ku_dir_edit"] : (function () { throw new RuntimeError('Variable "form_ku_dir_edit" does not exist.', 31, $this->source); })()), "receipt_date_edit", [], "any", false, false, false, 31), 'errors');
        echo "</th>

        <th>";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_edit"]) || array_key_exists("form_ku_dir_edit", $context) ? $context["form_ku_dir_edit"] : (function () { throw new RuntimeError('Variable "form_ku_dir_edit" does not exist.', 33, $this->source); })()), "coming_edit", [], "any", false, false, false, 33), 'label');
        echo "<br>
        ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_edit"]) || array_key_exists("form_ku_dir_edit", $context) ? $context["form_ku_dir_edit"] : (function () { throw new RuntimeError('Variable "form_ku_dir_edit" does not exist.', 34, $this->source); })()), "coming_edit", [], "any", false, false, false, 34), 'widget', ["value" => (isset($context["edit_coming"]) || array_key_exists("edit_coming", $context) ? $context["edit_coming"] : (function () { throw new RuntimeError('Variable "edit_coming" does not exist.', 34, $this->source); })())]);
        echo "<br>
        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_edit"]) || array_key_exists("form_ku_dir_edit", $context) ? $context["form_ku_dir_edit"] : (function () { throw new RuntimeError('Variable "form_ku_dir_edit" does not exist.', 35, $this->source); })()), "coming_edit", [], "any", false, false, false, 35), 'errors');
        echo "</th>

        <th>";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_edit"]) || array_key_exists("form_ku_dir_edit", $context) ? $context["form_ku_dir_edit"] : (function () { throw new RuntimeError('Variable "form_ku_dir_edit" does not exist.', 37, $this->source); })()), "expenditure_edit", [], "any", false, false, false, 37), 'label');
        echo "<br>
        ";
        // line 38
        $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_edit"]) || array_key_exists("form_ku_dir_edit", $context) ? $context["form_ku_dir_edit"] : (function () { throw new RuntimeError('Variable "form_ku_dir_edit" does not exist.', 38, $this->source); })()), "expenditure_edit", [], "any", false, false, false, 38), 'widget');
        // line 39
        echo "        &nbsp;";
        echo twig_escape_filter($this->env, (isset($context["edit_expenditure"]) || array_key_exists("edit_expenditure", $context) ? $context["edit_expenditure"] : (function () { throw new RuntimeError('Variable "edit_expenditure" does not exist.', 39, $this->source); })()), "html", null, true);
        echo "
        ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_edit"]) || array_key_exists("form_ku_dir_edit", $context) ? $context["form_ku_dir_edit"] : (function () { throw new RuntimeError('Variable "form_ku_dir_edit" does not exist.', 40, $this->source); })()), "expenditure_edit", [], "any", false, false, false, 40), 'errors');
        echo "</th>

        ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_edit"]) || array_key_exists("form_ku_dir_edit", $context) ? $context["form_ku_dir_edit"] : (function () { throw new RuntimeError('Variable "form_ku_dir_edit" does not exist.', 42, $this->source); })()), "hidden_ku_dir_edit", [], "any", false, false, false, 42), 'widget', ["value" => (isset($context["edit_hidden"]) || array_key_exists("edit_hidden", $context) ? $context["edit_hidden"] : (function () { throw new RuntimeError('Variable "edit_hidden" does not exist.', 42, $this->source); })())]);
        echo "
                                            
        <th>";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_ku_dir_edit"]) || array_key_exists("form_ku_dir_edit", $context) ? $context["form_ku_dir_edit"] : (function () { throw new RuntimeError('Variable "form_ku_dir_edit" does not exist.', 44, $this->source); })()), "button_ku_dir_edit", [], "any", false, false, false, 44), 'widget', ["label" => "Изменить", "attr" => ["class" => "edit"]]);
        // line 45
        echo "</th>

        

    ";
        // line 49
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_ku_dir_edit"]) || array_key_exists("form_ku_dir_edit", $context) ? $context["form_ku_dir_edit"] : (function () { throw new RuntimeError('Variable "form_ku_dir_edit" does not exist.', 49, $this->source); })()), 'form_end');
        echo "

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 53
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

    // line 55
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

    // line 57
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
        return "ku_dir/edit_ku_dir.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 57,  272 => 55,  254 => 53,  241 => 49,  235 => 45,  233 => 44,  228 => 42,  223 => 40,  218 => 39,  216 => 38,  212 => 37,  207 => 35,  203 => 34,  199 => 33,  194 => 31,  190 => 30,  186 => 29,  181 => 27,  177 => 26,  173 => 25,  168 => 23,  164 => 22,  160 => 21,  157 => 20,  154 => 19,  151 => 18,  148 => 17,  145 => 16,  142 => 15,  140 => 14,  134 => 12,  131 => 10,  121 => 9,  102 => 7,  83 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{title_logo}}{% endblock %}

{% block logo %}{{title_logo}}{% endblock %}

{% block legend %}{{legend}}{% endblock legend%}

{% block form_save_edit_sales %}
{#{{ dump(arr_ku_dir) }}#}                               
    {#Форма продажи детали#}
    {{ form_start(form_ku_dir_edit, {'action': path('ku_dir_edit_save')}) }}
            
        {% set edit_receipt_change = arr_ku_dir.getReceiptChange()|default('') %}
        {% set edit_receipt_number = arr_ku_dir.getReceiptNumber()|default('') %}
        {% set edit_receipt_date = arr_ku_dir.getReceiptDate()|date(\"Y-m-d\")|default('') %}
        {% set edit_coming = arr_ku_dir.getComing()|default('') %}
        {% set edit_expenditure = (arr_ku_dir.getExpenditure() / 100)|default('') %}
        {% set edit_hidden = arr_ku_dir.getId()|default('') %}

        <th>{{ form_label(form_ku_dir_edit.receipt_change_edit) }}<br>
        {{ form_widget(form_ku_dir_edit.receipt_change_edit, {value : edit_receipt_change}) }}<br>
        {{ form_errors(form_ku_dir_edit.receipt_change_edit) }}</th>

        <th>{{ form_label(form_ku_dir_edit.receipt_number_edit) }}<br>
        {{ form_widget(form_ku_dir_edit.receipt_number_edit, {value : edit_receipt_number}) }}<br>
        {{ form_errors(form_ku_dir_edit.receipt_number_edit) }}</th>

        <th>{{ form_label(form_ku_dir_edit.receipt_date_edit) }}<br>
        {{ form_widget(form_ku_dir_edit.receipt_date_edit, {value : edit_receipt_date}) }}<br>
        {{ form_errors(form_ku_dir_edit.receipt_date_edit) }}</th>

        <th>{{ form_label(form_ku_dir_edit.coming_edit) }}<br>
        {{ form_widget(form_ku_dir_edit.coming_edit, {value : edit_coming}) }}<br>
        {{ form_errors(form_ku_dir_edit.coming_edit) }}</th>

        <th>{{ form_label(form_ku_dir_edit.expenditure_edit) }}<br>
        {% do form_widget(form_ku_dir_edit.expenditure_edit) %}
        &nbsp;{{ edit_expenditure }}
        {{ form_errors(form_ku_dir_edit.expenditure_edit) }}</th>

        {{ form_widget(form_ku_dir_edit.hidden_ku_dir_edit, {value : edit_hidden}) }}
                                            
        <th>{{ form_widget(form_ku_dir_edit.button_ku_dir_edit, 
            {'label': 'Изменить', 'attr': {'class': 'edit'} }) }}</th>

        

    {{ form_end(form_ku_dir_edit) }}

{% endblock form_save_edit_sales %}

{% block form_search %}{% endblock form_search %}

{% block table_thead_tr %}{% endblock table_thead_tr %}

{% block tbody %}{% endblock tbody %}", "ku_dir/edit_ku_dir.html.twig", "/var/www/templates/ku_dir/edit_ku_dir.html.twig");
    }
}
