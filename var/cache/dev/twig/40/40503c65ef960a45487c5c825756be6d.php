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

/* price/price.html.twig */
class __TwigTemplate_b8de75ceab45825ffa800627016304db extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "price/price.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "price/price.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "price/price.html.twig", 1);
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 13
    public function block_form_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_search"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_search"));

        // line 14
        echo "    ";
        // line 15
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_price_search"]) || array_key_exists("form_price_search", $context) ? $context["form_price_search"] : (function () { throw new RuntimeError('Variable "form_price_search" does not exist.', 15, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"], "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("price")]);
        echo "
";
        // line 17
        echo "        ";
        // line 18
        echo "        ";
        $context["search_part_numbers"] = "";
        // line 19
        echo "        ";
        $context["search_manufacturers"] = "";
        // line 20
        echo "        ";
        $context["search_id_part_name"] = "";
        // line 21
        echo "        ";
        $context["search_id_car_brand"] = "";
        // line 22
        echo "        ";
        $context["search_id_side"] = "";
        // line 23
        echo "        ";
        $context["search_id_body"] = "";
        // line 24
        echo "        ";
        $context["search_id_axle"] = "";
        // line 25
        echo "        ";
        $context["search_id_in_stock"] = "";
        // line 26
        echo "
        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "flashes", ["part_numbers_search"], "method", false, false, false, 27));
        foreach ($context['_seq'] as $context["_key"] => $context["value_part_numbers"]) {
            echo "  
            ";
            // line 28
            $context["search_part_numbers"] = $context["value_part_numbers"];
            // line 29
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_part_numbers'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_price_search"]) || array_key_exists("form_price_search", $context) ? $context["form_price_search"] : (function () { throw new RuntimeError('Variable "form_price_search" does not exist.', 30, $this->source); })()), "part_numbers", [], "any", false, false, false, 30), 'label');
        echo "<br>
        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_price_search"]) || array_key_exists("form_price_search", $context) ? $context["form_price_search"] : (function () { throw new RuntimeError('Variable "form_price_search" does not exist.', 31, $this->source); })()), "part_numbers", [], "any", false, false, false, 31), 'widget', ["value" => (isset($context["search_part_numbers"]) || array_key_exists("search_part_numbers", $context) ? $context["search_part_numbers"] : (function () { throw new RuntimeError('Variable "search_part_numbers" does not exist.', 31, $this->source); })())]);
        echo "<br>
        ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "flashes", ["children[part_numbers].data_search"], "method", false, false, false, 32));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 33
            echo "            ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_price_search"]) || array_key_exists("form_price_search", $context) ? $context["form_price_search"] : (function () { throw new RuntimeError('Variable "form_price_search" does not exist.', 35, $this->source); })()), "part_numbers", [], "any", false, false, false, 35), 'errors');
        echo "</th>

        ";
        // line 37
        $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_price_search"]) || array_key_exists("form_price_search", $context) ? $context["form_price_search"] : (function () { throw new RuntimeError('Variable "form_price_search" does not exist.', 37, $this->source); })()), "id_original_number", [], "any", false, false, false, 37), 'widget');
        // line 38
        echo "
        ";
        // line 39
        $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_price_search"]) || array_key_exists("form_price_search", $context) ? $context["form_price_search"] : (function () { throw new RuntimeError('Variable "form_price_search" does not exist.', 39, $this->source); })()), "manufacturers", [], "any", false, false, false, 39), 'widget');
        // line 40
        echo "       
        ";
        // line 41
        $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_price_search"]) || array_key_exists("form_price_search", $context) ? $context["form_price_search"] : (function () { throw new RuntimeError('Variable "form_price_search" does not exist.', 41, $this->source); })()), "name_detail", [], "any", false, false, false, 41), 'widget');
        // line 42
        echo "
        ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "flashes", ["id_part_name_search"], "method", false, false, false, 43));
        foreach ($context['_seq'] as $context["_key"] => $context["value_id_part_name"]) {
            echo "  
            ";
            // line 44
            $context["search_id_part_name"] = $context["value_id_part_name"];
            // line 45
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_id_part_name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_price_search"]) || array_key_exists("form_price_search", $context) ? $context["form_price_search"] : (function () { throw new RuntimeError('Variable "form_price_search" does not exist.', 46, $this->source); })()), "id_part_name", [], "any", false, false, false, 46), 'label');
        echo "<br>
        ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_price_search"]) || array_key_exists("form_price_search", $context) ? $context["form_price_search"] : (function () { throw new RuntimeError('Variable "form_price_search" does not exist.', 47, $this->source); })()), "id_part_name", [], "any", false, false, false, 47), 'widget', ["value" => (isset($context["search_id_part_name"]) || array_key_exists("search_id_part_name", $context) ? $context["search_id_part_name"] : (function () { throw new RuntimeError('Variable "search_id_part_name" does not exist.', 47, $this->source); })())]);
        echo "
        ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_price_search"]) || array_key_exists("form_price_search", $context) ? $context["form_price_search"] : (function () { throw new RuntimeError('Variable "form_price_search" does not exist.', 48, $this->source); })()), "id_part_name", [], "any", false, false, false, 48), 'errors');
        echo "</th>

        ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "flashes", ["id_car_brand_search"], "method", false, false, false, 50));
        foreach ($context['_seq'] as $context["_key"] => $context["value_id_car_brand"]) {
            echo "  
            ";
            // line 51
            $context["search_id_car_brand"] = $context["value_id_car_brand"];
            // line 52
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_id_car_brand'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_price_search"]) || array_key_exists("form_price_search", $context) ? $context["form_price_search"] : (function () { throw new RuntimeError('Variable "form_price_search" does not exist.', 53, $this->source); })()), "id_car_brand", [], "any", false, false, false, 53), 'label');
        echo "<br>
        ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_price_search"]) || array_key_exists("form_price_search", $context) ? $context["form_price_search"] : (function () { throw new RuntimeError('Variable "form_price_search" does not exist.', 54, $this->source); })()), "id_car_brand", [], "any", false, false, false, 54), 'widget', ["value" => (isset($context["search_id_car_brand"]) || array_key_exists("search_id_car_brand", $context) ? $context["search_id_car_brand"] : (function () { throw new RuntimeError('Variable "search_id_car_brand" does not exist.', 54, $this->source); })())]);
        echo "
        ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_price_search"]) || array_key_exists("form_price_search", $context) ? $context["form_price_search"] : (function () { throw new RuntimeError('Variable "form_price_search" does not exist.', 55, $this->source); })()), "id_car_brand", [], "any", false, false, false, 55), 'errors');
        echo "</th>

        ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "flashes", ["id_side_search"], "method", false, false, false, 57));
        foreach ($context['_seq'] as $context["_key"] => $context["value_id_side"]) {
            echo "  
            ";
            // line 58
            $context["search_id_side"] = $context["value_id_side"];
            // line 59
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_id_side'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_price_search"]) || array_key_exists("form_price_search", $context) ? $context["form_price_search"] : (function () { throw new RuntimeError('Variable "form_price_search" does not exist.', 60, $this->source); })()), "id_side", [], "any", false, false, false, 60), 'label');
        echo "<br>
        ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_price_search"]) || array_key_exists("form_price_search", $context) ? $context["form_price_search"] : (function () { throw new RuntimeError('Variable "form_price_search" does not exist.', 61, $this->source); })()), "id_side", [], "any", false, false, false, 61), 'widget', ["value" => (isset($context["search_id_side"]) || array_key_exists("search_id_side", $context) ? $context["search_id_side"] : (function () { throw new RuntimeError('Variable "search_id_side" does not exist.', 61, $this->source); })())]);
        echo "
        ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_price_search"]) || array_key_exists("form_price_search", $context) ? $context["form_price_search"] : (function () { throw new RuntimeError('Variable "form_price_search" does not exist.', 62, $this->source); })()), "id_side", [], "any", false, false, false, 62), 'errors');
        echo "</th>

        ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 64, $this->source); })()), "flashes", ["id_body_search"], "method", false, false, false, 64));
        foreach ($context['_seq'] as $context["_key"] => $context["value_id_body"]) {
            echo "  
            ";
            // line 65
            $context["search_id_body"] = $context["value_id_body"];
            // line 66
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_id_body'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_price_search"]) || array_key_exists("form_price_search", $context) ? $context["form_price_search"] : (function () { throw new RuntimeError('Variable "form_price_search" does not exist.', 67, $this->source); })()), "id_body", [], "any", false, false, false, 67), 'label');
        echo "<br>
        ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_price_search"]) || array_key_exists("form_price_search", $context) ? $context["form_price_search"] : (function () { throw new RuntimeError('Variable "form_price_search" does not exist.', 68, $this->source); })()), "id_body", [], "any", false, false, false, 68), 'widget', ["value" => (isset($context["search_id_body"]) || array_key_exists("search_id_body", $context) ? $context["search_id_body"] : (function () { throw new RuntimeError('Variable "search_id_body" does not exist.', 68, $this->source); })())]);
        echo "
        ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_price_search"]) || array_key_exists("form_price_search", $context) ? $context["form_price_search"] : (function () { throw new RuntimeError('Variable "form_price_search" does not exist.', 69, $this->source); })()), "id_body", [], "any", false, false, false, 69), 'errors');
        echo "</th>

        ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 71, $this->source); })()), "flashes", ["id_axle_search"], "method", false, false, false, 71));
        foreach ($context['_seq'] as $context["_key"] => $context["value_id_axle"]) {
            echo "  
            ";
            // line 72
            $context["search_id_axle"] = $context["value_id_axle"];
            // line 73
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_id_axle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "        <th>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_price_search"]) || array_key_exists("form_price_search", $context) ? $context["form_price_search"] : (function () { throw new RuntimeError('Variable "form_price_search" does not exist.', 74, $this->source); })()), "id_axle", [], "any", false, false, false, 74), 'label');
        echo "<br>
        ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_price_search"]) || array_key_exists("form_price_search", $context) ? $context["form_price_search"] : (function () { throw new RuntimeError('Variable "form_price_search" does not exist.', 75, $this->source); })()), "id_axle", [], "any", false, false, false, 75), 'widget', ["value" => (isset($context["search_id_axle"]) || array_key_exists("search_id_axle", $context) ? $context["search_id_axle"] : (function () { throw new RuntimeError('Variable "search_id_axle" does not exist.', 75, $this->source); })())]);
        echo "
        ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_price_search"]) || array_key_exists("form_price_search", $context) ? $context["form_price_search"] : (function () { throw new RuntimeError('Variable "form_price_search" does not exist.', 76, $this->source); })()), "id_axle", [], "any", false, false, false, 76), 'errors');
        echo "</th>

        ";
        // line 78
        $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_price_search"]) || array_key_exists("form_price_search", $context) ? $context["form_price_search"] : (function () { throw new RuntimeError('Variable "form_price_search" does not exist.', 78, $this->source); })()), "id_in_stock", [], "any", false, false, false, 78), 'widget');
        // line 79
        echo "
        <th>";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_price_search"]) || array_key_exists("form_price_search", $context) ? $context["form_price_search"] : (function () { throw new RuntimeError('Variable "form_price_search" does not exist.', 80, $this->source); })()), "button", [], "any", false, false, false, 80), 'widget', ["label" => "Поиск", "attr" => ["class" => "search"]]);
        echo "</th>
        
    ";
        // line 82
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_price_search"]) || array_key_exists("form_price_search", $context) ? $context["form_price_search"] : (function () { throw new RuntimeError('Variable "form_price_search" does not exist.', 82, $this->source); })()), 'form_end');
        echo "

    <form action=\"/reset_price\" name=\"reset_price\">
    <th><button class=\"reset\" type=\"submit\" name=\"reset_price\">Сбросить</button></th>
    </form>
    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 90
    public function block_table_thead_tr($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_thead_tr"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_thead_tr"));

        // line 91
        if ((isset($context["arr_price"]) || array_key_exists("arr_price", $context) ? $context["arr_price"] : (function () { throw new RuntimeError('Variable "arr_price" does not exist.', 91, $this->source); })())) {
            // line 92
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["arr_price"]) || array_key_exists("arr_price", $context) ? $context["arr_price"] : (function () { throw new RuntimeError('Variable "arr_price" does not exist.', 92, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["arr_search_price"]) {
                // line 93
                echo "        ";
                if ($context["arr_search_price"]) {
                    // line 94
                    echo "        
            <th>№ Детали</th>
            <th>№ Оригинал</th>
            <th>Производитель</th>
            <th>Описание детали</th>
            <th>Название детали</th>
            <th>Марка</th>
            <th>Сторона</th>
            <th>Кузов</th>
            <th>Перед Зад</th>
            <th>Кол-во</th>
            <th>Цена шт</th>
            <th>Цена общая</th>
            <th>Продать</th>
        ";
                }
                // line 109
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['arr_search_price'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 111
            echo "    <h2>Видите параметры в поиск</h2> 
";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 115
    public function block_tbody($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tbody"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tbody"));

        // line 116
        echo "    ";
        // line 117
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["arr_price"]) || array_key_exists("arr_price", $context) ? $context["arr_price"] : (function () { throw new RuntimeError('Variable "arr_price" does not exist.', 117, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["arr_search_price"]) {
            // line 118
            echo "            ";
            if ($context["arr_search_price"]) {
                // line 119
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["arr_search_price"]);
                foreach ($context['_seq'] as $context["_key"] => $context["price"]) {
                    // line 120
                    echo "                   ";
                    if ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["price"], "getIdDetails", [], "method", false, false, false, 120), "getIdInStock", [], "method", false, false, false, 120), "getId", [], "method", false, false, false, 120) == 1) && (twig_get_attribute($this->env, $this->source,                     // line 121
$context["price"], "getSales", [], "method", false, false, false, 121) == 1)) && (twig_get_attribute($this->env, $this->source,                     // line 122
$context["price"], "getRefund", [], "method", false, false, false, 122) == 1))) {
                        // line 123
                        echo "                        <tr>
                            <td>";
                        // line 124
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["price"], "getIdDetails", [], "method", false, false, false, 124), "getPartNumbers", [], "method", false, false, false, 124), "html", null, true);
                        echo "</td>

                            <td>";
                        // line 126
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["price"], "getIdDetails", [], "method", false, false, false, 126), "getIdOriginalNumber", [], "method", false, false, false, 126), "getOriginalNumber", [], "method", false, false, false, 126), "html", null, true);
                        echo "</td>

                            <td>";
                        // line 128
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["price"], "getIdManufacturer", [], "method", false, false, false, 128), "getManufacturers", [], "method", false, false, false, 128), "html", null, true);
                        echo "</td>

                            <td>";
                        // line 130
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["price"], "getIdDetails", [], "method", false, false, false, 130), "getNameDetail", [], "method", false, false, false, 130), "html", null, true);
                        echo "</td>

                            <td>";
                        // line 132
                        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["price"], "getIdDetails", [], "method", false, true, false, 132), "getIdPartName", [], "method", false, true, false, 132), "getPartName", [], "method", true, true, false, 132)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["price"], "getIdDetails", [], "method", false, true, false, 132), "getIdPartName", [], "method", false, true, false, 132), "getPartName", [], "method", false, false, false, 132), "")) : ("")), "html", null, true);
                        echo "</td>

                            <td>";
                        // line 134
                        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["price"], "getIdDetails", [], "method", false, true, false, 134), "getIdCarBrand", [], "method", false, true, false, 134), "getCarBrand", [], "method", true, true, false, 134)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["price"], "getIdDetails", [], "method", false, true, false, 134), "getIdCarBrand", [], "method", false, true, false, 134), "getCarBrand", [], "method", false, false, false, 134), "")) : ("")), "html", null, true);
                        echo "</td>

                            <td>";
                        // line 136
                        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["price"], "getIdDetails", [], "method", false, true, false, 136), "getIdSide", [], "method", false, true, false, 136), "getSide", [], "method", true, true, false, 136)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["price"], "getIdDetails", [], "method", false, true, false, 136), "getIdSide", [], "method", false, true, false, 136), "getSide", [], "method", false, false, false, 136), "")) : ("")), "html", null, true);
                        echo "</td>

                            <td>";
                        // line 138
                        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["price"], "getIdDetails", [], "method", false, true, false, 138), "getIdBody", [], "method", false, true, false, 138), "getBody", [], "method", true, true, false, 138)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["price"], "getIdDetails", [], "method", false, true, false, 138), "getIdBody", [], "method", false, true, false, 138), "getBody", [], "method", false, false, false, 138), "")) : ("")), "html", null, true);
                        echo "</td>

                            <td>";
                        // line 140
                        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["price"], "getIdDetails", [], "method", false, true, false, 140), "getIdAxle", [], "method", false, true, false, 140), "getAxle", [], "method", true, true, false, 140)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["price"], "getIdDetails", [], "method", false, true, false, 140), "getIdAxle", [], "method", false, true, false, 140), "getAxle", [], "method", false, false, false, 140), "")) : ("")), "html", null, true);
                        echo "</td>

                            <td>";
                        // line 142
                        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["price"], "getQuantity", [], "method", false, false, false, 142) - twig_get_attribute($this->env, $this->source, $context["price"], "getQuantitySold", [], "method", false, false, false, 142)), "html", null, true);
                        echo "</td>

                            <td>";
                        // line 144
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["price"], "getPrice", [], "method", false, false, false, 144) / 100) / twig_get_attribute($this->env, $this->source,                         // line 145
$context["price"], "getQuantity", [], "method", false, false, false, 145)), 2, ".", ""), "html", null, true);
                        echo "</td>

                            <td>";
                        // line 147
                        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["price"], "getPrice", [], "method", false, false, false, 147) / 100) - (((twig_get_attribute($this->env, $this->source, $context["price"], "getPrice", [], "method", false, false, false, 147) / 100) / twig_get_attribute($this->env, $this->source,                         // line 148
$context["price"], "getQuantity", [], "method", false, false, false, 148)) * twig_get_attribute($this->env, $this->source, $context["price"], "getQuantitySold", [], "method", false, false, false, 148))), "html", null, true);
                        echo "</td>

                            <form action=\"/sold_price\" name=\"sold_price\" method=\"post\">

                                    <td><button class=\"sales\" type=\"submit\" name=\"sold_price\" value=\"";
                        // line 152
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["price"], "getId", [], "method", false, false, false, 152), "html", null, true);
                        echo "\">Продать</button></td>
                                    
                            </form>

                                ";
                        // line 159
                        echo "                                    ";
                        // line 193
                        echo "                        </tr> 
                    ";
                    }
                    // line 195
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['price'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 196
                echo "            ";
            } else {
                // line 197
                echo "                <h2>Данные не найдены. Видите параметры в поиск</h2>  
            ";
            }
            // line 199
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['arr_search_price'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "price/price.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  607 => 199,  603 => 197,  600 => 196,  594 => 195,  590 => 193,  588 => 159,  581 => 152,  574 => 148,  573 => 147,  568 => 145,  567 => 144,  562 => 142,  557 => 140,  552 => 138,  547 => 136,  542 => 134,  537 => 132,  532 => 130,  527 => 128,  522 => 126,  517 => 124,  514 => 123,  512 => 122,  511 => 121,  509 => 120,  504 => 119,  501 => 118,  496 => 117,  494 => 116,  484 => 115,  472 => 111,  465 => 109,  448 => 94,  445 => 93,  440 => 92,  438 => 91,  428 => 90,  411 => 82,  406 => 80,  403 => 79,  401 => 78,  396 => 76,  392 => 75,  387 => 74,  381 => 73,  379 => 72,  373 => 71,  368 => 69,  364 => 68,  359 => 67,  353 => 66,  351 => 65,  345 => 64,  340 => 62,  336 => 61,  331 => 60,  325 => 59,  323 => 58,  317 => 57,  312 => 55,  308 => 54,  303 => 53,  297 => 52,  295 => 51,  289 => 50,  284 => 48,  280 => 47,  275 => 46,  269 => 45,  267 => 44,  261 => 43,  258 => 42,  256 => 41,  253 => 40,  251 => 39,  248 => 38,  246 => 37,  240 => 35,  231 => 33,  227 => 32,  223 => 31,  218 => 30,  212 => 29,  210 => 28,  204 => 27,  201 => 26,  198 => 25,  195 => 24,  192 => 23,  189 => 22,  186 => 21,  183 => 20,  180 => 19,  177 => 18,  175 => 17,  170 => 15,  168 => 14,  158 => 13,  140 => 11,  121 => 9,  103 => 7,  84 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{title_logo}}{% endblock %}

{% block logo %}{{title_logo}}{% endblock %}

{% block legend %}{% endblock legend%}

{% block legend_search %}{{legend_search}}{% endblock legend_search %}

{% block form_save_edit_sales %}{% endblock form_save_edit_sales %}

{% block form_search %}
    {#Форма поиска деталей#}
  {{ form_start(form_price_search, { attr: {novalidate: 'novalidate'}, 'action': path('price')}) }}
{#{{ dump(app.flashes()) }}#}
        {#Переменный для вывода данных в форме когда форма не прошла валидацию#}
        {% set search_part_numbers = '' %}
        {% set search_manufacturers = '' %}
        {% set search_id_part_name = '' %}
        {% set search_id_car_brand = '' %}
        {% set search_id_side = '' %}
        {% set search_id_body = '' %}
        {% set search_id_axle = '' %}
        {% set search_id_in_stock = '' %}

        {% for value_part_numbers in app.flashes('part_numbers_search') %}  
            {% set search_part_numbers = value_part_numbers %}
        {% endfor %}
        <th>{{ form_label(form_price_search.part_numbers) }}<br>
        {{ form_widget(form_price_search.part_numbers, {value : search_part_numbers}) }}<br>
        {% for message in app.flashes('children[part_numbers].data_search') %}
            {{ message }}
        {% endfor %}
        {{ form_errors(form_price_search.part_numbers) }}</th>

        {% do form_widget(form_price_search.id_original_number) %}

        {% do form_widget(form_price_search.manufacturers) %}
       
        {% do form_widget(form_price_search.name_detail) %}

        {% for value_id_part_name in app.flashes('id_part_name_search') %}  
            {% set search_id_part_name = value_id_part_name %}
        {% endfor %}
        <th>{{ form_label(form_price_search.id_part_name) }}<br>
        {{ form_widget(form_price_search.id_part_name, {value : search_id_part_name}) }}
        {{ form_errors(form_price_search.id_part_name) }}</th>

        {% for value_id_car_brand in app.flashes('id_car_brand_search') %}  
            {% set search_id_car_brand = value_id_car_brand %}
        {% endfor %}
        <th>{{ form_label(form_price_search.id_car_brand) }}<br>
        {{ form_widget(form_price_search.id_car_brand, {value : search_id_car_brand}) }}
        {{ form_errors(form_price_search.id_car_brand) }}</th>

        {% for value_id_side in app.flashes('id_side_search') %}  
            {% set search_id_side = value_id_side %}
        {% endfor %}
        <th>{{ form_label(form_price_search.id_side) }}<br>
        {{ form_widget(form_price_search.id_side, {value : search_id_side}) }}
        {{ form_errors(form_price_search.id_side) }}</th>

        {% for value_id_body in app.flashes('id_body_search') %}  
            {% set search_id_body = value_id_body %}
        {% endfor %}
        <th>{{ form_label(form_price_search.id_body) }}<br>
        {{ form_widget(form_price_search.id_body, {value : search_id_body}) }}
        {{ form_errors(form_price_search.id_body) }}</th>

        {% for value_id_axle in app.flashes('id_axle_search') %}  
            {% set search_id_axle = value_id_axle %}
        {% endfor %}
        <th>{{ form_label(form_price_search.id_axle) }}<br>
        {{ form_widget(form_price_search.id_axle, {value : search_id_axle}) }}
        {{ form_errors(form_price_search.id_axle) }}</th>

        {% do form_widget(form_price_search.id_in_stock) %}

        <th>{{ form_widget(form_price_search.button, { 'label': 'Поиск', 'attr': {'class': 'search'} }) }}</th>
        
    {{ form_end(form_price_search) }}

    <form action=\"/reset_price\" name=\"reset_price\">
    <th><button class=\"reset\" type=\"submit\" name=\"reset_price\">Сбросить</button></th>
    </form>
    
{% endblock form_search %}

{% block table_thead_tr %}
{% if arr_price %}
    {% for arr_search_price in arr_price %}
        {% if arr_search_price %}
        
            <th>№ Детали</th>
            <th>№ Оригинал</th>
            <th>Производитель</th>
            <th>Описание детали</th>
            <th>Название детали</th>
            <th>Марка</th>
            <th>Сторона</th>
            <th>Кузов</th>
            <th>Перед Зад</th>
            <th>Кол-во</th>
            <th>Цена шт</th>
            <th>Цена общая</th>
            <th>Продать</th>
        {% endif %}
    {% endfor %}
{% else %}
    <h2>Видите параметры в поиск</h2> 
{% endif %}
{% endblock table_thead_tr %}

{% block tbody %}
    {#выводит таблицу по поиску#}
      {% for arr_search_price in arr_price %}
            {% if arr_search_price %}
                {% for price in arr_search_price %}
                   {% if price.getIdDetails().getIdInStock().getId() == 1 
                        and price.getSales() == 1 
                        and price.getRefund() == 1 %}
                        <tr>
                            <td>{{ price.getIdDetails().getPartNumbers() }}</td>

                            <td>{{ price.getIdDetails().getIdOriginalNumber().getOriginalNumber() }}</td>

                            <td>{{ price.getIdManufacturer().getManufacturers() }}</td>

                            <td>{{ price.getIdDetails().getNameDetail() }}</td>

                            <td>{{ price.getIdDetails().getIdPartName().getPartName()|default('') }}</td>

                            <td>{{ price.getIdDetails().getIdCarBrand().getCarBrand()|default('') }}</td>

                            <td>{{ price.getIdDetails().getIdSide().getSide()|default('') }}</td>

                            <td>{{ price.getIdDetails().getIdBody().getBody()|default('') }}</td>

                            <td>{{ price.getIdDetails().getIdAxle().getAxle()|default('') }}</td>

                            <td>{{ price.getQuantity() - price.getQuantitySold() }}</td>

                            <td>{{ ((price.getPrice() / 100) 
                                        / price.getQuantity())|number_format(2, '.', '') }}</td>

                            <td>{{ (price.getPrice() / 100) - (((price.getPrice() / 100) 
                                        / price.getQuantity()) * price.getQuantitySold()) }}</td>

                            <form action=\"/sold_price\" name=\"sold_price\" method=\"post\">

                                    <td><button class=\"sales\" type=\"submit\" name=\"sold_price\" value=\"{{ price.getId() }}\">Продать</button></td>
                                    
                            </form>

                                {#<form action=\"/sales_parts\" name=\"form_sales\" method=\"post\">

                                    Переменный для вывода данных в форме когда форма не прошла валидацию#}
                                    {#{% set quantity_sold = '' %}
                                    {% set price_sold = '' %}
                                    {% set date_sold = '' %}

                                        {% for value_quantity_sold in app.flashes('quantity_sold') %}  
                                            {% set quantity_sold = value_quantity_sold %}
                                        {% endfor %}
                                        {% for value_price_sold in app.flashes('price_sold') %}  
                                            {% set price_sold = value_price_sold %}
                                        {% endfor %}
                                        {% for value_date_sold in app.flashes('date_sold') %}  
                                            {% set date_sold = value_date_sold %}
                                        {% endfor %}
                                    
                                    <td><input type=\"number\" name=\"quantity_sold\" required=\"required\" 
                                        style=\"width: 70px\" placeholder=\"шт\" value=\"{{ quantity_sold }}\" />
                                                {% for message in app.flashes('[quantity_sold_error]') %}
                                                {{ message }}
                                                {% endfor %}
                                                {% for message in app.flashes('[sum_quantity_sold_error]') %}
                                                {% endfor %}</td>

                                    
                                    <td><input type=\"number\" name=\"price_sold\" required=\"required\" 
                                        style=\"width: 98px\" placeholder=\"Цена\" value=\"{{ price_sold }}\" />
                                                {% for message in app.flashes('[price_sold_error]') %}
                                                {{ message }}
                                                {% endfor %}</td>
                                    
                                    <td><input type=\"date\" name=\"date_sold\" required=\"required\" value=\"{{ date_sold }}\" /></td>

                                    <td><button class=\"sales\" type=\"submit\" name=\"sales\" value=\"{{ incoming_documents.getId() }}\">Продано</button></td>  

                                </form>#}
                        </tr> 
                    {% endif %}
                {% endfor %}
            {% else %}
                <h2>Данные не найдены. Видите параметры в поиск</h2>  
            {% endif %}
        {% endfor %}
{% endblock tbody %}", "price/price.html.twig", "/var/www/templates/price/price.html.twig");
    }
}
