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

/* price/sold.html.twig */
class __TwigTemplate_1d63e092b88b6f6ec5ca9fec44f2a6cd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "price/sold.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "price/sold.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "price/sold.html.twig", 1);
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

    </tr>
        <div class=\"table\">  
            <table>
                <thead>
                    <tr>
                        <th>№ Детали</th>
                        <th>Название детали</th>
                        <th>Марка</th>
                        <th>Кол-во</th>
                        <th>Цена шт</th>
                        <th>Цена общая</th>
                        <th>Кол-во</th>
                        <th>Цена</th>
                        <th>Дата прод-жи</th>
                        <th>Продать</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["arr_sold_part"]) || array_key_exists("arr_sold_part", $context) ? $context["arr_sold_part"] : (function () { throw new RuntimeError('Variable "arr_sold_part" does not exist.', 30, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["sold"]) {
            // line 31
            echo "                    ";
            // line 33
            echo "                            <tr>
                                <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sold"], "getIdDetails", [], "method", false, false, false, 34), "getPartNumbers", [], "method", false, false, false, 34), "html", null, true);
            echo "</td>

                                <td>";
            // line 36
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sold"], "getIdDetails", [], "method", false, true, false, 36), "getIdPartName", [], "method", false, true, false, 36), "getPartName", [], "method", true, true, false, 36)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sold"], "getIdDetails", [], "method", false, true, false, 36), "getIdPartName", [], "method", false, true, false, 36), "getPartName", [], "method", false, false, false, 36), "")) : ("")), "html", null, true);
            echo "</td>

                                <td>";
            // line 38
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sold"], "getIdDetails", [], "method", false, true, false, 38), "getIdCarBrand", [], "method", false, true, false, 38), "getCarBrand", [], "method", true, true, false, 38)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sold"], "getIdDetails", [], "method", false, true, false, 38), "getIdCarBrand", [], "method", false, true, false, 38), "getCarBrand", [], "method", false, false, false, 38), "")) : ("")), "html", null, true);
            echo "</td>

                                <td>";
            // line 40
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["sold"], "getQuantity", [], "method", false, false, false, 40) - twig_get_attribute($this->env, $this->source, $context["sold"], "getQuantitySold", [], "method", false, false, false, 40)), "html", null, true);
            echo "</td>

                                <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["sold"], "getPrice", [], "method", false, false, false, 42) / 100) / twig_get_attribute($this->env, $this->source,             // line 43
$context["sold"], "getQuantity", [], "method", false, false, false, 43)), 2, ".", ""), "html", null, true);
            echo "</td>

                                <td>";
            // line 45
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["sold"], "getPrice", [], "method", false, false, false, 45) / 100) - (((twig_get_attribute($this->env, $this->source, $context["sold"], "getPrice", [], "method", false, false, false, 45) / 100) / twig_get_attribute($this->env, $this->source,             // line 46
$context["sold"], "getQuantity", [], "method", false, false, false, 46)) * twig_get_attribute($this->env, $this->source, $context["sold"], "getQuantitySold", [], "method", false, false, false, 46))), "html", null, true);
            echo "</td>
                                
                                ";
            // line 49
            echo "                                ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_sold"]) || array_key_exists("form_sold", $context) ? $context["form_sold"] : (function () { throw new RuntimeError('Variable "form_sold" does not exist.', 49, $this->source); })()), 'form_start');
            echo "
                                    ";
            // line 50
            $context["quantity_sold_price"] = "";
            // line 51
            echo "                                    ";
            $context["price_sold_price"] = "";
            // line 52
            echo "                                    ";
            $context["date_sold_price"] = "";
            // line 53
            echo "                                    ";
            $context["id_hidden"] = ((twig_get_attribute($this->env, $this->source, $context["sold"], "getId", [], "method", true, true, false, 53)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["sold"], "getId", [], "method", false, false, false, 53), "")) : (""));
            // line 54
            echo "
                                    ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "flashes", ["hidden_sold"], "method", false, false, false, 55));
            foreach ($context['_seq'] as $context["_key"] => $context["value_id_hidden"]) {
                echo "  
                                        ";
                // line 56
                $context["id_hidden"] = $context["value_id_hidden"];
                // line 57
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_id_hidden'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "                                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sold"]) || array_key_exists("form_sold", $context) ? $context["form_sold"] : (function () { throw new RuntimeError('Variable "form_sold" does not exist.', 58, $this->source); })()), "hidden_sold", [], "any", false, false, false, 58), 'widget', ["value" => (isset($context["id_hidden"]) || array_key_exists("id_hidden", $context) ? $context["id_hidden"] : (function () { throw new RuntimeError('Variable "id_hidden" does not exist.', 58, $this->source); })())]);
            echo "

                                    ";
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "flashes", ["quantity_sold_sold"], "method", false, false, false, 60));
            foreach ($context['_seq'] as $context["_key"] => $context["value_quantity_sold"]) {
                echo "  
                                        ";
                // line 61
                $context["quantity_sold_price"] = $context["value_quantity_sold"];
                // line 62
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_quantity_sold'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "                                    <th>";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sold"]) || array_key_exists("form_sold", $context) ? $context["form_sold"] : (function () { throw new RuntimeError('Variable "form_sold" does not exist.', 63, $this->source); })()), "quantity_sold", [], "any", false, false, false, 63), 'widget', ["value" => (isset($context["quantity_sold_price"]) || array_key_exists("quantity_sold_price", $context) ? $context["quantity_sold_price"] : (function () { throw new RuntimeError('Variable "quantity_sold_price" does not exist.', 63, $this->source); })())]);
            echo "<br>
                                    ";
            // line 64
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 64, $this->source); })()), "flashes", ["[quantity_sold_error]"], "method", false, false, false, 64));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 65
                echo "                                    ";
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "                                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sold"]) || array_key_exists("form_sold", $context) ? $context["form_sold"] : (function () { throw new RuntimeError('Variable "form_sold" does not exist.', 67, $this->source); })()), "quantity_sold", [], "any", false, false, false, 67), 'errors');
            echo "</th>

                                    ";
            // line 69
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "flashes", ["price_sold_sold"], "method", false, false, false, 69));
            foreach ($context['_seq'] as $context["_key"] => $context["value_price_sold"]) {
                echo "  
                                        ";
                // line 70
                $context["price_sold_price"] = $context["value_price_sold"];
                // line 71
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_price_sold'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "                                    <th>";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sold"]) || array_key_exists("form_sold", $context) ? $context["form_sold"] : (function () { throw new RuntimeError('Variable "form_sold" does not exist.', 72, $this->source); })()), "price_sold", [], "any", false, false, false, 72), 'widget', ["value" => (isset($context["price_sold_price"]) || array_key_exists("price_sold_price", $context) ? $context["price_sold_price"] : (function () { throw new RuntimeError('Variable "price_sold_price" does not exist.', 72, $this->source); })())]);
            echo "<br>
                                    ";
            // line 73
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 73, $this->source); })()), "flashes", ["[price_sold_error]"], "method", false, false, false, 73));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 74
                echo "                                    ";
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "                                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sold"]) || array_key_exists("form_sold", $context) ? $context["form_sold"] : (function () { throw new RuntimeError('Variable "form_sold" does not exist.', 76, $this->source); })()), "price_sold", [], "any", false, false, false, 76), 'errors');
            echo "</th>

                                    ";
            // line 78
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 78, $this->source); })()), "flashes", ["date_sold_sold"], "method", false, false, false, 78));
            foreach ($context['_seq'] as $context["_key"] => $context["value_date_sold"]) {
                echo "  
                                        ";
                // line 79
                $context["date_sold_price"] = $context["value_date_sold"];
                // line 80
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_date_sold'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "                                    <th>";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sold"]) || array_key_exists("form_sold", $context) ? $context["form_sold"] : (function () { throw new RuntimeError('Variable "form_sold" does not exist.', 81, $this->source); })()), "date_sold", [], "any", false, false, false, 81), 'widget', ["value" => (isset($context["date_sold_price"]) || array_key_exists("date_sold_price", $context) ? $context["date_sold_price"] : (function () { throw new RuntimeError('Variable "date_sold_price" does not exist.', 81, $this->source); })())]);
            echo "<br>
                                    ";
            // line 82
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 82, $this->source); })()), "flashes", ["[date_sold_error]"], "method", false, false, false, 82));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 83
                echo "                                    ";
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            echo "                                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sold"]) || array_key_exists("form_sold", $context) ? $context["form_sold"] : (function () { throw new RuntimeError('Variable "form_sold" does not exist.', 85, $this->source); })()), "date_sold", [], "any", false, false, false, 85), 'errors');
            echo "</th>
                                    
                                    <th>";
            // line 87
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sold"]) || array_key_exists("form_sold", $context) ? $context["form_sold"] : (function () { throw new RuntimeError('Variable "form_sold" does not exist.', 87, $this->source); })()), "button", [], "any", false, false, false, 87), 'widget', ["label" => "Продать", "attr" => ["class" => "save"]]);
            echo "</th>

                                 ";
            // line 89
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_sold"]) || array_key_exists("form_sold", $context) ? $context["form_sold"] : (function () { throw new RuntimeError('Variable "form_sold" does not exist.', 89, $this->source); })()), 'form_end');
            echo "           
                            </tr>
                        ";
            // line 92
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sold'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "               
                </tbody>
            </table> 
        </div> 
   
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 99
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

    // line 101
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

    // line 103
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
        return "price/sold.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  413 => 103,  395 => 101,  377 => 99,  357 => 92,  352 => 89,  347 => 87,  341 => 85,  332 => 83,  328 => 82,  323 => 81,  317 => 80,  315 => 79,  309 => 78,  303 => 76,  294 => 74,  290 => 73,  285 => 72,  279 => 71,  277 => 70,  271 => 69,  265 => 67,  256 => 65,  252 => 64,  247 => 63,  241 => 62,  239 => 61,  233 => 60,  227 => 58,  221 => 57,  219 => 56,  213 => 55,  210 => 54,  207 => 53,  204 => 52,  201 => 51,  199 => 50,  194 => 49,  189 => 46,  188 => 45,  183 => 43,  182 => 42,  177 => 40,  172 => 38,  167 => 36,  162 => 34,  159 => 33,  157 => 31,  153 => 30,  131 => 10,  121 => 9,  102 => 7,  83 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{title_logo}}{% endblock %}

