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
        $context['_iterated'] = false;
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
            // line 54
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["sold"], "getQuantity", [], "method", false, false, false, 54) - twig_get_attribute($this->env, $this->source, $context["sold"], "getQuantitySold", [], "method", false, false, false, 54)), "html", null, true);
            echo "</th>

                <th>";
            // line 56
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["sold"], "getPrice", [], "method", false, false, false, 56) / 100) / twig_get_attribute($this->env, $this->source,             // line 57
$context["sold"], "getQuantity", [], "method", false, false, false, 57)), 2, ".", ""), "html", null, true);
            echo "</th>

                <th>";
            // line 59
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["sold"], "getPrice", [], "method", false, false, false, 59) / 100) - (((twig_get_attribute($this->env, $this->source, $context["sold"], "getPrice", [], "method", false, false, false, 59) / 100) / twig_get_attribute($this->env, $this->source,             // line 60
$context["sold"], "getQuantity", [], "method", false, false, false, 60)) * twig_get_attribute($this->env, $this->source, $context["sold"], "getQuantitySold", [], "method", false, false, false, 60))), 2, ".", ""), "html", null, true);
            echo "</th>
                                
            ";
            // line 63
            echo "            ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_sold"]) || array_key_exists("form_sold", $context) ? $context["form_sold"] : (function () { throw new RuntimeError('Variable "form_sold" does not exist.', 63, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sold_price")]);
            echo "
            ";
            // line 65
            echo "                ";
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
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 102
            echo "
    <h2>Для продолжения продажи выберите прайс в меню или завершите сделку</h2>  

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sold'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "               

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 109
    public function block_form_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_search"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_search"));

        // line 110
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["arr_sale_list"]) || array_key_exists("arr_sale_list", $context) ? $context["arr_sale_list"] : (function () { throw new RuntimeError('Variable "arr_sale_list" does not exist.', 110, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["sale_list"]) {
            // line 111
            echo "        ";
            if ($context["sale_list"]) {
                // line 112
                echo "            ";
                $context["total_amount_transaction"] = ((isset($context["total_amount_transaction"]) || array_key_exists("total_amount_transaction", $context) ? $context["total_amount_transaction"] : (function () { throw new RuntimeError('Variable "total_amount_transaction" does not exist.', 112, $this->source); })()) / 100);
                // line 113
                echo "

            <th>Цена общая - ";
                // line 115
                echo twig_escape_filter($this->env, (isset($context["total_amount_transaction"]) || array_key_exists("total_amount_transaction", $context) ? $context["total_amount_transaction"] : (function () { throw new RuntimeError('Variable "total_amount_transaction" does not exist.', 115, $this->source); })()), "html", null, true);
                echo "</th>

            ";
                // line 117
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_complete_sales"]) || array_key_exists("form_complete_sales", $context) ? $context["form_complete_sales"] : (function () { throw new RuntimeError('Variable "form_complete_sales" does not exist.', 117, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("complete_sales")]);
                echo "

                <th>";
                // line 119
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_complete_sales"]) || array_key_exists("form_complete_sales", $context) ? $context["form_complete_sales"] : (function () { throw new RuntimeError('Variable "form_complete_sales" does not exist.', 119, $this->source); })()), "id_payment_method_complete_sales", [], "any", false, false, false, 119), 'label');
                echo "<br>
                ";
                // line 120
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_complete_sales"]) || array_key_exists("form_complete_sales", $context) ? $context["form_complete_sales"] : (function () { throw new RuntimeError('Variable "form_complete_sales" does not exist.', 120, $this->source); })()), "id_payment_method_complete_sales", [], "any", false, false, false, 120), 'widget');
                echo "
                ";
                // line 121
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_complete_sales"]) || array_key_exists("form_complete_sales", $context) ? $context["form_complete_sales"] : (function () { throw new RuntimeError('Variable "form_complete_sales" does not exist.', 121, $this->source); })()), "id_payment_method_complete_sales", [], "any", false, false, false, 121), 'errors');
                echo "</th>   
                
                <th>";
                // line 123
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_complete_sales"]) || array_key_exists("form_complete_sales", $context) ? $context["form_complete_sales"] : (function () { throw new RuntimeError('Variable "form_complete_sales" does not exist.', 123, $this->source); })()), "receipt_change_complete_sales", [], "any", false, false, false, 123), 'label');
                echo "<br>
                ";
                // line 124
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_complete_sales"]) || array_key_exists("form_complete_sales", $context) ? $context["form_complete_sales"] : (function () { throw new RuntimeError('Variable "form_complete_sales" does not exist.', 124, $this->source); })()), "receipt_change_complete_sales", [], "any", false, false, false, 124), 'widget');
                echo "
                ";
                // line 125
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_complete_sales"]) || array_key_exists("form_complete_sales", $context) ? $context["form_complete_sales"] : (function () { throw new RuntimeError('Variable "form_complete_sales" does not exist.', 125, $this->source); })()), "receipt_change_complete_sales", [], "any", false, false, false, 125), 'errors');
                echo "</th>   

                <th>";
                // line 127
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_complete_sales"]) || array_key_exists("form_complete_sales", $context) ? $context["form_complete_sales"] : (function () { throw new RuntimeError('Variable "form_complete_sales" does not exist.', 127, $this->source); })()), "receipt_number_complete_sales", [], "any", false, false, false, 127), 'label');
                echo "<br>
                ";
                // line 128
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_complete_sales"]) || array_key_exists("form_complete_sales", $context) ? $context["form_complete_sales"] : (function () { throw new RuntimeError('Variable "form_complete_sales" does not exist.', 128, $this->source); })()), "receipt_number_complete_sales", [], "any", false, false, false, 128), 'widget');
                echo "
                ";
                // line 129
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_complete_sales"]) || array_key_exists("form_complete_sales", $context) ? $context["form_complete_sales"] : (function () { throw new RuntimeError('Variable "form_complete_sales" does not exist.', 129, $this->source); })()), "receipt_number_complete_sales", [], "any", false, false, false, 129), 'errors');
                echo "</th>   

                <th>";
                // line 131
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_complete_sales"]) || array_key_exists("form_complete_sales", $context) ? $context["form_complete_sales"] : (function () { throw new RuntimeError('Variable "form_complete_sales" does not exist.', 131, $this->source); })()), "receipt_date_complete_sales", [], "any", false, false, false, 131), 'label');
                echo "<br>
                ";
                // line 132
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_complete_sales"]) || array_key_exists("form_complete_sales", $context) ? $context["form_complete_sales"] : (function () { throw new RuntimeError('Variable "form_complete_sales" does not exist.', 132, $this->source); })()), "receipt_date_complete_sales", [], "any", false, false, false, 132), 'widget');
                echo "
                ";
                // line 133
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_complete_sales"]) || array_key_exists("form_complete_sales", $context) ? $context["form_complete_sales"] : (function () { throw new RuntimeError('Variable "form_complete_sales" does not exist.', 133, $this->source); })()), "receipt_date_complete_sales", [], "any", false, false, false, 133), 'errors');
                echo "</th>  

                 ";
                // line 135
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_complete_sales"]) || array_key_exists("form_complete_sales", $context) ? $context["form_complete_sales"] : (function () { throw new RuntimeError('Variable "form_complete_sales" does not exist.', 135, $this->source); })()), "hidden_complete_sales", [], "any", false, false, false, 135), 'widget', ["value" => (isset($context["total_amount_transaction"]) || array_key_exists("total_amount_transaction", $context) ? $context["total_amount_transaction"] : (function () { throw new RuntimeError('Variable "total_amount_transaction" does not exist.', 135, $this->source); })())]);
                echo "
                                                    
                <th>";
                // line 137
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_complete_sales"]) || array_key_exists("form_complete_sales", $context) ? $context["form_complete_sales"] : (function () { throw new RuntimeError('Variable "form_complete_sales" does not exist.', 137, $this->source); })()), "button_complete_sales", [], "any", false, false, false, 137), 'widget', ["label" => "Завершить сделку", "attr" => ["class" => "save"]]);
                // line 138
                echo "</th>
            
            ";
                // line 140
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_complete_sales"]) || array_key_exists("form_complete_sales", $context) ? $context["form_complete_sales"] : (function () { throw new RuntimeError('Variable "form_complete_sales" does not exist.', 140, $this->source); })()), 'form_end');
                echo "  

        ";
            }
            // line 143
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sale_list'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 146
    public function block_table_thead_tr($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_thead_tr"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_thead_tr"));

        // line 147
        echo " 
    ";
        // line 148
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["arr_sale_list"]) || array_key_exists("arr_sale_list", $context) ? $context["arr_sale_list"] : (function () { throw new RuntimeError('Variable "arr_sale_list" does not exist.', 148, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["sale_list"]) {
            // line 149
            echo "        ";
            if ($context["sale_list"]) {
                // line 150
                echo "            <th>№ Детали</th>
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
            // line 162
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sale_list'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 166
    public function block_tbody($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tbody"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tbody"));

        // line 167
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["arr_sale_list"]) || array_key_exists("arr_sale_list", $context) ? $context["arr_sale_list"] : (function () { throw new RuntimeError('Variable "arr_sale_list" does not exist.', 167, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["value_sale_list"]) {
            // line 168
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["value_sale_list"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sale_list"]) {
                echo "       
            <tr>
                <td>";
                // line 170
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sale_list"], "getIdInvoice", [], "method", false, false, false, 170), "getIdDetails", [], "method", false, false, false, 170), "getPartNumbers", [], "method", false, false, false, 170), "html", null, true);
                echo "</td>

                <td>";
                // line 172
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sale_list"], "getIdInvoice", [], "method", false, true, false, 172), "getIdDetails", [], "method", false, true, false, 172), "getIdPartName", [], "method", false, true, false, 172), "getPartName", [], "method", true, true, false, 172)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sale_list"], "getIdInvoice", [], "method", false, true, false, 172), "getIdDetails", [], "method", false, true, false, 172), "getIdPartName", [], "method", false, true, false, 172), "getPartName", [], "method", false, false, false, 172), "")) : ("")), "html", null, true);
                echo "</td>

                <td>";
                // line 174
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sale_list"], "getIdInvoice", [], "method", false, true, false, 174), "getIdDetails", [], "method", false, true, false, 174), "getIdCarBrand", [], "method", false, true, false, 174), "getCarBrand", [], "method", true, true, false, 174)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sale_list"], "getIdInvoice", [], "method", false, true, false, 174), "getIdDetails", [], "method", false, true, false, 174), "getIdCarBrand", [], "method", false, true, false, 174), "getCarBrand", [], "method", false, false, false, 174), "")) : ("")), "html", null, true);
                echo "</td>

                <td>";
                // line 176
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sale_list"], "getIdInvoice", [], "method", false, true, false, 176), "getIdDetails", [], "method", false, true, false, 176), "getIdSide", [], "method", false, true, false, 176), "getSide", [], "method", true, true, false, 176)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sale_list"], "getIdInvoice", [], "method", false, true, false, 176), "getIdDetails", [], "method", false, true, false, 176), "getIdSide", [], "method", false, true, false, 176), "getSide", [], "method", false, false, false, 176), "")) : ("")), "html", null, true);
                echo "</td>

                <td>";
                // line 178
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sale_list"], "getIdInvoice", [], "method", false, true, false, 178), "getIdDetails", [], "method", false, true, false, 178), "getIdAxle", [], "method", false, true, false, 178), "getAxle", [], "method", true, true, false, 178)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sale_list"], "getIdInvoice", [], "method", false, true, false, 178), "getIdDetails", [], "method", false, true, false, 178), "getIdAxle", [], "method", false, true, false, 178), "getAxle", [], "method", false, false, false, 178), "")) : ("")), "html", null, true);
                echo "</td>

                <td>";
                // line 180
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sale_list"], "getQuantitySold", [], "method", false, false, false, 180), "html", null, true);
                echo "</td>

                <td>";
                // line 182
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sale_list"], "getIdInvoice", [], "method", false, false, false, 182), "getPrice", [], "method", false, false, false, 182) / 100) / twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 183
$context["sale_list"], "getIdInvoice", [], "method", false, false, false, 183), "getQuantity", [], "method", false, false, false, 183)) * twig_get_attribute($this->env, $this->source,                 // line 184
$context["sale_list"], "getQuantitySold", [], "method", false, false, false, 184)), 2, ".", ""), "html", null, true);
                echo "</td>

                <td>";
                // line 186
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sale_list"], "getQuantitySold", [], "method", false, false, false, 186), "html", null, true);
                echo "</td>

                <td>";
                // line 188
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["sale_list"], "getPriceSold", [], "method", false, false, false, 188) / 100), 2, ".", ""), "html", null, true);
                echo "</td>      

                <form action=\"/edit_sold_price\" name=\"edit_sold_price\" method=\"post\">

                    <td><button class=\"edit\" type=\"submit\" name=\"edit_sold_price\" value=\"";
                // line 192
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sale_list"], "getIdInvoice", [], "method", false, false, false, 192), "getId", [], "method", false, false, false, 192), "html", null, true);
                echo "\">Изменить</button></td>
                                    
                </form>

                <form action=\"/delete_sale_list\" name=\"delete_sale_list\" method=\"post\">

                    <td><button class=\"delete\" type=\"submit\" name=\"delete_sale_list\" value=\"";
                // line 198
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sale_list"], "getIdInvoice", [], "method", false, false, false, 198), "getId", [], "method", false, false, false, 198), "html", null, true);
                echo "\">Удалить</button></td>
                                    
                </form>
            </tr> 
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sale_list'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 202
            echo "    
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_sale_list'], $context['_parent'], $context['loop']);
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
        return array (  652 => 202,  641 => 198,  632 => 192,  625 => 188,  620 => 186,  615 => 184,  614 => 183,  613 => 182,  608 => 180,  603 => 178,  598 => 176,  593 => 174,  588 => 172,  583 => 170,  575 => 168,  570 => 167,  560 => 166,  549 => 163,  543 => 162,  529 => 150,  526 => 149,  522 => 148,  519 => 147,  509 => 146,  495 => 143,  489 => 140,  485 => 138,  483 => 137,  478 => 135,  473 => 133,  469 => 132,  465 => 131,  460 => 129,  456 => 128,  452 => 127,  447 => 125,  443 => 124,  439 => 123,  434 => 121,  430 => 120,  426 => 119,  421 => 117,  416 => 115,  412 => 113,  409 => 112,  406 => 111,  401 => 110,  391 => 109,  379 => 105,  370 => 102,  363 => 100,  358 => 98,  355 => 97,  353 => 96,  348 => 94,  343 => 93,  337 => 92,  335 => 91,  329 => 90,  324 => 88,  319 => 87,  313 => 86,  311 => 85,  305 => 84,  299 => 82,  290 => 80,  286 => 79,  281 => 78,  275 => 77,  273 => 76,  267 => 75,  261 => 73,  255 => 72,  253 => 71,  247 => 70,  244 => 69,  241 => 68,  238 => 67,  235 => 66,  232 => 65,  227 => 63,  222 => 60,  221 => 59,  216 => 57,  215 => 56,  210 => 54,  194 => 41,  189 => 39,  184 => 37,  179 => 35,  174 => 33,  169 => 31,  164 => 29,  159 => 27,  154 => 25,  139 => 12,  134 => 11,  131 => 10,  121 => 9,  102 => 7,  83 => 5,  64 => 3,  41 => 1,);
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
            {{ form_start(form_sold, {'action': path('sold_price')}) }}
            {#{{ dump(arr_sale_list[0].getDateSold()) }}#}
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
    {% else %}

    <h2>Для продолжения продажи выберите прайс в меню или завершите сделку</h2>  

    {% endfor %}               

{% endblock form_save_edit_sales %}

{% block form_search %}
    {% for sale_list in arr_sale_list %}
        {% if sale_list %}
            {% set total_amount_transaction = (total_amount_transaction / 100) %}


            <th>Цена общая - {{ total_amount_transaction }}</th>

            {{ form_start(form_complete_sales, {'action': path('complete_sales')}) }}

                <th>{{ form_label(form_complete_sales.id_payment_method_complete_sales) }}<br>
                {{ form_widget(form_complete_sales.id_payment_method_complete_sales) }}
                {{ form_errors(form_complete_sales.id_payment_method_complete_sales) }}</th>   
                
                <th>{{ form_label(form_complete_sales.receipt_change_complete_sales) }}<br>
                {{ form_widget(form_complete_sales.receipt_change_complete_sales) }}
                {{ form_errors(form_complete_sales.receipt_change_complete_sales) }}</th>   

                <th>{{ form_label(form_complete_sales.receipt_number_complete_sales) }}<br>
                {{ form_widget(form_complete_sales.receipt_number_complete_sales) }}
                {{ form_errors(form_complete_sales.receipt_number_complete_sales) }}</th>   

                <th>{{ form_label(form_complete_sales.receipt_date_complete_sales) }}<br>
                {{ form_widget(form_complete_sales.receipt_date_complete_sales) }}
                {{ form_errors(form_complete_sales.receipt_date_complete_sales) }}</th>  

                 {{ form_widget(form_complete_sales.hidden_complete_sales, {value : total_amount_transaction}) }}
                                                    
                <th>{{ form_widget(form_complete_sales.button_complete_sales
                    , {'label': 'Завершить сделку', 'attr': {'class': 'save'} }) }}</th>
            
            {{ form_end(form_complete_sales) }}  

        {% endif %}
    {% endfor %}
{% endblock form_search %}

{% block table_thead_tr %}
 
    {% for sale_list in arr_sale_list %}
        {% if sale_list %}
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
        {% endif %}
    {% endfor %}

{% endblock table_thead_tr %}

{% block tbody %}
    {% for value_sale_list in arr_sale_list %}
        {% for sale_list in value_sale_list %}       
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

                <form action=\"/edit_sold_price\" name=\"edit_sold_price\" method=\"post\">

                    <td><button class=\"edit\" type=\"submit\" name=\"edit_sold_price\" value=\"{{ sale_list.getIdInvoice().getId() }}\">Изменить</button></td>
                                    
                </form>

                <form action=\"/delete_sale_list\" name=\"delete_sale_list\" method=\"post\">

                    <td><button class=\"delete\" type=\"submit\" name=\"delete_sale_list\" value=\"{{ sale_list.getIdInvoice().getId() }}\">Удалить</button></td>
                                    
                </form>
            </tr> 
        {% endfor %}    
    {% endfor %}
{% endblock tbody %}", "price/sold.html.twig", "/var/www/templates/price/sold.html.twig");
    }
}
