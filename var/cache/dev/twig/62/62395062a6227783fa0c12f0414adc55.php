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

/* part_no/edit_part_no.html.twig */
class __TwigTemplate_ea2e063c4f2e52d192769b646db4b1ec extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "part_no/edit_part_no.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "part_no/edit_part_no.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "part_no/edit_part_no.html.twig", 1);
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_p_n_edit"]) || array_key_exists("form_p_n_edit", $context) ? $context["form_p_n_edit"] : (function () { throw new RuntimeError('Variable "form_p_n_edit" does not exist.', 12, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_part")]);
        echo "

        ";
        // line 15
        echo "        ";
        $context["id_edit_part"] = ((twig_get_attribute($this->env, $this->source, ($context["edit_part"] ?? null), "getId", [], "method", true, true, false, 15)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["edit_part"] ?? null), "getId", [], "method", false, false, false, 15), "")) : (""));
        // line 16
        echo "        ";
        $context["edit_part_numbers"] = ((twig_get_attribute($this->env, $this->source, ($context["edit_part"] ?? null), "getPartNumbers", [], "method", true, true, false, 16)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["edit_part"] ?? null), "getPartNumbers", [], "method", false, false, false, 16), "")) : (""));
        // line 17
        echo "        ";
        $context["edit_original_number"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit_part"] ?? null), "getIdOriginalNumber", [], "method", false, true, false, 17), "getOriginalNumber", [], "method", true, true, false, 17)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit_part"] ?? null), "getIdOriginalNumber", [], "method", false, true, false, 17), "getOriginalNumber", [], "method", false, false, false, 17), "")) : (""));
        // line 18
        echo "        ";
        $context["edit_manufacturers"] = ((twig_get_attribute($this->env, $this->source, ($context["edit_part"] ?? null), "getManufacturers", [], "method", true, true, false, 18)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["edit_part"] ?? null), "getManufacturers", [], "method", false, false, false, 18), "")) : (""));
        // line 19
        echo "        ";
        $context["edit_name_detail"] = ((twig_get_attribute($this->env, $this->source, ($context["edit_part"] ?? null), "getNameDetail", [], "method", true, true, false, 19)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["edit_part"] ?? null), "getNameDetail", [], "method", false, false, false, 19), "")) : (""));
        // line 20
        echo "        ";
        $context["edit_id_part_name"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit_part"] ?? null), "getIdPartName", [], "method", false, true, false, 20), "getId", [], "method", true, true, false, 20)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit_part"] ?? null), "getIdPartName", [], "method", false, true, false, 20), "getId", [], "method", false, false, false, 20), "")) : (""));
        // line 21
        echo "        ";
        $context["edit_id_car_brand"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit_part"] ?? null), "getIdCarBrand", [], "method", false, true, false, 21), "getId", [], "method", true, true, false, 21)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit_part"] ?? null), "getIdCarBrand", [], "method", false, true, false, 21), "getId", [], "method", false, false, false, 21), "")) : (""));
        // line 22
        echo "        ";
        $context["edit_id_side"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit_part"] ?? null), "getIdSide", [], "method", false, true, false, 22), "getId", [], "method", true, true, false, 22)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit_part"] ?? null), "getIdSide", [], "method", false, true, false, 22), "getId", [], "method", false, false, false, 22), "")) : (""));
        // line 23
        echo "        ";
        $context["edit_id_body"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit_part"] ?? null), "getIdBody", [], "method", false, true, false, 23), "getId", [], "method", true, true, false, 23)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit_part"] ?? null), "getIdBody", [], "method", false, true, false, 23), "getId", [], "method", false, false, false, 23), "")) : (""));
        // line 24
        echo "        ";
        $context["edit_id_axle"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit_part"] ?? null), "getIdAxle", [], "method", false, true, false, 24), "getId", [], "method", true, true, false, 24)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit_part"] ?? null), "getIdAxle", [], "method", false, true, false, 24), "getId", [], "method", false, false, false, 24), "")) : (""));
        // line 25
        echo "        ";
        $context["edit_id_in_stock"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit_part"] ?? null), "getIdInStock", [], "method", false, true, false, 25), "getId", [], "method", true, true, false, 25)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit_part"] ?? null), "getIdInStock", [], "method", false, true, false, 25), "getId", [], "method", false, false, false, 25), "")) : (""));
        // line 26
        echo "        
        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "flashes", ["hidden_edit"], "method", false, false, false, 27));
        foreach ($context['_seq'] as $context["_key"] => $context["value_id_part"]) {
            echo "  
            ";
            // line 28
            $context["id_edit_part"] = $context["value_id_part"];
            // line 29
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_id_part'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n_edit"]) || array_key_exists("form_p_n_edit", $context) ? $context["form_p_n_edit"] : (function () { throw new RuntimeError('Variable "form_p_n_edit" does not exist.', 30, $this->source); })()), "hidden", [], "any", false, false, false, 30), 'widget', ["value" => (isset($context["id_edit_part"]) || array_key_exists("id_edit_part", $context) ? $context["id_edit_part"] : (function () { throw new RuntimeError('Variable "id_edit_part" does not exist.', 30, $this->source); })())]);
        echo "

        ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "flashes", ["part_numbers_edit"], "method", false, false, false, 32));
        foreach ($context['_seq'] as $context["_key"] => $context["value_part_numbers"]) {
            echo "  
            ";
            // line 33
            $context["edit_part_numbers"] = $context["value_part_numbers"];
            // line 34
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_part_numbers'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n_edit"]) || array_key_exists("form_p_n_edit", $context) ? $context["form_p_n_edit"] : (function () { throw new RuntimeError('Variable "form_p_n_edit" does not exist.', 35, $this->source); })()), "part_numbers", [], "any", false, false, false, 35), 'label');
        echo "<br>
        ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n_edit"]) || array_key_exists("form_p_n_edit", $context) ? $context["form_p_n_edit"] : (function () { throw new RuntimeError('Variable "form_p_n_edit" does not exist.', 36, $this->source); })()), "part_numbers", [], "any", false, false, false, 36), 'widget', ["value" => (isset($context["edit_part_numbers"]) || array_key_exists("edit_part_numbers", $context) ? $context["edit_part_numbers"] : (function () { throw new RuntimeError('Variable "edit_part_numbers" does not exist.', 36, $this->source); })())]);
        echo "<br>
        ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "flashes", ["[part_number_error]"], "method", false, false, false, 37));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 38
            echo "        ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n_edit"]) || array_key_exists("form_p_n_edit", $context) ? $context["form_p_n_edit"] : (function () { throw new RuntimeError('Variable "form_p_n_edit" does not exist.', 40, $this->source); })()), "part_numbers", [], "any", false, false, false, 40), 'errors');
        echo "</th>

        ";
        // line 42
        $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n_edit"]) || array_key_exists("form_p_n_edit", $context) ? $context["form_p_n_edit"] : (function () { throw new RuntimeError('Variable "form_p_n_edit" does not exist.', 42, $this->source); })()), "id_original_number", [], "any", false, false, false, 42), 'widget');
        // line 43
        echo "
        ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "flashes", ["original_number_edit"], "method", false, false, false, 44));
        foreach ($context['_seq'] as $context["_key"] => $context["value_original_number"]) {
            echo "  
            ";
            // line 45
            $context["edit_original_number"] = $context["value_original_number"];
            // line 46
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_original_number'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_original_number_edit"]) || array_key_exists("form_original_number_edit", $context) ? $context["form_original_number_edit"] : (function () { throw new RuntimeError('Variable "form_original_number_edit" does not exist.', 47, $this->source); })()), "original_number", [], "any", false, false, false, 47), 'label');
        echo "<br>
        ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_original_number_edit"]) || array_key_exists("form_original_number_edit", $context) ? $context["form_original_number_edit"] : (function () { throw new RuntimeError('Variable "form_original_number_edit" does not exist.', 48, $this->source); })()), "original_number", [], "any", false, false, false, 48), 'widget', ["value" => (isset($context["edit_original_number"]) || array_key_exists("edit_original_number", $context) ? $context["edit_original_number"] : (function () { throw new RuntimeError('Variable "edit_original_number" does not exist.', 48, $this->source); })())]);
        echo "<br>
        ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "flashes", ["[original_number_error]"], "method", false, false, false, 49));
        foreach ($context['_seq'] as $context["_key"] => $context["message_sales"]) {
            // line 50
            echo "            ";
            echo twig_escape_filter($this->env, $context["message_sales"], "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message_sales'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_original_number_edit"]) || array_key_exists("form_original_number_edit", $context) ? $context["form_original_number_edit"] : (function () { throw new RuntimeError('Variable "form_original_number_edit" does not exist.', 52, $this->source); })()), "original_number", [], "any", false, false, false, 52), 'errors');
        echo "</th>

        ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "flashes", ["manufacturers_edit"], "method", false, false, false, 54));
        foreach ($context['_seq'] as $context["_key"] => $context["value_manufacturers"]) {
            echo "  
            ";
            // line 55
            $context["edit_manufacturers"] = $context["value_manufacturers"];
            // line 56
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_manufacturers'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n_edit"]) || array_key_exists("form_p_n_edit", $context) ? $context["form_p_n_edit"] : (function () { throw new RuntimeError('Variable "form_p_n_edit" does not exist.', 57, $this->source); })()), "manufacturers", [], "any", false, false, false, 57), 'label');
        echo "<br>
        ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n_edit"]) || array_key_exists("form_p_n_edit", $context) ? $context["form_p_n_edit"] : (function () { throw new RuntimeError('Variable "form_p_n_edit" does not exist.', 58, $this->source); })()), "manufacturers", [], "any", false, false, false, 58), 'widget', ["value" => (isset($context["edit_manufacturers"]) || array_key_exists("edit_manufacturers", $context) ? $context["edit_manufacturers"] : (function () { throw new RuntimeError('Variable "edit_manufacturers" does not exist.', 58, $this->source); })())]);
        echo "<br>
        ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "flashes", ["[manufacturers_error]"], "method", false, false, false, 59));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 60
            echo "        ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n_edit"]) || array_key_exists("form_p_n_edit", $context) ? $context["form_p_n_edit"] : (function () { throw new RuntimeError('Variable "form_p_n_edit" does not exist.', 62, $this->source); })()), "manufacturers", [], "any", false, false, false, 62), 'errors');
        echo "</th>

        ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 64, $this->source); })()), "flashes", ["name_detail_edit"], "method", false, false, false, 64));
        foreach ($context['_seq'] as $context["_key"] => $context["value_name_detail"]) {
            echo "  
            ";
            // line 65
            $context["edit_name_detail"] = $context["value_name_detail"];
            // line 66
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_name_detail'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n_edit"]) || array_key_exists("form_p_n_edit", $context) ? $context["form_p_n_edit"] : (function () { throw new RuntimeError('Variable "form_p_n_edit" does not exist.', 67, $this->source); })()), "name_detail", [], "any", false, false, false, 67), 'label');
        echo "<br>
        ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n_edit"]) || array_key_exists("form_p_n_edit", $context) ? $context["form_p_n_edit"] : (function () { throw new RuntimeError('Variable "form_p_n_edit" does not exist.', 68, $this->source); })()), "name_detail", [], "any", false, false, false, 68), 'widget', ["value" => (isset($context["edit_name_detail"]) || array_key_exists("edit_name_detail", $context) ? $context["edit_name_detail"] : (function () { throw new RuntimeError('Variable "edit_name_detail" does not exist.', 68, $this->source); })())]);
        echo "<br>
        ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "flashes", ["[name_detail_error]"], "method", false, false, false, 69));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 70
            echo "        ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n_edit"]) || array_key_exists("form_p_n_edit", $context) ? $context["form_p_n_edit"] : (function () { throw new RuntimeError('Variable "form_p_n_edit" does not exist.', 72, $this->source); })()), "name_detail", [], "any", false, false, false, 72), 'errors');
        echo "</th>

        ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 74, $this->source); })()), "flashes", ["id_part_name_edit"], "method", false, false, false, 74));
        foreach ($context['_seq'] as $context["_key"] => $context["value_id_part_name"]) {
            echo "  
            ";
            // line 75
            $context["edit_id_part_name"] = $context["value_id_part_name"];
            // line 76
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_id_part_name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n_edit"]) || array_key_exists("form_p_n_edit", $context) ? $context["form_p_n_edit"] : (function () { throw new RuntimeError('Variable "form_p_n_edit" does not exist.', 77, $this->source); })()), "id_part_name", [], "any", false, false, false, 77), 'label');
        echo "<br>
        ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n_edit"]) || array_key_exists("form_p_n_edit", $context) ? $context["form_p_n_edit"] : (function () { throw new RuntimeError('Variable "form_p_n_edit" does not exist.', 78, $this->source); })()), "id_part_name", [], "any", false, false, false, 78), 'widget', ["value" => (isset($context["edit_id_part_name"]) || array_key_exists("edit_id_part_name", $context) ? $context["edit_id_part_name"] : (function () { throw new RuntimeError('Variable "edit_id_part_name" does not exist.', 78, $this->source); })())]);
        echo "
        ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n_edit"]) || array_key_exists("form_p_n_edit", $context) ? $context["form_p_n_edit"] : (function () { throw new RuntimeError('Variable "form_p_n_edit" does not exist.', 79, $this->source); })()), "id_part_name", [], "any", false, false, false, 79), 'errors');
        echo "</th>

    </tr>
    <tr>

        ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 84, $this->source); })()), "flashes", ["id_car_brand_edit"], "method", false, false, false, 84));
        foreach ($context['_seq'] as $context["_key"] => $context["value_id_car_brand"]) {
            echo "  
            ";
            // line 85
            $context["edit_id_car_brand"] = $context["value_id_car_brand"];
            // line 86
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_id_car_brand'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n_edit"]) || array_key_exists("form_p_n_edit", $context) ? $context["form_p_n_edit"] : (function () { throw new RuntimeError('Variable "form_p_n_edit" does not exist.', 87, $this->source); })()), "id_car_brand", [], "any", false, false, false, 87), 'label');
        echo "<br>
        ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n_edit"]) || array_key_exists("form_p_n_edit", $context) ? $context["form_p_n_edit"] : (function () { throw new RuntimeError('Variable "form_p_n_edit" does not exist.', 88, $this->source); })()), "id_car_brand", [], "any", false, false, false, 88), 'widget', ["value" => (isset($context["edit_id_car_brand"]) || array_key_exists("edit_id_car_brand", $context) ? $context["edit_id_car_brand"] : (function () { throw new RuntimeError('Variable "edit_id_car_brand" does not exist.', 88, $this->source); })())]);
        echo "
        ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n_edit"]) || array_key_exists("form_p_n_edit", $context) ? $context["form_p_n_edit"] : (function () { throw new RuntimeError('Variable "form_p_n_edit" does not exist.', 89, $this->source); })()), "id_car_brand", [], "any", false, false, false, 89), 'errors');
        echo "</th>

        ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 91, $this->source); })()), "flashes", ["id_side_edit"], "method", false, false, false, 91));
        foreach ($context['_seq'] as $context["_key"] => $context["value_id_side"]) {
            echo "  
            ";
            // line 92
            $context["edit_id_side"] = $context["value_id_side"];
            // line 93
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_id_side'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n_edit"]) || array_key_exists("form_p_n_edit", $context) ? $context["form_p_n_edit"] : (function () { throw new RuntimeError('Variable "form_p_n_edit" does not exist.', 94, $this->source); })()), "id_side", [], "any", false, false, false, 94), 'label');
        echo "<br>
        ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n_edit"]) || array_key_exists("form_p_n_edit", $context) ? $context["form_p_n_edit"] : (function () { throw new RuntimeError('Variable "form_p_n_edit" does not exist.', 95, $this->source); })()), "id_side", [], "any", false, false, false, 95), 'widget', ["value" => (isset($context["edit_id_side"]) || array_key_exists("edit_id_side", $context) ? $context["edit_id_side"] : (function () { throw new RuntimeError('Variable "edit_id_side" does not exist.', 95, $this->source); })())]);
        echo "
        ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n_edit"]) || array_key_exists("form_p_n_edit", $context) ? $context["form_p_n_edit"] : (function () { throw new RuntimeError('Variable "form_p_n_edit" does not exist.', 96, $this->source); })()), "id_side", [], "any", false, false, false, 96), 'errors');
        echo "</th>

        ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 98, $this->source); })()), "flashes", ["id_body_edit"], "method", false, false, false, 98));
        foreach ($context['_seq'] as $context["_key"] => $context["value_id_body"]) {
            echo "  
            ";
            // line 99
            $context["edit_id_body"] = $context["value_id_body"];
            // line 100
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_id_body'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n_edit"]) || array_key_exists("form_p_n_edit", $context) ? $context["form_p_n_edit"] : (function () { throw new RuntimeError('Variable "form_p_n_edit" does not exist.', 101, $this->source); })()), "id_body", [], "any", false, false, false, 101), 'label');
        echo "<br>
        ";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n_edit"]) || array_key_exists("form_p_n_edit", $context) ? $context["form_p_n_edit"] : (function () { throw new RuntimeError('Variable "form_p_n_edit" does not exist.', 102, $this->source); })()), "id_body", [], "any", false, false, false, 102), 'widget', ["value" => (isset($context["edit_id_body"]) || array_key_exists("edit_id_body", $context) ? $context["edit_id_body"] : (function () { throw new RuntimeError('Variable "edit_id_body" does not exist.', 102, $this->source); })())]);
        echo "
        ";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n_edit"]) || array_key_exists("form_p_n_edit", $context) ? $context["form_p_n_edit"] : (function () { throw new RuntimeError('Variable "form_p_n_edit" does not exist.', 103, $this->source); })()), "id_body", [], "any", false, false, false, 103), 'errors');
        echo "</th>

        ";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 105, $this->source); })()), "flashes", ["id_axle_edit"], "method", false, false, false, 105));
        foreach ($context['_seq'] as $context["_key"] => $context["value_id_axle"]) {
            echo "  
            ";
            // line 106
            $context["edit_id_axle"] = $context["value_id_axle"];
            // line 107
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_id_axle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n_edit"]) || array_key_exists("form_p_n_edit", $context) ? $context["form_p_n_edit"] : (function () { throw new RuntimeError('Variable "form_p_n_edit" does not exist.', 108, $this->source); })()), "id_axle", [], "any", false, false, false, 108), 'label');
        echo "<br>
        ";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n_edit"]) || array_key_exists("form_p_n_edit", $context) ? $context["form_p_n_edit"] : (function () { throw new RuntimeError('Variable "form_p_n_edit" does not exist.', 109, $this->source); })()), "id_axle", [], "any", false, false, false, 109), 'widget', ["value" => (isset($context["edit_id_axle"]) || array_key_exists("edit_id_axle", $context) ? $context["edit_id_axle"] : (function () { throw new RuntimeError('Variable "edit_id_axle" does not exist.', 109, $this->source); })())]);
        echo "
        ";
        // line 110
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n_edit"]) || array_key_exists("form_p_n_edit", $context) ? $context["form_p_n_edit"] : (function () { throw new RuntimeError('Variable "form_p_n_edit" does not exist.', 110, $this->source); })()), "id_axle", [], "any", false, false, false, 110), 'errors');
        echo "</th>

        ";
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 112, $this->source); })()), "flashes", ["id_in_stock_edit"], "method", false, false, false, 112));
        foreach ($context['_seq'] as $context["_key"] => $context["value_id_in_stock"]) {
            echo "  
            ";
            // line 113
            $context["edit_id_in_stock"] = $context["value_id_in_stock"];
            // line 114
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_id_in_stock'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n_edit"]) || array_key_exists("form_p_n_edit", $context) ? $context["form_p_n_edit"] : (function () { throw new RuntimeError('Variable "form_p_n_edit" does not exist.', 115, $this->source); })()), "id_in_stock", [], "any", false, false, false, 115), 'label');
        echo "<br>
        ";
        // line 116
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n_edit"]) || array_key_exists("form_p_n_edit", $context) ? $context["form_p_n_edit"] : (function () { throw new RuntimeError('Variable "form_p_n_edit" does not exist.', 116, $this->source); })()), "id_in_stock", [], "any", false, false, false, 116), 'widget', ["value" => (isset($context["edit_id_in_stock"]) || array_key_exists("edit_id_in_stock", $context) ? $context["edit_id_in_stock"] : (function () { throw new RuntimeError('Variable "edit_id_in_stock" does not exist.', 116, $this->source); })())]);
        echo "
        ";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n_edit"]) || array_key_exists("form_p_n_edit", $context) ? $context["form_p_n_edit"] : (function () { throw new RuntimeError('Variable "form_p_n_edit" does not exist.', 117, $this->source); })()), "id_in_stock", [], "any", false, false, false, 117), 'errors');
        echo "</th>

        <th>";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n_edit"]) || array_key_exists("form_p_n_edit", $context) ? $context["form_p_n_edit"] : (function () { throw new RuntimeError('Variable "form_p_n_edit" does not exist.', 119, $this->source); })()), "button", [], "any", false, false, false, 119), 'widget', ["label" => "Редоктировать", "attr" => ["class" => "save"]]);
        echo "</th>

   ";
        // line 121
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_p_n_edit"]) || array_key_exists("form_p_n_edit", $context) ? $context["form_p_n_edit"] : (function () { throw new RuntimeError('Variable "form_p_n_edit" does not exist.', 121, $this->source); })()), 'form_end');
        echo "
   
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 125
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

    // line 127
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

    // line 129
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
        return "part_no/edit_part_no.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  594 => 129,  576 => 127,  558 => 125,  545 => 121,  540 => 119,  535 => 117,  531 => 116,  526 => 115,  520 => 114,  518 => 113,  512 => 112,  507 => 110,  503 => 109,  498 => 108,  492 => 107,  490 => 106,  484 => 105,  479 => 103,  475 => 102,  470 => 101,  464 => 100,  462 => 99,  456 => 98,  451 => 96,  447 => 95,  442 => 94,  436 => 93,  434 => 92,  428 => 91,  423 => 89,  419 => 88,  414 => 87,  408 => 86,  406 => 85,  400 => 84,  392 => 79,  388 => 78,  383 => 77,  377 => 76,  375 => 75,  369 => 74,  363 => 72,  354 => 70,  350 => 69,  346 => 68,  341 => 67,  335 => 66,  333 => 65,  327 => 64,  321 => 62,  312 => 60,  308 => 59,  304 => 58,  299 => 57,  293 => 56,  291 => 55,  285 => 54,  279 => 52,  270 => 50,  266 => 49,  262 => 48,  257 => 47,  251 => 46,  249 => 45,  243 => 44,  240 => 43,  238 => 42,  232 => 40,  223 => 38,  219 => 37,  215 => 36,  210 => 35,  204 => 34,  202 => 33,  196 => 32,  190 => 30,  184 => 29,  182 => 28,  176 => 27,  173 => 26,  170 => 25,  167 => 24,  164 => 23,  161 => 22,  158 => 21,  155 => 20,  152 => 19,  149 => 18,  146 => 17,  143 => 16,  140 => 15,  134 => 12,  131 => 10,  121 => 9,  102 => 7,  83 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{title_logo}}{% endblock %}