{% block logo %}{{title_logo}}{% endblock %}

{% block legend %}{{legend}}{% endblock legend%}

{% block form_save_edit_sales %}


    </tr>
        <div class=\"table\">  
            <table>
                <thead>
                    <tr>
                        <th>№ Детали</th>
                        <th>Название детали</th>
                        <th>Марка</th>
                        <th>Кол-во</th>
                        <th>Цена шт</th>
                        <th>Цена общая</th>
                        <th>Кол-во</th>
                        <th>Цена</th>
                        <th>Дата прод-жи</th>
                        <th>Продать</th>
                    </tr>
                </thead>
                <tbody>
                    {% for sold in arr_sold_part %}
                    {# {{ dump(arr_sold_part) }}
                       {% for sold in arr_sold %}#}
                            <tr>
                                <td>{{ sold.getIdDetails().getPartNumbers() }}</td>

                                <td>{{ sold.getIdDetails().getIdPartName().getPartName()|default('') }}</td>

                                <td>{{ sold.getIdDetails().getIdCarBrand().getCarBrand()|default('') }}</td>

                                <td>{{ sold.getQuantity() - sold.getQuantitySold() }}</td>

                                <td>{{ ((sold.getPrice() / 100) 
                                        / sold.getQuantity())|number_format(2, '.', '') }}</td>

                                <td>{{ (sold.getPrice() / 100) - (((sold.getPrice() / 100) 
                                        / sold.getQuantity()) * sold.getQuantitySold()) }}</td>
                                
                                {#Форма продажи детали#}
                                {{ form_start(form_sold) }}
                                    {% set quantity_sold_price = '' %}
                                    {% set price_sold_price = '' %}
                                    {% set date_sold_price = '' %}
                                    {% set id_hidden = sold.getId()|default('') %}

                                    {% for value_id_hidden in app.flashes('hidden_sold') %}  
                                        {% set id_hidden = value_id_hidden %}
                                    {% endfor %}
                                    {{ form_widget(form_sold.hidden_sold, {value : id_hidden}) }}

                                    {% for value_quantity_sold in app.flashes('quantity_sold_sold') %}  
                                        {% set quantity_sold_price = value_quantity_sold %}
                                    {% endfor %}
                                    <th>{{ form_widget(form_sold.quantity_sold, {value : quantity_sold_price}) }}<br>
                                    {% for message in app.flashes('[quantity_sold_error]') %}
                                    {{ message }}
                                    {% endfor %}
                                    {{ form_errors(form_sold.quantity_sold) }}</th>

                                    {% for value_price_sold in app.flashes('price_sold_sold') %}  
                                        {% set price_sold_price = value_price_sold %}
                                    {% endfor %}
                                    <th>{{ form_widget(form_sold.price_sold, {value : price_sold_price}) }}<br>
                                    {% for message in app.flashes('[price_sold_error]') %}
                                    {{ message }}
                                    {% endfor %}
                                    {{ form_errors(form_sold.price_sold) }}</th>

                                    {% for value_date_sold in app.flashes('date_sold_sold') %}  
                                        {% set date_sold_price = value_date_sold %}
                                    {% endfor %}
                                    <th>{{ form_widget(form_sold.date_sold, {value : date_sold_price}) }}<br>
                                    {% for message in app.flashes('[date_sold_error]') %}
                                    {{ message }}
                                    {% endfor %}
                                    {{ form_errors(form_sold.date_sold) }}</th>
                                    
                                    <th>{{ form_widget(form_sold.button, {'label': 'Продать', 'attr': {'class': 'save'} }) }}</th>

                                 {{ form_end(form_sold) }}           
                            </tr>
                        {#{% endfor %}#}
                    {% endfor %}               
                </tbody>
            </table> 
        </div> 
   
{% endblock form_save_edit_sales %}

{% block form_search %}{% endblock form_search %}

{% block table_thead_tr %}{% endblock table_thead_tr %}

{% block tbody %}{% endblock tbody %}", "price/sold.html.twig", "/var/www/templates/price/sold.html.twig");
    }
}
