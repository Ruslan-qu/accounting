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
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["arr_sold_part"]) || array_key_exists("arr_sold_part", $context) ? $context["arr_sold_part"] : (function () { throw new RuntimeError('Variable "arr_sold_part" does not exist.', 11, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["sold"]) {
            // line 12
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
            </tr>
            <tr>
            
                <th>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sold"], "getIdDetails", [], "method", false, false, false, 25), "getPartNumbers", [], "method", false, false, false, 25), "html", null, true);
            echo "</th>

                <th>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sold"], "getIdDetails", [], "method", false, false, false, 27), "getIdOriginalNumber", [], "method", false, false, false, 27), "getOriginalNumber", [], "method", false, false, false, 27), "html", null, true);
            echo "</th>

                <th>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sold"], "getIdManufacturer", [], "method", false, false, false, 29), "getManufacturers", [], "method", false, false, false, 29), "html", null, true);
            echo "</th>

                <th>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sold"], "getIdDetails", [], "method", false, false, false, 31), "getNameDetail", [], "method", false, false, false, 31), "html", null, true);
            echo "</th>

                <th>";
            // line 33
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sold"], "getIdDetails", [], "method", false, true, false, 33), "getIdPartName", [], "method", false, true, false, 33), "getPartName", [], "method", true, true, false, 33)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sold"], "getIdDetails", [], "method", false, true, false, 33), "getIdPartName", [], "method", false, true, false, 33), "getPartName", [], "method", false, false, false, 33), "")) : ("")), "html", null, true);
            echo "</th>

                <th>";
            // line 35
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sold"], "getIdDetails", [], "method", false, true, false, 35), "getIdCarBrand", [], "method", false, true, false, 35), "getCarBrand", [], "method", true, true, false, 35)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sold"], "getIdDetails", [], "method", false, true, false, 35), "getIdCarBrand", [], "method", false, true, false, 35), "getCarBrand", [], "method", false, false, false, 35), "")) : ("")), "html", null, true);
            echo "</th>

                <th>";
            // line 37
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sold"], "getIdDetails", [], "method", false, true, false, 37), "getIdSide", [], "method", false, true, false, 37), "getSide", [], "method", true, true, false, 37)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sold"], "getIdDetails", [], "method", false, true, false, 37), "getIdSide", [], "method", false, true, false, 37), "getSide", [], "method", false, false, false, 37), "")) : ("")), "html", null, true);
            echo "</th>

                <th>";
            // line 39
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sold"], "getIdDetails", [], "method", false, true, false, 39), "getIdBody", [], "method", false, true, false, 39), "getBody", [], "method", true, true, false, 39)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sold"], "getIdDetails", [], "method", false, true, false, 39), "getIdBody", [], "method", false, true, false, 39), "getBody", [], "method", false, false, false, 39), "")) : ("")), "html", null, true);
            echo "</th>

                <th>";
            // line 41
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sold"], "getIdDetails", [], "method", false, true, false, 41), "getIdAxle", [], "method", false, true, false, 41), "getAxle", [], "method", true, true, false, 41)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sold"], "getIdDetails", [], "method", false, true, false, 41), "getIdAxle", [], "method", false, true, false, 41), "getAxle", [], "method", false, false, false, 41), "")) : ("")), "html", null, true);
            echo "</th>

            </tr>
            <tr>
                <th>Кол-во</th>
                <th>Цена шт</th>
                <th>Цена общая</th>
                <th>Кол-во</th>
                <th>Цена</th>
                <th>Дата прод-жи</th>
                <th>Продать</th>
            </tr>
            <tr>

                <th>";
            // line 55
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["sold"], "getQuantity", [], "method", false, false, false, 55) - twig_get_attribute($this->env, $this->source, $context["sold"], "getQuantitySold", [], "method", false, false, false, 55)), "html", null, true);
            echo "</th>

                <th>";
            // line 57
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["sold"], "getPrice", [], "method", false, false, false, 57) / 100) / twig_get_attribute($this->env, $this->source,             // line 58
$context["sold"], "getQuantity", [], "method", false, false, false, 58)), 2, ".", ""), "html", null, true);
            echo "</th>

                <th>";
            // line 60
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["sold"], "getPrice", [], "method", false, false, false, 60) / 100) - (((twig_get_attribute($this->env, $this->source, $context["sold"], "getPrice", [], "method", false, false, false, 60) / 100) / twig_get_attribute($this->env, $this->source,             // line 61
$context["sold"], "getQuantity", [], "method", false, false, false, 61)) * twig_get_attribute($this->env, $this->source, $context["sold"], "getQuantitySold", [], "method", false, false, false, 61))), 2, ".", ""), "html", null, true);
            echo "</th>
                                    
            ";
            // line 64
            echo "            ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_sold"]) || array_key_exists("form_sold", $context) ? $context["form_sold"] : (function () { throw new RuntimeError('Variable "form_sold" does not exist.', 64, $this->source); })()), 'form_start');
            echo "
                ";
            // line 65
            $context["quantity_sold_price"] = "";
            // line 66
            echo "                ";
            $context["price_sold_price"] = "";
            // line 67
            echo "                ";
            $context["date_sold_price"] = "";
            // line 68
            echo "                ";
            $context["id_hidden"] = ((twig_get_attribute($this->env, $this->source, $context["sold"], "getId", [], "method", true, true, false, 68)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["sold"], "getId", [], "method", false, false, false, 68), "")) : (""));
            // line 69
            echo "
                ";
            // line 70
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 70, $this->source); })()), "flashes", ["hidden_sold"], "method", false, false, false, 70));
            foreach ($context['_seq'] as $context["_key"] => $context["value_id_hidden"]) {
                echo "  
                    ";
                // line 71
                $context["id_hidden"] = $context["value_id_hidden"];
                // line 72
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_id_hidden'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sold"]) || array_key_exists("form_sold", $context) ? $context["form_sold"] : (function () { throw new RuntimeError('Variable "form_sold" does not exist.', 73, $this->source); })()), "hidden_sold", [], "any", false, false, false, 73), 'widget', ["value" => (isset($context["id_hidden"]) || array_key_exists("id_hidden", $context) ? $context["id_hidden"] : (function () { throw new RuntimeError('Variable "id_hidden" does not exist.', 73, $this->source); })())]);
            echo "

                ";
            // line 75
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 75, $this->source); })()), "flashes", ["quantity_sold_sold"], "method", false, false, false, 75));
            foreach ($context['_seq'] as $context["_key"] => $context["value_quantity_sold"]) {
                echo "  
                    ";
                // line 76
                $context["quantity_sold_price"] = $context["value_quantity_sold"];
                // line 77
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_quantity_sold'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "                <th>";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sold"]) || array_key_exists("form_sold", $context) ? $context["form_sold"] : (function () { throw new RuntimeError('Variable "form_sold" does not exist.', 78, $this->source); })()), "quantity_sold", [], "any", false, false, false, 78), 'widget', ["value" => (isset($context["quantity_sold_price"]) || array_key_exists("quantity_sold_price", $context) ? $context["quantity_sold_price"] : (function () { throw new RuntimeError('Variable "quantity_sold_price" does not exist.', 78, $this->source); })())]);
            echo "<br>
                ";
            // line 79
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 79, $this->source); })()), "flashes", ["[quantity_sold_error]"], "method", false, false, false, 79));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 80
                echo "                    ";
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sold"]) || array_key_exists("form_sold", $context) ? $context["form_sold"] : (function () { throw new RuntimeError('Variable "form_sold" does not exist.', 82, $this->source); })()), "quantity_sold", [], "any", false, false, false, 82), 'errors');
            echo "</th>

                ";
            // line 84
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 84, $this->source); })()), "flashes", ["price_sold_sold"], "method", false, false, false, 84));
            foreach ($context['_seq'] as $context["_key"] => $context["value_price_sold"]) {
                echo "  
                    ";
                // line 85
                $context["price_sold_price"] = $context["value_price_sold"];
                // line 86
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_price_sold'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "                <th>";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sold"]) || array_key_exists("form_sold", $context) ? $context["form_sold"] : (function () { throw new RuntimeError('Variable "form_sold" does not exist.', 87, $this->source); })()), "price_sold", [], "any", false, false, false, 87), 'widget', ["value" => (isset($context["price_sold_price"]) || array_key_exists("price_sold_price", $context) ? $context["price_sold_price"] : (function () { throw new RuntimeError('Variable "price_sold_price" does not exist.', 87, $this->source); })())]);
            echo "<br>
                ";
            // line 88
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sold"]) || array_key_exists("form_sold", $context) ? $context["form_sold"] : (function () { throw new RuntimeError('Variable "form_sold" does not exist.', 88, $this->source); })()), "price_sold", [], "any", false, false, false, 88), 'errors');
            echo "</th>

                ";
            // line 90
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 90, $this->source); })()), "flashes", ["date_sold_sold"], "method", false, false, false, 90));
            foreach ($context['_seq'] as $context["_key"] => $context["value_date_sold"]) {
                echo "  
                    ";
                // line 91
                $context["date_sold_price"] = $context["value_date_sold"];
                // line 92
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_date_sold'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "                <th>";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sold"]) || array_key_exists("form_sold", $context) ? $context["form_sold"] : (function () { throw new RuntimeError('Variable "form_sold" does not exist.', 93, $this->source); })()), "date_sold", [], "any", false, false, false, 93), 'widget', ["value" => (isset($context["date_sold_price"]) || array_key_exists("date_sold_price", $context) ? $context["date_sold_price"] : (function () { throw new RuntimeError('Variable "date_sold_price" does not exist.', 93, $this->source); })())]);
            echo "<br>
                ";
            // line 94
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sold"]) || array_key_exists("form_sold", $context) ? $context["form_sold"] : (function () { throw new RuntimeError('Variable "form_sold" does not exist.', 94, $this->source); })()), "date_sold", [], "any", false, false, false, 94), 'errors');
            echo "</th>

                ";
            // line 96
            $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sold"]) || array_key_exists("form_sold", $context) ? $context["form_sold"] : (function () { throw new RuntimeError('Variable "form_sold" does not exist.', 96, $this->source); })()), "id_invoice", [], "any", false, false, false, 96), 'widget');
            // line 97
            echo "                                            
                <th>";
            // line 98
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_sold"]) || array_key_exists("form_sold", $context) ? $context["form_sold"] : (function () { throw new RuntimeError('Variable "form_sold" does not exist.', 98, $this->source); })()), "button", [], "any", false, false, false, 98), 'widget', ["label" => "Продать", "attr" => ["class" => "save"]]);
            echo "</th>

            ";
            // line 100
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_sold"]) || array_key_exists("form_sold", $context) ? $context["form_sold"] : (function () { throw new RuntimeError('Variable "form_sold" does not exist.', 100, $this->source); })()), 'form_end');
            echo "
                
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sold'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "               

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 106
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

    // line 108
    public function block_table_thead_tr($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_thead_tr"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_thead_tr"));

        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["arr_sale_list"]) || array_key_exists("arr_sale_list", $context) ? $context["arr_sale_list"] : (function () { throw new RuntimeError('Variable "arr_sale_list" does not exist.', 109, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["sale_list"]) {
            // line 110
            echo "         
            <th>№ Детали</th>
            <th>Название детали</th>
            <th>Марка</th>
            <th>Сторона</th>
            <th>Перед Зад</th>
            <th>Кол-во</th>
            <th>Цена шт</th>
            <th>Кол-во</th>
            <th>Цена</th>
            <th>Изменить</th>
            <th>Удалить</th>
        
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sale_list'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 126
    public function block_tbody($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tbody"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tbody"));

        // line 127
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["arr_sale_list"]) || array_key_exists("arr_sale_list", $context) ? $context["arr_sale_list"] : (function () { throw new RuntimeError('Variable "arr_sale_list" does not exist.', 127, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["sale_list"]) {
            // line 128
            echo "        
            <tr>
                <td>";
            // line 130
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sale_list"], "getIdInvoice", [], "method", false, false, false, 130), "getIdDetails", [], "method", false, false, false, 130), "getPartNumbers", [], "method", false, false, false, 130), "html", null, true);
            echo "</td>

                <td>";
            // line 132
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sale_list"], "getIdInvoice", [], "method", false, true, false, 132), "getIdDetails", [], "method", false, true, false, 132), "getIdPartName", [], "method", false, true, false, 132), "getPartName", [], "method", true, true, false, 132)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sale_list"], "getIdInvoice", [], "method", false, true, false, 132), "getIdDetails", [], "method", false, true, false, 132), "getIdPartName", [], "method", false, true, false, 132), "getPartName", [], "method", false, false, false, 132), "")) : ("")), "html", null, true);
            echo "</td>

                <td>";
            // line 134
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sale_list"], "getIdInvoice", [], "method", false, true, false, 134), "getIdDetails", [], "method", false, true, false, 134), "getIdCarBrand", [], "method", false, true, false, 134), "getCarBrand", [], "method", true, true, false, 134)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sale_list"], "getIdInvoice", [], "method", false, true, false, 134), "getIdDetails", [], "method", false, true, false, 134), "getIdCarBrand", [], "method", false, true, false, 134), "getCarBrand", [], "method", false, false, false, 134), "")) : ("")), "html", null, true);
            echo "</td>

                <td>";
            // line 136
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sale_list"], "getIdInvoice", [], "method", false, true, false, 136), "getIdDetails", [], "method", false, true, false, 136), "getIdSide", [], "method", false, true, false, 136), "getSide", [], "method", true, true, false, 136)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sale_list"], "getIdInvoice", [], "method", false, true, false, 136), "getIdDetails", [], "method", false, true, false, 136), "getIdSide", [], "method", false, true, false, 136), "getSide", [], "method", false, false, false, 136), "")) : ("")), "html", null, true);
            echo "</td>

                <td>";
            // line 138
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sale_list"], "getIdInvoice", [], "method", false, true, false, 138), "getIdDetails", [], "method", false, true, false, 138), "getIdAxle", [], "method", false, true, false, 138), "getAxle", [], "method", true, true, false, 138)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sale_list"], "getIdInvoice", [], "method", false, true, false, 138), "getIdDetails", [], "method", false, true, false, 138), "getIdAxle", [], "method", false, true, false, 138), "getAxle", [], "method", false, false, false, 138), "")) : ("")), "html", null, true);
            echo "</td>

                <td>";
            // line 140
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sale_list"], "getQuantitySold", [], "method", false, false, false, 140), "html", null, true);
            echo "</td>

                <td>";
            // line 142
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sale_list"], "getIdInvoice", [], "method", false, false, false, 142), "getPrice", [], "method", false, false, false, 142) / 100) / twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 143
$context["sale_list"], "getIdInvoice", [], "method", false, false, false, 143), "getQuantity", [], "method", false, false, false, 143)) * twig_get_attribute($this->env, $this->source,             // line 144
$context["sale_list"], "getQuantitySold", [], "method", false, false, false, 144)), 2, ".", ""), "html", null, true);
            echo "</td>

                <td>";
            // line 146
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sale_list"], "getQuantitySold", [], "method", false, false, false, 146), "html", null, true);
            echo "</td>

                <td>";
            // line 148
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["sale_list"], "getPriceSold", [], "method", false, false, false, 148) / 100), 2, ".", ""), "html", null, true);
            echo "</td>      

                <form action=\"/sold_price\" name=\"edit_sold_price\" method=\"post\">

                    <td><button class=\"edit\" type=\"submit\" name=\"edit_sold_price\" value=\"";
            // line 152
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sale_list"], "getIdInvoice", [], "method", false, false, false, 152), "getId", [], "method", false, false, false, 152), "html", null, true);
            echo "\">Изменить</button></td>
                                    
                </form>

                <form action=\"/delete_sale_list\" name=\"delete_sale_list\" method=\"post\">

                    <td><button class=\"delete\" type=\"submit\" name=\"delete_sale_list\" value=\"";
            // line 158
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sale_list"], "getIdInvoice", [], "method", false, false, false, 158), "getId", [], "method", false, false, false, 158), "html", null, true);
            echo "\">Удалить</button></td>
                                    
                </form>
            </tr> 
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sale_list'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
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
        return array (  519 => 158,  510 => 152,  503 => 148,  498 => 146,  493 => 144,  492 => 143,  491 => 142,  486 => 140,  481 => 138,  476 => 136,  471 => 134,  466 => 132,  461 => 130,  457 => 128,  452 => 127,  442 => 126,  415 => 110,  411 => 109,  401 => 108,  383 => 106,  371 => 102,  362 => 100,  357 => 98,  354 => 97,  352 => 96,  347 => 94,  342 => 93,  336 => 92,  334 => 91,  328 => 90,  323 => 88,  318 => 87,  312 => 86,  310 => 85,  304 => 84,  298 => 82,  289 => 80,  285 => 79,  280 => 78,  274 => 77,  272 => 76,  266 => 75,  260 => 73,  254 => 72,  252 => 71,  246 => 70,  243 => 69,  240 => 68,  237 => 67,  234 => 66,  232 => 65,  227 => 64,  222 => 61,  221 => 60,  216 => 58,  215 => 57,  210 => 55,  193 => 41,  188 => 39,  183 => 37,  178 => 35,  173 => 33,  168 => 31,  163 => 29,  158 => 27,  153 => 25,  138 => 12,  134 => 11,  131 => 10,  121 => 9,  102 => 7,  83 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{title_logo}}{% endblock %}