{% block logo %}{{title_logo}}{% endblock %}

{% block legend %}{{legend}}{% endblock legend%}

{% block form_save_edit_sales %}

{#Форма редактирования детали#}
    {{ form_start(form_p_n_edit, {'action': path('edit_part')}) }}

        {#Переменный для вывода данных в форме #}
        {% set id_edit_part = edit_part.getId()|default('') %}
        {% set edit_part_numbers = edit_part.getPartNumbers()|default('') %}
        {% set edit_original_number = edit_part.getIdOriginalNumber().getOriginalNumber()|default('') %}
        {% set edit_manufacturers = edit_part.getManufacturers()|default('') %}
        {% set edit_name_detail = edit_part.getNameDetail()|default('') %}
        {% set edit_id_part_name = edit_part.getIdPartName().getId()|default('') %}
        {% set edit_id_car_brand = edit_part.getIdCarBrand().getId()|default('') %}
        {% set edit_id_side = edit_part.getIdSide().getId()|default('') %}
        {% set edit_id_body = edit_part.getIdBody().getId()|default('') %}
        {% set edit_id_axle = edit_part.getIdAxle().getId()|default('') %}
        {% set edit_id_in_stock = edit_part.getIdInStock().getId()|default('') %}
        
        {% for value_id_part in app.flashes('hidden_edit') %}  
            {% set id_edit_part = value_id_part %}
        {% endfor %}
        {{ form_widget(form_p_n_edit.hidden, {value : id_edit_part}) }}

        {% for value_part_numbers in app.flashes('part_numbers_edit') %}  
            {% set edit_part_numbers = value_part_numbers %}
        {% endfor %}
        <th>{{ form_label(form_p_n_edit.part_numbers) }}<br>
        {{ form_widget(form_p_n_edit.part_numbers, {value : edit_part_numbers}) }}<br>
        {% for message in app.flashes('[part_number_error]') %}
        {{ message }}
        {% endfor %}
        {{ form_errors(form_p_n_edit.part_numbers) }}</th>

        {% do form_widget(form_p_n_edit.id_original_number) %}

        {% for value_original_number in app.flashes('original_number_edit') %}  
            {% set edit_original_number = value_original_number %}
        {% endfor %}
        <th>{{ form_label(form_original_number_edit.original_number) }}<br>
        {{ form_widget(form_original_number_edit.original_number, {value : edit_original_number}) }}<br>
        {% for message_sales in app.flashes('[original_number_error]') %}
            {{ message_sales }}
        {% endfor %}
        {{ form_errors(form_original_number_edit.original_number) }}</th>

        {% for value_manufacturers in app.flashes('manufacturers_edit') %}  
            {% set edit_manufacturers = value_manufacturers %}
        {% endfor %}
        <th>{{ form_label(form_p_n_edit.manufacturers) }}<br>
        {{ form_widget(form_p_n_edit.manufacturers, {value : edit_manufacturers}) }}<br>
        {% for message in app.flashes('[manufacturers_error]') %}
        {{ message }}
        {% endfor %}
        {{ form_errors(form_p_n_edit.manufacturers) }}</th>

        {% for value_name_detail in app.flashes('name_detail_edit') %}  
            {% set edit_name_detail = value_name_detail %}
        {% endfor %}
        <th>{{ form_label(form_p_n_edit.name_detail) }}<br>
        {{ form_widget(form_p_n_edit.name_detail, {value : edit_name_detail}) }}<br>
        {% for message in app.flashes('[name_detail_error]') %}
        {{ message }}
        {% endfor %}
        {{ form_errors(form_p_n_edit.name_detail) }}</th>

        {% for value_id_part_name in app.flashes('id_part_name_edit') %}  
            {% set edit_id_part_name = value_id_part_name %}
        {% endfor %}
        <th>{{ form_label(form_p_n_edit.id_part_name) }}<br>
        {{ form_widget(form_p_n_edit.id_part_name, {value : edit_id_part_name}) }}
        {{ form_errors(form_p_n_edit.id_part_name) }}</th>

    </tr>
    <tr>

        {% for value_id_car_brand in app.flashes('id_car_brand_edit') %}  
            {% set edit_id_car_brand = value_id_car_brand %}
        {% endfor %}
        <th>{{ form_label(form_p_n_edit.id_car_brand) }}<br>
        {{ form_widget(form_p_n_edit.id_car_brand, {value : edit_id_car_brand}) }}
        {{ form_errors(form_p_n_edit.id_car_brand) }}</th>

        {% for value_id_side in app.flashes('id_side_edit') %}  
            {% set edit_id_side = value_id_side %}
        {% endfor %}
        <th>{{ form_label(form_p_n_edit.id_side) }}<br>
        {{ form_widget(form_p_n_edit.id_side, {value : edit_id_side}) }}
        {{ form_errors(form_p_n_edit.id_side) }}</th>

        {% for value_id_body in app.flashes('id_body_edit') %}  
            {% set edit_id_body = value_id_body %}
        {% endfor %}
        <th>{{ form_label(form_p_n_edit.id_body) }}<br>
        {{ form_widget(form_p_n_edit.id_body, {value : edit_id_body}) }}
        {{ form_errors(form_p_n_edit.id_body) }}</th>

        {% for value_id_axle in app.flashes('id_axle_edit') %}  
            {% set edit_id_axle = value_id_axle %}
        {% endfor %}
        <th>{{ form_label(form_p_n_edit.id_axle) }}<br>
        {{ form_widget(form_p_n_edit.id_axle, {value : edit_id_axle}) }}
        {{ form_errors(form_p_n_edit.id_axle) }}</th>

        {% for value_id_in_stock in app.flashes('id_in_stock_edit') %}  
            {% set edit_id_in_stock = value_id_in_stock %}
        {% endfor %}
        <th>{{ form_label(form_p_n_edit.id_in_stock) }}<br>
        {{ form_widget(form_p_n_edit.id_in_stock, {value : edit_id_in_stock}) }}
        {{ form_errors(form_p_n_edit.id_in_stock) }}</th>

        <th>{{ form_widget(form_p_n_edit.button, {'label': 'Редоктировать', 'attr': {'class': 'save'} }) }}</th>

   {{ form_end(form_p_n_edit) }}
   
{% endblock form_save_edit_sales %}

{% block form_search %}{% endblock form_search %}

{% block table_thead_tr %}{% endblock table_thead_tr %}

{% block tbody %}{% endblock tbody %}", "part_no/edit_part_no.html.twig", "/var/www/templates/part_no/edit_part_no.html.twig");
    }
}
