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

/* part_no/part_no.html.twig */
class __TwigTemplate_294b8d538e7a13728d3cf8092351e66c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "part_no/part_no.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "part_no/part_no.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "part_no/part_no.html.twig", 1);
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
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_p_n_save"]) || array_key_exists("form_p_n_save", $context) ? $context["form_p_n_save"] : (function () { throw new RuntimeError('Variable "form_p_n_save" does not exist.', 14, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("save_part_no")]);
        echo "
";
        // line 16
        echo "        ";
        // line 17
        echo "        ";
        $context["save_part_numbers"] = "";
        // line 18
        echo "        ";
        $context["save_id_original_number"] = "";
        // line 19
        echo "        ";
        $context["save_manufacturers"] = "";
        // line 20
        echo "        ";
        $context["save_name_detail"] = "";
        // line 21
        echo "        ";
        $context["save_id_part_name"] = "";
        // line 22
        echo "        ";
        $context["save_id_car_brand"] = "";
        // line 23
        echo "        ";
        $context["save_id_side"] = "";
        // line 24
        echo "        ";
        $context["save_id_body"] = "";
        // line 25
        echo "        ";
        $context["save_id_axle"] = "";
        // line 26
        echo "        ";
        $context["save_id_in_stock"] = "";
        // line 27
        echo "
        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "flashes", ["part_numbers_save"], "method", false, false, false, 28));
        foreach ($context['_seq'] as $context["_key"] => $context["value_part_numbers"]) {
            echo "  
            ";
            // line 29
            $context["save_part_numbers"] = $context["value_part_numbers"];
            // line 30
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_part_numbers'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n_save"]) || array_key_exists("form_p_n_save", $context) ? $context["form_p_n_save"] : (function () { throw new RuntimeError('Variable "form_p_n_save" does not exist.', 31, $this->source); })()), "part_numbers", [], "any", false, false, false, 31), 'label');
        echo "<br>
        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n_save"]) || array_key_exists("form_p_n_save", $context) ? $context["form_p_n_save"] : (function () { throw new RuntimeError('Variable "form_p_n_save" does not exist.', 32, $this->source); })()), "part_numbers", [], "any", false, false, false, 32), 'widget', ["value" => (isset($context["save_part_numbers"]) || array_key_exists("save_part_numbers", $context) ? $context["save_part_numbers"] : (function () { throw new RuntimeError('Variable "save_part_numbers" does not exist.', 32, $this->source); })())]);
        echo "<br>
        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "flashes", ["children[part_numbers].data_save"], "method", false, false, false, 33));
        foreach ($context['_seq'] as $context["_key"] => $context["message_save"]) {
            // line 34
            echo "            ";
            echo twig_escape_filter($this->env, $context["message_save"], "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message_save'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n_save"]) || array_key_exists("form_p_n_save", $context) ? $context["form_p_n_save"] : (function () { throw new RuntimeError('Variable "form_p_n_save" does not exist.', 36, $this->source); })()), "part_numbers", [], "any", false, false, false, 36), 'errors');
        echo "</th>

        ";
        // line 38
        $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n_save"]) || array_key_exists("form_p_n_save", $context) ? $context["form_p_n_save"] : (function () { throw new RuntimeError('Variable "form_p_n_save" does not exist.', 38, $this->source); })()), "id_original_number", [], "any", false, false, false, 38), 'widget');
        // line 39
        echo "
        ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "flashes", ["original_number_save"], "method", false, false, false, 40));
        foreach ($context['_seq'] as $context["_key"] => $context["value_original_number"]) {
            echo "  
            ";
            // line 41
            $context["save_id_original_number"] = $context["value_original_number"];
            // line 42
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_original_number'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_original_number_save"]) || array_key_exists("form_original_number_save", $context) ? $context["form_original_number_save"] : (function () { throw new RuntimeError('Variable "form_original_number_save" does not exist.', 43, $this->source); })()), "original_number", [], "any", false, false, false, 43), 'label');
        echo "<br>
        ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_original_number_save"]) || array_key_exists("form_original_number_save", $context) ? $context["form_original_number_save"] : (function () { throw new RuntimeError('Variable "form_original_number_save" does not exist.', 44, $this->source); })()), "original_number", [], "any", false, false, false, 44), 'widget', ["value" => (isset($context["save_id_original_number"]) || array_key_exists("save_id_original_number", $context) ? $context["save_id_original_number"] : (function () { throw new RuntimeError('Variable "save_id_original_number" does not exist.', 44, $this->source); })())]);
        echo "<br>
        ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "flashes", ["children[original_number].data_save"], "method", false, false, false, 45));
        foreach ($context['_seq'] as $context["_key"] => $context["message_save"]) {
            // line 46
            echo "            ";
            echo twig_escape_filter($this->env, $context["message_save"], "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message_save'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_original_number_save"]) || array_key_exists("form_original_number_save", $context) ? $context["form_original_number_save"] : (function () { throw new RuntimeError('Variable "form_original_number_save" does not exist.', 48, $this->source); })()), "original_number", [], "any", false, false, false, 48), 'errors');
        echo "</th>

        ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "flashes", ["manufacturers_save"], "method", false, false, false, 50));
        foreach ($context['_seq'] as $context["_key"] => $context["value_manufacturers"]) {
            echo "  
            ";
            // line 51
            $context["save_manufacturers"] = $context["value_manufacturers"];
            // line 52
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_manufacturers'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n_save"]) || array_key_exists("form_p_n_save", $context) ? $context["form_p_n_save"] : (function () { throw new RuntimeError('Variable "form_p_n_save" does not exist.', 53, $this->source); })()), "manufacturers", [], "any", false, false, false, 53), 'label');
        echo "<br>
        ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n_save"]) || array_key_exists("form_p_n_save", $context) ? $context["form_p_n_save"] : (function () { throw new RuntimeError('Variable "form_p_n_save" does not exist.', 54, $this->source); })()), "manufacturers", [], "any", false, false, false, 54), 'widget', ["value" => (isset($context["save_manufacturers"]) || array_key_exists("save_manufacturers", $context) ? $context["save_manufacturers"] : (function () { throw new RuntimeError('Variable "save_manufacturers" does not exist.', 54, $this->source); })())]);
        echo "<br>
        ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "flashes", ["children[manufacturers].data_save"], "method", false, false, false, 55));
        foreach ($context['_seq'] as $context["_key"] => $context["message_save"]) {
            // line 56
            echo "            ";
            echo twig_escape_filter($this->env, $context["message_save"], "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message_save'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n_save"]) || array_key_exists("form_p_n_save", $context) ? $context["form_p_n_save"] : (function () { throw new RuntimeError('Variable "form_p_n_save" does not exist.', 58, $this->source); })()), "manufacturers", [], "any", false, false, false, 58), 'errors');
        echo "</th>

        ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "flashes", ["name_detail_save"], "method", false, false, false, 60));
        foreach ($context['_seq'] as $context["_key"] => $context["value_name_detail"]) {
            echo "  
            ";
            // line 61
            $context["save_name_detail"] = $context["value_name_detail"];
            // line 62
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_name_detail'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n_save"]) || array_key_exists("form_p_n_save", $context) ? $context["form_p_n_save"] : (function () { throw new RuntimeError('Variable "form_p_n_save" does not exist.', 63, $this->source); })()), "name_detail", [], "any", false, false, false, 63), 'label');
        echo "<br>
        ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n_save"]) || array_key_exists("form_p_n_save", $context) ? $context["form_p_n_save"] : (function () { throw new RuntimeError('Variable "form_p_n_save" does not exist.', 64, $this->source); })()), "name_detail", [], "any", false, false, false, 64), 'widget', ["value" => (isset($context["save_name_detail"]) || array_key_exists("save_name_detail", $context) ? $context["save_name_detail"] : (function () { throw new RuntimeError('Variable "save_name_detail" does not exist.', 64, $this->source); })())]);
        echo "<br>    
        ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 65, $this->source); })()), "flashes", ["children[name_detail].data_save"], "method", false, false, false, 65));
        foreach ($context['_seq'] as $context["_key"] => $context["message_save"]) {
            // line 66
            echo "            ";
            echo twig_escape_filter($this->env, $context["message_save"], "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message_save'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n_save"]) || array_key_exists("form_p_n_save", $context) ? $context["form_p_n_save"] : (function () { throw new RuntimeError('Variable "form_p_n_save" does not exist.', 68, $this->source); })()), "name_detail", [], "any", false, false, false, 68), 'errors');
        echo "</th>

        ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 70, $this->source); })()), "flashes", ["id_part_name_save"], "method", false, false, false, 70));
        foreach ($context['_seq'] as $context["_key"] => $context["value_id_part_name"]) {
            echo "  
            ";
            // line 71
            $context["save_id_part_name"] = $context["value_id_part_name"];
            // line 72
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_id_part_name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n_save"]) || array_key_exists("form_p_n_save", $context) ? $context["form_p_n_save"] : (function () { throw new RuntimeError('Variable "form_p_n_save" does not exist.', 73, $this->source); })()), "id_part_name", [], "any", false, false, false, 73), 'label');
        echo "<br>
        ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n_save"]) || array_key_exists("form_p_n_save", $context) ? $context["form_p_n_save"] : (function () { throw new RuntimeError('Variable "form_p_n_save" does not exist.', 74, $this->source); })()), "id_part_name", [], "any", false, false, false, 74), 'widget', ["value" => (isset($context["save_id_part_name"]) || array_key_exists("save_id_part_name", $context) ? $context["save_id_part_name"] : (function () { throw new RuntimeError('Variable "save_id_part_name" does not exist.', 74, $this->source); })())]);
        echo "
        ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n_save"]) || array_key_exists("form_p_n_save", $context) ? $context["form_p_n_save"] : (function () { throw new RuntimeError('Variable "form_p_n_save" does not exist.', 75, $this->source); })()), "id_part_name", [], "any", false, false, false, 75), 'errors');
        echo "</th>
                                  
    </tr>
    <tr>

        ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 80, $this->source); })()), "flashes", ["id_car_brand_save"], "method", false, false, false, 80));
        foreach ($context['_seq'] as $context["_key"] => $context["value_id_car_brand"]) {
            echo "  
            ";
            // line 81
            $context["save_id_car_brand"] = $context["value_id_car_brand"];
            // line 82
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_id_car_brand'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n_save"]) || array_key_exists("form_p_n_save", $context) ? $context["form_p_n_save"] : (function () { throw new RuntimeError('Variable "form_p_n_save" does not exist.', 83, $this->source); })()), "id_car_brand", [], "any", false, false, false, 83), 'label');
        echo "<br>
        ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n_save"]) || array_key_exists("form_p_n_save", $context) ? $context["form_p_n_save"] : (function () { throw new RuntimeError('Variable "form_p_n_save" does not exist.', 84, $this->source); })()), "id_car_brand", [], "any", false, false, false, 84), 'widget', ["value" => (isset($context["save_id_car_brand"]) || array_key_exists("save_id_car_brand", $context) ? $context["save_id_car_brand"] : (function () { throw new RuntimeError('Variable "save_id_car_brand" does not exist.', 84, $this->source); })())]);
        echo "
        ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n_save"]) || array_key_exists("form_p_n_save", $context) ? $context["form_p_n_save"] : (function () { throw new RuntimeError('Variable "form_p_n_save" does not exist.', 85, $this->source); })()), "id_car_brand", [], "any", false, false, false, 85), 'errors');
        echo "</th>

        ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 87, $this->source); })()), "flashes", ["id_side_save"], "method", false, false, false, 87));
        foreach ($context['_seq'] as $context["_key"] => $context["value_id_side"]) {
            echo "  
            ";
            // line 88
            $context["save_id_side"] = $context["value_id_side"];
            // line 89
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_id_side'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n_save"]) || array_key_exists("form_p_n_save", $context) ? $context["form_p_n_save"] : (function () { throw new RuntimeError('Variable "form_p_n_save" does not exist.', 90, $this->source); })()), "id_side", [], "any", false, false, false, 90), 'label');
        echo "<br>
        ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n_save"]) || array_key_exists("form_p_n_save", $context) ? $context["form_p_n_save"] : (function () { throw new RuntimeError('Variable "form_p_n_save" does not exist.', 91, $this->source); })()), "id_side", [], "any", false, false, false, 91), 'widget', ["value" => (isset($context["save_id_side"]) || array_key_exists("save_id_side", $context) ? $context["save_id_side"] : (function () { throw new RuntimeError('Variable "save_id_side" does not exist.', 91, $this->source); })())]);
        echo "
        ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n_save"]) || array_key_exists("form_p_n_save", $context) ? $context["form_p_n_save"] : (function () { throw new RuntimeError('Variable "form_p_n_save" does not exist.', 92, $this->source); })()), "id_side", [], "any", false, false, false, 92), 'errors');
        echo "</th>

        ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 94, $this->source); })()), "flashes", ["id_body_save"], "method", false, false, false, 94));
        foreach ($context['_seq'] as $context["_key"] => $context["value_id_body"]) {
            echo "  
            ";
            // line 95
            $context["save_id_body"] = $context["value_id_body"];
            // line 96
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_id_body'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n_save"]) || array_key_exists("form_p_n_save", $context) ? $context["form_p_n_save"] : (function () { throw new RuntimeError('Variable "form_p_n_save" does not exist.', 97, $this->source); })()), "id_body", [], "any", false, false, false, 97), 'label');
        echo "<br>
        ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n_save"]) || array_key_exists("form_p_n_save", $context) ? $context["form_p_n_save"] : (function () { throw new RuntimeError('Variable "form_p_n_save" does not exist.', 98, $this->source); })()), "id_body", [], "any", false, false, false, 98), 'widget', ["value" => (isset($context["save_id_body"]) || array_key_exists("save_id_body", $context) ? $context["save_id_body"] : (function () { throw new RuntimeError('Variable "save_id_body" does not exist.', 98, $this->source); })())]);
        echo "
        ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n_save"]) || array_key_exists("form_p_n_save", $context) ? $context["form_p_n_save"] : (function () { throw new RuntimeError('Variable "form_p_n_save" does not exist.', 99, $this->source); })()), "id_body", [], "any", false, false, false, 99), 'errors');
        echo "</th>

        ";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 101, $this->source); })()), "flashes", ["id_axle_save"], "method", false, false, false, 101));
        foreach ($context['_seq'] as $context["_key"] => $context["value_id_axle"]) {
            echo "  
            ";
            // line 102
            $context["save_id_axle"] = $context["value_id_axle"];
            // line 103
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_id_axle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n_save"]) || array_key_exists("form_p_n_save", $context) ? $context["form_p_n_save"] : (function () { throw new RuntimeError('Variable "form_p_n_save" does not exist.', 104, $this->source); })()), "id_axle", [], "any", false, false, false, 104), 'label');
        echo "<br>
        ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n_save"]) || array_key_exists("form_p_n_save", $context) ? $context["form_p_n_save"] : (function () { throw new RuntimeError('Variable "form_p_n_save" does not exist.', 105, $this->source); })()), "id_axle", [], "any", false, false, false, 105), 'widget', ["value" => (isset($context["save_id_axle"]) || array_key_exists("save_id_axle", $context) ? $context["save_id_axle"] : (function () { throw new RuntimeError('Variable "save_id_axle" does not exist.', 105, $this->source); })())]);
        echo "
        ";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n_save"]) || array_key_exists("form_p_n_save", $context) ? $context["form_p_n_save"] : (function () { throw new RuntimeError('Variable "form_p_n_save" does not exist.', 106, $this->source); })()), "id_axle", [], "any", false, false, false, 106), 'errors');
        echo "</th>

        ";
        // line 108
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 108, $this->source); })()), "flashes", ["id_in_stock_save"], "method", false, false, false, 108));
        foreach ($context['_seq'] as $context["_key"] => $context["value_id_in_stock"]) {
            echo "  
            ";
            // line 109
            $context["save_id_in_stock"] = $context["value_id_in_stock"];
            // line 110
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_id_in_stock'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n_save"]) || array_key_exists("form_p_n_save", $context) ? $context["form_p_n_save"] : (function () { throw new RuntimeError('Variable "form_p_n_save" does not exist.', 111, $this->source); })()), "id_in_stock", [], "any", false, false, false, 111), 'label');
        echo "<br>
        ";
        // line 112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n_save"]) || array_key_exists("form_p_n_save", $context) ? $context["form_p_n_save"] : (function () { throw new RuntimeError('Variable "form_p_n_save" does not exist.', 112, $this->source); })()), "id_in_stock", [], "any", false, false, false, 112), 'widget', ["value" => (isset($context["save_id_in_stock"]) || array_key_exists("save_id_in_stock", $context) ? $context["save_id_in_stock"] : (function () { throw new RuntimeError('Variable "save_id_in_stock" does not exist.', 112, $this->source); })())]);
        echo "
        ";
        // line 113
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n_save"]) || array_key_exists("form_p_n_save", $context) ? $context["form_p_n_save"] : (function () { throw new RuntimeError('Variable "form_p_n_save" does not exist.', 113, $this->source); })()), "id_in_stock", [], "any", false, false, false, 113), 'errors');
        echo "</th>

        <th>";
        // line 115
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n_save"]) || array_key_exists("form_p_n_save", $context) ? $context["form_p_n_save"] : (function () { throw new RuntimeError('Variable "form_p_n_save" does not exist.', 115, $this->source); })()), "button", [], "any", false, false, false, 115), 'widget', ["label" => "Сохранить", "attr" => ["class" => "save"]]);
        echo "</th>
        
   ";
        // line 117
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_p_n_save"]) || array_key_exists("form_p_n_save", $context) ? $context["form_p_n_save"] : (function () { throw new RuntimeError('Variable "form_p_n_save" does not exist.', 117, $this->source); })()), 'form_end');
        echo "

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 121
    public function block_form_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_search"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_search"));

        // line 122
        echo "    ";
        // line 123
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_p_n_search"]) || array_key_exists("form_p_n_search", $context) ? $context["form_p_n_search"] : (function () { throw new RuntimeError('Variable "form_p_n_search" does not exist.', 123, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"], "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("part_no")]);
        echo "

        ";
        // line 126
        echo "        ";
        $context["search_part_numbers"] = "";
        // line 127
        echo "        ";
        $context["search_id_original_number"] = "";
        // line 128
        echo "        ";
        $context["search_id_part_name"] = "";
        // line 129
        echo "        ";
        $context["search_id_car_brand"] = "";
        // line 130
        echo "        ";
        $context["search_id_side"] = "";
        // line 131
        echo "        ";
        $context["search_id_body"] = "";
        // line 132
        echo "        ";
        $context["search_id_axle"] = "";
        // line 133
        echo "        ";
        $context["search_id_in_stock"] = "";
        // line 134
        echo "
        ";
        // line 135
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 135, $this->source); })()), "flashes", ["part_numbers_search"], "method", false, false, false, 135));
        foreach ($context['_seq'] as $context["_key"] => $context["value_part_numbers"]) {
            echo "  
            ";
            // line 136
            $context["search_part_numbers"] = $context["value_part_numbers"];
            // line 137
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_part_numbers'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n_search"]) || array_key_exists("form_p_n_search", $context) ? $context["form_p_n_search"] : (function () { throw new RuntimeError('Variable "form_p_n_search" does not exist.', 138, $this->source); })()), "part_numbers", [], "any", false, false, false, 138), 'label');
        echo "<br>
        ";
        // line 139
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n_search"]) || array_key_exists("form_p_n_search", $context) ? $context["form_p_n_search"] : (function () { throw new RuntimeError('Variable "form_p_n_search" does not exist.', 139, $this->source); })()), "part_numbers", [], "any", false, false, false, 139), 'widget', ["value" => (isset($context["search_part_numbers"]) || array_key_exists("search_part_numbers", $context) ? $context["search_part_numbers"] : (function () { throw new RuntimeError('Variable "search_part_numbers" does not exist.', 139, $this->source); })())]);
        echo "<br>
        ";
        // line 140
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 140, $this->source); })()), "flashes", ["children[part_numbers].data_search"], "method", false, false, false, 140));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 141
            echo "            ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 143
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n_search"]) || array_key_exists("form_p_n_search", $context) ? $context["form_p_n_search"] : (function () { throw new RuntimeError('Variable "form_p_n_search" does not exist.', 143, $this->source); })()), "part_numbers", [], "any", false, false, false, 143), 'errors');
        echo "</th>

        ";
        // line 145
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 145, $this->source); })()), "flashes", ["original_number_search"], "method", false, false, false, 145));
        foreach ($context['_seq'] as $context["_key"] => $context["value_original_number"]) {
            echo "  
            ";
            // line 146
            $context["search_id_original_number"] = $context["value_original_number"];
            // line 147
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_original_number'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 148
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_original_number_search"]) || array_key_exists("form_original_number_search", $context) ? $context["form_original_number_search"] : (function () { throw new RuntimeError('Variable "form_original_number_search" does not exist.', 148, $this->source); })()), "original_number", [], "any", false, false, false, 148), 'label');
        echo "<br>
        ";
        // line 149
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_original_number_search"]) || array_key_exists("form_original_number_search", $context) ? $context["form_original_number_search"] : (function () { throw new RuntimeError('Variable "form_original_number_search" does not exist.', 149, $this->source); })()), "original_number", [], "any", false, false, false, 149), 'widget', ["value" => (isset($context["search_id_original_number"]) || array_key_exists("search_id_original_number", $context) ? $context["search_id_original_number"] : (function () { throw new RuntimeError('Variable "search_id_original_number" does not exist.', 149, $this->source); })())]);
        echo "<br>
        ";
        // line 150
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 150, $this->source); })()), "flashes", ["children[original_number].data_search"], "method", false, false, false, 150));
        foreach ($context['_seq'] as $context["_key"] => $context["message_search"]) {
            // line 151
            echo "            ";
            echo twig_escape_filter($this->env, $context["message_search"], "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message_search'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 153
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_original_number_search"]) || array_key_exists("form_original_number_search", $context) ? $context["form_original_number_search"] : (function () { throw new RuntimeError('Variable "form_original_number_search" does not exist.', 153, $this->source); })()), "original_number", [], "any", false, false, false, 153), 'errors');
        echo "</th>

        ";
        // line 155
        $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n_search"]) || array_key_exists("form_p_n_search", $context) ? $context["form_p_n_search"] : (function () { throw new RuntimeError('Variable "form_p_n_search" does not exist.', 155, $this->source); })()), "id_original_number", [], "any", false, false, false, 155), 'widget');
        // line 156
        echo "
        ";
        // line 157
        $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n_search"]) || array_key_exists("form_p_n_search", $context) ? $context["form_p_n_search"] : (function () { throw new RuntimeError('Variable "form_p_n_search" does not exist.', 157, $this->source); })()), "manufacturers", [], "any", false, false, false, 157), 'widget');
        // line 158
        echo "       
        ";
        // line 159
        $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n_search"]) || array_key_exists("form_p_n_search", $context) ? $context["form_p_n_search"] : (function () { throw new RuntimeError('Variable "form_p_n_search" does not exist.', 159, $this->source); })()), "name_detail", [], "any", false, false, false, 159), 'widget');
        // line 160
        echo "
        ";
        // line 161
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 161, $this->source); })()), "flashes", ["id_part_name_search"], "method", false, false, false, 161));
        foreach ($context['_seq'] as $context["_key"] => $context["value_id_part_name"]) {
            echo "  
            ";
            // line 162
            $context["search_id_part_name"] = $context["value_id_part_name"];
            // line 163
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_id_part_name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 164
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n_search"]) || array_key_exists("form_p_n_search", $context) ? $context["form_p_n_search"] : (function () { throw new RuntimeError('Variable "form_p_n_search" does not exist.', 164, $this->source); })()), "id_part_name", [], "any", false, false, false, 164), 'label');
        echo "<br>
        ";
        // line 165
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n_search"]) || array_key_exists("form_p_n_search", $context) ? $context["form_p_n_search"] : (function () { throw new RuntimeError('Variable "form_p_n_search" does not exist.', 165, $this->source); })()), "id_part_name", [], "any", false, false, false, 165), 'widget', ["value" => (isset($context["search_id_part_name"]) || array_key_exists("search_id_part_name", $context) ? $context["search_id_part_name"] : (function () { throw new RuntimeError('Variable "search_id_part_name" does not exist.', 165, $this->source); })())]);
        echo "
        ";
        // line 166
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n_search"]) || array_key_exists("form_p_n_search", $context) ? $context["form_p_n_search"] : (function () { throw new RuntimeError('Variable "form_p_n_search" does not exist.', 166, $this->source); })()), "id_part_name", [], "any", false, false, false, 166), 'errors');
        echo "</th>

        ";
        // line 168
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 168, $this->source); })()), "flashes", ["id_car_brand_search"], "method", false, false, false, 168));
        foreach ($context['_seq'] as $context["_key"] => $context["value_id_car_brand"]) {
            echo "  
            ";
            // line 169
            $context["search_id_car_brand"] = $context["value_id_car_brand"];
            // line 170
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_id_car_brand'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 171
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n_search"]) || array_key_exists("form_p_n_search", $context) ? $context["form_p_n_search"] : (function () { throw new RuntimeError('Variable "form_p_n_search" does not exist.', 171, $this->source); })()), "id_car_brand", [], "any", false, false, false, 171), 'label');
        echo "<br>
        ";
        // line 172
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n_search"]) || array_key_exists("form_p_n_search", $context) ? $context["form_p_n_search"] : (function () { throw new RuntimeError('Variable "form_p_n_search" does not exist.', 172, $this->source); })()), "id_car_brand", [], "any", false, false, false, 172), 'widget', ["value" => (isset($context["search_id_car_brand"]) || array_key_exists("search_id_car_brand", $context) ? $context["search_id_car_brand"] : (function () { throw new RuntimeError('Variable "search_id_car_brand" does not exist.', 172, $this->source); })())]);
        echo "
        ";
        // line 173
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n_search"]) || array_key_exists("form_p_n_search", $context) ? $context["form_p_n_search"] : (function () { throw new RuntimeError('Variable "form_p_n_search" does not exist.', 173, $this->source); })()), "id_car_brand", [], "any", false, false, false, 173), 'errors');
        echo "</th>

        ";
        // line 175
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 175, $this->source); })()), "flashes", ["id_side_search"], "method", false, false, false, 175));
        foreach ($context['_seq'] as $context["_key"] => $context["value_id_side"]) {
            echo "  
            ";
            // line 176
            $context["search_id_side"] = $context["value_id_side"];
            // line 177
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_id_side'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 178
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n_search"]) || array_key_exists("form_p_n_search", $context) ? $context["form_p_n_search"] : (function () { throw new RuntimeError('Variable "form_p_n_search" does not exist.', 178, $this->source); })()), "id_side", [], "any", false, false, false, 178), 'label');
        echo "<br>
        ";
        // line 179
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n_search"]) || array_key_exists("form_p_n_search", $context) ? $context["form_p_n_search"] : (function () { throw new RuntimeError('Variable "form_p_n_search" does not exist.', 179, $this->source); })()), "id_side", [], "any", false, false, false, 179), 'widget', ["value" => (isset($context["search_id_side"]) || array_key_exists("search_id_side", $context) ? $context["search_id_side"] : (function () { throw new RuntimeError('Variable "search_id_side" does not exist.', 179, $this->source); })())]);
        echo "
        ";
        // line 180
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n_search"]) || array_key_exists("form_p_n_search", $context) ? $context["form_p_n_search"] : (function () { throw new RuntimeError('Variable "form_p_n_search" does not exist.', 180, $this->source); })()), "id_side", [], "any", false, false, false, 180), 'errors');
        echo "</th>

        ";
        // line 182
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 182, $this->source); })()), "flashes", ["id_body_search"], "method", false, false, false, 182));
        foreach ($context['_seq'] as $context["_key"] => $context["value_id_body"]) {
            echo "  
            ";
            // line 183
            $context["search_id_body"] = $context["value_id_body"];
            // line 184
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_id_body'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 185
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n_search"]) || array_key_exists("form_p_n_search", $context) ? $context["form_p_n_search"] : (function () { throw new RuntimeError('Variable "form_p_n_search" does not exist.', 185, $this->source); })()), "id_body", [], "any", false, false, false, 185), 'label');
        echo "<br>
        ";
        // line 186
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n_search"]) || array_key_exists("form_p_n_search", $context) ? $context["form_p_n_search"] : (function () { throw new RuntimeError('Variable "form_p_n_search" does not exist.', 186, $this->source); })()), "id_body", [], "any", false, false, false, 186), 'widget', ["value" => (isset($context["search_id_body"]) || array_key_exists("search_id_body", $context) ? $context["search_id_body"] : (function () { throw new RuntimeError('Variable "search_id_body" does not exist.', 186, $this->source); })())]);
        echo "
        ";
        // line 187
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n_search"]) || array_key_exists("form_p_n_search", $context) ? $context["form_p_n_search"] : (function () { throw new RuntimeError('Variable "form_p_n_search" does not exist.', 187, $this->source); })()), "id_body", [], "any", false, false, false, 187), 'errors');
        echo "</th>

        ";
        // line 189
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 189, $this->source); })()), "flashes", ["id_axle_search"], "method", false, false, false, 189));
        foreach ($context['_seq'] as $context["_key"] => $context["value_id_axle"]) {
            echo "  
            ";
            // line 190
            $context["search_id_axle"] = $context["value_id_axle"];
            // line 191
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_id_axle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 192
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n_search"]) || array_key_exists("form_p_n_search", $context) ? $context["form_p_n_search"] : (function () { throw new RuntimeError('Variable "form_p_n_search" does not exist.', 192, $this->source); })()), "id_axle", [], "any", false, false, false, 192), 'label');
        echo "<br>
        ";
        // line 193
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n_search"]) || array_key_exists("form_p_n_search", $context) ? $context["form_p_n_search"] : (function () { throw new RuntimeError('Variable "form_p_n_search" does not exist.', 193, $this->source); })()), "id_axle", [], "any", false, false, false, 193), 'widget', ["value" => (isset($context["search_id_axle"]) || array_key_exists("search_id_axle", $context) ? $context["search_id_axle"] : (function () { throw new RuntimeError('Variable "search_id_axle" does not exist.', 193, $this->source); })())]);
        echo "
        ";
        // line 194
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n_search"]) || array_key_exists("form_p_n_search", $context) ? $context["form_p_n_search"] : (function () { throw new RuntimeError('Variable "form_p_n_search" does not exist.', 194, $this->source); })()), "id_axle", [], "any", false, false, false, 194), 'errors');
        echo "</th>

        ";
        // line 196
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 196, $this->source); })()), "flashes", ["id_in_stock_search"], "method", false, false, false, 196));
        foreach ($context['_seq'] as $context["_key"] => $context["value_id_in_stock"]) {
            echo "  
            ";
            // line 197
            $context["search_id_in_stock"] = $context["value_id_in_stock"];
            // line 198
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_id_in_stock'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 199
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n_search"]) || array_key_exists("form_p_n_search", $context) ? $context["form_p_n_search"] : (function () { throw new RuntimeError('Variable "form_p_n_search" does not exist.', 199, $this->source); })()), "id_in_stock", [], "any", false, false, false, 199), 'label');
        echo "<br>
        ";
        // line 200
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n_search"]) || array_key_exists("form_p_n_search", $context) ? $context["form_p_n_search"] : (function () { throw new RuntimeError('Variable "form_p_n_search" does not exist.', 200, $this->source); })()), "id_in_stock", [], "any", false, false, false, 200), 'widget', ["value" => (isset($context["search_id_in_stock"]) || array_key_exists("search_id_in_stock", $context) ? $context["search_id_in_stock"] : (function () { throw new RuntimeError('Variable "search_id_in_stock" does not exist.', 200, $this->source); })())]);
        echo "
        ";
        // line 201
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n_search"]) || array_key_exists("form_p_n_search", $context) ? $context["form_p_n_search"] : (function () { throw new RuntimeError('Variable "form_p_n_search" does not exist.', 201, $this->source); })()), "id_in_stock", [], "any", false, false, false, 201), 'errors');
        echo "</th>

        <th>";
        // line 203
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_p_n_search"]) || array_key_exists("form_p_n_search", $context) ? $context["form_p_n_search"] : (function () { throw new RuntimeError('Variable "form_p_n_search" does not exist.', 203, $this->source); })()), "button", [], "any", false, false, false, 203), 'widget', ["label" => "Поиск", "attr" => ["class" => "search"]]);
        echo "</th>
        
    ";
        // line 205
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_p_n_search"]) || array_key_exists("form_p_n_search", $context) ? $context["form_p_n_search"] : (function () { throw new RuntimeError('Variable "form_p_n_search" does not exist.', 205, $this->source); })()), 'form_end');
        echo "

    <form action=\"/reset_part_no\" name=\"reset_part_no\">
    <th><button class=\"reset\" type=\"submit\" name=\"reset_part_no\">Сбросить</button></th>
    </form>
    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 213
    public function block_table_thead_tr($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_thead_tr"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_thead_tr"));

        // line 214
        if ((isset($context["arr_part_no"]) || array_key_exists("arr_part_no", $context) ? $context["arr_part_no"] : (function () { throw new RuntimeError('Variable "arr_part_no" does not exist.', 214, $this->source); })())) {
            // line 215
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["arr_part_no"]) || array_key_exists("arr_part_no", $context) ? $context["arr_part_no"] : (function () { throw new RuntimeError('Variable "arr_part_no" does not exist.', 215, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["arr_search_part_no"]) {
                // line 216
                echo "        ";
                if ($context["arr_search_part_no"]) {
                    // line 217
                    echo "            <th>№ Детали</th>
            <th>№ Оригинал</th>
            <th>Производитель</th>
            <th>Описание детали</th>
            <th>Название детали</th>
            <th>Марка</th>
            <th>Сторона</th>
            <th>Кузов</th>
            <th>Перед Зад</th>
            <th>Наличие</th>
            <th>Изменить</th>
            <th>Удаление</th>
        ";
                }
                // line 230
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['arr_search_part_no'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 232
            echo "    <h2>Видите параметры в поиск</h2> 
";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 236
    public function block_tbody($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tbody"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tbody"));

        // line 237
        echo "    ";
        // line 238
        echo "       ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["arr_part_no"]) || array_key_exists("arr_part_no", $context) ? $context["arr_part_no"] : (function () { throw new RuntimeError('Variable "arr_part_no" does not exist.', 238, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["arr_search_part_no"]) {
            // line 239
            echo "            ";
            if ($context["arr_search_part_no"]) {
                // line 240
                echo "               ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["arr_search_part_no"]);
                foreach ($context['_seq'] as $context["_key"] => $context["part_no"]) {
                    // line 241
                    echo "                    <tr>
                        <td>";
                    // line 242
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["part_no"], "getPartNumbers", [], "method", false, false, false, 242), "html", null, true);
                    echo "</td>

                        <td>";
                    // line 244
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["part_no"], "getIdOriginalNumber", [], "method", false, true, false, 244), "getOriginalNumber", [], "method", true, true, false, 244)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["part_no"], "getIdOriginalNumber", [], "method", false, true, false, 244), "getOriginalNumber", [], "method", false, false, false, 244), "")) : ("")), "html", null, true);
                    echo "</td>

                        <td>";
                    // line 246
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["part_no"], "getManufacturers", [], "method", false, false, false, 246), "html", null, true);
                    echo "</td>

                        <td>";
                    // line 248
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["part_no"], "getNameDetail", [], "method", false, false, false, 248), "html", null, true);
                    echo "</td>

                        <td>";
                    // line 250
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["part_no"], "getIdPartName", [], "method", false, true, false, 250), "getPartName", [], "method", true, true, false, 250)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["part_no"], "getIdPartName", [], "method", false, true, false, 250), "getPartName", [], "method", false, false, false, 250), "")) : ("")), "html", null, true);
                    echo "</td>

                        <td>";
                    // line 252
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["part_no"], "getIdCarBrand", [], "method", false, true, false, 252), "getCarBrand", [], "method", true, true, false, 252)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["part_no"], "getIdCarBrand", [], "method", false, true, false, 252), "getCarBrand", [], "method", false, false, false, 252), "")) : ("")), "html", null, true);
                    echo "</td>

                        <td>";
                    // line 254
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["part_no"], "getIdSide", [], "method", false, true, false, 254), "getSide", [], "method", true, true, false, 254)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["part_no"], "getIdSide", [], "method", false, true, false, 254), "getSide", [], "method", false, false, false, 254), "")) : ("")), "html", null, true);
                    echo "</td>

                        <td>";
                    // line 256
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["part_no"], "getIdBody", [], "method", false, true, false, 256), "getBody", [], "method", true, true, false, 256)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["part_no"], "getIdBody", [], "method", false, true, false, 256), "getBody", [], "method", false, false, false, 256), "")) : ("")), "html", null, true);
                    echo "</td>

                        <td>";
                    // line 258
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["part_no"], "getIdAxle", [], "method", false, true, false, 258), "getAxle", [], "method", true, true, false, 258)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["part_no"], "getIdAxle", [], "method", false, true, false, 258), "getAxle", [], "method", false, false, false, 258), "")) : ("")), "html", null, true);
                    echo "</td>

                        <td>";
                    // line 260
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["part_no"], "getIdInStock", [], "method", false, true, false, 260), "getInStock", [], "method", true, true, false, 260)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["part_no"], "getIdInStock", [], "method", false, true, false, 260), "getInStock", [], "method", false, false, false, 260), "")) : ("")), "html", null, true);
                    echo "</td>

                            <form action=\"/edit_part\" name=\"edit_part\" method=\"post\">

                                <td><button class=\"edit\" type=\"submit\" name=\"edit_part\" 
                                    value=\"";
                    // line 265
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["part_no"], "getId", [], "method", false, false, false, 265), "html", null, true);
                    echo "\">Изменить</button></td>
                                
                            </form>
                            <form action=\"/delete_part\" name=\"delete_part\" method=\"post\">

                                <td><button class=\"delete\" type=\"submit\" name=\"delete_part\" 
                                    value=\"";
                    // line 271
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["part_no"], "getId", [], "method", false, false, false, 271), "html", null, true);
                    echo "\">Удалить</button></td>
                                
                            </form>
                    </tr>   
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['part_no'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 276
                echo "            ";
            } else {
                // line 277
                echo "                <h2>Данные не найдены. Видите параметры в поиск</h2>  
            ";
            }
            // line 279
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['arr_search_part_no'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "part_no/part_no.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1052 => 279,  1048 => 277,  1045 => 276,  1034 => 271,  1025 => 265,  1017 => 260,  1012 => 258,  1007 => 256,  1002 => 254,  997 => 252,  992 => 250,  987 => 248,  982 => 246,  977 => 244,  972 => 242,  969 => 241,  964 => 240,  961 => 239,  956 => 238,  954 => 237,  944 => 236,  932 => 232,  925 => 230,  910 => 217,  907 => 216,  902 => 215,  900 => 214,  890 => 213,  873 => 205,  868 => 203,  863 => 201,  859 => 200,  854 => 199,  848 => 198,  846 => 197,  840 => 196,  835 => 194,  831 => 193,  826 => 192,  820 => 191,  818 => 190,  812 => 189,  807 => 187,  803 => 186,  798 => 185,  792 => 184,  790 => 183,  784 => 182,  779 => 180,  775 => 179,  770 => 178,  764 => 177,  762 => 176,  756 => 175,  751 => 173,  747 => 172,  742 => 171,  736 => 170,  734 => 169,  728 => 168,  723 => 166,  719 => 165,  714 => 164,  708 => 163,  706 => 162,  700 => 161,  697 => 160,  695 => 159,  692 => 158,  690 => 157,  687 => 156,  685 => 155,  679 => 153,  670 => 151,  666 => 150,  662 => 149,  657 => 148,  651 => 147,  649 => 146,  643 => 145,  637 => 143,  628 => 141,  624 => 140,  620 => 139,  615 => 138,  609 => 137,  607 => 136,  601 => 135,  598 => 134,  595 => 133,  592 => 132,  589 => 131,  586 => 130,  583 => 129,  580 => 128,  577 => 127,  574 => 126,  568 => 123,  566 => 122,  556 => 121,  543 => 117,  538 => 115,  533 => 113,  529 => 112,  524 => 111,  518 => 110,  516 => 109,  510 => 108,  505 => 106,  501 => 105,  496 => 104,  490 => 103,  488 => 102,  482 => 101,  477 => 99,  473 => 98,  468 => 97,  462 => 96,  460 => 95,  454 => 94,  449 => 92,  445 => 91,  440 => 90,  434 => 89,  432 => 88,  426 => 87,  421 => 85,  417 => 84,  412 => 83,  406 => 82,  404 => 81,  398 => 80,  390 => 75,  386 => 74,  381 => 73,  375 => 72,  373 => 71,  367 => 70,  361 => 68,  352 => 66,  348 => 65,  344 => 64,  339 => 63,  333 => 62,  331 => 61,  325 => 60,  319 => 58,  310 => 56,  306 => 55,  302 => 54,  297 => 53,  291 => 52,  289 => 51,  283 => 50,  277 => 48,  268 => 46,  264 => 45,  260 => 44,  255 => 43,  249 => 42,  247 => 41,  241 => 40,  238 => 39,  236 => 38,  230 => 36,  221 => 34,  217 => 33,  213 => 32,  208 => 31,  202 => 30,  200 => 29,  194 => 28,  191 => 27,  188 => 26,  185 => 25,  182 => 24,  179 => 23,  176 => 22,  173 => 21,  170 => 20,  167 => 19,  164 => 18,  161 => 17,  159 => 16,  154 => 14,  151 => 12,  141 => 11,  122 => 9,  103 => 7,  84 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{title_logo}}{% endblock %}

{% block logo %}{{title_logo}}{% endblock %}

{% block legend %}{{legend}}{% endblock legend%}

{% block legend_search %}{{legend_search}}{% endblock legend_search %}

{% block form_save_edit_sales %}

{#Форма сохранения деталей#}
    {{ form_start(form_p_n_save, {'action': path('save_part_no')}) }}
{#{{ dump(app.flashes()) }}#}
        {#Переменный для вывода данных в форме когда форма не прошла валидацию#}
        {% set save_part_numbers = '' %}
        {% set save_id_original_number = '' %}
        {% set save_manufacturers = '' %}
        {% set save_name_detail = '' %}
        {% set save_id_part_name = '' %}
        {% set save_id_car_brand = '' %}
        {% set save_id_side = '' %}
        {% set save_id_body = '' %}
        {% set save_id_axle = '' %}
        {% set save_id_in_stock = '' %}

        {% for value_part_numbers in app.flashes('part_numbers_save') %}  
            {% set save_part_numbers = value_part_numbers %}
        {% endfor %}
        <th>{{ form_label(form_p_n_save.part_numbers) }}<br>
        {{ form_widget(form_p_n_save.part_numbers, {value : save_part_numbers}) }}<br>
        {% for message_save in app.flashes('children[part_numbers].data_save') %}
            {{ message_save }}
        {% endfor %}
        {{ form_errors(form_p_n_save.part_numbers) }}</th>

        {% do form_widget(form_p_n_save.id_original_number) %}

        {% for value_original_number in app.flashes('original_number_save') %}  
            {% set save_id_original_number = value_original_number %}
        {% endfor %}
        <th>{{ form_label(form_original_number_save.original_number) }}<br>
        {{ form_widget(form_original_number_save.original_number, {value : save_id_original_number}) }}<br>
        {% for message_save in app.flashes('children[original_number].data_save') %}
            {{ message_save }}
        {% endfor %}
        {{ form_errors(form_original_number_save.original_number) }}</th>

        {% for value_manufacturers in app.flashes('manufacturers_save') %}  
            {% set save_manufacturers = value_manufacturers %}
        {% endfor %}
        <th>{{ form_label(form_p_n_save.manufacturers) }}<br>
        {{ form_widget(form_p_n_save.manufacturers, {value : save_manufacturers}) }}<br>
        {% for message_save in app.flashes('children[manufacturers].data_save') %}
            {{ message_save }}
        {% endfor %}
        {{ form_errors(form_p_n_save.manufacturers) }}</th>

        {% for value_name_detail in app.flashes('name_detail_save') %}  
            {% set save_name_detail = value_name_detail %}
        {% endfor %}
        <th>{{ form_label(form_p_n_save.name_detail) }}<br>
        {{ form_widget(form_p_n_save.name_detail, {value : save_name_detail}) }}<br>    
        {% for message_save in app.flashes('children[name_detail].data_save') %}
            {{ message_save }}
        {% endfor %}
        {{ form_errors(form_p_n_save.name_detail) }}</th>

        {% for value_id_part_name in app.flashes('id_part_name_save') %}  
            {% set save_id_part_name = value_id_part_name %}
        {% endfor %}
        <th>{{ form_label(form_p_n_save.id_part_name) }}<br>
        {{ form_widget(form_p_n_save.id_part_name, {value : save_id_part_name}) }}
        {{ form_errors(form_p_n_save.id_part_name) }}</th>
                                  
    </tr>
    <tr>

        {% for value_id_car_brand in app.flashes('id_car_brand_save') %}  
            {% set save_id_car_brand = value_id_car_brand %}
        {% endfor %}
        <th>{{ form_label(form_p_n_save.id_car_brand) }}<br>
        {{ form_widget(form_p_n_save.id_car_brand, {value : save_id_car_brand}) }}
        {{ form_errors(form_p_n_save.id_car_brand) }}</th>

        {% for value_id_side in app.flashes('id_side_save') %}  
            {% set save_id_side = value_id_side %}
        {% endfor %}
        <th>{{ form_label(form_p_n_save.id_side) }}<br>
        {{ form_widget(form_p_n_save.id_side, {value : save_id_side}) }}
        {{ form_errors(form_p_n_save.id_side) }}</th>

        {% for value_id_body in app.flashes('id_body_save') %}  
            {% set save_id_body = value_id_body %}
        {% endfor %}
        <th>{{ form_label(form_p_n_save.id_body) }}<br>
        {{ form_widget(form_p_n_save.id_body, {value : save_id_body}) }}
        {{ form_errors(form_p_n_save.id_body) }}</th>

        {% for value_id_axle in app.flashes('id_axle_save') %}  
            {% set save_id_axle = value_id_axle %}
        {% endfor %}
        <th>{{ form_label(form_p_n_save.id_axle) }}<br>
        {{ form_widget(form_p_n_save.id_axle, {value : save_id_axle}) }}
        {{ form_errors(form_p_n_save.id_axle) }}</th>

        {% for value_id_in_stock in app.flashes('id_in_stock_save') %}  
            {% set save_id_in_stock = value_id_in_stock %}
        {% endfor %}
        <th>{{ form_label(form_p_n_save.id_in_stock) }}<br>
        {{ form_widget(form_p_n_save.id_in_stock, {value : save_id_in_stock}) }}
        {{ form_errors(form_p_n_save.id_in_stock) }}</th>

        <th>{{ form_widget(form_p_n_save.button, { 'label': 'Сохранить', 'attr': {'class': 'save'} }) }}</th>
        
   {{ form_end(form_p_n_save) }}

{% endblock form_save_edit_sales %}

{% block form_search %}
    {#Форма поиска #}
    {{ form_start(form_p_n_search, { attr: {novalidate: 'novalidate'}, 'action': path('part_no')}) }}

        {#Переменный для вывода данных в форме когда форма не прошла валидацию#}
        {% set search_part_numbers = '' %}
        {% set search_id_original_number = '' %}
        {% set search_id_part_name = '' %}
        {% set search_id_car_brand = '' %}
        {% set search_id_side = '' %}
        {% set search_id_body = '' %}
        {% set search_id_axle = '' %}
        {% set search_id_in_stock = '' %}

        {% for value_part_numbers in app.flashes('part_numbers_search') %}  
            {% set search_part_numbers = value_part_numbers %}
        {% endfor %}
        <th>{{ form_label(form_p_n_search.part_numbers) }}<br>
        {{ form_widget(form_p_n_search.part_numbers, {value : search_part_numbers}) }}<br>
        {% for message in app.flashes('children[part_numbers].data_search') %}
            {{ message }}
        {% endfor %}
        {{ form_errors(form_p_n_search.part_numbers) }}</th>

        {% for value_original_number in app.flashes('original_number_search') %}  
            {% set search_id_original_number = value_original_number %}
        {% endfor %}
        <th>{{ form_label(form_original_number_search.original_number) }}<br>
        {{ form_widget(form_original_number_search.original_number, {value : search_id_original_number}) }}<br>
        {% for message_search in app.flashes('children[original_number].data_search') %}
            {{ message_search }}
        {% endfor %}
        {{ form_errors(form_original_number_search.original_number) }}</th>

        {% do form_widget(form_p_n_search.id_original_number) %}

        {% do form_widget(form_p_n_search.manufacturers) %}
       
        {% do form_widget(form_p_n_search.name_detail) %}

        {% for value_id_part_name in app.flashes('id_part_name_search') %}  
            {% set search_id_part_name = value_id_part_name %}
        {% endfor %}
        <th>{{ form_label(form_p_n_search.id_part_name) }}<br>
        {{ form_widget(form_p_n_search.id_part_name, {value : search_id_part_name}) }}
        {{ form_errors(form_p_n_search.id_part_name) }}</th>

        {% for value_id_car_brand in app.flashes('id_car_brand_search') %}  
            {% set search_id_car_brand = value_id_car_brand %}
        {% endfor %}
        <th>{{ form_label(form_p_n_search.id_car_brand) }}<br>
        {{ form_widget(form_p_n_search.id_car_brand, {value : search_id_car_brand}) }}
        {{ form_errors(form_p_n_search.id_car_brand) }}</th>

        {% for value_id_side in app.flashes('id_side_search') %}  
            {% set search_id_side = value_id_side %}
        {% endfor %}
        <th>{{ form_label(form_p_n_search.id_side) }}<br>
        {{ form_widget(form_p_n_search.id_side, {value : search_id_side}) }}
        {{ form_errors(form_p_n_search.id_side) }}</th>

        {% for value_id_body in app.flashes('id_body_search') %}  
            {% set search_id_body = value_id_body %}
        {% endfor %}
        <th>{{ form_label(form_p_n_search.id_body) }}<br>
        {{ form_widget(form_p_n_search.id_body, {value : search_id_body}) }}
        {{ form_errors(form_p_n_search.id_body) }}</th>

        {% for value_id_axle in app.flashes('id_axle_search') %}  
            {% set search_id_axle = value_id_axle %}
        {% endfor %}
        <th>{{ form_label(form_p_n_search.id_axle) }}<br>
        {{ form_widget(form_p_n_search.id_axle, {value : search_id_axle}) }}
        {{ form_errors(form_p_n_search.id_axle) }}</th>

        {% for value_id_in_stock in app.flashes('id_in_stock_search') %}  
            {% set search_id_in_stock = value_id_in_stock %}
        {% endfor %}
        <th>{{ form_label(form_p_n_search.id_in_stock) }}<br>
        {{ form_widget(form_p_n_search.id_in_stock, {value : search_id_in_stock}) }}
        {{ form_errors(form_p_n_search.id_in_stock) }}</th>

        <th>{{ form_widget(form_p_n_search.button, { 'label': 'Поиск', 'attr': {'class': 'search'} }) }}</th>
        
    {{ form_end(form_p_n_search) }}

    <form action=\"/reset_part_no\" name=\"reset_part_no\">
    <th><button class=\"reset\" type=\"submit\" name=\"reset_part_no\">Сбросить</button></th>
    </form>
    
{% endblock form_search %}

{% block table_thead_tr %}
{% if arr_part_no %}
    {% for arr_search_part_no in arr_part_no %}
        {% if arr_search_part_no %}
            <th>№ Детали</th>
            <th>№ Оригинал</th>
            <th>Производитель</th>
            <th>Описание детали</th>
            <th>Название детали</th>
            <th>Марка</th>
            <th>Сторона</th>
            <th>Кузов</th>
            <th>Перед Зад</th>
            <th>Наличие</th>
            <th>Изменить</th>
            <th>Удаление</th>
        {% endif %}
    {% endfor %}
{% else %}
    <h2>Видите параметры в поиск</h2> 
{% endif %}
{% endblock table_thead_tr %}

{% block tbody %}
    {#выводит таблицу по поиску#}
       {% for arr_search_part_no in arr_part_no %}
            {% if arr_search_part_no %}
               {% for part_no in arr_search_part_no %}
                    <tr>
                        <td>{{ part_no.getPartNumbers() }}</td>

                        <td>{{ part_no.getIdOriginalNumber().getOriginalNumber()|default('') }}</td>

                        <td>{{ part_no.getManufacturers() }}</td>

                        <td>{{ part_no.getNameDetail() }}</td>

                        <td>{{ part_no.getIdPartName().getPartName()|default('') }}</td>

                        <td>{{ part_no.getIdCarBrand().getCarBrand()|default('') }}</td>

                        <td>{{ part_no.getIdSide().getSide()|default('') }}</td>

                        <td>{{ part_no.getIdBody().getBody()|default('') }}</td>

                        <td>{{ part_no.getIdAxle().getAxle()|default('') }}</td>

                        <td>{{ part_no.getIdInStock().getInStock()|default('') }}</td>

                            <form action=\"/edit_part\" name=\"edit_part\" method=\"post\">

                                <td><button class=\"edit\" type=\"submit\" name=\"edit_part\" 
                                    value=\"{{ part_no.getId() }}\">Изменить</button></td>
                                
                            </form>
                            <form action=\"/delete_part\" name=\"delete_part\" method=\"post\">

                                <td><button class=\"delete\" type=\"submit\" name=\"delete_part\" 
                                    value=\"{{ part_no.getId() }}\">Удалить</button></td>
                                
                            </form>
                    </tr>   
                {% endfor %}
            {% else %}
                <h2>Данные не найдены. Видите параметры в поиск</h2>  
            {% endif %}
        {% endfor %}
{% endblock tbody %}", "part_no/part_no.html.twig", "/var/www/templates/part_no/part_no.html.twig");
    }
}