{% block logo %}{{title_logo}}{% endblock %}

{% block legend %}{{legend}}{% endblock legend%}

{% block form_save_edit_sales %}

    {% for sold in arr_sold_part %}

                <th>№ Детали</th>
                <th>№ Оригинал</th>
                <th>Производитель</th>
                <th>Описание детали</th>
                <th>Название детали</th>
                <th>Марка</th>
                <th>Сторона</th>
                <th>Кузов</th>
                <th>Перед Зад</th>
            </tr>
            <tr>
            
                <th>{{ sold.getIdDetails().getPartNumbers() }}</th>

                <th>{{ sold.getIdDetails().getIdOriginalNumber().getOriginalNumber() }}</th>

                <th>{{ sold.getIdManufacturer().getManufacturers() }}</th>

                <th>{{ sold.getIdDetails().getNameDetail() }}</th>

                <th>{{ sold.getIdDetails().getIdPartName().getPartName()|default('') }}</th>

                <th>{{ sold.getIdDetails().getIdCarBrand().getCarBrand()|default('') }}</th>

                <th>{{ sold.getIdDetails().getIdSide().getSide()|default('') }}</th>

                <th>{{ sold.getIdDetails().getIdBody().getBody()|default('') }}</th>

                <th>{{ sold.getIdDetails().getIdAxle().getAxle()|default('') }}</th>

            </tr>
            <tr>
                <th>Кол-во</th>
                <th>Цена шт</th>
                <th>Цена общая</th>
                <th>Кол-во</th>
                <th>Цена</th>
                <th>Дата прод-жи</th>
                <th>Продать</th>
            </tr>
            <tr>

                <th>{{ sold.getQuantity() - sold.getQuantitySold() }}</th>

                <th>{{ ((sold.getPrice() / 100) 
                        / sold.getQuantity())|number_format(2, '.', '') }}</th>

                <th>{{ ((sold.getPrice() / 100) - (((sold.getPrice() / 100) 
                / sold.getQuantity()) * sold.getQuantitySold()))|number_format(2, '.', '') }}</th>
                                    
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
                {{ form_errors(form_sold.price_sold) }}</th>

                {% for value_date_sold in app.flashes('date_sold_sold') %}  
                    {% set date_sold_price = value_date_sold %}
                {% endfor %}
                <th>{{ form_widget(form_sold.date_sold, {value : date_sold_price}) }}<br>
                {{ form_errors(form_sold.date_sold) }}</th>

                {% do form_widget(form_sold.id_invoice) %}
                                            
                <th>{{ form_widget(form_sold.button, {'label': 'Продать', 'attr': {'class': 'save'} }) }}</th>

            {{ form_end(form_sold) }}
                
    {% endfor %}               

{% endblock form_save_edit_sales %}

{% block form_search %}{% endblock form_search %}

{% block table_thead_tr %}
{% for sale_list in arr_sale_list %}
         
            <th>№ Детали</th>
            <th>Название детали</th>
            <th>Марка</th>
            <th>Сторона</th>
            <th>Перед Зад</th>
            <th>Кол-во</th>
            <th>Цена шт</th>
            <th>Кол-во</th>
            <th>Цена</th>
            <th>Изменить</th>
            <th>Удалить</th>
        
    {% endfor %}
{% endblock table_thead_tr %}

{% block tbody %}
    {% for sale_list in arr_sale_list %}
        
            <tr>
                <td>{{ sale_list.getIdInvoice().getIdDetails().getPartNumbers() }}</td>

                <td>{{ sale_list.getIdInvoice().getIdDetails().getIdPartName().getPartName()|default('') }}</td>

                <td>{{ sale_list.getIdInvoice().getIdDetails().getIdCarBrand().getCarBrand()|default('') }}</td>

                <td>{{ sale_list.getIdInvoice().getIdDetails().getIdSide().getSide()|default('') }}</td>

                <td>{{ sale_list.getIdInvoice().getIdDetails().getIdAxle().getAxle()|default('') }}</td>

                <td>{{ sale_list.getQuantitySold() }}</td>

                <td>{{ (((sale_list.getIdInvoice().getPrice() / 100) 
                            / sale_list.getIdInvoice().getQuantity()) 
                                * sale_list.getQuantitySold())|number_format(2, '.', '') }}</td>

                <td>{{ sale_list.getQuantitySold() }}</td>

                <td>{{ (sale_list.getPriceSold() / 100)|number_format(2, '.', '') }}</td>      

                <form action=\"/sold_price\" name=\"edit_sold_price\" method=\"post\">

                    <td><button class=\"edit\" type=\"submit\" name=\"edit_sold_price\" value=\"{{ sale_list.getIdInvoice().getId() }}\">Изменить</button></td>
                                    
                </form>

                <form action=\"/delete_sale_list\" name=\"delete_sale_list\" method=\"post\">

                    <td><button class=\"delete\" type=\"submit\" name=\"delete_sale_list\" value=\"{{ sale_list.getIdInvoice().getId() }}\">Удалить</button></td>
                                    
                </form>
            </tr> 
    {% endfor %}
{% endblock tbody %}", "price/sold.html.twig", "/var/www/templates/price/sold.html.twig");
    }
}
